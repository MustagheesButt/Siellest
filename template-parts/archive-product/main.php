<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$category = (!empty(get_query_var('product_cat'))) ? get_query_var('product_cat') : $_GET['cgid'];

$args = array(
  'paged' => 1,
  'limit' => 24,
  'paginate' => true,
  'category' => [$category],
  'orderby' => 'meta_value_num',
  'meta_key' => '_price',
  'order' => 'asc'
);
$query = new WC_Product_Query($args);
$data = $query->get_products();
$products = $data->products;
wc_set_loop_prop('total', $data->total);
// $products = wc_products_array_orderby( $products, 'price', 'ASC' );
?>
<div class="search-results__main " data-search-component="search-main">
  <?php
  if (woocommerce_product_loop() || wc_get_loop_prop('total') > 0) {
  ?>
    <article class="bg--grey-1 flex-grow-1 descriptive-card descriptive-card--size-regular descriptive-card--ratio-wide descriptive-card--style-slim" style="" data-content-component="descriptive-card" data-motion='{"properties": "opacity from-v-direction", "children": ".descriptive-card__content > *"}'>

      <div class="row flex-no-gutters">
        <div class="col-12 col-md-6 col-lg-6 ">
          <div class="descriptive-card__aspect-ratio descriptive-card__aspect-ratio--wide">
            <div class="descriptive-card__media component-overlay component-overlay--center">
              <picture>
                <source data-srcset="wp-content/themes/sielelst/assets/images/plp-banners/header_jwl_all_LOVE.png" class="picture--source-element">
                <img data-image-component="lazyload" src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Library-Sites-CartierSharedLibrary-BGTJ/default/dw14cddc32/plp-banners/header_jwl_all_LOVE.png?sw=40&amp;q=100" class="component-image descriptive-card__img object-fit--cover lazyload blur-up" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; " />
              </picture>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 ">
          <div class="descriptive-card__content-wrap flex flex-grow-1 text-align--left component-v-align--center component-h-align--center">
            <div class="descriptive-card__content component-custom-width" style="--component-var-width:26.5rem; ">
              <h1 class="descriptive-card__title heading-type component-copy__title--regular">
                ALL JEWELRY COLLECTIONS
              </h1>
              <div class="descriptive-card__description font-family--serif text-line--medium">
                <p>Plunge into the magical world of Cartier and discover the Maison's signature collections, unique pieces, and one-of-a-kind creations.</p>
                <?php do_action('woocommerce_archive_description');
                ?>
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
                  <a class="breadcrumbs__anchor link--secondary" href="shop/product-category/jewelry/" title="Jewelry">Jewelry</a>
                  <span class="breadcrumbs__separator">/</span>
                </li>
                <li class="breadcrumbs__item flex--inline flex-align-baseline">
                  <a class="breadcrumbs__anchor link--secondary" href="shop/product-category/jewelry/all-collections/" title="All Collections">All Collections</a>
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
                <div class="row product-grid feed-view" itemtype="http://schema.org/SomeProducts" itemid="#product" data-search-component="product-grid">
                  <?php
                  // if ( wc_get_loop_prop( 'total' ) ) {
                  //   while ( have_posts() ) {
                  //     the_post();

                  //     /**
                  //      * Hook: woocommerce_shop_loop.
                  //      */
                  //     // do_action( 'woocommerce_shop_loop' );

                  //     // wc_get_template_part( 'content', 'product' );
                  //     global $product;
                  //     echo render_product($product);
                  //   }
                  // }
                  // woocommerce_product_loop_end();

                  foreach ($products as $product) {
                    echo Product::render_product($product);
                  }
                  Product::render_product_loop_end($category, 24, wc_get_loop_prop('total'));
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
    do_action('woocommerce_no_products_found');
  }
  ?>
</div>