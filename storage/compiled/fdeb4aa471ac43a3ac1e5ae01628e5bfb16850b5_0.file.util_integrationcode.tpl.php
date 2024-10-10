<?php
/* Smarty version 3.1.36, created on 2024-10-02 17:32:26
  from 'C:\xampp\htdocs\CRM_FM\ui\theme\default\util_integrationcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66fd3652db40e5_10039574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdeb4aa471ac43a3ac1e5ae01628e5bfb16850b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRM_FM\\ui\\theme\\default\\util_integrationcode.tpl',
      1 => 1727860544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd3652db40e5_10039574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94386882766fd3652da0cc7_25501341', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211816918466fd3652da2756_65138958', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69015659266fd3652db2c56_80011828', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_94386882766fd3652da0cc7_25501341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_94386882766fd3652da0cc7_25501341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/themes/prism.min.css" />
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_211816918466fd3652da2756_65138958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_211816918466fd3652da2756_65138958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-8 col-xs-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Integration Code'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Login'];?>
</h4>
                        <pre><code class="language-html"><?php echo $_smarty_tpl->tpl_vars['form_client_login']->value;?>
</code></pre>
                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Registration'];?>
</h4>
                        <pre><code class="language-html"><?php echo $_smarty_tpl->tpl_vars['form_client_register']->value;?>
</code></pre>
                    </div>


                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_69015659266fd3652db2c56_80011828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_69015659266fd3652db2c56_80011828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/prism.min.js"><?php echo '</script'; ?>
>

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
