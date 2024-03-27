<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="<?= BASE_URL_ADMIN . '?act=origins' ?>">
                <b>Danh sách xuất xứ</b></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Sửa xuất xứ</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Sửa xuất xứ</h3>
            <div class="tile-body">
            </div>
            <form class="row" method="post">
                <!-- <div class="form-group col-md-4">
                            <label hidden class="control-label">ID xuất xứ</label>
                            <input hidden class="form-control" type="text">
                        </div> -->
                <div class="form-group col-md-4">
                    <label class="control-label">Tên xuất xứ</label>
                    <input name="origin_name" class="form-control" type="text" value="<?= $origin['name'] ?>" required
                        placeholder="Nhập tên loại nước hoa">
                </div>
                <div class="form-group col-md-12"></div>
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=origins' ?>">Hủy bỏ</a>
            </form>
        </div>

    </div>