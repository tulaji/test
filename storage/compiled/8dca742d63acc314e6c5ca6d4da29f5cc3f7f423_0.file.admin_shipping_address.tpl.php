<?php
/* Smarty version 3.1.36, created on 2020-09-09 06:16:46
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/admin_shipping_address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f58ab8e7ecc91_58990711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dca742d63acc314e6c5ca6d4da29f5cc3f7f423' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/admin_shipping_address.tpl',
      1 => 1599646298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58ab8e7ecc91_58990711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18440933245f58ab8e7e4d89_41728780', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8745920315f58ab8e7ec374_06324407', "script");
?>

<?php }
/* {block "content"} */
class Block_18440933245f58ab8e7e4d89_41728780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18440933245f58ab8e7e4d89_41728780',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>
                        <h2>Edit</h2>
                        <?php } else { ?>
                        <h2>Add shipping address</h2>
                    <?php }?>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form method="post" id="main_form">
                            <div class="form-group">
                                <label for="inputLabel">Label/ Name</label>
                                <input class="form-control" id="inputLabel" data-pristine-required name="label" <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->label;?>
"<?php }?>>
                            </div>
                            <div class="form-group">
                                <label for="inputAddressLine1">Address line 1 (House number)</label>
                                <input class="form-control" id="inputAddressLine1" name="address_line_1" <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_1;?>
"<?php }?>>
                            </div>
                            <div class="form-group">
                                <label for="inputAddressLine2">Address line 2 (Street name)</label>
                                <input class="form-control" id="inputAddressLine2" name="address_line_2" <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line2;?>
"<?php }?>>
                            </div>
                            <div class="form-group">
                                <label for="inputCity">City</label>
                                <input class="form-control" id="inputCity" name="city" <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->city;?>
"<?php }?>>
                            </div>
                            <div class="my-3">
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="inputState">State/ Province</label>
                                            <input class="form-control" id="inputState" name="state" <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->state;?>
"<?php }?>>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputZip">Zip</label>
                                            <input class="form-control" id="inputZip" name="zip" <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->zip;?>
"<?php }?>>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputCountry">Country</label>
                                <input class="form-control" id="inputCountry" name="country" <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->country;?>
"<?php }?>>
                            </div>

                            <div class="form-group">
                                <label for="inputConsignee">Consignee</label>
                                <input class="form-control" id="inputConsignee" name="consignee" <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->consignee;?>
"<?php }?>>
                            </div>

                            <div class="form-group">
                                <label for="inputCountry">Phone</label>
                                <input class="form-control" id="inputCountry" name="phone" <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->phone;?>
"<?php }?>>
                            </div>
                            <div class="form-group">

                                <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>
                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
">
                                <?php }?>

                                <button type="submit" id="btn_submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
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
class Block_8745920315f58ab8e7ec374_06324407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_8745920315f58ab8e7ec374_06324407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            let $main_form = $('#main_form');
            let $btn_submit = $('#btn_submit');

            var form = document.getElementById("main_form");
            var pristine = new Pristine(form);

            $main_form.on('submit',function (e) {
                e.preventDefault();

                if(pristine.validate())
                {
                    $btn_submit.prop('disabled',true);

                    $.post( base_url + 'freight/admin/save-shipping-address', $main_form.serialize())
                        .done(function( data ) {

                           window.location = base_url + 'freight/admin/shipping-addresses';

                        }).fail(function (error) {
                        $btn_submit.prop('disabled',false);
                        toastr.error(error.responseText);
                    });
                }


            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
