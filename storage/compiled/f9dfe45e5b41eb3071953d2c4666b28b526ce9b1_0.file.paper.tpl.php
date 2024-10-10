<?php
/* Smarty version 3.1.36, created on 2020-08-22 07:12:08
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/layouts/paper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f40fd88558d41_74800718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9dfe45e5b41eb3071953d2c4666b28b526ce9b1' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/layouts/paper.tpl',
      1 => 1598094725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f40fd88558d41_74800718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4495695465f40fd885537d8_01137220', "head_extras_from_layout");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21043280335f40fd88554267_36549740', "content_body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13240220815f40fd88558726_20833357', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "head_extras_from_layout"} */
class Block_4495695465f40fd885537d8_01137220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_4495695465f40fd885537d8_01137220',
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
class Block_15951878345f40fd88557c26_16271360 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php
}
}
/* {/block "content"} */
/* {block "content_body"} */
class Block_21043280335f40fd88554267_36549740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_21043280335f40fd88554267_36549740',
  ),
  'content' => 
  array (
    0 => 'Block_15951878345f40fd88557c26_16271360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-content-wrapper bg-transparent m-0">
        <div class="height-10 w-100 shadow-sm px-4 bg-brand-gradient">
            <div class="d-flex align-items-center container p-0">
                <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                    <a href="<?php echo APP_URL;?>
" class="page-logo-link press-scale-down d-flex align-items-center">
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" aria-roledescription="logo">
                        <?php } else { ?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" aria-roledescription="logo">
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                            <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                        <?php } else { ?>
                            <span class="page-logo-text mr-1">CloudOnex</span>
                        <?php }?>
                    </a>
                </div>




            </div>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15951878345f40fd88557c26_16271360', "content", $this->tplIndex);
?>


    </div>
<?php
}
}
/* {/block "content_body"} */
/* {block "script"} */
class Block_13240220815f40fd88558726_20833357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_13240220815f40fd88558726_20833357',
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
