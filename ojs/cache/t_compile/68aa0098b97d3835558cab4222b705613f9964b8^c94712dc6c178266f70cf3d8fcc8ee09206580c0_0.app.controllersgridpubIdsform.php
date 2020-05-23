<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 11:34:23
  from 'app:controllersgridpubIdsform' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8ee1fd598e0_71461132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c94712dc6c178266f70cf3d8fcc8ee09206580c0' => 
    array (
      0 => 'app:controllersgridpubIdsform',
      1 => 1590153846,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8ee1fd598e0_71461132 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#assignPublicIdentifierForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				trackFormChanges: true
			}
		);
	});
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['pubObject']->value instanceof Issue) {?>
	<form class="pkp_form" id="assignPublicIdentifierForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('component'=>"grid.issues.FutureIssueGridHandler",'op'=>"publishIssue",'escape'=>false),$_smarty_tpl ) );?>
">
		<input type="hidden" name="issueId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubObject']->value->getId() ));?>
" />
		<input type="hidden" name="confirmed" value=true />
		<?php $_smarty_tpl->_assignInScope('hideCancel', false);?>
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"sendIssueNotification",'list'=>"true"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('for'=>"sendIssueNotification",'list'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"sendIssueNotification",'id'=>"sendIssueNotification",'checked'=>true,'label'=>"notification.sendNotificationConfirmation",'inline'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('for'=>"sendIssueNotification",'list'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>		
<?php } elseif ($_smarty_tpl->tpl_vars['pubObject']->value instanceof Article) {?>
	<form class="pkp_form" id="assignPublicIdentifierForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.issueEntry.IssueEntryTabHandler",'op'=>"assignPubIds",'escape'=>false),$_smarty_tpl ) );?>
">
		<input type="hidden" name="submissionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubObject']->value->getId() ));?>
" />
		<input type="hidden" name="stageId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formParams']->value['stageId'] ));?>
" />
		<?php $_smarty_tpl->_assignInScope('hideCancel', true);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['confirmationText']->value) {?>
	<p><?php echo $_smarty_tpl->tpl_vars['confirmationText']->value;?>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['approval']->value) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
		<?php $_smarty_tpl->_assignInScope('pubIdAssignFile', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdAssignFile());?>
		<?php $_smarty_tpl->_assignInScope('canBeAssigned', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->canBeAssigned($_smarty_tpl->tpl_vars['pubObject']->value));?>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pubIdAssignFile']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pubIdPlugin'=>$_smarty_tpl->tpl_vars['pubIdPlugin']->value,'pubObject'=>$_smarty_tpl->tpl_vars['pubObject']->value,'canBeAssigned'=>$_smarty_tpl->tpl_vars['canBeAssigned']->value), 0, true);
?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"assignPublicIdentifierForm",'submitText'=>"common.ok",'hideCancel'=>$_smarty_tpl->tpl_vars['hideCancel']->value),$_smarty_tpl ) );?>

</form>
<?php }
}
