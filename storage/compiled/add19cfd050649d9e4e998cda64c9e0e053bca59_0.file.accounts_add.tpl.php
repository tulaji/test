<?php
/* Smarty version 3.1.36, created on 2021-06-09 18:40:24
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\accounts_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c0bdc0a20708_67712484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'add19cfd050649d9e4e998cda64c9e0e053bca59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\accounts_add.tpl',
      1 => 1616819626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c0bdc0a20708_67712484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33604888560c0bdc09ecb61_63627852', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213733937560c0bdc0a1f2b3_78049126', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_33604888560c0bdc09ecb61_63627852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_33604888560c0bdc09ecb61_63627852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_Account'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add-post">
                            <div class="form-group">
                                <label for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Title'];?>
*</label>
                                <input type="text" class="form-control" id="account" name="account">

                            </div>
                            <div class="form-group">
                                <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>

                                <div class="form-group">
                                    <label for="balance_<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Initial Balance'];?>
 [ <?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
 ]</label>
                                    <input type="text" class="form-control amount" id="balance_<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" name="balance_<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value->iso_code]))) {?>
                                        data-a-sign="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value->iso_code]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value->iso_code]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value->iso_code]['decimal_mark'];?>
" <?php if (($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value->iso_code]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                    <?php }?> data-d-group="3">
                                </div>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                            <div class="form-group">
                                <label for="account_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Number'];?>
</label>
                                <input type="text" class="form-control" id="account_number" name="account_number">
                            </div>

                            <div class="form-group">
                                <label for="contact_person"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Contact Person'];?>
</label>
                                <input type="text" class="form-control" id="contact_person" name="contact_person">
                            </div>

                            <div class="form-group">
                                <label for="contact_phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                <input type="text" class="form-control" id="contact_phone" name="contact_phone">
                            </div>

                            <div class="form-group">
                                <label for="ib_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Internet Banking URL'];?>
</label>
                                <input type="text" class="form-control" id="ib_url" name="ib_url">
                            </div>

                            <div class="form-group">
                                <label for="owner_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Owner'];?>
</label>
                                <select class="form-control" name="owner_id" id="owner_id">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['owners']->value, 'owner');
$_smarty_tpl->tpl_vars['owner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['owner']->value) {
$_smarty_tpl->tpl_vars['owner']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['owner']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['owner']->value->id == $_smarty_tpl->tpl_vars['user']->value->id) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['owner']->value->fullname;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>



                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
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
/* {block 'script'} */
class Block_213733937560c0bdc0a1f2b3_78049126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_213733937560c0bdc0a1f2b3_78049126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {



            $('.amount').autoNumeric('init',{

                vMin: '-9999999999999.99'

            });


        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'script'} */
}
