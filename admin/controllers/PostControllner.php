<?php
function postListAll()
{
    $title = 'Danh sách tin tức';
    $view = 'viewProducts/index';
    $viewtable = 'posts/index';
    $script = 'datetime';
    $script3 = 'table';
    $style = 'datatable';
    $style2 = 'form';
    $active7 = 'active7';
    $checkbox = 'create2';

    $posts = listAll('posts');
    $count = count($posts);


    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}




function postCreate()
{
    $title = 'Thêm mới bài viết';
    $view = 'viewProducts/index';
    $viewtable = "posts/create";
    $active7 = 'active';
    $script = 'datetime';
    $style2 = 'form';
    $script2 = 'create';


    if (!empty($_POST)) {

        $data = [
            "title" => $_POST['name'] ?? null,
            "subtitle" => $_POST['subname'] ?? null,
            "content" => $_POST['content'] ?? null,
        
        ];

        validatePostCreate($data);

        $ImageUpload = $_FILES['ImageUpload'] ?? null;
        if (!empty($ImageUpload) && $ImageUpload['size'] > 0) {
            $data['img'] = upload_file($ImageUpload, 'uploads/products/');
        }

        insert('posts', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=posts');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}





function validatePostCreate($data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự
    // email - bắt buộc, phải là email, không được trùng
    // password - bắt buộc, đồ dài nhỏ nhất là 8, lớn nhất là 20
    // type - bắt buộc, nó phải là 0 or 1

    $errors = [];

    if (empty($data['title'])) {
        $errors[] = 'Trường title là bắt buộc';
    } else if (strlen($data['title']) > 50) {
        $errors[] = 'Trường title độ dài tối đa 50 ký tự';
    }

    if (empty($data['subtitle'])) {
        $errors[] = 'Trường subtitle là bắt buộc';
    }

    if (empty($data['content'])) {
        $errors[] = 'Trường content là bắt buộc';
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
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=post-create');
        exit();
    }
}



function postDelete($id)
{
    delete2('posts', $id);

    $_SESSION['success'] = 'Thao tác thành công!';

    header('Location: ' . BASE_URL_ADMIN . '?act=posts');
    exit();
}




function postUpdate($id)
{

    $posts = showOne('posts', $id);


    if (empty($posts)) {
        e404();
    }

    $title = 'Cập nhật bài viết: ' . $posts['title'];
    $view = 'viewProducts/index';
    $viewtable = "posts/update";
    $style2 = 'form';
    $script = 'datetime';
    $style = 'datatable';
    $script2 = 'create';
    $script3 = 'create2';
    $active7 = 'active';

    if (!empty($_POST)) {
        $data = [
            "title" => $_POST['name'] ?? $posts['title'],
            "subtitle" => $_POST['subname'] ?? $posts['subtitle'],
            "content" => $_POST['content'] ?? $posts['content'],
        ];

        validatePostUpdate($id, $data);
        $ImageUpload = $_FILES['ImageUpload'] ?? null;

        // Kiểm tra xem có tệp tin được tải lên hay không
        if (!empty($ImageUpload) && $ImageUpload['size'] > 0) {
            // Nếu có, thực hiện việc tải lên và cập nhật dữ liệu
            $data['img'] = upload_file($ImageUpload, 'uploads/user/');
        }

        update('posts', $id, $data);
        // Kiểm tra điều kiện để xóa tệp tin cũ (nếu cần)
        if (
            !empty($ImageUpload) && // Có tệp tin được tải lên
            !empty($posts['img']) && // Có giá trị hình ảnh cũ
            !empty($data['img']) && // Tệp tin mới được tải lên thành công
            file_exists(PATH_UPLOAD . $posts['img']) // Tệp tin cũ tồn tại trên hệ thống
        ) {
            unlink(PATH_UPLOAD . $posts['img']);
        }


        // $_SESSION['success'] = 'Thao tác thành công!';
        header('Location: ' . BASE_URL_ADMIN . '?act=posts');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}




function validatePostUpdate($id, $data)
{
    // name - bắt buộc, độ dài tối đa 50 ký tự
    // email - bắt buộc, phải là email, không được trùng
    // password - bắt buộc, đồ dài nhỏ nhất là 8, lớn nhất là 20
    // type - bắt buộc, nó phải là 0 or 1


    $errors = [];

    if (empty($data['title'])) {
        $errors[] = 'Trường title là bắt buộc';
    } else if (strlen($data['title']) > 50) {
        $errors[] = 'Trường title độ dài tối đa 50 ký tự';
    }

    if (empty($data['subtitle'])) {
        $errors[] = 'Trường subtitle là bắt buộc';
    }

    if (empty($data['content'])) {
        $errors[] = 'Trường content là bắt buộc';
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

        header('Location: ' . BASE_URL_ADMIN . '?act=post-update&id=' . $id);
        exit();
    }

}



function postShow($id)
{
    $posts = showOne('posts', $id);


    if (empty($posts)) {
        e404();
    }

    $title = 'show bài viết: ' . $posts['title'];
    $view = 'viewProducts/index';
    $viewtable = "posts/update";
    $style2 = 'form';
    $script = 'datetime';
    $style = 'datatable';
    $script2 = 'create';
    $script3 = 'create2';
    $active7 = 'active';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}