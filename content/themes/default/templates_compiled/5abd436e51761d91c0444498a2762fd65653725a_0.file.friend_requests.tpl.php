<?php
/* Smarty version 3.1.31, created on 2017-06-07 22:01:06
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/friend_requests.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593877a2f245c7_53443218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5abd436e51761d91c0444498a2762fd65653725a' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/friend_requests.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_user.tpl' => 3,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_593877a2f245c7_53443218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- side panel -->
        <div class="col-xs-12 visible-xs-block offcanvas-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <!-- side panel -->

        <div class="col-xs-12 offcanvas-mainbar">
            <div class="row">
                <!-- left panel -->
                <div class="col-sm-8">
                    <!-- friend requests -->
                    <div class="panel panel-default">
                        <?php if ($_smarty_tpl->tpl_vars['view']->value != "sent") {?>
                            <div class="panel-heading light">
                                <div class="mt5">
                                    <strong><?php echo __("Respond to Your Friend Request");?>
</strong>
                                </div>
                                <div class="mb5">
                                    <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests/sent"><?php echo __("View Sent Requests");?>
</a></small>
                                </div>
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"request"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                <?php } else { ?>
                                    <p class="text-center text-muted">
                                        <?php echo __("No new requests");?>

                                    </p>
                                <?php }?>

                                <!-- see-more -->
                                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                    <div class="alert alert-info see-more js_see-more" data-get="friend_requests">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                <?php }?>
                                <!-- see-more -->
                            </div>
                        <?php } else { ?>
                            <div class="panel-heading light">
                                <div class="mt5">
                                    <strong><?php echo __("Friend Requests Sent");?>
</strong>
                                </div>
                                <div class="mb5">
                                    <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests"><?php echo __("View Received Requests");?>
</a></small>
                                </div>
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent']) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"cancel"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                <?php } else { ?>
                                    <p class="text-center text-muted">
                                        <?php echo __("No new requests");?>

                                    </p>
                                <?php }?>

                                <!-- see-more -->
                                <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                    <div class="alert alert-info see-more js_see-more" data-get="friend_requests_sent">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                <?php }?>
                                <!-- see-more -->
                            </div>
                        <?php }?>
                    </div>
                    <!-- friend requests -->

                    <!-- people you may know -->
                    <div class="panel panel-default">
                        <div class="panel-heading light">
                            <div class="mt5">
                                <strong><?php echo __("People You May Know");?>
</strong>
                            </div>
                        </div>
                        <div class="panel-body">
                            
                            <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['new_people']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['new_people'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"add"), 0, true);
?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </ul>
                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No people available");?>

                                </p>
                            <?php }?>

                            <!-- see-more -->
                            <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['new_people']) >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
                                <div class="alert alert-info see-more js_see-more" data-get="new_people">
                                    <span><?php echo __("See More");?>
</span>
                                    <div class="loader loader_small x-hidden"></div>
                                </div>
                            <?php }?>
                            <!-- see-more -->

                        </div>
                    </div>
                    <!-- people you may know -->
                </div>
                <!-- left panel -->

                <!-- right panel -->
                <div class="col-sm-4">
                    <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
                <!-- right panel -->
            </div>
        </div>

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
