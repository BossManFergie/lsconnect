<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:26:03
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372bfb39e7e6_73733256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfbc60e6faed117407e31217ac2ad2a93456b8c3' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/page.tpl',
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
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_59372bfb39e7e6_73733256 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_cover_id']) {?> class="profile-cover-wrapper js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover'];?>
" data-context="album" <?php } else { ?> class="profile-cover-wrapper" <?php }?>  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_cover']) {?> style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover'];?>
');" <?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
                        <div class="profile-cover-change">
                            <i class="fa fa-camera js_x-uploader" data-handle="cover-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
                        </div>
                        <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['spage']->value['page_cover']) {?>x-hidden<?php }?>">
                            <i class="fa fa-trash js_delete-cover" data-handle="cover-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
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
                    <img <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_picture_id']) {?> class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture'];?>
" data-context="album" <?php }?> src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
                        <div class="profile-avatar-change">
                            <i class="fa fa-camera js_x-uploader" data-handle="picture-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
                        </div>
                        <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_picture_default']) {?>x-hidden<?php }?>">
                            <i class="fa fa-trash js_delete-picture" data-handle="picture-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
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
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_verified']) {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                    <?php }?>
                </div>
                <!-- profile-name -->

                <!-- profile-buttons -->
                <div class="profile-buttons-wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['spage']->value['i_like']) {?>
                        <button type="button" class="btn btn-default js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                            <i class="fa fa-thumbs-o-up"></i>
                            <?php echo __("Unlike");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                            <i class="fa fa-thumbs-o-up"></i>
                            <?php echo __("Like");?>

                        </button>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_boost_pages']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_boosted']) {?>
                                <button type="button" class="btn btn-default js_unboost-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                    <i class="fa fa-bolt"></i>
                                    <?php echo __("Unboost");?>

                                </button>
                            <?php } else { ?>
                                <button type="button" class="btn btn-danger js_boost-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                    <i class="fa fa-bolt"></i>
                                    <?php echo __("Boost");?>

                                </button>
                            <?php }?>
                        <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-danger">
                                <i class="fa fa-bolt"></i>
                                <?php echo __("Boost Page");?>

                            </a>
                        <?php }?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings" class="btn btn-default">
                            <i class="fa fa-pencil"></i> <?php echo __("Update Info");?>

                        </a>
                    <?php } else { ?>
                        <button class="btn btn-default js_report-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                            <i class="fa fa-flag"></i> <?php echo __("Report");?>

                        </button>
                    <?php }?>
                </div>
                <!-- profile-buttons -->

                <!-- profile-tabs -->
                <div class="profile-tabs-wrapper">
                    <ul class="nav">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
">
                                <?php echo __("Timeline");?>

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos">
                                <?php echo __("Photos");?>
 
                            </a>
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
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['spage']->value['i_like']) {?>
                                <button type="button" class="btn btn-default js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <?php echo __("Unlike");?>

                                </button>
                            <?php } else { ?>
                                <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <?php echo __("Like");?>

                                </button>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_boost_pages']) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_boosted']) {?>
                                        <button type="button" class="btn btn-default js_unboost-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                            <i class="fa fa-bolt"></i>
                                            <?php echo __("Unboost");?>

                                        </button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-danger js_boost-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                            <i class="fa fa-bolt"></i>
                                            <?php echo __("Boost");?>

                                        </button>
                                    <?php }?>
                                <?php } else { ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-danger">
                                        <i class="fa fa-bolt"></i>
                                        <?php echo __("Boost Page");?>

                                    </a>
                                <?php }?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings" class="btn btn-default">
                                    <i class="fa fa-pencil"></i> <?php echo __("Update Info");?>

                                </a>
                            <?php } else { ?>
                                <button class="btn btn-default js_report-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                    <i class="fa fa-flag"></i> <?php echo __("Report");?>

                                </button>
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
                                    <!-- likes -->
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-thumbs-o-up fa-fw fa-lg"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_likes'];?>
 <?php echo __("people like this");?>

                                        </div>
                                    </li>
                                    <!-- likes -->
                                    <!-- category -->
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-briefcase fa-fw fa-lg"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['spage']->value['category_name'];?>

                                        </div>
                                    </li>
                                    <!-- category -->
                                    <!-- description -->
                                    <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_description']) {?>
                                        <li>
                                            <div class="about-list-item">
                                                <i class="fa fa-info-circle fa-fw fa-lg"></i>
                                                <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_description'];?>

                                            </div>
                                        </li>
                                    <?php }?>
                                    <!-- description -->
                                </ul>
                            </div>
                        </div>
                        <!-- about -->

                        <!-- photos -->
                        <?php if (count($_smarty_tpl->tpl_vars['spage']->value['photos']) > 0) {?>
                            <div class="panel panel-default panel-photos">
                                <div class="panel-heading">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['photos'], 'photo');
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
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"page",'_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0, false);
?>

                        <?php }?>
                        <!-- publisher -->

                        <!-- pinned post -->
                        <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value), 0, false);
