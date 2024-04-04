<div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="#">
                Danh sách thương hiệu</a>
        </li>
    </ul>
    <div id="clock"></div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <div class="row element-button">
                    <div class="col-sm-2">

                        <a class="btn btn-add btn-sm" href="<?= BASE_URL_ADMIN ?>?act=brand-create" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Tạo mới thương hiệu</a>
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
                            <th width="200">ID thương hiệu</th>
                            <th>Logo</th>
                            <th width="350">Tên thương hiệu</th>
                            <th>Hình ảnh</th>
                            <th width="100">Tính năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($brands as $brand) {
                            ?>
                            <tr>
                                <td width="10"><input type="checkbox" name="check<?= $brand['id'] ?>"
                                        value="<?= $brand['id'] ?>"></td>
                                <td>
                                    <?= $brand['id'] ?>
                                </td>
                                <td>
                                    <img class="img-card-person" src="<?= BASE_URL . $brand['logo'] ?>" alt="">
                                </td>
                                <td>
                                    <?= $brand['name'] ?>
                                </td>
                                <td>
                                    <img class="img-card-person" src="<?= BASE_URL . $brand['img'] ?>" alt="">
                                </td>

                                <td class="table-td-center">
                                    <a href="<?= BASE_URL_ADMIN ?>?act=brand-delete&id=<?= $brand['id'] ?>"
                                        class="btn btn-primary btn-sm trash" title="Xóa"
                                        onclick="confirmDelete(event, this)">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=brand-update&id=<?= $brand['id'] ?>"
                                        class="btn btn-primary btn-sm edit" title="Sửa" id="show-emp">
                                        <i class="fas fa-edit"></i>
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