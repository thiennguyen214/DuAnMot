<?php
function oderListAll1($status)
{
    $title = 'Danh sách Oder';
    if ($status == '1') {
        $btn1 = 'btn-addd';
    } else if ($status == "2") {
        $btn2 = 'btn-addd';
    } else if ($status == '3') {
        $btn3 = 'btn-addd';
    } else if ($status == '4') {
        $btn4 = 'btn-addd';
    } else if ($status == '0') {
        $btn0 = 'btn-addd';
    }

    $view = 'order/index';
    $viewtable = 'table1';
    $script = 'datetime';
    $style = 'datatable';

    // $style2 = 'form';


    $script3 = 'table';
    $active4 = 'active';
    $checkbox = 'create2';
    $oders = listOder($status);
    // debug($oders);
    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}


function oderShowOne($id)
{
    $oder = showOne('cart_item', $id);

    if (empty($oder)) {
        e404();
    }

    $title = 'Chi tiết oder: ' . $oder['name'];
    $view = 'oders/index';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}


function upStatus($id, $sta)
{

    $status = $sta + 1;
    if ($sta == 0) {
        updateOrder($id, 0);
    } else {
        if ($sta == 1) {
            updateOrder($id, $status);
        } else if ($sta == 2) {
            updateOrder($id, $status);
        } else if ($sta == 3) {
            updateOrder($id, $status);
        }
    }


    header('Location: ' . BASE_URL_ADMIN . '?act=oders&status=' . $sta);
    exit();
}
