<?php
/* Smarty version 3.1.36, created on 2021-02-26 06:48:09
  from 'C:\xampp\htdocs\cloudonex\ui\theme\default\util_integrationcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6038dff9925501_13547372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0aca50f3602bc3401658da34d49ca1ada819f21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cloudonex\\ui\\theme\\default\\util_integrationcode.tpl',
      1 => 1611100325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038dff9925501_13547372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5579697556038dff9904d45_30049327', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1661185566038dff9908528_68131107', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11992945596038dff99241f5_33019877', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_5579697556038dff9904d45_30049327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_5579697556038dff9904d45_30049327',
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
class Block_1661185566038dff9908528_68131107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1661185566038dff9908528_68131107',
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
class Block_11992945596038dff99241f5_33019877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_11992945596038dff99241f5_33019877',
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
