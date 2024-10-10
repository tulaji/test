<?php
/* Smarty version 3.1.36, created on 2021-06-19 16:30:07
  from '/var/www/html/ShreeEng_Test/ui/theme/default/purchase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60cdce3787d671_21536160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b468d84046c0984267fc34ee7e62966b6f80bee' => 
    array (
      0 => '/var/www/html/ShreeEng_Test/ui/theme/default/purchase.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cdce3787d671_21536160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159557194660cdce377cd899_36115754', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84983295360cdce377d2781_61665021', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174225036660cdce3785a146_37870873', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_159557194660cdce377cd899_36115754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_159557194660cdce377cd899_36115754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





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

        <?php if ($_smarty_tpl->tpl_vars['pos']->value == 'pos') {?>
        .pos_item{
            /*background: #f3f6f9;*/
            cursor: pointer;
        }
        .pos_item:hover{
            background: #2196f3;
            color: #ffffff;
        }

        <?php }?>

    </style>

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_84983295360cdce377d2781_61665021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_84983295360cdce377d2781_61665021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form id="invform" method="post">

        <input type="hidden" id="_dec_point" name="_dec_point" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
">

        <div class="row" id="ibox_form">



            <div class="col-md-12">





                <div class="panel">

                    <div class="panel-hdr">
                        <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>
                            <h2><?php echo $_smarty_tpl->tpl_vars['purchase']->value->invoicenum;
if ($_smarty_tpl->tpl_vars['purchase']->value->cn != '') {?> <?php echo $_smarty_tpl->tpl_vars['purchase']->value->cn;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
 <?php }?></h2>
                            <?php } else { ?>
                            <h2><?php echo predict_next_serial($_smarty_tpl->tpl_vars['config']->value,'purchase');?>
</h2>
                        <?php }?>
                        <div class="panel-toolbar">
                            <div class="btn-group">
                                <button class="btn btn-primary" id="submit"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                <button class="btn btn-info" id="save_n_close"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save n Close'];?>
</button>
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
                                                <label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                                                <input type="text" class="form-control" name="subject"
                                                       <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>
                                                           value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->subject;?>
"
                                                       <?php }?>
                                                       id="subject">

                                            </div>
                                            <hr>
                                        </div>

                                        <div class='col-sm-4'>
                                            <div class='form-group'>
                                                <label for="user_title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Supplier'];?>
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
                                                                <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value->userid == $_smarty_tpl->tpl_vars['cs']->value['id']) {?>selected<?php }?>
                                                                    <?php } else { ?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['p_cid']->value == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>
                                                                <?php }?>
                                                                ><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['email'] != '') {?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];
}?></option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>
                                                <span class="help-block"><a href="#"
                                                                            id="contact_add">| <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Supplier'];?>
</a> </span>
                                            </div>
                                        </div>
                                        <div class='col-sm-4'>
                                            <div class="form-group">
                                                <label for="status"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</label>

                                                <select id="status" name="status" class="form-control">

                                                    <option <?php if ($_smarty_tpl->tpl_vars['purchase']->value && $_smarty_tpl->tpl_vars['purchase']->value->status == 'Published') {?>selected<?php }?> value="Published"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Published'];?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['purchase']->value && $_smarty_tpl->tpl_vars['purchase']->value->status == 'Draft') {?>selected<?php }?> value="Draft"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</option>


                                                </select>

                                            </div>
                                        </div>
                                        <div class='col-sm-4'>
                                            <div class="form-group">
                                                <label for="currency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</label>

                                                <select id="currency" name="currency" class="form-control">

                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
"

                                                                <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value->currency_iso_code == $_smarty_tpl->tpl_vars['currency']->value['cname']) {?>
                                                                        selected
                                                                    <?php }?>

                                                                    <?php } else { ?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] == ($_smarty_tpl->tpl_vars['currency']->value['cname'])) {?>selected="selected" <?php }?>

                                                                <?php }?>

                                                                ><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
</option>
                                                        <?php
}
if ($_smarty_tpl->tpl_vars['currency']->do_else) {
?>
                                                        <option value="0"><?php echo $_smarty_tpl->tpl_vars['config']->value['home_currency'];?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>

                                            </div>
                                        </div>
                                    </div>


                                    <div class='row'>


                                        <div class='col-sm-4'>
                                            <div class="form-group">
                                                <label for="address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

                                                <textarea id="address" readonly class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class='col-sm-4'>
                                            <div class="form-group">
                                                <label for="invoicenum"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Prefix'];?>
</label>

                                                <input type="text" class="form-control" id="invoicenum" name="invoicenum" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>
                                                    value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->invoicenum;?>
"
                                                <?php } else { ?>
                                                    value="<?php echo $_smarty_tpl->tpl_vars['config']->value['purchase_code_prefix'];?>
"
                                                <?php }?> >
                                            </div>

                                            <div class="form-group">
                                                <label for="cn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
 #</label>

                                                <input type="text" class="form-control" id="cn" name="cn"
                                                <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>
                                                    value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->cn;?>
