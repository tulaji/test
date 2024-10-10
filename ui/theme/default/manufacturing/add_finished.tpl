
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
<div class="mx-auto" style="max-width: 800px;">
    <div class="row" >

        <div class="col-lg-8">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>
                    Add Finished Product
                    </h2>
                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <div class="alert alert-danger" id="emsg" style="display: none;">
                            <span id="emsgbody"></span>
                        </div>
                        <form class="form-horizontal" id="rform">
                            
                            <div class="row">
                             <div class="col-md-12">
                                <div class="form-group"><label for="unit">Select Processing product</label>
                                    <select class="form-control" onchange="select_process(this.value);" id="process_id" name="process_id" required="">
                                        <option value="">...</option>
                                        {foreach $processing_product as $pro_product}
                                            <option value="{$pro_product['id']}">{$pro_product['subject']}-{$pro_product['process_code']}</option>
                                        {/foreach}
                                    </select>
                                </div>
                               </div>

                                <div class="col-md-12">
                                <div class="form-group"><label for="unit">Select Finished Product(Merge item in finished items)</label>
                                    <select class="form-control"  id="product_id" name="product_id" required="">
                                        <option value="">...</option>
                                        {foreach $sys_items as $_sys_items}
                                            <option value="{$_sys_items['id']}">{$_sys_items['name']}-{$_sys_items['item_number']}</option>
                                        {/foreach}
                                    </select>
                                </div>
                               </div>

                                <div class="col-md-12">
                                   <div class="form-group"><label for="name">Subject/Title*</label>
                                        <input type="text" id="subject" name="subject" class="form-control" autocomplete="off" required>
                                    </div>
                               </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="idate">Finished Date</label>
                                        <input type="date" class="form-control" id="idate" name="finished_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" required
                                        >
                                    </div>
                                </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="idate1">Weight(Kg)</label>
                                            <input type="text" class="form-control" id="weight" name="weight" readonly >
                                            <input type="hidden" name="order_id" id="order_id">
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="idate1">Used Weight(Kg)</label>
                                            <input type="text" class="form-control" id="used_weight" name="used_weight">
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="idate1">Qty(no of item generate)</label>
                                            <input type="number" class="form-control" id="qty" name="qty">
                                        </div>
                                    </div>

                             
                               </div>



                            <div class="form-group"><label for="description">Finished nots</label>

                                <textarea id="description" class="form-control" rows="3" name="note"></textarea>
                            </div>

                            <hr>


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
 </div>


