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
        $ImageUpload = $_FILES['ImageUpload'] ?? null;

        // Kiểm tra xem có tệp tin được tải lên hay không
        if (!empty($ImageUpload) && $ImageUpload['size'] > 0) {
            // Nếu có, thực hiện việc tải lên và cập nhật dữ liệu
            $data['img'] = upload_file($ImageUpload, 'uploads/brands/');
        }

        update('brands', $id, $data);
        // Kiểm tra điều kiện để xóa tệp tin cũ (nếu cần)
        if (
            !empty($ImageUpload) && // Có tệp tin được tải lên
            !empty($brand['img']) && // Có giá trị hình ảnh cũ
            !empty($data['img']) && // Tệp tin mới được tải lên thành công
            file_exists(PATH_UPLOAD . $brand['img']) // Tệp tin cũ tồn tại trên hệ thống
        ) {
            unlink(PATH_UPLOAD .$brand['img']);
        }

        update('brands', $id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=brands');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}




function validateBrandUpdate($id, $data)
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

        header('Location: ' . BASE_URL_ADMIN . '?act=brands' . $id);
        exit();
    }

}









