<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 20:34:51
  from 'app:frontendpagessearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed155cb7ea3f6_03070798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756a7119cb48731a8fd45c250b45f4bcca2d6b01' => 
    array (
      0 => 'app:frontendpagessearch.tpl',
      1 => 1586500703,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/objects/article_summary.tpl' => 1,
    'app:frontend/components/notification.tpl' => 2,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_5ed155cb7ea3f6_03070798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojsrepo\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"common.search"), 0, false);
?>

<div class="page page_search">

	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"common.search"), 0, false);
?>
	<h1>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.search"),$_smarty_tpl ) );?>

	</h1>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "searchFormUrl", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"search",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo parse_str(parse_url($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'searchFormUrl'),@constant('PHP_URL_QUERY')),$_smarty_tpl->tpl_vars['formUrlParameters']->value);?>

	<form class="cmp_form" method="get" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strtok($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'searchFormUrl'),"?") ));?>
">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formUrlParameters']->value, 'paramValue', false, 'paramKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['paramKey']->value => $_smarty_tpl->tpl_vars['paramValue']->value) {
?>
			<input type="hidden" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paramKey']->value ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paramValue']->value ));?>
"/>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<div class="search_input">
			<label class="pkp_screen_reader" for="query">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.searchFor"),$_smarty_tpl ) );?>

			</label>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5162130075ed155cb4dada5_41895503', 'searchQuery');
?>

		</div>

		<fieldset class="search_advanced">
			<legend>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.advancedFilters"),$_smarty_tpl ) );?>

			</legend>
			<div class="date_range">
				<div class="from">
					<label class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.dateFrom"),$_smarty_tpl ) );?>

					</label>
					<?php echo smarty_function_html_select_date(array('prefix'=>"dateFrom",'time'=>$_smarty_tpl->tpl_vars['dateFrom']->value,'start_year'=>$_smarty_tpl->tpl_vars['yearStart']->value,'end_year'=>$_smarty_tpl->tpl_vars['yearEnd']->value,'year_empty'=>'','month_empty'=>'','day_empty'=>'','field_order'=>"YMD"),$_smarty_tpl);?>

				</div>
				<div class="to">
					<label class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.dateTo"),$_smarty_tpl ) );?>

					</label>
					<?php echo smarty_function_html_select_date(array('prefix'=>"dateTo",'time'=>$_smarty_tpl->tpl_vars['dateTo']->value,'start_year'=>$_smarty_tpl->tpl_vars['yearStart']->value,'end_year'=>$_smarty_tpl->tpl_vars['yearEnd']->value,'year_empty'=>'','month_empty'=>'','day_empty'=>'','field_order'=>"YMD"),$_smarty_tpl);?>

				</div>
			</div>
			<div class="author">
				<label class="label" for="authors">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.author"),$_smarty_tpl ) );?>

				</label>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4637098075ed155cb578b74_02754203', 'searchAuthors');
?>

			</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Search::SearchResults::AdditionalFilters"),$_smarty_tpl ) );?>

		</fieldset>

		<div class="submit">
			<button class="submit" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.search"),$_smarty_tpl ) );?>
