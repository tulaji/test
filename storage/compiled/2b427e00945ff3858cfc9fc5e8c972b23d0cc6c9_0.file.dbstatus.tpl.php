<?php
/* Smarty version 3.1.36, created on 2024-10-02 17:31:10
  from 'C:\xampp\htdocs\CRM_FM\ui\theme\default\dbstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66fd3606371e31_34311294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b427e00945ff3858cfc9fc5e8c972b23d0cc6c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRM_FM\\ui\\theme\\default\\dbstatus.tpl',
      1 => 1727860524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd3606371e31_34311294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167553588266fd360634d064_76186831', "head");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141306014666fd360634f1e0_94913925', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_167553588266fd360634d064_76186831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_167553588266fd360634d064_76186831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_141306014666fd360634f1e0_94913925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_141306014666fd360634f1e0_94913925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Database Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['dbsize']->value;?>
  MB </h2>
            <div class="panel-toolbar">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/dbbackup/" class="btn btn-primary"><i class="fal fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download Database Backup'];?>
</a>
            </div>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <div class="table-responsive ">
                    <table class="table table-hover table-striped  sys_table">
                        <thead style="background: #f0f2ff">
                        <tr>
                            <th width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Table Name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rows'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tables']->value, 'tbl');
$_smarty_tpl->tpl_vars['tbl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tbl']->value) {
$_smarty_tpl->tpl_vars['tbl']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['rows'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['size'];?>
 Kb</td>

                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>
                </div>

            </div>



        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
