<?php
function showHome()
{
    $view = "home";
    // $dataUser = getAllUser();
    // debug($dataUser);
    $users = listAll('users');

    require_once PATH_VIEW . '/layouts/master.php';

}



// function dashboard()
// {
//     $view = 'dashboard';
//     $script = 'datetime';
//     $style = 'datatable';
//     require_once PATH_VIEW_USER . 'layout/master.php';
// }