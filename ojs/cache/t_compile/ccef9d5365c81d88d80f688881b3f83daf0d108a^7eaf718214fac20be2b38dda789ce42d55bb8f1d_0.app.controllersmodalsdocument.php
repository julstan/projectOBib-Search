<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 22:22:11
  from 'app:controllersmodalsdocument' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec83473ead9a9_37436932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eaf718214fac20be2b38dda789ce42d55bb8f1d' => 
    array (
      0 => 'app:controllersmodalsdocument',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec83473ead9a9_37436932 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"editorial-workflow",'section'=>"submission-library",'class'=>"pkp_help_modal"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'submissionLibraryGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.files.submissionDocuments.SubmissionDocumentsFilesGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"submissionLibraryGridContainer",'url'=>$_smarty_tpl->tpl_vars['submissionLibraryGridUrl']->value),$_smarty_tpl ) );?>

<?php }
}
