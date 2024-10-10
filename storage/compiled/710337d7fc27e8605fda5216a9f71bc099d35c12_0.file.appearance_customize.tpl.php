<?php
/* Smarty version 3.1.36, created on 2021-02-26 06:20:20
  from 'C:\xampp\htdocs\cloudonex\ui\theme\default\appearance_customize.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6038d974d35ed4_26131012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '710337d7fc27e8605fda5216a9f71bc099d35c12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cloudonex\\ui\\theme\\default\\appearance_customize.tpl',
      1 => 1611100325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038d974d35ed4_26131012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4519732016038d974cd1a87_18334682', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12001855876038d974d2dc28_31663694', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_4519732016038d974cd1a87_18334682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4519732016038d974cd1a87_18334682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-6">

            <div class="panel">

                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Text Logo'];?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="logo" method="post"
                              action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/logo-text/">
                            <div class="form-group">
                                <input class="form-control" name="logo_text" value="<?php if (empty($_smarty_tpl->tpl_vars['config']->value['logo_text'])) {?>CloudOnex<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];
}?>">

                            </div>

                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </form>
                    </div>
                </div>





            </div>


            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</h2>


                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" style="max-height: 40px;" alt="Logo">
                        <br><br>
                        <form role="form" name="logo" enctype="multipart/form-data" method="post"
                              action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/logo-post/">
                            <div class="form-group">
                                <label for="file"><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</label>
                                <input type="file" id="file" name="file">

                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['This will replace existing logo'];?>
</p>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </form>
                    </div>






                </div>
            </div>


            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo for dark background'];?>
 [ <?php echo $_smarty_tpl->tpl_vars['_L']->value['Optional'];?>
 ]</h2>


                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_inverse'];?>
" alt="Logo"  style="max-height: 40px; background: #2196F3">
                        <br><br>

                        <form role="form" name="logo" enctype="multipart/form-data" method="post"
                              action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/logo-inverse-post/">
                            <div class="form-group">
                                <label for="file"><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</label>
                                <input type="file" id="file" name="file">

                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Transparent png image'];?>
.</p>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </form>
                    </div>




                </div>
            </div>


            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Icon'];?>
</h2>


                </div>
                <div class="panel-container">
                    <div class="panel-content">

                       <div class="text-center">
                           <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                               <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];?>
">
                           <?php } else { ?>
                               <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/logo-512x512.png">
                           <?php }?>
                       </div>

                        <br><br>

                        <form role="form" name="logo" enctype="multipart/form-data" method="post"
                              action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/logo-square-post">
                            <div class="form-group">
                                <label for="file"><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</label>
                                <input type="file" id="file" name="file">
                            </div>
                            <p>512x512(png)</p>
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </form>
                    </div>




                </div>
            </div>





            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Portal Custom Scripts'];?>
</h5>


                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="logo" method="post"
                              action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/custom_scripts/">
                            <div class="form-group">
                                <label for="header_scripts"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Header Scripts'];?>
</label>

                                <textarea class="form-control" id="header_scripts" name="header_scripts"
                                          rows="4"><?php echo $_smarty_tpl->tpl_vars['config']->value['header_scripts'];?>
</textarea>

                            </div>
                            <div class="form-group">
                                <label for="footer_scripts"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Footer Scripts'];?>
</label>

                                <textarea class="form-control" id="footer_scripts" name="footer_scripts"
                                          rows="4"><?php echo $_smarty_tpl->tpl_vars['config']->value['footer_scripts'];?>
</textarea>

                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </form>
                    </div>





                </div>
            </div>


        </div>


        <div class="col-md-6">

            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</h2>


                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-hover">
                            <tbody>

                            <tr>
                                <td width="80%"><label for="config_invoice_show_watermark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Show Watermark'];?>
 </label></td>
                                <td> <input type="checkbox" <?php if (get_option('invoice_show_watermark') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_invoice_show_watermark"></td>
                            </tr>


                            <tr>
                                <td width="80%"><label for="config_invoice_client_can_attach_signature"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Signature'];?>
 </label></td>
                                <td> <input type="checkbox" <?php if (get_option('invoice_client_can_attach_signature') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_invoice_client_can_attach_signature"></td>
                            </tr>


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
/* {block "script"} */
class Block_12001855876038d974d2dc28_31663694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_12001855876038d974d2dc28_31663694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>

        $(function () {

            $('#config_invoice_show_watermark').change(function() {

                if($(this).prop('checked')){

                    $.post( base_url+'settings/update_option/', { opt: "invoice_show_watermark", val: "1" })
                        .done(function( data ) {

                            toastr.success('Saved.');
                           // location.reload();
                        });

                }
                else{
                    $.post( base_url+'settings/update_option/', { opt: "invoice_show_watermark", val: "0" })
                        .done(function( data ) {

                            toastr.success('Saved.');
                        });
                }
            });


            $('#config_invoice_client_can_attach_signature').change(function() {

                if($(this).prop('checked')){

                    $.post( base_url+'settings/update_option/', { opt: "invoice_client_can_attach_signature", val: "1" })
                        .done(function( data ) {

                            toastr.success('Saved.');
                            // location.reload();
                        });

                }
                else{
                    $.post( base_url+'settings/update_option/', { opt: "invoice_client_can_attach_signature", val: "0" })
                        .done(function( data ) {

                            toastr.success('Saved.');
                        });
                }
            });

        })

    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}