<?php
/* Smarty version 3.1.36, created on 2021-06-08 13:59:40
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\list-recurring-invoices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60bf2a7430e203_84741786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64b8373b829b75f15bdea9cd8a22941b41524d6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\list-recurring-invoices.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf2a7430e203_84741786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20759555560bf2a742c8808_80133784', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40903163660bf2a7430b778_29558176', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_20759555560bf2a742c8808_80133784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20759555560bf2a742c8808_80133784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Invoices'];?>
 </h2>
            <div class="panel-toolbar">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/recurring/" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Recurring Invoice'];?>
</a>
            </div>
        </div>

        <div class="panel-container">
            <div class="panel-content">

                <table class="table table-bordered table-hover" id="clx_datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Next Invoice'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</a></td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                            <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                            <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
</td>
                            <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['nd']));?>
</td>
                            <td> <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Unpaid') {?>
                                    <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Paid') {?>
                                    <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Cancelled') {?>
                                    <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</span>
                                <?php } else { ?>
                                    <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['ds']->value['status'];?>
</span>
                                <?php }?></td>
                            <td class="text-right">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-primary btn-xs"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-info btn-xs"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                <a href="#" class="btn btn-warning btn-xs cstop" id="sid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fal fa-stop"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Stop Recurring'];?>
</a>
                                <a href="#" class="btn btn-danger btn-xs cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
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
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_40903163660bf2a7430b778_29558176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_40903163660bf2a7430b778_29558176',
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

            $('.has-tooltip').tooltip();
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function(result) {
                if(result){
                    window.location.href = base_url + "delete/invoice/" + id;
                }
            });
        });

        $(".cstop").click(function (e) {
            e.preventDefault();
            var id = this.id;
            bootbox.confirm("Are you sure? This will prevent future invoice generation from this invoice.", function(result) {
                if(result){
                    window.location.href = base_url + "invoices/stop_recurring/" + id;
                }
            });
        });


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
