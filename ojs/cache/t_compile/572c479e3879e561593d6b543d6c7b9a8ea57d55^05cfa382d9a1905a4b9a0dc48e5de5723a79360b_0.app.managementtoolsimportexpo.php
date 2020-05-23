<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 17:16:52
  from 'app:managementtoolsimportexpo' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec93e648cea31_16292056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05cfa382d9a1905a4b9a0dc48e5de5723a79360b' => 
    array (
      0 => 'app:managementtoolsimportexpo',
      1 => 1590244071,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec93e648cea31_16292056 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_page_content pkp_page_importexport_plugins">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"tools",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'plugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
?>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"importexport",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "plugin",$_smarty_tpl->tpl_vars['plugin']->value->getName() ))),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getDisplayName() ));?>
</a>:&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getDescription() ));?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }
}
