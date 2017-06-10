<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:53:26
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593724568a9173_88405089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e483c8655b2236262c42649c47cc643a5eafeb86' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/index.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
    'file:_directory.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_announcements.tpl' => 1,
    'file:_publisher.tpl' => 1,
    'file:_boosted_post.tpl' => 1,
    'file:_posts.tpl' => 3,
    'file:__feeds_page.tpl' => 2,
    'file:__feeds_group.tpl' => 2,
    'file:__feeds_game.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_593724568a9173_88405089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    <!-- page content -->
    <div class="index-wrapper" <?php if (!$_smarty_tpl->tpl_vars['system']->value['system_wallpaper_default'] && $_smarty_tpl->tpl_vars['system']->value['system_wallpaper']) {?> style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_wallpaper'];?>
')" <?php }?>>
        <div class="container">
            <div class="index-intro">
                <h1>
                    <?php echo __("Welcome to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>

                </h1>
                <p>
                    <?php echo __("Share your memories, connect with others, make new friends");?>

                </p>
            </div>

            <div class="row relative">
                
                <?php if ($_smarty_tpl->tpl_vars['random_users']->value) {?>
                    <!-- random 4 users -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['random_users']->value, 'random_user');
$_smarty_tpl->tpl_vars['random_user']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['random_user']->value) {
$_smarty_tpl->tpl_vars['random_user']->index++;
$__foreach_random_user_0_saved = $_smarty_tpl->tpl_vars['random_user'];
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['random_user']->value['user_name'];?>
" class="fly-head" 
                            <?php if ($_smarty_tpl->tpl_vars['random_user']->index == 0) {?> style="top: 140px;left: 50px;" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['random_user']->index == 1) {?> style="bottom: 60px;left: 210px;" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['random_user']->index == 2) {?> style="top: 140px;right: 50px;" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['random_user']->index == 3) {?> style="bottom: 60px;right: 210px;" <?php }?>
                            data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['random_user']->value['user_fullname'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['random_user']->value['user_picture'];?>
">
                        </a>
                    <?php
$_smarty_tpl->tpl_vars['random_user'] = $__foreach_random_user_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <!-- random 4 users -->
                <?php }?>

                <!-- sign in/up form -->
                <?php $_smarty_tpl->_subTemplateRender('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- sign in/up form -->
            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_directory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
    <!-- page content -->
<?php } else { ?>
    <!-- page content -->
    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- left panel -->
            <div class="col-sm-4 col-md-2 offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <!-- left panel -->

            <div class="col-sm-8 col-md-10 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-sm-12 col-md-7">
                        <!-- announcments -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_announcements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <!-- announcments -->

                        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                            <!-- publisher -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_privacy'=>true), 0, false);
?>

                            <!-- publisher -->

                            <!-- boosted post -->
                            <?php if ($_smarty_tpl->tpl_vars['boosted_post']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_boosted_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['boosted_post']->value), 0, false);
?>

                            <?php }?>
                            <!-- boosted post -->

                            <!-- posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"newsfeed"), 0, false);
?>

                            <!-- posts stream -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "saved") {?>
                            <!-- saved posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"saved",'_title'=>__("Saved Posts")), 0, true);
?>

                            <!-- saved posts stream -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "products") {?>
                            <!-- saved posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_filter'=>"product",'_title'=>__("My Products")), 0, true);
?>

                            <!-- saved posts stream -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>
                            <div class="panel panel-default">
                                <div class="panel-heading light clearfix">
                                    <div class="pull-right flip">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/create/page" class="btn btn-default btn-sm">
                                            <i class="fa fa-flag fa-fw pr10"></i> <?php echo __("Create Page");?>

                                        </a>
                                    </div>
                                    <div class="mt5">
                                        <strong><?php echo __("Your Pages");?>
</strong>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['pages']) > 0) {?>
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['pages'], '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </ul>
                                    <?php } else { ?>
                                        <p class="text-center text-muted">
                                            <?php echo __("No pages available");?>

                                        </p>
                                    <?php }?>

                                    <!-- see-more -->
                                    <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['pages']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                        <div class="alert alert-info see-more js_see-more" data-get="pages">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                    <?php }?>
                                    <!-- see-more -->

                                </div>
                            </div>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>
                            <div class="panel panel-default">
                                <div class="panel-heading light clearfix">
                                    <div class="pull-right flip">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/create/group" class="btn btn-default btn-sm">
                                            <i class="fa fa-flag fa-fw pr10"></i> <?php echo __("Create Group");?>

                                        </a>
                                    </div>
                                    <div class="mt5">
                                        <strong><?php echo __("Your Groups");?>
