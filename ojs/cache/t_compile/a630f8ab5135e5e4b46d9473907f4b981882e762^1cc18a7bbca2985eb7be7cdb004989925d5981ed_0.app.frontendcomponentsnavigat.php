<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-26 13:13:57
  from 'app:frontendcomponentsnavigat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eccf9f59dc197_80565556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc18a7bbca2985eb7be7cdb004989925d5981ed' => 
    array (
      0 => 'app:frontendcomponentsnavigat',
      1 => 1590491588,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eccf9f59dc197_80565556 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['navigationMenu']->value) {?>
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
" class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ulClass']->value ));?>
">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigationMenu']->value->menuTree, 'navigationMenuItemAssignment', false, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value) {
?>
			<?php if (!$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getIsDisplayed()) {?>
				<?php continue 1;?>
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('hasChildren', false);?>
			<?php if (!empty($_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->children)) {?>
				<?php $_smarty_tpl->_assignInScope('hasChildren', true);?>
			<?php }?>
			<li class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['liClass']->value ));
if ($_smarty_tpl->tpl_vars['hasChildren']->value) {?> dropdown<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getUrl();?>
"<?php if ($_smarty_tpl->tpl_vars['hasChildren']->value) {?> class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"<?php }?>>
					<?php echo $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getLocalizedTitle();?>

					<?php if ($_smarty_tpl->tpl_vars['hasChildren']->value) {?>
						<span class="caret"></span>
					<?php }?>
				</a>
				<?php if (!empty($_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->children)) {?>
					<ul class="dropdown-menu <?php if ($_smarty_tpl->tpl_vars['id']->value === 'navigationUser') {?>dropdown-menu-right<?php }?>">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->children, 'childNavigationMenuItemAssignment', false, 'childField');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['childField']->value => $_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getIsDisplayed()) {?>
								<li class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['liClass']->value ));?>
">
									<a href="<?php echo $_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getUrl();?>
">
										<?php echo $_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getLocalizedTitle();?>

									</a>
								</li>
							<?php }?>
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
<?php }
}
}
