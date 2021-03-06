<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:54:20
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_post.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937248c20c390_34891165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e9968da1a9fbb58443a144ac7e5ea5bb0b682cf' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/__feeds_post.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.text.tpl' => 1,
    'file:__feeds_post_shared.tpl' => 1,
    'file:__feeds_post.comments.tpl' => 1,
  ),
),false)) {
function content_5937248c20c390_34891165 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['standalone']->value) {?><li><?php }?>
    <!-- post -->
    <div class="post <?php if ($_smarty_tpl->tpl_vars['boosted']->value) {?>boosted<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">

        <?php if ($_smarty_tpl->tpl_vars['standalone']->value && $_smarty_tpl->tpl_vars['pinned']->value) {?>
            <div class="pin-icon" data-toggle="tooltip" title="<?php echo __('Pinned Post');?>
">
                <i class="fa fa-bookmark"></i>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['standalone']->value && $_smarty_tpl->tpl_vars['boosted']->value) {?>
            <div class="boosted-icon" data-toggle="tooltip" title="<?php echo __('Promoted');?>
">
                <i class="fa fa-bullhorn"></i>
            </div>
        <?php }?>

        <!-- post body -->
        <div class="post-body">
            <!-- post header -->
            <div class="post-header">
                <!-- post picture -->
                <div class="post-avatar">
                    <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_picture'];?>
);">
                    </a>
                </div>
                <!-- post picture -->

                <!-- post meta -->
                <div class="post-meta">
                    <!-- post author name & menu -->
                    <div>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                            <!-- post menu -->
                            <div class="pull-right flip dropdown">
                                <i class="fa fa-chevron-down dropdown-toggle" data-toggle="dropdown"></i>
                                <ul class="dropdown-menu post-dropdown-menu">
                                    <?php if ($_smarty_tpl->tpl_vars['post']->value['manage_post'] && $_smarty_tpl->tpl_vars['post']->value['post_type'] == "product") {?>
                                        <li>
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['available']) {?>
                                                <a href="#" class="js_sold-post">
                                                    <div class="action no-desc">
                                                        <i class="fa fa-tag fa-fw"></i> <span><?php echo __("Mark as Sold");?>
</span>
                                                    </div>
                                                </a>
                                            <?php } else { ?>
                                                <a href="#" class="js_unsold-post">
                                                    <div class="action no-desc">
                                                        <i class="fa fa-tag fa-fw"></i> <span><?php echo __("Mark as Available");?>
</span>
                                                    </div>
                                                </a>
                                            <?php }?>
                                        </li>
                                        <li class="divider"></li>
                                    <?php }?>
                                    <li>
                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['i_save']) {?>
                                            <a href="#" class="js_unsave-post">
                                                <div class="action no-desc">
                                                    <i class="fa fa-bookmark fa-fw"></i> <span><?php echo __("Unsave Post");?>
</span>
                                                </div>
                                            </a>
                                        <?php } else { ?>
                                            <a href="#" class="js_save-post">
                                                <div class="action no-desc">
                                                    <i class="fa fa-bookmark fa-fw"></i> <span><?php echo __("Save Post");?>
</span>
                                                </div>
                                            </a>
                                        <?php }?>
                                    </li>
                                    <li class="divider"></li>
                                    <?php if ($_smarty_tpl->tpl_vars['post']->value['manage_post']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_boost_posts']) {?>
                                            <li>
                                                <?php if ($_smarty_tpl->tpl_vars['post']->value['boosted']) {?>
                                                    <a href="#" class="js_unboost-post">
                                                        <div class="action no-desc">
                                                            <i class="fa fa-bolt fa-fw"></i> <span><?php echo __("Unboost Post");?>
</span>
                                                        </div>
                                                    </a>
                                                <?php } else { ?>
                                                    <a href="#" class="js_boost-post">
                                                        <div class="action no-desc">
                                                            <i class="fa fa-bolt fa-fw"></i> <span><?php echo __("Boost Post");?>
</span>
                                                        </div>
                                                    </a>
                                                <?php }?>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages">
                                                    <div class="action no-desc">
                                                        <i class="fa fa-bolt fa-fw"></i> <span><?php echo __("Boost Post");?>
</span>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php }?>
                                        <li>
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value['pinned']) {?>
                                                <a href="#" class="js_unpin-post">
                                                    <div class="action no-desc">
                                                        <i class="fa fa-thumb-tack fa-fw"></i> <span><?php echo __("Unpin Post");?>
</span>
                                                    </div>
                                                </a>
                                            <?php } else { ?>
                                                <a href="#" class="js_pin-post">
                                                    <div class="action no-desc">
                                                        <i class="fa fa-thumb-tack fa-fw"></i> <span><?php echo __("Pin Post");?>
</span>
                                                    </div>
                                                </a>
                                            <?php }?>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "product") {?>
                                            <li>
                                                <a href="" data-toggle="modal" data-url="posts/product_editor.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                                                    <div class="action no-desc">
                                                        <i class="fa fa-pencil fa-fw"></i> <?php echo __("Edit Product");?>

                                                    </div>
                                                </a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <a href="#" class="js_edit-post">
                                                    <div class="action no-desc">
                                                        <i class="fa fa-pencil fa-fw"></i> <?php echo __("Edit Post");?>

                                                    </div>
                                                </a>
                                            </li>
                                        <?php }?>
                                        <li>
                                            <a href="#" class="js_delete-post">
                                                <div class="action no-desc">
                                                    <i class="fa fa-trash-o fa-fw"></i> <?php echo __("Delete Post");?>

                                                </div>
                                            </a>
                                        </li>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type'] == "user") {?>
                                            <li>
                                                <a href="#" class="js_hide-author" data-author-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
