<?php
/* Smarty version 3.1.36, created on 2021-06-09 14:03:43
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\add-tax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c07ce7374649_48050444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ce4d2c9d955c3548a6859e3f656b5cfc7b0a919' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\add-tax.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c07ce7374649_48050444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42294015360c07ce7368745_06663715', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_42294015360c07ce7368745_06663715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_42294015360c07ce7368745_06663715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add TAX'];?>
</h5>

                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add-tax-post/">
                        <div class="form-group">
                            <label for="taxname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                            <input type="text" class="form-control" id="taxname" name="taxname">
                        </div>
                        <div class="form-group">
                            <label for="taxrate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rate'];?>
</label>
                            <input type="text" class="form-control" id="taxrate" name="taxrate">
                        </div>


                        <button type="submit" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button> | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tax/list/"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back To The List'];?>
</a>
                    </form>

                </div>
            </div>



        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
