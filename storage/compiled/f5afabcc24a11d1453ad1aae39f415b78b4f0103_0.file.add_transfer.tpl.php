<?php
/* Smarty version 3.1.36, created on 2021-04-13 19:07:36
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\manufacturing\add_transfer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60759ea0483e09_05773499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5afabcc24a11d1453ad1aae39f415b78b4f0103' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\manufacturing\\add_transfer.tpl',
      1 => 1618320322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60759ea0483e09_05773499 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['finished_product']->value, 'finish_product');
$_smarty_tpl->tpl_vars['finish_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['finish_product']->value) {
$_smarty_tpl->tpl_vars['finish_product']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['finish_product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['finish_product']->value['subject'];?>
-<?php echo $_smarty_tpl->tpl_vars['finish_product']->value['finished_ref'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                                <button class="btn btn-primary" type="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-hdr">
                   <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>
</h2>
                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
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



                </div>
            </div>
        </div>


    </div>
 </div>


<?php }
}