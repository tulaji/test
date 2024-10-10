<?php
/* Smarty version 3.1.36, created on 2021-06-09 12:33:51
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\settings_add_role.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c067d7b1e2e3_01882787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aad9bf71a3040c84d675d7ef9594117e4330a83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\settings_add_role.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c067d7b1e2e3_01882787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20595815760c067d7af1360_39763403', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_20595815760c067d7af1360_39763403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20595815760c067d7af1360_39763403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Role'];?>
</h5>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add_role_post/" method="post" accept-charset="utf-8">
                            <div class="form-group"><label for="rname" class="control-label"> <small class="req text-danger">* </small>Role Name</label><input type="text" id="rname" name="rname" class="form-control" autofocus></div>

                            <hr>


                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table table-bordered roles no-margin">
                                        <thead>
                                        <tr>
                                            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Permission'];?>
</th>
                                            <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</th>
                                            <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</th>
                                            <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create'];?>
</th>
                                            <th class="text-center text-danger bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</th>
                                            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Data'];?>
 <br><small>view all data or only self created data</small></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'permission');
$_smarty_tpl->tpl_vars['permission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->do_else = false;
?>

                                            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['permission']->value['id'];?>
">
                                                <td class="bold"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['permission']->value['pname']);?>
</td>
                                                <td class="text-center">
                                                    <div class="checkbox">
                                                        <div class="i-checks"><label  style="padding-left: 0"> <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_view" class="ib_checkbox" type="checkbox" value="yes"></label></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox">
                                                        <div class="i-checks"><label> <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_edit" class="ib_checkbox" type="checkbox" value="yes"></label></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox">
                                                        <div class="i-checks"><label> <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_create" class="ib_checkbox" type="checkbox" value="yes"></label></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-danger">
                                                        <div class="i-checks"><label> <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_delete" class="ib_checkbox" type="checkbox" value="yes"></label></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="checkbox checkbox-danger">
                                                        <div class="i-checks"><label> <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_all_data" class="ib_checkbox" type="checkbox" value="yes"></label></div>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </tbody>
                                    </table>

                                    <button class="btn btn-primary" type="submit" id="submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>                        </div>

                            </div>

                        </form>
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
