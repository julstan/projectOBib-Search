<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 22:27:50
  from 'app:frontendpagesmessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec835c6c18505_14479005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a0b83497d74c0106f788560158077e321405c52' => 
    array (
      0 => 'app:frontendpagesmessage.tpl',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5ec835c6c18505_14479005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page page_message">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>$_smarty_tpl->tpl_vars['pageTitle']->value), 0, false);
?>
	<h1>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );?>

	</h1>
	<div class="description">
		<?php if ($_smarty_tpl->tpl_vars['messageTranslated']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['messageTranslated']->value;?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['message']->value),$_smarty_tpl ) );?>

		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['backLink']->value) {?>
		<div class="cmp_back_link">
			<a href="<?php echo $_smarty_tpl->tpl_vars['backLink']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['backLinkLabel']->value),$_smarty_tpl ) );?>
</a>
		</div>
	<?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
