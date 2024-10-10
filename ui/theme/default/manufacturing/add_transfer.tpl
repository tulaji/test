
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
                    Add Transfer Product
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
                                <div class="form-group"><label for="unit">Select Finished product</label>
                                    <select class="form-control" onchange="select_process(this.value);" id="finished_id" name="finished_id" required="">
                                        <option value="">...</option>
                                        {foreach $finished_product as $finish_product}
                                            <option value="{$finish_product['id']}">{$finish_product['subject']}-{$finish_product['finished_ref']}</option>
                                        {/foreach}
                                    </select>
                                </div>
                               </div>

                                <div class="col-md-12">
                                   <div class="form-group"><label for="name">Product*</label>
                                        <input type="text" id="subject" name="subject" class="form-control" autocomplete="off" readonly>
                                    </div>
                               </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="idate">Transfer Date</label>
                                        <input type="date" class="form-control" id="idate" name="transfer_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" required
                                        >
                                    </div>
                                </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="idate1">Weight(Kg)</label>
                                            <input type="text" class="form-control" id="weight" name="weight" readonly >
                                            <input type="hidden" name="finished_ref" id="finished_ref">
                                            <input type="hidden" name="order_id" id="order_id">
                                            <input type="hidden" name="product_id" id="product_id">
                                            <input type="hidden" name="productname" id="productname">
                                        </div>
                                    </div>
                                 
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="idate1">Qty(no of item generated)</label>
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


