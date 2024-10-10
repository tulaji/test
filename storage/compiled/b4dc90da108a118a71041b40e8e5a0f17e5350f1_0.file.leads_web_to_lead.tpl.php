<?php
/* Smarty version 3.1.36, created on 2021-06-08 14:02:03
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\leads_web_to_lead.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60bf2b03e31064_96611838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4dc90da108a118a71041b40e8e5a0f17e5350f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\leads_web_to_lead.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf2b03e31064_96611838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182171072060bf2b03dafde0_95061398', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178751486060bf2b03db5686_08040670', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132467683760bf2b03e2a510_49269041', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_182171072060bf2b03dafde0_95061398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_182171072060bf2b03dafde0_95061398',
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
class Block_178751486060bf2b03db5686_08040670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_178751486060bf2b03db5686_08040670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Web to Lead'];?>
</h2>
            <div class="panel-toolbar">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
leads/form" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Form'];?>
</a>
            </div>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                <table class="table table-striped w-100" data-order="[[ 0, &quot;desc&quot; ]]" id="clx_datatable">
                    <thead>
                    <tr class="heading">
                        <th>#</th>
                        <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Form Name'];?>
</th>
                        <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Submissions'];?>
</th>
                        <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
</th>
                        <th class="float-right h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                    </tr>


                    </thead>


                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lead_forms']->value, 'lead_form');
$_smarty_tpl->tpl_vars['lead_form']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lead_form']->value) {
$_smarty_tpl->tpl_vars['lead_form']->do_else = false;
?>
                        <tr>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['lead_form']->value->id;?>

                            </td>
                            <td>
                                <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
leads/form/<?php echo $_smarty_tpl->tpl_vars['lead_form']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['lead_form']->value->name;?>
</a>
                            </td>
                            <td>
                                <?php if ((isset($_smarty_tpl->tpl_vars['leads_count']->value[$_smarty_tpl->tpl_vars['lead_form']->value->id]))) {?>
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['leads_count']->value[$_smarty_tpl->tpl_vars['lead_form']->value->id];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                                    <?php } else { ?>
                                    0
                                <?php }?>
                            </td>
                            <td>
                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['lead_form']->value->created_at));?>

                            </td>

                            <td>
                                <div class="btn-group float-right">

                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
leads/form-builder/<?php echo $_smarty_tpl->tpl_vars['lead_form']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Form Builder'];?>
</a>
                                    <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
leads/form-embed/<?php echo $_smarty_tpl->tpl_vars['lead_form']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Embed'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
leads/form/<?php echo $_smarty_tpl->tpl_vars['lead_form']->value->id;?>
/" data-toggle="tooltip" class="btn btn-warning btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i></i> </a>

                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/form/<?php echo $_smarty_tpl->tpl_vars['lead_form']->value->uuid;?>
/" data-toggle="tooltip" class="btn btn-info btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
" data-placement="top"><i class="fal fa-file"></i> </a>


                                    <a class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip confirm_delete" data-toggle="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" id="delete_<?php echo $_smarty_tpl->tpl_vars['lead_form']->value->id;?>
" data-placement="top" href="#"><i class="fal fa-trash-alt"></i></a>
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

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_132467683760bf2b03e2a510_49269041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_132467683760bf2b03e2a510_49269041',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
",
                    },
                }
            );

            let $cloudonex_body = $('#cloudonex_body');

            $cloudonex_body.on('click', '.confirm_delete', function(e){

                e.preventDefault();
                let id = this.id;
                bootbox.confirm("<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
", function(result) {
                    if(result){
                        window.location.href = base_url + "leads/delete-web-to-lead-form/" + id;
                    }
                });


            });



        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
