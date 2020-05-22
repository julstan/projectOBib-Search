<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 22:13:01
  from 'app:controllersgridissuesissu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8324d506105_07674782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b06b9a4eb34b6b4935d85dd6486471113f5b7d2' => 
    array (
      0 => 'app:controllersgridissuesissu',
      1 => 1586500703,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8324d506105_07674782 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"issue-management",'section'=>"edit-issue-toc",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

<?php echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#issueTocForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'issueTocGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.toc.TocGridHandler",'op'=>"fetchGrid",'issueId'=>$_smarty_tpl->tpl_vars['issue']->value->getId(),'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"issueTocGridContainer",'url'=>$_smarty_tpl->tpl_vars['issueTocGridUrl']->value),$_smarty_tpl ) );?>

<?php }
}
