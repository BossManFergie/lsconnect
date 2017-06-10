<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:00:42
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5937260a6d4e57_73064422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2db069f2e78a1eaa2f90bf0f0667ee09bdf0db' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/contact.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_post.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5937260a6d4e57_73064422 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <!-- search form -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="mt5">
                                <i class="fa fa-envelope-o pr5"></i>
                                <strong><?php echo __("Contact Us");?>
</strong>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="js_ajax-forms form-horizontal" data-url="core/contact.php">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Name");?>
 <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Email");?>
 <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Subject");?>
 <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="subject">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Message");?>
 <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="message" rows="5"></textarea>
                                    </div>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <!-- reCAPTCHA -->
                                            <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
                                            <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
                                            <!-- reCAPTCHA -->
                                        </div>
                                    </div>
                                <?php }?>

                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                    <button type="submit" class="btn btn-primary"><?php echo __("Send");?>
</button>
                                    </div>
                                </div>

                                <!-- success -->
                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                <!-- success -->

                                <!-- error -->
                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                <!-- error -->

                            </form>
                        </div>
                    </div>
                    <!-- search form -->

                    <?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
                    <!-- search results -->
                    <div id="search-full-results" class="panel panel-default">
                        <div class="panel-heading with-icon with-nav">
                            <!-- panel title -->
                            <div class="mb20">
                                <i class="fa fa-rss pr5 panel-icon"></i>
                                <strong><?php echo __("Search Results");?>
</strong>
                            </div>
                            <!-- panel title -->

                            <!-- panel nav -->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#posts" data-toggle="tab">
                                        <strong class="pr5"><?php echo __("Posts");?>
</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#users" data-toggle="tab">
                                        <strong class="pr5"><?php echo __("Users");?>
</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#pages" data-toggle="tab">
                                        <strong class="pr5"><?php echo __("Pages");?>
</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#groups" data-toggle="tab">
                                        <strong class="pr5"><?php echo __("Groups");?>
</strong>
                                    </a>
                                </li>
                            </ul>
                            <!-- panel nav -->
                        </div>
                        <div class="panel-body tab-content">
                            <div class="tab-pane active" id="posts">
                                <?php if (count($_smarty_tpl->tpl_vars['results']->value['posts']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['posts'], 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </ul>
                                <?php } else { ?>
                                <div class="text-center x-muted mtb10">
                                    <i class="fa fa-rss fa-4x"></i>
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                                <?php }?>
                            </div>
                            <div class="tab-pane" id="users">
                                <?php if (count($_smarty_tpl->tpl_vars['results']->value['users']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['users'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value['connection']), 0, true);
?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </ul>
                                <?php } else { ?>
                                <div class="text-center x-muted mtb10">
                                    <i class="fa fa-rss fa-4x"></i>
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                                <?php }?>
                            </div>
                            <div class="tab-pane" id="pages">
                                <?php if (count($_smarty_tpl->tpl_vars['results']->value['pages']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['pages'], '_page');
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
                                <div class="text-center x-muted mtb10">
                                    <i class="fa fa-rss fa-4x"></i>
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                                <?php }?>
                            </div>
                            <div class="tab-pane" id="groups">
                                <?php if (count($_smarty_tpl->tpl_vars['results']->value['groups']) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value['groups'], '_group');
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
                                <div class="text-center x-muted mtb10">
                                    <i class="fa fa-rss fa-4x"></i>
                                    <p class="mt10 mb10"><strong><?php echo __("No results to show");?>
</strong></p>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- search results -->
                    <?php }?>
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
