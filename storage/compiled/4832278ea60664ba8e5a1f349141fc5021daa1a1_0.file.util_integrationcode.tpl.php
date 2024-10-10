<?php
/* Smarty version 3.1.36, created on 2020-06-29 11:27:58
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/util_integrationcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5efa087e2b1067_44072371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4832278ea60664ba8e5a1f349141fc5021daa1a1' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/util_integrationcode.tpl',
      1 => 1593420191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efa087e2b1067_44072371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2217456545efa087e2ad596_50359334', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9683005095efa087e2ae016_88847991', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13037359705efa087e2b0863_39663619', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_2217456545efa087e2ad596_50359334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2217456545efa087e2ad596_50359334',
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
class Block_9683005095efa087e2ae016_88847991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9683005095efa087e2ae016_88847991',
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
class Block_13037359705efa087e2b0863_39663619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_13037359705efa087e2b0863_39663619',
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
