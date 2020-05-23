<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 11:26:07
  from 'app:controllerswizardfileUplo' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8ec2fe00860_83917451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69bd335a77cdc614f910c8dc4fbe5b2fa33571e0' => 
    array (
      0 => 'app:controllerswizardfileUplo',
      1 => 1590153805,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8ec2fe00860_83917451 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_uploadedFile_summary">
	<div class="filename" data-pkp-editable="true">
		<div class="display" data-pkp-editable-view="display">
			<span data-pkp-editable-displays="name">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionFile']->value->getLocalizedName() ));?>

			</span>
			<a href="#" class="pkpEditableToggle edit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.edit"),$_smarty_tpl ) );?>
</a>
		</div>
		<div class="input" data-pkp-editable-view="input">
			<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"submission.form.name",'required'=>true));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"submission.form.name",'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"name",'value'=>$_smarty_tpl->tpl_vars['submissionFile']->value->getName(null),'multilingual'=>true,'maxlength'=>"255",'required'=>true),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"submission.form.name",'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>
	</div>

	<div class="details">
		<?php if (is_a($_smarty_tpl->tpl_vars['submissionFile']->value,'SubmissionArtworkFile')) {?>
			<span class="pixels">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.dimensionsPixels",'width'=>$_smarty_tpl->tpl_vars['submissionFile']->value->getWidth(),'height'=>$_smarty_tpl->tpl_vars['submissionFile']->value->getHeight()),$_smarty_tpl ) );?>

			</span>

			<span class="print">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.dimensionsInches",'width'=>$_smarty_tpl->tpl_vars['submissionFile']->value->getPhysicalWidth(300),'height'=>$_smarty_tpl->tpl_vars['submissionFile']->value->getPhysicalHeight(300),'dpi'=>300),$_smarty_tpl ) );?>

			</span>
		<?php }?>

		<span class="type <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( mb_strtolower($_smarty_tpl->tpl_vars['submissionFile']->value->getExtension(), 'UTF-8') ));?>
">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( mb_strtolower($_smarty_tpl->tpl_vars['submissionFile']->value->getExtension(), 'UTF-8') ));?>

		</span>

		<span class="file_size">
			<?php echo $_smarty_tpl->tpl_vars['submissionFile']->value->getNiceFileSize();?>

		</span>
	</div>
</div>
<?php }
}
