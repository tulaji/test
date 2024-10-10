<?php
/* Smarty version 3.1.36, created on 2020-09-13 02:40:07
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f5dbec724ce51_21260481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc9fa487faf251ee0e865e887a47d3f90ec3e081' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/welcome.tpl',
      1 => 1556267287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5dbec724ce51_21260481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_610495755f5dbec724bcd4_81168181', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_610495755f5dbec724bcd4_81168181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_610495755f5dbec724bcd4_81168181',
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
