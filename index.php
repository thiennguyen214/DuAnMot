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

//
match ($act) {
    '/' => showHome(),
    'log' => showLog(),
    'posts' => showPost(),
    // 'cart' => showCart(),
    'productDetail' => showProduct($_GET['id']),
    'introduce' => showIntroduction(),
    'brand' => showBrand(),
    'thanhtoan' => showThanhtoan(),

    'cart-add' => cartAdd($_GET['productID'], $_GET['quantity']),
    'cart' => cartList(),
    'cart-inc' => cartInc($_GET['productID']),
    'cart-dec' => cartDec($_GET['productID']),
    'cart-del' => cartDel($_GET['productID']),

    // 'login' => authenShowFormLogin(),
    'logoutc' => authenCliLogout(),



};


require_once './commons/disconnect_db.php';