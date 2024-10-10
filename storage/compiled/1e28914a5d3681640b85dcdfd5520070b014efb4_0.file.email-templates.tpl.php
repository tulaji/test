<?php
/* Smarty version 3.1.36, created on 2021-06-09 13:05:03
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\email-templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c06f278b0f51_43671658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e28914a5d3681640b85dcdfd5520070b014efb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\email-templates.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c06f278b0f51_43671658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180458569360c06f27877a37_85159579', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95196532560c06f2787a420_91159109', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196132232660c06f278ad454_92536881', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_180458569360c06f27877a37_85159579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_180458569360c06f27877a37_85159579',
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
        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}

        .text-danger{
            color: #F6365B!important;
        }
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_95196532560c06f2787a420_91159109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_95196532560c06f2787a420_91159109',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Templates'];?>

                    </h2>

                    <div class="panel-toolbar">
                        <a href="#" id="add_new_template" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Template'];?>
</a>
                    </div>




                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="mail-box" id="application_ajaxrender">

                            <table class="table table-hover table-striped" id="tbl_email_templates">
                                <thead>
                                <tr class="heading">
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                    <th class="text-right" style="width: 80px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>


                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr class="read">

                                        <td><a  class="ve h6" id="f<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" href="#"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['tplname']);?>
</a>  </td>
                                        <td><a  class="ve h6 text-info" id="s<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['ds']->value['subject'];?>
</a></td>
                                        <td class="text-right">
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['send'] == 'Yes') {?>
                                                <span class="badge badge-success"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
 </span>
                                            <?php } else { ?>
                                                <span class="badge badge-danger"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Inactive'];?>
 </span>
                                            <?php }?>
                                            &nbsp;
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['core'] == 'Yes') {?>
                                                <span class="badge badge-warning"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['System'];?>
 </span>
                                            <?php } else { ?>
                                                <span class="badge badge-info"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom'];?>
 </span>
                                            <?php }?>

                                        </td>

                                        <td class="text-right">

                                            <div class="btn-group">
                                                <a href="javascript:void(0)" class="btn btn-primary btn-sm ve" id="b<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fal fa-file-alt"></i></a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/clone_email_template/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Clone'];?>
"><i class="fal fa-file-edit"></i></a>


                                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['core'] != 'Yes') {?>
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm cdelete" id="ed<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash-alt"></i></a>
                                                <?php }?>

                                            </div>

                                        </td>

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
class Block_196132232660c06f278ad454_92536881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_196132232660c06f278ad454_92536881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            $('#tbl_email_templates').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
",
                    },
                }
            );

            var $modal = $('#cloudonex_body');
            var sysrender = $modal;

            var _url = base_url;

            var page_refresh = false;



            sysrender.on('click', '.ve', function(e){
                e.preventDefault();
                var vid = this.id;
                var id = vid.replace("f", "");
                id = id.replace("s", "");
                id = id.replace("b", "");



                $.fancybox.open({
                    src  : base_url + 'settings/email-templates-view/' + id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                    }
                });

            });


            $modal.on('click', '#update', function(){

                page_refresh = true;

                $.post(base_url + 'settings/update-email-template', {


                    message: $('#message').val(),
                    subject: $('#subject').val(),
                    tplname: $('#tplname').val(),

                    id: $('#sid').val(),
                    send: $('#send').val()

                }).done(function (data) {
                    location.reload();
                });

            });



            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "delete/email-templates/" + id + '/';
                    }
                });
            });


            $("#add_new_template").on('click', function(e) {
                e.preventDefault();

                $.fancybox.open({
                    src  : base_url + 'settings/email-templates-view/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                    }
                });

            });

        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
