<link rel="shortcut icon"
		href="<?= BASE_URL ?>bizweb.dktcdn.net/100/503/826/themes/932476/assets/checkout_favicon.ico"
		type="image/x-icon" />
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/flag-icons.min.css" />
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/checkout.vendor.min.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/checkout.min.css">
    <script
		src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/libphonenumber-v3.2.30.min.js"></script>

	<script src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/checkout.vendor.min.js"></script>



	<script src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/checkout.min.js"></script>


    <script src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/stats.min.js"></script>
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
    <style>
	.field__input:focus,
	.select2-selection:focus,
	.select2-search__field:focus {
		border-color: #ce0082;
		box-shadow: 0 0 0 1px #ce0082;
	}

	.select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
		background-color: #ce0082;
	}

	.btn {
		background-color: #ce0082;
		border-color: #ce0082;
	}

	.btn:focus {
		outline-color: #ce0082;
	}



	.btn.disabled {
		background-color: #DA3FA1;
		border-color: #DA3FA1;
	}



	.btn:hover {
		background-color: #9A0061;
		border-color: #9A0061;
	}



	.btn,
	.btn:hover,
	.btn:focus {
		color: #FFFFFF;
	}
</style>