<?php
/* Smarty version 3.1.36, created on 2020-12-06 17:59:28
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/Settings_product_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fcd625054c0d8_50440279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e5138f88bfd72a1555345881d67681f2135be75' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/Settings_product_categories.tpl',
      1 => 1607295443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcd625054c0d8_50440279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19081207115fcd6250545290_73192803', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_19081207115fcd6250545290_73192803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19081207115fcd6250545290_73192803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Product Categories'];?>
</h2>

                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add_category/" class="btn btn-success" id="add_new_group"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New category'];?>
</a>
                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="table-responsive">
                            <table class="table table-bordered roles no-margin">
                                <thead>
                                <tr>
                                    <th class="h6">ID</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category Name'];?>
</th>
                                    <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>



                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <tr data-id="1">
                                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</td>
                                        <td class="text-right">

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit_category/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/" class="btn btn-primary"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
delete/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
/" class="btn btn-danger" id="uid118"><i class="fal fa-trash-alt"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
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



    </div>
<?php
}
}
/* {/block "content"} */
}
