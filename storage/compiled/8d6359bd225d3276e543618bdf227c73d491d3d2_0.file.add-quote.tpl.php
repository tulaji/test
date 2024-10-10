<?php
/* Smarty version 3.1.36, created on 2021-06-08 14:00:14
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\add-quote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60bf2a9652bcc2_43386340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d6359bd225d3276e543618bdf227c73d491d3d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\add-quote.tpl',
      1 => 1618946942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf2a9652bcc2_43386340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158278266460bf2a964cced8_08942440', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_987831660bf2a965203f2_07302739', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_158278266460bf2a964cced8_08942440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_158278266460bf2a964cced8_08942440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_alias'];?>


                           <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>
                               <b>   [ <?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
] </b>

                            <?php }?>

                    </h2>

                </div>

                <div class="panel-container">
                    <div class="panel-content" id="ibox_form">
                        <form id="invform" method="post">

                         <?php if ($_smarty_tpl->tpl_vars['project']->value) {?>
                                <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
                            <?php }?>

                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger" id="emsg" style="display: none;">
                                            <span id="emsgbody"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                                            <input type="text" class="form-control" name="subject" id="subject">
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-horizontal">





                                            <div class="form-group">
                                                <label for="cid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>

                                                <select id="cid" name="cid" class="form-control">
                                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
$_smarty_tpl->tpl_vars['cs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
$_smarty_tpl->tpl_vars['cs']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
                                                                <?php if ($_smarty_tpl->tpl_vars['p_cid']->value == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['email'] != '') {?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];
}?></option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>

                                                <span class="help-block"><a href="#"
                                                                            id="contact_add">| <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Add New Customer'];?>
</a> </span>

                                            </div>

                                            <?php echo $_smarty_tpl->tpl_vars['extra_fields']->value;?>


                                            <div class="form-group">
                                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

                                                <textarea id="address" readonly class="form-control" rows="5"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="invoicenum"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote Prefix'];?>
</label>

                                                <input type="text" class="form-control" id="invoicenum" name="invoicenum" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['quotation_code_prefix'];?>
">
                                            </div>

                                            <div class="form-group">
                                                <label for="cn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
 #</label>

                                                <input type="text" class="form-control" id="cn" name="cn" value="<?php echo str_pad($_smarty_tpl->tpl_vars['config']->value['quotation_code_current_number'],$_smarty_tpl->tpl_vars['config']->value['number_pad'],'0',STR_PAD_LEFT);?>
">
                                            </div>


                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</label>

                                                <input type="text" class="form-control" id="idate" name="idate" datepicker
                                                       data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['idate']->value;?>
">
                                            </div>

                                            <div class="form-group">
                                                <label for="edate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</label>

                                                <input type="text" class="form-control" id="edate" name="edate" datepicker
                                                       data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                       value="<?php echo ib_after_1_month();?>
">
                                            </div>

                                            <div class="form-group">
                                                <label for="stage"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Stage'];?>
</label>

                                                <select class="form-control" name="stage" id="stage">
                                                    <option value="Draft"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</option>
                                                    <option value="Delivered"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</option>
                                                    <option value="Accepted"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</option>
                                                    <option value="Lost"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</option>
                                                    <option value="Dead"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</option>
                                                </select>
                                            </div>

                                             <div class="form-group projectselect"  style="display:none; >
                                                <label for="cid">Select Project</label>

                                                <select id="pid" name="pid" class="form-control">
                                                    <option value="">Select Project...</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['avail_projects']->value, 'csp');
$_smarty_tpl->tpl_vars['csp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['csp']->value) {
$_smarty_tpl->tpl_vars['csp']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['csp']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['csp']->value['name'];?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="tid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales TAX'];?>
</label>

                                                <select id="tid" name="tid" class="form-control">
                                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ts');
$_smarty_tpl->tpl_vars['ts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ts']->value) {
$_smarty_tpl->tpl_vars['ts']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>

                                                            (<?php ob_start();
echo number_format($_smarty_tpl->tpl_vars['ts']->value['rate'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                                                            %)
                                                        </option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>

                                                <input type="hidden" id="stax" name="stax" value="0.00">
                                                <input type="hidden" id="discount_amount" name="discount_amount" value="0">
                                                <input type="hidden" id="discount_type" name="discount_type" value="p">

                                            </div>

                                            <div class="form-group">
                                                <label for="add_discount"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</label>
                                                <a href="#" id="add_discount" class="btn btn-info btn-xs"
                                                   style="margin-top: 5px;"><i
                                                            class="fal fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
</a>
                                            </div>


                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <div class="form-group">
                                            <label for="proposal_text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Proposal Text'];?>
</label>
                                            <textarea class="form-control" id="proposal_text" name="proposal_text" rows="6"></textarea>
                                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_top'];?>
</span>
                                        </div>
                                        <hr>
                                    </div>
                                </div>



                                <div class="table-responsive m-t">
                                    <table class="table invoice-table" id="invoice_items">
                                        <thead>
                                        <tr>
                                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Code'];?>
</th>
                                            <th width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
                                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                            <th width="10%">Tax</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr> <td> <input type="hidden" name="is_tds[]" value="NO">
                                        </td> <td><textarea class="form-control item_name" name="desc[]" rows="3"></textarea> </td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td> <td> <select class="form-control taxed" name="taxed[]"> <option value="Yes">Yes</option> <option value="No" selected="">No</option></select></td></tr>

                                        </tbody>
                                    </table>

                                    <hr>

                                </div>
                                <!-- /table-responsive -->
                                <button type="button" class="btn btn-primary" id="blank-add"><i
                                            class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add blank Line'];?>
</button>
                                <button type="button" class="btn btn-primary" id="item-add"><i
                                            class="fal fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product OR Service'];?>
</button>
                                <button type="button" class="btn btn-danger" id="item-remove"><i
                                            class="fal fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>

                                <div class="mt-3 row">
                                    <div class="col-md-4 offset-md-8">
                                        <table class="table invoice-total">
                                            <tbody>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
 :</strong></td>
                                                <td id="sub_total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
"
                                                    data-a-sep="" data-d-group="2">0.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
 <span id="is_pt"></span> :</strong></td>
                                                <td id="discount_amount_total" class="amount" data-a-sign=""
                                                    data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="" data-d-group="2">0.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
                                                <td id="taxtotal" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
"
                                                    data-a-sep="" data-d-group="2">0.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                                                <td id="total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
"
                                                    data-a-sep="" data-d-group="2">0.00
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <label for="customer_notes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer Notes'];?>
</label>
                                    <textarea class="form-control" id="customer_notes" name="customer_notes" rows="6"></textarea>
                                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['quote_help_footer'];?>
</span>
                                </div>

                                <div class="text-right">
                                    <input type="hidden" id="_dec_point" name="_dec_point" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
">
                                    <input type="hidden" id="taxed_type" name="taxed_type" value="individual">
                                    <button class="btn btn-primary" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>

                                    </button>
                                </div>


                            </div>
                        </form>


                    </div>
                </div>

            </div>
        </div>

    </div>

    
    <input type="hidden" id="_lan_set_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
">
    <input type="hidden" id="_lan_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
">
    <input type="hidden" id="_lan_discount_type" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount Type'];?>
">
    <input type="hidden" id="_lan_percentage" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
">
    <input type="hidden" id="_lan_fixed_amount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Fixed Amount'];?>
">
    <input type="hidden" id="_lan_btn_save" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
">
    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_987831660bf2a965203f2_07302739 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_987831660bf2a965203f2_07302739',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>

    $(document).ready(function () {

      

        // var _url = base_url;
        $('body').on('change', '#stage', function(e){
            e.preventDefault();
            var stagename = $(this).val();
            if (stagename=='Accepted') {
                 $('.projectselect').show();
            }else{
                $('.projectselect').hide();
            }
        });

     });



        $(function () {
            $('.amount').autoNumeric('init');


            var _url = $("#_url").val();


            $('#invoice_items').on('change', 'select', function(){
                //   $('#taxtotal').html('dd');
                var taxrate = $('#stax').val().replace(',', '.');
                // $(this).val(taxrate);

            });

            var item_remove = $('#item-remove');
            item_remove.hide();


            $('#proposal_text').redactor({
                minHeight: 300,
            });

            $('#customer_notes').redactor({
                minHeight: 300,
            });


            function update_address(){

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
                   // calculateTotal();
                });

            });


            var $modal = $('#cloudonex_body');


            $('#item-add').on('click', function () {



                $.fancybox.open({
                    src  : base_url + 'ps/modal-list/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#modal_items_table').dataTable(
                                {
                                    responsive: true,
                                    "language": {
                                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
",
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

            $('#blank-add').on('click', function(){
                $("#invoice_items").find('tbody')
                    .append(
                        '<tr> <td></td> <td><textarea class="form-control item_name" name="desc[]" rows="3"></textarea></td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly value=""></td> <td> <select class="form-control taxed" name="taxed[]"> <option value="Yes">Yes</option> <option value="No" selected>No</option></select></td></tr>'
                    );

            });

            $('#invoice_items').on('click', '.item_name', function(){
                $("tr").removeClass("info");
                $(this).closest('tr').addClass("info");
                item_remove.show();
            });


            $modal.on('click', '.update', function(){
                var tableControl= document.getElementById('items_table');




                $('input:checkbox:checked', tableControl).each(function() {

                    var item_code = $(this).closest('tr').find('td:eq(1)').text();
                    var item_name = $(this).closest('tr').find('td:eq(2)').text();

                    var item_price = $(this).closest('tr').find('td:eq(3)').text();

                     var is_tds = $(this).closest('tr').find('td').eq(1).find('input').val();

                    //  obj.push(innertext);
                    $("#invoice_items").find('tbody')
                        .append(
                            '<tr> <td>' + item_code + '<input type="hidden" name="is_tds[]" value="' + is_tds + '"></td> <td><textarea class="form-control item_name" name="desc[]" rows="3">' + item_name + '</textarea></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + item_price + '"></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly value=""></td> <td> <select class="form-control taxed" name="taxed[]"> <option value="Yes">Yes</option> <option value="No" selected>No</option></select></td></tr>'
                        );
                });

                //  console.debug(obj); // Write it to the console
                  calculateTotal();


                $.fancybox.close();

            });


            $modal.on('click', '.contact_submit', function(e){
                e.preventDefault();
                //  var tableControl= document.getElementById('items_table');

                //  $modal.modal('loading');


                var _url = $("#_url").val();
                $.post(_url + 'contacts/add-post/', {


                    account: $('#account').val(),
                    address: $('#m_address').val(),
                    company: $('#company').val(),

                    city: $('#city').val(),
                    state: $('#state').val(),
                    zip: $('#zip').val(),
                    country: $('#country').val(),
                    phone: $('#phone').val(),
                    email: $('#email').val()

                })
                    .done(function (data) {

                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            // location.reload();
                            window.location = _url + 'quotes/new/1/' + data + '/';

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
                            '<form class="form-horizontal"> ' +
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


            //var callbacks = $.Callbacks();
            //callbacks.add( updateTotal );
            //callbacks.fire(  alert('done') );


            $(".progress").hide();
            $("#emsg").hide();
            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'quotes/add-post/', $('#invform').serialize(), function(data){

                    var _url = $("#_url").val();

                    var uls=data.replace("/", "");

                    if ($.isNumeric(uls)) {

                        window.location = _url + 'quotes/edit/' + data + '/';
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
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
