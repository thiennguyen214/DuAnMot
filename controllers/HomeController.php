<?php
function showHome()
{
    $view = "home";
    $active1 = 'active';
    $style = 'styles/home';
    $tittle = 'Trang chủ';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $proTop10 = getTop10product('products');
    $top10Pro = top1OPro();

    $brands = listAll('brands');
    $products = listAll('products');
    $xuHuong = xuHuong();
    $users = listAll('users');
    $banChaytt = spBanChay();
    $spSale = spSale();


    require_once PATH_VIEW . '/layouts/master.php';

}





// function dashboard()
// {
//     $view = 'dashboard';
//     $script = 'datetime';
//     $style = 'datatable';
//     require_once PATH_VIEW_USER . 'layout/master.php';
// }