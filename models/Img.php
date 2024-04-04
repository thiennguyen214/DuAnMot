<?php
if (!function_exists('showImgs')) {
    function showImgs($tableName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE product_id = :id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}