<div class="bodywrap">
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="../index.html"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp;</span>
                </li>

                <li><strong><span>Đăng ký tài khoản</span></strong></li>

            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container ">
            <div class="wrap_background_aside  page_login">
                <div class="wrap_background_aside">
                    <div class="row">
                        <div style="    margin: auto;"
                            class="col-lg-4 col-md-6 col-sm-12 col-12 col-xl-4 offset-xl-4 offset-lg-4 offset-md-3 offset-xl-3">
                            <div class="row no-margin align-items-center" style="background: #fff;border-radius: 5px;">
                                <div class=" page-login pagecustome clearfix no-padding">
                                    <div class="wpx">

                                        <ul class="auth-block__menu-list">
                                            <li>
                                                <a href="<?= BASE_URL ?>?act=log" title="Đăng nhập">Đăng nhập</a>
                                            </li>
                                            <li class="active">
                                                <a href="<?= BASE_URL ?>?act=reg" title="Đăng ký">Đăng ký</a>
                                            </li>
                                        </ul>
                                        <h1 class="title_heads a-center"><span>Đăng ký</span></h1>
                                        <div id="login" class="section">

                                            <form method="post" action="">
                                                <!-- <input name="FormType" type="hidden" value="customer_register" /> -->
                                                <!-- <input name="utf8" type="hidden" value="true" /> -->
                                                <!-- <input type="hidden" id="Token-01f528db8dfc4a8da53b6f085c040b51"
                                                    name="Token" /> -->
                                                <div class="form-signup " style="color:red;">
                                                </div>
                                                <div class="form-signup clearfix">
                                                    <div class="row">

                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <fieldset class="form-group">
                                                                <input type="text" class="form-control form-control-lg"
                                                                    value="" name="name" placeholder="Họ Tên" required>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <fieldset class="form-group">
                                                                <input type="email"
                                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                                    class="form-control form-control-lg" value=""
                                                                    name="email" placeholder="Email" required="">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <fieldset class="form-group">
                                                                <input placeholder="Số điện thoại" type="text"
                                                                    class="form-control form-control-comment form-control-lg"
                                                                    name="tell" Required>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                            <fieldset class="form-group">
                                                                <input type="password"
                                                                    class="form-control form-control-lg" value=""
                                                                    name="pass" id="password" placeholder="Mật khẩu"
                                                                    required>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <?php if (isset($_SESSION['errors'])): ?>
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                <?php foreach ($_SESSION['errors'] as $error): ?>
                                                                    <li>
                                                                        <?= $error ?>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                        <?php unset($_SESSION['errors']); ?>
                                                    <?php endif; ?>

                                                    <div class="section">
                                                        <button type="submit" value="Đăng ký"
                                                            class="btn  btn-style btn_50">Đăng ký</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="block social-login--facebooks margin-top-15">
                                                <p class="a-center">
                                                    Hoặc đăng nhập bằng
                                                </p>
                                                <script>function loginFacebook() { var a = { client_id: "947410958642584", redirect_uri: "https://store.mysapo.net/account/facebook_account_callback", state: JSON.stringify({ redirect_url: window.location.href }), scope: "email", response_type: "code" }, b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0); window.location.href = b } function loginGoogle() { var a = { client_id: "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com", redirect_uri: "https://store.mysapo.net/account/google_account_callback", scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile", access_type: "online", state: JSON.stringify({ redirect_url: window.location.href }), response_type: "code" }, b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0); window.location.href = b } function encodeURIParams(a, b) { var c = []; for (var d in a) if (a.hasOwnProperty(d)) { var e = a[d]; null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e)) } return 0 == c.length ? "" : (b ? "?" : "") + c.join("&") }</script>
                                                <a href="javascript:void(0)" class="social-login--facebook"
                                                    onclick="loginFacebook()"><img width="129px" height="37px"
                                                        alt="facebook-login-button"
                                                        src="http://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                                                <a href="javascript:void(0)" class="social-login--google"
                                                    onclick="loginGoogle()"><img width="129px" height="37px"
                                                        alt="google-login-button"
                                                        src="http://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
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
    </section>
</div>
<script>
    (function ($) { "use strict"; $.ajaxChimp = { responses: { "We have sent you a confirmation email": 0, "Please enter a valueggg": 1, "An email address must contain a single @": 2, "The domain portion of the email address is invalid (the portion after the @: )": 3, "The username portion of the email address is invalid (the portion before the @: )": 4, "This email address looks fake or invalid. Please enter a real email address": 5 }, translations: { en: null }, init: function (selector, options) { $(selector).ajaxChimp(options) } }; $.fn.ajaxChimp = function (options) { $(this).each(function (i, elem) { var form = $(elem); var email = form.find("input[type=email]"); var label = form.find("label[for=" + email.attr("id") + "]"); var settings = $.extend({ url: form.attr("action"), language: "en" }, options); var url = settings.url.replace("/post?", "/post-json?").concat("&c=?"); form.attr("novalidate", "true"); email.attr("name", "EMAIL"); form.submit(function () { var msg; function successCallback(resp) { if (resp.result === "success") { msg = "We have sent you a confirmation email"; label.removeClass("error").addClass("valid"); email.removeClass("error").addClass("valid") } else { email.removeClass("valid").addClass("error"); label.removeClass("valid").addClass("error"); var index = -1; try { var parts = resp.msg.split(" - ", 2); if (parts[1] === undefined) { msg = resp.msg } else { var i = parseInt(parts[0], 10); if (i.toString() === parts[0]) { index = parts[0]; msg = parts[1] } else { index = -1; msg = resp.msg } } } catch (e) { index = -1; msg = resp.msg } } if (settings.language !== "en" && $.ajaxChimp.responses[msg] !== undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]) { msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]] } label.html(msg); label.show(2e3); if (settings.callback) { settings.callback(resp) } } var data = {}; var dataArray = form.serializeArray(); $.each(dataArray, function (index, item) { data[item.name] = item.value }); $.ajax({ url: url, data: data, success: successCallback, dataType: "jsonp", error: function (resp, text) { console.log("mailchimp ajax submit error: " + text) } }); var submitMsg = "Submitting..."; if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language]["submit"]) { submitMsg = $.ajaxChimp.translations[settings.language]["submit"] } label.html(submitMsg).show(2e3); return false }) }); return this } })(jQuery);
</script>