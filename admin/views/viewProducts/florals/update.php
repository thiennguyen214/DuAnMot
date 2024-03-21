<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="<?= BASE_URL_ADMIN . '?act=florals' ?>">
                <b>Danh sách hương nước hoa</b></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Sửa hương nước hoa</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Sửa hương nước hoa</h3>
            <div class="tile-body">
            </div>
            <form class="row" method="post">
                <!-- <div class="form-group col-md-4">
                            <label hidden class="control-label">ID hương nước hoa</label>
                            <input hidden class="form-control" type="text">
                        </div> -->
                <div class="form-group col-md-4">
                    <label class="control-label">Tên hương nước hoa</label>
                    <input name="floral_name" class="form-control" type="text" value="<?= $floral['name'] ?>"
                        required placeholder="Nhập tên loại nước hoa">
                </div>
        </div>
        <button class="btn btn-save" type="submit">Lưu lại</button>
        <a class="btn btn-cancel" href="<?= BASE_URL_ADMIN . '?act=categories' ?>">Hủy bỏ</a>
    </div>