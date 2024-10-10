{extends file="$layouts_admin"}


{block name="head"}




    <style>

    .hideclass{
        display:none;
    }
    .col-sm-6{
        margin-bottom: 10px;
    }
    .col-sm-4{
        margin-bottom: 10px;
    }
    .col-md-4{
        margin-bottom: 10px;
    }
     .col-md-12{
        margin-bottom: 10px;
    }
    .col-sm-3{
        margin-bottom: 10px;
    }
    .col-sm-12{
        margin-bottom: 10px;
    }

        .btn-default {
            color: #333;
            /*background-color: #fff;*/
            border-color: #ccc;
        }

        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active {
            color: #333;
            /*background-color: #fff;*/
            border-color: #ccc;
        }

        {if $pos eq 'pos'}
        .pos_item{
            /*background: #f3f6f9;*/
            cursor: pointer;
        }
        .pos_item:hover{
            background: #2196f3;
            color: #ffffff;
        }

        {/if}
        #block_items{
    max-height: 240px;
    overflow-y: scroll;
}

    </style>

{/block}


{block name="content"}

    <form id="invform" method="post">

        <input type="hidden" id="_dec_point" name="_dec_point" value="{$config['dec_point']}">

        <div class="row" id="ibox_form">



            <div class="col-md-12">





                <div class="panel">

                    <div class="panel-hdr">
                        {if $purchase}
                            <h2>{$purchase->invoicenum}{if $purchase->cn neq ''} {$purchase->cn} {else} {$purchase->id} {/if}</h2>
                            {else}
                            <h2>{predict_next_serial($config,'morder')}</h2>
                        {/if}
                        <div class="panel-toolbar">
                            <div class="btn-group">
                               <!--  <button class="btn btn-primary" id="submit"> {$_L['Save']}</button> -->
                                <button class="btn btn-info" id="save_n_close"> {$_L['Save n Close']}</button>
                            </div>
                        </div>
                    </div>

                    <div class="panel-container">
                        <div class="panel-content">

                            <div class="col-md-12">
                                <div class="alert alert-danger" id="emsg" style="display: none;">
                                    <span id="emsgbody"></span>
                                </div>
                            </div>

                            <div class="row">



                                <div class="col-md-12">



                                    <div class='row'>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="subject">{$_L['Subject']}</label>
                                                <input type="text" class="form-control" name="subject" id="subject">

                                            </div>
                                            <hr>
                                        </div>
                                       
                                         <div class='col-md-4'>
                                            <div class='form-group'>
                                                <label for="user_title">Select Supplier</label>
                                                <select id="cid1" name="cid1" class="form-control">
                                                    <option value="">{$_L['Select Contact']}...</option>
                                                    {foreach $suppliers as $supplier}
                                                        <option value="{$supplier['id']}" >{$supplier['account']} {if $supplier['email'] neq ''}- {$supplier['email']}{/if}</option>
                                                    {/foreach}

                                                </select>
                                            </div>
                                        </div>

                                        <div class='col-md-4'>
                                            <div class="form-group">
                                                <label for="status">Process Type</label>
                                                <select id="status" name="status" class="form-control">
                                                    <option  value="RETURN-OUT">Return material</option>
                                                     <option  value="WASTE-OUT">Waste material</option>
                                                </select>

                                            </div>
                                        </div>
                                       
                                         <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="idate">Date</label>
                                                <input type="text" class="form-control" id="idate" name="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                >
                                            </div>
                                        </div>
                                    </div>


                                 

                                </div>
                            </div>

                            {if $pos eq 'pos'}

                                <div class="ib-search-bar mt-3" style="margin-bottom: 30px;">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="ib_search_input" placeholder="{$_L['Search']}..." autofocus data-list=".list_pos_items"> </div>
                                </div>

                                <hr>

                                <div id="block_items" class="list_pos_items row">




                                </div>


                            {/if}



                            <div class="table-responsive m-t">
                                <table class="table invoice-table" id="invoice_items">
                                    <thead>
                                    <tr>

                                        <th width="40%">{$_L['Item Name']}</th>
                                        <th width="10%">Available(in KG)</th>
                                        <th width="10%">Qty</th>
                                        <th width="15%">{$_L['Price']}</th>
                                        <th width="15%">{$_L['Total']}</th>


                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>

                            </div>

                             <input type="hidden" name="sub_total" class="sub_total">
                                            <input type="hidden" name="tweight" class="tweight">
                                            <input type="hidden" name="total" class="total">

                           <!--  <button type="button" class="btn btn-danger" id="item-remove"><i
                                        class="fal fa-minus-circle"></i> {$_L['Delete']}</button> -->
                            <br>
                            <hr>

                            <div class="row">
                                <div class="col-md-4 offset-md-8">
                                    <table class="table invoice-total">
                                        <tbody>
                                        <tr>
                                            <td><strong>{$_L['Sub Total']} :</strong></td>
                                            <td id="sub_total" class="amount">0.00
                                           
                                            </td>
                                        </tr>
                                     
                                        <tr>
                                            <td><strong>Total Weight :</strong></td>
                                            <td id="tweight" class="amount">0.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>{$_L['TOTAL']} :</strong></td>
                                            <td id="total" class="amount">0.00
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                            <hr>
                            <textarea class="form-control" name="notes" id="notes" rows="3"
                                      placeholder="Order Notes..."></textarea>
                            <br>
                         




                        </div>
                    </div>

                </div>


            </div>







        </div>

        {if $purchase}
            <input type="hidden" name="purchase_id" value="{$purchase->id}">
        {/if}

    </form>




    {* lan variables *}

    <input type="hidden" id="_lan_set_discount" value="{$_L['Set Discount']}">
    <input type="hidden" id="_lan_discount" value="{$_L['Discount']}">
    <input type="hidden" id="_lan_discount_type" value="{$_L['Discount Type']}">
    <input type="hidden" id="_lan_percentage" value="{$_L['Percentage']}">
    <input type="hidden" id="_lan_fixed_amount" value="{$_L['Fixed Amount']}">
    <input type="hidden" id="_lan_btn_save" value="{$_L['Save']}">

    <input type="hidden" id="_lan_no_results_found" value="{$_L['No results found']}">


