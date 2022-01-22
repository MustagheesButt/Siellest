<?php
include 'classes/Nav_Walker.php';
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset=UTF-8>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= siellest_title() ?></title>
  <meta name="description" content="Discover <?= get_bloginfo('name') ?>'s unique collections of fine jewelry, watches, bridal sets, accessories and fragrances." />
  <meta name="keywords" content="<?= get_bloginfo('name') ?>" />
  <link rel="icon" type="image/png" href="wp-content/themes/siellest/assets/images/favicons/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="wp-content/themes/siellest/assets/images/favicons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="wp-content/themes/siellest/assets/images/favicons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="wp-content/themes/siellest/assets/images/favicons/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="wp-content/themes/siellest/assets/images/favicons/favicon-128.png" sizes="128x128" />
  <!-- <link rel="stylesheet" href="wp-content/themes/siellest/assets/css/global.css" /> -->
  <?php
  wp_head();
  include 'template-parts/header/svg-icons.php';
  include 'template-parts/header/fonts.php';
  ?>
  <!-- <script src="https://www.google.com/recaptcha/api.js?render=6Lfx490aAAAAAF7JDTnl7ek_DeDaktJy5kMRiDCG" async defer></script> -->
  <!-- <div id="recaptcha-validator"></div> -->
  <link rel="canonical" href="/en-us/home" />
  <!-- <script type="text/javascript">
    //<!--
    /* <![CDATA[ (head-active_data.js) */
    var dw = (window.dw || {});
    dw.ac = {
      _analytics: null,
      _events: [],
      _category: "",
      _searchData: "",
      _anact: "",
      _anact_nohit_tag: "",
      _analytics_enabled: "true",
      _timeZone: "US/Eastern",
      _capture: function(configs) {
        if (Object.prototype.toString.call(configs) === "[object Array]") {
          configs.forEach(captureObject);
          return;
        }
        dw.ac._events.push(configs);
      },
      capture: function() {
        dw.ac._capture(arguments);
        // send to CQ as well:
        if (window.CQuotient) {
          window.CQuotient.trackEventsFromAC(arguments);
        }
      },
      EV_PRD_SEARCHHIT: "searchhit",
      EV_PRD_DETAIL: "detail",
      EV_PRD_RECOMMENDATION: "recommendation",
      EV_PRD_SETPRODUCT: "setproduct",
      applyContext: function(context) {
        if (typeof context === "object" && context.hasOwnProperty("category")) {
          dw.ac._category = context.category;
        }
        if (typeof context === "object" && context.hasOwnProperty("searchData")) {
          dw.ac._searchData = context.searchData;
        }
      },
      setDWAnalytics: function(analytics) {
        dw.ac._analytics = analytics;
      }
    };
    /* ]]> */
    // -->
  <!--/script>
  <script type="text/javascript">
    //<!--
    /* <![CDATA[ (head-cquotient.js) */
    var CQuotient = window.CQuotient = {};
    CQuotient.clientId = 'bgtj-CartierUS';
    CQuotient.realm = 'BGTJ';
    CQuotient.siteId = 'CartierUS';
    CQuotient.instanceType = 'prd';
    CQuotient.locale = 'en_US';
    CQuotient.fbPixelId = '__UNKNOWN__';
    CQuotient.activities = [];
    CQuotient.cqcid = '';
    CQuotient.cquid = '';
    CQuotient.cqeid = '';
    CQuotient.cqlid = '';
    /* Turn this on to test against Staging Einstein */
    /* CQuotient.useTest= true; */
    CQuotient.initFromCookies = function() {
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf('cqcid=') == 0) {
          CQuotient.cqcid = c.substring('cqcid='.length, c.length);
        } else if (c.indexOf('cquid=') == 0) {
          var value = c.substring('cquid='.length, c.length);
          if (value) {
            var split_value = value.split("|", 3);
            if (split_value.length > 0) {
              CQuotient.cquid = split_value[0];
            }
            if (split_value.length > 1) {
              CQuotient.cqeid = split_value[1];
            }
            if (split_value.length > 2) {
              CQuotient.cqlid = split_value[2];
            }
          }
        }
      }
    }
    CQuotient.getCQCookieId = function() {
      if (window.CQuotient.cqcid == '')
        window.CQuotient.initFromCookies();
      return window.CQuotient.cqcid;
    };
    CQuotient.getCQUserId = function() {
      if (window.CQuotient.cquid == '')
        window.CQuotient.initFromCookies();
      return window.CQuotient.cquid;
    };
    CQuotient.getCQHashedEmail = function() {
      if (window.CQuotient.cqeid == '')
        window.CQuotient.initFromCookies();
      return window.CQuotient.cqeid;
    };
    CQuotient.getCQHashedLogin = function() {
      if (window.CQuotient.cqlid == '')
        window.CQuotient.initFromCookies();
      return window.CQuotient.cqlid;
    };
    CQuotient.trackEventsFromAC = function( /* Object or Array */ events) {
      try {
        if (Object.prototype.toString.call(events) === "[object Array]") {
          events.forEach(_trackASingleCQEvent);
        } else {
          CQuotient._trackASingleCQEvent(events);
        }
      } catch (err) {}
    };
    CQuotient._trackASingleCQEvent = function( /* Object */ event) {
      if (event && event.id) {
        if (event.type === dw.ac.EV_PRD_DETAIL) {
          CQuotient.trackViewProduct({
            id: '',
            alt_id: event.id,
            type: 'raw_sku'
          });
        } // not handling the other dw.ac.* events currently
      }
    };
    CQuotient.trackViewProduct = function( /* Object */ cqParamData) {
      var cq_params = {};
      cq_params.cookieId = CQuotient.getCQCookieId();
      cq_params.userId = CQuotient.getCQUserId();
      cq_params.emailId = CQuotient.getCQHashedEmail();
      cq_params.loginId = CQuotient.getCQHashedLogin();
      cq_params.product = cqParamData.product;
      cq_params.realm = cqParamData.realm;
      cq_params.siteId = cqParamData.siteId;
      cq_params.instanceType = cqParamData.instanceType;
      cq_params.locale = CQuotient.locale;

      if (CQuotient.sendActivity) {
        CQuotient.sendActivity(CQuotient.clientId, 'viewProduct', cq_params);
      } else {
        CQuotient.activities.push({
          activityType: 'viewProduct',
          parameters: cq_params
        });
      }
    };
    /* ]]> */
    // -->
  <!--</script> -->

  <!-- <script>
    (window.BOOMR_mq = window.BOOMR_mq || []).push(["addVar", {
      "rua.upush": "false",
      "rua.cpush": "false",
      "rua.upre": "false",
      "rua.cpre": "false",
      "rua.uprl": "false",
      "rua.cprl": "false",
      "rua.cprf": "false",
      "rua.trans": "SJ-ea056e14-71bb-4072-8088-afec4f233b41",
      "rua.cook": "true",
      "rua.ims": "false",
      "rua.ufprl": "false",
      "rua.cfprl": "false",
      "rua.isuxp": "false",
      "rua.texp": "norulematch"
    }]);
  </script> -->
  <!-- <script>
    ! function(a) {
      var e = "https://s.go-mpulse.net/boomerang/",
        t = "addEventListener";
      if ("False" == "True") a.BOOMR_config = a.BOOMR_config || {}, a.BOOMR_config.PageParams = a.BOOMR_config.PageParams || {}, a.BOOMR_config.PageParams.pci = !0, e = "https://s2.go-mpulse.net/boomerang/";
      if (window.BOOMR_API_key = "3U5UD-A3KVH-XWX9Q-ND4WL-URRMD", function() {
          function n(e) {
            a.BOOMR_onload = e && e.timeStamp || (new Date).getTime()
          }
          if (!a.BOOMR || !a.BOOMR.version && !a.BOOMR.snippetExecuted) {
            a.BOOMR = a.BOOMR || {}, a.BOOMR.snippetExecuted = !0;
            var i, _, o, r = document.createElement("iframe");
            if (a[t]) a[t]("load", n, !1);
            else if (a.attachEvent) a.attachEvent("onload", n);
            r.src = "javascript:void(0)", r.title = "", r.role = "presentation", (r.frameElement || r).style.cssText = "width:0;height:0;border:0;display:none;", o = document.getElementsByTagName("script")[0], o.parentNode.insertBefore(r, o);
            try {
              _ = r.contentWindow.document
            } catch (O) {
              i = document.domain, r.src = "javascript:var d=document.open();d.domain='" + i + "';void(0);", _ = r.contentWindow.document
            }
            _.open()._l = function() {
              var a = this.createElement("script");
              if (i) this.domain = i;
              a.id = "boomr-if-as", a.src = e + "3U5UD-A3KVH-XWX9Q-ND4WL-URRMD", BOOMR_lstart = (new Date).getTime(), this.body.appendChild(a)
            }, _.write("<bo" + 'dy onload="document._l();">'), _.close()
          }
        }(), "".length > 0)
        if (a && "performance" in a && a.performance && "function" == typeof a.performance.setResourceTimingBufferSize) a.performance.setResourceTimingBufferSize();
      ! function() {
        if (BOOMR = a.BOOMR || {}, BOOMR.plugins = BOOMR.plugins || {}, !BOOMR.plugins.AK) {
          var e = "false" == "true" ? 1 : 0,
            t = "cookiepresent",
            n = "e4szzg5ydlfsuyoubsaq-f-2492d78bf-clientnsv4-s.akamaihd.net",
            i = "false" == "true" ? 2 : 1,
            _ = {
              "ak.v": "32",
              "ak.cp": "1096503",
              "ak.ai": parseInt("202616", 10),
              "ak.ol": "0",
              "ak.cr": 107,
              "ak.ipv": 4,
              "ak.proto": "h2",
              "ak.rid": "3132974",
              "ak.r": 11483,
              "ak.a2": e,
              "ak.m": "a",
              "ak.n": "essl",
              "ak.bpcip": "39.37.156.0",
              "ak.cport": 51511,
              "ak.gh": "23.32.29.124",
              "ak.quicv": "",
              "ak.tlsv": "tls1.3",
              "ak.0rtt": "",
              "ak.csrc": "-",
              "ak.acc": "",
              "ak.t": "1641286785",
              "ak.ak": "hOBiQwZUYzCg5VSAfCLimQ==uEiu+pAUzO+mtseCRF0omcORYRKnpl78XVqzkXuYbDdJJJAohduwZPeEVPU/AqWAvv1plsNiGW0xgzW40LV3zNj4UK0zAEnEVr+dy7Xl2xmZeQUAh1csGczAVzV+WhAD3FnnXDFxY7r3wisRevhJkPIOtThHAOnbm7vAxWSuEWnD2xCxrXm0kdDVQ/rwT6j+KtwNdU5YIGFFqPFJjA6XhG8nWNgZp9y5O/dt10vIjF7i22TMb+fKkKx5fkCVRj3rZ1jxv4w70v/rqiT+R0fHBmH8qQAnN+RBv+2WGrj3elpQwkmqoIdXcLsdDuUxM+RaY6VczFQRC05I+2wF78qdbWLmsg4JF03sCZws1rOl0WI2mucBFLqDWhv9+119fWuItgOQq2d4buYfiu3sj5xhSUdkilqr0fU0VZZBljq8bwM=",
              "ak.pv": "189",
              "ak.dpoabenc": "",
              "ak.tf": i
            };
          if ("" !== t) _["ak.ruds"] = t;
          var o = {
            i: !1,
            av: function(e) {
              var t = "http.initiator";
              if (e && (!e[t] || "spa_hard" === e[t])) _["ak.feo"] = void 0 !== a.aFeoApplied ? 1 : 0, BOOMR.addVar(_)
            },
            rv: function() {
              var a = ["ak.bpcip", "ak.cport", "ak.cr", "ak.csrc", "ak.gh", "ak.ipv", "ak.m", "ak.n", "ak.ol", "ak.proto", "ak.quicv", "ak.tlsv", "ak.0rtt", "ak.r", "ak.acc", "ak.t", "ak.tf"];
              BOOMR.removeVar(a)
            }
          };
          BOOMR.plugins.AK = {
            akVars: _,
            akDNSPreFetchDomain: n,
            init: function() {
              if (!o.i) {
                var a = BOOMR.subscribe;
                a("before_beacon", o.av, null, null), a("onbeacon", o.rv, null, null), o.i = !0
              }
              return this
            },
            is_complete: function() {
              return !0
            }
          }
        }
      }()
    }(window);
  </script> -->
