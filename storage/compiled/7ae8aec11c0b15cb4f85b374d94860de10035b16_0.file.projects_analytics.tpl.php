<?php
/* Smarty version 3.1.36, created on 2021-03-16 08:41:29
  from '/var/www/html/pcrm/ui/theme/default/projects_analytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_605021e183ee99_87169827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ae8aec11c0b15cb4f85b374d94860de10035b16' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/projects_analytics.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605021e183ee99_87169827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1179565752605021e182ff30_53536758', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1391556352605021e1831555_39585554', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "project_content"} */
class Block_1179565752605021e182ff30_53536758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_1179565752605021e182ff30_53536758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <h3>Tasks by status</h3>
            <div class="hr-line-dashed"></div>

            <div id="tasks_by_status"></div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="hr-line-dashed"></div>
            <h3>Completed tasks last 7 days</h3>
            <div class="hr-line-dashed"></div>

            <div id="task_counts"></div>
        </div>
    </div>


<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_1391556352605021e1831555_39585554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1391556352605021e1831555_39585554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>



        $(function () {

            var task_counts_options = {
                chart: {
                    type: 'bar',
                    height: 400
                },
                series: [{
                    name: 'sales',
                    data: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['task_counts']->value, 'task_count');
$_smarty_tpl->tpl_vars['task_count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task_count']->value) {
$_smarty_tpl->tpl_vars['task_count']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['task_count']->value;?>
,
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ]
                }],
                xaxis: {
                    categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['last_7_days']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
                        '<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
',
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
                    axisBorder: {
                        show: false
                    },

                }
            };

            var task_counts_chart = new ApexCharts(document.querySelector("#task_counts"), task_counts_options);

            task_counts_chart.render();

            var tasks_by_status_options = {
                chart: {
                    width: 500,
                    type: 'pie',
                },
                labels: ['Not Started', 'Completed', 'In Progress', 'Deferred', 'Waiting on someone else'],
                series: [
                    <?php echo $_smarty_tpl->tpl_vars['task_status_counts']->value['not_started'];?>
, <?php echo $_smarty_tpl->tpl_vars['task_status_counts']->value['completed'];?>
, <?php echo $_smarty_tpl->tpl_vars['task_status_counts']->value['in_progress'];?>
, <?php echo $_smarty_tpl->tpl_vars['task_status_counts']->value['deferred'];?>
, <?php echo $_smarty_tpl->tpl_vars['task_status_counts']->value['waiting'];?>

                ],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }

            var tasks_by_status_chart = new ApexCharts(
                document.querySelector("#tasks_by_status"),
                tasks_by_status_options
            );

            tasks_by_status_chart.render();


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
