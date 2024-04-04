<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="<?= BASE_URL_ADMIN . '?act=brands' ?>">
                <b>Danh sách thương hiệu</b></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Sửa thương hiệu</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Sửa thương hiệu</h3>
            <div class="tile-body">
            </div>
            <form class="row" method="post">
                <!-- <div class="form-group col-md-4">
                            <label hidden class="control-label">ID loại hàng</label>
                            <input hidden class="form-control" type="text">
                        </div> -->
                <div class="form-group col-md-4">
                    <label class="control-label">Tên thương hiệu</label>
                    <input name="brand_name" class="form-control" type="text" value="<?= $brand['name'] ?>" required
                        placeholder="Nhập tên thương hiệu">
                </div>
                <div class="form-group col-md-12"></div>
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=florals' ?>">Hủy bỏ</a>
            </form>
        </div>

    </div>