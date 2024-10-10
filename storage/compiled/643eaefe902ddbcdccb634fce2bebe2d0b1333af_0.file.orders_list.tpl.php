<?php
/* Smarty version 3.1.36, created on 2020-06-17 13:48:20
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/orders_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eea57643d17a3_46743641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '643eaefe902ddbcdccb634fce2bebe2d0b1333af' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/orders_list.tpl',
      1 => 1592416097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eea57643d17a3_46743641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18434031755eea57643c5d35_74915247', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_823937375eea57643d0ac8_20122064', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_18434031755eea57643c5d35_74915247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18434031755eea57643c5d35_74915247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">



        <div class="col-md-12">



            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
</h2>
                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/add/" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Order'];?>
</a>
                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <table id="clx_datatable" class="table table-bordered table-hover sys_table footable">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
 #</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                            <th class="text-right" data-sort-ignore="true"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>

                                            <tr>

                                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</a> </td>
                                                <td>

                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['ordernum'];?>
</a>

                                                </td>

                                                <td>
                                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['ds']->value['date_added'];
$_prefixVariable1 = ob_get_clean();
echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_prefixVariable1));?>

                                                </td>
                                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['cid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['cname'];?>
</a> </td>

                                                <td class="amount">
                                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>


                                                </td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Active') {?>
                                                        <span class="label label-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ds']->value['status']]);?>
</span>
                                                    <?php } else { ?>
                                                        <span class="label label-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ds']->value['status']]);?>
</span>
                                                    <?php }?>
                                                </td>
                                                <td class="text-right">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary"><i class="fal fa-search"></i> </a>

                                                    <a href="#" class="btn btn-danger cdelete" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fal fa-trash-alt"></i> </a>
                                                </td>
                                            </tr>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </tbody>



                                    </table>
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
/* {block "script"} */
class Block_823937375eea57643d0ac8_20122064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_823937375eea57643d0ac8_20122064',
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
                    },
                }
            );

        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
