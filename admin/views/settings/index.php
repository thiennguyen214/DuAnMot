<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>
                        <?= $title ?>
                    </b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="<?= BASE_URL_ADMIN ?>?act=setting-create"
                                title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới khách hàng</a>
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
                                <th>ID</th>
                                <th width="150">Trường dữ liệu</th>
                                <th width="20">Dữ liệu</th>
                                <th width="100">Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($settings as $setting) {
                                ?>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="<?= $setting['id'] ?>"></td>
                                    <td>
                                        <?= $setting['id'] ?>
                                    </td>
                                    <td>
                                        <?= $setting['key'] ?>
                                    </td>
                                    <td>
                                        <?= $setting['value'] ?>
                                    </td>
                                    <td class="table-td-center">
                                        <a href="<?= BASE_URL_ADMIN ?>?act=setting-delete&id=<?= $setting['id'] ?>"
                                            class="btn btn-primary btn-sm trash" title="Xóa"
                                            onclick="confirmDelete(event, this)">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <a href="<?= BASE_URL_ADMIN ?>?act=setting-update&id=<?= $setting['id'] ?>"
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