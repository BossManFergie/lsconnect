<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:47:55
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_group.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937311bec8584_91398063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ba4cce51cfe546c0b682cdbdebb217060a3265d' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_group.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5937311bec8584_91398063 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?><li class="col-sm-12 col-md-6"><div class="box-container"><?php } else { ?><li class="feeds-item"><?php }?>
    <div class="data-container">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];?>
">
            <img class="data-avatar" src="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
">
        </a>
        <div class="data-content">
            <div class="pull-right flip">
                <?php if ($_smarty_tpl->tpl_vars['_group']->value['i_joined']) {?>
                <button type="button" class="btn btn-default btn-friends js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
">
                    <i class="fa fa-check"></i>
                    <?php echo __("Joined");?>

                </button>
                <?php } else { ?>
                <button type="button" class="btn btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_id'];?>
">
                    <i class="fa fa-user-plus"></i>
                    <?php echo __("Join Group");?>

                </button>
                <?php }?>
            </div>
            <div>
                <span class="name">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
</a>
                </span>
                <div><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_members'];?>
 <?php echo __("Members");?>
</div>
            </div>
        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['_parent']->value == "profile") {?></div></li><?php } else { ?></li><?php }
}
}
