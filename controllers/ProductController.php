<?php
function showProduct()
{
    $view = "viewAll/product";
    $style = "styles/product";
    $active4 = "active";
    $tittle = 'Sản phẩm';
    if ($_GET['act'] == 'products') {
        $products = listAll('products');
    }
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

function filter_proAZ() {
    $view = "viewAll/filter_pro";
    $style = "styles/product";
    $active4 = "active";
    $tittle = 'Sản phẩm';

    if ($_GET['act'] == 'filter_prAZ') {
        $products = incNamePro();
    }

    if ($_GET['act'] == 'filter_prZA') {
        $products = decNamePro();
    }



    require_once PATH_VIEW . '/layouts/master.php';

}

function filter_proByPrice(){
    $view = "viewAll/filter_pro";
    $style = "styles/product";
    $active4 = "active";
    $tittle = 'Sản phẩm';
    if ($_GET['act'] == 'filterProByPriceAsc') {
        $products = incPricePro();
    }
    if ($_GET['act'] == 'filterProByPriceDesc') {
        $products = decPricePro();
    }


    require_once PATH_VIEW . '/layouts/master.php';
}

function filter_proByCreated(){
    $view = "viewAll/filter_pro";
    $style = "styles/product";
    $active4 = "active";
    $tittle = 'Sản phẩm';
    
    if ($_GET['act'] == 'filterProByCreatedAsc') {
        $products = newPro();
    }
    if ($_GET['act'] == 'filterProByCreatedDesc') {
        $products = oldPro();
    }


    require_once PATH_VIEW . '/layouts/master.php';
}

function filter_proBySex(){
    $view = "viewAll/filter_sex";
    $style = "styles/product";
    $active4 = "active";
    $tittle = 'Sản phẩm';
    
    if ($_GET['act'] == 'Male') {
        $products = Male();
    }
    if ($_GET['act'] == 'Female') {
        $products = Female();
    }

    if ($_GET['act'] == 'Unisex') {
        $products = Unisex();
    }


    require_once PATH_VIEW . '/layouts/master.php';
}

function filterProByBrand($id) {
    $view = "viewAll/filter_proByBrand";
    $style = "styles/product";
    $active4 = "active";
    $tittle = 'Sản phẩm';


    $fnames = charter();
    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
    }
    if ($_GET['act'] == 'filter_brand') {
        $products = filterByBrand($id);
    }

    

    require_once PATH_VIEW . '/layouts/master.php';
}