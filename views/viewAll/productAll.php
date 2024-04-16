<div class="bodywrap">
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="index.html"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp;</span>
                </li>


                <li>
                    <a class="changeurl" href="nuoc-hoa-nu.html"><span>
                            <?= $product['t_name'] ?>
                        </span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp;</span>
                </li>

                <li><strong><span>
                            <?= $product['name'] ?>
                        </span></strong>
                <li>

            </ul>
        </div>
    </section>
    <section class="product layout-product" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="category" content="<?= $product['t_name'] ?>">
        <meta itemprop="url" content="//bean-perfume.mysapo.net/tommy-hilfiger-tommy-girl">
        <meta itemprop="name" content="<?= $product['name'] ?>">
        <meta itemprop="image"
            content="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/thumb/grande/100/503/826/products/tommy-hilfiger-tommy-girl-786135-removebg-preview3eae.png?v=1701248377597">
        <meta itemprop="description" content="Giới tính: <?= $sex ?>
        Xuất xứ: <?= $product['o_name'] ?>
        Phong cách: Ngọt ngào, Gợi cảm, Mãnh liệt

        Hương đặc trưng
        + Hương đầu: Hoa đào,&nbsp;hoa kim ngân, bạc hà, hoa hồng
        + Hương giữa: Cam,&nbsp;bạc hà, quà bưởi, quả chanh
        + Hương cuối: Hoa nhài, hoa mộc lan">
        <div class="d-none" itemprop="brand" itemtype="https://schema.org/Brand" itemscope>
            <meta itemprop="name" content="Tommy Hilfiger" />
        </div>
        <meta itemprop="model" content="">
        <div class="d-none hidden" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <div class="inventory_quantity hidden" itemscope itemtype="http://schema.org/ItemAvailability">
                <span class="a-stock" itemprop="supersededBy">
                    Còn hàng
                </span>
            </div>
            <link itemprop="availability" href="http://schema.org/InStock">
            <meta itemprop="priceCurrency" content="VND">
            <meta itemprop="price" content="<?= $product['price_sale'] ?>">
            <meta itemprop="url" content="tommy-hilfiger-tommy-girl.html">
            <span itemprop="UnitPriceSpecification" itemscope itemtype="https://schema.org/Downpayment">
                <meta itemprop="priceType" content="<?= $product['price_sale'] ?>">
            </span>
            <span itemprop="UnitPriceSpecification" itemscope itemtype="https://schema.org/Downpayment">
                <meta itemprop="priceSpecification" content="<?= $product['price'] ?>">
            </span>
            <meta itemprop="priceValidUntil" content="2099-01-01">
        </div>
        <div class="d-none hidden" id="https://bean-perfume.mysapo.net" itemprop="seller"
            itemtype="http://schema.org/Organization" itemscope>
            <meta itemprop="name" content="Bean Perfume" />
            <meta itemprop="url" content="index.html" />
            <meta itemprop="logo"
                content="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/logo02fb.png?1709175143725" />
        </div>
        <div class="container">
            <div class="details-product bg_colort">
                <div class="row">
                    <div class="product-detail-left product-images col-12 col-md-12 col-lg-5">
                        <div class="product-image-block relative">

                            <div class="swiper-container gallery-top">
                                
                                <div class="swiper-wrapper" id="lightgallery">
                                                                                                                                
                                    <a class="swiper-slide" data-hash="0" href=""
                                        title="Click để xem">
                                        <img height="480" width="480" src="<?= $product['img'] ?>"
                                            alt="<?= $product['name'] ?>"
                                            data-image="https://bizweb.dktcdn.net/100/503/826/products/tommy-hilfiger-tommy-girl-786135-removebg-preview.png?v=1701248377597"
                                            class="img-responsive mx-auto d-block swiper-lazy" />
                                    </a>
                                                                                                                     

                                </div>

                                <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                    data-wish="tommy-hilfiger-tommy-girl" tabindex="0" title="Thêm vào yêu thích">
                                    <svg class="icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist">
                                        </use>
                                    </svg>
                                </a>

                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                                                                                                 
                                    <div class="swiper-slide" data-hash="0">
                                        <div class="p-100">
                                            <img height="100" width="100" src="<?= $product['img'] ?>"
                                                alt=""
                                                data-image="//bizweb.dktcdn.net/thumb/medium/100/503/826/products/tommy-hilfiger-tommy-girl-786135-removebg-preview.png?v=1701248377597"
                                                class="swiper-lazy" />
                                        </div>
                                    </div>
                                                                                                    
                                </div>
                                <div class="swiper-button-next">
                                </div>
                                <div class="swiper-button-prev">
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class=" col-12 col-md-12 col-lg-7">
                        <div class="details-pro">
                            <h1 class="title-product">
                                <?= $product['name'] ?>
                            </h1>

                            <div class="reviews_details_product ">
                                <div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail"
                                    data-id="<?= $product['id'] ?>"></div>
                            </div>

                            <div class="inventory_quantity">
                                <div class="thump-break">
                                    <span class="mb-break">
                                        <span class="stock-brand-title">Thương hiệu:</span>
                                        <span class="a-vendor">
                                            <?= $product['b_name'] ?>
                                        </span>
                                    </span>
                                    <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span class="mb-break inventory">
                                        <span class="stock-brand-title">Tình trạng:</span>


                                        <span class="a-stock">
                                            <?= ($product['so_luong_ban'] == $product['so_luong_kho']) ? 'Hết hàng' : 'Còn hàng' ?>
                                        </span>


                                    </span>

                                </div>
                            </div>
                            <div class="price-box clearfix">

                                <span class="special-price">
                                    <span class="price product-price">
                                        <?= $product['price_sale'] ?>₫
                                    </span>
                                    <meta itemprop="price" content="<?= $product['price_sale'] ?>">
                                    <meta itemprop="priceCurrency" content="VND">
                                </span> <!-- Giá Khuyến mại -->
                                <span class="old-price" itemprop="priceSpecification" itemscope=""
                                    itemtype="http://schema.org/priceSpecification">
                                    <del class="price product-price-old">
                                        <?= $product['price'] ?>₫
                                    </del>
                                    <meta itemprop="price" content="<?= $product['price'] ?>">
                                    <meta itemprop="priceCurrency" content="VND">
                                </span> <!-- Giá gốca -->

                                <span class="label_product">
                                    <?php 
                                                $price_sale = str_replace(".", "", $product['price_sale']);
                                                $price = str_replace(".", "", $product['price']);
                                                ?>
                                                -<?= floor((1 - ($price_sale / $price)) * 100) ?>%
                                </span>


                            </div>

                            <div class="motangan">
                                <div class="rte">
                                    <p>Giới tính:
                                        <?= $sex ?>
                                    </p>
                                    <p>Xuất xứ:
                                        <?= $product['o_name'] ?>
                                    </p>
                                    <p>Phong cách: Ngọt ngào, Gợi cảm, Mãnh liệt<br />
                                        <br />
                                        <strong>Hương đặc trưng</strong>
                                    </p>
                                    <p>+ Hương đầu: Hoa đào,&nbsp;hoa kim ngân, bạc hà, hoa hồng</p>
                                    <p>+ Hương giữa: Cam,&nbsp;bạc hà, quà bưởi, quả chanh</p>
                                    <p>+ Hương cuối: Hoa nhài, hoa mộc lan</p>
                                </div>
                            </div>

                            <div class="tang_huong_thom">
                                <h3>Tầng hương thơm (note hương):</h3>
                                <div class="box_item_note">
                                    <ul class="fragrant_product">
                                        <li class="text-center">
                                            <span class="hungs">Hương đầu</span>
                                            <img width="90" height="90" class="lazyload"
                                                src="<?= BASE_URLS ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_2.jpg?1709175143725"
                                                alt="Hoa đào">
                                            <span>Hoa đào</span>
                                        </li>
                                        <li class="text-center">
                                            <span class="hungs">Hương giữa</span>
                                            <img width="90" height="90" class="lazyload"
                                                src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_10.jpg?1709175143725"
                                                alt="Cam">
                                            <span>Cam</span>
                                        </li>
                                        <li class="text-center">
                                            <span class="hungs">Hương cuối</span>
                                            <img width="90" height="90" class="lazyload"
                                                src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                                data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_6.jpg?1709175143725"
                                                alt="Hoa nhài">
                                            <span>Hoa nhài</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <!-- <div class="product-coupon__wrapper my-3">
                                <strong class="d-block mb-2">Các mã giảm giá có thể áp dụng: </strong>
                                <div class="product-coupons coupon-toggle-btn">
                                    <div class="coupon_item lite">
                                        <div class="coupon_content">
                                            BEA50
                                        </div>
                                    </div>
                                    <div class="coupon_item lite">
                                        <div class="coupon_content">
                                            BEA15
                                        </div>
                                    </div>
                                    <div class="coupon_item lite">
                                        <div class="coupon_content">
                                            BEAN99K
                                        </div>
                                    </div>
                                    <div class="coupon_item lite">
                                        <div class="coupon_content">
                                            FREESHIP
                                        </div>
                                    </div>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                        data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                        <path fill="currentColor"
                                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                            class=""></path>
                                    </svg>
                                </div>
                            </div> -->
                            <div id="modal-coupon-product" class="modalcoupon-product" style="display:none;">
                                <div class="modalcoupon-overlay fancybox-overlay fancybox-overlay-fixed"></div>
                                <div class="modal-coupon-product">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="chosee_size">
                                                <p class="title-size">MÃ KHUYẾN MÃI</p>
                                            </div>
                                            <div class="box-cpou-dk ">
                                                <div class="item_list_coupon">
                                                    <div class="money_coupon">
                                                        50K
                                                    </div>
                                                    <div class="content_coupon">
                                                        <div class="boz-left">
                                                            <div class="zip_coupon">
                                                                Mã giảm giá <b>BEA50</b>
                                                            </div>
                                                            <div class="noidung_coupon">
                                                                Nhập mã BEA50 giảm 50K đơn từ 750K
                                                            </div>
                                                        </div>
                                                        <div class="boz-right">
                                                            <button class="btn dis_copy" data-copy="BEA50">
                                                                <span>Sao chép</span>
                                                            </button>
                                                            <div class="dk_btn dk_btn_1">
                                                                <span>Điều kiện</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contet_dk contet_dk_1">
                                                    Giảm 50.000đ cho đơn hàng từ 750.000đ. Sử dụng khi khách hàng mua
                                                    lần đầu
                                                </div>
                                            </div>
                                            <div class="box-cpou-dk ">
                                                <div class="item_list_coupon">
                                                    <div class="money_coupon">
                                                        15%
                                                    </div>
                                                    <div class="content_coupon">
                                                        <div class="boz-left">
                                                            <div class="zip_coupon">
                                                                Mã giảm giá <b>BEA15</b>
                                                            </div>
                                                            <div class="noidung_coupon">
                                                                Nhập mã BEA15 giảm 15% đơn từ 1.500.000đ
                                                            </div>
                                                        </div>
                                                        <div class="boz-right">
                                                            <button class="btn dis_copy" data-copy="BEA15">
                                                                <span>Sao chép</span>
                                                            </button>
                                                            <div class="dk_btn dk_btn_2">
                                                                <span>Điều kiện</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contet_dk contet_dk_2">
                                                    Áp dụng cho các đơn hàng có tổng giá trị lớn hơn 1.500.000đ
                                                </div>
                                            </div>
                                            <div class="box-cpou-dk ">
                                                <div class="item_list_coupon">
                                                    <div class="money_coupon">
                                                        99K
                                                    </div>
                                                    <div class="content_coupon">
                                                        <div class="boz-left">
                                                            <div class="zip_coupon">
                                                                Mã giảm giá <b>BEAN99K</b>
                                                            </div>
                                                            <div class="noidung_coupon">
                                                                Nhập mã BEAN99K giảm ngay 99K
                                                            </div>
                                                        </div>
                                                        <div class="boz-right">
                                                            <button class="btn dis_copy" data-copy="BEAN99K">
                                                                <span>Sao chép</span>
                                                            </button>
                                                            <div class="dk_btn dk_btn_3">
                                                                <span>Điều kiện</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contet_dk contet_dk_3">
                                                    Đơn hàng từ 950.000đ. Chỉ áp dụng 1 mã giảm giá cho một đơn hàng.
                                                </div>
                                            </div>
                                            <div class="box-cpou-dk last-cpou">
                                                <div class="item_list_coupon">
                                                    <div class="money_coupon">
                                                        0K
                                                    </div>
                                                    <div class="content_coupon">
                                                        <div class="boz-left">
                                                            <div class="zip_coupon">
                                                                Mã giảm giá <b>FREESHIP</b>
                                                            </div>
                                                            <div class="noidung_coupon">
                                                                Nhập mã FREESHIP miễn phí vận chuyển
                                                            </div>
                                                        </div>
                                                        <div class="boz-right">
                                                            <button class="btn dis_copy" data-copy="FREESHIP">
                                                                <span>Sao chép</span>
                                                            </button>
                                                            <div class="dk_btn dk_btn_4">
                                                                <span>Điều kiện</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contet_dk contet_dk_4">
                                                    Đơn hàng từ 500.000đ. Áp dụng cho tất cả các đơn vị vận chuyển
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a title="Close" class="modalcoupon-close close-window" href="javascript:;">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                            class="svg-inline--fa fa-times fa-w-10">
                                            <path fill="currentColor"
                                                d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                                                class=""></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <script>
                                $(document).on('click', '.modalcoupon-close, #modal-coupon-product .modalcoupon-overlay, .fancybox-overlay', function (e) {
                                    $("#modal-coupon-product").fadeOut(0);
                                    awe_hidePopup();
                                });
                                $(document).ready(function ($) {
                                    var modal = $('.modalcoupon-product');
                                    var btn = $('.coupon-toggle-btn');
                                    var span = $('.modalcoupon-close');
                                    btn.click(function () {
                                        modal.show();
                                    });
                                    span.click(function () {
                                        modal.hide();
                                    });
                                    $(window).on('click', function (e) {
                                        if ($(e.target).is('.modal')) {
                                            modal.hide();
                                        }
                                    });
                                });
                                $('.dk_btn_1').click(function () {
                                    $('.contet_dk_1').slideToggle();
                                    return false;
                                });
                                $('.dk_btn_2').click(function () {
                                    $('.contet_dk_2').slideToggle();
                                    return false;
                                });
                                $('.dk_btn_3').click(function () {
                                    $('.contet_dk_3').slideToggle();
                                    return false;
                                });
                                $('.dk_btn_4').click(function () {
                                    $('.contet_dk_4').slideToggle();
                                    return false;
                                });
                                $(document).on('click', '.dis_copy', function (e) {
                                    e.preventDefault();
                                    var copyText = $(this).attr('data-copy');
                                    var copyTextarea = document.createElement("textarea");
                                    copyTextarea.textContent = copyText;
                                    document.body.appendChild(copyTextarea);
                                    copyTextarea.select();
                                    document.execCommand("copy");
                                    document.body.removeChild(copyTextarea);
                                    var cur_text = $(this).text();
                                    var $cur_btn = $(this);
                                    $(this).addClass("disabled");
                                    $(this).text("Đã lưu");
                                    $(this).parent().addClass('active');
                                    setTimeout(function () {
                                        $cur_btn.removeClass("disabled");
                                        $cur_btn.parent().removeClass('active');
                                        $cur_btn.text(cur_text);
                                    }, 2500)
                                })
                            </script>

                            <form class="add-to-cart-form" action="" method="post" class="form-inline">
                                <div class="form-product">
                                    <div class="clearfix form-group ">
                                        <div class="flex-quantity">
                                            <div class="custom custom-btn-number show">
                                                <div class="input_number_product">
                                                    <button class="btn_num num_1 button button_qty"
                                                        onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) && qtypro > 1 ) {result.value--;}return false;"
                                                        type="button">-</button>
                                                    <input type="text" id="qtym" name="quantity" value="1" maxlength="3"
                                                        class="form-control prd_quantity"
                                                        onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                        onchange="if(this.value == 0)this.value=1;">
                                                    <button class="btn_num num_2 button button_qty"
                                                        onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
                                                        type="button"><span>+</span></button>
                                                </div>
                                            </div>
                                            <div class="btn-mua button_actions clearfix">
                                                <input type="hidden" name="proID" value="<?= $product['id'] ?>">
                                                <input type="hidden" name="userID"
                                                    value="<?= $_SESSION['userm']['id'] ?? 0 ?>">
                                                <button type="submit"
                                                    class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">

                                                    Thêm vào giỏ hàng
                                                </button>
                                                <a href="<?= BASE_URL ?>?act=thanhtoan" class="buynow" title="">
                                                    Mua ngay
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script>
                                let urlAddCart = '<?= BASE_URL . '?act=cart-add' ?>';
                                $(".add-to-cart-form").submit(function (event) {
                                    event.preventDefault();
                                    // console.log("Data: ", $(this).serializeArray());
                                    $.ajax({
                                        type: "post",
                                        url: urlAddCart,
                                        data: $(this).serializeArray(),
                                        success: function (response) {
                                            response = JSON.parse(response);
                                            if (response.status == false) {
                                                alert(response.mes);
                                            } else {
                                                $('.count_itempr').load(location.href + ' .count_itempr');
                                                $('.block-cart').load(location.href + ' .block-cart');
                                                $(".popup-cart-mobile").addClass("active");
                                            }
                                        }
                                    });
                                });
                            </script>
                            <div class="chinhsach-box">
                                <div class="chinhsach-slider swiper-container">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide ">
                                            <div class="item_cs">
                                                <img width="62" height="62"
                                                    src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/chinhsach_102fb.jpg?1709175143725"
                                                    alt="Quà tặng hấp dẫn">
                                                <div class="content_cs">
                                                    <span class="title_item">Quà tặng hấp dẫn</span>
                                                    <span class="content_item">Giảm 5% đối với khách hàng mua tại cửa
                                                        hàng</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide ">
                                            <div class="item_cs">
                                                <img width="62" height="62"
                                                    src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/chinhsach_202fb.jpg?1709175143725"
                                                    alt="Cam kết chính hãng 100%">
                                                <div class="content_cs">
                                                    <span class="title_item">Cam kết chính hãng 100%</span>
                                                    <span class="content_item">Đổi trả 100% nếu sản phẩm kém chất
                                                        lượng</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide ">
                                            <div class="item_cs">
                                                <img width="62" height="62"
                                                    src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/chinhsach_302fb.jpg?1709175143725"
                                                    alt="Miễn phí vận chuyển">
                                                <div class="content_cs">
                                                    <span class="title_item">Miễn phí vận chuyển</span>
                                                    <span class="content_item">Với các đơn hàng trên 1 triệu đồng</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <script>
                                var swiper = new Swiper('.chinhsach-slider', {
                                    loop: false,
                                    spaceBetween: 24,
                                    autoplay: false,
                                    pagination: {
                                        el: '.chinhsach-slider .swiper-pagination',
                                        clickable: true
                                    },
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="content-pro">
                <div class="row row-mb3">
                    <div class="col-12 col-lg-4 col-col-md-4 col-sm-12 col-xs-12  order-lg-2">
                        <div class="product_info">

                            <div class="product-favi">
                                <a href="san-pham-noi-bat.html" title="Có thể bạn thích">
                                    <div class="title-head">
                                        Có thể bạn thích
                                    </div>
                                </a>

                                <div class="product-favi-content">
                                    <?php foreach ($products as $pro) { ?>
                                        <div class="product-view">
                                            <a class="image_thumb"
                                                href="<?= BASE_URL ?>?act=productDetail&id=<?= $pro['id'] ?>"
                                                title="<?= $pro['name'] ?>">
                                                <img width="480" height="480" class="lazyload" src="<?= $pro['img'] ?>"
                                                    data-src="<?= $pro['img'] ?>" alt="<?= $pro['name'] ?>">
                                            </a>
                                            <div class="product-info">
                                                <h3 class="product-name"><a
                                                        href="<?= BASE_URL ?>?act=productDetail&id=<?= $pro['id'] ?>"
                                                        title="Unisex Creed Millesime Imperial">
                                                        <?= $pro['name'] ?>
                                                    </a></h3>
                                                <div class="price-box">
                                                    <span class="price">
                                                        <?= $pro['price_sale'] ?>₫
                                                    </span>
                                                    <span class="compare-price">
                                                        <?= $pro['price'] ?>₫
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-col-md-8 col-sm-12 col-xs-12 order-lg-1">

                        <div class="product-tab e-tabs not-dqtab" id="tab-product">
                            <ul class="tabs tabs-title clearfix">

                                <li class="tab-link active" data-tab="#tab-1">
                                    <h3>Mô tả sản phẩm</h3>
                                </li>


                                <li class="tab-link" data-tab="#tab-2">
                                    <h3>Hướng dẫn mua hàng</h3>
                                </li>


                                <li class="tab-link" data-tab="#tab-3">
                                    <h3>Đánh giá</h3>
                                </li>

                            </ul>
                            <div class="tab-float">

                                <div id="tab-1" class="tab-content active content_extab">
                                    <div class="rte product_getcontent content_coll">
                                        <?= $product['mota'] ?>
                                        <div class="bg_cl"></div>
                                    </div>
                                    <div class="view_mores">
                                        <a class="one">Xem thêm <img width="90" height="90"
                                                src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/sortdown02fb.png?1709175143725"
                                                alt="Bean Perfume"></a>
                                        <a class="two active">Thu gọn <img width="90" height="90"
                                                src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/sortdown02fb.png?1709175143725"
                                                alt="Bean Perfume"></a>
                                    </div>

                                </div>


                                <div id="tab-2" class="tab-content content_extab">
                                    <div class="rte">

                                        <p><strong>Bước 1:</strong> Truy cập website và lựa chọn sản phẩm cần mua</p>
                                        <p><strong>Bước 2:</strong> Click và sản phẩm muốn mua, màn hình hiển thị ra pop
                                            up với các lựa chọn sau</p>
                                        <p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn
                                            thêm sản phẩm vào giỏ hàng</p>
                                        <p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng</p>
                                        <p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào: Đặt
                                            hàng và thanh toán</p>
                                        <p><strong>Bước 3:</strong> Lựa chọn thông tin tài khoản thanh toán</p>
                                        <p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và mật
                                            khẩu vào mục đã có tài khoản trên hệ thống</p>
                                        <p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các thông
                                            tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng
                                            theo dõi được đơn hàng của mình</p>
                                        <p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục đặt
                                            hàng không cần tài khoản</p>
                                        <p><strong>Bước 4:</strong> Điền các thông tin của bạn để nhận đơn hàng, lựa
                                            chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình</p>
                                        <p><strong>Bước 5:</strong> Xem lại thông tin đặt hàng, điền chú thích và gửi
                                            đơn hàng</p>
                                        <p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi điện
                                            lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
                                        <p>Trân trọng cảm ơn.</p>

                                    </div>
                                </div>


                                <div id="tab-3" class="tab-content content_extab">
                                    <div class="rte">
                                        <div id="sapo-product-reviews" class="sapo-product-reviews"
                                            data-id="<?= $product['id'] ?>">
                                            <div id="sapo-product-reviews-noitem" style="display: none;">
                                                <div class="content">
                                                    <p data-content-text="language.suggest_noitem"></p>
                                                    <div class="product-reviews-summary-actions">
                                                        <button type="button" class="btn-new-review"
                                                            onclick="BPR.newReview(this); return false;"
                                                            data-content-str="language.newreview"></button>
                                                    </div>
                                                    <div id="noitem-bpr-form_" data-id="formId" class="noitem-bpr-form"
                                                        style="display:none;">
                                                        <div class="sapo-product-reviews-form"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





                <div class="productRelate productRelate-lq">
                    <h3 class="title_module">
                        <a href="nuoc-hoa-nu.html" title="Sản phẩm liên quan">Sản phẩm liên quan</a>
                    </h3>
                    <div class="product-relate-swiper swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($products as $pro) { ?>
                                <div class="swiper-slide">
                                    <div class=" item_product_main">

                                        <form action="https://bean-perfume.mysapo.net/cart/add" method="post"
                                            class="variants product-action" data-cart-form
                                            data-id="product-actions-<?= $pro['id'] ?>" enctype="multipart/form-data">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="<?= BASE_URL ?>?act=productDetail&id=<?= $pro['id'] ?>"
                                                    title="<?= $pro['name'] ?>">
                                                    <img width="480" height="480" class="lazyload image1"
                                                        src="<?= $pro['img'] ?>" data-src="<?= $pro['img'] ?>"
                                                        alt="<?= $pro['name'] ?>">
                                                </a>
                                                <div class="action">
                                                    <input class="hidden" type="hidden" name="variantId"
                                                        value="<?= $pro['id'] ?>" />
                                                    <button class="btn-cart btn-views" title="Xem chi tiết" type="button"
                                                        onclick="window.location.href='<?= BASE_URL ?>?act=productDetail&id=<?= $pro['id'] ?>'">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-detail"></use>
                                                        </svg>
                                                    </button>
                                                    <a title="Xem nhanh"
                                                        href="<?= BASE_URL ?>?act=productDetail&id=<?= $pro['id'] ?>"
                                                        data-handle="gucci-bloom-ambrosia-di-fiori"
                                                        class="quick-view btn-views">
                                                        <svg class="icon">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xlink:href="#icon-quickview"></use>
                                                        </svg>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="smart"><?php 
                                                $price_sale = str_replace(".", "", $product['price_sale']);
                                                $price = str_replace(".", "", $product['price']);
                                                ?>
                                                <span>-<?= floor((1 - ($price_sale / $price)) * 100) ?>%
                                                </span></div> <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                                                data-wish="gucci-bloom-ambrosia-di-fiori" tabindex="0"
                                                title="Thêm vào yêu thích">
                                                <svg class="icon">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="#icon-wishlist">
                                                    </use>
                                                </svg>
                                            </a>
                                            <div class="product-info">
                                                <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                        href="<?= BASE_URL ?>?act=productDetail&id=<?= $pro['id'] ?>"
                                                        title="<?= $pro['name'] ?>">
                                                        <?= $pro['name'] ?>
                                                    </a></h3>
                                                <div class="price-box">
                                                    <?= $pro['price_sale'] ?>₫
                                                    <span class="compare-price">
                                                        <?= $pro['price'] ?>₫
                                                    </span>

                                                </div>
                                            </div>
                                            <ul class="fragrant_product">
                                                <li class="text-center">
                                                    <img width="90" height="90" class="lazyload"
                                                        src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                                        data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_6.jpg?1709175143725"
                                                        alt="Hoa nhài">
                                                    <span>Hoa nhài</span>
                                                </li>
                                                <li class="text-center">
                                                    <img width="90" height="90" class="lazyload"
                                                        src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                                        data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_2.jpg?1709175143725"
                                                        alt="Hoa đào">
                                                    <span>Hoa đào</span>
                                                </li>
                                                <li class="text-center">
                                                    <img width="90" height="90" class="lazyload"
                                                        src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                                        data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_4.jpg?1709175143725"
                                                        alt="Hoa hồng">
                                                    <span>Hoa hồng</span>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>


                <div class="section-recenview-product">
                    <div class="section_prd_feature swiper-container swiper_related recent-page-viewed">
                        <h3 class="title_module">
                            <span>Sản phẩm đã xem</span>
                        </h3>
                        <div class="sliderecenreview">
                            <div class="products product_related recent-viewed  swiper-container ">
                                <div class="swiper-wrapper"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    if (localStorage.last_viewed_products != undefined) {
                        jQuery('.recent-page-viewed').removeClass('d-none');
                        var last_viewd_pro_array = JSON.parse(localStorage.last_viewed_products);
                        var recentview_promises = [];
                        var size_pro_review = last_viewd_pro_array.length;
                        if (size_pro_review >= 14) {
                            size_pro_review = 14;
                        } else {
                            size_pro_review = last_viewd_pro_array.length;
                        }
                        if (size_pro_review < 1) {
                            jQuery('.recent-page-viewed').addClass('d-none');
                        } else {
                            jQuery('.recent-page-viewed').removeClass('d-none');
                        }
                        if (size_pro_review > 0) {
                            for (i = 0; i < size_pro_review; i++) {
                                var alias_product = last_viewd_pro_array[i];
                                if (!!alias_product.alias) {
                                    var promise = new Promise(function (resolve, reject) {
                                        $.ajax({
                                            url: '/' + alias_product.alias + '?view=viewed',
                                            success: function (product) {
                                                resolve(product);

                                                $(document).ready(function () {

                                                    var modal = $('.quickview-product');
                                                    var btn = $('.quick-view');
                                                    var span = $('.quickview-close');
                                                    favoriBean.Wishlist.wishlistProduct();
                                                    btn.click(function () {
                                                        modal.show();
                                                    });

                                                    span.click(function () {
                                                        modal.hide();
                                                    });

                                                    $(window).on('click', function (e) {
                                                        if ($(e.target).is('.modal')) {
                                                            modal.hide();
                                                        }
                                                    });
                                                });
                                            },
                                            error: function (err) {
                                                resolve('');
                                            }
                                        })
                                    });
                                    recentview_promises.push(promise);
                                }
                            }
                            Promise.all(recentview_promises).then(function (values) {
                                $.each(values, function (i, v) {
                                    if (v != '') {
                                        $('.recent-viewed .swiper-wrapper').append(v);
                                    } else {
                                        last_viewd_pro_array.splice(i, 1);
                                    }
                                });
                                setTimeout(function () {
                                    var swiper = new Swiper('.recent-viewed', {
                                        slidesPerColumnFill: 'row',
                                        direction: 'horizontal',
                                        slidesPerView: 4,
                                        spaceBetween: 20,
                                        slidesPerGroup: 1,
                                        slidesPerColumn: 1,
                                        navigation: {
                                            nextEl: '.recent-viewed .swiper-button-next',
                                            prevEl: '.recent-viewed .swiper-button-prev',
                                        },
                                        breakpoints: {
                                            280: {
                                                slidesPerView: 2,
                                                spaceBetween: 15
                                            },
                                            640: {
                                                slidesPerView: 2,
                                                spaceBetween: 15
                                            },
                                            768: {
                                                slidesPerView: 3,
                                                spaceBetween: 15
                                            },
                                            992: {
                                                slidesPerView: 4,
                                                spaceBetween: 15
                                            },
                                            1024: {
                                                slidesPerView: 4,
                                                spaceBetween: 20
                                            }
                                        }
                                    });
                                    awe_lazyloadImage();
                                }, 500);

                                localStorage.setItem('last_viewed_products', JSON.stringify(last_viewd_pro_array));
                                awe_lazyloadImage();

                            })
                                .catch(function (productId) {
                                    const listLocalStorage = (JSON.parse(localStorage.getItem('last_viewed_products')));
                                    for (let i = 0; i < listLocalStorage.length; ++i) {
                                        if (listLocalStorage[i].id == productId) {
                                            listLocalStorage.splice(i, 1);
                                        }
                                    }
                                    localStorage.setItem('last_viewed_products', JSON.stringify(listLocalStorage));
                                });
                        }
                    } else {
                        jQuery('.section-recenview-product').addClass('d-none');
                    }
                </script>

            </div>
        </div>
    </section>
    <script>
        $(document).on('click', '.buynow', function () {
            var _variantID = $('#product-selectors').val();
            var _Qty = parseInt($('#qtym').val());;
            if (_variantID == null) {
                _variantID = $('#one_variant').val();
            }
            jQuery.ajax({
                type: "POST",
                url: "/cart/add.js",
                data: "quantity=" + _Qty + "&VariantId=" + _variantID,
                dataType: "json",
                success: function (e) {
                    window.location = 'cart.html';
                },
                error: function (e, t) {
                    Bizweb.onError(e, t);
                }
            });
        })
        function activeTab(obj) {
            $('.product-tab ul li').removeClass('active');
            $(obj).addClass('active');
            var id = $(obj).attr('data-tab');
            $('.tab-content').removeClass('active');
            $(id).addClass('active');
        }

        $('.product-tab ul li').click(function () {
            activeTab(this);
            return false;
        });
        var variantsize = false;
        var ww = $(window).width();

        var selectCallback = function (variant, selector) {
            if (variant) {
                var form = jQuery('#' + selector.domIdPrefix).closest('form');
                for (var i = 0, length = variant.options.length; i < length; i++) {
                    var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
                    if (radioButton.size()) {
                        radioButton.get(0).checked = true;
                    }
                }
            }
            var addToCart = jQuery('.form-product .btn-cart.normal_button'),
                FastAddToCart = jQuery('.form-product .btn-cart.fast'),
                form = jQuery('.form-product .form-group'),
                productPrice = jQuery('.details-pro .special-price .product-price'),
                qty = jQuery('.inventory_quantity .a-stock'),
                comparePrice = jQuery('.details-pro .old-price .product-price-old'),
                comparePriceText = jQuery('.details-pro .old-price'),
                qtyBtn = jQuery('.form-product .form-group .custom-btn-number'),
                BtnSold = jQuery('.form-product .form-group .btn-mua'),
                discountLabel = jQuery('.details-pro .label_product'),
                buynow = jQuery('.form-product .buynow'),
                product_sku = jQuery('.details-product .sku-product .variant-sku');
            if (variant && variant.sku != "" && variant.sku != null) {
                product_sku.html(variant.sku);
            } else {
                product_sku.html('Đang cập nhật');
            }
            FastAddToCart.addClass('d-none');
            if (variant && variant.available) {
                if (variant.inventory_management == "bizweb") {
                    if (variant.inventory_quantity != 0) {
                        qty.html('<span class="a-stock">Còn hàng</span>');
                    } else if (variant.inventory_quantity == '') {
                        if (variant.inventory_policy == "continue") {
                            qty.html('<span class="a-stock">Còn hàng</span>');
                        } else {
                            qty.html('<span class="a-stock a-stock-out">Hết hàng</span>');
                        }
                    }
                } else {
                    qty.html('<span class="a-stock">Còn hàng</span>');
                }
                FastAddToCart.removeClass('d-none');
                addToCart.html('Thêm vào giỏ hàng').removeAttr('disabled');
                BtnSold.removeClass('btnsold');
                qtyBtn.removeClass('d-none');
                buynow.removeClass('d-none');
                if (variant.price == 0) {
                    productPrice.html('Liên hệ');
                    comparePrice.hide();
                    comparePriceText.hide();
                    form.addClass('d-none');
                    discountLabel.hide();
                } else {
                    form.removeClass('d-none');
                    productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));

                    if (variant.compare_at_price > variant.price) {
                        let save = variant.compare_at_price - variant.price
                        let savePercent = Math.ceil(save / variant.compare_at_price * 100);
                        if (savePercent >= 100) {
                            savePercent = 99;
                        }
                        if (savePercent < 1) {
                            savePercent = 1;
                        }
                        discountLabel.html(`- ${savePercent}%`).show();
                        comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
                        comparePriceText.show();
                    } else {
                        comparePrice.hide();
                        comparePriceText.hide();
                        discountLabel.hide();
                    }
                }
            } else {
                qty.html('<span class="a-stock a-stock-out">Hết hàng</span>');
                FastAddToCart.addClass('d-none');
                buynow.addClass('d-none');
                addToCart.html('<span class="txt-main">Hết hàng</span>').attr('disabled', 'disabled');
                BtnSold.addClass('btnsold');
                qtyBtn.addClass('d-none');
                discountLabel.hide();
                if (variant) {
                    if (variant.price != 0) {
                        form.removeClass('d-none');
                        productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
                        if (variant.compare_at_price > variant.price) {
                            let save = variant.compare_at_price - variant.price
                            let savePercent = Math.ceil(save / variant.compare_at_price * 100);
                            if (savePercent >= 100) {
                                savePercent = 99;
                            }
                            if (savePercent < 1) {
                                savePercent = 1;
                            }
                            discountLabel.html(`- ${savePercent}%`).show();
                            FastAddToCart.addClass('d-none');
                            buynow.addClass('d-none');
                            addToCart.html('<span class="txt-main">Hết hàng</span>').attr('disabled', 'disabled');
                            comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
                            comparePriceText.show();
                        } else {
                            comparePrice.hide();
                            comparePriceText.hide();
                            FastAddToCart.addClass('d-none');
                            addToCart.html('<span class="txt-main">Hết hàng</span>').attr('disabled', 'disabled');
                        }
                    } else {
                        productPrice.html('Liên hệ');
                        comparePrice.hide();
                        comparePriceText.hide();
                        form.addClass('d-none');
                    }
                } else {
                    productPrice.html('Liên hệ');
                    comparePrice.hide();
                    comparePriceText.hide();
                    discountLabel.hide();
                    form.addClass('d-none');
                }
            }
            /*begin variant image*/
            if (variant && variant.image) {
                var originalImage = jQuery(".gallery-thumbs img");
                var stickoriginalImage = jQuery(".nd-product-news img");
                var newImage = variant.image;
                var element = originalImage[0];
                Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
                    $('.gallery-thumbs .swiper-slide').each(function () {
                        var $this = $(this);
                        var imgThis = $this.find('img').attr('data-image');

                        if (newImageSizedSrc.split("?")[0] == imgThis.split("?")[0]) {
                            var pst = $this.attr('data-hash');
                            galleryTop.slideTo(pst, 1000, false);
                        }
                        jQuery(stickoriginalImage).attr('src', newImageSizedSrc);


                    });
                });
            }
            /*end of variant image*/
        };
        jQuery(function ($) {

            new Bizweb.OptionSelectors('product-selectors', {
                product: { "id": <?= $product['id'] ?>, "name": "<?= $product['name'] ?>", "alias": "tommy-hilfiger-tommy-girl", "vendor": "Tommy Hilfiger", "type": "<?= $product['t_name'] ?>", "content": "<p>Có bao giờ bạn tự hỏi một cô gái trẻ năng động và độc lập sẽ được mùi hương miêu tả như thế nào? Nếu chưa thì hãy mở nắp <?= $product['name'] ?>, cô gái sẽ tự hiện lên trong tưởng tượng của bạn với một mùi hương thật đẹp.</p>\n<p>Tommy Girl khá an toàn nhưng không hề nhàm chán. Với hai tầng hương đầu mang cái nhẹ nhàng của hương hoa trắng, tô điểm thêm nét tinh nghịch, tươi mới của cam chanh và một chút thanh mát của Bạc hà. Đến tầng hương cuối, cá tính của người chủ nhân được mùi hương khắc hoạ rõ nét hơn. Ấm áp, gợi cảm có lẽ là hai từ thích hợp nhất để miêu tả đối với màn kết hợp của nhóm hương Hoa và Gỗ.\"</p>\n<p><?= $product['name'] ?> đích thị là chai nước hoa dành cho những cô nàng yêu vận động. Bởi chính bản thân nó đã tự toả ra một năng lượng đặc trưng của các nàng ấy, đó là sự mạnh mẽ, bản lĩnh đầy phóng khoáng.</p>\n<p><img alt=\"Banner\" height=\"480\" src=\"//bizweb.dktcdn.net/100/503/826/products/tommy-hilfiger-tommy-girl-50ml-f.jpg?v=1701248379513\" width=\"480\" /></p>\n<p><strong>Cách sử dụng đề xuất dành cho bạn:</strong></p>\n<ul>\n<li>Nước hoa mang lại mùi hương cho cơ thể bạn thông qua việc tiếp xúc lên da và phản ứng với hơi ấm trên cơ thể của bạn. Việc được tiếp xúc với các bộ phận như cổ tay, khuỷu tay, sau tai, gáy, cổ trước là những vị trí được ưu tiên hàng đầu trong việc sử dụng nước hoa bởi sự kín đáo và thuận lợi trong việc tỏa mùi hương.</li>\n<li>Sau khi sử dụng, xịt nước hoa lên cơ thể, tránh dùng tay chà xát hoặc làm khô da bằng những vật dụng khác, điều này phá vỡ các tầng hương trong nước hoa, khiến nó có thể thay đổi mùi hương hoặc bay mùi nhanh hơn.</li>\n<li>Để chai nước hoa cách vị trí cần dùng nước hoa trong khoảng 15-20cm và xịt mạnh, dứt khoát để mật đổ phủ của nước hoa được rộng nhất, tăng độ bám tỏa trên da của bạn.</li>\n<li>Phần cổ tay được xịt nước hoa thường có nhiều tác động như lúc rửa tay, đeo vòng, đồng hồ, do đó để đảm bảo mùi hương được duy trì, bạn nên sử dụng nước hoa ở cổ tay ở tần suất nhiều hơn lúc cần thiết.</li>\n<li>Nước hoa có thể bám tốt hay không tốt tùy thuộc vào thời gian, không gian, cơ địa, chế độ sinh hoạt, ăn uống của bạn, việc sử dụng một loại nước hoa trong thời gian dài có thể khiến bạn bị quen mùi, dẫn đến hiện tượng không nhận biết được mùi hương. Mang theo nước hoa bên mình hoặc trang bị những mẫu mini tiện dụng để giúp bản thân luôn tự tin mọi lúc mọi nơi.</li></ul>\n<p>&nbsp;</p>\n<p><strong>Bảo quản nước hoa:</strong></p>\n<ul>\n<li>Nước hoa phổ thông (Designer) thường không có hạn sử dụng, ở một số Quốc gia, việc ghi chú hạn sử dụng là điều bắt buộc để hàng hóa được bán ra trên thị trường. Hạn sử dụng ở một số dòng nước hoa được chú thích từ 24 đến 36 tháng, và tính từ ngày bạn mở sản phẩm và sử dụng lần đầu tiên.</li>\n<li>Nước hoa là tổng hợp của nhiều thành phần hương liệu tự nhiên và tổng hợp, nên bảo quản nước hoa ở những nơi khô thoáng, mát mẻ, tránh nắng, nóng hoặc quá lạnh, lưu ý không để nước hoa trong cốp xe, những nơi có nhiệt độ nóng lạnh thất thường...</li></ul>", "summary": "<p>Giới tính: <?= $sex ?></p>\n<p>Xuất xứ: <?= $product['o_name'] ?></p>\n<p>Phong cách: Ngọt ngào, Gợi cảm, Mãnh liệt<br />\n<br />\n<strong>Hương đặc trưng</strong></p>\n<p>+ Hương đầu: Hoa đào,&nbsp;hoa kim ngân, bạc hà, hoa hồng</p>\n<p>+ Hương giữa: Cam,&nbsp;bạc hà, quà bưởi, quả chanh</p>\n<p>+ Hương cuối: Hoa nhài, hoa mộc lan</p>", "template_layout": "product", "available": true, "tags": ["daban_220", "huongcuoi_Hoa nhài", "huongdau_Hoa đào", "huonggiua_Cam"], "price": <?=str_replace(".", "", $product['price_sale'])?>.0000, "price_min": <?=str_replace(".", "", $product['price_sale'])?>.0000, "price_max": 10000000.0000, "price_varies": true, "compare_at_price": <?=str_replace(".", "", $product['price'])?>.0000, "compare_at_price_min": <?= $product['price'] ?>, "compare_at_price_max": 10000000.0000, "compare_at_price_varies": true, "variants": [{ "id": <?= $product['id'] ?>, "barcode": null, "sku": null, "title": "30ml", "options": ["30ml"], "option1": "30ml", "option2": null, "option3": null, "available": true, "taxable": false, "price": <?=str_replace(".", "", $product['price_sale'])?>.0000, "compare_at_price": <?=str_replace(".", "", $product['price'])?>.0000, "inventory_management": "bizweb", "inventory_policy": "deny", "inventory_quantity": 50, "weight_unit": "g", "weight": 0, "requires_shipping": true, "image": null }, { "id": 104171001, "barcode": null, "sku": null, "title": "100ml", "options": ["100ml"], "option1": "100ml", "option2": null, "option3": null, "available": true, "taxable": false, "price": 1230000, "compare_at_price": 1450000, "inventory_management": "bizweb", "inventory_policy": "deny", "inventory_quantity": 28, "weight_unit": "g", "weight": 0, "requires_shipping": true, "image": null }], "featured_image": { "src": "https://bizweb.dktcdn.net/100/503/826/products/tommy-hilfiger-tommy-girl-786135-removebg-preview.png?v=1701248377597" }, "images": [{ "src": "https://bizweb.dktcdn.net/100/503/826/products/tommy-hilfiger-tommy-girl-786135-removebg-preview.png?v=1701248377597" }, { "src": "https://bizweb.dktcdn.net/100/503/826/products/tommy-hilfiger-tommy-girl-edt-30.jpg?v=1701248378547" }, { "src": "https://bizweb.dktcdn.net/100/503/826/products/tommy-hilfiger-tommy-girl-50ml-f.jpg?v=1701248379513" }], "options": ["Dung tích"], "created_on": "2023-11-29T15:59:27", "modified_on": "2024-01-23T10:27:12", "published_on": "2023-11-28T14:29:00" },
                onVariantSelected: selectCallback,
                enableHistoryState: true
            });

            // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

            $('.selector-wrapper:eq(0)').prepend('<label>Dung tích</label>');

            // Hide selectors if we only have 1 variant and its title contains 'Default'.

            $('.selector-wrapper').css({
                'text-align': 'left',
                'margin-bottom': '15px'
            });
        });

        jQuery('.swatch :radio').change(function () {
            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
            var optionValue = jQuery(this).val();
            jQuery(this)
                .closest('form')
                .find('.single-option-selector')
                .eq(optionIndex)
                .val(optionValue)
                .trigger('change');
            $(this).closest('.swatch').find('.header .value-roperties').html(optionValue);
        });

        setTimeout(function () {
            $('.swatch .swatch-element').each(function () {
                $(this).closest('.swatch').find('.header .value-roperties').html($(this).closest('.swatch').find('input:checked').val());
            });
        }, 500);

    </script>
    <script>
        setTimeout(function () {
            var ch = $('.product_getcontent').height(),
                smore = $('.show-more');
            if (ch > 700) {
                $('.ba-text-fpt').addClass('has-height');
                smore.removeClass('d-none');
            }
        }, 200);
        $('.btn--view-more').on('click', function (e) {
            e.preventDefault();
            var $this = $(this);
            $this.parents('.product_getcontent').toggleClass('expanded');
            $('html, body').animate({ scrollTop: $('.product_getcontent').offset().top - 110 }, 'slow');
            $(this).toggleClass('active');

        });
        $('.product-tab .tab-link h3').on('click', function (e) {
            $(this).closest('.tab-link').find('.tab-content').slideToggle();
            $(this).closest('.tab-link').toggleClass('active');
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 5,
            slidesPerView: 20,
            freeMode: true,
            lazy: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            hashNavigation: true,
            slideToClickedSlide: true,
            breakpoints: {
                300: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                500: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1199: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                }
            },
            navigation: {
                nextEl: '.gallery-thumbs .swiper-button-next',
                prevEl: '.gallery-thumbs .swiper-button-prev',
            },
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 0,
            lazy: true,
            hashNavigation: true,
            thumbs: {
                swiper: galleryThumbs
            }
        });
        var swiper = new Swiper('.product-relate-swiper', {
            slidesPerColumnFill: 'row',
            direction: 'horizontal',
            slidesPerView: 4,
            spaceBetween: 20,
            slidesPerGroup: 1,
            slidesPerColumn: 1,
            navigation: {
                nextEl: '.product-relate-swiper .swiper-button-next',
                prevEl: '.product-relate-swiper .swiper-button-prev',
            },
            breakpoints: {
                280: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 15
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20
                }
            }
        });
        $(document).ready(function () {
            $("#lightgallery").lightGallery({
                thumbnail: false
            });
        });

        $(document).ready(function ($) {
            var getLimit = 20;
            var product = {
                "id": <?= $product['id'] ?>,
                "name": "<?= $product['name'] ?>",
                "alias": "tommy-hilfiger-tommy-girl",
                "vendor": "Tommy Hilfiger",
                "type": "<?= $product['t_name'] ?>",
                "summary": "<p>Giới tính: <?= $sex ?></p>\n<p>Xuất xứ: <?= $product['o_name'] ?></p>\n<p>Phong cách: Ngọt ngào, Gợi cảm, Mãnh liệt<br />\n<br />\n<strong>Hương đặc trưng</strong></p>\n<p>+ Hương đầu: Hoa đào,&nbsp;hoa kim ngân, bạc hà, hoa hồng</p>\n<p>+ Hương giữa: Cam,&nbsp;bạc hà, quà bưởi, quả chanh</p>\n<p>+ Hương cuối: Hoa nhài, hoa mộc lan</p>",
                "template_layout": "product",
                "available": true,
                "tags": ["daban_220", "huongcuoi_Hoa nhài", "huongdau_Hoa đào", "huonggiua_Cam"],
                "price": <?=str_replace(".", "", $product['price_sale'])?>.0000,
                "price_min": <?=str_replace(".", "", $product['price_sale'])?>.0000,
                "price_max": 10000000.0000, "price_varies": true,
                "compare_at_price": <?=str_replace(".", "", $product['price'])?>.0000,
                "compare_at_price_min": <?=str_replace(".", "", $product['price'])?>.0000,
                "compare_at_price_max": 10000000.0000,
                "compare_at_price_varies": true,
                "variants": [{
                    "id": <?= $product['id'] ?>,
                    "barcode": null,
                    "sku": null,
                    "title": "30ml",
                    "options": ["30ml"],
                    "option1": "30ml",
                    "option2": null,
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": <?=str_replace(".", "", $product['price_sale'])?>.0000,
                    "compare_at_price": <?=str_replace(".", "", $product['price'])?>.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 50,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": null
                },
                {
                    "id": 104171001,
                    "barcode": null,
                    "sku": null,
                    "title": "100ml",
                    "options": ["100ml"],
                    "option1": "100ml",
                    "option2": null,
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 1230000.0000,
                    "compare_at_price": 1450000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 28,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": null
                }],
                "featured_image": { "src": "<?= $product['img'] ?>" },
                "options": ["Dung tích"], "created_on": "2023-11-29T15:59:27", "modified_on": "2024-01-23T10:27:12", "published_on": "2023-11-28T14:29:00"
            };
            var alias_pro = 'tommy-hilfiger-tommy-girl';
            var array_list = [product];
            var list_viewed_pro_old = localStorage.getItem('last_viewed_products');
            var last_viewed_pro_new = "";
            if (list_viewed_pro_old == null || list_viewed_pro_old == '')
                last_viewed_pro_new = array_list;
            else {
                var list_viewed_pro_old = JSON.parse(localStorage.last_viewed_products);
                list_viewed_pro_old.splice(20, 1);
                for (i = 0; i < list_viewed_pro_old.length; i++) {
                    if (list_viewed_pro_old[i].alias == alias_pro) {
                        list_viewed_pro_old.splice(i, 1);
                        break;
                    }
                }
                list_viewed_pro_old.unshift(array_list[0]);
                last_viewed_pro_new = list_viewed_pro_old;
            }
            localStorage.setItem('last_viewed_products', JSON.stringify(last_viewed_pro_new));
            var last_viewd_pro_array = JSON.parse(localStorage.last_viewed_products);
            var recentview_promises = [];
            var size_pro_review = last_viewd_pro_array.length;
            if (size_pro_review >= 20) {
                size_pro_review = 20;
            } else {
                size_pro_review = last_viewd_pro_array.length;
            }
        });


        $('.view_mores a.one').click(function () {
            $(this).addClass('active');
            $('.view_mores a.two').removeClass('active');
            $('.content_coll').addClass('active');
            $('.bg_cl').addClass('active');
        });
        $('.view_mores a.two').click(function () {
            $(this).addClass('active');
            $('.view_mores a.one').removeClass('active');
            $('.content_coll').removeClass('active');
            $('.bg_cl').removeClass('active');
        });

        $('.reviews_details_product').click(function () {
            scrollToxx();
        })
        function scrollToxx() {
            if ($(window).width() > 767) {
                $('html, body').animate({ scrollTop: $('.product-tab.e-tabs').offset().top }, 'slow');
                $('.tab-content, .product-tab .tab-link').removeClass('active');
                $('#tab-3, .product-tab .tab-link:nth-child(3)').addClass('active');
                return false;
            } else {
                $('html, body').animate({ scrollTop: $('.product-tab.e-tabs #tab-3').offset().top }, 'slow');
                $('.product-tab.e-tabs #tab-3').addClass('active');
            }
        }
    </script>
