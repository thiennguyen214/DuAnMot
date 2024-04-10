<?php
function showChitietsp()
{
    $tittle = "chi tiết sản phẩm";
    $view = "viewAll/chitietsp";
    $style = 'styles/chitietsp';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');
    $posts = listAll('posts');


    require_once PATH_VIEW . '/layouts/master.php';

}