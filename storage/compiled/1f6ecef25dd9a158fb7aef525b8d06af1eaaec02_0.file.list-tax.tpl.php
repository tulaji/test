<?php
/* Smarty version 3.1.36, created on 2021-06-19 16:31:25
  from '/var/www/html/ShreeEng_Test/ui/theme/default/list-tax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60cdce85582ba5_84844533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f6ecef25dd9a158fb7aef525b8d06af1eaaec02' => 
    array (
      0 => '/var/www/html/ShreeEng_Test/ui/theme/default/list-tax.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cdce85582ba5_84844533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69446819860cdce855659f3_60571918', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22078991660cdce85581796_25144377', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_69446819860cdce855659f3_60571918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_69446819860cdce855659f3_60571918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Taxes'];?>
 </h2>
            <div class="panel-toobar">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add-tax/" id="item_add" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Tax'];?>
 </a>
            </div>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <table class="table table-bordered table-hover sys_table">
                    <thead>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax Rate'];?>
</th>

                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                        <tr id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
">
                            <td> <?php if ($_smarty_tpl->tpl_vars['ds']->value['is_default'] == '1') {?> <label class="label label-success label-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Default'];?>
</label> <?php }?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
 </td>
                            <td>


                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['rate'] == '0.000' || $_smarty_tpl->tpl_vars['ds']->value['rate'] == '0.00') {?>
                                    0%
                                <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['rate'] == '5.000') {?>
                                    5%
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['rate'];?>
%
                                <?php }?>



                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit-tax/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-secondary"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
 </a>


                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['is_default'] != '1') {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/tax-make-default/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info"><i class="fal fa-star"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Make Default'];?>
 </a>
                                <?php }?>
                                <button type="button" id="t<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger cdelete"><i class="fal fa-trash-alt"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
 </button>
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
    <input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_22078991660cdce85581796_25144377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_22078991660cdce85581796_25144377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tax/delete/" + id;
                    }
                });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
