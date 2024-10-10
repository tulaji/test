<?php
/* Smarty version 3.1.36, created on 2021-03-17 17:07:25
  from '/var/www/html/pcrm/ui/theme/default/modal_sms_invoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6051e9f5c65ad1_88466768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0adcd785f1373be2e58a04113180555bd1f6912a' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/modal_sms_invoice.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6051e9f5c65ad1_88466768 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 400px;">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send SMS'];?>
</h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">
                <form class="form-horizontal" id="ib_modal_form">

                    <input type="hidden" id="smsInvoiceId" name="smsInvoiceId" value="<?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>
">

                    <div class="form-group"><label for="from"><?php echo $_smarty_tpl->tpl_vars['_L']->value['From'];?>
</label>
                        <input type="text" name="sms_from" id="sms_from" class="form-control " value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sms_sender_name'];?>
">
                    </div>

                    <div class="form-group"><label for="sms_to"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To'];?>
 </label>
                        <input type="text" name="sms_to" id="sms_to" class="form-control " value="<?php echo $_smarty_tpl->tpl_vars['to']->value;?>
">
                    </div>

                    <div class="form-group"><label for="message"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS'];?>
 </label>
                        <textarea class="form-control" name="message" id="message" rows="4"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>

                        <input type="hidden" name="template_id" id="template_id" value="">

                        <p class="help-block" id="sms-counter">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Remaining'];?>
: <span class="remaining"></span> | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
: <span class="length"></span> | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Messages'];?>
: <span class="messages"></span>
                        </p>
                    </div>

                    <button class="btn btn-primary modal_submit" type="submit" id="btnModalSMSSend"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send'];?>
</button>

                </form>
            </div>
        </div>

    </div>
</div>


<?php }
}
