<tbody>
    <?php foreach ($oders as $oder) {
        ?>
        <tr>
            <td>
                <?= $oder['bi_id'] ?>
            </td>
            <td>
                <?= $oder['b_name'] ?>
            </td>
            <td>
                <?= $oder['p_name'] ?>
            </td>
            <td>
                <?= $oder['bi_quantity'] ?>
            </td>
            <td>
                <?= $oder['b_tong'] ?>
            </td>
            <td>
                <?php
                if ($oder['b_status'] == 1) {
                    ?>
                    <span class="badge bg-success">
                        <?= 'Chờ xác nhận' ?>
                        <?php
                } else if ($oder['b_status'] == 2) {
                    ?>
                            <span class="badge bg-warning">
                            <?= 'Chờ lấy hàng' ?>
                            <?php
                } else if ($oder['b_status'] == 3) { ?>
                                    <span class="badge bg-warning">
                                <?= 'Chờ giao hàng' ?>
                                <?php
                } else if ($oder['b_status'] == 4) { ?>
                                            <span class="badge bg-info">
                                    <?= 'Đã giao' ?>
                                    <?php
                } else if ($oder['b_status'] == 0) { ?>
                                                    <span class="badge bg-danger">
                                        <?= 'Đã hủy' ?>
                                        <?php
                }
                ?>
                                </span>
            </td>


            <?php
            if ($oder['b_status'] == 1) {
                $acc = 'Chuyển sang chờ lấy hàng';
            } else if ($oder['b_status'] == 2) {
                $acc = 'Chuyển sang chờ giao hàng';
            } else if ($oder['b_status'] == 3) {
                $acc = 'Chuyển sang đã giao';
            }

            if (!empty($acc)) {
                ?>
                <td width="330" style="text-align: center;">
                    <a href="<?= BASE_URL_ADMIN ?>?act=oder_status&id=<?= $oder['b_id'] ?>&status=<?= $oder['b_status'] ?>" class="btn btn-add btn-sm" ">
                                                                                        <?= $acc ?>
                                                                                    </a>
                                                    <a href=" <?= BASE_URL_ADMIN ?>?act=oder_status&id=<?= $oder['b_id'] ?>"
                        class="btn btn-danger btn-sm edit" title="Sửa">Hủy đơn hàng</a>
                </td>
            <?php } ?>

        </tr>
        <?php
    }
    ?>
</tbody>