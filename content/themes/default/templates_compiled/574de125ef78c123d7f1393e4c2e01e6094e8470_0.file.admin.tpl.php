<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:55:02
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593724b6c46d32_57316635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '574de125ef78c123d7f1393e4c2e01e6094e8470' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/admin.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:admin.".((string)$_smarty_tpl->tpl_vars[\'view\']->value).".tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_593724b6c46d32_57316635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-3 offcanvas-sidebar">
            <div class="panel panel-default">
                <div class="panel-body with-nav">
                    <ul class="side-nav metismenu js_metisMenu">

                        <!-- Dashboard -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "dashboard") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp">
                                <i class="fa fa-tachometer fa-fw fa-lg pr10"></i><?php echo __("Dashboard");?>

                            </a>
                        </li>
                        <!-- Dashboard -->

                        <!-- Settings -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings">
                                <i class="fa fa-cog fa-fw fa-lg pr10"></i><?php echo __("Settings");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings">
                                        <i class="fa fa-cogs fa-fw pr10"></i><?php echo __("System Settings");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == "registration") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/registration">
                                        <i class="fa fa-sign-in fa-fw pr10"></i><?php echo __("Registration Settings");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == "emails") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/emails">
                                        <i class="fa fa-envelope-open-o fa-fw pr10"></i><?php echo __("Emails Settings");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == "sms") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/sms">
                                        <i class="fa fa-mobile fa-fw pr10"></i><?php echo __("SMS Settings");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == "chat") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/chat">
                                        <i class="fa fa-comments fa-fw pr10"></i><?php echo __("Chat Settings");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == "uploads") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/uploads">
                                        <i class="fa fa-upload fa-fw pr10"></i><?php echo __("Uploads Settings");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == "security") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/security">
                                        <i class="fa fa-shield fa-fw pr10"></i><?php echo __("Security Settings");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/payments">
                                        <i class="fa fa-money fa-fw pr10"></i><?php echo __("Payments Settings");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == "limits") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/limits">
                                        <i class="fa fa-tachometer fa-fw pr10"></i><?php echo __("Limits Settings");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings" && $_smarty_tpl->tpl_vars['sub_view']->value == "analytics") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/analytics">
                                        <i class="fa fa-pie-chart fa-fw pr10"></i><?php echo __("Analytics Settings");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Settings -->

                        <!-- Themes -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "themes") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/themes" class="no-border">
                                <i class="fa fa-desktop fa-fw fa-lg pr10"></i><?php echo __("Themes");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "themes" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/themes">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Themes");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "themes" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/themes/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New Theme");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Themes -->

                        <!-- Design -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "design") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/design">
                                <i class="fa fa-paint-brush fa-fw fa-lg pr10"></i><?php echo __("Design");?>

                            </a>
                        </li>
                        <!-- Design -->

                        <!-- Languages -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "languages") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/languages">
                                <i class="fa fa-language fa-fw fa-lg pr10"></i><?php echo __("Languages");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "languages" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/languages">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Languages");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "languages" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/languages/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New Language");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Languages -->

                        <!-- Users -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users" class="no-border">
                                <i class="fa fa-user fa-fw fa-lg pr10"></i><?php echo __("Users");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Users");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users" && $_smarty_tpl->tpl_vars['sub_view']->value == "admins") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/admins">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Admins");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users" && $_smarty_tpl->tpl_vars['sub_view']->value == "moderators") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/moderators">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Moderators");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users" && $_smarty_tpl->tpl_vars['sub_view']->value == "online") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/online">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Online");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "users" && $_smarty_tpl->tpl_vars['sub_view']->value == "banned") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/banned">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Banned");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Users -->

                        <!-- Pages -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "pages") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages" class="no-border">
                                <i class="fa fa-flag fa-fw fa-lg pr10"></i><?php echo __("Pages");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "pages" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Pages");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "pages" && $_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages/categories">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Categories");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "pages" && $_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages/add_category">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New Category");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Pages -->

                        <!-- Groups -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/groups" class="no-border">
                                <i class="fa fa-users fa-fw fa-lg pr10"></i><?php echo __("Groups");?>

                            </a>
                        </li>
                        <!-- Groups -->

                        <!-- Games -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "games") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/games">
                                <i class="fa fa-gamepad fa-fw fa-lg pr10"></i><?php echo __("Games");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "games" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/games">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Games");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "games" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/games/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New Game");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Games -->

                        <!-- Market -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "market") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/market/categories">
                                <i class="fa fa-shopping-bag fa-fw fa-lg pr10"></i><?php echo __("Market");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "market" && $_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/market/categories">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Categories");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "market" && $_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/market/add_category">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New Category");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Market -->

                        <!-- Packages -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "packages") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/packages" class="no-border">
                                <i class="fa fa-cubes fa-fw fa-lg pr10"></i><?php echo __("Pro Packages");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "packages" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/packages">
                                        <i class="fa fa-cubes fa-fw pr10"></i><?php echo __("List Packages");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "packages" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/packages/add">
                                        <i class="fa fa-cube fa-fw pr10"></i><?php echo __("Add New Package");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "packages" && $_smarty_tpl->tpl_vars['sub_view']->value == "subscribers") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/packages/subscribers">
                                        <i class="fa fa-users fa-fw pr10"></i><?php echo __("List Subscribers");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "packages" && $_smarty_tpl->tpl_vars['sub_view']->value == "earnings") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/packages/earnings">
                                        <i class="fa fa-usd fa-fw pr10"></i><?php echo __("Earnings");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Packages -->

                        <!-- Affiliates -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "affiliates") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/affiliates">
                                <i class="fa fa-exchange fa-fw fa-lg pr10"></i><?php echo __("Affiliates");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "affiliates" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/affiliates">
                                        <i class="fa fa-wrench fa-fw pr10"></i><?php echo __("Affiliates Settings");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "affiliates" && $_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/affiliates/payments">
                                        <i class="fa fa-paypal fa-fw pr10"></i><?php echo __("Payment Requests");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Affiliates -->

                        <!-- Reports -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "reports") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/reports" class="no-border">
                                <i class="fa fa-exclamation-triangle fa-fw fa-lg pr10"></i><?php echo __("Reports");?>

                            </a>
                        </li>
                        <!-- Reports -->

                        <!-- Banned IPs -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "banned_ips") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/banned_ips" class="no-border">
                                <i class="fa fa-minus-circle fa-fw fa-lg pr10"></i><?php echo __("Banned IPs");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "banned_ips" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/banned_ips">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List IPs");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "banned_ips" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/banned_ips/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New IP");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Banned IPs -->

                        <!-- Verification -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "verification") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/verification">
                                <i class="fa fa-check-circle fa-fw fa-lg pr10"></i><?php echo __("Verification");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "verification" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/verification">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Requests");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "verification" && $_smarty_tpl->tpl_vars['sub_view']->value == "users") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/verification/users">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Verified Users");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "verification" && $_smarty_tpl->tpl_vars['sub_view']->value == "pages") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/verification/pages">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Verified Pages");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Verification -->

                        <!-- Custom Fields -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "custom_fields") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/custom_fields" class="no-border">
                                <i class="fa fa-bars fa-fw fa-lg pr10"></i><?php echo __("Custom Fields");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "custom_fields" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/custom_fields">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Fields");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "custom_fields" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/custom_fields/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New Field");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Custom Fields -->
                        
                        <!-- Static Pages -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "static") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/static">
                                <i class="fa fa-file fa-fw fa-lg pr10"></i><?php echo __("Static Pages");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "static" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/static">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Pages");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "static" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/static/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New page");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Static Pages -->

                        <!-- Announcements -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "announcements") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/announcements" class="no-border">
                                <i class="fa fa-bullhorn fa-fw fa-lg pr10"></i><?php echo __("Announcements");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "announcements" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/announcements">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Announcements");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "announcements" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/announcements/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New Announcement");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Announcements -->

                        <!-- Newsletter -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "newsletter") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/newsletter">
                                <i class="fa fa-paper-plane-o fa-fw fa-lg pr10"></i><?php echo __("Newsletter");?>

                            </a>
                        </li>
                        <!-- Newsletter -->
                        
                        <!-- Ads -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "ads") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/ads" class="no-border">
                                <i class="fa fa-usd fa-fw fa-lg pr10"></i><?php echo __("Ads");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "ads" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/ads">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Ads");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "ads" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/ads/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New Ads");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Ads -->

                        <!-- Widgets -->
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "widgets") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/widgets">
                                <i class="fa fa-puzzle-piece fa-fw fa-lg pr10"></i><?php echo __("Widgets");?>

                                <span class="fa arrow"></span>
                            </a>
                            <ul>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "widgets" && $_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/widgets">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("List Widgets");?>

                                    </a>
                                </li>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "widgets" && $_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/widgets/add">
                                        <i class="fa fa-caret-right fa-fw pr10"></i><?php echo __("Add New Widget");?>

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Widgets -->

                        <!-- Build -->
                        <li>
                            <div class="static">
                                <i class="fa fa-copyright fa-fw fa-lg pr10"></i><?php echo __("Build");?>
 v<?php echo $_smarty_tpl->tpl_vars['system']->value['system_version'];?>

                            </div>
                        </li>
                        <!-- Build -->
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- left panel -->
        
        <!-- right panel -->
        <div class="col-sm-9 offcanvas-mainbar">
            <?php $_smarty_tpl->_subTemplateRender("file:admin.".((string)$_smarty_tpl->tpl_vars['view']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>
        <!-- right panel -->
        
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
