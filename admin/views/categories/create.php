<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách loại hàng</li>
            <li class="breadcrumb-item"><a href="#">Thêm loại hàng</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">

                <h3 class="tile-title">Tạo mới loại hàng</h3>
                <div class="tile-body">
                    <!-- <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                                        class="fas fa-folder-plus"></i> Tạo loại hàng mới</b></a>
                        </div> -->

                    </div>
                    <form class="row" method="post">
                        <!-- <div class="form-group col-md-4">
                            <label class="control-label">ID loại hàng</label>
                            <input class="form-control" type="text">
                        </div> -->
                        <div class="form-group col-md-4">
                            <label class="control-label">Tên loại hàng</label>
                            <input name="category_name" class="form-control" type="text" required>
                        </div>
                </div>
                <button   class="btn btn-save" type="submit"  >Lưu lại</button>
                <a class="btn btn-cancel" href="/doc/table-data-table.html">Hủy bỏ</a>
            </div>

</main>