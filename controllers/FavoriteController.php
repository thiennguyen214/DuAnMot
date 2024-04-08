<?php
function ajaxFavCreate($userID, $proID)
{
    try {
        updateFav('favourite', $userID, $proID);
    } catch (Throwable $th) {
        http_response_code(500);
    }
}
function ajaxFavDelete($userID, $proID)
{
    try {
        updateFav('favourite', $userID, $proID);
    } catch (Throwable $th) {
        http_response_code(500);
    }
}

function showFavs($userID)
{
    $title = 'Favorite';
    $view = 'viewAll/favorite';
    $style = 'styles/favorite';
    if ($userID) {
        $favs = listFav($userID);
        $favac = 'active';
    } else {
        $favs = '';
    }
    require_once PATH_VIEW . '/layouts/master.php';
}
function ajaxUserCreate($data)
{
    try {
        $data['password'] = md5($data['password']);

        $id = insert_get_last_id('users', $data);

        $data = showOne('users', $id);

        echo json_encode($data);
    } catch (Throwable $th) {
        http_response_code(500);
    }
}