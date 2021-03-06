<?php

$params = Product::get_shop_params();
$query = Product::custom_query($params['category'], $params['sort_rule'], collections: $params['collections']);
$data = $query->get_products();
$products = $data->products;

wc_set_loop_prop('total', $data->total);
$category_data = get_term_by('slug', $params['category'], 'product_cat');
// $products = wc_products_array_orderby( $products, 'price', 'ASC' );

$plp_banners = [
  'jewelry-allcollections' => 'header_jwl_all_LOVE.webp',
  'bracelets' => 'JEWELRY_BANNERS_1920x800_VIEW-ALL-BRACELETS.webp',
  'rings' => 'header_jwl_rings_VIEWALL.webp',
  'necklaces' => 'JEWELRY_BANNERS_1920x800_VIEW-ALL-NECKLACES.webp',
  'earrings' => 'JEWELRY_TOP-BANNER_1920x800_VIEW-ALL-EARRINGS.webp',
  'engagement-rings' => 'ENGAGEMENT_BANNERS_1920x800_ALL-ENGAEMENT-RINGS.webp',
  'wedding-bands' => 'ENGAGEMENT_BANNERS_1920x800_ALL-WEDDING-BANDS.webp',

  'watches-allcollections' => 'WATCHES_BANNERS_1920x800_TANK.webp',
  'womens-watches' => 'header_watches_for_women.webp',
  'mens-watches' => 'header_wa_mens_ALL_MENS_2020.webp',

  'bags' => '01_HEADER_ALL BAGS_PANTHERE MARO_NEL_MAN_1920X800_A.webp',
  'personal-accessories' => 'ACCESSORIES_KEY_RINGS_08322021.webp',
  'home' => 'HEADER-DECOR-1920x800-08312021.webp',
  'writing-&-stationery' => 'NOTEBOOKS_1920x800.jpg',
  'eyewear' => '01_HEADER_PLP_EYEWEAR22_CT0334S-002_NEL&MAN_1920x800_2282022.jpg',
  'fragrances' => 'HEADER TOUS PARFUMS TEST 2_1920x800-2.webp'
];
?>
<div class="search-results__main " data-search-component="search-main">
  <?php
  if (woocommerce_product_loop() || wc_get_loop_prop('total') > 0) {
  ?>
    <article class="bg--grey-1 flex-grow-1 descriptive-card descriptive-card--size-regular descriptive-card--ratio-wide descriptive-card--style-slim" style="" data-content-component="descriptive-card" data-motion='{"properties": "opacity from-v-direction", "children": ".descriptive-card__content > *"}'>

      <div class="row flex-no-gutters">
        <?php
        if ($plp_banners[$params['category']]) {
        ?>
          <div class="col-12 col-md-6 col-lg-6 ">
            <div class="descriptive-card__aspect-ratio descriptive-card__aspect-ratio--wide">
              <div class="descriptive-card__media component-overlay component-overlay--center">
                <picture>
                  <source data-srcset="wp-content/themes/siellest/assets/images/plp-banners/<?= $plp_banners[$params['category']] ?>" class="picture--source-element">
                  <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/images/plp-banners/<?= $plp_banners[$params['category']] ?>?sw=40&q=100" class="component-image descriptive-card__img object-fit--cover lazyload blur-up" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; " />
                </picture>
              </div>
            </div>
          </div>
        <?php } ?>
        <div class="col-12 col-md-6 col-lg-6 ">
          <div class="descriptive-card__content-wrap flex flex-grow-1 text-align--left component-v-align--center component-h-align--center">
            <div class="descriptive-card__content component-custom-width" style="--component-var-width:26.5rem; ">
              <h1 class="descriptive-card__title heading-type component-copy__title--regular">
                <?= $category_data->name ?>
              </h1>
              <div class="descriptive-card__description font-family--serif text-line--medium">
                <?= $category_data->description ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
    <div class="search-results max-width--large gutter--normal">
      <div class="search-results__container">
        <div class="search-results__section toggle--active" id="product-search-results" role="tabpanel" aria-expanded="true">
          <div class="search-results__toolbar row flex-align-center">
            <div class="col-12 col-md-3 breadcrumbs--spaced">
              <ol class="breadcrumbs body-type--centi list--reset">
                <li class="breadcrumbs__item flex--inline flex-align-baseline">
                  <a class="breadcrumbs__anchor link--secondary" href="/" title="Home">Home</a>
                  <span class="breadcrumbs__separator">/</span>
                </li>
                <li class="breadcrumbs__item flex--inline flex-align-baseline">
                  <a class="breadcrumbs__anchor link--secondary" href="product-category/jewelry/" title="Jewelry">Jewelry</a>
                  <span class="breadcrumbs__separator">/</span>
                </li>
                <li class="breadcrumbs__item flex--inline flex-align-baseline">
                  <a class="breadcrumbs__anchor link--secondary" href="product-category/jewelry/<?= $parms['category'] ?>/" title="All Collections"><?= $category_data->name ?></a>
                </li>
              </ol>
            </div>
            <div class="col-12 display--small-only flex flex-direction-row">
              <div class="search-results__toolbar-button-container flex word-break--break-word hyphens--auto">
                <button type="button" class="search-results__toolbar-button body-type--centi font-weight--semibold text-align--center text-transform--uppercase" data-toggle='{"target": "[data-search-component=refinement-bar]", "parent": "[data-search-component=search-main]", "activeClass": "refinement-bar--active", "auto": false, "targetFocus": "[data-toggle-close]", "allowEscClose": true}' data-search-component="refinement-bar-trigger">
                  Filter By
                </button>
              </div>
              <div class="search-results__toolbar-button-container flex word-break--break-word hyphens--auto">
                <button type="button" class="search-results__toolbar-button search-results__toolbar-sortby-button body-type--centi font-weight--semibold text-align--center text-transform--uppercase" data-toggle='{"target": "[data-search-component=refinement-bar]", "parent": "[data-search-component=search-main]", "activeClass": "sort-menu--active", "targetFocus": "[data-toggle-close]", "allowEscClose": true}' data-search-component="refinement-bar-trigger">
                  Sort By
                </button>
              </div>
            </div>
            <div class="search-results__toolbar-count col-6 col-md-6 font-family--serif" aria-live="polite" aria-atomic="true">
              <span>
                <?= wc_get_loop_prop('total') ?> Models
              </span>
              <p class="sr-only">
                , results filtered by
                true
              </p>
            </div>
            <div class="col-6 col-md-3 flex-direction-row flex-justify-end body-type--centi">
              <button type="button" class="search-results__layout-selector flex <?= $_GET['toggleGridFeed'] === 'grid' ? 'set--active' : '' ?>" data-search-component="grid-feed-toggle" data-search-layout="grid" title="Grid">
                <span class="search-results__layout-selector-label text-transform--uppercase display--small-up">Grid</span>
                <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--unselected body-type--deci">
                  <use xlink:href="#icon--grid-view" />
                </svg>
                <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--selected body-type--deci">
                  <use xlink:href="#icon--grid-view-active" />
                </svg>
              </button>
              <button type="button" class="search-results__layout-selector flex <?= $_GET['toggleGridFeed'] === 'feed' ? 'set--active' : '' ?>" data-search-component="grid-feed-toggle" data-search-layout="feed" title="Feed">
                <span class="search-results__layout-selector-label text-transform--uppercase display--small-up">Feed</span>
                <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--unselected body-type--deci">
                  <use xlink:href="#icon--feed-view" />
                </svg>
                <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--selected body-type--deci">
                  <use xlink:href="#icon--feed-view-active" />
                </svg>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-3">
              <?php include get_template_directory() . '/template-parts/archive-product/filters.php'; ?>
            </div>
            <div class="col-12 col-md-9">
              <div class="">
                <?php if ($collections) { ?>
                <ol class="applied-refinements__list list--reset flex flex-flow-wrap" data-refinement-type="reset remove" tabindex="-1">
                  <li class="applied-refinements__item refinement-bar__reset">
                    <button class="pill body-type--centi" data-url="wp-json/siellest/Search-ShowAjax?cgid=<?= $params['category'] ?>" aria-label="Reset, all refinements" data-refinement-action="reset">
                      Clear All
                    </button>
                  </li>
                  <?php
                  foreach ($collections as $collection) {
                    $cleared = array_diff($collections, [$collection]);
                  ?>
                  <li class="applied-refinements__item">
                    <a class="pill pill--icon-right  body-type--centi" href="wp-json/Search-ShowAjax?cgid=<?= $params['category'] ?>&prefn1=collection&prefv1=<?= implode('|', $cleared) ?>&prefn2=sapIsVisibleWeb&;prefv2=true&srule=price-high-to-low" title="Remove Refinement ??? boolean: <?= $collection ?>" data-refinement-action="remove">
                      <span class="aria-hidden"><?= $collection ?></span>
                      <svg aria-hidden="true" focusable="false" class="icon body-type--micro pill__icon pill__icon--right pill__icon--actionable">
                        <use xlink:href="#icon--close"></use>
                      </svg>
                    </a>
                  </li>
                  <?php } ?>
                </ol>
                <?php } ?>
                <div class="row product-grid feed-view" itemtype="http://schema.org/SomeProducts" itemid="#product" data-search-component="product-grid">
                  <?php
                  foreach ($products as $product) {
                    Product::render_product($product);
                  }
                  Product::render_product_loop_end($params['category'], PRODUCTS_PER_PAGE, wc_get_loop_prop('total'));
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="search-results__section " id="content-search-results-pane" role="tabpanel" aria-expanded="false">
          <div class="max-width--small" data-search-component="content-list">
          </div>
        </div>
      </div>
    </div>
  <?php
  } else {
    include get_template_directory() . '/woocommerce/loop/no-products-found.php';
  }
  ?>
</div>