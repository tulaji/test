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
    case 'add':
        $purchase = false;
        $purchase_items = [];

        $c = ORM::for_table('crm_accounts')
            ->select('id')
            ->select('account')
            ->select('email')
            ->order_by_desc('id')
            ->where_like('type', '%Supplier%')
            ->find_many();

        $ui->assign('c', $c);
        $ui->assign('idate', date('Y-m-d'));

     

        \view('manufacturing/addpurchase', [
            'pos' => 'pos',
            'purchase' => $purchase,
            'purchase_items' => $purchase_items,
        ]);

        break;

   case 'delete_process':

$id = $routes['2'];
$d = ORM::for_table('processing_product')->find_one($id);

if ($d) {
    $d->delete();

    $do = ORM::for_table('sys_morder')->find_one($d->orderid);
             if ($do) {
                 $do->order_status='APPROVED';
                 $do->save();
             }

    r2(U . 'mprocess/processing', 's', 'Delete successfully.');
}

break;

 case 'delete_finish':

$id = $routes['2'];
$d = ORM::for_table('finished_product')->find_one($id);

if ($d) {
    $d->delete();

    $do = ORM::for_table('sys_morder')->find_one($d->orderid);
    $do_process = ORM::for_table('processing_product')->find_one($d->processing_product_id);
             if ($do) {
                 $do->order_status='PROCESSING';
                 $do->save();

                 $do_process->processing_status='Processing';
                 $do_process->save();
             }

    r2(U . 'mprocess/finished', 's', 'Delete successfully.');
}

break;

 case 'delete_transfer':

$id = $routes['2'];
$d = ORM::for_table('transfered_product')->find_one($id);

if ($d) {
    $d->delete();

    
    $do_process = ORM::for_table('finished_product')->find_one($d->finished_id);
             if ($do_process) {

                $do = ORM::for_table('sys_morder')->find_one($do_process->orderid);
                 $processing_product = ORM::for_table('processing_product')->find_one($do_process->processing_product_id);

            $trans_ref = ORM::for_table('sys_goods_inventory')->where('ref_no',$d->trans_ref)->find_many();


                 $processing_product->processing_status='Finished';
                 $processing_product->save();


                 $do->order_status='FINISHED';
                 $do->save();

                 $do_process->finished_status='FINISHED';
                 $do_process->save();

                 $trans_ref->delete();

             }

    r2(U . 'mprocess/transferred', 's', 'Delete successfully.');
}



break;



   case 'add_processing':
        $purchase = false;
        $purchase_items = [];

        $accounts = ORM::for_table('crm_accounts')
            ->select('id')
            ->select('account')
            ->select('email')
            ->order_by_desc('id')
            ->where_like('type', '%Supplier%')
            ->find_many();

         $morder = ORM::for_table('sys_morder')
             ->order_by_desc('id')
            ->where_like('order_status', '%APPROVE%')
            ->find_many();

        $ui->assign('accounts', $accounts);
        $ui->assign('morder', $morder);

        $ui->assign('idate', date('Y-m-d'));

     

        \view('manufacturing/add_processing');

        break;

