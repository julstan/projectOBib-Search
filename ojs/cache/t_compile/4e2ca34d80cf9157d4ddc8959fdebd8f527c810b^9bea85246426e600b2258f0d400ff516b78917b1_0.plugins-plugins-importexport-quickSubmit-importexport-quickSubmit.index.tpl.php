<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 13:04:07
  from 'plugins-plugins-importexport-quickSubmit-importexport-quickSubmit:index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eccf7a774a1f7_74076186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bea85246426e600b2258f0d400ff516b78917b1' => 
    array (
      0 => 'plugins-plugins-importexport-quickSubmit-importexport-quickSubmit:index.tpl',
      1 => 1590490860,
      2 => 'plugins-plugins-importexport-quickSubmit-importexport-quickSubmit',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:linkAction/linkAction.tpl' => 1,
    'app:submission/form/section.tpl' => 1,
    'core:submission/submissionMetadataFormTitleFields.tpl' => 1,
    'app:submission/submissionMetadataFormFields.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5eccf7a774a1f7_74076186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pageTitle', "plugins.importexport.quickSubmit.displayName");
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/importexport/quickSubmit/js/QuickSubmitFormHandler.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#quickSubmitForm').pkpHandler('$.pkp.plugins.importexport.quickSubmit.js.QuickSubmitFormHandler');
	});
	
<?php echo '</script'; ?>
>

<div id="quickSubmitPlugin" class="pkp_page_content pkp_pageQuickSubmit"> 
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.quickSubmit.descriptionLong"),$_smarty_tpl ) );?>
</p>

	<form class="pkp_form" id="quickSubmitForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('path'=>"saveSubmit"),$_smarty_tpl ) );?>
">
		<input type="hidden" name="reloadForm" id="reloadForm" value="0" />

		<?php if ($_smarty_tpl->tpl_vars['submissionId']->value) {?>
		    <input type="hidden" name="submissionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionId']->value ));?>
" />
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['issuesPublicationDates']->value) {?>
		    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"hidden",'id'=>"issuesPublicationDates",'value'=>$_smarty_tpl->tpl_vars['issuesPublicationDates']->value),$_smarty_tpl ) );?>

		<?php }?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

		<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"quickSubmitFormNotification"), 0, false);
?>

		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"editor.issues.coverPage",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"editor.issues.coverPage",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<div id="<?php echo $_smarty_tpl->tpl_vars['openCoverImageLinkAction']->value->getId();?>
" class="pkp_linkActions">
				<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['openCoverImageLinkAction']->value,'contextId'=>"quickSubmitForm"), 0, false);
