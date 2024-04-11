<div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="row element-button">

                    <div class="col-sm-2">
                        <a class="btn btn-add btn-sm" href="<?= BASE_URL_ADMIN ?>?act=post-create" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Tạo mới tin tức</a>
                    </div>
                    <div class="col-sm-2">
                        <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                class="fas fa-trash-alt"></i> Xóa tất cả </a>
                    </div>
                </div>
                <table class="table table-hover table-bordered" id="sampleTable">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Content</th>
                                <th>Img</th>
                                <th width="135">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <?php foreach ($posts as $post): ?>

                                    <td width="10"><input type="checkbox" name="check<?= $post['id'] ?>"
                                            value="<?= $post['id'] ?>"></td>
                                    <td>
                                        <?= $post['id'] ?>
                                    </td>
                                    <td>
                                        <?= $post['title'] ?>
                                    </td>
                                    <td>
                                        <?= $post['subtitle'] ?>
                                    </td>
                                    <td>
                                        <?= $post['content'] ?>
                                    </td>
                                    <td>
                                        <img class="img-card-person" src="<?= BASE_URL . $post['img'] ?>" alt="">
                                    </td>  
                                    <td>
                                        <a href="<?= BASE_URL_ADMIN ?>?act=post-delete&id=<?= $post['id'] ?>"
                                            class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                            onclick="confirmDelete(event, this)"><i class="fas fa-trash-alt"></i>
                                        </a>

                                        <a href=" <?= BASE_URL_ADMIN ?>?act=showPost&id=<?= $post['id'] ?>"
                                            class="btn btn-primary btn-sm circle" type="button" title="Show">

                                            <i class="fas fa-circle"></i>
                                        </a>

                                        <a href="<?= BASE_URL_ADMIN ?>?act=post-update&id=<?= $post['id'] ?>"
                                            class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                                class="fas fa-edit"></i> </a>

                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>


<!--
  MODAL
-->