case 'edit_processing':
 $processid=$routes[2];

        $purchase = false;
        $purchase_items = [];


          $mprocess = ORM::for_table('processing_product')->find_one($processid);



        $accounts = ORM::for_table('crm_accounts')
            ->select('id')
            ->select('account')
            ->select('email')
            ->order_by_desc('id')
            ->where_like('type', '%Supplier%')
            ->find_many();

         $morder = ORM::for_table('sys_morder')
             ->order_by_desc('id')
            ->where_like('order_status', '%PROCESSING%')
            ->find_many();

        $ui->assign('accounts', $accounts);
        $ui->assign('morder', $morder);

        $ui->assign('mprocess',$mprocess);
        

        $ui->assign('idate', date('Y-m-d'));

     

        \view('manufacturing/edit_processing');

        break;


 case 'add_finished':
        $purchase = false;
        $purchase_items = [];

        // $accounts = ORM::for_table('crm_accounts')
        //     ->select('id')
        //     ->select('account')
        //     ->select('email')
        //     ->order_by_desc('id')
        //     ->where_like('type', '%Supplier%')
        //     ->find_many();

         $sys_items = ORM::for_table('sys_items')
             ->order_by_desc('id')
             ->find_many();


        $processing_product = ORM::for_table('processing_product')
             ->order_by_desc('id')
            ->where_like('processing_status', '%Processing%')
            ->find_many();

        $ui->assign('processing_product', $processing_product);
       // $ui->assign('accounts', $accounts);
        $ui->assign('sys_items', $sys_items);

        $ui->assign('idate', date('Y-m-d'));

     

        \view('manufacturing/add_finished');

        break;


 case 'edit_finished':
        $purchase = false;
        $purchase_items = [];
       
        $id=$routes[2];
        // $accounts = ORM::for_table('crm_accounts')
        //     ->select('id')
        //     ->select('account')
        //     ->select('email')
        //     ->order_by_desc('id')
        //     ->where_like('type', '%Supplier%')
        //     ->find_many();

         $sys_items = ORM::for_table('sys_items')
             ->order_by_desc('id')
             ->find_many();
        

         $mfinished = ORM::for_table('finished_product')->find_one($id);


        $processing_product = ORM::for_table('processing_product')
             ->order_by_desc('id')
            ->where_like('processing_status', '%Finished%')
            ->find_many();

        $ui->assign('processing_product', $processing_product);
       // $ui->assign('accounts', $accounts);
        $ui->assign('sys_items', $sys_items);

        $ui->assign('idate', date('Y-m-d'));
         $ui->assign('mfinished',$mfinished);

     

        \view('manufacturing/edit_finished');

        break;
 case 'add_transfer':
    $purchase = false;
    $purchase_items = [];

    // $accounts = ORM::for_table('crm_accounts')
    //     ->select('id')
    //     ->select('account')
    //     ->select('email')
    //     ->order_by_desc('id')
    //     ->where_like('type', '%Supplier%')
    //     ->find_many();

     $sys_items = ORM::for_table('sys_items')
         ->order_by_desc('id')
         ->find_many();


     $finished_product = ORM::for_table('finished_product')
     ->where_like('finished_status', '%FINISHED%')
     ->order_by_desc('id')
     ->find_many();


    $processing_product = ORM::for_table('processing_product')
         ->order_by_desc('id')
        ->where_like('processing_status', '%Processing%')
        ->find_many();

    $ui->assign('processing_product', $processing_product);
    $ui->assign('finished_product', $finished_product);
    $ui->assign('sys_items', $sys_items);

    $ui->assign('idate', date('Y-m-d'));



    \view('manufacturing/add_transfer');

break;



 case 'edit_transfer':
    $purchase = false;
    $purchase_items = [];

   $id=$routes[2];
     $sys_items = ORM::for_table('sys_items')
         ->order_by_desc('id')
         ->find_many();


     $finished_product = ORM::for_table('finished_product')
     ->where_like('finished_status', '%TRANSFERED%')
     ->order_by_desc('id')
     ->find_many();


    $processing_product = ORM::for_table('processing_product')
         ->order_by_desc('id')
        ->where_like('processing_status', '%Processing%')
        ->find_many();


        $tproduct = ORM::for_table('transfered_product')->find_one($id);


    $ui->assign('processing_product', $processing_product);
    $ui->assign('finished_product', $finished_product);
    $ui->assign('sys_items', $sys_items);

    $ui->assign('tproduct', $tproduct);

    $ui->assign('idate', date('Y-m-d'));



    \view('manufacturing/edit_transfer');

break;


case 'json-single-contact':
        $processid = _post('processid');

        $process = Mprocess::find($processid);


            $weight = $process->weight;
            $order_id=$process->orderid;
        

        jsonResponse([
            'weight' => $weight,
            'order_id' => $order_id
        ]);

        break;

