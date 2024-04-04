<!DOCTYPE html>
<html class="floating-labels">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Bean Perfume - Thanh toán đơn hàng" />
	<title>Bean Perfume - Thanh toán đơn hàng</title>
	
	
	
	
<link rel="shortcut icon" href="<?= BASE_URLS ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/checkout_favicon.ico?1711356971279" type="image/x-icon" />
<link rel="stylesheet" href="<?= BASE_URLS ?>cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />

	<link rel="stylesheet" href="<?= BASE_URLS ?>dist/css/checkout.vendor.min.css?v=4fcd86c">


	<link rel="stylesheet" href="<?= BASE_URLS ?>dist/css/checkout.min.css?v=ce7712f">

<!-- Begin checkout custom css -->
<style>
.field__input:focus,
.select2-selection:focus, .select2-search__field:focus
{
	border-color: #ce0082;
	box-shadow: 0 0 0 1px #ce0082;
}
.select2-container--default .select2-results__option--highlighted.select2-results__option--selectable
{
	background-color: #ce0082;
}
.btn {
	background-color: #ce0082;
	border-color: #ce0082;
}
.btn:focus {
	outline-color:#ce0082;
}



.btn.disabled {
	background-color: #DA3FA1;
	border-color: #DA3FA1;
}



.btn:hover {
	background-color: #9A0061;
	border-color: #9A0061;
}



.btn, .btn:hover, .btn:focus {
	color: #FFFFFF;
}
</style>
<!-- End checkout custom css -->

<script src="<?= BASE_URLS ?>bizweb.dktcdn.net/assets/themes_support/libphonenumber-v3.2.30.min.js?1711356971279"></script>

	<script src="<?= BASE_URLS ?>dist/js/checkout.vendor.min.js?v=11006c9"></script>


	
		<script src="<?= BASE_URLS ?>dist/js/checkout.min.js?v=a0ee933"></script>
	


<script>
	var Bizweb = Bizweb || {};
	Bizweb.id = '503826';
	Bizweb.store = 'bean-perfume.mysapo.net';
	
	Bizweb.template = 'checkout';
	Bizweb.Checkout = Bizweb.Checkout || {};
	
</script>

<script>
	window.BizwebAnalytics = window.BizwebAnalytics || {};
	window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
	window.BizwebAnalytics.meta.currency = 'VND';
	window.BizwebAnalytics.tracking_url = '/s';
	var meta = {};
	
	
	for (var attr in meta) {
		window.BizwebAnalytics.meta[attr] = meta[attr];
	}
</script>

	
		<script src="<?= BASE_URLS ?>dist/js/stats.min.js?v=f021d1e"></script>
	

</head>

<body data-no-turbolink>
	
	<header class="banner">
		<div class="wrap">
			<div class="logo logo--center">
	
		<a href="/">
			<img class="logo__image  logo__image--medium " alt="Bean Perfume" src="<?= BASE_URLS ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/checkout_logo.png?1711356971279" />
		</a>
	
</div>
		</div>
	</header>
	<aside>
		<button class="order-summary-toggle" data-toggle="#order-summary" data-toggle-class="order-summary--is-collapsed">
			<span class="wrap">
				<span class="order-summary-toggle__inner">
					<span class="order-summary-toggle__text expandable">
						Đơn hàng (1 sản phẩm)
					</span>
					<span class="order-summary-toggle__total-recap" data-bind="getTextTotalPrice()"></span>
				</span>
			</span>
		</button>
	</aside>
	
	
		
	
	<div data-tg-refresh="checkout" id="checkout" class="content">
		<form id="checkoutForm" method="post"
			  data-define="{
				loadingShippingErrorMessage: 'Không thể load phí vận chuyển. Vui lòng thử lại',
				loadingReductionCodeErrorMessage: 'Có lỗi xảy ra khi áp dụng khuyến mãi. Vui lòng thử lại',
				submitingCheckoutErrorMessage: 'Có lỗi xảy ra khi xử lý. Vui lòng thử lại',
				requireShipping: true,
				requireDistrict: false,
				requireWard: false,
				shouldSaveCheckoutAbandon: true}"
			  action="/checkout/13c61b815dab40a69e3c5e67214d34eb"
			  data-bind-event-submit="handleCheckoutSubmit(event)"
			  data-bind-event-keypress="handleCheckoutKeyPress(event)"
			  data-bind-event-change="handleCheckoutChange(event)">
			<input type="hidden" name="_method" value="patch" />
			<div class="wrap">
				<main class="main">
					<header class="main__header">
						<div class="logo logo--center">
	
		<a href="/">
			<img class="logo__image  logo__image--medium " alt="Bean Perfume" src="<?= BASE_URLS ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/checkout_logo.png?1711356971279" />
		</a>
	
