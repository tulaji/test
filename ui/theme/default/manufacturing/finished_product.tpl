{extends file="$layouts_admin"}

{block name="content"}

    {block name="head"}

    {/block}


    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-hdr">
                    <h2>Finished Product</h2>

                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="#" class="btn btn-primary add_item"><i class="fal fa-plus"></i> Create Finished Product</a>
                            
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
                                    <th class="bold">Process Code.</th>
                                     <th class="bold">Subject</th>
                                    <th class="bold">Weight</th>
                                    <th class="bold">Used Weight</th>
                                    <th class="bold">Image</th>
                                    <th class="bold">Finished date</th>

                                    <th class="text-center bold">{$_L['Manage']}</th>
                                </tr>
                                </thead>
                                <tbody>


                                {foreach $items as $item}
                                    <tr>
                                        <td>
                                            {$item->finished_ref}

                                        </td>
                                         <td>
                                            {$item->processing_ref}

                                        </td>
                                        <td>
                                            {$item->subject}
                                        </td>
                                        <td>
                                            {$item->weight}
                                        </td>
                                        <td>
                                        {$item->used_weight}
                                        </td>
                                         <td>
                                        {if $item->finished_image}
                                                <img alt="{$item->subject}" class="img-fluid" src="{APP_URL}/storage/items/thumb{$item->finished_image}">
                                                {else}
                                                <img alt="{$item->subject}" class="img-fluid" src="{APP_URL}/ui/lib/img/item_placeholder.png">
                                            {/if}
                                        </td>
                                          <td>
                                        {$item->finished_date}
                                        </td>
                                        <td>

                                            <div class="btn-group float-right">

                                           

                                            {if $item->finished_status neq 'TRANSFERED'}
                                             <a href="#" class="btn btn-primary  btn-icon edit_item" data-id="{$item->id}" data-toggle="tooltip" data-placement="top" title="{$_L['Edit']}"><i class="fal fa-edit"></i></a> 

                                                <a href="javascript:;" onclick="confirmThenGoToUrl(event,'mprocess/delete_finish/{$item->id}')"  class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="{$_L['Delete']}" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
                                            {else}
                                            <a href="#" class="btn btn-default  btn-icon" data-toggle="tooltip" data-placement="top" title="{$_L['Edit']}"><i class="fal fa-edit"></i></a> 

                                               <a href="javascript:;"   class="btn btn-default btn-icon waves-effect waves-themed has-tooltip" data-title="{$_L['Delete']}" data-placement="top"><i class="fal fa-trash-alt"></i> </a>

                                            {/if}

                                            </div>

                                        </td>
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

            $modal.on('click', '.add_item', function(e){
                e.preventDefault();
              

                $.fancybox.open({
                    src  :  base_url + 'mprocess/add_finished/',
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
               var dataid=$(this).data('id');

                $.fancybox.open({
                    src  :  base_url + 'mprocess/edit_finished/'+dataid,
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
                $.post(base_url + 'mprocess/update_finished/', $('#uform').serialize(), function(data){
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
                $.post(base_url + 'mprocess/save_finished/', $('#rform').serialize(), function(data){
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
                    $.post(_url + 'mprocess/json-single-contact/', {
                        processid: processid

                    }).done(function (data) {
                           $('#weight').val(data.weight);
                           $('#order_id').val(data.order_id);
                           $('#used_weight').val(data.weight);

                        });
                }

            }


    </script>
{/block}
