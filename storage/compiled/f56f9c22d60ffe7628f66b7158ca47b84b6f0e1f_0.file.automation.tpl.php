<?php
/* Smarty version 3.1.36, created on 2021-02-26 06:38:01
  from 'C:\xampp\htdocs\cloudonex\ui\theme\default\automation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6038dd996b0b24_39305337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f56f9c22d60ffe7628f66b7158ca47b84b6f0e1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cloudonex\\ui\\theme\\default\\automation.tpl',
      1 => 1611100325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038dd996b0b24_39305337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_474685726038dd9967edb7_23750826', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18422705216038dd996aef45_22250855', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_474685726038dd9967edb7_23750826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_474685726038dd9967edb7_23750826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automation'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">


                        <div class="form-group">
                            <label for="cron_value"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create the following Cron Job using PHP'];?>
</strong></label>
                            <input id="cron_value" type="text" class="form-control form-control-lg" value="* * * * * cd <?php echo getcwd();?>
 && php clx schedule:run >> /dev/null 2>&1">
                        </div>



                        <table class="table table-hover">
                            <tbody>



                            <tr>
                                <td width="80%">
                                    <label class="font-weight-bold" for="task_automatic_payment_reminder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Automatic Payment Reminder'];?>
</label> <br>

                                </td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" class="clx_switch" id="task_automatic_payment_reminder" <?php if (get_option('task_automatic_payment_reminder') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%">
                                    <label class="font-weight-bold" for="task_daily_accounting_snapshot"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Generate Daily Accounting Snapshot'];?>
</label> <br>

                                </td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" class="clx_switch" id="task_daily_accounting_snapshot" <?php if (get_option('task_daily_accounting_snapshot') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>





                                                                                                                
                            </tbody>
                        </table>



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
class Block_18422705216038dd996aef45_22250855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18422705216038dd996aef45_22250855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('.clx_switch').change(function() {

                let that = $(this);
                let value = 0;
                if(that.prop('checked')){

                    value = 1;

                }
                $.post( base_url+'settings/update_option/', { opt: that.attr('id'), val: value })
                    .done(function() {
                        location.reload();
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
