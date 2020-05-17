<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-03 14:26:25
  from 'app:managementwebsite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eaed4916bd5e6_86941856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8ae30b2471f92538d4bd2d211151910b9455c3f' => 
    array (
      0 => 'app:managementwebsite.tpl',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5eaed4916bd5e6_86941856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"manager.website.title"), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
<div id="settings-context-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
	<tabs>
		<tab id="appearance" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.website.appearance"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/website-settings",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<tabs :is-side-tabs="true">
				<tab id="theme" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.theme"),$_smarty_tpl ) );?>
">
					<theme-form
						v-bind="components.<?php echo @constant('FORM_THEME');?>
"
						@set="set"
					/>
				</tab>
				<tab id="setup" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.setup"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_APPEARANCE_SETUP');?>
"
						@set="set"
					/>
				</tab>
				<tab id="advanced" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.advanced"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_APPEARANCE_ADVANCED');?>
"
						@set="set"
					/>
				</tab>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::website::appearance"),$_smarty_tpl ) );?>

			</tabs>
		</tab>
		<tab id="setup" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.setup"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/website-settings",'section'=>"setup",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<tabs :is-side-tabs="true">
				<tab id="information" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.website.information"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_INFORMATION');?>
"
						@set="set"
					/>
				</tab>
				<tab id="languages" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.languages"),$_smarty_tpl ) );?>
">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'languagesUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.languages.ManageLanguageGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"languageGridContainer",'url'=>$_smarty_tpl->tpl_vars['languagesUrl']->value),$_smarty_tpl ) );?>

				</tab>
				<tab id="navigationMenus" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.navigationMenus"),$_smarty_tpl ) );?>
">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'navigationMenusGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.navigationMenus.NavigationMenusGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"navigationMenuGridContainer",'url'=>$_smarty_tpl->tpl_vars['navigationMenusGridUrl']->value),$_smarty_tpl ) );?>

					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'navigationMenuItemsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.navigationMenus.NavigationMenuItemsGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"navigationMenuItemsGridContainer",'url'=>$_smarty_tpl->tpl_vars['navigationMenuItemsGridUrl']->value),$_smarty_tpl ) );?>

				</tab>
				<tab id="announcements" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.announcements"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_ANNOUNCEMENT_SETTINGS');?>
"
						@set="set"
					/>
				</tab>
				<tab id="lists" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.lists"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_LISTS');?>
"
						@set="set"
					/>
				</tab>
				<tab id="privacy" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.privacyStatement"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_PRIVACY');?>
"
						@set="set"
					/>
				</tab>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::website::setup"),$_smarty_tpl ) );?>

			</tabs>
		</tab>
		<tab id="plugins" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.plugins"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/website-settings",'section'=>"plugins",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<tabs :options="{ useUrlFragment: false }">
				<tab id="installedPlugins" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.installed"),$_smarty_tpl ) );?>
">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'pluginGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.plugins.SettingsPluginGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"pluginGridContainer",'url'=>$_smarty_tpl->tpl_vars['pluginGridUrl']->value),$_smarty_tpl ) );?>

				</tab>
				<tab id="pluginGallery" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.pluginGallery"),$_smarty_tpl ) );?>
">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'pluginGalleryGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.plugins.PluginGalleryGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"pluginGalleryGridContainer",'url'=>$_smarty_tpl->tpl_vars['pluginGalleryGridUrl']->value),$_smarty_tpl ) );?>

				</tab>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::website::plugins"),$_smarty_tpl ) );?>

			</tabs>
		</tab>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::website"),$_smarty_tpl ) );?>

	</tabs>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	pkp.registry.init('settings-context-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'SettingsContainer', <?php echo json_encode($_smarty_tpl->tpl_vars['settingsData']->value);?>
);
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
