<?php
<<<<<<< HEAD
/* Smarty version 3.1.34-dev-7, created on 2020-05-28 17:24:58
=======
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 13:22:46
>>>>>>> b8631fa7f65ed81205617c774e6126d37babb355
  from 'plugins-plugins-blocks-information-blocks-information:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
<<<<<<< HEAD
  'unifunc' => 'content_5ecfd7caa8c671_03042785',
=======
  'unifunc' => 'content_5ed242068bfb57_11249497',
>>>>>>> b8631fa7f65ed81205617c774e6126d37babb355
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cfccb091e9f7d3335e8f6bcede3bfc5ef2b549a' => 
    array (
      0 => 'plugins-plugins-blocks-information-blocks-information:block.tpl',
<<<<<<< HEAD
      1 => 1590675236,
=======
      1 => 1590772909,
>>>>>>> b8631fa7f65ed81205617c774e6126d37babb355
      2 => 'plugins-plugins-blocks-information-blocks-information',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5ecfd7caa8c671_03042785 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ed242068bfb57_11249497 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> b8631fa7f65ed81205617c774e6126d37babb355
if (!empty($_smarty_tpl->tpl_vars['forReaders']->value) || !empty($_smarty_tpl->tpl_vars['forAuthors']->value) || !empty($_smarty_tpl->tpl_vars['forLibrarians']->value)) {?>
<div class="pkp_block block_information">
	<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.information.link"),$_smarty_tpl ) );?>
</span>
	<div class="content">
		<ul>
			<?php if (!empty($_smarty_tpl->tpl_vars['forReaders']->value)) {?>
				<li>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"information",'op'=>"readers"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForReaders"),$_smarty_tpl ) );?>

					</a>
				</li>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['forAuthors']->value)) {?>
				<li>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"information",'op'=>"authors"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForAuthors"),$_smarty_tpl ) );?>

					</a>
				</li>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['forLibrarians']->value)) {?>
				<li>
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"information",'op'=>"librarians"),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.infoForLibrarians"),$_smarty_tpl ) );?>

					</a>
				</li>
			<?php }?>
		</ul>
	</div>
</div>
<?php }
}
}
