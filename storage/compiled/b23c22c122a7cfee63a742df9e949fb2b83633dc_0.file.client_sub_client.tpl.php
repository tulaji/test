<?php
/* Smarty version 3.1.36, created on 2020-06-26 05:50:50
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_sub_client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ef5c4fae65c41_08335838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b23c22c122a7cfee63a742df9e949fb2b83633dc' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_sub_client.tpl',
      1 => 1593165046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef5c4fae65c41_08335838 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 600px;">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['client']->value->account;?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <?php echo $_smarty_tpl->tpl_vars['client']->value->email;?>
 <br>

                <?php if ($_smarty_tpl->tpl_vars['client']->value->phone) {?>
                    <?php echo $_smarty_tpl->tpl_vars['client']->value->phone;?>
 <br>
                <?php }?>

                <div class="hr-line-dashed"></div>

                <?php if ($_smarty_tpl->tpl_vars['client']->value->address) {?>
                    <?php echo $_smarty_tpl->tpl_vars['client']->value->address;?>
 <br>
                    <?php echo $_smarty_tpl->tpl_vars['client']->value->city;?>
 <br>
                    <?php echo $_smarty_tpl->tpl_vars['client']->value->state;?>
 - <?php echo $_smarty_tpl->tpl_vars['client']->value->zip;?>
 <br>
                    <?php echo $_smarty_tpl->tpl_vars['client']->value->country;?>

                <?php }?>


            </div>
        </div>
    </div>
</div>
<?php }
}
