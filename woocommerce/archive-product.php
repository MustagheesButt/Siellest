<?php
get_header('archive-product', array( 'action' => 'Search-Show', 'title' => single_term_title('', false) ));

function render_product($product) {
  $p_link = $product->link;
  return "<div class=\"product-grid__item col-6 col-md-3\" data-tracking-context=\"Productlisting\">
  <div class=\"product flex flex-grow-1 flex-direction-col\">
    <div class=\"product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center\" itemscope itemtype=\"http://schema.org/Product\" data-product-container=\"tile\" data-product-tile data-pid=\"N6715217\" data-tracking-id=\"N6715217\" data-tracking-position data-tracking='{\"trackEvent\": \"eeListClick\", \"asyncParams\": {\"pid\": \"data-tracking-id\", \"pos\": \"data-tracking-position\", \"listValue\": \"--context\"}}'>

      <a class=\"product-tile__anchor\" href=\"$p_link\" data-product-url=\"productShow\" itemprop=\"url\">

        <div class=\"product-tile__media product-tile__media--default aspect-ratio--square \">
          <div class=\"product-tile__media-container component-overlay component-overlay--center\">
            <img class=\"product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image \" data-product-component=\"image\" data-src=\"https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw88e3aa9e/images/large/637709062565330711-2223274.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png\" data-image-index=\"0\" itemprop=\"image\" alt=\"Panth&egrave;re de Cartier bracelet\" title=\"Panth&egrave;re de Cartier bracelet\" />

            <img class=\"product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image\" data-product-component=\"image\" data-src=\"https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwcfeb0a3e/images/large/637709062565330711-2223383.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png\" data-image-index=\"1\" itemprop=\"image\" alt=\"Panth&egrave;re de Cartier bracelet\" title=\"Panth&egrave;re de Cartier bracelet\" />
          </div>
        </div>
        <div class=\"product-tile__body\">
          <p class=\"product-tile__body-section product-tile__name text-line--large heading-type body-type--deci\" itemprop=\"name\">
            Panthère de Cartier bracelet
          </p>
          <div class=\"product-tile__body-section product-tile__swatches font-family--serif\" data-product-component=\"swatches\">
          </div>
          <p class=\"product-tile__body-section product-tile__material font-family--serif\">
            Yellow gold, tsavorite garnets, onyx
          </p>
          <div class=\"product-tile__body-section text-line--large font-weight--semibold body-type--deci\">
            <div class=\"price flex--inline flex-flow-wrap flex-align-baseline\" data-product-component=\"price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
              <meta itemprop=\"priceCurrency\" content=\"USD\" />
              <span class=\"price__sales sales\">
                <span class=\"value\" itemprop=\"price\" content=\"21700.00\">
                  $21,700.00
                </span>
            </div>
          </div>
          <div class=\"body-type--deci\">
          </div>
        </div>
      </a>
      <button type=\"button\" class=\"product-tile__wishlist body-type--deka\" title=\"Add to Wish List, Panth&egrave;re de Cartier bracelet\" data-wishlist-trigger=\"heart\" data-wishlist-label-add=\"Add to Wish List, Panth&egrave;re de Cartier bracelet\" data-wishlist-label-remove=\"Remove from Wish List, Panth&egrave;re de Cartier bracelet\">
        <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon product-tile__wishlist-add\">
          <use xlink:href=\"#icon--heart\" />
        </svg>
        <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon product-tile__wishlist-remove\">
          <use xlink:href=\"#icon--heart-filled\" />
        </svg>
      </button>
      <div class=\"product-tile__overlay flex flex-align-end bg--white\">
        <div class=\"product-tile__overlay-actions set--w-100\">
          <div class=\"product-tile__quickadd\">
            <button type=\"button\" class=\"button button--primary button--small set--w-100\" data-url=\"/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=N6715217\" data-product-url=\"productShowQuickView\" title=\"Quick View for Panth&egrave;re de Cartier bracelet\" data-quickview-trigger=\"\">
              Quick View
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>";
}
?>

