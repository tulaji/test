<?php
/* Smarty version 3.1.36, created on 2021-03-22 11:26:18
  from '/var/www/html/pcrm/ui/theme/default/categories-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60583182c02c59_03198617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a0cfe0a5503d05e34a025598405277f605cd0b2' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/categories-edit.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60583182c02c59_03198617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102619636860583182bf8a12_29714358', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_102619636860583182bf8a12_29714358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_102619636860583182bf8a12_29714358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Categories'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/categories-edit-post">
                            <div class="form-group">
                                <label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>

                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
">
                            </div>



                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </form>
                    </div>

                </div>
            </div>
        </div> <!-- Widget-1 end-->
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Deleting Categories will'];?>
 </p>
                         <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/categories-delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-danger"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Widget-2 end-->
    </div>
<?php
}
}
/* {/block "content"} */
}
