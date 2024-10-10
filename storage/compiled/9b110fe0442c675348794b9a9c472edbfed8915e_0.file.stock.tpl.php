<?php
/* Smarty version 3.1.36, created on 2021-04-23 23:55:19
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\manufacturing\stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6083110f4376c1_15582396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b110fe0442c675348794b9a9c472edbfed8915e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\manufacturing\\stock.tpl',
      1 => 1619202313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6083110f4376c1_15582396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7371339176083110f403fc0_58908434', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15882047416083110f42f926_26329472', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_13520423326083110f4058d4_53429136 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_7371339176083110f403fc0_58908434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7371339176083110f403fc0_58908434',
  ),
  'head' => 
  array (
    0 => 'Block_13520423326083110f4058d4_53429136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13520423326083110f4058d4_53429136', "head", $this->tplIndex);
?>



    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-hdr">
                    <h2>Raw Material Stock</h2>

                    <div class="panel-toolbar">

                        <div class="btn-group">
                      
                            
                        </div>

                    </div>
                </div>

                <div class="panel-container show">

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-striped w-100" id="clx_datatable">
                                <thead style="background:#f0f2ff" >
                                <tr>
                                    <th class="bold">Item No</th>
                                    <th class="bold">Item Name</th>
                                     <th class="bold">Size(L x W x H x D)</th>
                                     <th class="bold">Unit</th>
                                     <th class="bold">Weight(In)</th>
                                     <th class="bold">Qty(In)</th>
                                    <th class="bold">Used</th>
                                    <th class="bold">Return</th>
                                    <th class="bold">Waste</th>
                                    <th class="bold">Available</th>
                                    
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
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['itemno'];?>


                                        </td>
                                         <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['itemname'];?>


                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['unit'];?>

                                        </td>
                                         
                                          <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['weight'];?>

                                        </td>
                                         <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['used'];?>

                                        </td>
                                        <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['return'];?>

                                        </td>
                                          <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['waste'];?>

                                        </td>
                                         <td>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['available'];?>

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
class Block_15882047416083110f42f926_26329472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_15882047416083110f42f926_26329472',
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
