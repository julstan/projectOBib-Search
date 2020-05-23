<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 11:17:26
  from 'app:managementaccessUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8ea2671da12_46503664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b0b7571984b30fffe6b680757d1ff1bd14e2e38' => 
    array (
      0 => 'app:managementaccessUsers.tpl',
      1 => 1590153806,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8ea2671da12_46503664 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"users-and-roles",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'usersUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.user.UserGridHandler",'op'=>"fetchGrid",'oldUserId'=>$_smarty_tpl->tpl_vars['oldUserId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"userGridContainer",'url'=>$_smarty_tpl->tpl_vars['usersUrl']->value),$_smarty_tpl ) );?>

<?php }
}
