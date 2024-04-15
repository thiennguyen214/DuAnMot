
    <div class="bodywrap">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="/"><span>Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path>
                            </svg>&nbsp;</span>
                    </li>

                    <li>
                        <a href="/account"><span>Tài khoản</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path>
                            </svg>&nbsp;</span>
                    </li>
                    <li><strong><span>Địa chỉ khách hàng</span></strong></li>

                </ul>
            </div>
        </section>
        <div class="op_address"></div>
        <section class="address">
            <div class="container page_address margin-bottom-20">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
                        <div class="block-account">
                            <h5 class="title-account">Trang tài khoản</h5>
                            <p>Xin chào, <span style="color:#ef4339;">TÚ TRƯƠNG</span>&nbsp;!</p>
                            <ul>
                                <li>
                                    <a class="title-info" href="<?= BASE_URL ?>?act=thongtintk">Thông tin tài khoản</a>
                                </li>
                                <li>
                                    <a class="title-info" href="<?= BASE_URL ?>?act=yourCart">Đơn hàng của bạn</a>
                                </li>
                                <li>
                                    <a class="title-info" href="<?= BASE_URL ?>?act=repass">Đổi mật khẩu</a>
                                </li>
                                <li>
                                    <a disabled="disabled" class="title-info active" href="javascript:void(0);">Sổ địa
                                        chỉ (2)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">

                        <h1 class="title-head">Địa chỉ của bạn</h1>
                        <p class="btn-row">
                            <button class="btn-edit-addr btn btn-primary btn-more" type="button"
                                onclick="Bizweb.CustomerAddress.toggleNewForm(); return false;">Thêm địa chỉ</button>
                        </p>
                        <div id="add_address" class="form-list modal_address modal">
                            <div class="btn-close closed_pop"><svg aria-hidden="true" focusable="false"
                                    data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
                                    <path fill="currentColor"
                                        d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                                        class=""></path>
                                </svg></div>
                            <h2 class="title_pop">
                                Thêm địa chỉ mới
                            </h2>
                            <form method="post" action="/account/addresses" id="customer_address"
                                accept-charset="UTF-8"><input name="FormType" type="hidden"
                                    value="customer_address" /><input name="utf8" type="hidden" value="true" />
                                <div class="pop_bottom">
                                    <div class="form_address">
                                        <div class="field">
                                            <fieldset class="form-group">
                                                <input type="text" name="FullName" class="form-control"
                                                    data-validation-error-msg="Không được để trống"
                                                    data-validation="required" value="" autocapitalize="words">
                                                <label>Họ tên</label>
                                            </fieldset>
                                            <p class="error-msg"></p>
                                        </div>
                                        <div class="field">
                                            <fieldset class="form-group">
                                                <input type="number" class="form-control" id="Phone" pattern="\d+"
                                                    name="Phone" maxlength="12" value="">
                                                <label>Số điện thoại</label>
                                            </fieldset>
                                        </div>
                                        <div class="field">
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="Company" value="">
                                                <label>Công ty</label>
                                            </fieldset>
                                        </div>
                                        <div class="field">
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="Address1" value="">
                                                <label>Địa chỉ</label>
                                            </fieldset>
                                        </div>
                                        <div class="field">
                                            <fieldset class="form-group select-field">
                                                <select name="Country" class="form-control vn-fix add" id="mySelect1"
                                                    data-default="Việt Nam">
                                                    <option value="Abkhazia">Abkhazia</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Central African Republic">Central African Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo-Brazzaville">Congo-Brazzaville</option>
                                                    <option value="Congo-Kinshasa">Congo-Kinshasa</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan (Nippon)">Japan (Nippon)</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="North Korea">North Korea</option>
                                                    <option value="Kosovo">Kosovo</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macedonia (FYROM)">Macedonia (FYROM)</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="South Korea">South Korea</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and
                                                        the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="South Sudan">South Sudan</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                    </option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Ossetia">South Ossetia</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="China">China</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican">Vatican</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Wales">Wales</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                </select>
                                                <label>Quốc gia</label>
                                            </fieldset>
                                        </div>
                                        <div class="group-country">
                                            <fieldset class="form-group select-field not-vn">
                                                <select name="Province" value="" class="form-control add" id="mySelect2"
                                                    data-address-type="province" data-address-zone="billing"
                                                    data-select2-id="select2-data-billingProvince"></select>
                                                <label>Tỉnh thành</label>
                                            </fieldset>
                                            <fieldset class="form-group select-field not-vn">
                                                <select name="District" class="form-control add" value="" id="mySelect3"
                                                    data-address-type="district" data-address-zone="billing"
                                                    data-select2-id="select2-data-billingDistrict"></select>
                                                <label>Quận huyện</label>
                                            </fieldset>
                                            <fieldset class="form-group select-field not-vn">
                                                <select name="Ward" class="form-control add" value="" id="mySelect4"
                                                    data-address-type="ward" data-address-zone="billing"
                                                    data-select2-id="select2-data-billingWard"></select>
                                                <label>Phường xã</label>
                                            </fieldset>
                                        </div>
                                        <div class="field">
                                            <fieldset class="form-group">
                                                <input type="text" class="form-control" name="Zip" value="">
                                                <label>Mã Zip</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="checkbox">
                                        <label class="c-input c-checkbox" style="padding-left: 20px;">
                                            <input type="checkbox" id="address_default_address_" name="IsDefault"
                                                value="true">
                                            <span class="c-indicator">Đặt là địa chỉ mặc định?</span>
                                        </label>
                                    </div>
                                    <div class="btn-row">
                                        <button
                                            class="btn btn-lg btn-dark-address btn-outline article-readmore btn-close"
                                            type="button"
                                            onclick="Bizweb.CustomerAddress.toggleNewForm(); return false;"><span>Hủy</span></button>
                                        <button class="btn btn-lg btn-primary btn-submit" id="addnew"
                                            type="submit"><span>Thêm địa chỉ</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="row total_address">


                            <div id="view_address_25959219"
                                class="customer_address col-xs-12 col-lg-12 col-md-12 col-xl-12">
                                <div class="address_info"
                                    style="border-top: 1px #ebebeb solid;padding-top: 16px;margin-top: 20px;">
                                    <div class="address-group">
                                        <div class="address form-signup">
                                            <p><strong>Họ tên: </strong> truong thai tu

                                                <span class="address-default">Địa chỉ mặc định</span>

                                            </p>
                                            <p>
                                                <strong>Địa chỉ: </strong>

                                                Khu 10 Đại Phúc, Thành Phố Bắc Ninh, Bắc Ninh,


                                                Phường Láng Thượng,


                                                Quận Đống Đa,


                                                Hà Nội,


                                                Vietnam

                                            </p>

                                            <p><strong>Số điện thoại:</strong> +84332390286</p>


                                        </div>
                                    </div>
                                    <div id="tool_address_25959219" class="btn-address">
                                        <p class="btn-row">
                                            <button class="btn-edit-addr btn btn-primary btn-edit" type="button"
                                                data-form="edit_address_25959219" aria-controls="edit_address_25959219">
                                                Chỉnh sửa địa chỉ
                                            </button>
                                            <button class="d-none btn btn-dark-address btn-edit-addr btn-delete"
                                                type="button"
                                                onclick="Bizweb.CustomerAddress.destroy(25959219);return false"><span>Xóa</span></button>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div id="view_address_25968003"
                                class="customer_address col-xs-12 col-lg-12 col-md-12 col-xl-12">
                                <div class="address_info"
                                    style="border-top: 1px #ebebeb solid;padding-top: 16px;margin-top: 20px;">
                                    <div class="address-group">
                                        <div class="address form-signup">
                                            <p><strong>Họ tên: </strong> truong thai tu

                                            </p>
                                            <p>
                                                <strong>Địa chỉ: </strong>

                                                Khu 10 Đại Phúc, Thành Phố Bắc Ninh, Bắc Ninh,


                                                Phường Sơn Lộc,


                                                Thị xã Sơn Tây,


                                                Hà Nội,


                                                Vietnam

                                            </p>

                                            <p><strong>Số điện thoại:</strong> +84332390286</p>


                                        </div>
                                    </div>
                                    <div id="tool_address_25968003" class="btn-address">
                                        <p class="btn-row">
                                            <button class="btn-edit-addr btn btn-primary btn-edit" type="button"
                                                data-form="edit_address_25968003" aria-controls="edit_address_25968003">
                                                Chỉnh sửa địa chỉ
                                            </button>
                                            <button class="btn btn-dark-address btn-edit-addr btn-delete" type="button"
                                                onclick="Bizweb.CustomerAddress.destroy(25968003);return false"><span>Xóa</span></button>
                                        </p>
                                    </div>
                                </div>
                            </div>



                            <div id="edit_address_25959219" class="form-list modal_address modal modal_edit_address">
                                <div class="btn-close closed_pop"><svg aria-hidden="true" focusable="false"
                                        data-prefix="far" data-icon="times" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                        class="svg-inline--fa fa-times fa-w-10">
                                        <path fill="currentColor"
                                            d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                                            class=""></path>
                                    </svg></div>
                                <h2 class="title_pop">
                                    Chỉnh sửa địa chỉ
                                </h2>
                                <form method="post" action="/account/addresses/25959219" id="customer_address"
                                    accept-charset="UTF-8"><input name="FormType" type="hidden"
                                        value="customer_address" /><input name="utf8" type="hidden" value="true" />
                                    <div class="pop_bottom">
                                        <div class="form_address">
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" name="FullName" class="form-control" required
                                                        value=" truong thai tu" autocapitalize="words">
                                                    <label>Họ tên</label>
                                                </fieldset>
                                                <p class="error-msg"></p>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="number" pattern="\d+" class="form-control" id="Phone"
                                                        name="Phone" maxlength="12" value="+84332390286">
                                                    <label>Số điện thoại</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="Company" value="">
                                                    <label>Công ty</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="Address1"
                                                        value="Khu 10 Đại Phúc, Thành Phố Bắc Ninh, Bắc Ninh">
                                                    <label>Địa chỉ</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group select-field">
                                                    <select name="Country" class="form-control mySelect2"
                                                        id="mySelect2_25959219" data-default="Vietnam">Vietnam<option
                                                            value="Abkhazia">Abkhazia</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo-Brazzaville">Congo-Brazzaville</option>
                                                        <option value="Congo-Kinshasa">Congo-Kinshasa</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan (Nippon)">Japan (Nippon)</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="North Korea">North Korea</option>
                                                        <option value="Kosovo">Kosovo</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macedonia (FYROM)">Macedonia (FYROM)</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia">Micronesia</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                            and the Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Ossetia">South Ossetia</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="China">China</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican">Vatican</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Wales">Wales</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                    </select>
                                                    <label>Quốc gia</label>
                                                </fieldset>
                                            </div>
                                            <div class="group-country">
                                                <fieldset class="form-group select-field not-vn">
                                                    <select name="Province" value="Hà Nội" data-default="Hà Nội"
                                                        class="form-control add province myselect"
                                                        id="mySelect3_25959219" data-address-type="province"
                                                        data-address-zone="25959219"
                                                        data-select2-id="select2-data-billingProvince"></select>
                                                    <label>Tỉnh thành</label>
                                                </fieldset>
                                                <fieldset class="form-group select-field not-vn">
                                                    <select name="District" class="form-control add  district myselect"
                                                        data-default="Quận Đống Đa" value="Quận Đống Đa"
                                                        id="mySelect4_25959219" data-address-type="district"
                                                        data-address-zone="25959219"
                                                        data-select2-id="select2-data-billingDistrict"></select>
                                                    <label>Quận huyện</label>
                                                </fieldset>
                                                <fieldset class="form-group select-field not-vn">
                                                    <select name="Ward" class="form-control add ward myselect"
                                                        data-default="Phường Láng Thượng" value="Phường Láng Thượng"
                                                        id="mySelect5_25959219" data-address-type="ward"
                                                        data-address-zone="25959219"
                                                        data-select2-id="select2-data-billingWard"></select>
                                                    <label>Phường xã</label>
                                                </fieldset>
                                            </div>

                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="Zip" value="">
                                                    <label>Mã Zip</label>
                                                </fieldset>
                                            </div>

                                        </div>
                                        <div class="checkbox hidden ">
                                            <label class="c-input c-checkbox" style="padding-left: 20px;">
                                                <input type="checkbox" name="IsDefault" value="true">
                                                <span class="c-indicator">Đặt là địa chỉ mặc định?</span>
                                            </label>
                                        </div>
                                        <div class="btn-row">
                                            <button class="btn btn-dark-address btn-fix-addr btn-close" type="button"
                                                data-form="edit_address_25959219">
                                                Hủy
                                            </button>
                                            <button class="btn btn-primary btn-submit" id="update"><span>Cập nhật địa
                                                    chỉ</span></button>

                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="edit_address_25968003" class="form-list modal_address modal modal_edit_address">
                                <div class="btn-close closed_pop"><svg aria-hidden="true" focusable="false"
                                        data-prefix="far" data-icon="times" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                        class="svg-inline--fa fa-times fa-w-10">
                                        <path fill="currentColor"
                                            d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                                            class=""></path>
                                    </svg></div>
                                <h2 class="title_pop">
                                    Chỉnh sửa địa chỉ
                                </h2>
                                <form method="post" action="/account/addresses/25968003" id="customer_address"
                                    accept-charset="UTF-8"><input name="FormType" type="hidden"
                                        value="customer_address" /><input name="utf8" type="hidden" value="true" />
                                    <div class="pop_bottom">
                                        <div class="form_address">
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" name="FullName" class="form-control" required
                                                        value=" truong thai tu" autocapitalize="words">
                                                    <label>Họ tên</label>
                                                </fieldset>
                                                <p class="error-msg"></p>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="number" pattern="\d+" class="form-control" id="Phone"
                                                        name="Phone" maxlength="12" value="+84332390286">
                                                    <label>Số điện thoại</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="Company" value="">
                                                    <label>Công ty</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="Address1"
                                                        value="Khu 10 Đại Phúc, Thành Phố Bắc Ninh, Bắc Ninh">
                                                    <label>Địa chỉ</label>
                                                </fieldset>
                                            </div>
                                            <div class="field">
                                                <fieldset class="form-group select-field">
                                                    <select name="Country" class="form-control mySelect2"
                                                        id="mySelect2_25968003" data-default="Vietnam">Vietnam<option
                                                            value="Abkhazia">Abkhazia</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo-Brazzaville">Congo-Brazzaville</option>
                                                        <option value="Congo-Kinshasa">Congo-Kinshasa</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan (Nippon)">Japan (Nippon)</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="North Korea">North Korea</option>
                                                        <option value="Kosovo">Kosovo</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macedonia (FYROM)">Macedonia (FYROM)</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia">Micronesia</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                            and the Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Ossetia">South Ossetia</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="China">China</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican">Vatican</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Wales">Wales</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                    </select>
                                                    <label>Quốc gia</label>
                                                </fieldset>
                                            </div>
                                            <div class="group-country">
                                                <fieldset class="form-group select-field not-vn">
                                                    <select name="Province" value="Hà Nội" data-default="Hà Nội"
                                                        class="form-control add province myselect"
                                                        id="mySelect3_25968003" data-address-type="province"
                                                        data-address-zone="25968003"
                                                        data-select2-id="select2-data-billingProvince"></select>
                                                    <label>Tỉnh thành</label>
                                                </fieldset>
                                                <fieldset class="form-group select-field not-vn">
                                                    <select name="District" class="form-control add  district myselect"
                                                        data-default="Thị xã Sơn Tây" value="Thị xã Sơn Tây"
                                                        id="mySelect4_25968003" data-address-type="district"
                                                        data-address-zone="25968003"
                                                        data-select2-id="select2-data-billingDistrict"></select>
                                                    <label>Quận huyện</label>
                                                </fieldset>
                                                <fieldset class="form-group select-field not-vn">
                                                    <select name="Ward" class="form-control add ward myselect"
                                                        data-default="Phường Sơn Lộc" value="Phường Sơn Lộc"
                                                        id="mySelect5_25968003" data-address-type="ward"
                                                        data-address-zone="25968003"
                                                        data-select2-id="select2-data-billingWard"></select>
                                                    <label>Phường xã</label>
                                                </fieldset>
                                            </div>

                                            <div class="field">
                                                <fieldset class="form-group">
                                                    <input type="text" class="form-control" name="Zip" value="">
                                                    <label>Mã Zip</label>
                                                </fieldset>
                                            </div>

                                        </div>
                                        <div class="checkbox ">
                                            <label class="c-input c-checkbox" style="padding-left: 20px;">
                                                <input type="checkbox" name="IsDefault" value="true">
                                                <span class="c-indicator">Đặt là địa chỉ mặc định?</span>
                                            </label>
                                        </div>
                                        <div class="btn-row">
                                            <button class="btn btn-dark-address btn-fix-addr btn-close" type="button"
                                                data-form="edit_address_25968003">
                                                Hủy
                                            </button>
                                            <button class="btn btn-primary btn-submit" id="update"><span>Cập nhật địa
                                                    chỉ</span></button>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </section>

        

    <script id="SideCartTemplate" type="text/template">

