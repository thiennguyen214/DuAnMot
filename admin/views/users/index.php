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

                            <a class="btn btn-add btn-sm" href="<?= BASE_URL_ADMIN ?>?act=user-create" title="Thêm"><i
                                    class="fas fa-plus"></i>
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
                                <th>ID khách hàng</th>
                                <th width="150">Họ và tên</th>
                                <th width="20">Ảnh thẻ</th>
                                <th width="300">Địa chỉ</th>
                                <!-- <th>Ngày sinh</th> -->
                                <th>SĐT</th>
                                <th>Ngày tạo</th>
                                <th>Quyền</th>
                                <th width="100">Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($users as $user) {
                                ?>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check<?= $user['id'] ?>"
                                            value="<?= $user['id'] ?>"></td>
                                    <td>
                                        <?= $user['id'] ?>
                                    </td>
                                    <td>
                                        <?= $user['name'] ?>
                                    </td>
                                    <td><img class="img-card-person" src="<?= BASE_URL . $user['img'] ?>" alt=""></td>
                                    <td>
                                        <?= $user['address'] ?>
                                    </td>
                                    <!-- <td>12/02/1999</td> -->
                                    <!-- <td>Nữ</td> -->
                                    <td>
                                        <?= $user['tell'] ?>
                                    </td>
                                    <td>
                                        <?= $user['crea'] ?>
                                    </td>
                                    <td>
                                        <?= ($user['role'] == 1) ? 'Admin' : 'Member' ?>

                                    </td>
                                    <td class="table-td-center">
                                        <a href="<?= BASE_URL_ADMIN ?>?act=user-delete&id=<?= $user['id'] ?>"
                                            class="btn btn-primary btn-sm trash" title="Xóa"
                                            onclick="confirmDelete(event, this)">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <a href="<?= BASE_URL_ADMIN ?>?act=user-update&id=<?= $user['id'] ?>"
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

<!--
  MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
    data-keyboard="false">
    <!-- <div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Chỉnh sửa thông tin người dùng cơ bản</h5>
                        </span>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="row">

                        <div class="form-group col-md-6">
                            <label class="control-label">ID nhân viên</label>
                            <input class="form-control" type="text" required value="" disabled />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Họ và tên</label>
                            <input class="form-control" type="text" required value="Võ Trường" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Số điện thoại</label>
                            <input class="form-control" type="number" required value="09267312388" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Địa chỉ email</label>
                            <input class="form-control" type="text" required value="truong.vd2000@gmail.com" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Ngày sinh</label>
                            <input class="form-control" type="date" value="15/03/2000" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">Chức vụ</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>Bán hàng</option>
                                <option>Tư vấn</option>
                            </select>
                        </div>
                    </div>
                    <br />
                    <a style="float: right; font-weight: 600; color: #ea0000">Chỉnh sửa nâng cao</a>
                    <br />
                    <br />
                    <a class="btn btn-save" type="submit">Lưu lại</a>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                    <br />
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div> -->
    <!--
  MODAL
-->