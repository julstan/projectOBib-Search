<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 17:16:18
  from 'app:controllersgridgridRow.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec93e42a484d4_26228497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6060c09758e9b78c4249b5a7467d87a8ec1e7dad' => 
    array (
      0 => 'app:controllersgridgridRow.tp',
      1 => 1590244069,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 2,
  ),
),false)) {
function content_5ec93e42a484d4_26228497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\saraf\\xampp\\htdocs\\projectOBib-Search\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (!is_null($_smarty_tpl->tpl_vars['row']->value->getId())) {?>
	<?php $_smarty_tpl->_assignInScope('rowIdPrefix', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "component-",$_smarty_tpl->tpl_vars['row']->value->getGridId() )));?>
	<?php if ($_smarty_tpl->tpl_vars['categoryId']->value) {?>
		<?php $_smarty_tpl->_assignInScope('rowIdPrefix', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['rowIdPrefix']->value,"-category-",$_smarty_tpl->tpl_vars['categoryId']->value )) )));?>
	<?php }?>
	<?php $_smarty_tpl->_assignInScope('rowId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['rowIdPrefix']->value,"-row-",$_smarty_tpl->tpl_vars['row']->value->getId() )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('rowId', '');
}?>

<?php $_smarty_tpl->_assignInScope('row_class', "gridRow");
if (is_a($_smarty_tpl->tpl_vars['row']->value,'GridCategoryRow')) {?>
	<?php $_smarty_tpl->_assignInScope('row_class', ($_smarty_tpl->tpl_vars['row_class']->value).(' category'));?>
	<?php if (!$_smarty_tpl->tpl_vars['row']->value->hasFlag('gridRowStyle')) {?>
		<?php $_smarty_tpl->_assignInScope('row_class', ($_smarty_tpl->tpl_vars['row_class']->value).(' default_category_style'));?>
	<?php }
}
if ($_smarty_tpl->tpl_vars['row']->value->getActions(@constant('GRID_ACTION_POSITION_DEFAULT'))) {?>
	<?php $_smarty_tpl->_assignInScope('row_class', ($_smarty_tpl->tpl_vars['row_class']->value).(' has_extras'));
}?>

<tr <?php if ($_smarty_tpl->tpl_vars['rowId']->value) {?>id="<?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rowId']->value ))," ","_");?>
" <?php }?> class="<?php echo $_smarty_tpl->tpl_vars['row_class']->value;?>
">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column', false, 'columnId', 'columnLoop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['columnId']->value => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_columnLoop']->value['index']++;
?>

				<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('indent')) {?>
			<?php continue 1;?>
		<?php }?>

		<?php $_smarty_tpl->_assignInScope('col_class', '');?>
		<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('firstColumn')) {?>
			<?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).('first_column'));?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('alignment')) {?>
			<?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).(' pkp_helpers_text_'));?>
			<?php $_smarty_tpl->_assignInScope('col_class', ($_smarty_tpl->tpl_vars['col_class']->value).($_smarty_tpl->tpl_vars['column']->value->getFlag('alignment')));?>
		<?php }?>

		<td<?php if ($_smarty_tpl->tpl_vars['col_class']->value) {?> class="<?php echo $_smarty_tpl->tpl_vars['col_class']->value;?>
"<?php }?>>
			<?php if ($_smarty_tpl->tpl_vars['row']->value->hasActions() && $_smarty_tpl->tpl_vars['column']->value->hasFlag('firstColumn')) {?>
				<?php if ($_smarty_tpl->tpl_vars['row']->value->getActions(@constant('GRID_ACTION_POSITION_DEFAULT'))) {?>
					<a href="#" class="show_extras">
						<span class="pkp_screen_reader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"grid.settings"),$_smarty_tpl ) );?>
</span>
					</a>
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['cells']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_columnLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_columnLoop']->value['index'] : null)];?>

				<?php if (is_a($_smarty_tpl->tpl_vars['row']->value,'GridCategoryRow') && $_smarty_tpl->tpl_vars['column']->value->hasFlag('showTotalItemsNumber')) {?>
					<span class="category_items_number">(<?php echo $_smarty_tpl->tpl_vars['grid']->value->getCategoryItemsCount($_smarty_tpl->tpl_vars['categoryRow']->value->getData(),$_smarty_tpl->tpl_vars['request']->value);?>
)</span>
				<?php }?>
				<div class="row_actions">
					<?php if ($_smarty_tpl->tpl_vars['row']->value->getActions(@constant('GRID_ACTION_POSITION_ROW_LEFT'))) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value->getActions(@constant('GRID_ACTION_POSITION_ROW_LEFT')), 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
							<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['action']->value,'contextId'=>smarty_modifier_replace($_smarty_tpl->tpl_vars['rowId']->value," ","_")), 0, true);
?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				</div>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['cells']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_columnLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_columnLoop']->value['index'] : null)];?>

				<?php if (is_a($_smarty_tpl->tpl_vars['row']->value,'GridCategoryRow') && $_smarty_tpl->tpl_vars['column']->value->hasFlag('showTotalItemsNumber')) {?>
					<span class="category_items_number">(<?php echo $_smarty_tpl->tpl_vars['grid']->value->getCategoryItemsCount($_smarty_tpl->tpl_vars['categoryRow']->value->getData(),$_smarty_tpl->tpl_vars['request']->value);?>
)</span>
				<?php }?>
			<?php }?>
		</td>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>
<?php if ($_smarty_tpl->tpl_vars['row']->value->getActions(@constant('GRID_ACTION_POSITION_DEFAULT'))) {?>
	<tr id="<?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rowId']->value ))," ","_");?>
-control-row" class="row_controls<?php if (is_a($_smarty_tpl->tpl_vars['row']->value,'GridCategoryRow')) {?> category_controls<?php }?>">
		<td colspan="<?php echo $_smarty_tpl->tpl_vars['grid']->value->getColumnsCount('indent');?>
">
			<?php if ($_smarty_tpl->tpl_vars['row']->value->getActions(@constant('GRID_ACTION_POSITION_DEFAULT'))) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value->getActions(@constant('GRID_ACTION_POSITION_DEFAULT')), 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
					<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['action']->value,'contextId'=>smarty_modifier_replace($_smarty_tpl->tpl_vars['rowId']->value," ","_")), 0, true);
?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</td>
	</tr>
<?php }
}
}