<form action="/cart" method="post" novalidate class="cart ajaxcart">
    <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
        
        <div class="ajaxcart__row">
            <div class="ajaxcart__product cart_product" data-line="{{line}}">
                <a href="{{url}}" class="ajaxcart__product-image cart_image" title="{{name}}"><img width="80" height="80" src="{{img}}" alt="{{name}}"></a>
                <div class="grid__item cart_info">
                    <div class="ajaxcart__product-name-wrapper cart_name">
                        <a href="{{url}}" class="ajaxcart__product-name h4" title="{{name}}">{{name}}</a>
                        
                        <span class="ajaxcart__product-meta variant-title">{{variation}}</span>
                        {{/if}}
                        <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="{{line}}">Xóa</a>
                    </div>
                    <div class="grid">
                        <div class="grid__item one-half cart_select cart_item_name">
                        <label class="cart_quantity">Số lượng</label>
                            <div class="ajaxcart__qty input-group-btn">
                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="{{key}}" data-qty="{{itemMinus}}" data-line="{{line}}" aria-label="-">
                                -
                                </button>
                                <input type="text" name="updates[]" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="{{itemQty}}" min="0" data-id="{{key}}" data-line="{{line}}" aria-label="quantity" pattern="[0-9]*">
                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="{{key}}" data-line="{{line}}" data-qty="{{itemAdd}}" aria-label="+">
                                +							
                                </button>
                            </div>
                        </div>
                        <div class="grid__item one-half text-right cart_prices">
                            <span class="cart-price">{{price}}</span>
                            
                        </div>
                    </div>
                   
                    <div class="grid grid--table">
                        <div class="grid__item text-right">
                            <ul class="order-discount order-discount--list order-discount--title order-discount--cart order-discount--cart-title" aria-label="Giảm giá">
                                
                                <li class="order-discount__item">
                                    <span class="icon icon-saletag" aria-hidden="true"></span>{{ this.discount_application.title }} (-{{{ this.formattedAmount }}})
                                </li>
                                {{/each}}
                            </ul>
                        </div>
                    </div>
                    {{/if}}
                </div>
            </div>
        </div>
        {{/items}}

        
    </div>
    <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
        <div class="ajaxcart__subtotal">
            
            <div class="grid grid--table ajaxcart__discounts">
                
                <div class="grid__item two-thirds">
                    <span class="order-discount order-discount--title order-discount--cart-title">
                        <span class="icon icon-saletag" aria-hidden="true"></span><span class="visually-hidden">%:</span>{{ this.title }}
                    </span>
                </div>
                <div class="grid__item one-third text-right">
                    <span class="order-discount">-{{{ this.formattedAmount }}}</span>
                </div>
                {{/each}}
            </div>
            {{/if}}
            <div class="cart__subtotal">
                <div class="cart__col-6">Tổng tiền:</div>
                <div class="text-right cart__totle"><span class="total-price">{{{totalPrice}}}</span></div>
            </div>
        </div>
        <div class="cart__btn-proceed-checkout-dt">
            <button onclick="location.href='/checkout'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
        </div>
    </div>
