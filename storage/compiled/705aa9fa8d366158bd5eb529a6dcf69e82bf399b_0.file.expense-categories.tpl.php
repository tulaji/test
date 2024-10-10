<?php
/* Smarty version 3.1.36, created on 2020-12-08 04:12:20
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/expense-categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fcf4374edd1e9_29251826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '705aa9fa8d366158bd5eb529a6dcf69e82bf399b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/expense-categories.tpl',
      1 => 1596489790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcf4374edd1e9_29251826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5507054985fcf4374ec0604_46900709', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19083945085fcf4374edc609_10310714', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_5507054985fcf4374ec0604_46900709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5507054985fcf4374ec0604_46900709',
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
class Block_19083945085fcf4374edc609_10310714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_19083945085fcf4374edc609_10310714',
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
