
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
                    Add Work In progress
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

                                <div class="form-group"><label for="unit">Select Order</label>
                                    <select class="form-control" id="orderid" name="order_id" required="">
                                        <option value="">...</option>
                                        {foreach $morder as $_sys_morder}
                                            <option value="{$_sys_morder['id']}">{$_sys_morder['order_name']}-MO{$_sys_morder['orderid']}</option>
                                        {/foreach}
                                    </select>
                                </div>
                               </div>
                                <div class="col-md-12">
                                   <div class="form-group"><label for="name">Subject/Title*</label>
                                        <input type="text" id="subject" name="subject" class="form-control" autocomplete="off" required>
                                    </div>
                               </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="idate">Start Date</label>
                                        <input type="date" class="form-control" id="idate" name="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" required
                                        >
                                    </div>
                                </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="idate1">End Date</label>
                                        <input type="date" class="form-control" id="idate1" name="end_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true"
                                        >
                                    </div>
                                </div>

                             
                               </div>



                            <div class="form-group"><label for="description">Process nots</label>

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


