<?php
/* Smarty version 3.1.36, created on 2020-06-19 11:51:24
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/util_backups_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eecdefc91c2c9_02816048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de958b78a2637e96463815edeca4a962e67ccb75' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/util_backups_files.tpl',
      1 => 1592545321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eecdefc91c2c9_02816048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20222782765eecdefc912b60_90928778', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14931073025eecdefc91bab6_37464990', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_20222782765eecdefc912b60_90928778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20222782765eecdefc912b60_90928778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Backup'];?>
</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/backups"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Database'];?>
</a></li>
                    <li class="active"><a class="nav-link active show" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/backup_files"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Files'];?>
</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <div class="panel-body panel-body-with-border">


                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/do-backup-files" id="btnBackup" class="btn btn-primary add_document waves-effect waves-light"><i class="fal fa-file"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Backup now'];?>
</a>

                            <hr>

                            <div class="row">
                                <div class="col-lg-12">

                                    <?php if (count($_smarty_tpl->tpl_vars['files']->value) > 0) {?>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'value', false, 'file');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                                            <?php if ($_smarty_tpl->tpl_vars['file']->value == '..' || $_smarty_tpl->tpl_vars['file']->value == 'index.html' || $_smarty_tpl->tpl_vars['file']->value == 'task.log') {?>
                                                <?php continue 1;?>
                                            <?php }?>

                                            <div class="file-box" style="margin-bottom: 15px;">
                                                <div class="file">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['file_path'];?>
">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <i class="fa <?php echo $_smarty_tpl->tpl_vars['value']->value['icon_class'];?>
"></i>
                                                        </div>
                                                        <div class="file-name">
                                                            <?php echo $_smarty_tpl->tpl_vars['file']->value;?>

                                                            <br/>
                                                            <small>
                                                                <?php echo $_smarty_tpl->tpl_vars['value']->value['mod_time'];?>


                                                            </small>
                                                        </div>

                                                    </a>


                                                </div>

                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/delete-backup-files/<?php echo str_replace('/',':',$_smarty_tpl->tpl_vars['value']->value['file_path']);?>
" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>

                                            </div>



                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>

                                    <?php }?>






                                </div>
                            </div>



                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_14931073025eecdefc91bab6_37464990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_14931073025eecdefc91bab6_37464990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('#btnBackup').click(function () {
                $('#btnBackup').prop('disabled',true);
            });
        })

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