</form>


</script>

    <script id="CartTemplate" type="text/template">

<form action="/cart" method="post" novalidate class="cart ajaxcart cartpage">
    <div class="cart-header-info">
        <div>Thông tin sản phẩm</div><div>Đơn giá</div><div>Số lượng</div><div>Thành tiền</div>
    </div>
    <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
        
        <div class="ajaxcart__row">
            <div class="ajaxcart__product cart_product {{itemquatang}}" data-line="{{line}}" dataidgift="{{idpro}}">
                <a href="{{url}}" class="ajaxcart__product-image cart_image" title="{{name}}"><img src="{{img}}" alt="{{name}}"></a>
                <div class="grid__item cart_info">
                    <div class="ajaxcart__product-name-wrapper cart_name">
                        <a href="{{url}}" class="ajaxcart__product-name h4" title="{{name}}">{{name}}</a>
                       
                        <span class="ajaxcart__product-meta variant-title">{{variation}}</span>
                        {{/if}}
                        <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="{{line}}">Xóa</a>
                        
                    </div>
                    <div class="grid">
                        <div class="grid__item one-half text-right cart_prices">
                            <span class="cart-price">{{price}}</span>
                            
                        </div>
                    </div>
                    <div class="grid {{nopro}}">
                        <div class="grid__item one-half cart_select">
                            <div class="ajaxcart__qty input-group-btn">
                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="{{key}}" data-qty="{{itemMinus}}" data-line="{{line}}" aria-label="-">
                                    -
                                </button>
                                <input type="text" name="updates[]" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="{{itemQty}}" min="0" data-id="{{key}}" data-line="{{line}}" aria-label="quantity" pattern="[0-9]*">
                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="{{key}}" data-line="{{line}}" data-qty="{{itemAdd}}" aria-label="+">
                                    +							
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid {{nopro}}">
                        <div class="grid__item one-half text-right cart_prices ">
                            <span class="cart-price">{{linePrice}}</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{/items}}

        
    </div>
    <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
        <div class="row">
            <div class="col-lg-4 col-12 offset-md-8 offset-lg-8 offset-xl-8">
                <div class="ajaxcart__subtotal">
                    
                    <div class="grid grid--table ajaxcart__discounts">
                        
                        <div class="grid__item two-thirds">
                            <span class="order-discount order-discount--title order-discount--cart-title">
                                <span class="icon icon-saletag" aria-hidden="true"></span><span class="visually-hidden">%:</span>{{ this.title }}
                            </span>
                        </div>
                        <div class="grid__item one-third text-right">
                            <span class="order-discount">-{{{ this.formattedAmount }}}</span>
                        </div>
                        {{/each}}
                    </div>
                    {{/if}}
                    <div class="cart__subtotal">
                        <div class="cart__col-6">Tổng tiền:</div>
                        <div class="text-right cart__totle"><span class="total-price">{{{totalPrice}}}</span></div>
                    </div>
                </div>
                <div class="cart__btn-proceed-checkout-dt">
                    <button onclick='goToCheckout(event)' type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
