<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?= BASE_URL_ADMIN . '?act=products' ?>">Danh sách Sản Phẩm</a></li>
        <li class="breadcrumb-item"><a href="#">Chi tiết</a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Chi tiết sản phẩm</h3>
            <div class="tile-body">

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
                        <label class="control-label">ID sản phẩm</label>
                        <input class="form-control" type="text" name="id" value="<?= $products['id'] ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Tên sản phẩm</label>
                        <input class="form-control" type="text" value="<?= $products['name'] ?>" disabled name="name"
                            placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Số lượng đã bán</label>
                        <input class="form-control" type="text" value="<?= $products['so_luong_ban'] ?>" disabled
                            name="pro_db" placeholder="Số lượng đã bán">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Số lượng trong kho</label>
                        <input class="form-control" type="text" value="<?= $products['so_luong_kho'] ?>" name="pro_kho"
                            placeholder="Số lượng trong kho" disabled>
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="control-label">Giá bán</label>
                        <input class="form-control" type="number" value="<?= $products['price'] ?>" name="price"
                            placeholder="Giá tiền" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Giá sales</label>
                        <input class="form-control" type="text" name="price-sale" value="<?= $products['price_sale'] ?>"
                            placeholder="Giá sales" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Thương hiệu</label>
                        <select readonly name="brand" class="form-control" id="exampleSelect2" required disabled>
                            <option value="">-- Nhập thương hiệu --</option>
                            <?php foreach ($brands as $brand): ?>
                                <option <?= ($brand['id'] == $products['brand_id']) ? 'selected' : null ?>
                                    value="<?= $brand['id'] ?>">
                                    <?= $brand['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Loại nước hoa</label>
                        <select readonly name="category" class="form-control" id="exampleSelect2" required multipart
                            disabled>
                            <option value="">-- Nhập loại --</option>
                            <?php foreach ($categories as $category): ?>
                                <option <?= ($category['id'] == $products['type_id']) ? 'selected' : null ?>
                                    value="<?= $category['id'] ?>">
                                    <?= $category['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Xuất xứ</label>
                        <select name="origin" class="form-control" id="exampleSelect2" required disabled>
                            <option value=""> -- Nhập xuất xứ -- </option>
                            <?php foreach ($origins as $origin): ?>
                                <option <?= ($origin['id'] == $products['origin_id']) ? 'selected' : null ?> readonly
                                    value="<?= $origin['id'] ?>">
                                    <?= $origin['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div><br>

                    <div class="form-group col-md-12">
                        <label class="control-label">Mô tả sản phẩm</label>
                        <textarea class="form-control" name="mota" id="mota"
                            disabled><?= $products['mota'] ?></textarea>
                        <script>CKEDITOR.replace('mota');</script>
                    </div>


                    <div class="form-group col-md-12">
                        <label class="control-label">Ảnh sản phẩm</label>
                        <div id="thumbbox">
                            <img src="<?= BASE_URL . $products['img'] ?>" height="300" width="300" alt="Thumb image"
                                id="thumbimage" />
                            <a class="removeimg" href="javascript:"></a>
                        </div>

                    </div>

                    <!-- <button class="btn btn-save" type="submit" name="add">Cập nhật</button> -->
                    <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=products' ?>">Quay lại</a>
                </form>
            </div>

        </div>