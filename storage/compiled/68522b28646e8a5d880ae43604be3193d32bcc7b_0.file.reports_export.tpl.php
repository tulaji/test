<?php
/* Smarty version 3.1.36, created on 2021-06-10 17:46:08
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\reports_export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c20288b88683_03990530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68522b28646e8a5d880ae43604be3193d32bcc7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\reports_export.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c20288b88683_03990530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145326468660c20288b78441_52627334', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148913677060c20288b87774_46721340', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_145326468660c20288b78441_52627334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_145326468660c20288b78441_52627334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</h2>


        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h1><?php echo $_smarty_tpl->tpl_vars['total_customers']->value;?>
</h1>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/export-customers" class="btn btn-primary"><i class="fal fa-file-excel-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transactions'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h1><?php echo $_smarty_tpl->tpl_vars['total_transactions']->value;?>
</h1>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/export-transactions" class="btn btn-primary"><i class="fal fa-file-excel-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h1><?php echo $_smarty_tpl->tpl_vars['total_invoices']->value;?>
</h1>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/export-invoices" class="btn btn-primary"><i class="fal fa-file-excel-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a>
                    </div>

                </div>
            </div>
        </div>

                                                                                                            
                                                            </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_148913677060c20288b87774_46721340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_148913677060c20288b87774_46721340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