"
                                                    <?php } else { ?>
                                                    value="<?php echo str_pad($_smarty_tpl->tpl_vars['config']->value['purchase_code_current_number'],$_smarty_tpl->tpl_vars['config']->value['number_pad'],'0',STR_PAD_LEFT);?>
"
                                                <?php }?>
                                                >
                                                                                            </div>

                                        </div>
                                        <div class='col-sm-4'>
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['invoice_receipt_number'] == '1') {?>
                                                <div class="form-group">
                                                    <label for="receipt_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Receipt Number'];?>
</label>

                                                    <input type="text" class="form-control" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->receipt_number;?>
" <?php }?> id="receipt_number" name="receipt_number">
                                                </div>
                                            <?php } else { ?>
                                                <input type="hidden" name="receipt_number" id="receipt_number" value="">
                                            <?php }?>

                                            <div class="form-group">
                                                <label for="show_quantity_as"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Show quantity as'];?>
</label>

                                                <input type="text" class="form-control" id="show_quantity_as" name="show_quantity_as" value="<?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?> <?php echo $_smarty_tpl->tpl_vars['purchase']->value->show_quantity_as;?>
  <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['config']->value['show_quantity_as'] == '') {
echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['show_quantity_as'];
}?> <?php }?>">

                                            </div>

                                            <?php if ($_smarty_tpl->tpl_vars['recurring']->value) {?>
                                                <div class="form-group">
                                                    <label for="repeat"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Repeat Every'];?>
</label>

                                                    <select class="form-control" name="repeat" id="repeat">
                                                        <option value="week1" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->repeat == 'week1') {?>selected<?php }?> <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Week'];?>
</option>
                                                        <option value="weeks2" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->repeat == 'weeks2') {?>selected<?php }?> <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weeks_2'];?>
</option>
                                                        <option value="month1" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->repeat == 'month1') {?>selected<?php }?> <?php } else { ?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Month'];?>
</option>
                                                        <option value="months2" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->repeat == 'months2') {?>selected<?php }?> <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_2'];?>
</option>
                                                        <option value="months3" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->repeat == 'months3') {?>selected<?php }?> <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_3'];?>
</option>
                                                        <option value="months6" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->repeat == 'months6') {?>selected<?php }?> <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_6'];?>
</option>
                                                        <option value="year1" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->repeat == 'year1') {?>selected<?php }?> <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Year'];?>
</option>
                                                        <option value="years2" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->repeat == 'years2') {?>selected<?php }?> <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_2'];?>
</option>
                                                        <option value="years3" <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->repeat == 'years3') {?>selected<?php }?> <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_3'];?>
</option>

                                                    </select>
                                                </div>
                                            <?php } else { ?>
                                                <input type="hidden" name="repeat" id="repeat" value="0">
                                            <?php }?>

                                            <div class="form-group">
                                                <label for="add_discount"><a href="#" id="add_discount" class="btn btn-info btn-xs"
                                                                             style="margin-top: 5px;"><i
                                                                class="fal fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
</a></label>
                                                <br>


                                                <input type="hidden" id="stax" name="stax" value="0.00">
                                                <input type="hidden" id="discount_amount" name="discount_amount" value="">
                                                <input type="hidden" id="discount_type" name="discount_type" value="p">
                                                <input type="hidden" id="taxed_type" name="taxed_type" value="individual">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="idate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Issued at'];?>
</label>

                                                <input type="text" class="form-control" id="idate" name="idate" datepicker
                                                       data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>
                                                    value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->date;?>
"
                                                    <?php } else { ?>
                                                    value="<?php echo $_smarty_tpl->tpl_vars['idate']->value;?>
"
                                                <?php }?>
                                                >
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                                                                        
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                            <input type="hidden" name="duedate" id="duedate" value="due_on_receipt">
                                        </div>
                                        <div class="col-sm-4">

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['pos']->value == 'pos') {?>

                                <div class="ib-search-bar mt-3" style="margin-bottom: 30px;">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="ib_search_input" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..." autofocus data-list=".list_pos_items"> </div>
                                </div>

                                <hr>

                                <div id="block_items" class="list_pos_items row">




                                </div>


                            <?php }?>



                            <div class="table-responsive m-t">
                                <table class="table invoice-table" id="invoice_items">
                                    <thead>
                                    <tr>

                                        <th width="40%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
                                        <th width="10%"><?php if ($_smarty_tpl->tpl_vars['config']->value['show_quantity_as'] == '') {
echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['show_quantity_as'];
}?></th>
                                        <th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>

                                        <th width="20%">Tax</th>

                                        <th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase_items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <tr>  <td>
                                                    <textarea class="form-control item_name" name="desc[]" rows="3"><?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>
