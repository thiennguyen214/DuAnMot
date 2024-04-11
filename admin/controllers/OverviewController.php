<?php

function overListAll()
{
    $title = 'Báo cáo thông tin';
    $view = 'overview/index';
    $script = 'datetime';
    $style = 'datatable';
    // $style2 = 'form';
    $script3 = 'table';
    $active5 = 'active';


    $users = listAll('users');
    $count = count($users);
    // $ThuNhap = array_map(function($tong){ $tinhtong =  $tong + $tong; return $tinhtong; }, $users['id']);
    // echo $ThuNhap;
    $products = listAll('products');
    $countpro = count($products);

    //count client

    $cli = array_filter($users, function ($client) {
        return $client['role'] == 0;
    });

    $countCli = count($cli);

    //count admin
    $ad = array_filter($users, function ($admin) {
        return $admin['role'] == 1;
    });

    $countAd = count($ad);

    //count sp het
    $sp_het = array_filter($products, function ($product) {
        return $product['so_luong_kho'] - $product['so_luong_ban'] == 0;
    });
    $countSp_het = count($sp_het);

    // san pham ban chay
    $sp_ban_chay = topBanchay('products');

    $bills = listAll('bills');


    //số dơn hang
    $billsStatus = array_filter($bills, function ($status) {
        return $status['status'] == 2 || $status['status'] == 1 || $status['status'] == 3;
    });

    $countBillStatus = count($billsStatus);

    //Don hang huy

    $OrderCancle = array_filter($bills, function ($status) {
        return $status['status'] == 0;
    });

    $countOrderCancle = count($OrderCancle);


    //Tong thu nhập trên các đơn hiện có

    $tong = oderSum();

    //bảng tổng các đơn hiện có
    $TableSum = FillDataBills();


    //user mới
    $NewUser = NewUser();




















    $products = listAll('products');

    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
