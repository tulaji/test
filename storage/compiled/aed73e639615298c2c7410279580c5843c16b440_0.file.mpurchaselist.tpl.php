<?php
/* Smarty version 3.1.36, created on 2021-06-10 11:39:11
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\manufacturing\mpurchaselist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c1ac87cbd0e0_47924512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed73e639615298c2c7410279580c5843c16b440' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\manufacturing\\mpurchaselist.tpl',
      1 => 1619550604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1ac87cbd0e0_47924512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184846389960c1ac87c80310_60712830', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182391001460c1ac87cb2d13_41690385', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_56372390060c1ac87c817d9_37091170 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_184846389960c1ac87c80310_60712830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_184846389960c1ac87c80310_60712830',
  ),
  'head' => 
  array (
    0 => 'Block_56372390060c1ac87c817d9_37091170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56372390060c1ac87c817d9_37091170', "head", $this->tplIndex);
?>



    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-hdr">
                    <h2>Procurement</h2>

                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
mpurchase/add" class="btn btn-primary"><i class="fal fa-plus"></i> Create Procurement</a>
                            
                        </div>

                    </div>
                </div>

                <div class="panel-container show">

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-striped w-100" id="clx_datatable">
                                <thead style="background:#f0f2ff" >
                                <tr>
                                    <th class="bold">Subject</th>
                                    <th class="bold">PurchaseNo</th>
                                    <th class="bold">Issued Date</th>
                                    <th class="bold">Discount</th>
                                    <th class="bold">Tax</th>
                                    <th class="bold">Weight</th>
                                    <th class="bold">Subtotal</th>
                                    <th class="bold">Total</th>
                                    <th class="bold">Status</th>
                                    <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->subject;?>


                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->pruchase_ref;?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->Issued_at;?>

                                        </td>
                                        <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->total_discount;?>

                                        </td>
                                          <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->total_tax;?>

                                        </td>
                                        <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->tweight;?>
 Kg
                                        </td>

                                       
                                         <td>
                                            <?php echo formatCurrency($_smarty_tpl->tpl_vars['item']->value->subtotal,$_smarty_tpl->tpl_vars['config']->value['home_currency'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>


                                        </td>
                                        <td>
                                            <?php echo formatCurrency($_smarty_tpl->tpl_vars['item']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>


                                        </td>
                                         <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->status;?>

                                        </td>
                                        <td>
                                        <div class="btn-group float-right">

                                                 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
mpurchase/view/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
/" class="btn btn-primary btn-icon" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fal fa-file-alt"></i></a>

                                         <a href="javascript:;" onclick="confirmThenGoToUrl(event,'mpurchase/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
')"  class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
                                         </div>
                                               
                                        </td>
                                      <!--   <td>

                                            <div class="btn-group float-right">

                                                <?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
                                                    <a href="javascript:;" id="edit_item_<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" class="btn edit_item btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i> </a>
                                                <?php }?>

                                             

                                                <?php if ($_smarty_tpl->tpl_vars['can_delete']->value) {?>

                                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'delete/mps/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
')"  class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>

                                                <?php }?>

                                            </div>

                                        </td> -->
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
class Block_182391001460c1ac87cb2d13_41690385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_182391001460c1ac87cb2d13_41690385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            var $modal = $('#cloudonex_body');
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
",
                    },
                }
            );

            $modal.on('click', '.edit_item', function(e){
                e.preventDefault();
                var vid = this.id;
                var id = vid.replace("edit_item_", "");
                id = id.replace("t", "");


                $.fancybox.open({
                    src  :  base_url + 'mps/edit-form/' + id,
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
                                mDec: <?php echo $_smarty_tpl->tpl_vars['config']->value['decimal_places_products_and_services'];?>
,
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
                                    url: base_url + "mps/upload/",
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
                $.post(base_url + 'mps/edit-post/', $('#edit_form').serialize(), function(data){
                    if ($.isNumeric(data)) {

                        location.reload();
                    }
                    else {

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
