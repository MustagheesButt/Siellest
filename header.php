<?php
include 'classes/Nav_Walker.php';
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <base href="<?= get_site_url() ?>/" />
  <meta charset=UTF-8>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php
  if (!empty($args['title'])) echo $args['title'];
  else echo siellest_title(); ?></title>
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
              <a href="<?= get_site_url() ?>" class="header__logo set--w-100 flex flex-direction-col flex-align-center" title="Siellest Home" data-tracking='{"trackEvent": "header", "trackObject": {"headerLink": "siellest"}}'>
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