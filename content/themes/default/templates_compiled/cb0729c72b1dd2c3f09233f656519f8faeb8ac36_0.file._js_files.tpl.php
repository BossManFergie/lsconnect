<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:53:27
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_js_files.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372457c2b1b1_36644969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb0729c72b1dd2c3f09233f656519f8faeb8ac36' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_js_files.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59372457c2b1b1_36644969 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/html5shiv/html5shiv.min.js"><?php echo '</script'; ?>
><![endif]--><!-- Initialize --><?php echo '<script'; ?>
 type="text/javascript">/* initialize vars */var site_title = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
";var site_path = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
";var ajax_path = site_path+"/includes/ajax/";var uploads_path = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
";var secret = "<?php echo $_smarty_tpl->tpl_vars['secret']->value;?>
";var min_data_heartbeat = "<?php echo $_smarty_tpl->tpl_vars['system']->value['data_heartbeat']*1000;?>
";var min_chat_heartbeat = "<?php echo $_smarty_tpl->tpl_vars['system']->value['chat_heartbeat']*1000;?>
";var chat_enabled = <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?>true<?php } else { ?>false<?php }?>;var currency = "<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
";var stripe_key = <?php if ($_smarty_tpl->tpl_vars['system']->value['stripe_mode'] == "live") {?>"<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_live_publishable'];?>
"<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_test_publishable'];?>
"<?php }
echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript">/* i18n for JS */var __ = [];__["Describe your item (optional)"] = '<?php echo __("Describe your item (optional)");?>
';__["Ask something"] = '<?php echo __("Ask something");?>
';__["Verification Requset"] = '<?php echo __("Verification Requset");?>
';__["Add Friend"] = '<?php echo __("Add Friend");?>
';__["Friends"] = '<?php echo __("Friends");?>
';__["Friend Request Sent"] = '<?php echo __("Friend Request Sent");?>
';__["Following"] = '<?php echo __("Following");?>
';__["Follow"] = '<?php echo __("Follow");?>
';__["Pending"] = '<?php echo __("Pending");?>
';__["Remove"] = '<?php echo __("Remove");?>
';__["Error"] = '<?php echo __("Error");?>
';__["Success"] = '<?php echo __("Success");?>
';__["Loading"] = '<?php echo __("Loading");?>
';__["Like"] = '<?php echo __("Like");?>
';__["Unlike"] = '<?php echo __("Unlike");?>
';__["Joined"] = '<?php echo __("Joined");?>
';__["Join Group"] = '<?php echo __("Join Group");?>
';__["Delete"] = '<?php echo __("Delete");?>
';__["Delete Cover"] = '<?php echo __("Delete Cover");?>
';__["Delete Picture"] = '<?php echo __("Delete Picture");?>
';__["Delete Post"] = '<?php echo __("Delete Post");?>
';__["Delete Comment"] = '<?php echo __("Delete Comment");?>
';__["Delete Conversation"] = '<?php echo __("Delete Conversation");?>
';__["Share Post"] = '<?php echo __("Share Post");?>
';__["Report User"] = '<?php echo __("Report User");?>
';__["Report Page"] = '<?php echo __("Report Page");?>
';__["Report Group"] = '<?php echo __("Report Group");?>
';__["Block User"] = '<?php echo __("Block User");?>
';__["Unblock User"] = '<?php echo __("Unblock User");?>
';__["Mark as Available"] = '<?php echo __("Mark as Available");?>
';__["Mark as Sold"] = '<?php echo __("Mark as Sold");?>
';__["Save Post"] = '<?php echo __("Save Post");?>
';__["Unsave Post"] = '<?php echo __("Unsave Post");?>
';__["Boost Post"] = '<?php echo __("Boost Post");?>
';__["Unboost Post"] = '<?php echo __("Unboost Post");?>
';__["Pin Post"] = '<?php echo __("Pin Post");?>
';__["Unpin Post"] = '<?php echo __("Unpin Post");?>
';__["Verify"] = '<?php echo __("Verify");?>
';__["Decline"] = '<?php echo __("Decline");?>
';__["Boost"] = '<?php echo __("Boost");?>
';__["Unboost"] = '<?php echo __("Unboost");?>
';__["Mark as Paid"] = '<?php echo __("Mark as Paid");?>
';__["Read more"] = '<?php echo __("Read more");?>
';__["Read less"] = '<?php echo __("Read less");?>
';__["Monthly Average"] = '<?php echo __("Monthly Average");?>
';__["Jan"] = '<?php echo __("Jan");?>
';__["Feb"] = '<?php echo __("Feb");?>
';__["Mar"] = '<?php echo __("Mar");?>
';__["Apr"] = '<?php echo __("Apr");?>
';__["May"] = '<?php echo __("May");?>
';__["Jun"] = '<?php echo __("Jun");?>
';__["Jul"] = '<?php echo __("Jul");?>
';__["Aug"] = '<?php echo __("Aug");?>
';__["Sep"] = '<?php echo __("Sep");?>
';__["Oct"] = '<?php echo __("Oct");?>
';__["Nov"] = '<?php echo __("Nov");?>
';__["Dec"] = '<?php echo __("Dec");?>
';__["Users"] = '<?php echo __("Users");?>
';__["Pages"] = '<?php echo __("Pages");?>
';__["Groups"] = '<?php echo __("Groups");?>
';__["Posts"] = '<?php echo __("Posts");?>
';__["Are you sure you want to delete this?"] = '<?php echo __("Are you sure you want to delete this?");?>
';__["Are you sure you want to remove your cover photo?"] = '<?php echo __("Are you sure you want to remove your cover photo?");?>
';__["Are you sure you want to remove your profile picture?"] = '<?php echo __("Are you sure you want to remove your profile picture?");?>
';__["Are you sure you want to delete this post?"] = '<?php echo __("Are you sure you want to delete this post?");?>
';__["Are you sure you want to share this post?"] = '<?php echo __("Are you sure you want to share this post?");?>
';__["Are you sure you want to delete this comment?"] = '<?php echo __("Are you sure you want to delete this comment?");?>
';__["Are you sure you want to delete this conversation?"] = '<?php echo __("Are you sure you want to delete this conversation?");?>
';__["Are you sure you want to report this user?"] = '<?php echo __("Are you sure you want to report this user?");?>
';__["Are you sure you want to report this page?"] = '<?php echo __("Are you sure you want to report this page?");?>
';__["Are you sure you want to report this group?"] = '<?php echo __("Are you sure you want to report this group?");?>
';__["Are you sure you want to block this user?"] = '<?php echo __("Are you sure you want to block this user?");?>
';__["Are you sure you want to unblock this user?"] = '<?php echo __("Are you sure you want to unblock this user?");?>
';__["Are you sure you want to delete your account?"] = '<?php echo __("Are you sure you want to delete your account?");?>
';__["Are you sure you want to verify this request?"] = '<?php echo __("Are you sure you want to verify this request?");?>
';__["Are you sure you want to decline this request?"] = '<?php echo __("Are you sure you want to decline this request?");?>
';__["Are you sure you want to approve this request?"] = '<?php echo __("Are you sure you want to approve this request?");?>
';__["There is something that went wrong!"] = '<?php echo __("There is something that went wrong!");?>
';__["There is no more data to show"] = '<?php echo __("There is no more data to show");?>
';__["This has been shared to your Timeline"] = '<?php echo __("This has been shared to your Timeline");?>
';<?php echo '</script'; ?>
><!-- Initialize --><!-- Dependencies Libs [jQuery|Bootstrap|Mustache] --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/jquery/jquery-3.1.1.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/mustache/mustache.min.js"><?php echo '</script'; ?>
><!-- Dependencies Libs [jQuery|Bootstrap|Mustache] --><!-- Dependencies Plugins --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/fastclick/fastclick.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/jquery.form/jquery.form.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/jquery.inview/jquery.inview.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/jquery.slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/autosize/autosize.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/readmore/readmore.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/moment/moment-with-locales.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/mediaelementplayer/mediaelement-and-player.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/mediaelementplayer/mediaelementplayer.min.css"><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/jquery.geocomplete/jquery.geocomplete.min.js"><?php echo '</script'; ?>
><?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {
echo '<script'; ?>
 src="https://checkout.stripe.com/checkout.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?libraries=places&key=<?php echo $_smarty_tpl->tpl_vars['system']->value['geolocation_key'];?>
"><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {
echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
><?php }?><!-- Dependencies Plugins --><!-- Sngine [JS] --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/lsconnect/core.js"><?php echo '</script'; ?>
><?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/lsconnect/user.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/lsconnect/post.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/lsconnect/chat.js"><?php echo '</script'; ?>
><?php }?><!-- lsconnect [JS] --><?php if ($_smarty_tpl->tpl_vars['page']->value == "admin") {?><!-- Dependencies Plugins --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/metisMenu/metisMenu.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/metisMenu/metisMenu.min.css"><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/dataTables/jquery.dataTables.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/dataTables/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/dataTables/dataTables.bootstrap.min.css"><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/colorpicker/bootstrap-colorpicker.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/colorpicker/bootstrap-colorpicker.min.css"><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/datetimepicker/bootstrap-datetimepicker.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/datetimepicker/bootstrap-datetimepicker.min.css"><!-- Dependencies Plugins [JS] --><!-- lsconnect [JS] --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/lsconnect/admin.js"><?php echo '</script'; ?>
><!-- lsconnect [JS] --><!-- Admin Charts --><?php echo '<script'; ?>
 src="https://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://code.highcharts.com/modules/exporting.js"><?php echo '</script'; ?>
><?php if ($_smarty_tpl->tpl_vars['view']->value == "dashboard") {
echo '<script'; ?>
>$(function () {Highcharts.setOptions();$('#admin-chart-dashboard').highcharts({chart: {type: 'column'},title: {text: __["Monthly Average"]},xAxis: {categories: [__["Jan"],__["Feb"],__["Mar"],__["Apr"],__["May"],__["Jun"],__["Jul"],__["Aug"],__["Sep"],__["Oct"],__["Nov"],__["Dec"]],crosshair: true},yAxis: {min: 0,title: {text: "<?php echo date('Y');?>
"}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [{name: __["Users"],data: [<?php echo implode(',',$_smarty_tpl->tpl_vars['chart']->value['users']);?>
]}, {name: __["Pages"],data: [<?php echo implode(',',$_smarty_tpl->tpl_vars['chart']->value['pages']);?>
]}, {name: __["Groups"],data: [<?php echo implode(',',$_smarty_tpl->tpl_vars['chart']->value['groups']);?>
]}, {name: __["Posts"],data: [<?php echo implode(',',$_smarty_tpl->tpl_vars['chart']->value['posts']);?>
]}]});});<?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->tpl_vars['view']->value == "packages" && $_smarty_tpl->tpl_vars['sub_view']->value == "earnings") {
echo '<script'; ?>
>$(function () {Highcharts.setOptions();$('#admin-chart-earnings').highcharts({chart: {type: 'column'},title: {text: __["Monthly Average"]},xAxis: {categories: [__["Jan"],__["Feb"],__["Mar"],__["Apr"],__["May"],__["Jun"],__["Jul"],__["Aug"],__["Sep"],__["Oct"],__["Nov"],__["Dec"]],crosshair: true},yAxis: {min: 0,title: {text: "<?php echo date('Y');?>
"}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>{name: "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
",data: [<?php echo implode(',',$_smarty_tpl->tpl_vars['value']->value['months_sales']);?>
]},<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
]});});<?php echo '</script'; ?>
><?php }?><!-- Admin Charts --><?php }
}
}
