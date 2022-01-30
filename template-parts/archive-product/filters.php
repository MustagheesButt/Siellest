<div class="refinement-bar  text-transform--uppercase" data-search-component="refinement-bar">
  <div class="refinement-bar__head display--small-only gutter--normal flex flex-justify-center flex-align-center">
    <span class="refinement-bar__filter-title body-type--deka font-weight--semibold">Filter By</span>
    <span class="refinement-bar__sort-title body-type--deka font-weight--semibold">Sort By</span>
    <button class="refinement-bar__head-button flex" data-toggle-close="[data-search-component=refinement-bar-trigger]"><svg aria-hidden="true" focusable="false" class="icon">
        <use xlink:href="#icon--close" />
      </svg></button>
  </div>
  <div class="refinement-bar__body gutter--small-only-normal fixit-element" data-fixit-trigger='{"enabled": "small-up", "respondToParent": true, "containedInParent": true, "offset": ".header", "useOffsetOnTarget": true}'>
    <div class="refinements body-type--deci">
      <div class="refinement__title font-weight--semibold display--small-up">
        Filter By
      </div>
      <div id="refinement-available-online" class="refinement__content ">
        <ol class="refinement__available-online list--reset">
          <li class="refinement__boolean-item  ">
            <a href="wp-json/siellest/Search-ShowAjax?cgid=<?= $category ?>&prefn1=isSellable&prefv1=true&prefn2=sapIsVisibleWeb&prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-true" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
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
          <?php $id = get_queried_object_id();
            $terms = get_terms([
              'taxonomy'    => 'product_cat',
              'hide_empty'  => false,
              'parent'      => $id
            ]);
          ?>
          <ol class="refinement__category list--reset">
            <?php
              $count = 0;
              foreach($terms as $term) {
                $count++;
            ?>
            <li class="refinement__boolean-item <?= $count >= 5 ? 'hidden' : '' ?>" <?= $count >= 5 ? 'data-refinement-hide' : '' ?>>
              <a href="wp-json/siellest/Search-ShowAjax?cgid=<?= $category ?>&prefn1=category&prefv1=<?= $term->name ?>&prefn2=sapIsVisibleWeb&prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-<?= $term->name ?>" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
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

            <li class="refinement__boolean-item  ">
              <a href="wp-json/siellest/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=AMULETTE%20DE%20CARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-AMULETTE DE CARTIER" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  AMULETTE DE CARTIER
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: AMULETTE DE CARTIER
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=BRODERIE%20DE%20CARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-BRODERIE DE CARTIER" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  BRODERIE DE CARTIER
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: BRODERIE DE CARTIER
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=CARESSE%20D%27ORCHID%c3%89ES%20PAR%20CARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-CARESSE D'ORCHID&Eacute;ES PAR CARTIER" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  CARESSE D'ORCHID&Eacute;ES PAR CARTIER
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: CARESSE D'ORCHID&Eacute;ES PAR CARTIER
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Cartier%20Destin%c3%a9e&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Cartier Destin&eacute;e" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Cartier Destin&eacute;e
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Cartier Destin&eacute;e
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  ">
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=%c3%89crou%20de%20Cartier&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-&Eacute;crou de Cartier" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  &Eacute;crou de Cartier
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: &Eacute;crou de Cartier
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=CACTUS%20DE%20CARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-CACTUS DE CARTIER" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  CACTUS DE CARTIER
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: CACTUS DE CARTIER
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Cartier%20D%27Amour&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Cartier D'Amour" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Cartier D'Amour
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Cartier D'Amour
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Diamants%20L%c3%a9gers&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Diamants L&eacute;gers" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Diamants L&eacute;gers
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Diamants L&eacute;gers
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=ETINCELLE%20DE%20CARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-ETINCELLE DE CARTIER" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  ETINCELLE DE CARTIER
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: ETINCELLE DE CARTIER
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Juste%20Un%20Clou&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Juste Un Clou" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Juste Un Clou
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Juste Un Clou
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Maillon%20Panth%c3%a8re&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Maillon Panth&egrave;re" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Maillon Panth&egrave;re
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Maillon Panth&egrave;re
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=OFF%20RENAISSANCE&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-OFF RENAISSANCE" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  OFF RENAISSANCE
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: OFF RENAISSANCE
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Panth%c3%a8re%20de%20Cartier%20High%20Jewelry&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Panth&egrave;re de Cartier High Jewelry" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Panth&egrave;re de Cartier High Jewelry
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Panth&egrave;re de Cartier High Jewelry
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=PLUIE%20DE%20CARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-PLUIE DE CARTIER" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  PLUIE DE CARTIER
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: PLUIE DE CARTIER
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=REFLECTION%20DE%20CARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-REFLECTION DE CARTIER" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  REFLECTION DE CARTIER
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: REFLECTION DE CARTIER
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Trinity&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Trinity" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Trinity
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Trinity
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Tank%20Fran%c3%a7aise&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Tank Fran&ccedil;aise" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Tank Fran&ccedil;aise
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Tank Fran&ccedil;aise
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=TRINITY%20RUBAN&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-TRINITY RUBAN" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  TRINITY RUBAN
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: TRINITY RUBAN
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=C%20de%20Cartier&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-C de Cartier" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  C de Cartier
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: C de Cartier
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=OBJETS%20HAUTE%20JOAILLERIE&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-OBJETS HAUTE JOAILLERIE" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  OBJETS HAUTE JOAILLERIE
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: OBJETS HAUTE JOAILLERIE
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Les%20Oiseaux%20Lib%c3%a9r%c3%a9s&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Les Oiseaux Lib&eacute;r&eacute;s" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Les Oiseaux Lib&eacute;r&eacute;s
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Les Oiseaux Lib&eacute;r&eacute;s
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=GALANTERIE%20DE%20CARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-GALANTERIE DE CARTIER" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  GALANTERIE DE CARTIER
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: GALANTERIE DE CARTIER
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Geometry%20%26%20Contrast&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Geometry &amp; Contrast" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Geometry &amp; Contrast
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Geometry &amp; Contrast
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=FAUNE%20ET%20FLORE%20DE%20CARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-FAUNE ET FLORE DE CARTIER" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  FAUNE ET FLORE DE CARTIER
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: FAUNE ET FLORE DE CARTIER
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=COLLECTION%20DIAMANT&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-COLLECTION DIAMANT" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  COLLECTION DIAMANT
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: COLLECTION DIAMANT
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Caresse%20d%27Orchid%c3%a9es%20Haute%20Joaillerie&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Caresse d'Orchid&eacute;es Haute Joaillerie" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Caresse d'Orchid&eacute;es Haute Joaillerie
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Caresse d'Orchid&eacute;es Haute Joaillerie
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Agrafe&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Agrafe" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Agrafe
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Agrafe
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=1895&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-1895" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  1895
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: 1895
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Ballerine&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Ballerine" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Ballerine
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Ballerine
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Essential%20Lines&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Essential Lines" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Essential Lines
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Essential Lines
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=%c3%89vasions%20Joailli%c3%a8res&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-&Eacute;vasions Joailli&egrave;res" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  &Eacute;vasions Joailli&egrave;res
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: &Eacute;vasions Joailli&egrave;res
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Logo&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Logo" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Logo
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Logo
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Paris%20Nouvelle%20Vague&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Paris Nouvelle Vague" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Paris Nouvelle Vague
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Paris Nouvelle Vague
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=LOVE&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-LOVE" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  LOVE
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: LOVE
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=CHAINS%20AND%20LINKS&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-CHAINS AND LINKS" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  CHAINS AND LINKS
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: CHAINS AND LINKS
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=%5bSUR%5dNATUREL&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-[SUR]NATUREL" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  [SUR]NATUREL
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: [SUR]NATUREL
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Symbols&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Symbols" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Symbols
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Symbols
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=PIERRES%20GRAVEES&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-PIERRES GRAVEES" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  PIERRES GRAVEES
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: PIERRES GRAVEES
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=Clash%20%5bUn%5dlimited&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Clash [Un]limited" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Clash [Un]limited
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Clash [Un]limited
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=CARTIERTRADITION&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Antique piece" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Antique piece
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Antique piece
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=OFFREPIERREDECENTRE&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Center Stone range" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Center Stone range
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Center Stone range
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=GRIFFEDECARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Clash de Cartier" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Clash de Cartier
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Clash de Cartier
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=COLLECTIONCREATIVE&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-COLLECTIONCREATIVE" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  COLLECTIONCREATIVE
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: COLLECTIONCREATIVE
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=HAUTEJOAILLERIE&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-High Jewelry" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  High Jewelry
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: High Jewelry
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=PANTHEREDECARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Panth&egrave;re de Cartier" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Panth&egrave;re de Cartier
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Panth&egrave;re de Cartier
                </span>
              </a>
            </li>
            <li class="refinement__boolean-item  hidden" data-refinement-hide>
              <a href="/on/demandware.store/Sites-CartierUS-Site/en_US/Search-ShowAjax?cgid=Jewelry_AllCollections&amp;prefn1=collection&amp;prefv1=VENDOMELOUISCARTIER&amp;prefn2=sapIsVisibleWeb&amp;prefv2=true" class="form-check-label  " data-refinement-action="boolean" data-refinement-id="boolean-Vend&ocirc;me Louis Cartier" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
                <span class="body-type--centi link--underline-hover" aria-hidden="true">
                  Vend&ocirc;me Louis Cartier
                </span>
                <span class="sr-only selected-assistive-text">
                  Refine by Collection: Vend&ocirc;me Louis Cartier
                </span>
              </a>
            </li>
            <li data-refinement-show-more-container>
              <button type="button" data-refinement-show-more="true" class="toggleRefineViewCount link link--secondary">More</button>
            </li>
          </ol>
        </div>
      </div>
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
    <div class="refinement-bar__sort-list form-check-group" name="sort-order" data-search-component="search-sort">
      <div class="display--small-up body-type--deci font-weight--semibold">Sort By</div>
      <div class="refinement-bar__sort-item-container">
        <a class="refinement-bar__sort-item" href="wp-json/siellest/Search-ShowAjax?cgid=<?= $category ?>&prefn1=sapIsVisibleWeb&prefv1=true&srule=price-low-to-high&start=0&sz=24" data-sort-option-id="price-low-to-high" data-search-component="search-sort-anchor" aria-label="Price Low To High" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
          <input type="radio" id="price-low-to-high" class="form-check-input" name="sort-radio" />
          <label for="price-low-to-high" class="form-check-label--radio cursor--pointer">
            <span class="body-type--centi link--underline-hover">Price Low To High</span>
          </label>
        </a>
      </div>
      <div class="refinement-bar__sort-item-container">
        <a class="refinement-bar__sort-item" href="wp-json/siellest/Search-ShowAjax?cgid=<?= $category ?>&prefn1=sapIsVisibleWeb&prefv1=true&srule=price-high-to-low&start=0&sz=24" data-sort-option-id="price-high-to-low" data-search-component="search-sort-anchor" aria-label="Price High to Low" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
          <input type="radio" id="price-high-to-low" class="form-check-input" name="sort-radio" />
          <label for="price-high-to-low" class="form-check-label--radio cursor--pointer">
            <span class="body-type--centi link--underline-hover">Price High to Low</span>
          </label>
        </a>
      </div>
      <div class="refinement-bar__sort-item-container">
        <a class="refinement-bar__sort-item" href="wp-json/siellest/Search-ShowAjax?cgid=<?= $category ?>&prefn1=sapIsVisibleWeb&prefv1=true&srule=intl-emerch&start=0&sz=24" data-sort-option-id="intl-emerch" data-search-component="search-sort-anchor" aria-label="Recommended" data-window-scroll='{"target": ".search-results", "offset": ".header"}'>
          <input type="radio" id="intl-emerch" class="form-check-input" name="sort-radio" checked />
          <label for="intl-emerch" class="form-check-label--radio cursor--pointer">
            <span class="body-type--centi link--underline-hover">Recommended</span>
          </label>
        </a>
      </div>
    </div>
  </div>
  <div class="refinement-bar__footer flex flex-justify-between display--small-only gutter--normal">
    <button class="refinement-bar__clear-button button set--w-50" data-url="wp-json/siellest/Search-ShowAjax?cgid=<?= $category ?>" aria-label="Reset, all refinements" data-refinement-action="reset">
      Clear All
    </button>
    <button type="button" class="button button--primary set--w-50" data-toggle-close="[data-search-component=refinement-bar-trigger]">Apply</button>
  </div>
</div>