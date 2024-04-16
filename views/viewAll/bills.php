<!-- Begin checkout custom css -->

<!-- End checkout custom css -->

<body data-no-turbolink>
    <div class="content">
        <form>
            <div class="wrap wrap--mobile-fluid">
                <main class="main main--nosidebar">
                    <header class="main__header">
                        <div class="logo logo--center">

                            <a href="/">
                                <img class="logo__image  logo__image--medium " alt="Bean Perfume"
                                    src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/checkout_logo.png.webp" />
                            </a>

                        </div>
                    </header>
                    <div class="main__content">
                        <article class="row">
                            <div class="col col--primary">
                                <section class="section section--icon-heading">
                                    <!-- <div class="section__icon unprintable">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                                            <g fill="none" stroke="#8EC343" stroke-width="2">
                                                <circle cx="36" cy="36" r="35"
                                                    style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;">
                                                </circle>
                                                <path d="M17.417,37.778l9.93,9.909l25.444-25.393"
                                                    style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                            </g>
                                        </svg>
                                    </div> -->
                                    <div class="thankyou-message-container">
                                        <h2 class="section__title">Cảm ơn bạn đã đặt hàng</h2>

                                        <p class="section__text">
                                            Một email xác nhận đã được gửi tới <?= $bill['email'] ?>. <br />
                                            Xin vui lòng kiểm tra email của bạn
                                        </p>


                                    </div>
                                </section>
                            </div>
                            <div class="col col--secondary">
                                <aside class="order-summary order-summary--bordered order-summary--is-collapsed"
                                    id="order-summary">
                                    <div class="order-summary__header">
                                        <div class="order-summary__title">
                                            Đơn hàng #100<?= $bill['id'] ?>
                                            <span class="unprintable">(<?= $bill['total'] ?>)</span>
                                        </div>
                                        <div class="order-summary__action hide-on-desktop unprintable">
                                            <a data-toggle="#order-summary"
                                                data-toggle-class="order-summary--is-collapsed" class="expandable">
                                                Xem chi tiết
                                            </a>
                                        </div>
                                    </div>
                                    <div class="order-summary__sections">
                                        <div
                                            class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
                                            <table class="product-table">
                                                <tbody>

                                                        <?php
                                                        $tong = 0;
                                                        foreach ($orders as $oder) {?>
                                                    <tr class="product">
                                                        <td class="product__image">
                                                            <div class="product-thumbnail">
                                                                <div class="product-thumbnail__wrapper">
                                                                    <img src="//bizweb.dktcdn.net/thumb/thumb/100/503/826/products/tommy-hilfiger-tommy-girl-786135-removebg-preview.png?v=1701248377597"
                                                                        alt="" class="product-thumbnail__image" />
                                                                </div>
                                                                <span
                                                                    class="product-thumbnail__quantity "><?= $oder['quantity'] ?></span>
                                                            </div>
                                                        </td>
                                                        <th class="product__description">
                                                            <span class="product__description__name"><?= $oder['p_name'] ?></span>

                                                            <span class="product__description__property">30ml</span>


                                                        </th>
                                                        <td class="product__quantity printable-only">
                                                            x 1
                                                        </td>
                                                        <td class="product__price">

                                                        <?= number_format($ton = $oder['price']*$oder['quantity']) ?>₫

                                                        </td>
                                                        
                                                    </tr>
                                                    <?php  $tong += $ton; }?>

                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="order-summary__section">
                                            <table class="total-line-table">
                                                <tbody class="total-line-table__tbody">
                                                    <tr class="total-line payment-due">
                                                        <th class="total-line__name">
                                                            <span class="payment-due__label-total">Tổng cộng</span>
                                                        </th>
                                                        <td class="total-line__price">
                                                            <span class="payment-due__price"><?= number_format($bill['tong']) ?>đ</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col col--primary">
                                <section class="section">
                                    <div class="section__content section__content--bordered">

                                        <div class="row">

                                            <div class="col col--md-five">
                                                <h2>Thông tin mua hàng</h2>
                                                <p><?= $bill['name'] ?></p>

                                                <p><?= $bill['email'] ?></p>


                                                <p><?= $bill['tell'] ?></p>

                                            </div>

                                            <div class="col col--md-two">
                                                <h2>Địa chỉ nhận hàng</h2>
                                                <p><?= $bill['name'] ?></p>

                                                <p><?= $bill['address'] ?></p>



                                                <p>Phường Láng Thượng, Quận Đống Đa, Hà Nội</p>


                                                <p><?= $bill['tell'] ?></p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col--md-two">
                                                <h2>Phương thức thanh toán</h2>
                                                <p>Thu hộ</p>
                                            </div>
                                            <div class="col col--md-two">
                                                <h2>Phương thức vận chuyển</h2>
                                                <p>Giao hàng tận nơi</p>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                <section class="section unprintable">
                                    <div class="field__input-btn-wrapper field__input-btn-wrapper--floating">
                                        <a href="<?= BASE_URL ?>/" class="btn btn--large">Tiếp tục mua
                                            hàng</a>
                                        <span class="text-icon-group text-icon-group--large icon-print"
                                            onclick="window.print()">
                                            <i class="fa fa-print"></i>
                                            <span>In </span>
                                        </span>
                                    </div>
                                </section>
                            </div>
                        </article>
                    </div>

                </main>
            </div>
        </form>
    </div>
</body>

</html>