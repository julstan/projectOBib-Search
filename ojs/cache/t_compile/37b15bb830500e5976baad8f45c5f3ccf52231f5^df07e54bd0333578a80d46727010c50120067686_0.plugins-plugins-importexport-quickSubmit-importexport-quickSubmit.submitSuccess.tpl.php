<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 13:07:45
  from 'plugins-plugins-importexport-quickSubmit-importexport-quickSubmit:submitSuccess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eccf88124e471_94019760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df07e54bd0333578a80d46727010c50120067686' => 
    array (
      0 => 'plugins-plugins-importexport-quickSubmit-importexport-quickSubmit:submitSuccess.tpl',
      1 => 1590490860,
      2 => 'plugins-plugins-importexport-quickSubmit-importexport-quickSubmit',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5eccf88124e471_94019760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pageTitle', "plugins.importexport.quickSubmit.success");
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "submissionUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"workflow",'op'=>"access",'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'contextId'=>"submission",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="pkp_page_content pkp_successQuickSubmit">
	<p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.quickSubmit.successDescription"),$_smarty_tpl ) );?>
  
	</p>
	<p> 
		<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array(),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.quickSubmit.successReturn"),$_smarty_tpl ) );?>

		</a>
	</p>
	<p> 
		<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"workflow",'op'=>"access",'path'=>$_smarty_tpl->tpl_vars['submissionId']->value,'escape'=>false),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.quickSubmit.goToSubmission"),$_smarty_tpl ) );?>

		</a>
	</p>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
