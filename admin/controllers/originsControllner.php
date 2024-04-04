<?php

function originListAll()
{

    $title = 'Danh sách origin';
    $view = 'viewProducts/index';
    $viewtable = 'origins/index';
    $script = 'datetime';
    // $script2 = 'origins/script';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';
    $checkbox = 'create2';

    $origins = listAll('origins');


    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
//Delete origin
function originDelete($id)
{
    DeleteTheoImgProID('img_products',$id);
    DeleteTheoOriginID('products',$id);
    delete2('origins', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=origins');
    exit();
}

//Create origin
function originCreate()
{
    $script = 'datetime';
    $title = 'Thêm mới origin';
    $view = 'viewProducts/index';
    $viewtable = 'origins/create';
    $script = 'datetime';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';

    if (!empty($_POST)) {

        $data = [
            "name" => $_POST['origin_name'] ?? null,
        ];

        validateoriginCreate($data);

        insert('origins', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=origins');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

//validate origin-create
function validateoriginCreate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự, Không được trùng

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    } else if (!checkUniqueName('origins', $data['name'])) {
        $errors[] = 'Name đã được sử dụng';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=origin-create');
        exit();
    }
}

//showone
function originShowOne($id)
{
    $origin = showOne('origins', $id);

    if (empty($origin)) {
        e404();
    }

    $title = 'Chi tiết loại: ' . $origin['name'];
    $view = 'origins/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function originUpdate($id)
{
    $origin = showOne('origins', $id);

    if (empty($origin)) {
        e404();
    }

    $title = 'Cập nhật origin: ' . $origin['name'];
    $view = 'viewProducts/index';
    $viewtable = 'origins/update';


    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['origin_name'] ?? $origin['name'],
        ];

        validateoriginCreate($data);

        update('origins', $id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=origins');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}



