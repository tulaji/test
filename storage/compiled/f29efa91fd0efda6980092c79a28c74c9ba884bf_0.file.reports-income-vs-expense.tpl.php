<?php
/* Smarty version 3.1.36, created on 2021-01-13 04:39:54
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports-income-vs-expense.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffebfea99e524_48743994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f29efa91fd0efda6980092c79a28c74c9ba884bf' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports-income-vs-expense.tpl',
      1 => 1596718216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffebfea99e524_48743994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19271496695ffebfea993c89_77193106', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1362514465ffebfea994be4_62566916', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_19271496695ffebfea993c89_77193106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19271496695ffebfea993c89_77193106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }
        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}

        .text-danger{
            color: #F6365B!important;
        }
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1362514465ffebfea994be4_62566916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1362514465ffebfea994be4_62566916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports Income Vs Expense'];?>
 </h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Vs Expense'];?>
</h4>
                        <hr>
                        <h5 class="text-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income'];?>
: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ai']->value,2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</h5>
                        <h5 class="text-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>
: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ae']->value,2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</h5>
                        <hr>
                        <h5>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income minus Expense'];?>
 = <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['aime']->value,2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>

                        </h5>

                        <hr>
                        <h5 class="text-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income This Month'];?>
: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['mi']->value,2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</h5>
                        <h5 class="text-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense This Month'];?>
: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['me']->value,2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</h5>
                        <hr>
                        <h5>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income minus Expense'];?>
 = <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['mime']->value,2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>


                        </h5>

                        <hr>

                    </div>






                </div>
            </div>
        </div>


    </div>
    <!-- Row end-->


    <!-- Row end-->


    <!-- Row end-->
<?php
}
}
/* {/block "content"} */
}
