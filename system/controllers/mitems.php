<?php

/*
|--------------------------------------------------------------------------
| Controller
|--------------------------------------------------------------------------
|
*/

_auth();
$ui->assign('selected_navigation', 'invoices');
$ui->assign('_title', $_L['Sales'] . '- ' . $config['CompanyName']);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);

switch ($action) {


    case 'findbyorder':

      $order_id = $routes['2'];

        $data = [];
        $c = ORM::for_table('sys_morder_items')->where('orderid',$order_id)->find_many();

        foreach ($c as $_c) {
            $mitems = ORM::for_table('sys_mitems')->find_one($_c->item_id);


  $cm = ORM::for_table('raw_inventory')->where('item_id',$_c->item_id)->where_like('process_status','%IN%')->find_many();
  $cout = ORM::for_table('raw_inventory')->where('item_id',$_c->item_id)->where_like('process_status','%OUT%')->find_many();

$totalweight=0;
$totalprice=0;

$totalweight_out=0;
$totalprice_out=0;
$total_qty=0;
$qty_a=0;
$qty_b=0;
foreach ($cm as $cs) {
$totalweight +=($cs->weight*$cs->qty)/100;
$totalprice +=$_c->cost_price*$cs->qty;


$qty_a +=$cs->qty;

}

foreach ($cout as $couts) {
$totalweight_out +=$couts->total_weight;
$totalprice_out +=$couts->total_amount;

$qty_b +=$couts->qty;
}

$total_qty=$qty_a-$qty_b;





           $data[] = [
                'pos_item_id' => $mitems->id,
                'pos_item_name' => $mitems->name,
                'pos_item_weight' => number_format(($mitems->weight/100),2),
                'price_per_kg' => $mitems->cost_price,
                'total_price' => $mitems->cost_price,
                'totalweight'=>$total_qty.' X '.(number_format(($mitems->weight/100),2)),
                'qty' =>1,
                'avail_qty'=>$total_qty,
            ];
        }

           


      api_response($data);


        break;

 case 'findbyorder_edit':

      $order_id = $routes['2'];

        $data = [];
        $c = ORM::for_table('sys_morder_items')->where('orderid',$order_id)->find_many();

        foreach ($c as $_c) {
            $mitems = ORM::for_table('sys_mitems')->find_one($_c->item_id);


  $cm = ORM::for_table('raw_inventory')->where('item_id',$_c->item_id)->where_like('process_status','%IN%')->find_many();
  $cout = ORM::for_table('raw_inventory')->where('item_id',$_c->item_id)->where_like('process_status','%OUT%')->find_many();

  $cout_order = ORM::for_table('raw_inventory')->where('item_id',$_c->item_id)->where('ref_no',$order_id)->where_like('process_status','%OUT%')->find_many();

$totalweight=0;
$totalprice=0;

$totalweight_out=0;
$totalprice_out=0;
$total_qty=0;
$qty_a=0;
$qty_b=0;
$cout_order_qty=0;
foreach ($cm as $cs) {
$totalweight +=($cs->weight*$cs->qty)/100;
$totalprice +=$_c->cost_price*$cs->qty;


$qty_a +=$cs->qty;

}

foreach ($cout as $couts) {
$totalweight_out +=$couts->total_weight;
$totalprice_out +=$couts->total_amount;

$qty_b +=$couts->qty;
}

foreach ($cout_order as $_cout_order) {


$cout_order_qty +=$_cout_order->qty;
}

$total_qty=$qty_a-$qty_b+$cout_order_qty;





           $data[] = [
                'pos_item_id' => $mitems->id,
                'pos_item_name' => $mitems->name,
                'pos_item_weight' => number_format(($mitems->weight/100),2),
                'price_per_kg' => $_c->price,
                'total_price' => $_c->total,
                'totalweight'=>$total_qty.' X '.(number_format(($mitems->weight/100),2)),
                'qty' =>$_c->qty,
                'avail_qty'=>$total_qty,
            ];
        }

           


      api_response($data);


        break;

    case 'all':
        $items = Mitem::all();

        $data = [];

        foreach ($items as $item) {

 $c = ORM::for_table('raw_inventory')->where('item_id',$item->id)->where_like('process_status','%IN%')->find_many();
  $cout = ORM::for_table('raw_inventory')->where('item_id',$item->id)->where_like('process_status','%OUT%')->find_many();

$totalweight=0;
$totalprice=0;

$totalweight_out=0;
$totalprice_out=0;
$total_qty=0;
$qty_a=0;
$qty_b=0;
foreach ($c as $cs) {
$totalweight +=($cs->weight*$cs->qty)/100;
$totalprice +=$item->cost_price*$cs->qty;


$qty_a +=$cs->qty;

}

foreach ($cout as $couts) {
$totalweight_out +=$couts->total_weight;
$totalprice_out +=$couts->total_amount;

$qty_b +=$couts->qty;
}

$total_qty=$qty_a-$qty_b;


            

            $price_per_kg=$item->cost_price/$item->weight;
            $data[] = [
                'id' => $item->id,
                'name' => $item->name,
                'image' => $item->image,
                'raw_type' => $item->raw_type,
                'total_qty'=>$total_qty,
                'unit'=>$item->unit,
                'price'=>$item->cost_price,



                'weight' =>number_format(($item->weight/100),2),
                'weight_type'=>'Kg',
                'width' => $item->width,
                'length' => $item->length,
                'height' => $item->height,
                'density' => $item->density,
                'item_type' => $item->raw_type,

                'inventory' => $item->inventory,
                'totalweight'=>$total_qty.' X '.(number_format(($item->weight/100),2)),
                'price_per_kg'=>number_format($price_per_kg,0, ',', ''),
                'totalprice' => number_format($totalprice-$totalprice_out,0, ',', ''),
                 'cost_price' => number_format($item->cost_price,0, ',', ''),
                'item_number' => $item->item_number,
                'avail_qty'=>$total_qty,
            ];
        }

        api_response($data);

        break;




 case 'findbypurchase_edit':

      $order_id = $routes['2'];

        $itemsdata = [];
        $c = ORM::for_table('sys_mpurchase_item')->where('mpurchase_id',$order_id)->find_many();

        foreach ($c as $_items) {
            $did = ORM::for_table('sys_mitems')->find_one($_items->item_id);

          $itemsdata[] = [
                    'dataid'=>$_items->id,
                    'id'=>$did->id,
                    'price' => $_items->price,
                    'qty' => $_items->qty,
                    'weight' => number_format($_items->weight,2).'Kg',
                    'total' => $_items->total,
                    'description' => $did->name,
                    'lineweight'=> $_items->total_weight,
                    'itemcode'=>'',
                    'tax'=> $_items->tax,
                    'tax_rate'=> $_items->tax_rate,
                    'discount_rate'=> $_items->discount_rate,
                    'discount'=> $_items->discount,
                    'unit'=> $did->unit,
                    'total_weight' =>$_items->total_weight.'Kg',
                    'subtotal' =>$_items->subtotal,
                    'pos_item_number'=>$_items->id,
                     'length' =>$_items->lenght,
                     'width' =>$_items->width,
                     'height' =>$_items->height,
                     'density' =>$_items->density,

                   ];
        }

           


      api_response($itemsdata);


        break;
    default:
        echo 'action not defined';
}
