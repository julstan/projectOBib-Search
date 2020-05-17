<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-03 17:54:28
  from 'app:managementcontext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eaf05547ce3c3_99976202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40904e1188cd43a9d1a1b6c8600463d2d9ed96bd' => 
    array (
      0 => 'app:managementcontext.tpl',
      1 => 1586500703,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:controllers/notification/inPlaceNotificationContent.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5eaf05547ce3c3_99976202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"manager.setup"), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['newVersionAvailable']->value) {?>
	<div class="pkp_notification">
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "notificationContents", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"site.upgradeAvailable.manager",'currentVersion'=>$_smarty_tpl->tpl_vars['currentVersion']->value,'latestVersion'=>$_smarty_tpl->tpl_vars['latestVersion']->value,'siteAdminName'=>$_smarty_tpl->tpl_vars['siteAdmin']->value->getFullName(),'siteAdminEmail'=>$_smarty_tpl->tpl_vars['siteAdmin']->value->getEmail()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotificationContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>uniqid("upgradeWarning-"),'notificationStyleClass'=>"notifyWarning",'notificationTitle'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "common.warning" )),'notificationContents'=>$_smarty_tpl->tpl_vars['notificationContents']->value), 0, false);
?>
	</div>
<?php }?>

<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
<div id="settings-context-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
	<tabs>
		<tab id="masthead" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.masthead"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/journal-settings",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<pkp-form
				v-bind="components.<?php echo @constant('FORM_MASTHEAD');?>
"
				@set="set"
			/>
		</tab>
		<tab id="contact" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.contact"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/journal-settings",'section'=>"contact",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<pkp-form
				v-bind="components.<?php echo @constant('FORM_CONTACT');?>
"
				@set="set"
			/>
		</tab>
		<tab id="sections" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"section.sections"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/journal-settings",'section'=>"sections",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'sectionsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.sections.SectionGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"sectionsGridContainer",'url'=>$_smarty_tpl->tpl_vars['sectionsGridUrl']->value),$_smarty_tpl ) );?>

		</tab>
		<tab id="categories" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"grid.category.categories"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/journal-settings",'section'=>"categories",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'categoriesUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.category.CategoryCategoryGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"categoriesContainer",'url'=>$_smarty_tpl->tpl_vars['categoriesUrl']->value),$_smarty_tpl ) );?>

		</tab>
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
