<?php

function DeleteTheoTypeID($tableName,$id){

    try {
        $sql = "DELETE FROM $tableName WHERE type_id = :type_id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(":type_id", $id);

        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}