<?php
/* Smarty version 3.1.36, created on 2020-08-22 08:15:11
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/layouts/canvas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f410c4fa1c5e0_19008277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5c3e72d1b79e1c7eaca348e5eb5558ee000fea2' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/layouts/canvas.tpl',
      1 => 1598098508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f410c4fa1c5e0_19008277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4168574735f410c4fa1a8a0_96719977', "head_extras_from_layout");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18050132855f410c4fa1b2a3_88586737', "content_body");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13886025615f410c4fa1c046_72821000', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "head_extras_from_layout"} */
class Block_4168574735f410c4fa1a8a0_96719977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_4168574735f410c4fa1a8a0_96719977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        .pristine-error.text-help {
            color: red;
        }
        @media (min-width: 992px){
            .nav-function-fixed:not(.nav-function-top):not(.nav-function-hidden):not(.nav-function-minify) .page-content-wrapper {
                padding-left: 0;
            }
        }
    </style>
<?php
}
}
/* {/block "head_extras_from_layout"} */
/* {block "content"} */
class Block_840707805f410c4fa1b707_19134295 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "content"} */
/* {block "content_body"} */
class Block_18050132855f410c4fa1b2a3_88586737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_18050132855f410c4fa1b2a3_88586737',
  ),
  'content' => 
  array (
    0 => 'Block_840707805f410c4fa1b707_19134295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_840707805f410c4fa1b707_19134295', "content", $this->tplIndex);
?>


<?php
}
}
/* {/block "content_body"} */
/* {block "script"} */
class Block_13886025615f410c4fa1c046_72821000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_13886025615f410c4fa1c046_72821000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {



        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
