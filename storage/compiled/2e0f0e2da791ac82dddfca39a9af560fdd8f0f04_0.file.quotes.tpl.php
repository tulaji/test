<?php
/* Smarty version 3.1.36, created on 2021-06-19 16:45:31
  from '/var/www/html/ShreeEng_Test/ui/theme/default/quotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60cdd1d38d4342_72282218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e0f0e2da791ac82dddfca39a9af560fdd8f0f04' => 
    array (
      0 => '/var/www/html/ShreeEng_Test/ui/theme/default/quotes.tpl',
      1 => 1616916056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cdd1d38d4342_72282218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213090756960cdd1d389a1b5_39395820', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189717193560cdd1d389bb08_52164601', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95371625460cdd1d38cd737_04056101', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_213090756960cdd1d389a1b5_39395820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_213090756960cdd1d389a1b5_39395820',
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
class Block_189717193560cdd1d389bb08_52164601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_189717193560cdd1d389bb08_52164601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
 : <?php echo $_smarty_tpl->tpl_vars['total_quote']->value;?>
</h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">
                <div class="table-responsive">
                    <table class="table table-striped w-100" id="clx_datatable">
                        <thead style="background: #f0f2ff">
                        <tr>
                            <th>#</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                            <th width="30%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Stage'];?>
</th>

                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->iteration = 0;
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
$_smarty_tpl->tpl_vars['ds']->iteration++;
$__foreach_ds_0_saved = $_smarty_tpl->tpl_vars['ds'];
?>
                            <tr>
                                <td data-value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-order="<?php echo $_smarty_tpl->tpl_vars['ds']->iteration;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a> </td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><strong><?php echo $_smarty_tpl->tpl_vars['ds']->value['subject'];?>
</strong></a> </td>
                                <td class="amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['datecreated']));?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['validuntil']));?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Dead') {?>
                                        <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Lost') {?>
                                        <span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Accepted') {?>
                                        <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Draft') {?>
                                        <span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Delivered') {?>
                                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</span>
                                    <?php } else { ?>
                                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['ds']->value['stage'];?>
</span>
                                    <?php }?>

                                </td>

                                <td class="text-right">
                                    <div class="btn-group">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
" data-placement="top"><i class="fal fa-file"></i> </a>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/listhistory/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success btn-icon waves-effect waves-themed has-tooltip" data-title="History" data-placement="top"><i class="fal fa-eye"></i> </a>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-warning btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i> </a>
                                        <a href="#" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip cdelete" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash"></i> </a>




                                    </div>

                                </td>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['ds'] = $__foreach_ds_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="8">
                                <ul class="pagination">
                                </ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>



                <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

            </div>
        </div>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_95371625460cdd1d38cd737_04056101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_95371625460cdd1d38cd737_04056101',
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
        $(function () {

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
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are You Sure?", function(result) {
                    if(result){
                        window.location.href = base_url + "delete/quote/" + id;
                    }
                });
            });

            $('.has-tooltip').tooltip();

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
