<?php
get_header('archive-product', array( 'action' => 'Search-Show', 'title' => single_term_title('', false) ));

// function render_product($product) {
//   $p_link = $product->get_permalink();
//   $name = $product->get_name();
//   $currency = get_woocommerce_currency();
//   $currency_symbol = get_woocommerce_currency_symbol();
//   $price = $product->get_price();
//   $formatted_price = number_format((float)$price, 2);
//   $img = wp_get_attachment_url( $product->get_image_id() );

//   return "<div class=\"product-grid__item col-6 col-md-3\" data-tracking-context=\"Productlisting\">
//   <div class=\"product flex flex-grow-1 flex-direction-col\">
//     <div class=\"product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center\" itemscope itemtype=\"http://schema.org/Product\" data-product-container=\"tile\" data-product-tile data-pid=\"N6715217\" data-tracking-id=\"N6715217\" data-tracking-position>

//       <a class=\"product-tile__anchor\" href=\"$p_link\" data-product-url=\"productShow\" itemprop=\"url\">

//         <div class=\"product-tile__media product-tile__media--default aspect-ratio--square \">
//           <div class=\"product-tile__media-container component-overlay component-overlay--center\">
//             <img class=\"product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image \" data-product-component=\"image\" data-src=\"$img?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png\" data-image-index=\"0\" itemprop=\"image\" alt=\"$name\" title=\"$name\" />

//             <img class=\"product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image\" data-product-component=\"image\" data-src=\"$img?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png\" data-image-index=\"1\" itemprop=\"image\" alt=\"$name\" title=\"$name\" />
//           </div>
//         </div>
//         <div class=\"product-tile__body\">
//           <p class=\"product-tile__body-section product-tile__name text-line--large heading-type body-type--deci\" itemprop=\"name\">
//             $name
//           </p>
//           <div class=\"product-tile__body-section product-tile__swatches font-family--serif\" data-product-component=\"swatches\">
//           </div>
//           <p class=\"product-tile__body-section product-tile__material font-family--serif\">
//             Yellow gold, tsavorite garnets, onyx
//           </p>
//           <div class=\"product-tile__body-section text-line--large font-weight--semibold body-type--deci\">
//             <div class=\"price flex--inline flex-flow-wrap flex-align-baseline\" data-product-component=\"price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
//               <meta itemprop=\"priceCurrency\" content=\"$currency\" />
//               <span class=\"price__sales sales\">
//                 <span class=\"value\" itemprop=\"price\" content=\"$price\">
//                   $currency_symbol$formatted_price
//                 </span>
//             </div>
//           </div>
//           <div class=\"body-type--deci\">
//           </div>
//         </div>
//       </a>
//       <button type=\"button\" class=\"product-tile__wishlist body-type--deka\" title=\"Add to Wish List, Panth&egrave;re de Cartier bracelet\" data-wishlist-trigger=\"heart\" data-wishlist-label-add=\"Add to Wish List, Panth&egrave;re de Cartier bracelet\" data-wishlist-label-remove=\"Remove from Wish List, Panth&egrave;re de Cartier bracelet\">
//         <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon product-tile__wishlist-add\">
//           <use xlink:href=\"#icon--heart\" />
//         </svg>
//         <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon product-tile__wishlist-remove\">
//           <use xlink:href=\"#icon--heart-filled\" />
//         </svg>
//       </button>
//       <div class=\"product-tile__overlay flex flex-align-end bg--white\">
//         <div class=\"product-tile__overlay-actions set--w-100\">
//           <div class=\"product-tile__quickadd\">
//             <button type=\"button\" class=\"button button--primary button--small set--w-100\" data-url=\"/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickView?pid=N6715217\" data-product-url=\"productShowQuickView\" title=\"Quick View for Panth&egrave;re de Cartier bracelet\" data-quickview-trigger=\"\">
//               Quick View
//             </button>
//           </div>
//         </div>
//       </div>

//     </div>
//   </div>
//   </div>";
// }
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
              <?php do_action( 'woocommerce_archive_description' );
              // global $wp_query;
              // var_dump($wp_query->query_vars);
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
                      global $product;
                      echo render_product($product);
                    }
                  }
                  // woocommerce_product_loop_end();
                ?>
                
                <div class="search-results__footer col-12 flex-align-center text-align--center" data-search-component="product-grid-footer">
                  <div class="brand__panther-image image-width__large">
                    <img class="panther-image" alt="cartier" src="wp-content/themes/siellest/assets/images/panthereCartierImageTransparent.webp" />
                  </div>
                  <p class="search-results__footer-count font-family--serif">
                    Showing 24 of <?= wc_get_loop_prop('total') ?> items
                  </p>
                  <button type="button" class="search-results__footer-cta button button--primary-outline button--fluid set--w-100 "
                    data-search-component="more-products"
                    data-sort-options="{&quot;options&quot;:[{&quot;displayName&quot;:&quot;Price Low To High&quot;,&quot;id&quot;:&quot;price-low-to-high&quot;,&quot;url&quot;:&quot;https://www.siellest.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;srule=price-low-to-high&amp;start=0&amp;sz=24&quot;},{&quot;displayName&quot;:&quot;Price High to Low&quot;,&quot;id&quot;:&quot;price-high-to-low&quot;,&quot;url&quot;:&quot;https://www.siellest.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;srule=price-high-to-low&amp;start=0&amp;sz=24&quot;},{&quot;displayName&quot;:&quot;Recommended&quot;,&quot;id&quot;:&quot;intl-emerch&quot;,&quot;url&quot;:&quot;https://www.siellest.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;srule=intl-emerch&amp;start=0&amp;sz=24&quot;}],&quot;ruleId&quot;:&quot;intl-emerch&quot;,&quot;selectedSortOption&quot;:{&quot;displayName&quot;:&quot;Recommended&quot;,&quot;id&quot;:&quot;intl-emerch&quot;,&quot;url&quot;:&quot;https://www.siellest.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;srule=intl-emerch&amp;start=0&amp;sz=24&quot;}}"
                    data-page-size="24.0" data-page-number="1.0"
                    data-url="wp-json/siellest/Search-UpdateGrid?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;start=24&amp;sz=24">
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
    do_action( 'woocommerce_no_products_found' );
  }
  ?>
</div>

<?php
get_footer('archive-product');
?>