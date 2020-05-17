<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-03 16:30:36
  from 'app:controllersgridnavigation' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eaef1acccfc73_38502212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd7033a8f0ac55968f1bd57e811310e167e6e708' => 
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
function content_5eaef1acccfc73_38502212 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#navigationMenuForm').pkpHandler('$.pkp.controllers.grid.navigationMenus.form.NavigationMenuFormHandler',
			{
				submenuWarning: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.navigationMenus.form.submenuWarning"),$_smarty_tpl ) ));?>
,
				itemTypeConditionalWarnings: <?php echo $_smarty_tpl->tpl_vars['navigationMenuItemTypeConditionalWarnings']->value;?>
,
				okButton: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.ok"),$_smarty_tpl ) ));?>
,
				warningModalTitle: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.notice"),$_smarty_tpl ) ));?>

			}
		);

	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="navigationMenuForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.navigationMenus.NavigationMenusGridHandler",'op'=>"updateNavigationMenu"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"navigationMenuFormNotification"), 0, false);
?>
	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"navigationMenuInfo"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"navigationMenuInfo"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php if ($_smarty_tpl->tpl_vars['navigationMenuId']->value) {?>
			<input type="hidden" name="navigationMenuId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['navigationMenuId']->value ));?>
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
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"title",'value'=>$_smarty_tpl->tpl_vars['title']->value,'maxlength'=>"255",'required'=>"true"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.navigationMenus.form.title",'for'=>"title",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.navigationMenus.form.navigationMenuArea",'for'=>"areaName"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"manager.navigationMenus.form.navigationMenuArea",'for'=>"areaName"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"areaName",'from'=>$_smarty_tpl->tpl_vars['activeThemeNavigationAreas']->value,'selected'=>$_smarty_tpl->tpl_vars['navigationMenuArea']->value,'label'=>"manager.navigationMenus.form.navigationMenuAreaMessage",'translate'=>false),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"manager.navigationMenus.form.navigationMenuArea",'for'=>"areaName"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"navigationMenuInfo"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"navigationMenuItems"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormArea(array('id'=>"navigationMenuItems"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<div id="pkpNavManagement" class="pkp_nav_management">
			<div class="pkp_nav_assigned">
				<div class="pkp_nav_management_header">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.navigationMenus.assignedMenuItems"),$_smarty_tpl ) );?>

				</div>
				<ul id="pkpNavAssigned">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuTree']->value, 'assignment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['assignment']->value) {
?>
						<?php $_smarty_tpl->_assignInScope('itemType', $_smarty_tpl->tpl_vars['assignment']->value->navigationMenuItem->getType());?>
						<?php if (!empty($_smarty_tpl->tpl_vars['navigationMenuItemTypes']->value[$_smarty_tpl->tpl_vars['itemType']->value]['conditionalWarning'])) {?>
							<?php $_smarty_tpl->_assignInScope('hasConditionalDisplay', true);?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('hasConditionalDisplay', false);?>
						<?php }?>
						<li data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assignment']->value->getMenuItemId() ));?>
" data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemType']->value ));?>
">
							<div class="item">
								<div class="item_title">
									<span class="fa fa-sort"></span>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assignment']->value->navigationMenuItem->getLocalizedTitle() ));?>

								</div>
								<div class="item_buttons">
									<?php if ($_smarty_tpl->tpl_vars['hasConditionalDisplay']->value) {?>
										<button class="btnConditionalDisplay">
											<span class="fa fa-eye-slash"></span>
											<span class="-screenReader">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.navigationMenus.form.conditionalDisplay"),$_smarty_tpl ) );?>

											</span>
										</button>
									<?php }?>
								</div>
							</div>
							<?php if (!empty($_smarty_tpl->tpl_vars['assignment']->value->children)) {?>
								<ul>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assignment']->value->children, 'childAssignment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['childAssignment']->value) {
?>
										<?php $_smarty_tpl->_assignInScope('itemType', $_smarty_tpl->tpl_vars['childAssignment']->value->navigationMenuItem->getType());?>
										<?php if (!empty($_smarty_tpl->tpl_vars['navigationMenuItemTypes']->value[$_smarty_tpl->tpl_vars['itemType']->value]['conditionalWarning'])) {?>
											<?php $_smarty_tpl->_assignInScope('hasConditionalDisplay', true);?>
										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('hasConditionalDisplay', false);?>
										<?php }?>
										<li data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['childAssignment']->value->getMenuItemId() ));?>
" data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemType']->value ));?>
">
											<div class="item">
												<div class="item_title">
													<span class="fa fa-sort"></span>
													<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['childAssignment']->value->navigationMenuItem->getLocalizedTitle() ));?>

												</div>
												<div class="item_buttons">
													<?php if ($_smarty_tpl->tpl_vars['hasConditionalDisplay']->value) {?>
														<button class="btnConditionalDisplay">
															<span class="fa fa-eye-slash"></span>
															<span class="-screenReader">
																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.navigationMenus.form.conditionalDisplay"),$_smarty_tpl ) );?>

															</span>
														</button>
													<?php }?>
												</div>
											</div>
										</li>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
							<?php }?>
						</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<div class="pkp_nav_unassigned">
				<div class="pkp_nav_management_header">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.navigationMenus.unassignedMenuItems"),$_smarty_tpl ) );?>

				</div>
				<ul id="pkpNavUnassigned">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['unassignedItems']->value, 'unassignedItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['unassignedItem']->value) {
?>
						<?php $_smarty_tpl->_assignInScope('itemType', $_smarty_tpl->tpl_vars['unassignedItem']->value->getType());?>
						<?php if (!empty($_smarty_tpl->tpl_vars['navigationMenuItemTypes']->value[$_smarty_tpl->tpl_vars['itemType']->value]['conditionalWarning'])) {?>
							<?php $_smarty_tpl->_assignInScope('hasConditionalDisplay', true);?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('hasConditionalDisplay', false);?>
						<?php }?>
						<li data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['unassignedItem']->value->getId() ));?>
" data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemType']->value ));?>
">
							<div class="item">
								<div class="item_title">
									<span class="fa fa-sort"></span>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['unassignedItem']->value->getLocalizedTitle() ));?>

								</div>
								<div class="item_buttons">
									<?php if ($_smarty_tpl->tpl_vars['hasConditionalDisplay']->value) {?>
										<button class="btnConditionalDisplay">
											<span class="fa fa-eye-slash"></span>
											<span class="-screenReader">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.navigationMenus.form.conditionalDisplay"),$_smarty_tpl ) );?>

											</span>
										</button>
									<?php }?>
								</div>
							</div>
						</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuTree']->value, 'assignment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['assignment']->value) {
?>
				<input type="hidden" name="menuTree[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assignment']->value->getMenuItemId() ));?>
][seq]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assignment']->value->getSequence() ));?>
">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assignment']->value->children, 'childAssignment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['childAssignment']->value) {
?>
					<input type="hidden" name="menuTree[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['childAssignment']->value->getMenuItemId() ));?>
][seq]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['childAssignment']->value->getSequence() ));?>
">
					<input type="hidden" name="menuTree[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['childAssignment']->value->getMenuItemId() ));?>
][parentId]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['childAssignment']->value->getParentId() ));?>
">
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormArea(array('id'=>"navigationMenuItems"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"navigationMenuFormSubmit",'submitText'=>"common.save"),$_smarty_tpl ) );?>

</form>
<?php }
}
