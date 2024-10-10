<?php
/* Smarty version 3.1.36, created on 2020-09-06 14:57:19
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_order_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f55310f377238_34932644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '247058a97bae65ae2984cdbbac140596d84ff51e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_order_view.tpl',
      1 => 1592432480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f55310f377238_34932644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13598686805f55310f35f4a8_54738746', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_13598686805f55310f35f4a8_54738746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13598686805f55310f35f4a8_54738746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">

        <div class="panel-container">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="well">
                            <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order Number'];?>
 - <?php echo $_smarty_tpl->tpl_vars['order']->value->ordernum;?>
</h4>
                            <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->cname;?>
</p>
                                                        <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
: </strong> <span class="amount"><?php echo $_smarty_tpl->tpl_vars['order']->value->amount;?>
</span> </p>
                            <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
: </strong><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['order']->value->date_added));?>
</p>
                            <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
: </strong>

                                <?php if ($_smarty_tpl->tpl_vars['order']->value->status == 'Active') {?>
                                    <span class="label label-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['order']->value->status]);?>
</span>
                                <?php } else { ?>
                                    <span class="label label-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['order']->value->status]);?>
</span>
                                <?php }?>
                            </p>
                            <?php if ($_smarty_tpl->tpl_vars['order']->value->iid != '0') {?>
                                <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->iid;?>
 </p>
                            <?php }?>



                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Product_Service'];?>
</h4>

                        <hr>

                        <div class="table-responsive">
                            <table class="table invoice-items">
                                <thead>
                                <tr class="h5 text-dark">

                                    <th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>

                                    <th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                                                        <th id="cell-qty" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quantity'];?>
</th>
                                    <th id="cell-total" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderItems']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <tr>

                                        <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
</td>

                                        <td class="text-center amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['item']->value->unit_price;?>
</td>
                                        <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['item']->value->quantity;?>
</td>
                                        <td class="text-center amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['item']->value->total;?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <tr class="h5 text-dark">

                                    <td colspan="3" class="text-right"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</strong></td>


                                    <td class="text-center amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['order']->value->amount;?>
</td>

                                </tr>

                                </tbody>
                            </table>

                        </div>



                        <hr>

                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activation Message'];?>
</h4>
                        <hr>

                        <h4><?php echo $_smarty_tpl->tpl_vars['order']->value->activation_subject;?>
</h4>

                        <hr>


                        <?php echo $_smarty_tpl->tpl_vars['order']->value->activation_message;?>



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
