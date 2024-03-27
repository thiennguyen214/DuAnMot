<?php

function floralListAll()
{

    $title = 'Danh sách floral';
    $view = 'viewProducts/index';
    $viewtable = 'florals/index';
    $script = 'datetime';
    // $script2 = 'florals/script';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';
    $checkbox = 'create2';

    $florals = listAll('florals');


    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
//Delete floral
function floralDelete($id)
{
    delete2('florals', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=florals');
    exit();
}

//Create floral
function floralCreate()
{
    $script = 'datetime';
    $title = 'Thêm mới floral';
    $view = 'viewProducts/index';
    $viewtable = 'florals/create';
    $script = 'datetime';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';
    $script2 = 'create';

    if (!empty($_POST)) {

        $data = [
            "name" => $_POST['floral_name'] ?? null,
            "img" => get_file_upload('ImageUpload'),
        ];


        insert('florals', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=florals');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

//validate floral-create
function validatefloralCreate($data)
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

//showone
function floralShowOne($id)
{
    $floral = showOne('florals', $id);

    if (empty($floral)) {
        e404();
    }

    $title = 'Chi tiết loại: ' . $floral['name'];
    $view = 'florals/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function floralUpdate($id)
{
    $floral = showOne('florals', $id);

    if (empty($floral)) {
        e404();
    }

    $title = 'Cập nhật floral: ' . $floral['name'];
    $view = 'viewProducts/index';
    $viewtable = 'florals/update';


    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['floral_name'] ?? $floral['name'],
        ];

        validatefloralCreate($data);

        update('florals', $id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=florals');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}



