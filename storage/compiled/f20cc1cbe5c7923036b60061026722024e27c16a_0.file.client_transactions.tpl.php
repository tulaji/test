<?php
/* Smarty version 3.1.36, created on 2020-06-19 04:32:35
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eec7823218d64_75941618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f20cc1cbe5c7923036b60061026722024e27c16a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_transactions.tpl',
      1 => 1592330615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec7823218d64_75941618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1421754685eec7823212af7_45891981', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_1421754685eec7823212af7_45891981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1421754685eec7823212af7_45891981',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
 : <?php echo count($_smarty_tpl->tpl_vars['d']->value);?>
 </h2>

                </div>
                <div class="panel-container">
                    <div class="table-responsive">

                        <table class="table sys_table">
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>


                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                <tr class="<?php if ($_smarty_tpl->tpl_vars['ds']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                                    <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                                                        


                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>

                                                                                                        </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                        </table>

                    </div>
                </div>

            </div>

        </div>

        <!-- Widget-1 end-->

        <!-- Widget-2 end-->
    </div>

<?php
}
}
/* {/block "content"} */
}
