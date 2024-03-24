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
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="form-add-don-hang.html" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới đơn hàng</a>
                        </div>
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
                                <th>Tình trạng</th>
                                <th>Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($oders as $oder) {
                                ?>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>
                                        <?= $oder['id'] ?>
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <span class="badge bg-success">
                                            <?php
                                            if ($oder['status'] == 1) {
                                                echo 'Hoàn thành';
                                            } else if ($oder['status'] == 2) {
                                                echo 'Chờ thanh toán';
                                            } else if ($oder['status'] == 3) {
                                                echo 'Đang giao hàng';
                                            } else if ($oder['status'] == 4) {
                                                echo 'Đã hủy';
                                            }
                                            ?>
                                        </span>

                                    </td>
                                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                                                class="fas fa-trash-alt"></i> </button>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                                class="fa fa-edit"></i></button>
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