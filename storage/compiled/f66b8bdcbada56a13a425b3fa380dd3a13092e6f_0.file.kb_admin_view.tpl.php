<?php
/* Smarty version 3.1.36, created on 2020-06-17 13:44:50
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/kb_admin_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eea5692592c94_40130913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f66b8bdcbada56a13a425b3fa380dd3a13092e6f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/kb_admin_view.tpl',
      1 => 1592415884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eea5692592c94_40130913 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="panel shadow-none mb-0">
        <div class="panel-hdr">
            <h2>
                <?php echo $_smarty_tpl->tpl_vars['kb']->value->title;?>

            </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kb/a/edit/<?php echo $_smarty_tpl->tpl_vars['kb']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                    <a class="btn btn-danger" onclick="deleteKb('<?php echo $_smarty_tpl->tpl_vars['kb']->value->id;?>
')" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                </div>
                <div class="hr-line-dashed"></div>
                <?php echo $_smarty_tpl->tpl_vars['kb']->value->description;?>

            </div>
        </div>
    </div>
</div>
<?php }
}
