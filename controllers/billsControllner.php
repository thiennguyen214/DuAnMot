<?php
function showBills()
{
    $tittle = "Hóa đơn";
    $view = "viewAll/bills";
    $style = 'styles/bills';
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