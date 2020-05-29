<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-28 18:29:32
  from 'app:frontendpagesarticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecfe6ec22d069_23554771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c372c95cd85572e0fbc9a53d0323a0b229cfc78' => 
    array (
      0 => 'app:frontendpagesarticle.tpl',
      1 => 1590493783,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs_article.tpl' => 2,
    'app:frontend/objects/article_details.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5ecfe6ec22d069_23554771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ))), 0, false);
?>

<div class="page page_article">
	<?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs_article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitle'=>$_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle()), 0, false);
?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs_article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"common.publication"), 0, true);
?>
	<?php }?>

		<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/article_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Footer::PageFooter"),$_smarty_tpl ) );?>


</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
