<?php
/* Smarty version 3.1.36, created on 2024-10-05 18:04:08
  from 'C:\xampp\htdocs\CRM_FM\ui\theme\default\orders_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_67013240cc0307_38162239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d89902dc93529b2025850f25be52251f08474bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRM_FM\\ui\\theme\\default\\orders_list.tpl',
      1 => 1727860531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67013240cc0307_38162239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105366822467013240c15bb4_12762313', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181854311767013240c19ee1_39061857', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93615948167013240cb0db6_53921220', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_105366822467013240c15bb4_12762313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_105366822467013240c15bb4_12762313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_181854311767013240c19ee1_39061857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_181854311767013240c19ee1_39061857',
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
                                    <div class="table-responsive">
                                        <table id="clx_datatable" class="table-striped w-100 table sys_table footable">
                                            <thead style="background: #f0f2ff">
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

                                                        <a  href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><strong><?php echo $_smarty_tpl->tpl_vars['ds']->value['ordernum'];?>
</strong></a>

                                                    </td>

                                                    <td>
                                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['ds']->value['date_added'];
$_prefixVariable1 = ob_get_clean();
echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_prefixVariable1));?>

                                                    </td>
                                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['cid'];?>
/"><strong><?php echo $_smarty_tpl->tpl_vars['ds']->value['cname'];?>
</strong></a> </td>

                                                    <td class="amount">
                                                        <?php echo formatCurrency($_smarty_tpl->tpl_vars['ds']->value['amount'],$_smarty_tpl->tpl_vars['ds']->value['currency_iso_code']);?>



                                                    </td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Active') {?>
                                                            <span class="badge badge-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ds']->value['status']]);?>
</span>
                                                        <?php } else { ?>
                                                            <span class="badge badge-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ds']->value['status']]);?>
</span>
                                                        <?php }?>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="btn-group">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-sm"><i class="fal fa-search"></i> </a>

                                                            <a href="#" class="btn btn-danger btn-sm cdelete" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fal fa-trash-alt"></i> </a>
                                                        </div>

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
class Block_93615948167013240cb0db6_53921220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_93615948167013240cb0db6_53921220',
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

            $(".cdelete").click(function (e) {
                e.preventDefault();
                var oid = this.id;
                bootbox.confirm('<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
', function(result) {
                    if(result){
                        window.location.href = base_url + "delete/order/" + oid + '/';
                    }
                });
            });

        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
