<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-25 13:06:46
  from 'app:managementtoolsstatistics' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecba6c69d6152_65960302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db4b6fc1addbbe73f199ba90a5023b2b1a43e065' => 
    array (
      0 => 'app:managementtoolsstatistics',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:management/tools/form/statisticsSettingsForm.tpl' => 1,
  ),
),false)) {
function content_5ecba6c69d6152_65960302 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_page_content pkp_page_statistics">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"tools",'section'=>"statistics",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


	<?php if ($_smarty_tpl->tpl_vars['showMetricTypeSelector']->value || $_smarty_tpl->tpl_vars['appSettings']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("app:management/tools/form/statisticsSettingsForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>

	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.statistics.reports"),$_smarty_tpl ) );?>
</h3>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.statistics.reports.description"),$_smarty_tpl ) );?>
</p>

	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reportPlugins']->value, 'plugin', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['plugin']->value) {
?>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"tools",'path'=>"report",'pluginName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getName() ))),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getDisplayName() ));?>
</a></li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>

	<p><a class="pkp_button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"tools",'path'=>"reportGenerator"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.statistics.reports.generateReport"),$_smarty_tpl ) );?>
</a></p>
</div>
<?php }
}
