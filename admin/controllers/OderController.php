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
    $checkbox = 'create2';


    $oders = listOder();




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
function oderDelete($id)
{
    delete2('bills', $id);
    delete2('bills_item', $id);
    $script3 = 'table';


    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=oders');
    exit();
}

function orderUpdate($id)
{
    $oder = listOneOder($id);

    if (empty($oder)) {
        e404();
    }

    $title = 'Cập nhật User: ' . $oder['b_name'];
    $view = 'order/update';
    $style2 = 'form';
    $script = 'datetime';
    $style = 'datatable';
    $script2 = 'create';
    $script3 = 'create2';
    $active4 = 'active';

    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
            "email" => $_POST['email'] ?? null,
        ];

        update('users', $id, $data);
        header('Location: ' . BASE_URL_ADMIN . '?act=users');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function upStatus($id)
{

    $oder = showOne('bills', $id);
    $status = $oder['status'] + 1;
    if ($oder['status'] == 1) {
        updateOrder($id, $status);
    } else if ($oder['status'] == 2) {
        updateOrder($id, $status);
    } else if ($oder['status'] == 3) {
        updateOrder($id, $status);
    }

    header('Location: ' . BASE_URL_ADMIN . '?act=oder-update&id=' . $oder['id']);
    exit();
}
