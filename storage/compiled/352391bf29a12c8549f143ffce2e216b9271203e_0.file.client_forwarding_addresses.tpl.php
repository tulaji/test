<?php
/* Smarty version 3.1.36, created on 2020-09-13 01:58:11
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_forwarding_addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f5db4f3390c89_29594764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352391bf29a12c8549f143ffce2e216b9271203e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_forwarding_addresses.tpl',
      1 => 1599976686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5db4f3390c89_29594764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12014816535f5db4f3386f91_75328090', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_495737545f5db4f33903c3_50234006', "script");
?>

<?php }
/* {block "content"} */
class Block_12014816535f5db4f3386f91_75328090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12014816535f5db4f3386f91_75328090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <?php if ($_smarty_tpl->tpl_vars['selected_shipping_address']->value) {?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['selected_shipping_address']->value->label;?>
</h2>
                    <?php } else { ?>
                        <h2>Your Chinese Shipping Addresses</h2>
                    <?php }?>

                    <div class="panel-toolbar">
                        <select class="custom-select" name="switch_address" id="switch_address">
                            <option value="">Switch Address</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_addresses']->value, 'shipping_address');
$_smarty_tpl->tpl_vars['shipping_address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_address']->value) {
$_smarty_tpl->tpl_vars['shipping_address']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['selected_shipping_address']->value && $_smarty_tpl->tpl_vars['selected_shipping_address']->value->id == $_smarty_tpl->tpl_vars['shipping_address']->value->id) {?>disabled<?php }?> ><?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->label;?>
 <?php if ($_smarty_tpl->tpl_vars['selected_shipping_address']->value && $_smarty_tpl->tpl_vars['selected_shipping_address']->value->id == $_smarty_tpl->tpl_vars['shipping_address']->value->id) {?>(Selected)<?php }?></option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="panel-container">
                    <div class="panel-content">



                        <div class="panel-tag">
                            <ul>
                                <li>Make your own purchase and send them to our China warehouse.</li>
                                <li>Our warehouse uses your “Customer ID” to identify your goods. Please paste it onto your address as well</li>
                            </ul>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['selected_shipping_address']->value) {?>

                            <div class="form-row form-group">
                                <label class="col-md-2" for="input_address_line_1">地址第一行</label>
                                <div class="input-group col-md-10">
                                    <input type="text" id="input_address_line_1" value="<?php echo $_smarty_tpl->tpl_vars['selected_shipping_address']->value->address_line_1;?>
" class="form-control" >
                                    <div class="input-group-append">
                                        <button class="btn btn-dark action_copy_text" data-target="input_address_line_1" type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row form-group">
                                <label class="col-md-2" for="input_address_line_2">Address Line 2</label>
                                <div class="input-group col-md-10">
                                    <input type="text" id="input_address_line_2" value="<?php echo str_replace('{{Customer ID}}',$_smarty_tpl->tpl_vars['user']->value->code,$_smarty_tpl->tpl_vars['selected_shipping_address']->value->address_line_2);?>
" class="form-control" >
                                    <div class="input-group-append">
                                        <button class="btn btn-dark action_copy_text" data-target="input_address_line_2" type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row form-group">
                                <label class="col-md-2" for="input_zip">Postal Code</label>
                                <div class="input-group col-md-10">
                                    <input type="text" id="input_zip" value="<?php echo $_smarty_tpl->tpl_vars['selected_shipping_address']->value->zip;?>
" class="form-control" >
                                    <div class="input-group-append">
                                        <button class="btn btn-dark action_copy_text" data-target="input_zip" type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row form-group">
                                <label class="col-md-2" for="input_consignee">Consignee Label</label>
                                <div class="input-group col-md-10">
                                    <input type="text" id="input_consignee" value="<?php echo str_replace('{{Customer ID}}',$_smarty_tpl->tpl_vars['user']->value->code,$_smarty_tpl->tpl_vars['selected_shipping_address']->value->consignee);?>
" class="form-control" >
                                    <div class="input-group-append">
                                        <button class="btn btn-dark action_copy_text" data-target="input_consignee" type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row form-group">
                                <label class="col-md-2" for="input_phone">Phone</label>
                                <div class="input-group col-md-10">
                                    <input type="text" id="input_phone" value="<?php echo $_smarty_tpl->tpl_vars['selected_shipping_address']->value->phone;?>
" class="form-control" >
                                    <div class="input-group-append">
                                        <button class="btn btn-dark action_copy_text" data-target="input_phone" type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                        <?php }?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_495737545f5db4f33903c3_50234006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_495737545f5db4f33903c3_50234006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $(".action_copy_text").click(function(){
                let target_id = $(this).data('target');
                $('#'+target_id).select();
                document.execCommand('copy');
                toastr.success('Copied!');
            });

            let $switch_address = $('#switch_address');

            $switch_address.on('change',function () {
                window.location = base_url + 'freight/client/forwarding-addresses/' + $switch_address.val();
            });



        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
