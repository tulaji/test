<?php
/* Smarty version 3.1.36, created on 2021-04-08 17:44:24
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\orders_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_606ef3a0379a74_92339773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e1e6507417725dad6405ffed531484b22cf14dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\orders_add.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606ef3a0379a74_92339773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1987390969606ef3a02f5ab4_62402189', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1773501531606ef3a0369617_66083538', "script");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1987390969606ef3a02f5ab4_62402189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1987390969606ef3a02f5ab4_62402189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper wrapper-content">
        <div class="row">

            <div class="col-md-7">



                <div class="panel">
                    <div class="panel-hdr">
                        <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Order'];?>
</h2>



                    </div>
                    <div class="panel-container" id="ibox_form">
                        <div class="panel-content">
                            <form class="form-horizontal" id="ib_form">

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">

                                        <div class="form-group"><label class="col-md-4 control-label" for="cid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
 </label>

                                            <select id="cid" name="cid" class="form-control">
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
                                        </div>


                                        <div class="hr-line-dashed"></div>

                                        <div id="item_block">
                                            <div class="form-group"><label class="col-md-4 control-label" for="pid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Product_Service'];?>
</label>

                                                <select id="pid" name="pid" class="form-control">
                                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select'];?>
...</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['name'];?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>

                                            </div>


                                            <div class="form-group"><label class="col-md-4 control-label" for="price"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</label>

                                                <input type="text" id="price" name="price" class="form-control amount">
                                            </div>


                                            <div class="form-group"><label class="col-md-4 control-label" for="qty"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</label>

                                                <input type="text" id="qty" name="qty" class="form-control" value="1">
                                            </div>


                                        </div>





                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="qty">&nbsp;</label>

                                            <div>

                                                <button type="button" id="add_item" class="btn btn-primary"> Add another item</button>

                                            </div>
                                        </div>




                                        <div class="hr-line-dashed"></div>



                                        <div class="form-group"><label class="col-md-4 control-label" for="status"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</label>

                                            <select id="status" name="status" class="form-control">

                                                <option value="Pending"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pending'];?>
</option>
                                                <option value="Active"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
</option>


                                            </select>
                                        </div>





                                        <div class="form-group"><label class="col-md-4 control-label" for="payterm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Billing Cycle'];?>
</label>

                                            <select id="billing_cycle" name="billing_cycle" class="form-control">

                                                <option value="Free Account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Free'];?>
</option>
                                                <option value="One Time" selected><?php echo $_smarty_tpl->tpl_vars['_L']->value['One Time'];?>
</option>
                                                <option value="Monthly"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>
</option>
                                                <option value="Quarterly"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quarterly'];?>
</option>
                                                <option value="Semi-Annually"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Semi-Annually'];?>
</option>
                                                <option value="Annually"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Annually'];?>
</option>
                                                <option value="Biennially"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Biennially'];?>
</option>
                                                <option value="Triennially"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Triennially'];?>
</option>

                                            </select>
                                        </div>




                                        <div class="form-group"><label class="col-md-4 control-label" for="generate_invoice"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Generate Invoice'];?>
</label>

                                            <div class="col-lg-8">


                                                <input type="checkbox" checked data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="generate_invoice" name="generate_invoice" value="Yes">


                                            </div>
                                        </div>

                                        <div class="form-group"><label class="col-md-4 control-label" for="send_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Email'];?>
</label>

                                            <div class="col-lg-8">


                                                <input type="checkbox" checked data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="send_email" name="send_email" value="Yes">


                                            </div>
                                        </div>


                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <div class="form-group">
                                            <div>

                                                <button class="btn btn-primary" type="submit" id="submit"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button> | <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Cancel'];?>
</a>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>



                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="panel">
                    <div class="panel-hdr">
                        <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order Summary'];?>
</h2>
                        <div class="hr-line-dashed"></div>
                                                                                                                                                                                                                                                                    

                                                <div class="panel-container">
                            <div class="panel-content">
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>


    </div>


    <input type="hidden" id="_lan_btn_save" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
">

    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1773501531606ef3a0369617_66083538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1773501531606ef3a0369617_66083538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        function calculateTotal()
        {
            var pid,price,qty;
            $('.clx_pid').each(function(i, obj) {
                pid = $(this).val();
                console.log(pid);
            });
        }

        $(document).ready(function () {

            var _url = $("#_url").val();

            var append_html = '<div class="hr-line-dashed"></div> <div class="form-group"><label class="col-md-4 control-label" for="pid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Product_Service'];?>
</label>\n'+
                    '\n'+
                    '                                            <div class="col-lg-8">\n'+
                    '\n'+
                    '                                                <select name="pid[]" class="clx_pid form-control">\n'+
                    '                                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select'];?>
...</option>\n'+
                    '                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>\n'+
                    '                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['name'];?>
</option>\n'+
                    '                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>\n'+
                    '\n'+
                    '                                                </select>\n'+
                    '\n'+
                    '                                            </div>\n'+
                    '                                        </div>\n'+
                    '\n'+
                    '\n'+
                    '                                        <div class="form-group"><label class="col-md-4 control-label" for="price"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</label>\n'+
                    '\n'+
                    '                                            <div class="col-lg-4 col-md-4 col-sm-8"><input type="text" name="price[]" class="form-control amount clx_price">\n'+
                    '\n'+
                    '                                            </div>\n'+
                    '                                        </div>\n'+
                    '\n'+
                    '\n'+
                    '                                        <div class="form-group"><label class="col-md-4 control-label" for="qty"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</label>\n'+
                    '\n'+
                    '                                            <div class="col-lg-4 col-md-4 col-sm-8"><input type="text" name="qty[]" class="form-control clx_quantity" value="1">\n'+
                    '\n'+
                    '                                            </div>\n'+
                    '                                        </div>';


                    var $add_item = $('#add_item');

                    var $item_block = $('#item_block');



                    calculateTotal();
            $add_item.on('click',function () {
                $item_block.append(append_html);
                calculateTotal();
            });


            $('#cid').select2({

                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            })
                .on("change", function(e) {

                });

            var $pid = $("#pid");

            var $price = $("#price");

            function update_ps(pid) {

                $.get( _url + "ps/json_get/"+pid, function( data ) {
                    if(data){



                        $price.autoNumeric('set', data.sales_price);


                    }
                });

            }


            // $pid.select2({
            //     theme: "bootstrap",
            //     language: {
            //         noResults: function () {
            //             return $("#_lan_no_results_found").val();
            //         }
            //     }
            // })
            //     .on("change", function(e) {
            //
            //
            //         update_ps($pid.val());
            //
            //
            //
            //     });



            var $submit = $("#submit");
            var $ibox_form = $('#ibox_form');

            $submit.on('click', function(e) {
                e.preventDefault();

                $ibox_form.block({ message:block_msg });

                $.post( _url + "orders/post/", $("#ib_form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {


                            window.location = _url + 'orders/view/' + data;

                        }

                        else {
                            $ibox_form.unblock();
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