" data-author-name="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_name'];?>
">
                                                    <div class="action">
                                                        <i class="fa fa-minus-circle fa-fw"></i> <?php echo __("Unfollow");?>
 <?php echo get_firstname($_smarty_tpl->tpl_vars['post']->value['user_fullname']);?>

                                                    </div>
                                                    <div class="action-desc"><?php echo __("Stop seeing posts but stay friends");?>
</div>
                                                </a>
                                            </li>
                                        <?php }?>
                                        <li>
                                            <a href="#" class="js_hide-post">
                                                <div class="action">
                                                    <i class="fa fa-eye-slash fa-fw"></i> <?php echo __("Hide this post");?>

                                                </div>
                                                <div class="action-desc"><?php echo __("See fewer posts like this");?>
</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="js_report-post">
                                                <div class="action no-desc">
                                                    <i class="fa fa-flag fa-fw"></i> <?php echo __("Report post");?>

                                                </div>
                                            </a>
                                        </li>
                                    <?php }?>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" target="_blank">
                                            <div class="action no-desc">
                                                <i class="fa fa-link fa-fw"></i> <?php echo __("Open post in new tab");?>

                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- post menu -->
                        <?php }?>

                        <!-- post author name -->
                        <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_name'];?>
</a>
                        </span>
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['post_author_verified']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type'] == "user") {?>
                            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                            <?php } else { ?>
                            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['user_subscribed']) {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Pro User");?>
' class="fa fa-bolt fa-fw pro-badge"></i>
                        <?php }?>
                        <!-- post author name -->

                        <!-- post type meta -->
                        <span class="post-title">
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "shared") {?>
                                <?php echo __("shared");?>
 
                                <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['user_id'];?>
">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['post_author_url'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['post_author_name'];?>

                                    </a><?php echo __("'s");?>

                                </span> 
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['post_id'];?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'photos') {?>
                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['origin']['photos_num'] > 1) {
echo __("photos");
} else {
echo __("photo");
}?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'media') {?>
                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['origin']['media']['media_type'] != "soundcloud") {?>
                                            <?php echo __("video");?>

                                        <?php } else { ?>
                                            <?php echo __("song");?>

                                        <?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'link') {?>
                                        <?php echo __("link");?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'poll') {?>
                                        <?php echo __("poll");?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'album') {?>
                                        <?php echo __("album");?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'video') {?>
                                        <?php echo __("video");?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'audio') {?>
                                        <?php echo __("audio");?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == 'file') {?>
                                        <?php echo __("file");?>

                                    <?php } else { ?>
                                        <?php echo __("post");?>

                                    <?php }?>
                                </a>

                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "link") {?>
                                <?php echo __("shared a link");?>


                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "album") {?>
                                <?php echo __("added");?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['photos_num'];?>
 <?php echo __("photos to the album");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['album']['path'];?>
/album/<?php echo $_smarty_tpl->tpl_vars['post']->value['album']['album_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['album']['title'];?>
</a>

                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "poll") {?>
                                <?php echo __("created a poll");?>


                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "product") {?>
                                <?php echo __("added new product for sell");?>


                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "video") {?>
                                <?php echo __("added a video");?>


                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "audio") {?>
                                <?php echo __("added an audio");?>


                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "file") {?>
                                <?php echo __("added a file");?>


                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "photos") {?>
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['photos_num'] == 1) {?>
                                    <?php echo __("added a photo");?>

                                <?php } else { ?>
                                    <?php echo __("added");?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['photos_num'];?>
 <?php echo __("photos");?>

                                <?php }?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "profile_picture") {?>
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['user_gender'] == "male") {?>
                                <?php echo __("updated his profile picture");?>

                                <?php } else { ?>
                                <?php echo __("updated her profile picture");?>

                                <?php }?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "profile_cover") {?>
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['user_gender'] == "male") {?>
                                <?php echo __("updated his cover photo");?>

                                <?php } else { ?>
                                <?php echo __("updated her cover photo");?>

                                <?php }?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "page_picture") {?>
                                <?php echo __("updated page picture");?>


                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "page_cover") {?>
                                <?php echo __("updated cover photo");?>


                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "group_picture") {?>
                                <?php echo __("updated group picture");?>


                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "group_cover") {?>
                                <?php echo __("updated group cover");?>

                                
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['_get']->value != 'posts_group' && $_smarty_tpl->tpl_vars['post']->value['in_group']) {?>
                                <i class="fa fa-caret-right ml5 mr5"></i><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['post']->value['group_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['group_title'];?>
</a>

                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['in_wall']) {?>
                                <i class="fa fa-caret-right ml5 mr5"></i>
                                <span class="js_user-popover" data-type="user" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['wall_id'];?>
">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['wall_username'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['wall_fullname'];?>
</a>
                                </span>
                            <?php }?>
                        </span>
                        <!-- post type meta -->

                        <!-- post feeling -->
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['feeling_action']) {?>
                        <span class="post-title">
                            <?php echo __("is");?>
 <i class="twa twa-lg twa-<?php echo $_smarty_tpl->tpl_vars['post']->value['feeling_icon'];?>
"></i> <?php echo __($_smarty_tpl->tpl_vars['post']->value["feeling_action"]);?>
 <?php echo __($_smarty_tpl->tpl_vars['post']->value["feeling_value"]);?>

                        </span>
                        <?php }?>
                        <!-- post feeling -->
                    </div>
                    <!-- post author name & menu -->

                    <!-- post time & location & privacy -->
                    <div class="post-time">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
