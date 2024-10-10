<?php
/* Smarty version 3.1.36, created on 2020-06-19 02:23:36
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_edit_activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eec59e88907d6_41651013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2b550913bd5981f51a991dfd663ae919ee9dfad' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_edit_activity.tpl',
      1 => 1592547812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec59e88907d6_41651013 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="max-width: 800px;" class="mx-auto">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <section class="activity-post mb-xlg">
                    <form method="get" action="/" id="ib_modal_edit_activity_form">
                        <textarea name="message_text" id="edit_activity_message" class="edit_activity"  data-plugin-textarea-autosize="" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Activity'];?>
..." rows="1" style="overflow: hidden; word-wrap: break-word; resize: none; height: 200px;"><?php echo $_smarty_tpl->tpl_vars['d']->value->msg;?>
</textarea>
                        <input type="hidden" id="edit_activity_type" name="edit_activity_type" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->icon;?>
">
                        <input type="hidden" id="edit_activity_id" name="edit_activity_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
">


                    </form>
                    <div class="compose-box-footer">
                        <ul class="compose-toolbar">
                            <li class="clickable <?php if ($_smarty_tpl->tpl_vars['d']->value->icon == 'fal fa-envelope') {?>action-active<?php }?>"><a href="#"><i class="fal fa-envelope"></i></a></li>
                            <li class="clickable <?php if ($_smarty_tpl->tpl_vars['d']->value->icon == 'fal fa-phone') {?>action-active<?php }?>"><a href="#"><i class="fal fa-phone"></i></a></li>
                            <li class="clickable <?php if ($_smarty_tpl->tpl_vars['d']->value->icon == 'fal fa-paper-plane') {?>action-active<?php }?>"><a href="#"><i class="fal fa-paper-plane"></i></a></li>
                            <li class="clickable <?php if ($_smarty_tpl->tpl_vars['d']->value->icon == 'fal fa-file-pdf') {?>action-active<?php }?>"><a href="#"><i class="fal fa-file-pdf"></i></a></li>
                            <li class="clickable <?php if ($_smarty_tpl->tpl_vars['d']->value->icon == 'fal fa-life-ring') {?>action-active<?php }?>"><a href="#"><i class="fal fa-life-ring"></i></a></li>
                            <li class="clickable <?php if ($_smarty_tpl->tpl_vars['d']->value->icon == 'fal fa-credit-card') {?>action-active<?php }?>"><a href="#"><i class="fal fa-credit-card"></i></a></li>
                            <li class="clickable <?php if ($_smarty_tpl->tpl_vars['d']->value->icon == 'fal fa-location-arrow') {?>action-active<?php }?>"><a href="#"><i class="fal fa-location-arrow"></i></a></li>
                            <li class="clickable <?php if ($_smarty_tpl->tpl_vars['d']->value->icon == 'fal fa-reply') {?>action-active<?php }?>"><a href="#"><i class="fal fa-reply"></i></a></li>
                            <li class="clickable <?php if ($_smarty_tpl->tpl_vars['d']->value->icon == 'fal fa-tasks') {?>action-active<?php }?>"><a href="#"><i class="fal fa-tasks"></i></a></li>
                            <li class="clickable <?php if ($_smarty_tpl->tpl_vars['d']->value->icon == 'fal fa-truck') {?>action-active<?php }?>"><a href="#"><i class="fal fa-truck"></i></a></li>
                        </ul>

                    </div>
                </section>

                <div class="form-group mt-3">
                    <button class="btn btn-primary modal_activity_submit" type="submit" id="modal_activity_submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                </div>

            </div>
        </div>
    </div>
</div>



<?php }
}
