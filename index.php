<?php
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect_db.php';
require_once './commons/model.php';
// require_once './views/topbar.php';
// require_once './views/sidebar.php';
// require_once './views/footer.php';

require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);


//
$act = $_GET['act'] ?? '/';
match ($act) {
    '/' => showHome(),

    // 'gioithieu' => gioithieu(),
    // 'user-detail' => userDetail()
    'login' => showLog(),
    // 'showone' => showne($_GET['id']),

    'posts' => showPost(),

    'cart' => showCart(),

    'products' => showProduct(),
    'posts' => showPost(),

    'productDetail' => showProduct(),


    'introduce' => showIntroduction(),

    'brand' => showBrand(),

    'thanhtoan' => showThanhtoan(),




};


require_once './commons/disconnect_db.php';