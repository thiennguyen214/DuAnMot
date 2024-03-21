<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="<?= BASE_URL_ADMIN . '?act=categories' ?>">
                <b>Danh sách loại hàng</b></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Sửa sản phẩm</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Sửa sản phẩm</h3>
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
                <div class="form-group col-md-4">
                    <label hidden class="control-label">ID loại hàng</label>
                    <input name="id" value="<?= $products['id'] ?>"  hidden class="form-control" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Tên sản phẩm</label>
                    <input name="name" class="form-control" type="text" value="<?= $category['name'] ?>"
                        required placeholder="Nhập tên loại nước hoa">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Số lượng đã bán</label>
                    <input name="pro_db" class="form-control" type="text" value="<?= $category['name'] ?>"
                        required placeholder="Nhập tên loại nước hoa">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Số lượng trong kho</label>
                    <input name="pro_kho" class="form-control" type="text" value="<?= $category['name'] ?>"
                        required placeholder="Nhập tên loại nước hoa">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Giá bán</label>
                    <input name="price" class="form-control" type="text" value="<?= $category['name'] ?>"
                        required placeholder="Nhập tên loại nước hoa">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Giá sale</label>
                    <input name="price-sale" class="form-control" type="text" value="<?= $category['name'] ?>"
                        required placeholder="Nhập tên loại nước hoa">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Tạo ngày</label>
                    <input name="create-day" class="form-control" type="text" value="<?= $category['name'] ?>"
                        required placeholder="Nhập tên loại nước hoa">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Sửa ngày</label>
                    <input name="update-day" class="form-control" type="text" value="<?= $category['name'] ?>"
                        required placeholder="Nhập tên loại nước hoa">
                </div>

                <div class="form-group col-md-3">
                    <label class="control-label">Thương hiệu</label>
                    <select name="brand" class="form-control" id="exampleSelect2" required>
                        <option value=""></option>
                        <?php foreach ($brands as $brand): ?>
                            <option value="<?= $brand['id'] ?>">
                                <?= $brand['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="form-group col-md-3">
                    <label class="control-label">Loại nước hoa</label>
                    <select name="category" class="form-control" id="exampleSelect2" required>
                        <option value=""></option>
                        <?php foreach ($brands as $brand): ?>
                            <option value="<?= $brand['id'] ?>">
                                <?= $brand['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="form-group col-md-3">
                    <label class="control-label">Xuất xứ</label>
                    <select name="origin" class="form-control" id="exampleSelect2" required>
                        <option value=""></option>
                        <?php foreach ($brands as $brand): ?>
                            <option value="<?= $brand['id'] ?>">
                                <?= $brand['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Mô tả</label><br>
                    <textarea name="mota" id="mota" cols="30" rows="10"></textarea>
                </div>

        </div>
        <button class="btn btn-save" type="submit">Lưu lại</button>
        <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=categories' ?>">Hủy bỏ</a>
    </div>