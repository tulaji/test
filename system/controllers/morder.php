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

        $c = ORM::for_table('sys_users')
            ->select('id')
            ->select('fullname')
            ->select('role')
            ->select('email')
            ->order_by_desc('id')
            ->where_like('user_type', '%Employee%')
            ->find_many();

        $supplier = ORM::for_table('crm_accounts')
            ->order_by_desc('id')
            ->where_like('type', '%Supplier%')
            ->find_many();

        $clx_projects = ORM::for_table('clx_projects')
            ->order_by_desc('id')
            ->find_many();


 $sys_morder = ORM::for_table('sys_morder')
            ->where_like('futuresave', '%YES%')
            ->find_many();



         $ui->assign('clx_projects', $clx_projects);
         $ui->assign('suppliers', $supplier);

        $ui->assign('c', $c);
        $ui->assign('idate', date('Y-m-d'));

     $ui->assign('sys_morder', $sys_morder);

        \view('manufacturing/addorder', [
            'pos' => 'pos',
            'purchase' => $purchase,
            'purchase_items' => $purchase_items,
        ]);

        break;
        
case 'edit_bill':
        $purchase = false;
        $purchase_items = [];

         $_id = $routes['2'];


        $c = ORM::for_table('sys_users')
            ->select('id')
            ->select('fullname')
            ->select('role')
            ->select('email')
            ->order_by_desc('id')
            ->where_like('user_type', '%Employee%')
            ->find_many();

        $supplier = ORM::for_table('crm_accounts')
            ->order_by_desc('id')
            ->where_like('type', '%Supplier%')
            ->find_many();

        $clx_projects = ORM::for_table('clx_projects')
            ->order_by_desc('id')
            ->find_many();


         $sys_morder = ORM::for_table('sys_morder')
                    ->where_like('futuresave', '%YES%')
                    ->find_many();
        


         $ui->assign('clx_projects', $clx_projects);
         $ui->assign('suppliers', $supplier);

        $ui->assign('c', $c);
        $ui->assign('idate', date('Y-m-d'));




        // ====new code==
        

        $app->emit('editorder', [&$_id]);
        $itemsdata=[];
        $d = ORM::for_table('sys_morder')->find_one($_id);
        if ($d) {
            $items = ORM::for_table('sys_morder_items')
                ->where('orderid', $_id)
                ->order_by_asc('id')
                ->find_many();

                foreach ($items as $_items) {

                $did = ORM::for_table('sys_mitems')->find_one($_items->item_id);

                    $itemsdata[] = [
                    'price' => $_items->price,
                    'qty' => $_items->qty,
                    'weight' => number_format($_items->weight,2).'Kg',
                    'total' => $_items->total,
                    'description' => $did->name,
                    'itemcode'=>'',
                    'unit'=> $did->unit,
                   ];
                    
                }

            $ui->assign('items', $itemsdata);
          
          $ui->assign('d', $d);
        }
           
        

        //end new code===


     $ui->assign('sys_morder', $sys_morder);

        \view('manufacturing/editorder', [
            'pos' => 'pos',
            'purchase' => $purchase,
            'purchase_items' => $purchase_items,
        ]);

        break;
        

  case 'morderlist':
        $items = Morder::select([
            'id',
            'order_name',
            'orderid',
            'start_date',
            'status',
            'order_to',
            'order_status',
            'order_total',
            'weight_total',
            'end_date',
            'order_note',
            'created_by'


        ]);

      

        $items = $items->get();

        $format_currency_override = [];

        if (isset($config['decimal_places_products_and_services'])) {
            $format_currency_override['precision'] =
                $config['decimal_places_products_and_services'];
        }

        \view('manufacturing/morderlist', [
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

   case 'view':

        $id = $routes['2'];

        $app->emit('morder_view', [&$id]);
        $itemsdata=[];
        $d = ORM::for_table('sys_morder')->find_one($id);
        if ($d) {
            $items = ORM::for_table('sys_morder_items')
                ->where('orderid', $id)
                ->order_by_asc('id')
                ->find_many();

                foreach ($items as $_items) {

                $did = ORM::for_table('sys_mitems')->find_one($_items->item_id);

                    $itemsdata[] = [
                    'price' => $_items->price,
                    'qty' => $_items->qty,
                    'weight' => number_format($_items->weight,2).'Kg',
                    'total' => $_items->total,
                    'description' => $did->name,
                    'itemcode'=>'',
                    'unit'=> $did->unit,
                   ];
                    
                }

            $ui->assign('items', $itemsdata);
          
          $ui->assign('d', $d);
        
            view('manufacturing/morder_view');
        } else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;
   
    case 'print_bill':

        $id = $routes['2'];

        $app->emit('morder_view', [&$id]);
        $itemsdata=[];
        $d = ORM::for_table('sys_morder')->find_one($id);
        if ($d) {
            $items = ORM::for_table('sys_morder_items')
                ->where('orderid', $id)
                ->order_by_asc('id')
                ->find_many();

                foreach ($items as $_items) {

                $did = ORM::for_table('sys_mitems')->find_one($_items->item_id);

                    $itemsdata[] = [
                    'price' => $_items->price,
                    'qty' => $_items->qty,
                    'weight' => number_format($_items->weight,2).'Kg',
                    'total' => $_items->total,
                    'description' => $did->name,
                    'itemcode'=>'',
                    'unit'=> $did->unit,
                   ];
                    
                }

            $ui->assign('items', $itemsdata);
          
          $ui->assign('d', $d);
        
            view('manufacturing/print_bill');
        } else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;

     case 'changestatus':
        $iid = _post('iid');
        $istatus = _post('istatus');

        $d = ORM::for_table('sys_morder')->find_one($iid);
        $dc = ORM::for_table('raw_inventory')->where('ref_no',$iid)->where_like('type','ORDER')->find_many();

        if ($d) {
            $d->order_status =$istatus;
            $d->save();

            $dc->process_status =$istatus;
            $dc->save();

            _msglog('s', 'Bill marked as '.$istatus);
        } else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'delete':
       
        $id = $routes['2'];
        $d = ORM::for_table('sys_morder')->find_one($id);
        $ditem=ORM::for_table('sys_morder_items')->where('orderid',$id)->find_many();
         $dc = ORM::for_table('raw_inventory')->where('ref_no',$id)->where_like('type','ORDER')->find_many();
        if ($d) {
            $d->delete();
            $dc->delete();
            $ditem->delete();
            r2(U . 'morder/morderlist', 's', 'Delete successfully.');
        }

        break;


    case 'save':
        //        var_dump($_POST);
        //
        //        exit;
        Event::trigger('morder/add-post/');
        $cid = _post('cid');
         $cid1 = _post('cid1');
          $team = _post('team');

        // find user with cid
        
        if ($team=='INTERNAL') {
           $u = ORM::for_table('sys_users')->find_one($cid);
        }else{
            $u = ORM::for_table('crm_accounts')->find_one($cid1);
        }
        
        $msg = '';
        if ($cid != '' || $cid1 != '') {
            
        }else{
            $msg .= $_L['select_a_contact'] . ' <br /> ';
        }

        $notes = _post('notes');


         if (isset($_POST['start_date'])) {
            $start_date = $_POST['start_date'];
        } else {
            $msg .= 'Start Date id required' . ' <br /> ';
        }



        if (isset($_POST['total'])) {
            $total = $_POST['total'];
        } else {
            $msg .= $_L['at_least_one_item_required'] . ' <br /> ';
        }

        $its = strtotime($start_date);

      

       

$min_bill_value=$config['min_material_bill_value'];
$max_bill_value=$config['max_material_bill_value'];

        if ($msg == '') {
            $morder = ORM::for_table('sys_morder')->create();

            $morder_c = ORM::for_table('sys_morder')->count();

            $morder->order_name = $_POST['subject'];
            $morder->order_note = $_POST['notes'];
            $morder->start_date = $_POST['start_date'];
            $morder->end_date = $_POST['end_date'];
            $morder->status = $_POST['status'];
            $morder->futuresave= $_POST['futuresave'];
           
           if($team=='INTERNAL'){
            $morder->order_to = $_POST['cid'];
             $morder->team_name=$u->fullname;
           }else{
            $morder->order_to = $_POST['cid1'];
            $morder->team_name=$u->account;
           }
            
            $morder->team = $_POST['team'];
            $morder->project_id= $_POST['project_id'];



           if($_POST['total']>$max_bill_value && $_POST['total'] > $min_bill_value){
             $morder->order_status ='NOT-APPROVED';
           }else{
            $morder->order_status ='APPROVED';
           }
           


            $morder->created_by =$user->id;
            $morder->order_total = $_POST['total'];
            $morder->weight_total = $_POST['tweight'];
            $morder->save();
           
            $invoiceid = $morder->id;
            
             $dn = ORM::for_table('sys_morder')->find_one($invoiceid);
             if ($dn) {
                 $dn->orderid= '000'.$invoiceid;
                 $dn->save();
             }
             
            


            $name = $_POST['name'];
            $pos_item_id = $_POST['pos_item_id'];

            //  $qty = $_POST['qty'];
            //  $taxed = $_POST['taxed'];

            $i = '0';
            foreach ($name as $item) {
           
           

            $name =$name;
            $pos_item_id = $_POST['pos_item_id'][$i];
            
            $used_weight = $_POST['pos_item_weight'][$i]*$_POST['used_weight'][$i];
            $used_qty = $_POST['used_weight'][$i];

            $price_per_kg = $_POST['price_per_kg'][$i];
            $ttl_price = $_POST['ttl_price'][$i];

            $d_item = ORM::for_table('sys_mitems')->find_one($pos_item_id);

                $d = ORM::for_table('sys_morder_items')->create();
                $d->orderid = $invoiceid;
                $d->item_id =$pos_item_id;
                $d->price =$price_per_kg;
                $d->qty =$used_qty;
                $d->weight =$used_weight;
                $d->total = $ttl_price;
                $d->created_at =date('Y-m-d');
                $d->save();

                $raw_inventory = ORM::for_table('raw_inventory')->create();

                $raw_inventory->ref_no = $invoiceid;
                $raw_inventory->item_id =$pos_item_id;
                $raw_inventory->price =$price_per_kg;
                $raw_inventory->qty =$used_qty;
                $raw_inventory->total_weight =$used_weight;
                $raw_inventory->total_amount = $ttl_price;
                $raw_inventory->created_at =date('Y-m-d');
                $raw_inventory->type ='ORDER';

            if($_POST['total']>$max_bill_value && $_POST['total'] > $min_bill_value){
            $raw_inventory->process_status='NOT-APPROVED';
            }else{
            $raw_inventory->process_status='OUT';
            }

                

                 // $raw_inventory->lenght =$d_item->length;
                 // $raw_inventory->width =$d_item->width;
                 // $raw_inventory->height =$d_item->height;
                 // $raw_inventory->density =$d_item->density;


                $raw_inventory->save();
                        
             

                $i++;
            }

            echo $invoiceid;
        } else {
            echo $msg;
        }

        break;



    case 'save_edit':
        //        var_dump($_POST);
        //
        //        exit;
        Event::trigger('morder/add-post/');
        $cid = _post('cid');
         $cid1 = _post('cid1');
          $team = _post('team');

          $orderid = _post('orderid');

        // find user with cid
        
        if ($team=='INTERNAL') {
           $u = ORM::for_table('sys_users')->find_one($cid);
        }else{
            $u = ORM::for_table('crm_accounts')->find_one($cid1);
        }
        
        $msg = '';
        if ($cid != '' || $cid1 != '') {
            
        }else{
            $msg .= $_L['select_a_contact'] . ' <br /> ';
        }

        $notes = _post('notes');


         if (isset($_POST['start_date'])) {
            $start_date = $_POST['start_date'];
        } else {
            $msg .= 'Start Date id required' . ' <br /> ';
        }



        if (isset($_POST['total'])) {
            $total = $_POST['total'];
        } else {
            $msg .= $_L['at_least_one_item_required'] . ' <br /> ';
        }

        $its = strtotime($start_date);

      

       

$min_bill_value=$config['min_material_bill_value'];
$max_bill_value=$config['max_material_bill_value'];

        if ($msg == '') {
            $morder = ORM::for_table('sys_morder')->find_one($orderid);

            $morder_c = ORM::for_table('sys_morder')->count();

            $morder->order_name = $_POST['subject'];
            $morder->order_note = $_POST['notes'];
            $morder->start_date = $_POST['start_date'];
            $morder->end_date = $_POST['end_date'];
            $morder->status = $_POST['status'];
            $morder->futuresave= $_POST['futuresave'];
           
           if($team=='INTERNAL'){
            $morder->order_to = $_POST['cid'];
             $morder->team_name=$u->fullname;
           }else{
            $morder->order_to = $_POST['cid1'];
            $morder->team_name=$u->account;
           }
            
            $morder->team = $_POST['team'];
            $morder->project_id= $_POST['project_id'];



           if($_POST['total']>$max_bill_value && $_POST['total'] > $min_bill_value){
             $morder->order_status ='NOT-APPROVED';
           }else{
            $morder->order_status ='APPROVED';
           }
           


            $morder->created_by =$user->id;
            $morder->order_total = $_POST['total'];
            $morder->weight_total = $_POST['tweight'];
            $morder->save();
           
            $invoiceid =$orderid;
            
             $dn = ORM::for_table('sys_morder')->find_one($invoiceid);
             if ($dn) {
                 $dn->orderid= '000'.$invoiceid;
                 $dn->save();
             }
             
            
             

         $dcr =  ORM::for_table('sys_morder_items')->where('orderid',$invoiceid)->find_many();
         $dcr1 = ORM::for_table('raw_inventory')->where('ref_no',$invoiceid)->find_many();
        if ($dcr) {
            $dcr->delete();
            $dcr1->delete();
        }




            $name = $_POST['name'];
            $pos_item_id = $_POST['pos_item_id'];

            //  $qty = $_POST['qty'];
            //  $taxed = $_POST['taxed'];

            $i = '0';
            foreach ($name as $item) {
           
           

            $name =$name;
            $pos_item_id = $_POST['pos_item_id'][$i];
            
            $used_weight = $_POST['pos_item_weight'][$i]*$_POST['used_weight'][$i];
            $used_qty = $_POST['used_weight'][$i];

            $price_per_kg = $_POST['price_per_kg'][$i];
            $ttl_price = $_POST['ttl_price'][$i];

            $d_item = ORM::for_table('sys_mitems')->find_one($pos_item_id);

                $d = ORM::for_table('sys_morder_items')->create();
                $d->orderid = $invoiceid;
                $d->item_id =$pos_item_id;
                $d->price =$price_per_kg;
                $d->qty =$used_qty;
                $d->weight =$used_weight;
                $d->total = $ttl_price;
                $d->created_at =date('Y-m-d');
                $d->save();

                $raw_inventory = ORM::for_table('raw_inventory')->create();

                $raw_inventory->ref_no = $invoiceid;
                $raw_inventory->item_id =$pos_item_id;
                $raw_inventory->price =$price_per_kg;
                $raw_inventory->qty =$used_qty;
                $raw_inventory->total_weight =$used_weight;
                $raw_inventory->total_amount = $ttl_price;
                $raw_inventory->created_at =date('Y-m-d');
                 $raw_inventory->type ='ORDER';


            if($_POST['total']>$max_bill_value && $_POST['total'] > $min_bill_value){
            $raw_inventory->process_status='NOT-APPROVED';
            }else{
            $raw_inventory->process_status='OUT';
            }

                

                 // $raw_inventory->lenght =$d_item->length;
                 // $raw_inventory->width =$d_item->width;
                 // $raw_inventory->height =$d_item->height;
                 // $raw_inventory->density =$d_item->density;


                $raw_inventory->save();
                        
             

                $i++;
            }

            echo $invoiceid;
        } else {
            echo $msg;
        }

        break;

    case 's':
        is_dev();

        /*


        create table sys_purchases
(
	id int(10) auto_increment
		primary key,
	userid int(10) not null,
	supplier_id int(10) not null,
	supplier_name varchar(200) not null,
	account varchar(200) not null,
	cn varchar(100) default '' not null,
	invoicenum text not null,
	date date null,
	duedate date null,
	datepaid datetime default null,
	subtotal decimal(18,2) not null,
	discount_type varchar(1) default 'f' not null,
	discount_value decimal(14,2) default '0.00' not null,
	discount decimal(14,2) default '0.00' not null,
	credit decimal(10,2) default '0.00' not null,
	taxname varchar(100) null,
	tax decimal(10,2) null,
	tax2 decimal(10,2) null,
	total decimal(18,2) default '0.00' not null,
	taxrate decimal(10,2) null,
	taxrate2 decimal(10,2) null,
	status VARCHAR(200) null,
	paymentmethod text not null,
	notes text not null,
	vtoken varchar(20) not null,
	ptoken varchar(20) not null,
	r varchar(100) default '0' not null,
	nd date null,
	eid int(10) default '0' not null,
	ename varchar(200) default '' not null,
	vid int default '0' not null,
	currency int default '0' not null,
	currency_symbol varchar(10) null,
	currency_prefix varchar(10) null,
	currency_suffix varchar(10) null,
	currency_rate decimal(11,4) default '1.0000' not null,
	recurring tinyint(1) default '0' not null,
	recurring_ends date null,
	last_recurring_date date null,
	source varchar(200) null,
	sale_agent int default '0' not null,
	last_overdue_reminder date null,
	allowed_payment_methods text null,
	billing_street varchar(200) null,
	billing_city varchar(100) null,
	billing_state varchar(100) null,
	billing_zip varchar(50) null,
	billing_country varchar(100) null,
	shipping_street varchar(200) null,
	shipping_city varchar(100) null,
	shipping_state varchar(100) null,
	shipping_zip varchar(100) null,
	shipping_country varchar(100) null,
	q_hide tinyint(1) default '0' not null,
	show_quantity_as varchar(100) null,
	pid int default '0' not null,
	is_credit_invoice int(1) default '0' not null,
	aid int default '0' not null,
	aname varchar(200) null
)
;





         */

        break;



    case 'print':
        Event::trigger('invoices/print/');
        $id = $routes['2'];
        $d = ORM::for_table('sys_purchases')->find_one($id);
        if ($d) {
            // find all activity for this user

            $items = ORM::for_table('sys_purchaseitems')
                ->where('invoiceid', $id)
                ->order_by_asc('id')
                ->find_many();

            // find the user

            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            require 'system/lib/invoices/render.php';
        } else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;

    case 'pdf':
        Event::trigger('invoices/pdf/');
        $id = $routes['2'];
         $r_type = $routes['4'];
         $token = '';

    
        global $app, $config, $_L, $pdf_tpl, $extraHtml;

        $d = ORM::for_table('sys_morder')->find_one($id);
        if ($d) {
            if ($token != '') {
                $token = str_replace('token_', '', $token);
                $vtoken = $d->vtoken;
                if ($token != $vtoken) {
                    echo 'Sorry Token does not match!';
                    exit();
                }
            }
$items=[];
            //find all activity for this user
            $items1 = ORM::for_table('sys_morder_items')
                ->where('orderid', $id)
                ->order_by_asc('id')
                ->find_many();

                foreach ($items1 as $_items) {

                $did = ORM::for_table('sys_mitems')->find_one($_items->item_id);

                    $items[] = [
                    'price' => $_items->price,
                    'qty' => $_items->qty,
                    'weight' => number_format($_items->weight,2).'Kg',
                    'total' => $_items->total,
                    'description' => $did->name,
                    'itemcode'=>'',
                    'unit'=> $did->unit,
                   ];
                    
                }

        


            // $trs_c = ORM::for_table('sys_transactions')
            //     ->where('iid', $id)
            //     ->count();

            // $trs = ORM::for_table('sys_transactions')
            //     ->where('iid', $id)
            //     ->order_by_desc('id')
            //     ->find_many();

            //find the user
           // $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
           // $i_credit = $d['credit'];
            $i_due = 0.0;
            $i_credit =0.0;
            $i_total = $d['total'];
            // if ($d['credit'] != '0.00') {
            //     $i_due = $i_total - $i_credit;
            // } else {
            //     $i_due = $d['total'];
            // }

            //            $i_due = number_format($i_due,2,$config['dec_point'],$config['thousands_sep']);
            $cf = ORM::for_table('crm_customfields')
                ->where('showinvoice', 'Yes')
                ->order_by_asc('id')
                ->find_many();

            // find the quote

            $quote = false;

            if ($d->quote_id != '0') {
                $quote = ORM::for_table('sys_quotes')->find_one($d->quote_id);
            }

            if ($d['cn'] != '') {
                $dispid = $d['cn'];
            } else {
                $dispid = $d['id'];
            }

            $in = $d['invoicenum'] . $dispid;

           
                $company = false;
            

            $pdf_c = '';
            $ib_w_font = 'dejavusanscondensed';
            if ($config['pdf_font'] == 'default') {
                $pdf_c = 'c';
                $ib_w_font = 'Helvetica';
            }

            try {
                $mpdf = new \Mpdf\Mpdf();
                $mpdf->SetTitle($config['CompanyName'] . ' Invoice');
                $mpdf->SetAuthor($config['CompanyName']);
                $mpdf->SetWatermarkText(ib_lan_get_line($d['status']));

                if ($config['invoice_show_watermark'] == 1) {
                    $mpdf->showWatermarkText = true;
                    $mpdf->watermark_font = $ib_w_font;
                    $mpdf->watermarkTextAlpha = 0.1;
                }

                $mpdf->SetDisplayMode('fullpage');

                if ($config['rtl'] == 1) {
                    $mpdf->SetDirectionality('rtl');
                }

                if ($config['pdf_font'] == 'AdobeCJK') {
                    $mpdf->useAdobeCJK = true;
                    $mpdf->autoScriptToLang = true;
                    $mpdf->autoLangToFont = true;

                    if (
                        isset($config['pdf_watermark_font']) &&
                        file_exists(
                            'vendor/mpdf/mpdf/ttfonts/' .
                                $config['pdf_watermark_font']
                        )
                    ) {
                        $mpdf->watermark_font = $config['pdf_watermark_font'];
                    }
                }

                $creating_pdf = true;
                $pdf_tpl = 'system/lib/invoices/render_bill.php';

                if (file_exists('system/overrides/invoice_pdf.php')) {
                    $pdf_tpl = 'system/overrides/invoice_pdf.php';
                }

                $format_currency_override = [];

                if (isset($config['decimal_places_products_and_services'])) {
                    $format_currency_override['precision'] =
                        $config['decimal_places_products_and_services'];
                }

                ob_start();
                require $pdf_tpl;
                $html = ob_get_contents();
                ob_end_clean();
                $mpdf->WriteHTML($html);
                if ($r_type == 'dl') {
                    $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'D'); # D
                } elseif ($r_type == 'inline') {
                    $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); # D
                } elseif ($r_type == 'store') {
                    $mpdf->Output('storage/temp/Invoice_' . $in . '.pdf', 'F'); # D
                } else {
                    $mpdf->Output(date('Y-m-d') . _raid(4) . '.pdf', 'I'); # D
                }
            } catch (\Exception $e) {
                dd(
                    'An error occurred, probably related to your server! : ',
                    $e->getMessage(),
                    "\n"
                );
            }
        }
        break;

   




    case 'export_csv':
        $fileName = 'transactions_' . time() . '.csv';
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header('Content-Description: File Transfer');
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename={$fileName}");
        header("Expires: 0");
        header("Pragma: public");
        $fh = @fopen('php://output', 'w');
        $headerDisplayed = false;

        // $results = ORM::for_table('crm_Accounts')->find_array();

        $results = db_find_array('sys_purchases');
        foreach ($results as $data) {
            // Add a header row if it hasn't been added yet

            if (!$headerDisplayed) {
                // Use the keys from $data as the titles

                fputcsv($fh, array_keys($data));
                $headerDisplayed = true;
            }

            // Put the data into the stream

            fputcsv($fh, $data);
        }

        // Close the file

        fclose($fh);
        break;

   

    default:
        echo 'action not defined';
}
