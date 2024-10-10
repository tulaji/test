<?php
/* Smarty version 3.1.36, created on 2020-12-07 09:15:20
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/app_wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fce38f82381a7_32398276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2748bc01e8033589ac94c8edc518ca1d33cb230' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/app_wrapper.tpl',
      1 => 1607350494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'_pd\']->value)."/views/".((string)$_smarty_tpl->tpl_vars[\'include\']->value).".tpl' => 1,
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'_pd\']->value)."/views/".((string)$_smarty_tpl->tpl_vars[\'_include\']->value).".tpl' => 1,
  ),
),false)) {
function content_5fce38f82381a7_32398276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['include']->value))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['_pd']->value)."/views/".((string)$_smarty_tpl->tpl_vars['include']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['_include']->value))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['_pd']->value)."/views/".((string)$_smarty_tpl->tpl_vars['_include']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
}
