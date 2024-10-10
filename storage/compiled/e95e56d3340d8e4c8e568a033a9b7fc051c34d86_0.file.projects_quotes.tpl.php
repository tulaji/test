<?php
/* Smarty version 3.1.36, created on 2021-04-01 15:45:44
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\projects_quotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60659d50afd989_37560758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95e56d3340d8e4c8e568a033a9b7fc051c34d86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\projects_quotes.tpl',
      1 => 1617272141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60659d50afd989_37560758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83461477460659d50a8d183_88368108', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125216315560659d50af9c20_76700459', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "project_content"} */
class Block_83461477460659d50a8d183_88368108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_83461477460659d50a8d183_88368108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row mb-3">
        <div class="col">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
</h2>
        </div>

      <!--   <div class="col text-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/new/1/0/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
" class="btn btn-primary">New Quote</a>
        </div> -->



    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover" id="clx_datatable">
                <thead>
                <tr>
                            <th>#</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                            <th width="30%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Stage'];?>
</th>

                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                </thead>
                <tbody>

                       

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quotes']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->iteration = 0;
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
$_smarty_tpl->tpl_vars['ds']->iteration++;
$__foreach_ds_0_saved = $_smarty_tpl->tpl_vars['ds'];
?>
                            <tr>
                                <td data-value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-order="<?php echo $_smarty_tpl->tpl_vars['ds']->iteration;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a> </td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['userid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><strong><?php echo $_smarty_tpl->tpl_vars['ds']->value['subject'];?>
</strong></a> </td>
                                <td class="amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['datecreated']));?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['validuntil']));?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Dead') {?>
                                        <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Lost') {?>
                                        <span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Accepted') {?>
                                        <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Draft') {?>
                                        <span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['stage'] == 'Delivered') {?>
                                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</span>
                                    <?php } else { ?>
                                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['ds']->value['stage'];?>
</span>
                                    <?php }?>

                                </td>

                                <td class="text-right">
                                    <div class="btn-group">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
" data-placement="top"><i class="fal fa-file"></i> </a>

                                       <!--  <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/listhistory/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success btn-icon waves-effect waves-themed has-tooltip" data-title="History" data-placement="top"><i class="fal fa-eye"></i> </a> -->

                                       <!--  <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-warning btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i> </a> -->
                                      <!--   <a href="#" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip cdelete" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash"></i> </a> -->




                                    </div>

                                </td>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['ds'] = $__foreach_ds_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>



            </table>
        </div>
    </div>



<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_125216315560659d50af9c20_76700459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_125216315560659d50af9c20_76700459',
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
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
