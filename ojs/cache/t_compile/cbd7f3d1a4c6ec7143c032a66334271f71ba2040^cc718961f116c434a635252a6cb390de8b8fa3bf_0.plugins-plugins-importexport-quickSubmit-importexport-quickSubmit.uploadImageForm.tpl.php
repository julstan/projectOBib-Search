<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 13:04:15
  from 'plugins-plugins-importexport-quickSubmit-importexport-quickSubmit:uploadImageForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eccf7af19c6e0_57728277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc718961f116c434a635252a6cb390de8b8fa3bf' => 
    array (
      0 => 'plugins-plugins-importexport-quickSubmit-importexport-quickSubmit:uploadImageForm.tpl',
      1 => 1590490860,
      2 => 'plugins-plugins-importexport-quickSubmit-importexport-quickSubmit',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/fileUploadContainer.tpl' => 1,
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5eccf7af19c6e0_57728277 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/importexport/quickSubmit/js/QuickSubmitFileUploadFormHandler.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#uploadForm').pkpHandler(
			'$.pkp.plugins.importexport.quickSubmit.js.QuickSubmitFileUploadFormHandler',
			{
				$uploader: $('#coverImageUploader'),
				$preview: $('#coverImagePreview'),
				$extraAltText: $('#extraAltText'),
				uploaderOptions: {
					uploadUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('path'=>"uploadImage",'escape'=>false),$_smarty_tpl ) ));?>
,
					baseUrl: <?php echo json_encode($_smarty_tpl->tpl_vars['baseUrl']->value);?>
,
					filters: {
						mime_types : [
							{ title : "Image files", extensions : "jpg,jpeg,png,svg" }
						]
					},
					multipart_params: {
						submissionId: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionId']->value ));?>
,
						<?php if ($_smarty_tpl->tpl_vars['stageId']->value) {?>stageId: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stageId']->value ));?>
,<?php }?>
					}
				}
			}
		);
	});
<?php echo '</script'; ?>
>

<form id="uploadForm" class="pkp_form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('path'=>"saveUploadedImage"),$_smarty_tpl ) );?>
" method="post">
	<input type="hidden" name="submissionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionId']->value ));?>
" />

		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"coverImage",'title'=>"editor.issues.coverPage"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"coverImage",'title'=>"editor.issues.coverPage"), null, $_smarty_tpl, $_block_repeat);
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
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/fileUploadContainer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"coverImageUploader"), 0, false);
?>
			<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />
		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<div id="extraAltText"<?php if ($_smarty_tpl->tpl_vars['coverImage']->value) {?> style="display:none"<?php }?>>
			<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.altText"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"common.altText"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"common.altTextInstructions",'id'=>"imageAltText",'value'=>$_smarty_tpl->tpl_vars['imageAltText']->value),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"common.altText"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>

		<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('id'=>"coverImagePreview"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('id'=>"coverImagePreview"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php if ($_smarty_tpl->tpl_vars['coverImage']->value != '') {?>
				<div class="pkp_form_file_view pkp_form_image_view">
					<div class="img">
						<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['coverImage']->value,"url" ));
echo uniqid('?');?>
" <?php if ($_smarty_tpl->tpl_vars['coverImageAlt']->value !== '') {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['coverImageAlt']->value ));?>
"<?php }?>>
					</div>

					<div class="data">
						<span class="title">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.altText"),$_smarty_tpl ) );?>

						</span>
						<span class="value">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"imageAltText",'label'=>"common.altTextInstructions",'value'=>$_smarty_tpl->tpl_vars['imageAltText']->value),$_smarty_tpl ) );?>

						</span>
						<div id="<?php echo $_smarty_tpl->tpl_vars['deleteCoverImageLinkAction']->value->getId();?>
" class="actions">
							<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['deleteCoverImageLinkAction']->value,'contextId'=>"issueForm"), 0, false);
?>
						</div>
					</div>
				</div>
			<?php }?>
		<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('id'=>"coverImagePreview"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"coverImage",'title'=>"editor.issues.coverPage"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>

</form>
<?php }
}
