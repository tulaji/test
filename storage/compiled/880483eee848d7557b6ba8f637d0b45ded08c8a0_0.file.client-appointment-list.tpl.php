<?php
/* Smarty version 3.1.36, created on 2020-12-28 06:39:15
  from '/Users/razib/Documents/valet/business-suite/apps/appointment/views/client-appointment-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe9c3e35ad2e2_91212110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '880483eee848d7557b6ba8f637d0b45ded08c8a0' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/appointment/views/client-appointment-list.tpl',
      1 => 1608241687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe9c3e35ad2e2_91212110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8962077485fe9c3e35a6805_68109143', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13509852285fe9c3e35a80c3_01791787', "content");
?>



<?php }
/* {block "head"} */
class Block_8962077485fe9c3e35a6805_68109143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_8962077485fe9c3e35a6805_68109143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
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
class Block_13509852285fe9c3e35a80c3_01791787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13509852285fe9c3e35a80c3_01791787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row mb-3">

        <div class="col-md-12">


            <div class="card">
                <div class="card-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appointment/client/schedule-an-appointment" class="btn btn-primary add_event waves-effect waves-light">New Appointment</a>

                </div>

            </div>
        </div>



    </div>

    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="bold">Appointment Title</th>

                                <th class="text-right bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['appointments']->value, 'appointment');
$_smarty_tpl->tpl_vars['appointment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['appointment']->value) {
$_smarty_tpl->tpl_vars['appointment']->do_else = false;
?>
                                <tr>
                                    <td>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appointment/client/edit/<?php echo $_smarty_tpl->tpl_vars['appointment']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['appointment']->value->title;?>
</a>

                                    </td>

                                    <td class="float-right btn-group">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appointment/client/edit/<?php echo $_smarty_tpl->tpl_vars['appointment']->value->id;?>
" class="btn btn-info">Edit</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appointment/client/delete/<?php echo $_smarty_tpl->tpl_vars['appointment']->value->id;?>
" class="btn btn-danger">Delete</a>
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




<?php
}
}
/* {/block "content"} */
}
