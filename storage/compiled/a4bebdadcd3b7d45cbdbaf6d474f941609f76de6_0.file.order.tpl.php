<?php
/* Smarty version 3.1.36, created on 2021-01-04 11:08:24
  from '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff33d78de0ce5_39695727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4bebdadcd3b7d45cbdbaf6d474f941609f76de6' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/order.tpl',
      1 => 1609776502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff33d78de0ce5_39695727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4307160225ff33d78ddba32_71536166', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_970572655ff33d78de0171_35015190', "script");
?>

<?php }
/* {block "content"} */
class Block_4307160225ff33d78ddba32_71536166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4307160225ff33d78ddba32_71536166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['app_view_path']->value)."/includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <div class="row">


        <div class="col-md-12">

            <div class="card">
                <div class="card-body">

                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
wcsuite/app/orders/">Back to Orders</a>

                    <div class="hr-line-dashed"></div>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                        <?php if (is_string($_smarty_tpl->tpl_vars['value']->value)) {?>
                            <strong><?php echo ucwords($_smarty_tpl->tpl_vars['key']->value);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <br>
                        <?php }?>


                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>




        </div>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_970572655ff33d78de0171_35015190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_970572655ff33d78de0171_35015190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['app_view_path']->value)."/includes/base_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "script"} */
}
