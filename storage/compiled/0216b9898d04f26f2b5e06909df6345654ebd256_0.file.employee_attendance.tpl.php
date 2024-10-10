<?php
/* Smarty version 3.1.36, created on 2020-11-29 14:07:52
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/employee_attendance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fc3f18833f253_11474245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0216b9898d04f26f2b5e06909df6345654ebd256' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/employee_attendance.tpl',
      1 => 1592518163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc3f18833f253_11474245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11738512675fc3f1883358f6_59431509', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13672915875fc3f18833db23_30838104', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_11738512675fc3f1883358f6_59431509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11738512675fc3f1883358f6_59431509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Attendance'];?>
</h2>
                    <div class="panel-toolbar">
                        <div class="form-group">
                            <input class="form-control" id="inputDate" style="min-width: 200px;" name="date"
                                   data-date-format="yyyy-mm-dd" data-auto-close="true"  value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
                        </div>
                    </div>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark Attendance'];?>
</h3>
                        <p><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['date']->value));?>
</p>
                        <div class="hr-line-dashed"></div>

                        <div class="col-md-12">


                            <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">
                                <thead>
                                <tr>
                                    <th width="200px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                    <th width="100px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Note'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->name;?>
 </td>
                                        <td>

                                            <label class="switch s-icons s-outline s-outline-primary">
                                                <input type="checkbox" id="attendance_<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
" class="attendance_checkbox"
                                                <?php if ((isset($_smarty_tpl->tpl_vars['attendances']->value[$_smarty_tpl->tpl_vars['employee']->value->id])) && $_smarty_tpl->tpl_vars['attendances']->value[$_smarty_tpl->tpl_vars['employee']->value->id]->is_present) {?>
                                                    checked
                                                <?php }?>
                                                >
                                                <span class="slider round"></span>
                                            </label>

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="form-control attendance_note" id="attendance_note_<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['attendances']->value[$_smarty_tpl->tpl_vars['employee']->value->id]))) {?>
                                                value="<?php echo $_smarty_tpl->tpl_vars['attendances']->value[$_smarty_tpl->tpl_vars['employee']->value->id]->note;?>
"
                                                        <?php }?>>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>


                            </table>

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
class Block_13672915875fc3f18833db23_30838104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_13672915875fc3f18833db23_30838104',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            var $inputDate = $('#inputDate');

            $inputDate.datepicker();

            $inputDate.on('change',function () {
                window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hrm/attendance/' + $inputDate.val()
            });

            $('.attendance_checkbox').on('change', function() {
                let employee_id = this.id;
                let present;
                if(this.checked){
                    present = 'yes';
                }
                else{
                    present = 'no';
                }

                $.post( base_url + "hrm/set-attendance", { employee_id: employee_id, present: present, date: $inputDate.val() })
                    .done(function( data ) {
                        toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Updated'];?>
');
                    });
            });


            $('.attendance_note').on('change', function() {
                let employee_id = this.id;
                let note = $(this).val();

                $.post( base_url + "hrm/set-attendance-note", { employee_id: employee_id, note: note, date: $inputDate.val() })
                    .done(function( data ) {
                        toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Updated'];?>
');
                    });
            });


        })
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
