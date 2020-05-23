<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 11:26:07
  from 'app:controllerswizardfileUplo' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8ec2fbe0a84_74429692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06387ac8ba0d28c6b6ca2b48e70da889bc5aa391' => 
    array (
      0 => 'app:controllerswizardfileUplo',
      1 => 1590153805,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/wizard/fileUpload/form/uploadedFileSummary.tpl' => 1,
  ),
),false)) {
function content_5ec8ec2fbe0a84_74429692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('metadataFormId', uniqid("metadataForm"));
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#<?php echo $_smarty_tpl->tpl_vars['metadataFormId']->value;?>
').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="<?php echo $_smarty_tpl->tpl_vars['metadataFormId']->value;?>
" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('component'=>"api.file.ManageFileApiHandler",'op'=>"saveMetadata",'submissionId'=>$_smarty_tpl->tpl_vars['submissionFile']->value->getSubmissionId(),'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'reviewRoundId'=>$_smarty_tpl->tpl_vars['reviewRoundId']->value,'fileStage'=>$_smarty_tpl->tpl_vars['submissionFile']->value->getFileStage(),'fileId'=>$_smarty_tpl->tpl_vars['submissionFile']->value->getFileId(),'escape'=>false),$_smarty_tpl ) );?>
" method="post">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>


		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"fileMetaData"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"fileMetaData"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

				<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/wizard/fileUpload/form/uploadedFileSummary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('submissionFile'=>$_smarty_tpl->tpl_vars['submissionFile']->value), 0, false);
?>
		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"fileMetaData"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php if ($_smarty_tpl->tpl_vars['submissionFile']->value->supportsDependentFiles()) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'dependentFilesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.files.dependent.DependentFilesGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submissionFile']->value->getSubmissionId(),'fileId'=>$_smarty_tpl->tpl_vars['submissionFile']->value->getFileId(),'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'reviewRoundId'=>$_smarty_tpl->tpl_vars['reviewRoundId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"dependentFilesGridDiv",'url'=>$_smarty_tpl->tpl_vars['dependentFilesGridUrl']->value),$_smarty_tpl ) );?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['showButtons']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"hidden",'id'=>"showButtons",'value'=>$_smarty_tpl->tpl_vars['showButtons']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('submitText'=>"common.save"),$_smarty_tpl ) );?>

	<?php }?>
</form>
<?php }
}
