<?php
/* Smarty version 3.1.36, created on 2021-03-16 08:39:28
  from '/var/www/html/pcrm/ui/theme/default/accounts-manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60502168283730_43298288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '935b65e1940ef8ff398959441a1100f0394e248a' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/accounts-manage.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60502168283730_43298288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4947703656050216825f727_25967623', "head");
?>







<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150097331160502168262494_98037157', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202740766260502168280f38_88197853', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_4947703656050216825f727_25967623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_4947703656050216825f727_25967623',
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
class Block_150097331160502168262494_98037157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_150097331160502168262494_98037157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Accounts'];?>
</h2>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <table class="table table-striped table-bordered" id="clx_datatable">

                            <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['balances']->value['banks'], 'bank');
$_smarty_tpl->tpl_vars['bank']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bank']->value) {
$_smarty_tpl->tpl_vars['bank']->do_else = false;
?>



                                <tr>
                                    <td>
                                        <h4><?php echo $_smarty_tpl->tpl_vars['bank']->value->account;?>
</h4>
                                    </td>
                                    <td>
                                        <?php if (((isset($_smarty_tpl->tpl_vars['balances']->value['balances'][$_smarty_tpl->tpl_vars['bank']->value->id])))) {?>



                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Equity'];?>
 (<?php echo $_smarty_tpl->tpl_vars['_L']->value['Initial balance'];?>
): <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['total_equity_bank'][$_smarty_tpl->tpl_vars['bank']->value->id],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>
</strong> <br>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total in'];?>
: <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['total_in_bank'][$_smarty_tpl->tpl_vars['bank']->value->id],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>
 </strong>  <br>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total out'];?>
: <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['total_out_bank'][$_smarty_tpl->tpl_vars['bank']->value->id],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>
 </strong>  <br>

                                            <hr>

                                            <strong> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
 (<?php echo $_smarty_tpl->tpl_vars['_L']->value['in home currency'];?>
) : <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['balances'][$_smarty_tpl->tpl_vars['bank']->value->id],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>
</strong>

                                        <?php }?>
                                    </td>
                                    <td>


                                        <div class="btn-group">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add-equity/<?php echo $_smarty_tpl->tpl_vars['bank']->value->id;?>
" class="btn btn-sm btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Record initial balance'];?>
</a>

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/edit/<?php echo $_smarty_tpl->tpl_vars['bank']->value->id;?>
" class="btn btn-sm btn-warning"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['bank']->value->ib_url;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != '') {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['bank']->value->ib_url;?>
" target="_blank" class="btn btn-sm btn-primary"><i class="fal fa-globe"></i></a>
                                            <?php }?>

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/delete/<?php echo $_smarty_tpl->tpl_vars['bank']->value->id;?>
" id="did<?php echo $_smarty_tpl->tpl_vars['bank']->value->id;?>
" class="cdelete btn btn-danger btn-sm"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                        </div>


                                    </td>
                                </tr>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>




                        </table>

                        <div class="hr-line-dashed"></div>

                        <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Net Worth'];?>
 - <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['net_worth'],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>
</h3>

                    </div>
                </div>

            </div>



        </div>



    </div>


    <input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_202740766260502168280f38_88197853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_202740766260502168280f38_88197853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(function () {
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                var lan_msg = $("#_lan_are_you_sure").val();
                bootbox.confirm(lan_msg, function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "accounts/delete/" + id + '/';
                    }
                });
            });

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
",
                    },
                }
            );

        })
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block "script"} */
}
