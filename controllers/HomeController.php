<?php
function showHome()
{
    $view = "home";
    $active1 = 'active';
    $style = 'styles/home';
    $tittle = 'Trang chủ';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // $users = listAll('users');
    $brand = listAll('brands');
    $products = listAll('products');
    // $proTop10 = getTop10product('products');
    $top10Pro = top1OPro();
    $brands = listAll('brands');
    $products = showGh('products',8);
    $xuHuong = xuHuong();
    $users = listAll('users');
    $banChaytt = spBanChay();
    $spSale = spSale();
    $brandsh = listAll('brands'); 
    $fnames = charter();

    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
    }
    if (!empty($_SESSION['userm'])) {
        $cartID = getCartID($_SESSION['userm']['id']);
        $_SESSION['cartID'] = $cartID;
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
function showne($id)
{
    $productone = showOne('products', $id);
    if ($productone->num_rows > 0) {
        // Chuyển đổi kết quả thành mảng JSON
        $row = $productone->fetch_assoc();
        $response = array(
            'imageSrc' => $row['image_src'],
            'productName' => $row['product_name'],
            'productStatus' => $row['product_status'],
            'productSku' => $row['product_sku'],
            'productPrice' => $row['product_price'],
            'oldPrice' => $row['old_price'],
            'productDescription' => $row['product_description'],
            'variantId' => $row['variant_id']
        );

        // Trả về dữ liệu dưới dạng JSON
        echo json_encode($response);
    } else {
        echo "0 results";
    }
}
