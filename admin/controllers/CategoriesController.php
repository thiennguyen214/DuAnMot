<?php

function categoryListAll() {

    $title = 'Danh sách Category';
    $view = 'categories/index';
    $script = 'datetime';
    // $script2 = 'categories/script';
    $style = 'datatable';
    $style2 = 'form';
    $active6 = 'active';

    $categories = listAll('type_pro');
    

    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
//Delete category
function categoryDelete($id)
{
    delete2('type_pro', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=categories');
    exit();
}

//Create Category
function categoryCreate()
{
    $script = 'datetime';
    $title = 'Thêm mới category';
    $view = 'categories/create';

    if (!empty($_POST)) {
        
        $data = [
            "name" => $_POST['category_name'] ?? null,
        ];

        validateCategoryCreate($data);
        
        insert('type_pro', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=categories');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

//validate Category-create
function validateCategoryCreate($data) {
    // name - bắt buộc, độ dài tối đa 50 ký tự, Không được trùng

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } 
    else if(strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    } 
    else if(! checkUniqueName('type_pro', $data['name'])) {
        $errors[] = 'Name đã được sử dụng';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=category-create');
        exit();
    }
}

//showone
function categoryShowOne($id)
{
    $category = showOne('type_pro', $id);

    if (empty ($category)) {
        e404();
    }

    $title = 'Chi tiết loại: ' . $category['name'];
    $view = 'categories/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function categoryUpdate($id)
{
    $category = showOne('type_pro', $id);

    if (empty ($category)) {
        e404();
    }

    $title = 'Cập nhật Category: ' . $category['name'];
    $view = 'categories/update';

    if (!empty ($_POST)) {
        $data = [
            "name" => $_POST['category_name'] ?? null,
        ];

        validateCategoryCreate($data);

        update('type_pro', $id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=categories');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}



