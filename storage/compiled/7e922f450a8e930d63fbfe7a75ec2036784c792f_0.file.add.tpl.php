<?php
/* Smarty version 3.1.36, created on 2020-12-09 20:44:36
  from '/Users/razib/Documents/valet/business-suite/apps/notes/views/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fd17d840f5561_50368530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e922f450a8e930d63fbfe7a75ec2036784c792f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/notes/views/add.tpl',
      1 => 1607564673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd17d840f5561_50368530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19055905185fd17d840f36a0_74349980', "content");
?>

<?php }
/* {block "content"} */
class Block_19055905185fd17d840f36a0_74349980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19055905185fd17d840f36a0_74349980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">

                    <h3>Add Note</h3>

                    <hr>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/app/save">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" id="title">
                        </div>

                        <div class="form-group">
                            <label for="contents">Contents</label>
                            <textarea class="form-control" rows="10" id="contents" name="contents"></textarea>
                        </div>

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
