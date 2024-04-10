<?php
//Khai báo các biến môi trường dùng Global
define('PATH_CONTROLLER', __DIR__ . '/../controllers/');
define('PATH_MODEL', __DIR__ . '/../models/');
define('PATH_VIEW', __DIR__ . '/../views/');


define('PATH_CONTROLLER_ADMIN', __DIR__ . '/../admin/controllers/');
define('PATH_MODEL_ADMIN', __DIR__ . '/../admin/models/');
define('PATH_VIEW_ADMIN', __DIR__ . '/../admin/views/');
define('PATH_VIEW_USER', __DIR__ . '/../views/layouts');

define('PATH_UPLOAD', __DIR__ . '/../');

define('BASE_URL', 'http://localhost/DuAnMot/');
define('BASE_URLS', 'https://');
define('BASE_URL_ADMIN', 'http://localhost/DuAnMot/admin/');
// echo PATH_CONTROLLER;
// die;
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'oneperfume');

define('STATUS_DRAFT', 'draft');
define('STATUS_PUBLISHED', 'published');

define('STATUS_DELIVERY_WFC', 1);     // WAITING FOR CONFIRMATION - chờ xác nhận
define('STATUS_DELIVERY_WFP', 2);     // WAITING FOR PICKUP - chờ lấy hàng
define('STATUS_DELIVERY_WFD', 3);     // WAITING FOR DELIVERY - chờ giao hàng
define('STATUS_DELIVERY_ED', 4);     // DELIVERED - đã giao
define('STATUS_DELIVERY_CED', 0);    // CANCELED - đã hủy

define('STATUS_PAYMENT_UNPAID', 0);     // chưa thanh toán
define('STATUS_PAYMENT_PAID', 1);     // đã thanh toán
define('STATUS_PAYMENT_CANCELED', -1);