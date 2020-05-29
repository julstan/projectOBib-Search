<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 20:35:00
  from 'app:frontendobjectsarticlesum' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed155d41f2349_94571055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf1cd52b8ba8108de77f197078de34b733dd394' => 
    array (
      0 => 'app:frontendobjectsarticlesum',
      1 => 1590771528,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/galley_link.tpl' => 1,
  ),
),false)) {
function content_5ed155d41f2349_94571055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojsrepo\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('articlePath', $_smarty_tpl->tpl_vars['article']->value->getBestId());?>

<?php if ((!$_smarty_tpl->tpl_vars['section']->value['hideAuthor'] && $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == @constant('AUTHOR_TOC_DEFAULT')) || $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == @constant('AUTHOR_TOC_SHOW')) {?>
	<?php $_smarty_tpl->_assignInScope('showAuthor', true);
}?>

<?php $_smarty_tpl->_assignInScope('publication', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication());?>
<div class="obj_article_summary">
	<?php if ($_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('coverImage')) {?>
		<div class="cover">
			<a <?php if ($_smarty_tpl->tpl_vars['journal']->value) {?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php } else { ?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php }?> class="file">
				<?php $_smarty_tpl->_assignInScope('coverImage', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication()->getLocalizedData('coverImage'));?>
				<img
					src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication()->getLocalizedCoverImageUrl($_smarty_tpl->tpl_vars['article']->value->getData('contextId')) ));?>
"
					alt="<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['coverImage']->value['altText'] )))===null||$tmp==='' ? '' : $tmp);?>
"
				>
			</a>
		</div>
	<?php }?>

	<div class="title">
		<a id="article-<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['journal']->value) {?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php } else { ?>href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
"<?php }?>>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

			<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
				<span class="subtitle">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>

				</span>
			<?php }?>
		</a>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['showAuthor']->value || $_smarty_tpl->tpl_vars['article']->value->getPages() || ($_smarty_tpl->tpl_vars['article']->value->getDatePublished() && $_smarty_tpl->tpl_vars['showDatePublished']->value)) {?>
	<div class="meta">
		<?php if ($_smarty_tpl->tpl_vars['showAuthor']->value) {?>
		<div class="authors">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getAuthorString() ));?>

		</div>
		<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
			<div class="pages">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getPages() ));?>

			</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['showDatePublished']->value && $_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
			<div class="published">
				<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

			</div>
		<?php }?>

	</div>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['hideGalleys']->value) {?>
		<ul class="galleys_links">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getGalleys(), 'galley');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['primaryGenreIds']->value) {?>
					<?php $_smarty_tpl->_assignInScope('file', $_smarty_tpl->tpl_vars['galley']->value->getFile());?>
					<?php if (!$_smarty_tpl->tpl_vars['galley']->value->getRemoteUrl() && !($_smarty_tpl->tpl_vars['file']->value && in_array($_smarty_tpl->tpl_vars['file']->value->getGenreId(),$_smarty_tpl->tpl_vars['primaryGenreIds']->value))) {?>
						<?php continue 1;?>
					<?php }?>
				<?php }?>
				<li>
					<?php $_smarty_tpl->_assignInScope('hasArticleAccess', $_smarty_tpl->tpl_vars['hasAccess']->value);?>
					<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getSetting('publishingMode') == @constant('PUBLISHING_MODE_OPEN') || $_smarty_tpl->tpl_vars['publication']->value->getData('accessStatus') == @constant('ARTICLE_ACCESS_OPEN')) {?>
						<?php $_smarty_tpl->_assignInScope('hasArticleAccess', 1);?>
					<?php }?>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'labelledBy'=>"article-".((string)$_smarty_tpl->tpl_vars['article']->value->getId()),'hasAccess'=>$_smarty_tpl->tpl_vars['hasArticleAccess']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getData('purchaseArticleFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getData('currency')), 0, true);
?>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Issue::Issue::Article"),$_smarty_tpl ) );?>

</div>
<?php }
}
