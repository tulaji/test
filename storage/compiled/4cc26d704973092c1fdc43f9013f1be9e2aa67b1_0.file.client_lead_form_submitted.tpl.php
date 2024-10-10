<?php
/* Smarty version 3.1.36, created on 2021-01-19 17:59:49
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_lead_form_submitted.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6007646507de97_70228719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cc26d704973092c1fdc43f9013f1be9e2aa67b1' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_lead_form_submitted.tpl',
      1 => 1598098467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6007646507de97_70228719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19872623996007646507cf66_31748291', "content");
?>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/".((string)$_smarty_tpl->tpl_vars['extend']->value).".tpl");
}
/* {block "content"} */
class Block_19872623996007646507cf66_31748291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19872623996007646507cf66_31748291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="flex-1">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">



            <div class="mx-auto" style="max-width: 800px;">
                <div class="card">
                    <div class="card-body">


                        <?php echo $_smarty_tpl->tpl_vars['success_message']->value;?>


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
