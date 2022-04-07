<div class="refinement-bar  text-transform--uppercase" data-search-component="refinement-bar">
  <div class="refinement-bar__head display--small-only gutter--normal flex flex-justify-center flex-align-center">
    <span class="refinement-bar__filter-title body-type--deka font-weight--semibold">Filter By</span>
    <span class="refinement-bar__sort-title body-type--deka font-weight--semibold">Sort By</span>
    <button class="refinement-bar__head-button flex" data-toggle-close="[data-search-component=refinement-bar-trigger]">
      <svg aria-hidden="true" focusable="false" class="icon">
        <use xlink:href="#icon--close" />
      </svg>
    </button>
  </div>
  <div class="refinement-bar__body gutter--small-only-normal fixit-element" data-fixit-trigger='{"enabled": "small-up", "respondToParent": true, "containedInParent": true, "offset": ".header", "useOffsetOnTarget": true}'>
    <div class="refinements body-type--deci">
      <div class="refinement__title font-weight--semibold display--small-up">
        Filter By
      </div>
      <div id="refinement-available-online" class="refinement__content ">
        <ol class="refinement__available-online list--reset">
          <li class="refinement__boolean-item  ">
            <a href="wp-json/siellest/Search-ShowAjax?cgid=<?= $params['category'] ?>&prefn1=isSellable&prefv1=true&prefn2=sapIsVisibleWeb&prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-true" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
              <span class="body-type--centi link--underline-hover" aria-hidden="true">
                Available Online
              </span>
              <span class="sr-only selected-assistive-text">
                Refine by Available Online: true
              </span>
            </a>
          </li>
        </ol>
      </div>
      <?php
      $id = get_queried_object_id();
      $terms_query = [
        'taxonomy'    => 'product_cat',
        'hide_empty'  => false
      ];
      if (get_queried_object()->post_title != 'Search') $terms_query['parent'] = $id;

      $terms = get_terms($terms_query);

      if (sizeof($terms) > 0) {
      ?>
        <div class="refinement refinement-category " data-refinement-type="category" tabindex="-1">
          <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-toggle='{"target": ".refinement__content", "persist": true, "activeClass": "refinement--active", "auto": false}' data-search-component="refinement-trigger" aria-label="Category">
            <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
              Category
            </strong>
            <svg aria-hidden="true" focusable="false" class="icon refinement__header-icon">
              <use xlink:href="#icon--angle-up" />
            </svg>
          </button>
          <div id="refinement-category" class="refinement__content ">
            <ol class="refinement__category list--reset">
              <?php
              $count = 0;
              foreach ($terms as $term) {
                $count++;
              ?>
                <li class="refinement__boolean-item <?= $count >= 5 ? 'hidden' : '' ?>" <?= $count >= 5 ? 'data-refinement-hide' : '' ?>>
                  <a href="wp-json/siellest/Search-ShowAjax?cgid=<?= $params['category'] ?>&prefn1=category&prefv1=<?= $term->name ?>&prefn2=sapIsVisibleWeb&prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-<?= $term->name ?>" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                    <span class="body-type--centi link--underline-hover" aria-hidden="true">
                      <?= $term->name ?>
                    </span>
                    <span class="sr-only selected-assistive-text">
                      Refine by Category: <?= $term->name ?>
                    </span>
                  </a>
                </li>
              <?php
              }
              ?>
              <li data-refinement-show-more-container>
                <button type="button" data-refinement-show-more="true" class="toggleRefineViewCount link link--secondary">More</button>
              </li>
            </ol>
          </div>
        </div>
      <?php } ?>
      <div class="refinement refinement-gender " data-refinement-type="gender" tabindex="-1">
        <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-toggle='{"target": ".refinement__content", "persist": true, "activeClass": "refinement--active", "auto": false}' data-search-component="refinement-trigger" aria-label="Gender">
          <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
            Gender
          </strong>
          <svg aria-hidden="true" focusable="false" class="icon refinement__header-icon">
            <use xlink:href="#icon--angle-up" />
          </svg>
        </button>
        <div id="refinement-gender" class="refinement__content ">
          <ol class="refinement__gender list--reset">
            <li class="refinement__boolean-item  ">
              <a href="wp-json/siellest/Search-ShowAjax?cgid=Jewelry_AllCollections&prefn1=gender&amp;prefv1=For%20Her&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-For Her" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  For Her
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Gender: For Her
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="wp-json/siellest/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=gender&amp;prefv1=For%20Him&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-For Him" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  For Him
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Gender: For Him
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="wp-json/siellest/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=gender&amp;prefv1=For%20Children&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-For Children" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  For Children
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Gender: For Children
                </span>
              </a>
            </li>
          </ol>
        </div>
      </div>
      <?php
      $available_collections = Product::get_available_collections($params['category']);
      if (!isset($_GET['collection']) && sizeof($available_collections) > 0) { // if not a collection page
        $selected_collections = isset($collections) ? $collections : [];
      ?>
        <div class="refinement refinement-collection " data-refinement-type="collection" tabindex="-1">
          <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-toggle='{"target": ".refinement__content", "persist": true, "activeClass": "refinement--active", "auto": false}' data-search-component="refinement-trigger" aria-label="Collection">
            <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
              Collection
            </strong>
            <svg aria-hidden="true" focusable="false" class="icon refinement__header-icon">
              <use xlink:href="#icon--angle-up" />
            </svg>
          </button>
          <div id="refinement-collection" class="refinement__content ">
            <ol class="refinement__collection list--reset">
              <?php
              $count = 0;
              foreach($available_collections as $slug => $name) {
                $count++;
                $merged = !in_array($name, $selected_collections) ? array_merge($selected_collections, [$name]) : array_diff($selected_collections, [$name]);
              ?>
              <li class="refinement__boolean-item <?= $count > 5 ? 'hidden' : '' ?>" <?= $count > 5 ? 'data-refinement-hide' : '' ?>>
                <a href="wp-json/siellest/Search-ShowAjax?cgid=<?= $params['category'] ?>&prefn1=collection&prefv1=<?= implode('|', $merged) ?>&prefn2=sapIsVisibleWeb&prefv2=true" class="form-check-label <?= in_array($name, $selected_collections) ? 'set--checked' : '' ?>" data-refinement-action="boolean" data-refinement-id="boolean-<?= $name ?>" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                  <span class="body-type--centi link--underline-hover" aria-hidden="true">
                    <?= $name ?>
                  </span>
                  <span class="sr-only selected-assistive-text">
                    Refine by Collection: <?= $name ?>
                  </span>
                </a>
              </li>
              <?php
              }
              if ($count > 5) {
              ?>
              <li data-refinement-show-more-container>
                <button type="button" data-refinement-show-more="true" class="toggleRefineViewCount link link--secondary">More</button>
              </li>
              <?php } ?>
            </ol>
          </div>
        </div>
      <?php } ?>
      <div class="refinement refinement-metal " data-refinement-type="metal" tabindex="-1">
        <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-toggle='{"target": ".refinement__content", "persist": true, "activeClass": "refinement--active", "auto": false}' data-search-component="refinement-trigger" aria-label="Metal">
          <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
            Metal
          </strong>
          <svg aria-hidden="true" focusable="false" class="icon refinement__header-icon">
            <use xlink:href="#icon--angle-up" />
          </svg>
        </button>
        <div id="refinement-metal" class="refinement__content ">
          <ol class="refinement__metal list--reset">
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=material1&amp;prefv1=White%20Gold&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-White Gold" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  White Gold
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Metal: White Gold
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=material1&amp;prefv1=Rose%20Gold&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Rose Gold" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Rose Gold
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Metal: Rose Gold
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=material1&amp;prefv1=Yellow%20Gold&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Yellow Gold" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Yellow Gold
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Metal: Yellow Gold
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=material1&amp;prefv1=Platinum&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Platinum" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Platinum
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Metal: Platinum
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=material1&amp;prefv1=3-Gold&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-3-Gold" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  3-Gold
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Metal: 3-Gold
                </span>
              </a>
            </li>
          </ol>
        </div>
      </div>
      <div class="refinement refinement-paving " data-refinement-type="paving" tabindex="-1">
        <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-toggle='{"target": ".refinement__content", "persist": true, "activeClass": "refinement--active", "auto": false}' data-search-component="refinement-trigger" aria-label="Paving">
          <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
            Paving
          </strong>
          <svg aria-hidden="true" focusable="false" class="icon refinement__header-icon">
            <use xlink:href="#icon--angle-up" />
          </svg>
        </button>
        <div id="refinement-paving" class="refinement__content ">
          <ol class="refinement__paving list--reset">
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=paved&amp;prefv1=PAVED&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-PAVED" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  PAVED
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Paving: PAVED
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=paved&amp;prefv1=SEMI-PAVED&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-SEMI-PAVED" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  SEMI-PAVED
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Paving: SEMI-PAVED
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=paved&amp;prefv1=NON-PAVED&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-NON-PAVED" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  NON-PAVED
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Paving: NON-PAVED
                </span>
              </a>
            </li>
          </ol>
        </div>
      </div>
      <div class="refinement refinement-type-of-bracelet " data-refinement-type="type-of-bracelet" tabindex="-1">
        <button type="button" class="refinement__header set--w-100 flex flex-justify-between " data-toggle='{"target": ".refinement__content", "persist": true, "activeClass": "refinement--active", "auto": false}' data-search-component="refinement-trigger" aria-label="Type of bracelet">
          <strong class="refinement__type text-transform--uppercase font-weight--semibold text-align--left">
            Type of bracelet
          </strong>
          <svg aria-hidden="true" focusable="false" class="icon refinement__header-icon">
            <use xlink:href="#icon--angle-up" />
          </svg>
        </button>
        <div id="refinement-type-of-bracelet" class="refinement__content ">
          <ol class="refinement__type-of-bracelet list--reset">
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;prefn2=typeOfBracelet&amp;prefv2=RIGID" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-RIGID" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  RIGID
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Type of bracelet: RIGID
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=sapIsVisibleWeb&amp;prefv1=true&amp;prefn2=typeOfBracelet&amp;prefv2=FLEXIBLE" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-FLEXIBLE" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  FLEXIBLE
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Type of bracelet: FLEXIBLE
                </span>
              </a>
            </li>
          </ol>
        </div>
      </div>
    </div>
    <?php
    $sort_items = [
      'price-low-to-high' => 'Price Low To High',
      'price-high-to-low' => 'Price High To Low',
      'intl-emerch' => 'Recommended'
    ];

    $params = Product::get_shop_params();
    $query_params = http_build_query([
      'cgid' => $params['category'],
      'collection' => $_GET['collection'],
      'prefn1' => $_GET['prefn1'],
      'prefv1' => $_GET['prefv1'],
      'prefn2' => $_GET['prefn2'],
      'prefv2' => $_GET['prefv2']
    ]);
    $selected_rule = !empty($params['sort_rule']) ? $params['sort_rule'] : 'intl-emerch';
    ?>
    <div class="refinement-bar__sort-list form-check-group" name="sort-order" data-search-component="search-sort">
      <div class="display--small-up body-type--deci font-weight--semibold">Sort By</div>
      <?php
      foreach ($sort_items as $key => $si_name) {
      ?>
        <div class="refinement-bar__sort-item-container">
          <a class="refinement-bar__sort-item" href="wp-json/siellest/Search-ShowAjax?<?= $query_params ?>&srule=<?= $key ?>&start=0&sz=24" data-sort-option-id="<?= $key ?>" data-search-component="search-sort-anchor" aria-label="<?= $si_name ?>" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
            <input type="radio" id="<?= $key ?>" class="form-check-input" name="sort-radio" <?= $selected_rule == $key ? 'checked' : '' ?> />
            <label for="price-low-to-high" class="form-check-label--radio cursor--pointer">
              <span class="body-type--centi link--underline-hover"><?= $si_name ?></span>
            </label>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="refinement-bar__footer flex flex-justify-between display--small-only gutter--normal">
    <button class="refinement-bar__clear-button button set--w-50" data-url="wp-json/siellest/Search-ShowAjax?cgid=<?= $params['category'] ?>" aria-label="Reset, all refinements" data-refinement-action="reset">
      Clear All
    </button>
    <button type="button" class="button button--primary set--w-50" data-toggle-close="[data-search-component=refinement-bar-trigger]">Apply</button>
  </div>
</div>

<!-- BACKUP FOR SEARCH.PHP -->
<!--
<div class="refinement-bar  text-transform--uppercase" data-search-component="refinement-bar" id="toggleID-1325--target" aria-labelledby="toggleID-1370">
              <div class="refinement-bar__head display--small-only gutter--normal flex flex-justify-center flex-align-center">
                <span class="refinement-bar__filter-title body-type--deka font-weight--semibold">Filter By</span>
                <span class="refinement-bar__sort-title body-type--deka font-weight--semibold">Sort By</span>
                <button class="refinement-bar__head-button flex" data-toggle-close="[data-search-component=refinement-bar-trigger]">
                  <svg aria-hidden="true" focusable="false" class="icon">
                    <use xlink:href="#icon--close"></use>
                  </svg>
                </button>
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
            </div> -->