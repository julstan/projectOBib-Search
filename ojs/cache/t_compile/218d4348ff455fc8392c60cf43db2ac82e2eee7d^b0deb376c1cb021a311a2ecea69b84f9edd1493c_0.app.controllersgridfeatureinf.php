<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 11:28:35
  from 'app:controllersgridfeatureinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8ecc3b76869_45764251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0deb376c1cb021a311a2ecea69b84f9edd1493c' => 
    array (
      0 => 'app:controllersgridfeatureinf',
      1 => 1590153803,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
    'app:common/loadingContainer.tpl' => 1,
  ),
),false)) {
function content_5ec8ecc3b76869_45764251 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['iterator']->value->getCount()) {?>
	<div class="gridPagingScrolling">
		<?php if ($_smarty_tpl->tpl_vars['moreItemsLinkAction']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['moreItemsLinkAction']->value), 0, false);
?>
		<?php }?>
		<span class="item_count">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.items.shownTotal",'shown'=>$_smarty_tpl->tpl_vars['shown']->value,'total'=>$_smarty_tpl->tpl_vars['iterator']->value->getCount()),$_smarty_tpl ) );?>

		</span>
		<?php $_smarty_tpl->_subTemplateRender("app:common/loadingContainer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
<?php }
}
}
