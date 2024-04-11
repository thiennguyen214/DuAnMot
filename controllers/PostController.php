<?php

function showPost()
{
    $view = 'viewAll/posts';
    $active5 = 'active';
    $style = 'styles/post';
    $tittle = 'Tin tức';
    $posts = listAll('posts');


    require_once PATH_VIEW . '/layouts/master.php';
}