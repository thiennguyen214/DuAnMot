<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>
                        <?= $title ?>
                    </b>
                </a></li>

        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <!-- <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="form-add-don-hang.html" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới đơn hàng</a>
                        </div> -->
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>ID đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Đơn hàng</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>Ngày mua</th>
                                <th>Tình trạng</th>
                                <th>Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($oders as $oder) {
                                ?>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check<?= $oder['bi_id'] ?>"
                                            value="<?= $oder['bi_id'] ?>"></td>
                                    <td>
                                        <?= $oder['bi_id'] ?>
                                    </td>
                                    <td>
                                        <?= $oder['b_name'] ?>
                                    </td>
                                    <td>
                                        <?= $oder['p_name'] ?>
                                    </td>
                                    <td>
                                        <?= $oder['bi_quantity'] ?>
                                    </td>
                                    <td>
                                        <?= $oder['b_tong'] ?>
                                    </td>
                                    <td>
                                        <?= $oder['b_created'] ?>
                                    </td>
                                    <td>

                                        <?php
                                        if ($oder['b_status'] == 1) {
                                            ?>
                                            <span class="badge bg-success">
                                                <?= 'Hoàn thành' ?>
                                                <?php
                                        } else if ($oder['b_status'] == 2) {
                                            ?>
                                                    <span class="badge bg-info">
                                                    <?= 'Chờ thanh toán' ?>
                                                    <?php
                                        } else if ($oder['b_status'] == 3) { ?>
                                                            <span class="badge bg-warning">
                                                        <?= 'Đang giao hàng' ?>
                                                        <?php
                                        } else if ($oder['b_status'] == 4) { ?>
                                                                    <span class="badge bg-danger">
                                                            <?= 'Đã hủy' ?>
                                                            <?php
                                        }
                                        ?>
                                                    </span>

                                    </td>
                                    <td><a href="<?= BASE_URL_ADMIN ?>?act=oder-delete&id=<?= $oder['bi_id'] ?>"
                                            class="btn btn-primary btn-sm trash" title="Xóa"
                                            onclick="confirmDelete(event, this)"><i class="fas fa-trash-alt"></i> </a>
                                        <a href="<?= BASE_URL_ADMIN ?>?act=oder-update&id=<?= $oder['bi_id'] ?>"
                                            class="btn btn-primary btn-sm edit" title="Sửa"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>