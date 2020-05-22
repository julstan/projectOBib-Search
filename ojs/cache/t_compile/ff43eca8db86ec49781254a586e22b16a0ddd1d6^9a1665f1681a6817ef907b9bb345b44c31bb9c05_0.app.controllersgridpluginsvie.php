<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 22:37:12
  from 'app:controllersgridpluginsvie' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec837f803d5d9_28251737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a1665f1681a6817ef907b9bb345b44c31bb9c05' => 
    array (
      0 => 'app:controllersgridpluginsvie',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
    'app:controllers/revealMore.tpl' => 2,
  ),
),false)) {
function content_5ec837f803d5d9_28251737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojsrepo\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="pkp_plugin_details">

	<div class="status <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['statusClass']->value ));?>
">
		<div class="pkp_screen_reader">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.pluginGallery.latestCompatible"),$_smarty_tpl ) );?>

		</div>

		<?php if ($_smarty_tpl->tpl_vars['installAction']->value && ($_smarty_tpl->tpl_vars['statusClass']->value == 'older' || $_smarty_tpl->tpl_vars['statusClass']->value == 'notinstalled')) {?>
			<div class="action_button">
				<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['installAction']->value,'contextId'=>"pluginGallery"), 0, false);
?>
			</div>
		<?php } else { ?>
			<div class="status_notice">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['statusKey']->value),$_smarty_tpl ) );?>

			</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['statusClass']->value != 'incompatible') {?>

			<ul class="certifications">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin']->value->getReleaseCertifications(), 'certification');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['certification']->value) {
?>
					<li class="certification_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['certification']->value ));?>
">
						<span class="label">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.pluginGallery.certifications.".((string)$_smarty_tpl->tpl_vars['certification']->value)),$_smarty_tpl ) );?>

						</span>
						<span class="description">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.pluginGallery.certifications.".((string)$_smarty_tpl->tpl_vars['certification']->value).".description"),$_smarty_tpl ) );?>

						</span>
					</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>

			<div class="release">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.pluginGallery.version",'version'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getVersion() )),'date'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['plugin']->value->getDate(),$_smarty_tpl->tpl_vars['dateFormatShort']->value)),$_smarty_tpl ) );?>

			</div>
			<div class="release_description">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getLocalizedReleaseDescription() ));?>

			</div>
		<?php }?>
	</div>

	<h4 class="pkp_screen_reader">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.pluginGallery.summary"),$_smarty_tpl ) );?>

	</h4>

	<div class="maintainer">
		<div class="author">
			<?php if ($_smarty_tpl->tpl_vars['plugin']->value->getContactEmail()) {?>
				<a href="mailto:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getContactEmail() ));?>
">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getContactName() ));?>

				</a>
			<?php } else { ?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getContactName() ));?>

			<?php }?>
		</div>
		<div class="institution">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getContactInstitutionName() ));?>

		</div>
	</div>

	<div class="url">
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getHomepage() ));?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getHomepage() ));?>
</a>
	</div>

	<div class="description">
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/revealMore.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getLocalizedDescription() ))), 0, false);
?>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['plugin']->value->getLocalizedInstallationInstructions()) {?>
		<div class="installation">
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/revealMore.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value->getLocalizedInstallationInstructions() ))), 0, true);
?>
		</div>
	<?php }?>
</div>
<?php }
}
