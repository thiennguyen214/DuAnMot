<?php
if (!function_exists('listOder')) {
    function listOder()
    {
        try {
            $sql = "SELECT 
                bi.id AS bi_id,
                b.name AS b_name,
                p.name AS p_name,
                bi.price AS bi_price,
                bi.quantity AS bi_quantity,
                b.created AS b_created,
                b.status AS b_status
            FROM bills_item AS bi
            INNER JOIN bills AS b ON b.id = bi.bill_id
            INNER JOIN products AS p ON p.id = bi.pro_id
            ORDER BY bi_id DESC;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('listOneOder')) {
    function listOneOder($id)
    {
        try {
            $sql = "SELECT 
                bi.id AS bi_id,
                bi.price AS bi_price,
                bi.quantity AS bi_quantity,
                b.name AS b_name,
                b.address AS b_address,
                b.tell AS b_tell,
                b.email AS b_email,
                b.note AS b_note,
                b.paymethod AS b_paymethod,
                b.status AS b_status,
                p.name AS p_name
            FROM bills_item AS bi
            INNER JOIN bills AS b ON b.id = bi.bill_id
            INNER JOIN products AS p ON p.id = bi.pro_id
            WHERE bi.id = :id LIMIT 1;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('updateBill')) {
    function updateBill($id, $data = [])
    {
        try {
            $setParams = get_set_params($data);

            $sql = "UPDATE bills_item SET $setParams WHERE id = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            foreach ($data as $fieldName => &$value) {
                $stmt->bindParam(":$fieldName", $value);
            }

            $stmt->bindParam(":id", $id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}