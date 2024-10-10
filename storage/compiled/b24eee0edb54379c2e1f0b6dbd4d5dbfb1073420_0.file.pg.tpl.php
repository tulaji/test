<?php
/* Smarty version 3.1.36, created on 2021-03-20 16:49:36
  from '/var/www/html/pcrm/ui/theme/default/pg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6055da485a2767_99934778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b24eee0edb54379c2e1f0b6dbd4d5dbfb1073420' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/pg.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6055da485a2767_99934778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19695049476055da4858a765_98296280', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_19695049476055da4858a765_98296280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19695049476055da4858a765_98296280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Gateways'];?>
</h2>
                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reorder/pg/" class="btn btn-primary mb-md"><i class="fal fa-arrows"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reorder Payment Gateways'];?>
</a>

                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <table class="table table-bordered table-hover sys_table">
                            <thead>
                            <tr>

                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Gateway Name'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Setting Name'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Value'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                <tr>

                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pg-conf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/">
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['logo'] != '') {?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['ds']->value['logo'];?>
">
                                            <?php } else { ?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/pg/<?php echo $_smarty_tpl->tpl_vars['ds']->value['processor'];?>
.png">
                                            <?php }?>

                                        </a>
                                    </td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pg-conf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</a> </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['settings'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['value'];?>
</td>

                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Inactive') {?>
                                            <h4><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Inactive'];?>
</span></h4>
                                        <?php } else { ?>
                                            <h4><span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
</span></h4>
                                        <?php }?>

                                    </td>

                                    <td class="text-right">

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pg-conf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

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
<?php
}
}
/* {/block "content"} */
}
