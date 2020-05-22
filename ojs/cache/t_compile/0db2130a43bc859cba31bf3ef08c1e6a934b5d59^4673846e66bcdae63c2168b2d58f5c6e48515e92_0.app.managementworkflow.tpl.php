<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 22:14:45
  from 'app:managementworkflow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec832b5cfc1f8_35096728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4673846e66bcdae63c2168b2d58f5c6e48515e92' => 
    array (
      0 => 'app:managementworkflow.tpl',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5ec832b5cfc1f8_35096728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"manager.workflow.title"), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
<div id="settings-context-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
	<tabs>
		<tab id="submission" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.publication.submissionStage"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/workflow-settings",'section'=>"submission",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<tabs :is-side-tabs="true">
				<tab id="metadata" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.informationCenter.metadata"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_METADATA_SETTINGS');?>
"
						@set="set"
					/>
				</tab>
				<tab id="components" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"grid.genres.title.short"),$_smarty_tpl ) );?>
">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'genresUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.genre.GenreGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"genresGridContainer",'url'=>$_smarty_tpl->tpl_vars['genresUrl']->value),$_smarty_tpl ) );?>

				</tab>
				<tab id="submissionChecklist" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.checklist"),$_smarty_tpl ) );?>
">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'submissionChecklistGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.submissionChecklist.SubmissionChecklistGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"submissionChecklistGridContainer",'url'=>$_smarty_tpl->tpl_vars['submissionChecklistGridUrl']->value),$_smarty_tpl ) );?>

				</tab>
				<tab id="authorGuidelines" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.authorGuidelines"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_AUTHOR_GUIDELINES');?>
"
						@set="set"
					/>
				</tab>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::workflow::submission"),$_smarty_tpl ) );?>

			</tabs>
		</tab>
		<tab id="review" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.publication.reviewStage"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/workflow-settings",'section'=>"review",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<tabs :is-side-tabs="true">
				<tab id="reviewSetup" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.setup"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_REVIEW_SETUP');?>
"
						@set="set"
					/>
				</tab>
				<tab id="reviewerGuidance" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.publication.reviewerGuidance"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_REVIEW_GUIDANCE');?>
"
						@set="set"
					/>
				</tab>
				<tab id="reviewForms" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.reviewForms"),$_smarty_tpl ) );?>
">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'reviewFormsUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.reviewForms.ReviewFormGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"reviewFormGridContainer",'url'=>$_smarty_tpl->tpl_vars['reviewFormsUrl']->value),$_smarty_tpl ) );?>

				</tab>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::workflow::review"),$_smarty_tpl ) );?>

			</tabs>
		</tab>
		<tab id="library" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.publication.library"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/workflow-settings",'section'=>"publisher",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'libraryGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.library.LibraryFileAdminGridHandler",'op'=>"fetchGrid",'canEdit'=>true,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"libraryGridDiv",'url'=>$_smarty_tpl->tpl_vars['libraryGridUrl']->value),$_smarty_tpl ) );?>

		</tab>
		<tab id="emails" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.publication.emails"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/workflow-settings",'section'=>"emails",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<tabs>
				<tab id="emailsSetup" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.setup"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo @constant('FORM_EMAIL_SETUP');?>
"
						@set="set"
					/>
				</tab>
				<tab id="emailTemplates" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.emails.emailTemplates"),$_smarty_tpl ) );?>
">
					<email-templates-list-panel
						v-bind="components.emailTemplates"
						@set="set"
					/>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'preparedEmailsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.preparedEmails.preparedEmailsGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"preparedEmailsGridDiv",'url'=>$_smarty_tpl->tpl_vars['preparedEmailsGridUrl']->value),$_smarty_tpl ) );?>

				</tab>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::workflow::emails"),$_smarty_tpl ) );?>

			</tabs>
		</tab>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::workflow"),$_smarty_tpl ) );?>

	</tabs>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	pkp.registry.init('settings-context-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'SettingsContainer', <?php echo json_encode($_smarty_tpl->tpl_vars['settingsData']->value);?>
);
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
