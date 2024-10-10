<?php
/* Smarty version 3.1.36, created on 2021-06-10 17:37:00
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\reports_expense.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c2006453ea80_57592657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76c787f940de4082ea47c1a970bb35e0e1ec1a31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\reports_expense.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c2006453ea80_57592657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54512753160c200644f0696_73391870', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11932481160c20064531c14_40973977', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_54512753160c200644f0696_73391870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_54512753160c200644f0696_73391870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">


        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Reports'];?>
 </h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>

                            <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Summary'];?>
 [ <?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
 ]</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                                        <div class="">
                                            <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                <?php echo $_smarty_tpl->tpl_vars['currency']->value->symbol;
echo $_smarty_tpl->tpl_vars['total_expense_all_time']->value;?>

                                                <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>
</small>
                                            </h5>
                                            <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>


                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                                        <div class="details">
                                            <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                <?php echo $_smarty_tpl->tpl_vars['currency']->value->symbol;
echo Transaction::totalAmount('Expense',$_smarty_tpl->tpl_vars['currency']->value->id,'current_month',$_smarty_tpl->tpl_vars['all_data']->value);?>

                                                <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense This Month'];?>
  </small>
                                            </h5>
                                            <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>


                                        </div>
                                    </div>

                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-3 bg-primary-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                            <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                <?php echo $_smarty_tpl->tpl_vars['currency']->value->symbol;
echo Transaction::totalAmount('Income',$_smarty_tpl->tpl_vars['currency']->value->id,'last_30_days',$_smarty_tpl->tpl_vars['all_data']->value);?>

                                                <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense Last 30 days'];?>
  </small>
                                            </h5>
                                            <i class="fal fa-credit-card position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>


                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                            <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                <?php echo $_smarty_tpl->tpl_vars['currency']->value->symbol;
echo Transaction::totalAmount('Expense',$_smarty_tpl->tpl_vars['currency']->value->id,'last_30_days',$_smarty_tpl->tpl_vars['all_data']->value);?>

                                                <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense This Week'];?>
  </small>
                                            </h5>
                                            <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <hr>
                        <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Last_20_Expense'];?>
</h2>
                        <hr>
                        <table class="table table-striped table-bordered">
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</th>
                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payee'];?>
</th>



                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>

                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                <tr>
                                    <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                    <td><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['type']);?>
</td>
                                    <td><?php if ($_smarty_tpl->tpl_vars['ds']->value['category'] == 'Uncategorized') {
echo $_smarty_tpl->tpl_vars['_L']->value['Uncategorized'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['category'];?>
 <?php }?></td>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['amount'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['payee'];?>
</td>



                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>

                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['dr'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>


                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                        </table>
                        <hr>

                        <div id="expense_by_month"></div>
                        <hr>

                        <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense by Category'];?>
</h2>

                        <div id="category_pie_chart"></div>

                    </div>
                </div>
            </div>


        </div>





        <!-- Widget-2 end-->
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_11932481160c20064531c14_40973977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_11932481160c20064531c14_40973977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {



            $('.amount').autoNumeric('init', {


                dGroup: 3,
                aPad: true,
                pSign: 'p',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });


            var expense_by_months = {
                chart: { height: 500, type: "area", zoom: { enabled: !1 } },
                colors: ["#5A8DEE", "#FDAC41", "#FF5B5C", "#39DA8A", "#00CFDD"],
                dataLabels: { enabled: !1 },
                stroke: { curve: "straight" },
                series: [{ name: "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense'];?>
", data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['d']->value['value'];?>
,
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>] }],
                title: { text: "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports by Month'];?>
", align: "left"},
                grid: { row: { colors: ["#f3f3f3", "transparent"], opacity: .5 } },
                xaxis: { categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                        "<?php echo $_smarty_tpl->tpl_vars['d']->value['month'];?>
",
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ] },
                yaxis: { tickAmount: 5 }
            };

            new ApexCharts(document.querySelector("#expense_by_month"), expense_by_months).render();


            var category_pie_chart_options = {
                chart: { type: "donut", height: 500 },
                colors: ["#5A8DEE", "#FDAC41", "#FF5B5C", "#39DA8A", "#00CFDD"],
                labels: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                    '<?php echo $_smarty_tpl->tpl_vars['d']->value['category'];?>
',
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ],
                series: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['d']->value['value'];?>
,
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ],
                legend: { itemMargin: { horizontal: 2 } },
                responsive: [ { breakpoint: 576, options: { chart: { width: 300 }, legend: { position: "bottom" } } }]
            };

            new ApexCharts(document.querySelector("#category_pie_chart"), category_pie_chart_options).render();

        });

    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
