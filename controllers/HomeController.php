<?php
function index()
{
    $view = "/partials/content";
    // $dataUser = getAllUser();
    // debug($dataUser);
    require_once PATH_VIEW . '/layouts/master.php';

}
function gioithieu()
{
    $view =  "/viewtt/gioithieu";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function tintuc()
{
    $view =  "/viewtt/tintuc";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function lienhe()
{
    $view =  "/viewtt/lienhe";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function trangchu()
{
    $view =  "/viewtt/trangchu";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function thuonghieu()
{
    $view =  "/viewtt/thuonghieu";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function sanpham()
{
    $view =  "/viewtt/sanpham";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function giohang()
{
    $view =  "/viewtt/giohang";
    
    require_once PATH_VIEW . 'layouts/master.php';

}

// function dashboard()
// {
//     $view = 'dashboard';
//     $script = 'datetime';
//     $style = 'datatable';
//     require_once PATH_VIEW_USER . 'layout/master.php';
// }