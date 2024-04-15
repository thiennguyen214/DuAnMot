<?php
function ajaxFavCreate()
{
    $data = [
        "user_id" => $_GET['userid'],
        'pro_id' => $_GET['proid'],
    ];
    if ($data['user_id'] == '') {
        $flag = 0;
        $mess = 'Cần đăng nhập để thực hiện chức năng này ';
    } else {
        if (empty($_SESSION['favs'][$data['pro_id']]) && $data['user_id'] != '') {
            $_SESSION['favs'][$data['pro_id']] = $data['pro_id'];
            insert('favourite', $data);
            $flag = 1;
            $mess = 'Thêm vào yêu thích thành công';
        } else if (isset($_SESSION['favs'][$data['pro_id']]) && $data['user_id'] != '') {
            unset($_SESSION['favs'][$data['pro_id']]);
            deleteFav($data['user_id'], $data['pro_id']);
            $flag = 2;
            $mess = 'Xóa SP yêu thích thành công';
        }
    }
    echo json_encode(
        array(
            'status' => $flag,
            'mess' => $mess,
        )
    );
}

function showFavs($userID)
{
    $title = 'Favorite';
    $view = 'viewAll/favorite';
    $style = 'styles/favorite';
    if ($userID) {
        $favs = listFav($userID);
    }
    $fnames = charter();
    foreach ($fnames as $fname) {
        $brands[$fname['initial']] = ascBrand($fname['initial']);
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