<?php
/* Smarty version 3.1.36, created on 2021-03-18 18:53:33
  from '/home/redboxte/public_html/demopos/ui/theme/default/modal_add_contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60535455720b07_56140405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12774c8d5ad9775d842ce7a56ae8860dfb0f75ba' => 
    array (
      0 => '/home/redboxte/public_html/demopos/ui/theme/default/modal_add_contact.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60535455720b07_56140405 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 800px;">

    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Contact'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form class="form-horizontal" id="rform">

                    <div class="form-group"><label for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
</label>
                        <input type="text" id="account" name="account" class="form-control" >
                    </div>

                    <div class="form-group"><label for="company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</label>

                        <input type="text" id="company" name="company" class="form-control">
                    </div>

                    <div class="form-group"><label for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>

                        <input type="text" id="email" name="email" class="form-control" >

                    </div>
                    <div class="form-group"><label for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>

                        <input type="text" id="phone" name="phone" class="form-control" >
                    </div>
                    <div class="form-group"><label for="m_address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

                        <input type="text" id="m_address" name="m_address" class="form-control" >
                    </div>
                    <div class="form-group"><label for="city"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>

                        <input type="text" id="city" name="city" class="form-control" >
                    </div>
                    <div class="form-group"><label for="state"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>

                        <input type="text" id="state" name="state" class="form-control" >
                    </div>
                    <div class="form-group"><label for="zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
 </label>

                        <input type="text" id="zip" name="zip" class="form-control" >
                    </div>
                    <div class="form-group"><label for="country"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>

                        <select name="country" class="country" id="country" class="form-control">
                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                            <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                        </select>
                    </div>


                    <div class="form-group">
                        <button class="btn btn-primary contact_submit" type="submit" id="contact_submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Contact'];?>
</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>






<?php }
}
