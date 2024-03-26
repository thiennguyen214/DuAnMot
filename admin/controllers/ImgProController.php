<?php
function imgProListAll()
{

    $title = 'Danh sách ảnh SP';
    $view = 'viewProducts/index';
    $viewtable = "imgs_products/index";
    $script = 'datetime';
    $script3 = 'table';
    // $script2 = 'products/script';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';
    $checkbox = 'create2';

    $imgPros = listImg();


    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}

function imgProCreate()
{
    $script = 'datetime';
    $title = 'Thêm mới floral';
    $view = 'viewProducts/index';
    $viewtable = 'imgs_products/create';
    $script = 'datetime';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';

    if (!empty($_POST)) {

        $data = [
            "name" => $_POST['floral_name'] ?? null,
        ];

        validatefloralCreate($data);

        insert('florals', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=florals');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

//validate floral-create
function validateImgProCreate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự, Không được trùng

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    } else if (!checkUniqueName('florals', $data['name'])) {
        $errors[] = 'Name đã được sử dụng';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=floral-create');
        exit();
    }
}