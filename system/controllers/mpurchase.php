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
        

  case 'mpurchaselist':
        $items = Mpurchase::select([
            'id',
            'pruchase_ref',
            'supplier',
            'subject',
            'Issued_at',
            'total_tax',
            'total_discount',
            'tweight',
            'subtotal',
            'total',
            'note',
            'status',
            'created_at'


        ]);

      

        $items = $items->get();

        $format_currency_override = [];

        if (isset($config['decimal_places_products_and_services'])) {
            $format_currency_override['precision'] =
                $config['decimal_places_products_and_services'];
        }

        \view('manufacturing/mpurchaselist', [
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

   
   case 'edit_mpurchase':
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
        

        $app->emit('edit_mpurchase', [&$_id]);
        $itemsdata=[];
        $d = ORM::for_table('sys_mpurchase')->find_one($_id);
      
          $ui->assign('d', $d);
           
        

        //end new code===


     $ui->assign('sys_morder', $sys_morder);

        \view('manufacturing/edit_mpurchase', [
            'pos' => 'pos',
            'purchase' => $purchase,
            'purchase_items' => $purchase_items,
        ]);

        break;




    case 'list':
        $paginator = [];

        $view_type = 'default';
        $view_type = 'filter';

        $total_invoice = ORM::for_table('sys_purchases')->count();
        $ui->assign('total_invoice', $total_invoice);
        $f = ORM::for_table('sys_purchases');
        if (route(3) != '') {
            $s_f = route(3);
            if ($s_f == 'paid') {
                $f->where('status', 'Paid');
            } elseif ($s_f == 'unpaid') {
                $f->where('status', 'Unpaid');
            } elseif ($s_f == 'partially_paid') {
                $f->where('status', 'Partially Paid');
            } elseif ($s_f == 'cancelled') {
                $f->where('status', 'Cancelled');
            } else {
            }
        }

        $d = $f->order_by_desc('id')->find_many();
        $paginator['contents'] = '';

        $ui->assign('view_type', $view_type);
        $ui->assign('d', $d);
        $ui->assign('paginator', $paginator);

        $paid = ORM::for_table('sys_purchases')
            ->where('status', 'Paid')
            ->count();
        $unpaid = ORM::for_table('sys_purchases')
            ->where('status', 'Unpaid')
            ->count();
        $partially_paid = ORM::for_table('sys_purchases')
            ->where('status', 'Partially Paid')
            ->count();
        $cancelled = ORM::for_table('sys_purchases')
            ->where('status', 'Cancelled')
            ->count();
        $arr = [
            'Paid' => $paid,
            'Unpaid' => $unpaid,
            'Partially Paid' => $partially_paid,
            'Cancelled' => $cancelled,
        ];
        $p = Ib_Math::array_percentage($arr);
        $invoice_paid_amount = Purchase::where('status', 'Paid')->sum('total');
        $invoice_un_paid_amount = Purchase::where('status', 'Unpaid')->sum(
            'total'
        );
        $invoice_partially_paid_amount = Purchase::where(
            'status',
            'Partially Paid'
        )->sum('credit');
        $invoice_cancelled_amount = Purchase::where('status', 'Cancelled')->sum(
            'total'
        );
        $cancelled = Purchase::where('status', 'Cancelled')->count();

        view('purchase_list', [
            'paid' => $paid,
            'unpaid' => $unpaid,
            'partially_paid' => $partially_paid,
            'cancelled' => $cancelled,
            'invoice_paid_amount' => $invoice_paid_amount,
            'invoice_un_paid_amount' => $invoice_un_paid_amount,
            'invoice_cancelled_amount' => $invoice_cancelled_amount,
            'invoice_partially_paid_amount' => $invoice_partially_paid_amount,
            'p' => $p,
        ]);

        break;

   
  case 'view':

        $id = $routes['2'];

        $app->emit('mpurchase_view', [&$id]);
        $itemsdata=[];
        $d = ORM::for_table('sys_mpurchase')->find_one($id);
        if ($d) {
            $items = ORM::for_table('sys_mpurchase_item')
                ->where('mpurchase_id', $id)
                ->order_by_asc('id')
                ->find_many();


$supplier= ORM::for_table('crm_accounts')->find_one($d->supplier);
                



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
                    'size'=>'L:'.$_items->lenght.'<br/>W:'.$_items->width.'<br/>H:'.$_items->height.'<br/>D:'.$_items->density,
                    'tax'=>$_items->tax,
                    'discount'=>$_items->discount,
                    'tax_rate'=>$_items->tax_rate,
                    'discount_rate'=>$_items->discount_rate,
                    'subtotal'=>$_items->subtotal

                   ];
                    
                }

            $ui->assign('items', $itemsdata);
             $ui->assign('supplier', $supplier);

            
          
          $ui->assign('d', $d);
        
            view('manufacturing/mpurchase_view');
        } else {
            r2(U . 'mpurchase/mpurchaselist', 'e','Something went Wrong..');
        }

        break;

    case 'print_mpurchase':

         $id = $routes['2'];

        $app->emit('print_mpurchase', [&$id]);
        $itemsdata=[];
        $d = ORM::for_table('sys_mpurchase')->find_one($id);
        if ($d) {
            $items = ORM::for_table('sys_mpurchase_item')
                ->where('mpurchase_id', $id)
                ->order_by_asc('id')
                ->find_many();


             $supplier= ORM::for_table('crm_accounts')->find_one($d->supplier);
                



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
                    'size'=>'L:'.$_items->lenght.'<br/>W:'.$_items->width.'<br/>H:'.$_items->height.'<br/>D:'.$_items->density,
                    'tax'=>$_items->tax,
                    'discount'=>$_items->discount,
                    'tax_rate'=>$_items->tax_rate,
                    'discount_rate'=>$_items->discount_rate,
                    'subtotal'=>$_items->subtotal

                   ];
                    
                }

            $ui->assign('items', $itemsdata);
             $ui->assign('supplier', $supplier);

            
          
          $ui->assign('d', $d);
        
            view('manufacturing/print_mpurchase');
        } else {
            r2(U . 'customers/list', 'e', $_L['Account_Not_Found']);
        }

        break;


     case 'delete':
       
        $id = $routes['2'];
        $d = ORM::for_table('sys_mpurchase')->find_one($id);
         $ditem = ORM::for_table('sys_mpurchase_item')->where('mpurchase_id',$id)->find_many();
         $dc = ORM::for_table('raw_inventory')->where('ref_no',$id)->find_many();
        if ($d) {
            $d->delete();
            $dc->delete();
            $ditem->delete();
            r2(U . 'mpurchase/mpurchaselist', 's', 'Delete successfully.');
        }

        break;


    case 'save':
        //        var_dump($_POST);
        //
        //        exit;
        Event::trigger('mpurchase/add-post/');
        $cid = _post('cid');

        // find user with cid

        $u = ORM::for_table('sys_accounts')->find_one($cid);
        $msg = '';
        if ($cid == '') {
            $msg .= $_L['select_a_contact'] . ' <br /> ';
        }

        $notes = _post('notes');



        if ($_POST['subject']!='') {
            $subject= $_POST['subject'];
        } else {
            $msg .= 'subject id required' . ' <br /> ';
        }



         if ($_POST['start_date']!='') {
            $start_date = $_POST['start_date'];
        } else {
            $msg .= 'Issued Date is required' . ' <br /> ';
        }



        if (isset($_POST['total'])) {
            $total = $_POST['total'];
        } else {
            $msg .= $_L['at_least_one_item_required'] . ' <br /> ';
        }

       // $its = strtotime($start_date);

      


        if ($msg == '') {
            $morder = ORM::for_table('sys_mpurchase')->create();

            $morder_c = ORM::for_table('sys_mpurchase')->count();

            $morder->subject = $_POST['subject'];
            $morder->note = $_POST['notes'];
            $morder->Issued_at = $_POST['start_date'];
            $morder->status = $_POST['status'];
            $morder->supplier = $_POST['cid'];
            $morder->created_by =$user->id;
              $morder->total = $_POST['total'];
              $morder->tweight = $_POST['tweight'];
              $morder->subtotal = $_POST['sub_total'];

              $morder->total_tax = $_POST['t_tax'];
              
              $morder->total_discount = $_POST['t_discount'];

            $morder->save();
           
            $invoiceid = $morder->id;
            
             $dn = ORM::for_table('sys_mpurchase')->find_one($invoiceid);
             if ($dn) {
                 $dn->pruchase_ref= '000'.$invoiceid;
                 $dn->save();
             }
             
            


            $name = $_POST['name'];
            $pos_item_id = $_POST['pos_item_id'];
          

            $i = '0';
            foreach ($name as $item) {

            $name =$name;
            $pos_item_id = $_POST['pos_item_id'][$i];


            $length = $_POST['length'][$i];
            $width = $_POST['width'][$i];
            $height = $_POST['height'][$i];
            $density = $_POST['density'][$i];
             $qty = $_POST['qty'][$i];
            $weight =$length*$width*$height*$density;

            $total_weight = $weight*$qty;

           
            $cost_price = $_POST['cost_price'][$i];


            $discount = $_POST['discount'][$i];
            $tax = $_POST['tax'][$i];

             $tax_total = $_POST['line_tax'][$i];
              $discount_total = $_POST['line_discount'][$i];

                $total= $_POST['ttl_price'][$i];
                $ttl_price= $qty*$cost_price;



                $d = ORM::for_table('sys_mpurchase_item')->create();
                $d->mpurchase_id = $invoiceid;
                $d->item_id =$pos_item_id;

                $d->lenght =$length;
                 $d->width =$width;
                  $d->height =$height;
                   $d->density =$density;
                   $d->total_weight =$total_weight;
                   $d->weight =$weight;
                   $d->qty =$qty;
                   $d->price =$cost_price;
                   $d->discount_rate =$discount;
                   $d->tax_rate =$tax;

                   $d->discount =$discount_total;
                   $d->tax =$tax_total;
                
                $d->total = $total;
                $d->subtotal = $ttl_price;
                $d->created_at =date('Y-m-d');
                $d->save();

                $raw_inventory = ORM::for_table('raw_inventory')->create();

                $raw_inventory->ref_no = $invoiceid;
                $raw_inventory->item_id =$pos_item_id;
                $raw_inventory->price =$cost_price;

                 $raw_inventory->lenght =$length;
                 $raw_inventory->width =$width;
                 $raw_inventory->height =$height;
                 $raw_inventory->density =$density;
                 $raw_inventory->weight =$weight;

                $raw_inventory->qty =$qty;
                $raw_inventory->total_weight =$total_weight;
                $raw_inventory->total_amount = $ttl_price;
                $raw_inventory->created_at =date('Y-m-d');
                $raw_inventory->process_status='PURCHASE-IN';
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

        $d = ORM::for_table('sys_mpurchase')->find_one($id);
        if ($d) {
            $supplier= ORM::for_table('crm_accounts')->find_one($d->supplier);

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
            $items1 = ORM::for_table('sys_mpurchase_item')
                ->where('mpurchase_id', $id)
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
                    'size'=>'L:'.$_items->lenght.'<br/>W:'.$_items->width.'<br/>H:'.$_items->height.'<br/>D:'.$_items->density,
                    'tax'=>$_items->tax,
                    'discount'=>$_items->discount,
                    'tax_rate'=>$_items->tax_rate,
                    'discount_rate'=>$_items->discount_rate,
                    'subtotal'=>$_items->subtotal

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
                $pdf_tpl = 'system/lib/invoices/render_mpurchase.php';

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

    case 'markpaid':
        $iid = _post('iid');
        $d = ORM::for_table('sys_purchases')->find_one($iid);
        if ($d) {
            $d->status = 'Paid';
            $d->save();
            Event::trigger('invoices/markpaid/', $invoice = $d);
            _msglog('s', 'Invoice marked as Paid');
        } else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'markunpaid':
        Event::trigger('invoices/markunpaid/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_purchases')->find_one($iid);
        if ($d) {
            $d->status = 'Unpaid';
            $d->save();
            _msglog('s', 'Invoice marked as Un Paid');
        } else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'markcancelled':
        Event::trigger('invoices/markcancelled/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_purchases')->find_one($iid);
        if ($d) {
            $d->status = 'Cancelled';
            $d->save();
            _msglog('s', 'Invoice marked as Cancelled');
        } else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'markpartiallypaid':
        Event::trigger('invoices/markpartiallypaid/');
        $iid = _post('iid');
        $d = ORM::for_table('sys_purchases')->find_one($iid);
        if ($d) {
            $d->status = 'Partially Paid';
            $d->save();
            _msglog('s', 'Invoice marked as Partially Paid');
        } else {
            _msglog('e', 'Invoice not found');
        }

        break;

    case 'add-payment':
        Event::trigger('invoices/add-payment/');
        $sid = $routes['2'];
        $d = ORM::for_table('sys_purchases')->find_one($sid);
        if ($d) {
            $itotal = $d['total'];
            $ic = $d['credit'];
            $np = $itotal - $ic;
            $a_opt = '';

            // <option value="{$ds['account']}">{$ds['account']}</option>

            $a = ORM::for_table('sys_accounts')->find_many();
            foreach ($a as $acs) {
                $a_opt .=
                    '<option value="' .
                    $acs['id'] .
                    '">' .
                    $acs['account'] .
                    '</option>';
            }

            $pms_opt = '';

            // <option value="{$pm['name']}">{$pm['name']}</option>

            $pms = ORM::for_table('sys_pmethods')
                ->order_by_asc('sorder')
                ->find_many();
            foreach ($pms as $pm) {
                $pms_opt .=
                    '<option value="' .
                    $pm['name'] .
                    '">' .
                    $pm['name'] .
                    '</option>';
            }

            $cats_opt = '';
            $cats = ORM::for_table('sys_cats')
                ->where('type', 'Expense')
                ->order_by_asc('sorder')
                ->find_many();
            foreach ($cats as $cat) {
                $cats_opt .=
                    '<option value="' .
                    $cat['name'] .
                    '">' .
                    $cat['name'] .
                    '</option>';
            }

            $currency_opt = '';

            $currencies = Currency::all();

            $currency_iso_code = $d->currency_iso_code;

            $currency = Currency::getAllCurrencies();

            $currency_symbol = $config['currency_code'];
            $currency_decimal_point = $config['dec_point'];
            $thousands_separator = $config['thousands_sep'];

            if (isset($currency[$currency_iso_code])) {
                $selected_currency = $currency[$currency_iso_code];
                $currency_symbol = $selected_currency['symbol'];
                $currency_decimal_point = $selected_currency['decimal_mark'];
                $thousands_separator =
                    $selected_currency['thousands_separator'];
            }
            //            foreach($currencies as $currency) {
            //
            //                // $currency_opt .= '<option value="' . $currency['iso_code'] . '">' . $currency['iso_code'] . '</option>';
            //
            //                $currency_opt.= '<div class="form-group">
            //    <label for="amount_' . $currency->iso_code . '" class="col-sm-3 control-label">' . $_L['Amount'] . ' [' . $currency->iso_code . ']</label>
            //    <div class="col-sm-9">
            //      <input type="text" id="amount_' . $currency->iso_code . '" name="amount_' . $currency->iso_code . '" class="form-control amount"   data-a-sign="' . $currency->symbol . ' " data-a-dec="' . $config['dec_point'] . '" data-a-sep="' . $config['thousands_sep'] . '"
            //data-d-group="2" value="">
            //
            //    </div>
            //  </div>';
            //            }

            //            $currency_opt = '<div class="form-group">
            //    <label for="amount">' . $_L['Amount'] . '</label>
            //    <input type="text" id="amount" name="amount" class="form-control amount"   data-a-sign="' . $config['currency_code'] . ' " data-a-dec="' . $config['dec_point'] . '" data-a-sep="' . $config['thousands_sep'] . '"
            //data-d-group="2" value="">
            //
            //  </div>';

            $currency_opt =
                '<div class="form-group">
    <label for="amount">' .
                $_L['Amount'] .
                ' [' .
                $currency_iso_code .
                ']</label>
    <input type="text" id="amount" name="amount" class="form-control amount"   data-a-sign="' .
                $currency_symbol .
                ' " data-a-dec="' .
                $currency_decimal_point .
                '" data-a-sep="' .
                $thousands_separator .
                '"
data-d-group="3" value="">
  </div>';

            $secondary_currency = secondary_currency();
            $payment_amount = $np;
            if ($d['currency_symbol'] == '') {
                $invoice_currency = $config['currency_code'];
            } else {
                $invoice_currency = $d['currency_symbol'];
            }

            echo '
<div class="mx-auto" style="max-width: 650px;">
<div class="panel mb-0 rounded-0">
<div class="panel-hdr">

	<h2>' .
                $_L['Purchase'] .
                ' #' .
                $d['id'] .
                '</h2>
</div>

<div class="panel-container">
<div class="panel-content">


<div class="modal-body">
<h3>' .
                $_L['Invoice Total'] .
                ': <span class="amount" data-a-sign="' .
                $invoice_currency .
                ' ">' .
                $d['total'] .
                '</span></h3>
<hr>
<form class="form-horizontal" role="form" id="form_add_payment" method="post">
<div class="form-group">
    <label for="subject">' .
                $_L['Account'] .
                '</label>
    <select id="account" name="account">
                            <option value="">' .
                $_L['Choose an Account'] .
                '</option>

' .
                $a_opt .
                '

                        </select>
    </div>

<div class="form-group">
    <label for="date">' .
                $_L['Date'] .
                '</label>
    <input type="text" class="form-control datepicker"  value="' .
                date('Y-m-d') .
                '" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
  </div>

<div class="form-group">
    <label for="description">' .
                $_L['Description'] .
                '</label>
    <input type="text" id="description" name="description" class="form-control" value="' .
                $_L['Purchase'] .
                ' ' .
                $d['id'] .
                ' ' .
                $_L['Payment'] .
                '">
  </div>
  
  
' .
                $currency_opt .
                '



  
  
<div class="form-group">
    <label for="cats">' .
                $_L['Category'] .
                '</label>
    <select id="cats" name="cats">
                             <option value="Uncategorized">' .
                $_L['Uncategorized'] .
                '</option>

' .
                $cats_opt .
                '

                        </select>
  </div>
  <div class="form-group">
    <label for="payer_name">' .
                $_L['Payee'] .
                '</label>
    <input type="text" id="payer_name" name="payer_name" class="form-control" value="' .
                $d['account'] .
                '" disabled>
  </div>

   <div class="form-group">
    <label for="subject" class="col-sm-3 control-label">' .
                $_L['Method'] .
                '</label>
    <select id="pmethod" name="pmethod">
                                <option value="">' .
                $_L['Select Payment Method'] .
                '</option>


                                ' .
                $pms_opt .
                '


                            </select>
  </div>

<input type="hidden" name="iid" value="' .
                $d['id'] .
                '">
<input type="hidden" name="payer" value="' .
                $d['userid'] .
                '">
<input type="hidden" name="currency" value="' .
                $d['currency_iso_code'] .
                '">
<button id="save_payment" class="btn btn-primary">' .
                $_L['Save'] .
                '</button>

</form>

</div>



</div>
</div>



</div>


</div>


<div class="modal-footer">

	

		';
        } else {
            exit('Invoice Not Found');
        }

        break;

    case 'add-payment-post':
        Event::trigger('invoices/add-payment-post/');
        $msg = '';
        $account = _post('account');

        if ($account == '') {
            $msg .= $_L['Select An Account'] . '<br />';
        }

        $date = _post('date');
        $amount = _post('amount');

        //  $amount = Finance::amount_fix($amount);

        $currency_iso_code = _post('currency');

        $amount = createFromCurrency($amount, $currency_iso_code);

        $payerid = _post('payer');
        $pmethod = _post('pmethod');
        $ref = _post('ref');
        if ($payerid == '') {
            $payerid = '0';
        }

        $payer = '';

        if ($payerid != '0') {
            $payer_find = Contact::find($payerid);

            if ($payer_find) {
                $payer = $payer_find->account;
            }
        }

        $currencies = Currency::all();
        $tr_currency = '0';
        $tr_currency_symbol = '';
        $tr_currency_rate = '1.0000';
        //        $amount = '0.00';
        //        foreach($currencies as $currency) {
        //            if ((isset($_POST['amount_' . $currency->iso_code])) && ($_POST['amount_' . $currency->iso_code] != '')) {
        //                $tr_currency = $currency->id;
        //                $tr_currency_symbol = $currency->iso_code;
        //                $tr_currency_rate = $currency->rate;
        //                $amount = $_POST['amount_' . $currency->iso_code];
        //                $amount = Finance::amount_fix($amount, $currency->symbol);
        //            }
        //        }

        $cat = _post('cats');
        $iid = _post('iid');
        if ($payerid == '') {
            $msg .= 'Payer Not Found' . '<br />';
        }

        $description = _post('description');

        if ($description == '') {
            $msg .= $_L['description_error'] . '<br />';
        }

        if (is_numeric($amount) == false) {
            $msg .= $_L['amount_error'] . '<br />';
        }

        if ($msg == '') {
            // update the account balance table

            //            $a = ORM::for_table('sys_accounts')->where('account', $account)->find_one();
            //            $account_id = $a->id;
            //            $cbal = $a['balance'];
            //            $nbal = $cbal - $amount;
            //            $a->balance = $nbal;
            //            $a->save();
            //
            //            $home_currency = Currency::where('iso_code', $config['home_currency'])->first();
            //            $account_balance = Balance::where('account_id', $account_id)->where('currency_id', $home_currency->id)->first();
            //            if ($account_balance) {
            //                $cbal = $account_balance->balance;
            //                $account_balance->balance = $cbal - $amount;
            //                $account_balance->save();
            //            }
            //            else {
            //
            //                // create record
            //
            //                $account_balance = new Balance;
            //                $account_balance->account_id = $account_id;
            //                $account_balance->currency_id = $home_currency->id;
            //                $account_balance->balance = 0-$amount;
            //                $account_balance->save();
            //            }

            $account_find = Account::find($account);
            $d = ORM::for_table('sys_transactions')->create();
            $d->account = $account_find->account;
            $d->account_id = $account_find->id;
            $d->type = 'Expense';
            $d->payerid = '0';
            $d->payeeid = $payerid;
            $d->amount = $amount;
            $d->category = $cat;
            $d->method = $pmethod;
            $d->ref = $ref;
            $d->tags = '';
            $d->description = $description;
            $d->date = $date;
            $d->dr = $amount;
            $d->cr = '0.00';

            // $d->bal = $nbal;

            $d->purchase_id = $iid;
            $d->currency = $tr_currency;
            $d->currency_symbol = $tr_currency_symbol;
            $d->currency_rate = $tr_currency_rate;

            // others

            $d->payer = '';
            $d->payee = $payer;

            $d->status = 'Cleared';
            $d->tax = '0.00';
            $d->aid = 0;

            $d->vid = _raid(8);

            $d->updated_at = date('Y-m-d H:i:s');

            //

            $d->save();
            $tid = $d->id();
            _log(
                'New Expense: ' .
                    $description .
                    ' [TrID: ' .
                    $tid .
                    ' | Amount: ' .
                    $amount .
                    ']',
                'Admin',
                $user->id
            );
            _msglog('s', 'Transaction Added Successfully');

            // now work with invoice

            $i = ORM::for_table('sys_purchases')->find_one($iid);
            if ($i) {
                $pc = $i['credit'];
                $it = $i['total'];
                $dp = $it + $pc;
                if ($dp == $amount or $dp < $amount) {
                    $i->status = 'Paid';
                } else {
                    $i->status = 'Partially Paid';
                }
                $i->credit = $pc + $amount;
                $i->save();
            }

            echo $tid;
        } else {
            echo '<div class="alert alert-danger fade in">' . $msg . '</div>';
        }

        break;

    case 'mail_invoice_':
        Event::trigger('invoices/mail_invoice_/');
        $sid = $routes['2'];
        $etpl = $routes['3'];
        $d = ORM::for_table('sys_purchases')->find_one($sid);
        if ($d) {
            $a = ORM::for_table('crm_accounts')->find_one($d['userid']);
            $msg = Purchase::gen_email($sid, $etpl);
            if ($msg) {
                $subj = $msg['subject'];
                $message_o = $msg['body'];
                $email = $msg['email'];
                $name = $msg['name'];
            } else {
                $subj = '';
                $message_o = '';
                $email = '';
                $name = '';
            }

            if ($d['cn'] != '') {
                $dispid = $d['cn'];
            } else {
                $dispid = $d['id'];
            }

            $in = $d['invoicenum'] . $dispid;
            echo '
<div class="mx-auto" style="max-width: 650px;">
	<div class="panel mb-0 rounded-0">
	<div class="panel-hdr">
    <h3>Invoice #' .
                $d['id'] .
                '</h3>
</div>
<div class="panel-container">
<div class="panel-content">


<form class="form-horizontal" role="form" id="email_form" method="post">


<div class="form-group">
    <label for="toemail" class="col-sm-2 control-label">' .
                $_L['To'] .
                '</label>
    <input type="email" id="toemail" name="toemail" class="form-control" value="' .
                $email .
                '">
  </div>

  <div class="form-group">
    <label for="ccemail" class="col-sm-2 control-label">' .
                $_L['Cc'] .
                '</label>
    <input type="email" id="ccemail" name="ccemail" class="form-control" value="">
  </div>

  <div class="form-group">
    <label for="bccemail" class="col-sm-2 control-label">' .
                $_L['Bcc'] .
                '</label>
    <input type="email" id="bccemail" name="bccemail" class="form-control" value="">
      <span class="help-block"><a href="#" id="send_bcc_to_admin">' .
                $_L['Send Bcc to Admin'] .
                '</a></span>
  </div>

    <div class="form-group">
    <label for="subject" class="col-sm-2 control-label">' .
                $_L['Subject'] .
                '</label>
    <input type="text" id="subject" name="subject" class="form-control" value="' .
                $subj .
                '">
  </div>

  <div class="form-group">
    <label for="subject" class="col-sm-2 control-label">' .
                $_L['Message Body'] .
                '</label>
    <textarea class="form-control sysedit" rows="3" name="message" id="message">' .
                $message_o .
                '</textarea>
      <input type="hidden" id="toname" name="toname" value="' .
                $name .
                '">
      <input type="hidden" id="i_cid" name="i_cid" value="' .
                $a['id'] .
                '">
      <input type="hidden" id="i_iid" name="i_iid" value="' .
                $d['id'] .
                '">
  </div>


<div class="form-group">
    <label for="attach_pdf" class="col-sm-2 control-label">' .
                $_L['Attach PDF'] .
                '</label>
    <div class="col-sm-10">
      <div class="checkbox c-checkbox">
      <label>
                            <input type="checkbox" name="attach_pdf" id="attach_pdf" value="Yes" checked> ' .
                $_L['Invoice'] .
                '_' .
                $in .
                '.pdf
                          </label>
                          
                        </div>
    </div>
  </div>
<button id="send" class="btn btn-primary">' .
                $_L['Send'] .
                '</button>

</form>




</div>



	
</div>
	
	
';
        } else {
            exit('Invoice Not Found');
        }

        break;

    case 'send_email':
        Event::trigger('invoices/send_email/');
        $msg = '';
        $email = _post('toemail');
        $cc = _post('ccemail');
        $bcc = _post('bccemail');
        $subject = _post('subject');
        $toname = _post('toname');
        $cid = _post('i_cid');
        $iid = _post('i_iid');
        $d = ORM::for_table('sys_purchases')->find_one($iid);
        if ($d['cn'] != '') {
            $dispid = $d['cn'];
        } else {
            $dispid = $d['id'];
        }

        $in = $d['invoicenum'] . $dispid;
        $message = $_POST['message'];
        $attach_pdf = _post('attach_pdf');
        $attachment_path = '';
        $attachment_file = '';
        if ($attach_pdf == 'Yes') {
            Invoice::pdf($iid, 'store');
            $attachment_path = 'storage/temp/Invoice_' . $in . '.pdf';
            $attachment_file = 'Invoice_' . $in . '.pdf';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg .= 'Invalid Email <br />';
        }

        if (!filter_var($cc, FILTER_VALIDATE_EMAIL)) {
            $cc = '';
        }

        if (!filter_var($bcc, FILTER_VALIDATE_EMAIL)) {
            $bcc = '';
        }

        if ($subject == '') {
            $msg .= 'Subject is Required <br />';
        }

        if ($message == '') {
            $msg .= 'Message is Required <br />';
        }

        if ($msg == '') {
            // now send email

            Email::sendEmail(
                $config,
                $_L,
                $toname,
                $email,
                $subject,
                $message,
                $cid,
                $iid,
                $cc,
                $bcc,
                $attachment_path,
                $attachment_file
            );

            // Now check for

            echo '<div class="alert alert-success fade in">Mail Sent!</div>';
        } else {
            echo '<div class="alert alert-danger fade in">' . $msg . '</div>';
        }

        break;

    case 'stop_recurring':
        Event::trigger('invoices/stop_recurring/');
        $id = $routes['2'];
        $id = str_replace('sid', '', $id);
        $d = ORM::for_table('sys_purchases')->find_one($id);
        if ($d) {
            $d->r = '0';
            $d->save();
            r2(
                U . 'invoices/list-recurring',
                's',
                'Recurring Disabled for Invoice: ' . $id
            );
        } else {
            echo 'Invoice not found';
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

    case 'payments':
        $mode_css = Asset::css('footable/css/footable.core.min');
        $mode_js = Asset::js(['numeric', 'footable/js/footable.all.min']);
        $d = ORM::for_table('sys_transactions')
            ->where_not_equal('iid', '0')
            ->limit(500)
            ->find_array();
        $ui->assign('d', $d);
        $ui->assign('xheader', $mode_css);
        $ui->assign('xfooter', $mode_js);
        $ui->assign(
            'xjq',
            '
        
        $(\'.footable\').footable();
        
         $(\'.amount\').autoNumeric(\'init\', {

    aSign: \'' .
                $config['currency_code'] .
                ' \',
    dGroup: ' .
                $config['thousand_separator_placement'] .
                ',
    aPad: ' .
                $config['currency_decimal_digits'] .
                ',
    pSign: \'' .
                $config['currency_symbol_position'] .
                '\',
    aDec: \'' .
                $config['dec_point'] .
                '\',
    aSep: \'' .
                $config['thousands_sep'] .
                '\',
    vMax: \'9999999999999999.00\',
                vMin: \'-9999999999999999.00\'

    });
$(".cdelete").click(function (e) {
        e.preventDefault();
        var id = this.id;
        bootbox.confirm("' .
                $_L['are_you_sure'] .
                '", function(result) {
           if(result){
               var _url = $("#_url").val();
               window.location.href = _url + "delete/invoice/" + id;
           }
        });
    });



 '
        );
        view('payments');
        break;

    case 'clone':
        $id = route(2);
        $new_id = Purchase::cloneInvoice($id);
        if ($new_id) {
            r2(
                U . 'purchases/edit/' . $new_id,
                's',
                $_L['Cloned successfully']
            );
        }

        break;

    case 's':
        is_dev();
        $t = new Schema('ib_invoice_access_log');
        $t->drop();
        $t->add('lid', 'int', '11', '0');
        $t->add('cid', 'int', '11', '0');
        $t->add('iid', 'int', '11', '0');
        $t->add('company_id', 'int', '11', '0');
        $t->add('customer', 'varchar', '200');
        $t->add('ip', 'varchar', '50');
        $t->add('browser', 'varchar', '200');
        $t->add('referer', 'varchar', '200');
        $t->add('city', 'varchar', '200');
        $t->add('postal_code', 'varchar', '50');
        $t->add('country', 'varchar', '200');
        $t->add('country_iso', 'varchar', '20');
        $t->add('viewed_at', 'varchar', '200');
        $t->add('lat', 'varchar', '100');
        $t->add('lon', 'varchar', '100');
        $t->save();
        add_option('maxmind_installed', '0');
        add_option('maxmind_db_version', '');
        break;

    case 'pos':
        $extra_fields = '';
        $extra_jq = '';
        $ui->assign('extra_fields', $extra_fields);
        if (isset($routes['2']) and $routes['2'] == 'recurring') {
            $recurring = true;
        } else {
            $recurring = false;
        }

        $currencies = Currency::all();
        $ui->assign('recurring', $recurring);
        $ui->assign('currencies', $currencies);
        if (isset($routes['3']) and $routes['3'] != '') {
            $p_cid = $routes['3'];
            $p_d = ORM::for_table('crm_accounts')->find_one($p_cid);
            if ($p_d) {
                $ui->assign('p_cid', $p_cid);
            }
        } else {
            $ui->assign('p_cid', '');
        }

        $c = ORM::for_table('crm_accounts')
            ->select('id')
            ->select('account')
            ->select('company')
            ->select('email')
            ->order_by_desc('id')
            ->find_many();
        $ui->assign('c', $c);
        $t = ORM::for_table('sys_tax')->find_many();
        $ui->assign('t', $t);
        $ui->assign('idate', date('Y-m-d'));

        Event::trigger('add_invoice_rendering_form');

        view('pos');
        break;

    case 'set_stage':
        $stage = route(2);
        $id = _post('iid');

        $purchase = Purchase::find($id);

        if ($purchase) {
            switch ($stage) {
                case 'mark_stage_pending':
                    $s = 'Pending';

                    break;

                case 'mark_stage_accepted':
                    $s = 'Accepted';

                    break;

                case 'mark_stage_declined':
                    $s = 'Declined';

                    break;

                case 'mark_stage_on_hold':
                    $s = 'On Hold';

                    break;

                case 'mark_stage_cancelled':
                    $s = 'Cancelled';

                    break;

                default:
                    $s = 'Pending';
            }

            $purchase->stage = $s;

            $purchase->save();

            echo 'ok';
        }

        break;

    default:
        echo 'action not defined';
}
