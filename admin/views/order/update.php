<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="<?= BASE_URL_ADMIN . '?act=oders' ?>">Danh sách đơn hàng</a></li>
            <li class="breadcrumb-item"><a href="#">Sửa đơn hàng</a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">

                <h3 class="tile-title">Sửa đơn hàng</h3>
                <div class="tile-body">
                    <!-- <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                                        class="fas fa-folder-plus"></i> Tạo chức vụ mới</b></a>
                        </div>

                    </div> -->
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
                    <form class="row" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-4">
                            <label class="control-label">ID Bill</label>
                            <input class="form-control" type="text" name="bi_id" disabled value="<?= $oder['bi_id'] ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Họ và tên khách hàng</label>
                            <input class="form-control" type="text" name="b_name" value="<?= $oder['b_name'] ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ</label>
                            <input class="form-control" type="text" name="b_address" value="<?= $oder['b_address'] ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Tên sản phẩm</label>
                            <input class="form-control" type="text" name="p_name" value="<?= $oder['p_name'] ?>"
                                disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ email</label>
                            <input class="form-control" type="email" name="b_email" value="<?= $oder['b_email'] ?>">
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Số điện thoại</label>
                            <input class="form-control" type="tel" name="b_tell" value="<?= $oder['b_tell'] ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Số lượng</label>
                            <input class="form-control" type="text" name="bi_quantity"
                                value="<?= $oder['bi_quantity'] ?>">
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label">Phương thức thanh toán</label>
                            <select name="role" class="form-control" id="exampleSelect2" required>
                                <option <?= ($oder['b_paymethod'] == 1) ? 'selected' : null ?> value="1">Thanh toán khi
                                    nhận hàng</option>
                                <option <?= ($oder['b_paymethod'] == 2) ? 'selected' : null ?> value="2">Thu hộ</option>
                                <option <?= ($oder['b_paymethod'] == 3) ? 'selected' : null ?> value="3">Chuyển khoản
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Loại $oder</label>
                            <select name="role" class="form-control" id="exampleSelect2" required>
                                <option <?= ($oder['b_status'] == 1) ? 'selected' : null ?> value="1">Hoàn thành</option>
                                <option <?= ($oder['b_status'] == 2) ? 'selected' : null ?> value="2">Chờ thanh toán
                                </option>
                                <option <?= ($oder['b_status'] == 3) ? 'selected' : null ?> value="3">Đang giao hàng
                                </option>
                                <option <?= ($oder['b_status'] == 4) ? 'selected' : null ?> value="4">Đã hủy</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Ghi chú</label>
                            <textarea class="form-control" name="b_note" id="b_note"><?= $oder['b_note'] ?></textarea>
                        </div>
                        <div class="form-group col-md-12"></div>
                        <button class="btn btn-save" type="submit" name="add">Cập nhật</button>
                        <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=orders' ?>">Hủy bỏ</a>
                    </form>
                </div>

            </div>

</main>