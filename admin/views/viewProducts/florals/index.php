<div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="#">
                Danh sách hương nước hoa</a>
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

                        <a class="btn btn-add btn-sm" href="<?= BASE_URL_ADMIN ?>?act=floral-create" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Tạo mới hương nước hoa</a>
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
                            <th width="200">ID hương nước hoa</th>
                            <th width="350">Tên hương nước hoa</th>
                            <th width="20">Ảnh</th>
                            <!-- <th>Ngày sinh</th> -->
                            <!-- <th>Giới tính</th> -->
                            <th width="100">Tính năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($florals as $floral) {
                            ?>
                            <tr>
                                <td width="10"><input type="checkbox" name="check<?= $floral['id'] ?>"
                                        value="<?= $floral['id'] ?>"></td>
                                <td>
                                    <?= $floral['id'] ?>
                                </td>
                                <td>
                                    <?= $floral['name'] ?>
                                </td>
                                <td><img class="img-card-person" src="<?= BASE_URL . $floral['img'] ?>" alt=""></td>
                                <td class="table-td-center">
                                    <a href="<?= BASE_URL_ADMIN ?>?act=floral-delete&id=<?= $floral['id'] ?>"
                                        class="btn btn-primary btn-sm trash" title="Xóa"
                                        onclick="confirmDelete(event, this)">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=floral-update&id=<?= $floral['id'] ?>"
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