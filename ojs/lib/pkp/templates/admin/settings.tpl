{**
 * templates/admin/settings.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Administration settings page.
 *}
{include file="common/header.tpl" pageTitle="admin.settings"}

{assign var="uuid" value=""|uniqid|escape}
<div id="settings-admin-{$uuid}">
	<tabs>
		<tab id="setup" label="{translate key="admin.siteSetup"}">
			<tabs :is-side-tabs="true">
				<tab id="settings" label="{translate key="admin.settings"}">
					<pkp-form
						v-bind="components.{$smarty.const.FORM_SITE_CONFIG}"
						@set="set"
					/>
				</tab>
				<tab id="info" label="{translate key="manager.setup.information"}">
					<pkp-form
						v-bind="components.{$smarty.const.FORM_SITE_INFO}"
						@set="set"
					/>
				</tab>
				<tab id="languages" label="{translate key="common.languages"}">
					{capture assign=languagesUrl}{url router=$smarty.const.ROUTE_COMPONENT component="grid.admin.languages.AdminLanguageGridHandler" op="fetchGrid" escape=false}{/capture}
					{load_url_in_div id="languageGridContainer" url=$languagesUrl}
				</tab>
				<tab id="nav" label="{translate key="manager.navigationMenus"}">
					{capture assign=navigationMenusGridUrl}{url router=$smarty.const.ROUTE_COMPONENT component="grid.navigationMenus.NavigationMenusGridHandler" op="fetchGrid" escape=false}{/capture}
					{load_url_in_div id="navigationMenuGridContainer" url=$navigationMenusGridUrl}
					{capture assign=navigationMenuItemsGridUrl}{url router=$smarty.const.ROUTE_COMPONENT component="grid.navigationMenus.NavigationMenuItemsGridHandler" op="fetchGrid" escape=false}{/capture}
					{load_url_in_div id="navigationMenuItemsGridContainer" url=$navigationMenuItemsGridUrl}
				</tab>
				{call_hook name="Template::Settings::admin::setup"}
			</tabs>
		</tab>
		<tab id="appearance" label="{translate key="manager.website.appearance"}">
			<tabs :is-side-tabs="true">
				<tab id="theme" label="{translate key="manager.setup.theme"}">
					<theme-form
						v-bind="components.{$smarty.const.FORM_THEME}"
						@set="set"
					/>
				</tab>
				<tab id="setup" label="{translate key="navigation.setup"}">
					<pkp-form
						v-bind="components.{$smarty.const.FORM_SITE_APPEARANCE}"
						@set="set"
					/>
				</tab>
				{call_hook name="Template::Settings::admin::appearance"}
			</tabs>
		</tab>
		<tab id="plugins" label="{translate key="common.plugins"}">
			{capture assign=pluginGridUrl}{url router=$smarty.const.ROUTE_COMPONENT component="grid.admin.plugins.AdminPluginGridHandler" op="fetchGrid" escape=false}{/capture}
			{load_url_in_div id="pluginGridContainer" url=$pluginGridUrl}
		</tab>
		{call_hook name="Template::Settings::admin"}
	</tabs>
</div>
<script type="text/javascript">
	pkp.registry.init('settings-admin-{$uuid}', 'SettingsContainer', {$settingsData|json_encode});
</script>

{include file="common/footer.tpl"}
