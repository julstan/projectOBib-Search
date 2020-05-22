<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 22:18:19
  from 'app:formkeywordInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8338b2fdc63_56614497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60f7cd6c9bf3a69bf585a90dc8b68d6ed66447c9' => 
    array (
      0 => 'app:formkeywordInput.tpl',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8338b2fdc63_56614497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('uniqId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "-",$_smarty_tpl->tpl_vars['FBV_uniqId']->value )) )));
if ($_smarty_tpl->tpl_vars['FBV_multilingual']->value && count($_smarty_tpl->tpl_vars['formLocales']->value) > 1) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formLocales']->value, 'thisFormLocaleName', false, 'thisFormLocale', 'formLocales', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thisFormLocale']->value => $_smarty_tpl->tpl_vars['thisFormLocaleName']->value) {
?>
		<?php echo '<script'; ?>
>
			$(document).ready(function(){
				$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocale']->value,'jqselector' ));?>
-<?php echo $_smarty_tpl->tpl_vars['FBV_id']->value;
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
").tagit({
					fieldName: "keywords[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocale']->value ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
][]",
					<?php if ($_smarty_tpl->tpl_vars['thisFormLocale']->value != $_smarty_tpl->tpl_vars['formLocale']->value && empty($_smarty_tpl->tpl_vars['FBV_currentKeywords']->value[$_smarty_tpl->tpl_vars['thisFormLocale']->value])) {?>placeholderText: "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocaleName']->value ));?>
",<?php }?>
					allowSpaces: true,
					<?php if ($_smarty_tpl->tpl_vars['FBV_sourceUrl']->value && !$_smarty_tpl->tpl_vars['FBV_disabled']->value) {?>
						tagSource: function(search, showChoices) {
							$.ajax({
								url: "<?php echo $_smarty_tpl->tpl_vars['FBV_sourceUrl']->value;?>
&locale=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocale']->value ));?>
", 								data: search,
								success: function(choices) {
									showChoices(choices);
								}
							});
						}
					<?php } else { ?>
						availableTags: <?php echo json_encode($_smarty_tpl->tpl_vars['FBV_availableKeywords']->value[$_smarty_tpl->tpl_vars['thisFormLocale']->value]);?>

					<?php }?>
				});

								<?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?>
					$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocale']->value,'jqselector' ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value,$_smarty_tpl->tpl_vars['uniqId']->value )) ));?>
").find('.tagit-close, .tagit-new').remove();
				<?php }?>
			});
		<?php echo '</script'; ?>
>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<?php echo '<script'; ?>
>
		$(function() {
			$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value,'javascript' ));?>
-localization-popover-container<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
').pkpHandler(
				'$.pkp.controllers.form.MultilingualInputHandler'
				);
		});
		<?php echo '</script'; ?>
>
				<span id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
-localization-popover-container<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
" class="localization_popover_container localization_popover_container_focus_forced pkpTagit">
			<ul class="localizable <?php if ($_smarty_tpl->tpl_vars['formLocale']->value != $_smarty_tpl->tpl_vars['currentLocale']->value) {?> flag flag_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));
}?>" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
				<?php if ($_smarty_tpl->tpl_vars['FBV_currentKeywords']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FBV_currentKeywords']->value[$_smarty_tpl->tpl_vars['formLocale']->value], 'currentKeyword');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currentKeyword']->value) {
?><li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentKeyword']->value ));?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['FBV_label_content']->value) {?><span><?php echo $_smarty_tpl->tpl_vars['FBV_label_content']->value;?>
</span><?php }?>
			<div class="localization_popover">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formLocales']->value, 'thisFormLocaleName', false, 'thisFormLocale');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thisFormLocale']->value => $_smarty_tpl->tpl_vars['thisFormLocaleName']->value) {
if ($_smarty_tpl->tpl_vars['formLocale']->value != $_smarty_tpl->tpl_vars['thisFormLocale']->value) {?>
					<ul class="multilingual_extra flag flag_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thisFormLocale']->value ));?>
" id="<?php echo $_smarty_tpl->tpl_vars['thisFormLocale']->value;?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
						<?php if ($_smarty_tpl->tpl_vars['FBV_currentKeywords']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FBV_currentKeywords']->value[$_smarty_tpl->tpl_vars['thisFormLocale']->value], 'currentKeyword');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currentKeyword']->value) {
?><li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentKeyword']->value ));?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
					</ul>
				<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</span>

<?php } else { ?> 	<?php echo '<script'; ?>
>
		$(document).ready(function(){
			$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value,'jqselector' ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
").tagit({
				fieldName: "keywords[<?php if ($_smarty_tpl->tpl_vars['FBV_multilingual']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formLocale']->value ));?>
-<?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
][]",
				allowSpaces: true,
				<?php if ($_smarty_tpl->tpl_vars['FBV_sourceUrl']->value && !$_smarty_tpl->tpl_vars['FBV_disabled']->value) {?>
					tagSource: function(search, showChoices) {
						$.ajax({
							url: "<?php echo $_smarty_tpl->tpl_vars['FBV_sourceUrl']->value;?>
", 							data: search,
							success: function(choices) {
								showChoices(choices);
							}
						});
					}
				<?php } else { ?>
					availableTags: <?php echo json_encode($_smarty_tpl->tpl_vars['FBV_availableKeywords']->value[$_smarty_tpl->tpl_vars['formLocale']->value]);?>

				<?php }?>
			});

						<?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?>
				$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
").find('.tagit-close, .tagit-new').remove();
				$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
:empty").removeClass('tagit');
			<?php }?>
		});
	<?php echo '</script'; ?>
>

	<!-- The container which will be processed by tag-it.js as the interests widget -->
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));
echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['FBV_currentKeywords']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FBV_currentKeywords']->value[$_smarty_tpl->tpl_vars['formLocale']->value], 'currentKeyword');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currentKeyword']->value) {
?><li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentKeyword']->value ));?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></ul>
	<?php if ($_smarty_tpl->tpl_vars['FBV_label_content']->value) {?><span><?php echo $_smarty_tpl->tpl_vars['FBV_label_content']->value;?>
</span><?php }
}
}
}
