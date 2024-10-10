<?php
/* Smarty version 3.1.36, created on 2021-06-10 16:18:19
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\employee_payroll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c1edf3924cc5_21602650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fbb5666d8f31ffadcc772e230e960bb76493f94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\employee_payroll.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1edf3924cc5_21602650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179106490060c1edf38f7bd0_61098255', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74179638860c1edf3921796_23112650', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_179106490060c1edf38f7bd0_61098255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_179106490060c1edf38f7bd0_61098255',
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
class Block_74179638860c1edf3921796_23112650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_74179638860c1edf3921796_23112650',
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
