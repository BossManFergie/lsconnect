<?php
/* Smarty version 3.1.31, created on 2017-06-06 22:21:32
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.groups.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372aec8bea71_71438175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe5b956597f0cb9255cc7be7ef1559448ae71d96' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.groups.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59372aec8bea71_71438175 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
            <div class="pull-right flip">
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
" class="btn btn-info">
                    <?php echo __("Go to this group");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-users pr5 panel-icon"></i>
        <strong><?php echo __("Groups");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['group_title'];?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value != "edit") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Group");?>
</th>
                            <th><?php echo __("Members");?>
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
/groups/<?php echo $_smarty_tpl->tpl_vars['row']->value['group_name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
</a>
                            </td>
                            <td>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['row']->value['group_name'];?>
">
                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['group_picture'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['group_title'];?>

                                </a>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['group_members'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="group" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/groups/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
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
            <div class="row">
                <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-2 mb10">
                    <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_picture'];?>
">
                </div>
                <div class="col-xs-12 col-sm-10 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
</span>
                            <?php echo __("Group ID");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_members'];?>
</span>
                            <?php echo __("Members");?>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="active">
                    <a href="#basic" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Group Info");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- basic tab -->
                <div class="tab-pane active" id="basic">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/groups.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Title");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="group_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_title'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Username");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="group_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Username");?>

                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="group_description"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_description'];?>
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
    <?php }?>
</div><?php }
}
