<?php
/* Smarty version 3.1.31, created on 2017-06-07 20:09:22
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.reports.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59385d720bdce3_17343871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535b9ac362887afe48b857e2f88058ba8835e276' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.reports.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59385d720bdce3_17343871 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/lsconnect/dev.ls-connect.us/includes/libs/Smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/lsconnect/dev.ls-connect.us/includes/libs/Smarty/plugins/modifier.date_format.php';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-exclamation-triangle pr5 panel-icon"></i>
        <strong><?php echo __("Reports");?>
</strong>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover js_dataTable">
                <thead>
                    <tr>
                        <th><?php echo __("ID");?>
</th>
                        <th><?php echo __("Node");?>
</th>
                        <th><?php echo __("Type");?>
</th>
                        <th><?php echo __("Reporter By");?>
</th>
                        <th><?php echo __("Time");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['report_id'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "user") {?>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['user_name'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['user_picture'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['node']['user_fullname'];?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "page") {?>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['page_name'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['page_picture'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['node']['page_title'];?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "group") {?>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['group_name'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['group_picture'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['node']['group_title'];?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "post") {?>
                                    <a class="btn btn-xs btn-default" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" target="_blank">
                                        <i class="fa fa-eye"></i> <?php echo __("View Post");?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "comment") {?>
                                    <a class="btn btn-xs btn-default" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank">
                                        <i class="fa fa-eye"></i> <?php echo __("View Comment");?>

                                    </a>
                                <?php }?>
                            </td>
                            <td>
                                <span class="label label-<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['color'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['node_type']);?>
</span>
                            </td>
                            <td>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['user_fullname'];?>

                                </a>
                            </td>

                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time'],"%e %B %Y");?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Mark as Safe");?>
' class="btn btn-xs btn-success js_admin-deleter" data-handle="report" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['report_id'];?>
">
                                    <i class="fa fa-check"></i>
                                </button>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="<?php echo $_smarty_tpl->tpl_vars['row']->value['node_type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" data-node="<?php echo $_smarty_tpl->tpl_vars['row']->value['report_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "user") {?>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" class="btn btn-xs btn-primary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "page") {?>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" class="btn btn-xs btn-primary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "group") {?>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/groups/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" class="btn btn-xs btn-primary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                <?php }?>
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
</div><?php }
}
