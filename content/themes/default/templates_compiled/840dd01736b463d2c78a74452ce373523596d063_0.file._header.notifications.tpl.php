<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:54:05
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_header.notifications.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937247d558522_24786080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '840dd01736b463d2c78a74452ce373523596d063' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_header.notifications.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_notification.tpl' => 1,
  ),
),false)) {
function content_5937247d558522_24786080 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="dropdown js_live-notifications">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-globe fa-lg"></i>
        <span class="label <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_notifications_counter'] == 0) {?>hidden<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_notifications_counter'];?>

        </span>
    </a>
    <div class="dropdown-menu dropdown-widget with-arrow">
        <div class="dropdown-widget-header">
            <?php echo __("Notifications");?>

        </div>
        <div class="dropdown-widget-body">
            <div class="js_scroller">
                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['notifications']) > 0) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['notifications'], 'notification');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
?>
                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </ul>
                <?php } else { ?>
                    <p class="text-center text-muted mt10">
                        <?php echo __("No notifications");?>

                    </p>
                <?php }?>
            </div>
        </div>
        <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/notifications"><?php echo __("See All");?>
</a>
    </div>
</li><?php }
}
