<?php
if (!function_exists('listOder')) {
    function listImg()
    {
        try {
            $sql = "SELECT 
                    ip.id AS ip_id,
                    p.name AS p_name,
                    ip.img AS ip_img
                FROM img_products AS ip 
                INNER JOIN products AS p ON p.id = ip.product_id 
                ORDER BY ip_id ASC;
                ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}