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
                            <?= $countCli ?> khách hàng
                        </b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x'></i>
                <div class="info">
                    <h4>Tổng sản phẩm</h4>
                     <p><b> <!--8580 sản phẩm -->
                        <?= $countpro ?> sản phẩm
                    </b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-shopping-bag-alt'></i>
                <div class="info">
                    <h4>Tổng đơn hàng</h4>
                     <p>
                        <b>   
                        <?= $countBillStatus ?> đơn hàng
                    </b>
                </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class='icon fa-3x bx bxs-chart'></i>
                <div class="info">
                    <h4>Tổng giá các đơn hiện có</h4>
                    <p><b>
                        <?= $tong ?> đ
                        
                    </b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class='icon fa-3x bx bxs-user-badge'></i>
                <div class="info">
                    <h4>Nhân viên</h4>
                    <p><b>
                        <?= $countAd ?> nhân viên
                    </b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-tag-x'></i>
                <div class="info">
                    <h4>Hết hàng</h4>
                    <p><b>
                        <?= $countSp_het ?> sản phẩm
                    </b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class='icon fa-3x bx bxs-receipt'></i>
                <div class="info">
                    <h4>Đơn hàng hủy</h4>
                    <p><b>
                        <?= $countOrderCancle ?> đơn hàng
                    </b></p>
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
                                <th>Loại sản phẩm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sp_ban_chay as $item) :?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['price'] ?></td>
                                <td><?= $item['type_id'] ?></td>
                            </tr>
                            <?php endforeach;  ?>    
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
                    <h3 class="tile-title">TỔNG ĐƠN HÀNG</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ID đơn hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($TableSum as $bills) : ?>
                            <tr>
                                <td><?= $bills['bill_id']  ?></td>
                                <td><?= $bills['client_name']  ?></td>
                                <td><?= $bills['pr_name']  ?></td>
                                <td><?= $bills['so_luong']  ?></td>
                                <td><?= $bills['b_tong']  ?> đ</td>
                            </tr>
                            <?php endforeach; ?>
                            <tr>
                                <th colspan="4">Tổng cộng:</th>
                                <td><?=  $tong ?> đ</td>
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
                                <th>Danh mục</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($sp_het as $item_het): ?>
                            <tr>
                                <td><?= $item_het['id'] ?></td>
                                <td><?= $item_het['name'] ?></td>
                                <td><img src="<?= BASE_URL.$item_het['img'] ?>" alt="ảnh" width="100px;"></td>
                                <td><?= $item_het['so_luong_kho'] ?></td>
                                <td><span class="badge bg-danger">Hết hàng</span></td>
                                <td><?= $item_het['price'] ?></td>
                                <td><?= $item_het['type_id'] ?></td>
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
                    <h3 class="tile-title">KHÁCH HÀNG MỚI</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Địa chỉ</th>
                                <th>Ngày tạo</th>
                                <th>Email</th>
                                <th>SĐT</th>
                                <th>Chức vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($NewUser as $userN) :  ?>
                            <tr>
                                <td><?= $userN['name'] ?></td>
                                <td><?= $userN['address'] ?></td>
                                <td><?= $userN['crea'] ?></td>
                                <td><?= $userN['email'] ?></td>
                                <td><?= $userN['tell'] ?></td>
                                <td><?= ($userN['role'] == 1) ? 'Admin' : 'Member' ?></td>
                            </tr>

                            <?php endforeach;  ?>

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