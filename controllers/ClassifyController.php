<?php
function searchn()
{
    if (isset($_POST['action'])) {
        $proSer = searchPro($_POST['search_name']); // Sửa 'action' thành 'search_name'
        $output = '<div class="title-search">
        <span>Sản phẩm</span>
    </div>';
        foreach ($proSer as $pro) {
            $output .= '
            <div class="item 3">
                <div class="image">
                    <a class="image_thumb" href="'. BASE_URL .'?act=productDetail&id='.$pro['id'].'"
                        title="' . $pro['name'] . '">
                        <img width="100" height="100" class="lazyload"
                            src="' . $pro['img'] . '"
                            data-src="' . $pro['img'] . '"
                            alt="' . $pro['name'] . '" />
                    </a>
                </div>
                <div class="content">
                    <h3 class="product-name">
                        <a class="line-clamp line-clamp-1" href="'. BASE_URL .'?act=productDetail&id='.$pro['id'].'"
                            title="' . $pro['name'] . '">' . $pro['name'] . '</a>
                    </h3>
                    <div class="price-box">
                        ' . $pro['price_sale'] . '₫
                        <span class="compare-price">' . $pro['price'] . '₫</span>
                    </div>
                </div>
            </div>
        ';
        }
        echo $output;
    }
}