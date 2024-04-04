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

function selectSeg($seg)
{
    try {
        $sql = "SELECT  pr.id as id,
        pr.name as pr_name ,
        pr.price as pr_price,
        pr.price_sale as pr_price_sale,
        pr.so_luong_ban as pr_so_luong_ban,
        pr.so_luong_kho as pr_so_luong_kho,
        pr.img as pr_img,
        pr.mota as pr_mota,
        pr.created as pr_created
         FROM 
        `products` as pr JOIN
        `type_pro` as ty ON
        pr.type_id = ty.id
         WHERE ty.name = '$seg'  ";
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
            $sql = "SELECT pr.id as id,
            pr.name as pr_name ,
            pr.price as pr_price,
            pr.price_sale as pr_price_sale,
            pr.so_luong_ban as pr_so_luong_ban,
            pr.so_luong_kho as pr_so_luong_kho,
            pr.img as pr_img,
            pr.mota as pr_mota,
            pr.created as pr_created  FROM `products` as pr ORDER BY id ASC";

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
