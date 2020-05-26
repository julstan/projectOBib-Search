<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 15:31:29
  from 'app:adminsystemInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecd1a31e94662_47603784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec004744317f29c2a6de74168cf42e47da599ebd' => 
    array (
      0 => 'app:adminsystemInfo.tpl',
      1 => 1590493729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5ecd1a31e94662_47603784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\saraf\\xampp\\htdocs\\projectOBib-Search\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('pageTitle', "admin.systemInformation");
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="pkp_page_content pkp_page_admin">

	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.currentVersion"),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['currentVersion']->value->getVersionString(false);?>
 (<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['currentVersion']->value->getDateInstalled(),$_smarty_tpl->tpl_vars['datetimeFormatLong']->value);?>
)</h3>

	<?php if ($_smarty_tpl->tpl_vars['latestVersionInfo']->value) {?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.latest"),$_smarty_tpl ) );?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['release'] ));?>
 (<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['latestVersionInfo']->value['date'],$_smarty_tpl->tpl_vars['dateFormatLong']->value);?>
)</p>
		<?php if ($_smarty_tpl->tpl_vars['currentVersion']->value->compare($_smarty_tpl->tpl_vars['latestVersionInfo']->value['version']) < 0) {?>
			<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.updateAvailable"),$_smarty_tpl ) );?>
</strong>: <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['package'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.downloadPackage"),$_smarty_tpl ) );?>
</a> | <?php if ($_smarty_tpl->tpl_vars['latestVersionInfo']->value['patch']) {?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['patch'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.downloadPatch"),$_smarty_tpl ) );?>
</a><?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.downloadPatch"),$_smarty_tpl ) );
}?> | <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['info'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.moreInfo"),$_smarty_tpl ) );?>
</a></p>
		<?php } else { ?>
			<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.upToDate"),$_smarty_tpl ) );?>
</strong></p>
		<?php }?>
	<?php } else { ?>
	<p><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('versionCheck'=>1),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.checkForUpdates"),$_smarty_tpl ) );?>
</a></p>
	<?php }?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'versionInfoGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.admin.systemInfo.VersionInfoGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"versionInfoGridContainer",'url'=>$_smarty_tpl->tpl_vars['versionInfoGridUrl']->value),$_smarty_tpl ) );?>


	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'serverInfoGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.admin.systemInfo.ServerInfoGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"serverInfoGridContainer",'url'=>$_smarty_tpl->tpl_vars['serverInfoGridUrl']->value),$_smarty_tpl ) );?>


	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'systemInfoGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.admin.systemInfo.SystemInfoGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"systemInfoGridContainer",'url'=>$_smarty_tpl->tpl_vars['systemInfoGridUrl']->value),$_smarty_tpl ) );?>


	<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"phpinfo"),$_smarty_tpl ) );?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.phpInfo"),$_smarty_tpl ) );?>
</a>
</div><!-- .pkp_page_content -->

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
