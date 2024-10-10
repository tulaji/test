<?php
/* Smarty version 3.1.36, created on 2021-06-08 11:54:12
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\contacts_drive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60bf0d0cafcef6_38154095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9f4503ecba9d00db00122f93b8f85b722449a4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\contacts_drive.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf0d0cafcef6_38154095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135533871760bf0d0cac50f8_41984097', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62680165560bf0d0cafbe38_00755497', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_135533871760bf0d0cac50f8_41984097 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_135533871760bf0d0cac50f8_41984097',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="panel">
                <div class="panel-hdr">
                    <h2>Files uploaded by Customers</h2>
                </div>


                <div class="panel-container">
                    <div class="panel-content">
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group mb-4">
                                <div class="input-group">

                                    <input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..."/>

                                </div>

                            </div>
                        </form>
                        <table class="table table-bordered table-hover sys_table footable" id="footable_tbl"  data-filter="#foo_filter" data-page-size="50">



                            <?php if ($_smarty_tpl->tpl_vars['files']->value->count() > 0) {?>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>

                                    <tr>

                                        <td>

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/<?php echo $_smarty_tpl->tpl_vars['file']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['file']->value->file_dl_token;?>
/"><?php if ($_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'jpg' || $_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'png' || $_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'gif') {?>
                                                    <i class="fal fa-file-image-o"></i>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'pdf') {?>
                                                    <i class="fal fa-file-pdf-o"></i>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['file']->value->file_mime_type == 'zip') {?>
                                                    <i class="fal fa-file-archive-o"></i>
                                                <?php } else { ?>
                                                    <i class="fal fa-file"></i>
                                                <?php }?> <?php echo $_smarty_tpl->tpl_vars['file']->value->title;?>
</a>

                                            <br>

                                            <p style="margin-top: 10px;">

                                                <?php if ((isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['file']->value->cid][0]['account']))) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
:  <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['file']->value->cid;?>
"><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['file']->value->cid][0]['account'];?>
</a> |
                                                <?php }?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Uploaded at'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['file']->value->created_at));?>


                                            </p>



                                        </td>



                                    </tr>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>

                                <tfoot>
                                <tr>
                                    <td>
                                        <ul class="pagination">
                                        </ul>
                                    </td>
                                </tr>
                                </tfoot>

                            <?php } else { ?>

                                <tr>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>

                                    </td>
                                </tr>

                            <?php }?>



                        </table>
                    </div>





                </div>
            </div>
        </div>



    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_62680165560bf0d0cafbe38_00755497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_62680165560bf0d0cafbe38_00755497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            var footable_tbl = $("#footable_tbl");

            footable_tbl.footable();


        })

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
