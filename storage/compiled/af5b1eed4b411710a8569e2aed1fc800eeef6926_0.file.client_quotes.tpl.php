<?php
/* Smarty version 3.1.36, created on 2020-06-19 04:32:40
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_quotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eec782836aae5_74187678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af5b1eed4b411710a8569e2aed1fc800eeef6926' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_quotes.tpl',
      1 => 1592330615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec782836aae5_74187678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11303258105eec7828362499_76895293', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_11303258105eec7828362499_76895293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11303258105eec7828362499_76895293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
 : <?php echo $_smarty_tpl->tpl_vars['total_quotes']->value;?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                <div class="table-responsive">
                    <table class="table table-hover sys_table">
                        <thead>
                        <tr>

                            <th width="30%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
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

                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ds']->value['subject'];?>
</a> </td>
                                <td class="amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['datecreated']));?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['validuntil']));?>
</td>


                                <td class="text-right">
                                    <div class="btn-group">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" target="_blank" class="btn btn-primary"><i class="fal fa-check"></i></a>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/dl/" class="btn btn-success " ><i class="fal fa-file"></i> </a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" target="_blank" class="btn btn-warning"><i class="fal fa-print"></i> </a>
                                    </div>
                                </td>
                            </tr>

                            <?php
}
if ($_smarty_tpl->tpl_vars['ds']->do_else) {
?>

                            <tr>
                                <td colspan="7">
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>

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

<?php
}
}
/* {/block "content"} */
}
