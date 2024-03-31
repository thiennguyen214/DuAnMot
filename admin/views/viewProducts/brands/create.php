<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="<?= BASE_URL_ADMIN . '?act=brands' ?>">
                <b>Danh sách thương hiệu</b></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Thêm thương hiệu</a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Tạo mới thương hiệu</h3>
            <div class="tile-body">
            </div>
            <form class="row" method="post">
                <div class="form-group col-md-4">
                    <label class="control-label">Tên thương hiệu</label>
                    <input name="brand_name" class="form-control" type="text" required>
                </div>
                <div class="form-group col-md-12" st>
                    <label class="control-label">Ảnh Logo</label>
                    <div id="myfileuploadLogo">
                        <input type="file" id="uploadfileLogo" name="ImageUploadLogo" style="display: none;"
                            onchange="previewImage(this);" />
                    </div>
                    <div id="thumbboxLogo">
                        <img height="300" width="300" alt="Thumb image" id="thumbimageLogo" style="display: none" />
                        <a class="removeimg" href="javascript:"></a>
                    </div>
                    <div id="boxchoice">
                        <label for="uploadfileLogo" class="Choicefile"><i class='bx bx-upload'></i> Chọn ảnh</label>
                        <p style="clear:both"></p>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">Hình ảnh</label>
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
                <div class="form-group col-md-12"></div>
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=florals' ?>">Hủy bỏ</a>
            </form>
        </div>

    </div>