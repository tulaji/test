<?php
/* Smarty version 3.1.36, created on 2020-06-18 09:01:26
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_task_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eeb65a63b3043_45491453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23b14259c352851871b1a4d6d791b2ad9ff96df5' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_task_view.tpl',
      1 => 1592485037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeb65a63b3043_45491453 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 800px;">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['d']->value->title;?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <div class="row">


                    <div class="col-md-12">

                        <input type="hidden" id="task_id" name="task_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
">
                        <a href="javascript:void(0)" class="btn btn-danger c_delete" id="d_<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                        <a href="javascript:void(0)" class="btn btn-warning c_edit" id="e_<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                        <hr>



                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</h4>
                                <hr>
                                <?php if ($_smarty_tpl->tpl_vars['d']->value->description == '') {?>
                                    <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
</p>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value->description;?>

                                <?php }?>
                            </div>
                            <div class="col-md-6 text-right">

                                <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
:</strong> <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value->due_date));?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['contact']->value) {?>
                                    <p><strong>Related customer:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
</a></p>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['ticket']->value) {?>
                                    <p><strong>Ticket:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['ticket']->value->tid;?>
</a></p>
                                <?php }?>

                            </div>
                        </div>



                    </div>



                </div>
            </div>
        </div>
    </div>
</div>



<?php }
}
