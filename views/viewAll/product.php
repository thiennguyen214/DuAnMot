<div class="bodywrap">
  <div class="layout-collection">
    <section class="bread-crumb">
      <div class="container">
        <ul class="breadcrumb">
          <li class="home">
            <a href="/"><span>Trang chủ</span></a>
            <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                class="svg-inline--fa fa-chevron-right fa-w-10">
                <path fill="currentColor"
                  d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                  class=""></path>
              </svg>&nbsp;</span>
          </li>

          <li>
            <strong><span> Tất cả sản phẩm</span></strong>
          </li>
        </ul>
      </div>
    </section>
    <div class="container">
      <aside class="dqdt-sidebar sidebar">
        <div class="section-box-bg">
          <div class="clearfix"></div>
          <div class="filter-content aside-hidden-mobile">
            <div class="filter-container">
              <div class="filter-container__selected-filter" style="display: none">
                <div class="filter-container__selected-filter-header clearfix">
                  <span class="filter-container__selected-filter-header-title"><i
                      class="fa fa-arrow-left hidden-sm-up"></i> Bạn
                    chọn</span>
                  <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all"
                    title="Bỏ hết">Bỏ hết
                    <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" width="10" height="10" x="0" y="0" viewBox="0 0 365.696 365.696"
                        style="enable-background: new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                          <path xmlns="http://www.w3.org/2000/svg"
                            d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"
                            fill="#ffffff" data-original="#000000" style="" class=""></path>
                        </g>
                      </svg></i></a>
                </div>
                <div class="filter-container__selected-filter-list">
                  <ul></ul>
                </div>
              </div>
            </div>
            <div class="filter-container filter-container-tow">
              <div id="sort-by">
                <label class="left">Sắp xếp: </label>
                <ul id="sortBy">
                  <li>
                    <span class="name_active">Mặc định</span>
                    <ul>
                      <li>
                        <a href="<?= BASE_URL ?>?act=products" onclick="sortby('default')" title="Mặc định">Mặc định</a>
                      </li>
                      <li>
                        <a href="<?= BASE_URL ?>?act=filter_prAZ" onclick="sortby('alpha-asc')" title="A &rarr; Z">A &rarr; Z</a>
                      </li>
                      <li>
                        <a href="<?= BASE_URL ?>?act=filter_prZA" onclick="sortby('alpha-desc')" title="Z &rarr; A">Z &rarr; A</a>
                      </li>
                      <li>
                        <a href="<?= BASE_URL ?>?act=filterProByPriceAsc" onclick="sortby('price-asc')" title="Giá tăng dần">Giá tăng dần</a>
                      </li>
                      <li>
                        <a href="<?= BASE_URL ?>?act=filterProByPriceDesc" onclick="sortby('price-desc')" title="Giá giảm dần">Giá giảm dần</a>
                      </li>
                      <li>
                        <a href="<?= BASE_URL ?>?act=filterProByCreatedAsc" onclick="sortby('created-desc')" title="Hàng mới nhất">Hàng mới nhất</a>
                      </li>
                      <li>
                        <a href="<?= BASE_URL ?>?act=filterProByCreatedDesc" onclick="sortby('created-asc')" title="Hàng cũ nhất">Hàng cũ nhất</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <script>
                $("#sort-by").click(function (e) {
                  e.stopPropagation();
                  $(".filter-container .aside-item.active").removeClass(
                    "active"
                  );
                  if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                  } else {
                    $(this).addClass("active");
                  }
                });
              </script>

              <!-- Lọc giá -->

              <aside class="aside-item filter-price">
                <div class="aside-title">
                  <h2>
                    <span>Chọn mức giá</span>
                    <svg class="svg-arro" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px" y="0px" viewBox="0 0 490.656 490.656" style="enable-background: new 0 0 490.656 490.656"
                      xml:space="preserve" width="25px" height="25px">
                      <path
                        d="M487.536,120.445c-4.16-4.16-10.923-4.16-15.083,0L245.339,347.581L18.203,120.467c-4.16-4.16-10.923-4.16-15.083,0 c-4.16,4.16-4.16,10.923,0,15.083l234.667,234.667c2.091,2.069,4.821,3.115,7.552,3.115s5.461-1.045,7.531-3.136l234.667-234.667 C491.696,131.368,491.696,124.605,487.536,120.445z"
                        data-original="#000000" class="active-path" data-old_color="#000000" fill="#141414"></path>
                    </svg>
                  </h2>
                </div>
                <div class="aside-content filter-group content_price">
                  <ul>
                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label data-filter="100-000d" for="filter-duoi-100-000d">
                          <input type="checkbox" id="filter-duoi-100-000d" data-group="Khoảng giá"
                            data-field="price_min" data-text="Dưới 100.000đ" value="(<100000)" data-operator="OR" />
                          <i class="fa"></i>
                          Dưới 100.000đ
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label data-filter="200-000d" for="filter-100-000d-200-000d">
                          <input type="checkbox" id="filter-100-000d-200-000d" data-group="Khoảng giá"
                            data-field="price_min" data-text="100.000đ - 200.000đ" value="(>=100000 AND <=200000)"
                            data-operator="OR" />
                          <i class="fa"></i>
                          Từ 100.000đ - 200.000đ
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label data-filter="300-000d" for="filter-200-000d-300-000d">
                          <input type="checkbox" id="filter-200-000d-300-000d" data-group="Khoảng giá"
                            data-field="price_min" data-text="200.000đ - 300.000đ" value="(>=200000 AND <=300000)"
                            data-operator="OR" />
                          <i class="fa"></i>
                          Từ 200.000đ - 300.000đ
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label data-filter="500-000d" for="filter-300-000d-500-000d">
                          <input type="checkbox" id="filter-300-000d-500-000d" data-group="Khoảng giá"
                            data-field="price_min" data-text="300.000đ - 500.000đ" value="(>=300000 AND <=500000)"
                            data-operator="OR" />
                          <i class="fa"></i>
                          Từ 300.000đ - 500.000đ
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label data-filter="1-000-000d" for="filter-500-000d-1-000-000d">
                          <input type="checkbox" id="filter-500-000d-1-000-000d" data-group="Khoảng giá"
                            data-field="price_min" data-text="500.000đ - 1.000.000đ" value="(>=500000 AND <=1000000)"
                            data-operator="OR" />
                          <i class="fa"></i>
                          Từ 500.000đ - 1 triệu
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label data-filter="2-000-000d" for="filter-1-000-000d-2-000-000d">
                          <input type="checkbox" id="filter-1-000-000d-2-000-000d" data-group="Khoảng giá"
                            data-field="price_min" data-text="1.000.000đ - 2.000.000đ" value="(>=1000000 AND <=2000000)"
                            data-operator="OR" />
                          <i class="fa"></i>
                          Từ 1 triệu - 2 triệu
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label data-filter="5-000-000d" for="filter-2-000-000d-5-000-000d">
                          <input type="checkbox" id="filter-2-000-000d-5-000-000d" data-group="Khoảng giá"
                            data-field="price_min" data-text="2.000.000đ - 5.000.000đ" value="(>=2000000 AND <=5000000)"
                            data-operator="OR" />
                          <i class="fa"></i>
                          Từ 2 triệu - 5 triệu
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label data-filter="10-000-000d" for="filter-5-000-000d-10-000-000d">
                          <input type="checkbox" id="filter-5-000-000d-10-000-000d" data-group="Khoảng giá"
                            data-field="price_min" data-text="5.000.000đ - 10.000.000đ"
                            value="(>=5000000 AND <=10000000)" data-operator="OR" />
                          <i class="fa"></i>
                          Từ 5 triệu - 10 triệu
                        </label>
                      </span>
                    </li>
                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label data-filter="10-000-000d" for="filter-tren10-000-000d">
                          <input type="checkbox" id="filter-tren10-000-000d" data-group="Khoảng giá"
                            data-field="price_min" data-text="Trên 10.000.000đ" value="(>10000000)"
                            data-operator="OR" />
                          <i class="fa"></i>
                          Trên 10 triệu
                        </label>
                      </span>
                    </li>
                  </ul>
                </div>
              </aside>

              <!-- End Lọc giá -->

              <!-- Lọc Loại -->
              <aside class="aside-item aside-itemxx filter-type">
                <div class="aside-title">
                  <h2 class="title-filter title-head margin-top-0">
                    <span>Loại</span>
                    <svg class="svg-arro" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px" y="0px" viewBox="0 0 490.656 490.656" style="enable-background: new 0 0 490.656 490.656"
                      xml:space="preserve" width="25px" height="25px">
                      <path
                        d="M487.536,120.445c-4.16-4.16-10.923-4.16-15.083,0L245.339,347.581L18.203,120.467c-4.16-4.16-10.923-4.16-15.083,0 c-4.16,4.16-4.16,10.923,0,15.083l234.667,234.667c2.091,2.069,4.821,3.115,7.552,3.115s5.461-1.045,7.531-3.136l234.667-234.667 C491.696,131.368,491.696,124.605,487.536,120.445z"
                        data-original="#000000" class="active-path" data-old_color="#000000" fill="#141414"></path>
                    </svg>
                  </h2>
                </div>
                <div class="aside-content filter-group">
                  <ul>
                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-nuoc-hoa-nam">
                          <input type="checkbox" id="filter-nuoc-hoa-nam" data-group="PRODUCT_TYPE"
                            data-field="product_type.filter_key" data-text="" value="(&#34;Nước hoa nam&#34;)"
                            data-operator="OR" />
                          <i class="fa"></i>
                          Nước hoa nam
                        </label>
                      </span>
                    </li>
                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-nuoc-hoa-nu">
                          <input type="checkbox" id="filter-nuoc-hoa-nu" data-group="PRODUCT_TYPE"
                            data-field="product_type.filter_key" data-text="" value="(&#34;Nước hoa nữ&#34;)"
                            data-operator="OR" />
                          <i class="fa"></i>
                          Nước hoa nữ
                        </label>
                      </span>
                    </li>
                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-nuoc-hoa-unisex">
                          <input type="checkbox" id="filter-nuoc-hoa-unisex" data-group="PRODUCT_TYPE"
                            data-field="product_type.filter_key" data-text="" value="(&#34;Nước hoa unisex&#34;)"
                            data-operator="OR" />
                          <i class="fa"></i>
                          Nước hoa unisex
                        </label>
                      </span>
                    </li>
                  </ul>
                </div>
              </aside>
              <!-- End Lọc Loại -->

              <!-- Lọc Thương hiệu -->

              <aside class="aside-item filter-vendor f-left">
                <div class="aside-title">
                  <h2 class="title-filter title-head margin-top-0">
                    <span>Thương hiệu</span>
                    <svg class="svg-arro" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px" y="0px" viewBox="0 0 490.656 490.656" style="enable-background: new 0 0 490.656 490.656"
                      xml:space="preserve" width="25px" height="25px">
                      <path
                        d="M487.536,120.445c-4.16-4.16-10.923-4.16-15.083,0L245.339,347.581L18.203,120.467c-4.16-4.16-10.923-4.16-15.083,0 c-4.16,4.16-4.16,10.923,0,15.083l234.667,234.667c2.091,2.069,4.821,3.115,7.552,3.115s5.461-1.045,7.531-3.136l234.667-234.667 C491.696,131.368,491.696,124.605,487.536,120.445z"
                        data-original="#000000" class="active-path" data-old_color="#000000" fill="#141414"></path>
                    </svg>
                  </h2>
                </div>
                <div class="aside-content margin-top-0 filter-group">
                  <ul>
                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-ajmal">
                          <input type="checkbox" id="filter-ajmal" data-group="Hãng" data-field="vendor"
                            data-text="Ajmal" value="(Ajmal)" data-operator="OR" />
                          <i class="fa"></i>
                          Ajmal
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-calvin-klein">
                          <input type="checkbox" id="filter-calvin-klein" data-group="Hãng" data-field="vendor"
                            data-text="Calvin Klein" value="(Calvin Klein)" data-operator="OR" />
                          <i class="fa"></i>
                          Calvin Klein
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-christian-dior">
                          <input type="checkbox" id="filter-christian-dior" data-group="Hãng" data-field="vendor"
                            data-text="Christian Dior" value="(Christian Dior)" data-operator="OR" />
                          <i class="fa"></i>
                          Christian Dior
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-creed">
                          <input type="checkbox" id="filter-creed" data-group="Hãng" data-field="vendor"
                            data-text="Creed" value="(Creed)" data-operator="OR" />
                          <i class="fa"></i>
                          Creed
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-elixir-precious">
                          <input type="checkbox" id="filter-elixir-precious" data-group="Hãng" data-field="vendor"
                            data-text="Elixir Precious" value="(Elixir Precious)" data-operator="OR" />
                          <i class="fa"></i>
                          Elixir Precious
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-evoke">
                          <input type="checkbox" id="filter-evoke" data-group="Hãng" data-field="vendor"
                            data-text="Evoke" value="(Evoke)" data-operator="OR" />
                          <i class="fa"></i>
                          Evoke
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-giorgio-armani">
                          <input type="checkbox" id="filter-giorgio-armani" data-group="Hãng" data-field="vendor"
                            data-text="Giorgio Armani" value="(Giorgio Armani)" data-operator="OR" />
                          <i class="fa"></i>
                          Giorgio Armani
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-gucci">
                          <input type="checkbox" id="filter-gucci" data-group="Hãng" data-field="vendor"
                            data-text="Gucci" value="(Gucci)" data-operator="OR" />
                          <i class="fa"></i>
                          Gucci
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-hermes">
                          <input type="checkbox" id="filter-hermes" data-group="Hãng" data-field="vendor"
                            data-text="Hermes" value="(Hermes)" data-operator="OR" />
                          <i class="fa"></i>
                          Hermes
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-le-labo">
                          <input type="checkbox" id="filter-le-labo" data-group="Hãng" data-field="vendor"
                            data-text="Le labo" value="(Le labo)" data-operator="OR" />
                          <i class="fa"></i>
                          Le labo
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-mancera">
                          <input type="checkbox" id="filter-mancera" data-group="Hãng" data-field="vendor"
                            data-text="Mancera" value="(Mancera)" data-operator="OR" />
                          <i class="fa"></i>
                          Mancera
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-marc-jacobs">
                          <input type="checkbox" id="filter-marc-jacobs" data-group="Hãng" data-field="vendor"
                            data-text="Marc Jacobs" value="(Marc Jacobs)" data-operator="OR" />
                          <i class="fa"></i>
                          Marc Jacobs
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-tommy-hilfiger">
                          <input type="checkbox" id="filter-tommy-hilfiger" data-group="Hãng" data-field="vendor"
                            data-text="Tommy Hilfiger" value="(Tommy Hilfiger)" data-operator="OR" />
                          <i class="fa"></i>
                          Tommy Hilfiger
                        </label>
                      </span>
                    </li>
                  </ul>
                </div>
              </aside>

              <!-- End Lọc Thương hiệu -->

              <!-- Lọc tag 1 -->

              <aside class="aside-item filter-tag">
                <div class="aside-title">
                  <h2 class="title-head margin-top-0">
                    <span>Giới tính</span>
                    <svg class="svg-arro" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px" y="0px" viewBox="0 0 490.656 490.656" style="enable-background: new 0 0 490.656 490.656"
                      xml:space="preserve" width="25px" height="25px">
                      <path
                        d="M487.536,120.445c-4.16-4.16-10.923-4.16-15.083,0L245.339,347.581L18.203,120.467c-4.16-4.16-10.923-4.16-15.083,0 c-4.16,4.16-4.16,10.923,0,15.083l234.667,234.667c2.091,2.069,4.821,3.115,7.552,3.115s5.461-1.045,7.531-3.136l234.667-234.667 C491.696,131.368,491.696,124.605,487.536,120.445z"
                        data-original="#000000" class="active-path" data-old_color="#000000" fill="#141414"></path>
                    </svg>
                  </h2>
                </div>
                <div class="aside-content filter-group">
                  <ul>
                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-nam">
                          <input type="checkbox" id="filter-nam" data-group="tag2" data-field="tags" data-text="Nam"
                            value="(Nam)" data-operator="OR" />
                          <i class="fa"></i>
                          Nam
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-nu">
                          <input type="checkbox" id="filter-nu" data-group="tag2" data-field="tags" data-text="Nữ"
                            value="(Nữ)" data-operator="OR" />
                          <i class="fa"></i>
                          Nữ
                        </label>
                      </span>
                    </li>

                    <li class="filter-item filter-item--check-box filter-item--green">
                      <span>
                        <label for="filter-unisex">
                          <input type="checkbox" id="filter-unisex" data-group="tag2" data-field="tags"
                            data-text="Unisex" value="(Unisex)" data-operator="OR" />
                          <i class="fa"></i>
                          Unisex
                        </label>
                      </span>
                    </li>
                  </ul>
                </div>
              </aside>

              <!-- End lọc tag 1 -->

              <!-- Lọc tag 2 -->

              <!-- End lọc tag 2 -->
            </div>
          </div>
        </div>
      </aside>
      <div class="block-collection">
        <div class="section-box-bg">
          <h1 class="title-page"
            style="
                  background-image: url(<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/bg_collections02fb.jpg?1709175143725);">
            <span>Tất cả sản phẩm</span>
          </h1>
          <div class="category-products products-view products-view-grid list_hover_pro">
            <div class="products-view products-view-grid list_hover_pro">
              <div class="row row-fix">
                <?php foreach ($products as $product): ?>
                  <div class="col-6 col-md-4 col-xl-3 col-fix">
                    <div class="item_product_main">
                      <form action="https://bean-perfume.mysapo.net/cart/add" method="post"
                        class="variants product-action" data-cart-form data-id="product-actions-33659593"
                        enctype="multipart/form-data">
                        <div class="product-thumbnail">
                          <a class="image_thumb scale_hover"
                            href="<?= BASE_URL ?>?act=productDetail&id=<?= $product['id'] ?>"
                            title="Unisex Creed Millesime Imperial">
                            <img width="480" height="480" class="lazyload image1"
                              src="<?= BASE_URL . $product['img'] ?>" data-src="<?= BASE_URL . $product['img'] ?>"
                              alt="Unisex Creed Millesime Imperial" />
                          </a>
                          <div class="action">
                            <input type="hidden" name="variantId" value="104173585" />
                            <button class="btn-cart btn-views add_to_cart" title="Thêm vào giỏ">
                              <svg class="icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use>
                              </svg>
                            </button>
                            <a title="Xem nhanh" href="../unisex-creed-millesime-imperial.html"
                              data-handle="unisex-creed-millesime-imperial" class="quick-view btn-views">
                              <svg class="icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-quickview"></use>
                              </svg>
                            </a>
                          </div>
                        </div>
                        <div class="smart">
                          <span>-<?= floor((1 - ($product['price_sale'] / $product['price'])) * 100) ?>%
                          </span></div>
                        <a href="javascript:void(0)" class="setWishlist btn-wishlist"
                          data-wish="unisex-creed-millesime-imperial" tabindex="0" title="Thêm vào yêu thích">
                          <svg class="icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-wishlist"></use>
                          </svg>
                        </a>
                        <div class="product-info">
                          <h3 class="product-name">
                            <a class="line-clamp line-clamp-1 text-center" href="../unisex-creed-millesime-imperial.html"
                              title="<?= $product['name'] ?>">
                              <?= $product['name'] ?>
                            </a>
                          </h3>
                          <div class="price-box">
                            <?=  number_format($product['price_sale'], 0, ',', '.') ?>₫
                            <span class="compare-price">
                              <?=  number_format($product['price'], 0, ',', '.') ?>₫
                            </span>
                          </div>
                        </div>
                        <ul class="fragrant_product">
                          <li class="text-center">
                            <img width="90" height="90" class="lazyload" src="<?= BASE_URL . $product['img'] ?>"
                              data-src="<?= BASE_URL . $product['img'] ?>" alt="Cam" />
                            <span>Cam</span>
                          </li>
                          <li class="text-center">
                            <img width="90" height="90" class="lazyload"
                              src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                              data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_7.jpg?1709175143725"
                              alt="Gỗ" />
                            <span>Gỗ</span>
                          </li>
                          <li class="text-center">
                            <img width="90" height="90" class="lazyload"
                              src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.png?1709175143725"
                              data-src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/icon_fra_1.jpg?1709175143725"
                              alt="Trái cây" />
                            <span>Trái cây</span>
                          </li>
                        </ul>
                      </form>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="pagenav">
              <nav class="collection-paginate clearfix relative nav_pagi w_100">
                <ul class="pagination clearfix">
                  <li class="page-item disabled">
                    <a class="page-link" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20" fill="none">
                        <path
                          d="M0.827131 10.5488L10.0777 19.7738C10.3808 20.0759 10.8715 20.0754 11.1741 19.7723C11.4764 19.4692 11.4756 18.9782 11.1725 18.6759L2.47255 9.99996L11.1728 1.32406C11.4759 1.02172 11.4767 0.531057 11.1744 0.227934C11.0227 0.0759811 10.824 3.76429e-06 10.6253 3.74691e-06C10.4271 3.72959e-06 10.2292 0.0754737 10.0778 0.226372L0.827131 9.45114C0.681155 9.59637 0.599241 9.79403 0.599241 9.99996C0.599241 10.2059 0.68139 10.4033 0.827131 10.5488Z"
                          fill="#9D9D9D" />
                      </svg>
                    </a>
                  </li>

                  <li class="active page-item disabled">
                    <a class="page-link" href="javascript:;" style="pointer-events: none">1</a>
                  </li>

                  <li class="page-item">
                    <a class="page-link" onclick="doSearch(2)" href="javascript:;">2</a>
                  </li>

                  <li class="page-item">
                    <a class="page-link link-next-pre" onclick="doSearch(2)" href="javascript:;" title="2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="20" viewBox="0 0 12 20" fill="none">
                        <path
                          d="M11.1729 9.45117L1.92228 0.226167C1.6192 -0.0759023 1.12849 -0.0753945 0.825918 0.227729C0.523575 0.530814 0.524357 1.02179 0.827481 1.32409L9.52745 10L0.827168 18.6759C0.524083 18.9783 0.523302 19.4689 0.825605 19.7721C0.977285 19.924 1.17599 20 1.37471 20C1.57291 20 1.77084 19.9245 1.92224 19.7736L11.1729 10.5489C11.3188 10.4036 11.4008 10.206 11.4008 10C11.4008 9.7941 11.3186 9.59668 11.1729 9.45117Z"
                          fill="#9D9D9D" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="descrip_coll content_coll add_apper">
          <p>
            Bạn đang tìm cách nâng cao phong cách cá nhân của mình và để lại
            ấn tượng lâu dài?&nbsp;Bean Perfume là điểm đến lý tưởng để bạn
            mua nước hoa trực tuyến tại Hồ Chí Minh, Việt Nam.&nbsp;Chúng
            tôi hiểu tầm quan trọng của một hương thơm quyến rũ.&nbsp;Nước
            hoa của chúng tôi được tạo ra theo cách phản ánh cá tính, Nó bổ
            sung cho cá tính của bạn.
          </p>
          <p>
            Với nhiều loại nước hoa dành cho nam, nữ và&nbsp;unisex, chúng
            tôi cung cấp một bộ sưu tập mùi hương tinh tế.&nbsp;Nó phục vụ
            cho mọi sở thích và sở thích.&nbsp;Phạm vi đa dạng của chúng tôi
            bao gồm một loạt các hương thơm quyến rũ.&nbsp;Khám phá hương
            thơm hoàn hảo phù hợp với bạn và khẳng định phong cách ở bất cứ
            nơi đâu bạn đến.
          </p>
          <p>
            <img height="385" width="630" alt="Banner"
              src="../../bizweb.dktcdn.net/100/503/826/files/nong-do-va-mui-huong-nuoc-hoae9d8.jpg?v=1701252641795" />
          </p>
          <p><strong>Nước Hoa Nam:</strong></p>
          <p>
            Tại Bean Perfume, chúng tôi nhận ra rằng mỗi người đàn ông đều
            là duy nhất và có phong cách riêng biệt.&nbsp;Bộ sưu tập nước
            hoa dành cho nam giới của chúng tôi thể hiện sự tinh tế, lôi
            cuốn và tự tin.
          </p>
          <p>
            Chúng tôi có loại nước hoa thích hợp cho bạn, bất kể bạn muốn
            hương cam quýt tươi mát hay hương gỗ và xạ hương để có bầu không
            khí mạnh mẽ và nam tính.&nbsp;Khám phá bộ sưu tập nước hoa nam
            của chúng tôi ở Dubai để để lại ấn tượng lâu dài.
          </p>
          <p><strong>Nước Hoa Dành Cho Nữ:</strong></p>
          <p>
            Với bộ sưu tập nước hoa dành cho phụ nữ hấp dẫn của chúng tôi,
            bạn có thể khơi dậy sự nữ tính và tôn lên vẻ quyến rũ bên trong
            của mình.&nbsp;Chúng tôi có nhiều loại nước hoa phù hợp với sở
            thích của bất kỳ người phụ nữ nào.
          </p>
          <p>
            Nó bao gồm hương hoa và bột mang lại cảm giác sang trọng và
            duyên dáng.&nbsp;Bạn có thể nắm bắt được bản chất của sự nhiệt
            tình của tuổi trẻ.&nbsp;Hãy tìm mùi hương lý tưởng để tôn lên cá
            tính của bạn và để lại dấu vết mùi hương lôi cuốn ở mọi nơi bạn
            đến.&nbsp;Mua trực tuyến nước hoa nữ của chúng tôi ở Dubai, Các
            Tiểu vương quốc Ả Rập Thống nhất.
          </p>
          <p><strong>Nước Hoa Unisex:</strong></p>
          <p>
            Cửa hàng nước hoa Unisex của chúng tôi ở Hồ Chí Minh, vượt qua
            các ranh giới truyền thống và mang đến trải nghiệm khứu giác độc
            đáo mà mọi người đều có thể tận hưởng.&nbsp;Những loại nước hoa
            này thể hiện sự pha trộn hài hòa giữa các nốt hương quyến rũ thu
            hút cả nam và nữ.
          </p>
          <p>
            Bạn thích hương thơm và vị cay hay hương tươi mát và thủy
            sinh?&nbsp;Nước hoa unisex của chúng tôi cho phép bạn thể hiện
            bản thân một cách tự do và thể hiện cá tính của mình mà không bị
            giới hạn.
          </p>
          <p><strong>Khám Phá Các Danh Mục Hương Thơm Quyến Rũ:</strong></p>
          <p>
            Ngoài các dòng sản phẩm toàn diện dành cho nam, nữ
            và&nbsp;unisex, nước hoa của chúng tôi còn được phân loại dựa
            trên đặc tính mùi hương riêng biệt của từng loại.&nbsp;Khám phá
            các danh mục nước hoa sau để tìm ra loại nước hoa phù hợp với
            bạn:
          </p>
          <p>
            <strong>Tươi mát:</strong>&nbsp;Trải nghiệm những mùi hương tiếp
            thêm sinh lực thể hiện bầu không khí sắc nét và sạch sẽ.
          </p>
          <p>
            <strong>Aquatic:</strong>&nbsp;Đắm mình vào thế giới của hương
            thơm tươi mát và đại dương đưa bạn đến bờ biển.
          </p>
          <p>
            <strong>Màu xanh lá cây:</strong>&nbsp;Ôm trọn vẻ đẹp của thiên
            nhiên với hương thơm lấy cảm hứng từ cảnh quan xanh tươi.
          </p>
          <p>
            <strong>Musky:</strong>&nbsp;Giải phóng sự gợi cảm của bạn bằng
            tông màu xạ hương quyến rũ để lại ấn tượng lâu dài.
          </p>
          <p>
            <strong>Hương trái cây:</strong>&nbsp;Thưởng thức hương thơm
            trái cây gợi lên cảm giác tươi mát và sức sống.
          </p>
          <p>
            <strong>Leathery:</strong>&nbsp;Khám phá sự quyến rũ của mùi
            hương da thuộc toát lên sự tinh tế và tinh tế.
          </p>
          <p>
            <strong>Ngọt ngào:</strong>&nbsp;Đắm mình trong sự ngọt ngào thú
            vị với hương thơm đánh thức các giác quan.
          </p>
          <p>
            <strong>Hương hoa:</strong>&nbsp;Ôm trọn sự sang trọng và duyên
            dáng của những nốt hương hoa thể hiện vẻ đẹp vượt thời gian.
          </p>
          <p>
            <strong>Oudhy:</strong>&nbsp;Trải nghiệm hương thơm phong phú và
            sang trọng của oud, một thành phần đặc trưng trong nước hoa
            Trung Đông.
          </p>
          <p>
            <strong>Cam quýt:</strong>&nbsp;Tận hưởng hương thơm rực rỡ và
            nồng nàn đánh thức các giác quan.
          </p>
          <p>
            <strong>Aromatic:</strong>&nbsp;Khám phá sức quyến rũ quyến rũ
            của mùi hương thơm tỏa ra sự ấm áp và thoải mái.
          </p>
          <p>
            <strong>Cay:</strong>&nbsp;Thêm một chút gia vị vào bộ sưu tập
            nước hoa của bạn với những mùi hương khơi dậy niềm đam mê và sự
            tò mò.
          </p>
          <p>
            <strong>Oriental:</strong>&nbsp;Bắt đầu cuộc hành trình xuyên
            qua sự kỳ lạ với hương thơm phương Đông quyến rũ trí tưởng
            tượng.
          </p>
          <p>
            <strong>Gourmand:</strong>&nbsp;Thưởng thức hương thơm thơm ngon
            gợi lên hương thơm hấp dẫn của ẩm thực.
          </p>
          <p>
            <strong>Woody:</strong>&nbsp;Đắm mình trong vòng tay trần tục và
            dễ chịu của hương thơm gỗ.
          </p>
          <p>
            <strong>Phấn:</strong>&nbsp;Trải nghiệm những nốt hương tinh tế
            và dễ chịu của mùi hương phấn gợi lên cảm giác hoài cổ.
          </p>
          <p>
            <strong>Ambery:</strong>&nbsp;Khám phá sự ấm áp và tinh tế của
            nước hoa có mùi hổ phách.
          </p>
          <p>
            Bean Perfume Thể hiện sự thanh lịch vượt thời gian của nước hoa
            chypre, được biết đến với sự pha trộn hài hòa giữa hương cam
            quýt, hoa và gỗ.
          </p>
          <p>
            <strong>Mossy:</strong>&nbsp;Đắm chìm trong hương thơm xanh và
            đất của những mùi hương rêu.
          </p>
          <p><strong>Tại Sao Chọn Nước Hoa Bean Perfume?</strong></p>
          <ul>
            <li>
              Bộ sưu tập nước hoa phong phú dành cho nam, nữ&nbsp;và
              &nbsp;unisex.
            </li>
            <li>
              Đa dạng mùi hương quyến rũ phù hợp với mọi sở thích và sở
              thích.
            </li>
            <li>Nguyên liệu chất lượng cao và tay nghề tỉ mỉ.</li>
            <li>Mùi hương đích thực và lâu dài tạo nên sự khẳng định.</li>
            <li>
              Trải nghiệm mua sắm trực tuyến thuận tiện với các tùy chọn
              thanh toán an toàn.
            </li>
            <li>Giao hàng nhanh chóng và đáng tin cậy.</li>
            <li>
              Hỗ trợ khách hàng chuyên dụng để hỗ trợ bạn với bất kỳ thắc
              mắc hoặc mối quan tâm nào.
            </li>
          </ul>
          <p>
            Khám phá cửa hàng trực tuyến của chúng tôi và bắt đầu hành trình
            hương thơm phù hợp với phong cách và cá tính độc đáo của
            bạn.&nbsp;Mua nước hoa trực tuyến tại Bean Perfume.&nbsp;Hãy
            trải nghiệm sức hấp dẫn quyến rũ của Nước hoa Bean Perfume ngay
            hôm nay.
          </p>

          <div class="bg_cl"></div>
        </div>
      </div>
    </div>
    <div class="collection_scrolltabs">
      <div class="toolbar-inner">
        <a class="tab-item tab-filter" title="Lọc"><i class="evo-icon icon-filter"></i><span
            class="tabbar-label">Lọc</span></a>
        <a class="tab-item tab-sort" title="Sắp xếp"><i class="evo-icon icon-sort"></i><span class="tabbar-label">Sắp
            xếp</span></a>
      </div>
    </div>
  </div>
  <div class="opacity_sidebar"></div>
  <script>
    $(".view_mores a.one").click(function () {
      $(this).addClass("active");
      $(".view_mores a.two").removeClass("active");
      $(".content_coll").addClass("active");
      $(".bg_cl").addClass("active");
    });
    $(".view_mores a.two").click(function () {
      $(this).addClass("active");
      $(".view_mores a.one").removeClass("active");
      $(".content_coll").removeClass("active");
      $(".bg_cl").removeClass("active");
    });
  </script>
  <div class="view_mores">
    <a class="one">Xem thêm
      <img width="90" height="90"
        src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/sortdown02fb.png?1709175143725"
        alt="Bean Perfume" /></a>
    <a class="two active">Thu gọn
      <img width="90" height="90"
        src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/sortdown02fb.png?1709175143725"
        alt="Bean Perfume" /></a>
  </div>
</div>
</div>
<div class="collection_scrolltabs">
  <div class="toolbar-inner">
    <a class="tab-item tab-filter" title="Lọc"><i class="evo-icon icon-filter"></i><span
        class="tabbar-label">Lọc</span></a>
    <a class="tab-item tab-sort" title="Sắp xếp"><i class="evo-icon icon-sort"></i><span class="tabbar-label">Sắp
        xếp</span></a>
  </div>
</div>
</div>
<div class="opacity_sidebar"></div>
<script>
  $(".view_mores a.one").click(function () {
    $(this).addClass("active");
    $(".view_mores a.two").removeClass("active");
    $(".content_coll").addClass("active");
    $(".bg_cl").addClass("active");
  });
  $(".view_mores a.two").click(function () {
    $(this).addClass("active");
    $(".view_mores a.one").removeClass("active");
    $(".content_coll").removeClass("active");
    $(".bg_cl").removeClass("active");
  });

  var colName = "Tất cả sản phẩm";

  var colId = 0;

  var selectedViewData = "data";
</script>
</div>