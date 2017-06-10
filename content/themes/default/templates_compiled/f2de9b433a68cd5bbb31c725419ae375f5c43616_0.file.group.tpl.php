<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:24:39
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/group.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372ba759fea3_24497292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2de9b433a68cd5bbb31c725419ae375f5c43616' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/group.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_photo.tpl' => 2,
    'file:_publisher.tpl' => 1,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 1,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_59372ba759fea3_24497292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container offcanvas">
    <div class="row">

        <!-- side panel -->
        <div class="col-xs-12 visible-xs-block offcanvas-sidebar mt20">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <!-- side panel -->

        <div class="col-xs-12 offcanvas-mainbar">
            <!-- profile-header -->
            <div class="profile-header">
                <!-- profile-cover -->
                <div <?php if ($_smarty_tpl->tpl_vars['group']->value['group_cover_id']) {?> class="profile-cover-wrapper js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover'];?>
" data-context="album" <?php } else { ?> class="profile-cover-wrapper" <?php }?>  <?php if ($_smarty_tpl->tpl_vars['group']->value['group_cover']) {?> style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover'];?>
');" <?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                        <div class="profile-cover-change">
                            <i class="fa fa-camera js_x-uploader" data-handle="cover-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"></i>
                        </div>
                        <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['group']->value['group_cover']) {?>x-hidden<?php }?>">
                            <i class="fa fa-trash js_delete-cover" data-handle="cover-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" title='<?php echo __("Delete Cover");?>
'></i>
                        </div>
                        <div class="profile-cover-change-loader">
                            <div class="loader loader_large"></div>
                        </div>
                    <?php }?>
                </div>
                <!-- profile-cover -->

                <!-- profile-avatar -->
                <div class="profile-avatar-wrapper">
                    <img <?php if ($_smarty_tpl->tpl_vars['group']->value['group_picture_id']) {?> class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture'];?>
" data-context="album" <?php }?> src="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['group']->value['page_title'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                        <div class="profile-avatar-change">
                            <i class="fa fa-camera js_x-uploader" data-handle="picture-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"></i>
                        </div>
                        <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['group']->value['group_picture_default']) {?>x-hidden<?php }?>">
                            <i class="fa fa-trash js_delete-picture" data-handle="picture-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" title='<?php echo __("Delete Picture");?>
'></i>
                        </div>
                        <div class="profile-avatar-change-loader">
                            <div class="loader loader_medium"></div>
                        </div>
                    <?php }?>
                </div>
                <!-- profile-avatar -->

                <!-- profile-name -->
                <div class="profile-name-wrapper">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
</a>
                </div>
                <!-- profile-name -->

                <!-- profile-buttons -->
                <div class="profile-buttons-wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['group']->value['i_joined']) {?>
                        <button type="button" class="btn btn-default btn-friends js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                            <i class="fa fa-check"></i>
                            <?php echo __("Joined");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                            <i class="fa fa-user-plus"></i>
                            <?php echo __("Join Group");?>

                        </button>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings" class="btn btn-default">
                            <i class="fa fa-pencil"></i> <?php echo __("Update Info");?>

                        </a>
                    <?php } else { ?>
                        <a href="#" class="btn btn-default js_report-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                            <i class="fa fa-flag"></i> <?php echo __("Report");?>

                        </a>
                    <?php }?>
                </div>
                <!-- profile-buttons -->

                <!-- profile-tabs -->
                <div class="profile-tabs-wrapper">
                    <ul class="nav">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                                <?php echo __("Timeline");?>

                            </a>
                        </li>
                        <li class="middle-tabs">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos">
                                <?php echo __("Photos");?>

                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo __("More");?>

                                <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="middle-tabs-alt">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members"><?php echo __("Members");?>
</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- profile-tabs -->
            </div>
            <!-- profile-header -->

            <!-- profile-content -->
            <div class="row">
                <!-- profile-buttons alt -->
                <div class="col-sm-12">
                    <div class="panel panel-default profile-buttons-wrapper-alt">
                        <div class="panel-body">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['group']->value['i_joined']) {?>
                                <button type="button" class="btn btn-default btn-friends js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                    <i class="fa fa-check"></i>
                                    <?php echo __("Joined");?>

                                </button>
                            <?php } else { ?>
                                <button type="button" class="btn btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                    <i class="fa fa-user-plus"></i>
                                    <?php echo __("Join Group");?>

                                </button>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings" class="btn btn-default">
                                    <i class="fa fa-pencil"></i> <?php echo __("Update Info");?>

                                </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <!-- profile-buttons alt -->

                <!-- view content -->
                <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                    <div class="col-sm-4">
                        <!-- about -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <ul class="about-list">
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-users fa-fw fa-lg"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['group']->value['group_members'];?>
 <?php echo __("members");?>

                                        </div>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['group']->value['group_description']) {?>
                                        <li>
                                            <div class="about-list-item">
                                                <i class="fa fa-info-circle fa-fw fa-lg"></i>
                                                <?php echo $_smarty_tpl->tpl_vars['group']->value['group_description'];?>

                                            </div>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <!-- about -->

                        <!-- photos -->
                        <?php if (count($_smarty_tpl->tpl_vars['group']->value['photos']) > 0) {?>
                            <div class="panel panel-default panel-photos">
                                <div class="panel-heading">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_small'=>true), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- photos -->
                    </div>
                    <div class="col-sm-8">
                        <!-- publisher -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['group']->value['i_joined']) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"group",'_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id']), 0, false);
