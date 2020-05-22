{**
 * templates/admin/contextSettings.tpl
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Admin page for configuring high-level details about a context.
 *
 * @uses $editContext Context The context that is being edited.
 *}
{include file="common/header.tpl" pageTitle="manager.settings.wizard"}

{assign var="uuid" value=""|uniqid|escape}
<div id="settings-admin-{$uuid}">
	<tabs>
		<tab id="setup" label="{translate key="manager.setup"}">
			<tabs>
				<tab id="context" label="{translate key="context.context"}">
					<pkp-form
						v-bind="components.{$smarty.const.FORM_CONTEXT}"
						@set="set"
					/>
				</tab>
				<tab id="appearance" label="{translate key="manager.website.appearance"}">
					<theme-form
						v-bind="components.{$smarty.const.FORM_THEME}"
						@set="set"
					/>
				</tab>
				<tab id="languages" label="{translate key="common.languages"}">
					{capture assign=languagesUrl}{url router=$smarty.const.ROUTE_COMPONENT context=$editContext->getPath() component="grid.settings.languages.ManageLanguageGridHandler" op="fetchGrid" escape=false}{/capture}
					{load_url_in_div id="languageGridContainer" url=$languagesUrl}
				</tab>
				<tab id="indexing" label="{translate key="manager.setup.searchEngineIndexing"}">
					<pkp-form
						v-bind="components.{$smarty.const.FORM_SEARCH_INDEXING}"
						@set="set"
					/>
				</tab>
				{call_hook name="Template::Settings::admin::contextSettings::setup"}
			</tabs>
		</tab>
		<tab id="plugins" label="{translate key="common.plugins"}">
			<tabs>
				<tab id="installed" label="{translate key="manager.plugins.installed"}">
					{capture assign=pluginGridUrl}{url router=$smarty.const.ROUTE_COMPONENT context=$editContext->getPath() component="grid.settings.plugins.SettingsPluginGridHandler" op="fetchGrid" escape=false}{/capture}
					{load_url_in_div id="pluginGridContainer" url=$pluginGridUrl}
				</tab>
				<tab id="gallery" label="{translate key="manager.plugins.pluginGallery"}">
					{capture assign=pluginGalleryGridUrl}{url router=$smarty.const.ROUTE_COMPONENT context=$editContext->getPath() component="grid.plugins.PluginGalleryGridHandler" op="fetchGrid" escape=false}{/capture}
					{load_url_in_div id="pluginGalleryGridContainer" url=$pluginGalleryGridUrl}
				</tab>
				{call_hook name="Template::Settings::admin::contextSettings::plugins"}
			</tabs>
		</tab>
		<tab id="users" label="{translate key="manager.users"}">
			{capture assign=usersUrl}{url router=$smarty.const.ROUTE_COMPONENT context=$editContext->getPath() component="grid.settings.user.UserGridHandler" op="fetchGrid" escape=false}{/capture}
			{load_url_in_div id="userGridContainer" url=$usersUrl}
		</tab>
		{call_hook name="Template::Settings::admin::contextSettings"}
	</tabs>
</div>
<script type="text/javascript">
	pkp.registry.init('settings-admin-{$uuid}', 'SettingsContainer', {$settingsData|json_encode});
</script>

{include file="common/footer.tpl"}
