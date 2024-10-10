<?php
/* Smarty version 3.1.36, created on 2020-08-22 08:42:47
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/leads_form_embed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f4112c7df9871_78931326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf4aacf5148099758dce47f7c865516e5d270ac0' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/leads_form_embed.tpl',
      1 => 1598100165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4112c7df9871_78931326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21335874635f4112c7df65b2_11349408', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9671683795f4112c7df91f4_20632241', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_21335874635f4112c7df65b2_11349408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21335874635f4112c7df65b2_11349408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="max-width: 1000px; width: 100%;" class="mx-auto">
        <div class="panel">
            <div class="panel-hdr">
                <h2><?php echo $_smarty_tpl->tpl_vars['lead_form']->value->name;?>
</h2>

            </div>
            <div class="panel-container">
                <div class="panel-content">

                    <div class="form-group">
                        <label for="direct_link"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Direct Link'];?>
</label>
                        <input type="text" class="form-control mb-3" id="direct_link" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/form/<?php echo $_smarty_tpl->tpl_vars['lead_form']->value->uuid;?>
">
                    </div>

                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Embed'];?>
</h3>

                    <div class="panel-tag">
                        <textarea class="form-control" onClick="this.setSelectionRange(0, this.value.length)" rows="10"><?php ob_start();
echo $_smarty_tpl->tpl_vars['embed_code']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</textarea>
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
class Block_9671683795f4112c7df91f4_20632241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9671683795f4112c7df91f4_20632241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {



        });

    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'script'} */
}
