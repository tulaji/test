<?php
/* Smarty version 3.1.36, created on 2021-03-19 17:31:57
  from '/var/www/html/pcrm/ui/theme/default/sms_template_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_605492b59f45e6_78192709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59360af42cfd01ff977754ff13d5eb00d345310d' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/sms_template_edit.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605492b59f45e6_78192709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193899161605492b59eaf46_89040450', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_576480167605492b59f3074_21847067', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_193899161605492b59eaf46_89040450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_193899161605492b59eaf46_89040450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="mx-auto" style="max-width: 600px; width: 100%;">
        <div class="panel">
            <div class="panel-hdr">
                <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS Templates'];?>
</h2>
            </div>

            <div class="panel-container">
                <div class="panel-content">
                    <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/edit_post/" method="post" id="spForm">


                        <div class="form-group"><label for="message">SMS </label>
                            <textarea class="form-control" name="message" id="message" rows="4"><?php echo $_smarty_tpl->tpl_vars['template']->value->sms;?>
</textarea>

                            <input type="hidden" name="template_id" id="template_id" value="<?php echo $_smarty_tpl->tpl_vars['template']->value->id;?>
">

                            <p class="help-block" id="sms-counter">
                                Remaining: <span class="remaining"></span> | Length: <span class="length"></span> | Messages: <span class="messages"></span>
                            </p>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" id="save"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </div>
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
class Block_576480167605492b59f3074_21847067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_576480167605492b59f3074_21847067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>
        $(function () {




            $('#message').countSms('#sms-counter');

            var $save = $("#save");

            $save.on('click', function (e) {
                e.preventDefault();

                $save.prop('disabled',true);

                $.post(base_url + 'sms/init/edit_post/', $('#spForm').serialize()).done(function (data) {

                    toastr.success(data);
                    $save.prop('disabled',false);


                });

            })
        })
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
