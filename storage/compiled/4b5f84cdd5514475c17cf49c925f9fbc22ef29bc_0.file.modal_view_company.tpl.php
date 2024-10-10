<?php
/* Smarty version 3.1.36, created on 2021-02-26 06:52:11
  from 'C:\xampp\htdocs\cloudonex\ui\theme\default\modal_view_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6038e0eb51abd2_85403564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b5f84cdd5514475c17cf49c925f9fbc22ef29bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cloudonex\\ui\\theme\\default\\modal_view_company.tpl',
      1 => 1611100325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038e0eb51abd2_85403564 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="panel shadow-none mb-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['company']->value->company_name;?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                <input type="hidden" id="base_cid" name="base_cid" value="<?php echo $_smarty_tpl->tpl_vars['company']->value->id;?>
">

                <div class="row">
                    <div class="col-md-3 ib_profile_width">

                        <div class="panel panel-default" id="ibox_panel">

                            <div class="panel-body">
                                <div class="my-3 text-center">


                                    <?php if ($_smarty_tpl->tpl_vars['company']->value->logo_url != '') {?>
                                        <img style="max-width: 250px;" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/companies/<?php echo $_smarty_tpl->tpl_vars['company']->value->logo_url;?>
">
                                    <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/ui/assets/img/default_company.png">
                                    <?php }?>


                                </div>






                            </div>

                            <div class="panel-body list-group border-bottom m-t-n-lg">
                                <a href="#" id="summary" class="list-group-item active li_summary"><span class="fal fa-chart-bar mr-2"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
 </a>
                                <a href="#" id="memo" class="list-group-item li_memo"><span class="fal fa-file-alt mr-2"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Memo'];?>
</a>
                                <a href="#" id="customers" class="list-group-item li_customers"><span class="fal fa-users mr-2"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
 <span class="badge badge-primary float-right"><?php echo Companies::countCustomers($_smarty_tpl->tpl_vars['company']->value->id);?>
</span></a>

                                <a href="#" id="invoices" class="list-group-item li_invoices"><span class="fal fa-credit-card mr-2"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
 <span class="badge badge-primary float-right"><?php echo Companies::countInvoices($_smarty_tpl->tpl_vars['company']->value->id);?>
</span></a>

                                <a href="#" id="quotes" class="list-group-item li_quotes"><span class="fal fa-file mr-2"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
 <span class="badge badge-primary float-right"><?php echo Companies::countQuotes($_smarty_tpl->tpl_vars['company']->value->id);?>
</span></a>


                                <a href="#" id="orders" class="list-group-item li_orders"><span class="fal fa-server mr-2"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Orders'];?>
 <span class="badge badge-primary float-right"><?php echo Companies::countOrders($_smarty_tpl->tpl_vars['company']->value->id);?>
</span></a>
                                                                <a href="#" id="transactions" class="list-group-item li_transactions"><span class="fal fa-th-list mr-2"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Transactions'];?>
 <span class="badge badge-primary float-right"><?php echo Companies::countTransactions($_smarty_tpl->tpl_vars['company']->value->id);?>
</span></a>


                            </div>



                        </div>

                    </div>

                    <div class="col-md-9">

                        <!-- START TIMELINE -->
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5><?php echo $_smarty_tpl->tpl_vars['company']->value->company_name;?>
</h5>
                            </div>

                            <div class="ibox-content" id="ibox_form" style="position: static; zoom: 1;">


                                <div id="application_ajaxrender" style="min-height: 200px;">






                                    

                                                                                                            
                                    
                                                                                                                                                
                                                                                                            
                                                                        
                                                                                                            

                                    


                                                                        
                                                                        
                                                                                                                                                                                                                        
                                </div>

                            </div>
                        </div>
                        <!-- END TIMELINE -->

                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
<?php }
}
