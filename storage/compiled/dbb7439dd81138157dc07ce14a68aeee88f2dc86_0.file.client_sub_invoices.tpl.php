<?php
/* Smarty version 3.1.36, created on 2020-06-26 06:28:14
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_sub_invoices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ef5cdbeaee226_56083806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbb7439dd81138157dc07ce14a68aeee88f2dc86' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_sub_invoices.tpl',
      1 => 1593167292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5cdbeaee226_56083806 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-sm-6 col-xl-4">
        <div class="p-3 bg-primary-900 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['total_invoice_issued_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice Issued Amount'];?>
</small>
                </h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="p-3 bg-success-900 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['total_paid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
</small>
                </h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="p-3 bg-danger-900 rounded overflow-hidden position-relative text-white mb-g">
            <div class="">
                <h3 class="display-4 d-block l-h-n m-0 fw-500">
                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['total_unpaid_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Unpaid'];?>
</small>
                </h3>
            </div>
        </div>
    </div>
</div>

<table class="table table-bordered table-hover" id="clx_datatable">
    <thead>
    <tr>
        <th>#</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
        <th>
            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

        </th>
    </tr>
    </thead>
    <tbody>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'invoice');
$_smarty_tpl->tpl_vars['invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->do_else = false;
?>
        <tr>
            <td><a target="_blank"
                   href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/token_<?php echo $_smarty_tpl->tpl_vars['invoice']->value->vtoken;?>
/"><?php echo $_smarty_tpl->tpl_vars['invoice']->value->invoicenum;
if ($_smarty_tpl->tpl_vars['invoice']->value->cn != '') {?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value->cn;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
 <?php }?></a>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['invoice']->value->account;?>
 </td>
            <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['invoice']->value->total,$_smarty_tpl->tpl_vars['invoice']->value->currency_iso_code);?>
</td>
            <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['invoice']->value->date));?>
</td>
            <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['invoice']->value->duedate));?>
</td>
            <td>

                <?php if ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Unpaid') {?>
                    <span class="badge badge-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Paid') {?>
                    <span class="badge badge-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Partially Paid') {?>
                    <span class="badge badge-info"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['invoice']->value->status == 'Cancelled') {?>
                    <span class="label"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>
</span>
                <?php } else { ?>
                    <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['invoice']->value->status);?>

                <?php }?>


            </td>


        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>


</table>
<?php }
}
