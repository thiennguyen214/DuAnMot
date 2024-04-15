<?php
function showBrand()
{
    $view = "viewAll/brand";
    $style = 'styles/brand';
    $active3d = 'active';
    $active3 = 'active';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');
    $fnames = charter();
    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
    }
    // debug($brands);
    require_once PATH_VIEW . '/layouts/master.php';
}