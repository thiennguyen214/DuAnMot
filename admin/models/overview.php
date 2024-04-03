<?php

function topBanchay($tableName)
{
    try {
        $sql = "SELECT * FROM $tableName ORDER BY `so_luong_ban` DESC LIMIT 5";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}