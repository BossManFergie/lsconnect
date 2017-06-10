<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:55:55
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.design.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593724eb82f485_29633170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b9521e6fd15572afb177d446f37a31ea94ef00' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.design.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593724eb82f485_29633170 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-paint-brush pr5 panel-icon"></i>
        <strong><?php echo __("Design");?>
</strong>
    </div>
    <div class="panel-body">

        <!-- Design -->
        <form class="js_ajax-forms form-horizontal" data-url="admin/design.php">
            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Website Logo");?>

                </label>
                <div class="col-sm-9">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_logo'] == '') {?>
                        <div class="x-image">
                            <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="loader loader_small x-hidden"></div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="system_logo" value="">
                        </div>
                    <?php } else { ?>
                        <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo'];?>
')">
                            <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="loader loader_small x-hidden"></div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="system_logo" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo'];?>
">
                        </div>
                    <?php }?>
                    <span class="help-block">
                        <?php echo __("The perfect size for your logo should be (wdith: 60px & height: 46px)");?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Default Wallpaper");?>

                </label>
                <div class="col-sm-9">
                    <div>
                        <div class="onoffswitch">
                            <input type="checkbox" name="system_wallpaper_default" class="onoffswitch-checkbox" id="system_wallpaper_default" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_wallpaper_default']) {?>checked<?php }?>>
                            <label class="onoffswitch-label" for="system_wallpaper_default"></label>
                        </div>
                        <span class="help-block">
                            <?php echo __("Use the default");?>
 (<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/index-wallpaper.jpg"><?php echo __("preview");?>
</a>)
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Custom Wallpaper");?>

                </label>
                <div class="col-sm-9">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_wallpaper'] == '') {?>
                        <div class="x-image">
                            <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="loader loader_small x-hidden"></div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="system_wallpaper" value="">
                        </div>
                    <?php } else { ?>
                        <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_wallpaper'];?>
')">
                            <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="loader loader_small x-hidden"></div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="system_wallpaper" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_wallpaper'];?>
">
                        </div>
                    <?php }?>
                    <span class="help-block">
                        <?php echo __("The perfect size for your wallpaper should be (wdith: 4600px & height: 3000px)");?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Default Favicon");?>

                </label>
                <div class="col-sm-9">
                    <div>
                        <div class="onoffswitch">
                            <input type="checkbox" name="system_favicon_default" class="onoffswitch-checkbox" id="system_favicon_default" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon_default']) {?>checked<?php }?>>
                            <label class="onoffswitch-label" for="system_favicon_default"></label>
                        </div>
                        <span class="help-block">
                            <?php echo __("Use the default");?>
 (<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/favicon.png"><?php echo __("preview");?>
</a>)
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Custom Favicon");?>

                </label>
                <div class="col-sm-9">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon'] == '') {?>
                        <div class="x-image">
                            <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="loader loader_small x-hidden"></div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="system_favicon" value="">
                        </div>
                    <?php } else { ?>
                        <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_favicon'];?>
')">
                            <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="loader loader_small x-hidden"></div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="system_favicon" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_favicon'];?>
">
                        </div>
                    <?php }?>
                    <span class="help-block">
                        <?php echo __("The perfect size for your favicon should be (wdith: 196px & height: 196px)");?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Default OG-Image");?>

                </label>
                <div class="col-sm-9">
                    <div>
                        <div class="onoffswitch">
                            <input type="checkbox" name="system_ogimage_default" class="onoffswitch-checkbox" id="system_ogimage_default" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_ogimage_default']) {?>checked<?php }?>>
                            <label class="onoffswitch-label" for="system_ogimage_default"></label>
                        </div>
                        <span class="help-block">
                            <?php echo __("Use the default");?>
 (<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/og-image.jpg"><?php echo __("preview");?>
</a>)
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Custom OG-Image");?>

                </label>
                <div class="col-sm-9">
                    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_ogimage'] == '') {?>
                        <div class="x-image">
                            <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="loader loader_small x-hidden"></div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="system_ogimage" value="">
                        </div>
                    <?php } else { ?>
                        <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_ogimage'];?>
')">
                            <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="loader loader_small x-hidden"></div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="system_ogimage" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_ogimage'];?>
">
                        </div>
                    <?php }?>
                    <span class="help-block">
                        <?php echo __("The perfect size for your og-image should be (wdith: 590px & height: 300px)");?>

                    </span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Enable Customization");?>

                </label>
                <div class="col-sm-9">
                    <div class="onoffswitch">
                        <input type="checkbox" name="css_customized" class="onoffswitch-checkbox" id="css_customized" <?php if ($_smarty_tpl->tpl_vars['system']->value['css_customized']) {?>checked<?php }?>>
                        <label class="onoffswitch-label" for="css_customized"></label>
                    </div>
                    <span class="help-block">
                        <?php echo __("Turn the customization On and Off");?>

                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                <?php echo __("Background Color");?>

                </label>
                <div class="col-sm-9">
                    <div class="input-group colorpicker-component js_colorpicker">
                        <input type="text" class="form-control" name="css_background" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_background'];?>
" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                <?php echo __("Link Color");?>

                </label>
                <div class="col-sm-9">
                    <div class="input-group colorpicker-component js_colorpicker">
                        <input type="text" class="form-control" name="css_link_color" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_link_color'];?>
" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                <?php echo __("Header Color");?>

                </label>
                <div class="col-sm-9">
                    <div class="input-group colorpicker-component js_colorpicker">
                        <input type="text" class="form-control" name="css_header" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_header'];?>
" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                <?php echo __("Header Search Background");?>

                </label>
                <div class="col-sm-9">
                    <div class="input-group colorpicker-component js_colorpicker">
                        <input type="text" class="form-control" name="css_header_search" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search'];?>
" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                <?php echo __("Header Search Font");?>

                </label>
                <div class="col-sm-9">
                    <div class="input-group colorpicker-component js_colorpicker">
                        <input type="text" class="form-control" name="css_header_search_color" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                <?php echo __("Button Primary");?>

                </label>
                <div class="col-sm-9">
                    <div class="input-group colorpicker-component js_colorpicker">
                        <input type="text" class="form-control" name="css_btn_primary" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_btn_primary'];?>
" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">
                <?php echo __("Menu Background");?>

                </label>
                <div class="col-sm-9">
                    <div class="input-group colorpicker-component js_colorpicker">
                        <input type="text" class="form-control" name="css_menu_background" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['css_menu_background'];?>
" />
                        <span class="input-group-addon"><i></i></span>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-3 control-label">
                <?php echo __("Custom CSS");?>

                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="10" name="css_custome_css"><?php echo $_smarty_tpl->tpl_vars['system']->value['css_custome_css'];?>
</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
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
        <!-- Design -->
    </div>
</div><?php }
}
