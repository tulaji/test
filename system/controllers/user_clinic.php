<?php
_auth();
$ui->assign('selected_navigation', 'User_clinic');
$ui->assign('_title', $config['CompanyName']);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);
Event::trigger('user_clinic');

switch ($action) {
    case 'add':
        
        view('user_clinic');
        break;
    case 'add-post':
        $d = ORM::for_table('sys_user_clinic')->create();
        $d->user_name = _post('user_name');
        $d->location = _post('location');
        $d->g_profile = _post('g_profile');
        $d->website = _post('website');
        $d->adderss = _post('adderss');
        $d->number = _post('number');
        $d->price = _post('price');
        $d->save();
        _msglog('s', 'User Clinic Added Successfully');
        echo $d->id();
        $c =  ORM::for_table('sys_user_clinic')
        ->select('id')
        ->select('location')
        ->group_by('location')             // Ensures unique values
        ->find_many();
        view('user_clinic_view',['c'=>$c]);
        break;

    case 'view':
        $c =  ORM::for_table('sys_user_clinic')
        ->select('id')
        ->select('location')
        ->group_by('location')             // Ensures unique values
        ->find_many();
        view('user_clinic_view',['c'=>$c]);
        break;

    case 'tr_list':
        $columns = [];
        $columns[] = 'id';
        $columns[] = 'account';
        $columns[] = 'total';
        $columns[] = 'credit';
        $columns[] = 'due';
        $columns[] = 'date';
        $columns[] = 'manage';
        $order_by = $_POST['order'];
        $o_c_id = $order_by[0]['column'];
        $o_type = $order_by[0]['dir'];
        // $a_order_by = $columns[$o_c_id];

        $d = ORM::for_table('sys_user_clinic');

        $cid = _post('cid');
        if ($cid != '') {
            $d->where('id', $cid);
        }

        $reportrange = _post('reportrange');
        if ($reportrange != '') {
            $d->where('price', $reportrange);
        }

        $x = $d->find_array();
        $iTotalRecords = $d->count();

        $iDisplayLength = intval($_REQUEST['length']);
        $iDisplayLength =
            $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
        $iDisplayStart = intval($_REQUEST['start']);
        $sEcho = intval($_REQUEST['draw']);
        $records = [];
        $records["data"] = [];
        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;
        // if ($o_type == 'desc') {
        //     $d->order_by_desc($a_order_by);
        // } else {
        //     $d->order_by_asc($a_order_by);
        // }

        $d->limit($end);
        $d->offset($iDisplayStart);
        $x = $d->find_array();
        $i = $iDisplayStart;
        foreach ($x as $xs) {
            $records["data"][] = [
                '<a href="">' . $xs['id'] .'</a>',
                $xs['user_name'],
                $xs['location'],
                $xs['g_profile'],
                $xs['website'],
                $xs['number'],
                $xs['price'],
                '<a href="' .
                U .
                'invoices/view/' .
                $xs['id'] .
                '" class="btn btn-primary btn-xs"><i class="fal fa-file-alt"></i></a>',
            ];
        }

        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;
        api_response($records);

        break;
        
}