{/block}


{block name='script'}


    <script>


$('body').on('input','.changable', function(e) {


  e.preventDefault();
  var ids=$(this).data('valid');
  var avail_qty=$(this).data('avail_qty');

  var used_weight_i=$('#used_weight_i_'+ids).val();
  var price_per_kg_i=$('#price_per_kg_i_'+ids).val();
  //var ttl_price=0;

if (used_weight_i!='undefined') {
 
 if (used_weight_i<=avail_qty) {
     var ttl_price=used_weight_i*price_per_kg_i;
     $('#ttl_price_i_'+ids).val(ttl_price);
      calculateTotal();
  
 }else{
    toastr.error('Maximum limit reached!');
      used_weight_i=1;
  $('#used_weight_i_'+ids).val(used_weight_i);
  var ttl_price=used_weight_i*price_per_kg_i;
  $('#ttl_price_i_'+ids).val(ttl_price);
   calculateTotal();
 }
 

}else{
  used_weight_i=1;
  $('#used_weight_i_'+ids).val(used_weight_i);
  var ttl_price=used_weight_i*price_per_kg_i;
  $('#ttl_price_i_'+ids).val(ttl_price);
  calculateTotal();
}
 

    });



        String.prototype.trunc = String.prototype.trunc ||
            function(n){
                return (this.length > n) ? this.substr(0, n-1) + '&hellip;' : this;
            };

        $(document).ready(function () {


            var c_qty;
            var c_price;
            var c_taxed;

            var lineTotal;

            var tax_val;

            var $discount_amount_total = $("#discount_amount_total");

            var $discount_amount = $("#discount_amount");
            var $discount_type  = $("#discount_type");


            function spEditor(selector) {

                $(selector).redactor({
                    paragraphize: false,
                    replaceDivs: false,
                    linebreaks: true ,
                    minHeight: 30 // pixels
                });

            }


            function spMultiSelect(selector){

            }

            spMultiSelect('.taxed');



            var $total = $("#total");
            var $taxtotal = $("#taxtotal");
            var $sub_total = $("#sub_total");
            var $tweight = $("#tweight");


             var $itotal= $(".total");
            var $isub_total = $(".sub_total");
            var $itweight = $(".tweight");


            var cDiscountVal = 0;

            var $invoice_items = $('#invoice_items');


            function calculateTotal() {




                var invTotal = 0;

                var totalTaxVal = 0;

                var tax_val;

                var lineTotalWithoutTax;

                var totalLineTotalWithoutTax = 0;
                 var totalweights = 0;






                $.each( $('.used_weight'), function( index, value ) {
//                    console.log(index);
//                    console.log(this.value);

                    c_qty = this.value;

                    c_price = $(this).closest('tr').find('.price_per_kg').val();

                    if(c_qty === '' || c_price === ''){
                        return;
                    }


                    //c_taxed = $(this).closest('tr').find('.taxed').val();

                   // console.log(c_taxed);

                    lineTotal = c_price*c_qty;
                    lineTotal = parseFloat(lineTotal);

                    lineTotalWithoutTax = lineTotal;

                 var tweights_price=$(this).closest('tr').find('.pos-item-weight').val();
                  var tweights=$(this).closest('tr').find('.used_weight').val();
                    totalweights +=parseFloat(tweights*tweights_price);

                   // $(this).closest('tr').find('.lvtotal').val(lineTotal.toFixed(2));
                    invTotal += lineTotal;
                    totalLineTotalWithoutTax += lineTotalWithoutTax;


                });



                $total.html(invTotal.toFixed(2));
                $sub_total.html(totalLineTotalWithoutTax.toFixed(2));
                $tweight.html(totalweights.toFixed(2));

             $itotal.val(invTotal.toFixed(2));
             $isub_total.val(totalLineTotalWithoutTax.toFixed(2));
             $itweight.val(totalweights.toFixed(2));



            }

            calculateTotal();









            var $block_items = $("#block_items");

            var _url = $("#_url").val();

            $('.amount').autoNumeric('init');
            $('#notes').redactor(
                {
                    minHeight: 200, // pixels
                    plugins: ['fontcolor']
                }
            );






            spEditor('.item_name');







 $('body').on('change', '.used_weight', function(){

        calculateTotal();


    });



            $invoice_items.on('change', '.taxed', function(){
                //   $('#taxtotal').html('dd');
                // var taxrate = $('#stax').val().replace(',', '.');
                // $(this).val(taxrate);

                calculateTotal();


            });


            $invoice_items.on('change', '.qty', function(){

                calculateTotal();

            });

            $invoice_items.on('change', '.item_price', function(){

                calculateTotal();

            });



            var item_remove = $('#item-remove');
            item_remove.hide();




            function update_address(){
                var _url = $("#_url").val();
                var cid = $('#cid').val();
                if(cid != ''){
                    $.post(_url + 'contacts/render-address/', {
                        cid: cid

                    })
                        .done(function (data) {
                            var adrs = $("#address");


                            adrs.html(data);

                        });
                }

            }
            update_address();
            $('#cid').select2({
                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            })
                .on("change", function(e) {
                    // mostly used event, fired to the original element when the value changes
                    // log("change val=" + e.val);
                    //  alert(e.val);

                    update_address();
                });


                 $('#cid1').select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                })
                .on("change", function(e) {
                });
                $('#project_id').select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                })
                .on("change", function(e) {
                });

                 $('#features').select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                })
                .on("change", function(e) {
                });






            item_remove.on('click', function(){
                $("#invoice_items tr.info").fadeOut(300, function(){
                    $(this).remove();

                });

            });

            var $modal = $('#cloudonex_body');





            $('#item-add').on('click', function(){


                $.fancybox.open({
                    src  : base_url + 'ps/modal-list/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#modal_items_table').dataTable(
                                {
                                    responsive: true,
                                    "language": {
                                        "emptyTable": "{$_L['No Data Available']}",
                                    },
                                });
                        },
                        touch: false,
                        autoFocus: false,
                    }
                });


            });

            /*
             / @since v 2.0
             */

            $('#contact_add').on('click', function(e){
                e.preventDefault();
                // create the backdrop and wait for next modal to be triggered

                $.fancybox.open({
                    src  : _url + 'contacts/modal_add/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $("#country").select2({

                            });
                        }
                    }
                });

            });

            var rowNum = 1000;

            $('#blank-add').on('click', function(){
                rowNum++;


                $invoice_items.find('tbody')
                    .append(
                        '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '"></textarea> <input type="hidden" name="item_code[]" value=""> </td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td>  <td> </td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                    );


                spEditor('#i_' + rowNum);



                spMultiSelect('#t_' + rowNum);

                //   calculateTotal();


            });

            $invoice_items.on('click', '.redactor-editor', function(){
                $("tr").removeClass("info");
                $(this).closest('tr').addClass("info");

                item_remove.show();
            });

            $modal.on('click', '.update', function(){
                var tableControl= document.getElementById('items_table');




                //$modal
                //    .modal('loading')
                //    .find('.modal-body')
                //    .prepend('<div class="alert alert-info fade in">' +
                //    'Updated!<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                //    '</div>');


                //  input type="text" class="form-control item_name" name="desc[]" value="' + item_name + '">
                // var obj = new Array();

                $('input:checkbox:checked', tableControl).each(function() {
                    rowNum++;
                    var item_code = $(this).closest('tr').find('td:eq(1)').text();
                    var item_name = $(this).closest('tr').find('td:eq(2)').text();

                    var item_price = $(this).closest('tr').find('td:eq(3)').text();



                    $invoice_items.find('tbody')
                        .append(
                            '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '">' + item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + item_code + '"></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + item_price + '"></td>  <td> </td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
                        );

                    spEditor('#i_' + rowNum);

                    spMultiSelect('#t_' + rowNum);

                    calculateTotal();

                });

                //  console.debug(obj); // Write it to the console
                //  calculateTotal();


                $.fancybox.close();

            });


            $modal.on('click', '.contact_submit', function(e){
                e.preventDefault();
                //  var tableControl= document.getElementById('items_table');


                var _url = $("#_url").val();
                $.post(_url + 'contacts/add-post/', {


                    account: $('#account').val(),
                    company: $('#company').val(),
                    address: $('#m_address').val(),

                    city: $('#city').val(),
                    state: $('#state').val(),
                    zip: $('#zip').val(),
                    country: $('#country').val(),
                    phone: $('#phone').val(),
                    email: $('#email').val(),
                    supplier: 'Supplier'

                })
                    .done(function (data) {

                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            // location.reload();
                            var is_recurring = $('#is_recurring').val();
                            if(is_recurring == 'yes'){
                                window.location = _url + 'purchases/add/recurring/' + data + '/';
                            }
                            else{
                                window.location = _url + 'purchases/add/1/' + data + '/';
                            }

                        }
                        else {


                            $modal
                                .modal('loading')
                                .find('.modal-body')
                                .prepend('<div class="alert alert-danger fade in">' + data +
                                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                    '</div>');
                            $("#cid").select2('data', { id: newID, text: newText });
                        }
                    });


            });



            $("#add_discount").click(function (e) {
                e.preventDefault();
                var s_discount_amount = $('#discount_amount');
                var c_discount = s_discount_amount.val();
                var c_discount_type = $('#discount_type').val();
                var p_checked = "";
                var f_checked = "";
                if( c_discount_type == "p" ){
                    p_checked = 'checked="checked"';
                }else{
                    f_checked = 'checked="checked"';
                }
                bootbox.dialog({
                        title: $("#_lan_set_discount").val(),
                        message: '<div class="row">  ' +
                        '<div class="col-md-12"> ' +
                        '<form class="form-horizontal" action="javascript:void(0);"> ' +
                        '<div class="form-group"> ' +
                        '<label class="col-md-4 control-label" for="set_discount">' + $("#_lan_discount").val() +'</label> ' +
                        '<div class="col-md-4"> ' +
                        '<input id="set_discount" name="set_discount" type="text" class="form-control input-md" value="' + c_discount + '"> ' +
                        '</div> ' +
                        '</div> ' +
                        '<div class="form-group"> ' +
                        '<label class="col-md-4 control-label" for="set_discount_type">' + $("#_lan_discount_type").val() +'</label> ' +
                        '<div class="col-md-4"> <div class="radio"> <label for="set_discount_type-0"> ' +
                        '<input type="radio" name="set_discount_type" id="set_discount_type-0" value="p" ' + p_checked + '> ' +
                        '' + $("#_lan_percentage").val() +' (%) </label> ' +
                        '</div><div class="radio"> <label for="set_discount_type-1"> ' +
                        '<input type="radio" name="set_discount_type" id="set_discount_type-1" value="f" ' + f_checked + '> ' + $("#_lan_fixed_amount").val() +' </label> ' +
                        '</div> ' +
                        '</div> </div>' +
                        '</form> </div>  </div>',
                        buttons: {
                            success: {
                                label: $("#_lan_btn_save").val(),
                                className: "btn-success",
                                callback: function () {
                                    var discount_amount = $('#set_discount').val();
                                    var discount_type = $("input[name='set_discount_type']:checked").val();
                                    $('#discount_amount').val(discount_amount);
                                    $('#discount_type').val(discount_type);
                                    //calculateTotal();
                                    //updateTax();
                                    //updateTotal();
                                }
                            }
                        }
                    }
                );
            });




            $(".progress").hide();
            $("#emsg").hide();
            // $("#submit").click(function (e) {
            //     e.preventDefault();
            //     $('#ibox_form').block({ message: null });
            //     var _url = $("#_url").val();
            //     $.post(_url + 'morder/save/', $('#invform').serialize(), function(data){

            //         var _url = $("#_url").val();

            //         console.log(data);
            //         if ($.isNumeric(data)) {

            //             window.location = _url + 'morder/add';
            //         }
            //         else {
            //             $('#ibox_form').unblock();
            //             var body = $("html, body");
            //             body.animate({ scrollTop:0 }, '1000', 'swing');
            //             $("#emsgbody").html(data);
            //             $("#emsg").show("slow");
            //         }
            //     });
            // });


            $("#save_n_close").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'mreturn/save/', $('#invform').serialize(), function(data){

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {
                      toastr.success('Data saved!');
                      
                      window.location = _url + 'mreturn/add';
                     
                    }
                    else {
                        $('#ibox_form').unblock();
                        var body = $("html, body");
                        body.animate({ scrollTop:0 }, '1000', 'swing');
                        $("#emsgbody").html(data);
                        $("#emsg").show("slow");
                    }
                });
            });


  var _item_id=[];

    $('body').on('change','#features',function (e) {
                e.preventDefault();
                $("#invoice_items tbody tr").remove();
                calculateTotal();


                var orderid=$(this).val();

    $.getJSON( base_url + "mitems/findbyorder/"+orderid, function( data ) {

                   
     $.each( data, function( key, val ) {

        var pos_item_name, pos_item_price, pos_item_id, pos_item_number,avail_weight,price_per_kg,total_price,pos_item_weight;

            var item_sl = 5000;

            pos_item_name=val.pos_item_name;
             pos_item_price=val.price_per_kg;
              pos_item_id=val.pos_item_id;
               pos_item_number=val.pos_item_id;
                avail_weight=val.totalweight;
                 price_per_kg=val.price_per_kg;
                  total_price=val.total_price;
                  pos_item_weight=val.pos_item_weight;
                 

             var res=  _item_id.includes(pos_item_id); 

               if (res) {
                   
                    toastr.error('Already Added');
               }else{
                    

                    $invoice_items.find('tbody')
                    .prepend(
                        '<tr>  <td><input type="text" class="form-control item_name" name="name[]" rows="3" id="i_' + item_sl + '" value="' + pos_item_name + '" readonly> <input type="hidden" name="pos_item_id[]" value="' + pos_item_id + '"><input type="hidden" class="pos-item-weight" name="pos_item_weight[]" value="' + pos_item_weight + '"></td> <td><input type="text" class="form-control qty" value="'+avail_weight+'" name="avail_weight[]" readonly></td> <td><input type="text" class="form-control used_weight changable" data-avail_qty="'+val.avail_qty+'" data-valid="'+pos_item_id+'" id="used_weight_i_'+pos_item_id+'" name="used_weight[]" value="1"></td><td><input type="text" data-valid="'+pos_item_id+'" class="form-control price_per_kg changable" name="price_per_kg[]" id="price_per_kg_i_'+pos_item_id+'" value="' + price_per_kg + '" readonly></td>  <td class="ltotal"><input type="text" class="form-control total_price" name="ttl_price[]" id="ttl_price_i_'+pos_item_id+'" value="'+total_price+'" readonly></td>  </tr>'
                    );

               // spEditor('#i_' + item_sl);


                spMultiSelect('#t_' + rowNum);

                calculateTotal();

                item_sl = item_sl+1;

                _item_id.push(parseInt(pos_item_id));

                // toastr.success('Item Added.');
            }
            console.log(_item_id);

     })
    })
});





            {if $pos eq 'pos'}

            function loadItems() {

                $block_items.html(block_msg);

                var item_name;

                $.getJSON( base_url + "mitems/all/", function( data ) {
                    var items = "";
                    var b_p;
                    $.each( data, function( key, val ) {

                        item_name = val.name;

                        item_name = item_name.trunc(12);

                        var image;

                        if(val.image == '') {
                            image = '{$app_url}ui/lib/img/item_placeholder.png';
                            }
                            else{
                            image = '{$app_url}storage/items/thumb'+ val.image;
                        }

                         var totalweight= val.totalweight;
                         var price_per_kg= val.price;
                         var totalprice= val.price;




                        b_p = '<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><div class="pos_item text-center" id="pos_item_'+ val.id +'" data-pos-item-name="'+val.name+'" data-pos-item-price="'+val.cost_price+'" data-id="'+ val.id +'" data-pos-item-number="'+ val.item_number +'" data-pos-item-weight="'+ val.weight +'" data-avail_weight="'+totalweight+'"  data-avail_qty="'+val.avail_qty+'" data-price_per_kg="'+price_per_kg+'"  data-total_price="'+totalprice+'"><img src="'+ image +'" alt="'+ item_name +'" class="img-circle"><hr>'+ item_name +' <br>Available:'+val.total_qty +'X'+val.weight+' '+val.weight_type+'<br>Unit:'+val.unit+'<br>₹'+val.price+'<hr/></div></div>';

                        items = items + b_p;
                    });

                    $block_items.html(items);

                    $('#ib_search_input').hideseek({
                        highlight: true
                    });

                });

            }

            loadItems();

            var pos_item_name, pos_item_price, pos_item_id, pos_item_number,avail_weight,price_per_kg,total_price,pos_item_weight,avail_qty;

            var item_sl = 5000;
            

            $block_items.on('click', '.pos_item', function(){

                pos_item_number = $(this).data('pos-item-number');
                pos_item_name = $(this).data('pos-item-name');
                pos_item_price = $(this).data('pos-item-price');
                pos_item_id = $(this).data('id');



                avail_weight = $(this).data('avail_weight');
                price_per_kg = $(this).data('price_per_kg');
                total_price = $(this).data('total_price');
                pos_item_weight=$(this).data('pos-item-weight');

                avail_qty=$(this).data('avail_qty');
                



               var res=  _item_id.includes(pos_item_id); 

               if (res) {
                   
                    toastr.error('Already Added');
               }else{
                



                $invoice_items.find('tbody')
                    .prepend(
                        '<tr class='+pos_item_id+'="'+pos_item_id+'">  <td><input type="text" class="form-control item_name" name="name[]" rows="3" id="i_' + item_sl + '" value="' + pos_item_name + '" readonly> <input type="hidden" class="pos_item_id" name="pos_item_id[]" value="' + pos_item_id + '"><input type="hidden" class="pos-item-weight" name="pos_item_weight[]" value="' + pos_item_weight + '"></td> <td><input type="text" class="form-control qty" value="'+avail_weight+'" name="avail_weight[]" readonly></td> <td><input type="text" class="form-control used_weight changable" data-avail_qty="'+avail_qty+'" data-valid="'+pos_item_id+'" id="used_weight_i_'+pos_item_id+'" name="used_weight[]" value="1"></td><td><input type="text" data-valid="'+pos_item_id+'" class="form-control price_per_kg changable" name="price_per_kg[]" id="price_per_kg_i_'+pos_item_id+'" value="' + price_per_kg + '" readonly></td>  <td class="ltotal"><input type="text" class="form-control total_price" name="ttl_price[]" id="ttl_price_i_'+pos_item_id+'" value="'+total_price+'" readonly></td>  </tr>'
                    );


               // spEditor('#i_' + item_sl);


                spMultiSelect('#t_' + rowNum);

                calculateTotal();

                item_sl = item_sl+1
                _item_id.push(pos_item_id);

                 toastr.success('Item Added.');
               }
          
          console.log(_item_id);

            });



            {/if}

        });




function selectteam(val){

if (val=='INTERNAL') {
    $('#selectsupplier').addClass('hideclass');
    $('#selectuser').removeClass('hideclass');

}else{
    $('#selectuser').addClass('hideclass');
     $('#selectsupplier').removeClass('hideclass');
    
}

}
    </script>



{/block}
