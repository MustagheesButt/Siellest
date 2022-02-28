<?php
  $p = wc_get_product();
  $product = wc_get_product()->get_data();
  $category = get_term($p->get_category_ids()[2])->name; // TODO not sure if it'll always be in order
?>

<div class="pdp" itemscope itemtype="http://schema.org/Product" data-page-motion>
  <div class="pdp-main max-width--large" data-product-container="pdp" data-pid="<?= $product['id'] ?>" data-product-querystring="pid=<?= $product['id'] ?>">

    <div class="row flex-no-gutters">

      <div class="col-12 col-md-7">
        <div class="pdp-main__media">

          <div class="pdp-main__breadcrumbs">
            <ol class="breadcrumbs body-type--centi list--reset">
              <li class="breadcrumbs__item flex--inline flex-align-baseline">
                <a class="breadcrumbs__anchor link--secondary" href="https://www.siellest.com/en-us/home" title="Home">Home</a>
                <span class="breadcrumbs__separator">/</span>
              </li>
              <li class="breadcrumbs__item flex--inline flex-align-baseline">
                <a class="breadcrumbs__anchor link--secondary" href="product-category/jewelry/" title="Jewelry">Jewelry</a>
                <span class="breadcrumbs__separator">/</span>
              </li>
              <li class="breadcrumbs__item flex--inline flex-align-baseline">
                <a class="breadcrumbs__anchor link--secondary" href="product-category/jewelry/bracelets/" title="<?= $category ?>"><?= $category ?></a>
              </li>
            </ol>
          </div>

          <ul id="pdpCarousel-B6067217" class="product-gallery product-gallery--pdp slider--sm-pre-layout-1 slider--arrows-inner slider--arrows-center slider--dots-inner list--reset slider--flex slider--row" data-slick='{"type": "pdpCarousel"}' data-product-component="image-gallery" aria-label="Product Main Images">
            <li class="product-gallery__col col-12  ">
              <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-image" type="button" data-product-component="zoom-trigger">
                <img src="<?= wp_get_attachment_url($product['image_id']) ?>" class="product-gallery__img component-overlay component-overlay--center object-fit--contain <?= true ? 'full-stretch-image' : '' ?>" data-product-component="image" data-image-index="0" alt="<?= $product['name'] ?>, image 1" itemprop="image" />
              </button>
            </li>
            <?php
            foreach ($product['gallery_image_ids'] as $key => $img_id) {
            ?>
            <li class="product-gallery__col col-12  col-md-6">
              <button class="product-gallery__item aspect-ratio--square set--w-100  bg--grey-image" type="button" data-product-component="zoom-trigger">
                <img src="<?= wp_get_attachment_url($img_id) ?>?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png" class="product-gallery__img component-overlay component-overlay--center object-fit--contain <?= true ? 'full-stretch-image' : '' ?>" data-product-component="image" data-image-index="1" alt="<?= $product['name'] ?>, image <?= $key + 1 ?>" itemprop="image" />
              </button>
            </li>
            <?php
            }
            ?>
          </ul>
          <div class="hidden">
            <li class="product-gallery__col col-12 col-md-6" data-product-component="gallery-item" data-image-template="image-gallery">
              <button class="product-gallery__item aspect-ratio--square set--w-100 bg--grey-1" type="button" data-product-component="zoom-trigger">
                <img class="product-gallery__img component-overlay component-overlay--center object-fit--contain" data-product-component="image" data-image-index="" alt="" itemprop="image" />
              </button>
            </li>
          </div>
        </div>
      </div>
      <div class="fixit-container col-12 col-md-5">
        <div class="pdp-main__details flex flex-direction-col flex-align-center gutter--normal fixit-element" data-fixit-trigger='{"enabled": "small-up", "respondToParent": true, "containedInParent": true, "dynamicOffset": ".header", "useOffsetOnTarget": true}'>
          <div class="pdp-main__section pdp-main__section--name set--w-100">

            <h1 class="pdp__name heading-type fluid-type--deka-hecto text-line--normal" data-product-component="name">  
              <?= $product['name'] ?>
            </h1>

            <div class="pdp__details-short-description-wrapper">
              <div class="pdp-main__short-description cms-generic-copy text-line--medium">
                <?= $product['short_description'] ?>
              </div>
            </div>

            <div class="pdp-main__price flex flex-flow-wrap">
              <div class="pdp-main__price-value font-weight--semibold">
                <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                  <meta itemprop="priceCurrency" content="<?= get_woocommerce_currency() ?>" />
                  <span class="price__sales sales">
                    <span class="value" itemprop="price" content="<?= number_format((float)$product['price'], 2, thousands_separator:'') ?>">
                      <?= get_woocommerce_currency_symbol() ?><?= number_format($product['price'], 2) ?>
                    </span>
                </div>
              </div>
              <span class="pdp-main__price-tax font-family--serif body-type--deci">
                excl. sales tax
              </span>
            </div>
            <div class="pdp__details-description-wrapper">

              <div class="pdp-main__description cms-generic-copy text-line--medium" data-product-component="short-description">
                <?= $product['description'] ?>
              </div>
            </div>
          </div>

          <?php
          if ($p->is_type('variable')) {
            $available_variations = $p->get_available_variations();
            // var_dump($available_variations[0]);
          ?>
          <div class="pdp-main__section pdp-main__section--attributes set--w-100">

            <div class="product-attribute__list flex flex-flow-wrap">
              <div class="product-attribute product-attribute--size product-attribute--last" data-attr-group="size" data-attr-group-type="dropdown">


                <div class="product-attribute__head flex flex-justify-between sr-only">
                  <label class="product-attribute__label product-attribute__label--size form-control-label" for="productAttribute-<?= $p->id ?>-size">
                    <span class="product-attribute__label-pre">Select Size</span>
                  </label>
                </div>
                <div class="product-attribute__contents ">

                  <select id="productAttribute-B6067217-size" class="product-attribute__size button form-control form-control--select form-control--boxed text-align-last--center" data-attr="size" data-attr-type="dropdown">
                    <option value="<?= get_site_url() ?>/wp-json/siellest/Product-Variation?dwvar_<?= $p->id ?>_size=&pid=<?= $p->id ?>&quantity=1">
                      Select Size
                    </option>
                    <?php
                    foreach ($available_variations as $variation) {
                    ?>
                    <option value="<?= get_site_url() ?>/wp-json/siellest/Product-Variation?dwvar_<?= $p->id ?>_size=15&pid=<?= $p->id ?>&quantity=1" data-attr-value="<?= $variation['attributes']['attribute_pa_size'] ?>">
                      <?= $variation['attributes']['attribute_pa_size'] ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <input type="hidden" value="1" data-product-component="qty" />

            </div>
          </div>
          <?php } ?>
          <div class="pdp-main__section pdp-main__section--actions flex set--w-100" data-product-component="actions">

            <div class="product-add__container cart-and-ipay flex-grow-1 flex flex-align-center">

              <button type="button" class="product__request-price button button--primary set--w-100 hidden" data-pid="<?= $p->id ?>" data-url="wp-json/siellest/RequestPrice-Start?pid=<?= $p->id ?>" data-product-url="productRequestPrice" data-modal-trigger='{"dynamicURL": true, "type": "html", "options": {"modalID": "productRequestPrice", "modalClass": "modal--generic modal--request-price", "keepAlive": false}}' data-product-component="request-price">
                Request Price
              </button>
              <p class="font-family--serif hidden" data-product-component="availability-status">
                Unavailable online
              </p>
              <button class="product-add__button add-to-cart button button--primary button--fluid set--w-100  " <?= $p->is_type('variable') ? 'disabled' : '' ?> data-pid="<?= $product['id'] ?>" data-product-component="add-button" data-url="wp-json/siellest/Cart-AddProduct">
                Add to Shopping Bag
              </button>
            </div>
            <div class="product-common__wishlist">
              <button type="button" class="product-common__wishlist-trigger button--flex button--fluid flex-align-center flex-justify-center" title="Add to Wish List, Panth&egrave;re de Cartier bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Panth&egrave;re de Cartier bracelet" data-wishlist-label-remove="Remove from Wish List, Panth&egrave;re de Cartier bracelet">
                <span class="sr-only">Add to Wish List</span>
                <svg aria-hidden="true" focusable="false" class="product-common__wishlist-add icon body-type--deka">
                  <use xlink:href="#icon--heart" />
                </svg>
                <svg aria-hidden="true" focusable="false" class="product-common__wishlist-remove icon body-type--deka">
                  <use xlink:href="#icon--heart-filled" />
                </svg>
              </button>
            </div>
          </div>
          <div class="pdp-main__section pdp-main__section--secondary-actions set--w-100">


            <div class="pdp-main__secondary-action">
              <a href="tel:1-800-227-8437" class="link--secondary-icon link--flex flex-align-center body-type--centi" data-tracking='{"trackEvent": "callCenter", "asyncParams": {"pid": "B6067217"}}'>
                <svg aria-hidden="true" focusable="false" class="link__icon icon body-type--deka">
                  <use xlink:href="#icon--phone" />
                </svg>
                Order by Phone 1-800-227-8437
              </a>
            </div>

            <div class="pdp-main__secondary-action">
              <div class="product-pickup product-pickup--default">
                <div class="product-pickup__options">
                  <button type="button" class="link--secondary-icon link--flex flex-align-center body-type--centi " data-product-component="pickup-trigger" data-action-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Stores-InventorySearch?radius=20000&amp;renderView=productAvailability&amp;typeCheck=CR">
                    <svg aria-hidden="true" focusable="false" class="link__icon icon body-type--hecto">
                      <use xlink:href="#icon--store-pickup" />
                    </svg>
                    Find in Boutique
                  </button>
                </div>
              </div>
            </div>

            <div class="pdp-main__secondary-action pdp-main__contact-ambassador">
              <a class="link--secondary-icon link--flex flex-align-center body-type--centi" href="contact-customer-care" aria-label="Contact an ambassador" data-tracking='{"trackEvent": "productPageForm", "trackObject": {"formName": "contactambassador"}, "asyncParams": {"pid": "B6067217"}}'>
                <svg aria-hidden="true" focusable="false" class="link__icon icon body-type--hecto">
                  <use xlink:href="#icon--contact" />
                </svg>
                Contact an ambassador
              </a>
            </div>
          </div>
          <div class="pdp-main__section pdp-main__section--secondary-actions set--w-100">
            <a class="link--primary" href="contact-us-appointment" title="Book an Appointment" data-tracking='{"trackEvent":"productPageForm","trackObject":{"formName":"bookanappointment"}, "asyncParams": {"pid": "B6067217"}}'>
              Book an Appointment
            </a>
          </div>
          <div class="pdp-main__section pdp-main__section--footer flex flex-align-center flex-flow-wrap set--w-100">

            <div class="pdp-main__footer-item pdp-main__social flex">
              <button type="button" class="product-common__share-trigger link link--flex flex-align-center body-type--centi text-transform--uppercase" data-share-component="trigger" data-tracking='{"trackEvent": "productShare", "asyncParams": {"pid": "B6067217"}}' data-modal-trigger='{"selector": "[data-share-component=modal]", "options": {"modalID": "productShare", "modalClass": "modal--prompt"}}'>
                <svg aria-hidden="true" focusable="false" class="icon icon icon--set-left-short body-type--hecto">
                  <use xlink:href="#icon--share" />
                </svg>
                Share
              </button>
              <div class="modal-container--static" data-share-component="modal">
                <div class="modal__header">
                  <h2 class="modal__title fluid-type--deka-hecto heading-type">Share</h2>
                </div>
                <div class="modal__body gutter--normal">
                  <ul class="product-common__social flex flex-justify-center flex-align-center list--reset">

                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fabaf6a531b5e43"></script>
                    <li class="product-common__social-item">
                      <a class="link--highlight-hover link--flex product-common__social-anchor--facebook addthis_button_facebook" data-tracking='{"trackEvent": "productShareDetails", "asyncParams": {"pid": "B6067217"}, "trackObject": {"linkTitle": "facebook"}}'>
                        <svg aria-hidden="true" focusable="false" class="icon body-type--hecto">
                          <use xlink:href="#icon--facebook" />
                        </svg>
                      </a>
                    </li>
                    <li class="product-common__social-item">
                      <a class="link--highlight-hover link--flex product-common__social-anchor--pinterest_share addthis_button_pinterest_share" data-tracking='{"trackEvent": "productShareDetails", "asyncParams": {"pid": "B6067217"}, "trackObject": {"linkTitle": "pinterest_share"}}'>
                        <svg aria-hidden="true" focusable="false" class="icon body-type--hecto">
                          <use xlink:href="#icon--pinterest_share" />
                        </svg>
                      </a>
                    </li>
                    <li class="product-common__social-item">
                      <a class="link--highlight-hover link--flex product-common__social-anchor--twitter addthis_button_twitter" data-tracking='{"trackEvent": "productShareDetails", "asyncParams": {"pid": "B6067217"}, "trackObject": {"linkTitle": "twitter"}}'>
                        <svg aria-hidden="true" focusable="false" class="icon body-type--hecto">
                          <use xlink:href="#icon--twitter" />
                        </svg>
                      </a>
                    </li>
                    <li class="product-common__social-item">
                      <a class="link--highlight-hover link--flex product-common__social-anchor--email addthis_button_email" data-tracking='{"trackEvent": "productShareDetails", "asyncParams": {"pid": "B6067217"}, "trackObject": {"linkTitle": "email"}}'>
                        <svg aria-hidden="true" focusable="false" class="icon heading-type--h6">
                          <use xlink:href="#icon--email" />
                        </svg>
                      </a>
                    </li>
                    <li class="product-common__social-item">
                      <a class="link--highlight-hover link--flex product-common__social-anchor--whatsapp addthis_button_whatsapp" data-tracking='{"trackEvent": "productShareDetails", "asyncParams": {"pid": "B6067217"}, "trackObject": {"linkTitle": "whatsapp"}}'>
                        <svg aria-hidden="true" focusable="false" class="icon body-type--hecto">
                          <use xlink:href="#icon--whatsapp" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="pdp-main__footer-item pdp-main__ref body-type--deci">
              Ref. <span data-product-component="pid"><?= $p->sku ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    (function() {
      // window.CQuotient is provided on the page by the Analytics code:
      var cq = window.CQuotient;
      if (cq && ('function' == typeof cq.getCQUserId) &&
        ('function' == typeof cq.getCQCookieId) &&
        ('function' == typeof cq.getCQHashedEmail) &&
        ('function' == typeof cq.getCQHashedLogin)) {
        var recommender = '[[&quot;pdp&quot;]]';
        // cleaning up the leading/trailing brackets and quotes:
        recommender = recommender.slice(8, recommender.length - 8);
        var separator = '|||';
        var slotConfigurationUUID = 'd19ab9d97b32d6505e6fae7865';
        var contextAUID = 'B6067217';
        var contextSecondaryAUID = '';
        var contextAltAUID = '';
        var contextType = '';
        var anchorsArray = [];
        var contextAUIDs = contextAUID.split(separator);
        var contextSecondaryAUIDs = contextSecondaryAUID.split(separator);
        var contextAltAUIDs = contextAltAUID.split(separator);
        var contextTypes = contextType.split(separator);
        var slotName = 'product-recommendations-relatedcreation';
        var slotConfigId = 'Dynamic-Recommendation';
        var slotConfigTemplate = 'slots/recommendation/productCarouselSlot.isml';
        if (contextAUIDs.length == contextSecondaryAUIDs.length) {
          for (i = 0; i < contextAUIDs.length; i++) {
            anchorsArray.push({
              id: contextAUIDs[i],
              sku: contextSecondaryAUIDs[i],
              type: contextTypes[i],
              alt_id: contextAltAUIDs[i]
            });
          }
        } else {
          anchorsArray = [{
            id: contextAUID,
            sku: contextSecondaryAUID,
            type: contextType,
            alt_id: contextAltAUID
          }];
        }
        var urlToCall = '/on/demandware.store/Sites-CartierUS-Site/en_US/CQRecomm-Start';
        var params = {
          userId: cq.getCQUserId(),
          cookieId: cq.getCQCookieId(),
          emailId: cq.getCQHashedEmail(),
          loginId: cq.getCQHashedLogin(),
          anchors: anchorsArray,
          slotId: slotName,
          slotConfigId: slotConfigId,
          slotConfigTemplate: slotConfigTemplate,
          ccver: '1.03'
        };
        if (cq.getRecs) {
          cq.getRecs(cq.clientId, recommender, params, cb);
        } else {
          cq.widgets = cq.widgets || [];
          cq.widgets.push({
            recommenderName: recommender,
            parameters: params,
            callback: cb
          });
        }
      };

      function cb(parsed) {
        var arr = parsed[recommender].recs;
        if (arr && 0 < arr.length) {
          var filteredProductIds = '';
          for (i = 0; i < arr.length; i++) {
            filteredProductIds = filteredProductIds + 'pid' + i + '=' + encodeURIComponent(arr[i].id) + '&';
          }
          filteredProductIds = filteredProductIds.substring(0, filteredProductIds.length - 1); //to remove the trailing '&'
          var formData = 'auid=' + encodeURIComponent(contextAUID) +
            '&scid=' + slotConfigurationUUID +
            '&' + filteredProductIds;
          var request = new XMLHttpRequest();
          request.open('POST', urlToCall, true);
          request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          request.onreadystatechange = function() {
            if (this.readyState === 4) {
              // Got the product data from DW, showing the products now by changing the inner HTML of the DIV:
              var divId = 'cq_recomm_slot-' + slotConfigurationUUID;
              document.getElementById(divId).innerHTML = this.responseText;
              //find and evaluate scripts in response:
              var scripts = document.getElementById(divId).getElementsByTagName('script');
              if (null != scripts) {
                for (var i = 0; i < scripts.length; i++) { //not combining script snippets on purpose
                  var srcScript = document.createElement('script');
                  srcScript.text = scripts[i].innerHTML;
                  srcScript.asynch = scripts[i].asynch;
                  srcScript.defer = scripts[i].defer;
                  srcScript.type = scripts[i].type;
                  srcScript.charset = scripts[i].charset;
                  document.head.appendChild(srcScript);
                  document.head.removeChild(srcScript);
                }
              }
            }
          };
          request.send(formData);
          request = null;
        }
      };
    })();
  </script>

  <div id="cq_recomm_slot-d19ab9d97b32d6505e6fae7865"></div>

  <div class="experience-region experience-main">
    <div class="experience-component experience-accelerator_layouts-2colLayout">
      <div class="module-container module-container--spacing-top-regular module-container--spacing-bottom-regular" style="" data-tracking-context="content-grid" data-tracking='{"events": "enterViewport", "trackEvent": "eePromoView", "asyncParams": {"promotions": "--childrenData", "promoCreative": "--context"}}'>
        <section class="max-width--large module-container__constraint--center">
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
          <div class="module-grid row module-grid--spacing-row-large module-grid--has-inner-gutters">
            <div class="module-grid__item col-12 col-md-6 col-lg-7">
              <div class="flex flex-grow-1">
                <article class="bg--grey-1 flex-grow-1 descriptive-card descriptive-card--size-small descriptive-card--ratio-square descriptive-card--style-default" style="background-color:#F9F9F9; " data-content-component="descriptive-card" data-motion='{"properties": "opacity from-v-direction", "children": ".descriptive-card__content > *"}' data-tracking-id="Gift Wrapping" data-tracking-position data-tracking='{"trackEvent": "eePromoClick", "asyncParams": {"promoName": "data-tracking-id", "promoPosition": "data-tracking-position", "promoCreative": "--context"}}'>

                  <div class="row flex-no-gutters">
                    <div class="col-12 col-md-6 col-lg-6 ">
                      <div class="descriptive-card__aspect-ratio descriptive-card__aspect-ratio--square">
                        <div class="descriptive-card__media component-overlay component-overlay--center">
                          <picture>
                            <source data-srcset="wp-content/themes/siellest/assets/images/dw1af055b2/w750.jpeg" class="picture--source-element">
                            <img data-image-component="lazyload" src=wp-content/themes/siellest/assets/images/dw1af055b2/w750.jpeg?sw=40&amp;q=100 class="component-image descriptive-card__img object-fit--cover lazyload blur-up" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; " />
                          </picture>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 ">
                      <div class="descriptive-card__content-wrap flex flex-grow-1 text-align--left component-v-align--center component-h-align--center">
                        <div class="descriptive-card__content " style="">
                          <h1 class="descriptive-card__title heading-type component-copy__title--small">
                            Gift Wrapping
                          </h1>
                          <div class="descriptive-card__description font-family--serif text-line--medium">
                            <p>Send your presents in our signature packaging with a personalised greetings card included.</p>
                          </div>
                          <div class="component-actions descriptive-card__actions">
                            <a href="https://www.siellest.com/en-us/experience-gift-wrapping.html" class="component-actions__cta  descriptive-card__cta link link--primary " aria-label="Gift Wrapping, Read More" style="">
                              Read More
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="module-grid__item col-12 col-md-6 col-lg-5">
              <div class="flex flex-grow-1">
                <article class="set--w-100 flex flex-direction-col content-tile content-tile--size-small content-tile--ratio-inherit content-tile--style-default" style="" data-content-component="content-tile" data-motion='{"properties": "opacity from-v-direction", "children": ".content-tile__content > *"}' data-tracking-id="Shipping / return" data-tracking-position data-tracking='{"trackEvent": "eePromoClick", "asyncParams": {"promoName": "data-tracking-id", "promoPosition": "data-tracking-position", "promoCreative": "--context"}}'>

                  <div class="content-tile__aspect-ratio content-tile__aspect-ratio--inherit "></div>
                  <div class="content-tile__content-wrap set--w-100 flex set--text-overlay component-overlay component-overlay--center set--has-background text-align--left component-v-align--center component-h-align--center" style="background-color:#f9f9f9;">
                    <div class="content-tile__content">
                      <h2 class="content-tile__title heading-type component-copy__title--small">
                        Shipping / return
                      </h2>
                      <div class="content-tile__description font-family--serif text-line--medium">
                        We offer different delivery options. Choose the one you prefer at the checkout. You may return or exchange your Cartier creation within 30 days.
                      </div>
                      <div class="component-actions content-tile__actions">
                        <div class="component-actions--inner"><span class="content-tile__cta">
                            <a href="https://www.siellest.com/en-us/global-shipping-information-modal.html" class="component-actions__cta   link link--primary " aria-label="View Shipping" style="" data-modal-trigger='{"dynamicURL": true, "type": "html", "data": {"renderView": "modal", "inlineContent": true}, "options": {"modalID": null, "modalClass": "modal--generic"}}'>
                              View Shipping
                            </a>
                          </span><span class="content-tile__cta">
                            <a href="https://www.siellest.com/en-us/global-return-information-modal.html" class="component-actions__cta   link link--primary " aria-label="View Return" style="" data-modal-trigger='{"dynamicURL": true, "type": "html", "data": {"renderView": "modal", "inlineContent": true}, "options": {"modalID": null, "modalClass": "modal--generic"}}'>
                              View Return
                            </a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
        </section>
      </div>
    </div>
  </div>
  <div class="pdp__recommendations" data-tracking-context="Othersuggestions">
  </div>
  <div class="pdp__recommendations" data-tracking-context="Similarsuggestions">
    <div class="module-container  module-container--spacing-bottom-regular" style="" data-tracking='{"events": "enterViewport", "trackEvent": "eeListView", "asyncParams": {"products": "--childrenData", "listValue": "--context"}}'>
      <section class="product-list gutter--small max-width--medium">
        <div class="module-container__header  text-align--center" data-motion="opacity from-bottom">
          <h1 class="module-container__title heading-type component-copy__title--regular">You May Also Like</h1>
        </div>
        <div class="product-list__carousel slider--flex slider--arrows-outer slider--dots-right slider--arrows-tile-center slider--h-align-center slider--row slider--pre-layout-1 slider--md-pre-layout-md-3 slider--lg-pre-layout-4" data-slick='{"type": "productListCarousel", "slidesToShow": 4.0, "slidesToScroll": 4.0, "responsive": [{"breakpoint": 767, "settings": {"slidesToShow": 1.0, "slidesToScroll": 1.0}}, {"breakpoint": 1024, "settings": {"slidesToShow": 3.0, "slidesToScroll": 3.0}}]}'>
          <?php
            // TODO
            $recommendations = [
              wc_get_product(1), wc_get_product(2), wc_get_product(3)
            ];
          ?>
          <div class=" col-12 col-md-4 col-lg-3">
            <div class="product flex flex-grow-1 flex-direction-col">
              <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="CRB6016700" data-tracking-id="CRB6016700" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}' data-motion='{"properties": "opacity from-v-direction"}'>

                <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/trinity-bracelet-CRB6016700.html" data-product-url="productShow" itemprop="url">

                  <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                    <div class="product-tile__media-container component-overlay component-overlay--center">
                      <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/wp-content/themes/siellest/assets/dw88406a3f/images/large/637708788550193812-2059312.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Trinity bracelet" title="Trinity bracelet" />
                      <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/wp-content/themes/siellest/assets/dwcb11c1ce/images/large/637708788550193812-2059408.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Trinity bracelet" title="Trinity bracelet" />
                    </div>
                  </div>
                  <div class="product-tile__body">
                    <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                      Trinity bracelet
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
                          <span class="value" itemprop="price" content="610.00">
                            $610.00
                          </span>
                      </div>
                    </div>
                  </div>
                </a>
                <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Trinity bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Trinity bracelet" data-wishlist-label-remove="Remove from Wish List, Trinity bracelet">
                  <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                    <use xlink:href="#icon--heart" />
                  </svg>
                  <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                    <use xlink:href="#icon--heart-filled" />
                  </svg>
                </button>
                <div class="product-tile__overlay flex flex-align-end bg--white">
                  <div class="product-tile__overlay-actions set--w-100">
                    <div class="product-tile__quickadd" data-quickadd>
                      <button type="button" class="product-tile__quickadd-trigger button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickAdd?pid=CRB6016700" data-product-url="productShowQuickAdd" title="Quick Add for Trinity bracelet" data-quickadd-trigger>
                        <span class="display--small-up">
                          Add to Shopping Bag
                        </span>
                        <span class="display--small-only">
                          Add to Bag
                        </span>
                      </button>
                      <div class="product-tile__quickadd-panel body-type--deci" data-quickadd-component="panel" tabindex="-1" role="dialog" aria-modal="true"></div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class=" col-12 col-md-4 col-lg-3">
            <script type="text/javascript">
              //<!--
              /* <![CDATA[ (viewProduct-active_data.js) */
              // dw.ac._capture({
              //   id: "CR65050002",
              //   type: "recommendation"
              // });
              /* ]]> */
              // -->
            </script>
            <div class="product flex flex-grow-1 flex-direction-col">
              <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="CR65050002" data-tracking-id="CR65050002" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}' data-motion='{"properties": "opacity from-v-direction"}'>

                <a class="product-tile__anchor" href="/en-us/pasha-de-cartier-edition-noire-eau-de-toilette-CR65050002.html" data-product-url="productShow" itemprop="url">

                  <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                    <div class="product-tile__media-container component-overlay component-overlay--center">
                      <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up  full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/wp-content/themes/siellest/assets/dwac29de6b/images/large/637745190967037320-2262504.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Pasha de Cartier Edition Noire Eau de Toilette" title="Pasha de Cartier Edition Noire Eau de Toilette" />
                    </div>
                  </div>
                  <div class="product-tile__body">
                    <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                      Pasha de Cartier Edition Noire Eau de Toilette
                    </p>
                    <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                    </div>
                    <p class="product-tile__body-section product-tile__material font-family--serif">
                      Spray
                    </p>
                    <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                      <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <meta itemprop="priceCurrency" content="USD" />
                        <span class="price__sales sales">
                          <span class="value" itemprop="price" content="71.00">
                            $71.00
                          </span>
                      </div>
                    </div>
                  </div>
                </a>
                <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Pasha de Cartier Edition Noire Eau de Toilette" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Pasha de Cartier Edition Noire Eau de Toilette" data-wishlist-label-remove="Remove from Wish List, Pasha de Cartier Edition Noire Eau de Toilette">
                  <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                    <use xlink:href="#icon--heart" />
                  </svg>
                  <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                    <use xlink:href="#icon--heart-filled" />
                  </svg>
                </button>
                <div class="product-tile__overlay flex flex-align-end bg--white">
                  <div class="product-tile__overlay-actions set--w-100">
                    <div class="product-tile__quickadd" data-quickadd>
                      <button type="button" class="product-tile__quickadd-trigger button button--primary button--small set--w-100" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Product-ShowQuickAdd?pid=CR65050002" data-product-url="productShowQuickAdd" title="Quick Add for Pasha de Cartier Edition Noire Eau de Toilette" data-quickadd-trigger>
                        <span class="display--small-up">
                          Add to Shopping Bag
                        </span>
                        <span class="display--small-only">
                          Add to Bag
                        </span>
                      </button>
                      <div class="product-tile__quickadd-panel body-type--deci" data-quickadd-component="panel" tabindex="-1" role="dialog" aria-modal="true"></div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class=" col-12 col-md-4 col-lg-3">
            <script type="text/javascript">
              //<!--
              /* <![CDATA[ (viewProduct-active_data.js) */
              // dw.ac._capture({
              //   id: "CRB8043200",
              //   type: "recommendation"
              // });
              /* ]]> */
              // -->
            </script>
            <div class="product flex flex-grow-1 flex-direction-col">
              <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="CRB8043200" data-tracking-id="CRB8043200" data-tracking-position data-tracking='{"trackEvent": "eeListClick", "asyncParams": {"pid": "data-tracking-id", "pos": "data-tracking-position", "listValue": "--context"}}' data-motion='{"properties": "opacity from-v-direction"}'>

                <a class="product-tile__anchor" href="/en-us/jewelry/earrings/trinity-earrings-CRB8043200.html" data-product-url="productShow" itemprop="url">

                  <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                    <div class="product-tile__media-container component-overlay component-overlay--center">
                      <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.siellest.com/wp-content/themes/siellest/assets/dw2a7fc059/images/large/637708833564097399-2088278.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="Trinity earrings" title="Trinity earrings" />
                      <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image" data-product-component="image" data-src="https://www.siellest.com/wp-content/themes/siellest/assets/dw5984c7be/images/large/637708833564097399-2088194.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="Trinity earrings" title="Trinity earrings" />
                    </div>
                  </div>
                  <div class="product-tile__body">
                    <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                      Trinity earrings
                    </p>
                    <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                    </div>
                    <p class="product-tile__body-section product-tile__material font-family--serif">
                      White gold, yellow gold, rose gold, diamond
                    </p>
                  </div>
                </a>
                <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, Trinity earrings" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, Trinity earrings" data-wishlist-label-remove="Remove from Wish List, Trinity earrings">
                  <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                    <use xlink:href="#icon--heart" />
                  </svg>
                  <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                    <use xlink:href="#icon--heart-filled" />
                  </svg>
                </button>
                <div class="product-tile__overlay flex flex-align-end bg--white">
                  <div class="product-tile__overlay-actions set--w-100">
                    <a class="product-tile__anchor button button--primary button--small set--w-100" href="/en-us/jewelry/earrings/trinity-earrings-CRB8043200.html" data-product-url="productShow" itemprop="url">
                      Discover
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div class="brand__panther-image image-width__large"><img class="panther-image" alt="cartier" src="wp-content/themes/siellest/assets/images/panthereCartierImageTransparent.webp" /></div>
</div>