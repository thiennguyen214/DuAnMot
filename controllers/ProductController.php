<?php
function showProduct()
{
    // <<<<<<< HEAD

    // echo $product['type_id'];


    // =======
    $view = "viewAll/product";
    $style = "styles/product";
    $active4 = "active";
    $tittle = 'Sản phẩm';
    if ($_GET['act'] == 'products') {
        $products = listAllPro();
    }

    if ($_GET['act'] == 'Female') {
        $products = selectSeg('Nước Hoa Nữ');
    }

    if ($_GET['act'] == 'Male') {
        $products = selectSeg('Nước Hoa Nam');

    }

    // >>>>>>> abde912301b35e9d49dfd7962ed3a68628d28241


    require_once PATH_VIEW . '/layouts/master.php';

}
// <<<<<<< HEAD
// =======

// >>>>>>> abde912301b35e9d49dfd7962ed3a68628d28241
