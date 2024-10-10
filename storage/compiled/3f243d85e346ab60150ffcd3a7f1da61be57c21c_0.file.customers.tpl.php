<?php
/* Smarty version 3.1.36, created on 2021-01-19 08:04:22
  from '/Users/razib/Documents/valet/business-suite/apps/shopify/views/customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6006d8d6252f08_21740447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f243d85e346ab60150ffcd3a7f1da61be57c21c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/shopify/views/customers.tpl',
      1 => 1610385124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6006d8d6252f08_21740447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9243339826006d8d624f6d9_75378857', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10947044056006d8d62520e7_90034046', "script");
?>

<?php }
/* {block "content"} */
class Block_9243339826006d8d624f6d9_75378857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9243339826006d8d624f6d9_75378857',
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

                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-4">Customers</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
shopify/app/sync-customers" class="btn btn-primary">Sync customers</a>
                        </div>
                    </div>

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
class Block_10947044056006d8d62520e7_90034046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_10947044056006d8d62520e7_90034046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>
        $(function () {

            var $clxLoader = $('#clxLoader');
            var $clxContent = $('#clxContent');

            axios.get('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
shopify/app/x_customers').then(function (response) {
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