</form>

</script>

    <script id="CartHeaderTemplate" type="text/template">

<form action="/cart" method="post" novalidate class="cart ajaxcart cartheader">
    <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
        
        <div class="ajaxcart__row">
            <div class="ajaxcart__product cart_product {{itemquatang}}" data-line="{{line}}">
                <a href="{{url}}" class="ajaxcart__product-image cart_image" title="{{name}}"><img width="80" height="80" src="{{img}}" alt="{{name}}"></a>
                <div class="grid__item cart_info">
                    <div class="ajaxcart__product-name-wrapper cart_name">
                        <a href="{{url}}" class="ajaxcart__product-name h4" title="{{name}}">{{name}}</a>
                        
                        <span class="ajaxcart__product-meta variant-title">{{variation}}</span>
                        {{/if}}
                        <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="{{line}}">Xóa</a>
                    </div>
                    <div class="grid">
                        <div class="grid__item one-half cart_select cart_item_name {{nopro}}">
                        <label class="cart_quantity">Số lượng</label>
                            <div class="ajaxcart__qty input-group-btn">
                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="{{key}}" data-qty="{{itemMinus}}" data-line="{{line}}" aria-label="-">
                                -
                                </button>
                                <input type="text" name="updates[]" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="{{itemQty}}" min="0" data-id="{{key}}" data-line="{{line}}" aria-label="quantity" pattern="[0-9]*">
                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="{{key}}" data-line="{{line}}" data-qty="{{itemAdd}}" aria-label="+">
                                +							
                                </button>
                            </div>
                        </div>
                        <div class="grid__item one-half text-right cart_prices">
                        <span class="cart-price">{{price}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{/items}}
    </div>
    <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
        <div class="ajaxcart__subtotal">
            <div class="cart__subtotal">
                <div class="cart__col-6">Tổng tiền:</div>
                <div class="text-right cart__totle"><span class="total-price">{{{totalPrice}}}</span></div>
            </div>
        </div>
        <div class="cart__btn-proceed-checkout-dt">
            <button onclick="location.href='/checkout'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
        </div>
    </div>
</form>


</script>

    <script id="CartPopupTemplate" type="text/template">

