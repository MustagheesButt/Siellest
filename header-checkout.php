<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-site='denali'>

<head>
  <base href="<?= get_site_url() ?>/" />
  <meta charset=UTF-8>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkout | SiellestÂ® Official Store</title>
  <meta name="description" content="Siellest" />
  <meta name="keywords" content="Siellest" />
  <link rel="icon" type="image/png" href="/on/demandware.static/Sites-CartierUS-Site/-/default/dw34eee5d0/images/favicons/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="/on/demandware.static/Sites-CartierUS-Site/-/default/dwb2b16170/images/favicons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="/on/demandware.static/Sites-CartierUS-Site/-/default/dwfad26f14/images/favicons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/on/demandware.static/Sites-CartierUS-Site/-/default/dw1e28d951/images/favicons/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="/on/demandware.static/Sites-CartierUS-Site/-/default/dw3bd4f59d/images/favicons/favicon-128.png" sizes="128x128" />
  <!-- <link rel="stylesheet" href="/on/demandware.static/Sites-CartierUS-Site/-/en_US/v1643299054958/css/global.css" /> -->
  <!-- <link rel="stylesheet" href="wp-content/themes/siellest/assets/css/checkoutMain.css" /> -->
  <link rel="stylesheet" href="https://checkoutshopper-live.adyen.com/checkoutshopper/sdk/3.9.4/adyen.css" />
  <link rel="stylesheet" href="wp-content/themes/siellest/assets/css/adyenCss.css" />
  <?php
  wp_head();
  include 'template-parts/header/svg-icons.php';
  include 'template-parts/header/fonts.php';
  ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?= GTAG_ID ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', '<?= GTAG_ID ?>');
  </script>
</head>

<body>
  <div class="page" data-action="Checkout-Begin" data-querystring="stage=shipping">
    <header class="header-container gutter--normal" data-header-component="header-container">
      <nav class="header header--no-menu max-width--xmedium header--logo-no-copy" role="navigation" data-header-component="header">
        <div class="row flex-align-end">
          <div class="col-3 flex-direction-row flex-justify-end flex-align-center">
          </div>
          <div class="col-6 flex-direction-row flex-align-center flex-justify-center">
            <a href="/" class="header__logo set--w-100 flex flex-direction-col flex-align-center" title="<?= get_bloginfo('name') ?> Home">
              <svg aria-hidden="true" focusable="false" class="header__logo-img">
                <use xlink:href="#logo" />
              </svg>
            </a>
          </div>
          <div class="col-3 flex-direction-row flex-justify-end flex-align-center">
            <a class="header__anchor-call" href="tel:18002278437">
              <bdi class="link--secondary body-type--centi display--small-up">(1-800-227-8437)</bdi>
              <svg aria-hidden="true" focusable="false" class="header__utility-anchor icon link body-type--deka display--small-only">
                <use xlink:href="#icon--phone" />
              </svg>
            </a>
          </div>
        </div>
      </nav>
    </header>