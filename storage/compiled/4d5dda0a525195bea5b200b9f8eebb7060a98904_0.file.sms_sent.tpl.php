<?php
/* Smarty version 3.1.36, created on 2021-03-19 17:30:35
  from '/var/www/html/pcrm/ui/theme/default/sms_sent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_605492634b6b98_99598378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d5dda0a525195bea5b200b9f8eebb7060a98904' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/sms_sent.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605492634b6b98_99598378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11898380806054926349a156_97687435', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_11898380806054926349a156_97687435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11898380806054926349a156_97687435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['found'];?>

                        . <?php echo $_smarty_tpl->tpl_vars['_L']->value['Page'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['lastpage'];?>
. </h2>




                </div>

                <div class="panel-container">
                    <div class="panel-content" id="application_ajaxrender">


                        <table class="table table-bordered sys_table" id="sys_logs">
                            <thead>
                            <tr>
                                <th width="5%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ID'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sent To'];?>
</th>
                                <th width="60%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Message'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
                                    <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['created_at']));?>
</td>
                                    <td><?php echo urldecode($_smarty_tpl->tpl_vars['ds']->value['sms_to']);?>
</td>
                                    <td><?php echo urldecode($_smarty_tpl->tpl_vars['ds']->value['sms']);?>
</td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
delete/sms/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger btn-sm"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a></td>

                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>

                        <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>


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
