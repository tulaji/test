<?php
/* Smarty version 3.1.36, created on 2021-04-27 18:28:26
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\manufacturing\processing_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60880a72c91f75_29568640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4cb0ee1a315a1565371d221bd24dc338b00f818' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\manufacturing\\processing_product.tpl',
      1 => 1619523602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60880a72c91f75_29568640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27395084560880a72c38430_58408988', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193505156160880a72c83946_75112986', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_200157032760880a72c39d41_96395844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_27395084560880a72c38430_58408988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_27395084560880a72c38430_58408988',
  ),
  'head' => 
  array (
    0 => 'Block_200157032760880a72c39d41_96395844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200157032760880a72c39d41_96395844', "head", $this->tplIndex);
?>



    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-hdr">
                    <h2>Processing Product</h2>

                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="#" class="btn btn-primary add_item"><i class="fal fa-plus"></i> Create Processing Product</a>
                            
                        </div>

                    </div>
                </div>

                <div class="panel-container show">

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-striped w-100" id="clx_datatable">
                                <thead style="background:#f0f2ff" >
                                <tr>
                                    <th class="bold">Process code</th>
                                     <th class="bold">Subject</th>
                                    <th class="bold">Order No</th>
                                    <th class="bold">Start Date</th>
                                    <th class="bold">Image</th>
                                     <th class="bold">Weight</th>
                                    <th class="bold">processing_status</th>

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
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->process_code;?>


                                        </td>
                                         <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->subject;?>


                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->order_ref;?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->start_date;?>

                                        </td>
                                        <td>

                                          <?php if ($_smarty_tpl->tpl_vars['item']->value->processing_image) {?>
                                                <img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->subject;?>
" class="img-fluid" src="<?php echo APP_URL;?>
/storage/items/thumb<?php echo $_smarty_tpl->tpl_vars['item']->value->processing_image;?>
">
                                                <?php } else { ?>
                                                <img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->subject;?>
" class="img-fluid" src="<?php echo APP_URL;?>
/ui/lib/img/item_placeholder.png">
                                            <?php }?>

                                        </td>
                                         <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->weight;?>

                                        </td>
                                          <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->processing_status;?>

                                        </td>
                                        <td>

                                            <div class="btn-group float-right">

                                           

                                            <?php if ($_smarty_tpl->tpl_vars['item']->value->processing_status != 'Finished') {?>
                                             <a href="#" class="btn btn-primary  btn-icon edit_item" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-edit"></i></a> 

                                                <a href="javascript:;" onclick="confirmThenGoToUrl(event,'mprocess/delete_process/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
')"  class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
                                            <?php } else { ?>
                                            <a href="#" class="btn btn-default  btn-icon" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-edit"></i></a> 

                                               <a href="javascript:;"   class="btn btn-default btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>

                                            <?php }?>

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
class Block_193505156160880a72c83946_75112986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_193505156160880a72c83946_75112986',
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
                    src  :  base_url + 'mprocess/add_processing/',
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

                var processid=$(this).data('id');
       
                $.fancybox.open({
                    src  :  base_url + 'mprocess/edit_processing/'+processid,
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




            $modal.on('click', '#submit', function(event){
                event.preventDefault();
                $.post(base_url + 'mprocess/save_process/', $('#rform').serialize(), function(data){
                    if ($.isNumeric(data)) {

                        location.reload();
                    }
                    else {

                        toastr.error(data);

                    }

                });

            });



            $modal.on('click', '#submitupdate', function(event){
                event.preventDefault();
                $.post(base_url + 'mprocess/update_process/', $('#uform').serialize(), function(data){
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