<form action="/cart" method="post" novalidate class="cart ajaxcart cartpopup">
    <div class="cart-header-info">
        <div>Thông tin sản phẩm</div><div>Đơn giá</div><div>Số lượng</div><div>Thành tiền</div>
    </div>
    <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
      
        <div class="ajaxcart__row">
            <div class="ajaxcart__product cart_product" data-line="{{line}}">
                <a href="{{url}}" class="ajaxcart__product-image cart_image" title="{{name}}"><img width="80" height="80" src="{{img}}" alt="{{name}}"></a>
                <div class="grid__item cart_info">
                    <div class="ajaxcart__product-name-wrapper cart_name">
                        <a href="{{url}}" class="ajaxcart__product-name h4" title="{{name}}">{{name}}</a>
                        
                        <span class="ajaxcart__product-meta variant-title">{{variation}}</span>
                        {{/if}}
                        <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="{{line}}">Xóa</a>
                        
                    </div>
                    <div class="grid">
                        <div class="grid__item one-half text-right cart_prices">
                            <span class="cart-price">{{price}}</span>
                            
                        </div>
                    </div>
                    <div class="grid">
                        <div class="grid__item one-half cart_select">
                            <div class="ajaxcart__qty input-group-btn">
                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="{{key}}" data-qty="{{itemMinus}}" data-line="{{line}}" aria-label="-">
                                    -
                                </button>
                                <input type="text" name="updates[]" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="{{itemQty}}" min="0" data-id="{{key}}" data-line="{{line}}" aria-label="quantity" pattern="[0-9]*">
                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="{{key}}" data-line="{{line}}" data-qty="{{itemAdd}}" aria-label="+">
                                    +							
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="grid__item one-half text-right cart_prices">
                            <span class="cart-price">{{linePrice}}ssss</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{/items}}
    </div>
    <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
        <div class="row">
            <div class="col-lg-4 col-12 offset-md-8 offset-lg-8 offset-xl-8">
                <div class="ajaxcart__subtotal">
                    <div class="cart__subtotal">
                        <div class="cart__col-6">Tổng tiền:</div>
                        <div class="text-right cart__totle"><span class="total-price">{{{totalPrice}}}</span></div>
                    </div>
                </div>
                <div class="cart__btn-proceed-checkout-dt">
                    <button onclick="location.href='/checkout'" type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
</form>


</script>

    <script id="CartMobileTemplate" type="text/template">

<form action="/cart" method="post" novalidate class="cart ajaxcart cart-mobile">
    <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body">
        
        <div class="ajaxcart__row">
            <div class="ajaxcart__product cart_product" data-line="{{line}}">
                <a href="{{url}}" class="ajaxcart__product-image cart_image" title="{{name}}"><img width="80" height="80" src="{{img}}" alt="{{name}}"></a>
                <div class="grid__item cart_info">
                    <div class="ajaxcart__product-name-wrapper cart_name">
                        <a href="{{url}}" class="ajaxcart__product-name h4" title="{{name}}">{{name}}</a>
                        
                        <span class="ajaxcart__product-meta variant-title">{{variation}}</span>
                        {{/if}}
                    </div>
                    <div class="grid">
                        <div class="grid__item one-half cart_select cart_item_name">
                            <div class="ajaxcart__qty input-group-btn">
                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="{{key}}" data-qty="{{itemMinus}}" data-line="{{line}}" aria-label="-">
                                -
                                </button>
                                <input type="text" name="updates[]" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="{{itemQty}}" min="0" data-id="{{key}}" data-line="{{line}}" aria-label="quantity" pattern="[0-9]*">
                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="{{key}}" data-line="{{line}}" data-qty="{{itemAdd}}" aria-label="+">
                                +							
                                </button>
                            </div>
                        </div>
                        <div class="grid__item one-half text-right cart_prices">
                            <span class="cart-price">{{price}}</span>
                            
                            <a class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="javascript:;" data-line="{{line}}">Xóa</a>
                        </div>
                    </div>
                  
                    <div class="grid grid--table">
                        <div class="grid__item text-right">
                            <ul class="order-discount order-discount--list order-discount--title order-discount--cart order-discount--cart-title" aria-label="Giảm giá">
                               
                                <li class="order-discount__item">
                                    <span class="icon icon-saletag" aria-hidden="true"></span>{{ this.discount_application.title }} (-{{{ this.formattedAmount }}})
                                </li>
                                {{/each}}
                            </ul>
                        </div>
                    </div>
                    {{/if}}
                </div>
            </div>
        </div>
        {{/items}}

        
    </div>
    <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
        <div class="ajaxcart__subtotal">
           
            <div class="grid grid--table ajaxcart__discounts">
                
                <div class="grid__item two-thirds">
                    <span class="order-discount order-discount--title order-discount--cart-title">
                        <span class="icon icon-saletag" aria-hidden="true"></span><span class="visually-hidden">%:</span>{{ this.title }}
                    </span>
                </div>
                <div class="grid__item one-third text-right">
                    <span class="order-discount">-{{{ this.formattedAmount }}}</span>
                </div>
                {{/each}}
            </div>
            {{/if}}
            <div class="cart__subtotal">
                <div class="cart__col-6">Tổng tiền:</div>
                <div class="text-right cart__totle"><span class="total-price">{{{totalPrice}}}</span></div>
            </div>
        </div>
        <div class="cart__btn-proceed-checkout-dt">
            <button onclick='goToCheckout(event)' type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
        </div>
    </div>
</form>


</script>


    <script id="JsQty" type="text/template">

<div class="js-qty">
    <button type="button" class="js-qty__adjust js-qty__adjust--minus items-count" data-id="{{key}}" data-qty="{{itemMinus}}" aria-label="-">
    -
    </button>
    <input type="text" class="js-qty__num number-sidebar" maxlength="3" value="{{itemQty}}" min="1" data-id="{{key}}" aria-label="quantity" pattern="[0-9]*" name="{{inputName}}" id="{{inputId}}">
    <button type="button" class="js-qty__adjust js-qty__adjust--plus items-count" data-id="{{key}}" data-qty="{{itemAdd}}" aria-label="+">
    +
    </button>
</div>

