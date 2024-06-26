<?php
function cartAdd()
{

    $productID = $_POST['proID'];
    $userID = $_POST['userID'];
    $quantity = $_POST['quantity'];
    // Kiểm tra xem là có product với cái ID kia không


    if (!isset($_SESSION['cart'][$productID])) {
        insert('cart_item', [
            'cart_id' => $_SESSION['cartID'],
            'pro_id' => $productID,
            'quantity' => $quantity
        ]);
        $carts = cartItemOne($userID,$productID);
        $_SESSION['cart'][$productID] = $carts;
        $_SESSION['cart'][$productID]['quantity'] = $quantity;
        $flag = true;
    } else {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] += $quantity;
        updateQuantityByCartIDAndProductID($_SESSION['cartID'], $productID, $qtyTMP);
        $flag = true;
    }
    // }else{
    //     $flag = false;
    //     $mess = 'Cần đăng nhập';
    // }
    echo json_encode(
        array(
            'status' => $flag,
        )
    );

}
function cartList()
{
    $tittle = "Giỏ hàng";
    $view = "viewAll/cart";
    $style = 'styles/cart';
    $tittle = 'Giỏ hàng';
    $fnames = charter();
    $carts = cartItemAll($_SESSION['userm']['id']);
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

function cartInc($productID)
{
    $flag = 0;
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }
    // Tăng số lượng lên 1
    if (isset($_SESSION['cart'][$productID])) {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] += 1;
        updateQuantityByCartIDAndProductID($_SESSION['cartID'], $productID, $qtyTMP);
        $flag = 1;
    }

    // debug($_SESSION['cart']['quantity']);
    echo json_encode(
        array(
            'status' => $flag,
        )
    );

}

function cartDec($productID)
{
    $flag = false;
    $quantity = $_GET['total'];
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }

    // giảm số lượng lên 1
    if (isset($_SESSION['cart'][$productID]) && $_SESSION['cart'][$productID]['quantity'] > 2) {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] -= 1;
        updateQuantityByCartIDAndProductID($_SESSION['cartID'], $productID, $qtyTMP);
        $flag = true;
    }
    echo json_encode(
        array(
            'status' => $flag,
        )
    );
    // header('Location: ' . BASE_URL . '?act=cart');
}

function cartDel($productID)
{
    // $productID = $_GET['id'];
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);
    $flag = false;
    if (empty($product)) {
        debug('404 Not found');
    }
    // Xóa bản ghi trong session và cart_items
    if (isset($_SESSION['cart'][$productID])) {
        unset($_SESSION['cart'][$productID]);
        deleteCartItemByCartIDAndProductID($_SESSION['cartID'], $productID);
        $flag = true;
    }
    echo json_encode(
        array(
            'status' => $flag,
        )
    );

    // Chuyển hướng qua trang list cart
    // header('Location: ' . BASE_URL . '?act=cart');
}


// function cartInc($id)
// {

// }
// function cartDec($id)
// {

// }
// function cartDel($id)
// {

// }