</div>
<script>
    (function ($) { "use strict"; $.ajaxChimp = { responses: { "We have sent you a confirmation email": 0, "Please enter a valueggg": 1, "An email address must contain a single @": 2, "The domain portion of the email address is invalid (the portion after the @: )": 3, "The username portion of the email address is invalid (the portion before the @: )": 4, "This email address looks fake or invalid. Please enter a real email address": 5 }, translations: { en: null }, init: function (selector, options) { $(selector).ajaxChimp(options) } }; $.fn.ajaxChimp = function (options) { $(this).each(function (i, elem) { var form = $(elem); var email = form.find("input[type=email]"); var label = form.find("label[for=" + email.attr("id") + "]"); var settings = $.extend({ url: form.attr("action"), language: "en" }, options); var url = settings.url.replace("/post?", "/post-json?").concat("&c=?"); form.attr("novalidate", "true"); email.attr("name", "EMAIL"); form.submit(function () { var msg; function successCallback(resp) { if (resp.result === "success") { msg = "We have sent you a confirmation email"; label.removeClass("error").addClass("valid"); email.removeClass("error").addClass("valid") } else { email.removeClass("valid").addClass("error"); label.removeClass("valid").addClass("error"); var index = -1; try { var parts = resp.msg.split(" - ", 2); if (parts[1] === undefined) { msg = resp.msg } else { var i = parseInt(parts[0], 10); if (i.toString() === parts[0]) { index = parts[0]; msg = parts[1] } else { index = -1; msg = resp.msg } } } catch (e) { index = -1; msg = resp.msg } } if (settings.language !== "en" && $.ajaxChimp.responses[msg] !== undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]) { msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]] } label.html(msg); label.show(2e3); if (settings.callback) { settings.callback(resp) } } var data = {}; var dataArray = form.serializeArray(); $.each(dataArray, function (index, item) { data[item.name] = item.value }); $.ajax({ url: url, data: data, success: successCallback, dataType: "jsonp", error: function (resp, text) { console.log("mailchimp ajax submit error: " + text) } }); var submitMsg = "Submitting..."; if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language]["submit"]) { submitMsg = $.ajaxChimp.translations[settings.language]["submit"] } label.html(submitMsg).show(2e3); return false }) }); return this } })(jQuery);
</script>