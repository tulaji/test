<?php
/* Smarty version 3.1.36, created on 2021-06-09 12:49:39
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\expense-categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c06b8ba8e060_54017322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7116f9af17d95ff63614355a6b383ce057e16e8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\expense-categories.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c06b8ba8e060_54017322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166327454960c06b8ba71ae1_81922067', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197675291160c06b8ba8c3a8_96979308', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_166327454960c06b8ba71ae1_81922067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_166327454960c06b8ba71ae1_81922067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Categories'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/expense-categories-post">
                            <div class="form-group">
                                <label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>




                            <button type="submit" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </form>
                    </div>

                </div>
            </div>
        </div> <!-- Widget-1 end-->
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Categories'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <span id="resp"><?php echo $_smarty_tpl->tpl_vars['_L']->value['drag_n_drop_help'];?>
</span>
                        <ol class="rounded-list" id="sorder">


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                <li id='recordsArray_<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
'><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/categories-manage/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </ol>
                    </div>



                </div>
            </div>
        </div>
        <!-- Widget-2 end-->
    </div> <!-- Row end-->


    <!-- Row end-->


    <!-- Row end-->
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_197675291160c06b8ba8c3a8_96979308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_197675291160c06b8ba8c3a8_96979308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $(function() {
                $("#sorder").sortable({ opacity: 0.6, cursor: 'move', update: function() {
                        var order = $(this).sortable("serialize") + '&action=sys_cats';
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
