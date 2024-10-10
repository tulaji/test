<?php
/* Smarty version 3.1.36, created on 2020-08-06 09:28:23
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/settings_expense_types.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2c0577afaf27_50236411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb17c2b7609cdc5619a20b000e162a6e1fc1b54e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/settings_expense_types.tpl',
      1 => 1591351508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2c0577afaf27_50236411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18628765465f2c0577af3348_45146647', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1896166205f2c0577af97d7_64954582', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_18628765465f2c0577af3348_45146647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18628765465f2c0577af3348_45146647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Types'];?>
</h2>

                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a href="#" class="btn btn-success" id="add_new_expense_type"><i class="fal fa-plus"></i> Add New Expense Type</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reorder/expense_types/" class="btn btn-primary"><i class="fal fa-arrows"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reorder'];?>
</a>
                        </div>
                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <table class="table table-striped table-bordered">
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['e']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['g']->value['name'];?>
</td>

                                    <td>
                                        <a href="#" class="btn btn-warning edit_expense_type" id="e<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['g']->value['name'];?>
"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

                                        <a href="javascript:;" id="d_<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" class="btn btn-danger cdelete"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>

                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </table>
                    </div>





                </div>
            </div>



        </div>



    </div>

    <input type="hidden" name="_msg_add_new_expense_type" id="_msg_add_new_expense_type" value="Add New Expense Type">
    <input type="hidden" name="_msg_expense_type" id="_msg_expense_type" value="Expense Type">
    <input type="hidden" name="_msg_edit" id="_msg_edit" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
">
    <input type="hidden" name="_msg_ok" id="_msg_ok" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['OK'];?>
">
    <input type="hidden" name="_msg_cancel" id="_msg_cancel" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1896166205f2c0577af97d7_64954582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1896166205f2c0577af97d7_64954582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(function () {
            var _url = $("#_url").val();








            var _msg_add_new_expense_type = $("#_msg_add_new_expense_type").val();
            var _msg_expense_type = $("#_msg_expense_type").val();
            var _msg_edit = $("#_msg_edit").val();
            var _msg_ok = $("#_msg_ok").val();
            var _msg_cancel = $("#_msg_cancel").val();


            var ib_form_bootbox = "<form method=\"post\" onsubmit=\"return false;\">\n    <div class=\"form-group\">\n        <div class=\"col-xs-12\">\n            <div class=\"form-group\">\n      <label for=\"expense_type\">" + _msg_expense_type + "</label>\n           <input class=\"form-control\" type=\"text\" id=\"expense_type\" name=\"expense_type\">\n    </div>\n        </div>\n    </div>\n\n</form>";


            var box =   bootbox.dialog({
                    title: _msg_add_new_expense_type,
                    message: ib_form_bootbox,
                    buttons: {
                        success: {
                            label: "Save",
                            className: "btn-primary",
                            callback: function () {
                                // var name = $('#name').val();
                                // var answer = $("input[name='awesomeness']:checked").val();
                                // Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");

                                var expense_type_val = $('#expense_type').val();

                                $.post(  _url + "settings/add_expense_type/", { expense_type: expense_type_val })
                                    .done(function( data ) {

                                        if ($.isNumeric(data)) {

                                            location.reload();

                                        }

                                        else {
                                            bootbox.alert(data);
                                        }

                                    });


                            }
                        }
                    },
                    show: false
                }
            );





            $("#add_new_expense_type").click(function(e){

                e.preventDefault();

                box.modal('show');


            });


            box.on("shown.bs.modal", function() {

                var expense_type = $('#expense_type');
                setTimeout(function(){
                    expense_type.focus();
                }, 1000);

            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/expense_type/" + id;
                    }
                });
            });


            $(".edit_expense_type").click(function (e) {
                e.preventDefault();

                var eid = this.id;

                // alert(eid);

                var e_expense_type = $( this ).attr( "data-name" );





                bootbox.prompt({
                    title: _msg_edit,
                    value: e_expense_type,
                    buttons: {
                        'cancel': {
                            label: _msg_cancel
                        },
                        'confirm': {
                            label: _msg_ok
                        }
                    },
                    callback: function(result) {
                        if (result === null) {

                        } else {
                            // alert(result);
                            $.post(  _url + "settings/e_expense_type_edit/", { id: eid, e_expense_type: result })
                                .done(function( data ) {
                                    location.reload();
                                });
                        }
                    }
                });

            });


        })
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
