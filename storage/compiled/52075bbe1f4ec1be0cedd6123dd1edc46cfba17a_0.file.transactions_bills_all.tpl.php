<?php
/* Smarty version 3.1.36, created on 2020-06-14 07:20:12
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_bills_all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ee607ec58f977_32393018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52075bbe1f4ec1be0cedd6123dd1edc46cfba17a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_bills_all.tpl',
      1 => 1591697408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee607ec58f977_32393018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7564891755ee607ec583894_47706685', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7452526775ee607ec58e752_43869379', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_7564891755ee607ec583894_47706685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7564891755ee607ec583894_47706685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div id="panel-12" class="panel">
        <div class="panel-hdr">
            <h2>
                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Bills'];?>
 <span class="fw-300"><i></i></span>
            </h2>
            <div class="panel-toolbar">
                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
            </div>
        </div>
        <div class="panel-container show">
            <div class="panel-content">
                <div class="row">
                    <div class="col-auto svg-icon svg-icon-primary">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-home-tab" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bills" aria-controls="v-pills-home" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <span class="hidden-sm-down ml-1"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
</span>
                            </a>
                            <a class="nav-link active" id="v-pills-profile-tab"  href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bills-all"  aria-controls="v-pills-profile" aria-selected="false">
                               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg>
                                <span class="hidden-sm-down ml-1"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</span>
                            </a>
                            <a class="nav-link" id="v-pills-messages-tab"  href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill"  aria-controls="v-pills-messages" aria-selected="false">
                               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
                                    </g>
                                </svg>
                                <span class="hidden-sm-down ml-1"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add a bill'];?>
</span>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tab-content">

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="panel">
                                        <div class="panel-container">
                                            <div class="panel-content">
                                                <table class="table table-bordered table-hover" id="clx_datatable">
                                                    <thead>
                                                    <tr>
                                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>
                                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Next Due Date'];?>
</th>
                                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bills']->value, 'bill');
$_smarty_tpl->tpl_vars['bill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->do_else = false;
?>
                                                        <tr>
                                                            <td  data-value="<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
">
                                                                    <?php echo $_smarty_tpl->tpl_vars['bill']->value->title;?>

                                                                </a>
                                                            </td>
                                                            <td>
                                                                <?php echo formatCurrency($_smarty_tpl->tpl_vars['bill']->value->net_amount,$_smarty_tpl->tpl_vars['bill']->value->currency);?>
 <br>
                                                                <div class="hr-line-dashed"></div>
                                                                <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['bill']->value->recurring_type);?>

                                                            </td>
                                                            <td>
                                                                <?php echo translate_date_string(date('D M d, Y',strtotime($_smarty_tpl->tpl_vars['bill']->value->next_date)),$_smarty_tpl->tpl_vars['_L']->value);?>

                                                            </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
" class="btn btn-info btn-icon" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fal fa-pencil"></i></a>
                                                                    <a href="javascript:;" class="btn btn-danger btn-icon" onclick="confirmThenGoToUrl(event,'transactions/delete-bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
');" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash"></i></a>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                    </tbody>



                                                </table>
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
    </div>













<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_7452526775ee607ec58e752_43869379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_7452526775ee607ec58e752_43869379',
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
