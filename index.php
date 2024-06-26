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
    'chinhsachthanhvien' => showChinhsachthanhvien(),
    'chinhsachthanhtoan' => showChinhsachthanhtoan(),
    'chinhsachdoisanpham' => showChinhsachdoisanpham(),
    'chinhsachbaomat' => showChinhsachbaomat(),
    'chinhsachcongtacvien' => showChinhsachcongtacvien(),
    'huongdanmuahang' => showhuongdanmuahang(),
    'huongdandoitra' => showhuongdandoitra(),
    'huongdanthanhtoan' => showhuongdanthanhtoan(),
    'chuongtrinhcongtacvien' => showChuongtrinhcongtacvien(),
    'giaidapthacmac' => showGiaidapthacmac(),

    'cart-add' => cartAdd(),
    'cart' => cartList(),
    'cart-inc' => cartInc($_GET['productID']),
    'cart-dec' => cartDec($_GET['productID']),
    'cart-del' => cartDel($_GET['productID']),


    'order-purchase' => orderPurchase(),
    'order-success' => orderSuccess($_GET['id']),

    'log' => showLog(),
    'logoutc' => authenCliLogout(),

    'reg' => showReg(),

    // =======
    'Male' => filter_proBySex(),
    'Female' => filter_proBySex(),
    'Unisex' => filter_proBySex(),



    'filter_prAZ' => filter_proAZ(),
    'filter_prZA' => filter_proAZ(),
    'filterProByPriceAsc' => filter_proByPrice(),
    'filterProByPriceDesc' => filter_proByPrice(),
    'filterProByCreatedAsc' => filter_proByCreated(),
    'filterProByCreatedDesc' => filter_proByCreated(),
    'filter_brand' => filterProByBrand($_GET['id']),


    // 'ajax-Fav-update' => ajaxFavUpdate($_GET['userID'], $_GET['proID']),

    // 'favorite' => showFavs($_GET['userID']),

    'favCreat' => ajaxFavCreate(),


    'searc' => searchn(),
    'searchpro' => serach(),





};


require_once './commons/disconnect_db.php';