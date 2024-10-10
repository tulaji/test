<?php
/* Smarty version 3.1.36, created on 2024-10-02 17:30:34
  from 'C:\xampp\htdocs\CRM_FM\ui\theme\default\automation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66fd35e261f086_77967373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e266bbc186323b4b9a5157ed279b6360d2c96e62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRM_FM\\ui\\theme\\default\\automation.tpl',
      1 => 1727860518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd35e261f086_77967373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89321755766fd35e260f0d4_81421897', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_261697366fd35e261d7a8_76993149', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_89321755766fd35e260f0d4_81421897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_89321755766fd35e260f0d4_81421897',
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
class Block_261697366fd35e261d7a8_76993149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_261697366fd35e261d7a8_76993149',
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
