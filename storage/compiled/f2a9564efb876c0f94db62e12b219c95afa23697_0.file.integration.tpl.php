<?php
/* Smarty version 3.1.36, created on 2021-01-04 07:46:20
  from '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/integration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff30e1c0e88d9_27857693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2a9564efb876c0f94db62e12b219c95afa23697' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/integration.tpl',
      1 => 1609764376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff30e1c0e88d9_27857693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11203777195ff30e1c0e40b8_87973645', "content");
?>

<?php }
/* {block "content"} */
class Block_11203777195ff30e1c0e40b8_87973645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11203777195ff30e1c0e40b8_87973645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
wcsuite/app/save-integration">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" <?php if ($_smarty_tpl->tpl_vars['integration']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->name;?>
" <?php }?> >
                        </div>

                        <div class="form-group">
                            <label for="url">Store Url</label>
                            <input type="text" class="form-control" name="url" id="url" <?php if ($_smarty_tpl->tpl_vars['integration']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->url;?>
" <?php }?>>
                            <span class="help-block">e.g. https://www.example.com</span>
                        </div>

                        <div class="form-group">
                            <label for="key">Consumer key</label>
                            <input type="text" class="form-control" name="key" id="key" <?php if ($_smarty_tpl->tpl_vars['integration']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->key;?>
" <?php }?>>
                        </div>

                        <div class="form-group">
                            <label for="secret">Secret</label>
                            <input type="text" class="form-control" name="secret" id="secret" <?php if ($_smarty_tpl->tpl_vars['integration']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->secret;?>
" <?php }?>>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['integration']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->id;?>
">
                        <?php } else { ?>
                            <input type="hidden" name="id" value="0">
                        <?php }?>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
<?php
}
}
/* {/block "content"} */
}
