<?php
/* Smarty version 3.1.36, created on 2021-06-08 13:23:30
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\profile_client_password_manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60bf21faa0e6c3_15429145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcebb79473730750b851d27b977b643e9a191217' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\profile_client_password_manager.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf21faa0e6c3_15429145 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="table-responsive" id="ib_data_table">
    <table class="table table-striped" id="tableDataTable">
        <thead style="background: #f0f2ff">
        <tr>
            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['URL'];?>
</th>
            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
            <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
        </tr>
        </thead>
        <tbody>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['passwords']->value, 'password');
$_smarty_tpl->tpl_vars['password']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['password']->value) {
$_smarty_tpl->tpl_vars['password']->do_else = false;
?>
            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['password']->value['id'];?>
">

                <td><?php echo $_smarty_tpl->tpl_vars['password']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['password']->value['url'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['password']->value['username'];?>
</td>
                <td class="text-right">
                    <div class="btn-group">
                        <?php if ($_smarty_tpl->tpl_vars['password']->value['url'] != '') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['password']->value['url'];?>
" target="_blank" class="btn btn-primary btn-sm"><i class="fal fa-globe"></i> </a>
                        <?php }?>

                        
                        <a href="javascript:void(0);" class="btn btn-sm btn-info copy_to_clipboard" aria-label="<?php echo $_smarty_tpl->tpl_vars['password']->value->username;?>
"><i class="fal fa-clipboard"></i></a>

                        <a href="javascript:void(0);" class="btn btn-sm btn-warning copy_to_clipboard" aria-label="<?php echo $_smarty_tpl->tpl_vars['password']->value->password;?>
"><i class="fal fa-lock"></i></a>

                    </div>




                </td>

            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>






        </tbody>
    </table>
</div>
<?php }
}
