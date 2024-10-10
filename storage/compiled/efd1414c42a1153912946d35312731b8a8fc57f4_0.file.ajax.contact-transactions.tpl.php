<?php
/* Smarty version 3.1.36, created on 2021-06-08 13:22:36
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\ajax.contact-transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60bf21c48582a8_78336212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efd1414c42a1153912946d35312731b8a8fc57f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\ajax.contact-transactions.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf21c48582a8_78336212 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="table-responsive">
    <div id="no-more-tables">
        <table class="table  table-striped sys_table">
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dr'];?>
</th>
            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>

            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tr']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                <tr class="<?php if ($_smarty_tpl->tpl_vars['ds']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                    <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                    <td class="text-info h6"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                    <td><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['type']);?>
</td>

                    <td class="text-right amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>

                    <td class="text-right amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['dr'];?>
</td>

                    <td class="text-right amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['cr'];?>
</td>



                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</div>

<?php }
}
