<?php
/* Smarty version 3.1.36, created on 2021-03-03 15:59:38
  from '/var/www/html/pcrm/ui/theme/default/settings_currencies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_603f6512e74ed1_07100084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd3728ef3c6b87528eb05670332e24e7159055de' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/settings_currencies.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603f6512e74ed1_07100084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1928673783603f6512e5e434_80523934', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1093432417603f6512e71bd6_87543555', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1928673783603f6512e5e434_80523934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1928673783603f6512e5e434_80523934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-hdr">
                    <h2>Currencies</h2>
                    <div class="panel-toolbar">

                        <a href="#" class="btn btn-success" id="add_currency"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Currency'];?>
</a>


                    </div>
                </div>

                <div class="panel-container">

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency Code'];?>
</th>
                                                                        <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Base Conversion Rate'];?>
</th>
                                    <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                    <tr data-id="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
">
                                        <td> <a class="cedit" id="ae<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
</a>
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] == $_smarty_tpl->tpl_vars['currency']->value['cname']) {?>
                                                <br>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Base Currency'];?>

                                            <?php }?>
                                        </td>
                                                                                <td><?php echo $_smarty_tpl->tpl_vars['currency']->value['rate'];?>
</td>
                                        <td class="text-right">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
" id="be<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
" class="btn btn-primary cedit" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-pencil"></i> </a>
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] != $_smarty_tpl->tpl_vars['currency']->value['cname']) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/make_base_currency/<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
/" class="btn btn-primary" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Make Base Currency'];?>
"><i class="fal fa-star"></i> </a>
                                            <?php }?>

                                            <a href="#" class="btn btn-danger cdelete" id="c<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash-alt"></i> </a>
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
class Block_1093432417603f6512e71bd6_87543555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1093432417603f6512e71bd6_87543555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function() {

            var $modal = $('#cloudonex_body');

            $('[data-toggle="tooltip"]').tooltip();

            var _url = $("#_url").val();

            $('#add_currency').on('click', function(e){

                e.preventDefault();


                $.fancybox.open({
                    src  :  base_url + 'settings/modal_add_currency/',
                    type : 'ajax',
                    opts : {

                    },
                });





            });


            $modal.on('change','.currencyCode',function () {
                $('#selectedCurrency').html("1" + $('#iso_code').val());
            });


            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();


                $.post( base_url + "settings/add_currency_post/", $("#ib_modal_form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {

                            toastr.error(data);
                        }

                    });

            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/currency/" + id + '/';
                    }
                });
            });


            $(".cedit").click(function (e) {
                e.preventDefault();
                var id = this.id;

                $.fancybox.open({
                    src  :  base_url + 'settings/modal_add_currency/'+ id + '/',
                    type : 'ajax',
                    opts : {

                    },
                });


            });





        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
