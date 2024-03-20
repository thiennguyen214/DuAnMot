<?php
function productListAll() {

    $title = 'Danh sách Category';
    $view = 'products/index';
    $script = 'datetime';
    // $script2 = 'products/script';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';

    $products = listAll('products');
    

    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}

function productCreate() {

    $title = 'Thêm mới sản phẩm';
    $view = 'products/create';
    // $style2 = 'form';
    $script = 'datetime';
    // $style = 'datatable';
    $script2 = 'create';
    $script3 = 'create2';
    $active3 = 'active';
    $brands = listAll('brands');
    $origins = listAll('origins');
    $categories =listAll('type_pro');


    if (!empty ($_POST)) {

        $data = [
            "name" => $_POST['name'] ?? null,
            "pro_db" => $_POST['pro_db'] ?? null,
            "pro_kho" => $_POST['pro_kho'] ?? null,
            "price" => $_POST['price'] ?? null,
            "price-sale" => $_POST['price-sale'] ?? null,
            "create-day" => $_POST['create-day'] ?? null,
            "update-day" => $_POST['update-day'] ?? null,
        ];

        validateProductCreate($data);

        $ImageUpload = $_FILES['ImageUpload'] ?? null;
        if (!empty ($ImageUpload) && $ImageUpload['size'] > 0) {
            $data['img'] = upload_file($ImageUpload, 'uploads/user/');
        }

        insert('products', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=products');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}

//validate
function validateProductCreate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự
    // email - bắt buộc, phải là email, không được trùng
    // password - bắt buộc, đồ dài nhỏ nhất là 8, lớn nhất là 20
    // type - bắt buộc, nó phải là 0 or 1

    $errors = [];

    if (empty ($data['name'])) {
        $errors[] = 'Trường name là bắt buộc';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    }

    if (empty ($data['pro_db'])) {
        $errors[] = 'Trường hàng đã bán là bắt buộc';
    } 

    if (empty ($data['pro_kho'])) {
        $errors[] = 'Trường hàng trong kho là bắt buộc';
    } 

    if (empty ($data['price'])) {
        $errors[] = 'Trường giá là bắt buộc';
    } 

    if (empty ($data['price_sale'])) {
        $errors[] = 'Trường giá sale là bắt buộc';
    } else if ($data['price_sale'] >= $data['price'] ) {
        $errors[] = 'Giá sale không được lớn hơn giá thường';

    }


    if ($data['create-day'] === null) {
        $errors[] = 'Trường ngày tạo là bắt buộc';
    }

    if ($data['update-day'] === null) {
        $errors[] = 'Trường ngày sửa là bắt buộc';
    }
    }

    if (!empty ($data['ImageUpload']) && $data['ImageUpload']['size'] > 0) {
        $typeImage = ['image/png', 'image/jpg', 'image/jpeg'];

        if ($data['ImageUpload']['size'] > 2 * 1024 * 1024) {
            $errors[] = 'Trường ImageUpload có dung lượng nhỏ hơn 2M';
        } else if (!in_array($data['ImageUpload']['type'], $typeImage)) {
            $errors[] = 'Trường ImageUpload chỉ chấp nhận định dạng file: png, jpg, jpeg';
        }
    }

    if (!empty ($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=user-create');
        exit();
    }

