<?php
/* Smarty version 3.1.36, created on 2021-06-09 12:49:22
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\reorder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c06b7a695b41_31182447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9fa2d446fe6cd26aa38c21235d5f4bc00aa61ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\reorder.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c06b7a695b41_31182447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89585345460c06b7a67a803_05418051', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205298068360c06b7a693a58_23941583', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_89585345460c06b7a67a803_05418051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_89585345460c06b7a67a803_05418051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reorder'];?>
 <?php echo $_smarty_tpl->tpl_vars['ritem']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Positions'];?>
</h2>

                </div>

                <div class="panel-container">
                    <div class="panel-content">


                        <h3 id="resp"><?php echo $_smarty_tpl->tpl_vars['_L']->value['drag_n_drop_help'];?>
</h3>
                        <div class="hr-line-dashed"></div>
                        <ol class="rounded-list" id="sorder">


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                <li id='recordsArray_<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
'><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['ds']->value[$_smarty_tpl->tpl_vars['display_name']->value];?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </ol>

                    </div>
                </div>

            </div>



        </div>



    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_205298068360c06b7a693a58_23941583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_205298068360c06b7a693a58_23941583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $(function() {
                $("#sorder").sortable({ opacity: 0.6, cursor: 'move', update: function() {
                        var order = $(this).sortable("serialize") + '&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
';
                        $("#resp").html('Saving...');
                        $.post("<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reorder/reorder-post", order, function(theResponse){
                            $("#resp").html(theResponse);
                        });
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
