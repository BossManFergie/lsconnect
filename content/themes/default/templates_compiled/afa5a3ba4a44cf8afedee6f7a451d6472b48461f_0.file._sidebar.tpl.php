<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:54:19
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937248ba00ff2_81894714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afa5a3ba4a44cf8afedee6f7a451d6472b48461f' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_sidebar.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5937248ba00ff2_81894714 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav nav-pills nav-stacked nav-home">
    <!-- basic -->
    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_fullname'];?>
">
            <span><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_fullname'];?>
</span>
        </a>
    </li>
    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile">
            <i class="fa fa-pencil-square fa-fw pr10"></i>
            <?php echo __("Edit Profile");?>

        </a>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] == 1) {?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp">
                <i class="fa fa-tachometer fa-fw pr10"></i> 
                <?php echo __("Admin Panel");?>

            </a>
        </li>
    <?php }?>
    <!-- basic -->

    <!-- favorites -->
    <li class="ptb5">
        <small class="text-muted"><?php echo mb_strtoupper(__("favorites"), 'UTF-8');?>
</small>
    </li>

    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
"><i class="fa fa-newspaper-o fa-fw pr10"></i> <?php echo __("News Feed");?>
</a>
    </li>
    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages"><i class="fa fa-comments-o fa-fw pr10"></i> <?php echo __("Messages");?>
</a>
    </li>
    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
/photos"><i class="fa fa-picture-o fa-fw pr10"></i> <?php echo __("Photos");?>
</a>
    </li>
    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
/friends"><i class="fa fa-users fa-fw pr10"></i> <?php echo __("Friends");?>
</a>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "saved") {?>class="active"<?php }?>>
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/saved"><i class="fa fa-bookmark fa-fw pr10"></i> <?php echo __("Saved");?>
</a>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "games") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games"><i class="fa fa-gamepad fa-fw pr10"></i> <?php echo __("Games");?>
</a>
        </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "products") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/products"><i class="fa fa-shopping-cart fa-fw pr10"></i> <?php echo __("My Products");?>
</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market"><i class="fa fa-shopping-bag fa-fw pr10"></i> <?php echo __("Market");?>
</a>
        </li>
    <?php }?>
    <!-- favorites -->

     <!-- pages -->
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
       
        <li class="ptb5">
            <small class="text-muted"><?php echo mb_strtoupper(__("pages"), 'UTF-8');?>
</small>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['pages']) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_picture'];?>
" alt="">
                        <span><?php echo $_smarty_tpl->tpl_vars['page']->value['page_title'];?>
</span>
                    </a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php }?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "pages") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages"><i class="fa fa-cubes fa-fw pr10"></i> <?php echo __("Manage Pages");?>
</a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "create_page") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/create/page"><i class="fa fa-plus-circle fa-fw pr10"></i> <?php echo __("Create Page");?>
</a>
        </li>
    <?php }?>
    <!-- pages -->

    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
        <!-- groups -->
        <li class="ptb5">
            <small class="text-muted"><?php echo mb_strtoupper(__("groups"), 'UTF-8');?>
</small>
        </li>

        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['groups'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['groups'], 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture'];?>
" alt="">
                        <span><?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
</span>
                    </a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php }?>

        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "create_group") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/create/group"><i class="fa fa-users fa-fw pr10"></i> <?php echo __("Create Group");?>
</a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "groups") {?>class="active"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups"><i class="fa fa-cubes fa-fw pr10"></i> <?php echo __("Manage Groups");?>
</a>
        </li>
        <!-- groups -->
    <?php }?>
</ul><?php }
}
