<?php
/* Smarty version 3.1.36, created on 2024-10-06 18:14:56
  from 'C:\xampp\htdocs\CRM_FM\ui\theme\default\user_clinic_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_67028648bbec91_16843515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '507126bb5204a2a8c0ff2e08afbab84ce7d72ab4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRM_FM\\ui\\theme\\default\\user_clinic_view.tpl',
      1 => 1728218692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67028648bbec91_16843515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147549254067028648b73d79_55058183', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78181794067028648b79381_60976415', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204363073667028648bb75a0_60408194', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_147549254067028648b73d79_55058183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_147549254067028648b73d79_55058183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2,
        h2 {
            font-size: 1.25rem;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }

        .text-info {
            color: #6772E5 !important;
        }

        .text-success {
            color: #2CCE89 !important;
        }

        .text-danger {
            color: #F6365B !important;
        }

        .text-warning {
            color: #FB6340 !important;
        }

        .text-primary {
            color: #10CDEF !important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_78181794067028648b79381_60976415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_78181794067028648b79381_60976415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="card border" id="t_options">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div id="details" class="tab-pane fade show active ib-tab-box">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <form>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                        <input style="min-width: 250px;" type="text"
                                        name="reportrange" class="form-control" placeholder="Enter Price here" id="reportrange">
                                 
                                        </div>
                                        <div class="col-md-4">
                                            <select id="cid" name="cid" class="form-control">
                                                <option value="">Search Location</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
$_smarty_tpl->tpl_vars['cs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
$_smarty_tpl->tpl_vars['cs']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['cs']->value['location'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary" id="ib_filter"
                                                type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Filter'];?>
</button>
                                                <button class="btn btn-success" id="clear_filter"
                                                type="submit">clear</button>
                                        </div>
                                    </div>
                                                                    </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive" id="ib_data_panel">
                                    <table class="table table-striped table-hover display" id="ib_dt">
                                        <thead>
                                            <tr class="heading">
                                                <th>ID</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                                                <th class="text-right">Location</th>
                                                <th class="text-right">Google Profile</th>
                                                <th class="text-right">Website</th>
                                                <th>Contanct Number</th>
                                                <th>Price</th>
                                                <th>Generate Pass</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_204363073667028648bb75a0_60408194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_204363073667028648bb75a0_60408194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function() {
            var $cid = $('#cid');
            var $reportrange = $('#reportrange')
            var $ib_data_panel = $("#ib_data_panel");
            $ib_data_panel.block({ message:block_msg });
            $cid.select2({
            });
            var ib_dt = $('#ib_dt').DataTable({
                "serverSide": true,
                dom:
                    /*	--- Layout Structure
                    --- Options
                    l	-	length changing input control
                    f	-	filtering input
                    t	-	The table!
                    i	-	Table information summary
                    p	-	pagination control
                    r	-	processing display element
                    B	-	buttons
                    R	-	ColReorder
                    S	-	Select

                    --- Markup
                    < and >				- div element
                    <"class" and >		- div with a class
                    <"#id" and >		- div with an ID
                    <"#id.class" and >	- div with an ID and a class

                    --- Further reading
                    https://datatables.net/reference/option/dom
                    --------------------------------------
                 */
                    "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'l>>" +
                    // Removed 'B' for buttons
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                "ajax": {
                    "url": base_url + "user_clinic/tr_list/",
                    "type": "POST",
                    "data": function(d) {
                        d.reportrange = $reportrange.val();
                        d.cid = $cid.val();
                        console.log(d);

                    }
                },
                "responsive": true,
                "initComplete": function() {
                    $ib_data_panel.unblock();
                },
            });
            var $ib_filter = $("#ib_filter");
            $ib_filter.on('click', function(e) {
                console.log('data clicked')
                e.preventDefault();
                $ib_data_panel.block({ message: block_msg });
                ib_dt.ajax.reload(
                    function() {
                        $ib_data_panel.unblock();
                    }
                );
            });

        var $clear_filter = $("#clear_filter");
        $clear_filter.on('click', function() {
            // Reset the filters
            $reportrange.val('');  // Clear the date range input
            $cid.val('').trigger('change');  // Clear the select2 dropdown

            // Reload DataTable with no filters
            $ib_data_panel.block({ message: block_msg });
            ib_dt.ajax.reload(function() {
                $ib_data_panel.unblock();
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
