<?php
/* Smarty version 3.1.36, created on 2020-12-07 15:27:54
  from '/Users/razib/Documents/valet/business-suite/apps/importfromibilling/views/import_config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fce904a265e19_80905458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '712a08536c8855f708b8b8a66626808dadfae48d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/importfromibilling/views/import_config.tpl',
      1 => 1607372837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fce904a265e19_80905458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17181785675fce904a253955_93813483', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9370167785fce904a2651e8_12669945', "script");
?>

<?php }
/* {block "content"} */
class Block_17181785675fce904a253955_93813483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17181785675fce904a253955_93813483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>iBilling Database Credentials</h4>
                    <div class="hr-line-dashed"></div>
                    <form id="form_save_details" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
importfromibilling/app/save-details/">
                        <div class="form-group">
                            <label>Database Host</label>
                            <input class="form-control" name="import_ibilling_database_host"
                                   <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['import_ibilling_database_host']))) {?>
                                       value="<?php echo $_smarty_tpl->tpl_vars['config']->value['import_ibilling_database_host'];?>
"
                                   <?php }?>
                            >
                        </div>
                        <div class="form-group">
                            <label>Database Username</label>
                            <input class="form-control" name="import_ibilling_database_username"
                                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['import_ibilling_database_username']))) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['config']->value['import_ibilling_database_username'];?>
"
                                    <?php }?>
                            >
                        </div>
                        <div class="form-group">
                            <label>Database Password</label>
                            <input class="form-control" name="import_ibilling_database_password"
                                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['import_ibilling_database_password']))) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['config']->value['import_ibilling_database_password'];?>
"
                                    <?php }?>
                            >
                        </div>
                        <div class="form-group">
                            <label>Database Name</label>
                            <input class="form-control" name="import_ibilling_database_name"
                                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['import_ibilling_database_name']))) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['config']->value['import_ibilling_database_name'];?>
"
                                    <?php }?>
                            >
                        </div>
                        <div class="form-group">
                            <button type="submit" id="btn_save" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4>Import</h4>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="btn-group">

                                <button id="btn_import_prepare" class="btn btn-primary">Prepare</button>

                                <button id="btn_import_transactions" class="btn btn-primary">Import Transactions</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea id="result_area" class="form-control"></textarea>
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
class Block_9370167785fce904a2651e8_12669945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9370167785fce904a2651e8_12669945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            let $form_save_details = $('#form_save_details');
            let $result_area = $('#result_area');
            let $btn_import_transactions = $('#btn_import_transactions');
            let $btn_import_prepare = $('#btn_import_prepare');

            $form_save_details.on('submit',function (event) {
                event.preventDefault();

                $.post(base_url + 'importfromibilling/app/save-details/',$form_save_details.serialize()).done(function () {
                    location.reload();
                });

            });

            $btn_import_transactions.on('click',function () {
                axios.post(base_url + 'importfromibilling/app/import-transactions/').then(function (response) {



                    $result_area.val($result_area.val() + '\n' + response.data.status);
                    $result_area.autoHeight();


                }).catch(function (error) {
                    console.log(error);
                });
            });

            $btn_import_prepare.on('click',function () {
                axios.post(base_url + 'importfromibilling/app/import-prepare/').then(function (response) {



                    $result_area.val($result_area.val() + '\n' + response.data.status);
                    $result_area.autoHeight();


                }).catch(function (error) {
                    console.log(error);
                });
            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
