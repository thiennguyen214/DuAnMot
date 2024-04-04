<?php

function showLog()
{
    $view = "viewAll/login";
    $style = "styles/login";
    // $dataUser = getAllUser();
    // debug($dataUser);
    $tittle = 'Đăng nhập';
    if ($_POST) {
        authenCliLogin();
    }
    require_once PATH_VIEW . '/layouts/master.php';

}

function authenCliLogin()
{
    $user = getUserClientByEmailAndPassword($_POST['email'], $_POST['password']);

    if (empty($user)) {
        $_SESSION['error'] = 'Email hoặc password chưa đúng!';

        header('Location: ' . BASE_URL . '?act=log');
        exit();
    }

    $_SESSION['user'] = $user;

    header('Location: ' . BASE_URL);
    exit();
}

function authenCliLogout()
{
    if (!empty($_SESSION['user'])) {
        session_destroy();
    }

    header('Location: ' . BASE_URL);
    exit();
}