<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?= BASE_URL_ADMIN . '?act=posts' ?>">Quản lý tin tức</a></li>
        <li class="breadcrumb-item"><a href="#">Thêm tin tức</a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Tạo mới tin tức</h3>
            <div class="tile-body">
                <div class="row element-button">
                    <!-- <div class="col-sm-2">
                        <a href="<?= BASE_URL_ADMIN ?>?act=category-create" class="btn btn-add btn-sm"><b><i
                                    class="fas fa-folder-plus"></i> Tạo loại hàng
                                mới</b></a>
                    </div> -->

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
                <form class="row" action="" method="post" enctype="multipart/form-data">
                    <!-- <div class="form-group col-md-4">
                            <label class="control-label">ID khách hàng</label>
                            <input class="form-control" type="text" name="id" disabled>
                        </div> -->
                    <div class="form-group col-md-4">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" name="name" placeholder="Nhập tiêu đề">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Subtitle</label>
                        <input class="form-control" type="text" name="subname" placeholder="Tiêu đề phụ">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Content</label>
                        <textarea class="form-control" name="content" id="content"></textarea>
                        <script>CKEDITOR.replace('content');</script>
                    </div>


                    <div class="form-group col-md-12">
                        <label class="control-label">Ảnh sản phẩm</label>
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
                    <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=products' ?>">Hủy bỏ</a>
                </form>
            </div>

        </div>