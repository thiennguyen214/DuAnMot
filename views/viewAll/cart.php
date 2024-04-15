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
                <li><strong><span>Giỏ hàng</span></strong></li>
            </ul>
        </div>
    </section>

    <section class="cartload main-cart-page main-container col1-layout">
        <div class="main container cartpcstyle">
            <div class="wrap_background_aside margin-bottom-40" style="display: inline-block;   width: 100%;">
                <?php
                if (!empty($_SESSION['cart'])) { ?>
                    <div class="row">
                        <div class="header-cart d-none">
                            <div class="title-block-page">
                                <h1 class="title_cart">
                                    <span>Giỏ hàng của bạn</span>
                                </h1>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-12 col-cart-left">
                            <div class="cart-page d-xl-block d-none">
                                <div class="drawer__inner">
                                    <div class="CartPageContainer">
                                        <form action="" method="post" novalidate class="cart ajaxcart cartpopup">
                                            <div class="cart-header-info">
                                                <div>Thông tin sản phẩm</div>
                                                <div>Đơn giá</div>
                                                <div>Số lượng</div>
                                                <div>Thành tiền</div>
                                            </div>
                                            <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                                                
                                                <?php
                                                $tong = 0;
                                                foreach ($_SESSION['cart'] as $key => $cart) { ?>
                                                    <div class="ajaxcart__row">
                                                        <div class="ajaxcart__product cart_product">
                                                            <a href="<?= BASE_URL ?>?act=productDetail&&id=<?= $cart['id'] ?>"
                                                                class="ajaxcart__product-image cart_image"
                                                                title="<?= $cart['name'] ?>"><img width="80" height="80"
                                                                    src="<?= $cart['img'] ?>" 
                                                                    alt="<?= $cart['name'] ?>"></a>
                                                            <div class="grid__item cart_info">
                                                                <div class="ajaxcart__product-name-wrapper cart_name">
                                                                    <a href="<?= BASE_URL ?>?act=productDetail&&id=<?= $cart['id'] ?>"
                                                                        class="ajaxcart__product-name h4"
                                                                        title="<?= $cart['name'] ?>"><?= $cart['name'] ?></a>
                                                                    <a class="cart__btn-remove remoc" href=""
                                                                        data-url="<?= BASE_URL . '?act=cart-del&productID=' . $cart['id'] ?>">Xóa</a>
                                                                </div>
                                                                <div class="grid">
                                                                    <div class="grid__item one-half text-right cart_prices">
                                                                        <span
                                                                            class="cart-price"><?= $cart['price_sale'] ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="grid">
                                                                    <div class="grid__item one-half cart_select">
                                                                        <div class="input-group-btn">
                                                                            <button class="sitems-count">
                                                                                <a class="dec" href=""
                                                                                    data-total="<?= $cart['quantity'] ?>"
                                                                                    data-url="<?= BASE_URL . '?act=cart-dec&productID=' . $cart['id'] ?>">-</a>
                                                                            </button>
                                                                            <input type="text" class="uptotal" maxlength="3"
                                                                                value="<?= $cart['quantity'] ?>" min="0">
                                                                            <button class="items-count">
                                                                                <a class="inc" href=""
                                                                                    data-url="<?= BASE_URL . '?act=cart-inc&productID=' . $cart['id'] ?>">+</a>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="grid">
                                                                    <div class="grid__item one-half text-right cart_prices">
                                                                        <span
                                                                            class="cart-price"><?= $tone = $cart['price_sale'] * $cart['quantity'] ?></span>
                                                                        <?php $tong += $tone ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                            <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                                                <div class="row">
                                                    <div class="col-lg-4 col-12 offset-md-8 offset-lg-8 offset-xl-8">
                                                        <div class="ajaxcart__subtotal">
                                                            <div class="cart__subtotal">
                                                                <div class="cart__col-6">Tổng tiền:</div>
                                                                <div class="text-right cart__totle"><span
                                                                        class="total-price"><?= $tong ?></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="cart__btn-proceed-checkout-dt">
                                                            <button type="button"
                                                                class="button btn btn-default cart__btn-proceed-checkout"
                                                                id="btn-proceed-checkout" title="Thanh toán">
                                                                <a href="<?= BASE_URL ?>?act=thanhtoan">Thanh
                                                                    toán</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="cart-mobile-page d-block d-xl-none">
                                <div class="CartMobileContainer">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-12 col-cart-right">
                            <form method="post" novalidate="" class="formVAT">
                                <h4>
                                    Thời gian giao hàng
                                </h4>
                                <div class="timedeli-modal">
                                    <fieldset class="input_group date_pick">
                                        <input type="text" placeholder="Chọn ngày" readonly id="date"
                                            name="attributes[shipdate]" class="date_picker" required>
                                    </fieldset>
                                    <fieldset class="input_group date_time">
                                        <select name="time" class="timeer timedeli-cta">
                                            <option selected>Chọn thời gian</option>

                                            <option value="08h00 - 12h00">08h00 - 12h00</option>
                                            <option value=" 14h00 - 18h00"> 14h00 - 18h00</option>
                                            <option value=" 19h00 - 21h00"> 19h00 - 21h00</option>
                                        </select>
                                    </fieldset>
                                </div>

                                <div class="r-bill">
                                    <div class="checkbox">
                                        <input type="hidden" name="attributes[invoice]" id="re-checkbox-bill" value='không'>
                                        <input type="checkbox" id="checkbox-bill" name="attributes[invoice]" value="có"
                                            class="regular-checkbox" />
                                        <label for="checkbox-bill" class="box"></label>
                                        <label for="checkbox-bill" class="title">Xuất hóa đơn công ty</label>
                                    </div>
                                    <div class="bill-field">
                                        <div class="form-group">
                                            <label>Tên công ty</label>
                                            <input type="text" class="form-control val-f" name="attributes[company_name]"
                                                value="" placeholder="Tên công ty">
                                        </div>
                                        <div class="form-group">
                                            <label>Mã số thuế</label>
                                            <input type="number" class="form-control val-f val-n"
                                                name="attributes[tax_code]" value="" placeholder="Mã số thuế">
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ công ty</label>
                                            <textarea class="form-control val-f" name="attributes[company_address]"
                                                placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Email nhận hoá đơn</label>
                                            <input type="email" class="form-control val-f val-email"
                                                name="attributes[invoice_email]" value="" placeholder="Email nhận hoá đơn">
                                        </div>
                                    </div>
                                </div>

                            </form>

                            <div class="clearfix"></div>
                            <div class="product-coupon__wrapper my-3">
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
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                        class="svg-inline--fa fa-chevron-right fa-w-10">
                                        <path fill="currentColor"
                                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                            class=""></path>
                                    </svg>
                                </div>
                            </div>
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
                                                    Giảm 50.000đ cho đơn hàng từ 750.000đ. Sử dụng khi khách hàng mua lần
                                                    đầu
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
                            <script>                             $(document).on('click', '.modalcoupon-close, #modal-coupon-product .modalcoupon-overlay, .fancybox-overlay', function (e) {                                 $("#modal-coupon-product").fadeOut(0);                                 awe_hidePopup();                             });                             $(document).ready(function ($) {                                 var modal = $('.modalcoupon-product');                                 var btn = $('.coupon-toggle-btn');                                 var span = $('.modalcoupon-close');                                 btn.click(function () {                                     modal.show();                                 });                                 span.click(function () {                                     modal.hide();                                 });                                 $(window).on('click', function (e) {                                     if ($(e.target).is('.modal')) {                                         modal.hide();                                     }                                 });                             });                             $('.dk_btn_1').click(function () {                                 $('.contet_dk_1').slideToggle();                                 return false;                             });                             $('.dk_btn_2').click(function () {                                 $('.contet_dk_2').slideToggle();                                 return false;                             });                             $('.dk_btn_3').click(function () {                                 $('.contet_dk_3').slideToggle();                                 return false;                             });                             $('.dk_btn_4').click(function () {                                 $('.contet_dk_4').slideToggle();                                 return false;                             });                             $(document).on('click', '.dis_copy', function (e) {                                 e.preventDefault();                                 var copyText = $(this).attr('data-copy');                                 var copyTextarea = document.createElement("textarea");                                 copyTextarea.textContent = copyText;                                 document.body.appendChild(copyTextarea);                                 copyTextarea.select();                                 document.execCommand("copy");                                 document.body.removeChild(copyTextarea);                                 var cur_text = $(this).text();                                 var $cur_btn = $(this);                                 $(this).addClass("disabled");                                 $(this).text("Đã lưu");                                 $(this).parent().addClass('active');                                 setTimeout(function () {                                     $cur_btn.removeClass("disabled");                                     $cur_btn.parent().removeClass('active');                                     $cur_btn.text(cur_text);                                 }, 2500)                             })
                            </script>
                        </div>
                    </div>

                    <?php
                } else { ?>
                    <!-- <div class="col-xl-8 col-lg-8 col-12 col-cart-left"> -->
                    <div class="cart-page d-xl-block d-none">
                        <div class="drawer__inner">
                            <div class="CartPageContainer">
                                <div class="cart--empty-message"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                        viewBox="0 0 201.387 201.387" style="enable-background:new 0 0 201.387 201.387;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M129.413,24.885C127.389,10.699,115.041,0,100.692,0C91.464,0,82.7,4.453,77.251,11.916    c-1.113,1.522-0.78,3.657,0.742,4.77c1.517,1.109,3.657,0.78,4.768-0.744c4.171-5.707,10.873-9.115,17.93-9.115    c10.974,0,20.415,8.178,21.963,19.021c0.244,1.703,1.705,2.932,3.376,2.932c0.159,0,0.323-0.012,0.486-0.034    C128.382,28.479,129.679,26.75,129.413,24.885z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M178.712,63.096l-10.24-17.067c-0.616-1.029-1.727-1.657-2.927-1.657h-9.813c-1.884,0-3.413,1.529-3.413,3.413    s1.529,3.413,3.413,3.413h7.881l6.144,10.24H31.626l6.144-10.24h3.615c1.884,0,3.413-1.529,3.413-3.413s-1.529-3.413-3.413-3.413    h-5.547c-1.2,0-2.311,0.628-2.927,1.657l-10.24,17.067c-0.633,1.056-0.648,2.369-0.043,3.439s1.739,1.732,2.97,1.732h150.187    c1.231,0,2.364-0.662,2.97-1.732S179.345,64.15,178.712,63.096z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M161.698,31.623c-0.478-0.771-1.241-1.318-2.123-1.524l-46.531-10.883c-0.881-0.207-1.809-0.053-2.579,0.423    c-0.768,0.478-1.316,1.241-1.522,2.123l-3.509,15c-0.43,1.835,0.71,3.671,2.546,4.099c1.835,0.43,3.673-0.71,4.101-2.546    l2.732-11.675l39.883,9.329l-6.267,26.795c-0.43,1.835,0.71,3.671,2.546,4.099c0.263,0.061,0.524,0.09,0.782,0.09    c1.55,0,2.953-1.062,3.318-2.635l7.045-30.118C162.328,33.319,162.176,32.391,161.698,31.623z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M102.497,39.692l-3.11-26.305c-0.106-0.899-0.565-1.72-1.277-2.28c-0.712-0.56-1.611-0.816-2.514-0.71l-57.09,6.748    c-1.871,0.222-3.209,1.918-2.988,3.791l5.185,43.873c0.206,1.737,1.679,3.014,3.386,3.014c0.133,0,0.27-0.009,0.406-0.024    c1.87-0.222,3.208-1.918,2.988-3.791l-4.785-40.486l50.311-5.946l2.708,22.915c0.222,1.872,1.91,3.202,3.791,2.99    C101.379,43.261,102.717,41.564,102.497,39.692z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M129.492,63.556l-6.775-28.174c-0.212-0.879-0.765-1.64-1.536-2.113c-0.771-0.469-1.696-0.616-2.581-0.406L63.613,46.087    c-1.833,0.44-2.961,2.284-2.521,4.117l3.386,14.082c0.44,1.835,2.284,2.964,4.116,2.521c1.833-0.44,2.961-2.284,2.521-4.117    l-2.589-10.764l48.35-11.626l5.977,24.854c0.375,1.565,1.775,2.615,3.316,2.615c0.265,0,0.533-0.031,0.802-0.096    C128.804,67.232,129.932,65.389,129.492,63.556z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M179.197,64.679c-0.094-1.814-1.592-3.238-3.41-3.238H25.6c-1.818,0-3.316,1.423-3.41,3.238l-6.827,133.12    c-0.048,0.934,0.29,1.848,0.934,2.526c0.645,0.677,1.539,1.062,2.475,1.062h163.84c0.935,0,1.83-0.384,2.478-1.062    c0.643-0.678,0.981-1.591,0.934-2.526L179.197,64.679z M22.364,194.56l6.477-126.293h143.701l6.477,126.293H22.364z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M126.292,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C136.532,79.686,131.939,75.093,126.292,75.093z M126.292,88.747c-1.883,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    c1.882,0,3.413,1.531,3.413,3.413S128.174,88.747,126.292,88.747z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M75.092,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C85.332,79.686,80.739,75.093,75.092,75.093z M75.092,88.747c-1.882,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    s3.413,1.531,3.413,3.413S76.974,88.747,75.092,88.747z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M126.292,85.333h-0.263c-1.884,0-3.413,1.529-3.413,3.413c0,0.466,0.092,0.911,0.263,1.316v17.457    c0,12.233-9.953,22.187-22.187,22.187s-22.187-9.953-22.187-22.187V88.747c0-1.884-1.529-3.413-3.413-3.413    s-3.413,1.529-3.413,3.413v18.773c0,15.998,13.015,29.013,29.013,29.013s29.013-13.015,29.013-29.013V88.747    C129.705,86.863,128.176,85.333,126.292,85.333z" />
                                            </g>
                                        </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                    </svg>
                                    <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->

                    <?php
                } ?>
            </div>
            <script>
                $(document).ready(function () {
                    $(".inc").click(function (event) {
                        event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a
                        var url = $(this).data("url"); // Lấy URL từ thuộc tính data-url
                        $.ajax({
                            type: "GET", // hoặc POST tùy theo yêu cầu của bạn
                            url: url,
                            success: function (response) {
                                response = JSON.parse(response);
                                if (response.status == 0) {
                                    alert(response.message);
                                } else {
                                    $('.cartload').load(location.href + ' .cartload');
                                    $('.block-cart').load(location.href + ' .block-cart');
                                }
                            }
                        });
                    });
                    $(".dec").click(function (event) {
                        event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a
                        var total = $(this).data("total");
                        var url = $(this).data("url"); // Lấy URL từ thuộc tính data-url
                        // console.log(total);
                        // console.log(urli);
                        $.ajax({
                            type: "GET", // hoặc POST tùy theo yêu cầu của bạn
                            url: url,
                            data: { total: total },
                            success: function (response) {
                                response = JSON.parse(response);
                                if (response.status == 0) {
                                    alert(response.message);
                                } else {
                                    $('.cartload').load(location.href + ' .cartload');
                                    $('.block-cart').load(location.href + ' .block-cart');
                                }
                            }
                        });
                    });
                    $(".remoc").click(function (event) {
                        event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a
                        var url = $(this).data("url"); // Lấy URL từ thuộc tính data-url
                        // console.log(id);
                        // console.log(url);
                        $.ajax({
                            type: "GET", // hoặc POST tùy theo yêu cầu của bạn
                            url: url,
                            // data: { id: id },
                            success: function (response) {
                                response = JSON.parse(response);
                                if (response.status == 0) {
                                    alert(response.message);
                                } else {
                                    $('.cartload').load(location.href + ' .cartload');
                                    $('.block-cart').load(location.href + ' .block-cart');
                                }
                            }
                        });
                    });
                });
            </script>
        </div>
    </section>
</div>