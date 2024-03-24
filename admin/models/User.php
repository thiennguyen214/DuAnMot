<?php

if (!function_exists('checkUniqueEmail')) {
    // Nếu không trùng thì trả về True
    // Nếu trùng thì trả về False
    function checkUniqueEmail($tableName, $email)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE email = :email LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('checkUniqueEmailForUpdate')) {
    // Nếu không trùng thì trả về True
    // Nếu trùng thì trả về False
    function checkUniqueEmailForUpdate($tableName, $id, $email)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE email = :email AND id <> :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('getUserAdminByEmailAndPassword')) {
    function getUserAdminByEmailAndPassword($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = :email AND pass = :pass AND role = 1 LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pass", $password);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}