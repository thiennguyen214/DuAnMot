<?php
function showThanhtoan()
{
    $tittle = "Thanh toán";
    // $view = "viewAll/thanhtoan";
    // $style = 'styles/thanhtoan';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');
    // debug($_SESSION['cart']);
    require_once PATH_VIEW . '/viewAll/thanhtoan.php';

}

function orderPurchase()
{
    if (!empty($_POST) && !empty($_SESSION['cart'])) {
        try {
            // Xử lý lưu vào bảng orders và order_items
            // $data = $_POST;
            $data['name'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            $data['tell'] = $_POST['tell'];
            $data['address'] = $_POST['address'];
            $data['note'] = $_POST['note'];
            $data['total'] = $_POST['tong'];
            $data['tong'] = caculator_total_order(false);
            $data['status'] = STATUS_DELIVERY_WFC;
            $data['paymethod'] = STATUS_PAYMENT_UNPAID;

            $orderID = insert_get_last_id('bills', $data);
            // debug($orderID);

            foreach ($_SESSION['cart'] as $productID => $item) {
                $orderItem = [
                    'bill_id' => $orderID,
                    'pro_id' => $productID,
                    'quantity' => $item['quantity'],
                    'price' => $item['p_price_sale'],
                ];

                insert('bills_item', $orderItem);
            }

            // Xử lý hậu
            deleteCartItemByCartID($_SESSION['cartID']);
            delete2('carts', $_SESSION['cartID']);

            unset($_SESSION['cart']);
            unset($_SESSION['cartID']);
        } catch (\Exception $e) {
            debug($e);
        }

        header('Location: ' . BASE_URL . '?act=order-success');
        exit();
    }

    header('Location: ' . BASE_URL);
}

function orderSuccess()
{
    require_once PATH_VIEW . 'viewAll/bills.php';
}