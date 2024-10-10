<?php
/* Smarty version 3.1.36, created on 2024-10-02 20:50:47
  from 'C:\xampp\htdocs\CRM_FM\ui\theme\default\appearance_editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_66fd64cfd0ded1_68205583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c3b6091d8762bd490910effaf9bcf7ecf2f130d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRM_FM\\ui\\theme\\default\\appearance_editor.tpl',
      1 => 1727860517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd64cfd0ded1_68205583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68228965066fd64cfcfa7c4_69375632', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159009193566fd64cfd0a695_34346540', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_68228965066fd64cfcfa7c4_69375632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_68228965066fd64cfcfa7c4_69375632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row" id="ib_editor_canvas">
        <div class="col-lg-2">
            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="form-group">
                            <label for="editor_file"><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</label>
                            <select name="editor_file" id="editor_file" class="custom-select">
                                <option value="no_file" selected="selected" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select File to Edit'];?>
</option>
                                <option value="language.php"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Language File'];?>
</option>
                                <option value="invoice_printer.php"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Layout Print'];?>
</option>
                                <option value="invoice_pdf.php"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Layout PDF'];?>
</option>


                            </select>
                        </div>
                        <button type="submit" id="ib_btn_save" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10">


            <div id="editor" style="min-height: 800px;"></div>



        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_159009193566fd64cfd0a695_34346540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_159009193566fd64cfd0a695_34346540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/ace.min.js" integrity="sha256-qCCcAHv/Z0u7K344shsZKUF2NR+59ooA3XWRj0LPGIQ=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/ext-modelist.min.js" integrity="sha256-6IKCjSdCwtsKc0jk/TvazSJQEBEZ0JdCgDVu8f7rXNE=" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function() {

            var _url = $("#_url").val();

            var $ib_editor_canvas = $("#ib_editor_canvas");

            ace.config.set("basePath", 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/');

            var editor = ace.edit("editor");
            editor.setTheme("ace/theme/monokai");
            editor.getSession().setMode("ace/mode/php");

            var $editor_file = $("#editor_file");

            var $ib_btn_save = $("#ib_btn_save");


            $editor_file.change(function() {

                $ib_editor_canvas.block({ message: block_msg });

                $.get( _url + "editor/" + $editor_file.val() + "/", function( data ) {
                    $ib_editor_canvas.unblock();
                    editor.$blockScrolling = Infinity;
                    editor.setValue(data, -1);
                    editor.setValue(data, 1);
                });




            });


            $ib_btn_save.on('click', function(e) {

                e.preventDefault();
                $ib_editor_canvas.block({ message: block_msg });

                var codes = editor.getValue();

                $.post( _url + "editor/save/", { file: $editor_file.val(), codes: codes })
                    .done(function( data ) {
                        $ib_editor_canvas.unblock();
                        toastr.success(data);

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
