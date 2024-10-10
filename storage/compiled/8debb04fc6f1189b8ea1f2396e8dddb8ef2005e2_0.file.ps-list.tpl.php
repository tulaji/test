<?php
/* Smarty version 3.1.36, created on 2020-11-30 15:17:06
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/ps-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fc55342996801_42325533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8debb04fc6f1189b8ea1f2396e8dddb8ef2005e2' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/ps-list.tpl',
      1 => 1606767421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc55342996801_42325533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114887455fc5534298e6e8_75987637', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16091196725fc55342992fa8_53820816', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_114887455fc5534298e6e8_75987637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_114887455fc5534298e6e8_75987637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['List'];?>
 <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Products'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
 <?php }?></h2>
                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-new" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-new" class="btn btn-success"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>
</a>
                        </div>
                    </div>
                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <div class="input-group"><input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
" id="txtsearch" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" id="search" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button> </span></div>
                        <input type="hidden" id="stype" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                        <div class="project-list mt-md">
                            <div id="progressbar">
                            </div>

                            <div id="application_ajaxrender">


                            </div>


                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_16091196725fc55342992fa8_53820816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_16091196725fc55342992fa8_53820816',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;

        $(document).ready(function () {




            var upload_resp;



            function updateDiv(){
                //   $("#application_ajaxrender").html('Loading...');
                $('#ibox_form').block({ message: null });




                var btnsearch = $("#search");

                //btnsearch.html(_L['Searching']);
                //btnsearch.addClass("btn-danger");
                var _url = $("#_url").val();
                $.post(_url + 'search/ps/', {

                    txtsearch: $('#txtsearch').val(),
                    stype: $('#stype').val()

                })
                    .done(function (data) {
                        var sbutton = $("#search");
                        var result =  $("#application_ajaxrender");
                        //sbutton.html('Search');
                        //sbutton.removeClass("btn-danger");

                        $('#ibox_form').unblock();
                        result.html(data);
                        result.show();
                    });

            }

            updateDiv();

            $("#search").click(function (e) {
                e.preventDefault();
                updateDiv();
            });
            var $modal = $('#cloudonex_body');
            var sysrender = $('#application_ajaxrender');
            sysrender.on('click', '.cdelete', function(e){
                e.preventDefault();
                var id = this.id;
                var lan_msg = $("#_lan_are_you_sure").val();
                bootbox.confirm(lan_msg, function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/ps/" + id + '/';
                    }
                });
            });

            sysrender.on('click', '.cedit', function(e){
                e.preventDefault();
                var vid = this.id;
                var id = vid.replace("e", "");
                id = id.replace("t", "");


                $.fancybox.open({
                    src  :  base_url + 'ps/edit-form/' + id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('.amount').autoNumeric('init', {

                                aSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
',
                                dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                                aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                                pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                                vMax: '9999999999999999.00',
                                vMin: '-9999999999999999.00',

                                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['decimal_places_products_and_services']))) {?>
                                mDec: $config['decimal_places_products_and_services'],
                                <?php }?>

                            });

                            $('#description').redactor(
                                {
                                    minHeight: 200 // pixels
                                }
                            );

                          //  new Clipboard('.ib_btn_copy');

                            var $file_link = $("#file_link");
                            var ib_submit = $("#update");

                            var ib_file = new Dropzone("#upload_container",
                                {
                                    url: base_url + "ps/upload/",
                                    maxFiles: 1
                                }
                            );


                            ib_file.on("sending", function() {

                                ib_submit.prop('disabled', true);

                            });

                            ib_file.on("success", function(file,response) {

                                ib_submit.prop('disabled', false);

                                upload_resp = response;

                                if(upload_resp.success == 'Yes'){

                                    toastr.success(upload_resp.msg);
                                    // $file_link.val(upload_resp.file);
                                    $('#file_link_image').val(upload_resp.file);


                                }
                                else{
                                    toastr.error(upload_resp.msg);
                                }


                            });

                        },
                        touch: false,
                        autoFocus: false,
                    },
                });

            });

            $modal.on('click', '#update', function(event){
                event.preventDefault();
                var _url = $("#_url").val();
                $.post(_url + 'ps/edit-post/', $('#edit_form').serialize(), function(data){

                    var _url = $("#_url").val();
                    if ($.isNumeric(data)) {

                        location.reload();
                    }
                    else {

                        // $modal
                        //     .modal('loading')
                        //     .find('.modal-body')
                        //     .prepend('<div class="alert alert-danger fade in">' + data +
                        //
                        //         '</div>');

                        toastr.error(data);

                    }

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
