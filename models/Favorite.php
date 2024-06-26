<!-- 
if (!function_exists('listFav')) {
    function listFav($userID)
    {
        try {
            $sql = "SELECT 
                    p.name as p_name,
                    p.price_sale as p_price_sale,
                    p.price as p_price,
                    p.img as p_img,
                    p.id as p_id,
                    u.id as u_id
                FROM favourite AS f 
                INNER JOIN products AS p ON p.id = f.pro_id 
                INNER JOIN users AS u ON u.id = f.user_id 
                WHERE f.user_id = :userid
                ORDER BY f.created DESC; 
                ;";

            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(":userid", $userID);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('deleteFav')) {
    function deleteFav($userID, $proID)
    {
        try {
            $sql = "DELETE FROM favourite WHERE user_id = :userid AND pro_id = :proid";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":userid", $userID);
            $stmt->bindParam(":proid", $proID);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
} -->
