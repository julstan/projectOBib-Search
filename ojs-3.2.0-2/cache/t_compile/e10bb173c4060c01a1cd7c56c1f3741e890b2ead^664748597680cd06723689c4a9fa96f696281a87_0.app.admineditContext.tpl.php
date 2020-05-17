<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-04 10:38:10
  from 'app:admineditContext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eaff092896700_22401365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664748597680cd06723689c4a9fa96f696281a87' => 
    array (
      0 => 'app:admineditContext.tpl',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaff092896700_22401365 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="editContext">
	<?php if ($_smarty_tpl->tpl_vars['isAddingNewContext']->value) {?>
	<add-context-form
	<?php } else { ?>
	<pkp-form
	<?php }?>
		v-bind="components.<?php echo @constant('FORM_CONTEXT');?>
"
		@set="set"
	/>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	pkp.registry.init('editContext', 'SettingsContainer', <?php echo json_encode($_smarty_tpl->tpl_vars['containerData']->value);?>
);
<?php echo '</script'; ?>
>
<?php }
}
