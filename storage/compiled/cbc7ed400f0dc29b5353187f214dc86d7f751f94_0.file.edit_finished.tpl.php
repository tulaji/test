<?php
/* Smarty version 3.1.36, created on 2021-04-27 18:22:54
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\manufacturing\edit_finished.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_608809268d64c9_02188497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbc7ed400f0dc29b5353187f214dc86d7f751f94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\manufacturing\\edit_finished.tpl',
      1 => 1619527966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608809268d64c9_02188497 (Smarty_Internal_Template $_smarty_tpl) {
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
                    Edit Finished Product
                    </h2>
                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <div class="alert alert-danger" id="emsg" style="display: none;">
                            <span id="emsgbody"></span>
                        </div>
                        <form class="form-horizontal" id="uform">
                            
                            <div class="row">
                             <div class="col-md-12">
                                <div class="form-group"><label for="unit">Select Processing product</label>
                                    <select class="form-control" onchange="select_process(this.value);" id="process_id" name="process_id" required="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processing_product']->value, 'pro_product');
$_smarty_tpl->tpl_vars['pro_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pro_product']->value) {
$_smarty_tpl->tpl_vars['pro_product']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['pro_product']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['mfinished']->value['processing_product_id'] == $_smarty_tpl->tpl_vars['pro_product']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['pro_product']->value['subject'];?>
-<?php echo $_smarty_tpl->tpl_vars['pro_product']->value['process_code'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                               </div>

                                <div class="col-md-12">
                                <div class="form-group"><label for="unit">Select Finished Product(Merge item in finished items)</label>
                                    <select class="form-control"  id="product_id" name="product_id" required="">
                                      
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sys_items']->value, '_sys_items');
$_smarty_tpl->tpl_vars['_sys_items']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_sys_items']->value) {
$_smarty_tpl->tpl_vars['_sys_items']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['_sys_items']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['mfinished']->value['product_id'] == $_smarty_tpl->tpl_vars['_sys_items']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['_sys_items']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['_sys_items']->value['item_number'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                               </div>

                               <input type="hidden" name="finishedid" value="<?php echo $_smarty_tpl->tpl_vars['mfinished']->value['id'];?>
" >

                                <div class="col-md-12">
                                   <div class="form-group"><label for="name">Subject/Title*</label>
                                        <input type="text" id="subject" value="<?php echo $_smarty_tpl->tpl_vars['mfinished']->value['subject'];?>
" name="subject" class="form-control" autocomplete="off" required>
                                    </div>
                               </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="idate">Finished Date</label>
                                        <input type="date" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mfinished']->value['finished_date'];?>
" id="idate" name="finished_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" required
                                        >
                                    </div>
                                </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="idate1">Weight(Kg)</label>
                                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mfinished']->value['weight'];?>
" id="weight" name="weight" readonly >
                                            <input type="hidden" name="order_id" id="order_id" value="<?php echo $_smarty_tpl->tpl_vars['mfinished']->value['order_id'];?>
">
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="idate1">Used Weight(Kg)</label>
                                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mfinished']->value['used_weight'];?>
"  id="used_weight" name="used_weight">
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="idate1">Qty(no of item generate)</label>
                                            <input type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mfinished']->value['qty'];?>
" id="qty" name="qty">
                                        </div>
                                    </div>

                             
                               </div>



                            <div class="form-group"><label for="description">Finished nots</label>

                                <textarea id="description" class="form-control" rows="3" name="note"><?php echo $_smarty_tpl->tpl_vars['mfinished']->value['note'];?>
</textarea>
                            </div>

                            <hr>


                            <input type="hidden" name="file_link" id="file_link" value="">

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" id="submitupdate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
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