</a>

                        <?php if ($_smarty_tpl->tpl_vars['post']->value['location']) {?>
                        ·
                        <i class="fa fa-map-marker"></i> <span><?php echo $_smarty_tpl->tpl_vars['post']->value['location'];?>
</span>
                        <?php }?>

                        - 
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['manage_post'] && $_smarty_tpl->tpl_vars['post']->value['user_type'] == 'user' && !$_smarty_tpl->tpl_vars['post']->value['in_group'] && $_smarty_tpl->tpl_vars['post']->value['post_type'] != "product") {?>
                            <!-- privacy -->
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "me") {?>
                                <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="me" title='<?php echo __("Shared with: Only Me");?>
'>
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="btn-group-icon fa fa-lock"></i> <span class="caret"></span>
                                    </button>
                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "friends") {?>
                                <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="friends" title='<?php echo __("Shared with: Friends");?>
'>
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="btn-group-icon fa fa-users"></i> <span class="caret"></span>
                                    </button>
                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public") {?>
                                <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="public" title='<?php echo __("Shared with: Public");?>
'>
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="btn-group-icon fa fa-globe"></i> <span class="caret"></span>
                                    </button>
                            <?php }?>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#" class="js_edit-privacy" data-title='<?php echo __("Shared with: Public");?>
' data-value="public">
                                            <i class="fa fa-globe"></i> <?php echo __("Public");?>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="js_edit-privacy" data-title='<?php echo __("Shared with: Friends");?>
' data-value="friends">
                                            <i class="fa fa-users"></i> <?php echo __("Friends");?>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="js_edit-privacy" data-title='<?php echo __("Shared with: Only Me");?>
