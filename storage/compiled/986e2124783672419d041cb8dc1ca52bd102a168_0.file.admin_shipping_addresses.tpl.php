<?php
/* Smarty version 3.1.36, created on 2020-09-09 06:19:54
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/admin_shipping_addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f58ac4a3d72c2_28837486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '986e2124783672419d041cb8dc1ca52bd102a168' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/admin_shipping_addresses.tpl',
      1 => 1599646738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58ac4a3d72c2_28837486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3134522025f58ac4a3d13d0_65691535', "content");
?>

<?php }
/* {block "content"} */
class Block_3134522025f58ac4a3d13d0_65691535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3134522025f58ac4a3d13d0_65691535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>Shipping Addresses</h2>
                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/admin/shipping-address" class="btn btn-primary">Add new shipping address</a>
                    </div>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td>Label/ Name</td>
                                    <td>Address</td>
                                    <td>Manage</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_addresses']->value, 'shipping_address');
$_smarty_tpl->tpl_vars['shipping_address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_address']->value) {
$_smarty_tpl->tpl_vars['shipping_address']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->label;?>
</td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_1;?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_2;?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->zip;?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->consignee;?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->phone;?>
 <br>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <?php if (!$_smarty_tpl->tpl_vars['shipping_address']->value->is_default) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/admin/shipping-address-make-default/<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
" class="btn btn-primary">Make Default</a>
                                                <?php }?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/admin/shipping-address/<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
" class="btn btn-primary">Edit</a>
                                                <a href="javascript:;" onclick="confirmThenGoToUrl(event,'freight/admin/delete-shipping-address/<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
')" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
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
