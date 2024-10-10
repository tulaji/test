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


 $sys_mreturn = ORM::for_table('sys_mreturn')
            ->where_like('futuresave', '%YES%')
            ->find_many();



         $ui->assign('clx_projects', $clx_projects);
         $ui->assign('suppliers', $supplier);

        $ui->assign('c', $c);
        $ui->assign('idate', date('Y-m-d'));

     $ui->assign('sys_mreturn', $sys_mreturn);

        \view('manufacturing/addreturn', [
            'pos' => 'pos',
            'purchase' => $purchase,
            'purchase_items' => $purchase_items,
        ]);

        break;
        

  case 'mreturn_damage':
        $items = Mreturn::select([
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

        \view('manufacturing/mreturn', [
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
   
  case 'delete':
       
        $id = $routes['2'];
        $d = ORM::for_table('sys_mreturn')->find_one($id);
        $ditem=ORM::for_table('sys_mreturn_items')->where('orderid',$id)->find_many();
         $dc = ORM::for_table('raw_inventory')->where('ref_no',$id)->where_like('process_status','%-OUT%')->find_many();


        if ($d) {
            $d->delete();
            $dc->delete();
            $ditem->delete();
            r2(U . 'mreturn/mreturn_damage', 's', 'Delete successfully.');
        }

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

        $app->emit('return_view', [&$id]);
        $itemsdata=[];
        $d = ORM::for_table('sys_mreturn')->find_one($id);
        if ($d) {
            $items = ORM::for_table('sys_mreturn_items')
                ->where('orderid', $id)
                ->order_by_asc('id')
                ->find_many();


$supplier= ORM::for_table('crm_accounts')->find_one($d->order_to);
                



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
                    'size'=>'L:'.$_items->lenght.'<br/>W:'.$_items->width.'<br/>H:'.$_items->height.'<br/>D:'.$_items->density

                   ];
                    
                }

            $ui->assign('items', $itemsdata);
             $ui->assign('supplier', $supplier);

            
          
          $ui->assign('d', $d);
        
            view('manufacturing/return_view');
        } else {
            r2(U . 'mreturn/mreturn_damage', 'e','Something went Wrong..');
        }

        break;
    case 'save':
        //        var_dump($_POST);
        //
        //        exit;
        Event::trigger('morder/add-post/');
       
         $cid1 = _post('cid1');
          

        // find user with cid
        
    
            $u = ORM::for_table('crm_accounts')->find_one($cid1);
        
        
        $msg = '';
        if ($cid1 != '') {
            
        }else{
            $msg .= $_L['select_a_contact'] . ' <br /> ';
        }

        $notes = _post('notes');


         if (isset($_POST['start_date'])) {
            $start_date = $_POST['start_date'];
        } else {
            $msg .= 'Date id required' . ' <br /> ';
        }



        if (isset($_POST['total'])) {
            $total = $_POST['total'];
        } else {
            $msg .= $_L['at_least_one_item_required'] . ' <br /> ';
        }

        $its = strtotime($start_date);

      

       

        if ($msg == '') {
            $morder = ORM::for_table('sys_mreturn')->create();

            $morder_c = ORM::for_table('sys_mreturn')->count();

            $morder->order_name = $_POST['subject'];
            $morder->order_note = $_POST['notes'];
            $morder->start_date = $_POST['start_date'];
           
         
            $morder->order_to = $_POST['cid1'];
            $morder->team_name=$u->account;
           

            $morder->order_status = $_POST['status'];
            $morder->created_by =$user->id;
            $morder->order_total = $_POST['total'];
            $morder->weight_total = $_POST['tweight'];
            $morder->save();
           
            $invoiceid = $morder->id;
            
             $dn = ORM::for_table('sys_mreturn')->find_one($invoiceid);
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

            $d_item = ORM::for_table('sys_mreturn_items')->find_one($pos_item_id);

                $d = ORM::for_table('sys_mreturn_items')->create();
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
                $raw_inventory->process_status=$_POST['status'];

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


 case 'print_bill':

        $id = $routes['2'];

        $app->emit('print_mreturn', [&$id]);
        $itemsdata=[];
        $d = ORM::for_table('sys_mreturn')->find_one($id);
        if ($d) {
            $items = ORM::for_table('sys_mreturn_items')
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
        
            view('manufacturing/print_mreturn');
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

        $d = ORM::for_table('sys_mreturn')->find_one($id);
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
            $items1 = ORM::for_table('sys_mreturn_items')
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
                $pdf_tpl = 'system/lib/invoices/render_mreturn.php';

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
   


    default:
        echo 'action not defined';
}
