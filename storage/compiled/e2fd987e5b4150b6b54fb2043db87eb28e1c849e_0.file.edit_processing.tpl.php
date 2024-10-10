<?php
/* Smarty version 3.1.36, created on 2021-04-27 16:15:14
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\manufacturing\edit_processing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6087eb3a32fad2_53326923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2fd987e5b4150b6b54fb2043db87eb28e1c849e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\manufacturing\\edit_processing.tpl',
      1 => 1619520306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6087eb3a32fad2_53326923 (Smarty_Internal_Template $_smarty_tpl) {
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
                    Edit Work In progress
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

                                <div class="form-group"><label for="unit">Select Order</label>
                                    <select class="form-control" id="orderid" name="order_id" required="">
                                       
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['morder']->value, '_sys_morder');
$_smarty_tpl->tpl_vars['_sys_morder']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_sys_morder']->value) {
$_smarty_tpl->tpl_vars['_sys_morder']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['_sys_morder']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['mprocess']->value['orderid'] == $_smarty_tpl->tpl_vars['_sys_morder']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['_sys_morder']->value['order_name'];?>
-MO<?php echo $_smarty_tpl->tpl_vars['_sys_morder']->value['orderid'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                               </div>
                                <div class="col-md-12">
                                   <div class="form-group"><label for="name">Subject/Title*</label>
                                        <input type="text" id="subject" value="<?php echo $_smarty_tpl->tpl_vars['mprocess']->value['subject'];?>
" name="subject" class="form-control" autocomplete="off" required>
                                        <input type="hidden" name="orderidval" value="<?php echo $_smarty_tpl->tpl_vars['mprocess']->value['id'];?>
">
                                    </div>
                               </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="idate">Start Date</label>
                                        <input type="date" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mprocess']->value['start_date'];?>
"  id="idate" name="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" required
                                        >
                                    </div>
                                </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="idate1">End Date</label>
                                        <input type="date" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mprocess']->value['end_date'];?>
"  id="idate1" name="end_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true"
                                        >
                                    </div>
                                </div>

                             
                               </div>



                            <div class="form-group"><label for="description">Process nots</label>

                                <textarea id="description" class="form-control" rows="3" name="note"><?php echo $_smarty_tpl->tpl_vars['mprocess']->value['note'];?>
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
