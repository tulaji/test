<?php
/* Smarty version 3.1.36, created on 2020-10-05 00:24:13
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/employee_payroll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7a9fed7baa35_60020025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b8ce5655488258dd1fca49ac6ded6c0a1d87958' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/employee_payroll.tpl',
      1 => 1595195423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7a9fed7baa35_60020025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2630938145f7a9fed7b43e7_32395521', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2233711295f7a9fed7ba030_53828536', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_2630938145f7a9fed7b43e7_32395521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2630938145f7a9fed7b43e7_32395521',
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
class Block_2233711295f7a9fed7ba030_53828536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2233711295f7a9fed7ba030_53828536',
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
