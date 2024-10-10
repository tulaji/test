<?php
/* Smarty version 3.1.36, created on 2021-04-27 01:49:07
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\manufacturing\morder_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6087203b1b1a32_06088237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '459b92dcb4002139356e460ea7b8022a023571ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\manufacturing\\morder_view.tpl',
      1 => 1619468326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6087203b1b1a32_06088237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13228966087203b0bc691_46560502', "head");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10311690806087203b0c13e3_67512540', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4159178696087203b184b17_88491100', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_13228966087203b0bc691_46560502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_13228966087203b0bc691_46560502',
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
        .text-bolds{
            font-weight: 800!important;
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
class Block_10311690806087203b0c13e3_67512540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10311690806087203b0c13e3_67512540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pcrm\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

    <div class="row">
       
        <div class="col-lg-12"  id="application_ajaxrender">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="d-none d-md-inline">Bill of materials </h2>
                    <input type="hidden" name="iid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="iid">

                    <div class="panel-toolbar">
                        <div class="btn-group flex-wrap" role="group">


                           
                           <?php if ($_smarty_tpl->tpl_vars['d']->value['order_status'] == 'NEW' || $_smarty_tpl->tpl_vars['d']->value['order_status'] == 'NOT-APPROVED' || $_smarty_tpl->tpl_vars['d']->value['order_status'] == 'CANCELLED' || $_smarty_tpl->tpl_vars['d']->value['order_status'] == 'APPROVED') {?>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn  btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-ellipsis-v"></i>  <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark As'];?>
</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                     <li class="dropdown-item"><a href="#" class="orderstatus" data-id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" data-status="APPROVED">APPROVED</a></li>
                                     <li class="dropdown-item"><a href="#" class="orderstatus" data-id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" data-status="CANCELLED">CANCELLED</a></li>

                                </ul>
                            </div>
                             <?php }?>

                             
                            <?php if ($_smarty_tpl->tpl_vars['d']->value['order_status'] == 'NEW' || $_smarty_tpl->tpl_vars['d']->value['order_status'] == 'NOT-APPROVED' || $_smarty_tpl->tpl_vars['d']->value['order_status'] == 'CANCELLED' || $_smarty_tpl->tpl_vars['d']->value['order_status'] == 'APPROVED') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
morder/edit_bill/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="btn btn-warning  btn-sm"><i class="fal fa-pencil"></i> <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</span></a>
                            <?php }?>
                            

                            <div class="btn-group" role="group">
                                <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fal fa-file-pdf-o"></i>
                                    <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PDF'];?>
</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
morder/pdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a></li>
                                    <li class="dropdown-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
morder/pdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/azpllldd/dl/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>
</a></li>
                                </ul>
                            </div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
morder/print_bill/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" target="_blank" class="btn btn-dark  btn-sm"><i class="fal fa-print"></i>  <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</span></a>


                        </div>
                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="invoice">
                            <header class="clearfix">
                                <div class="row">
                                    <div class="col-sm-6 mt-md">
                                        <h2 class="h2 mt-none mb-sm text-dark text-bold">Bill No :#<?php echo $_smarty_tpl->tpl_vars['d']->value['orderid'];?>
</h2>
                                       

                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['order_status'] == 'NOT-APPROVED') {?>
                                            <h3 class="alert alert-danger">PENDING FOR APPROVAL</h3>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['order_status'] == 'PROCESSING') {?>
                                            <h3 class="alert alert-success">WORK IN PROGRESS</h3>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['order_status'] == 'FINISHED') {?>
                                            <h3 class="alert alert-info">FINISHED</h3>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['order_status'] == 'APPROVED') {?>
                                            <h3 class="alert alert-info">APPROVED</h3>
                                         <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['order_status'] == 'TRANSFER') {?>
                                            <h3 class="alert alert-info">FINISHED AND TRANSFERED</h3>
                                     
                                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['order_status'] == 'CANCELLED') {?>
                                            <h3 class="alert alert-danger">CANCELLED</h3>
                                        <?php } else { ?>
                                            <h3 class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['d']->value['order_status'];?>
</h3>
                                        <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['d']->value['title'])) && $_smarty_tpl->tpl_vars['d']->value['title'] != '') {?>
                                            <h4><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</h4>
                                            <hr>
                                        <?php }?>



                                    </div>
                                    <div class="col-sm-6 text-right mt-md mb-md">

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
                                            <p class="h5 mb-xs text-dark text-semibold"><strong>Bill To:</strong></p>
                                            <address>
                                                <strong></strong><?php echo $_smarty_tpl->tpl_vars['d']->value['team_name'];?>
 
                                            </address>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-6">
                                        <div class="bill-data text-right">
                                            <p class="mb-none">
                                                <span class="text-dark">Bill Date:</span>
                                                <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['start_date']));?>
</span>
                                            </p>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="table-responsive">

                                    <table class="table table-bordered invoice-items">
                                        <thead>
                                        <tr class="text-dark">
                                            <th id="cell-id" class="text-semibold text-bolds">S/L</th>
                                            <th id="cell-item" class="text-semibold text-bolds"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                            <th id="cell-item" class="text-semibold text-bolds"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unit'];?>
</th>
                                            <th id="cell-qty" class="text-center text-semibold text-bolds"><?php if ($_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '' || $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '1') {
echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];
} else {
echo $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'];
}?></th>

                                            <th class="text-semibold text-bolds">Total Weight</th>
                                            <th id="cell-price" class="text-center text-semibold text-bolds"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                            
                                            <th id="cell-total" class="text-right text-semibold text-bolds">Total</th>
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
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['itemcode'] != '') {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>

                                                    <?php } else { ?>
                                                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                                    <?php }?>
                                                </td>
                                                <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                                                <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['unit'];?>
</td>
                                                   <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                                <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['weight'];?>
</td>
                                                <td class="text-center"><?php echo formatCurrency($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                             

                                                <td class="text-right"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value['total']),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
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
                                                <td class="text-left"><?php ob_start();
echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['order_total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</td>
                                            </tr>
                                             <tr class="b-top-none">
                                                <td colspan="2">Total Weight</td>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['d']->value['weight_total'];?>
 Kg</td>
                                            </tr>
                                                <tr class="h4">
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                                    <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['order_total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                       

                        <?php if (($_smarty_tpl->tpl_vars['d']->value['order_note']) != '') {?>
                            <div class="well m-t">
                            <hr/>
                            <h3>Notes</h3>
                                <?php echo $_smarty_tpl->tpl_vars['d']->value['order_note'];?>

                            </div>
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
class Block_4159178696087203b184b17_88491100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_4159178696087203b184b17_88491100',
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
                    src  :  base_url + 'invoices/add-payment/' + iid,
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
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/created',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#mail_invoice_reminder', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/reminder',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });

            sysrender.on('click', '#mail_invoice_overdue', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/overdue',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });







            });

            sysrender.on('click', '#mail_invoice_confirm', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/confirm',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });





            });

            sysrender.on('click', '#mail_invoice_refund', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/mail_invoice_/' + iid + '/refund',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });



            sysrender.on('click', '#sms_invoice_created', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/created',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });




            });

            sysrender.on('click', '#sms_invoice_reminder', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/reminder',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#sms_invoice_overdue', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/overdue',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });


            });

            sysrender.on('click', '#sms_invoice_confirm', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/confirm',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });

            sysrender.on('click', '#sms_invoice_refund', function(e){
                e.preventDefault();
                var iid = $("#iid").val();

                $.fancybox.open({
                    src  :  base_url + 'invoices/sms_invoice_/' + iid + '/refund',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').countSms('#sms-counter');
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    },
                });



            });




            $modal.on('click', '#btnModalSMSSend', function(event){

                event.preventDefault();

                $.post(base_url + 'sms/init/send_invoice', {


                    message: $('#message').val(),
                    to: $("#sms_to").val(),
                    from: $("#sms_from").val(),
                    invoice_id: $("#smsInvoiceId").val()

                }).done(function (data) {

                    toastr.success(data);
                });

            });



            $modal.on('click', '#send', function(e){

                e.preventDefault();

                var attach_pdf = 'No';

                if($("#attach_pdf").prop('checked') == true){
                    attach_pdf = 'Yes';
                }



                $.post(base_url + 'invoices/send_email', $('#email_form').serialize()).done(function (data) {
                    toastr.success(data);
                });

            });

            $modal.on('click', '#save_payment', function(e){
                e.preventDefault();

                $.post(base_url + 'invoices/add-payment-post', $("#form_add_payment").serialize())

                    .done(function (data) {

                        if ($.isNumeric(data)) {
                            location.reload();
                        }
                        else {
                            toastr.error(data);
                        }
                    });

            });

            $('body').on('click','.orderstatus',function (e) {
                e.preventDefault();
                 var iid = $(this).data('id');
                 var istatus = $(this).data('status');
                       
              bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                    if(result){
                       

                        $.post(  _url + "morder/changestatus", { iid: iid,istatus:istatus })
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
                        $.post(  _url + "invoices/markunpaid", { iid: iid })
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
                        $.post(  _url + "invoices/markcancelled", { iid: iid })
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
                        $.post(  _url + "invoices/markpartiallypaid", { iid: iid })
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
