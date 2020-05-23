<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 15:28:49
  from 'plugins-plugins-generic-customBlockManager-generic-customBlockManager:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec7d391344c02_96747917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c17bab62886b68f2ad7e7814c65c5f636576339a' => 
    array (
      0 => 'plugins-plugins-generic-customBlockManager-generic-customBlockManager:block.tpl',
      1 => 1590153816,
      2 => 'plugins-plugins-generic-customBlockManager-generic-customBlockManager',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec7d391344c02_96747917 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_custom" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customBlockId']->value ));?>
">
	<div class="content">
		<?php echo $_smarty_tpl->tpl_vars['customBlockContent']->value;?>

	</div>
</div>
<?php }
}
