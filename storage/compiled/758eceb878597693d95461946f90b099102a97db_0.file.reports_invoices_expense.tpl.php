<?php
/* Smarty version 3.1.36, created on 2021-06-19 16:41:45
  from '/var/www/html/ShreeEng_Test/ui/theme/default/reports_invoices_expense.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60cdd0f1ac6070_43716421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '758eceb878597693d95461946f90b099102a97db' => 
    array (
      0 => '/var/www/html/ShreeEng_Test/ui/theme/default/reports_invoices_expense.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cdd0f1ac6070_43716421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20123365860cdd0f1a99f10_12406911', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93429958060cdd0f1a9e153_63720525', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_20123365860cdd0f1a99f10_12406911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20123365860cdd0f1a99f10_12406911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <div class="panel-hdr">
                <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h2>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="containerInvoicesVsExpense" id="containerInvoicesVsExpense" style="min-height: 450px;"></div>
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
class Block_93429958060cdd0f1a9e153_63720525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_93429958060cdd0f1a9e153_63720525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>

        jQuery(document).ready(function() {


          //  var containerInvoicesVsExpense = document.getElementById("containerInvoicesVsExpense");
          //  var chartInvoicesVsExpense = echarts.init(containerInvoicesVsExpense);


            var optionInvoicesVsExpense = {
                title: {
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?>
                    textStyle: {
                        color: '#BDD1F8',
                    },
                    <?php }?>
                    text: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices Vs Expense'];?>
'
                },
                tooltip : {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'cross',
                        label: {
                            backgroundColor: '#6a7985'
                        }
                    }
                },
                legend: {
                    <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?>
                    textStyle: {
                        color: '#BDD1F8',
                    },
                    <?php }?>
                    data:['<?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice'];?>
','<?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
','<?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['expense_type_1'];?>
','<?php echo $_smarty_tpl->tpl_vars['config']->value['expense_type_2'];?>
']
                },
                toolbox: {
                    feature: {
                        saveAsImage: { }
                    }
                },
                grid: {
                    left: '2%',
                    right: '2%',
                    bottom: '15%',
                    containLabel: true
                },
                xAxis : [
                    {
                        type : 'category',
                        boundaryGap : false,
                        data : [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['display'], 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                            '<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
',
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
                        axisTick: {
                            alignWithLabel: true
                        },
                        axisLabel : {
                            rotate : 45,
                            interval : 0,
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?>
                            textStyle: {
                                color: '#BDD1F8',
                            },
                            <?php }?>
                        }
                    }
                ],
                yAxis : [
                    {
                        type : 'value',
                        axisLabel : {
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['nstyle'] == 'dark_mode') {?>
                            textStyle: {
                                color: '#BDD1F8',
                            },
                            <?php }?>
                        }
                    }
                ],
                series : [
                    {
                        name:'<?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Invoice'];?>
',
                        type:'line',
                        stack: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
',
                        areaStyle: { normal: {

                        }
                        },
                        data:[
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['invoice_total'], 'd_invoice_total');
$_smarty_tpl->tpl_vars['d_invoice_total']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d_invoice_total']->value) {
$_smarty_tpl->tpl_vars['d_invoice_total']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['d_invoice_total']->value;?>
,
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ]
                    },
                    {
                        name:'<?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
',
                        type:'line',
                        stack: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
',
                        areaStyle: { normal: {

                        } },
                        data:[
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['invoice_paid'], 'd_invoice_paid');
$_smarty_tpl->tpl_vars['d_invoice_paid']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d_invoice_paid']->value) {
$_smarty_tpl->tpl_vars['d_invoice_paid']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['d_invoice_paid']->value;?>
,
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ]
                    },
                    {
                        name:'<?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>
',
                        type:'line',
                        stack: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
',
                        areaStyle: { normal: {

                        } },
                        data:[
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['expense_total'], 'd_expense_total');
$_smarty_tpl->tpl_vars['d_expense_total']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d_expense_total']->value) {
$_smarty_tpl->tpl_vars['d_expense_total']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['d_expense_total']->value;?>
,
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ]
                    },
                    {
                        name:'<?php echo $_smarty_tpl->tpl_vars['config']->value['expense_type_1'];?>
',
                        type:'line',
                        stack: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
',
                        areaStyle: { normal: {

                        } },
                        data:[
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['expense_type_1'], 'd_expense_type_1');
$_smarty_tpl->tpl_vars['d_expense_type_1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d_expense_type_1']->value) {
$_smarty_tpl->tpl_vars['d_expense_type_1']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['d_expense_type_1']->value;?>
,
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ]
                    },
                    {
                        name:'<?php echo $_smarty_tpl->tpl_vars['config']->value['expense_type_2'];?>
',
                        type:'line',
                        stack: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
',
                        label: {
                            normal: {
                                show: true,
                                position: 'top'
                            }
                        },
                        areaStyle: { normal: {

                        } },
                        data:[
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['expense_type_2'], 'd_expense_type_2');
$_smarty_tpl->tpl_vars['d_expense_type_2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d_expense_type_2']->value) {
$_smarty_tpl->tpl_vars['d_expense_type_2']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['d_expense_type_2']->value;?>
,
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ]
                    }
                ]
            };


           // chartInvoicesVsExpense.setOption(optionInvoicesVsExpense, true);


            let options = {
                chart: { height: 380, type: "line" },
                stroke: { width: 2, curve: "smooth" },
                series: [
                    {
                        name: "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
",
                        type: "area",
                        data: [
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['invoice_paid'], 'd_invoice_paid');
$_smarty_tpl->tpl_vars['d_invoice_paid']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d_invoice_paid']->value) {
$_smarty_tpl->tpl_vars['d_invoice_paid']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['d_invoice_paid']->value;?>
,
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ]
                    }, {
                    name: "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>
",
                    type: "line",
                        data:[
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['expense_total'], 'd_expense_total');
$_smarty_tpl->tpl_vars['d_expense_total']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d_expense_total']->value) {
$_smarty_tpl->tpl_vars['d_expense_total']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['d_expense_total']->value;?>
,
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ]
                }],
                colors: ["#CED4DC", "#6658dd"],
                fill: { type: "solid", opacity: [.35, 1] },
                labels: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value['display'], 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                    '<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
',
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
                markers: { size: 0 },
                yaxis: [ { title: { text: "Series A" } }, { opposite: !0, title: { text: "Series B" } }],
                tooltip: {
                    shared: !0, intersect: !1, y: {
                        formatter: function (e) {
                            return void 0 !== e ? e.toFixed(0) + " points" : e
                        }
                    }
                },
                legend: { offsetY: 7 }
            };


           let chart = (new ApexCharts(document.querySelector("#containerInvoicesVsExpense"), options)).render();


        });



    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