?>

                        <?php }?>
                        <!-- pinned post -->
                        
                        <!-- posts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_page",'_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0, false);
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
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos">
                                            <strong class="pr5"><?php echo __("Photos");?>
</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['spage']->value['photos']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['photos'], 'photo');
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
                                    <?php if (count($_smarty_tpl->tpl_vars['spage']->value['photos']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" data-type='page'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
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
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums">
                                            <strong class="pr5"><?php echo __("Albums");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['spage']->value['albums']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['albums'], 'album');
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
                                    <?php if (count($_smarty_tpl->tpl_vars['spage']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" data-type='page'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
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
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
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
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
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
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-body with-nav">
                                <ul class="side-nav">
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings"><i class="fa fa-cog fa-fw fa-lg pr10"></i> <?php echo __("Page Settings");?>
</a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_requests']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "verification") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/verification"><i class="fa fa-check-circle fa-fw fa-lg pr10"></i> <?php echo __("Verification");?>
</a>
                                        </li>
                                    <?php }?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/delete"><i class="fa fa-trash fa-fw fa-lg pr10"></i> <?php echo __("Delete Page");?>
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="panel panel-default">
                            <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-cog pr5 panel-icon"></i>
                                    <strong><?php echo __("Page Settings");?>
</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <form class="js_ajax-forms form-horizontal" data-url="pages_groups/create.php?type=page&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="category">
                                                <?php echo __("Category");?>

                                            </label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="category" id="category">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_category'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="title">
                                                <?php echo __("Title");?>

                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="title" id="title" placeholder='<?php echo __("Title of your page");?>
' value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="username">
                                                <?php echo __("Username");?>

                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="username" id="username" placeholder='<?php echo __("Username, e.g. YouTubeOfficial");?>
' value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="description">
                                                <?php echo __("Description");?>

                                            </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="description" id="description" placeholder='<?php echo __("Write about your page...");?>
'><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_description'];?>
</textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                                            </div>
                                        </div>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "verification") {?>
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-check-circle pr5 panel-icon"></i>
                                    <strong><?php echo __("Verification");?>
</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <?php if ($_smarty_tpl->tpl_vars['case']->value == "verified") {?>
                                        <div class="text-center">
                                            <div class="big-icon success">
                                                <i class="fa fa-thumbs-o-up fa-3x"></i>
                                            </div>
                                            <h4><?php echo __("Congratulations");?>
</h4>
                                            <p class="mt20"><?php echo __("This page is verified");?>
</p>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "request") {?>
                                        <div class="alert alert-info">
                                            <i class="fa fa-info-circle fa-lg mr10"></i><?php echo __("You can send verification request to verify your page");?>
<br>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-success js_verify" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                                <i class="fa fa-check-circle mr5"></i><?php echo __("Verification Request");?>

                                            </button>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "pending") {?>
                                        <div class="alert alert-info">
                                            <i class="fa fa-info-circle fa-lg mr10"></i><?php echo __("Your verification request is still awaiting admin approval");?>
<br>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-warning btn-friends js_unverify" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"><i class="fa fa-clock-o mr5"></i><?php echo __("Pending");?>
</button>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "declined") {?>
                                        <div class="text-center">
                                            <div class="big-icon error">
                                                <i class="fa fa-meh-o fa-3x"></i>
                                            </div>
                                            <h4><?php echo __("Sorry");?>
</h4>
                                            <p class="mt20"><?php echo __("Your verification request has been declined by the admin");?>
</p>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-trash pr5 panel-icon"></i>
                                    <strong><?php echo __("Delete Page");?>
</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-warning">
                                        <i class="fa fa-exclamation-triangle fa-lg mr10"></i><?php echo __("Once you delete your page you will no longer can access it again");?>

                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-danger js_delete-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                            <i class="fa fa-trash mr5"></i><?php echo __("Delete Page");?>

                                        </button>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
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
