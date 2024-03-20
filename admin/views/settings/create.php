<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="<?= BASE_URL_ADMIN . '?act=users' ?>">Danh sách khách hàng</a></li>
            <li class="breadcrumb-item"><a href="#">
                    <?= $title ?>
                </a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">

                <h3 class="tile-title">Tạo mới người dùng</h3>
                <div class="tile-body">
                    <!-- <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                                        class="fas fa-folder-plus"></i> Tạo chức vụ mới</b></a>
                        </div>

                    </div> -->
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
                        <!-- <div class="form-group col-md-4">
                            <label class="control-label">ID khách hàng</label>
                            <input class="form-control" type="text" name="id" disabled>
                        </div> -->
                        <div class="form-group col-md-4">
                            <label class="control-label">Họ và tên</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ email</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Password</label>
                            <input class="form-control" type="text" name="pass">
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Số điện thoại</label>
                            <input class="form-control" type="number" name="tell">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ</label>
                            <input class="form-control" type="text" name="address">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Loại User</label>
                            <select name="role" class="form-control" id="exampleSelect2" required>
                                <option value="1">Admin</option>
                                <option value="0" selected>Member</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Ảnh 3x4 khách hàng</label>
                            <div id="myfileupload">
                                <input type="file" id="uploadfile" name="ImageUpload" style="display: none;"
                                    onchange="previewImage(this);" />
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

                        <button class="btn btn-save" type="submit" name="add">Thêm mới</button>
                        <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=users' ?>">Hủy bỏ</a>
                    </form>
                </div>

            </div>

</main>