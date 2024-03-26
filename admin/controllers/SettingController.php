<?php

function settingListAll()
{
    $title = 'Danh sách Setting';
    $view = 'settings/index';
    $script = 'datetime';
    $style = 'datatable';
    // $style2 = 'form';
    $script3 = 'table';
    $active6 = 'active';
    $checkbox = 'create2';

    $settings = listAll('settings');

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function settingShowOne($id)
{
    $setting = showOne('settings', $id);

    if (empty($setting)) {
        e404();
    }

    $title = 'Chi tiết setting: ' . $setting['name'];
    $view = 'settings/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function settingCreate()
{
    $title = 'Thêm mới Setting';
    $view = 'settings/create';
    $script = 'datetime';
    $active6 = 'active';



    if (!empty($_POST)) {

        $data = [
            "key" => $_POST['key'] ?? null,
            "value" => $_POST['value'] ?? null,
        ];

        validatesettingCreate($data);
        insert('settings', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=settings');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function validatesettingCreate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự
    // email - bắt buộc, phải là email, không được trùng
    // password - bắt buộc, đồ dài nhỏ nhất là 8, lớn nhất là 20
    // type - bắt buộc, nó phải là 0 or 1

    $errors = [];

    if (empty($data['key'])) {
        $errors[] = 'Trường key là bắt buộc';
    } else if (strlen($data['key']) > 50) {
        $errors[] = 'Trường key độ dài tối đa 50 ký tự';
    }
    if (empty($data['value'])) {
        $errors[] = 'Trường value là bắt buộc';
    }
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=setting-create');
        exit();
    }
}

function settingUpdate($id)
{
    $setting = showOne('settings', $id);

    if (empty($setting)) {
        e404();
    }

    $title = 'Cập nhật setting: ' . $setting['key'];
    $view = 'settings/update';
    $script = 'datetime';
    $active6 = 'active';

    if (!empty($_POST)) {
        $data = [
            "key" => $_POST['key'] ?? $setting['key'],
            "value" => $_POST['value'] ?? $setting['value'],
        ];
        update('settings', $id, $data);
        validatesettingUpdate($id, $data);
        // $_SESSION['success'] = 'Thao tác thành công!';
        header('Location: ' . BASE_URL_ADMIN . '?act=settings');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function validatesettingUpdate($id, $data)
{
    $errors = [];

    if (empty($data['key'])) {
        $errors[] = 'Trường key là bắt buộc';
    } else if (strlen($data['key']) > 50) {
        $errors[] = 'Trường key độ dài tối đa 50 ký tự';
    }
    if (empty($data['value'])) {
        $errors[] = 'Trường value là bắt buộc';
    }
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;

        header('Location: ' . BASE_URL_ADMIN . '?act=setting-update&id=' . $id);
        exit();
    }

}

function settingDelete($id)
{
    delete2('settings', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=settings');
    exit();
}