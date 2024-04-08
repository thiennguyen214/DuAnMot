<?php
function cartAdd()
{
    $productID = $_POST['proID'];
    $userID = $_POST['userID'];
    $quantity = $_POST['quantity'];
    // Kiểm tra xem là có product với cái ID kia không
    $product = showOne('products', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }

    // Kiểm tra xem trong bảng carts thì đã có bản ghi nào của user đang đăng nhập chưa
    // Có rồi thì lấy ra cartID, nếu chưa thì tạo mới
    $cartID = getCartID($userID);

    $_SESSION['cartID'] = $cartID;


    // Add sản phẩm vào session cart: $_SESSION['cart'][$productID] = $product
    // Add tiếp sản phẩm vào thằng cart_items
    if (empty($_SESSION['cart'][$productID])) {
        $_SESSION['cart'][$productID] = $product;
        $_SESSION['cart'][$productID]['quantity'] = $quantity;
        insert('cart_item', [
            'cart_id' => $cartID,
            'pro_id' => $productID,
            'quantity' => $quantity
        ]);
    } else {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] += $quantity;
        updateQuantityByCartIDAndProductID($cartID, $productID, $qtyTMP);
    }


    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart');
}
function cartList()
{
    $view = "viewAll/cart";
    $style = 'styles/cart';
    $totalc = 0;
    if (!empty($_SESSION['userm'])) {
        $favs = listFav($_SESSION['userm']['id']);
        $carts = cartItemAll($_SESSION['userm']['id']);
        foreach ($carts as $cart) {
            $totalc += $cart['quantity'];
        }
        // $_SESSION['cart'] = $carts;
    }
    $tittle = 'Giỏ hàng';


    require_once PATH_VIEW . '/layouts/master.php';

}

function cartInc($productID)
{

    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }

    // Tăng số lượng lên 1
    if (isset($_SESSION['cart'][$productID])) {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] += 1;

        updateQuantityByCartIDAndProductID($_SESSION['cartID'], $productID, $qtyTMP);
    }

    // debug($_SESSION['cart']['quantity']);

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart');
}

function cartDec($productID)
{
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }

    // giảm số lượng lên 1
    if (isset($_SESSION['cart'][$productID]) && $_SESSION['cart'][$productID]['quantity'] > 2) {
        $qtyTMP = $_SESSION['cart'][$productID]['quantity'] -= 1;

        updateQuantityByCartIDAndProductID($_SESSION['cartID'], $productID, $qtyTMP);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart');
}

function cartDel($productID)
{
    // Kiểm tra sản phẩm có tồn tại không
    $product = showOne('products', $productID);

    if (empty($product)) {
        debug('404 Not found');
    }

    // Xóa bản ghi trong session và cart_items
    if (isset($_SESSION['cart'][$productID])) {
        unset($_SESSION['cart'][$productID]);

        deleteCartItemByCartIDAndProductID($_SESSION['cartID'], $productID);
    }

    // Chuyển hướng qua trang list cart
    header('Location: ' . BASE_URL . '?act=cart');
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