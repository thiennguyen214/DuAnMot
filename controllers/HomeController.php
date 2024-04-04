<?php
function showHome()
{
    $view = "home";
    $active1 = 'active';
    $style = 'styles/home';
    $tittle = 'Trang chủ';
    // $script = 'scripts/home';
    // $dataUser = getAllUser();
    // debug($dataUser);
    // $users = listAll('users');
    $brand = listAll('brands');
    $products = listAll('products');


    // $proTop10 = getTop10product('products');
    $top10Pro = top1OPro();

    $brands = listAll('brands');
    $products = listAll('products');
    $xuHuong = xuHuong();
    $users = listAll('users');
    $banChaytt = spBanChay();
    $spSale = spSale();



    require_once PATH_VIEW . '/layouts/master.php';

}
function showne($id)
{
    $productone = showOne('products', $id);
    if ($productone->num_rows > 0) {
        // Chuyển đổi kết quả thành mảng JSON
        $row = $productone->fetch_assoc();
        $response = array(
            'imageSrc' => $row['image_src'],
            'productName' => $row['product_name'],
            'productStatus' => $row['product_status'],
            'productSku' => $row['product_sku'],
            'productPrice' => $row['product_price'],
            'oldPrice' => $row['old_price'],
            'productDescription' => $row['product_description'],
            'variantId' => $row['variant_id']
        );

        // Trả về dữ liệu dưới dạng JSON
        echo json_encode($response);
    } else {
        echo "0 results";
    }
}
function tintuc()
{
    $view =  "/viewtt/tintuc";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function lienhe()
{
    $view =  "/viewtt/lienhe";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function trangchu()
{
    $view =  "/viewtt/trangchu";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function thuonghieu()
{
    $view =  "/viewtt/thuonghieu";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function sanpham()
{
    $view =  "/viewtt/sanpham";
    
    require_once PATH_VIEW . 'layouts/master.php';

}
function giohang()
{
    $view =  "/viewtt/giohang";
    
    require_once PATH_VIEW . 'layouts/master.php';

}




// function dashboard()
// {
//     $view = 'dashboard';
//     $script = 'datetime';
//     $style = 'datatable';
//     require_once PATH_VIEW_USER . 'layout/master.php';
// }