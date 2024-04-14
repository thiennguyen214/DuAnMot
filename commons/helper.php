<?php

// Khai báo các hàm dùng Global
if (!function_exists('require_file')) {
    function require_file($pathFolder)
    {
        $files = array_diff(scandir($pathFolder), ['.', '..']);

        foreach ($files as $file) {
            require_once $pathFolder . $file;
        }
    }
}

if (!function_exists('debug')) {
    function debug($data)
    {
        echo "<pre>";

        print_r($data);

        die;
    }
}

if (!function_exists('e404')) {
    function e404()
    {
        echo "404 - Not found";
        die;
    }
}


if (!function_exists('upload_file')) {
    function upload_file($file, $pathFolderUpload)
    {
        $imagePath = $pathFolderUpload . time() . '-' . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], PATH_UPLOAD . $imagePath)) {
            return $imagePath;
        }

        return null;
    }
}


if (!function_exists('get_file_upload')) {
    function get_file_upload($field, $default = null)
    {

        if (isset($_FILES[$field]) && $_FILES[$field]['size'] > 0) {

            return $_FILES[$field];
        }

        return $default ?? null;
    }
}

if (!function_exists('middleware_auth_check')) {
    function middleware_auth_check($act)
    {
        if ($act == 'login') {
            if (!empty($_SESSION['user'])) {
                header('Location: ' . BASE_URL_ADMIN);
                exit();
            }
        } elseif (empty($_SESSION['user'])) {
            header('Location: ' . BASE_URL_ADMIN . '?act=login');
            exit();
        }
    }
}

if (!function_exists('middleware_auth_check_cl')) {
    function middleware_auth_check_cl($act, $arrRouteNeedAuth)
    {
        if ($act == 'log') {
            if (!empty($_SESSION['userm'])) {
                header('Location: ' . BASE_URL);
                exit();
            }
        } elseif (empty($_SESSION['userm']) && in_array($act, $arrRouteNeedAuth)) {
            header('Location: ' . BASE_URL . '?act=log');
            exit();
        }
    }
}
if (!function_exists('caculator_total_order')) {
    function caculator_total_order($flag = true)
    {
        if (isset($_SESSION['cart'])) {
            $total = 0;
            foreach ($_SESSION['cart'] as $item) {
                $price = $item['p_price_sale'];

                $total += $price * $item['quantity'];
            }

            return $flag ? number_format($total) : $total;
        }

        return 0;
    }
}