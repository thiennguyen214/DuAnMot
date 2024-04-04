<?php
if (!function_exists('listOnePro')) {
    function listOnePro($id)
    {
        try {
            $sql = "SELECT p.*, b.name as b_name, t.name as t_name, o.name as o_name
            FROM products AS p
            INNER JOIN brands AS b ON b.id = p.brand_id
            INNER JOIN type_pro AS t ON t.id = p.type_id
            INNER JOIN origins AS o ON o.id = p.origin_id
            WHERE p.id = :id LIMIT 1;
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

if (!function_exists('showGh')) {
    function showGh($tableName, $sl)
    {
        try {
            $sql = "SELECT * FROM $tableName ORDER BY id ASC LIMIT " . $sl;

            $stmt = $GLOBALS['conn']->prepare($sql);

            // $stmt->bindParam(":sl", $sl);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

