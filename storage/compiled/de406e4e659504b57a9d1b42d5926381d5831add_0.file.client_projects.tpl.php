<?php
/* Smarty version 3.1.36, created on 2020-09-24 02:39:14
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_projects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f6c3f12b9c5d2_00769837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de406e4e659504b57a9d1b42d5926381d5831add' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_projects.tpl',
      1 => 1599417713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c3f12b9c5d2_00769837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13187875135f6c3f12b73a07_99716411', "content");
?>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_13187875135f6c3f12b73a07_99716411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13187875135f6c3f12b73a07_99716411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Projects'];?>
</h2>

        </div>

    </div>




    <div class="row">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project');
$_smarty_tpl->tpl_vars['project']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->do_else = false;
?>

            <div class="col-lg-4">

                <div class="panel">

                    <div class="panel-container">



                        <div class="panel-content">

                            <div class="d-flex justify-content-between">
                                <h3><span class="h4"><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</span></h3>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                                            </a>
                                                                    </div>
                            </div>



                            <p class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 L7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg>
                                <?php if ($_smarty_tpl->tpl_vars['project']->value->contact_id && (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['project']->value->contact_id]))) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['project']->value->contact_id]->account;?>

                                <?php }?></p>


                            <?php if ($_smarty_tpl->tpl_vars['project']->value->status == 'Completed') {?>
                                <span class="badge badge-outline text-uppercase badge-outline-success mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->status;?>
</span>
                            <?php } else { ?>
                                <span class="badge badge-outline text-uppercase badge-outline-danger mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->status;?>
</span>
                            <?php }?>




                            <?php if ($_smarty_tpl->tpl_vars['project']->value->budget) {?>
                                <p class="mb-2">Budget: <span><?php echo formatCurrency($_smarty_tpl->tpl_vars['project']->value->budget,$_smarty_tpl->tpl_vars['project']->value->currency);?>
</span></p>
                            <?php }?>




                            <p class="text-muted mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->summary;?>
</p>


                            <div class="row">
                                <div class="col mb-3">
                                    <div class="mb-2">
                                        <i class="fal fa-calendar"></i> <strong><span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Date'];?>
</span></strong>
                                    </div>
                                    <span class="badge badge-outline text-uppercase badge-outline-success"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['project']->value->start_date));?>
</span>
                                </div>
                                <div class="col">
                                    <div class="mb-2">
                                        <i class="fal fa-calendar"></i> <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</strong>
                                    </div>
                                    <span class="badge badge-outline text-uppercase badge-outline-danger"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['project']->value->due_date));?>
</span>
                                </div>
                            </div>



                            <?php if ($_smarty_tpl->tpl_vars['project']->value->members) {?>
                                <div class="fs-sm d-flex align-items-center my-3">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['project']->value->members), 'member');
$_smarty_tpl->tpl_vars['member']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->do_else = false;
?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]))) {?>
                                            <a href="javascript:;" class="btn-m-s user-stacked">

                                                <?php if ($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]->img) {?>
                                                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]->img;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" class="profile-image rounded-circle" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]->fullname;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
">
                                                <?php } else { ?>
                                                    <span class="clx-avatar"><?php echo sp_get_contact_image($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]);?>
</span>
                                                <?php }?>

                                            </a>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>


                            <?php if ((isset($_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]))) {?>

                                <p class="mb-2 font-weight-semibold"><?php echo round(($_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['completed']*100)/$_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['total']);?>
% <?php echo $_smarty_tpl->tpl_vars['_L']->value['tasks completed'];?>
. <span class="float-right">
                                                    <?php echo $_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['completed'];?>
/<?php echo $_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['total'];?>
</span></p>


                                <div class="progress mb-3" style="height: 7px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['completed']*100)/$_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['total']);?>
%;">
                                    </div>
                                </div>

                            <?php }?>






                                                                                                                                                                                                                                



                        </div>




                    </div>



                </div>

            </div>

            <?php
}
if ($_smarty_tpl->tpl_vars['project']->do_else) {
?>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
</h2>
                    </div>
                </div>
            </div>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </div>


<?php
}
}
/* {/block "content"} */
}
