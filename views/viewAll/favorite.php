<div class="bodywrap">
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="<?= BASE_URL ?>"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp;</span>
                </li>

                <li>
                    <strong><span>Sản phẩm yêu thích</span></strong>
                </li>
            </ul>
        </div>
    </section>
    <section class="page">
        <div class="container container--wishlist">
            <div class="content-page rte">
                <h1 class="title-page d-none">
                    <span>Sản phẩm yêu thích</span>
                </h1>

                <div id="list-favorite">
                    <div class="list-favorite-right" data-type="wishlist">
                        <div class="list-favorite-main">
                            <div class="row row-fix">
                                <?php if (empty($favs)) { ?>
                                    <div class=" col-lg-12 col-md-12 col-sm-12 col-12 no-padding">
                                        <span style="display: block;" class="alert alert-warning">Bạn chưa có
                                            sản phẩm yêu thích nào!</span>
                                    </div>
                                <?php } else {
                                    foreach ($favs as $fav) { ?>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 col-fix">
                                            <form action="/cart/add" method="post" class="variants product-action"
                                                data-cart-form data-id="product-actions-33657819" enctype="multipart/form-data">
                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover"
                                                        href="<?= BASE_URL ?>?act=productDetail&id=<?= $fav['p_id'] ?>"
                                                        title="<?= $fav['p_name'] ?>">
                                                        <img width="480" height="480" class="lazyload image1"
                                                            src="<?= BASE_URL . $fav['p_img'] ?>"
                                                            data-src="<?= BASE_URL . $fav['p_img'] ?>" alt="Sản phẩm">
                                                    </a>
                                                    <div class="action">
                                                        <input type="hidden" name="variantId" value="104170223" />
                                                        <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ">
                                                            <svg class="icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#icon-cart"></use>
                                                            </svg>
                                                        </button>
                                                        <a title="Xem chi tiết" href="/mancera-cedrat-boise"
                                                            data-handle="mancera-cedrat-boise" class="quick-view btn-views">
                                                            <svg class="icon">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xlink:href="#icon-quickview"></use>
                                                            </svg>
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="smart"><span>-<?= floor((1 - ($fav['p_price_sale'] / $fav['p_price'])) * 100) ?>%
                                                </span></div> <a href="javascript:void(0)"
                                                    class="setWishlist btn-wishlist active"
                                                    data-wish="mancera-cedrat-boise" tabindex="0" title="Thêm vào yêu thích">
                                                    <svg class="icon">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xlink:href="#icon-wishlist"></use>
                                                    </svg>
                                                </a>
                                                <div class="product-info">
                                                    <h3 class="product-name"><a class="line-clamp line-clamp-1 text-center"
                                                            href="<?= $fav['p_name'] ?>"
                                                            title="<?= $fav['p_name'] ?>"><?= $fav['p_name'] ?></a></h3>
                                                    <div class="price-box">
                                                        <?=  number_format($fav['p_price_sale'], 0, ',', '.') ?>₫
                                                        <span class="compare-price"> <?=  number_format($fav['p_price'], 0, ',', '.') ?>₫</span>

                                                    </div>
                                                </div>
                                                <ul class="fragrant_product">
                                                    <li class="text-center">
                                                        <img width="90" height="90" class="lazyload"
                                                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy.png?1709175143725"
                                                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_10.jpg?1709175143725"
                                                            alt="Cam">
                                                        <span>Cam</span>
                                                    </li>
                                                    <li class="text-center">
                                                        <img width="90" height="90" class="lazyload"
                                                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy.png?1709175143725"
                                                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_1.jpg?1709175143725"
                                                            alt="Trái cây">
                                                        <span>Trái cây</span>
                                                    </li>
                                                    <li class="text-center">
                                                        <img width="90" height="90" class="lazyload"
                                                            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy.png?1709175143725"
                                                            data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_7.jpg?1709175143725"
                                                            alt="Gỗ">
                                                        <span>Gỗ</span>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="open-filters" class="open-filters d-lg-none d-xl-none">
            <i class="fa fa-filter"></i>
            <span>Lọc</span>
        </div>
    </section>
</div>
<!-- <script>
    (function ($) {
        "use strict";
        $.ajaxChimp = {
            responses: {
                "We have sent you a confirmation email": 0,
                "Please enter a valueggg": 1,
                "An email address must contain a single @": 2,
                "The domain portion of the email address is invalid (the portion after the @: )": 3,
                "The username portion of the email address is invalid (the portion before the @: )": 4,
                "This email address looks fake or invalid. Please enter a real email address": 5,
            },
            translations: { en: null },
            init: function (selector, options) {
                $(selector).ajaxChimp(options);
            },
        };
        $.fn.ajaxChimp = function (options) {
            $(this).each(function (i, elem) {
                var form = $(elem);
                var email = form.find("input[type=email]");
                var label = form.find("label[for=" + email.attr("id") + "]");
                var settings = $.extend(
                    { url: form.attr("action"), language: "en" },
                    options
                );
                var url = settings.url
                    .replace("/post?", "/post-json?")
                    .concat("&c=?");
                form.attr("novalidate", "true");
                email.attr("name", "EMAIL");
                form.submit(function () {
                    var msg;
                    function successCallback(resp) {
                        if (resp.result === "success") {
                            msg = "We have sent you a confirmation email";
                            label.removeClass("error").addClass("valid");
                            email.removeClass("error").addClass("valid");
                        } else {
                            email.removeClass("valid").addClass("error");
                            label.removeClass("valid").addClass("error");
                            var index = -1;
                            try {
                                var parts = resp.msg.split(" - ", 2);
                                if (parts[1] === undefined) {
                                    msg = resp.msg;
                                } else {
                                    var i = parseInt(parts[0], 10);
                                    if (i.toString() === parts[0]) {
                                        index = parts[0];
                                        msg = parts[1];
                                    } else {
                                        index = -1;
                                        msg = resp.msg;
                                    }
                                }
                            } catch (e) {
                                index = -1;
                                msg = resp.msg;
                            }
                        }
                        if (
                            settings.language !== "en" &&
                            $.ajaxChimp.responses[msg] !== undefined &&
                            $.ajaxChimp.translations &&
                            $.ajaxChimp.translations[settings.language] &&
                            $.ajaxChimp.translations[settings.language][
                            $.ajaxChimp.responses[msg]
                            ]
                        ) {
                            msg =
                                $.ajaxChimp.translations[settings.language][
                                $.ajaxChimp.responses[msg]
                                ];
                        }
                        label.html(msg);
                        label.show(2e3);
                        if (settings.callback) {
                            settings.callback(resp);
                        }
                    }
                    var data = {};
                    var dataArray = form.serializeArray();
                    $.each(dataArray, function (index, item) {
                        data[item.name] = item.value;
                    });
                    $.ajax({
                        url: url,
                        data: data,
                        success: successCallback,
                        dataType: "jsonp",
                        error: function (resp, text) {
                            console.log("mailchimp ajax submit error: " + text);
                        },
                    });
                    var submitMsg = "Submitting...";
                    if (
                        settings.language !== "en" &&
                        $.ajaxChimp.translations &&
                        $.ajaxChimp.translations[settings.language] &&
                        $.ajaxChimp.translations[settings.language]["submit"]
                    ) {
                        submitMsg =
                            $.ajaxChimp.translations[settings.language]["submit"];
                    }
                    label.html(submitMsg).show(2e3);
                    return false;
                });
            });
            return this;
        };
    })(jQuery);
</script> -->