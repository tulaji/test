<?php
/* Smarty version 3.1.36, created on 2021-03-28 15:49:25
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\projects_gantt_chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6060582d2be278_94222342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb3946a50d361e9c16afccf0aa99612c1beea574' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\projects_gantt_chart.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060582d2be278_94222342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4225470356060582d287072_94158026', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8191292206060582d28a939_21920544', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17052979646060582d28ca70_36184990', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "head"} */
class Block_4225470356060582d287072_94158026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_4225470356060582d287072_94158026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/frappe-gantt@0.5.0/dist/frappe-gantt.css" />
<?php
}
}
/* {/block "head"} */
/* {block "project_content"} */
class Block_8191292206060582d28a939_21920544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_8191292206060582d28a939_21920544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <svg id="gantt"></svg>
<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_17052979646060582d28ca70_36184990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_17052979646060582d28ca70_36184990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/combine/npm/snapsvg@0.5.1,npm/frappe-gantt@0.5.0/dist/frappe-gantt.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {

            var tasks = [
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                {
                    id: '<?php echo $_smarty_tpl->tpl_vars['task']->value->id;?>
',
                    name: '<?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>
',
                    start: '<?php echo $_smarty_tpl->tpl_vars['task']->value->started;?>
',
                    end: '<?php echo $_smarty_tpl->tpl_vars['task']->value->due_date;?>
',

                    <?php if ($_smarty_tpl->tpl_vars['task']->value->status === 'In Progress') {?>
                    progress: 70,
                    <?php } elseif ($_smarty_tpl->tpl_vars['task']->value->status === 'Not Started') {?>
                    progress: 0,
                    <?php } elseif ($_smarty_tpl->tpl_vars['task']->value->status === 'Completed') {?>
                    progress: 100,
                    <?php } elseif ($_smarty_tpl->tpl_vars['task']->value->status === 'Waiting on someone else') {?>
                    progress: 50,
                    <?php } elseif ($_smarty_tpl->tpl_vars['task']->value->status === 'Deferred') {?>
                    progress: 40,
                    <?php } else { ?>
                    progress: 50,
                    <?php }?>
                    // dependencies: 'Task 2, Task 3'
                },
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ]
            var gantt = new Gantt("#gantt", tasks);
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
