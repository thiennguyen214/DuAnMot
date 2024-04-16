<?php


function showProductDetail($id)
{

    $view = "viewAll/productAll";
    $style = 'styles/productDetail';

    $product = listOnePro($id);
    $products = showGh('products', 5);
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
    $tittle = 'Chi tiết';
    $fnames = charter();
    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
    }
    if (!empty($_SESSION['userm'])) {
        $favs = listFav($_SESSION['userm']['id']);
        foreach ($favs as $fav) {
            $_SESSION['favs'][$fav['p_id']] = $fav['p_id'];
        }
        $carts = cartItemAll($_SESSION['userm']['id']);
        $totalc = 0;
        foreach ($carts as $cart) {
            if (empty($_SESSION['cart'][$cart['pro_id']])) {
                $_SESSION['cart'][$cart['pro_id']] = $cart;
            }
            $totalc += $_SESSION['cart'][$cart['pro_id']]['quantity'];
        }
    }

    require_once PATH_VIEW . '/layouts/master.php';

}