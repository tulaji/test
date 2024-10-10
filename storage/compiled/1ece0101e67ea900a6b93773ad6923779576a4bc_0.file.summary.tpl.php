<?php
/* Smarty version 3.1.36, created on 2021-01-19 08:04:20
  from '/Users/razib/Documents/valet/business-suite/apps/shopify/views/summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6006d8d4a74b58_99010774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ece0101e67ea900a6b93773ad6923779576a4bc' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/shopify/views/summary.tpl',
      1 => 1610456068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6006d8d4a74b58_99010774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7070766326006d8d4a56753_96784424', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13145811226006d8d4a6c053_33420587', "script");
?>

<?php }
/* {block "content"} */
class Block_7070766326006d8d4a56753_96784424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7070766326006d8d4a56753_96784424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['app_view_path']->value)."/includes/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <div class="row">

        <div class="col-md-12">



            <div class="card">
                <div class="card-body">
                    <div class="text-center" id="clxLoader">
                        <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>
                    </div>

                    <div id="clxContent">

                    </div>

                    <h5 class="my-3">Sales</h5>

                    <div id="chart_sales">

                    </div>

                    <h5 class="my-3">Orders</h5>

                    <div id="chart_orders">

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
class Block_13145811226006d8d4a6c053_33420587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_13145811226006d8d4a6c053_33420587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['app_view_path']->value)."/includes/base_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php echo '<script'; ?>
>
        $(function () {

            var $clxLoader = $('#clxLoader');
            var $clxContent = $('#clxContent');

            axios.get('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
shopify/app/x_dashboard').then(function (response) {
                $clxLoader.hide();
                $clxContent.html(response.data.html);

                if(response.data.has_dashboard) {
                    var chart_sales = new ApexCharts(document.querySelector("#chart_sales"), {
                        chart: {
                            type: 'area',
                            fontFamily: 'Roboto, sans-serif',
                            height: 340,
                        },
                        series: [{
                            name: 'sales',
                            data: response.data.chart_data_sales,
                        }],
                        xaxis: {
                            type: 'category'
                        },
                    });

                    chart_sales.render();
                }

                if(response.data.has_dashboard)
                    {
                        var chart_orders = new ApexCharts(document.querySelector("#chart_orders"), {
                            chart: {
                                type: 'bar',
                                fontFamily: 'Roboto, sans-serif',
                                height: 340,
                            },
                            series: [{
                                name: 'sales',
                                data: response.data.chart_data_orders,
                            }],
                            xaxis: {
                                type: 'category'
                            },
                        });

                        chart_orders.render();
                    }



            }).catch(function (reason) {
                console.log(reason);
            });



        })
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
