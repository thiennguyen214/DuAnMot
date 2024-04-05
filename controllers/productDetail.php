<?php


function showProductDetail($id)
{

    $view = "viewAll/productAll";
    $style = 'styles/productDetail';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');
    $product = listOnePro($id);
    $products = showGh('products', 3);
    // $imgs = showImgs('img_products', $id);
    // debug($arry);
    $data = showOne('products', $id);
    $cartm = json_encode($data);
    $sex = '';
    if ($product['type_id'] == 1) {
        $sex = 'Nam';
    } else if ($product['type_id'] == 2) {
        $sex = 'Nữ';
    } else if ($product['type_id'] == 3) {
        $sex = 'Unisex';
    }
    $tittle = 'Chi tiết';

    require_once PATH_VIEW . '/layouts/master.php';

}