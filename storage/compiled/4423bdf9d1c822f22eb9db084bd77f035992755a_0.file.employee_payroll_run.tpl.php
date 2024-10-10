<?php
/* Smarty version 3.1.36, created on 2021-06-10 16:18:50
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\employee_payroll_run.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c1ee129ca6c6_69453912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4423bdf9d1c822f22eb9db084bd77f035992755a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\employee_payroll_run.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1ee129ca6c6_69453912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161134183260c1ee129ae839_25616914', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119183745160c1ee129b03b0_25233341', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143048067360c1ee129c8640_49692142', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_161134183260c1ee129ae839_25616914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_161134183260c1ee129ae839_25616914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
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
class Block_119183745160c1ee129b03b0_25233341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_119183745160c1ee129b03b0_25233341',
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
                        <table class="table table-striped"  id="clx_datatable" data-order="[[ 0, &quot;desc&quot; ]]">

                            <thead style="background: #f0f2ff">

                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payroll Type'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Salary'];?>
</th>


                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>

                                <tr>
                                    <td>
                                        <strong>
                                            <?php echo $_smarty_tpl->tpl_vars['employee']->value->name;?>

                                        </strong>

                                    </td>
                                    <td> <?php echo $_smarty_tpl->tpl_vars['employee']->value->pay_frequency;?>
</td>
                                    <td>
                                        <?php echo formatCurrency($_smarty_tpl->tpl_vars['employee']->value['amount']);?>


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
/* {block 'script'} */
class Block_143048067360c1ee129c8640_49692142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_143048067360c1ee129c8640_49692142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        $(function() {

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                    /*	--- Layout Structure
                        --- Options
                        l	-	length changing input control
                        f	-	filtering input
                        t	-	The table!
                        i	-	Table information summary
                        p	-	pagination control
                        r	-	processing display element
                        B	-	buttons
                        R	-	ColReorder
                        S	-	Select

                        --- Markup
                        < and >				- div element
                        <"class" and >		- div with a class
                        <"#id" and >		- div with an ID
                        <"#id.class" and >	- div with an ID and a class

                        --- Further reading
                        https://datatables.net/reference/option/dom
                        --------------------------------------
                     */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        /*{
                        	extend:    'colvis',
                        	text:      'Column Visibility',
                        	titleAttr: 'Col visibility',
                        	className: 'mr-sm-3'
                        },*/
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-danger btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-success btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-dark btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary btn-sm'
                        }
                    ]
                }
            );

            $('.has-tooltip').tooltip();
        });



    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
