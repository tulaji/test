<?php
/* Smarty version 3.1.36, created on 2021-03-30 22:45:00
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\projects_invoices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60635c94eacd06_39499352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2cb83c3ee7be8fd82dfe31faa3a12309fc7dde2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\projects_invoices.tpl',
      1 => 1617124492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60635c94eacd06_39499352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90218082960635c949960e8_83217896', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84983937760635c94ea4e43_89609140', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "project_content"} */
class Block_90218082960635c949960e8_83217896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_90218082960635c949960e8_83217896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row mb-3">
        <div class="col">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h2>
        </div>

        <div class="col text-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/1/0/0/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Invoice'];?>
</a>
        </div>



    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover" id="clx_datatable">
                <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
                    <th>
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                    </th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                    <th class="text-right" width="140px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'invoice');
$_smarty_tpl->tpl_vars['invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->do_else = false;
?>
                    <tr>
                        <td  data-value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['invoice']->value->invoicenum;
if ($_smarty_tpl->tpl_vars['invoice']->value->cn != '') {?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value->cn;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
 <?php }?></a> </td>
                        <td>

                            <?php if ((isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['invoice']->value->userid]))) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/">
                                    <?php echo $_smarty_tpl->tpl_vars['invoice']->value->account;?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['invoice']->value->userid]->company;?>

                                </a>
                            <?php }?>


                        </td>
                        <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice']->value->total,$_smarty_tpl->tpl_vars['invoice']->value->currency_iso_code);?>
</td>
                        <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['invoice']->value->date);?>
"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['invoice']->value->date));?>
</td>
                        <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['invoice']->value->duedate);?>
"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['invoice']->value->duedate));?>
</td>
                        <td>

                            <?php if ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Unpaid') {?>
                                <span class="label label-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Paid') {?>
                                <span class="label label-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Partially Paid') {?>
                                <span class="label label-info"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Cancelled') {?>
                                <span class="label"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                            <?php } else { ?>
                                <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>

                            <?php }?>



                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['invoice']->value->r == '0') {?>
                                <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Onetime'];?>
</span>
                            <?php } else { ?>
                                <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring'];?>
</span>
                            <?php }?>
                        </td>
                        <td class="text-right">

                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fal fa-file-alt"></i></a>



                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-pencil"></i></a>



                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>



            </table>
        </div>
    </div>



<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_84983937760635c94ea4e43_89609140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_84983937760635c94ea4e43_89609140',
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
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
