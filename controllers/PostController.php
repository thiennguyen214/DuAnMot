<?php

function showPost()
{
    $view = 'viewAll/posts';
    $active5 = 'active';
    $style = 'styles/post';
    $tittle = 'Tin tức';
    $posts = listAll('posts');
    $fnames = charter();
    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
    }

    require_once PATH_VIEW . '/layouts/master.php';
}