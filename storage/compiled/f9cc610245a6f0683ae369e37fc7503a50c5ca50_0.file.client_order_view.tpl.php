<?php
/* Smarty version 3.1.36, created on 2020-10-09 01:45:49
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_order_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7ff90d224564_99358137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9cc610245a6f0683ae369e37fc7503a50c5ca50' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_order_view.tpl',
      1 => 1601240677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7ff90d224564_99358137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12066536665f7ff90d21b171_07959998', "content");
?>



<?php }
/* {block "content"} */
class Block_12066536665f7ff90d21b171_07959998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12066536665f7ff90d21b171_07959998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>Order# <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-6">

                                <?php if ($_smarty_tpl->tpl_vars['order']->value->status === 'Completed') {?>
                                    <div class="alert alert-success">Completed</div>
                                <?php } else { ?>
                                    <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['order']->value->status;?>
</div>
                                <?php }?>

                                <h4>Date: <?php ob_start();
echo $_smarty_tpl->tpl_vars['order']->value->date;
$_prefixVariable1 = ob_get_clean();
echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_prefixVariable1));?>
</h4>



                                <h4>Shipping Address</h4>
                                <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>
                                    <p style="font-size: 15px;">
                                        <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_1;?>
 <br>
                                        <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_2;?>
 <br>
                                        <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->city;?>
 <br>
                                        <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->state;?>
- <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->zip;?>
<br>
                                        <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->country;?>

                                    </p>
                                <?php }?>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>

                        <h3>Items</h3>
                        <div class="hr-line-dashed"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="items_table">
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Product Description</td>
                                    <td>Tracking Number</td>
                                    <td>Qty/No. <br> Ctns</td>
                                    <td>Courier Company</td>
                                    <td>Declared Value</td>
                                </tr>
                                </thead>
                                <tbody id="table_tbody">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->iteration;?>
</td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->tracking_number;?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->courier_company;?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->amount;?>

                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5" class="text-right">
                                        Total declare
                                    </td>
                                    <td>
                                        <span id="item_total"><?php echo $_smarty_tpl->tpl_vars['order']->value->total;?>
</span>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
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
