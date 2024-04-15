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
                    <strong><span>Tin tức</span></strong>
                </li>
            </ul>
        </div>
    </section>
    <div class="blog_wrapper layout-blog" itemscope itemtype="https://schema.org/Blog">
        <meta itemprop="name" content="Tin tức" />
        <meta itemprop="description" content="" />
        <div class="container">
            <h1 class="title-page" style="
              background-image: url(<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/bg_collections02fb.jpg?1709175143725);
            ">
                <span>Tin tức</span>
            </h1>
            <div class="row">
                <div class="right-content col-lg-9 col-12">
                    <div class="list-blogs">
                        <div class="row row-fix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-fix">
                                <div class="item-blog">
                                <?php
									foreach ($posts as $post) { ?>
                                    <div class="block-thumb">
                                        <a class="thumb"
                                            href="<?= BASE_URL ?>?act=chitietsp"
                                            title="5 hương nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn khó phai">
                                            <img src="<?= BASE_URL . $post['img'] ?>" height="380" width="600"
												alt="Thumb image" id="thumbimage" />
                                        </a>
                                        <p class="time-post">
                                            <span>04/12/2023</span>
                                        </p>
                                    </div>
                                    <div class="block-content">
                                        <h3>
                                            <a><?= $post['title'] ?> </a>
                                        </h3>

                                        <p><?= $post['subtitle'] ?>
                                        </p>
                                    </div>
                                    <?php } ?>
                                </div>
                                
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-fix">
                                <div class="item-blog">
                                <?php
									foreach ($posts as $post) { ?>
                                    <div class="block-thumb">
                                        <a class="thumb"
                                            href="<?= BASE_URL ?>?act=chitietsp"
                                            title="5 hương nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn khó phai">
                                            <img src="<?= BASE_URL . $post['img'] ?>" height="380" width="600"
												alt="Thumb image" id="thumbimage" />
                                        </a>
                                        <p class="time-post">
                                            <span>04/12/2023</span>
                                        </p>
                                    </div>
                                    <div class="block-content">
                                        <h3>
                                            <a><?= $post['title'] ?> </a>
                                        </h3>

                                        <p><?= $post['subtitle'] ?>
                                        </p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-fix">
                                <div class="item-blog">
                                    <div class="block-thumb">
                                        <a class="thumb" href="<?= BASE_URL ?>?act=chitietsp"
                                            title="Cách chọn nước hoa mùa hè phù hợp công sở">
                                            <img width="600" height="380" class="lazyload"
                                                src="../bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                                data-src="https://bizweb.dktcdn.net/100/503/826/articles/cach-chon-nuoc-hoa-mua-he-phu-hop-voi-phu-nu-cong-so.jpg?v=1701331847930"
                                                alt="Cách chọn nước hoa mùa hè phù hợp công sở" />
                                        </a>
                                        <p class="time-post">
                                            <span>04/12/2023</span>
                                        </p>
                                    </div>
                                    <div class="block-content">
                                        <h3>
                                            <a href="cach-chon-nuoc-hoa-mua-he-phu-hop-cong-so.html"
                                                title="Cách chọn nước hoa mùa hè phù hợp công sở">Cách chọn nước hoa mùa
                                                hè phù hợp công sở</a>
                                        </h3>

                                        <p class="justify">
                                            Dưới đây là 3 lưu ý chọn nước hoa mùa hè mà các chị em
                                            công sở nên lưu tâm. Mùa Hè đến cũng là lúc thời tiết
                                            thay đổi, trở nên oi bức với ánh nắng gay gắt, nhiệt
                                            độ cao. Chính vì thế trong khoản chọn nước hoa, các
                                            chị em cũng cần thay đổi để tìm được hương nước hoa
                                            phù hợp. Đặc biệt với các chị em công sở, làm việc
                                            trong môi trường điều hòa, phòng...
                                        </p>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-fix">
                                <div class="item-blog">
                                    <div class="block-thumb">
                                        <a class="thumb"
                                            href="<?= BASE_URL ?>?act=chitietsp"
                                            title="Louis Vuitton ra mắt nước hoa Pacific Chill lấy cảm hứng từ California">
                                            <img width="600" height="380" class="lazyload"
                                                src="../bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                                data-src="https://bizweb.dktcdn.net/100/503/826/articles/louis-vuitton-ra-mat-nuoc-hoa-pacific-chill-lay-cam-hung-tu-california.jpg?v=1701657059360"
                                                alt="Louis Vuitton ra mắt nước hoa Pacific Chill lấy cảm hứng từ California" />
                                        </a>
                                        <p class="time-post">
                                            <span>04/12/2023</span>
                                        </p>
                                    </div>
                                    <div class="block-content">
                                        <h3>
                                            <a href="louis-vuitton-ra-mat-nuoc-hoa-pacific-chill-lay-cam-hung-tu-california.html"
                                                title="Louis Vuitton ra mắt nước hoa Pacific Chill lấy cảm hứng từ California">Louis
                                                Vuitton ra mắt nước hoa Pacific Chill lấy cảm
                                                hứng từ California</a>
                                        </h3>

                                        <p class="justify">
                                            Nước hoa Pacific Chill của Louis Vuitton lấy cảm hứng
                                            từ vùng biển California, có hương thơm dịu nhẹ và được
                                            giới thiệu "giúp detox tâm hồn". Bên cạnh những dòng
                                            nước hoa biểu tượng như California Dream, Afternoon
                                            Swim, On The Beach và City of Stars, "đại gia đình"
                                            Cologne Perfumes của Louis Vuitton vừa chào đón thành
                                            viên mới - Pacific Chill. Lấy cảm hứng từ California
                                            (Los Angeles, Mỹ), bộ sưu tập Cologne Perfumes vừa
                                            khắc họa vẻ đẹp...
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-fix">
                                <div class="item-blog">
                                    <div class="block-thumb">
                                        <a class="thumb"
                                            href="<?= BASE_URL ?>?act=chitietsp"
                                            title="Thành phố nắm giữ các bí mật về hoa và hương nước hoa">
                                            <img width="600" height="380" class="lazyload"
                                                src="../bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                                data-src="https://bizweb.dktcdn.net/100/503/826/articles/thanh-pho-nam-giu-bi-mat-ve-nuoc-hoa.jpg?v=1701656505930"
                                                alt="Thành phố nắm giữ các bí mật về hoa và hương nước hoa" />
                                        </a>
                                        <p class="time-post">
                                            <span>04/12/2023</span>
                                        </p>
                                    </div>
                                    <div class="block-content">
                                        <h3>
                                            <a href="thanh-pho-nam-giu-cac-bi-mat-ve-hoa-va-huong-nuoc-hoa.html"
                                                title="Thành phố nắm giữ các bí mật về hoa và hương nước hoa">Thành phố
                                                nắm giữ các bí mật về hoa và hương nước
                                                hoa</a>
                                        </h3>

                                        <p class="justify">
                                            Hoa nhài không chỉ là một loài hoa có hương thơm nồng
                                            nàn mà tại Ấn Độ, loài hoa này còn là biểu tượng tình
                                            yêu trong Ấn Độ giáo. Hương thơm ngập tràn không khí
                                            khi những người thợ hái hoa đang thu hoạch những bông
                                            hoa nhài trắng. Những nụ hoa còn tươi sẽ được xử lý,
                                            trở thành loại nguyên liệu giá trị để chiết xuất các
                                            loại nước hoa trên khắp thế giới. Hoa nhài chỉ tỏa...
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-fix">
                                <div class="item-blog">
                                    <div class="block-thumb">
                                        <a class="thumb"
                                            href="<?= BASE_URL ?>?act=chitietsp"
                                            title="5 cách dùng nước hoa, giúp lưu giữ hương lâu trong mùa lạnh">
                                            <img width="600" height="380" class="lazyload"
                                                src="../bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                                                data-src="https://bizweb.dktcdn.net/100/503/826/articles/5-cach-dung-nuoc-hoa-giup-luu-giu-huong.jpg?v=1701655904947"
                                                alt="5 cách dùng nước hoa, giúp lưu giữ hương lâu trong mùa lạnh" />
                                        </a>
                                        <p class="time-post">
                                            <span>04/12/2023</span>
                                        </p>
                                    </div>
                                    <div class="block-content">
                                        <h3>
                                            <a href="5-cach-dung-nuoc-hoa-giup-luu-giu-huong-lau-trong-mua-lanh.html"
                                                title="5 cách dùng nước hoa, giúp lưu giữ hương lâu trong mùa lạnh">5
                                                cách dùng nước hoa, giúp lưu giữ hương lâu trong
                                                mùa lạnh</a>
                                        </h3>

                                        <p class="justify">
                                            Mùa thu đông là thời điểm lý tưởng để thể hiện phong
                                            cách và cá nhân hóa qua việc sử dụng nước hoa. Tuy
                                            nhiên, với khí hậu lạnh giá và khô hanh, việc chọn và
                                            sử dụng nước hoa trong mùa thu đông có một số yếu tố
                                            cần lưu ý để tận hưởng hương thơm lâu bền và phù hợp
                                            với môi trường xung quanh. Dưới đây là 5 mẹo giúp bạn
                                            chọn và sử dụng nước hoa...
                                        </p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="text-center">
                            <nav class="clearfix relative nav_pagi w_100">
                                <ul class="pagination clearfix">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20"
                                                viewBox="0 0 12 20" fill="none">
                                                <path
                                                    d="M11.1729 9.45117L1.92228 0.226167C1.6192 -0.0759023 1.12849 -0.0753945 0.825918 0.227729C0.523575 0.530814 0.524357 1.02179 0.827481 1.32409L9.52745 10L0.827168 18.6759C0.524083 18.9783 0.523302 19.4689 0.825605 19.7721C0.977285 19.924 1.17599 20 1.37471 20C1.57291 20 1.77084 19.9245 1.92224 19.7736L11.1729 10.5489C11.3188 10.4036 11.4008 10.206 11.4008 10C11.4008 9.7941 11.3186 9.59668 11.1729 9.45117Z"
                                                    fill="#9D9D9D" />
                                            </svg>
                                        </a>
                                    </li>

                                    <li class="active page-item disabled">
                                        <a class="page-link" href="#">1</a>
                                    </li>

                                    <!-- <li class="page-item">
                                        <a class="page-link" href="tin-tuc4658.html?page=2">2</a>
                                    </li> -->

                                    <li class="page-item hidden-xs">
                                        <a class="page-link" href="tin-tuc4658.html?page=2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20"
                                                viewBox="0 0 12 20" fill="none">
                                                <path
                                                    d="M11.1729 9.45117L1.92228 0.226167C1.6192 -0.0759023 1.12849 -0.0753945 0.825918 0.227729C0.523575 0.530814 0.524357 1.02179 0.827481 1.32409L9.52745 10L0.827168 18.6759C0.524083 18.9783 0.523302 19.4689 0.825605 19.7721C0.977285 19.924 1.17599 20 1.37471 20C1.57291 20 1.77084 19.9245 1.92224 19.7736L11.1729 10.5489C11.3188 10.4036 11.4008 10.206 11.4008 10C11.4008 9.7941 11.3186 9.59668 11.1729 9.45117Z"
                                                    fill="#9D9D9D" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="blog_left_base col-lg-3 col-12">
                    <div class="search-blog">
                        <h2 class="title-head">
                            <span>Tìm kiếm tin tức</span>
                        </h2>
                        <div class="thump-searh">
                            <form action="https://bean-perfume.mysapo.net/search" method="get"
                                class="blog-search-form input-group search-bar" role="search">
                                <input type="text" name="query" required class="input-group-field form-control"
                                    placeholder="Tìm kiếm tin tức..." autocomplete="off" />
                                <input type="hidden" name="type" value="article" />
                                <button type="submit" class="btn icon-fallback-text" aria-label="Tìm kiếm"
                                    title="Tìm kiếm">
                                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#ffffff"
                                            d="M14.1404 13.4673L19.852 19.1789C20.3008 19.6276 19.6276 20.3008 19.1789 19.852L13.4673 14.1404C12.0381 15.4114 10.1552 16.1835 8.09176 16.1835C3.6225 16.1835 0 12.5613 0 8.09176C0 3.6225 3.62219 0 8.09176 0C12.561 0 16.1835 3.62219 16.1835 8.09176C16.1835 10.1551 15.4115 12.038 14.1404 13.4673ZM0.951972 8.09176C0.951972 12.0356 4.14824 15.2316 8.09176 15.2316C12.0356 15.2316 15.2316 12.0353 15.2316 8.09176C15.2316 4.14797 12.0353 0.951972 8.09176 0.951972C4.14797 0.951972 0.951972 4.14824 0.951972 8.09176Z">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="aside-content aside-content-blog">
                        <div class="title-head">Danh mục sản phẩm</div>
                        <nav class="nav-category">
                            <ul class="nav navbar-pills">
                                <li class="nav-item relative">
                                    <a title="Nước hoa Nam" class="nav-link" href="nuoc-hoa-nam.html">Nước hoa Nam</a>
                                </li>
                                <li class="nav-item relative">
                                    <a title="Nước hoa Nữ" class="nav-link" href="nuoc-hoa-nu.html">Nước hoa Nữ</a>
                                </li>
                                <li class="nav-item relative">
                                    <a title="Nước hoa Unisex" class="nav-link" href="nuoc-hoa-unisex.html">Nước hoa
                                        Unisex</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <script>
                        $(".open_mnu").click(function () {
                            $(this).toggleClass("cls_mn").next().slideToggle();
                        });
                    </script>
                    <div class="blog_noibat">
                        <h2 class="h2_sidebar_blog">
                            <a href="tin-tuc.html" title="Tin tức nổi bật">Tin tức nổi bật</a>
                        </h2>
                        <div class="blog_content">
                            <div class="item clearfix">
                                <div class="post-thumb">
                                    <a class="image-blog scale_hover"
                                        href="5-huong-nuoc-hoa-ngot-ngao-day-tinh-te-ghi-dau-an-kho-phai.html"
                                        title="5 hương nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn khó phai">
                                        <img class="img_blog lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="https://bizweb.dktcdn.net/100/503/826/articles/5-huong-nuoc-hoa-ngot-ngao-day-tinh-te.jpg?v=1701332538430"
                                            alt="5 hương nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn khó phai" />
                                    </a>
                                </div>
                                <div class="contentright">
                                    <h3>
                                        <a title="5 hương nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn khó phai"
                                            href="5-huong-nuoc-hoa-ngot-ngao-day-tinh-te-ghi-dau-an-kho-phai.html">5
                                            hương nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn
                                            khó phai</a>
                                    </h3>
                                </div>
                            </div>

                            <div class="item clearfix">
                                <div class="post-thumb">
                                    <a class="image-blog scale_hover"
                                        href="khong-phai-toc-hay-co-day-moi-la-noi-ban-nen-xit-nuoc-hoa.html"
                                        title="Không phải tóc hay cổ, đây mới là nơi bạn nên xịt nước hoa">
                                        <img class="img_blog lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="https://bizweb.dktcdn.net/100/503/826/articles/khong-phai-toc-hay-co-day-moi-la-noi-ban-nen-xit-nuoc-hoa.jpg?v=1701654839137"
                                            alt="Không phải tóc hay cổ, đây mới là nơi bạn nên xịt nước hoa" />
                                    </a>
                                </div>
                                <div class="contentright">
                                    <h3>
                                        <a title="Không phải tóc hay cổ, đây mới là nơi bạn nên xịt nước hoa"
                                            href="khong-phai-toc-hay-co-day-moi-la-noi-ban-nen-xit-nuoc-hoa.html">Không
                                            phải tóc hay cổ, đây mới là nơi bạn nên xịt
                                            nước hoa</a>
                                    </h3>
                                </div>
                            </div>

                            <div class="item clearfix">
                                <div class="post-thumb">
                                    <a class="image-blog scale_hover"
                                        href="cach-chon-nuoc-hoa-mua-he-phu-hop-cong-so.html"
                                        title="Cách chọn nước hoa mùa hè phù hợp công sở">
                                        <img class="img_blog lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="https://bizweb.dktcdn.net/100/503/826/articles/cach-chon-nuoc-hoa-mua-he-phu-hop-voi-phu-nu-cong-so.jpg?v=1701331847930"
                                            alt="Cách chọn nước hoa mùa hè phù hợp công sở" />
                                    </a>
                                </div>
                                <div class="contentright">
                                    <h3>
                                        <a title="Cách chọn nước hoa mùa hè phù hợp công sở"
                                            href="cach-chon-nuoc-hoa-mua-he-phu-hop-cong-so.html">Cách chọn nước hoa mùa
                                            hè phù hợp công sở</a>
                                    </h3>
                                </div>
                            </div>

                            <div class="item clearfix">
                                <div class="post-thumb">
                                    <a class="image-blog scale_hover"
                                        href="louis-vuitton-ra-mat-nuoc-hoa-pacific-chill-lay-cam-hung-tu-california.html"
                                        title="Louis Vuitton ra mắt nước hoa Pacific Chill lấy cảm hứng từ California">
                                        <img class="img_blog lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="https://bizweb.dktcdn.net/100/503/826/articles/louis-vuitton-ra-mat-nuoc-hoa-pacific-chill-lay-cam-hung-tu-california.jpg?v=1701657059360"
                                            alt="Louis Vuitton ra mắt nước hoa Pacific Chill lấy cảm hứng từ California" />
                                    </a>
                                </div>
                                <div class="contentright">
                                    <h3>
                                        <a title="Louis Vuitton ra mắt nước hoa Pacific Chill lấy cảm hứng từ California"
                                            href="louis-vuitton-ra-mat-nuoc-hoa-pacific-chill-lay-cam-hung-tu-california.html">Louis
                                            Vuitton ra mắt nước hoa Pacific Chill lấy cảm
                                            hứng từ California</a>
                                    </h3>
                                </div>
                            </div>

                            <div class="item clearfix">
                                <div class="post-thumb">
                                    <a class="image-blog scale_hover"
                                        href="thanh-pho-nam-giu-cac-bi-mat-ve-hoa-va-huong-nuoc-hoa.html"
                                        title="Thành phố nắm giữ các bí mật về hoa và hương nước hoa">
                                        <img class="img_blog lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="https://bizweb.dktcdn.net/100/503/826/articles/thanh-pho-nam-giu-bi-mat-ve-nuoc-hoa.jpg?v=1701656505930"
                                            alt="Thành phố nắm giữ các bí mật về hoa và hương nước hoa" />
                                    </a>
                                </div>
                                <div class="contentright">
                                    <h3>
                                        <a title="Thành phố nắm giữ các bí mật về hoa và hương nước hoa"
                                            href="thanh-pho-nam-giu-cac-bi-mat-ve-hoa-va-huong-nuoc-hoa.html">Thành phố
                                            nắm giữ các bí mật về hoa và hương nước
                                            hoa</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ab-module-article-mostview"></div>
</div>
<script>
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
</script>