<?php
/* Smarty version 3.1.36, created on 2021-03-27 17:24:26
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\projects_expenses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_605f1cf2702620_04075844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a37d216334fbe432627c3ab2e039fc135f2e6637' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\projects_expenses.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605f1cf2702620_04075844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_558490260605f1cf26b7286_22678788', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1095689424605f1cf26bbb82_05269287', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1251955605f1cf26fb069_91876665', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "head"} */
class Block_558490260605f1cf26b7286_22678788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_558490260605f1cf26b7286_22678788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;

        }
        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }


        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}

        .text-danger{
            color: #F6365B!important;
        }
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "project_content"} */
class Block_1095689424605f1cf26bbb82_05269287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_1095689424605f1cf26bbb82_05269287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row mb-3">
        <div class="col">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expenses'];?>
</h2>
        </div>

        <div class="col text-right">
            <a href="javascript:;" id="add_expense" class="btn btn-primary">New Expense</a>
        </div>



    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered" id="clx_datatable">
                <thead style="background: #f0f2ff">
                <tr>
                    <th class="h6">ID</th>
                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>



                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expenses']->value, 'expense');
$_smarty_tpl->tpl_vars['expense']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['expense']->value) {
$_smarty_tpl->tpl_vars['expense']->do_else = false;
?>
                    <tr>
                        <td class="h6">
                            <?php echo $_smarty_tpl->tpl_vars['expense']->value->code;?>


                        </td>
                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['expense']->value->date;?>

                        </td>
                        <td class="h6">

                            <?php if ((isset($_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->tpl_vars['expense']->value->account_id]))) {?>
                                <?php echo $_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->tpl_vars['expense']->value->account_id]->account;?>

                            <?php }?>

                        </td>
                        <td class="h6">
                            <?php echo $_smarty_tpl->tpl_vars['expense']->value->type;?>


                        </td>
                        <td class="h6">
                            <?php echo formatCurrency($_smarty_tpl->tpl_vars['expense']->value->amount,$_smarty_tpl->tpl_vars['expense']->value->currency_iso_code);?>

                        </td>
                        <td class="h6 text-info"><?php echo $_smarty_tpl->tpl_vars['expense']->value->description;?>

                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['expense']->value['id'];?>
" class="btn btn-primary btn-sm active text-right" role="button" aria-pressed="true">manage</a>

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
class Block_1251955605f1cf26fb069_91876665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1251955605f1cf26fb069_91876665',
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





           $('#add_expense').on('click',function (e) {
               e.preventDefault();

               $.fancybox.open({
                   src  :  base_url + 'projects/expense/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
',
                   type : 'ajax',
                   opts : {
                       afterShow : function( instance, current ) {
                           $(".datepicker").datepicker();
                           $("#account").select2({

                           });
                           $("#payee").select2({

                           });
                           $("#company").select2({

                           });
                       }
                   },
               });
           });


            var $modal = $('#cloudonex_body');

            $modal.on('click', '#submit', function(event){

                event.preventDefault();

                $.post(base_url + 'projects/save-expense', $('#project_expense_form').serialize()).done(function (data) {
                    location.reload();
                }).fail(function(data) {
                    toastr.error(data.responseText);
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
