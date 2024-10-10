<?php
/* Smarty version 3.1.36, created on 2021-06-09 14:02:33
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\pmethods-manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c07ca1963620_84871543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2a13c53facb2595262c3874146ebad87e5ba99d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\pmethods-manage.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c07ca1963620_84871543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126297171660c07ca194e4c3_42147033', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_126297171660c07ca194e4c3_42147033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_126297171660c07ca194e4c3_42147033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Payment Methods'];?>
</h3>
                </div>
                <div class="panel-body">
                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pmethods-edit-post">
                        <div class="form-group">
                            <label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>

                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
">
                        </div>



                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                        <button type="submit" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>
                </div>
            </div>
        </div> <!-- Widget-1 end-->
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</h3>
                </div>
                <div class="panel-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pmethods-delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-danger"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>

                </div>
            </div>
        </div>
        <!-- Widget-2 end-->
    </div>
<?php
}
}
/* {/block "content"} */
}
