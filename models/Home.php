<?php

function top1OPro()
{
    try {
        $sql = 'SELECT * FROM   `products` ORDER BY `so_luong_ban` DESC LIMIT 0,10 ';
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}



if (!function_exists('listAllPro')) {
    function listAllPro()
    {
        try {
            $sql = "SELECT * FROM `products` ORDER BY id ASC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

function xuHuong()
{
    try {
        $sql = 'SELECT * FROM   `products` ORDER BY `so_luong_ban` DESC LIMIT 0,2 ';
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function spBanChay()
{
    try {
        $sql = 'SELECT * FROM   `products` ORDER BY `so_luong_ban` DESC LIMIT 0,3 ';
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function spSale()
{
    try {
        $sql = 'SELECT * FROM   `products` ORDER BY `price_sale` DESC LIMIT 0,3 ';
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}
