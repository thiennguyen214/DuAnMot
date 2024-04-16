<?php
function showAddresses()
{
    $tittle = "Sổ địa chỉ";
    $view = "viewAll/addresses";
    $style = 'styles/addresses';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');
    $fnames = charter();
    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
    }

    require_once PATH_VIEW . '/layouts/master.php';

}