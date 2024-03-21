<?php

function floralListAll()
{

    $title = 'Danh sách floral';
    $view = 'viewProducts/index';
    $viewtable = 'type_pros/index';
    $script = 'datetime';
    // $script2 = 'florals/script';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';

    $florals = listAll('type_pro');


    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
//Delete floral
function floralDelete($id)
{
    delete2('type_pro', $id);

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
    $viewtable = 'type_pros/create';
    $script = 'datetime';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';

    if (!empty ($_POST)) {

        $data = [
            "name" => $_POST['floral_name'] ?? null,
        ];

        validatefloralCreate($data);

        insert('type_pro', $data);

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

    if (empty ($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    } else if (!checkUniqueName('type_pro', $data['name'])) {
        $errors[] = 'Name đã được sử dụng';
    }

    if (!empty ($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=floral-create');
        exit();
    }
}

//showone
function floralShowOne($id)
{
    $floral = showOne('type_pro', $id);

    if (empty ($floral)) {
        e404();
    }

    $title = 'Chi tiết loại: ' . $floral['name'];
    $view = 'florals/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function floralUpdate($id)
{
    $floral = showOne('type_pro', $id);

    if (empty ($floral)) {
        e404();
    }

    $title = 'Cập nhật floral: ' . $floral['name'];
    $view = 'viewProducts/index';
    $viewtable = 'type_pros/update';


    if (!empty ($_POST)) {
        $data = [
            "name" => $_POST['floral_name'] ?? null,
        ];

        validatefloralCreate($data);

        update('type_pro', $id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=florals');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}



