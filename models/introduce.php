<?php
function thongKeCuaHang()
{
    try {
        $sql = 'SELECT * FROM users ORDER BY id DESC LIMIT 1';
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}
if (!function_exists('listAll')) {
    function listAll($tableName) {
        try{
            $sql = "SELECT * FROM $tableName ORDER BY id DESC";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch (\Exception $e) {
            debug($e);
        }
    }
}