' data-value="me">
                                            <i class="fa fa-lock"></i> <?php echo __("Only Me");?>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- privacy -->
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "me") {?>
                                <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Only Me");?>
'></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "friends") {?>
                                <i class="fa fa-users" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Friends");?>
'></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public") {?>
                                <i class="fa fa-globe" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Public");?>
'></i>
                            <?php }?>
                        <?php }?>
                    </div>
                    <!-- post time & location & privacy -->
                </div>
                <!-- post meta -->
            </div>
            <!-- post header -->

            <!-- product -->
            <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "product" && $_smarty_tpl->tpl_vars['post']->value['product']) {?>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['available']) {?>
                    <div class="mb5 text-lg">
                        <strong><?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
</strong>
                    </div>
                <?php } else { ?>
                    <div class="mb5 text-lg x-muted">
                        <strong>(<?php echo __("SOLD");?>
) <?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
</strong>
                    </div>
                <?php }?>
                <div class="mb5 text-bg">
                    <i class="fa fa-money fa-fw"></i> <span class="green"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['post']->value['product']['price'];?>
</span> (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                </div>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['location']) {?>
                    <div class="mb10 text-muted">
                        <i class="fa fa-map-marker fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['product']['location'];?>

                    </div>
                <?php }?>
            <?php }?>
            <!-- product -->

            <!-- post text -->
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- post text -->

            <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "album" || ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "product" && $_smarty_tpl->tpl_vars['post']->value['photos_num'] > 0) || $_smarty_tpl->tpl_vars['post']->value['post_type'] == "photos" || $_smarty_tpl->tpl_vars['post']->value['post_type'] == "profile_picture" || $_smarty_tpl->tpl_vars['post']->value['post_type'] == "profile_cover" || $_smarty_tpl->tpl_vars['post']->value['post_type'] == "page_picture" || $_smarty_tpl->tpl_vars['post']->value['post_type'] == "page_cover" || $_smarty_tpl->tpl_vars['post']->value['post_type'] == "group_picture" || $_smarty_tpl->tpl_vars['post']->value['post_type'] == "group_cover") {?>
                <div class="mt10 clearfix">
                    <div class="pg_wrapper">
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['photos_num'] == 1) {?>
                            <div class="pg_1x">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
" data-context="<?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == 'product') {?>post<?php } else { ?>album<?php }?>">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
">
                                </a>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['photos_num'] == 2) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                <div class="pg_2x">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
');"></a>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['photos_num'] == 3) {?>
                            <div class="pg_3x">
                                <div class="pg_2o3">
                                    <div class="pg_2o3_in">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
');"></a>
                                    </div>
                                </div>
                                <div class="pg_1o3">
                                    <div class="pg_1o3_in">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][1]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][1]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][1]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][1]['source'];?>
');"></a>
                                    </div>
                                    <div class="pg_1o3_in">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][2]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][2]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][2]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][2]['source'];?>
');"></a>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="pg_4x">
                                <div class="pg_2o3">
                                    <div class="pg_2o3_in">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
');"></a>
                                    </div>
                                </div>
                                <div class="pg_1o3">
                                    <div class="pg_1o3_in">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][1]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][1]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][1]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][1]['source'];?>
');"></a>
                                    </div>
                                    <div class="pg_1o3_in">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][2]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][2]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][2]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][2]['source'];?>
');"></a>
                                    </div>
                                    <div class="pg_1o3_in">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][3]['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][3]['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][3]['source'];?>
