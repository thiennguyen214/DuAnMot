
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

                <li><strong><span>Trang khách hàng</span></strong></li>

            </ul>
        </div>
    </section>
    <section class="signup page_customer_account">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
                    <div class="block-account">
                        <h5 class="title-account">Trang tài khoản</h5>
                        <p>Xin chào, <span style="color:#ef4339;"> <?= $_SESSION['userm']['name'] ?></span>&nbsp;!</p>
                        <ul>
                            <li>
                                <a disabled="disabled" class="title-info active" href="javascript:void(0);">Thông
                                    tin tài khoản</a>
                            </li>
                            <li>
                                <a class="title-info" href="/account/orders">Đơn hàng của bạn</a>
                            </li>
                            <li>
                                <a class="title-info" href="/account/changepassword">Đổi mật khẩu</a>
                            </li>
                            <li>
                                <a class="title-info" href="/account/addresses">Sổ địa chỉ (1)</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
                    <h1 class="title-head margin-top-0">Thông tin tài khoản</h1>
                    <div class="form-signup name-account m992">
                        <p><strong>Họ tên:</strong> <?= $_SESSION['userm']['name'] ?></p>
                        <p> <strong>Email:</strong> <?= $_SESSION['userm']['email'] ?></p>

                        <p> <strong>Điện thoại:</strong> <?= $_SESSION['userm']['tell'] ?> </p>



                        <p><strong>Địa chỉ :</strong> <?= $_SESSION['userm']['address'] ?></p>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>


