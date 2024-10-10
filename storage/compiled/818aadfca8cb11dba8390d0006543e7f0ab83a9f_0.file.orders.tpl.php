<?php
/* Smarty version 3.1.36, created on 2021-01-04 10:56:37
  from '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff33ab54bafa6_47018575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '818aadfca8cb11dba8390d0006543e7f0ab83a9f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/orders.tpl',
      1 => 1609775789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff33ab54bafa6_47018575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13161293205ff33ab54b7ca4_17036577', "content");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18161000575ff33ab54b95e0_93846375', "script");
?>

<?php }
/* {block "content"} */
class Block_13161293205ff33ab54b7ca4_17036577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13161293205ff33ab54b7ca4_17036577',
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
class Block_18161000575ff33ab54b95e0_93846375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18161000575ff33ab54b95e0_93846375',
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
wcsuite/app/x_orders').then(function (response) {
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
