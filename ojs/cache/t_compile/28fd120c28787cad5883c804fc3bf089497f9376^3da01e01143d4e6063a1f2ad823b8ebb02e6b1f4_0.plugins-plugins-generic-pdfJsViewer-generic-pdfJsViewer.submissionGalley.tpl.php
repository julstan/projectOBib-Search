<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 15:35:11
  from 'plugins-plugins-generic-pdfJsViewer-generic-pdfJsViewer:submissionGalley.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecd1b0fad5127_82837219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3da01e01143d4e6063a1f2ad823b8ebb02e6b1f4' => 
    array (
      0 => 'plugins-plugins-generic-pdfJsViewer-generic-pdfJsViewer:submissionGalley.tpl',
      1 => 1586500796,
      2 => 'plugins-plugins-generic-pdfJsViewer-generic-pdfJsViewer',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecd1b0fad5127_82837219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pdfUrl", null);
if ($_smarty_tpl->tpl_vars['isLatestPublication']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"download",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['bestId']->value,$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value),$_smarty_tpl->tpl_vars['galleyFile']->value->getId() )),'escape'=>false),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"download",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['bestId']->value,'version',$_smarty_tpl->tpl_vars['galleyPublication']->value->getId(),$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value),$_smarty_tpl->tpl_vars['galleyFile']->value->getId() )),'escape'=>false),$_smarty_tpl ) );
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "parentUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['submissionNoun']->value,'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['bestId']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['displayTemplateResource']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['submission']->value->getLocalizedTitle(),'parentUrl'=>$_smarty_tpl->tpl_vars['parentUrl']->value,'pdfUrl'=>$_smarty_tpl->tpl_vars['pdfUrl']->value), 0, true);
}
}
