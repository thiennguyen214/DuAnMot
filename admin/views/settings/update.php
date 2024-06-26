<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="<?= BASE_URL_ADMIN . '?act=settings' ?>">Danh sách Setting</a></li>
            <li class="breadcrumb-item"><a href="#">
                    <?= $title ?>
                </a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">

                <h3 class="tile-title">Tạo mới setting</h3>
                <div class="tile-body">

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
                    <form class="row" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-4">
                            <label class="control-label">Trường dữ liệu</label>
                            <input class="form-control" type="text" name="key" value="<?= $setting['key'] ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Dữ liệu</label>
                            <input class="form-control" type="text" name="value" value="<?= $setting['value'] ?>">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="control-label">Ảnh sản phẩm</label>
                            <div id="myfileupload">
                                <input type="file" id="uploadfile" name="ImageUpload" style="display: none;"
                                    onchange="previewImage(this);" multiple />
                            </div>
                            <div id="thumbbox">
                            <img height="300" width="300" alt="Thumb image" id="thumbimage" style="display: none" />
                            <a class="removeimg" href="javascript:"></a>
                        </div>
                        <div id="boxchoice">
                            <label for="uploadfile" class="Choicefile"><i class='bx bx-upload'></i> Chọn ảnh</label>
                            <p style="clear:both"></p>
                        </div>
                    </div>

                        <button class="btn btn-save" type="submit" name="add">Cập nhật</button>
                        <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=settings' ?>">Hủy bỏ</a>
                    </form>
                </div>

            </div>

</main>