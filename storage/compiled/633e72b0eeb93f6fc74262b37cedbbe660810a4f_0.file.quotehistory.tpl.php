<?php
/* Smarty version 3.1.36, created on 2021-03-28 15:24:12
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\quotehistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60605244ca1387_26896229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '633e72b0eeb93f6fc74262b37cedbbe660810a4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\quotehistory.tpl',
      1 => 1616925249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60605244ca1387_26896229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193243512160605244bf1997_18453390', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171642143560605244c91827_12736369', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_193243512160605244bf1997_18453390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_193243512160605244bf1997_18453390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
       <!--  <div class="col-lg-12">
            <div class="form-group mb-3">
                <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unique Quote URL'];?>
:</label>
                <input type="text" class="form-control" id="invoice_public_url" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
">
            </div>
        </div> -->
        <div class="col-lg-12"  id="application_ajaxrender">
            <div class="panel" id="ibox">
                <div class="panel-hdr">


                    <h2> <?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn_version'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn_version'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></h2>




                    <div class="panel-toolbar">
                        <input type="hidden" name="iid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="iid">
                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">


                        <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Lost') {?>
                            <div id="ribbon-alert-container">
                                <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</a>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Accepted') {?>
                            <div id="ribbon-container">
                                <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</a>

                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Delivered') {?>
                            <div id="ribbon-container">
                                <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</a>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Draft') {?>
                            <div id="ribbon-container">
                                <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</a>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Dead') {?>
                            <div id="ribbon-alert-container">
                                <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</a>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'On Hold') {?>
                            <div id="ribbon-alert-container">
                                <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['On Hold'];?>
</a>
                            </div>

                        <?php } else { ?>
                            <div id="ribbon-container">

                                <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['d']->value['stage'];?>
</a>
                            </div>
                        <?php }?>

                        <div class="invoice">
                            <header class="clearfix">
                                <div class="row">
                                    <div class="col-md-12 mt-md">
                                        <h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</h2>
                                        <h4 class="h4 m-none text-dark text-bold">#<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn_version'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn_version'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></h4>

                                    </div>

                                </div>
                            </header>
                            <div class="bill-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bill-to">
                                            <p class="h5 mb-xs text-dark text-semibold"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recipient'];?>
:</strong></p>
                                            <address>
                                                <?php if ($_smarty_tpl->tpl_vars['a']->value['company'] != '') {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['a']->value['company'];?>

                                                    <br>
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


                                            </address>





                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bill-data text-right">

                                            <div class="ib">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="Logo" style="margin-bottom: 15px;">

                                            </div>

                                            <address class="ib mr-xlg">
                                                <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>

                                            </address>

                                            <p class="mb-none mt-lg">
                                                <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
:</span>
                                                <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['datecreated']));?>
</span>
                                            </p>
                                            <p class="mb-none">
                                                <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
:</span>
                                                <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['validuntil']));?>
</span>
                                            </p>
                                            <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
: <span class="amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</span> </h2>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <hr>

                                    <strong><?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
</strong>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value['proposal'];?>

                                    <hr>
                                </div>
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
                                        <th id="cell-qty" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quantity'];?>
</th>
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

                                            <td class="text-center amount"><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                            <td class="text-center amount"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
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
                                                <td class="text-left amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['subtotal'];?>
</td>
                                            </tr>
                                            <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
                                                <tr>
                                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</td>
                                                    <td class="text-left amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['discount'];?>
</td>
                                                </tr>
                                            <?php }?>
                                            <tr>
                                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['taxname'];?>
</td>
                                                <td class="text-left amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['tax1'];?>
</td>
                                            </tr>

                                            <tr class="h4">
                                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                                <td class="text-left amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value['customernotes'];?>

                                </div>
                            </div>
                        </div>




                                                                                                                        




                    </div>
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
class Block_171642143560605244c91827_12736369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_171642143560605244c91827_12736369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
    $(document).ready(function () {



        var $modal = $('#cloudonex_body');


        var sysrender = $('#application_ajaxrender');

        var _url = base_url;


        sysrender.on('click', '#mail_quote_created', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/mail_invoice_/' + iid + '/created',
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



        sysrender.on('click', '#sms_quote_created', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/sms_quote_/' + iid + '/created',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#message').countSms('#sms-counter');
                    }
                },
            });




        });


        sysrender.on('click', '#sms_quote_accepted', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/sms_quote_/' + iid + '/accepted',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#message').countSms('#sms-counter');
                    }
                },
            });




        });


        sysrender.on('click', '#sms_quote_cancelled', function(e){
            e.preventDefault();
            var iid = $("#iid").val();
            $.fancybox.open({
                src  :  base_url + 'quotes/sms_quote_/' + iid + '/cancelled',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#message').countSms('#sms-counter');
                    }
                },
            });




        });



        $modal.on('click', '#btnModalSMSSend', function(){



            $.post(base_url + 'sms/init/send_quote', {


                message: $('#message').val(),
                to: $("#sms_to").val(),
                from: $("#sms_from").val(),
                invoice_id: $("#smsQuoteId").val()

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

            $('#send').prop('disabled',true);

            $.post(base_url + 'quotes/send_email', $('#email_form').serialize()).done(function (data) {
                toastr.success(data);
            });

        });


        $("#convert_invoice").click(function (e) {
            e.preventDefault();


            bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    $('#ibox').block({ message: null });
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/convert_invoice/", { iid: iid })
                        .done(function( data ) {
                            // console.log(data);
                            $('#ibox').unblock();


                            window.location = _url + 'invoices/view/' + data + '/';

                        });
                }
            });

        });


        $("#mark_draft").click(function (e) {
            e.preventDefault();


            bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_draft/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });

        });


        $("#mark_delivered").click(function (e) {
            e.preventDefault();


            bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_delivered/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });

        });

        $("#mark_on_hold").click(function (e) {
            e.preventDefault();
            bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_on_hold/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });

        });

        $("#mark_accepted").click(function (e) {
            e.preventDefault();
            bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_accepted/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });

        });

        $("#mark_lost").click(function (e) {
            e.preventDefault();
            bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_lost/", { iid: iid })
                        .done(function( data ) {
                            location.reload();
                        });
                }
            });

        });


        $("#mark_dead").click(function (e) {
            e.preventDefault();
            bootbox.confirm($("#_lan_msg_confirm").val(), function(result) {
                if(result){
                    var iid = $("#iid").val();
                    $.post(  _url + "quotes/mark_dead/", { iid: iid })
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
        })

    });
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
