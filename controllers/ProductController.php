<?php
function showProduct($id)
{
<<<<<<< HEAD
    $view = "viewAll/productAll";
    $style = 'styles/productDetail';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');
    $product = listOnePro($id);
    $products = showGh('products', 3);
    $imgs = showImgs('img_products', $id);
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
    // echo $product['type_id'];


=======
    $view = "viewAll/product";
    $style = "styles/product";
    $active4 = "active";
    $tittle = 'Sản phẩm';
    if($_GET['act'] == 'products'){
        $products = listAllPro();
    } 
    
    if($_GET['act'] == 'Female' ){
        $products = selectSeg('Nước Hoa Nữ');
    }

    if($_GET['act'] == 'Male' ){
        $products = selectSeg('Nước Hoa Nam');
       
    }
    
>>>>>>> abde912301b35e9d49dfd7962ed3a68628d28241


    require_once PATH_VIEW . '/layouts/master.php';

}
<<<<<<< HEAD
=======

>>>>>>> abde912301b35e9d49dfd7962ed3a68628d28241
