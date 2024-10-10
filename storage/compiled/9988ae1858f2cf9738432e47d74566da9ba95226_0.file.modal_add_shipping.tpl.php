<?php
/* Smarty version 3.1.36, created on 2021-03-19 23:43:18
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\modal_add_shipping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6054e9bef39102_10412418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9988ae1858f2cf9738432e47d74566da9ba95226' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\modal_add_shipping.tpl',
      1 => 1616177583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6054e9bef39102_10412418 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 800px;">

    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2>Shipping Address</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form class="form-horizontal" id="rform">

              <!--   <div class="form-group"><label for="country">Saved Address</label>

                        <select name="saved_shipping" class="saved_shipping" id="saved_shipping" class="form-control">
                            <option value="">Select Address</option>
                            <?php echo '<?php ';?>
foreach($shipping_addresses as $shipping_addres){ <?php echo '?>';?>
 
                             <option value="">--</option>
                            <?php echo '<?php ';?>
} <?php echo '?>';?>

                        </select>
                    </div> -->



                    <div class="form-group"><label for="m_address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

                        <input type="text" id="m_address" name="m_address" class="form-control" >
                    </div>
                    <div class="form-group"><label for="city"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>

                        <input type="text" id="city" name="city" class="form-control" >
                    </div>
                    <div class="form-group"><label for="state"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>

                        <input type="text" id="state" name="state" class="form-control" >
                    </div>
                    <div class="form-group"><label for="zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
 </label>

                        <input type="text" id="zip" name="zip" class="form-control" >
                    </div>
                    <div class="form-group"><label for="country"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>

                        <select name="country" class="country" id="country" class="form-control">
                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                            <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                        </select>
                    </div>


                    <div class="form-group">
                        <button class="btn btn-primary address_submit1" type="submit" id="address_submit1"><i class="fal fa-check"></i> Add </button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>






<?php }
}
