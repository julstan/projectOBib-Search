<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 11:26:30
  from 'app:submissionformstep3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8ec469a5042_46317216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84625d2e81356a803073797f03989d06b527b3a1' => 
    array (
      0 => 'app:submissionformstep3.tpl',
      1 => 1590153806,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:submission/submissionMetadataFormTitleFields.tpl' => 1,
    'app:submission/form/categories.tpl' => 1,
    'app:submission/submissionMetadataFormFields.tpl' => 1,
  ),
),false)) {
function content_5ec8ec469a5042_46317216 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the JS form handler.
		$('#submitStep3Form').pkpHandler(
			'$.pkp.pages.submission.SubmissionStep3FormHandler',
			{
				chaptersGridContainer: 'chaptersGridContainer',
				authorsGridContainer: 'authorsGridContainer',
			});
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="submitStep3Form" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"saveStep",'path'=>$_smarty_tpl->tpl_vars['submitStep']->value),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<input type="hidden" name="submissionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionId']->value ));?>
" />
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"submitStep3FormNotification"), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("app:submission/submissionMetadataFormTitleFields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!--  Contributors -->
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'authorGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.users.author.AuthorGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'publicationId'=>$_smarty_tpl->tpl_vars['publicationId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"authorsGridContainer",'url'=>$_smarty_tpl->tpl_vars['authorGridUrl']->value),$_smarty_tpl ) );?>


	<?php echo $_smarty_tpl->tpl_vars['additionalContributorsFields']->value;?>


	<?php $_smarty_tpl->_subTemplateRender("app:submission/form/categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("app:submission/submissionMetadataFormFields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"step3Buttons",'submitText'=>"common.saveAndContinue"),$_smarty_tpl ) );?>

</form>
<?php }
}
