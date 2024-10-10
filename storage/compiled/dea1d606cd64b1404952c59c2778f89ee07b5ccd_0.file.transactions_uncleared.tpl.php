<?php
/* Smarty version 3.1.36, created on 2020-06-19 05:58:13
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_uncleared.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eec8c352f48b7_56208670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dea1d606cd64b1404952c59c2778f89ee07b5ccd' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_uncleared.tpl',
      1 => 1592545321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec8c352f48b7_56208670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10257938215eec8c352eded0_28227123', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16736064675eec8c352f3b77_92006449', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_10257938215eec8c352eded0_28227123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10257938215eec8c352eded0_28227123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">

            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">


                        <table class="table table-bordered table-hover sys_table" id="clx_datatable">
                            <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Date</th>
                                <th>Account</th>
                                <th>Description</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction');
$_smarty_tpl->tpl_vars['transaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
$_smarty_tpl->tpl_vars['transaction']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/mark-cleared/<?php echo $_smarty_tpl->tpl_vars['transaction']->value->id;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark as cleared'];?>
"><i class="fal fa-check"></i> </a>
                                    </td>
                                    <td  data-value="<?php echo $_smarty_tpl->tpl_vars['transaction']->value->id;?>
">
                                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['transaction']->value->date));?>

                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->account;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->description;?>
</td>
                                    <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['transaction']->value->amount,$_smarty_tpl->tpl_vars['transaction']->value->currency_iso_code);?>
</td>

                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
/* {block "script"} */
class Block_16736064675eec8c352f3b77_92006449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_16736064675eec8c352f3b77_92006449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
",
                    }
                }
            );

            $('.has-tooltip').tooltip();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