</textarea>
                                                    <input type="hidden" name="item_code[]" value=""> </td> <td><input type="text" class="form-control qty" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>
" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->amount;?>
"></td>  <td> <select class="form-control taxed" name="taxed[]" >
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ts');
$_smarty_tpl->tpl_vars['ts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ts']->value) {
$_smarty_tpl->tpl_vars['ts']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['rate'];?>
" <?php if ($_smarty_tpl->tpl_vars['ts']->value['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </select></td>

                                                <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>

                                    <tr>  <td>
                                            <textarea class="form-control item_name" name="desc[]" rows="3"></textarea>
                                            <input type="hidden" name="item_code[]" value=""> </td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td>  <td> <select class="form-control taxed" name="taxed[]" >
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ts');
$_smarty_tpl->tpl_vars['ts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ts']->value) {
$_smarty_tpl->tpl_vars['ts']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['rate'];?>
" <?php if ($_smarty_tpl->tpl_vars['ts']->value['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </select></td>

                                        <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>
                                    </tr>

                                    </tbody>
                                </table>

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
                            <br>
                            <br>
                            <hr>

                            <div class="row">
                                <div class="col-md-4 offset-md-8">
                                    <table class="table invoice-total">
                                        <tbody>
                                        <tr>
                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
 :</strong></td>
                                            <td id="sub_total" class="amount">0.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
 <span id="is_pt"></span> : </strong>


                                            </td>
                                            <td id="discount_amount_total" class="amount">0.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
                                            <td id="taxtotal" class="amount">0.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                                            <td id="total" class="amount">0.00
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                            <hr>
                            <textarea class="form-control" name="notes" id="notes" rows="3"
                                      placeholder="Supplier Notes..."><?php if ($_smarty_tpl->tpl_vars['purchase']->value) {
echo $_smarty_tpl->tpl_vars['purchase']->value->notes;
}?></textarea>
                            <br>
                            <?php if ($_smarty_tpl->tpl_vars['recurring']->value) {?>
                                <input type="hidden" id="is_recurring" value="yes">
                            <?php } else { ?>
                                <input type="hidden" id="is_recurring" value="no">
                            <?php }?>




                        </div>
                    </div>

                </div>


            </div>







        </div>

        <?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>
            <input type="hidden" name="purchase_id" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
">
        <?php }?>

    </form>




    
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
/* {block 'script'} */
class Block_174225036660cdce3785a146_37870873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_174225036660cdce3785a146_37870873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>

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

            var cDiscountVal = 0;

            var $invoice_items = $('#invoice_items');


            function calculateTotal() {




                var invTotal = 0;

                var totalTaxVal = 0;

                var tax_val;

                var lineTotalWithoutTax;

                var totalLineTotalWithoutTax = 0;






                $.each( $('.qty'), function( index, value ) {
//                    console.log(index);
//                    console.log(this.value);

                    c_qty = this.value;

                    c_price = $(this).closest('tr').find('.item_price').val();

                    if(c_qty === '' || c_price === ''){
                        return;
                    }


                    c_taxed = $(this).closest('tr').find('.taxed').val();

                    console.log(c_taxed);

                    lineTotal = c_price*c_qty;
                    lineTotal = parseFloat(lineTotal);

                    lineTotalWithoutTax = lineTotal;

                    if(c_taxed === '' || c_taxed === null){

                        tax_val = 0;

                    }
                    else{
                        c_taxed = parseFloat(c_taxed).toFixed(3);

                        tax_val = (lineTotal*c_taxed)/100;

                        console.log(tax_val);
                        console.log(lineTotal);

                        lineTotal = lineTotal + tax_val;
                    }



                    $(this).closest('tr').find('.lvtotal').val(lineTotal.toFixed(2));


                    invTotal += lineTotal;

                    totalTaxVal += tax_val;

                    totalLineTotalWithoutTax += lineTotalWithoutTax;


                });


                if($discount_type.val() === 'f' && $discount_amount.val() !== ''){
                    cDiscountVal = $discount_amount.val();
                }
                else if($discount_type.val() === 'p' && $discount_amount.val() !== ''){
                    var tCDiscountval = parseFloat($discount_amount.val());
                    cDiscountVal = (invTotal*tCDiscountval)/100;
                }
                else{

                }

                cDiscountVal = parseFloat(cDiscountVal);

                invTotal = invTotal-cDiscountVal;

                $total.html(invTotal.toFixed(2));
                $taxtotal.html(totalTaxVal.toFixed(2));
                $sub_total.html(totalLineTotalWithoutTax.toFixed(2));
                $discount_amount_total.html(cDiscountVal.toFixed(2));


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

            var rowNum = 1000;

            $('#blank-add').on('click', function(){
                rowNum++;


                $invoice_items.find('tbody')
                    .append(
                        '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '"></textarea> <input type="hidden" name="item_code[]" value=""> </td> <td><input type="text" class="form-control qty" value="" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value=""></td>  <td> <select class="form-control taxed" name="taxed[]" id="t_' + rowNum + '"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ts');
$_smarty_tpl->tpl_vars['ts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ts']->value) {
$_smarty_tpl->tpl_vars['ts']->do_else = false;
?>  <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['rate'];?>
" <?php if ($_smarty_tpl->tpl_vars['ts']->value['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>
</option> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
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
                            '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + rowNum + '">' + item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + item_code + '"></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + item_price + '"></td>  <td> <select class="form-control taxed" name="taxed[]" id="t_' + rowNum + '"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ts');
$_smarty_tpl->tpl_vars['ts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ts']->value) {
$_smarty_tpl->tpl_vars['ts']->do_else = false;
?>  <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['rate'];?>
" <?php if ($_smarty_tpl->tpl_vars['ts']->value['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>
</option> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>'
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
            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'purchases/save/', $('#invform').serialize(), function(data){

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                        window.location = _url + 'purchases/edit/' + data + '/';
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


            $("#save_n_close").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'purchases/save/', $('#invform').serialize(), function(data){

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                        window.location = _url + 'purchases/view/' + data + '/';
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


            <?php if ($_smarty_tpl->tpl_vars['pos']->value == 'pos') {?>

            function loadItems() {

                $block_items.html(block_msg);

                var item_name;

                $.getJSON( base_url + "items/all/", function( data ) {
                    var items = "";
                    var b_p;
                    $.each( data, function( key, val ) {

                        item_name = val.name;

                        item_name = item_name.trunc(12);

                        var image;

                        if(val.image == '') {
                            image = '<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/item_placeholder.png';
                            }
                            else{
                            image = '<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/items/thumb'+ val.image;
                        }


                        b_p = '<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><div class="pos_item text-center" id="pos_item_'+ val.id +'" data-pos-item-name="'+val.name+'" data-pos-item-price="'+val.cost_price+'" data-id="'+ val.id +'" data-pos-item-number="'+ val.item_number +'"><img src="'+ image +'" alt="'+ item_name +'" class="img-circle"><hr>'+ item_name +' <br>'+ val.cost_price +'  <hr></div> </div>';

                        items = items + b_p;
                    });

                    $block_items.html(items);

                    $('#ib_search_input').hideseek({
                        highlight: true
                    });

                });

            }

            loadItems();

            var pos_item_name, pos_item_price, pos_item_id, pos_item_number;

            var item_sl = 5000;

            $block_items.on('click', '.pos_item', function(){

                pos_item_number = $(this).data('pos-item-number');
                pos_item_name = $(this).data('pos-item-name');
                pos_item_price = $(this).data('pos-item-price');
                pos_item_id = $(this).data('id');




                $invoice_items.find('tbody')
                    .prepend(
                        '<tr>  <td><textarea class="form-control item_name" name="desc[]" rows="3" id="i_' + item_sl + '">' + pos_item_name + '</textarea> <input type="hidden" name="item_code[]" value="' + pos_item_number + '"></td> <td><input type="text" class="form-control qty" value="1" name="qty[]"></td> <td><input type="text" class="form-control item_price" name="amount[]" value="' + pos_item_price + '"></td>  <td> <select class="form-control taxed" name="taxed[]" id="t_' + rowNum + '"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ts');
$_smarty_tpl->tpl_vars['ts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ts']->value) {
$_smarty_tpl->tpl_vars['ts']->do_else = false;
?>  <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['rate'];?>
" <?php if ($_smarty_tpl->tpl_vars['ts']->value['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>
</option> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> </select></td> <td class="ltotal"><input type="text" class="form-control lvtotal" readonly="" value=""></td>  </tr>>'
                    );

                spEditor('#i_' + item_sl);


                spMultiSelect('#t_' + rowNum);

                calculateTotal();

                item_sl = item_sl+1;


            });



            <?php }?>

        });
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
