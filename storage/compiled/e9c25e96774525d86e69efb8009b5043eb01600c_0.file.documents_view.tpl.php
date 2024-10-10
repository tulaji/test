<?php
/* Smarty version 3.1.36, created on 2020-06-21 16:15:09
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/documents_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eefbfcd2309b3_52852185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9c25e96774525d86e69efb8009b5043eb01600c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/documents_view.tpl',
      1 => 1592567777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eefbfcd2309b3_52852185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9026293255eefbfcd226d54_46719966', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_489797645eefbfcd22fb37_51533825', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_9026293255eefbfcd226d54_46719966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9026293255eefbfcd226d54_46719966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" id="ib_panel">

                <div class="panel-body">

                    <input type="hidden" name="did" id="did" value="<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
">
                    <h3 style="color: #2f96f3;"><?php echo $_smarty_tpl->tpl_vars['doc']->value->title;?>
</h3>
                    <hr>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="is_global" name="is_global" <?php if ($_smarty_tpl->tpl_vars['doc']->value->is_global == '1') {?>checked<?php }?>> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Available for all Customers'];?>

                        </label>
                    </div>

                    <hr>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['doc']->value->file_dl_token;?>
" class="md-btn md-btn-primary waves-effect waves-light"><i class="fal fa-download"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
 </a>

                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'documents','delete')) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
delete/document/<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
/" class="md-btn md-btn-danger waves-effect waves-light"><i class="fal fa-trash"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
 </a>
                    <?php }?>


                    <hr>

                    <?php if ($_smarty_tpl->tpl_vars['ext']->value == 'jpg' || $_smarty_tpl->tpl_vars['ext']->value == 'png' || $_smarty_tpl->tpl_vars['ext']->value == 'gif') {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/docs/<?php echo $_smarty_tpl->tpl_vars['doc']->value->file_path;?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['doc']->value->title;?>
">
                    <?php }?>





                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_489797645eefbfcd22fb37_51533825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_489797645eefbfcd22fb37_51533825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $(document).ready(function () {

                var _url = $("#_url").val();

                var ib_panel = $("#ib_panel");

                var did = $("#did").val();


                $('#is_global').change(function() {

                    ib_panel.block({ message: block_msg });


                    if($(this).prop('checked')){

                        $.post( _url+'documents/set_global/', { did: did, val: "1" })
                            .done(function( data ) {
                                ib_panel.unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'documents/set_global/', { did: did, val: "0" })
                            .done(function( data ) {
                                ib_panel.unblock();
                                location.reload();
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
