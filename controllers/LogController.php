<?php

function showLog()
{
    $view = "viewAll/login";
    $style = "styles/login";
    // $dataUser = getAllUser();
    // debug($dataUser);
    $users = listAll('users');

    require_once PATH_VIEW . '/layouts/master.php';

}