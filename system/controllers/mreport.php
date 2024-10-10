<?php
/*
|--------------------------------------------------------------------------
| Controller
|--------------------------------------------------------------------------
|
*/

_auth();
$ui->assign('selected_navigation', 'mps');
$ui->assign('_title', $_L['Purchase'] . '- ' . $config['CompanyName']);
$action = $routes['1'];
$user = User::_info();

$ui->assign('user', $user);
Event::trigger('invoices');
switch ($action) {
    case 'stocklist':
        $purchase = false;
        $items = [];

        $raw_inventory = ORM::for_table('raw_inventory')->order_by_desc('id')->groupBy('item_id')->find_many();

        foreach ($raw_inventory as $_inventory) {

             $d = ORM::for_table('sys_mitems')->find_one($_inventory->item_id);

            $return = ORM::for_table('raw_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','RETURN-OUT')->sum('qty');

            $waste = ORM::for_table('raw_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','WASTE-OUT')->sum('qty');

            $waste = ORM::for_table('raw_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','WASTE-OUT')->sum('qty');
             $out = ORM::for_table('raw_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','OUT')->sum('qty');
            


              $totalinqty = ORM::for_table('raw_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','%IN%')->sum('qty');
              $totaloutqty = ORM::for_table('raw_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','%OUT%')->sum('qty');

            
            $item= array('itemname' =>$d->name,
                            'itemno' =>$d->item_number,
                            'size' =>$_inventory->lenght.' x '.$_inventory->width.' x '.$_inventory->height.' x '.$_inventory->density,


                            'return' =>number_format($return,2),
                            'waste' =>number_format($waste,2),
                            'used' =>number_format($out,2),
                            'available' =>number_format(($totalinqty-$return-$waste-$out),2),

                            'qty' =>number_format($totalinqty,2),
                            'price' =>number_format($d->cost_price,2),
                            'weight'=>($d->weight/100).'Kg',
                            'unit'=>$d->unit
                             );
           array_push($items,$item);
        }


    
       // $ui->assign('items', $items);
        $ui->assign('idate', date('Y-m-d'));

     

        \view('manufacturing/stock', [
            'pos' => 'pos',
            'items' => $items,
        ]);

        break;

     case 'finished_goods':
        $purchase = false;
        $items = [];

        $raw_inventory = ORM::for_table('sys_goods_inventory')->order_by_desc('id')->groupBy('item_id')->find_many();

        foreach ($raw_inventory as $_inventory) {

             $d = ORM::for_table('sys_items')->find_one($_inventory->item_id);

            // $return = ORM::for_table('sys_goods_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','RETURN-OUT')->sum('qty');

            // $waste = ORM::for_table('raw_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','WASTE-OUT')->sum('qty');

            // $waste = ORM::for_table('raw_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','WASTE-OUT')->sum('qty');
            //  $out = ORM::for_table('raw_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','OUT')->sum('qty');
            


              $totalinqty = ORM::for_table('sys_goods_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','%IN%')->sum('qty');
              $totaloutqty = ORM::for_table('sys_goods_inventory')->where('item_id',$_inventory->item_id)->where_like('process_status','%OUT%')->sum('qty');

            
            $item= array('itemname' =>$d->name,
                            'itemno' =>$d->item_number,
                            'qty' =>number_format($totalinqty,2),
                            'used' =>number_format($totaloutqty,2),
                            'available' =>number_format(($totalinqty-$totaloutqty),2),
                            'price' =>number_format($d->cost_price,2),
                            'unit'=>$d->unit
                             );
           array_push($items,$item);
        }


    
       // $ui->assign('items', $items);
        $ui->assign('idate', date('Y-m-d'));

        \view('manufacturing/finishedgoods_report', [
            'pos' => 'pos',
            'items' => $items,
        ]);

        break;

  
    
  
    default:
        echo 'action not defined';
}
