<?php
/* Smarty version 3.1.36, created on 2024-10-05 21:31:50
  from 'C:\xampp\htdocs\CRM_FM\ui\theme\default\reports_invoices_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_670162ee315716_11010158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3720da8ab371302fbdf96ff011f3e6035ce27653' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRM_FM\\ui\\theme\\default\\reports_invoices_summary.tpl',
      1 => 1727860537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670162ee315716_11010158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_525237967670162edd546a0_47584050', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32642700670162ee173c55_69482351', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_525237967670162edd546a0_47584050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_525237967670162edd546a0_47584050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">

            <div class="card border" id="t_options">

                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices"><i class="fal fa-th"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices_summary"><i class="fal fa-chart-bar"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
</a></li>
                    </ul>
                </div>




                <div class="card-body">




                    <div class="tab-content">
                        <div id="details" class="tab-pane fade show active ib-tab-box">


                            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
 [ <?php echo $_smarty_tpl->tpl_vars['_L']->value['Last 12 Months'];?>
 ]</h3>


                            <div class="row">
                                <div class="col-md-9">
                                    <div class="container_sales_chart" id="container_sales_chart" style="min-height: 450px;"></div>
                                </div>
                                <div class="col-md-3">

                                    <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                            <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                <?php echo $_smarty_tpl->tpl_vars['total_invoice']->value;?>

                                                <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice'];?>
</small>
                                            </h5>
                                            <i class="fal fa-list position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>


                                        </div>
                                    </div>




                                    <?php if ($_smarty_tpl->tpl_vars['all_data']->value) {?>

                                        <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                                <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                    <?php echo $_smarty_tpl->tpl_vars['total_invoice_items']->value;?>

                                                    <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Count'];?>
</small>
                                                </h5>
                                                <i class="fal fa-list position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>


                                            </div>
                                        </div>


                                    <?php }?>

                                    <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                            <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                <?php echo $_smarty_tpl->tpl_vars['total_invoice_amount']->value;?>

                                                <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Amount'];?>
</small>
                                            </h5>
                                            <i class="fal fa-list position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>


                                        </div>
                                    </div>

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
class Block_32642700670162ee173c55_69482351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_32642700670162ee173c55_69482351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>

        jQuery(document).ready(function() {

            var options = {
                series: [{
                    name: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
',
                    data: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['data'], 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['d']->value;?>
,
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
                }],
                chart: {
                    height: 400,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            position: 'top', // top, center, bottom
                        },
                    }
                },
                dataLabels: {
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ["#304758"]
                    }
                },

                xaxis: {
                    categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['display'], 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                        '<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
',
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
                    position: 'top',
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    crosshairs: {
                        fill: {
                            type: 'gradient',
                            gradient: {
                                colorFrom: '#D8E3F0',
                                colorTo: '#BED1E6',
                                stops: [0, 100],
                                opacityFrom: 0.4,
                                opacityTo: 0.5,
                            }
                        }
                    },
                    tooltip: {
                        enabled: true,
                    }
                },
                yaxis: {
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false,
                    },
                    labels: {
                        show: false,

                    }

                },
                title: {
                    text: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
',
                    floating: true,
                    offsetY: 330,
                    align: 'center',
                    style: {
                        color: '#444'
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#container_sales_chart"), options);
            chart.render();


        });



    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
