<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 11:12:07
  from 'app:commonhelpLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8e8e76dc051_89449408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '126b0f3605018c83184bd163002ca8cf86d7e331' => 
    array (
      0 => 'app:commonhelpLink.tpl',
      1 => 1590153803,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8e8e76dc051_89449408 (Smarty_Internal_Template $_smarty_tpl) {
?><button class="requestHelpPanel pkp_help_link <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['helpClass']->value ));?>
" data-topic="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['helpFile']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['helpSection']->value) {?> data-section="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['helpSection']->value ));?>
"<?php }?>>
	<span class="fa fa-info-circle pkpIcon--inline" aria-hidden="true"></span>
	<?php if ($_smarty_tpl->tpl_vars['helpText']->value) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['text']->value ));?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['helpTextKey']->value),$_smarty_tpl ) );?>

	<?php }?>
</button>
<?php }
}
