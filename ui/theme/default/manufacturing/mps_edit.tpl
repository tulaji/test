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

    <div class="panel mb-0 rounded-0">

        <div class="panel-hdr ">

            <h2>{$_L['Edit']}</h2>
        </div>


        <div class="panel-container">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-horizontal" role="form" id="edit_form" method="post">
                            <div class="form-group">
                                <label for="name">{$_L['Name']} </label>
                                <input type="text" class="form-control" value="{$item->name}" name="name" id="name">
                            </div>

                            <div class="row">
                               <div class="col-md-6">
                                      <div class="form-group">
                                            <label for="rate">{$_L['Item Number']}</label>
                                            <input type="text" class="form-control" name="item_number" value="{$item->item_number}" id="item_number">
                                        </div>
                               </div>
                               <div class="col-md-6">
                                       <div class="form-group">
                                             <label for="tds_deduction">TDS Deduction ? </label><br/>
                                             <input type="radio" {if $item->tds_deduction eq ('YES')}checked="checked" {/if}  name="tds_deduction" id="tds_deduction"  value="YES"> YES  <br/>

                                             <input type="radio" {if $item->tds_deduction eq ('NO')}checked="checked" {/if}  name="tds_deduction" value="NO" >  NO
                                       </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cost_price" >{$_L['Cost Price']}</label>
                                        <input type="text" id="cost_price" name="cost_price" class="form-control amount" autocomplete="off" data-a-sign="{$config['currency_code']}"  data-a-dec="{$config['dec_point']}" data-a-sep="{$config['thousands_sep']}" data-d-group="2" value="{$item->cost_price}">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="available" >{$_L['Available']}</label>
                                        <input type="text" id="inventory" name="inventory" class="form-control" autocomplete="off" value="{round($item->inventory)}">
                                    </div>
                               </div>
                                
                            </div>
                           

                              

                        {if $item->raw_type eq 'Rectangle'}
                           <div class="form-group">
                               
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="inventory">{$_L['Width']}(cm)</label>
                                            <input type="text" id="width" name="width" placeholder="{$_L['Width']}" class="form-control" value="{$item->width}" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="inventory">{$_L['Length']}(cm)</label>
                                            <input type="text" id="width" name="length" placeholder="{$_L['Length']}" class="form-control" value="{$item->length}" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="inventory">{$_L['Height']}(cm)</label>
                                            <input type="text" id="width" name="height" placeholder="{$_L['Height']}" class="form-control" value="{$item->height}" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="inventory">Density(kg/dm³) </label>
                                            <input type="text" id="density" name="density" placeholder="Density" class="form-control" value="{$item->density}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                         {/if}
                         {if $item->raw_type eq 'Square'}
                          <div class="form-group">
                               
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inventory">{$_L['Width']}</label>
                                            <input type="text" id="swidth" name="swidth" placeholder="{$_L['Width']}" class="form-control" value="{$item->width}" autocomplete="off">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="inventory">{$_L['Length']}</label>
                                            <input type="text" id="swidth" name="slength" placeholder="{$_L['Length']}" class="form-control" value="{$item->length}" autocomplete="off">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="inventory">Density</label>
                                            <input type="text" id="sdensity" name="sdensity" placeholder="Density" class="form-control" value="{$item->density}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                         {/if}

                            

                            <div class="form-group">
                                <label for="description">{$_L['Description']}</label>
                                <textarea id="description" name="description" class="form-control" rows="3">{$item->description}</textarea>
                            </div>

                            <input type="hidden" name="raw_type" value="{$item->raw_type}">
                            <input type="hidden" name="id" value="{$item->id}">
                            <input type="hidden" name="file_link" id="file_link_image" value="{$item->image}">
                            <button id="update" class="btn btn-primary">{$_L['Update']}</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form action="" class="dropzone" id="upload_container">

                            <div class="dz-message">
                                <h3> <i class="fal fa-cloud-upload"></i>  {$_L['Drop File Here']}</h3>
                                <br />
                                <span class="note">{$_L['Click to Upload']}</span>
                            </div>

                            <hr>



                        </form>

                        {$has_img}

                    </div>

                </div>


            </div>


        </div>
    </div>


</div>


