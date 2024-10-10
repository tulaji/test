<?php
/* Smarty version 3.1.36, created on 2021-06-18 16:27:22
  from '/var/www/html/ShreeEng_Test/ui/theme/default/appearance_themes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60cc7c12e3c4f5_82649169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e21e167daf57e4169eb88fafc59786fad6fa278' => 
    array (
      0 => '/var/www/html/ShreeEng_Test/ui/theme/default/appearance_themes.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cc7c12e3c4f5_82649169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65327898160cc7c12e241f0_99891498', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_65327898160cc7c12e241f0_99891498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_65327898160cc7c12e241f0_99891498',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Themes'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/themes_post/">


                            <div class="form-group">
                                <label for="theme"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Theme'];?>
</label>
                                <select name="theme" id="theme" class="form-control">
                                    
                                    
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = @$_smarty_tpl->tpl_vars['themes']->value)===null||$tmp==='' ? array() : $tmp), 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['config']->value['theme'] == $_smarty_tpl->tpl_vars['theme']->value) {?>selected="selected" <?php }?>><?php echo ucfirst($_smarty_tpl->tpl_vars['theme']->value);?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>






                            <button type="submit" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
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
