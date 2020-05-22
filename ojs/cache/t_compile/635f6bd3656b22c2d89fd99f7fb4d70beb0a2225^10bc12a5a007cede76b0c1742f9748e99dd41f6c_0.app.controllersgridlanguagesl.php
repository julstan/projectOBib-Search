<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 14:24:17
  from 'app:controllersgridlanguagesl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb2c891add584_70884022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10bc12a5a007cede76b0c1742f9748e99dd41f6c' => 
    array (
      0 => 'app:controllersgridlanguagesl',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb2c891add584_70884022 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('cellId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "cell-",$_smarty_tpl->tpl_vars['id']->value )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('cellId', '');
}?>
<span <?php if ($_smarty_tpl->tpl_vars['cellId']->value) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cellId']->value ));?>
" <?php }?>class="gridCellContainer">
	<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

</span>
<?php if ($_smarty_tpl->tpl_vars['incomplete']->value) {?>
	<span class="pkp_form_error">*</span>
<?php }?>


<?php }
}
