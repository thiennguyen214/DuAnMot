<?php

function DeleteTheoOriginID($tableName,$id){

    try {
        $sql = "DELETE FROM $tableName WHERE origin_id = :origin_id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":origin_id", $id);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}