" data-context="post" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][3]['source'];?>
');">
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value['photos_num'] > 4) {?>
                                            <span class="more">+<?php echo $_smarty_tpl->tpl_vars['post']->value['photos_num']-4;?>
</span>
                                            <?php }?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "media" && $_smarty_tpl->tpl_vars['post']->value['media']) {?>
                <div class="mt10">
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['media']['source_type'] == "photo") {?>
                        <div class="post-media">
                            <div class="post-media-image">
                                <div style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_url'];?>
');"></div>
                            </div>
                            <div class="post-media-meta">
                                <div class="source"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_provider'];?>
</a></div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['media']['source_provider'] == "YouTube" || $_smarty_tpl->tpl_vars['post']->value['media']['source_provider'] == "Vimeo" || $_smarty_tpl->tpl_vars['post']->value['media']['source_provider'] == "SoundCloud" || $_smarty_tpl->tpl_vars['post']->value['media']['source_provider'] == "Vine") {?>
                            <div class="post-media">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <?php echo html_entity_decode($_smarty_tpl->tpl_vars['post']->value['media']['source_html'],ENT_QUOTES);?>

                                </div>
                            </div>
                            <div class="post-media-meta">
                                <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_title'];?>
</a>
                                <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_text'];?>
</div>
                                <div class="source"><?php echo $_smarty_tpl->tpl_vars['post']->value['media']['source_provider'];?>
</div>
                            </div>
                        <?php } else { ?>
                            <div class="embed-ifram-wrapper">
                                <?php echo html_entity_decode($_smarty_tpl->tpl_vars['post']->value['media']['source_html'],ENT_QUOTES);?>

                            </div>
                        <?php }?>
                    <?php }?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "link" && $_smarty_tpl->tpl_vars['post']->value['link']) {?>
                <div class="mt10">
                    <div class="post-media">
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['link']['source_thumbnail']) {?>
                            <div class="post-media-image">
                                <div style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['post']->value['link']['source_thumbnail'];?>
');"></div>
                            </div>
                        <?php }?>
                        <div class="post-media-meta">
                            <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link']['source_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['post']->value['link']['source_title'];?>
</a>
                            <div class="text mb5"><?php echo $_smarty_tpl->tpl_vars['post']->value['link']['source_text'];?>
</div>
                            <div class="source"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['post']->value['link']['source_host'], 'UTF-8');?>
</div>
                        </div>
                    </div>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "poll" && $_smarty_tpl->tpl_vars['post']->value['poll']) {?>
                <div class="poll-options mt10" data-poll-votes="<?php echo $_smarty_tpl->tpl_vars['post']->value['poll']['votes'];?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['poll']['options'], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
                        <div class="mb5">
                            <div class="poll-option js_poll-vote" data-id="<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" data-option-votes="<?php echo $_smarty_tpl->tpl_vars['option']->value['votes'];?>
">
                                <div class="percentage-bg" <?php if ($_smarty_tpl->tpl_vars['post']->value['poll']['votes'] > 0) {?> style="width: <?php echo ($_smarty_tpl->tpl_vars['option']->value['votes']/$_smarty_tpl->tpl_vars['post']->value['poll']['votes'])*100;?>
%"<?php }?>></div>
                                <div class="radio radio-primary radio-inline">
                                    <input type="radio" name="poll_<?php echo $_smarty_tpl->tpl_vars['post']->value['poll']['poll_id'];?>
" id="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['checked']) {?>checked<?php }?>>
                                    <label for="option_<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['text'];?>
</label>
                                </div>
                            </div>
                            <div class="poll-voters">
                                <div class="more" data-toggle="modal" data-url="posts/who_votes.php?option_id=<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['option']->value['votes'];?>

                                </div>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "video" && $_smarty_tpl->tpl_vars['post']->value['video']) {?>
                <video width="100%" height="100%" class="js_mediaelementplayer" controls="controls" preload="auto">
                    <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['video']['source'];?>
" type="video/mp4">
                    <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['video']['source'];?>
" type="video/webm">
                </video>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "audio" && $_smarty_tpl->tpl_vars['post']->value['audio']) {?>
                <audio width="100%" class="js_mediaelementplayer">
                    <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['audio']['source'];?>
">
                    <?php echo __("Your browser does not support HTML5 audio");?>

                </audio>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "file" && $_smarty_tpl->tpl_vars['post']->value['file']) {?>
                <div class="post-downloader">
                    <div class="icon">
                        <i class="fa fa-file-text-o fa-2x"></i>
                    </div>
                    <div class="info">
                        <strong><?php echo __("File Type");?>
</strong>: <?php ob_start();
echo $_smarty_tpl->tpl_vars['post']->value['file']['source'];
$_prefixVariable1=ob_get_clean();
echo get_extension($_prefixVariable1);?>

                        <div class="mt10">
                            <a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['file']['source'];?>
"><?php echo __("Download");?>
</a>
                        </div>
                    </div>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "shared" && $_smarty_tpl->tpl_vars['post']->value['origin']) {?>
                <?php if ($_smarty_tpl->tpl_vars['_snippet']->value) {?>
                <span class="text-link js_show-attachments"><?php echo __("Show Attachments");?>
</span>
                <?php }?>
                <div class="mt10 <?php if ($_smarty_tpl->tpl_vars['_snippet']->value) {?>x-hidden<?php }?>">
                    <div class="post-media">
                        <div class="post-media-meta">
                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_shared.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('origin'=>$_smarty_tpl->tpl_vars['post']->value['origin']), 0, false);