case 'json-single-finished':
       

        $processid = _post('processid');

        $process = Mfinished::find($processid);

         $item = Item::find($process->product_id);

        jsonResponse([
            'weight' => $process->used_weight,
            'finished_ref' => $process->finished_ref,
            'order_id' => $process->order_id,
            'product_id' => $process->product_id,
            'productname'=>$item->name.'-'.$item->item_number
        ]);




        break;

 case 'processing':
        $items = Mprocess::select([
            'id',
            'orderid',
            'subject',
            'weight',
            'process_code',
            'order_ref',
            'start_date',
            'end_date',
            'note',
            'assign_to',
            'processing_image',
            'status',
            'processing_status',
            'created_at'
        ]);
        $items = $items->get();

        $format_currency_override = [];

        if (isset($config['decimal_places_products_and_services'])) {
            $format_currency_override['precision'] =
                $config['decimal_places_products_and_services'];
        }

        \view('manufacturing/processing_product', [
            'action' => $action,
            'items' => $items,
            'format_currency_override' => $format_currency_override,
            'can_edit' => has_access(
                $user->roleid,
                'products_n_services',
                'edit'
            ),
            'can_delete' => has_access(
                $user->roleid,
                'products_n_services',
                'delete'
            ),
        ]);

        break;

 case 'finished':
        $items = Mfinished::select([
            'id',
            'created_by',
            'weight',
            'finished_ref',
            'processing_ref',
            'processing_product_id',
            'product_id',
            'qty',
            'subject',
            'weight',
            'note',
            'used_weight',
            'finished_image',
            'finished_status',
            'status',
            'finished_date',
            'created_at'
        ]);
        $items = $items->get();

        $format_currency_override = [];

        if (isset($config['decimal_places_products_and_services'])) {
            $format_currency_override['precision'] =
                $config['decimal_places_products_and_services'];
        }

        \view('manufacturing/finished_product', [
            'action' => $action,
            'items' => $items,
            'format_currency_override' => $format_currency_override,
            'can_edit' => has_access(
                $user->roleid,
                'products_n_services',
                'edit'
            ),
            'can_delete' => has_access(
                $user->roleid,
                'products_n_services',
                'delete'
            ),
        ]);

        break;

 case 'transferred':
        $items = Mtransfer::select([
            'id',
            'trans_ref',
            'finished_ref',
            'transfer_by',
            'product_name',
            'product_id',
            'finished_id',
            'weight',
            'qty',
            'price',
            'transfer_date',
            'created_at'
        ]);
        $items = $items->get();

        $format_currency_override = [];

        if (isset($config['decimal_places_products_and_services'])) {
            $format_currency_override['precision'] =
                $config['decimal_places_products_and_services'];
        }

        \view('manufacturing/transfer_product', [
            'action' => $action,
            'items' => $items,
            'format_currency_override' => $format_currency_override,
            'can_edit' => has_access(
                $user->roleid,
                'products_n_services',
                'edit'
            ),
            'can_delete' => has_access(
                $user->roleid,
                'products_n_services',
                'delete'
            ),
        ]);

        break;

  

   case 'save_process':

        $msg = '';
        $data = $request->all();
        $subject = _post('subject');

        $start_date = _post('start_date');
        $end_date = _post('end_date');
        $order_id = _post('order_id');

        if ($order_id != '') {
            $check = ORM::for_table('sys_morder')
                ->where('id', $order_id)
                ->find_one();
        }
        $note = _post('note');

        if ($subject == '') {
            $msg = 'Subject is required <br>';
        }
         if ($order_id == '') {
            $msg = 'Order is required <br>';
        }
         if ($start_date == '') {
            $msg = 'Start date is required <br>';
        }



        if ($msg == '') {
            $d = ORM::for_table('processing_product')->create();
            $d->orderid = $order_id;
            $d->weight = $check->weight_total;
            $d->subject = $subject;
            // $d->process_code = $description;
            $d->order_ref = $check->orderid;
            $d->start_date = $start_date;
            $d->processing_image = _post('file_link');
            $d->end_date = $end_date;
            $d->note = $note;
            $d->processing_status ='Processing';
            $d->save();
            $process_id= $d->id;

             $dn = ORM::for_table('processing_product')->find_one($process_id);
             if ($dn) {
                 $dn->process_code= 'PR000'.$process_id;
                 $dn->save();
             }
           

            $do = ORM::for_table('sys_morder')->find_one($order_id);
             if ($do) {
                 $do->order_status='PROCESSING';
                 $do->save();
             }
           
           

            _msglog('s', 'Process Added Successfully');

            echo $process_id;
        } else {
            echo $msg;
        }
        break;
   case 'update_process':

        $msg = '';
        $data = $request->all();
        $subject = _post('subject');

        $orderidval = _post('orderidval');

        $start_date = _post('start_date');
        $end_date = _post('end_date');
        $order_id = _post('order_id');

        if ($order_id != '') {
            $check = ORM::for_table('sys_morder')
                ->where('id', $order_id)
                ->find_one();
        }
        $note = _post('note');

        if ($subject == '') {
            $msg = 'Subject is required <br>';
        }
         if ($order_id == '') {
            $msg = 'Order is required <br>';
        }
         if ($start_date == '') {
            $msg = 'Start date is required <br>';
        }



        if ($msg == '') {
            $d = ORM::for_table('processing_product')->find_one($orderidval);
            $d->orderid = $order_id;
            $d->weight = $check->weight_total;
            $d->subject = $subject;
            // $d->process_code = $description;
            $d->order_ref = $check->orderid;
            $d->start_date = $start_date;
            $d->processing_image = _post('file_link');
            $d->end_date = $end_date;
            $d->note = $note;
            $d->processing_status ='Processing';
            $d->save();
            $process_id= $orderidval;

             $dn = ORM::for_table('processing_product')->find_one($process_id);
             if ($dn) {
                 $dn->process_code= 'PR000'.$process_id;
                 $dn->save();
             }
           

            $do = ORM::for_table('sys_morder')->find_one($order_id);
             if ($do) {
                 $do->order_status='PROCESSING';
                 $do->save();
             }
           
           

            _msglog('s', 'Process Save Successfully');

            echo $process_id;
        } else {
            echo $msg;
        }
        break;
   case 'update_finished':

        $msg = '';
        $data = $request->all();
        $subject = _post('subject');


         $finishedid = _post('finishedid');


        $finished_date = _post('finished_date');
        $order_id = _post('order_id');
        $product_id=_post('product_id');
        $process_id = _post('process_id');
        $qty= _post('qty');
        $used_weight= _post('used_weight');


        if ($order_id != '') {
            $orders = ORM::for_table('sys_morder')
                ->where('id', $order_id)
                ->find_one();
        }

         if ($process_id != '') {
            $process = ORM::for_table('processing_product')
                ->where('id', $process_id)
                ->find_one();
        }


        $note = _post('note');

        if ($subject == '') {
            $msg = 'Subject is required <br>';
        }
         if ($process_id == '') {
            $msg = 'Processing Product is required <br>';
        }

         if ($product_id == '') {
            $msg = 'Product is required <br>';
        }

         if ($finished_date == '') {
            $msg = 'Finished date is required <br>';
        }



        if ($msg == '') {
            $d = ORM::for_table('finished_product')->find_one($finishedid);
            $d->order_id = $order_id;
            $d->subject = $subject;
            $d->order_ref = $orders->orderid;

             $d->processing_ref = $process->process_code;
             $d->processing_product_id = $process->id;
             $d->product_id = $product_id;
             $d->qty = $qty;
             $d->weight = $process->weight;
             $d->used_weight = $used_weight;
             $d->finished_date = $finished_date;
             $d->finished_image = _post('file_link');
             $d->finished_status='FINISHED';
             $d->note = $note;

            $d->save();
            $process_id=$finishedid;

             $dn = ORM::for_table('finished_product')->find_one($process_id);
             if ($dn) {
                 $dn->finished_ref= 'PF000'.$process_id;
                 $dn->save();
             }
           

            $do = ORM::for_table('sys_morder')->find_one($order_id);
             if ($do) {
                 $do->order_status='FINISHED';
                 $do->save();
             }

             $dp = ORM::for_table('processing_product')->find_one($process->id);
             if ($dp) {
                 $dp->processing_status='FINISHED';
                 $dp->save();
             }
           
           

            _msglog('s','Saved Successfully');

            echo $process_id;
        } else {
            echo $msg;
        }
        break;

