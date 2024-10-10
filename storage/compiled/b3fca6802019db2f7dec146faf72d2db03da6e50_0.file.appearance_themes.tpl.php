<?php
/* Smarty version 3.1.36, created on 2021-03-17 12:38:36
  from '/var/www/html/pcrm/ui/theme/default/appearance_themes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6051aaf4027bd4_45007114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3fca6802019db2f7dec146faf72d2db03da6e50' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/appearance_themes.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6051aaf4027bd4_45007114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12268588676051aaf4012dd7_44957482', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_12268588676051aaf4012dd7_44957482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12268588676051aaf4012dd7_44957482',
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
