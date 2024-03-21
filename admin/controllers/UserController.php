<?php

function userListAll()
{
    $title = 'Danh sách User';
    $view = 'users/index';
    $script = 'datetime';
    $style = 'datatable';
    // $style2 = 'form';
    $script3 = 'table';
    $active2 = 'active';

    $users = listAll('users');


    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function userShowOne($id)
{
    $user = showOne('users', $id);

    if (empty ($user)) {
        e404();
    }

    $title = 'Chi tiết User: ' . $user['name'];
    $view = 'users/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function userCreate()
{
    $title = 'Thêm mới User';
    $view = 'users/create';
    $style2 = 'form';
    $script = 'datetime';
    // $style = 'datatable';
    $script2 = 'create';
    $script3 = 'create2';
    $active2 = 'active';



    if (!empty ($_POST)) {

        $data = [
            "name" => $_POST['name'] ?? null,
            "email" => $_POST['email'] ?? null,
            "pass" => $_POST['pass'] ?? null,
            "tell" => $_POST['tell'] ?? null,
            "address" => $_POST['address'] ?? null,
            "role" => $_POST['role'] ?? null,
        ];

        validateUserCreate($data);

        $ImageUpload = $_FILES['ImageUpload'] ?? null;
        if (!empty ($ImageUpload) && $ImageUpload['size'] > 0) {
            $data['img'] = upload_file($ImageUpload, 'uploads/user/');
        }

        insert('users', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=users');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function validateUserCreate($data)
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

    if (empty ($data['email'])) {
        $errors[] = 'Trường email là bắt buộc';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Trường email không đúng định dạng';
    } else if (!checkUniqueEmail('users', $data['email'])) {
        $errors[] = 'Email đã được sử dụng';
    }

    if (empty ($data['pass'])) {
        $errors[] = 'Trường password là bắt buộc';
    } else if (strlen($data['pass']) < 8 || strlen($data['pass']) > 20) {
        $errors[] = 'Trường password đồ dài nhỏ nhất là 8, lớn nhất là 20';
    }


    if ($data['role'] === null) {
        $errors[] = 'Trường type là bắt buộc';
    } else if (!in_array($data['role'], [0, 1])) {
        $errors[] = 'Trường role phải là 0 or 1';
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

function userUpdate($id)
{
    $user = showOne('users', $id);

    if (empty ($user)) {
        e404();
    }

    $title = 'Cập nhật User: ' . $user['name'];
    $view = 'users/update';
    $style2 = 'form';
    $script = 'datetime';
    $style = 'datatable';
    $script2 = 'create';
    $script3 = 'create2';
    $active2 = 'active';

    if (!empty ($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
            "email" => $_POST['email'] ?? null,
            "pass" => $_POST['pass'] ?? null,
            "tell" => $_POST['tell'] ?? null,
            "address" => $_POST['address'] ?? null,
            "role" => $_POST['role'] ?? null,
        ];

        validateUserUpdate($id, $data);
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
            !empty ($user['img']) && // Có giá trị hình ảnh cũ
            !empty ($data['img']) && // Tệp tin mới được tải lên thành công
            file_exists(PATH_UPLOAD . $user['img']) // Tệp tin cũ tồn tại trên hệ thống
        ) {
            unlink(PATH_UPLOAD . $user['img']);
        }


        // $_SESSION['success'] = 'Thao tác thành công!';
        header('Location: ' . BASE_URL_ADMIN . '?act=users');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function validateUserUpdate($id, $data)
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

    if (empty ($data['email'])) {
        $errors[] = 'Trường email là bắt buộc';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Trường email không đúng định dạng';
    } else if (!checkUniqueEmailForUpdate('users', $id, $data['email'])) {
        $errors[] = 'Email đã được sử dụng';
    }

    if (empty ($data['pass'])) {
        $errors[] = 'Trường password là bắt buộc';
    } else if (strlen($data['pass']) < 8 || strlen($data['pass']) > 20) {
        $errors[] = 'Trường password đồ dài nhỏ nhất là 8, lớn nhất là 20';
    }
    if ($data['role'] === null) {
        $errors[] = 'Trường type là bắt buộc';
    } else if (!in_array($data['role'], [0, 1])) {
        $errors[] = 'Trường type phải là 0 or 1';
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

function userDelete($id)
{
    delete2('users', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=users');
    exit();
}