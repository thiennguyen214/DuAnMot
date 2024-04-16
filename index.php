<?php
session_start();

require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect_db.php';
require_once './commons/model.php';
// require_once './views/topbar.php';
// require_once './views/sidebar.php';
// require_once './views/footer.php';

require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

$act = $_GET['act'] ?? '/';

// Biến này cần khai báo được link cần đăng nhập mới vào được
$arrRouteNeedAuth = [
    'cart-add',
    'cart-list',
    'cart-inc',
    'cart-dec',
    'cart-del',
    'order-checkout',
    'order-purchase',
    'order-success',
];

// Kiểm tra xem user đã đăng nhập chưa
middleware_auth_check_cl($act, $arrRouteNeedAuth);
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
// debug($_SESSION['cart']);

//
match ($act) {

    '/' => showHome(),
    'posts' => showPost(),

    
    // 'cart' => showCart(),
    'products' => showProduct(),


    'productDetail' => showProductDetail($_GET['id']),


    // 'productDetail' => showProductDetail(),


  

    'introduce' => showIntroduction(),
    'brand' => showBrand(),
    'thanhtoan' => showThanhtoan(),
    'bills' => showBills(),
    'thongtintk' => showThongtintk(),
    'lienhe' => showLienhe(),
    'chitietsp' => showChitietsp(),
    'addresses' => showAddresses(),
    'yourCart' => showYourCart(),
    'repass' => showrePass(),

    'cart-add' => cartAdd(),
    'cart' => cartList(),
    'cart-inc' => cartInc($_GET['productID']),
    'cart-dec' => cartDec($_GET['productID']),
    'cart-del' => cartDel($_GET['productID']),


    'order-purchase' => orderPurchase(),
    'order-success' => orderSuccess(),

    'log' => showLog(),
    'logoutc' => authenCliLogout(),

    'reg' => showReg(),
    // =======
    'Male' => showProduct(),
    'Female' => showProduct(),

    'Unisex' => showProduct(),

    // 'ajax-Fav-update' => ajaxFavUpdate($_GET['userID'], $_GET['proID']),

    'favorite' => showFavs($_GET['userID']),
    'favCreat' => ajaxFavCreate(),
    'searc' => searchn(),






};


require_once './commons/disconnect_db.php';