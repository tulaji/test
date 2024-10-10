<?php
/* Smarty version 3.1.36, created on 2021-04-27 19:20:23
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\manufacturing\edit_transfer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6088169f723267_91024896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fd275485fb6e52317b4d25cdc851d191668bd6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\manufacturing\\edit_transfer.tpl',
      1 => 1619531414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6088169f723267_91024896 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <form class="form-horizontal" id="uform">
                            
                            <div class="row">
                             <div class="col-md-12">
                                <div class="form-group"><label for="unit">Select Finished product</label>
                                    <select class="form-control" onchange="select_process(this.value);" id="finished_id" name="finished_id" required="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['finished_product']->value, 'finish_product');
$_smarty_tpl->tpl_vars['finish_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['finish_product']->value) {
$_smarty_tpl->tpl_vars['finish_product']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['finish_product']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['tproduct']->value['finished_id'] == $_smarty_tpl->tpl_vars['finish_product']->value['id']) {?> selected <?php }?>
                                            ><?php echo $_smarty_tpl->tpl_vars['finish_product']->value['subject'];?>
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
                                        <input type="text" id="subject" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['tproduct']->value['product_name'];?>
" class="form-control" autocomplete="off" readonly>
                                    </div>
                               </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="idate">Transfer Date</label>
                                        <input type="date" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tproduct']->value['transfer_date'];?>
" id="idate" name="transfer_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" required
                                        >
                                    </div>
                                </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="idate1">Weight(Kg)</label>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tproduct']->value['weight'];?>
"   class="form-control" id="weight" name="weight" readonly >

<input type="hidden" name="finished_ref" id="finished_ref" value="<?php echo $_smarty_tpl->tpl_vars['tproduct']->value['finished_ref'];?>
" >
<input type="hidden" name="order_id" id="order_id" value="<?php echo $_smarty_tpl->tpl_vars['tproduct']->value['order_id'];?>
" >
<input type="hidden" name="product_id" id="product_id" value="<?php echo $_smarty_tpl->tpl_vars['tproduct']->value['product_id'];?>
" >
<input type="hidden" name="productname" id="productname" value="<?php echo $_smarty_tpl->tpl_vars['tproduct']->value['product_name'];?>
" >
<input type="hidden" name="transfer_id" value="<?php echo $_smarty_tpl->tpl_vars['tproduct']->value['id'];?>
"  >
                                        </div>
                                    </div>
                                 
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="idate1">Qty(no of item generated)</label>
                                            <input type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tproduct']->value['qty'];?>
"   id="qty" name="qty">
                                        </div>
                                    </div>

                             
                               </div>



                            <div class="form-group"><label for="description">Finished nots</label>

                                <textarea id="description" class="form-control" rows="3" value="<?php echo $_smarty_tpl->tpl_vars['tproduct']->value['note'];?>
" name="note"></textarea>
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
