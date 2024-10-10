<?php
/* Smarty version 3.1.36, created on 2021-01-13 03:39:30
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/change-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffeb1c2070c01_09567865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3852b0374c4dd6a6bf6e4cb349808d76fb90df61' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/change-password.tpl',
      1 => 1610527167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffeb1c2070c01_09567865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7176054045ffeb1c206dd25_29982919', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_7176054045ffeb1c206dd25_29982919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7176054045ffeb1c206dd25_29982919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>
</h5>
                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password-post">
                        <div class="form-group">
                            <label for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Current Password'];?>
</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="npass"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Password'];?>
</label>
                            <input type="password" class="form-control" id="npass" name="npass">
                        </div>
                        <div class="form-group">
                            <label for="cnpass"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm New Password'];?>
</label>
                            <input type="password" class="form-control" id="cnpass" name="cnpass">
                        </div>




                        <button type="submit" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>

                </div>
            </div>



        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
