<?php
function showAddresses()
{
    $tittle = "sổ địa chỉ";
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
    if (!empty($_SESSION['userm'])) {
        // $favs = listFav($_SESSION['userm']['id']);
        // foreach ($favs as $fav) {
        //     $_SESSION['favs'][$fav['p_id']] = $fav['p_id'];
        // }
        $carts = cartItemAll($_SESSION['userm']['id']);
        $totalc = 0;
        foreach ($carts as $cart) {
            if (empty($_SESSION['cart'][$cart['pro_id']])) {
                $_SESSION['cart'][$cart['pro_id']] = $cart;
            }
            $totalc += $_SESSION['cart'][$cart['pro_id']]['quantity'];
        }
    }

    require_once PATH_VIEW . '/layouts/master.php';

}