</div>
					</header>
					<div class="main__content">
						<article class="animate-floating-labels row">
							<div class="col col--two">
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
												
												Thông tin nhận hàng
												
											</h2>
											
												
													<a href="<?= BASE_URLS ?>account/login?returnUrl=/checkout/13c61b815dab40a69e3c5e67214d34eb">
														<i class="fa fa-user-circle-o fa-lg"></i>
														<span>Đăng nhập </span>
													</a>
												
											
										</div>
									</div>
									<div class="section__content">
										<div class="fieldset">
											

											
												
													<div class="field " data-bind-class="{'field--show-floating-label': email}">
														<div class="field__input-wrapper">
															<label for="email" class="field__label">
																Email
															</label>
															<input name="email" id="email"
																   type="email" class="field__input"
																   data-bind="email" value="">
														</div>
														
													</div>
												
											

											<div class="field " data-bind-class="{'field--show-floating-label': billing.name}">
												<div class="field__input-wrapper">
													<label for="billingName" class="field__label">Họ và tên</label>
													<input name="billingName" id="billingName"
														   type="text" class="field__input"
														   data-bind="billing.name" value="">
												</div>
												
											</div>
											
											<div class="field " data-bind-class="{'field--show-floating-label': billing.phone}">
												<div class="field__input-wrapper field__input-wrapper--connected" data-define="{phoneInput: new InputPhone(this)}">
													<label for="billingPhone" class="field__label">
														Số điện thoại (tùy chọn)
													</label>
													<input name="billingPhone" id="billingPhone"
														   type="tel" class="field__input"
														   data-bind="billing.phone" value="">
													<div class="field__input-phone-region-wrapper">
														<select class="field__input select-phone-region" name="billingPhoneRegion" data-init-value="VN"></select>
													</div>
												</div>
												
											</div>
											
											
											<div class="field " data-bind-class="{'field--show-floating-label': billing.address}">
												<div class="field__input-wrapper">
													<label for="billingAddress" class="field__label">
														Địa chỉ (tùy chọn)
													</label>
													<input name="billingAddress" id="billingAddress"
														   type="text" class="field__input"
														   data-bind="billing.address" value="">
												</div>
												
											</div>
											
											
											<div class="field field--show-floating-label ">
												<div class="field__input-wrapper field__input-wrapper--select2">
													<label for="billingProvince" class="field__label">Tỉnh thành</label>
													<select name="billingProvince" id="billingProvince"
															size="1"
															class="field__input field__input--select"
															data-bind="billing.province" value=""
															data-address-type="province"
															data-address-zone="billing">
														
													</select>
												</div>
												
											</div>
											
											<div class="field field--show-floating-label "
												 >
												<div class="field__input-wrapper field__input-wrapper--select2">
													<label for="billingDistrict" class="field__label">
														Quận huyện (tùy chọn)
													</label>
													<select name="billingDistrict"
															id="billingDistrict"
															size="1"
															class="field__input field__input--select"
															value=""
															data-bind="billing.district"
															data-address-type="district"
															data-address-zone="billing">
														
													</select>
												</div>
												
											</div>
											
											<div class="field field--show-floating-label "
												 >
												<div class="field__input-wrapper field__input-wrapper--select2">
													<label for="billingWard" class="field__label">
														Phường xã (tùy chọn)
													</label>
													<select name="billingWard" id="billingWard"
															size="1"
															class="field__input field__input--select"
															value=""
															data-bind="billing.ward"
															data-address-type="ward"
															data-address-zone="billing">
														
													</select>
												</div>
												
											</div>
											
											
											
											
										</div>
									</div>
								</section>
								
								<div class="fieldset">
									<h3 class="visually-hidden">Ghi chú</h3>
									<div class="field " data-bind-class="{'field--show-floating-label': note}">
										<div class="field__input-wrapper">
											<label for="note" class="field__label">
												Ghi chú (tùy chọn)
											</label>
											<textarea name="note" id="note"
													  class="field__input"
													  data-bind="note"></textarea>
										</div>
										
									</div>
								</div>
								
							</div>
							<div class="col col--two">
								

								
									
									
										
									
								
								<section class="section" data-define="{shippingMethod: ''}">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
												Vận chuyển
											</h2>
										</div>
									</div>
									<div class="section__content" data-tg-refresh="refreshShipping" id="shippingMethodList"
										 data-define="{isAddressSelecting: true, shippingMethods: []}">
										<div class="alert alert--loader spinner spinner--active" data-bind-show="isLoadingShippingMethod">
											<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
												<use href="#spinner"></use>
											</svg>
										</div>

										
										<div class="alert alert-retry alert--danger hide"
											 data-bind-event-click="handleShippingMethodErrorRetry()"
											 data-bind-show="!isLoadingShippingMethod && !isAddressSelecting && isLoadingShippingError">
											<span data-bind="loadingShippingErrorMessage"></span> <i class="fa fa-refresh"></i>
										</div>

										
										<div class="content-box" data-bind-show="!isLoadingShippingMethod && !isAddressSelecting && !isLoadingShippingError">

											
										</div>
										
										<div class="alert alert--info hide" data-bind-show="!isLoadingShippingMethod && isAddressSelecting">
											Vui lòng nhập thông tin giao hàng
										</div>
									</div>
								</section>
								
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
												Thanh toán
											</h2>
										</div>
									</div>
									<div class="section__content">
										
										<div class="content-box" data-define="{paymentMethod: undefined}">
											
											
											<div class="content-box__row">
											<div class="radio-wrapper">
													<div class="radio__input">
														<input name="paymentMethod" id="paymentMethod-693321"
															   type="radio" class="input-radio"
															   data-bind="paymentMethod"
															   value="693321"
															   
															   data-provider-id="4"
															   >
													</div>
													<label for="paymentMethod-693321" class="radio__label">
														<span class="radio__label__primary">Thu hộ (COD)</span>
														<span class="radio__label__accessory">
															<span class="radio__label__icon">
																<i class="payment-icon payment-icon--4"></i>
															</span>
														</span>
																									
													</label>
												</div>
												
											</div>
											
											<div class="content-box__row">
											<div class="radio-wrapper">
													<div class="radio__input">
														<input name="paymentMethod" id="paymentMethod-693319"
															   type="radio" class="input-radio"
															   data-bind="paymentMethod"
															   value="693319"
															   
															   data-provider-id="3"
															   >
													</div>
													<label for="paymentMethod-693319" class="radio__label">
														<span class="radio__label__primary">Chuyển khoản</span>
														<span class="radio__label__accessory">
															<span class="radio__label__icon">
																<i class="payment-icon payment-icon--3"></i>
															</span>
														</span>
																									
													</label>
												</div>
												
											</div>
											
										</div>
									</div>
								</section>
							</div>
						</article>
						<div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
							<button type="submit" class="btn btn-checkout spinner"
									data-bind-class="{'spinner--active': isSubmitingCheckout}"
									data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
								<span class="spinner-label">ĐẶT HÀNG</span>
								<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
									<use href="#spinner"></use>
								</svg>
							</button>
							
							<a href="/cart" class="previous-link">
								<i class="previous-link__arrow">❮</i>
								<span class="previous-link__content">Quay về giỏ hàng</span>
							</a>
							
						</div>

						<div id="common-alert" data-tg-refresh="refreshError">
							
							
							<div class="alert alert--danger hide-on-desktop"
								 data-bind-show="!isSubmitingCheckout && isSubmitingCheckoutError"
								 data-bind="submitingCheckoutErrorMessage">
							</div>
						</div>
					</div>
					
				</main>
				<aside class="sidebar">
					<div class="sidebar__header">
						<h2 class="sidebar__title">
							Đơn hàng (1 sản phẩm)
						</h2>
					</div>
					<div class="sidebar__content">
						<div id="order-summary" class="order-summary order-summary--is-collapsed">
							<div class="order-summary__sections">
								<div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
									<table class="product-table">
										<caption class="visually-hidden">Chi tiết đơn hàng</caption>
										<thead class="product-table__header">
											<tr>
												<th>
													<span class="visually-hidden">Ảnh sản phẩm</span>
												</th>
												<th>
													<span class="visually-hidden">Mô tả</span>
												</th>
												<th>
													<span class="visually-hidden">Sổ lượng</span>
												</th>
												<th>
													<span class="visually-hidden">Đơn giá</span>
												</th>
											</tr>
										</thead>
										<tbody>
											
											<tr class="product">
												<td class="product__image">
													<div class="product-thumbnail">
														<div class="product-thumbnail__wrapper" data-tg-static>
															<img src="<?= BASE_URLS ?>bizweb.dktcdn.net/thumb/thumb/100/503/826/products/mancera-cedrat-boise-6698ab0d070-min-removebg-preview.png?v=1701246971380" alt="" class="product-thumbnail__image" />
														</div>
														<span class="product-thumbnail__quantity">1</span>
													</div>
												</td>
												<th class="product__description">
													<span class="product__description__name">
														Mancera Cedrat Boise
													</span>
													
													
												</th>
												<td class="product__quantity visually-hidden"><em>Số lượng:</em> 1</td>
												<td class="product__price">
													
													1.800.000₫
													
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<div class="order-summary__section order-summary__section--discount-code"
									 data-tg-refresh="refreshDiscount" id="discountCode">
									<h3 class="visually-hidden">Mã khuyến mại</h3>
									<div class="edit_checkout animate-floating-labels">
										<div class="fieldset">
											<div class="field ">
												<div class="field__input-btn-wrapper">
													<div class="field__input-wrapper">
														<label for="reductionCode" class="field__label">Nhập mã giảm giá</label>
														<input name="reductionCode" id="reductionCode"
															   type="text" class="field__input"
															   autocomplete="off"
															   data-bind-disabled="isLoadingReductionCode"
															   data-bind-event-keypress="handleReductionCodeKeyPress(event)"
															   
															   data-define="{reductionCode: null}"
															   
															   data-bind="reductionCode">
													</div>
													<button class="field__input-btn btn spinner" type="button"
															data-bind-disabled="isLoadingReductionCode || !reductionCode"
															data-bind-class="{'spinner--active': isLoadingReductionCode, 'btn--disabled': !reductionCode}"
															data-bind-event-click="applyReductionCode()">
														<span class="spinner-label">Áp dụng</span>
														<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
															<use href="#spinner"></use>
														</svg>
													</button>
												</div>
												
												<p class="field__message field__message--error field__message--error-always-show"
												   data-bind-show="!isLoadingReductionCode && isLoadingReductionCodeError"
												   data-bind="loadingReductionCodeErrorMessage">
												</p>
											</div>
											
										</div>
									</div>
								</div>
								<div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element"
									 data-define="{subTotalPriceText: '1.800.000₫'}"
									 data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
									<table class="total-line-table">
										<caption class="visually-hidden">Tổng giá trị</caption>
										<thead>
											<tr>
												<td><span class="visually-hidden">Mô tả</span></td>
												<td><span class="visually-hidden">Giá tiền</span></td>
											</tr>
										</thead>
										<tbody class="total-line-table__tbody">
											<tr class="total-line total-line--subtotal">
												<th class="total-line__name">
													Tạm tính
												</th>
												<td class="total-line__price">1.800.000₫</td>
											</tr>
											
											<tr class="total-line total-line--shipping-fee">
												<th class="total-line__name">
													Phí vận chuyển
												</th>
												<td class="total-line__price" data-bind="getTextShippingPrice()">
												</td>
											</tr>
											
										</tbody>
										<tfoot class="total-line-table__footer">
											<tr class="total-line payment-due">
												<th class="total-line__name">
													<span class="payment-due__label-total">
														Tổng cộng
													</span>
												</th>
												<td class="total-line__price">
													<span class="payment-due__price" data-bind="getTextTotalPrice()"></span>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
									<button type="submit" class="btn btn-checkout spinner"
											data-bind-class="{'spinner--active': isSubmitingCheckout}"
											data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
										<span class="spinner-label">ĐẶT HÀNG</span>
										<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
											<use href="#spinner"></use>
										</svg>
									</button>

									
									<a href="/cart" class="previous-link">
										<i class="previous-link__arrow">❮</i>
										<span class="previous-link__content">Quay về giỏ hàng</span>
									</a>
									
								</div>
								<div id="common-alert-sidebar" data-tg-refresh="refreshError">
									
									
									<div class="alert alert--danger hide-on-mobile hide"
										 data-bind-show="!isSubmitingCheckout && isSubmitingCheckoutError"
										 data-bind="submitingCheckoutErrorMessage">
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</form>
		
		
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			<symbol id="spinner">
				<svg viewBox="0 0 30 30">
					<circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="85%"
							cx="50%" cy="50%" r="40%">
						<animateTransform attributeName="transform"
							type="rotate"
							from="0 15 15"
							to="360 15 15"
							dur="0.7s"
							repeatCount="indefinite" />
					</circle>
				</svg>
			</symbol>
		</svg>
	</div>
</body>
</html>