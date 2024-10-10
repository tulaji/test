<?php
/* Smarty version 3.1.36, created on 2021-06-18 16:04:22
  from '/var/www/html/ShreeEng_Test/ui/theme/default/transactions_deposit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60cc76ae28df96_52477037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8441d95a17d496fe35a322d8e46defb7cf22f4f' => 
    array (
      0 => '/var/www/html/ShreeEng_Test/ui/theme/default/transactions_deposit.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cc76ae28df96_52477037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50673540160cc76ae21a4a2_15131693', "head");
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4497073360cc76ae21d6d0_09474085', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147947460260cc76ae282f75_38467699', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_50673540160cc76ae21a4a2_15131693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_50673540160cc76ae21a4a2_15131693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }
        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}
        .text-danger{
            color: #F6365B!important;
        }

    </style>


<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_4497073360cc76ae21d6d0_09474085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4497073360cc76ae21d6d0_09474085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Deposit'];?>
</h2>

                </div>
                <div class="panel-container" id="ibox_form">

                    <div class="panel-content">

                        <div class="alert alert-danger" id="emsg">
                            <span id="emsgbody"></span>
                        </div>

                        <form class="form-horizontal" method="post" id="tform" role="form">

                            <div class="form-group">
                                <label for="account"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</span></label>
                                <select id="account" name="account" class="form-control">
                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose an Account'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="code"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code'];?>
</span></label>
                                <input type="text" class="form-control" id="code" name="code" value="<?php echo predict_next_serial($_smarty_tpl->tpl_vars['config']->value,'income');?>
">
                            </div>

                            <div class="form-group">
                                <label for="date"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</span></label>
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['mdate']->value;?>
" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>

                            <div class="form-group">
                                <label for="description"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</span></label>
                                <input type="text" class="form-control" id="description" name="description">
                                <div class="help-block"><a data-toggle="modal" href="#modal_add_item"><i class="fal fa-paperclip"></i><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Attach File'];?>
</span> </a> </div>
                            </div>


                            <div class="form-group">
                                <label for="currency"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</span></label>
                                <select id="currency" name="currency" class="form-control">

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] == $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?>selected<?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]))) {?>
                                            data-a-sign="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['decimal_mark'];?>
" <?php if (($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                                <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>


                            <div class="form-group">
                                <label  for="amount"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</span></label>
                                <input type="text" class="form-control" id="amount" name="amount">
                            </div>




                            <div class="form-horizontal" >
                                <div class="form-group">
                                    <label for="cats"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</span></label>
                                    <select id="cats" name="cats" class="form-control">
                                        <option value="Uncategorized"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Uncategorized'];?>
</option>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tags"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</span></label>
                                    <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="company"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</span></label>
                                    <select id="company" name="company" class="form-control">
                                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value->company_name;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="payer"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payer'];?>
</span></label>
                                    <select id="payer" name="payer" class="form-control">
                                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Contact'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['account'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="staff_id"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
</span></label>
                                    <select id="staff_id" name="staff_id" class="form-control">
                                        <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['staff']->value->fullname;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="pmethod"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</span></label>
                                    <select id="pmethod" name="pmethod" class="form-control">
                                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Payment Method'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pms']->value, 'pm');
$_smarty_tpl->tpl_vars['pm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pm']->value) {
$_smarty_tpl->tpl_vars['pm']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="status"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</span></label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="Cleared"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cleared'];?>
</option>
                                        <option value="Uncleared"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Uncleared'];?>
</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="ref"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ref'];?>
#</span></label>
                                    <input type="text" class="form-control" id="ref" name="ref">
                                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ref_example'];?>
</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type="hidden" name="attachments" id="attachments" value="">

                                    <button type="submit" id="submit" class="btn btn-primary mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                                </div>
                            </div>
                        </form>

                    </div>





                </div>
            </div>




        </div>

        <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Deposits'];?>
</h2>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <table class="table table-bordered table-striped sys_table">
                            <thead style="background: #f0f2ff">
                            <tr>
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                                <th class="h6" width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tr']->value, 'trs');
$_smarty_tpl->tpl_vars['trs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['trs']->value) {
$_smarty_tpl->tpl_vars['trs']->do_else = false;
?>
                                <tr>

                                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['trs']->value['account'];?>
</td>

                                    <td class="h6 text-info"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['trs']->value['id'];?>
/">
                                            <?php if ($_smarty_tpl->tpl_vars['trs']->value['attachments'] != '') {?>
                                                <i class="fal fa-paperclip"></i>
                                            <?php }?>
                                            <span class="text-info"> <?php echo $_smarty_tpl->tpl_vars['trs']->value['description'];?>
 </span>





                                        </a>
                                        <?php if ($_smarty_tpl->tpl_vars['trs']->value['code'] != '') {?>
                                            <br>
                                            <?php echo $_smarty_tpl->tpl_vars['trs']->value['code'];?>

                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['trs']->value['company_id'] != '0' && (isset($_smarty_tpl->tpl_vars['companies_by_ids']->value[$_smarty_tpl->tpl_vars['trs']->value['company_id']]))) {?>
                                            <br>
                                            <?php echo $_smarty_tpl->tpl_vars['companies_by_ids']->value[$_smarty_tpl->tpl_vars['trs']->value['company_id']]->company_name;?>

                                        <?php }?>

                                    </td>
                                    <td class="amount text-success h6"
                                            <?php if ((isset($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['trs']->value['currency_iso_code']]))) {?>
                                                data-a-sign="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['trs']->value['currency_iso_code']]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['trs']->value['currency_iso_code']]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['trs']->value['currency_iso_code']]['decimal_mark'];?>
" <?php if (($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['trs']->value['currency_iso_code']]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                            <?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['trs']->value['amount'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

    </div>


    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">


    <div class="modal fade" id="modal_add_item" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Attach File'];?>

                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                </div>
            </div>
        </div>
    </div>




<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_147947460260cc76ae282f75_38467699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_147947460260cc76ae282f75_38467699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>

        Dropzone.autoDiscover = false;

        jQuery(document).ready(function() {


            var $currency = $('#currency');
            var $amount = $("#amount");


            function clxAmountSingleFieldAutoNumeric(amountId) {
                $(amountId).autoNumeric('destroy');
                $(amountId).autoNumeric('init', {
                    aSign: $currency.find(':selected').data('a-sign'),
                    dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                    aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                    pSign: $currency.find(':selected').data('p-sign'),
                    aDec: $currency.find(':selected').data('a-dec'),
                    aSep: $currency.find(':selected').data('a-sep'),
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });
            }

            $currency.on('change',function (event) {
                clxAmountSingleFieldAutoNumeric('#amount');
            });



            clxAmountSingleFieldAutoNumeric('#amount');

            function ib_autonumeric() {
                $('.amount').autoNumeric('init', {
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });

            }


            ib_autonumeric();




            $('[data-toggle="datepicker"]').datepicker();

            $("#account").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $("#company").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $("#cats").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );
            $("#pmethod").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );
            $("#payer").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],
                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            });


            $("#emsg").hide();


            var _url = $("#_url").val();


            var upload_resp;

            var $ib_form_submit = $("#submit");


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "transactions/handle_attachment/",
                    maxFiles: 1,
                    acceptedFiles: "image/*,application/pdf"
                }
            );


            ib_file.on("sending", function() {

                $ib_form_submit.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $ib_form_submit.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    // $file_link.val(upload_resp.file);
                    // files.push(upload_resp.file);
                    //
                    // console.log(files);

                    $('#attachments').val(function(i,val) {
                        return val + (!val ? '' : ',') + upload_resp.file;
                    });


                }
                else{
                    toastr.error(upload_resp.msg);
                }







            });


            $ib_form_submit.click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'transactions/deposit-post/', {


                    account: $('#account').val(),
                    date: $('#date').val(),

                    amount: $('#amount').val(),
                    cats: $('#cats').val(),
                    description: $('#description').val(),
                    attachments: $('#attachments').val(),
                    tags: $('#tags').val(),
                    payer: $('#payer').val(),
                    pmethod: $('#pmethod').val(),
                    ref: $('#ref').val(),
                    currency: $currency.val(),
                    status: $('#status').val(),
                    code: $('#code').val(),
                    company: $('#company').val(),
                    staff_id: $('#staff_id').val(),

                })
                    .done(function (data) {
                        var sbutton = $("#submit");
                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            location.reload();
                        }
                        else {
                            $('#ibox_form').unblock();
                            var body = $("html, body");
                            body.animate({ scrollTop:0 }, '1000', 'swing');
                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
                    });
            });




        });



    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
