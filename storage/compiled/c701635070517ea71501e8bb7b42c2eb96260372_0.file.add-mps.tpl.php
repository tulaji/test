<?php
/* Smarty version 3.1.36, created on 2021-06-16 09:41:39
  from '/var/www/html/ShreeEng_Test/ui/theme/default/manufacturing/add-mps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c979fb77c147_52165069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c701635070517ea71501e8bb7b42c2eb96260372' => 
    array (
      0 => '/var/www/html/ShreeEng_Test/ui/theme/default/manufacturing/add-mps.tpl',
      1 => 1618285016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c979fb77c147_52165069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123163806660c979fb7478e2_81081519', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61585231560c979fb76e925_42871847', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_123163806660c979fb7478e2_81081519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_123163806660c979fb7478e2_81081519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
    
.col-md-6{
    padding: 10px;
}
.col-md-12 {
    padding: 10px;
}
.hiddenclass{
    display: none;
}
</style>
    <div class="row">

        <div class="col-lg-8">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>
                    <!--     <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>

                        <?php }?> -->


                    </h2>
<!-- 


 -->
                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <div class="alert alert-danger" id="emsg" style="display: none;">
                            <span id="emsgbody"></span>
                        </div>
                        <form class="form-horizontal" id="rform">
                            
                            <div class="row">
                               <div class="col-md-12">
                                    <div class="form-group"><label for="raw_type">Select Type*</label>
                                     <select name="raw_type" id="mtype" class="form-control">
                                       <option value="Rectangle">Rectangle</option>
                                       <!-- <option value="Square">Square</option> -->
                                       <!-- <option value="Circle">Circle</option> -->
                                       <!-- <option value="Other">Other</option> -->
                                     </select>
                                    </div>
                               </div>
                                <div class="col-md-12">
                                   <div class="form-group"><label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
*</label>
                                        <input type="text" id="name" name="name" class="form-control" autocomplete="off">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group"><label for="cost_price"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cost Price'];?>
</label>
                                        <input type="text" id="cost_price" name="cost_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-d-group="3">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                 <div class="form-group"><label for="item_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Number'];?>
</label>
                                    <input type="text" id="item_number" value="<?php echo str_pad($_smarty_tpl->tpl_vars['nxt']->value,4,'0',STR_PAD_LEFT);?>
" name="item_number" class="form-control" autocomplete="off">
                                 </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tax_code">
                                            <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'India') {?>
                                                HSN / SAC
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Tax Code'];?>

                                            <?php }?>
                                        </label>
                                        <input type="text" id="tax_code" name="tax_code" class="form-control" autocomplete="off">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                         <label for="tds_deduction">TDS Deduction ? </label><br/>
                                         <input type="radio" name="tds_deduction" id="tds_deduction"  value="YES"> YES  <br/>
                                         <input type="radio" name="tds_deduction" value="NO" checked="">  NO
                                </div>
                               </div>

                               <div class="col-md-4">
                                 <div class="form-group"><label for="inventory">Inventory Qty</label>

                                    <input type="number" id="inventory" name="inventory" class="form-control" autocomplete="off">
                                </div>
                               </div>
                               <div class="col-md-4">

                                <div class="form-group"><label for="unit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unit'];?>
</label>

                                    <select class="form-control" id="unit" name="unit">
                                        <option value="">...</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['units']->value, 'unit');
$_smarty_tpl->tpl_vars['unit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['unit']->value) {
$_smarty_tpl->tpl_vars['unit']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                               </div>
                               <div class="col-md-4">

                                <div class="form-group">

                                    <label for="sku"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SKU'];?>
</label>

                                    <input type="text" id="sku" name="sku" class="form-control" autocomplete="off">
                                </div>
                               </div>
                               <div class="col-md-12">
                                 <div class="form-group rectangle-shape shapes">
                                    <label for="width"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
 </label>
                                    <div class="row">
                                        <div class="col-md-3">
                                         <label for="width"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Width'];?>
(Cm) </label>
                                            <input type="text" id="width" name="width" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Width'];?>
" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="width"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
(Cm) </label>
                                            <input type="text" id="lenght" name="length" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="width"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Height'];?>
(Cm) </label>
                                            <input type="text" id="height" name="height" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Height'];?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="width">Density(kg/dm³) </label>
                                            <input type="text" id="density" name="density" class="form-control" placeholder="Density" autocomplete="off">
                                        </div>
                                    </div>
                                </div>



                                <!-- next -->
                                 <div class="form-group square-shape hiddenclass shapes">
                                    <label for="width"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
 (Square)</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" id="width" name="swidth" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Width'];?>
" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="lenght" name="slength" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="density" name="sdensity" class="form-control" placeholder="Density" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <!-- Circle -->
                               <!--  <div class="form-group circle-shape hiddenclass shapes">
                                        <label for="width"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
 (Circle)</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" id="width" name="width" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Width'];?>
" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" id="diameter" name="diameter" class="form-control" placeholder="Diameter" autocomplete="off">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" id="density" name="density" class="form-control" placeholder="Density" autocomplete="off">
                                            </div>
                                        </div>
                                    </div> -->
                                <!--  Circular Tube -->




                               <!--  <div class="form-group">
                                    <label for="Weight">Weight</label>
                                    <input type="text" id="Weight" name="weight" class="form-control" autocomplete="off">
                                </div> -->
                               </div>

                                
                            </div>

                           
                            


                            <div class="form-group"><label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>

                                <textarea id="description" class="form-control" rows="3"></textarea>
                            </div>

                            <hr>


                            <input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                            <input type="hidden" name="file_link" id="file_link" value="">

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-hdr">
                   <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>
</h2>
                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <form action="" class="dropzone" id="upload_container">

                            <div class="dz-message">
                                <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                                <br />
                                <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                            </div>

                        </form>
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
class Block_61585231560c979fb76e925_42871847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_61585231560c979fb76e925_42871847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>

     $(document).ready(function () {

       
       
       $('body').on('change','#mtype', function (e) {
       $('.shapes').addClass('hiddenclass');

       var vals_type=$(this).val();
       if (vals_type=='Rectangle') {
        $('.rectangle-shape').removeClass('hiddenclass');
       }
       if (vals_type=='Square') {
        $('.square-shape').removeClass('hiddenclass');
       }
       if (vals_type=='Circle') {
        $('.circle-shape').removeClass('hiddenclass');
       }

       if (vals_type=='Other') {
         $('.shapes').addClass('hiddenclass');
       }


       });

     });


        Dropzone.autoDiscover = false;
        $(document).ready(function () {

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
                mDec: <?php echo $_smarty_tpl->tpl_vars['config']->value['decimal_places_products_and_services'];?>
,
                <?php }?>

            });

            var _url = $("#_url").val();

            var ib_submit = $("#submit");

            var $file_link = $("#file_link");

            var upload_resp;

            $('#description').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "ps/upload/",
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
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });


            ib_submit.click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'mps/add-post/', $( "#rform" ).serialize())
                    .done(function (data) {

                        if ($.isNumeric(data)) {

                            location.reload();
                        }
                        else {
                            $('#ibox_form').unblock();

                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
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
