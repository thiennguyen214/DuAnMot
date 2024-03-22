<?php
function viewProductListAll()
{

    $title = 'Danh sách sản phẩm';
    $view = 'viewProducts/index';
    $viewtable = "products/index";
    $script = 'datetime';
    $script3 = 'table';
    // $script2 = 'products/script';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';

    $products = listAll('products');
    $count = count($products);


    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}

function productListAll()
{

    $title = 'Danh sách Category';
    $view = 'viewProducts/index';
    $viewtable = 'products/index';
    $products = listAll('products');
    $view = 'viewProducts/products/index';


    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}

function productCreate()
{

    $title = 'Thêm mới sản phẩm';
    $view = 'viewProducts/index';
    $viewtable = "products/create";
    $active3 = 'active';
    $script = 'datetime';
    $style2 = 'form';
    $brands = listAll('brands');
    $origins = listAll('origins');
    $categories = listAll('type_pro');
    $script2 = 'create';


    if (!empty ($_POST)) {

        $data = [
            "name" => $_POST['name'] ?? null,
            "price" => $_POST['price'] ?? null,
            "price_sale" => $_POST['price-sale'] ?? null,
            "brand_id" => $_POST['brand'] ?? null,
            "mota" => $_POST['mota'] ?? null,
            "so_luong_ban" => $_POST['pro_db'] ?? null,
            "so_luong_kho" => $_POST['pro_kho'] ?? null,
            "type_id" => $_POST['category'] ?? null,
            "origin_id" => $_POST['origin'] ?? null,


        ];

        validateProductCreate($data);

        $ImageUpload = $_FILES['ImageUpload'] ?? null;
        if (!empty ($ImageUpload) && $ImageUpload['size'] > 0) {
            $data['img'] = upload_file($ImageUpload, 'uploads/products/');
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

    if (empty ($data['so_luong_ban'])) {
        $errors[] = 'Trường hàng đã bán là bắt buộc';
    }

    if (empty ($data['so_luong_kho'])) {
        $errors[] = 'Trường hàng trong kho là bắt buộc';
    }

    if (empty ($data['price'])) {
        $errors[] = 'Trường giá là bắt buộc';
    }

    if (empty ($data['price_sale'])) {
        $errors[] = 'Trường giá sale là bắt buộc';
    } else if ($data['price_sale'] >= $data['price']) {
        $errors[] = 'Giá sale không được lớn hơn giá thường';

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
}

//Product Delete
function productDelete($id)
{
    delete2('products', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=products');
    exit();
}

//update

function productUpdate($id)
{
    $products = showOne('products', $id);

    if (empty ($products)) {
        e404();
    }

    $title = 'Cập nhật Sản phẩm: ' . $products['name'];
    $view = 'viewProducts/products/index';
    $style2 = 'form';
    $script = 'datetime';
    $style = 'datatable';
    $script2 = 'create';
    $script3 = 'create2';
    $active2 = 'active';

    if (!empty ($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
            "price" => $_POST['price'] ?? null,
            "price_sale" => $_POST['price-sale'] ?? null,
            "brand_id" => $_POST['brand'] ?? null,
            "mota" => $_POST['mota'] ?? null,
            "so_luong_ban" => $_POST['pro_db'] ?? null,
            "so_luong_kho" => $_POST['pro_kho'] ?? null,
            "created" => $_POST['create-day'] ?? null,
            "type_id" => $_POST['category'] ?? null,
            "origin_id" => $_POST['origin'] ?? null,
        ];

        validateProductUpdate($id, $data);
        $ImageUpload = $_FILES['ImageUpload'] ?? null;

        // Kiểm tra xem có tệp tin được tải lên hay không
        if (!empty ($ImageUpload) && $ImageUpload['size'] > 0) {
            // Nếu có, thực hiện việc tải lên và cập nhật dữ liệu
            $data['img'] = upload_file($ImageUpload, 'uploads/user/');
        }

        update('users', $id, $data);
        // Kiểm tra điều kiện để xóa tệp tin cũ (nếu cần)
        if (
            !empty ($ImageUpload) && // Có tệp tin được tải lên
            !empty ($products['img']) && // Có giá trị hình ảnh cũ
            !empty ($data['img']) && // Tệp tin mới được tải lên thành công
            file_exists(PATH_UPLOAD . $products['img']) // Tệp tin cũ tồn tại trên hệ thống
        ) {
            unlink(PATH_UPLOAD . $products['img']);
        }


        // $_SESSION['success'] = 'Thao tác thành công!';
        header('Location: ' . BASE_URL_ADMIN . '?act=products');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

//validate updateuser
function validateProductUpdate($id, $data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự
    // email - bắt buộc, phải là email, không được trùng
    // password - bắt buộc, đồ dài nhỏ nhất là 8, lớn nhất là 20
    // type - bắt buộc, nó phải là 0 or 1

    $errors = [];

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
    } else if ($data['price_sale'] >= $data['price']) {
        $errors[] = 'Giá sale không được lớn hơn giá thường';

    }


    if ($data['created'] === null) {
        $errors[] = 'Trường ngày tạo là bắt buộc';
    }

    if ($data['updeatd'] === null) {
        $errors[] = 'Trường ngày sửa là bắt buộc';
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

        header('Location: ' . BASE_URL_ADMIN . '?act=user-update&id=' . $id);
        exit();
    }

}

