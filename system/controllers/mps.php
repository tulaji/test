<?php
/*
|--------------------------------------------------------------------------
| Controller
|--------------------------------------------------------------------------
|
*/
_auth();
$ui->assign('selected_navigation', 'mps');
$ui->assign(
    '_title',
    $_L['Products n Services'] . '- ' . $config['CompanyName']
);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);

if (!has_access($user->roleid, 'products_n_services', 'view')) {
    permissionDenied();
}

switch ($action) {
    case 'modal-list':
        if (!has_access($user->roleid, 'products_n_services', 'view')) {
            permissionDenied();
        }

        $d = ORM::for_table('sys_items')
            ->order_by_asc('name')
            ->find_array();

        $format_currency_override = [];

        if (isset($config['decimal_places_products_and_services'])) {
            $format_currency_override['precision'] =
                $config['decimal_places_products_and_services'];
        }

        $format_currency_override['prefix'] = '';
        $format_currency_override['suffix'] = '';

        \view('ps_modal_list', [
            'd' => $d,
            'format_currency_override' => $format_currency_override,
        ]);

        break;

    case 'p-new':
        if (!has_access($user->roleid, 'products_n_services', 'create')) {
            permissionDenied();
        }

        $units = ORM::for_table('sys_units')
            ->order_by_asc('sorder')
            ->find_array();
        $ui->assign('units', $units);

        $ui->assign('type', 'Product');

        $max = ORM::for_table('sys_mitems')->max('id');
        $nxt = $max + 1;
        $ui->assign('nxt', $nxt);

        view('manufacturing/add-mps');

        break;





    case 's-new':
        if (!has_access($user->roleid, 'products_n_services', 'create')) {
            permissionDenied();
        }

        $ui->assign('type', 'Service');

        $max = ORM::for_table('sys_items')->max('id');
        $nxt = $max + 1;
        $ui->assign('nxt', $nxt);
        view('add-ps');

        break;

    case 'add-post':
        if (is_demo()) {
            exit('Disabled in demo.');
        }

        if (!has_access($user->roleid, 'products_n_services', 'edit')) {
            permissionDenied();
        }

        $msg = '';
        $totalweight='0.00';

        $data = $request->all();

        $name = _post('name');
        $item_number = _post('item_number');
        $description = _post('description');
        $type = _post('type');

        // other variables

        // check item number already exist

        if ($item_number != '') {
            $check = ORM::for_table('sys_mitems')
                ->where('item_number', $item_number)
                ->find_one();
            if ($check) {
                $msg .= 'Item number already exist <br>';
            }
        }

        $inventory = _post('inventory');

        if (!is_numeric($inventory)) {
            $inventory = '0';
        }

        $unit = _post('unit');

        //        $weight = _post('weight');
        //
        //        if(!is_numeric($weight)){
        //            $weight = '0.0000';
        //        }

        if ($name == '') {
            $msg .= 'Item Name is required <br>';
        }


         if ($data['raw_type']=='Rectangle') {
            $totalweight=(float)$data['width']*(float)$data['height']*(float)$data['density']*(float)$data['length'];
          }
          if ($data['raw_type']=='Square') {
            $totalweight=(float)$data['swidth']*(float)$data['sdensity']*(float)$data['slength'];
          }

         if ($data['raw_type']=='Other') {
            $totalweight='0.00';
          }




        $tax_code = _post('tax_code');
       
            $sales_price = '0.00';

        $cost_price = _post('cost_price', '0.00');

        $cost_price = Finance::amount_fix($cost_price);

        if (!is_numeric($cost_price)) {
            $cost_price = '0.00';
        }

        if ($msg == '') {
            $d = ORM::for_table('sys_mitems')->create();
            $d->name = $name;
            $d->sales_price = $sales_price;
            $d->item_number = $item_number;
            $d->description = $description;
            $d->type = $type;
            //others
            $d->unit = $unit;
            //            $d->weight = $weight;
            $d->inventory = $inventory;
            $d->e = '';

            $d->image = _post('file_link');
            $d->cost_price = $cost_price;

            $d->tax_code = $tax_code;
            $d->tds_deduction = _post('tds_deduction');
            
            if (isset($data['raw_type'])) {
                $d->raw_type = $data['raw_type'];

                 $d->weight = createFromCurrency(
                    $totalweight,
                    $config['home_currency']
                 );
            }


            if (isset($data['sku'])) {
                $d->sku = $data['sku'];
            }




  if ($data['raw_type']=='Rectangle') {
            
 $d->width = createFromCurrency($data['width'],$config['home_currency']);
 $d->length = createFromCurrency($data['length'],$config['home_currency']);
 $d->height = createFromCurrency($data['height'],$config['home_currency']);
 $d->density = createFromCurrency($data['density'],$config['home_currency']);

            }
  if ($data['raw_type']=='Square') {
   $d->width = createFromCurrency($data['swidth'],$config['home_currency']);
 $d->length = createFromCurrency($data['slength'],$config['home_currency']);
 $d->density = createFromCurrency($data['sdensity'],$config['home_currency']);
  }


            // if (isset($data['width'])) {
            //     $d->width = createFromCurrency(
            //         $data['width'],
            //         $config['home_currency']
            //     );
            // }

            // if (isset($data['length'])) {
            //     $d->length = createFromCurrency(
            //         $data['length'],
            //         $config['home_currency']
            //     );
            // }

            // if (isset($data['height'])) {
            //     $d->height = createFromCurrency(
            //         $data['height'],
            //         $config['home_currency']
            //     );
            // }
            //  if (isset($data['density'])) {
            //     $d->density = createFromCurrency(
            //         $data['density'],
            //         $config['home_currency']
            //     );
            // }



            $d->save();
           $itemid= $d->id;


                $raw_inventory = ORM::for_table('raw_inventory')->create();

                $raw_inventory->ref_no = $itemid;
                $raw_inventory->item_id =$itemid;
                $raw_inventory->price =$cost_price;

                 $raw_inventory->width = createFromCurrency($data['width'],$config['home_currency']);
                 $raw_inventory->lenght = createFromCurrency($data['length'],$config['home_currency']);
                 $raw_inventory->height = createFromCurrency($data['height'],$config['home_currency']);
                 $raw_inventory->density = createFromCurrency($data['density'],$config['home_currency']);

                 $raw_inventory->weight = createFromCurrency(
                    $totalweight,
                    $config['home_currency']
                 );


                $raw_inventory->qty =$inventory;
                $raw_inventory->total_weight =$totalweight;
                $raw_inventory->total_amount = $cost_price*$inventory;
                $raw_inventory->created_at =date('Y-m-d');
                $raw_inventory->process_status='IN';
                $raw_inventory->save();




            _msglog('s', $_L['Item Added Successfully']);

            echo $d->id();
        } else {
            echo $msg;
        }
        break;

    case 'p-list':
        if (!has_access($user->roleid, 'products_n_services', 'view')) {
            permissionDenied();
        }

        $paginator = Paginator::bootstrap('sys_items', 'type', 'Product');
        $d = ORM::for_table('sys_items')
            ->where('type', 'Product')
            ->offset($paginator['startpoint'])
            ->limit($paginator['limit'])
            ->order_by_desc('id')
            ->find_many();
        $ui->assign('d', $d);
        $ui->assign('type', 'Product');
        $ui->assign('paginator', $paginator);

        view('ps-list');
        break;

    case 's-list':
        $paginator = Paginator::bootstrap('sys_items', 'type', 'Service');
        $d = ORM::for_table('sys_items')
            ->where('type', 'Service')
            ->offset($paginator['startpoint'])
            ->limit($paginator['limit'])
            ->order_by_desc('id')
            ->find_many();
        $ui->assign('d', $d);
        $ui->assign('type', 'Service');
        $ui->assign('paginator', $paginator);

        view('ps-list');

        break;

    case 'products':
    case 'services':
        $items = Mitem::select([
            'id',
            'name',
            'item_number',
            'sales_price',
            'cost_price',
            'available',
            'image',
            'category_id',
            'width',
            'length',
            'height',
            'density',
            'weight',
            'inventory'


        ]);

        if ($action === 'products') {
            $items = $items->where('type', 'Product');
        } else {
            $items = $items->where('type', 'Service');
        }

        $items = $items->get();

        $format_currency_override = [];

        if (isset($config['decimal_places_products_and_services'])) {
            $format_currency_override['precision'] =
                $config['decimal_places_products_and_services'];
        }

        \view('manufacturing/mproducts_and_services', [
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

    case 'edit-post':
        if (is_demo()) {
            exit('Disabled in demo.');
        }

        if (!has_access($user->roleid, 'products_n_services', 'edit')) {
            permissionDenied();
        }

        $msg = '';

        $data = $request->all();

        $id = _post('id');
        $totalweight=0.00;

        $name = _post('name');
        $item_number = _post('item_number');
        $description = _post('description');
        $type = _post('type');

        // other variables


         if ($data['raw_type']=='Rectangle') {
            $totalweight=(float)$data['width']*(float)$data['height']*(float)$data['density']*(float)$data['length'];
          }
          if ($data['raw_type']=='Square') {
            $totalweight=(float)$data['swidth']*(float)$data['sdensity']*(float)$data['slength'];
          }

         if ($data['raw_type']=='Other') {
            $totalweight='0.00';
          }



        $inventory = _post('inventory');

        $inventory = Finance::amount_fix($inventory);

        if (!is_numeric($inventory)) {
            $inventory = '0';
        }

        $unit = _post('unit');

        $msg = '';

        if ($name == '') {
            $msg .= 'Item Name is required <br>';
        }

       


        $cost_price = _post('cost_price', '0.00');

        $cost_price = Finance::amount_fix($cost_price);

        if (!is_numeric($cost_price)) {
            $cost_price = '0.00';
        }

        if ($msg == '') {
            $d = ORM::for_table('sys_mitems')->find_one($id);
            if ($d) {
                if ($item_number != '' && $item_number != $d->item_number) {
                    $check = ORM::for_table('sys_mitems')
                        ->where('item_number', $item_number)
                        ->find_one();
                    if ($check) {
                        i_close('Item Number already exist.');
                    }
                }

                $d->name = $name;
                $d->item_number = $item_number;
                $d->description = $description;
                $d->inventory = $inventory;
                $d->tds_deduction = _post('tds_deduction');
                $d->image = _post('file_link');
                $d->cost_price = $cost_price;

              

              
             if ($data['raw_type']=='Rectangle') {
                 $d->width = createFromCurrency($data['width'],$config['home_currency']);
                 $d->length = createFromCurrency($data['length'],$config['home_currency']);
                 $d->height = createFromCurrency($data['height'],$config['home_currency']);
                 $d->density = createFromCurrency($data['density'],$config['home_currency']);
             }
              if ($data['raw_type']=='Square') {
                 $d->width = createFromCurrency($data['swidth'],$config['home_currency']);
                 $d->length = createFromCurrency($data['slength'],$config['home_currency']);
                 $d->density = createFromCurrency($data['sdensity'],$config['home_currency']);
              }

               if (isset($data['raw_type'])) {
                        $d->raw_type = $data['raw_type'];

                         $d->weight = createFromCurrency(
                            $totalweight,
                            $config['home_currency']
                         );
                }

                $d->save();
                echo $d->id();
            } else {
                echo 'Not Found';
            }
        } else {
            echo $msg;
        }

        break;
    case 'delete':
        if (is_demo()) {
            exit('Disabled in demo.');
        }

        if (!has_access($user->roleid, 'products_n_services', 'delete')) {
            permissionDenied();
        }

        $id = $routes['2'];
        if (APP_STAGE == 'Demo') {
            r2(
                U . 'accounts/list',
                'e',
                'Sorry! Deleting Account is disabled in the demo mode.'
            );
        }
        $d = ORM::for_table('sys_accounts')->find_one($id);
        if ($d) {
            $d->delete();
            r2(U . 'accounts/list', 's', $_L['account_delete_successful']);
        }

        break;

    case 'edit-form':
        if (!has_access($user->roleid, 'products_n_services', 'edit')) {
            exit();
        }

        $id = $routes['2'];
        $d = ORM::for_table('sys_mitems')->find_one($id);

        if ($d) {
            $price = number_format(
                $d->sales_price,
                2,
                $config['dec_point'],
                $config['thousands_sep']
            );
            $has_img = '';
            if ($d->image != '') {
                $has_img =
                    '<hr>
<img src="' .
                    APP_URL .
                    '/storage/items/' .
                    $d->image .
                    '" class="img-fluid">
';
            }

            \view('manufacturing/mps_edit', [
                'has_img' => $has_img,
                'item' => $d,
            ]);
        } else {
            echo 'not found';
        }

        break;

    case 'json_get':
        if (!has_access($user->roleid, 'products_n_services', 'view')) {
            permissionDenied();
        }

        header('Content-Type: application/json');

        $pid = route(2);

        $d = ORM::for_table('sys_items')->find_one($pid);

        if ($d) {
            $i = [];
            $i['sales_price'] = $d->sales_price;

            echo json_encode($i);
        }

        break;

    case 'cats':
        break;

    case 'upload':
        if (!has_access($user->roleid, 'products_n_services', 'create')) {
            permissionDenied();
        }

        if (APP_STAGE == 'Demo') {
            exit();
        }

        $uploader = new Uploader();
        $uploader->setDir('storage/items/');
        $uploader->sameName(false);
        $uploader->setExtensions(['jpg', 'jpeg', 'png', 'gif']); //allowed extensions list//
        //        $uploader->allowAllFormats();  //allowed extensions list//
        if ($uploader->uploadFile('file')) {
            //txtFile is the filebrowse element name //
            $uploaded = $uploader->getUploadName(); //get uploaded file name, renames on upload//

            $file = $uploaded;
            $msg = $_L['Uploaded Successfully'];
            $success = 'Yes';

            // create thumb

            $image = new Img();

            // indicate a source image (a GIF, PNG or JPEG file)
            $image->source_path = 'storage/items/' . $file;

            // indicate a target image
            // note that there's no extra property to set in order to specify the target
            // image's type -simply by writing '.jpg' as extension will instruct the script
            // to create a 'jpg' file
            $image->target_path = 'storage/items/thumb' . $file;

            // since in this example we're going to have a jpeg file, let's set the output
            // image's quality
            $image->jpeg_quality = 100;

            // some additional properties that can be set
            // read about them in the documentation
            $image->preserve_aspect_ratio = true;
            $image->enlarge_smaller_images = true;
            $image->preserve_time = true;

            // resize the image to exactly 100x100 pixels by using the "crop from center" method
            // (read more in the overview section or in the documentation)
            //  and if there is an error, check what the error is about
            if (!$image->resize(100, 100, ZEBRA_IMAGE_CROP_CENTER)) {
                // if no errors
            } else {
                // echo 'Success!';
            }

            $image->target_path = 'storage/items/thumb_400' . $file;

            if (!$image->resize(400, 400, ZEBRA_IMAGE_CROP_CENTER)) {
                // if no errors
            } else {
                // echo 'Success!';
            }

            //
        } else {
            //upload failed
            $file = '';
            $msg = $uploader->getMessage();
            $success = 'No';
        }

        $a = [
            'success' => $success,
            'msg' => $msg,
            'file' => $file,
        ];

        header('Content-Type: application/json');

        echo json_encode($a);

        break;

    default:
        echo 'action not defined';
}
