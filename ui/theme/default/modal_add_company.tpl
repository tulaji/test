<div>
    <div class="panel shadow-none mb-0">
        <div class="panel-hdr">
            <h2>
                {if $f_type eq 'edit'}
                    {$_L['Edit']}
                {else}
                    {$_L['New Company']}
                {/if}
            </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form class="form-horizontal" id="ib_modal_form">


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company_name">{$_L['Company Name']}<small class="red">*</small></label>

                                <div><input type="text" id="company_name" name="company_name" class="form-control" value="{$val['company_name']}">

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="code">{$_L['Code']}<small class="red">*</small></label>

                                <div><input type="text" id="code" name="code" class="form-control" value="{$val['code']}">

                                </div>


                            </div>

                            {if $config['show_business_number'] eq '1'}


                                <div class="form-group">
                                    <label for="business_number">{$config['label_business_number']}</label>

                                    <div><input type="text" id="business_number" name="business_number" class="form-control" value="{$val['business_number']}">

                                    </div>
                                </div>


                            {/if}


    <div class="form-group"><label for="company_type">Company Type</label>

        <div>
          <select class="form-control" name="company_type" id="company_type">
                <option value="">Select Type</option>
                <option value="OnePerson" {if $val['company_type'] eq ('OnePerson')}selected="selected" {/if}  >One Person Company</option>

                 <option  value="LLP" {if $val['company_type'] eq ('LLP')}selected="selected" {/if}  >Limited Liability Partnership(LLP)</option>

                 <option  value="PublicLimited" {if $val['company_type'] eq ('PublicLimited')}selected="selected" {/if}  >Public Limited Company</option>


                <option value="PrivateLimited" {if $val['company_type'] eq ('PrivateLimited')}selected="selected" {/if}  >Private Limited Company</option>

                <option value="Partnership" {if $val['company_type'] eq ('Partnership')}selected="selected" {/if}  >Partnership Firm</option>
                <option value="Proprietorship" {if $val['company_type'] eq ('Proprietorship')}selected="selected" {/if}  >Proprietorship</option>
                <option value="Section8" {if $val['company_type'] eq ('Section8')}selected="selected" {/if}  >Section 8 Company</option>
                
          </select>
        </div>
    </div>
                       




                            <div class="form-group"><label for="url">{$_L['URL']}</label>

                                <div><input type="text" id="url" name="url" class="form-control" value="{$val['url']}">

                                </div>
                            </div>


                            <div class="form-group"><label for="email">{$_L['Email']}</label>
                                <div>
                                    <input type="text" id="email" name="email" class="form-control" value="{$val['email']}">
                                </div>






                            </div>


                            <div class="form-group"><label for="phone">{$_L['Phone']}</label>

                                <div><input type="text" id="phone" name="phone" class="form-control" value="{$val['phone']}">

                                </div>


                            </div>


                            {if $config['fax_field'] eq '1'}


                                <div class="form-group"><label for="fax">{$_L['Fax']}</label>

                                    <div><input type="text" id="fax" name="fax" class="form-control" value="{$val['fax']}">

                                    </div>


                                </div>



                            {/if}









                        </div>

                        <div class="col-md-6">

                            <div class="form-group"><label for="logo_url">{$_L['Logo URL']}</label>

                                <div><input type="text" id="logo_url" name="logo_url" class="form-control" value="{$val['logo_url']}">

                                </div>


                            </div>

                            <div class="form-group"><label for="c_address1">{$_L['Address']}</label>

                                <input type="text" id="c_address1" name="address1" class="form-control" value="{$val['address1']}">


                            </div>

                            <div class="form-group"><label for="c_city">{$_L['City']}</label>

                                <div><input type="text" id="c_city" name="city" class="form-control" value="{$val['city']}">

                                </div>
                            </div>
                        <div class="form-group"><label for="tds_deduction">TDS Deduction(%) </label>

                            <div><input type="number" id="tds_deduction" name="tds_deduction" class="form-control" value="{$val['tds_deduction']}">

                            </div>
                        </div>



                            <div class="form-group"><label for="c_state">{$_L['State Region']}</label>


                                <div><input type="text" id="c_state" name="state" class="form-control" value="{$val['state']}"></div>


                            </div>

                            <div class="form-group"><label for="c_zip">{$_L['ZIP Postal Code']}</label>

                                <input type="text" id="c_zip" name="zip" class="form-control" value="{$val['zip']}">


                            </div>

                            <div class="form-group"><label for="c_country">{$_L['Country']}</label>

                                <select name="country" id="c_country" class="form-control country">
                                    <option value="">{$_L['Select Country']}</option>
                                    {$countries}
                                </select>


                            </div>



                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary modal_submit mt-3">{$_L['Save']}</button>
                            </div>
                        </div>
                    </div>



                    <input type="hidden" name="f_type" id="f_type" value="{$f_type}">
                    <input type="hidden" name="cid" id="cid" value="{$val['cid']}">

                </form>
            </div>
        </div>
    </div>
</div>
