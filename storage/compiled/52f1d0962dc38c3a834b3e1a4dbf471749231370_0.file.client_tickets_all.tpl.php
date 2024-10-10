<?php
/* Smarty version 3.1.36, created on 2020-06-19 04:32:44
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_tickets_all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eec782c792fe9_23060803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f1d0962dc38c3a834b3e1a4dbf471749231370' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_tickets_all.tpl',
      1 => 1592330615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec782c792fe9_23060803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3355218335eec782c78ba90_08544817', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_3355218335eec782c78ba90_08544817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3355218335eec782c78ba90_08544817',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Tickets'];?>
</h2>
                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/new/" class="btn pull-right btn-primary"><i class="icon-mail"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Open New Ticket'];?>
</a>
                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-hover table-vcenter">
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                                <tr>
                                    <td class="text-center" style="width: 140px;"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/">#<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md text-center" style="width: 100px;">
                                    <span class="badge badge-success"><?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['d']->value['status']]))) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['d']->value['status']];?>

                                    <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>

                                    <?php }?></span>
                                    </td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
</a>
                                        <div class="text-muted">
                                            <em><?php echo $_smarty_tpl->tpl_vars['_L']->value['Updated'];?>
 </em> <em class="mmnt"><?php echo strtotime($_smarty_tpl->tpl_vars['d']->value['updated_at']);?>
</em> by <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/client/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['d']->value['last_reply'];?>
</a>
                                        </div>
                                    </td>


                                </tr>

                                <?php
}
if ($_smarty_tpl->tpl_vars['d']->do_else) {
?>
                                <tr><td align="center" style="border-top: none"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You do not have any Tickets'];?>
</td></tr>
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
