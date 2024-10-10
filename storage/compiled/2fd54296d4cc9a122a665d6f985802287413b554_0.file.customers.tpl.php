<?php
/* Smarty version 3.1.36, created on 2021-01-04 10:48:39
  from '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff338d7b5a640_95505069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd54296d4cc9a122a665d6f985802287413b554' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/customers.tpl',
      1 => 1609775310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff338d7b5a640_95505069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13457219405ff338d7b57a11_71755984', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13300668295ff338d7b59b57_32202501', "script");
?>

<?php }
/* {block "content"} */
class Block_13457219405ff338d7b57a11_71755984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13457219405ff338d7b57a11_71755984',
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
                            <h3>Customers</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
wcsuite/app/sync-customers" class="btn btn-primary">Sync customers</a>
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
class Block_13300668295ff338d7b59b57_32202501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_13300668295ff338d7b59b57_32202501',
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
wcsuite/app/x_customers').then(function (response) {
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
