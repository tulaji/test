<?php
/* Smarty version 3.1.36, created on 2021-04-13 17:15:12
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\manufacturing\add_finished.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60758448bd2ac1_50721406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e0c819f94ebdd63246ed040aaad7a505fd0387c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\manufacturing\\add_finished.tpl',
      1 => 1618314113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60758448bd2ac1_50721406 (Smarty_Internal_Template $_smarty_tpl) {
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
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processing_product']->value, 'pro_product');
$_smarty_tpl->tpl_vars['pro_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pro_product']->value) {
$_smarty_tpl->tpl_vars['pro_product']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['pro_product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pro_product']->value['subject'];?>
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
                                        <option value="">...</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sys_items']->value, '_sys_items');
$_smarty_tpl->tpl_vars['_sys_items']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_sys_items']->value) {
$_smarty_tpl->tpl_vars['_sys_items']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['_sys_items']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_sys_items']->value['name'];?>
-<?php echo $_smarty_tpl->tpl_vars['_sys_items']->value['item_number'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
