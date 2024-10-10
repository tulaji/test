<?php
/* Smarty version 3.1.36, created on 2021-03-19 17:30:57
  from '/var/www/html/pcrm/ui/theme/default/sms_templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_605492796b3b29_42613590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f895d7b092fe2f01bb7b4647c746da0d31fea716' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/sms_templates.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605492796b3b29_42613590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1967139305605492796a53d4_09639854', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_757971137605492796b2197_31698308', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1967139305605492796a53d4_09639854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1967139305605492796a53d4_09639854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS Templates'];?>
</h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">

                <table class="table table-condensed table-hover table-bordered" id="clx_datatable">
                    <thead>
                    <tr>


                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                        <th width="70%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Message'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
                        <tr>

                            <td><?php echo $_smarty_tpl->tpl_vars['template']->value->tpl;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['template']->value->sms;?>
</td>
                            <td> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/edit/<?php echo $_smarty_tpl->tpl_vars['template']->value->id;?>
" class="btn btn-sm btn-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a> </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_757971137605492796b2197_31698308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_757971137605492796b2197_31698308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
",
                    },
                }
            );
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
