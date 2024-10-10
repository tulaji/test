<?php
/* Smarty version 3.1.36, created on 2020-09-06 15:30:26
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/cart_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f5538d282a769_32875638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4a5e926952df21d61a5d2268e3c1dcae95aacfd' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/cart_view.tpl',
      1 => 1599417713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5538d282a769_32875638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7635725715f5538d281bdd6_23135007', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_7635725715f5538d281bdd6_23135007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7635725715f5538d281bdd6_23135007',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">

                        <?php if ($_smarty_tpl->tpl_vars['cart']->value && $_smarty_tpl->tpl_vars['cart']->value->item_count > 0) {?>
                            <div class="table-responsive">
                                <table id="cart_summary" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="120px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Product'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unit price'];?>
</th>
                                        <th width="100px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quantity'];?>
</th>
                                        <th>&nbsp;</th>
                                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
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
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                                    <img class="img-responsive" src="<?php echo Cart::getItemImage($_smarty_tpl->tpl_vars['item']->value['id']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" >
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                            </td>
                                            <td>
                                                <?php echo ib_money_format($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['config']->value);?>

                                            </td>

                                            <td class="cart_quantity">

                                                <input class="form-control" size="2" type="text" autocomplete="off"  value="<?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
" disabled>
                                                <div style="margin-top: 10px;">

                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
cart/add/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"> <span><i class="fal fa-plus"></i></span> </a>
                                                        <a class="btn btn-danger btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
cart/remove/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"> <span><i class="fal fa-minus"></i></span> </a>
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="cart_delete text-center" data-title="Delete">
                                                <div>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
cart/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="icon-trash"></i></a>
                                                </div>
                                            </td>
                                            <td> <?php echo ib_money_format($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['qty'],$_smarty_tpl->tpl_vars['config']->value);?>
 </td>

                                        </tr>




                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </tbody>

                                    <tfoot>


                                    <tr class="cart_total_price">
                                        <td rowspan="4" colspan="3" id="cart_voucher" class="cart_voucher">
                                        </td>
                                        <td colspan="2" class="text-right"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</strong></td>
                                        <td colspan="2"><strong><?php echo ib_money_format($_smarty_tpl->tpl_vars['cart']->value->total,$_smarty_tpl->tpl_vars['config']->value);?>
</strong></td>
                                    </tr>
                                    </tfoot>

                                </table>
                            </div>

                            <div>

                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Final Delivery Address'];?>

                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_addresses']->value, 'shipping_address');
$_smarty_tpl->tpl_vars['shipping_address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_address']->value) {
$_smarty_tpl->tpl_vars['shipping_address']->do_else = false;
?>

                                            <a class="dropdown-item" href="#"><?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_1;?>
</br><?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->city;?>
,<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->zip;?>
,<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->state;?>

                                            </a>


                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>



                                </div>




                            </div>

                        <div class="float-right">
                            <p class="cart_navigation clearfix">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
cart/checkout/" class="btn btn-primary pull-right" title="Proceed to checkout">
                                    <span><i class="fal fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Proceed to checkout'];?>
</span>
                                </a>

                                                                                                                            </p>

                            <?php } else { ?>

                            <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Your Cart is empty'];?>
</p>

                            <?php }?>
                        </div>








                    </div>
                </div>
            </div>


        </div>

    </div>
<?php
}
}
/* {/block "content"} */
}
