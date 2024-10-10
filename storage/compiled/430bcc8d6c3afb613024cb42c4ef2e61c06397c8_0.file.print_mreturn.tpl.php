<?php
/* Smarty version 3.1.36, created on 2021-04-28 16:32:06
  from 'C:\xampp\htdocs\pcrm\ui\theme\default\manufacturing\print_mreturn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_608940aed726e5_12523164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '430bcc8d6c3afb613024cb42c4ef2e61c06397c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\ui\\theme\\default\\manufacturing\\print_mreturn.tpl',
      1 => 1619607723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608940aed726e5_12523164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\pcrm\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>
<html>

<head>

    <style>

        /*

        PDF library using PHP have some limitations and all CSS properties may not support. Before Editing this file, Please create a backup, so that You can restore this.

        The location of this file is here- system/lib/invoices/pdf-x2.php

        */

        * { margin: 0; padding: 0; }
        body {
            /*

            Important: Do not Edit Font Name, Unless you are sure. It's required for PDF Rendering Properly

            */

        <?php echo '<?php ';?>
if (isset($creating_pdf)) {
            echo 'font: 14px/1.4  dejavusanscondensed;';
        } else {
            echo 'font: 14px/1.4 Helvetica, Arial, sans-serif;';
        } <?php echo '?>';?>




            /*

            Font Name End

            */
        }

           @media print
        {
            .no-print, .no-print *
            {
                display: none !important;
            }
        }

        #page-wrap { width: 874px; margin: 0 auto; }

        table { border-collapse: collapse; }
        table td, table th { border: 1px solid black; padding: 5px; }


        #customer { overflow: hidden; }

        #logo { text-align: left; float: left; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; overflow: hidden; }





        #meta { margin-top: 1px; width: 100%; float: right; }
        #meta td { text-align: right;  }
        #meta td.meta-head { text-align: left; background: #eee; }
        #meta td textarea { width: 100%; height: 20px; text-align: right; }

        #items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
        #items th { background: #eee; }
        #items textarea { width: 80px; height: 50px; }
        #items tr.item-row td {  vertical-align: top; }
        #items td.description { width: 300px; }
        #items td.item-name { width: 175px; }
        #items td.description textarea, #items td.item-name textarea { width: 100%; }
        #items td.total-line { border-right: 0; text-align: right; }
        #items td.total-value { border-left: 0; padding: 10px; }
        #items td.total-value textarea { height: 20px; background: none; }
        #items td.balance { background: #eee; }
        #items td.blank { border: 0; }

        #terms { text-align: left; margin: 20px 0 0 0; }
        #terms h5 { text-transform: uppercase; font-size: 13px; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
        #terms textarea { width: 100%; text-align: center;}

        <?php echo '<?php ';?>
if ($config['rtl'] == 1) { <?php echo '?>';?>


        html body {
            direction: rtl;
        }
        table td, table th {
            text-align: right;
        }

        <?php echo '<?php ';?>
} else { <?php echo '?>';?>

        #items td.blank { border: 0; }
        <?php echo '<?php ';?>
} <?php echo '?>';?>



        .amt{
            text-align: right!important;
        }

    </style>

</head>

<body>

<div id="page-wrap">

    <table width="100%">
        <tr>
            <td style="border: 0;  text-align: left" width="62%">
              <div id="logo" style="font-size:18px">
                    <img id="image" src="<?php echo APP_URL;?>
/storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="logo" /> <br> <br>
                    <?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
 <br>
                    <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>
 
                </div>
            </td>
            <td style="border: 0;  text-align: right" width="38%">
                
            </td>
        </tr>



    </table>

    <hr>
    <div style="clear:both"></div>

    <div id="customer">

        <table id="meta">
            <tr>
                
<td rowspan="8"  style="border: 1px solid white; border-right: 0px solid black; text-align: left;vertical-align: top;" width="62%">
                   <strong>Sr. No :#<?php echo $_smarty_tpl->tpl_vars['d']->value['orderid'];?>
</strong> <br>

                    <strong>Supplier</strong> <br>
                    <?php echo $_smarty_tpl->tpl_vars['d']->value['team_name'];?>
 
                  
                </td>

            </tr>
          
            
            
            
            
             <tr>
                <td class="meta-head">Sr. no #</td>
                <td><?php echo $_smarty_tpl->tpl_vars['d']->value['orderid'];?>
</td>
            </tr>
            <tr>

                <td class="meta-head">Status</td>
                <td>
                    
                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['order_status'] == 'RETURN-OUT') {?>
                                            <h3 class="alert alert-danger">RETURN</h3>
                                        <?php } else { ?>
                                            <h3 class="alert alert-danger">Damaged</h3>
                                        <?php }?>
                </td>
            </tr>
            <tr>

                <td class="meta-head">Date</td>
                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['start_date']));?>
</td>
            </tr>
          

         


        </table>

    </div>

 

                              <table id="items">

                                        <thead>
                                        <tr class="text-dark">
                                            <th id="cell-id" class="text-semibold text-bolds">S/L</th>
                                            <th id="cell-item" class="text-semibold text-bolds"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                            <th id="cell-item" class="text-semibold text-bolds"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unit'];?>
</th>
                                            <th id="cell-qty" class="text-center text-semibold text-bolds"><?php if ($_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '' || $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '1') {
echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];
} else {
echo $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'];
}?></th>

                                            <th class="text-semibold text-bolds">Total Weight</th>
                                            <th id="cell-price" class="text-center text-semibold text-bolds"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                            
                                            <th id="cell-total" class="text-right text-semibold text-bolds">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <tr>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['itemcode'] != '') {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>

                                                    <?php } else { ?>
                                                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                                    <?php }?>
                                                </td>
                                                <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                                                <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['unit'];?>
</td>
                                                   <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                                <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['weight'];?>
</td>
                                                <td class="text-center"><?php echo formatCurrency($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                             

                                                <td class="text-right"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value['total']),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                         <tr class="b-top-none">
                                                <td colspan="6" style="text-align: right;" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subtotal'];?>
</td>
                                                <td class="text-left"><?php ob_start();
echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['order_total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</td>
                                            </tr>
                                             <tr class="b-top-none">
                                                <td colspan="6" style="text-align: right;">Total Weight</td>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['d']->value['weight_total'];?>
 Kg</td>
                                            </tr>
                                                <tr class="h4">
                                                    <td colspan="6" style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                                    <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['order_total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                                </tr>

                                        </tbody>
                                    </table>

    <!--    related transactions -->

   

    <!--    end related transactions -->

    <?php if (($_smarty_tpl->tpl_vars['d']->value['order_note'] != '')) {?>
        <div id="terms">
            <h5>Notes</h5>
            <?php echo $_smarty_tpl->tpl_vars['d']->value['order_note'];?>

        </div>
  <?php }?>

<div style="text-align: center;">
    <button class='button -dark center no-print' style="padding: 4px;"  onClick="window.print();"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</button>
</div>


</div>



</body>

</html>
<?php }
}
