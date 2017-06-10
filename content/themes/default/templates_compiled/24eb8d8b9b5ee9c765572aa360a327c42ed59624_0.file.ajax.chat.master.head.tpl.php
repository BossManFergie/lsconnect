<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:54:06
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/ajax.chat.master.head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937247e94a382_55051868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24eb8d8b9b5ee9c765572aa360a327c42ed59624' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/ajax.chat.master.head.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5937247e94a382_55051868 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['offline']->value) {?>

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        <?php echo __("Offline");?>

    </div>

<?php } else { ?>

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)
    </div>

<?php }
}
}
