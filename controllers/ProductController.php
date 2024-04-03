<?php

function showProduct()
{
    $view = "viewAll/product";
    $style = "styles/product";
    $active4 = "active";
    $products = listAll('products');
    $tittle = 'Sản phẩm';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');

    require_once PATH_VIEW . '/layouts/master.php';

}