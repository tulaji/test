<?php
/* Smarty version 3.1.36, created on 2020-06-22 15:26:31
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax-edit-custom-field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ef105e745ea60_19471121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68514588f1dd97cdff16b0636ea2e5bfccb6bf66' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax-edit-custom-field.tpl',
      1 => 1592853770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef105e745ea60_19471121 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Custom Field'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" name="edit_form" id="edit_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/customfields-post">
                            <div class="form-group">
                                <label for="fieldname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Field Name'];?>
</label>
                                <input type="text" class="form-control" id="fieldname" name="fieldname" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fieldname'];?>
">
                            </div>

                            <div class="form-group">
                                <label for="fieldtype"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Field Type'];?>
</label>
                                <select class="form-control" name="fieldtype" id="fieldtype">

                                    <option value="text" <?php if (($_smarty_tpl->tpl_vars['d']->value['fieldtype']) == 'text') {?>selected=""<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Text Box'];?>
</option>
                                    <option value="password" <?php if (($_smarty_tpl->tpl_vars['d']->value['fieldtype']) == 'password') {?>selected=""<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</option>
                                    <option value="dropdown" <?php if (($_smarty_tpl->tpl_vars['d']->value['fieldtype']) == 'dropdown') {?>selected=""<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop Down'];?>
</option>
                                    <option value="textarea" <?php if (($_smarty_tpl->tpl_vars['d']->value['fieldtype']) == 'textarea') {?>selected=""<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Text Area'];?>
</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                                <input type="text" class="form-control" id="description" name="description" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['description'];?>
">
                                <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Optional Description help'];?>
</span>
                            </div>
                            <div class="form-group">
                                <label for="validation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Validation'];?>
</label>
                                <input type="text" class="form-control" id="validation" name="validation" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['regexpr'];?>
">
                                <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Regular Expression Validation'];?>
</span>
                            </div>
                            <div class="form-group">
                                <label for="options"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Options'];?>
</label>
                                <input type="text" class="form-control" id="options" name="options" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fieldoptions'];?>
">
                                <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Comma Separated List'];?>
</span>
                            </div>

                            <div class="form-group">
                                <label for="options"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Show in View Invoice'];?>
</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="showinvoice" id="showInvoiceYes" value="Yes" <?php if (($_smarty_tpl->tpl_vars['d']->value['showinvoice']) == 'Yes') {?> checked<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>

                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="showinvoice" id="showInvoiceNo" value="No" <?php if (($_smarty_tpl->tpl_vars['d']->value['showinvoice']) == 'No') {?> checked<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>

                                    </label>
                                </div>

                            </div>

                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">

                            <div class="form-group">
                                <button type="button" class="btn btn-primary" id="edit_submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
