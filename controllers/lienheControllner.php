<?php
function showLienhe()
{
    $view = "viewAll/lienhe";
    $style = 'styles/lienhe';
    $active6 = 'active';

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