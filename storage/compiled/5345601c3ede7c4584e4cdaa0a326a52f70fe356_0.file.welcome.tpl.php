<?php
/* Smarty version 3.1.36, created on 2021-03-15 10:21:57
  from '/var/www/html/pcrm/ui/theme/default/welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_604ee7ed1c2269_99119454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5345601c3ede7c4584e4cdaa0a326a52f70fe356' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/welcome.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604ee7ed1c2269_99119454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_561546925604ee7ed1be805_90308992', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_561546925604ee7ed1be805_90308992 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_561546925604ee7ed1be805_90308992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">

            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
!

        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
