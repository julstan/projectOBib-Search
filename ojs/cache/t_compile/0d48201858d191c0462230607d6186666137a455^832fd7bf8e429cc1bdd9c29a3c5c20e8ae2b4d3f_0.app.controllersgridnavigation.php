<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-06 14:17:44
  from 'app:controllersgridnavigation' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb2c708a0bc81_73475229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '832fd7bf8e429cc1bdd9c29a3c5c20e8ae2b4d3f' => 
    array (
      0 => 'app:controllersgridnavigation',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_5eb2c708a0bc81_73475229 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#navigationMenuItemsForm').pkpHandler(
			'$.pkp.controllers.grid.navigationMenus.form.NavigationMenuItemsFormHandler',
			{
				previewUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"navigationMenu",'op'=>"preview"),$_smarty_tpl ) ));?>
,
				itemTypeDescriptions: <?php echo $_smarty_tpl->tpl_vars['navigationMenuItemTypeDescriptions']->value;?>
,
				itemTypeConditionalWarnings: <?php echo $_smarty_tpl->tpl_vars['navigationMenuItemTypeConditionalWarnings']->value;?>

			});
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="navigationMenuItemsForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.navigationMenus.NavigationMenuItemsGridHandler",'op'=>"updateNavigationMenuItem"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"navigationMenuItemFormNotification"), 0, false);
?>
	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"navigationMenuItemInfo"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"navigationMenuItemInfo"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php if ($_smarty_tpl->tpl_vars['navigationMenuItemId']->value) {?>
			<input type="hidden" name="navigationMenuItemId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['navigationMenuItemId']->value ));?>
" />
		<?php }?>

		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.navigationMenus.form.title",'for'=>"title",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.navigationMenus.form.title",'for'=>"title",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>"true",'id'=>"title",'value'=>$_smarty_tpl->tpl_vars['title']->value,'maxlength'=>"255",'required'=>"true"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.navigationMenus.form.title",'for'=>"title",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('id'=>"menuItemTypeSection",'title'=>"manager.navigationMenus.form.navigationMenuItemType",'for'=>"menuItemType"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('id'=>"menuItemTypeSection",'title'=>"manager.navigationMenus.form.navigationMenuItemType",'for'=>"menuItemType"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"menuItemType",'required'=>true,'from'=>$_smarty_tpl->tpl_vars['navigationMenuItemTypeTitles']->value,'selected'=>$_smarty_tpl->tpl_vars['menuItemType']->value,'label'=>"manager.navigationMenus.form.navigationMenuItemTypeMessage",'translate'=>false),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('id'=>"menuItemTypeSection",'title'=>"manager.navigationMenus.form.navigationMenuItemType",'for'=>"menuItemType"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customTemplates']->value, 'customTemplate', false, 'nmiType');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nmiType']->value => $_smarty_tpl->tpl_vars['customTemplate']->value) {
?>
			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['customTemplate']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"navigationMenuItemInfo"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('class'=>"formButtons"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('class'=>"formButtons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"submit",'class'=>"submitFormButton pkp_helpers_align_left pkp_button_primary",'id'=>"saveButton",'label'=>"common.save"),$_smarty_tpl ) );?>

		<?php $_smarty_tpl->_assignInScope('buttonId', uniqid(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "submitFormButton","-" ))));?>
	<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('class'=>"formButtons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</form>
<?php }
}
