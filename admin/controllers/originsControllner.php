<?php

function originListAll()
{

    $title = 'Danh sách origin';
    $view = 'viewProducts/index';
    $viewtable = 'type_pros/index';
    $script = 'datetime';
    // $script2 = 'origins/script';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';

    $origins = listAll('type_pro');


    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
//Delete origin
function originDelete($id)
{
    delete2('type_pro', $id);

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
    $viewtable = 'type_pros/create';
    $script = 'datetime';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';

    if (!empty ($_POST)) {

        $data = [
            "name" => $_POST['origin_name'] ?? null,
        ];

        validateoriginCreate($data);

        insert('type_pro', $data);

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

        header('Location: ' . BASE_URL_ADMIN . '?act=origin-create');
        exit();
    }
}

//showone
function originShowOne($id)
{
    $origin = showOne('type_pro', $id);

    if (empty ($origin)) {
        e404();
    }

    $title = 'Chi tiết loại: ' . $origin['name'];
    $view = 'origins/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function originUpdate($id)
{
    $origin = showOne('type_pro', $id);

    if (empty ($origin)) {
        e404();
    }

    $title = 'Cập nhật origin: ' . $origin['name'];
    $view = 'viewProducts/index';
    $viewtable = 'type_pros/update';


    if (!empty ($_POST)) {
        $data = [
            "name" => $_POST['origin_name'] ?? null,
        ];

        validateoriginCreate($data);

        update('type_pro', $id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=origins');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}



