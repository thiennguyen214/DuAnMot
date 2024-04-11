<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?= BASE_URL_ADMIN . '?act=posts' ?>">Quản lý tin tức</a></li>
        <li class="breadcrumb-item"><a href="#">Sửa tin tức</a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Sửa bài viết</h3>
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
                        <label class="control-label">ID post</label>
                        <input class="form-control" type="text" name="id" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" value="<?= $posts['title'] ?>" name="name"
                            placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Subtitle</label>
                        <input class="form-control" type="text" value="<?= $posts['subtitle'] ?>" name="subname"
                            placeholder="Số lượng đã bán">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Content</label>
                        <textarea class="form-control" name="content" id="content"><?= $posts['content'] ?></textarea>
                        <script>CKEDITOR.replace('mota');</script>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Ảnh sản phẩm</label>
                        <div id="myfileupload">
                            <input type="file" id="uploadfile" name="ImageUpload" style="display: none;"
                                onchange="previewImage(this);" />
                        </div>
                        <div id="thumbbox">
                            <img src="<?= BASE_URL . $posts['img'] ?>" height="300" width="300" alt="Thumb image"
                                id="thumbimage" />
                            <a class="removeimg" href="javascript:"></a>
                        </div>
                        <div id="boxchoice">
                            <label for="uploadfile" class="Choicefile"><i class='bx bx-upload'></i> Chọn ảnh</label>
                            <p style="clear:both"></p>
                        </div>
                    </div>

                    <button class="btn btn-save" type="submit" name="add">Cập nhật</button>
                    <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=posts' ?>">Hủy bỏ</a>
                </form>
            </div>

        </div>