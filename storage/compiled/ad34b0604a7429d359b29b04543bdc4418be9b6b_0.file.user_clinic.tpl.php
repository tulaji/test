<?php
/* Smarty version 3.1.36, created on 2024-10-05 20:53:07
  from 'C:\xampp\htdocs\CRM_FM\ui\theme\default\user_clinic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670159db145f61_81341884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad34b0604a7429d359b29b04543bdc4418be9b6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRM_FM\\ui\\theme\\default\\user_clinic.tpl',
      1 => 1728141777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670159db145f61_81341884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_803728608670159db11dd00_38684436', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1245962657670159db122e93_53234396', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_902568633670159db1422f5_74741110', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_803728608670159db11dd00_38684436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_803728608670159db11dd00_38684436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        .btn-default:hover,
        .btn-default:focus,
        .btn-default:active,
        .btn-default.active {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }


    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1245962657670159db122e93_53234396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1245962657670159db122e93_53234396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form id="invform" method="post">
        <div class="row" id="ibox_form">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-hdr">
                        <h2>
                            User Clinic Details </h2>
                        <div class="panel-toolbar">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info" id="save_n_close"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save n Close'];?>
</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <form id="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class='row'>
                                            <div class='col-sm-6'>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" id="name" name="user_name" value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="cn">Location</label>
                                                    <input type="text" class="form-control" id="location" name="location" value="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="cn">Google Profile</label>
                                                    <input type="text" class="form-control" id="g_profile" name="g_profile" value="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="cn">Website</label>
                                                    <input type="text" class="form-control" id="website" name="website" value="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="cn">Phoen Number</label>
                                                    <input type="text" class="form-control" id="number" name="number" value="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="cn">Price</label>
                                                    <input type="text" class="form-control" id="price" name="price" value="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="cn">Address</label>
                                                    <textarea type="text" class="form-control" id="adderss" name="adderss"
                                                        value=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_902568633670159db1422f5_74741110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_902568633670159db1422f5_74741110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $("#save_n_close").click(function(e) {
            e.preventDefault();
            $('#ibox_form').block({ message: null });
            var _url = $("#_url").val();
            $.post(_url + 'user_clinic/add-post/', $('#invform').serialize(), function(data) {
                var _url = $("#_url").val();
                window.location = _url + 'user_clinic/view';
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
