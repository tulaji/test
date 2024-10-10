<?php
/* Smarty version 3.1.36, created on 2021-02-26 06:38:19
  from 'C:\xampp\htdocs\cloudonex\ui\theme\default\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6038ddab8934a2_96959846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1c37680f7f03abd9cd53c5c659629a09a07fdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cloudonex\\ui\\theme\\default\\about.tpl',
      1 => 1611100325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038ddab8934a2_96959846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14967420726038ddab85ffe7_48464893', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12759498136038ddab889115_78524066', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_14967420726038ddab85ffe7_48464893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14967420726038ddab85ffe7_48464893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="panel" id="ib_box">
                <div class="panel-hdr">
                    <h2>Build - <?php echo $_smarty_tpl->tpl_vars['config']->value['build'];?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content" id="ibox_update">


                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
updating/" class="cls_update btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Update'];?>
</a>


                    </div>
                </div>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['app_stage']->value == 'Demo') {?>

                <input type="hidden" name="purchase_code" id="purchase_code" value="">

            <?php } else { ?>

                <div class="panel" id="ib_box">

                    <div class="panel-hdr">
                        <h2>License Key</h2>
                    </div>

                    <div class="panel-container">
                        <div class="panel-content">


                            <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/activate_license_post/">





                                <div class="form-group">

                                    <input type="text" required class="form-control" id="purchase_key" name="purchase_key" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['purchase_key'];?>
">

                                    <span class="help-block">You will find your Purchase Key in your <a target="_blank" href="https://www.cloudonex.com/licenses">Profile - Downloads</a> Section
                                <br>
                                    In this format - XXXX-XXXX-XXXX-XXXX
                                </span>

                                </div>

                                <div class="form-group">
                                    <button type="submit" id="btn_save" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                </div>
                            </form>




                        </div>
                    </div>

                </div>

            <?php }?>



        </div>





    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_12759498136038ddab889115_78524066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_12759498136038ddab889115_78524066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>








































































































































































<?php
}
}
/* {/block "script"} */
}
