<?php

function brandListAll()
{

    $title = 'Danh sách brand';
    $view = 'viewProducts/index';
    $viewtable = 'type_pros/index';
    $script = 'datetime';
    // $script2 = 'brands/script';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';

    $brands = listAll('type_pro');


    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
//Delete brand
function brandDelete($id)
{
    delete2('type_pro', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=brands');
    exit();
}

//Create brand
function brandCreate()
{
    $script = 'datetime';
    $title = 'Thêm mới brand';
    $view = 'viewProducts/index';
    $viewtable = 'type_pros/create';
    $script = 'datetime';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';

    if (!empty ($_POST)) {

        $data = [
            "name" => $_POST['brand_name'] ?? null,
        ];

        validatebrandCreate($data);

        insert('type_pro', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=brands');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

//validate brand-create
function validatebrandCreate($data)
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

        header('Location: ' . BASE_URL_ADMIN . '?act=brand-create');
        exit();
    }
}

//showone
function brandShowOne($id)
{
    $brand = showOne('type_pro', $id);

    if (empty ($brand)) {
        e404();
    }

    $title = 'Chi tiết loại: ' . $brand['name'];
    $view = 'brands/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function brandUpdate($id)
{
    $brand = showOne('type_pro', $id);

    if (empty ($brand)) {
        e404();
    }

    $title = 'Cập nhật brand: ' . $brand['name'];
    $view = 'viewProducts/index';
    $viewtable = 'type_pros/update';


    if (!empty ($_POST)) {
        $data = [
            "name" => $_POST['brand_name'] ?? null,
        ];

        validatebrandCreate($data);

        update('type_pro', $id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=brands');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}



