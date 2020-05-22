<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 22:15:11
  from 'core:submissionformstep1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec832cfad7cc4_69444627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7d6d017cda209d97dfa69aba1e0226666e0255e' => 
    array (
      0 => 'core:submissionformstep1.tpl',
      1 => 1586500794,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:submission/submissionLocale.tpl' => 1,
  ),
),false)) {
function content_5ec832cfad7cc4_69444627 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#submitStep1Form').pkpHandler('$.pkp.pages.submission.SubmissionStep1FormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="submitStep1Form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"saveStep",'path'=>$_smarty_tpl->tpl_vars['submitStep']->value),$_smarty_tpl ) );?>
">
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['submissionId']->value) {?><input type="hidden" name="submissionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionId']->value ));?>
"/><?php }?>
	<input type="hidden" name="submissionChecklist" value="1"/>

<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"submitStep1FormNotification"), 0, false);
?>

<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"submissionStep1"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"submissionStep1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

	<?php echo $_smarty_tpl->tpl_vars['additionalFormContent1']->value;?>


	<?php $_smarty_tpl->_subTemplateRender("app:submission/submissionLocale.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo $_smarty_tpl->tpl_vars['additionalFormContent2']->value;?>


		<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('submissionChecklist')) {?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true",'label'=>"submission.submit.submissionChecklist",'description'=>"submission.submit.submissionChecklistDescription",'id'=>"pkp_submissionChecklist"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>"true",'label'=>"submission.submit.submissionChecklist",'description'=>"submission.submit.submissionChecklistDescription",'id'=>"pkp_submissionChecklist"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('submissionChecklist'), 'checklistItem', false, 'checklistId', 'checklist', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['checklistId']->value => $_smarty_tpl->tpl_vars['checklistItem']->value) {
?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"checklist-".((string)$_smarty_tpl->tpl_vars['checklistId']->value),'required'=>true,'value'=>1,'label'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['checklistItem']->value['content'] )),'translate'=>false,'checked'=>false),$_smarty_tpl ) );?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>"true",'label'=>"submission.submit.submissionChecklist",'description'=>"submission.submit.submissionChecklistDescription",'id'=>"pkp_submissionChecklist"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

		<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"commentsToEditor",'title'=>"submission.submit.coverNote"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('for'=>"commentsToEditor",'title'=>"submission.submit.coverNote"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'name'=>"commentsToEditor",'id'=>"commentsToEditor",'value'=>$_smarty_tpl->tpl_vars['commentsToEditor']->value,'rich'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('for'=>"commentsToEditor",'title'=>"submission.submit.coverNote"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php if ($_smarty_tpl->tpl_vars['noExistingRoles']->value) {?>
		<?php if (count($_smarty_tpl->tpl_vars['userGroupOptions']->value) > 1) {?>
			<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"submission.submit.availableUserGroups",'description'=>"submission.submit.availableUserGroupsDescription",'list'=>true,'required'=>true));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"submission.submit.availableUserGroups",'description'=>"submission.submit.availableUserGroupsDescription",'list'=>true,'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userGroupOptions']->value, 'userGroupName', false, 'userGroupId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userGroupId']->value => $_smarty_tpl->tpl_vars['userGroupName']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['defaultGroup']->value->getId() == $_smarty_tpl->tpl_vars['userGroupId']->value) {
$_smarty_tpl->_assignInScope('checked', true);
} else {
$_smarty_tpl->_assignInScope('checked', false);
}?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "userGroup",$_smarty_tpl->tpl_vars['userGroupId']->value )),'name'=>"userGroupId",'value'=>$_smarty_tpl->tpl_vars['userGroupId']->value,'checked'=>$_smarty_tpl->tpl_vars['checked']->value,'label'=>$_smarty_tpl->tpl_vars['userGroupName']->value,'translate'=>false),$_smarty_tpl ) );?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"submission.submit.availableUserGroups",'description'=>"submission.submit.availableUserGroupsDescription",'list'=>true,'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php } else { ?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userGroupOptions']->value, 'userGroupName', false, 'userGroupId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userGroupId']->value => $_smarty_tpl->tpl_vars['userGroupName']->value) {
?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "onlyUserGroupId", null);
echo $_smarty_tpl->tpl_vars['userGroupId']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"submission.submit.contactConsent",'list'=>true,'required'=>true));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('label'=>"submission.submit.contactConsent",'list'=>true,'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"userGroupId",'required'=>true,'value'=>$_smarty_tpl->tpl_vars['onlyUserGroupId']->value,'label'=>"submission.submit.contactConsentDescription"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('label'=>"submission.submit.contactConsent",'list'=>true,'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>

		<?php } else { ?>
		<?php if (count($_smarty_tpl->tpl_vars['userGroupOptions']->value) > 1) {?>
			<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"submission.submit.availableUserGroups",'list'=>true,'required'=>true));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array('label'=>"submission.submit.availableUserGroups",'list'=>true,'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php if ($_smarty_tpl->tpl_vars['managerGroups']->value) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'submission.submit.userGroupDescriptionManagers','managerGroups'=>$_smarty_tpl->tpl_vars['managerGroups']->value),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'submission.submit.userGroupDescription'),$_smarty_tpl ) );?>

				<?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userGroupOptions']->value, 'userGroupName', false, 'userGroupId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userGroupId']->value => $_smarty_tpl->tpl_vars['userGroupName']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['defaultGroup']->value->getId() == $_smarty_tpl->tpl_vars['userGroupId']->value) {
$_smarty_tpl->_assignInScope('checked', true);
} else {
$_smarty_tpl->_assignInScope('checked', false);
}?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "userGroup",$_smarty_tpl->tpl_vars['userGroupId']->value )),'name'=>"userGroupId",'value'=>$_smarty_tpl->tpl_vars['userGroupId']->value,'checked'=>$_smarty_tpl->tpl_vars['checked']->value,'label'=>$_smarty_tpl->tpl_vars['userGroupName']->value,'translate'=>false),$_smarty_tpl ) );?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array('label'=>"submission.submit.availableUserGroups",'list'=>true,'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php } elseif (count($_smarty_tpl->tpl_vars['userGroupOptions']->value) == 1) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userGroupOptions']->value, 'authorUserGroupName', false, 'userGroupId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userGroupId']->value => $_smarty_tpl->tpl_vars['authorUserGroupName']->value) {
$_smarty_tpl->_assignInScope('userGroupId', $_smarty_tpl->tpl_vars['userGroupId']->value);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"hidden",'id'=>"userGroupId",'value'=>$_smarty_tpl->tpl_vars['userGroupId']->value),$_smarty_tpl ) );?>

		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['copyrightNotice']->value) {?>
		<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"submission.submit.copyrightNoticeAgreementLabel"));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array('title'=>"submission.submit.copyrightNoticeAgreementLabel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo $_smarty_tpl->tpl_vars['copyrightNotice']->value;?>

			<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true"));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormSection(array('list'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"copyrightNoticeAgree",'required'=>true,'value'=>1,'label'=>"submission.submit.copyrightNoticeAgree",'checked'=>$_smarty_tpl->tpl_vars['submissionId']->value),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormSection(array('list'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array('title'=>"submission.submit.copyrightNoticeAgreementLabel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['hasPrivacyStatement']->value) {?>
		<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormSection(array('list'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "privacyUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"about",'op'=>"privacy"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "privacyLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.register.form.privacyConsent",'privacyUrl'=>$_smarty_tpl->tpl_vars['privacyUrl']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"privacyConsent",'required'=>true,'value'=>1,'label'=>$_smarty_tpl->tpl_vars['privacyLabel']->value,'translate'=>false,'checked'=>$_smarty_tpl->tpl_vars['privacyConsent']->value),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormSection(array('list'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"step1Buttons",'submitText'=>"common.saveAndContinue"),$_smarty_tpl ) );?>


	<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"submissionStep1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</form>
<?php }
}
