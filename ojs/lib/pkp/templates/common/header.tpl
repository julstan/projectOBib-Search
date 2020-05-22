{**
 * lib/pkp/templates/common/header.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Common site header.
 *}
<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{if !$pageTitleTranslated}{capture assign=pageTitleTranslated}{translate key=$pageTitle}{/capture}{/if}
{include file="core:common/headerHead.tpl"}
<body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}" dir="{$currentLocaleLangDir|escape|default:"ltr"}">
	<script type="text/javascript">
		// Initialise JS handler.
		$(function() {ldelim}
			$('body').pkpHandler(
				'$.pkp.controllers.SiteHandler',
				{ldelim}
					{if $isUserLoggedIn}
						inlineHelpState: {$initialHelpState},
					{/if}
					toggleHelpUrl: {url|json_encode page="user" op="toggleHelp" escape=false},
					toggleHelpOnText: {$toggleHelpOnText|json_encode},
					toggleHelpOffText: {$toggleHelpOffText|json_encode},
					{include file="controllers/notification/notificationOptions.tpl"}
				{rdelim});
		{rdelim});
	</script>
	<div class="pkp_structure_page">
		<header class="pkp_structure_head" role="banner">
			<div class="pkp_navigation" id="headerNavigationContainer">

				{* Logo or site title *}
				<div class="pkp_site_name">
					{if $currentContext && $multipleContexts}
						{capture assign=homeUrl}{url journal="index" router=$smarty.const.ROUTE_PAGE}{/capture}
					{else}
						{capture assign=homeUrl}{url page="index" router=$smarty.const.ROUTE_PAGE}{/capture}
					{/if}
					{if $displayPageHeaderLogo && is_array($displayPageHeaderLogo)}
						<a href="{$homeUrl}" class="is_img">
							<img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" {if $displayPageHeaderLogo.altText != ''}alt="{$displayPageHeaderLogo.altText|escape}"{/if}>
						</a>
					{else}
						<a href="{$homeUrl}" class="is_img">
							<img src="{$baseUrl}/templates/images/structure/logo.png">
						</a>
					{/if}
				</div>

				{* Primary navigation menu *}
				{if $isUserLoggedIn}
					<script type="text/javascript">
						// Attach the JS file tab handler.
						$(function() {ldelim}
							$('#navigationPrimary').pkpHandler(
									'$.pkp.controllers.MenuHandler');
						{rdelim});
					 </script>
					<ul id="navigationPrimary" class="pkp_navigation_primary pkp_nav_list" role="navigation" aria-label="{translate|escape key="common.navigation.site"}">

						{* Users with ONLY the reader role *}
						{if (count((array) $userRoles) === 1 && in_array(ROLE_ID_READER, (array) $userRoles))}
							<li>
								<a href="{url router=$smarty.const.ROUTE_PAGE page="submission" op="wizard"}">
									{translate key="author.submit"}
								</a>
							</li>
						{/if}

						{if array_intersect(array(ROLE_ID_MANAGER, ROLE_ID_SUB_EDITOR, ROLE_ID_ASSISTANT, ROLE_ID_REVIEWER, ROLE_ID_AUTHOR), (array)$userRoles)}
							<li>
								<a href="{url router=$smarty.const.ROUTE_PAGE page="submissions"}">
									{translate key="navigation.submissions"}
								</a>
							</li>
						{/if}

						{$appSpecificMenuItems}

						{if array_intersect(array(ROLE_ID_MANAGER), (array)$userRoles) && $currentContext && $currentContext->getData('enableAnnouncements')}
							<li>
								<a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="settings" path="announcements"}">
									{translate key="announcement.announcements"}
								</a>
							</li>
						{/if}

						{if array_intersect(array(ROLE_ID_MANAGER), (array)$userRoles)}
							<li aria-haspopup="true" aria-expanded="false">
								<a href="#">{translate key="navigation.settings"}</a>
								<ul>
									<li><a href="{$contextSettingsUrl}">{translate key="context.context"}</a></li>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="settings" path="website"}">{translate key="manager.website"}</a></li>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="settings" path="workflow"}">{translate key="manager.workflow"}</a></li>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="settings" path="distribution"}">{translate key="manager.distribution"}</a></li>
								</ul>
							</li>
							<li aria-haspopup="true" aria-expanded="false">
								<a href="#">{translate key="navigation.access"}</a>
								<ul>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="settings" path="access" anchor="users"}">{translate key="manager.users"}</a></li>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="settings" path="access" anchor="roles"}">{translate key="manager.roles"}</a></li>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="settings" path="access" anchor="access"}">{translate key="manager.siteAccessOptions.siteAccessOptions"}</a></li>
								</ul>
							</li>
							<li aria-haspopup="true" aria-expanded="false">
								<a href="#">{translate key="navigation.tools"}</a>
								<ul>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="tools" anchor="importexport"}">{translate key="navigation.tools.importExport"}</a></li>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="tools" anchor="statistics"}">{translate key="manager.statistics.reports"}</a></li>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="tools" anchor="permissions"}">{translate key="settings.libraryFiles.category.permissions"}</a></li>
								</ul>
							</li>
							<li aria-haspopup="true" aria-expanded="false">
								<a href="#">{translate key="navigation.tools.statistics"}</a>
								<ul>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="stats" op="publications"}">{translate key="common.publications"}</a></li>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="stats" op="editorial"}">{translate key="stats.editorialActivity"}</a></li>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="stats" op="users"}">{translate key="manager.users"}</a></li>
									<li><a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="tools" anchor="statistics"}">{translate key="manager.statistics.reports"}</a></li>
								</ul>
							</li>
						{/if}
						{if array_intersect(array(ROLE_ID_SITE_ADMIN), (array)$userRoles)}
							{if $currentContext && !array_intersect(array(ROLE_ID_MANAGER), (array)$userRoles)}
							<li>
								<a href="{url router=$smarty.const.ROUTE_PAGE page="management" op="access" anchor="users"}">
									{translate key="navigation.access"}
								</a>
							</li>
							{/if}
							<li>
								<a href="{if $multipleContexts}{url router=$smarty.const.ROUTE_PAGE context="index" page="admin" op="index"}{else}{url router=$smarty.const.ROUTE_PAGE page="admin" op="index"}{/if}">
									{translate key="navigation.admin"}
								</a>
							</li>
						{/if}
					</ul>
				{/if}

				{capture assign=fetchHeaderUrl}{url router=$smarty.const.ROUTE_COMPONENT component="page.PageHandler" op="userNavBackend" escape=false}{/capture}
				{load_url_in_div class="pkp_navigation_user" id="navigationUserWrapper" url=$fetchHeaderUrl}
			</div><!-- pkp_navigation -->
		</header>

		<div class="pkp_structure_content">

			<script type="text/javascript">
				// Attach the JS page handler to the main content wrapper.
				$(function() {ldelim}
					$('div.pkp_structure_main').pkpHandler('$.pkp.controllers.PageHandler');
				{rdelim});
			</script>

			<div class="pkp_structure_main" role="main">
				{** allow pages to provide their own titles **}
				{if !$suppressPageTitle}
					<div class="pkp_page_title">
						<h1>{$pageTitleTranslated}</h1>
					</div>
				{/if}
