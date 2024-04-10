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

function oderSum()
{
    $orderSum = 0;
    $orders = listAll('bills');
    // $billsStatus = array_filter($orders, function ($bill) {
//     return  $bill['status'] == 2 || $bill['status'] == 1 || $bill['status'] == 3;
// });
    foreach ($orders as $order) {

        if ($order['status'] == 1 || $order['status'] == 2 || $order['status'] == 3) {
            // $CountBillStatus = count($billsStatus);
            $orderSum += $order['tong'] ;
            
           
        }
        
    }
    return $orderSum;
}

function FillDataBills()
{
    try {
        $sql = "SELECT b.id as bill_id , 
        b.name as client_name , 
        pr.name as pr_name , 
        b.total as so_luong , 
        b.tong as b_tong 
        FROM `bills` AS b 
        JOIN `bills_item` AS bi ON b.id = bi.bill_id 
        JOIN `products` AS pr ON bi.pro_id = pr.id 
        WHERE  b.status IN (1,2,3)" ;
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function NewUser(){
    try {
        $sql = "SELECT * FROM `users` ORDER BY `crea` DESC LIMIT 15";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}