</strong>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['groups']) > 0) {?>
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['groups'], '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </ul>
                                    <?php } else { ?>
                                        <p class="text-center text-muted">
                                            <?php echo __("No groups available");?>

                                        </p>
                                    <?php }?>

                                    <!-- see-more -->
                                    <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['groups']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                        <div class="alert alert-info see-more js_see-more" data-get="groups">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                    <?php }?>
                                    <!-- see-more -->

                                </div>
                            </div>

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "create_page") {?>
                            <!-- create page -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="mt5">
                                        <strong><?php echo __("Create Page");?>
</strong>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="js_ajax-forms" data-url="pages_groups/create.php?type=page&do=create">
                                        <div class="form-group">
                                            <label for="category"><?php echo __("Category");?>
:</label>
                                            <select class="form-control" name="category" id="category">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="title"><?php echo __("Title");?>
:</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder='<?php echo __("Title of your page");?>
'>
                                        </div>
                                        <div class="form-group">
                                            <label for="username"><?php echo __("Username");?>
:</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder='<?php echo __("Username, e.g. YouTubeOfficial");?>
'>
                                        </div>
                                        <div class="form-group">
                                            <label for="description"><?php echo __("Description");?>
:</label>
                                            <textarea class="form-control" name="description" name="description"  placeholder='<?php echo __("Write about your page...");?>
'></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            </div>
                            <!-- create page -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "create_group") {?>
                            <!-- create group -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="mt5">
                                        <strong><?php echo __("Create Group");?>
</strong>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="js_ajax-forms" data-url="pages_groups/create.php?type=group&do=create">
                                        <div class="form-group">
                                            <label for="title"><?php echo __("Title");?>
:</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder='<?php echo __("Title of your group");?>
'>
                                        </div>
                                        <div class="form-group">
                                            <label for="username"><?php echo __("Username");?>
:</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder='<?php echo __("Username, e.g. DevelopersGroup");?>
'>
                                        </div>
                                        <div class="form-group">
                                            <label for="description"><?php echo __("Description");?>
:</label>
                                            <textarea class="form-control" name="description" placeholder='<?php echo __("Write about your group...");?>
'></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            </div>
                            <!-- create group -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "games") {?>
                            <div class="panel panel-default">
                                <div class="panel-heading light clearfix">
                                    <div class="mt5">
                                        <strong><?php echo __("Games");?>
</strong>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <?php if (count($_smarty_tpl->tpl_vars['games']->value) > 0) {?>
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, '_game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_game']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </ul>
                                    <?php } else { ?>
                                        <p class="text-center text-muted">
                                            <?php echo __("No games available");?>

                                        </p>
                                    <?php }?>

                                    <!-- see-more -->
                                    <?php if (count($_smarty_tpl->tpl_vars['games']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                        <div class="alert alert-info see-more js_see-more" data-get="games">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                    <?php }?>
                                    <!-- see-more -->

                                </div>
                            </div>

                        <?php }?>
                    </div>
                    <!-- center panel -->

                    <!-- right panel -->
                    <div class="col-sm-12 col-md-5">
                        <!-- pro members -->
                        <?php if (count($_smarty_tpl->tpl_vars['pro_members']->value) > 0) {?>
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                        <div class="pull-right flip">
                                            <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Upgrade to Pro");?>
</a></small>
                                        </div>
                                    <?php }?>
                                    <strong class="text-primary"><i class="fa fa-bolt fa-fw"></i> <?php echo __("Pro Members");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pro_members']->value, '_member');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_member']->value) {
?>
                                            <div class="col-xs-3 col-sm-4">
                                                <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_picture'];?>
);" >
                                                    <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_member']->value['user_fullname'];?>
</span>
                                                </a>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- pro members -->


                        <!-- boosted pages -->
                        <?php if (count($_smarty_tpl->tpl_vars['promoted_pages']->value) > 0) {?>
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                        <div class="pull-right flip">
                                            <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Upgrade to Pro");?>
</a></small>
                                        </div>
                                    <?php }?>
                                    <strong class="text-primary"><i class="fa fa-bullhorn fa-fw"></i> <?php echo __("Promoted Pages");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoted_pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                            <div class="col-xs-3 col-sm-4">
                                                <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
);" >
                                                    <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
</span>
                                                </a>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                         <!-- boosted pages -->

                        <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                        <!-- people you may know -->
                        <?php if (count($_smarty_tpl->tpl_vars['new_people']->value) > 0) {?>
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <div class="pull-right flip">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/friends/requests"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <strong><?php echo __("People you may know");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_people']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"add",'_small'=>true), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                         <!-- people you may know -->

                        <!-- suggested pages -->
                        <?php if (count($_smarty_tpl->tpl_vars['new_pages']->value) > 0) {?>
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <strong><?php echo __("Suggested Pages");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- suggested pages -->

                        <!-- suggested groups -->
                        <?php if (count($_smarty_tpl->tpl_vars['new_groups']->value) > 0) {?>
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <strong><?php echo __("Suggested Groups");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_groups']->value, '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- suggested groups -->

                        <!-- mini footer -->
                        <?php if (($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "saved") && (count($_smarty_tpl->tpl_vars['new_people']->value) > 0 || count($_smarty_tpl->tpl_vars['new_pages']->value) > 0 || count($_smarty_tpl->tpl_vars['new_groups']->value) > 0)) {?>
                            <div class="row plr10 hidden-xs">
                                <div class="col-xs-12 mb5">
                                    <?php if (count($_smarty_tpl->tpl_vars['static_pages']->value) > 0) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page', true);
$_smarty_tpl->tpl_vars['static_page']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->iteration++;
$_smarty_tpl->tpl_vars['static_page']->last = $_smarty_tpl->tpl_vars['static_page']->iteration == $_smarty_tpl->tpl_vars['static_page']->total;
$__foreach_static_page_10_saved = $_smarty_tpl->tpl_vars['static_page'];
?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_title'];?>

                                            </a><?php if (!$_smarty_tpl->tpl_vars['static_page']->last) {?> · <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['static_page'] = $__foreach_static_page_10_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/contacts">
                                            <?php echo __("Contacts");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
                                            <?php echo __("Directory");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                                            <?php echo __("Market");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_public']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search">
                                            <?php echo __("Search");?>

                                        </a>
                                    <?php }?>
                                </div>
                                <div class="col-xs-12">
                                    &copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 · <span class="text-link" data-toggle="modal" data-url="#translator"><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
                                </div>
                            </div>
                        <?php }?>
                        <!-- mini footer -->
                    </div>
                    <!-- right panel -->
                </div>
            </div>

        </div>
    </div>
    <!-- page content -->
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
