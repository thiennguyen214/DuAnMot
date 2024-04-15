</div>
<div class="bodywrap">
    <link rel="preload" as="script"
        href="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/jquery-listnav02fb.js?1709175143725" />
    <script src="<?= BASE_URL ?>assets/client/bizweb.dktcdn.net/100/503/826/themes/932476/assets/jquery-listnav02fb.js?1709175143725"
        type="text/javascript"></script>
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="index.html"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp;</span>
                </li>

                <li><strong><span>Thương hiệu</span></strong></li>

            </ul>
        </div>
    </section>
    <section class="page">
        <div class="container">
            <div class="pg_page padding-top-15">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title category-title">
                            <h1 class="title-head d-none"><a href="#">Thương hiệu</a></h1>
                        </div>
                        <div class="content-page rte">

                            <div class="mega-content mega-menu-shop mega-menu-brand">
                                <ul id="brandlist" class="menu-alphabet clearfix row">
                                    <li id="all" class="col-md-12 col-sm-12 col-12">
                                    </li>
                                    <?php foreach ($fnames as $fname) { ?>
                                    <li id="<?=$fname['initial']?>" class="col-md-12 col-sm-12 col-12 contentfill">
                                        <a class="title_main" href="javascript:;" title="<?=$fname['initial']?>"><?=$fname['initial']?></a>
                                        <div class="brands-list-wrapper">
                                        <?php foreach ($brands[$fname['initial']] as $brand) { ?>
                                            <div class="brand-item">
                                                <div class="brand_logo">
                                                    <img width="80" height="80" class="lazyload"
                                                        src="<?=$brand['img']?>"
                                                        data-src="<?=$brand['img']?>"
                                                        alt="<?=$brand['name']?>" />
                                                </div>
                                                <a href="afnan.html" title="Afnan"><?=$brand['name']?></a>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        /*
    * jQuery listnav plugin
    *
    * Add a slick "letter-based" navigation bar to all of your lists.
    * Click a letter to quickly filter the list to items that match that letter.
    *
    * Dual licensed under the MIT and GPL licenses:
    *   http://www.opensource.org/licenses/mit-license.php
    *   http://www.gnu.org/licenses/gpl.html
    *
    * Version 2.4.9 (11/03/14)
    * Author: Eric Steinborn
    * Compatibility: jQuery 1.3.x through 1.11.0 and jQuery 2
    * Browser Compatibility: IE6+, FF, Chrome & Safari
    * CSS is a little wonky in IE6, just set your listnav class to be 100% width and it works fine.
    *
    */
        (function ($) {

            $.fn.listnav = function (options) {

                var opts = $.extend({}, $.fn.listnav.defaults, options),
                    letters = ['_', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '-'],
                    firstClick = false,
                    //detect if you are on a touch device easily.
                    clickEventType = ((document.ontouchstart !== null) ? 'click' : 'touchend');

                opts.prefixes = $.map(opts.prefixes, function (n) {

                    return n.toLowerCase();

                });

                return this.each(function () {

                    var $wrapper, $letters, $letterCount, left, width, count,
                        id = this.id,
                        $list = $(this),
                        counts = {},
                        allCount = 0, fullCount = 0,
                        isAll = true,
                        prevLetter = '';

                    if (!$('#' + id + '-nav').length) {

                        $('<div id="' + id + '-nav" class="listNav"/>').insertBefore($list);
                        // Insert the nav if its not been inserted already (preferred method)
                        // Legacy method was to add the nav yourself in HTML, I didn't like that requirement

                    }

                    $wrapper = $('#' + id + '-nav');
                    // <ul id="myList"> for list and <div id="myList-nav"> for nav wrapper

                    function init() {

                        $wrapper.append(createLettersHtml());

                        $letters = $('.ln-letters', $wrapper).slice(0, 1);

                        if (opts.showCounts) {

                            $letterCount = $('.ln-letter-count', $wrapper).slice(0, 1);

                        }

                        addClasses();

                        addNoMatchLI();

                        bindHandlers();

                        if (opts.flagDisabled) {

                            addDisabledClass();

                        }

                        // remove nav items we don't need

                        if (!opts.includeAll) {

                            $('.all', $letters).remove();

                        }
                        if (!opts.includeNums) {

                            $('._', $letters).remove();

                        }
                        if (!opts.includeOther) {

                            $('.-', $letters).remove();

                        }
                        if (opts.removeDisabled) {

                            $('.ln-disabled', $letters).remove();

                        }

                        $(':last', $letters).addClass('ln-last');

                        if ($.cookie && (opts.cookieName !== null)) {

                            var cookieLetter = $.cookie(opts.cookieName);

                            if (cookieLetter !== null && typeof cookieLetter !== "undefined") {

                                opts.initLetter = cookieLetter;

                            }

                        }

                        // decide what to show first

                        // Is there an initLetter set, if so, show that letter first
                        if (opts.initLetter !== '') {

                            firstClick = true;

                            // click the initLetter if there was one
                            $('.' + opts.initLetter.toLowerCase(), $letters).slice(0, 1).trigger(clickEventType);

                        } else {

                            // If no init letter is set, and you included All, then show it
                            if (opts.includeAll) {

                                // make the All link look clicked, but don't actually click it
                                $('.all', $letters).addClass('ln-selected');

                            } else {

                                // All was not included, lets find the first letter with a count and show it
                                for (var i = ((opts.includeNums) ? 0 : 1); i < letters.length; i++) {

                                    if (counts[letters[i]] > 0) {

                                        firstClick = true;

                                        $('.' + letters[i], $letters).slice(0, 1).trigger(clickEventType);

                                        break;

                                    }
                                }
                            }
                        }
                    }

                    // position the letter count above the letter links
                    function setLetterCountTop() {

                        // we're going to need to subtract this from the top value of the wrapper to accomodate changes in font-size in CSS.
                        var letterCountHeight = $letterCount.outerHeight();

                        $letterCount.css({
                            top: $('a:first', $wrapper).slice(0, 1).position().top - letterCountHeight
                            // we're going to grab the first anchor in the list
                            // We can no longer guarantee that a specific letter will be present
                            // since adding the "removeDisabled" option

                        });

                    }

                    // adds a class to each LI that has text content inside of it (ie, inside an <a>, a <div>, nested DOM nodes, etc)
                    function addClasses() {

                        var str, spl, $this,
                            firstChar = '',
                            hasPrefixes = (opts.prefixes.length > 0),
                            hasFilterSelector = (opts.filterSelector.length > 0);

                        // Iterate over the list and set a class on each one and use that to filter by
                        $($list).children().each(function () {

                            $this = $(this);

                            // I'm assuming you didn't choose a filterSelector, hopefully saving some cycles
                            if (!hasFilterSelector) {

                                //Grab the first text content of the LI, we'll use this to filter by
                                str = $.trim($this.text()).toLowerCase();

                            } else {

                                // You set a filterSelector so lets find it and use that to search by instead
                                str = $.trim($this.find(opts.filterSelector).text()).toLowerCase();

                            }

                            // This will run only if there is something to filter by, skipping over images and non-filterable content.
                            if (str !== '') {

                                // Apply the non-prefix class to LIs that have prefixed content in them
                                if (hasPrefixes) {
                                    var prefixes = $.map(opts.prefixes, function (value) {
                                        return value.indexOf(' ') <= 0 ? value + ' ' : value;
                                    });
                                    var matches = $.grep(prefixes, function (value) {
                                        return str.indexOf(value) === 0;
                                    });
                                    if (matches.length > 0) {
                                        var afterMatch = str.toLowerCase().split(matches[0])[1];
                                        if (afterMatch != null) {
                                            firstChar = $.trim(afterMatch).charAt(0);
                                        } else {
                                            firstChar = str.charAt(0);
                                        }
                                        addLetterClass(firstChar, $this, true);
                                        return;
                                    }
                                }
                                // Find the first letter in the LI, including prefixes
                                firstChar = str.charAt(0);

                                // Doesn't send true to function, which will ++ the All count on prefixed items
                                addLetterClass(firstChar, $this);
                            }
                        });
                    }

                    // Add the appropriate letter class to the current element
                    function addLetterClass(firstChar, $el, isPrefix) {

                        if (/\W/.test(firstChar)) {

                            firstChar = '-'; // not A-Z, a-z or 0-9, so considered "other"

                        }

                        if (!isNaN(firstChar)) {

                            firstChar = '_'; // use '_' if the first char is a number

                        }

                        $el.addClass('ln-' + firstChar);

                        if (counts[firstChar] === undefined) {

                            counts[firstChar] = 0;

                        }

                        counts[firstChar]++;

                        if (!isPrefix) {

                            allCount++;

                        }

                    }

                    function addDisabledClass() {

                        for (var i = 0; i < letters.length; i++) {

                            if (counts[letters[i]] === undefined) {

                                $('.' + letters[i], $letters).addClass('ln-disabled');

                            }
                        }
                    }

                    function addNoMatchLI() {
                        $list.append('<li class="col-md-15 ln-no-match listNavHide">' + opts.noMatchText + '</li>');
                    }

                    function getLetterCount(el) {
                        if ($(el).hasClass('all')) {
                            if (opts.dontCount) {
                                fullCount = allCount - $list.find(opts.dontCount).length;
                            } else {
                                fullCount = allCount;
                            }
                            return fullCount;
                        } else {
                            el = '.ln-' + $(el).attr('class').split(' ')[0];

                            if (opts.dontCount) {
                                count = $list.find(el).not(opts.dontCount).length;
                            } else {
                                count = $list.find(el).length;
                            }
                            return (count !== undefined) ? count : 0; // some letters may not have a count in the hash
                        }
                    }

                    function bindHandlers() {

                        if (opts.showCounts) {
                            // sets the top position of the count div in case something above it on the page has resized
                            $wrapper.mouseover(function () {
                                setLetterCountTop();
                            });

                            //shows the count above the letter
                            //
                            $('.ln-letters a', $wrapper).mouseover(function () {
                                left = $(this).position().left;
                                width = ($(this).outerWidth()) + 'px';
                                count = getLetterCount(this);

                                $letterCount.css({
                                    left: left,
                                    width: width
                                }).text(count).addClass("letterCountShow").removeClass("listNavHide"); // set left position and width of letter count, set count text and show it
                            }).mouseout(function () { // mouseout for each letter: hide the count
                                $letterCount.addClass("listNavHide").removeClass("letterCountShow");
                            });
                        }

                        // click handler for letters: shows/hides relevant LI's
                        //
                        $('a', $letters).bind(clickEventType, function (e) {

                            e.preventDefault();
                            var $this = $(this),
                                letter = $this.attr('class').split(' ')[0],
                                noMatches = $list.children('.ln-no-match');
                            if (prevLetter !== letter) {
                                // Only to run this once for each click, won't double up if they clicked the same letter
                                // Won't hinder firstRun

                                $('a.ln-selected', $letters).removeClass('ln-selected');

                                if (letter === 'all') {
                                    // If ALL button is clicked:

                                    $list.children().addClass("listNavShow").removeClass("listNavHide"); // Show ALL

                                    noMatches.addClass("listNavHide").removeClass("listNavShow"); // Hide the list item for no matches

                                    isAll = true; // set this to quickly check later

                                } else {
                                    // If you didn't click ALL

                                    if (isAll) {
                                        // since you clicked ALL last time:

                                        $list.children().addClass("listNavHide").removeClass("listNavShow");

                                        isAll = false;

                                    } else if (prevLetter !== '') {

                                        $list.children('.ln-' + prevLetter).addClass("listNavHide").removeClass("listNavShow");

                                    }

                                    var count = getLetterCount(this);
                                    console.log(count, "count");
                                    if (count > 0) {
                                        $list.children('.ln-' + letter).addClass("listNavShow").removeClass("listNavHide");
                                        noMatches.addClass("listNavHide").removeClass("listNavShow"); // in case it's showing
                                        $('html, body').animate({ scrollTop: $('#' + letter + '').offset().top - 40 }, 'slow');
                                    } else {
                                        noMatches.addClass("listNavShow").removeClass("listNavHide");
                                    }


                                }

                                prevLetter = letter;

                                if ($.cookie && (opts.cookieName !== null)) {
                                    $.cookie(opts.cookieName, letter, {
                                        expires: 999
                                    });
                                }

                                $this.addClass('ln-selected');

                                $this.blur();

                                if (!firstClick && (opts.onClick !== null)) {

                                    opts.onClick(letter);

                                } else {

                                    firstClick = false; //return false;

                                }

                            } // end if prevLetter !== letter
                        }); // end click()

                    } // end BindHandlers()

                    // creates the HTML for the letter links
                    //
                    function createLettersHtml() {
                        var html = [];
                        for (var i = 1; i < letters.length; i++) {
                            if (html.length === 0) {
                                html.push('<a class="all" href="#">' + opts.allText + '</a><a class="_" href="#">0-9</a>');
                            }
                            html.push('<a class="' + letters[i] + '" href="#">' + ((letters[i] === '-') ? 'ETC' : letters[i].toUpperCase()) + '</a>');
                        }
                        return '<div class="ln-letters">' + html.join('') + '</div>' + ((opts.showCounts) ? '<div class="ln-letter-count listNavHide">0</div>' : '');
                        // Remove inline styles, replace with css class
                        // Element will be repositioned when made visible
                    }
                    init();
                });
            };

            $.fn.listnav.defaults = {
                initLetter: '',
                includeAll: true,
                allText: 'All Brand',
                includeOther: false,
                includeNums: true,
                flagDisabled: true,
                removeDisabled: false,
                noMatchText: '',
                showCounts: true,
                dontCount: '',
                cookieName: null,
                onClick: null,
                prefixes: [],
                filterSelector: ''
            };
        })(jQuery);
    </script>
    <script>
        $('#brandlist').listnav({
            includeOther: true,
            prefixes: ['a', 'The Complete Works of']
        });
        $(document).ready(function () {
            $(window).scroll(function () {
                var sectionProductTab2 = $('.mega-menu-brand .menu-alphabet');
                var sectionProductTab = $('.mega-menu-brand .listNav');
                var offset = sectionProductTab2.offset();
                var scrollPosition = $(window).scrollTop();

                if (scrollPosition >= offset.top && scrollPosition <= (offset.top + sectionProductTab2.outerHeight())) {
                    sectionProductTab.addClass('scroll');
                } else {
                    sectionProductTab.removeClass('scroll');
                }
            });
        });
    </script>
</div>
<script>
    (function ($) { "use strict"; $.ajaxChimp = { responses: { "We have sent you a confirmation email": 0, "Please enter a valueggg": 1, "An email address must contain a single @": 2, "The domain portion of the email address is invalid (the portion after the @: )": 3, "The username portion of the email address is invalid (the portion before the @: )": 4, "This email address looks fake or invalid. Please enter a real email address": 5 }, translations: { en: null }, init: function (selector, options) { $(selector).ajaxChimp(options) } }; $.fn.ajaxChimp = function (options) { $(this).each(function (i, elem) { var form = $(elem); var email = form.find("input[type=email]"); var label = form.find("label[for=" + email.attr("id") + "]"); var settings = $.extend({ url: form.attr("action"), language: "en" }, options); var url = settings.url.replace("/post?", "/post-json?").concat("&c=?"); form.attr("novalidate", "true"); email.attr("name", "EMAIL"); form.submit(function () { var msg; function successCallback(resp) { if (resp.result === "success") { msg = "We have sent you a confirmation email"; label.removeClass("error").addClass("valid"); email.removeClass("error").addClass("valid") } else { email.removeClass("valid").addClass("error"); label.removeClass("valid").addClass("error"); var index = -1; try { var parts = resp.msg.split(" - ", 2); if (parts[1] === undefined) { msg = resp.msg } else { var i = parseInt(parts[0], 10); if (i.toString() === parts[0]) { index = parts[0]; msg = parts[1] } else { index = -1; msg = resp.msg } } } catch (e) { index = -1; msg = resp.msg } } if (settings.language !== "en" && $.ajaxChimp.responses[msg] !== undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]) { msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]] } label.html(msg); label.show(2e3); if (settings.callback) { settings.callback(resp) } } var data = {}; var dataArray = form.serializeArray(); $.each(dataArray, function (index, item) { data[item.name] = item.value }); $.ajax({ url: url, data: data, success: successCallback, dataType: "jsonp", error: function (resp, text) { console.log("mailchimp ajax submit error: " + text) } }); var submitMsg = "Submitting..."; if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language]["submit"]) { submitMsg = $.ajaxChimp.translations[settings.language]["submit"] } label.html(submitMsg).show(2e3); return false }) }); return this } })(jQuery);
</script>