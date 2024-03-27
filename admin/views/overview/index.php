<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><b>Báo cáo doanh thu </b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class='icon  bx bxs-user fa-3x'></i>
                <div class="info">
                    <h4>Tổng Khách Hàng</h4>
                    <p><b>
                            <?= $countcl ?> khách hàng
                        </b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x'></i>
                <div class="info">
                    <h4>Tổng sản phẩm</h4>
                    <p><b>
                    <?= $countsp ?> sản phẩm
                    </b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-shopping-bag-alt'></i>
                <div class="info">
                    <h4>Tổng đơn hàng</h4>
                    <p><b>457 đơn hàng</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class='icon fa-3x bx bxs-chart'></i>
                <div class="info">
                    <h4>Tổng thu nhập</h4>
                    <p><b>104.890.000 đ</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class='icon fa-3x bx bxs-user-badge'></i>
                <div class="info">
                    <h4>Tài khoản nhân viên</h4>
                    <p><b>
                    <?= $countad ?> nhân viên
                    </b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-tag-x'></i>
                <div class="info">
                    <h4>Hết hàng</h4>
                    <p><b>
                        <?= $sp_da_het ?> sản phẩm
                    </b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class='icon fa-3x bx bxs-receipt'></i>
                <div class="info">
                    <h4>Đơn hàng hủy</h4>
                    <p><b>2 đơn hàng</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">SẢN PHẨM BÁN CHẠY</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Số lượng đã bán</th>
                            </tr>
                        </thead>
                        <?php foreach( $hang_ban_chay as $hang ) :?>
                        <tbody>
                            <tr>
                                <td><?= $hang['id'] ?></td>
                                <td><?= $hang['name'] ?></td>
                                <td><?= $hang['price'] ?></td>
                                <td><?= $hang['so_luong_ban'] ?></td>
                        </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">TỔNG ĐƠN HÀNG</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ID đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Đơn hàng</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MD0837</td>
                                <td>Triệu Thanh Phú</td>
                                <td>Ghế làm việc Zuno, Bàn ăn gỗ Theresa</td>
                                <td>2 sản phẩm</td>
                                <td>9.400.000 đ</td>

                            <tr>
                                <th colspan="4">Tổng cộng:</th>
                                <td>104.890.000 đ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">SẢN PHẨM ĐÃ HẾT</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th>Giá tiền</th>
                                <th>Loại</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $hang_da_het as $hh ) :?>
                            <tr>
                                <td><?= $hh['id'] ?></td>
                                <td><?= $hh['name'] ?></td>
                                <td><img src="<?= BASE_URL. $hh['img'] ?>" alt="" width="100px;"></td>
                                <td><?= $hh['so_luong_kho'] ?></td>
                                <td><span class="badge bg-danger">Hết hàng</span></td>
                                <td><?= $hh['price'] ?></td>
                                <td><?= $hh['type_id'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">NHÂN VIÊN MỚI</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Địa chỉ</th>
                                <th>Ngày sinh</th>
                                <th>Giới tính</th>
                                <th>SĐT</th>
                                <th>Chức vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hồ Thị Thanh Ngân</td>
                                <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                                <td>12/02/1999</td>
                                <td>Nữ</td>
                                <td>0926737168</td>
                                <td>Bán hàng</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">DỮ LIỆU HÀNG THÁNG</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">THỐNG KÊ DOANH SỐ</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="text-right" style="font-size: 12px">
        <p><b>Hệ thống quản lý V2.0 | Code by Trường</b></p>
    </div>
</main>