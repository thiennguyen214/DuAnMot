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

<<<<<<< HEAD
    $oders = listOder();
    // debug($oders);
=======
    $oders = listAll('cart_item');
    $oderuser = listAll('carts');
    $products = listAll('products');

    $count = count($oderuser);

    $users = listAll('users');
>>>>>>> acd30bfacf9a194b4dba4f60923884ebfe173c3e


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
    $active2 = 'active';

    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
            "email" => $_POST['email'] ?? null,
            "pass" => $_POST['pass'] ?? null,
            "tell" => $_POST['tell'] ?? null,
            "address" => $_POST['address'] ?? null,
            "role" => $_POST['role'] ?? null,
        ];

        update('users', $id, $data);
        header('Location: ' . BASE_URL_ADMIN . '?act=users');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function validateOderUpdate($id, $data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự
    // email - bắt buộc, phải là email, không được trùng
    // password - bắt buộc, đồ dài nhỏ nhất là 8, lớn nhất là 20
    // type - bắt buộc, nó phải là 0 or 1

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    }

    if (empty($data['email'])) {
        $errors[] = 'Trường email là bắt buộc';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Trường email không đúng định dạng';
    } else if (!checkUniqueEmailForUpdate('users', $id, $data['email'])) {
        $errors[] = 'Email đã được sử dụng';
    }

    if (empty($data['pass'])) {
        $errors[] = 'Trường password là bắt buộc';
    } else if (strlen($data['pass']) < 8 || strlen($data['pass']) > 20) {
        $errors[] = 'Trường password đồ dài nhỏ nhất là 8, lớn nhất là 20';
    }
    if ($data['role'] === null) {
        $errors[] = 'Trường type là bắt buộc';
    } else if (!in_array($data['role'], [0, 1])) {
        $errors[] = 'Trường type phải là 0 or 1';
    }
    if (!empty($data['ImageUpload']) && $data['ImageUpload']['size'] > 0) {
        $typeImage = ['image/png', 'image/jpg', 'image/jpeg'];

        if ($data['ImageUpload']['size'] > 2 * 1024 * 1024) {
            $errors[] = 'Trường ImageUpload có dung lượng nhỏ hơn 2M';
        } else if (!in_array($data['ImageUpload']['type'], $typeImage)) {
            $errors[] = 'Trường ImageUpload chỉ chấp nhận định dạng file: png, jpg, jpeg';
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;

        header('Location: ' . BASE_URL_ADMIN . '?act=user-update&id=' . $id);
        exit();
    }

}