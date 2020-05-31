<?php
<<<<<<< HEAD
/* Smarty version 3.1.34-dev-7, created on 2020-05-28 17:24:58
=======
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 13:22:46
>>>>>>> b8631fa7f65ed81205617c774e6126d37babb355
  from 'plugins-plugins-generic-webFeed-generic-webFeed:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
<<<<<<< HEAD
  'unifunc' => 'content_5ecfd7ca8a1268_92762105',
=======
  'unifunc' => 'content_5ed242064bf577_44531518',
>>>>>>> b8631fa7f65ed81205617c774e6126d37babb355
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f9881179b0918b683ccd65bfe977b84e0327c3' => 
    array (
      0 => 'plugins-plugins-generic-webFeed-generic-webFeed:block.tpl',
<<<<<<< HEAD
      1 => 1590675245,
=======
      1 => 1590772941,
>>>>>>> b8631fa7f65ed81205617c774e6126d37babb355
      2 => 'plugins-plugins-generic-webFeed-generic-webFeed',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5ecfd7ca8a1268_92762105 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ed242064bf577_44531518 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> b8631fa7f65ed81205617c774e6126d37babb355
?><div class="pkp_block block_web_feed">
	<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.currentIssue"),$_smarty_tpl ) );?>
</span>
	<div class="content">
		<ul>
			<li>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"gateway",'op'=>"plugin",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "WebFeedGatewayPlugin","atom" ))),$_smarty_tpl ) );?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/lib/pkp/templates/images/atom.svg" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.webfeed.atom.altText"),$_smarty_tpl ) );?>
">
				</a>
			</li>
			<li>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"gateway",'op'=>"plugin",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "WebFeedGatewayPlugin","rss2" ))),$_smarty_tpl ) );?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/lib/pkp/templates/images/rss20_logo.svg" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.webfeed.rss2.altText"),$_smarty_tpl ) );?>
">
				</a>
			</li>
			<li>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"gateway",'op'=>"plugin",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( "WebFeedGatewayPlugin","rss" ))),$_smarty_tpl ) );?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/lib/pkp/templates/images/rss10_logo.svg" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.webfeed.rss1.altText"),$_smarty_tpl ) );?>
">
				</a>
			</li>
		</ul>
	</div>
</div>
<?php }
}
