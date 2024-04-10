<?php
function showProduct()
{
   

    // echo $product['type_id'];


    
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

    if ($_GET['act'] == 'Unisex') {
        $products = selectSeg('Nước Hoa Unisex');

    }

    

    require_once PATH_VIEW . '/layouts/master.php';

}
