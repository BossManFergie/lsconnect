<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:54:06
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/ajax.chat.master.sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937247e92eff6_70754179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff24744924b1c43e9dffee0d13f5ee7cc50fa3bb' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/ajax.chat.master.sidebar.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5937247e92eff6_70754179 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar_friends']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
    <li class="feeds-item">
        <div class="data-container clickable small js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
">
            <div class="data-content">
                <div class="pull-right flip">
                    <i class="fa fa-circle <?php if ($_smarty_tpl->tpl_vars['_user']->value['user_is_online']) {?>chat-sidebar-online<?php } else { ?>chat-sidebar-offline<?php }?>"></i>
                </div>
                <div>
                    <strong><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
</strong>
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_status_enabled'] && $_smarty_tpl->tpl_vars['_user']->value['user_last_login']) {?>
                        <br>
                        <small>
                            <?php ob_start();
echo __("Last Seen");
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
 <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_last_login'];?>
"><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_last_login'];?>
</span>
                        </small>
                    <?php }?>
                </div>
            </div>
        </div>
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ul><?php }
}
