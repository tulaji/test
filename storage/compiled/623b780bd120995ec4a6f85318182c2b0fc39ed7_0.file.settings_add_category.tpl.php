<?php
/* Smarty version 3.1.36, created on 2020-12-06 17:59:30
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/settings_add_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fcd6252c650f5_84571336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '623b780bd120995ec4a6f85318182c2b0fc39ed7' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/settings_add_category.tpl',
      1 => 1607295443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcd6252c650f5_84571336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17618818295fcd6252c63625_32334508', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_17618818295fcd6252c63625_32334508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17618818295fcd6252c63625_32334508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['New_Category'];?>
</h5>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add_category_post/" method="post" accept-charset="utf-8">
                            <div class="form-group"><label for="rname" class="control-label"> <small class="req text-danger">* </small>Product Category  Name</label><input type="text" id="category_name" name="category_name" class="form-control" autofocus></div>

                            <hr>


                            <div class="table-responsive">
                                <div class="table-responsive">









                                    <button type="submit" id="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>

                                </div>

                            </div>

                        </form>
                    </div>






                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
