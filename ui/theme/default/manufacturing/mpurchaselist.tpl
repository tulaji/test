{extends file="$layouts_admin"}

{block name="content"}

    {block name="head"}

    {/block}


    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-hdr">
                    <h2>Procurement</h2>

                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="{$_url}mpurchase/add" class="btn btn-primary"><i class="fal fa-plus"></i> Create Procurement</a>
                            
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
                                    <th class="text-center bold">{$_L['Manage']}</th>
                                </tr>
                                </thead>
                                <tbody>


                                {foreach $items as $item}
                                    <tr>
                                        <td>
                                            {$item->subject}

                                        </td>
                                        <td>
                                            {$item->pruchase_ref}
                                        </td>
                                        <td>
                                            {$item->Issued_at}
                                        </td>
                                        <td>
                                        {$item->total_discount}
                                        </td>
                                          <td>
                                        {$item->total_tax}
                                        </td>
                                        <td>
                                        {$item->tweight} Kg
                                        </td>

                                       
                                         <td>
                                            {formatCurrency($item->subtotal,$config['home_currency'],$format_currency_override)}

                                        </td>
                                        <td>
                                            {formatCurrency($item->total,$config['home_currency'],$format_currency_override)}

                                        </td>
                                         <td>
                                        {$item->status}
                                        </td>
                                        <td>
                                        <div class="btn-group float-right">

                                                 <a href="{$_url}mpurchase/view/{$item->id}/" class="btn btn-primary btn-icon" data-toggle="tooltip" data-placement="top" title="{$_L['View']}"><i class="fal fa-file-alt"></i></a>

                                         <a href="javascript:;" onclick="confirmThenGoToUrl(event,'mpurchase/delete/{$item->id}')"  class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="{$_L['Delete']}" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
                                         </div>
                                               
                                        </td>
                                      <!--   <td>

                                            <div class="btn-group float-right">

                                                {if $can_edit}
                                                    <a href="javascript:;" id="edit_item_{$item->id}" class="btn edit_item btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="{$_L['Edit']}" data-placement="top"><i class="fal fa-pencil"></i> </a>
                                                {/if}

                                             

                                                {if $can_delete}

                                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'delete/mps/{$item->id}')"  class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="{$_L['Delete']}" data-placement="top"><i class="fal fa-trash-alt"></i> </a>

                                                {/if}

                                            </div>

                                        </td> -->
                                    </tr>
                                {/foreach}



                                </tbody>


                            </table>
                        </div>
                    </div>






                </div>
            </div>
        </div>



    </div>




{/block}


{block name="script"}

    <script>

        $(function () {
            var $modal = $('#cloudonex_body');
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "{$_L['No Data Available']}",
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

                                aSign: '{$config['currency_code']}',
                                dGroup: {$config['thousand_separator_placement']},
                                aPad: {$config['currency_decimal_digits']},
                                pSign: '{$config['currency_symbol_position']}',
                                aDec: '{$config['dec_point']}',
                                aSep: '{$config['thousands_sep']}',
                                vMax: '9999999999999999.00',
                                vMin: '-9999999999999999.00',

                                {if isset($config['decimal_places_products_and_services'])}
                                mDec: {$config['decimal_places_products_and_services']},
                                {/if}

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

    </script>
{/block}
