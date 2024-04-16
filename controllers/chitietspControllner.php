<?php
function showChitietsp()
{
    $tittle = "Chi tiết sản phẩm";
    $view = "viewAll/chitietsp";
    $style = 'styles/chitietsp';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');
    $posts = listAll('posts');
    $fnames = charter();
    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
    }

    require_once PATH_VIEW . '/layouts/master.php';

}