</script>



    <div id="popup-cart-mobile" class="popup-cart-mobile">
        <div class="header-popcart">
            <div class="top-cart-header">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="682.66669pt" viewBox="-21 -21 682.66669 682.66669"
                        width="682.66669pt">
                        <path
                            d="m322.820312 387.933594 279.949219-307.273438 36.957031 33.671875-314.339843 345.023438-171.363281-162.902344 34.453124-36.238281zm297.492188-178.867188-38.988281 42.929688c5.660156 21.734375 8.675781 44.523437 8.675781 68.003906 0 148.875-121.125 270-270 270s-270-121.125-270-270 121.125-270 270-270c68.96875 0 131.96875 26.007812 179.746094 68.710938l33.707031-37.113282c-58.761719-52.738281-133.886719-81.597656-213.453125-81.597656-85.472656 0-165.835938 33.285156-226.273438 93.726562-60.441406 60.4375-93.726562 140.800782-93.726562 226.273438s33.285156 165.835938 93.726562 226.273438c60.4375 60.441406 140.800782 93.726562 226.273438 93.726562s165.835938-33.285156 226.273438-93.726562c60.441406-60.4375 93.726562-140.800782 93.726562-226.273438 0-38.46875-6.761719-75.890625-19.6875-110.933594zm0 0" />
                    </svg>
                    Mua hàng thành công
                </span>
            </div>
            <div class="media-content bodycart-mobile">
            </div>
            <a class="noti-cart-count" href="/cart" title="Giỏ hàng"> Giỏ hàng của bạn hiện có <span
                    class="count_item_pr"></span> sản phẩm </a>
            <a title="Đóng" class="cart_btn-close iconclose">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                    y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z" />
                        </g>
                    </g>
                </svg>
            </a>
            <div class="bottom-action">
                <div class="cart_btn-close tocontinued">
                    Tiếp tục mua hàng
                </div>
                <a href="/checkout" class="checkout">
                    Thanh toán ngay
                </a>
            </div>
        </div>
    </div>

    <div id="quick-view-product" class="quickview-product" style="display:none;">
        <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="quick-view-product"></div>
        <div id="quickview-modal" style="display:none;">
            <div class="block-quickview primary_block details-product">
                <div class="row">
                    <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
                        <div class="image-block large-image col_large_default">
                            <span class="view_full_size">
                                <a class="img-product" title="" href="javascript:;">
                                    <img src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/logo.png?1711356971279"
                                        id="product-featured-image-quickview"
                                        class="img-responsive product-featured-image-quickview" alt="quickview" />
                                </a>
                            </span>
                            <div class="loading-imgquickview" style="display:none;"></div>
                        </div>
                        <div class="more-view-wrapper clearfix">
                            <div class="thumbs_quickview owl_nav_custome1 swiper-container" id="thumbs_list_quickview">
                                <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq swiper-wrapper"
                                    id="thumblist_quickview"></ul>
                                <div class="swiper-button-prev">
                                </div>
                                <div class="swiper-button-next">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border">

                        <div class="head-qv group-status">
                            <h3 class="qwp-name title-product">abc</h3>
                            <div class="vend-qv group-status">

                                <div class="left_vend">
                                    <div class="first_status ">Tình trạng:
                                        <span class="soluong status_name"></span>
                                    </div>
                                    <div class="top_sku first_status">Mã sản phẩm:
                                        <span class="sku_ status_name"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quickview-info">
                            <span class="prices price-box">
                                <span class="price product-price"></span>
                                <del class="old-price"></del>
                            </span>
                        </div>

                        <div class="product-description product-summary">
                            <div class="rte">

                            </div>
                        </div>

                        <form action="/cart/add" method="post" enctype="multipart/form-data"
                            class="quick_option variants form-ajaxtocart form-product">
                            <span class="price-product-detail d-none" style="opacity: 0;">
                                <span class=""></span>
                            </span>
                            <select name='variantId' class="d-none" style="display:none"></select>
                            <div class="form_product_content">
                                <div class="count_btn_style quantity_wanted_p">
                                    <div class=" soluong1 clearfix">
                                        <span class="soluong_h">Số lượng:</span>
                                        <div class="sssssscustom input_number_product">
                                            <button class="btn_num num_1 button button_qty"
                                                onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) && qtyqv > 1 ) result.value--;return false;">-</button>
                                            <input type="text" id="quantity-detail" name="quantity" value="1"
                                                maxlength="2" class="form-control prd_quantity"
                                                onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                onchange="if(this.value == 0)this.value=1;">
                                            <button class="btn_num num_2 button button_qty"
                                                onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">+</button>
                                        </div>
                                    </div>
                                    <div class="button_actions clearfix">
                                        <button type="submit"
                                            class="btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail">
                                            <span class="btn-content text_1">Thêm vào giỏ hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;">
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
                    <path fill="currentColor"
                        d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                        class=""></path>
                </svg>
            </a>
        </div>
    </div>
    
    <div class="addThis_listSharing" style="display: block;">
        <div class="listSharing_action">
            <button type="button" class="addThis_close" data-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill-rule="evenodd">
                        <g transform="translate(-1341.000000, -90.000000)">
                            <g transform="translate(1341.000000, 90.000000)">
                                <polygon
                                    points="19 6.4 17.6 5 12 10.6 6.4 5 5 6.4 10.6 12 5 17.6 6.4 19 12 13.4 17.6 19 19 17.6 13.4 12">
                                </polygon>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
            <ul class="addThis_listing">
                <li class="addThis_item">
                    <a class="addThis_item--icon" href="tel:19006750" rel="nofollow" aria-label="phone">
                        <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="url(#paint2_linear)"></circle>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.0087 9.35552C14.1581 9.40663 14.3885 9.52591 14.5208 9.61114C15.3315 10.148 17.5888 13.0324 18.3271 14.4726C18.7495 15.2949 18.8903 15.9041 18.758 16.3558C18.6214 16.8415 18.3953 17.0971 17.384 17.9109C16.9786 18.239 16.5988 18.5756 16.5391 18.6651C16.3855 18.8866 16.2617 19.3212 16.2617 19.628C16.266 20.3395 16.7269 21.6305 17.3328 22.6232C17.8021 23.3944 18.6428 24.3828 19.4749 25.1413C20.452 26.0361 21.314 26.6453 22.2869 27.1268C23.5372 27.7488 24.301 27.9064 24.86 27.6466C25.0008 27.5826 25.1501 27.4974 25.1971 27.4591C25.2397 27.4208 25.5683 27.0202 25.9268 26.5772C26.618 25.7079 26.7759 25.5674 27.2496 25.4055C27.8513 25.201 28.4657 25.2563 29.0844 25.5716C29.5538 25.8145 30.5779 26.4493 31.2393 26.9095C32.1098 27.5187 33.9703 29.0355 34.2221 29.3381C34.6658 29.8834 34.7427 30.5821 34.4439 31.3534C34.1281 32.1671 32.8992 33.6925 32.0415 34.3444C31.2649 34.9323 30.7145 35.1581 29.9891 35.1922C29.3917 35.222 29.1442 35.1709 28.3804 34.8556C22.3893 32.3887 17.6059 28.7075 13.8081 23.65C11.8239 21.0084 10.3134 18.2688 9.28067 15.427C8.67905 13.7696 8.64921 13.0495 9.14413 12.2017C9.35753 11.8438 10.2664 10.9575 10.9278 10.4633C12.0288 9.64524 12.5365 9.34273 12.9419 9.25754C13.2193 9.19787 13.7014 9.24473 14.0087 9.35552Z"
                                fill="white"></path>
                            <defs>
                                <linearGradient id="paint2_linear" x1="22" y1="-7.26346e-09" x2="22.1219" y2="40.5458"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="50%" stop-color="#e8434c"></stop>
                                    <stop offset="100%" stop-color="#d61114"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <span class="tooltip-text">Gọi ngay cho chúng tôi</span>
                    </a>
                </li>
                <li class="addThis_item">
                    <a class="addThis_item--icon" href="https://zalo.me/19006750" target="_blank"
                        rel="nofollow noreferrer" aria-label="zalo">
                        <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="url(#paint4_linear)"></circle>
                            <g clip-path="url(#clip0)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z"
                                    fill="white"></path>
                                <path
                                    d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z"
                                    fill="white"></path>
                                <path
                                    d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z"
                                    fill="white"></path>
                                <path
                                    d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z"
                                    fill="#0068FF"></path>
                            </g>
                            <defs>
                                <linearGradient id="paint4_linear" x1="22" y1="0" x2="22" y2="44"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="50%" stop-color="#3985f7"></stop>
                                    <stop offset="100%" stop-color="#1272e8"></stop>
                                </linearGradient>
                                <clipPath id="clip0">
                                    <rect width="26.3641" height="24.2" fill="white"
                                        transform="translate(8.78906 9.90234)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="tooltip-text">Chat với chúng tôi qua Zalo</span>
                    </a>
                </li>
                <li class="addThis_item">
                    <a class="addThis_item--icon" href="/lien-he" aria-label="Liên hệ">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="22" fill="url(#paint5_linear)"></circle>
                            <path class="down"
                                d="M22 10C17.0374 10 13 13.7367 13 18.3297C13 24.0297 21.0541 32.3978 21.397 32.7512C21.7191 33.0832 22.2815 33.0826 22.603 32.7512C22.9459 32.3978 31 24.0297 31 18.3297C30.9999 13.7367 26.9626 10 22 10ZM22 22.5206C19.5032 22.5206 17.4719 20.6406 17.4719 18.3297C17.4719 16.0188 19.5032 14.1388 22 14.1388C24.4968 14.1388 26.528 16.0189 26.528 18.3297C26.528 20.6406 24.4968 22.5206 22 22.5206Z"
                                fill="white"></path>
                            <defs>
                                <linearGradient id="paint5_linear" x1="22" y1="0" x2="22" y2="44"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="50%" stop-color="#fecf72"></stop>
                                    <stop offset="100%" stop-color="#ef9f00"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <span class="tooltip-text">Thông tin cửa hàng</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="listSharing_overlay"></div>
    </div>
    <div class="addThis_iconContact">
        <div class="box-item item-contact">
            <div class="svgico">
                <svg width="34" height="35" viewBox="0 0 34 35" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.35522 31V25.416H5.41122V30.064H7.61122V31H4.35522ZM8.97509 26.216C8.76176 26.216 8.60709 26.168 8.51109 26.072C8.42043 25.976 8.37509 25.8533 8.37509 25.704V25.544C8.37509 25.3947 8.42043 25.272 8.51109 25.176C8.60709 25.08 8.76176 25.032 8.97509 25.032C9.18309 25.032 9.33509 25.08 9.43109 25.176C9.52709 25.272 9.57509 25.3947 9.57509 25.544V25.704C9.57509 25.8533 9.52709 25.976 9.43109 26.072C9.33509 26.168 9.18309 26.216 8.97509 26.216ZM8.46309 26.824H9.48709V31H8.46309V26.824ZM12.834 24.712L13.842 25.944L13.33 26.344L12.37 25.424L11.41 26.344L10.898 25.944L11.906 24.712H12.834ZM12.362 31.096C12.0527 31.096 11.7754 31.0453 11.53 30.944C11.29 30.8373 11.0847 30.6907 10.914 30.504C10.7487 30.312 10.6207 30.0827 10.53 29.816C10.4394 29.544 10.394 29.24 10.394 28.904C10.394 28.5733 10.4367 28.2747 10.522 28.008C10.6127 27.7413 10.7407 27.5147 10.906 27.328C11.0714 27.136 11.274 26.9893 11.514 26.888C11.754 26.7813 12.026 26.728 12.33 26.728C12.6554 26.728 12.938 26.784 13.178 26.896C13.418 27.008 13.6154 27.16 13.77 27.352C13.9247 27.544 14.0394 27.768 14.114 28.024C14.194 28.2747 14.234 28.544 14.234 28.832V29.168H11.458V29.272C11.458 29.576 11.5434 29.8213 11.714 30.008C11.8847 30.1893 12.138 30.28 12.474 30.28C12.73 30.28 12.938 30.2267 13.098 30.12C13.2634 30.0133 13.41 29.8773 13.538 29.712L14.09 30.328C13.9194 30.568 13.6847 30.7573 13.386 30.896C13.0927 31.0293 12.7514 31.096 12.362 31.096ZM12.346 27.496C12.074 27.496 11.858 27.5867 11.698 27.768C11.538 27.9493 11.458 28.184 11.458 28.472V28.536H13.17V28.464C13.17 28.176 13.098 27.944 12.954 27.768C12.8154 27.5867 12.6127 27.496 12.346 27.496ZM15.135 31V26.824H16.159V27.52H16.199C16.2843 27.296 16.4176 27.1093 16.599 26.96C16.7856 26.8053 17.0416 26.728 17.367 26.728C17.799 26.728 18.1296 26.8693 18.359 27.152C18.5883 27.4347 18.703 27.8373 18.703 28.36V31H17.679V28.464C17.679 28.1653 17.6256 27.9413 17.519 27.792C17.4123 27.6427 17.2363 27.568 16.991 27.568C16.8843 27.568 16.7803 27.584 16.679 27.616C16.583 27.6427 16.495 27.6853 16.415 27.744C16.3403 27.7973 16.279 27.8667 16.231 27.952C16.183 28.032 16.159 28.128 16.159 28.24V31H15.135ZM21.7287 25.08H22.7527V27.52H22.7927C22.8781 27.296 23.0114 27.1093 23.1927 26.96C23.3794 26.8053 23.6354 26.728 23.9607 26.728C24.3927 26.728 24.7234 26.8693 24.9527 27.152C25.1821 27.4347 25.2967 27.8373 25.2967 28.36V31H24.2727V28.464C24.2727 28.1653 24.2194 27.9413 24.1127 27.792C24.0061 27.6427 23.8301 27.568 23.5847 27.568C23.4781 27.568 23.3741 27.584 23.2727 27.616C23.1767 27.6427 23.0887 27.6853 23.0087 27.744C22.9341 27.7973 22.8727 27.8667 22.8247 27.952C22.7767 28.032 22.7527 28.128 22.7527 28.24V31H21.7287V25.08ZM28.5918 24.712L29.5998 25.944L29.0878 26.344L28.1278 25.424L27.1678 26.344L26.6558 25.944L27.6638 24.712H28.5918ZM28.1198 31.096C27.8105 31.096 27.5332 31.0453 27.2878 30.944C27.0478 30.8373 26.8425 30.6907 26.6718 30.504C26.5065 30.312 26.3785 30.0827 26.2878 29.816C26.1972 29.544 26.1518 29.24 26.1518 28.904C26.1518 28.5733 26.1945 28.2747 26.2798 28.008C26.3705 27.7413 26.4985 27.5147 26.6638 27.328C26.8292 27.136 27.0318 26.9893 27.2718 26.888C27.5118 26.7813 27.7838 26.728 28.0878 26.728C28.4132 26.728 28.6958 26.784 28.9358 26.896C29.1758 27.008 29.3732 27.16 29.5278 27.352C29.6825 27.544 29.7972 27.768 29.8718 28.024C29.9518 28.2747 29.9918 28.544 29.9918 28.832V29.168H27.2158V29.272C27.2158 29.576 27.3012 29.8213 27.4718 30.008C27.6425 30.1893 27.8958 30.28 28.2318 30.28C28.4878 30.28 28.6958 30.2267 28.8558 30.12C29.0212 30.0133 29.1678 29.8773 29.2958 29.712L29.8478 30.328C29.6772 30.568 29.4425 30.7573 29.1438 30.896C28.8505 31.0293 28.5092 31.096 28.1198 31.096ZM28.1038 27.496C27.8318 27.496 27.6158 27.5867 27.4558 27.768C27.2958 27.9493 27.2158 28.184 27.2158 28.472V28.536H28.9278V28.464C28.9278 28.176 28.8558 27.944 28.7118 27.768C28.5732 27.5867 28.3705 27.496 28.1038 27.496ZM28.1038 32.552C27.8958 32.552 27.7465 32.5067 27.6558 32.416C27.5705 32.3307 27.5278 32.2213 27.5278 32.088V31.912C27.5278 31.7787 27.5705 31.6667 27.6558 31.576C27.7465 31.4907 27.8958 31.448 28.1038 31.448C28.3118 31.448 28.4585 31.4907 28.5438 31.576C28.6345 31.6667 28.6798 31.7787 28.6798 31.912V32.088C28.6798 32.2213 28.6345 32.3307 28.5438 32.416C28.4585 32.5067 28.3118 32.552 28.1038 32.552Z">
                    </path>
                    <path
                        d="M27.2212 0H10.7532C9.76511 0 8.97461 0.834345 8.97461 1.82643V12.334C8.97461 13.3487 9.78701 14.1604 10.7532 14.1604H22.1051L24.6741 16.8211C24.7839 16.9338 24.9157 17.0015 25.0693 17.0015C25.3768 17.0015 25.6402 16.7535 25.6402 16.4153V14.1604H27.2212C28.2092 14.1604 28.9997 13.3261 28.9997 12.334V1.82643C28.9997 0.811779 28.1873 0 27.2212 0ZM13.2783 9.04195C12.378 9.04195 11.6315 8.2753 11.6315 7.35077C11.6315 6.42631 12.378 5.65966 13.2783 5.65966C14.1785 5.65966 14.925 6.42631 14.925 7.35077C14.925 8.2753 14.2005 9.04195 13.2783 9.04195ZM19.0531 9.04195C18.1528 9.04195 17.4062 8.2753 17.4062 7.35077C17.4062 6.42631 18.1528 5.65966 19.0531 5.65966C19.9533 5.65966 20.6998 6.42631 20.6998 7.35077C20.6998 8.2753 19.9533 9.04195 19.0531 9.04195ZM24.8059 9.04195C23.9056 9.04195 23.1591 8.2753 23.1591 7.35077C23.1591 6.42631 23.9056 5.65966 24.8059 5.65966C25.7061 5.65966 26.4526 6.42631 26.4526 7.35077C26.4526 8.2753 25.7061 9.04195 24.8059 9.04195Z">
                    </path>
                    <path
                        d="M7.9649 12.3782V8.79297H6.16437C5.52762 8.79297 5.00066 9.33418 5.00066 9.98807V16.8878C4.97869 17.5868 5.50564 18.128 6.16437 18.128H7.19637V19.6162C7.19637 19.8192 7.37202 19.9995 7.56964 19.9995C7.67944 19.9995 7.76727 19.9544 7.83312 19.8868L9.52385 18.1505H16.9894C17.6261 18.1505 18.1531 17.6094 18.1531 16.9555V15.2418H10.7535C9.2165 15.2418 7.9649 13.9566 7.9649 12.3782Z">
                    </path>
                </svg>
                <span class="svgico--close">
                    <svg viewBox="0 0 19 19" role="presentation">
                        <path
                            d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
                            fill-rule="evenodd"></path>
                    </svg> </span>
            </div>
        </div>
    </div>
    <script>
        $('.addThis_iconContact .item-contact,.addThis_listSharing .addThis_close').on('click', function (e) {
            if ($('.addThis_listSharing').hasClass('active')) {
                $('.addThis_listSharing').removeClass('active');
                $('.addThis_listSharing').fadeOut(150);
            }
            else {
                $('.addThis_listSharing').fadeIn(100);
                $('.addThis_listSharing').addClass('active');
            }
        });
        $('.listSharing_overlay').on('click', function (e) {
            $('.addThis_listSharing').removeClass('active');
            $('.addThis_listSharing').fadeOut(150);
        })
    </script>

    
            
            <a title="Đóng" class="close-popup-sapo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                    y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z">
                            </path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <script>
        $('.popup-sapo .icon').click(function () {
            $(".popup-sapo").toggleClass("active");
        });
        $('.close-popup-sapo').click(function () {
            $(".popup-sapo").toggleClass("active");
        }); 
    </script>


    <div class="popup-ngonngu">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2"
                viewBox="0 0 16 16">
                <path
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z" />
            </svg>
        </div>
        <ul class="language">
            <li>
                <a href="#"><img width="16" height="11"
                        src="//bizweb.dktcdn.net/100/496/044/themes/927290/assets/vn.png?1699256128806"
                        alt="Tiếng Việt">
                    <span>Tiếng Việt</span>
                </a>
            </li>
            <li>
                <a href="#"><img width="16" height="11"
                        src="//bizweb.dktcdn.net/100/496/044/themes/927290/assets/en.png?1699256128806" alt="Tiếng Anh">
                    <span>English</span>
                </a>
            </li>
        </ul>
    </div>




    <a target="_blank" class="livechat-mes" href="https://m.me/sapo.vn">
        <img width="60" height="60"
            src="//bizweb.dktcdn.net/100/503/826/themes/932476/assets/messenger.svg?1711356971279" alt="Messenger">
    </a>


