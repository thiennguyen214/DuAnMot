<?php
function showyourCart()
{
    $tittle = "đơn hàng của bạn";
    $view = "viewAll/yourCart";
    $style = 'styles/yourCart';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');
    $fnames = charter();
    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
    }


    require_once PATH_VIEW . '/layouts/master.php';

}