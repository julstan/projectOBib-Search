<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 17:16:12
  from 'app:frontendcomponentsbreadcr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec93e3c1a3d53_31497542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a10722600ebbc8779bdec4d1016d43fd016d5a0d' => 
    array (
      0 => 'app:frontendcomponentsbreadcr',
      1 => 1590244110,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec93e3c1a3d53_31497542 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="cmp_breadcrumbs" role="navigation" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.breadcrumbLabel"),$_smarty_tpl ) );?>
">
	<ol class="breadcrumb">
		<li>
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>@constant('ROUTE_PAGE')),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.homepageNavigationLabel"),$_smarty_tpl ) );?>

			</a>
		</li>
		<li class="active">
			<?php if ($_smarty_tpl->tpl_vars['currentTitleKey']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['currentTitleKey']->value),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentTitle']->value ));?>

			<?php }?>
		</li>
	</ol>
</nav>
<?php }
}
