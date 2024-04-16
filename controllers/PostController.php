<?php

function showPost()
{
    $view = 'viewAll/posts';
    $active5 = 'active';
    $style = 'styles/post';
    $tittle = 'Tin tức';
    $posts = listAll('posts');

    // $posts = showOne('posts');



    $fnames = charter();
    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
    }


    require_once PATH_VIEW . '/layouts/master.php';
}



if (!function_exists('showOne')) {
    function showOne($tableName, $id)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE id = :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}