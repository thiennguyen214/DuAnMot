<?php


function DeleteTheoImgProID($tableName,$id){

    try {
        listAll('products');

        $sql = "DELETE FROM $tableName WHERE product_id = :product_id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":product_id", $id);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}