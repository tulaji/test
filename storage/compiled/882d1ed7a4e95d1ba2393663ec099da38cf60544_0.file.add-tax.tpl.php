<?php
/* Smarty version 3.1.36, created on 2021-01-07 17:34:01
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/add-tax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff78c59ce5533_30907387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '882d1ed7a4e95d1ba2393663ec099da38cf60544' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/add-tax.tpl',
      1 => 1606241872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff78c59ce5533_30907387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6499501435ff78c59ce1f75_29369333', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_6499501435ff78c59ce1f75_29369333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6499501435ff78c59ce1f75_29369333',
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
