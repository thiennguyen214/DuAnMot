<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="<?= BASE_URL_ADMIN . '?act=florals' ?>">
                <b>Danh sách hương nước hoa</b></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Thêm hương nước hoa</a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Tạo mới hương nước hoa</h3>
            <div class="tile-body">
            </div>
            <form class="row" method="post">
                <div class="form-group col-md-4">
                    <label class="control-label">Tên hương nước hoa</label>
                    <input name="floral_name" class="form-control" type="text" required>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">Ảnh sản phẩm</label>
                    <div id="myfileupload">
                        <input type="file" id="uploadfile" name="ImageUpload[]" style="display: none;"
                            onchange="previewImage(this);" multiple />
                    </div>
                    <div id="thumbbox">
                        <img alt="Thumb image" id="thumbimage" style="display: none" />
                        <a class="removeimg" href="javascript:"></a>
                    </div>
                    <div id="boxchoice">
                        <label for="uploadfile" class="Choicefile"><i class='bx bx-upload'></i> Chọn ảnh</label>
                        <p style="clear:both"></p>
                    </div>
                </div>
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=florals' ?>">Hủy bỏ</a>
            </form>
        </div>

    </div>