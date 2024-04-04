<?php
function showIntroduction()
{
    $view = "viewAll/introduce";
    $style = 'styles/gioithieu';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');
    $users = listAll('users');
    $tittle ="Giới thiệu";
    $cli = array_filter($users, function ($client) {
        return $client['role'] == 0;
    });

    $countCli = count($cli);
    $ad = array_filter($users, function ($admin) {
        return $admin['role'] == 1;
    });

    $countAd = count($ad);

    $product = listAll('products');
    $countProduct = count($product);
    

    require_once PATH_VIEW . '/layouts/master.php';

}