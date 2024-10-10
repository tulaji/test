<?php
/* Smarty version 3.1.36, created on 2021-06-08 13:21:55
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\ajax.contact-quotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60bf219b6bf0a7_98317168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b71a82c1a978b454db2f455d8aa9b9cdcca94d0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\ajax.contact-quotes.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf219b6bf0a7_98317168 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/new/1/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/" class="btn btn-primary waves-effect waves-light"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create New Quote'];?>
</a>

<hr>
<div class="table-responsive">
    <table class="table table-striped sys_table">
        <thead style="background: #f0f2ff">
        <tr>
            <th>#</th>
            <th width="30%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Stage'];?>
</th>

            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['i']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
            <tr>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</a> </td>
                <td><a class="text-info h6" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['subject'];?>
</a> </td>
                <td class="amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['datecreated']));?>
</td>
                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['validuntil']));?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Dead') {?>
                        <span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Lost') {?>
                        <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Accepted') {?>
                        <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Draft') {?>
                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Delivered') {?>
                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</span>
                    <?php } else { ?>
                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['ds']->value['stage'];?>
</span>
                    <?php }?>

                </td>

                <td class="text-right">
                    <div class="btn-group">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-sm"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

                    </div>


                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>
</div>


<?php }
}
