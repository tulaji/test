<?php
/* Smarty version 3.1.36, created on 2020-08-22 08:17:32
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_lead_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f410cdc147f46_71734833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f79ce8025c31fe641c103a0f66ca9abf17e21a2' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_lead_form.tpl',
      1 => 1598098649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f410cdc147f46_71734833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17998575365f410cdc13a088_35681919', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11363461155f410cdc1475e5_15503313', 'script');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/".((string)$_smarty_tpl->tpl_vars['extend']->value).".tpl");
}
/* {block "content"} */
class Block_17998575365f410cdc13a088_35681919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17998575365f410cdc13a088_35681919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if (!$_smarty_tpl->tpl_vars['embed']->value) {?>
        <div class="flex-1">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">



        <div class="mx-auto" style="max-width: 800px;">
        <div class="card">
        <div class="card-body">
    <?php }?>


                        <form id="main_form" method="post" style="width: 100%">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_data']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>

                                <?php if ($_smarty_tpl->tpl_vars['data']->value->type === 'paragraph') {?>
                                    <p><?php echo $_smarty_tpl->tpl_vars['data']->value->label;?>
</p>
                                <?php } elseif ($_smarty_tpl->tpl_vars['data']->value->type === 'header') {?>
                                    <h2><?php echo $_smarty_tpl->tpl_vars['data']->value->label;?>
</h2>
                                <?php } elseif ($_smarty_tpl->tpl_vars['data']->value->type === 'text') {?>
                                    <div class="form-group">
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->label;?>
</label>
                                        <input type="<?php echo $_smarty_tpl->tpl_vars['data']->value->subtype;?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['data']->value->required) {?>
                                                    data-pristine-required
                                                <?php }?>
                                               class="<?php echo $_smarty_tpl->tpl_vars['data']->value->className;?>
" id="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
"  >
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['data']->value->type === 'select') {?>
                                    <div class="form-group">
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->label;?>
</label>
                                        <select class="<?php echo $_smarty_tpl->tpl_vars['data']->value->className;?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
" id="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
" aria-label="">
                                            <?php if ($_smarty_tpl->tpl_vars['data']->value->required) {?>
                                                data-pristine-required
                                            <?php }?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value->values, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value->value;?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value->label;?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </select>

                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['data']->value->type === 'textarea') {?>
                                    <div class="form-group">
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->label;?>
</label>
                                        <textarea id="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value->required) {?>
                                                data-pristine-required
                                            <?php }?>></textarea>
                                    </div>
                                <?php }?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <div class="form-group">
                                <input type="hidden" name="form_id" value="<?php echo $_smarty_tpl->tpl_vars['lead_form']->value->uuid;?>
">

                                <?php if (!empty($_smarty_tpl->tpl_vars['embed']->value)) {?>
                                    <input type="hidden" name="embed" value="yes">
                                <?php }?>

                                <button class="btn btn-primary" id="btn_submit"  type="submit"><?php echo $_smarty_tpl->tpl_vars['lead_form']->value->submit_button_name;?>
</button>
                            </div>



                        </form>


    <?php if (!$_smarty_tpl->tpl_vars['embed']->value) {?>

        </div>
        </div>
        </div>

        </div>
        </div>
    <?php }?>


<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_11363461155f410cdc1475e5_15503313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_11363461155f410cdc1475e5_15503313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            var form = document.getElementById("main_form");
            var pristine = new Pristine(form);

            let $main_form = $('#main_form');
            let $btn_submit = $('#btn_submit');

            $main_form.on('submit',function (e) {
                e.preventDefault();

                if(pristine.validate())
                {
                    $btn_submit.prop('disabled',true);

                    $.post( base_url + 'client/save-form', $main_form.serialize())
                        .done(function( data ) {

                            window.location = base_url + data.url;

                        }).fail(function (error) {
                        $btn_submit.prop('disabled',false);
                        toastr.error(error.responseText);
                    });
                }


            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
