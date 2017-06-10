<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:56:35
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372513825c41_11395286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7440d5a339909b667e26571ee1d83f2c0ce55ad0' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.users.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59372513825c41_11395286 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/lsconnect/dev.ls-connect.us/includes/libs/Smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/lsconnect/dev.ls-connect.us/includes/libs/Smarty/plugins/modifier.date_format.php';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
            <div class="pull-right flip">
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
" class="btn btn-info">
                    <?php echo __("Go to this profile");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "banned") {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/banned_ips" class="btn btn-danger">
                    <i class="fa fa-user-times"></i> <?php echo __("Manage Banned IPs");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-users pr5 panel-icon"></i>
        <strong><?php echo __("Users");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value != '' && $_smarty_tpl->tpl_vars['sub_view']->value != "edit") {?> &rsaquo; <strong><?php echo __(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['sub_view']->value));?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['user_fullname'];?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '' || $_smarty_tpl->tpl_vars['sub_view']->value == "admins" || $_smarty_tpl->tpl_vars['sub_view']->value == "moderators" || $_smarty_tpl->tpl_vars['sub_view']->value == "online" || $_smarty_tpl->tpl_vars['sub_view']->value == "banned") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Name");?>
</th>
                            <th><?php echo __("Username");?>
</th>
                            <th><?php echo __("Joined");?>
</th>
                            <th><?php echo __("Activated");?>
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
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
</a></td>
                            <td>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['user_fullname'];?>

                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>

                                </a>
                            </td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['user_registered'],"%e %B %Y");?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['user_activated']) {?>
                                    <span class="label label-success"><?php echo __("Yes");?>
</span>
                                <?php } else { ?>
                                    <span class="label label-danger"><?php echo __("No");?>
</span>
                                <?php }?>
                            </td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
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
                    <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_picture'];?>
">
                </div>
                <div class="col-xs-12 col-sm-5 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
</span>
                            <?php echo __("User ID");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['user_registered'],"%e %B %Y");?>
</span>
                            <?php echo __("Joined");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['user_last_login'],"%e %B %Y");?>
</span>
                            <?php echo __("Last Login");?>

                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-5 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['friends'];?>
</span>
                            <?php echo __("Friends");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['followings'];?>
</span>
                            <?php echo __("Followings");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['followers'];?>
</span>
                            <?php echo __("Followers");?>

                        </li>
                    </ul>
                </div>
            </div>

            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="active">
                    <a href="#general" data-toggle="tab">
                        <strong class="pr5"><?php echo __("General");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#profile" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Profile");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#username" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Username");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#email" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Email");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#password" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Password");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#privacy" data-toggle="tab">
                        <strong class="pr5"><?php echo __("Privacy");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- general tab -->
                <div class="tab-pane active" id="general">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_general">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Verified User");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="user_verified" class="onoffswitch-checkbox" id="user_verified" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_verified']) {?>checked<?php }?>>
                                    <label class="onoffswitch-label" for="user_verified"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Banned");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="user_banned" class="onoffswitch-checkbox" id="user_banned" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_banned']) {?>checked<?php }?>>
                                    <label class="onoffswitch-label" for="user_banned"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Email Activated");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="user_activated" class="onoffswitch-checkbox" id="user_activated" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_activated']) {?>checked<?php }?>>
                                    <label class="onoffswitch-label" for="user_activated"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Password Rested");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="user_reseted" class="onoffswitch-checkbox" id="user_reseted" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_reseted']) {?>checked<?php }?>>
                                    <label class="onoffswitch-label" for="user_reseted"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("User Group");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="user_group">
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_group'] == '1') {?>selected<?php }?>>
                                        <?php echo __("Admins");?>

                                    </option>
                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_group'] == '2') {?>selected<?php }?>>
                                        <?php echo __("Moderators");?>

                                    </option>
                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_group'] == '3') {?>selected<?php }?>>
                                        <?php echo __("Users");?>

                                    </option>
                                </select>
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
                <!-- general tab -->

                <!-- profile tab -->
                <div class="tab-pane" id="profile">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_profile">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Full Name");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="user_fullname" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_fullname'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Gender");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="user_gender">
                                    <option value="none"><?php echo __("Select Sex");?>
:</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_gender'] == "male") {?>selected<?php }?> value="male">
                                        <?php echo __("Male");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_gender'] == "female") {?>selected<?php }?> value="female">
                                        <?php echo __("Female");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Birthdate");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <select class="form-control" name="birth_month">
                                            <option value="none"><?php echo __("Select Month");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <select class="form-control" name="birth_day">
                                            <option value="none"><?php echo __("Select Day");?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                            <?php }
}
?>

                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <select class="form-control" name="birth_year">
                                            <option value="none"><?php echo __("Select Year");?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2015+1 - (1905) : 1905-(2015)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                            <?php }
}
?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Work Title");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_work_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_work_title'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Work Place");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_work_place" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_work_place'];?>
">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Current City");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_current_city" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_current_city'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Hometown");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_hometown" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_hometown'];?>
">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Major");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_edu_major" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_major'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("School");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_edu_school" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_school'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Class");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_edu_class" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_class'];?>
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
                <!-- profile tab -->

                <!-- username tab -->
                <div class="tab-pane" id="username">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_username&username=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Username");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
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
                <!-- username tab -->

                <!-- email tab -->
                <div class="tab-pane" id="email">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_email&email=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_email'];?>
">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Email address");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_email'];?>
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
                <!-- email tab -->

                <!-- password tab -->
                <div class="tab-pane" id="password">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_password">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Password");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="user_password">
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
                <!-- password tab -->

                <!-- privacy tab -->
                <div class="tab-pane" id="privacy">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_privacy">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Chat");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_chat_enabled">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_chat_enabled'] == 0) {?>selected<?php }?> value="0">
                                        <?php echo __("Offline");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_chat_enabled'] == 1) {?>selected<?php }?> value="1">
                                        <?php echo __("Online");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("birthdate");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_birthdate">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_birthdate'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_birthdate'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("work info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_work">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_work'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_work'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("location info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_location">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_location'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_location'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("education info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_education">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_education'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_education'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("friends");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_friends">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_friends'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_friends'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_friends'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("liked pages");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_pages">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_pages'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_pages'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_pages'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">
                                <?php echo __("Who can see your");?>
 <?php echo __("joined groups");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="user_privacy_groups">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_groups'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_groups'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_groups'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- success -->
                        <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                        <!-- success -->

                        <!-- error -->
                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                        <!-- error -->

                        <div class="form-group">
                            <div class="col-sm-7 col-sm-offset-5">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- privacy tab -->
            </div>
            <!-- tabs content -->
        </div>
    <?php }?>
</div><?php }
}
