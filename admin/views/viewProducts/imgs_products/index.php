<div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="#">
                Danh sách hình ảnh SP</a>
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

                        <a class="btn btn-add btn-sm" href="<?= BASE_URL_ADMIN ?>?act=imgPros-create" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Tạo thêm cho ảnh SP</a>
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
                            <th width="200">Tên sản phẩm</th>
                            <th width="350">Ảnh</th>
                            <!-- <th>Ngày sinh</th> -->
                            <!-- <th>Giới tính</th> -->
                            <th width="100">Tính năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($imgPros as $imgPro) {
                            $imgs = explode(',', $imgPro['ip_img']);
                            ?>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>
                                    <?= $imgPro['p_name'] ?>
                                </td>
                                <td>
                                    <?php foreach ($imgs as $img) { ?>
                                        <img class="img-card-person" src="<?= BASE_URL . $img ?>" alt=""
                                            style="display: inline-block;">
                                    <?php } ?>
                                </td>

                                <td class="table-td-center">
                                    <a href="<?= BASE_URL_ADMIN ?>?act=imgPro-delete&id=<?= $imgPro['ip_id'] ?>"
                                        class="btn btn-primary btn-sm trash" title="Xóa"
                                        onclick="confirmDelete(event, this)">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=imgPro-update&id=<?= $imgPro['ip_id'] ?>"
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