<?php
/* Smarty version 3.1.36, created on 2021-04-26 11:11:13
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\manufacturing\mps_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60865279db88f8_43350682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6c77516a8ade66a1846f7e74c47ce6c1553ffeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\manufacturing\\mps_edit.tpl',
      1 => 1618138722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60865279db88f8_43350682 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
    
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

            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</h2>
        </div>


        <div class="panel-container">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-horizontal" role="form" id="edit_form" method="post">
                            <div class="form-group">
                                <label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
 </label>
                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
" name="name" id="name">
                            </div>

                            <div class="row">
                               <div class="col-md-6">
                                      <div class="form-group">
                                            <label for="rate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Number'];?>
</label>
                                            <input type="text" class="form-control" name="item_number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_number;?>
" id="item_number">
                                        </div>
                               </div>
                               <div class="col-md-6">
                                       <div class="form-group">
                                             <label for="tds_deduction">TDS Deduction ? </label><br/>
                                             <input type="radio" <?php if ($_smarty_tpl->tpl_vars['item']->value->tds_deduction == ('YES')) {?>checked="checked" <?php }?>  name="tds_deduction" id="tds_deduction"  value="YES"> YES  <br/>

                                             <input type="radio" <?php if ($_smarty_tpl->tpl_vars['item']->value->tds_deduction == ('NO')) {?>checked="checked" <?php }?>  name="tds_deduction" value="NO" >  NO
                                       </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cost_price" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cost Price'];?>
</label>
                                        <input type="text" id="cost_price" name="cost_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
"  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-d-group="2" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->cost_price;?>
">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="available" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Available'];?>
</label>
                                        <input type="text" id="inventory" name="inventory" class="form-control" autocomplete="off" value="<?php echo round($_smarty_tpl->tpl_vars['item']->value->inventory);?>
">
                                    </div>
                               </div>
                                
                            </div>
                           

                              

                        <?php if ($_smarty_tpl->tpl_vars['item']->value->raw_type == 'Rectangle') {?>
                           <div class="form-group">
                               
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="inventory"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Width'];?>
(cm)</label>
                                            <input type="text" id="width" name="width" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Width'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->width;?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="inventory"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
(cm)</label>
                                            <input type="text" id="width" name="length" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->length;?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="inventory"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Height'];?>
(cm)</label>
                                            <input type="text" id="width" name="height" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Height'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->height;?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                        <label for="inventory">Density(kg/dm³) </label>
                                            <input type="text" id="density" name="density" placeholder="Density" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->density;?>
" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <?php }?>
                         <?php if ($_smarty_tpl->tpl_vars['item']->value->raw_type == 'Square') {?>
                          <div class="form-group">
                               
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inventory"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Width'];?>
</label>
                                            <input type="text" id="swidth" name="swidth" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Width'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->width;?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="inventory"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
</label>
                                            <input type="text" id="swidth" name="slength" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->length;?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="inventory">Density</label>
                                            <input type="text" id="sdensity" name="sdensity" placeholder="Density" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->density;?>
" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                         <?php }?>

                            

                            <div class="form-group">
                                <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                                <textarea id="description" name="description" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>
</textarea>
                            </div>

                            <input type="hidden" name="raw_type" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->raw_type;?>
">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">
                            <input type="hidden" name="file_link" id="file_link_image" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->image;?>
">
                            <button id="update" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Update'];?>
</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form action="" class="dropzone" id="upload_container">

                            <div class="dz-message">
                                <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                                <br />
                                <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                            </div>

                            <hr>



                        </form>

                        <?php echo $_smarty_tpl->tpl_vars['has_img']->value;?>


                    </div>

                </div>


            </div>


        </div>
    </div>


</div>


<?php }
}
