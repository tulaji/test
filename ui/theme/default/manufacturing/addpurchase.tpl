{extends file="$layouts_admin"}


{block name="head"}




    <style>

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
                                                <select id="cid" name="cid" class="form-control">
                                                    <option value="">{$_L['Select Contact']}...</option>
                                                    {foreach $c as $cs}
                                                        <option value="{$cs['id']}" >{$cs['account']} {if $cs['email'] neq ''}- {$cs['email']}{/if}</option>
                                                    {/foreach}

                                                </select>
                                            </div>
                                        </div>



                                        <div class='col-md-4'>
                                            <div class="form-group">
                                                <label for="status">{$_L['Status']}</label>
                                                <select id="status" name="status" class="form-control">
                                                    <option  value="Published">{$_L['Published']}</option>
                                                     <option  value="Draft">Draft</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="idate">Issued Date</label>
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
                                        <input type="text" class="form-control" id="ib_search_input" placeholder="{$_L['Search']} Items..." autofocus data-list=".list_pos_items"> </div>
                                </div>

                                <hr>

                                <div id="block_items" class="list_pos_items row">




                                </div>


                            {/if}



                            <div class="table-responsive m-t">
                                <table class="table invoice-table" id="invoice_items">
                                    <thead>
                                    <tr>

                                        <th width="30%">{$_L['Item Name']}</th>
                                        <th width="10%">Qty</th>
                                        <th width="25%">Size</th>
                                        <th width="10%">Price</th>
                                        <th width="7%">Discount(%)</th>
                                        <th width="7%">Tax(%)</th>
                                        <th width="15%">{$_L['Total']}</th>


                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>

                            </div>

                                          <input type="hidden" id="sub_total_l" name="sub_total" >
                                            <input type="hidden" id="tweight_l"  name="tweight">
                                            <input type="hidden" id="total_l"  name="total" >
                                            <input type="hidden" id="t_discount_l"  name="t_discount">
                                            <input type="hidden" id="t_tax_l"  name="t_tax">

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
                                            <td><strong>Total Discount :</strong></td>
                                            <td id="t_discount" class="amount">0.00
                                            </td>
                                        </tr>
                                           <tr>
                                            <td><strong>Total Tax :</strong></td>
                                            <td id="t_tax" class="amount">0.00
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
                                      placeholder="Procurement Notes..."></textarea>
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


              var $t_tax = $("#t_tax");
              var $t_discount = $("#t_discount");

               var $t_tax_input = $(".t_tax");
               var $t_discount_input = $(".t_discount");




