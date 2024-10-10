<?php
/* Smarty version 3.1.36, created on 2021-06-10 17:33:14
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\statement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c1ff820aac19_45848019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '837fd928cac4a6e2d368f76e70560c4b7fc94cae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\statement.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1ff820aac19_45848019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103322531060c1ff82081cd1_88972171', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102727486860c1ff820a9706_29424024', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_103322531060c1ff82081cd1_88972171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_103322531060c1ff82081cd1_88972171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['View Statement'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/statement-view" id="tform" role="form">
                            <div class="form-group">
                                <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</label>
                                <select id="account" name="account">
                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose an Account'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>



                            <div class="form-group">
                                <label for="fdate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['From Date'];?>
</label>
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['tdate']->value;?>
" name="fdate" id="fdate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>

                            <div class="form-group">
                                <label for="tdate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To Date'];?>
</label>
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['mdate']->value;?>
" name="tdate" id="tdate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>
                            <div class="form-group">
                                <label for="stype"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                                <select id="stype" name="stype" class="form-control">
                                    <option value="all" selected="selected"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Transactions'];?>
</option>
                                    <option value="credit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Credit'];?>
</option>
                                    <option value="debit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Debit'];?>
</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View Statement'];?>
</button>
                            </div>
                        </form>
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
class Block_102727486860c1ff820a9706_29424024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_102727486860c1ff820a9706_29424024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(function () {

            $("#account").select2();
            $("#cats").select2();
            $("#pmethod").select2();
            $("#payer").select2();
            $('#dp1').datepicker({
                format: 'yyyy-mm-dd'
            });
            $('#dp2').datepicker({
                format: 'yyyy-mm-dd'
            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
