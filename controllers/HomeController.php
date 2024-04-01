<?php
function showHome()
{
    $view = "home";
    $active1 = 'active';
    $style = 'styles/home';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');


    require_once PATH_VIEW . '/layouts/master.php';

}



// function dashboard()
// {
//     $view = 'dashboard';
//     $script = 'datetime';
//     $style = 'datatable';
//     require_once PATH_VIEW_USER . 'layout/master.php';
// }