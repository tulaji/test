<?php
/* Smarty version 3.1.36, created on 2020-06-14 07:24:42
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/settings_activate_license.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee608fa280960_07396318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d9432e9a572082d15f8354c60c9a7740d0f6086' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/settings_activate_license.tpl',
      1 => 1556267287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee608fa280960_07396318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15604224555ee608fa27ec18_70561498', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_15604224555ee608fa27ec18_70561498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15604224555ee608fa27ec18_70561498',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Activate License</h5>

                </div>
                <div class="ibox-content">

                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/activate_license_post/">

                        <div class="form-group">
                            <label for="fullname">Your Full Name</label>
                            <input type="text" required class="form-control" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">

                        </div>

                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" required class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">

                        </div>
                        <div class="form-group">
                            <label for="purchase_code">Purchase Code</label>
                            <input type="text" required class="form-control" id="purchase_code" name="purchase_code">
                            <span class="help-block"><a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank">How To Get Your Envato Purchase Code?</a> </span>
                        </div>




                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
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
