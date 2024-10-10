<?php
/* Smarty version 3.1.36, created on 2020-12-09 20:48:17
  from '/Users/razib/Documents/valet/business-suite/apps/notes/views/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fd17e613648b2_44126864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc22c27e5235cd13089306f9cd204146c0c41fb5' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/notes/views/edit.tpl',
      1 => 1607564710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd17e613648b2_44126864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17841927195fd17e61361117_69891082', "content");
?>

<?php }
/* {block "content"} */
class Block_17841927195fd17e61361117_69891082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17841927195fd17e61361117_69891082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">

                    <h3><?php echo $_smarty_tpl->tpl_vars['note']->value->title;?>
</h3>

                    <hr>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/app/save">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['note']->value->title;?>
">
                        </div>

                        <div class="form-group">
                            <label for="contents">Contents</label>
                            <textarea class="form-control" rows="10" id="contents" name="contents"><?php echo $_smarty_tpl->tpl_vars['note']->value->contents;?>
</textarea>
                        </div>

                        
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['note']->value->id;?>
">

                        <button class="btn btn-primary" type="submit">Save</button>

                    </form>


                </div>
            </div>
        </div>



    </div>



<?php
}
}
/* {/block "content"} */
}
