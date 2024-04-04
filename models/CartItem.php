<?php

function updateQuantityByCartIDAndProductID($cartID, $productID, $quantity)
{
    try {
        $sql = "
            UPDATE cart_item 
            SET quantity = :quantity 
            WHERE cart_id = :cart_id AND pro_id = :pro_id;
        ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":quantity", $quantity);
        $stmt->bindParam(":cart_id", $cartID);
        $stmt->bindParam(":pro_id", $productID);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function deleteCartItemByCartIDAndProductID($cartID, $productID)
{
    try {
        $sql = "
            DELETE FROM cart_item 
            WHERE cart_id = :cart_id AND pro_id = :product_id;
        ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":cart_id", $cartID);
        $stmt->bindParam(":product_id", $productID);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function deleteCartItemByCartID($cartID)
{
    try {
        $sql = "
            DELETE FROM cart_items 
            WHERE cart_id = :cart_id;
        ";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":cart_id", $cartID);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

if (!function_exists('cartItemAll')) {
    function cartItemAll($userID)
    {
        try {
            $sql = "SELECT ci.*, p.name as p_name, p.price_sale as p_price_sale, p.img as p_img
            FROM cart_item AS ci
            INNER JOIN products AS p ON p.id = ci.pro_id
            INNER JOIN carts AS c ON c.id = ci.cart_id 
            WHERE c.user_id = :user_id;";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":user_id", $userID);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}