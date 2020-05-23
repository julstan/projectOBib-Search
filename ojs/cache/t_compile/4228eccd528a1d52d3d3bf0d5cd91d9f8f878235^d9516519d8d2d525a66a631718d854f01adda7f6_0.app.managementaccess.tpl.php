<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 11:17:25
  from 'app:managementaccess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8ea257c9896_59741488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9516519d8d2d525a66a631718d854f01adda7f6' => 
    array (
      0 => 'app:managementaccess.tpl',
      1 => 1590153806,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:management/accessUsers.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5ec8ea257c9896_59741488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"navigation.access"), 0, false);
?>


<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
<div id="settings-access-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
	<tabs>
		<tab id="users" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.users"),$_smarty_tpl ) );?>
">
			<?php $_smarty_tpl->_subTemplateRender("app:management/accessUsers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</tab>
		<tab id="roles" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.roles"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"users-and-roles",'section'=>"roles",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'rolesUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.roles.UserGroupGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"roleGridContainer",'url'=>$_smarty_tpl->tpl_vars['rolesUrl']->value),$_smarty_tpl ) );?>

		</tab>
		<tab id="access" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.siteAccessOptions.siteAccessOptions"),$_smarty_tpl ) );?>
">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"users-and-roles",'section'=>"site-access",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<pkp-form
				v-bind="components.<?php echo @constant('FORM_USER_ACCESS');?>
"
				@set="set"
			/>
		</tab>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::access"),$_smarty_tpl ) );?>

	</tabs>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	pkp.registry.init('settings-access-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'SettingsContainer', <?php echo json_encode($_smarty_tpl->tpl_vars['settingsData']->value);?>
);
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
