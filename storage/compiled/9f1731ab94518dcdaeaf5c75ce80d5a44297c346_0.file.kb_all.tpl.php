<?php
/* Smarty version 3.1.36, created on 2020-11-10 07:50:08
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/kb_all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5faa8c80bcd3a9_53802832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1731ab94518dcdaeaf5c75ce80d5a44297c346' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/kb_all.tpl',
      1 => 1599980161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faa8c80bcd3a9_53802832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2713593325faa8c80baedb4_40965336', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13024286785faa8c80bb19c7_19970638', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2436180535faa8c80bcc156_94964282', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_2713593325faa8c80baedb4_40965336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2713593325faa8c80baedb4_40965336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_13024286785faa8c80bb19c7_19970638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13024286785faa8c80bb19c7_19970638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="row">
        <div class="col-md-12">


            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <div>
                            <table class="table table-striped filter-table" id="tbl_articles">
                                <thead>
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>
                                    <?php if ($_smarty_tpl->tpl_vars['can_edit']->value || $_smarty_tpl->tpl_vars['can_delete']->value) {?>
                                        <th width="110px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                    <?php }?>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>

                                    <tr>

                                        <td><a href="javascript:void(0)" id="k<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="kb_view"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</span></a> </td>

                                        <?php if ($_smarty_tpl->tpl_vars['can_edit']->value || $_smarty_tpl->tpl_vars['can_delete']->value) {?>

                                            <td class="text-right">


                                                <?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kb/a/edit/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="btn btn-warning btn-icon"><i class="fal fa-pencil"></i> </a>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['can_delete']->value) {?>
                                                    <button class="btn btn-danger btn-icon" onclick="deleteKb(<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
)" id="da<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><i class="fal fa-trash-alt"></i> </button>
                                                <?php }?>

                                            </td>

                                        <?php }?>



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


        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_2436180535faa8c80bcc156_94964282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2436180535faa8c80bcc156_94964282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function deleteKb(kbid) {
            bootbox.confirm(_L['are_you_sure'], function(result) {
                if(result){
                    window.location.href = base_url + "kb/a/delete/" + kbid;
                }
            });
        }

        $(function() {

            $(".kb_view").on('click',function (e) {
                e.preventDefault();
                iModal.ajax(base_url + "kb/a/a_view/"+this.id, $(this).html());
            });




            $('#tbl_articles').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
",
                    },
                }
            );


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
