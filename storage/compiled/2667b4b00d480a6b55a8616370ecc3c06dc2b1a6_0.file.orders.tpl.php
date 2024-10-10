<?php
/* Smarty version 3.1.36, created on 2021-01-19 08:04:25
  from '/Users/razib/Documents/valet/business-suite/apps/shopify/views/orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6006d8d947cc41_09333515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2667b4b00d480a6b55a8616370ecc3c06dc2b1a6' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/shopify/views/orders.tpl',
      1 => 1610388198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6006d8d947cc41_09333515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19940479456006d8d9479097_30133969', "content");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15399361456006d8d947b627_53643505', "script");
?>

<?php }
/* {block "content"} */
class Block_19940479456006d8d9479097_30133969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19940479456006d8d9479097_30133969',
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
                    <h3>Orders</h3>
                    <div class="text-center" id="clxLoader">
                        <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>
                    </div>

                    <div id="clxContent">

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
class Block_15399361456006d8d947b627_53643505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_15399361456006d8d947b627_53643505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['app_view_path']->value)."/includes/base_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php echo '<script'; ?>
>
        $(function () {

            var $clxLoader = $('#clxLoader');
            var $clxContent = $('#clxContent');

            axios.get('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
shopify/app/x_orders').then(function (response) {
                $clxLoader.hide();
                $clxContent.html(response.data);

                $('#clx_datatable').dataTable(
                    {
                        responsive: true,
                        lengthChange: false,
                    }
                );

            }).catch(function (reason) {
                console.log(reason);
            })

        })
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
