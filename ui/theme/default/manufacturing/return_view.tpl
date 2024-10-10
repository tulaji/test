{extends file="$layouts_admin"}
{block name="head"}


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
{/block}



{block name="content"}
    <div class="row">
       
        <div class="col-lg-12"  id="application_ajaxrender">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="d-none d-md-inline">Return/Damaged </h2>
                    <input type="hidden" name="iid" value="{$d['id']}" id="iid">

                    <div class="panel-toolbar">
                        <div class="btn-group flex-wrap" role="group">


                           
                         
                            <a href="{$_url}mreturn/edit_bill/{$d['id']}" class="btn btn-warning  btn-sm"><i class="fal fa-pencil"></i> <span class="d-none d-md-inline">{$_L['Edit']}</span></a>
                          
                            <div class="btn-group" role="group">
                                <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fal fa-file-pdf-o"></i>
                                    <span class="d-none d-md-inline">{$_L['PDF']}</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-item"><a href="{$_url}mreturn/pdf/{$d['id']}/token_{$d['vtoken']}/view/" target="_blank">{$_L['View PDF']}</a></li>
                                    <li class="dropdown-item"><a href="{$_url}mreturn/pdf/{$d['id']}/azpllldd/dl/">{$_L['Download PDF']}</a></li>
                                </ul>
                            </div>
                            <a href="{$_url}mreturn/print_bill/{$d['id']}" target="_blank" class="btn btn-dark  btn-sm"><i class="fal fa-print"></i>  <span class="d-none d-md-inline">{$_L['Print']}</span></a>


                        </div>
                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="invoice">
                            <header class="clearfix">
                                <div class="row">
                                    <div class="col-sm-6 mt-md">
                                        <h2 class="h2 mt-none mb-sm text-dark text-bold">Sr. No :#{$d['orderid']}</h2>
                                       

                                     
                                        {if $d['order_status'] eq 'RETURN-OUT'}
                                            <h3 class="alert alert-danger">RETURN</h3>
                                        {else}
                                            <h3 class="alert alert-danger">Damaged</h3>
                                        {/if}



                                    </div>
                                    <div class="col-sm-6 text-right mt-md mb-md">

                                        <div class="ib">
                                            <img src="{$app_url}storage/system/{$config['logo_default']}" alt="Logo" style="margin-bottom: 15px;">
                                        </div>

                                        <address class="ib mr-xlg">
                                            <strong>{$config['CompanyName']}</strong>
                                            <br>
                                            {$config['caddress']}

                                        </address>

                                    </div>
                                </div>
                            </header>
                            <div class="bill-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bill-to">
                                            <p class="h5 mb-xs text-dark text-semibold"><strong>Supplier:</strong></p>
                                            <address>
                                                <strong></strong>{$d['team_name']} 
                                            </address>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-6">
                                        <div class="bill-data text-right">
                                            <p class="mb-none">
                                                <span class="text-dark">Date:</span>
                                                <span class="value">{date( $config['df'], strtotime($d['start_date']))}</span>
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
                                            <th id="cell-item" class="text-semibold text-bolds">{$_L['Item']}</th>
                                            <th id="cell-item" class="text-semibold text-bolds">{$_L['Unit']}</th>
                                            <th id="cell-qty" class="text-center text-semibold text-bolds">{if $d['show_quantity_as'] eq '' || $d['show_quantity_as'] eq '1'}{$_L['Qty']}{else}{$d['show_quantity_as']}{/if}</th>

                                            <th class="text-semibold text-bolds">Total Weight</th>
                                            <th id="cell-price" class="text-center text-semibold text-bolds">{$_L['Price']}</th>
                                            
                                            <th id="cell-total" class="text-right text-semibold text-bolds">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {foreach $items as $item}
                                            <tr>
                                                <td>
                                                    {if $item['itemcode'] != ''}
                                                        {$item['itemcode']}
                                                    {else}
                                                        {counter}
                                                    {/if}
                                                </td>
                                                <td class="text-semibold text-dark">{$item['description']}</td>
                                                <td class="text-semibold text-dark">{$item['unit']}</td>
                                                   <td class="text-center">{$item['qty']}</td>
                                                <td class="text-semibold text-dark">{$item['weight']}</td>
                                                <td class="text-center">{formatCurrency($item['price'],$d['currency_iso_code'])}</td>
                                             

                                                <td class="text-right">{formatCurrency(($item['total']),$d['currency_iso_code'])}</td>
                                            </tr>
                                        {/foreach}
                                        </tbody>
                                    </table>

                              



                            </div>

                            <div class="invoice-summary">
                                <div class="row">
                                    <div class="col-md-4 offset-md-8">
                                        <table class="table h5 text-dark">
                                            <tbody>
                                            <tr class="b-top-none">
                                                <td colspan="2">{$_L['Subtotal']}</td>
                                                <td class="text-left">{{formatCurrency($d['order_total'],$d['currency_iso_code'])}}</td>
                                            </tr>
                                             <tr class="b-top-none">
                                                <td colspan="2">Total Weight</td>
                                                <td class="text-left">{$d['weight_total']} Kg</td>
                                            </tr>
                                                <tr class="h4">
                                                    <td colspan="2">{$_L['Grand Total']}</td>
                                                    <td class="text-left">{formatCurrency($d['order_total'],$d['currency_iso_code'])}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                       

                        {if ($d['order_note']) neq ''}
                            <div class="well m-t">
                            <hr/>
                            <h3>Notes</h3>
                                {$d['order_note']}
                            </div>
                        {/if}

                       


                       



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
                        {$_L['New Document']}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="doc_title">{$_L['Title']}</label>
                            <input type="text" class="form-control" id="doc_title" name="doc_title">

                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="is_global" name="is_global"> {$_L['Available for all Customers']}
                            </label>
                        </div>





                    </form>

                    <hr>

                   

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="file_link" id="file_link" value="">
                    <button type="button" data-dismiss="modal" class="btn btn-danger">{$_L['Close']}</button>
                    <button type="button" id="btn_add_file" class="btn btn-primary">{$_L['Submit']}</button>
                </div>
            </div>
        </div>


    </div>



    <input type="hidden" id="_lan_msg_confirm" value="{$_L['are_you_sure']}">
    <input type="hidden" id="admin_email" value="{$user->username}">


{/block}

{block name="script"}


    <script>


        Dropzone.autoDiscover = false;
        $(document).ready(function () {



            var _url = $("#_url").val();

            var $modal = $('#cloudonex_body');


            var sysrender = $('#application_ajaxrender');

            $('.amount').autoNumeric('init', {

                aSign: '{$config['currency_code']}',
                dGroup: {$config['thousand_separator_placement']},
                aPad: {$config['currency_decimal_digits']},
                pSign: '{$config['currency_symbol_position']}',
                aDec: '{$config['dec_point']}',
                aSep: '{$config['thousands_sep']}',
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



    </script>
{/block}
