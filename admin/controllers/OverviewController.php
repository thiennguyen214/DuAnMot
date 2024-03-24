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
  

   
   




    $products = listAll('products');

    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
