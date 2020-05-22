<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 22:20:26
  from 'app:frontendpagessubmissions.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8340a117832_04635793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f59ba25f4aae6a7b19033686947ff5a7d2a098e0' => 
    array (
      0 => 'app:frontendpagessubmissions.',
      1 => 1583420250,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/editLink.tpl' => 3,
    'app:common/frontend/footer.tpl' => 1,
  ),
),false)) {
function content_5ec8340a117832_04635793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.submissions"), 0, false);
?>

<div id="main-content" class="page page_submissions">

	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"about.submissions"), 0, false);
?>

		<div class="page-header">
		<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.submissions"),$_smarty_tpl ) );?>
</h1>
	</div>
	
		<?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "newSubmission", null);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submission",'op'=>"wizard"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.newSubmission"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "viewSubmissions", null);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submissions"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.viewSubmissions"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<div class="alert alert-info">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.submissionActions",'newSubmission'=>$_smarty_tpl->tpl_vars['newSubmission']->value,'viewSubmissions'=>$_smarty_tpl->tpl_vars['viewSubmissions']->value),$_smarty_tpl ) );?>

		</div>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "login", null);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.login"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "register", null);?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"register"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.register"),$_smarty_tpl ) );?>
</a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<div class="alert alert-info">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.registrationRequired",'login'=>$_smarty_tpl->tpl_vars['login']->value,'register'=>$_smarty_tpl->tpl_vars['register']->value),$_smarty_tpl ) );?>

		</div>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['submissionChecklist']->value) {?>
		<div class="submission_checklist">
			<div class="page-header">
				<h2>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.submissionPreparationChecklist"),$_smarty_tpl ) );?>

					<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"publication",'anchor'=>"submissionStage",'sectionTitleKey'=>"about.submissionPreparationChecklist"), 0, false);
?>
				</h2>
			</div>
			<p class="lead description">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.submissionPreparationChecklist.description"),$_smarty_tpl ) );?>

			</p>
			<ul class="list-group">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissionChecklist']->value, 'checklistItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['checklistItem']->value) {
?>
					<li class="list-group-item">
						<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
						<span class="item-content"><?php echo nl2br($_smarty_tpl->tpl_vars['checklistItem']->value['content']);?>
</span>
					</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>

		</div>
	<?php }?>
	
		<?php if ($_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedSetting('authorGuidelines')) {?>
		<div class="author_guidelines">
			<h2 class="page-header">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.authorGuidelines"),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"journal",'anchor'=>"guidelines",'sectionTitleKey'=>"about.authorGuidelines"), 0, true);
?>
			</h2>
			<?php echo $_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedSetting('authorGuidelines');?>

		</div>
	<?php }?>
	
		<?php if ($_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedSetting('copyrightNotice')) {?>
		<div class="copyright-notice">
			<h2 class="page-header">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.copyrightNotice"),$_smarty_tpl ) );?>

				</span><?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"journal",'anchor'=>"policies",'sectionTitleKey'=>"about.copyrightNotice"), 0, true);
?>
			</h2>
			<?php echo $_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedSetting('copyrightNotice');?>

		</div>
	<?php }?>
	
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:common/frontend/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
