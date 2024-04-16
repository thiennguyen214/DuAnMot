<?php 

if (!function_exists('showType')) {
    function showType($type_id)
    {
        try {
            $sql = "SELECT * FROM products WHERE type_id = :type_id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":type_id", $type_id);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('brand')) {
    function brand($brand_id)
    {
        try {
            $sql = "SELECT * FROM products WHERE brand_id = :brand_id";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":brand_id", $brand_id);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('incNamePro')) {
    function incNamePro()
    {
        try {
            $sql = "SELECT * FROM products ORDER BY name";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('decNamePro')) {
    function decNamePro()
    {
        try {
            $sql = "SELECT * FROM products ORDER BY name DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('incPricePro')) {
    function incPricePro()
    {
        try {
            $sql = "SELECT * FROM products ORDER BY price_sale";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('decPricePro')) {
    function decPricePro()
    {
        try {
            $sql = "SELECT * FROM products ORDER BY price_sale DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('newPro')) {
    function newPro()
    {
        try {
            $sql = "SELECT * FROM products ORDER BY created DESC";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('oldPro')) {
    function oldPro()
    {
        try {
            $sql = "SELECT * FROM products ORDER BY created";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('Male')) {
    function Male()
    {
        try {
            $sql = "SELECT * FROM products WHERE type_id = 1 ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('Female')) {
    function Female()
    {
        try {
            $sql = "SELECT * FROM products WHERE type_id = 2 ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('Unisex')) {
    function Unisex()
    {
        try {
            $sql = "SELECT * FROM products WHERE type_id = 3 ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('filterByBrand')) {
    function filterByBrand($brand_id)
    {
        try {
            $sql = "SELECT * FROM products WHERE brand_id = :brand_id ";

            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(":brand_id", $brand_id);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('pricePro')) {
    function pricePro($min,$max)
    {
        try {
            $sql = "SELECT * FROM products WHERE price_sale BETWEEN ". $min ." AND ". $max;

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}


if (!function_exists('ascBrand')) {
    function ascBrand($fname)
    {
        try {
            $sql = "SELECT * FROM brands WHERE name LIKE :fname";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $fnameParam = $fname . "%";
            $stmt->bindParam(":fname", $fnameParam);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
if (!function_exists('searchPro')) {
    function searchPro($name)
    {
        try {
            $sql = "SELECT * FROM products WHERE name LIKE :name";
            
            $stmt = $GLOBALS['conn']->prepare($sql);

            $fnameParam = "%" .$name . "%";
            $stmt->bindParam(":name", $fnameParam);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }

    }
}
if (!function_exists('charter')) {
    function charter()
    {
        try {
            $sql = "SELECT DISTINCT SUBSTRING(name, 1, 1) AS initial FROM brands";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
