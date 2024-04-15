<?php

function showLog()
{
    $view = "viewAll/login";
    $style = "styles/login";
    // $dataUser = getAllUser();
    // debug($dataUser);
    $tittle = 'Đăng nhập';
    $fnames = charter();
    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
    }
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

    $_SESSION['userm'] = $user;

    header('Location: ' . BASE_URL);
    exit();
}

function authenCliLogout()
{
    if (!empty($_SESSION['userm'])) {
        session_destroy();
    }

    header('Location: ' . BASE_URL);
    exit();
}