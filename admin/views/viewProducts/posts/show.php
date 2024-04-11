<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?= BASE_URL_ADMIN . '?act=posts' ?>">Quản lý bài viết</a></li>
        <li class="breadcrumb-item"><a href="#">Chi tiết</a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Chi tiết bài viết</h3>
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
                        <label class="control-label">ID bài viết</label>
                        <input class="form-control" type="text" name="id" value="<?= $posts['id'] ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" value="<?= $posts['title'] ?>" disabled name="name"
                            placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Subtitle</label>
                        <input class="form-control" type="text" value="<?= $posts['subtitle'] ?>" disabled
                            name="subname" placeholder="Số lượng đã bán">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Content</label>
                        <textarea class="form-control" name="content" id="content"
                            disabled><?= $posts['content'] ?></textarea>
                        <script>CKEDITOR.replace('content');</script>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Ảnh sản phẩm</label>
                        <div id="thumbbox">
                            <img src="<?= BASE_URL . $posts['img'] ?>" height="300" width="300" alt="Thumb image"
                                id="thumbimage" />
                            <a class="removeimg" href="javascript:"></a>
                        </div>

                    </div>

                    <!-- <button class="btn btn-save" type="submit" name="add">Cập nhật</button> -->
                    <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=products' ?>">Quay lại</a>
                </form>
            </div>

        </div>