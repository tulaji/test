<?php
/* Smarty version 3.1.36, created on 2021-04-06 10:03:23
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\purchases_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_606be493ef6ca8_58830599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c4f8da0f4dc946c66731c05c422c659829e0acd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\purchases_view.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606be493ef6ca8_58830599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131333673606be49362d6f3_56584466', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_632721733606be493633ab7_38666991', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1788227837606be493edfb07_89890082', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_131333673606be49362d6f3_56584466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_131333673606be49362d6f3_56584466',
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
            color: #2CCE89!important;
        }
        .alert-success {
            color: #2cce89;
            background-color: #d7f1da;
            border-color: #d7f1da;
        }
        .alert-danger {
            color: #e7026e;
            background-color: #ffe5f1;
             border-color: #ffe5f1;
        }
        .alert-info {
            color: #5e72e4;
            background-color: #e3e4fd;
            border-color: #e3e4fd;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_632721733606be493633ab7_38666991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_632721733606be493633ab7_38666991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group mb-3">
                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unique Invoice URL'];?>
:</label>
                <input type="text" class="form-control" id="invoice_public_url" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
supplier/purchase_view/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
">
            </div>
        </div>
        <div class="col-lg-12"  id="application_ajaxrender">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Purchase'];?>
 - <?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?> </h2>
                    <input type="hidden" name="iid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="iid">

                    <div class="panel-toolbar">
                        <div class="btn-group  pull-right" role="group" aria-label="...">



                            <div class="btn-group" role="group">
                                <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-envelope-o"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Email'];?>

                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li  class="dropdown-item"><a href="#" id="mail_invoice_created"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Created'];?>
</a></li>
                                                                                                                                                                                </ul>
                            </div>


                            <div class="btn-group" role="group">
                                <button type="button" class="btn  btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-ellipsis-v"></i>  <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark As'];?>
</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Paid') {?>
                                        <li class="dropdown-item"><a href="#" id="mark_paid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Unpaid') {?>
                                        <li class="dropdown-item"><a href="#" id="mark_unpaid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Partially Paid') {?>
                                        <li class="dropdown-item"><a href="#" id="mark_partially_paid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</a></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Cancelled') {?>
                                        <li class="dropdown-item"><a href="#" id="mark_cancelled"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</a></li>
                                    <?php }?>

                                </ul>
                            </div>


                            <?php if (($_smarty_tpl->tpl_vars['config']->value['purchase_invoice_payment_status']) == '1') {?>

                                <div class="btn-group" role="group">
                                    <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fal fa-ellipsis-v"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark As'];?>

                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">


                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Paid') {?>
                                            <li  class="dropdown-item"><a href="#" id="mark_paid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</a></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Unpaid') {?>
                                            <li  class="dropdown-item"><a href="#" id="mark_unpaid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</a></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Partially Paid') {?>
                                            <li  class="dropdown-item"><a href="#" id="mark_partially_paid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</a></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] != 'Cancelled') {?>
                                            <li  class="dropdown-item"><a href="#" id="mark_cancelled"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</a></li>
                                        <?php }?>


                                    </ul>
                                </div>

                            <?php }?>


                            <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>
                                <button type="button" class="btn  btn-danger btn-sm" id="add_payment"><i class="fal fa-calculator"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Make Payment'];?>
</button>
                            <?php }?>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/purchase_view/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary  btn-sm"><i class="fal fa-paper-plane-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Preview'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
purchases/edit/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="btn btn-warning  btn-sm"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fal fa-file-pdf-o"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['PDF'];?>

                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li  class="dropdown-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/purchase_pdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a></li>
                                    <li  class="dropdown-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/purchase_pdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>
</a></li>
                                </ul>
                            </div>

                            <a data-toggle="modal" href="#modal_add_item" class="btn btn-sm btn-primary"><i class="fal fa-paperclip"></i> </a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
purchases/clone/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Clone'];?>
"><i class="fal fa-clone"></i> </a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
supplier/purchase_print/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-dark  btn-sm"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</a>


                        </div>
                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">


                        <div class="invoice">
                            <header class="clearfix">
                                <div class="row">
                                    <div class="col-sm-6 mt-md">
                                        <h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Purchase'];?>
</h2>
                                        <h4 class="h4 m-none text-dark text-bold">#<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></h4>

                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Unpaid') {?>
                                            <h3 class="alert alert-danger mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</h3>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Paid') {?>
                                            <h3 class="alert alert-success mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</h3>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Partially Paid') {?>
                                            <h3 class="alert alert-info mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</h3>
                                        <?php } else { ?>
                                            <h3 class="alert alert-info mt-3"><?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>
</h3>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['config']->value['invoice_receipt_number'] == '1' && $_smarty_tpl->tpl_vars['d']->value['receipt_number'] != '') {?>
                                            <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Receipt Number'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['receipt_number'];?>
</h4>
                                            <hr>
                                        <?php }?>

                                    </div>
                                    <div class="col-sm-6 text-right" style="margin-top: 45px;">

                                        <div class="ib">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="Logo" style="margin-bottom: 15px;">
                                        </div>

                                        <address class="ib mr-xlg">
                                            <strong><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</strong>
                                            <br>
                                            <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>

                                        </address>

                                    </div>
                                </div>
                            </header>
                            <div class="bill-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bill-to">
                                            <p class="h5 mb-xs text-dark text-semibold"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Supplier'];?>
:</strong></p>
                                            <address>
                                                <?php if ($_smarty_tpl->tpl_vars['a']->value['company'] != '') {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['a']->value['company'];?>


                                                    <br>

                                                    <?php if ($_smarty_tpl->tpl_vars['company']->value && $_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>

                                                        <?php if ($_smarty_tpl->tpl_vars['company']->value->business_number != '') {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
: <?php echo $_smarty_tpl->tpl_vars['company']->value->business_number;?>

                                                            <br>
                                                        <?php }?>
                                                    <?php }?>

                                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['ATTN'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                    <br>
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                    <br>
                                                <?php }?>

                                                <?php echo $_smarty_tpl->tpl_vars['a']->value['address'];?>
 <br>
                                                <?php echo $_smarty_tpl->tpl_vars['a']->value['city'];?>
 <br>
                                                <?php echo $_smarty_tpl->tpl_vars['a']->value['state'];?>
 - <?php echo $_smarty_tpl->tpl_vars['a']->value['zip'];?>
 <br>
                                                <?php echo $_smarty_tpl->tpl_vars['a']->value['country'];?>

                                                <br>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['phone'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field'] != '0' && $_smarty_tpl->tpl_vars['a']->value['fax'] != '') {?>
                                                    <br>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['fax'];?>

                                                <?php }?>
                                                <br>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['email'];?>

                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                                    <br>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['a']->value['id']);?>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                <?php echo $_smarty_tpl->tpl_vars['x_html']->value;?>

                                            </address>





                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bill-data text-right">
                                            <p class="mb-none">
                                                <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Issued at'];?>
:</span>
                                                <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['date']));?>
</span>
                                            </p>
                                                                                                                                                                                                                            <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Total'];?>
: <span class="amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</span> </h2>
                                            <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
                                                <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
:  <span class="amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['credit'];?>
</span> </h2>
                                                                                                <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
: <span class="amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['i_due']->value;?>
</span> </h2>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['d']->value['subject'] != '') {?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr>

                                            <strong><?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
</strong>

                                            <hr>

                                        </div>
                                    </div>
                                <?php }?>

                            </div>

                            <div class="table-responsive">
                                <table class="table invoice-items">
                                    <thead>
                                    <tr class="h4 text-dark">
                                        <th id="cell-id" class="text-semibold">#</th>
                                        <th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>

                                        <th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                                                                <th id="cell-qty" class="text-center text-semibold"><?php if ($_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '' || $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '1') {
echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];
} else {
echo $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'];
}?></th>
                                        <th id="cell-total" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>
</td>
                                            <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>

                                            <td class="text-center amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                            <td class="text-center amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </tbody>
                                </table>
                            </div>

                            <div class="invoice-summary">
                                <div class="row">
                                    <div class="col-md-4 offset-md-8">
                                        <table class="table h5 text-dark">
                                            <tbody>
                                            <tr class="b-top-none">
                                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subtotal'];?>
</td>
                                                <td class="text-left amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['subtotal'];?>
</td>
                                            </tr>
                                            <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
                                                <tr>
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</td>
                                                    <td class="text-left amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['discount'];?>
</td>
                                                </tr>
                                            <?php }?>
                                            <tr>
                                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
</td>
                                                <td class="text-left amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['tax'];?>
</td>
                                            </tr>
                                            <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
                                                <tr>
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</td>
                                                    <td class="text-left amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
</td>
                                                    <td class="text-left amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['credit'];?>
</td>
                                                </tr>
                                                <tr class="h4">
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
</td>
                                                                                                        <td class="text-left amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['i_due']->value;?>
</td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr class="h4">
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                                    <td class="text-left amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</td>
                                                </tr>
                                            <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if (($_smarty_tpl->tpl_vars['trs_c']->value != '')) {?>
                            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Related Transactions'];?>
</h3>
                            <table class="table table-bordered sys_table">
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>


                                <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>




                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trs']->value, 'tr');
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
?>
                                    <tr class="<?php if ($_smarty_tpl->tpl_vars['tr']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tr']->value['date']));?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['account'];?>
</td>


                                        <td class="text-right amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['tr']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['tr']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['tr']->value['amount'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['description'];?>
</td>




                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                            </table>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['inv_files_c']->value != '') {?>

                            <table class="table table-bordered table-hover sys_table">
                                <thead>
                                <tr>
                                    <th class="text-right" data-sort-ignore="true" width="20px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</th>

                                    <th class="text-right" data-sort-ignore="true" width="170px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inv_files']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>

                                    <tr>

                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'jpg' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'png' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'gif') {?>
                                                <i class="fal fa-file-image-o"></i>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'pdf') {?>
                                                <i class="fal fa-file-pdf-o"></i>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'zip') {?>
                                                <i class="fal fa-file-archive-o"></i>
                                            <?php } else { ?>
                                                <i class="fal fa-file"></i>
                                            <?php }?>
                                        </td>


                                        <td>

                                            <?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>


                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'jpg' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'png' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'gif') {?>

                                                <hr>

                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/docs/<?php echo $_smarty_tpl->tpl_vars['ds']->value['file_path'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>
">

                                            <?php }?>

                                        </td>

                                        <td class="text-right">

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['ds']->value['file_dl_token'];?>
/" class="md-btn md-btn-primary"><i class="fal fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
</a>

                                        </td>


                                    </tr>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>



                            </table>

                        <?php }?>

                        <?php if (($_smarty_tpl->tpl_vars['d']->value['notes']) != '') {?>
                            <div class="well m-t">
                                <?php echo $_smarty_tpl->tpl_vars['d']->value['notes'];?>

                            </div>
                        <?php }?>

                        <?php if (($_smarty_tpl->tpl_vars['emls_c']->value != '')) {?>
                            <hr>
                            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Related Emails'];?>
</h3>
                            <table class="table table-bordered sys_table">
                                <th width="20%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>







                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emls']->value, 'eml');
$_smarty_tpl->tpl_vars['eml']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['eml']->value) {
$_smarty_tpl->tpl_vars['eml']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['eml']->value['date']));?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['eml']->value['subject'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                            </table>
                        <?php }?>


                        <?php if (count($_smarty_tpl->tpl_vars['access_logs']->value) != 0) {?>
                            <hr>
                            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
 : <?php echo $_smarty_tpl->tpl_vars['_L']->value['Access Log'];?>
</h3>
                            <table class="table table-bordered sys_table">
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Time'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Browser'];?>
</th>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['access_logs']->value, 'log');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo date(($_smarty_tpl->tpl_vars['config']->value['df']).(' H:i:s'),strtotime($_smarty_tpl->tpl_vars['log']->value['viewed_at']));?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['ip'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['country'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['city'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['log']->value['browser'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                            </table>
                        <?php }?>



                    </div>
                </div>


            </div>
        </div>
    </div>

    <div id="modal_add_item" class="modal fade" tabindex="-1"  role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Document'];?>

                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="doc_title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</label>
                            <input type="text" class="form-control" id="doc_title" name="doc_title">

                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="is_global" name="is_global"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Available for all Customers'];?>

                            </label>
                        </div>





                    </form>

                    <hr>

                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                        </div>

                    </form>
                    <hr>
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Server Config'];?>
:</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Maximum Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['upload_max_size']->value;?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['POST Maximum Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
</p>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="file_link" id="file_link" value="">
                    <button type="button" data-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                    <button type="button" id="btn_add_file" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                </div>
            </div>
        </div>


    </div>

    <input type="hidden" id="_lan_msg_confirm" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">
    <input type="hidden" id="admin_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1788227837606be493edfb07_89890082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1788227837606be493edfb07_89890082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>


        Dropzone.autoDiscover = false;
        $(document).ready(function () {



            var _url = $("#_url").val();

            var $modal = $('#cloudonex_body');


            var sysrender = $('#application_ajaxrender');

            $('.amount').autoNumeric('init', {

                aSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
',
                dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });







            var iid = $("#iid").val();
                sysrender.on('click', '#add_payment', function(e){
                    e.preventDefault();

                    $.fancybox.open({
                        src  :  base_url + 'purchases/add-payment/' + iid,
                        type : 'ajax',
                        opts : {
                            afterShow : function( instance, current ) {
                                $(".datepicker").datepicker();
                                $("#account").select2({

                                });
                                $("#cats").select2({

                                });
                                $("#pmethod").select2({

                                });
                            }
                        },
                    });


            });


            sysrender.on('click', '#mail_invoice_created', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'purchases/mail_invoice_/' + iid + '/created',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        }
                    },
                });




            });


            $modal.on('click', '#send', function(event){
                event.preventDefault();


                var attach_pdf = 'No';

                if($("#attach_pdf").prop('checked') == true){
                    attach_pdf = 'Yes';
                }



                var _url = $("#_url").val();
                $.post(_url + 'invoices/send_email', {


                    message: $('#message').val(),
                    subject: $('#subject').val(),

                    toname: $('#toname').val(),
                    i_cid: $('#i_cid').val(),
                    i_iid: $('#i_iid').val(),
                    toemail: $('#toemail').val(),
                    ccemail: $('#ccemail').val(),
                    bccemail: $('#bccemail').val(),
                    attach_pdf: attach_pdf

                }).done(function (data) {
                   toastr.success(data)
                });

            });

            $modal.on('click', '#save_payment', function(event){
                event.preventDefault();

                $.post(base_url + 'purchases/add-payment-post', $("#form_add_payment").serialize())

                    .done(function (data) {

                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {
                            location.reload();
                        }
                        else {
                            toastr.error(data);

                        }
                    });

            });




            $(".set_status").click(function (e) {
                e.preventDefault();

                var curr_stage_id = this.id;

                bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "purchases/set_stage/"+ curr_stage_id, { iid: iid })
                            .done(function( data ) {
                                location.reload();
                               // console.log(data);
                            });
                    }
                });

            });

            $("#mark_paid").click(function (e) {
                e.preventDefault();


                bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "purchases/markpaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });


            $("#mark_unpaid").click(function (e) {
                e.preventDefault();


                bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "purchases/markunpaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });

            $("#mark_cancelled").click(function (e) {
                e.preventDefault();
                bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "purchases/markcancelled", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });

            $("#mark_partially_paid").click(function (e) {
                e.preventDefault();
                bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                        var iid = $("#iid").val();
                        $.post(  _url + "purchases/markpartiallypaid", { iid: iid })
                            .done(function( data ) {
                                location.reload();
                            });
                    }
                });

            });



            $modal.on('click', '#send_bcc_to_admin', function(e){

                e.preventDefault();


                $("#bccemail").val($("#admin_email").val());

            });

            $modal.on('hidden.bs.modal', function () {
                location.reload();
            });



            // attach file






            $('[data-toggle="tooltip"]').tooltip();

            var $btn_add_file = $("#btn_add_file");

            var $file_link = $("#file_link");

            var upload_resp;




            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "documents/upload/",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {

                $btn_add_file.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $btn_add_file.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });




            var $doc_title = $("#doc_title");


            $btn_add_file.on('click', function(e) {
                e.preventDefault();


                $.post( _url + "documents/post/", { title: $doc_title.val(), file_link: $file_link.val(), rid: iid, rtype: 'invoice' })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            toastr.error(data);
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
