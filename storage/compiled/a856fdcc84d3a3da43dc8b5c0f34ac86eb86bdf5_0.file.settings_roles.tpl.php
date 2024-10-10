<?php
/* Smarty version 3.1.36, created on 2021-03-01 19:06:55
  from '/var/www/html/pcrm/ui/theme/default/settings_roles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_603d819fa1c1e3_46530884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a856fdcc84d3a3da43dc8b5c0f34ac86eb86bdf5' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/settings_roles.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603d819fa1c1e3_46530884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1014296771603d819fa0fa02_38188908', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1014296771603d819fa0fa02_38188908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1014296771603d819fa0fa02_38188908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Roles'];?>
</h2>

                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add_role/" class="btn btn-success" id="add_new_group"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Role'];?>
</a>
                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="table-responsive">
                            <table class="table table-bordered roles no-margin">
                                <thead>
                                <tr>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                    <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                                    <tr data-id="1">
                                        <td><?php echo $_smarty_tpl->tpl_vars['role']->value['rname'];?>
</td>
                                        <td class="text-right">

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit_role/<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
/" class="btn btn-primary"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
delete/role/<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
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
