<?php
/* Smarty version 3.1.36, created on 2021-06-19 15:01:49
  from '/var/www/html/ShreeEng_Test/ui/theme/default/ps_modal_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60cdb9859a3674_88749089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc46ed441f501c42dfe890525f5418512d026af7' => 
    array (
      0 => '/var/www/html/ShreeEng_Test/ui/theme/default/ps_modal_list.tpl',
      1 => 1617074988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cdb9859a3674_88749089 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 800px;">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Products n Services'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <table class="table table-striped table-bordered" id="modal_items_table">
                    <thead>
                    <tr>
                        <th width="10%">#</th>
                        <th width="20%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Code'];?>
</th>
                        <th width="55%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>

                        <th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $_smarty_tpl->_assignInScope('i', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                        <tr>

                            <td><input type="checkbox" class="si"></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>

                             <input type="hidden" id="tds_<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['tds_deduction'];?>
"></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</td>

                            <td class="price"><?php echo formatCurrency($_smarty_tpl->tpl_vars['ds']->value['sales_price'],$_smarty_tpl->tpl_vars['config']->value['home_currency'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>
</td>
                        </tr>
                         <?php echo $_smarty_tpl->tpl_vars['i']->value++;?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                    </tbody>
                </table>

                <div class="form-group">
                    <button type="button" data-dismiss="modal" class="btn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                    <button class="btn btn-primary update"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select'];?>
</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
