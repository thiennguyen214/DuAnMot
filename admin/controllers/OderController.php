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

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function oderShowOne($id)
{
    $oder = showOne('oders', $id);

    if (empty ($oder)) {
        e404();
    }

    $title = 'Chi tiết oder: ' . $oder['name'];
    $view = 'oders/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function oderCreate()
{
    $title = 'Thêm mới oder';
    $view = 'oders/create';
    $script = 'datetime';
    $active6 = 'active';



    if (!empty ($_POST)) {

        $data = [
            "key" => $_POST['key'] ?? null,
            "value" => $_POST['value'] ?? null,
        ];

        validateoderCreate($data);
        insert('oders', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=oders');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function validateoderCreate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự
    // email - bắt buộc, phải là email, không được trùng
    // password - bắt buộc, đồ dài nhỏ nhất là 8, lớn nhất là 20
    // type - bắt buộc, nó phải là 0 or 1

    $errors = [];

    if (empty ($data['key'])) {
        $errors[] = 'Trường key là bắt buộc';
    } else if (strlen($data['key']) > 50) {
        $errors[] = 'Trường key độ dài tối đa 50 ký tự';
    }
    if (empty ($data['value'])) {
        $errors[] = 'Trường value là bắt buộc';
    }
    if (!empty ($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=oder-create');
        exit();
    }
}

function oderUpdate($id)
{
    $oder = showOne('oders', $id);

    if (empty ($oder)) {
        e404();
    }

    $title = 'Cập nhật oder: ' . $oder['key'];
    $view = 'oders/update';
    $script = 'datetime';
    $active6 = 'active';

    if (!empty ($_POST)) {
        $data = [
            "key" => $_POST['key'] ?? null,
            "value" => $_POST['value'] ?? null,
        ];
        update('oders', $id, $data);
        validateoderUpdate($id, $data);
        // $_SESSION['success'] = 'Thao tác thành công!';
        header('Location: ' . BASE_URL_ADMIN . '?act=oders');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function validateoderUpdate($id, $data)
{
    $errors = [];

    if (empty ($data['key'])) {
        $errors[] = 'Trường key là bắt buộc';
    } else if (strlen($data['key']) > 50) {
        $errors[] = 'Trường key độ dài tối đa 50 ký tự';
    }
    if (empty ($data['value'])) {
        $errors[] = 'Trường value là bắt buộc';
    }
    if (!empty ($errors)) {
        $_SESSION['errors'] = $errors;

        header('Location: ' . BASE_URL_ADMIN . '?act=oder-update&id=' . $id);
        exit();
    }

}

function oderDelete($id)
{
    delete2('oders', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=oders');
    exit();
}