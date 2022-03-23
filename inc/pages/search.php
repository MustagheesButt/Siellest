<?php
  $params = Product::get_shop_params();
  $query = Product::custom_query($params['category'], $params['sort_rule'], collections: $params['collections'], search: $_GET['q']);
  $products = $query->get_products()->products;
  if (sizeof($products) == 0) {
    $products = Product::search($_GET['q']);
  }
  wc_set_loop_prop('total', sizeof($products));
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
            <div class="refinement-bar  text-transform--uppercase" data-search-component="refinement-bar" id="toggleID-1325--target" aria-labelledby="toggleID-1370">
              <div class="refinement-bar__head display--small-only gutter--normal flex flex-justify-center flex-align-center">
                <span class="refinement-bar__filter-title body-type--deka font-weight--semibold">Filter By</span>
                <span class="refinement-bar__sort-title body-type--deka font-weight--semibold">Sort By</span>
                <button class="refinement-bar__head-button flex" data-toggle-close="[data-search-component=refinement-bar-trigger]"><svg aria-hidden="true" focusable="false" class="icon">
                    <use xlink:href="#icon--close"></use>
                  </svg></button>
              </div>
              <div class="fixit-placeholder" style=""></div>
              <div class="refinement-bar__body gutter--small-only-normal fixit-element fixit--respond-to-parent" style="">
                <div class="refinement-bar__sort-list form-check-group" name="sort-order" data-search-component="search-sort">
                  <div class="display--small-up body-type--deci font-weight--semibold">Sort By</div>
                  <div class="refinement-bar__sort-item-container">
                    <a class="refinement-bar__sort-item" href="https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;q=juste&amp;srule=price-low-to-high&amp;start=0&amp;sz=24" data-sort-option-id="price-low-to-high" data-search-component="search-sort-anchor" aria-label="Price Low To High">
                      <input type="radio" id="price-low-to-high" class="form-check-input" name="sort-radio">
                      <label for="price-low-to-high" class="form-check-label--radio cursor--pointer">
                        <span class="body-type--centi link--underline-hover">Price Low To High</span>
                      </label>
                    </a>
                  </div>
                  <div class="refinement-bar__sort-item-container">
                    <a class="refinement-bar__sort-item" href="https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;q=juste&amp;srule=price-high-to-low&amp;start=0&amp;sz=24" data-sort-option-id="price-high-to-low" data-search-component="search-sort-anchor" aria-label="Price High to Low">
                      <input type="radio" id="price-high-to-low" class="form-check-input" name="sort-radio">
                      <label for="price-high-to-low" class="form-check-label--radio cursor--pointer">
                        <span class="body-type--centi link--underline-hover">Price High to Low</span>
                      </label>
                    </a>
                  </div>
                  <div class="refinement-bar__sort-item-container">
                    <a class="refinement-bar__sort-item" href="https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;q=juste&amp;srule=intl-emerch&amp;start=0&amp;sz=24" data-sort-option-id="intl-emerch" data-search-component="search-sort-anchor" aria-label="Recommended">
                      <input type="radio" id="intl-emerch" class="form-check-input" name="sort-radio" checked="">
                      <label for="intl-emerch" class="form-check-label--radio cursor--pointer">
                        <span class="body-type--centi link--underline-hover">Recommended</span>
                      </label>
                    </a>
                  </div>
                </div>
                <div class="refinements body-type--deci">
                  <div class="refinement__title font-weight--semibold display--small-up">
                    Filter By
                  </div>
                  <div id="refinement-null" class="refinement__content null">
                    <ol class="refinement__null list--reset">

                      <li class="refinement__boolean-item  ">
                        <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?q=juste&amp;prefn1=isSellable&amp;prefv1=Available&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Available">
                          <span class="body-type--centi link--underline-hover" aria-hidden="true">
                            Available Online
                          </span>
                          <span class="sr-only selected-assistive-text">
                            Refine by Available Online: Available
                          </span>
                        </a>
                      </li>
                      <li class="refinement__boolean-item  ">
                        <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?q=juste&amp;prefn1=novelties&amp;prefv1=NEW&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-NEW">
                          <span class="body-type--centi link--underline-hover" aria-hidden="true">
                            NEW
                          </span>
                          <span class="sr-only selected-assistive-text">
                            Refine by New Arrivals: NEW
                          </span>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
                <div class="refinements body-type--deci">
                  <div class="refinement refinement-category " data-refinement-type="category" tabindex="-1">
                    <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-search-component="refinement-trigger" aria-label="Category" id="toggleID-1219" aria-expanded="false" aria-controls="refinement-category">
                      <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
                        Category
                      </strong>
                      <svg aria-hidden="true" focusable="false" class="icon refinement__header-icon">
                        <use xlink:href="#icon--angle-up"></use>
                      </svg>
                    </button>
                    <div id="refinement-category" class="refinement__content " aria-labelledby="toggleID-1219">
                      <ol class="refinement__category list--reset">
                        <li class="refinement__boolean-item  ">
                          <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?q=juste&amp;prefn1=category&amp;prefv1=BRACELETS&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-BRACELETS">
                            <span class="body-type--centi link--underline-hover" aria-hidden="true">
                              BRACELETS
                            </span>
                            <span class="sr-only selected-assistive-text">
                              Refine by Category: BRACELETS
                            </span>
                          </a>
                        </li>
                        <li class="refinement__boolean-item  ">
                          <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?q=juste&amp;prefn1=category&amp;prefv1=EARRINGS&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-EARRINGS">
                            <span class="body-type--centi link--underline-hover" aria-hidden="true">
                              EARRINGS
                            </span>
                            <span class="sr-only selected-assistive-text">
                              Refine by Category: EARRINGS
                            </span>
                          </a>
                        </li>
                        <li class="refinement__boolean-item  ">
                          <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?q=juste&amp;prefn1=category&amp;prefv1=NECKLACES&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-NECKLACES">
                            <span class="body-type--centi link--underline-hover" aria-hidden="true">
                              NECKLACES
                            </span>
                            <span class="sr-only selected-assistive-text">
                              Refine by Category: NECKLACES
                            </span>
                          </a>
                        </li>
                        <li class="refinement__boolean-item  ">
                          <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?q=juste&amp;prefn1=category&amp;prefv1=RINGS&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-RINGS">
                            <span class="body-type--centi link--underline-hover" aria-hidden="true">
                              RINGS
                            </span>
                            <span class="sr-only selected-assistive-text">
                              Refine by Category: RINGS
                            </span>
                          </a>
                        </li>
                      </ol>
                    </div>
                  </div>
                  <div class="refinement refinement-gender " data-refinement-type="gender" tabindex="-1">
                    <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-search-component="refinement-trigger" aria-label="Gender" id="toggleID-3702" aria-expanded="false" aria-controls="refinement-gender">
                      <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
                        Gender
                      </strong>
                      <svg aria-hidden="true" focusable="false" class="icon refinement__header-icon">
                        <use xlink:href="#icon--angle-up"></use>
                      </svg>
                    </button>
                    <div id="refinement-gender" class="refinement__content " aria-labelledby="toggleID-3702">
                      <ol class="refinement__gender list--reset">
                        <li class="refinement__boolean-item  ">
                          <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?q=juste&amp;prefn1=gender&amp;prefv1=For%20Her&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-For Her">
                            <span class="body-type--centi link--underline-hover" aria-hidden="true">
                              For Her
                            </span>
                            <span class="sr-only selected-assistive-text">
                              Refine by Gender: For Her
                            </span>
                          </a>
                        </li>
                        <li class="refinement__boolean-item  ">
                          <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?q=juste&amp;prefn1=gender&amp;prefv1=For%20Him&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-For Him">
                            <span class="body-type--centi link--underline-hover" aria-hidden="true">
                              For Him
                            </span>
                            <span class="sr-only selected-assistive-text">
                              Refine by Gender: For Him
                            </span>
                          </a>
                        </li>
                      </ol>
                    </div>
                  </div>
                  <div class="refinement refinement-collection " data-refinement-type="collection" tabindex="-1">
                    <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-search-component="refinement-trigger" aria-label="Collection" id="toggleID-1811" aria-expanded="false" aria-controls="refinement-collection">
                      <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
                        Collection
                      </strong>
                      <svg aria-hidden="true" focusable="false" class="icon refinement__header-icon">
                        <use xlink:href="#icon--angle-up"></use>
                      </svg>
                    </button>
                    <div id="refinement-collection" class="refinement__content " aria-labelledby="toggleID-1811">
                      <ol class="refinement__collection list--reset">
                        <li class="refinement__boolean-item  ">
                          <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?q=juste&amp;prefn1=collection&amp;prefv1=Juste%20Un%20Clou&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Juste Un Clou">
                            <span class="body-type--centi link--underline-hover" aria-hidden="true">
                              Juste Un Clou
                            </span>
                            <span class="sr-only selected-assistive-text">
                              Refine by Collection: Juste Un Clou
                            </span>
                          </a>
                        </li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
              <div class="refinement-bar__footer flex flex-justify-between display--small-only gutter--normal">
                <button type="button" class="button button--primary flex-grow-1" data-toggle-close="[data-search-component=refinement-bar-trigger]">Apply</button>
              </div>
            </div>
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
                    echo Product::render_product($product);
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