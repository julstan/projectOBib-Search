<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 14:24:31
  from 'app:commonfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb2c89f740ed3_03937284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbcce7a01814639a93468a9fe1bef302b11672f4' => 
    array (
      0 => 'app:commonfooter.tpl',
      1 => 1586500703,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:common/footer.tpl' => 1,
  ),
),false)) {
function content_5eb2c89f740ed3_03937284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('brandImage', "templates/images/ojs_brand.png");
$_smarty_tpl->_assignInScope('packageKey', "common.software");
$_smarty_tpl->_assignInScope('pkpLink', "http://pkp.sfu.ca/ojs");
$_smarty_tpl->_subTemplateRender("core:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
