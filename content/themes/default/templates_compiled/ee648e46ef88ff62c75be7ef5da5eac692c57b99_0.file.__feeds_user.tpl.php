<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:20:12
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372a9caca5d6_71893899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee648e46ef88ff62c75be7ef5da5eac692c57b99' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_user.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59372a9caca5d6_71893899 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?><li class="col-sm-12 col-md-6"><div class="box-container"><?php } else { ?><li class="feeds-item" data-id="<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
"><?php }?>
    <div class="data-container <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
">
        </a>
        <div class="data-content">
            <div class="pull-right flip">
                <?php if ($_smarty_tpl->tpl_vars['_connection']->value == "request") {?>
                <div class="btn btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
"><?php echo __("Confirm");?>
</div>
                <div class="btn btn-default js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
"><?php echo __("Delete Request");?>
</div>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "add") {?>
                <div class="btn btn-success btn-sm js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check fa-user-plus"></i> <?php echo __("Add Friend");?>

                </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "cancel") {?>
                <div class="btn btn-default btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check fa-user-plus"></i> <?php echo __("Friend Request Sent");?>

                </div>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "remove") {?>
                <div class="btn btn-default btn-friends js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check fa-fw"></i> <?php echo __("Friends");?>

                </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "follow") {?>
                <button type="button" class="btn btn-default js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-rss"></i>
                    <?php echo __("Follow");?>

                </button>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "unfollow") {?>
                <button type="button" class="btn btn-default js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-check"></i>
                    <?php echo __("Following");?>

                </button>

                <?php } elseif ($_smarty_tpl->tpl_vars['_connection']->value == "blocked") {?>
                <div class="btn btn-danger js_unblock-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <i class="fa fa-trash fa-fw"></i> <?php echo __("Unblock");?>

                </div>
                <?php }?>
            </div>
            <div>
                <span class="name js_user-popover" data-uid="<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_fullname'];?>
</a>
                </span>
                <?php if ($_smarty_tpl->tpl_vars['_user']->value['user_verified']) {?>
                <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_user']->value['user_subscribed']) {?>
                <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Pro User");?>
' class="fa fa-bolt fa-fw pro-badge"></i>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['_connection']->value != "me" && $_smarty_tpl->tpl_vars['_user']->value['mutual_friends_count'] > 0) {?>
            <div>
                <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_user']->value['mutual_friends_count'];?>
 <?php echo __("mutual friends");?>
</span>
            </div>
            <?php }?>
        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?></div></li><?php } else { ?></li><?php }
}
}
