<?php
/* Smarty version 3.1.36, created on 2021-06-10 11:56:16
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\manufacturing\transfer_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c1b088b78a78_52365024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f0f22fbf4af6d1d95012398e9dee3a950dc256e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\manufacturing\\transfer_product.tpl',
      1 => 1619531270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1b088b78a78_52365024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181332886960c1b088b3f732_54668745', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133144285660c1b088b70521_22055551', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_21040164860c1b088b40b17_88174726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_181332886960c1b088b3f732_54668745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_181332886960c1b088b3f732_54668745',
  ),
  'head' => 
  array (
    0 => 'Block_21040164860c1b088b40b17_88174726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21040164860c1b088b40b17_88174726', "head", $this->tplIndex);
?>



    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-hdr">
                    <h2>Transfer Product</h2>

                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="#" class="btn btn-primary add_item"><i class="fal fa-plus"></i> Create Transfer Product</a>
                            
                        </div>

                    </div>
                </div>

                <div class="panel-container show">

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-striped w-100" id="clx_datatable">
                                <thead style="background:#f0f2ff" >
                                <tr>
                                    <th class="bold">Ref. No.</th>
                                    <th class="bold">Finished Ref.</th>
                                     <th class="bold">Product_name</th>
                                    <th class="bold">Weight</th>
                                    <th class="bold">Qty</th>
                                    <th class="bold">Transfered date</th>

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
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->trans_ref;?>


                                        </td>
                                         <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->finished_ref;?>


                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->product_name;?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->weight;?>

                                        </td>
                                        <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>

                                        </td>
                                          <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->transfer_date;?>

                                        </td>
                                        <td>

                                            <div class="btn-group float-right">
                                             <a href="#" class="btn btn-primary  btn-icon edit_item" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-edit"></i></a> 

                                                <a href="javascript:;" onclick="confirmThenGoToUrl(event,'mprocess/delete_transfer/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
')"  class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
                                            
                                            </div>

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
class Block_133144285660c1b088b70521_22055551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_133144285660c1b088b70521_22055551',
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

            $modal.on('click', '.add_item', function(e){
                e.preventDefault();
              


                $.fancybox.open({
                    src  :  base_url + 'mprocess/add_transfer/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                           
                            $('#description').redactor(
                                {
                                    minHeight: 200 // pixels
                                }
                            );

                            //  new Clipboard('.ib_btn_copy');

                            var $file_link = $("#file_link");
                            var ib_submit = $("#submit");

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
                                    $('#file_link').val(upload_resp.file);


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


             $modal.on('click', '.edit_item', function(e){
                e.preventDefault();
              

                var pro_id=$(this).data('id');

                $.fancybox.open({
                    src  :  base_url + 'mprocess/edit_transfer/'+pro_id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                           
                            $('#description').redactor(
                                {
                                    minHeight: 200 // pixels
                                }
                            );

                            //  new Clipboard('.ib_btn_copy');

                            var $file_link = $("#file_link");
                            var ib_submit = $("#submitupdate");

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
                                    $('#file_link').val(upload_resp.file);


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

            $modal.on('click', '#submitupdate', function(event){
                event.preventDefault();
                $.post(base_url + 'mprocess/update_transfer/', $('#uform').serialize(), function(data){
                    if ($.isNumeric(data)) {

                        location.reload();
                    }
                    else {

                        toastr.error(data);

                    }

                });

            });

             $modal.on('click', '#submit', function(event){
                event.preventDefault();
                $.post(base_url + 'mprocess/save_transfer/', $('#rform').serialize(), function(data){
                    if ($.isNumeric(data)) {

                        location.reload();
                    }
                    else {

                        toastr.error(data);

                    }

                });

            });

        });

          function select_process(val) {
              //  $('#sameasbilling').attr('disabled',false);
                var _url =base_url;
                var processid =val;
                if (processid != '') {
                    $.post(_url + 'mprocess/json-single-finished/', {
                        processid: processid

                    }).done(function (data) {
                           $('#weight').val(data.weight);
                           $('#order_id').val(data.order_id);
                           $('#finished_ref').val(data.finished_ref);
                           $('#product_id').val(data.product_id);
                           $('#productname').val(data.productname);

                           $('#subject').val(data.productname);
                           




                        });
                }

            }


    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
