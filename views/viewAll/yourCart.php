<div class="bodywrap">
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="/"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp;</span>
                </li>

                <li>
                    <a href="/account"><span>Tài khoản</span></a>
                    <span class="mr_lr"> &nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp; </span>
                </li>

                <li><strong><span>Đơn hàng </span></strong></li>


            </ul>
        </div>
    </section>
    <section class="signup page_customer_account">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 col-left-ac">
                    <div class="block-account">
                        <h5 class="title-account">Trang tài khoản</h5>
                        <p>
                            Xin chào, <span style="color:#ce0082;">TÚ TRƯƠNG</span>&nbsp;!
                        </p>
                        <ul>
                            <li>
                                <a disabled="disabled" class="title-info" href="<?= BASE_URL ?>?act=thongtintk">Thông tin tài khoản</a>
                            </li>
                            <li>
                                <a disabled="disabled" class="title-info active" href="javascript:void(0);">Đơn hàng của
                                    bạn</a>
                            </li>
                            <li>
                                <a class="title-info" href="<?= BASE_URL ?>?act=repass">Đổi mật khẩu</a>
                            </li>
                            <li>
                                <a class="title-info" href="<?= BASE_URL ?>?act=addresses">Sổ địa chỉ (3)</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-12 col-right-ac">
                    <h1 class="title-head margin-top-0">Đơn hàng của bạn</h1>

                    <div class="my-account">
                        <div class="dashboard">

                            <div class="recent-orders">
                                <div class="table-responsive-block tab-all" style="overflow-x:auto;">
                                    <table class="table table-cart table-order" id="my-orders-table">
                                        <thead class="thead-default">
                                            <tr>
                                                <th>Đơn hàng</th>
                                                <th>Ngày</th>
                                                <th>Địa chỉ</th>
                                                <th>Giá trị đơn hàng</th>
                                                <th>TT thanh toán</th>
                                                <th>TT vận chuyển</th>
                                            </tr>
                                        </thead>

                                        <tbody>


                                            <tr class="first odd">
                                                <td><a href="/account/orders/13425194" title="">#1008</a></td>
                                                <td>13/04/2024</td>
                                                <td>


                                                    Khu 10 Đại Phúc, Thành Phố Bắc Ninh, Bắc Ninh,


                                                    Thị xã Sơn Tây, Hà Nội, Vietnam <!-- Hà Nội -->

                                                </td>
                                                <td>
                                                    <span class="price">1.870.000₫</span>
                                                </td>
                                                <td>


                                                    <b class="span_pending"
                                                        style="color: #E49C06; font-weight: 600;">Chưa thanh toán</b>


                                                </td>
                                                <td>


                                                    <span class="span_">Chưa chuyển</span>


                                                </td>
                                            </tr>

                                            <tr class="first odd">
                                                <td><a href="/account/orders/13387323" title="">#1006</a></td>
                                                <td>05/04/2024</td>
                                                <td>


                                                    Khu 10 Đại Phúc, Thành Phố Bắc Ninh, Bắc Ninh,


                                                    Thị xã Sơn Tây, Hà Nội, Vietnam <!-- Hà Nội -->

                                                </td>
                                                <td>
                                                    <span class="price">745.000₫</span>
                                                </td>
                                                <td>


                                                    <b class="span_pending"
                                                        style="color: #E49C06; font-weight: 600;">Chưa thanh toán</b>


                                                </td>
                                                <td>


                                                    <span class="span_">Chưa chuyển</span>


                                                </td>
                                            </tr>

                                            <tr class="first odd">
                                                <td><a href="/account/orders/13383753" title="">#1005</a></td>
                                                <td>05/04/2024</td>
                                                <td>


                                                    Khu 10 Đại Phúc, Thành Phố Bắc Ninh, Bắc Ninh,


                                                    Quận Đống Đa, Hà Nội, Vietnam <!-- Hà Nội -->

                                                </td>
                                                <td>
                                                    <span class="price">745.000₫</span>
                                                </td>
                                                <td>


                                                    <b class="span_pending"
                                                        style="color: #E49C06; font-weight: 600;">Chưa thanh toán</b>


                                                </td>
                                                <td>


                                                    <span class="span_">Chưa chuyển</span>


                                                </td>
                                            </tr>

                                            <tr class="first odd">
                                                <td><a href="/account/orders/13383594" title="">#1004</a></td>
                                                <td>04/04/2024</td>
                                                <td>


                                                    Khu 10 Đại Phúc, Thành Phố Bắc Ninh, Bắc Ninh,


                                                    Quận Đống Đa, Hà Nội, Vietnam <!-- Hà Nội -->

                                                </td>
                                                <td>
                                                    <span class="price">745.000₫</span>
                                                </td>
                                                <td>


                                                    <b class="span_pending"
                                                        style="color: #E49C06; font-weight: 600;">Chưa thanh toán</b>


                                                </td>
                                                <td>


                                                    <span class="span_">Chưa chuyển</span>


                                                </td>
                                            </tr>

                                            <tr class="first odd">
                                                <td><a href="/account/orders/13378558" title="">#1003</a></td>
                                                <td>03/04/2024</td>
                                                <td>


                                                    Khu 10 Đại Phúc, Thành Phố Bắc Ninh, Bắc Ninh,


                                                    Quận Đống Đa, Hà Nội, Vietnam <!-- Hà Nội -->

                                                </td>
                                                <td>
                                                    <span class="price">1.840.000₫</span>
                                                </td>
                                                <td>


                                                    <b class="span_pending"
                                                        style="color: #E49C06; font-weight: 600;">Chưa thanh toán</b>


                                                </td>
                                                <td>


                                                    <span class="span_">Chưa chuyển</span>


                                                </td>
                                            </tr>


                                        </tbody>


                                    </table>

                                </div>

                                <div
                                    class="paginate-pages pull-right page-account text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>