</head>

<body>

  <!-- <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-577SDR" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript> -->

  <div class="page page--homepage-eoy2021" data-action="<?= $args['action'] ?>" data-querystring="" data-page-motion>
    <a href="#main" class="header__skip-to-main button button--primary button--small body-type--deci" role="button" aria-label="Skip to main content" title="Skip to main content" data-window-scroll='{"target": "#main", "offset": ".header"}'>
      Skip to main content
    </a>
    <header class="header-container fixit-container" style="" data-header-component="header-container">

      <?php include 'template-parts/header/notification-bar.php'; ?>

      <nav class="header header--global header--logo-no-copy" role="navigation" data-header-component="header">
        <div class="max-width--large gutter--normal">
          <div class="header__main row">
            <div class="col-3 col-md-4 flex-direction-row flex-align-center">
              <div class="display--small-up">
                <?php
                wp_nav_menu(
                  array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '%3$s',
                    'walker' => new NavWalker()
                  )
                );
                ?>
              </div>
              <div class="header__utility-item header__hamburger-menu display--small-only">
                <button type="button" class="header__hamburger-trigger flex display--small-only" data-toggle='{"target": "#navigation", "parent": ".header", "targetFocus": "[data-toggle-close]", "activeClass": "flyout-toggle--active"}' aria-label="Toggle navigation" data-nav-component="trigger" data-tracking='{"trackEvent": "header", "trackObject": {"headerLink": "menu"}}'>
                  <span class="sr-only">Open Main Menu</span>
                  <svg aria-hidden="true" focusable="false" class="icon body-type--deka">
                    <use xlink:href="#nav--menu" />
                  </svg>
                </button>
              </div>
              <button type="button" for="siteSearch" class="header__utility-anchor header__search-trigger link flex flex-justify-center flex-align-center cursor--pointer display--small-only" data-toggle='{"target": ".site-search__form", "allowEscClose": true, "focusTrap": true, "targetFocus": "[data-search-component=query-input]"}' data-header-component="focus-manager" data-search-component="trigger" aria-label="Toggle search bar" role="button" title="Toggle search bar" data-tracking='{"trackEvent": "header", "trackObject": {"headerLink": "search"}}'>
                <svg aria-hidden="true" focusable="false" class="site-search__trigger-icon site-search__trigger-search icon fluid-type--deka-deci">
                  <use xlink:href="#nav--search" />
                </svg>
                <svg aria-hidden="true" focusable="false" class="site-search__trigger-icon site-search__trigger-close icon fluid-type--deka-deci">
                  <use xlink:href="#icon--close" />
                </svg>
              </button>
            </div>
            <div class="col-6 col-md-4 flex-align-center">
              <a href="/home" class="header__logo set--w-100 flex flex-direction-col flex-align-center" title="Siellest Home" data-tracking='{"trackEvent": "header", "trackObject": {"headerLink": "siellest"}}'>
                <svg aria-hidden="true" focusable="false" class="header__logo-img">
                  <use xlink:href="#logo" />
                </svg>
              </a>
            </div>
            <div class="col-3 col-md-4 flex-direction-row flex-justify-end flex-align-center">
              <div class="header__account header__utility-item--reverse-spacing flex display--small-up">
                <div class='header-account__name display--medium-up'><?= wp_get_current_user()->display_name ?></div>
                <a class="header__utility-item header__utility-anchor link flex" href="wishlist" title="Wish List" aria-label="Wish List">
                  <svg aria-hidden="true" focusable="false" class="icon fluid-type--deka-base">
                    <use xlink:href="#icon--heart" />
                  </svg>
                  <span class="sr-only">Wish List</span>
                </a>
                <a class="header__utility-item header__utility-anchor link flex" href="account" title="My <?= get_bloginfo('name') ?>" aria-label="My <?= get_bloginfo('name') ?>">
                  <svg aria-hidden="true" focusable="false" class="icon fluid-type--deka-base">
                    <use xlink:href="#nav--profile" />
                  </svg>
                  <span class="sr-only">My <?= get_bloginfo('name') ?></span>
                </a>
              </div>
              <a class="header__utility-item--reverse-spacing header__utility-anchor link flex" href="/search?category=storeLocatorSearch" title="Find a Boutique" aria-label="Find a Boutique" target="_blank">
                <svg aria-hidden="true" focusable="false" class="icon fluid-type--deka-base">
                  <use xlink:href="#icon--store-locator" />
                </svg>
                <span class="sr-only">Find a Boutique</span>
              </a>
              <div class="header__minicart header__utility-item--reverse-spacing header__utility-item--badged flex set--has-items" data-minicart-component="container">
                <a class="header__utility-anchor flex flex-align-center link body-type--milli" href="cart" title="View Cart" data-toggle='{"target": "[data-minicart-component=overlay]", "targetFocus": true, "allowEscClose": true, "focusTrap": true}' aria-label="Shopping bag, 1 item in your shopping bag." data-minicart-component="trigger" data-header-component="focus-manager" data-action-url="/Cart-MiniCartShow" data-tracking='{"trackEvent": "header", "trackObject": {"headerLink": "shopping bag"}}' role="button">
                  <svg aria-hidden="true" focusable="false" class="header__minicart-icon icon fluid-type--deka-base">
                    <use xlink:href="#nav--cart" />
                  </svg>
                  <span class="header__utility-badge header__utility-badge--has-items flex flex-align-center flex-justify-center" data-minicart-component="qty">1</span>
                </a>
                <div class="header__minicart-overlay utility-overlay" data-minicart-component="overlay" tabindex="-1" role="dialog" aria-modal="true"></div>
              </div>
            </div>

            <div class="header__main-nav col-12 flex-direction-row flex-align-center flex-justify-center" data-fixit-trigger='{"enableDirectionUpdates": true}'>
              <nav id="navigation" role="navigation" class="header-flyout" data-header-component="flyout">
                <div class="header-flyout__head flex flex-justify-center flex-align-center display--small-only">
                  <button type="button" class="header-flyout__close flex" data-toggle-close="[data-nav-component='trigger']"><svg aria-hidden="true" focusable="false" class="icon">
                      <use xlink:href="#icon--close" />
                    </svg><span class="sr-only">Close navigation</span></button>
                  <a href="/en-us/home" class="header-flyout__logo flex flex-direction-col flex-align-center" title="<?= get_bloginfo('name') ?> Home" data-tracking='{"trackEvent": "header", "trackObject": {"headerLink": "cartier"}}'>
                    <svg aria-hidden="true" focusable="false" class="header__logo-img">
                      <use xlink:href="#logo" />
                    </svg>
                  </a>
                </div>
                <div class="header-flyout__container level-1" aria-label="Main menu" role="navigation">
                  <div class="header-flyout__scrollable level-1" data-scrollable>

                    <?php include 'template-parts/header/nav-collections.php' ?>

                    <div class="header-flyout__secondary display--small-only flex-grow-1 bg--secondary text-color--white">
                      <a href="contact-customer-care" class="component-actions__cta  header__utility-item header__utility-anchor header-flyout__secondary-link body-type--centi link link--secondary " aria-label="Contact Us" style="" data-tracking='{"trackEvent": "header", "trackObject": {&quot;headerLink&quot;: &quot;--content&quot;}}'>
                        <svg aria-hidden="true" focusable="false" class="icon body-type--deka icon--set-left">
                          <use xlink:href="#icon--contact" />
                        </svg>Contact Us
                      </a>
                      <a href="services" class="component-actions__cta  header__utility-item header__utility-anchor header-flyout__secondary-link body-type--centi link link--secondary " aria-label="Go to our Services page" style="" data-tracking='{"trackEvent": "header", "trackObject": {&quot;headerLink&quot;: &quot;--content&quot;}}'>
                        <svg aria-hidden="true" focusable="false" class="icon body-type--deka icon--set-left">
                          <use xlink:href="#icon--bell" />
                        </svg>Services
                      </a>
                      <a class="header__utility-anchor header-flyout__secondary-link link flex" href="wishlist" title="Wish List" aria-label="Wish List">
                        <svg aria-hidden="true" focusable="false" class="icon body-type--deka">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <span class="header__utility-label icon--set-right-large text-transform--uppercase body-type--centi">Wish List</span>
                      </a>
                      <a class="header__utility-anchor header-flyout__secondary-link link flex" href="account" title="My <?= get_bloginfo('name') ?>" aria-label="My <?= get_bloginfo('name') ?>">
                        <svg aria-hidden="true" focusable="false" class="icon body-type--deka">
                          <use xlink:href="#nav--profile" />
                        </svg>
                        <span class="header__utility-label icon--set-right-large text-transform--uppercase body-type--centi">My <?= get_bloginfo('name') ?></span>
                      </a>
                      <a class="header__utility-anchor header-flyout__secondary-link link flex" href="stores" title="Find a Boutique" aria-label="Find a Boutique">
                        <svg aria-hidden="true" focusable="false" class="icon body-type--deka">
                          <use xlink:href="#icon--store-locator" />
                        </svg>
                        <span class="header__utility-label icon--set-right-large text-transform--uppercase body-type--centi">Find a Boutique</span>
                      </a>
                    </div>
                  </div>
                </div>
              </nav>
              <div class="header__search header__utility-item">
                <div class="site-search" data-search-component="container">
                  <button type="button" for="siteSearch" class="header__utility-anchor header__search-trigger link flex flex-justify-center flex-align-center cursor--pointer display--small-up" data-toggle='{"target": ".site-search__form", "allowEscClose": true, "focusTrap": true, "targetFocus": "[data-search-component=query-input]"}' data-header-component="focus-manager" data-search-component="trigger" aria-label="Toggle search bar" role="button" title="Toggle search bar" data-tracking='{"trackEvent": "header", "trackObject": {"headerLink": "search"}}'>
                    <svg aria-hidden="true" focusable="false" class="site-search__trigger-icon site-search__trigger-search icon fluid-type--deka-deci">
                      <use xlink:href="#nav--search" />
                    </svg>
                    <svg aria-hidden="true" focusable="false" class="site-search__trigger-icon site-search__trigger-close icon fluid-type--deka-deci">
                      <use xlink:href="#icon--close" />
                    </svg>
                  </button>
                  <form role="search" action="search" method="get" name="simpleSearch" class="site-search__form flex flex-grow-1 flex-direction-col flex-align-center gutter--normal" data-search-suggestions data-search-component="form">
                    <div class="site-search__form-group set--w-100">
                      <label for="siteSearch" class="form-control-label sr-only">Search</label>
                      <div class="row flex-no-gutters">
                        <div class="col">
                          <input class="form-control site-search__field set--w-100 font-family--serif" type="search" id="siteSearch" name="q" value="" data-search-component="query-input" placeholder="Search products" autocomplete="off" />
                        </div>
                        <div class="site-search__button-col col">
                          <button type="submit" class="button button--primary button--fluid set--w-100" data-search-component="button" title="Submit search" aria-label="Submit search">
                            Search
                          </button>
                        </div>
                      </div>
                      <input type="hidden" value="en_US" name="lang">
                    </div>
                    <div class="site-search__suggestions-container max-width--xmedium flex flex-direction-col set--w-100 set--invisible" data-search-component="suggestions-container" data-suggestions-url="wp-json/siellest/SearchServices-GetSuggestions" data-scrollable></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>