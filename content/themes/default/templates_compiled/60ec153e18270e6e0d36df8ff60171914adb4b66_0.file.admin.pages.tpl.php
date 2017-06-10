<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:28:24
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.pages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372c884b6bb4_03840246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60ec153e18270e6e0d36df8ff60171914adb4b66' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.pages.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59372c884b6bb4_03840246 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_page") {?>
            <div class="pull-right flip">
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['data']->value['page_name'];?>
" class="btn btn-info">
                    <?php echo __("Go to this page");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages/add_category" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Category");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong><?php echo __("Pages");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_page") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['page_title'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['category_name'];?>
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
                            <th><?php echo __("Page");?>
</th>
                            <th><?php echo __("Likes");?>
</th>
                            <th><?php echo __("Verified");?>
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
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_name'];?>
" target="_blank">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>

                                    </a>
                                </td>
                                <td>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_name'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['page_picture'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['page_title'];?>

                                    </a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['page_likes'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['page_verified']) {?>
                                        <span class="label label-success"><?php echo __("Yes");?>
</span>
                                    <?php } else { ?>
                                        <span class="label label-danger"><?php echo __("No");?>
</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="page" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages/edit_page/<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_page") {?>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-2 mb10">
                    <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['page_picture'];?>
">
                </div>
                <div class="col-xs-12 col-sm-10 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['page_id'];?>
</span>
                            <?php echo __("Page ID");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['page_likes'];?>
</span>
                            <?php echo __("Likes");?>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="active">
                    <a href="#basic" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Page Info");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- basic tab -->
                <div class="tab-pane active" id="basic">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/pages.php?do=edit_page&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['page_id'];?>
">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Verified Page");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="page_verified" class="onoffswitch-checkbox" id="page_verified" <?php if ($_smarty_tpl->tpl_vars['data']->value['page_verified']) {?>checked<?php }?>>
                                    <label class="onoffswitch-label" for="page_verified"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Category");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="page_category">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['categories'], 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['data']->value['page_category'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
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
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Title");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="page_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['page_title'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Username");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="page_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['page_name'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Username");?>

                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="page_description"><?php echo $_smarty_tpl->tpl_vars['data']->value['page_description'];?>
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
            </div>
            <!-- tabs content -->
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['category_name'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="page_category" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages/edit_category/<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/pages.php?do=add_category">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="category_name">
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/pages.php?do=edit_category&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['category_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="category_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['category_name'];?>
">
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
