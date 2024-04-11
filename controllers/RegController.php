<?php

function showReg()
{
    $view = "viewAll/register";
    $style = "styles/login";
    // $dataUser = getAllUser();
    // debug($dataUser);
    $tittle = 'Đăng ký';
    if ($_POST) {
        authenCliRegister();
    }
    require_once PATH_VIEW . '/layouts/master.php';

}
function authenCliRegister()
{
    $data = [
        "name" => $_POST['name'] ?? null,
        "email" => $_POST['email'] ?? null,
        "pass" => $_POST['pass'] ?? null,
        "tell" => $_POST['tell'] ?? null,
        "role" => 0,
    ];
    validateUserCreate($data);
    insert('users', $data);

    $user = getUserClientByEmailAndPassword($_POST['email'], $_POST['pass']);

    if (empty($user)) {
        $_SESSION['error'] = 'Email hoặc password chưa đúng!';

        header('Location: ' . BASE_URL . '?act=log');
        exit();
    }

    $_SESSION['userm'] = $user;

    header('Location: ' . BASE_URL);
    exit();
}
function validateUserCreate($data)
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

    if (empty($data['email'])) {
        $errors[] = 'Trường email là bắt buộc';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Trường email không đúng định dạng';
    } else if (!checkUniqueEmail('users', $data['email'])) {
        $errors[] = 'Email đã được sử dụng';
    }

    if (empty($data['pass'])) {
        $errors[] = 'Trường password là bắt buộc';
    } else if (strlen($data['pass']) < 8 || strlen($data['pass']) > 20) {
        $errors[] = 'Trường password đồ dài nhỏ nhất là 8, lớn nhất là 20';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL . '?act=reg');
        exit();
    }
}
if (!function_exists('checkUniqueEmail')) {
    // Nếu không trùng thì trả về True
    // Nếu trùng thì trả về False
    function checkUniqueEmail($tableName, $email)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE email = :email LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}