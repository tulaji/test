<?php
/* Smarty version 3.1.36, created on 2020-12-15 07:05:48
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/payments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fd8a69c541de4_65844452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89dc08d9af48c6a27b31edf9c7158b72a9cac05e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/payments.tpl',
      1 => 1600594256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8a69c541de4_65844452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14641559665fd8a69c537a30_89040903', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9227139515fd8a69c538a22_37838810', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4946809035fd8a69c5410e1_82169033', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_14641559665fd8a69c537a30_89040903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14641559665fd8a69c537a30_89040903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
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
class Block_9227139515fd8a69c538a22_37838810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9227139515fd8a69c538a22_37838810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payments'];?>
</h2>

                </div>

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <table class="table table-striped" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
#</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>


                                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transaction ID'];?>
</th>

                                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>

                                </thead>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr class="<?php if ($_smarty_tpl->tpl_vars['ds']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['iid'];?>
</td>
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                        <td class="text-right amount text-info"><?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                                        <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['cr'];?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</a></td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </table>
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
class Block_4946809035fd8a69c5410e1_82169033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_4946809035fd8a69c5410e1_82169033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
",
                    },
                }
            );
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
