<?php
  $params = Product::get_shop_params();
  $query = Product::custom_query($params['category'], $params['sort_rule'], collections: $params['collections'], search: $_GET['q']);
  $data = $query->get_products();
  $products = $data->products;
  if (sizeof($products) == 0) {
    $products = Product::search($_GET['q']);
  }
  wc_set_loop_prop('total', $data->total); // total != sizeof($products) i.e doesnt include LIMIT
?>
<div class="search-results__main " data-search-component="search-main">
  <div class="max-width--large gutter--normal flex flex-justify-center ">
    <form role="search" action="search" class="search-results__search-form set--w-100" method="get" name="simpleSearch1" data-search-component="form">
      <div class="row flex-no-gutters">
        <div class="col">
          <input id="searchResultSearchString" type="text" class="form-control form-control--text font-family--serif" name="q" value="<?= $_GET['q'] ?>" placeholder="Search products" aria-label="Search" data-search-component="query-input" aria-describedby="q-1055237829970">
          <div id="q-1055237829970" class="invalid-feedback"></div>
        </div>
        <div class="site-search__button-col col">
          <button type="submit" class="button button--primary button--fluid set--w-100 remove--border-left-radius">Search</button>
        </div>
      </div>
      <input type="hidden" value="en_US" name="lang" aria-describedby="lang-994857146113">
      <div id="lang-994857146113" class="invalid-feedback"></div>
    </form>
  </div>
  <div class="search-results max-width--large gutter--normal">
    <div class="search-results__nav max-width--small">
      <nav class="tab-nav row flex-justify-center toggle--active" role="tablist">
        <a class="search-results__nav-item tab-nav__item col-6 col-md-3 toggle--active" href="#product-search-results" role="tab" aria-expanded="true" id="toggleID-1240" aria-controls="product-search-results">
          Products
        </a>
        <a class="search-results__nav-item tab-nav__item col-6 col-md-3 " href="#content-search-results-pane" role="tab" aria-expanded="false" data-search-component="content-trigger" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-Content?q=juste&amp;startingPage=0" id="toggleID-1165" aria-controls="content-search-results-pane">
          Articles
        </a>
      </nav>
    </div>
    <div class="search-results__container">
      <div class="search-results__section toggle--active" id="product-search-results" role="tabpanel" aria-expanded="true" aria-labelledby="toggleID-1240">
        <div class="search-results__toolbar row flex-align-center">
          <div class="col-12 col-md-3 breadcrumbs--spaced">
          </div>

          <div class="col-12 display--small-only flex flex-direction-row">
            <div class="search-results__toolbar-button-container flex word-break--break-word hyphens--auto">
              <button type="button" class="search-results__toolbar-button body-type--centi font-weight--semibold text-align--center text-transform--uppercase" data-search-component="refinement-bar-trigger" id="toggleID-1325" aria-expanded="false" aria-controls="toggleID-1325--target">
                Filter By
              </button>
            </div>
            <div class="search-results__toolbar-button-container flex word-break--break-word hyphens--auto">
              <button type="button" class="search-results__toolbar-button search-results__toolbar-sortby-button body-type--centi font-weight--semibold text-align--center text-transform--uppercase" data-search-component="refinement-bar-trigger" id="toggleID-1370" aria-expanded="false" aria-controls="toggleID-1325--target">
                Sort By
              </button>
            </div>
          </div>
          <div class="search-results__toolbar-count col-6 col-md-6 font-family--serif" aria-live="polite" aria-atomic="true">
            <span>
            <?= wc_get_loop_prop('total') ?> Models
            </span>
          </div>
          <div class="col-6 col-md-3 flex-direction-row flex-justify-end body-type--centi">
            <button type="button" class="search-results__layout-selector flex set--active" data-search-component="grid-feed-toggle" data-search-layout="grid" title="Grid">
              <span class="search-results__layout-selector-label text-transform--uppercase display--small-up">Grid</span>
              <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--unselected body-type--deci">
                <use xlink:href="#icon--grid-view"></use>
              </svg>
              <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--selected body-type--deci">
                <use xlink:href="#icon--grid-view-active"></use>
              </svg>
            </button>
            <button type="button" class="search-results__layout-selector flex " data-search-component="grid-feed-toggle" data-search-layout="feed" title="Feed">
              <span class="search-results__layout-selector-label text-transform--uppercase display--small-up">Feed</span>
              <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--unselected body-type--deci">
                <use xlink:href="#icon--feed-view"></use>
              </svg>
              <svg aria-hidden="true" focusable="false" class="search-results__layout-selector-icon icon icon--selected body-type--deci">
                <use xlink:href="#icon--feed-view-active"></use>
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
              <input type="hidden" data-refinement-tracking="">
              <div class="row product-grid grid-view" itemtype="http://schema.org/SomeProducts" itemid="#product" data-search-component="product-grid">
                <?php
                // TODO update to use Discover/Add to shopping bag instead of Quickview
                foreach ($products as $product) {
                  // NOTE there is one boolean at the end because of an id 0, hence this check
                  if (gettype($product) == "object")
                    Product::render_product($product);
                }
                Product::render_product_loop_end($category, PRODUCTS_PER_PAGE, wc_get_loop_prop('total'));
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="search-results__section " id="content-search-results-pane" role="tabpanel" aria-expanded="false" aria-labelledby="toggleID-1165">
        <div class="max-width--small" data-search-component="content-list">
        </div>
      </div>
    </div>
  </div>
</div>