<div class="search-results__main " data-search-component="search-main">
  <?php
  if ( woocommerce_product_loop() ) {
  ?>
  <article class="bg--grey-1 flex-grow-1 descriptive-card descriptive-card--size-regular descriptive-card--ratio-wide descriptive-card--style-slim" style="" data-content-component="descriptive-card" data-motion='{"properties": "opacity from-v-direction", "children": ".descriptive-card__content > *"}'>

    <div class="row flex-no-gutters">
      <div class="col-12 col-md-6 col-lg-6 ">
        <div class="descriptive-card__aspect-ratio descriptive-card__aspect-ratio--wide">
          <div class="descriptive-card__media component-overlay component-overlay--center">
            <picture>
              <source data-srcset="/on/demandware.static/-/Library-Sites-CartierSharedLibrary-BGTJ/default/dw14cddc32/plp-banners/header_jwl_all_LOVE.png" class="picture--source-element">
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
              <?php do_action( 'woocommerce_archive_description' ); ?>
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
            <button type="button" class="search-results__layout-selector flex " data-search-component="grid-feed-toggle" data-search-layout="grid" data-tracking='{"trackEvent": "ClickDisplayPlp", "trackObject": {"listValue": "Productlisting", "displayMode": "data-search-layout"}}' title="Grid">
              <span class="search-results__layout-selector-label text-transform--uppercase display--small-up">Grid</span>
              <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--unselected body-type--deci">
                <use xlink:href="#icon--grid-view" />
              </svg>
              <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--selected body-type--deci">
                <use xlink:href="#icon--grid-view-active" />
              </svg>
            </button>
            <button type="button" class="search-results__layout-selector flex set--active" data-search-component="grid-feed-toggle" data-search-layout="feed" data-tracking='{"trackEvent": "ClickDisplayPlp", "trackObject": {"listValue": "Productlisting", "displayMode": "data-search-layout"}}' title="Feed">
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
                  if ( wc_get_loop_prop( 'total' ) ) {
                    while ( have_posts() ) {
                      the_post();
                
                      /**
                       * Hook: woocommerce_shop_loop.
                       */
                      // do_action( 'woocommerce_shop_loop' );
                
                      // wc_get_template_part( 'content', 'product' );
                    }
                  }
                  global $product;
                  echo render_product($product);
                  // woocommerce_product_loop_end();
                ?>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "N6715217",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="N6715217" data-tracking-id="N6715217" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/panthere-de-cartier-bracelet-N6715217.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw88e3aa9e/images/large/637709062565330711-2223274.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Panth&egrave;re de Cartier bracelet" title="Panth&egrave;re de Cartier bracelet" />

                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwcfeb0a3e/images/large/637709062565330711-2223383.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Panth&egrave;re de Cartier bracelet" title="Panth&egrave;re de Cartier bracelet" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Panthère de Cartier bracelet
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Yellow gold, tsavorite garnets, onyx
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="21700.00">
                                  $21,700.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Panth&egrave;re de Cartier bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Panth&egrave;re de Cartier bracelet" data-wishlist-label-remove="Remove from Wish List, Panth&egrave;re de Cartier bracelet">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=N6715217" data-product-url="productShowQuickView" title="Quick View for Panth&egrave;re de Cartier bracelet" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "N6721717",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="N6721717" data-tracking-id="N6721717" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/juste-un-clou-bracelet-medium-model-N6721717.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square bg--grey-image">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image  " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwc764cb11/images/large/637727603889563218-2195660.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Juste un Clou bracelet, medium model" title="Juste un Clou bracelet, medium model" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  bg--grey-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw5c5be982/images/large/637727603889563218-2195645.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Juste un Clou bracelet, medium model" title="Juste un Clou bracelet, medium model" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Juste un Clou bracelet, medium model
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Rose gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="23000.00">
                                  $23,000.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Juste un Clou bracelet, medium model" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Juste un Clou bracelet, medium model" data-wishlist-label-remove="Remove from Wish List, Juste un Clou bracelet, medium model">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=N6721717" data-product-url="productShowQuickView" title="Quick View for Juste un Clou bracelet, medium model" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "CRB4052700",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="CRB4052700" data-tracking-id="CRB4052700" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/rings/trinity-ring-classic-CRB4052700.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw7a64195b/images/large/637708725821502325-2059310.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Trinity ring, classic" title="Trinity ring, classic" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw21a58a08/images/large/637708725821502325-2059366.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Trinity ring, classic" title="Trinity ring, classic" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Trinity ring, classic
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            White gold, yellow gold, rose gold
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="1420.00">
                                  $1,420.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Trinity ring, classic" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Trinity ring, classic" data-wishlist-label-remove="Remove from Wish List, Trinity ring, classic">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=CRB4052700" data-product-url="productShowQuickView" title="Quick View for Trinity ring, classic" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6040517",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6040517" data-tracking-id="B6040517" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-10-diamonds-B6040517.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw578a0c17/images/large/637708796379223333-2059291.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet, 10 diamonds" title="#LOVE# bracelet, 10 diamonds" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwa241cce0/images/large/637708796379223333-2059343.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet, 10 diamonds" title="#LOVE# bracelet, 10 diamonds" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> bracelet, 10 diamonds
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            18K yellow gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="16000.00">
                                  $16,000.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet, 10 diamonds" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet, 10 diamonds" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet, 10 diamonds">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6040517" data-product-url="productShowQuickView" title="Quick View for #LOVE# bracelet, 10 diamonds" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6065717",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6065717" data-tracking-id="B6065717" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/clash-de-cartier-bracelet-medium-model-B6065717.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwd49d3233/images/large/637708809736526526-2196273.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Clash de Cartier bracelet Medium Model" title="Clash de Cartier bracelet Medium Model" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw1c83f8b6/images/large/637708809736526526-2196250.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Clash de Cartier bracelet Medium Model" title="Clash de Cartier bracelet Medium Model" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Clash de Cartier bracelet Medium Model
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            White gold
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="9850.00">
                                  $9,850.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Clash de Cartier bracelet Medium Model" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Clash de Cartier bracelet Medium Model" data-wishlist-label-remove="Remove from Wish List, Clash de Cartier bracelet Medium Model">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6065717" data-product-url="productShowQuickView" title="Quick View for Clash de Cartier bracelet Medium Model" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "CRB7013800",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="CRB7013800" data-tracking-id="CRB7013800" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/necklaces/love-necklace-diamonds-CRB7013800.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw29aa2b57/images/large/637708811854490373-2088249.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# necklace, diamonds" title="#LOVE# necklace, diamonds" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw80ab24ce/images/large/637708811854490373-2088530.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# necklace, diamonds" title="#LOVE# necklace, diamonds" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> necklace, diamonds
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Yellow gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="4650.00">
                                  $4,650.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# necklace, diamonds" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# necklace, diamonds" data-wishlist-label-remove="Remove from Wish List, #LOVE# necklace, diamonds">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=CRB7013800" data-product-url="productShowQuickView" title="Quick View for #LOVE# necklace, diamonds" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "N6718217",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="N6718217" data-tracking-id="N6718217" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/panthere-de-cartier-bracelet-N6718217.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square bg--grey-image">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image  " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw4aa42438/images/large/637453637939889803-2116254.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Panth&egrave;re de Cartier bracelet" title="Panth&egrave;re de Cartier bracelet" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  bg--grey-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw785ff381/images/large/637453637962389407-2116306.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Panth&egrave;re de Cartier bracelet" title="Panth&egrave;re de Cartier bracelet" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Panthère de Cartier bracelet
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Rose gold, onyx, emeralds, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="44100.00">
                                  $44,100.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Panth&egrave;re de Cartier bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Panth&egrave;re de Cartier bracelet" data-wishlist-label-remove="Remove from Wish List, Panth&egrave;re de Cartier bracelet">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=N6718217" data-product-url="productShowQuickView" title="Quick View for Panth&egrave;re de Cartier bracelet" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6065117",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6065117" data-tracking-id="B6065117" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/clash-de-cartier-bracelet-small-model-B6065117.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw122f85f8/images/large/637708808806684057-2059324.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Clash de Cartier bracelet Small Model" title="Clash de Cartier bracelet Small Model" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw17867d1e/images/large/637708808806684057-2059348.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Clash de Cartier bracelet Small Model" title="Clash de Cartier bracelet Small Model" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Clash de Cartier bracelet Small Model
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Rose gold
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="7000.00">
                                  $7,000.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Clash de Cartier bracelet Small Model" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Clash de Cartier bracelet Small Model" data-wishlist-label-remove="Remove from Wish List, Clash de Cartier bracelet Small Model">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6065117" data-product-url="productShowQuickView" title="Quick View for Clash de Cartier bracelet Small Model" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "N6710817",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="N6710817" data-tracking-id="N6710817" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-small-model-paved-N6710817.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwe79a5135/images/large/637720178548930008-2267252.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet, small model, paved" title="#LOVE# bracelet, small model, paved" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw12f4a68d/images/large/637720178548930008-2267306.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet, small model, paved" title="#LOVE# bracelet, small model, paved" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> bracelet, small model, paved
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            White gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="29300.00">
                                  $29,300.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet, small model, paved" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet, small model, paved" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet, small model, paved">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=N6710817" data-product-url="productShowQuickView" title="Quick View for #LOVE# bracelet, small model, paved" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6036017",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6036017" data-tracking-id="B6036017" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-4-diamonds-B6036017.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw5d1edcdc/images/large/637708793250647478-2116867.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet, 4 diamonds" title="#LOVE# bracelet, 4 diamonds" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw1a0358b5/images/large/637708793250647478-2117163.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet, 4 diamonds" title="#LOVE# bracelet, 4 diamonds" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> bracelet, 4 diamonds
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Rose gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="11100.00">
                                  $11,100.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet, 4 diamonds" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet, 4 diamonds" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet, 4 diamonds">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6036017" data-product-url="productShowQuickView" title="Quick View for #LOVE# bracelet, 4 diamonds" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6048617",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6048617" data-tracking-id="B6048617" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/juste-un-clou-bracelet-B6048617.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwdd101d4e/images/large/637708803465142460-2116926.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Juste un Clou bracelet" title="Juste un Clou bracelet" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw5dc96ee7/images/large/637708803465142460-2117061.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Juste un Clou bracelet" title="Juste un Clou bracelet" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Juste un Clou bracelet
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            18K yellow gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="12500.00">
                                  $12,500.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Juste un Clou bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Juste un Clou bracelet" data-wishlist-label-remove="Remove from Wish List, Juste un Clou bracelet">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6048617" data-product-url="productShowQuickView" title="Quick View for Juste un Clou bracelet" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6035417",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6035417" data-tracking-id="B6035417" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-B6035417.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw5ceb2aa7/images/large/637708791494390687-2059313.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet" title="#LOVE# bracelet" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw97231da7/images/large/637708791494390687-2059396.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet" title="#LOVE# bracelet" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> bracelet
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            White gold
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="7400.00">
                                  $7,400.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6035417" data-product-url="productShowQuickView" title="Quick View for #LOVE# bracelet" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "N6721517",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="N6721517" data-tracking-id="N6721517" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/juste-un-clou-bracelet-medium-model-N6721517.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square bg--grey-image">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image  " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw50cfade7/images/large/637727603715653535-2195661.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Juste un Clou bracelet, medium model" title="Juste un Clou bracelet, medium model" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  bg--grey-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwb5b97958/images/large/637727603715653535-2195663.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Juste un Clou bracelet, medium model" title="Juste un Clou bracelet, medium model" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Juste un Clou bracelet, medium model
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            18K yellow gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="23000.00">
                                  $23,000.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Juste un Clou bracelet, medium model" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Juste un Clou bracelet, medium model" data-wishlist-label-remove="Remove from Wish List, Juste un Clou bracelet, medium model">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=N6721517" data-product-url="productShowQuickView" title="Quick View for Juste un Clou bracelet, medium model" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6035517",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6035517" data-tracking-id="B6035517" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-B6035517.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwbd546177/images/large/637708791868154532-2059314.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet" title="#LOVE# bracelet" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwfa685d28/images/large/637708791868154532-2059397.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet" title="#LOVE# bracelet" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> bracelet
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Yellow gold
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="6900.00">
                                  $6,900.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6035517" data-product-url="productShowQuickView" title="Quick View for #LOVE# bracelet" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6047817",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6047817" data-tracking-id="B6047817" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-small-model-10-diamonds-B6047817.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwb8867c0f/images/large/637708801260623235-2116870.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet, small model, 10 diamonds" title="#LOVE# bracelet, small model, 10 diamonds" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw9562ded1/images/large/637708801260623235-2117173.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet, small model, 10 diamonds" title="#LOVE# bracelet, small model, 10 diamonds" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> bracelet, small model, 10 diamonds
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            18K yellow gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="8900.00">
                                  $8,900.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet, small model, 10 diamonds" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet, small model, 10 diamonds" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet, small model, 10 diamonds">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6047817" data-product-url="productShowQuickView" title="Quick View for #LOVE# bracelet, small model, 10 diamonds" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "CRB4230100",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="CRB4230100" data-tracking-id="CRB4230100" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/rings/panthere-de-cartier-ring-CRB4230100.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">

                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw6ff77d00/images/large/637708777868353688-2223252.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Panth&egrave;re de Cartier ring" title="Panth&egrave;re de Cartier ring" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwd77c3d9e/images/large/637708777868353688-2223277.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Panth&egrave;re de Cartier ring" title="Panth&egrave;re de Cartier ring" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Panthère de Cartier ring
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Yellow gold, tsavorite garnets, onyx
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="3450.00">
                                  $3,450.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Panth&egrave;re de Cartier ring" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Panth&egrave;re de Cartier ring" data-wishlist-label-remove="Remove from Wish List, Panth&egrave;re de Cartier ring">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=CRB4230100" data-product-url="productShowQuickView" title="Quick View for Panth&egrave;re de Cartier ring" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6067217",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6067217" data-tracking-id="B6067217" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/panthere-de-cartier-bracelet-B6067217.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square bg--grey-image">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image  " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwede7d33e/images/large/637453633438784210-2076647.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Panth&egrave;re de Cartier bracelet" title="Panth&egrave;re de Cartier bracelet" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  bg--grey-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwef48d6b6/images/large/637453633462847664-2076622.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Panth&egrave;re de Cartier bracelet" title="Panth&egrave;re de Cartier bracelet" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Panthère de Cartier bracelet
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Yellow gold, onyx, tsavorite garnets
                          </p>

                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="8050.00">
                                  $8,050.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Panth&egrave;re de Cartier bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Panth&egrave;re de Cartier bracelet" data-wishlist-label-remove="Remove from Wish List, Panth&egrave;re de Cartier bracelet">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6067217" data-product-url="productShowQuickView" title="Quick View for Panth&egrave;re de Cartier bracelet" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6047617",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6047617" data-tracking-id="B6047617" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-small-model-6-diamonds-B6047617.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwb9b26359/images/large/637708800473749631-2116922.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet, small model, 6 diamonds" title="#LOVE# bracelet, small model, 6 diamonds" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwe73f243e/images/large/637708800473749631-2117184.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet, small model, 6 diamonds" title="#LOVE# bracelet, small model, 6 diamonds" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> bracelet, small model, 6 diamonds
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Rose gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="6600.00">
                                  $6,600.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet, small model, 6 diamonds" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet, small model, 6 diamonds" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet, small model, 6 diamonds">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6047617" data-product-url="productShowQuickView" title="Quick View for #LOVE# bracelet, small model, 6 diamonds" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "CRN4766000",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="CRN4766000" data-tracking-id="CRN4766000" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/rings/etincelle-de-cartier-ring-CRN4766000.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwd9d0bc1a/images/large/637709036319490560-2223217.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Etincelle de Cartier ring" title="Etincelle de Cartier ring" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwa333890d/images/large/637709036319490560-2223262.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Etincelle de Cartier ring" title="Etincelle de Cartier ring" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Etincelle de Cartier ring
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Rose gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="9350.00">
                                  $9,350.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Etincelle de Cartier ring" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Etincelle de Cartier ring" data-wishlist-label-remove="Remove from Wish List, Etincelle de Cartier ring">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=CRN4766000" data-product-url="productShowQuickView" title="Quick View for Etincelle de Cartier ring" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "B6035917",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6035917" data-tracking-id="B6035917" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-4-diamonds-B6035917.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw3517c0c8/images/large/637708793009398661-2059316.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet, 4 diamonds" title="#LOVE# bracelet, 4 diamonds" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw25ef51ca/images/large/637708793009398661-2059355.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet, 4 diamonds" title="#LOVE# bracelet, 4 diamonds" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> bracelet, 4 diamonds
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Yellow gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="11100.00">
                                  $11,100.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet, 4 diamonds" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet, 4 diamonds" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet, 4 diamonds">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=B6035917" data-product-url="productShowQuickView" title="Quick View for #LOVE# bracelet, 4 diamonds" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "CRH4345500",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="CRH4345500" data-tracking-id="CRH4345500" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/rings/lignes-essentielles-ring-CRH4345500.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw20e4b952/images/large/637777158017745742-2293160.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Lignes Essentielles ring" title="Lignes Essentielles ring" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwfb4443fe/images/large/637777158017745742-2293219.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Lignes Essentielles ring" title="Lignes Essentielles ring" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Lignes Essentielles ring
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            White gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="46400.00">
                                  $46,400.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Lignes Essentielles ring" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Lignes Essentielles ring" data-wishlist-label-remove="Remove from Wish List, Lignes Essentielles ring">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=CRH4345500" data-product-url="productShowQuickView" title="Quick View for Lignes Essentielles ring" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "N6717617",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="N6717617" data-tracking-id="N6717617" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-N6717617.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwb419df79/images/large/637709065986577121-2223233.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet" title="#LOVE# bracelet" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw60c63dd7/images/large/637709065986577121-2223250.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet" title="#LOVE# bracelet" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> bracelet
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            White gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="47600.00">
                                  $47,600.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=N6717617" data-product-url="productShowQuickView" title="Quick View for #LOVE# bracelet" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "CRB4094800",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="CRB4094800" data-tracking-id="CRB4094800" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/rings/juste-un-clou-ring-CRB4094800.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw1e140325/images/large/637708754333588331-2116902.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Juste un Clou ring" title="Juste un Clou ring" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwb303b980/images/large/637708754333588331-2117029.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Juste un Clou ring" title="Juste un Clou ring" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            Juste un Clou ring
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Rose gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="4200.00">
                                  $4,200.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Juste un Clou ring" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Juste un Clou ring" data-wishlist-label-remove="Remove from Wish List, Juste un Clou ring">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=CRB4094800" data-product-url="productShowQuickView" title="Quick View for Juste un Clou ring" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="product-grid__item col-6 col-md-3" data-tracking-context="Productlisting" data-tracking='{"events": "enterViewport", "enterViewportGroup": "plp", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "Productlisting"}}'>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewCategoryProduct-active_data.js) */
                    (function() {
                      try {
                        if (dw.ac) {
                          var search_params = {};
                          search_params.persd = 'false';
                          search_params.refs = '[{\"name\":\"sapIsVisibleWeb\",\"value\":\"true\"},{\"name\":\"Category\",\"value\":\"Jewelry_AllCollections\"}]';
                          search_params.sort = 'intl-emerch';
                          search_params.imageUUID = '';
                          search_params.searchID = '931d7faa-4ae7-4308-9ca5-096b7a672d3f';
                          search_params.locale = 'en_US';
                          search_params.queryLocale = 'en_US';
                          search_params.showProducts = 'true';
                          dw.ac.applyContext({
                            category: "Jewelry_AllCollections",
                            searchData: search_params
                          });
                          if (typeof dw.ac._scheduleDataSubmission === "function") {
                            dw.ac._scheduleDataSubmission();
                          }
                        }
                      } catch (err) {}
                    })();
                    /* ]]> */
                    // -->
                  </script>
                  <script type="text/javascript">
                    //<!--
                    /* <![CDATA[ (viewProduct-active_data.js) */
                    dw.ac._capture({
                      id: "CRB4087500",
                      type: "searchhit"
                    });
                    /* ]]> */
                    // -->
                  </script>
                  <div class="product flex flex-grow-1 flex-direction-col">
                    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="CRB4087500" data-tracking-id="CRB4087500" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}'>

                      <a class="product-tile__anchor" href="/en-us/jewelry/rings/love-ring-3-diamonds-CRB4087500.html" data-product-url="productShow" itemprop="url">

                        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                          <div class="product-tile__media-container component-overlay component-overlay--center">
                            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwd0210907/images/large/637708746037369393-2116892.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# ring, 3 diamonds" title="#LOVE# ring, 3 diamonds" />
                            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwc0e4ebae/images/large/637708746037369393-2117026.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# ring, 3 diamonds" title="#LOVE# ring, 3 diamonds" />
                          </div>
                        </div>
                        <div class="product-tile__body">
                          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                            <span class="font-family--cartier-logos">LOVE</span> ring, 3 diamonds
                          </p>
                          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                          </div>
                          <p class="product-tile__body-section product-tile__material font-family--serif">
                            Rose gold, diamonds
                          </p>
                          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <meta itemprop="priceCurrency" content="USD" />
                              <span class="price__sales sales">
                                <span class="value" itemprop="price" content="3850.00">
                                  $3,850.00
                                </span>
                            </div>
                          </div>
                          <div class="body-type--deci">
                          </div>
                        </div>
                      </a>
                      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# ring, 3 diamonds" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# ring, 3 diamonds" data-wishlist-label-remove="Remove from Wish List, #LOVE# ring, 3 diamonds">
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                          <use xlink:href="#icon--heart" />
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                          <use xlink:href="#icon--heart-filled" />
                        </svg>
                      </button>
                      <div class="product-tile__overlay flex flex-align-end bg--white">
                        <div class="product-tile__overlay-actions set--w-100">
                          <div class="product-tile__quickadd">
                            <button type="button" class="button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=CRB4087500" data-product-url="productShowQuickView" title="Quick View for #LOVE# ring, 3 diamonds" data-quickview-trigger="">
                              Quick View
                            </button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="search-results__footer col-12 flex-align-center text-align--center" data-search-component="product-grid-footer">
                  <div class="brand__panther-image image-width__large"><img class="panther-image" alt="cartier" src="/on/demandware.static/Sites-CartierUS-Site/-/default/dwdcdfcf99/images/panthereCartierImageTransparent.png" /></div>
                  <p class="search-results__footer-count font-family--serif">
                    Showing 24 of 1,216 items
                  </p>
                  <button type="button" class="search-results__footer-cta button button--primary-outline button--fluid set--w-100 "
                    data-search-component="more-products"
                    data-sort-options="{&quot;options&quot;:[{&quot;displayName&quot;:&quot;Price Low To High&quot;,&quot;id&quot;:&quot;price-low-to-high&quot;,&quot;url&quot;:&quot;https://www.siellest.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;srule=price-low-to-high&amp;start=0&amp;sz=24&quot;},{&quot;displayName&quot;:&quot;Price High to Low&quot;,&quot;id&quot;:&quot;price-high-to-low&quot;,&quot;url&quot;:&quot;https://www.siellest.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;srule=price-high-to-low&amp;start=0&amp;sz=24&quot;},{&quot;displayName&quot;:&quot;Recommended&quot;,&quot;id&quot;:&quot;intl-emerch&quot;,&quot;url&quot;:&quot;https://www.siellest.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;srule=intl-emerch&amp;start=0&amp;sz=24&quot;}],&quot;ruleId&quot;:&quot;intl-emerch&quot;,&quot;selectedSortOption&quot;:{&quot;displayName&quot;:&quot;Recommended&quot;,&quot;id&quot;:&quot;intl-emerch&quot;,&quot;url&quot;:&quot;https://www.siellest.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;srule=intl-emerch&amp;start=0&amp;sz=24&quot;}}"
                    data-page-size="24.0" data-page-number="1.0"
                    data-url="https://www.siellest.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-UpdateGrid?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;start=24&amp;sz=24"
                    data-tracking='{"trackEvent": "ClickLoadMore", "trackObject": {"listValue": "Productlisting"}}'>
                    Load More
                  </button>
                  <input type="hidden" class="permalink" value="https://www.siellest.com/en-us/jewelry/all-collections/?prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;start=0&amp;sz=24" />
                  <input type="hidden" data-cgid value="Jewelry_AllCollections" />
                </div>
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
  ?>
  <div class="search-results--null-page max-width--large gutter--normal">
    <div class="font-family--serif text-align--center">
      <div class="search-results--null__title">No results for this search</div>
        <a href="/" class="link--primary">Back to shopping</a>
      </div>
    </div>
  <?php
  }
  ?>
</div>

<?php
get_footer('archive-product');
?>