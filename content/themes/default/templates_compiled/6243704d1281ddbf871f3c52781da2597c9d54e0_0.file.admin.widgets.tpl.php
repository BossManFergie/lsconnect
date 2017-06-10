<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:40:56
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.widgets.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372f7879b9c0_18374724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6243704d1281ddbf871f3c52781da2597c9d54e0' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.widgets.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59372f7879b9c0_18374724 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/widgets/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New widget");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-puzzle-piece pr5 panel-icon"></i>
        <strong><?php echo __("Widgets");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Place");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['widget_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "home") {
echo __("Home Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "search") {
echo __("Search Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "requests") {
echo __("Friends Requests Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "notifications") {
echo __("Notifications Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "post") {
echo __("Post Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "photo") {
echo __("Photo Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "directory") {
echo __("Directory");
}?>
                            </td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="widget" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['widget_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/widgets/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['widget_id'];?>
" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/widgets.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['widget_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="place">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "home") {?>selected<?php }?> value="home"><?php echo __("Home Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "search") {?>selected<?php }?> value="search"><?php echo __("Search Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "requests") {?>selected<?php }?> value="requests"><?php echo __("Friends Requests Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "notifications") {?>selected<?php }?> value="notifications"><?php echo __("Notifications Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "post") {?>selected<?php }?> value="post"><?php echo __("Post Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "photo") {?>selected<?php }?> value="photo"><?php echo __("Photo Page");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "directory") {?>selected<?php }?> value="photo"><?php echo __("Directory");?>
</option>
                        </select>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="message" rows="8"><?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
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
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/widgets.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="place">
                            <option value="home"><?php echo __("Home Page");?>
</option>
                            <option value="search"><?php echo __("Search Page");?>
</option>
                            <option value="requests"><?php echo __("Friends Requests Page");?>
</option>
                            <option value="notifications"><?php echo __("Notifications Page");?>
</option>
                            <option value="post"><?php echo __("Post Page");?>
</option>
                            <option value="photo"><?php echo __("Photo Page");?>
</option>
                            <option value="directory"><?php echo __("Directory");?>
</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="message" rows="8"></textarea>
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
        </div>
    <?php }?>
</div><?php }
}