?>

                        <?php }?>
                        <!-- publisher -->

                        <!-- pinned post -->
                        <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value,'_get'=>"posts_group"), 0, false);
?>

                        <?php }?>
                        <!-- pinned post -->

                        <!-- posts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_group",'_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id']), 0, false);
?>

                        <!-- posts -->
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "photos") {?>
                    <!-- photos -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-photos">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos">
                                            <strong class="pr5"><?php echo __("Photos");?>
</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['group']->value['photos']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['group']->value['photos']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-type='group'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
 <?php echo __("doesn't have photos");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- photos -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "albums") {?>
                    <!-- albums -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-albums">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/albums">
                                            <strong class="pr5"><?php echo __("Albums");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['group']->value['albums']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['albums'], 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['group']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-type='group'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
 <?php echo __("doesn't have albums");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "album") {?>
                    <!-- albums -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-albums">
                            <div class="panel-heading with-icon with-nav">
                                <!-- back to albums -->
                                <div class="pull-right flip">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/albums" class="btn btn-default btn-sm">
                                        <?php echo __("Back to Albums");?>

                                    </a>
                                </div>
                                <!-- back to albums -->
                                
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/albums">
                                            <strong class="pr5"><?php echo __("Albums");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                            <?php $_smarty_tpl->_subTemplateRender('file:_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "members") {?>
                    <!-- members -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon with-nav">

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users pr5 panel-icon"></i>
                                    <strong><?php echo __("Members");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/members">
                                            <strong class="pr5"><?php echo __("Members");?>
</strong>
                                            <small><?php echo $_smarty_tpl->tpl_vars['group']->value['group_members'];?>
</small>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['group']->value['group_members'] > 0) {?>
                                <ul class="row">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['members'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_parent'=>"profile"), 0, true);
?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </ul>

                                <?php if ($_smarty_tpl->tpl_vars['group']->value['group_members'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                <!-- see-more -->
                                <div class="alert alert-info see-more js_see-more" data-get="members" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                    <span><?php echo __("See More");?>
</span>
                                    <div class="loader loader_small x-hidden"></div>
                                </div>
                                <!-- see-more -->
                                <?php }?>
                                <?php } else { ?>
                                <p class="text-center text-muted mt10">
                                    <?php echo $_smarty_tpl->tpl_vars['group']->value['user_fullname'];?>
 <?php echo __("doesn't have members");?>

                                </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- members -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-body with-nav">
                                <ul class="nav">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings"><i class="fa fa-wrench fa-fw fa-lg pr10"></i> <?php echo __("Group Settings");?>
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <!-- edit -->
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon">
                                <!-- delete -->
                                <div class="pull-right flip">
                                    <button type="button" class="btn btn-danger js_delete-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                        <i class="fa fa-trash-o"></i>
                                        <?php echo __("Delete Group");?>

                                    </button>
                                </div>
                                <!-- delete -->
                                <!-- panel title -->
                                <i class="fa fa-wrench pr5 panel-icon"></i>
                                <strong><?php echo __("Group Settings");?>
</strong>
                                <!-- panel title -->
                            </div>
                            <div class="panel-body">
                                <form class="js_ajax-forms" data-url="pages_groups/create.php?type=group&amp;do=edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                    <div class="form-group">
                                        <label for="title"><?php echo __("Title");?>
:</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder='<?php echo __("Name of your group");?>
' value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
">
                                    </div>
                                    <div class="form-group">
                                        <label for="username"><?php echo __("Username");?>
:</label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder='<?php echo __("Username, e.g. DevelopersGroup");?>
' value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                                    </div>
                                    <div class="form-group">
                                        <label for="description"><?php echo __("Description");?>
:</label>
                                        <textarea class="form-control" name="description" id="description" placeholder='<?php echo __("Write about your group...");?>
'><?php echo $_smarty_tpl->tpl_vars['group']->value['group_description'];?>
</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
</button>

                                    <!-- error -->
                                    <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                    <!-- error -->
                                </form>
                            </div>
                        </div>
                        <!-- edit -->
                    </div>
                <?php }?>
                <!-- view content -->
            </div>
            <!-- profile-content -->
        </div>

</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
