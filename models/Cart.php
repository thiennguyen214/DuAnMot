<?php

function getCartID($userID)
{
    // Lấy dữ liệu trong DB
    $cart = getCartByUserID($userID);

    if (empty($cart)) {
        return insert_get_last_id('carts', [
            'user_id' => $userID
        ]);
    }

    return $cart['id'];
}

function getCartByUserID($userID)
{
    try {
        $sql = "SELECT * FROM carts WHERE user_id = :user_id LIMIT 1";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":user_id", $userID);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

if (!function_exists('listOderOne')) {
    function listOderOne($id)
    {
        try {
            $sql = "SELECT bi.*,
                b.id AS b_id,
                b.tong AS b_tong,
                b.name AS b_name,
                b.email AS b_email,
                b.address AS b_address,
                p.name AS p_name,
                b.created AS b_created,
                b.id AS b_status
            FROM bills_item AS bi
            INNER JOIN bills AS b ON b.id = bi.bill_id
            INNER JOIN products AS p ON p.id = bi.pro_id
            WHERE bi.bill_id = :id ;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


