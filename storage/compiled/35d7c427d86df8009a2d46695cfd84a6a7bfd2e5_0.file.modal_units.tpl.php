<?php
/* Smarty version 3.1.36, created on 2021-04-07 10:36:30
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\modal_units.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_606d3dd6e131a3_43823118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35d7c427d86df8009a2d46695cfd84a6a7bfd2e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\modal_units.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606d3dd6e131a3_43823118 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto">
    <div class="panel mb-0 rounded-0" id="modal_form">
        <div class="panel-hdr">
            <h2>
                <?php if ($_smarty_tpl->tpl_vars['f_type']->value == 'edit') {?>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Create New'];?>

                <?php }?>
            </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form class="form-horizontal" id="ib_modal_form">

                    <div class="form-group"><label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
<small class="red">*</small></label>

                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
">


                    </div>


                    <div class="form-group"><label for="type"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>

                        <select class="form-control" id="type" name="type">
                            <option value="Piece" <?php if ($_smarty_tpl->tpl_vars['val']->value['name'] == 'Piece') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Piece'];?>
</option>
                            <option value="Weight" <?php if ($_smarty_tpl->tpl_vars['val']->value['name'] == 'Weight') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weight'];?>
</option>
                            <option value="Time" <?php if ($_smarty_tpl->tpl_vars['val']->value['name'] == 'Time') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Time'];?>
</option>
                            <option value="Dimension" <?php if ($_smarty_tpl->tpl_vars['val']->value['name'] == 'Dimension') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dimension'];?>
</option>

                            <option value="Surface" <?php if ($_smarty_tpl->tpl_vars['val']->value['name'] == 'Surface') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Surface'];?>
</option>

                            <option value="Volume" <?php if ($_smarty_tpl->tpl_vars['val']->value['name'] == 'Volume') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Volume'];?>
</option>


                        </select>


                    </div>









                    <?php if ($_smarty_tpl->tpl_vars['f_type']->value == 'edit') {?>
                        <input type="hidden" name="uid" id="uid" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['uid'];?>
">
                    <?php } else { ?>
                        <input type="hidden" name="uid" id="uid" value="0">
                    <?php }?>


                    <input type="hidden" name="f_type" id="f_type" value="<?php echo $_smarty_tpl->tpl_vars['f_type']->value;?>
">

                    <button class="btn btn-primary modal_submit" type="submit" id="modal_submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>

                </form>
            </div>
        </div>
    </div>
</div>


<?php }
}
