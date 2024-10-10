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

        <?php if (isset($creating_pdf)) {
            echo 'font: 14px/1.4  dejavusanscondensed;';
        } else {
            echo 'font: 14px/1.4 Helvetica, Arial, sans-serif;';
        } ?>



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

        <?php if ($config['rtl'] == 1) { ?>

        html body {
            direction: rtl;
        }
        table td, table th {
            text-align: right;
        }

        <?php } else { ?>
        #items td.blank { border: 0; }
        <?php } ?>


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
                    <img id="image" src="<?php echo APP_URL;?>/storage/system/<?php echo $config['logo_default'];?>" alt="logo" /> <br> <br>
                    <?php echo $config['CompanyName'];?> <br>
                    <?php echo $config['caddress'];?>
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
                
<td rowspan="8"  style="border: 1px solid white; border-right: 0px solid black; text-align: left;vertical-align: top;" width="50%">
       <strong>Bill No :#<?php echo $d['orderid'];?></strong> <br>

        <strong>Bill to</strong> <br>
        <?php echo $d['team_name'];?> 
      
    </td>

            </tr>
          
            
            
            
            
             <tr>
                <td class="meta-head">Bill no #</td>
                <td><?=$d['orderid']?></td>
            </tr>
            <tr>

                <td class="meta-head">Status</td>
                <td>
                                        <h3 class="alert alert-danger">
                                        <?php
                                             if ($d['order_status']=='NOT-APPROVED'){
                                             echo 'PENDING FOR APPROVAL';
                                             } 
                                             if ($d['order_status']=='PROCESSING'){
                                             echo 'WORK IN PROGRESS';
                                             } 
                                             if ($d['order_status']=='FINISHED'){
                                             echo 'FINISHED';
                                             } 
                                             if ($d['order_status']=='APPROVED'){
                                             echo 'APPROVED';
                                             } 
                                             if ($d['order_status']=='TRANSFER'){
                                             echo 'FINISHED AND TRANSFERED';
                                             } 
                                             if ($d['order_status']=='PROCESSING'){
                                             echo 'PROCESSING';
                                             } 
                                             if ($d['order_status']=='CANCELLED'){
                                             echo 'CANCELLED';
                                             } 
                                             if ($d['order_status']=='NEW'){
                                             echo 'NEW';
                                             } 
                                         ?>

                                         </h3>

                                        <?php if(isset($d['title']) && $d['title'] != ''){?> 
                                            <h4><?=$d['title']?></h4>
                                            <hr>
                                        <?php } ?>
                </td>
            </tr>
            <tr>

                <td class="meta-head">Bill Date</td>
                <td><?=date($config['df'],strtotime($d['start_date'])
                )?></td>
            </tr>
          

         


        </table>

    </div>

 

                              <table id="items">

                                        <thead>
                                        <tr class="text-dark">
                                            <th id="cell-id" class="text-semibold text-bolds">S/L</th>
                                            <th id="cell-item" class="text-semibold text-bolds"><?=$_L['Item']?></th>
                                            <th id="cell-item" class="text-semibold text-bolds"><?=$_L['Unit']?></th>
                                            <th id="cell-qty" class="text-center text-semibold text-bolds">Qty</th>

                                            <th class="text-semibold text-bolds">Total Weight</th>
                                            <th id="cell-price" class="text-center text-semibold text-bolds"><?=$_L['Price']?></th>
                                            
                                            <th id="cell-total" class="text-right text-semibold text-bolds">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php $counter=1; foreach($items as $item){?> 
                                            <tr>
                                                <td><?=$counter?>
                                                </td>
                                                <td class="text-semibold text-dark"><?=$item['description']?></td>
                                                <td class="text-semibold text-dark"><?=$item['unit']?></td>
                                                   <td class="text-center"><?=$item['qty']?></td>
                                                <td class="text-semibold text-dark"><?=$item['weight']?></td>
                                                <td class="text-center"><?=formatCurrency($item['price'],$d['currency_iso_code'])?></td>
                                             

                                                <td class="text-right"><?=formatCurrency(($item['total']),$d['currency_iso_code'])?></td>
                                            </tr>

                                         <?php $counter++; } ?>


                                         <tr class="b-top-none">
                                                <td colspan="6" style="text-align: right;" ><?=$_L['Subtotal']?></td>
                                                <td class="text-left"><?=formatCurrency($d['order_total'],$d['currency_iso_code'])?></td>
                                            </tr>
                                             <tr class="b-top-none">
                                                <td colspan="6" style="text-align: right;">Total Weight</td>
                                                <td class="text-left"><?=$d['weight_total']?> Kg</td>
                                            </tr>
                                                <tr class="h4">
                                                    <td colspan="6" style="text-align: right;"><?=$_L['Grand Total']?></td>
                                                    <td class="text-left"><?=formatCurrency($d['order_total'],$d['currency_iso_code'])?></td>
                                                </tr>

                                        </tbody>
                                    </table>

    <!--    related transactions -->

   

    <!--    end related transactions -->

    <?php if ($d['order_note'] != ''){?> 
        <div id="terms">
            <h5>Notes</h5>
            <?=$d['order_note']?>
        </div>
 <?php } ?>




</div>



</body>

</html>
