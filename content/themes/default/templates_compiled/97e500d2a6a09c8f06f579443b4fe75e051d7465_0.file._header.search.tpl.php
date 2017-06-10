<?php
/* Smarty version 3.1.31, created on 2017-06-06 21:53:27
  from "/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_header.search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59372457779c36_05833246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97e500d2a6a09c8f06f579443b4fe75e051d7465' => 
    array (
      0 => '/home/lsconnect/dev.ls-connect.us/content/themes/default/templates/_header.search.tpl',
      1 => 1490026270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59372457779c36_05833246 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="navbar-form pull-left flip hidden-xs">
    <input id="search-input" type="text" class="form-control" placeholder='<?php echo __("Search for people, pages and #hashtags");?>
' autocomplete="off">
    <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
        <div class="dropdown-widget-header">
            <?php echo __("Search Results");?>

        </div>
        <div class="dropdown-widget-body">
            <div class="loader loader_small ptb10"></div>
        </div>
        <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("See All Results");?>
</a>
    </div>
</form><?php }
}
