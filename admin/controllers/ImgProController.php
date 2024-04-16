<?php
function imgProListAll()
{

    $title = 'Danh sách ảnh SP';
    $view = 'viewProducts/index';
    $viewtable = "imgs_products/index";
    $script = 'datetime';
    $script3 = 'table';
    // $script2 = 'products/script';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';
    $checkbox = 'create2';

    $imgPros = listImg();


    require_once PATH_VIEW_ADMIN . 'layout/master.php';

}

function imgProCreate()
{
    $script = 'datetime';
    $title = 'Thêm mới ảnh';
    $view = 'viewProducts/index';
    $viewtable = 'imgs_products/create';
    $script = 'datetime';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';
    $script2 = 'create';
    $products = listAll('products');

    if (!empty($_POST)) {

        $data = [
            "product_id" => $_POST['img_pro'] ?? null,
        ];

        validateImgProCreate($data);

        $ImageUpload = $_FILES['ImageUpload'] ?? null;
        if (!empty($ImageUpload) && $ImageUpload['size'] > 0) {
            $data['img'] = upload_file($ImageUpload, 'uploads/products/');
        }

       

        insert('img_products', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=imgs');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

//validate floral-create
function validateImgProCreate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự, Không được trùng

    $errors = [];

    // if (empty($data['name'])) {
    //     $errors[] = 'Trường name là bắt buộc';
    // } else if (strlen($data['name']) > 50) {
    //     $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    // } else if (!checkUniqueName('florals', $data['name'])) {
    //     $errors[] = 'Name đã được sử dụng';
    // }

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
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=imgs_create');
        exit();
    }
}




function imgProUpadate($id)
{
    $script = 'datetime';
    $title = 'Thêm mới ảnh';
    $view = 'viewProducts/index';
    $viewtable = 'imgs_products/update';
    $script = 'datetime';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active3 = 'active';
    $script2 = 'create';
    $products = listAll('products');
    $imgs_pro = showOne('img_products',$id);
    

    if (!empty($_POST)) {

        $data = [
            "product_id" => $_POST['img_pro'] ?? null,
        ];

        validateImgProCreate($data);

        $ImageUpload = $_FILES['ImageUpload'] ?? null;
        if (!empty($ImageUpload) && $ImageUpload['size'] > 0) {
            $data['img'] = upload_file($ImageUpload, 'uploads/products/');
        }

       

        update('img_products',$id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=imgs');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

//validate floral-create
function validateImgProUpdate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự, Không được trùng

    $errors = [];

    // if (empty($data['name'])) {
    //     $errors[] = 'Trường name là bắt buộc';
    // } else if (strlen($data['name']) > 50) {
    //     $errors[] = 'Trường name độ dài tối đa 50 ký tự';
    // } else if (!checkUniqueName('florals', $data['name'])) {
    //     $errors[] = 'Name đã được sử dụng';
    // }

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
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=imgs_create');
        exit();
    }
}


function ImgProDelete($id)
{
    delete2('img_products', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=imgs');
    exit();
}