case 'save_finished':

        $msg = '';
        $data = $request->all();
        $subject = _post('subject');

        $finished_date = _post('finished_date');
        $order_id = _post('order_id');
        $product_id=_post('product_id');
        $process_id = _post('process_id');
        $qty= _post('qty');
        $used_weight= _post('used_weight');


        if ($order_id != '') {
            $orders = ORM::for_table('sys_morder')
                ->where('id', $order_id)
                ->find_one();
        }

         if ($process_id != '') {
            $process = ORM::for_table('processing_product')
                ->where('id', $process_id)
                ->find_one();
        }


        $note = _post('note');

        if ($subject == '') {
            $msg = 'Subject is required <br>';
        }
         if ($process_id == '') {
            $msg = 'Processing Product is required <br>';
        }

         if ($product_id == '') {
            $msg = 'Product is required <br>';
        }

         if ($finished_date == '') {
            $msg = 'Finished date is required <br>';
        }



        if ($msg == '') {
            $d = ORM::for_table('finished_product')->create();
            $d->order_id = $order_id;
            $d->subject = $subject;
            $d->order_ref = $orders->orderid;

             $d->processing_ref = $process->process_code;
             $d->processing_product_id = $process->id;
             $d->product_id = $product_id;
             $d->qty = $qty;
             $d->weight = $process->weight;
             $d->used_weight = $used_weight;
             $d->finished_date = $finished_date;
             $d->finished_image = _post('file_link');
             $d->finished_status='FINISHED';
             $d->note = $note;

            $d->save();
            $process_id= $d->id;

             $dn = ORM::for_table('finished_product')->find_one($process_id);
             if ($dn) {
                 $dn->finished_ref= 'PF000'.$process_id;
                 $dn->save();
             }
           

            $do = ORM::for_table('sys_morder')->find_one($order_id);
             if ($do) {
                 $do->order_status='FINISHED';
                 $do->save();
             }

             $dp = ORM::for_table('processing_product')->find_one($process->id);
             if ($dp) {
                 $dp->processing_status='FINISHED';
                 $dp->save();
             }
           
           

            _msglog('s','Process Finished Successfully');

            echo $process_id;
        } else {
            echo $msg;
        }
        break;
 case 'save_transfer':

        $msg = '';
        $data = $request->all();
        
        $product_id=_post('product_id');
        $productname=_post('productname');
        $finished_id = _post('finished_id');
        $qty= _post('qty');
        $weight= _post('weight');
        $finished_ref = _post('finished_ref');
        $transfer_date = _post('transfer_date');
        $order_id = _post('order_id');
        $note = _post('note');


        if ($finished_id == '') {
            $msg = 'Finished product is required <br>';
        }
         if ($qty == '') {
            $msg = 'Qty is required <br>';
        }

         if ($note == '') {
            $msg = 'Note is required <br>';
        }

         if ($transfer_date == '') {
            $msg = 'Transfer date is required <br>';
        }



        if ($msg == '') {


         $sys_items = ORM::for_table('sys_items')->find_one($product_id);
             if ($sys_items) {
                 $sys_items->inventory=$sys_items->inventory+$qty;
                 $sys_items->save();
             }else{
                
                $msg = 'Product Not found !.. <br>';
                exit;
             }




             $d = ORM::for_table('transfered_product')->create();
             $d->finished_ref = $finished_ref;
             $d->product_name = $productname;
             $d->product_id = $product_id;
             $d->order_id=$order_id;
             $d->finished_id = $finished_id;
             $d->weight = $weight;
             $d->qty = $qty;
             $d->transfer_date = $transfer_date;
             $d->weight = $weight;
             $d->product_image = _post('file_link');
             $d->note = $note;
            $d->save();
            $process_id= $d->id;

             $dn = ORM::for_table('transfered_product')->find_one($process_id);
             if ($dn) {
                 $dn->trans_ref= 'TR000'.$process_id;
                 $dn->save();
             }


            
             $raw_inventory = ORM::for_table('sys_goods_inventory')->create();

                $raw_inventory->ref_no ='TR000'.$process_id;
                $raw_inventory->item_id =$product_id;
                $raw_inventory->price =$sys_items->cost_price;
                $raw_inventory->qty =$qty;
                $raw_inventory->created_at =date('Y-m-d');
                $raw_inventory->process_status='TRANSFER-IN';
                $raw_inventory->save();


             


              $dnm = ORM::for_table('finished_product')->find_one($finished_id);
             if ($dnm) {
                 $dnm->finished_status= 'TRANSFERED';
                 $dnm->save();
             }
           

            $do = ORM::for_table('sys_morder')->find_one($order_id);
             if ($do) {
                 $do->order_status='TRANSFERED';
                 $do->save();
             }

          
           
           

            _msglog('s','Product Transfer Successfully');

            echo $process_id;
        } else {
            echo $msg;
        }
        break;
 case 'update_transfer':

        $msg = '';
        $data = $request->all();
         $transfer_id=_post('transfer_id');

        $product_id=_post('product_id');
        $productname=_post('productname');
        $finished_id = _post('finished_id');
        $qty= _post('qty');
        $weight= _post('weight');
        $finished_ref = _post('finished_ref');
        $transfer_date = _post('transfer_date');
        $order_id = _post('order_id');
        $note = _post('note');


        if ($finished_id == '') {
            $msg = 'Finished product is required <br>';
        }
         if ($qty == '') {
            $msg = 'Qty is required <br>';
        }

         if ($note == '') {
            $msg = 'Note is required <br>';
        }

         if ($transfer_date == '') {
            $msg = 'Transfer date is required <br>';
        }



        if ($msg == '') {


         $sys_items = ORM::for_table('sys_items')->find_one($product_id);
             if ($sys_items) {
                 $sys_items->inventory=$sys_items->inventory+$qty;
                 $sys_items->save();
             }else{
                
                $msg = 'Product Not found !.. <br>';
                exit;
             }




             $d = ORM::for_table('transfered_product')->find_one($transfer_id);
             $d->finished_ref = $finished_ref;
             $d->product_name = $productname;
             $d->product_id = $product_id;
             $d->order_id=$order_id;
             $d->finished_id = $finished_id;
             $d->weight = $weight;
             $d->qty = $qty;
             $d->transfer_date = $transfer_date;
             $d->weight = $weight;
             $d->product_image = _post('file_link');
             $d->note = $note;
            $d->save();
            $process_id=$transfer_id;

             $dn = ORM::for_table('transfered_product')->find_one($process_id);
             if ($dn) {
                 $dn->trans_ref= 'TR000'.$process_id;
                 $dn->save();
             }


            
             $raw_inventory = ORM::for_table('sys_goods_inventory')->create();

                $raw_inventory->ref_no ='TR000'.$process_id;
                $raw_inventory->item_id =$product_id;
                $raw_inventory->price =$sys_items->cost_price;
                $raw_inventory->qty =$qty;
                $raw_inventory->created_at =date('Y-m-d');
                $raw_inventory->process_status='TRANSFER-IN';
                $raw_inventory->save();


             


              $dnm = ORM::for_table('finished_product')->find_one($finished_id);
             if ($dnm) {
                 $dnm->finished_status= 'TRANSFERED';
                 $dnm->save();
             }
           

            $do = ORM::for_table('sys_morder')->find_one($order_id);
             if ($do) {
                 $do->order_status='TRANSFERED';
                 $do->save();
             }

          
           
           

            _msglog('s','Transfered Successfully');

            echo $process_id;
        } else {
            echo $msg;
        }
        break;
    default:
        echo 'action not defined';
}