</button>
		</div>
	</form>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Search::SearchResults::PreResults"),$_smarty_tpl ) );?>


		<?php if (!$_smarty_tpl->tpl_vars['results']->value->wasEmpty()) {?>
		<div class="pkp_screen_reader">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_info'][0], array( array('iterator'=>$_smarty_tpl->tpl_vars['results']->value),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_links'][0], array( array('anchor'=>"results",'iterator'=>$_smarty_tpl->tpl_vars['results']->value,'name'=>"search",'query'=>$_smarty_tpl->tpl_vars['query']->value,'searchJournal'=>$_smarty_tpl->tpl_vars['searchJournal']->value,'authors'=>$_smarty_tpl->tpl_vars['authors']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'abstract'=>$_smarty_tpl->tpl_vars['abstract']->value,'galleyFullText'=>$_smarty_tpl->tpl_vars['galleyFullText']->value,'discipline'=>$_smarty_tpl->tpl_vars['discipline']->value,'subject'=>$_smarty_tpl->tpl_vars['subject']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'coverage'=>$_smarty_tpl->tpl_vars['coverage']->value,'indexTerms'=>$_smarty_tpl->tpl_vars['indexTerms']->value,'dateFromMonth'=>$_smarty_tpl->tpl_vars['dateFromMonth']->value,'dateFromDay'=>$_smarty_tpl->tpl_vars['dateFromDay']->value,'dateFromYear'=>$_smarty_tpl->tpl_vars['dateFromYear']->value,'dateToMonth'=>$_smarty_tpl->tpl_vars['dateToMonth']->value,'dateToDay'=>$_smarty_tpl->tpl_vars['dateToDay']->value,'dateToYear'=>$_smarty_tpl->tpl_vars['dateToYear']->value,'orderBy'=>$_smarty_tpl->tpl_vars['orderBy']->value,'orderDir'=>$_smarty_tpl->tpl_vars['orderDir']->value),$_smarty_tpl ) );?>

		</div>
	<?php }?>

		<div class="search_results">
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'results','item'=>'result'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'results','item'=>'result'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/article_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['result']->value['publishedSubmission'],'journal'=>$_smarty_tpl->tpl_vars['result']->value['journal'],'showDatePublished'=>true,'hideGalleys'=>true), 0, false);
?>
		<?php $_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'results','item'=>'result'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	</div>

		<?php if ($_smarty_tpl->tpl_vars['results']->value->wasEmpty()) {?>
		<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'message'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value ))), 0, false);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"notice",'messageKey'=>"search.noResults"), 0, true);
?>
		<?php }?>

		<?php } else { ?>
		<div class="cmp_pagination">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_info'][0], array( array('iterator'=>$_smarty_tpl->tpl_vars['results']->value),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_links'][0], array( array('anchor'=>"results",'iterator'=>$_smarty_tpl->tpl_vars['results']->value,'name'=>"search",'query'=>$_smarty_tpl->tpl_vars['query']->value,'searchJournal'=>$_smarty_tpl->tpl_vars['searchJournal']->value,'authors'=>$_smarty_tpl->tpl_vars['authors']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'abstract'=>$_smarty_tpl->tpl_vars['abstract']->value,'galleyFullText'=>$_smarty_tpl->tpl_vars['galleyFullText']->value,'discipline'=>$_smarty_tpl->tpl_vars['discipline']->value,'subject'=>$_smarty_tpl->tpl_vars['subject']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'coverage'=>$_smarty_tpl->tpl_vars['coverage']->value,'indexTerms'=>$_smarty_tpl->tpl_vars['indexTerms']->value,'dateFromMonth'=>$_smarty_tpl->tpl_vars['dateFromMonth']->value,'dateFromDay'=>$_smarty_tpl->tpl_vars['dateFromDay']->value,'dateFromYear'=>$_smarty_tpl->tpl_vars['dateFromYear']->value,'dateToMonth'=>$_smarty_tpl->tpl_vars['dateToMonth']->value,'dateToDay'=>$_smarty_tpl->tpl_vars['dateToDay']->value,'dateToYear'=>$_smarty_tpl->tpl_vars['dateToYear']->value,'orderBy'=>$_smarty_tpl->tpl_vars['orderBy']->value,'orderDir'=>$_smarty_tpl->tpl_vars['orderDir']->value),$_smarty_tpl ) );?>

		</div>
	<?php }?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17869528565ed155cb7e86c2_88923652', 'searchSyntaxInstructions');
?>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'searchQuery'} */
class Block_5162130075ed155cb4dada5_41895503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'searchQuery' => 
  array (
    0 => 'Block_5162130075ed155cb4dada5_41895503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<input type="text" id="query" name="query" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['query']->value ));?>
" class="query" placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.search"),$_smarty_tpl ) ) ));?>
">
			<?php
}
}
/* {/block 'searchQuery'} */
/* {block 'searchAuthors'} */
class Block_4637098075ed155cb578b74_02754203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'searchAuthors' => 
  array (
    0 => 'Block_4637098075ed155cb578b74_02754203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<input type="text" for="authors" name="authors" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authors']->value ));?>
">
				<?php
}
}
/* {/block 'searchAuthors'} */
/* {block 'searchSyntaxInstructions'} */
class Block_17869528565ed155cb7e86c2_88923652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'searchSyntaxInstructions' => 
  array (
    0 => 'Block_17869528565ed155cb7e86c2_88923652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'searchSyntaxInstructions'} */
}