$('body').on('input','.changable', function(e) {


  e.preventDefault();
  var ids=$(this).data('valid');
  var discount=$('#discount_'+ids).val();
  var tax=$('#tax_'+ids).val();
  var Price=$('#cost_price_'+ids).val();
  var length=$('#length_'+ids).val();
  var width=$('#width_'+ids).val();
  var height=$('#height_'+ids).val();
  var density=$('#density_'+ids).val();
  var qty=$('#qty_'+ids).val();
  //var ttl_price=0;




  var totalweight=length*width*height*density*qty;
  var ttl_price=qty*Price;
  var linediscount=(ttl_price*discount)/100;


   var linetotalwith_discount=parseFloat(ttl_price)-parseFloat(linediscount);
   var linetax=(linetotalwith_discount*tax)/100;

   var total_with_tax_dis=parseFloat(linetotalwith_discount)+parseFloat(linetax);
  $('#ttl_price_'+ids).val(total_with_tax_dis);


  $('#line_tax_'+ids).val(linetax);
  $('#line_discount_'+ids).val(linediscount);
  $('#line_weight_'+ids).val(totalweight);





  calculateTotal();

    });


            function calculateTotal() {




                var invTotal = 0;

                var totalTaxVal = 0;
                var tax_val=0;

                var lineTotalWithoutTax;
                var totalLineTotalWithoutTax = 0;
                var totalweights = 0;
                var ttl_price=0;

                var subttl=0;
  

                  var  line_tax =0;
                  var  line_weight=0;
                  var  line_discount=0;
                 
                  var qty=0;
                  var cost_price=0;


                $.each( $('.ttl_price'), function( index, value ) {
//                   
                  var ttl_price1=$(this).closest('tr').find('.ttl_price').val();

                    
                    ttl_price+=parseFloat(ttl_price1);


                    var line_tax1=$(this).closest('tr').find('.line_tax').val();
                    var line_discount1=$(this).closest('tr').find('.line_discount').val();
                    var line_weight1=$(this).closest('tr').find('.line_weight').val();


                    line_tax +=parseFloat(line_tax1);
                    line_weight +=parseFloat(line_weight1);
                    line_discount +=parseFloat(line_discount1);


                         qty=$(this).closest('tr').find('.qty').val();
                         cost_price=$(this).closest('tr').find('.cost_price').val();

                    subttl +=parseFloat(qty)*parseFloat(cost_price);





                  

                });

                
                  
                  $('#total_l').val(ttl_price);
                  $('#sub_total_l').val(subttl);
                  $('#tweight_l').val(line_weight.toFixed(2));
                  $('#t_tax_l').val(line_tax.toFixed(2));
                  $('#t_discount_l').val(line_discount.toFixed(2));



                 $total.html(ttl_price.toFixed(2));
                 $sub_total.html(subttl.toFixed(2));
                 $tweight.html(line_weight.toFixed(2));

                 $t_tax.html(line_tax.toFixed(2));
                 $t_discount.html(line_discount.toFixed(2));

                 $t_tax_input.html(line_tax.toFixed(2));
                 $t_discount_input.html(line_discount.toFixed(2));


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
                $.post(_url + 'mpurchase/save/', $('#invform').serialize(), function(data){

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                     toastr.success('Procurement saved!');
                      window.location = _url + 'mpurchase/add';
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
                         var cost_price= val.cost_price;
                         var totalprice= val.totalprice;


                       

                        b_p = '<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><div class="pos_item text-center" id="pos_item_'+ val.id +'" data-pos-item-name="'+val.name+'" data-pos-item-price="'+val.cost_price+'" data-id="'+ val.id +'" data-pos-item-number="'+ val.item_number +'" data-avail_weight="'+totalweight+'"   data-cost_price="'+cost_price+'"  data-total_price="'+totalprice+'"  data-length="'+val.length+'" data-width="'+val.width+'" data-height="'+val.height+'" data-density="'+val.density+'"  data-item_type="'+val.item_type+'"><img src="'+ image +'" alt="'+ item_name +'" class="img-circle"><hr>'+ item_name +' <br>Available: '+ val.totalweight +'KG<br>Unit:'+val.unit+'<br>₹'+val.price+'<hr/> <hr/></div> </div>';



                        items = items + b_p;
                    });

                    $block_items.html(items);

                    $('#ib_search_input').hideseek({
                        highlight: true
                    });

                });

            }

            loadItems();

            var length,width,height,density,pos_item_name, pos_item_price, pos_item_id, pos_item_number,avail_weight,price_per_kg,total_price;

            var item_sl = 5000;
            var _item_id=[];

            $block_items.on('click', '.pos_item', function(){

                pos_item_number = $(this).data('pos-item-number');
                pos_item_name = $(this).data('pos-item-name');
                pos_item_price = $(this).data('pos-item-price');
                pos_item_id = $(this).data('id');



                avail_weight = $(this).data('avail_weight');
                cost_price = $(this).data('cost_price');
                total_price = $(this).data('total_price');


                  length = $(this).data('length');
                  width = $(this).data('width');
                  height = $(this).data('height');
                  density = $(this).data('density');
                  item_type=$(this).data('item_type');



                var res=  _item_id.includes(pos_item_id); 

               if (res) {
                   
                    toastr.error('Already Added');
               }else{



                $invoice_items.find('tbody')
                    .prepend(
                        '<tr><td><input type="text" class="form-control item_name" name="name[]" rows="3" id="i_' + item_sl + '" value="' + pos_item_name + '" readonly> <input type="hidden" name="pos_item_id[]" value="' + pos_item_id + '" data-valid="'+pos_item_id+'"></td><td><input type="text" class="form-control qty changable" id="qty_'+pos_item_id+'" data-valid="'+pos_item_id+'" value="1" name="qty[]" ></td><td><div class="row"><div class="col-md-6"><input type="text" class="form-control width changable" placeholder="Width" name="width[]" value="'+width+'" id="width_'+pos_item_id+'" data-valid="'+pos_item_id+'" readonly title="Width"></div><div class="col-md-6"><input type="text" class="form-control height changable" name="height[]"  value="'+height+'" id="height_'+pos_item_id+'" data-valid="'+pos_item_id+'" placeholder="Height" title="Height" readonly ></div><div class="col-md-6"><input type="text" class="form-control length changable" placeholder="Length" title="Length"  value="'+length+'" data-valid="'+pos_item_id+'" id="length_'+pos_item_id+'"  name="length[]" readonly></div><div class="col-md-6"><input type="text" class="form-control density changable" id="density_'+pos_item_id+'" title="Density"  value="'+density+'" placeholder="Density" data-valid="'+pos_item_id+'"  name="density[]" readonly><input type="hidden" value="'+item_type+'" data-valid="'+pos_item_id+'"  name="item_type[]" id="item_type_'+pos_item_id+'"/></div></div></td><td><input type="text" class="form-control cost_price changable" value="'+cost_price+'" data-valid="'+pos_item_id+'" name="cost_price[]" id="cost_price_'+pos_item_id+'"></td><td class="ltotal"><input type="number" value="0" class="form-control discount changable" name="discount[]" data-valid="'+pos_item_id+'" id="discount_'+pos_item_id+'" ></td><td class="ltotal"><input type="number" value="0" class="form-control tax changable" name="tax[]" id="tax_'+pos_item_id+'"  data-valid="'+pos_item_id+'"  ></td><td class="ltotal"><input type="text" class="form-control ttl_price" value="'+cost_price+'"  name="ttl_price[]" id="ttl_price_'+pos_item_id+'" data-valid="'+pos_item_id+'" readonly ><input type="hidden" name="line_tax[]" id="line_tax_'+pos_item_id+'" value="0"  class="line_tax" /><input type="hidden" value="0"  name="line_weight[]" id="line_weight_'+pos_item_id+'" class="line_weight" /><input type="hidden" name="line_discount[]" id="line_discount_'+pos_item_id+'" class="line_discount" value="0" /></td> </tr>'
                    );






               // spEditor('#i_' + item_sl);


                spMultiSelect('#t_' + rowNum);

                calculateTotal();

                item_sl = item_sl+1;

                _item_id.push(parseInt(pos_item_id));

                // toastr.success('Item Added.');
            }


            });



            {/if}

        });
    </script>


{/block}
