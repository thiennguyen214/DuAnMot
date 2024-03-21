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
        </div>
        <button class="btn btn-save" type="submit">Lưu lại</button>
        <a class="btn btn-cancel" href="/doc/table-data-table.html">Hủy bỏ</a>
    </div>