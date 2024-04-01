<?php

function brandListAll()
{

    $title = 'Danh sách brand';
    $view = 'viewProducts/index';
    $viewtable = 'brands/index';
    $script = 'datetime';
    // $script2 = 'brands/script';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';
    $checkbox = 'create2';

    $brands = listAll('brands');


    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}
//Delete brand
function brandDelete($id)
{
    delete2('brands', $id);

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
    $viewtable = 'brands/create';
    $script = 'datetime';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';
    $script2 = 'create';

    if (!empty($_POST)) {

        $data = [
            "name" => $_POST['brand_name'] ?? null,
            'logo' => get_file_upload('ImageUploadLogo'),
            'img' => get_file_upload('ImageUpload'),
        ];

        // validatebrandCreate($data);
        $logo = $data['logo'];
        if (is_array($logo)) {
            $data['logo'] = upload_file($logo, 'uploads/brands/');
        }

        $img = $data['img'];
        if (is_array($img)) {
            $data['img'] = upload_file($img, 'uploads/brands/');
        }


        insert('brands', $data);

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

    if (empty($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    } else if (!checkUniqueName('brands', $data['name'])) {
        $errors[] = 'Name đã được sử dụng';
    }
    if (empty($data['logo'])) {
        $errors[] = 'Trường logo là bắt buộc';
    } elseif (is_array($data['logo'])) {
        $typeImage = ['image/png', 'image/jpg', 'image/jpeg'];

        if ($data['logo']['size'] > 2 * 1024 * 1024) {
            $errors[] = 'Trường logo có dung lượng nhỏ hơn 2M';
        } else if (!in_array($data['logo']['type'], $typeImage)) {
            $errors[] = 'Trường img_thumnail chỉ chấp nhận định dạng file: png, jpg, jpeg';
        }
    }
    if (empty($data['img'])) {
        $errors[] = 'Trường img là bắt buộc';
    } elseif (is_array($data['img'])) {
        $typeImage = ['image/png', 'image/jpg', 'image/jpeg'];

        if ($data['img']['size'] > 2 * 1024 * 1024) {
            $errors[] = 'Trường img có dung lượng nhỏ hơn 2M';
        } else if (!in_array($data['img']['type'], $typeImage)) {
            $errors[] = 'Trường img_thumnail chỉ chấp nhận định dạng file: png, jpg, jpeg';
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=brand-create');
        exit();
    }
}

//showone
function brandShowOne($id)
{
    $brand = showOne('brands', $id);

    if (empty($brand)) {
        e404();
    }

    $title = 'Chi tiết loại: ' . $brand['name'];
    $view = 'brands/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function brandUpdate($id)
{
    $brand = showOne('brands', $id);

    if (empty($brand)) {
        e404();
    }

    $title = 'Cập nhật brand: ' . $brand['name'];
    $view = 'viewProducts/index';
    $viewtable = 'brands/update';


    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['brand_name'] ?? $brand['name'],
        ];

        validatebrandCreate($data);

        update('brands', $id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=brands');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}



