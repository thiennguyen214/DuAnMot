<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?= BASE_URL_ADMIN . '?act=products' ?>">Danh sách Sản Phẩm</a></li>
        <li class="breadcrumb-item"><a href="#">Sửa sản phẩm</a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Sửa sản phẩm</h3>
            <div class="tile-body">
                <div class="row element-button">
                    <div class="col-sm-2">
                        <a href="<?= BASE_URL_ADMIN ?>?act=category-create" class="btn btn-add btn-sm"><b><i
                                    class="fas fa-folder-plus"></i> Tạo loại hàng
                                mới</b></a>
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
                <form class="row" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-4">
                        <label class="control-label">ID sản phẩm</label>
                        <input class="form-control" type="text" name="id" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Tên sản phẩm</label>
                        <input class="form-control" type="text" value="<?= $products['name'] ?>" name="name"
                            placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Số lượng đã bán</label>
                        <input class="form-control" type="text" value="<?= $products['so_luong_ban'] ?>" name="pro_db"
                            placeholder="Số lượng đã bán">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Số lượng trong kho</label>
                        <input class="form-control" type="text" value="<?= $products['so_luong_kho'] ?>" name="pro_kho"
                            placeholder="Số lượng trong kho">
                    </div>
                    <div class="form-group  col-md-4">
                        <label class="control-label">Giá gốc</label>
                        <input class="form-control" type="number" value="<?= (int) str_replace('.', '', $products['price']) ?>" name="price"
                            placeholder="Giá tiền">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Giá sales</label>
                        <input class="form-control" type="number" name="price-sale" value="<?= (int) str_replace('.', '', $products['price_sale']) ?>"
                            placeholder="Giá sales">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Thương hiệu</label>
                        <select name="brand" class="form-control" id="exampleSelect2" required>
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
                        <select name="category" class="form-control" id="exampleSelect2" required multipart>
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
                        <select name="origin" class="form-control" id="exampleSelect2" required>
                            <option value=""> -- Nhập xuất xứ -- </option>
                            <?php foreach ($origins as $origin): ?>
                                <option <?= ($origin['id'] == $products['origin_id']) ? 'selected' : null ?>
                                    value="<?= $origin['id'] ?>">
                                    <?= $origin['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div><br>

                    <div class="form-group col-md-12">
                        <label class="control-label">Mô tả sản phẩm</label>
                        <textarea class="form-control" name="mota" id="mota"><?= $products['mota'] ?></textarea>
                        <script>CKEDITOR.replace('mota');</script>
                    </div>


                    <div class="form-group col-md-12">
                        <label class="control-label">Ảnh sản phẩm</label>
                        <div id="myfileupload">
                            <input type="file" id="uploadfile" name="ImageUpload" style="display: none;"
                                onchange="previewImage(this);" />
                        </div>
                        <div id="thumbbox">
                            <img src="<?= BASE_URL . $products['img'] ?>" height="300" width="300" alt="Thumb image"
                                id="thumbimage" />
                            <a class="removeimg" href="javascript:"></a>
                        </div>
                        <div id="boxchoice">
                            <label for="uploadfile" class="Choicefile"><i class='bx bx-upload'></i> Chọn ảnh</label>
                            <p style="clear:both"></p>
                        </div>
                    </div>

                    <button class="btn btn-save" type="submit" name="add">Cập nhật</button>
                    <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=products' ?>">Hủy bỏ</a>
                </form>
            </div>

        </div>