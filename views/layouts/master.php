<!DOCTYPE html>
<html lang="vi">

<!-- Mirrored from bean-perfume.mysapo.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 01:06:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8" />
	<meta name="theme-color" content="#ce0082" />

	<link rel="canonical" href="index.html" />

	<meta name='revisit-after' content='2 days' />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name="description" content="" />

	<title>
		<?= $tittle ?>
	</title>
	<meta name="keywords" content="Cập nhật sau" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Bean Perfume" />

	<meta property="og:image"
		content="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/logo02fb.png?1709175143725" />
	<meta property="og:image:secure_url"
		content="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/logo02fb.png?1709175143725" />
	<meta property="og:description" content="" />

	<meta property="og:url" content="index.html" />

	<meta property="og:site_name" content="Bean Perfume" />
	<link rel="icon"
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/favicon02fb.png?1709175143725"
		type="image/x-icon" />
	<link rel="preload" as="script"
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/jquery02fb.js?1709175143725" />
	<script
		src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/jquery02fb.js?1709175143725"
		type="text/javascript"></script>
	<link rel="preload" as="script"
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/swiper02fb.js?1709175143725" />
	<script
		src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/swiper02fb.js?1709175143725"
		type="text/javascript"></script>
	<link rel="preload" as="script"
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.js?1709175143725" />
	<script
		src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/lazy02fb.js?1709175143725"
		type="text/javascript"></script>
	<script>
		//notify js
		!(function (t) {
			"function" == typeof define && define.amd
				? define(["jquery"], t)
				: t("object" == typeof exports ? require("jquery") : jQuery);
		})(function (t) {
			function s(s) {
				var e = !1;
				return (
					t('[data-notify="container"]').each(function (i, n) {
						var a = t(n),
							o = a.find('[data-notify="title"]').text().trim(),
							r = a.find('[data-notify="message"]').html().trim(),
							l =
								o ===
								t("<div>" + s.settings.content.title + "</div>")
									.html()
									.trim(),
							d =
								r ===
								t("<div>" + s.settings.content.message + "</div>")
									.html()
									.trim(),
							g = a.hasClass("alert-" + s.settings.type);
						return l && d && g && (e = !0), !e;
					}),
					e
				);
			}
			function e(e, n, a) {
				var o = {
					content: {
						message: "object" == typeof n ? n.message : n,
						title: n.title ? n.title : "",
						icon: n.icon ? n.icon : "",
						url: n.url ? n.url : "#",
						target: n.target ? n.target : "-",
					},
				};
				(a = t.extend(!0, {}, o, a)),
					(this.settings = t.extend(!0, {}, i, a)),
					(this._defaults = i),
					"-" === this.settings.content.target &&
					(this.settings.content.target = this.settings.url_target),
					(this.animations = {
						start:
							"webkitAnimationStart oanimationstart MSAnimationStart animationstart",
						end: "webkitAnimationEnd oanimationend MSAnimationEnd animationend",
					}),
					"number" == typeof this.settings.offset &&
					(this.settings.offset = {
						x: this.settings.offset,
						y: this.settings.offset,
					}),
					(this.settings.allow_duplicates ||
						(!this.settings.allow_duplicates && !s(this))) &&
					this.init();
			}
			var i = {
				element: "body",
				position: null,
				type: "info",
				allow_dismiss: !0,
				allow_duplicates: !0,
				newest_on_top: !1,
				showProgressbar: !1,
				placement: { from: "top", align: "right" },
				offset: 20,
				spacing: 10,
				z_index: 1031,
				delay: 5e3,
				timer: 1e3,
				url_target: "_blank",
				mouse_over: null,
				animate: { enter: "animated fadeInDown", exit: "animated fadeOutUp" },
				onShow: null,
				onShown: null,
				onClose: null,
				onClosed: null,
				icon_type: "class",
				template:
					'<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0}" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>',
			};
			(String.format = function () {
				for (var t = arguments[0], s = 1; s < arguments.length; s++)
					t = t.replace(RegExp("\\{" + (s - 1) + "\\}", "gm"), arguments[s]);
				return t;
			}),
				t.extend(e.prototype, {
					init: function () {
						var t = this;
						this.buildNotify(),
							this.settings.content.icon && this.setIcon(),
							"#" != this.settings.content.url && this.styleURL(),
							this.styleDismiss(),
							this.placement(),
							this.bind(),
							(this.notify = {
								$ele: this.$ele,
								update: function (s, e) {
									var i = {};
									"string" == typeof s ? (i[s] = e) : (i = s);
									for (var n in i)
										switch (n) {
											case "type":
												this.$ele.removeClass("alert-" + t.settings.type),
													this.$ele
														.find(
															'[data-notify="progressbar"] > .progress-bar'
														)
														.removeClass("progress-bar-" + t.settings.type),
													(t.settings.type = i[n]),
													this.$ele
														.addClass("alert-" + i[n])
														.find(
															'[data-notify="progressbar"] > .progress-bar'
														)
														.addClass("progress-bar-" + i[n]);
												break;
											case "icon":
												var a = this.$ele.find('[data-notify="icon"]');
												"class" === t.settings.icon_type.toLowerCase()
													? a
														.removeClass(t.settings.content.icon)
														.addClass(i[n])
													: (a.is("img") || a.find("img"),
														a.attr("src", i[n]));
												break;
											case "progress":
												var o =
													t.settings.delay - t.settings.delay * (i[n] / 100);
												this.$ele.data("notify-delay", o),
													this.$ele
														.find('[data-notify="progressbar"] > div')
														.attr("aria-valuenow", i[n])
														.css("width", i[n] + "%");
												break;
											case "url":
												this.$ele
													.find('[data-notify="url"]')
													.attr("href", i[n]);
												break;
											case "target":
												this.$ele
													.find('[data-notify="url"]')
													.attr("target", i[n]);
												break;
											default:
												this.$ele
													.find('[data-notify="' + n + '"]')
													.html(i[n]);
										}
									var r =
										this.$ele.outerHeight() +
										parseInt(t.settings.spacing) +
										parseInt(t.settings.offset.y);
									t.reposition(r);
								},
								close: function () {
									t.close();
								},
							});
					},
					buildNotify: function () {
						var s = this.settings.content;
						(this.$ele = t(
							String.format(
								this.settings.template,
								this.settings.type,
								s.title,
								s.message,
								s.url,
								s.target
							)
						)),
							this.$ele.attr(
								"data-notify-position",
								this.settings.placement.from +
								"-" +
								this.settings.placement.align
							),
							this.settings.allow_dismiss ||
							this.$ele
								.find('[data-notify="dismiss"]')
								.css("display", "none"),
							((this.settings.delay > 0 || this.settings.showProgressbar) &&
								this.settings.showProgressbar) ||
							this.$ele.find('[data-notify="progressbar"]').remove();
					},
					setIcon: function () {
						"class" === this.settings.icon_type.toLowerCase()
							? this.$ele
								.find('[data-notify="icon"]')
								.addClass(this.settings.content.icon)
							: this.$ele.find('[data-notify="icon"]').is("img")
								? this.$ele
									.find('[data-notify="icon"]')
									.attr("src", this.settings.content.icon)
								: this.$ele
									.find('[data-notify="icon"]')
									.append(
										'<img src="' +
										this.settings.content.icon +
										'" alt="Notify Icon" />'
									);
					},
					styleDismiss: function () {
						this.$ele
							.find('[data-notify="dismiss"]')
							.css({
								position: "absolute",
								right: "10px",
								top: "5px",
								zIndex: this.settings.z_index + 2,
							});
					},
					styleURL: function () {
						this.$ele
							.find('[data-notify="url"]')
							.css({
								backgroundImage:
									"url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)",
								height: "100%",
								left: 0,
								position: "absolute",
								top: 0,
								width: "100%",
								zIndex: this.settings.z_index + 1,
							});
					},
					placement: function () {
						var s = this,
							e = this.settings.offset.y,
							i = {
								display: "inline-block",
								margin: "0px auto",
								position: this.settings.position
									? this.settings.position
									: "body" === this.settings.element
										? "fixed"
										: "absolute",
								transition: "all .5s ease-in-out",
								zIndex: this.settings.z_index,
							},
							n = !1,
							a = this.settings;
						switch (
						(t(
							'[data-notify-position="' +
							this.settings.placement.from +
							"-" +
							this.settings.placement.align +
							'"]:not([data-closing="true"])'
						).each(function () {
							e = Math.max(
								e,
								parseInt(t(this).css(a.placement.from)) +
								parseInt(t(this).outerHeight()) +
								parseInt(a.spacing)
							);
						}),
							this.settings.newest_on_top === !0 &&
							(e = this.settings.offset.y),
							(i[this.settings.placement.from] = e + "px"),
							this.settings.placement.align)
						) {
							case "left":
							case "right":
								i[this.settings.placement.align] =
									this.settings.offset.x + "px";
								break;
							case "center":
								(i.left = 0), (i.right = 0);
						}
						this.$ele.css(i).addClass(this.settings.animate.enter),
							t.each(["webkit-", "moz-", "o-", "ms-", ""], function (t, e) {
								s.$ele[0].style[e + "AnimationIterationCount"] = 1;
							}),
							t(this.settings.element).append(this.$ele),
							this.settings.newest_on_top === !0 &&
							((e =
								parseInt(e) +
								parseInt(this.settings.spacing) +
								this.$ele.outerHeight()),
								this.reposition(e)),
							t.isFunction(s.settings.onShow) &&
							s.settings.onShow.call(this.$ele),
							this.$ele
								.one(this.animations.start, function () {
									n = !0;
								})
								.one(this.animations.end, function () {
									t.isFunction(s.settings.onShown) &&
										s.settings.onShown.call(this);
								}),
							setTimeout(function () {
								n ||
									(t.isFunction(s.settings.onShown) &&
										s.settings.onShown.call(this));
							}, 600);
					},
					bind: function () {
						var s = this;
						if (
							(this.$ele
								.find('[data-notify="dismiss"]')
								.on("click", function () {
									s.close();
								}),
								this.$ele
									.mouseover(function () {
										t(this).data("data-hover", "true");
									})
									.mouseout(function () {
										t(this).data("data-hover", "false");
									}),
								this.$ele.data("data-hover", "false"),
								this.settings.delay > 0)
						) {
							s.$ele.data("notify-delay", s.settings.delay);
							var e = setInterval(function () {
								var t =
									parseInt(s.$ele.data("notify-delay")) - s.settings.timer;
								if (
									("false" === s.$ele.data("data-hover") &&
										"pause" === s.settings.mouse_over) ||
									"pause" != s.settings.mouse_over
								) {
									var i = ((s.settings.delay - t) / s.settings.delay) * 100;
									s.$ele.data("notify-delay", t),
										s.$ele
											.find('[data-notify="progressbar"] > div')
											.attr("aria-valuenow", i)
											.css("width", i + "%");
								}
								t > -s.settings.timer || (clearInterval(e), s.close());
							}, s.settings.timer);
						}
					},
					close: function () {
						var s = this,
							e = parseInt(this.$ele.css(this.settings.placement.from)),
							i = !1;
						this.$ele
							.data("closing", "true")
							.addClass(this.settings.animate.exit),
							s.reposition(e),
							t.isFunction(s.settings.onClose) &&
							s.settings.onClose.call(this.$ele),
							this.$ele
								.one(this.animations.start, function () {
									i = !0;
								})
								.one(this.animations.end, function () {
									t(this).remove(),
										t.isFunction(s.settings.onClosed) &&
										s.settings.onClosed.call(this);
								}),
							setTimeout(function () {
								i ||
									(s.$ele.remove(),
										s.settings.onClosed && s.settings.onClosed(s.$ele));
							}, 600);
					},
					reposition: function (s) {
						var e = this,
							i =
								'[data-notify-position="' +
								this.settings.placement.from +
								"-" +
								this.settings.placement.align +
								'"]:not([data-closing="true"])',
							n = this.$ele.nextAll(i);
						this.settings.newest_on_top === !0 && (n = this.$ele.prevAll(i)),
							n.each(function () {
								t(this).css(e.settings.placement.from, s),
									(s =
										parseInt(s) +
										parseInt(e.settings.spacing) +
										t(this).outerHeight());
							});
					},
				}),
				(t.notify = function (t, s) {
					var i = new e(this, t, s);
					return i.notify;
				}),
				(t.notifyDefaults = function (s) {
					return (i = t.extend(!0, {}, i, s));
				}),
				(t.notifyClose = function (s) {
					void 0 === s || "all" === s
						? t("[data-notify]")
							.find('[data-notify="dismiss"]')
							.trigger("click")
						: t('[data-notify-position="' + s + '"]')
							.find('[data-notify="dismiss"]')
							.trigger("click");
				});
		});
		//cookie
		!(function (e) {
			var n;
			if (
				("function" == typeof define && define.amd && (define(e), (n = !0)),
					"object" == typeof exports && ((module.exports = e()), (n = !0)),
					!n)
			) {
				var t = window.Cookies,
					o = (window.Cookies = e());
				o.noConflict = function () {
					return (window.Cookies = t), o;
				};
			}
		})(function () {
			function e() {
				for (var e = 0, n = {}; e < arguments.length; e++) {
					var t = arguments[e];
					for (var o in t) n[o] = t[o];
				}
				return n;
			}
			function n(e) {
				return e.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent);
			}
			return (function t(o) {
				function r() { }
				function i(n, t, i) {
					if ("undefined" != typeof document) {
						"number" ==
							typeof (i = e({ path: "/" }, r.defaults, i)).expires &&
							(i.expires = new Date(1 * new Date() + 864e5 * i.expires)),
							(i.expires = i.expires ? i.expires.toUTCString() : "");
						try {
							var c = JSON.stringify(t);
							/^[\{\[]/.test(c) && (t = c);
						} catch (e) { }
						(t = o.write
							? o.write(t, n)
							: encodeURIComponent(String(t)).replace(
								/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,
								decodeURIComponent
							)),
							(n = encodeURIComponent(String(n))
								.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent)
								.replace(/[\(\)]/g, escape));
						var f = "";
						for (var u in i)
							i[u] &&
								((f += "; " + u),
									!0 !== i[u] && (f += "=" + i[u].split(";")[0]));
						return (document.cookie = n + "=" + t + f);
					}
				}
				function c(e, t) {
					if ("undefined" != typeof document) {
						for (
							var r = {},
							i = document.cookie ? document.cookie.split("; ") : [],
							c = 0;
							c < i.length;
							c++
						) {
							var f = i[c].split("="),
								u = f.slice(1).join("=");
							t || '"' !== u.charAt(0) || (u = u.slice(1, -1));
							try {
								var a = n(f[0]);
								if (((u = (o.read || o)(u, a) || n(u)), t))
									try {
										u = JSON.parse(u);
									} catch (e) { }
								if (((r[a] = u), e === a)) break;
							} catch (e) { }
						}
						return e ? r[e] : r;
					}
				}
				return (
					(r.set = i),
					(r.get = function (e) {
						return c(e, !1);
					}),
					(r.getJSON = function (e) {
						return c(e, !0);
					}),
					(r.remove = function (n, t) {
						i(n, "", e(t, { expires: -1 }));
					}),
					(r.defaults = {}),
					(r.withConverter = t),
					r
				);
			})(function () { });
		});
	</script>
	<link rel="preload" as='style' type="text/css"
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/main.scss02fb.css?1709175143725" />
	<link rel="preload" as='style' type="text/css"
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/index.scss02fb.css?1709175143725" />
	<link rel="preload" as='style' type="text/css"
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/bootstrap-4-3-min02fb.css?1709175143725" />
	<link rel="preload" as='style' type="text/css"
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/swiper.scss02fb.css?1709175143725" />
	<link rel="stylesheet"
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/bootstrap-4-3-min02fb.css?1709175143725" />
	<link
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/main.scss02fb.css?1709175143725"
		rel="stylesheet" type="text/css" media="all" />
	<link
		href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/swiper.scss02fb.css?1709175143725"
		rel="stylesheet" type="text/css" media="all" />


	<?php if (!empty($style) && $style) {
		require_once PATH_VIEW . $style . '.php';
	} ?>




	<script src="<?= BASE_URL ?>assets/client/bean-perfume.mysapo.net/dist/js/stats.min8612.js?v=f021d1e"></script>
	<script>
		$(document).ready(function ($) {
			awe_lazyloadImage();
		});
		function awe_lazyloadImage() {
			var ll = new LazyLoad({
				elements_selector: ".lazyload",
				load_delay: 100,
				threshold: 0
			});
		} window.awe_lazyloadImage = awe_lazyloadImage;
	</script>
</head>

<body>


	<!-- tìm kiếm -->
	<?php require_once PATH_VIEW_USER . '/partials/header.php' ?>
	<!-- content -->
	<?php require_once PATH_VIEW . $view . ".php" ?>

	<!-- footer -->
	<?php require_once PATH_VIEW_USER . '/partials/footer.php' ?>



</body>
<!-- Mirrored from bean-perfume.mysapo.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2024 01:08:18 GMT -->

</html>