?>

                        </div>
                    </div>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "map") {?>
                <div class="post-map">
                    <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $_smarty_tpl->tpl_vars['post']->value['location'];?>
&amp;zoom=13&amp;size=600x250&amp;maptype=roadmap&amp;markers=color:red%7C<?php echo $_smarty_tpl->tpl_vars['post']->value['location'];?>
&amp;key=<?php echo $_smarty_tpl->tpl_vars['system']->value['geolocation_key'];?>
" width="100%">
                </div>
            <?php }?>

            <!-- product -->
            <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "product" && $_smarty_tpl->tpl_vars['post']->value['product'] && $_smarty_tpl->tpl_vars['post']->value['author_id'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
                <div class="mt10 clearfix">
                    <button type="button" class="btn btn-primary btn-sm pull-right flip js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['author_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_name'];?>
"><i class="fa fa-comments-o"></i> <?php echo __("Contact Seller");?>
</button>
                </div>
            <?php }?>
            <!-- product -->

            <!-- post actions & stats -->
            <div class="post-actions">

                <!-- post actions -->
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['i_like']) {?>
                        <span class="text-link js_unlike-post"><?php echo __("Unlike");?>
</span> - 
                    <?php } else { ?>
                        <span class="text-link js_like-post"><?php echo __("Like");?>
</span> - 
                    <?php }?>
                    <span class="text-link js_comment"><?php echo __("Comment");?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public") {?>
                         - 
                        <span class="text-link js_share"><?php echo __("Share");?>
</span>
                    <?php }?>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Please log in to like, share and comment!");?>
</a>
                <?php }?>
                <!-- post actions -->

                <!-- post stats -->
                <span class="post-stats-alt <?php if ($_smarty_tpl->tpl_vars['post']->value['likes'] == 0 && $_smarty_tpl->tpl_vars['post']->value['comments'] == 0 && $_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>">
                    <i class="fa fa-thumbs-o-up"></i> <span class="js_post-likes-num"><?php echo $_smarty_tpl->tpl_vars['post']->value['likes'];?>
</span> 
                    <i class="fa fa-comments"></i> <span class="js_post-comments-num"><?php echo $_smarty_tpl->tpl_vars['post']->value['comments'];?>
</span> 
                    <i class="fa fa-share"></i> <span class="js_post-shares-num"><?php echo $_smarty_tpl->tpl_vars['post']->value['shares'];?>
</span>
                </span>
                <!-- post stats -->
            </div>
            <!-- post actions & stats -->
        </div>
        <!-- post body -->

        <!-- post footer -->
        <div class="post-footer <?php if ($_smarty_tpl->tpl_vars['post']->value['likes'] == 0 && $_smarty_tpl->tpl_vars['post']->value['comments'] == 0 && $_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>">

            <!-- post stats (likes & shares) -->
            <div class="post-stats clearfix <?php if ($_smarty_tpl->tpl_vars['post']->value['likes'] == 0 && $_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>">
                <!-- shares -->
                <div class="pull-right flip js_post-shares <?php if ($_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>">
                    <i class="fa fa-share"></i> 
                    <span class="text-link" data-toggle="modal" data-url="posts/who_shares.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['post']->value['shares'];?>
 <?php echo __("shares");?>

                    </span>
                </div>
                <!-- shares -->

                <!-- likes -->
                <span class="js_post-likes <?php ob_start();
echo $_smarty_tpl->tpl_vars['post']->value['likes'];
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == 0) {?>x-hidden<?php }?>">
                    <i class="fa fa-thumbs-o-up"></i> <span class="text-link" data-toggle="modal" data-url="posts/who_likes.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
"><span class="js_post-likes-num"><?php echo $_smarty_tpl->tpl_vars['post']->value['likes'];?>
</span> <?php echo __("people");?>
</span> <?php echo __("like this");?>

                </span>
                <!-- likes -->
            </div>
            <!-- post stats (likes & shares) -->

            <!-- comments -->
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- comments -->
        </div>
        <!-- post footer -->

    </div>
    <!-- post -->
<?php if (!$_smarty_tpl->tpl_vars['standalone']->value) {?></li><?php }
}
}
