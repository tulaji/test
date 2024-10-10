<?php
/* Smarty version 3.1.36, created on 2021-03-01 04:22:31
  from '/var/www/html/pcrm/ui/theme/default/lead_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_603cb2570c99b7_90149458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13bd23dce90fb5124ae0a14cf837b42a8a71d910' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/lead_form.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603cb2570c99b7_90149458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1626928352603cb2570ad254_81403312', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1452727052603cb2570c7b36_71823013', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1626928352603cb2570ad254_81403312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1626928352603cb2570ad254_81403312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="max-width: 600px; width: 100%;" class="mx-auto">
        <div class="panel">
            <div class="panel-hdr">
                <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Form'];?>
</h2>
            </div>
            <div class="panel-container">
                <div class="panel-content">

                    <form id="main_form" method="post">

                        <div class="form-group">
                            <label for="inputName"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                            <input class="form-control" name="name"
                                   <?php if ($_smarty_tpl->tpl_vars['selected_form']->value) {?>
                                       value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['selected_form']->value->name;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"
                                   <?php }?>
                                   data-pristine-required id="inputName">
                        </div>

                        <div class="form-group">
                            <label for="source_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Assign to'];?>
</label>
                            <select class="custom-select" name="admin_id" id="admin_id" data-pristine-required>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, User::select(array('id','fullname','username'))->get(), 'assign_to_user');
$_smarty_tpl->tpl_vars['assign_to_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['assign_to_user']->value) {
$_smarty_tpl->tpl_vars['assign_to_user']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['assign_to_user']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['selected_form']->value) {?>  <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['user']->value->id == $_smarty_tpl->tpl_vars['assign_to_user']->value->id) {?> selected <?php }?> <?php }?> ><?php echo $_smarty_tpl->tpl_vars['assign_to_user']->value->fullname;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="source_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Source'];?>
</label>
                            <select class="custom-select" name="source_id" id="source_id" data-pristine-required>
                                <option>--</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lead_sources']->value, 'lead_source');
$_smarty_tpl->tpl_vars['lead_source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lead_source']->value) {
$_smarty_tpl->tpl_vars['lead_source']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['lead_source']->value->id;?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['selected_form']->value) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['selected_form']->value->lead_source_id === $_smarty_tpl->tpl_vars['lead_source']->value->id) {?>
                                                    selected <?php }?>
                                            <?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['lead_source']->value->sname;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="submit_button_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit button text'];?>
</label>
                            <input class="form-control" name="submit_button_name" <?php if ($_smarty_tpl->tpl_vars['selected_form']->value) {?>
                                value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['selected_form']->value->submit_button_name;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"
                            <?php }?> id="submit_button_name" data-pristine-required>
                        </div>

                        <div class="form-group">
                            <label for="success_message"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Success message'];?>
</label>
                            <textarea class="form-control"

                                      name="success_message" data-pristine-required id="success_message"><?php if ($_smarty_tpl->tpl_vars['selected_form']->value) {
ob_start();
echo $_smarty_tpl->tpl_vars['selected_form']->value->success_message;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;
}?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="webhook_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Webhook URL'];?>
 <small>(<?php echo $_smarty_tpl->tpl_vars['_L']->value['optional'];?>
)</small></label>
                            <input class="form-control" id="webhook_url" name="webhook_url"
                                    <?php if ($_smarty_tpl->tpl_vars['selected_form']->value) {?>
                                        value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['selected_form']->value->webhook_url;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
"
                                    <?php }?>>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['selected_form']->value) {?>

                            <input type="hidden" name="form_id" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['selected_form']->value->id;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
">

                        <?php }?>

                        <div class="form-group">
                            <button id="btn_submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Next'];?>
</button>
                        </div>



                    </form>




                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_1452727052603cb2570c7b36_71823013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1452727052603cb2570c7b36_71823013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            $('#success_message').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            let $main_form = $('#main_form');
            let $btn_submit = $('#btn_submit');

            var form = document.getElementById("main_form");
            var pristine = new Pristine(form);

            $main_form.on('submit',function (e) {
                e.preventDefault();

                if(pristine.validate())
                {
                    $btn_submit.prop('disabled',true);

                    $.post( base_url + 'leads/save-form', $main_form.serialize())
                        .done(function( data ) {

                            window.location = base_url + data.url;

                        }).fail(function (error) {
                        $btn_submit.prop('disabled',false);
                        toastr.error(error.responseText);
                    });
                }


            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
