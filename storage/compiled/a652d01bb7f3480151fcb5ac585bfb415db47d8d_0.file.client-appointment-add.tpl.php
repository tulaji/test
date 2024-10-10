<?php
/* Smarty version 3.1.36, created on 2021-01-08 18:15:30
  from '/Users/razib/Documents/valet/business-suite/apps/appointment/views/client-appointment-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff8e792c1f909_67286624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a652d01bb7f3480151fcb5ac585bfb415db47d8d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/appointment/views/client-appointment-add.tpl',
      1 => 1610147728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff8e792c1f909_67286624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19722916905ff8e792c10c66_85923963', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19810924465ff8e792c12a39_84928252', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9224618415ff8e792c1f097_70671534', "script");
?>

<?php }
/* {block "head"} */
class Block_19722916905ff8e792c10c66_85923963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19722916905ff8e792c10c66_85923963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;

        }
        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, {
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
class Block_19810924465ff8e792c12a39_84928252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19810924465ff8e792c12a39_84928252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">

                    <h2>New Appointment</h2>

                    <hr>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appointment/client/save">
                        <?php if ($_smarty_tpl->tpl_vars['selected_appointment']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_appointment']->value->id;?>
">
                        <?php }?>

                        <div class="form-group">
                            <label for="title"><span class="h5">Title</span></label>
                            <input class="form-control" name="title" id="title" <?php if ($_smarty_tpl->tpl_vars['selected_appointment']->value) {?>
                                value="<?php echo $_smarty_tpl->tpl_vars['selected_appointment']->value->title;?>
"
                                    <?php }?>>
                        </div>

                        <div class="row " id="start_time_container">
                            <div class="col-md-4">
                                <label for="startdate"> <span class="h6">Start</span></label>
                                <input class="form-control" name="start_time"  <?php if ($_smarty_tpl->tpl_vars['selected_appointment']->value) {?>
                                    value="<?php echo $_smarty_tpl->tpl_vars['selected_appointment']->value->start_time;?>
"
                                <?php } else { ?>
                                    value="<?php echo date('Y-m-d');?>
"
                                <?php }?>  value="<?php echo date('Y-m-d');?>
"  id="start_time" data-date-format="yyyy-mm-dd" data-auto-close="true">


                            </div>
                            <div class="col-md-4">
                                <label for="enddate"><span class="h6">End</span></label>
                                <input class="form-control" name="end_time"
                                        <?php if ($_smarty_tpl->tpl_vars['selected_appointment']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['selected_appointment']->value->end_time;?>
"
                                        <?php } else { ?>
                                            value="<?php echo date('Y-m-d',strtotime('+15 days'));?>
"
                                        <?php }?>

                                       id="end_time" value="<?php echo date('Y-m-d',strtotime('+15 days'));?>
" data-date-format="yyyy-mm-dd" data-auto-close="true">

                            </div>
                        </div>

                        <div class="row mt-4">

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="Owner"><span class="h6"><span class="h6">Admin</span></span></label>

                                    <select class="form-control" name="admin_id" id="owner">
                                        <option value="0">None</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admins']->value, 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['admin']->value->id;?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['selected_appointment']->value) {?>

                                                        <?php if ($_smarty_tpl->tpl_vars['selected_appointment']->value->admin_id === $_smarty_tpl->tpl_vars['admin']->value->id) {?>
                                                            selected
                                                        <?php }?>

                                                    <?php }?>
                                            ><?php echo $_smarty_tpl->tpl_vars['admin']->value->fullname;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="Related"><span class="h6"><span class="h6">Event Type</span></span></label>

                                    <select name="type_id" id="event-type"  class="form-control">

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event_types']->value, 'event_type');
$_smarty_tpl->tpl_vars['event_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event_type']->value) {
$_smarty_tpl->tpl_vars['event_type']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['event_type']->value->id;?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['selected_appointment']->value) {?>

                                                        <?php if ($_smarty_tpl->tpl_vars['selected_appointment']->value->type_id === $_smarty_tpl->tpl_vars['event_type']->value->id) {?>
                                                            selected
                                                        <?php }?>

                                                    <?php }?>

                                            ><?php echo $_smarty_tpl->tpl_vars['event_type']->value->title;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="contents"><span class="h6">Notes/Description</span></label>
                            <textarea class="form-control" rows="5" id="contents" name="description"><?php if ($_smarty_tpl->tpl_vars['selected_appointment']->value) {
echo $_smarty_tpl->tpl_vars['selected_appointment']->value->description;
}?></textarea>
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
/* {block "script"} */
class Block_9224618415ff8e792c1f097_70671534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9224618415ff8e792c1f097_70671534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/flatpickr"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            let $start_time = $("#start_time");
            $start_time.flatpickr({
                inline: true,
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
            let $end_time = $("#end_time");
            $end_time.flatpickr({
                inline: true,
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });

            $("#event-type").select2();
            $("#owner").select2();
            $("#related").select2();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
