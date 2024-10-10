<?php
/* Smarty version 3.1.36, created on 2020-06-30 16:40:22
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/util-activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efba3361f96c2_27300492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f0e4935a1692c06aaf17989f2ee202cbb0b8d3a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/util-activity.tpl',
      1 => 1593549571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efba3361f96c2_27300492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_917067925efba3361f0f67_48803835', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_917067925efba3361f0f67_48803835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_917067925efba3361f0f67_48803835',
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
                    <div class="panel-toolbar">
                        <a href="javascript:;" class="btn btn-primary pull-right" onclick="confirmThenGoToUrl(event,'util/clear_logs')" id="clear_logs"><i
                                    class="fal fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Clear Old Data'];?>
</a>
                    </div>



                </div>
                <div class="panel-container" id="application_ajaxrender">
                    <div class="panel-content">
                        <table class="table table-bordered sys_table" id="sys_logs">
                            <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['ID'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['UID'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP'];?>
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
                                    <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['ip'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </tbody>
                        </table>
                    </div>




                    <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>


                </div>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
