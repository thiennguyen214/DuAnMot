<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= BASE_URL ?>assets/images/hay.jpg"
            width="50px" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><b>Võ Trường</b></p>
            <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
        </div>
    </div>
    <hr>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item <?= (isset ($active2)) ? $active2 : null ?>"
                href="<?= BASE_URL_ADMIN . '?act=users' ?>"><i class='app-menu__icon bx bx-id-card'>

                </i>
                <span class="app-menu__label">
                    Quản lý khách hàng</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?= (isset ($active3)) ? $active3 : null ?>"
                href="<?= BASE_URL_ADMIN . '?act=viewProducts' ?>"><i class='app-menu__icon bx bx-purchase-tag-alt'>
                </i>
                <span class="app-menu__label">
                    Quản lý sản phẩm</span>
            </a>
        </li>
        <li><a class="app-menu__item <?= (isset ($active4)) ? $active4 : null ?>"
                href="<?= BASE_URL_ADMIN . '?act=oders' ?>"><i class='app-menu__icon bx bx-task'></i><span
                    class="app-menu__label">Quản lý đơn hàng</span></a></li>
        <li><a class="app-menu__item <?= (isset ($active5)) ? $active5 : null ?>"
                href="<?= BASE_URL_ADMIN . '?act=overview' ?>"><i class='app-menu__icon bx bx-pie-chart-alt-2'></i><span
                    class="app-menu__label">Báo cáo doanh
                    thu</span></a>
        </li>
        <li><a class="app-menu__item <?= (isset ($active6)) ? $active6 : null ?>"
                href="<?= BASE_URL_ADMIN . '?act=settings' ?>"><i class='app-menu__icon bx bx-cog'></i><span
                    class="app-menu__label">Setting</span></a></li>
    </ul>
</aside>