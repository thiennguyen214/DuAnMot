<?php
function index()
{
    // $dataUser = getAllUser();
    // debug($dataUser);
    require_once PATH_VIEW . 'layouts/master.php';
}

function dashboard()
{
    $view = 'dashboard';
    $script = 'datetime';
    $style = 'datatable';
    require_once PATH_VIEW_USER . 'layout/master.php';
}