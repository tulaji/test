<?php
/* Smarty version 3.1.36, created on 2021-03-16 08:41:16
  from '/var/www/html/pcrm/ui/theme/default/projects_gantt_chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_605021d45518a3_70759836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b798782ac00bc6d7a585afe4e4fbc18ded655537' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/projects_gantt_chart.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605021d45518a3_70759836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1563605325605021d45413b2_43220184', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1350422602605021d45426c6_95248634', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1198594616605021d4543191_86235868', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "head"} */
class Block_1563605325605021d45413b2_43220184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1563605325605021d45413b2_43220184',
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
class Block_1350422602605021d45426c6_95248634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_1350422602605021d45426c6_95248634',
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
class Block_1198594616605021d4543191_86235868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1198594616605021d4543191_86235868',
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