?>
			</div>
		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"editor.issues.coverPage",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				<?php if (count($_smarty_tpl->tpl_vars['supportedSubmissionLocaleNames']->value) == 1) {?>
		    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supportedSubmissionLocaleNames']->value, 'localeName', false, 'locale');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value => $_smarty_tpl->tpl_vars['localeName']->value) {
?>
		        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"hidden",'id'=>"locale",'value'=>$_smarty_tpl->tpl_vars['locale']->value),$_smarty_tpl ) );?>

		    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php } else { ?>
		    <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"submission.submit.submissionLocale",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'for'=>"locale"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"submission.submit.submissionLocale",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'for'=>"locale"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('label'=>"submission.submit.submissionLocaleDescription",'required'=>"true",'type'=>"select",'id'=>"locale",'from'=>$_smarty_tpl->tpl_vars['supportedSubmissionLocaleNames']->value,'selected'=>$_smarty_tpl->tpl_vars['locale']->value,'translate'=>false),$_smarty_tpl ) );?>

		    <?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"submission.submit.submissionLocale",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'for'=>"locale"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>

		<?php $_smarty_tpl->_subTemplateRender("app:submission/form/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('readOnly'=>$_smarty_tpl->tpl_vars['formParams']->value['readOnly']), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("core:submission/submissionMetadataFormTitleFields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("app:submission/submissionMetadataFormFields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"contributors"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormArea(array('id'=>"contributors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<!--  Contributors -->
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorGridUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.users.author.AuthorGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'publicationId'=>$_smarty_tpl->tpl_vars['publicationId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"authorsGridContainer",'url'=>$_smarty_tpl->tpl_vars['authorGridUrl']->value),$_smarty_tpl ) );?>


			<?php echo $_smarty_tpl->tpl_vars['additionalContributorsFields']->value;?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormArea(array('id'=>"contributors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "representationsGridUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.articleGalleys.ArticleGalleyGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'publicationId'=>$_smarty_tpl->tpl_vars['publicationId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>uniqid("formatsGridContainer"),'url'=>$_smarty_tpl->tpl_vars['representationsGridUrl']->value),$_smarty_tpl ) );?>


				<?php if ($_smarty_tpl->tpl_vars['hasIssues']->value) {?>
			<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('id'=>'articlePublishingSection','list'=>"false"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('id'=>'articlePublishingSection','list'=>"false"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"articleUnpublished",'name'=>"articleStatus",'value'=>0,'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['articleStatus']->value,false )),'label'=>'plugins.importexport.quickSubmit.unpublished','translate'=>"true"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"radio",'id'=>"articlePublished",'name'=>"articleStatus",'value'=>1,'checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'compare' ][ 0 ], array( $_smarty_tpl->tpl_vars['articleStatus']->value,true )),'label'=>'plugins.importexport.quickSubmit.published','translate'=>"true"),$_smarty_tpl ) );?>


				<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('id'=>'schedulePublicationDiv','list'=>"false"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('id'=>'schedulePublicationDiv','list'=>"false"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"schedulingInformation",'title'=>"editor.article.scheduleForPublication"));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormArea(array('id'=>"schedulingInformation",'title'=>"editor.article.scheduleForPublication"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"schedule"));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array('for'=>"schedule"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'required'=>true,'id'=>"issueId",'from'=>$_smarty_tpl->tpl_vars['issueOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['issueId']->value,'translate'=>false,'label'=>"editor.article.scheduleForPublication.toBeAssigned"),$_smarty_tpl ) );?>

						<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array('for'=>"schedule"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormArea(array('id'=>"schedulingInformation",'title'=>"editor.article.scheduleForPublication"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

					<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"pagesInformation",'title'=>"editor.issues.pages"));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormArea(array('id'=>"pagesInformation",'title'=>"editor.issues.pages"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"customExtras"));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormSection(array('for'=>"customExtras"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"pages",'label'=>"editor.issues.pages",'value'=>$_smarty_tpl->tpl_vars['pages']->value,'inline'=>true,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

						<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormSection(array('for'=>"customExtras"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormArea(array('id'=>"pagesInformation",'title'=>"editor.issues.pages"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

					<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"schedulingInformationDatePublished",'title'=>"editor.issues.published"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormArea(array('id'=>"schedulingInformationDatePublished",'title'=>"editor.issues.published"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"publishedDate"));
$_block_repeat=true;
echo $_block_plugin11->smartyFBVFormSection(array('for'=>"publishedDate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'required'=>true,'id'=>"datePublished",'value'=>$_smarty_tpl->tpl_vars['datePublished']->value,'translate'=>false,'label'=>"editor.issues.published",'inline'=>true,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'class'=>"datepicker"),$_smarty_tpl ) );?>

						<?php $_block_repeat=false;
echo $_block_plugin11->smartyFBVFormSection(array('for'=>"publishedDate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormArea(array('id'=>"schedulingInformationDatePublished",'title'=>"editor.issues.published"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

					<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"permissions",'title'=>"submission.permissions"));
$_block_repeat=true;
echo $_block_plugin12->smartyFBVFormArea(array('id'=>"permissions",'title'=>"submission.permissions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"licenseUrl",'label'=>"submission.licenseURL",'value'=>$_smarty_tpl->tpl_vars['licenseUrl']->value),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"copyrightHolder",'label'=>"submission.copyrightHolder",'value'=>$_smarty_tpl->tpl_vars['copyrightHolder']->value,'multilingual'=>true,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true),$_smarty_tpl ) );?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"copyrightYear",'label'=>"submission.copyrightYear",'value'=>$_smarty_tpl->tpl_vars['copyrightYear']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true),$_smarty_tpl ) );?>

					<?php $_block_repeat=false;
echo $_block_plugin12->smartyFBVFormArea(array('id'=>"permissions",'title'=>"submission.permissions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('id'=>'schedulePublicationDiv','list'=>"false"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('id'=>'articlePublishingSection','list'=>"false"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "cancelUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('path'=>"cancelSubmit",'submissionId'=>((string)$_smarty_tpl->tpl_vars['submissionId']->value)),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"quickSubmit",'submitText'=>"common.save",'cancelUrl'=>$_smarty_tpl->tpl_vars['cancelUrl']->value,'cancelUrlTarget'=>"_self"),$_smarty_tpl ) );?>

	</form>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
