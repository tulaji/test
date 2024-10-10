<div class="mx-auto" style="max-width: 800px;">

    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2>Shipping Address</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form class="form-horizontal" id="rform">

              <!--   <div class="form-group"><label for="country">Saved Address</label>

                        <select name="saved_shipping" class="saved_shipping" id="saved_shipping" class="form-control">
                            <option value="">Select Address</option>
                            <?php foreach($shipping_addresses as $shipping_addres){ ?> 
                             <option value="">--</option>
                            <?php } ?>
                        </select>
                    </div> -->



                    <div class="form-group"><label for="m_address">{$_L['Address']}</label>

                        <input type="text" id="m_address" name="m_address" class="form-control" >
                    </div>
                    <div class="form-group"><label for="city">{$_L['City']}</label>

                        <input type="text" id="city" name="city" class="form-control" >
                    </div>
                    <div class="form-group"><label for="state">{$_L['State Region']}</label>

                        <input type="text" id="state" name="state" class="form-control" >
                    </div>
                    <div class="form-group"><label for="zip">{$_L['ZIP Postal Code']} </label>

                        <input type="text" id="zip" name="zip" class="form-control" >
                    </div>
                    <div class="form-group"><label for="country">{$_L['Country']}</label>

                        <select name="country" class="country" id="country" class="form-control">
                            <option value="">{$_L['Select Country']}</option>
                            {$countries}
                        </select>
                    </div>


                    <div class="form-group">
                        <button class="btn btn-primary address_submit1" type="submit" id="address_submit1"><i class="fal fa-check"></i> Add </button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>






