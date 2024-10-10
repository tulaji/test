{extends file="$layouts_admin"}

{block name="content"}
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
                    <!--     {if $type eq 'Product'}
                            {$_L['Add Product']}
                        {else}
                            {$_L['Add Service']}
                        {/if} -->


                    </h2>
<!-- {*                    <div class="panel-toolbar">*}

{*                        {if $type eq 'Product'}*}
{*                            <a href="{$_url}ps/p-list" class="btn btn-primary">{$_L['List Products']}</a>*}

{*                        {/if}*}
{*                        {if $type eq 'Service'}*}
{*                            <a href="{$_url}ps/s-list" class="btn btn-primary">{$_L['List Services']}</a>*}
{*                        {/if}*}

{*                    </div>*} -->
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
                                   <div class="form-group"><label for="name">{$_L['Name']}*</label>
                                        <input type="text" id="name" name="name" class="form-control" autocomplete="off">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group"><label for="cost_price">{$_L['Cost Price']}</label>
                                        <input type="text" id="cost_price" name="cost_price" class="form-control amount" autocomplete="off" data-a-sign="{$config['currency_code']} "  data-a-dec="{$config['dec_point']}" data-a-sep="{$config['thousands_sep']}" data-d-group="3">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                 <div class="form-group"><label for="item_number">{$_L['Item Number']}</label>
                                    <input type="text" id="item_number" value="{str_pad($nxt, 4, '0', STR_PAD_LEFT)}" name="item_number" class="form-control" autocomplete="off">
                                 </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tax_code">
                                            {if $config['tax_system'] == 'India'}
                                                HSN / SAC
                                            {else}
                                                {$_L['Tax Code']}
                                            {/if}
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

                                <div class="form-group"><label for="unit">{$_L['Unit']}</label>

                                    <select class="form-control" id="unit" name="unit">
                                        <option value="">...</option>
                                        {foreach $units as $unit}
                                            <option value="{$unit['name']}">{$unit['name']}</option>
                                        {/foreach}
                                    </select>
                                </div>
                               </div>
                               <div class="col-md-4">

                                <div class="form-group">

                                    <label for="sku">{$_L['SKU']}</label>

                                    <input type="text" id="sku" name="sku" class="form-control" autocomplete="off">
                                </div>
                               </div>
                               <div class="col-md-12">
                                 <div class="form-group rectangle-shape shapes">
                                    <label for="width">{$_L['Size']} </label>
                                    <div class="row">
                                        <div class="col-md-3">
                                         <label for="width">{$_L['Width']}(Cm) </label>
                                            <input type="text" id="width" name="width" placeholder="{$_L['Width']}" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="width">{$_L['Length']}(Cm) </label>
                                            <input type="text" id="lenght" name="length" class="form-control" placeholder="{$_L['Length']}" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="width">{$_L['Height']}(Cm) </label>
                                            <input type="text" id="height" name="height" class="form-control" placeholder="{$_L['Height']}" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="width">Density(kg/dm³) </label>
                                            <input type="text" id="density" name="density" class="form-control" placeholder="Density" autocomplete="off">
                                        </div>
                                    </div>
                                </div>



                                <!-- next -->
                                 <div class="form-group square-shape hiddenclass shapes">
                                    <label for="width">{$_L['Size']} (Square)</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" id="width" name="swidth" placeholder="{$_L['Width']}" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="lenght" name="slength" class="form-control" placeholder="{$_L['Length']}" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="density" name="sdensity" class="form-control" placeholder="Density" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <!-- Circle -->
                               <!--  <div class="form-group circle-shape hiddenclass shapes">
                                        <label for="width">{$_L['Size']} (Circle)</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" id="width" name="width" placeholder="{$_L['Width']}" class="form-control" autocomplete="off">
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

                           
                            


                            <div class="form-group"><label for="description">{$_L['Description']}</label>

                                <textarea id="description" class="form-control" rows="3"></textarea>
                            </div>

                            <hr>


                            <input type="hidden" id="type" name="type" value="{$type}">
                            <input type="hidden" name="file_link" id="file_link" value="">

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" id="submit">{$_L['Submit']}</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-hdr">
                   <h2>{$_L['Image']}</h2>
                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <form action="" class="dropzone" id="upload_container">

                            <div class="dz-message">
                                <h3> <i class="fal fa-cloud-upload"></i>  {$_L['Drop File Here']}</h3>
                                <br />
                                <span class="note">{$_L['Click to Upload']}</span>
                            </div>

                        </form>
                    </div>



                </div>
            </div>
        </div>


    </div>
{/block}

{block name="script"}
    <script>

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
    </script>
{/block}
