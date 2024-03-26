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

    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
