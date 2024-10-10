<?php
/* Smarty version 3.1.36, created on 2020-09-27 16:58:07
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f70fcdfc3bb16_07404759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd880569d6b77d65cc9b762c66ef0b458cc6af855' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_orders.tpl',
      1 => 1601240278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f70fcdfc3bb16_07404759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9333340395f70fcdfc36f38_69517476', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10188395855f70fcdfc37ea5_45370158', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1782257025f70fcdfc3b5a7_41165825', "script");
?>

<?php }
/* {block "head"} */
class Block_9333340395f70fcdfc36f38_69517476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_9333340395f70fcdfc36f38_69517476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_10188395855f70fcdfc37ea5_45370158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10188395855f70fcdfc37ea5_45370158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-12">
            <div class="panel">

                <div class="panel-container show">


                    <div class="panel-content">
                        <div class="table-responsive" id="ib_data_panel">


                            <table class="table table-striped w-100"  id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr class="heading">

                                    <th>Date</th>
                                    <th>Status</th>
                                    <th class="text-right" style="width: 80px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>


                                </thead>


                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                                    <tr>

                                        <td class="text-info h6">
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value->date;?>

                                        </td>
                                        <td class="h6">
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value->status;?>

                                        </td>
                                        <td>
                                            <div class="btn-group float-right">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/client/view-order/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" class="btn btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
" data-placement="top"><i class="fal fa-list"></i> </a>
                                            </div>
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

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1782257025f70fcdfc3b5a7_41165825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1782257025f70fcdfc3b5a7_41165825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<?php
}
}
/* {/block "script"} */
}
