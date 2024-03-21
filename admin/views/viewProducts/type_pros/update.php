<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="<?= BASE_URL_ADMIN . '?act=categories' ?>">
                <b>Danh sách loại hàng</b></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Sửa loại hàng</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Sửa loại hàng</h3>
            <div class="tile-body">
            </div>
            <?php if (isset ($_SESSION['errors'])): ?>
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
            <form class="row" method="post">
                <!-- <div class="form-group col-md-4">
                            <label hidden class="control-label">ID loại hàng</label>
                            <input hidden class="form-control" type="text">
                        </div> -->
                <div class="form-group col-md-4">
                    <label class="control-label">Tên loại hàng</label>
                    <input name="category_name" class="form-control" type="text" value="<?= $category['name'] ?>"
                        required placeholder="Nhập tên loại nước hoa">
                </div>
        </div>
        <button class="btn btn-save" type="submit">Lưu lại</button>
        <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=categories' ?>">Hủy bỏ</a>
    </div>