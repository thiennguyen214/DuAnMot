<?php
session_start();

// Require file trong commons
require_once '../commons/env.php';
require_once '../commons/helper.php';
require_once '../commons/connect_db.php';
require_once '../commons/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

//Điều hướng
$act = $_GET['act'] ?? '/';

// Kiểm tra xem user đã đăng nhập chưa
middleware_auth_check($act);

match ($act) {
    '/' => userListAll(),

    // CRUD User 
    'users' => userListAll(),
    'user-detail' => userShowOne($_GET['id']),
    'user-create' => userCreate(),
    'user-update' => userUpdate($_GET['id']),
    'user-delete' => userDelete($_GET['id']),

    'overview' => overListAll(),


    'settings' => settingListAll(),
    'setting-create' => settingCreate(),
    'setting-update' => settingUpdate($_GET['id']),
    'setting-delete' => settingDelete($_GET['id']),

    'viewProducts' => viewProductListAll(),

    // CRUD brands
    'brands' => brandListAll(),
    //     'brand-detail' => brandShowOne($_GET['id']),
    'brand-update' => brandUpdate($_GET['id']),
    'brands-create' => brandCreate(),
    'brand-delete' => brandDelete($_GET['id']),


    // CRUD origins
    'origins' => originListAll(),
    //     'origin-detail' => originShowOne($_GET['id']),
    'origin-update' => originUpdate($_GET['id']),
    'origin-create' => originCreate(),
    'origin-delete' => originDelete($_GET['id']),


    // CRUD florals
    'florals' => floralListAll(),
    //     'floral-detail' => floralShowOne($_GET['id']),
    'floral-update' => floralUpdate($_GET['id']),
    'floral-create' => floralCreate(),
    'floral-delete' => floralDelete($_GET['id']),


    //  / CRUD Category
    'categories' => categoryListAll(),
    //     'category-detail' => categoryShowOne($_GET['id']),
    'category-update' => categoryUpdate($_GET['id']),
    'category-create' => categoryCreate(),
    'category-delete' => categoryDelete($_GET['id']),

    'setting' => settingListAll(),


    //     // CRUD Category
//     'categories' => categoryListAll(),
//     'category-detail' => categoryShowOne($_GET['id']),
//     'category-create' => categoryCreate(),
//     'category-update' => categoryUpdate($_GET['id']),
//     'category-delete' => categoryDelete($_GET['id']),


    // CRUD oder
    'oders' => oderListAll(),
    'oder-detail' => oderShowOne($_GET['id']),
    // 'oder-create' => oderCreate(),
    // 'oder-update' => oderUpdate($_GET['id']),s
    'oder-delete' => oderDelete($_GET['id']),

    // CRUD products
    'products' => viewProductListAll(),
    //     'author-detail' => authorShowOne($_GET['id']),
    'product-create' => productCreate(),
    'product-update' => productUpdate($_GET['id']),
    'product-delete' => productDelete($_GET['id']),

    //     // CRUD post
//     'posts' => postListAll(),
//     'post-detail' => postShowOne($_GET['id']),
//     'post-create' => postCreate(),
//     'post-update' => postUpdate($_GET['id']),
//     'post-delete' => postDelete($_GET['id']),

    //     // Setting
//     'setting-form' => settingShowForm(),
//     'setting-save' => settingSave(),
    'showProduct' => productShowOne($_GET['id']),

    'login' => authenShowFormLogin(),
    'logout' => authenLogout(),
// 'forgot' => authenShowFormForgot(),

};

require_once '../commons/disconnect_db.php';