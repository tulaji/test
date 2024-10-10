<?php
/* Smarty version 3.1.36, created on 2021-03-20 16:45:49
  from '/var/www/html/pcrm/ui/theme/default/employee_payroll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6055d9658e7976_57375356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ccca0e891364c640ffe70aa48849e2d133fe9b8' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/employee_payroll.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6055d9658e7976_57375356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11911733686055d9658df093_99402304', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1687231126055d9658e70e0_08925611', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_11911733686055d9658df093_99402304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11911733686055d9658df093_99402304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">
                        <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payroll'];?>
</h3>
                        <div class="hr-line-dashed"></div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Month'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Amount'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <?php echo ib_lan_get_line(date('F'));?>

                                </td>
                                <td> <?php echo formatCurrency($_smarty_tpl->tpl_vars['total']->value);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['_L']->value['Not processed'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hrm/run-payroll" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Run payroll'];?>
</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

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
class Block_1687231126055d9658e70e0_08925611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1687231126055d9658e70e0_08925611',
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
