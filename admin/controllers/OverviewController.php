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

    $products = listAll('products');
    $countsp = count($products);

    //client
    $client = array_filter($users, function ($user) {
        return $user['role'] == 0;

    });

    //admin
    $admin = array_filter($users, function ($user) {
        return $user['role'] == 1;

    });

    //countpro
    $sp_het_hang = array_filter($products, function ($product) {
        return $product['so_luong_kho'] == 0 ;

    });


    $countcl = count($client);
    $countad = count($admin);
    $sp_da_het = count($sp_het_hang);


    //hang_ban_chay

    $hang_ban_chay = checkSoluongban('products');

    $hang_da_het = checkSoluonghang('products');





    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
