<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 22:35:57
  from 'app:managementdistribution.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec837ad49c100_10643337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307230f58e343f3c2ed648a8e44266d777b2af35' => 
    array (
      0 => 'app:managementdistribution.tp',
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
function content_5ec837ad49c100_10643337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"manager.distribution.title"), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
<div id="settings-context-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
">
	<tabs>
		<tab id="license" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.license"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/distribution-settings",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<pkp-form
				v-bind="components.<?php echo @constant('FORM_LICENSE');?>
"
				@set="set"
			/>
		</tab>
		<tab id="indexing" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.searchEngineIndexing"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/distribution-settings",'section'=>"indexing",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<pkp-form
				v-bind="components.<?php echo @constant('FORM_SEARCH_INDEXING');?>
"
				@set="set"
			/>
		</tab>
		<tab id="payments" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.paymentMethod"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/distribution-settings",'section'=>"payments",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<pkp-form
				v-bind="components.<?php echo @constant('FORM_PAYMENT_SETTINGS');?>
"
				@set="set"
			/>
		</tab>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::distribution"),$_smarty_tpl ) );?>

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
