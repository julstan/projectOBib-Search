<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-23 11:12:10
  from 'app:controllerspagetasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8e8ea9cb881_23004712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff1cb192ef33fc9e3d92436bc42c54efdb4c274b' => 
    array (
      0 => 'app:controllerspagetasks.tpl',
      1 => 1590153805,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec8e8ea9cb881_23004712 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Initialise JS handler.
	$(function() {
		$('#userTasks').pkpHandler(
			'$.pkp.pages.header.TasksHandler',
			{
				requestedPage: <?php echo json_encode($_smarty_tpl->tpl_vars['requestedPage']->value);?>
,
				fetchUnreadNotificationsCountUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.notifications.NotificationsGridHandler",'op'=>"getUnreadNotificationsCount",'escape'=>false),$_smarty_tpl ) ));?>

			}
		);
	});
<?php echo '</script'; ?>
>
<div id="userTasks">
	<a href="#" id="notificationsToggle">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.tasks"),$_smarty_tpl ) );?>

		<span id="unreadNotificationCount" class="task-count<?php if ($_smarty_tpl->tpl_vars['unreadNotificationCount']->value) {?> hasTasks<?php }?>">
			<?php echo $_smarty_tpl->tpl_vars['unreadNotificationCount']->value;?>

		</span>
	</a>
	<div id="notificationsPopover" class="panel">
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'notificationsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.notifications.TaskNotificationsGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"notificationsGrid",'url'=>$_smarty_tpl->tpl_vars['notificationsGridUrl']->value),$_smarty_tpl ) );?>

	</div>
</div>
<?php }
}
