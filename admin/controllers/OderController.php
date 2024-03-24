<?php
function oderListAll()
{
    $title = 'Danh sách Oder';
    $view = 'order/index';
    $script = 'datetime';
    $style = 'datatable';
    // $style2 = 'form';
    $script3 = 'table';
    $active4 = 'active';

    $oders = listAll('cart_item');
    $oderuser = listAll('carts');
    $products = listAll('products');

    $count = count($oderuser);

    $users = listAll('users');


    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function oderShowOne($id)
{
    $oder = showOne('cart_item', $id);

    if (empty ($oder)) {
        e404();
    }

    $title = 'Chi tiết oder: ' . $oder['name'];
    $view = 'oders/index';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function oderDelete($id)
{
    delete2('cart_item', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=oders');
    exit();
}