<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách loại hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="<?= BASE_URL_ADMIN ?>?act=category-create"
                                title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới loại hàng</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                        border="0" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th width="200">ID loại hàng</th>
                                <th width="350">Tên loại hàng</th>
                                <!-- <th>Ngày sinh</th> -->
                                <!-- <th>Giới tính</th> -->
                                <th width="100">Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($categories as $category) {
                                ?>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>
                                        <?= $category['id'] ?>
                                    </td>
                                    <td>
                                        <?= $category['name'] ?>
                                    </td>

                                    <td class="table-td-center">
                                        <a href="<?= BASE_URL_ADMIN ?>?act=category-detail&id=<?= $category['id'] ?>"
                                            class="btn btn-primary btn-sm trash" type="button" title="Show"
                                            onclick="myFunction(this)"><i class="btn btn-info"></i>
                                        </a>

                                        <a href="<?= BASE_URL_ADMIN ?>?act=category-delete&id=<?= $category['id'] ?>"
                                            class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                            onclick="return confirm('Bạn có chắc chắn xóa không?')"
                                            onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                                        </a>

                                        <a href="<?= BASE_URL_ADMIN ?>?act=category-update&id=<?= $category['id'] ?>"
                                            class="btn btn-primary btn-sm edit" type="button" title="Sửa" 
                                           onclick="myFunction(this)" ><i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>