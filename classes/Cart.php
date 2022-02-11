<?php

class Cart
{
  private static $action_urls = [
    "removeProductLineItemUrl" => "wp-json/siellest/Cart-RemoveProductLineItem",
    "updateQuantityUrl" => "wp-json/siellest/Cart-UpdateQuantity",
    "selectShippingUrl" => "wp-json/siellest/Cart-SelectShippingMethod",
    "submitCouponCodeUrl" => "wp-json/siellest/Cart-AddCoupon",
    "removeCouponLineItem" => "wp-json/siellest/Cart-RemoveCouponLineItem"
  ];

  /* API Callbacks */
  public static function cart_getproduct(WP_REST_Request $request)
  {
    $pid = $request->get_param('pid');
    $product = wc_get_product($pid);

    return [
      "action" => "Cart-GetProduct",
      "queryString" => "quantity=1&uuid=fd7a6d47dc3af4e83ea9c1cd98",
      "locale" => "en_US",
      "product" => Product::get_product_data($product),
        // "variationAttributes" => [
        //   {
        //     "attributeId" => "size",
        //     "displayName" => "Size",
        //     "id" => "size",
        //     "swatchable" => false,
        //     "values" => [
        //       {
        //         "id" => "1.0 fl.oz./30 ml",
        //         "description" => null,
        //         "displayValue" => "1.0 fl.oz./30 ml",
        //         "value" => "1.0 fl.oz./30 ml",
        //         "selected" => true,
        //         "selectable" => true,
        //         "labelDefault" => "Size => 1.0 fl.oz./30 ml",
        //         "labelSelected" => "Size => 1.0 fl.oz./30 ml, selected",
        //         "labelUnselectable" => "Size => 1.0 fl.oz./30 ml, unselectable",
        //         "visibleWeb" => true,
        //         "visiblePhone" => true,
        //         "url" => "https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Product-Variation?dwvar_FP327040_size=&pid=FP327040&quantity=1"
        //       },
        //       {
        //         "id" => "1.6 fl.oz./50 ml",
        //         "description" => null,
        //         "displayValue" => "1.6 fl.oz./50 ml",
        //         "value" => "1.6 fl.oz./50 ml",
        //         "selected" => false,
        //         "selectable" => true,
        //         "labelDefault" => "Size => 1.6 fl.oz./50 ml",
        //         "labelSelected" => "Size => 1.6 fl.oz./50 ml, selected",
        //         "labelUnselectable" => "Size => 1.6 fl.oz./50 ml, unselectable",
        //         "visibleWeb" => true,
        //         "visiblePhone" => true,
        //         "url" => "https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Product-Variation?dwvar_FP327040_size=1.6%20fl.oz.%2F50%20ml&pid=FP327040&quantity=1"
        //       }
        //     ],
        //     "resetUrl" => "https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Product-Variation?dwvar_FP327040_size=&pid=FP327040&quantity=1",
        //     "selectedValue" => "1.0 fl.oz./30 ml"
        //   }
        // ],
      "selectedQuantity" => "1",
      "selectedOptionValueId" => null,
      "uuid" => "fd7a6d47dc3af4e83ea9c1cd98",
      "updateCartUrl" => [],
      "closeButtonText" => "Close Cart Product Edit Dialog",
      "enterDialogMessage" => "Start of edit product dialog window. Select Close to cancel and close the window.",
      "template" => "product/quickView.isml",
      "renderedTemplate" => "\n\n\n\n\n\n<link rel=\"stylesheet\" href=\"/on/demandware.static/Sites-CartierUS-Site/-/en_US/v1643715049516/css/productMain.css\" />\n\n<div class=\"quickview quickview-variant\" data-product-container=\"quickview\" data-pid=\"CRFP327030\">\n    <div class=\"row flex-no-gutters\">\n        <!-- Product Images Carousel -->\n        <div class=\"col-12 col-md-7 flex-justify-center\">\n            \n<ul id=\"pdpCarousel-CRFP327030\" class=\"product-gallery product-gallery--quickview slider--pre-layout-1 slider--arrows-inner slider--arrows-center slider--dots-inner list--reset\" data-slick='{\"type\": \"qvCarousel\"}' data-product-component=\"image-gallery\" aria-label=\"Product Main Images\">\n    \n        <li class=\"product-gallery__item aspect-ratio--square bg--grey-1 col-12 \">\n            <img src=\"https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw8dbe241f/images/large/637777756127329712-2261217.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png\" class=\"product-gallery__img component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image\" data-image-index=\"0\" alt=\"Baiser Vol&eacute; Eau de Parfum, image 1\" itemprop=\"image\" />\n        </li>\n    \n        <li class=\"product-gallery__item aspect-ratio--square bg--grey-1 col-12 col-md-6\">\n            <img src=\"https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw59938d4f/images/large/637777756127329712-2261230.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png\" class=\"product-gallery__img component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image\" data-image-index=\"1\" alt=\"Baiser Vol&eacute; Eau de Parfum, image 2\" itemprop=\"image\" />\n        </li>\n    \n        <li class=\"product-gallery__item aspect-ratio--square bg--grey-1 col-12 col-md-6\">\n            <img src=\"https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw05389533/images/large/637777756127329712-2261351.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png\" class=\"product-gallery__img component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image\" data-image-index=\"2\" alt=\"Baiser Vol&eacute; Eau de Parfum, image 3\" itemprop=\"image\" />\n        </li>\n    \n        <li class=\"product-gallery__item aspect-ratio--square bg--grey-1 col-12 col-md-6\">\n            <img src=\"https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwbc7ac6a6/images/large/637777756127329712-2261369.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png\" class=\"product-gallery__img component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image\" data-image-index=\"3\" alt=\"Baiser Vol&eacute; Eau de Parfum, image 4\" itemprop=\"image\" />\n        </li>\n    \n        <li class=\"product-gallery__item aspect-ratio--square bg--grey-1 col-12 col-md-6\">\n            <img src=\"https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwcd2ba808/images/large/637777756127329712-2261403.png?sw=750&amp;sh=750&amp;sm=fit&amp;sfrm=png\" class=\"product-gallery__img component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image\" data-image-index=\"4\" alt=\"Baiser Vol&eacute; Eau de Parfum, image 5\" itemprop=\"image\" />\n        </li>\n    \n</ul>\n\n\n<div class=\"hidden\">\n    <li class=\"product-gallery__item aspect-ratio--square bg--grey-1 col-12 col-md-6\" data-product-component=\"gallery-item\" data-image-template=\"image-gallery\">\n        <img class=\"product-gallery__img component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image\" data-image-index=\"\" alt=\"\" itemprop=\"image\" />\n    </li>\n</div>\n\n        </div>\n\n        <!-- Product Name and Number -->\n        <div class=\"col-12 col-md-5\">\n            <section class=\"quickview__main flex flex-direction-col flex-grow-1 gutter--normal\">\n                <div class=\"pdp-main__section pdp-main__section--name set--w-100\">\n                    <h1 id=\"qvProductName-CRFP327030\" class=\"quickview__name heading-type fluid-type--deka-hecto text-line--normal\" data-product-component=\"name\" data-modal-component=\"labelledby\">\n                        Baiser Volé Eau de Parfum\n                    </h1>\n\n                    <!-- Prices -->\n                    <div class=\"quickview__price pdp-main__price flex flex-flow-wrap\">\n                        <div class=\"quickview__price-value font-weight--semibold\">\n                            \n                            \n\n                            \n                                \n    <div class=\"price flex--inline flex-flow-wrap flex-align-baseline\" data-product-component=\"price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">\n        \n        \n\n\n\n\n\n<meta itemprop=\"priceCurrency\" content=\"USD\" />\n\n    <span class=\"price__sales sales\">\n    \n    \n    \n        <span class=\"value\" itemprop=\"price\" content=\"75.00\">\n    \n    \n\n\t$75.00\n\n\n    </span>\n\n\n    </div>\n\n\n                            \n                        </div>\n\n                        \n                            <span class=\"quickview__price-tax font-family--serif body-type--deci\">\n                                \n\n    excl. sales tax\n\n\n                            </span>\n                        \n                    </div>\n\n                    \n                        <div class=\"quickview__details-description-wrapper\">\n                            \n\n    <div class=\"pdp-main__description cms-generic-copy text-line--medium\" data-product-component=\"short-description\">\n        \n            <span class=\"pdp-main__description-truncated\">\n                The fragrance of a majestic yet elusive flower: the lily is recreated for the first time...\n            </span>\n\n            <span class=\"pdp-main__description-full\">\n                The fragrance of a majestic yet elusive flower: the lily is recreated for the first time, from the freshness of the leaf, the floral scent of the petal and the powdery fragrance of the stamen.\n\n\"For this perfume I wanted to recreate the scent of bundles of flowers on the neck\". \nMathilde Laurent, Cartier perfumer.\n            </span>\n\n            <button type=\"button\" class=\"pdp-main__description-more link link--underline\" data-toggle='{\"target\": \"[data-product-component=short-description]\", \"persist\": true}' data-tracking='{\"trackEvent\": \"productReadMore\", \"asyncParams\": {\"pid\": \"CRFP327030\"}}'>\n                <span class=\"pdp-main__description-truncated\">Read More</span>\n                <span class=\"pdp-main__description-full\">Read Less</span>\n            </button>\n        \n    </div>\n\n\n\n                        </div>\n                    \n\n                    <!-- Attributes -->\n                    <div class=\"quickview__attribute-list product-attribute__list flex flex-flow-wrap\">\n                        \n\n\n                        \n                            \n\n\n\n\n<div class=\"product-attribute product-attribute--size product-attribute--last\"\n    data-attr-group=\"size\" data-attr-group-type=\"dropdown\">\n    <!-- Size Chart -->\n    \n\n    <!-- Select <Attribute> Label -->\n    <div class=\"product-attribute__head flex flex-justify-between sr-only\">\n        <label class=\"product-attribute__label product-attribute__label--size form-control-label\"\n            for=\"productAttribute-CRFP327030-size\">\n            <span class=\"product-attribute__label-pre\">Select Size</span>\n        </label>\n    </div>\n\n    <div class=\"product-attribute__contents \">\n        \n                <!-- Attribute Values Drop Down Menu -->\n                <select id=\"productAttribute-CRFP327030-size\"\n                    class=\"product-attribute__size button form-control form-control--select form-control--boxed text-align-last--center\"\n                     data-attr=\"size\"\n                    data-attr-type=\"dropdown\">\n                    <option value=\"https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Product-Variation?dwvar_FP327040_size=&amp;pid=FP327040&amp;quantity=1\">\n                        Select Size\n                    </option>\n                    \n                        \n                        \n                        <option value=\"https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Product-Variation?dwvar_FP327040_size=&amp;pid=FP327040&amp;quantity=1\" data-attr-value=\"1.0 fl.oz./30 ml\" selected>\n                            1.0 fl.oz./30 ml \n                        </option>\n                    \n                        \n                        \n                        <option value=\"https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Product-Variation?dwvar_FP327040_size=1.6%20fl.oz.%2F50%20ml&amp;pid=FP327040&amp;quantity=1\" data-attr-value=\"1.6 fl.oz./50 ml\" >\n                            1.6 fl.oz./50 ml \n                        </option>\n                    \n                </select>\n\n        \n    </div>\n\n    \n</div>\n\n                        \n\n                        <!-- Quantity Drop Down Menu -->\n                        \n\n\n\n    <input type=\"hidden\" value=\"1\" data-product-component=\"qty\" />\n\n\n\n                        \n                            <!-- Options -->\n                            \n                        \n                    </div>\n\n                    <div class=\"quickview__footer\" data-product-component=\"actions\">\n                        <div class=\"quickview__footer-section quickview__footer-section-actions flex\">\n                            <!-- Cart and [Optionally] Apple Pay -->\n                            \n                                \n    <div class=\"product-add__container cart-and-ipay flex-grow-1\">\n    <button class=\"product-add__button add-to-cart button button--primary set--w-100\"\n            data-pid=\"CRFP327030\"\n            data-uuid=\"fd7a6d47dc3af4e83ea9c1cd98\"\n            data-url=\"/on/demandware.store/Sites-CartierUS-Site/en_US/Cart-EditProductLineItem\"\n            data-product-component=\"add-button\"\n            data-tracking='{\"trackEvent\": \"cartSizeUpdate\", \"asyncParams\": {\"pid\": \"CRFP327030\"}}'\n            >\n        Update\n    </button>\n</div>\n\n\n\n                            \n\n                            \n                            \n                                <div class=\"product-common__wishlist\">\n                                    <button type=\"button\"\n        class=\"product-common__wishlist-trigger button--flex button--fluid flex-align-center flex-justify-center\"\n        title=\"Add to Wish List, Baiser Vol&eacute; Eau de Parfum\"\n        data-wishlist-trigger=\"heart\"\n        data-wishlist-label-add=\"Add to Wish List, Baiser Vol&eacute; Eau de Parfum\"\n        data-wishlist-label-remove=\"Remove from Wish List, Baiser Vol&eacute; Eau de Parfum\"\n>\n    <span class=\"sr-only\">Add to Wish List</span>\n\n    <svg aria-hidden=\"true\" focusable=\"false\" class=\"product-common__wishlist-add icon body-type--deka\"><use xlink:href=\"#icon--heart\"/></svg>\n    <svg aria-hidden=\"true\" focusable=\"false\" class=\"product-common__wishlist-remove icon body-type--deka\"><use xlink:href=\"#icon--heart-filled\"/></svg>\n</button>\n                                </div>\n                            \n                        </div>\n\n                        <div class=\"quickview__footer-section quickview__footer-section-actions body-type--deci\">\n                            \n                                <!-- Order By Phone -->\n                                \n\n                                \n                                    <div class=\"quickview__footer-section--secondary-action\">\n                                        <a href=\"tel:1-800-227-8437\" class=\"link--secondary-icon link--flex flex-align-center body-type--centi\"\n                                        data-component-onclicktracking\n                                        data-component-onclicktrackingparams='{\"trackEvent\":\"callCenter\",\"trackObject\":{}}'>\n                                            <svg aria-hidden=\"true\" focusable=\"false\" class=\"link__icon icon body-type--deka\"><use xlink:href=\"#icon--phone\" /></svg>\n                                            Order by Phone 1-800-227-8437\n                                        </a>\n                                    </div>\n                                \n\n                                <!-- Product Availability -->\n                                <div class=\"pdp-main__secondary-action\">\n                                    \n                                                                                                                                                                                  \n                                    \n                                </div>\n                            \n\n                            <div class=\"quickview__footer-section pdp-main__section pdp-main__section--footer text-transform--uppercase body-type--deci flex flex-align-center flex-flow-wrap set--w-100\">\n                                <!-- Social Sharing Icons -->\n                                \n                                    <div class=\"quickview__footer-section-item pdp-main__footer-item quickview__social flex\">\n                                        \n\n\n<button type=\"button\" class=\"product-common__share-trigger link link--flex flex-align-center body-type--centi text-transform--uppercase\"\n        data-share-component=\"trigger\"\n        data-tracking='{\"trackEvent\": \"productShare\", \"asyncParams\": {\"pid\": \"CRFP327030\"}}'\n        data-modal-trigger='{\"selector\": \"[data-share-component=modal]\", \"options\": {\"modalID\": \"productShare\", \"modalClass\": \"modal--prompt\"}}'>\n    <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon icon icon--set-left-short body-type--hecto\"><use xlink:href=\"#icon--share\"/></svg>\n    Share\n</button>\n\n<div class=\"modal-container--static\" data-share-component=\"modal\">\n    <div class=\"modal__header\">\n        <h2 class=\"modal__title fluid-type--deka-hecto heading-type\">Share</h2>\n    </div>\n\n    <div class=\"modal__body gutter--normal\">\n        <ul class=\"product-common__social flex flex-justify-center flex-align-center list--reset\">\n            \n                <!-- Go to www.addthis.com/dashboard to customize your tools -->\n<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fabaf6a531b5e43\"></script>\n\n\n    <li class=\"product-common__social-item\">\n        <a class=\"link--highlight-hover link--flex product-common__social-anchor--facebook addthis_button_facebook\" data-tracking='{\"trackEvent\": \"productShareDetails\", \"asyncParams\": {\"pid\": \"CRFP327030\"}, \"trackObject\": {\"linkTitle\": \"facebook\"}}'>\n            <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon body-type--hecto\"><use xlink:href=\"#icon--facebook\"/></svg>\n        </a>\n    </li>\n\n    <li class=\"product-common__social-item\">\n        <a class=\"link--highlight-hover link--flex product-common__social-anchor--pinterest_share addthis_button_pinterest_share\" data-tracking='{\"trackEvent\": \"productShareDetails\", \"asyncParams\": {\"pid\": \"CRFP327030\"}, \"trackObject\": {\"linkTitle\": \"pinterest_share\"}}'>\n            <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon body-type--hecto\"><use xlink:href=\"#icon--pinterest_share\"/></svg>\n        </a>\n    </li>\n\n    <li class=\"product-common__social-item\">\n        <a class=\"link--highlight-hover link--flex product-common__social-anchor--twitter addthis_button_twitter\" data-tracking='{\"trackEvent\": \"productShareDetails\", \"asyncParams\": {\"pid\": \"CRFP327030\"}, \"trackObject\": {\"linkTitle\": \"twitter\"}}'>\n            <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon body-type--hecto\"><use xlink:href=\"#icon--twitter\"/></svg>\n        </a>\n    </li>\n\n    <li class=\"product-common__social-item\">\n        <a class=\"link--highlight-hover link--flex product-common__social-anchor--email addthis_button_email\" data-tracking='{\"trackEvent\": \"productShareDetails\", \"asyncParams\": {\"pid\": \"CRFP327030\"}, \"trackObject\": {\"linkTitle\": \"email\"}}'>\n            <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon heading-type--h6\"><use xlink:href=\"#icon--email\"/></svg>\n        </a>\n    </li>\n\n    <li class=\"product-common__social-item\">\n        <a class=\"link--highlight-hover link--flex product-common__social-anchor--whatsapp addthis_button_whatsapp\" data-tracking='{\"trackEvent\": \"productShareDetails\", \"asyncParams\": {\"pid\": \"CRFP327030\"}, \"trackObject\": {\"linkTitle\": \"whatsapp\"}}'>\n            <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon body-type--hecto\"><use xlink:href=\"#icon--whatsapp\"/></svg>\n        </a>\n    </li>\n\n\n\n                \n            \n        </ul>\n    </div>\n</div>\n\n                                    </div>\n                                \n                                <div class=\"quickview__footer-section-item pdp-main__footer-item body-type--centi quickview__ref\">\n                                    Ref. <span data-product-component=\"pid\">FP327040</span>\n                                </div>\n                            </div>\n                            \n                            <div class=\"quickview__footer body-type flex\">\n                                <div class=\"pdp-main__section set--w-100\">\n                                    <a class=\"link--primary\" href=\"/en-us/art-of-living/fragrances/baiser-vole-eau-de-parfum-FP327040.html?dwvar_FP327040_size=1.0%20fl.oz.%2F30%20ml&amp;quantity=1\" data-product-url=\"productShow\" itemprop=\"url\">Go to full details</a>\n                                </div>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </section>\n        </div>\n    </div>\n\n    \n\n    \n</div>\n"
    ];
  }

  public static function cart_addproduct(WP_REST_Request $request)
  {
    $pid = $request->get_param('pid');
    $product = wc_get_product($pid);
    WC()->cart->add_to_cart($product->id);

    return [
      "action" => "Cart-AddProduct",
      "queryString" => "",
      "locale" => "en_US",
      "reportingURL" => "wp-json/siellest/ReportingEvent-MiniCart",
      "quantityTotal" => WC()->cart->get_cart_contents_count(),
      "message" => "Product added to cart",
      "cart" => Cart::get_cart_data(),
      "numItems" => 2,
      "valid" => [
        "error" => false,
        "message" => null
      ],
      "resources" => [
        "numberOfItems" => "2 Items",
        "minicartCountOfItems" => "Cart 2 Items",
        "emptyCartMsg" => "Your shopping bag is empty"
      ],
      "disableShippingMethod" => "",
      "newBonusDiscountLineItem" => [],
      "error" => false,
      "pliUUID" => "58e372bfd810c849d939f1e7fa",
      "minicartCountOfItems" => "Cart 2 Items",
      "itemListHTML" => Cart::render_cart()
    ];
  }

  public static function cart_removeproductlineitem(WP_REST_Request $request)
  {
    $pid = $request->get_param('pid');
    $product = wc_get_product($pid);
    $cart_id = WC()->cart->generate_cart_id($product->id);
    $cart_item_key = WC()->cart->find_product_in_cart($cart_id);
    WC()->cart->remove_cart_item($cart_item_key);

    return [
      "action" => "Cart-RemoveProductLineItem",
      "queryString" => "context=cart&pid=$pid&uuid=afb67579c4df2d1a383c29583e",
      "locale" => "en_US",
      "basket" => Cart::get_cart_data(),
      "toBeDeletedUUIDs" => [],
      "itemListHTML" => Cart::render_cart()
    ];
  }

  public static function cart_minicartshow()
  {
    header('Content-Type: text/html');

    include get_template_directory() . "/template-parts/minicart.php";
    exit();
  }

  static function cart_togglegiftwrap(WP_REST_Request $request)
  {
    $pid = $request->get_param('pid');

    return [
      "action" => "Cart-ToggleGiftwrap",
      "queryString" => "pid=CRB6035517&uuid=b92e974acb33d534b11ab7a12e",
      "locale" => "en_US",
      "success" => true
    ];
  }

  /* Helpers */
  static function get_cart_items()
  {
    $cart_items = [];
    $currency = get_woocommerce_currency();
    foreach(WC()->cart->get_cart_contents() as $key => $cart_item) {
      $product = wc_get_product($cart_item['data']->get_id());

      array_push($cart_items, [
        "uuid" => "ea75d4a05c64b80983c90dcce6",
        "id" => $product->id,
        "productName" => $product->name,
        "productType" => "standard",
        "brand" => "siellest",
        "productDisplayName" => $product->name,
        "price" => [
          "sales" => [
            "value" => $product->price,
            "currency" => $currency,
            "formatted" => get_woocommerce_currency_symbol() . number_format((float)$product->price, 2),
            "decimalPrice" => $product->price
          ],
          "list" => null,
          "html" => "<div class=\"price flex--inline flex-flow-wrap flex-align-baseline\" data-product-component=\"price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
            <meta itemprop=\"priceCurrency\" content=\"$currency\" />
            <span class=\"price__sales sales\">
              <span class=\"value\" itemprop=\"price\" content=\"$product->price\">
                $$product->price
              </span>
            </div>"
        ],
        "sellable" => true,
        "requestPrice" => false,
        "sellableLabel" => "sellable",
        "isPriceUnderThreshold" => true,
        "images" => [
          "small" => [
            Product::get_images($product, 'small')[0]
          ]
        ],
        "variationAttributes" => null,
        "availability" => [
          "messages" => [
            "Unavailable online" // "In Stock"
          ],
          "totalStock" => 251,
          "inStockDate" => null
        ],
        "available" => false,
        "quantity" => 1,
        "isGift" => false,
        "isGiftWrap" => null,
        "renderedPromotions" => "",
        "UUID" => "afb67579c4df2d1a383c29583e",
        "isOrderable" => true,
        "shipmentUUID" => WC()->session->get('shipping_uuid'),
        "isBonusProductLineItem" => false,
        "priceTotal" => [
          "price" => "$610.00",
          "renderedPrice" => "<div class=\"price__sales pricing line-item-total-price-amount\">$610.00</div>"
        ],
        "quantityOptions" => [
          "minOrderQuantity" => 1,
          "maxOrderQuantity" => 10
        ],
        "options" => [],
        "bonusProductLineItemUUID" => null,
        "preOrderUUID" => null,
        "discountLineItems" => [],
        "giftMessage" => null,
        "isEngraved" => "NA",
        "isEmbossed" => "NA",
        "isAdjusted" => "NA",
        "isBraceletAdjusted" => "NA",
        "isPersonalised" => "NA",
        "saleBadgeText" => "",
        "isFlashSale" => false,
        "hasBadges" => false,
        "productVariant" => "NA",
        "productSize" => "NA",
        "productDisplay" => "Categories or collections listing pages",
        "productcollection" => "Trinity",
        "reference" => "B6016700",
        "availableForStoreReservation" => true,
        "isCaseProduct" => false,
        "isFragranceRefillProduct" => false,
        "material1" => "[Ldw.value.EnumValue;@3578f006",
        "productMaterialJewelry" => "",
        "productLine2" => "Jewelry",
        "caseMaterial" => "NA",
        "leatherMaterial" => "OGOROJ",
        "typeOfStrap" => "NA",
        "novelties" => "NA",
        "productLine" => "Jewelry",
        "imagesDisplayConfig" => Product::get_images_display_config($product),
        "longDescription" => "Trinity bracelet, small model, white gold 750/1000, rose gold 750/1000, yellow gold 750/1000. Supplied on a cord. Width: 2 mm. Inner diameter => 10.7 mm",
        "shortDescription" => "White gold, yellow gold, rose gold",
        "truncatedDescription" => "Trinity bracelet, small model, white gold 750/1000, rose gold 750/1000, yellow gold 750/",
        "longDescriptionDisplay" => "Trinity bracelet, small model, white gold 750/1000, rose gold 750/1000, yellow gold 750/1000. Supplied on a cord. Width: 2 mm. Inner diameter: 10.7 mm",
        "is3DProduct" => false,
        "includedStraps" => [],
        "hasStrapOptions" => false,
        "iframe3DURL" => "3dconfigurator.s3-accelerate.amazonaws.com/CartierConfigurator/index.html?pId=B6016700",
        "defaultStrapOption" => "",
        "pimCategory" => [],
        "pimTopLevelCategory" => [],
        "category" => [],
        "toplevelcategory" => [],
        "aboutCollection" => null,
        "aboutCollectionExtended" => null,
        "gtmPushCategory" => "Bracelet",
        "fromStoreId" => null,
        "availableForInStorePickup" => true,
        "storePickupReady" => true,
        "storePickupEnabled" => true,
        "store" => null,
        "bonusProducts" => null
      ]);
    }

    return $cart_items;
  }

  static function get_totals()
  {
    $currency_symbol = get_woocommerce_currency_symbol();
    $subtotal = number_format((float)WC()->cart->get_subtotal(), 2);
    $totals = WC()->cart->get_totals();

    return [
      "subTotal" =>  "$currency_symbol$subtotal",
      "totalShippingCost" => $currency_symbol . $totals['shipping_total'],
      "grandTotal" => $currency_symbol . $totals['total'],
      "totalTax" => $currency_symbol . $totals['total_tax'],
      "orderLevelDiscountTotal" => [
        "value" => 0,
        "formatted" => "$0.00"
      ],
      "shippingLevelDiscountTotal" => [
        "value" => 0,
        "formatted" => "$0.00"
      ],
      "discounts" => [],
      "discountsHtml" => "\n"
    ];
  }

  static function get_cart_data()
  {
    $cart_items = Cart::get_cart_items();
    $cart_items_count = sizeof($cart_items);
  
    return [
      "hasBonusProduct" => false,
      "actionUrls" => Cart::$action_urls,
      "numOfShipments" => 1,
      "totals" => Cart::get_totals(),
      "shipments" => [
        [
          "shippingMethods" => Cart::get_shipping_methods(),
          "selectedShippingMethod" => "STDD"
        ]
      ],
      "approachingDiscounts" => [],
      "items" => $cart_items,
      "numItems" => $cart_items_count,
      "valid" => [
        "error" => false,
        "message" => null
      ],
      "resources" => [
        "numberOfItems" => "$cart_items_count Items",
        "minicartCountOfItems" => "Cart $cart_items_count Items",
        "emptyCartMsg" => "Your shopping bag is empty"
      ],
      "disableShippingMethod" => ""
    ];
  }

  private static function get_shipping_methods()
  {
    return [
      [
        "ID" => "SATD",
        "displayName" => "Saturday Delivery Option",
        "description" => null,
        "estimatedArrivalTime" => null,
        "default" => false,
        "shippingCost" => "$0.00",
        "selected" => false,
        "mercuryShippingMethod" => true,
        "storePickupEnabled" => false,
        "leadTime" => 0,
        "isExpress" => false,
        "isSaturday" => true
      ],
      [
        "ID" => "STDD",
        "displayName" => "Standard Delivery",
        "description" => "Order received within 2-4 business days",
        "estimatedArrivalTime" => null,
        "default" => true,
        "shippingCost" => "$0.00",
        "selected" => true,
        "mercuryShippingMethod" => true,
        "storePickupEnabled" => false,
        "leadTime" => 2,
        "isExpress" => false,
        "isSaturday" => false
      ]
    ];
  }

  private static function render_cart()
  {
    $cart_items = WC()->cart->get_cart_contents();

    $output = '';
    foreach($cart_items as $key => $cart_item) {
      $product = wc_get_product($cart_item['data']->get_id());
      $img_link = wp_get_attachment_url($product->image_id);

      $output .= "
      <div class=\"cart__line-item product-line-item product-line-item--cart gutter--normal \" data-product-container=\"card\" data-pid=\"$product->id\" data-cart-line-item=\"8e96d8c85644c1b5b5c42941e6\" >
        <div class=\"product-line-item__main\">
          <div class=\"product-line-item__details row\">
            <div class=\"col-5 col-md-4\">
              <a href=\"$product->permalink\" class=\"product-line-item__image-wrap link\" title=\"$product->name\" tabindex=\"-1\">
                <img class=\"product-line-item__image component-overlay component-overlay--center object-fit--contain set--w-100\" src=\"$img_link\" alt=\"$product->name\" title=\"$product->name\" data-line-item-component=\"image\" />
              </a>
            </div>
            <div class=\"col-7 col-md-8\">
              <div class=\"product-line-item__header font-weight--semibold flex flex-justify-between\">
                <div class=\"product-line-item__header-main\">
                  <!--Product Badges -->
                  <a href=\"$product->permalink\" class=\"product-line-item__name link word-break--break-word hyphens--auto\" title=\"$product->name\">
                    $product->name
                  </a>                
                </div>
                <div class=\"product-line-item__header-price display--medium-up white-space--nowrap\">
                  <div class=\"product-line-item__total-price item-total-8e96d8c85644c1b5b5c42941e6 price font-family--sans\" data-line-item-component=\"price-total\">
                    <div class=\"price__sales pricing line-item-total-price-amount\">$$product->price</div>
                  </div>
                </div>
                <div class=\"product-line-item__remove \">
                  <button type=\"button\" class=\"product-line-item__action-cta--remove button--circle-close bg--white\" data-line-item-component=\"remove-action\" data-toggle='{\"target\": \"[data-line-item-component=remove-confirm]\", \"skipSelector\": \"[data-minicart-component=trigger]\", \"allowEscClose\": true, \"targetFocus\": \"[data-line-item-component=remove-confirm-action]\", \"focusTrap\": true}' aria-label=\"Remove, $product->name\">
                    <span class=\"sr-only\">Remove</span>
                    <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon button__icon--circle-close\">
                      <use xlink:href=\"#icon--close\" />
                    </svg>
                  </button>    
                  <div class=\"inline-prompt flex flex-direction-col flex-align-center flex-justify-center text-align--center gutter--small\" data-line-item-component=\"remove-confirm\" role=\"dialog\" aria-labelledby=\"removeLineItem-8e96d8c85644c1b5b5c42941e6\">
                    <div class=\"inline-prompt__header\">
                      <h4 id=\"removeLineItem-8e96d8c85644c1b5b5c42941e6\" class=\"inline-prompt__title font-weight--semibold text-line--large\">Remove Product?</h4>
                    </div>
                    <p class=\"inline-prompt__body font-family--serif\">Are you sure you want to remove the following product from the cart?</p>
                    <div class=\"inline-prompt__footer row flex-justify-center set--w-100\">
                      <div class=\"col-4\">
                        <button type=\"button\" class=\"button button--small button--primary-outline body-type--deci\" data-toggle-close=\"[data-line-item-component=remove-action]\">Cancel</button>
                      </div>
                      <div class=\"col-4\">
                        <button type=\"button\" class=\"button button--small button--primary body-type--deci\" data-toggle-close=\"[data-line-item-component=remove-action]\" data-line-item-component=\"remove-confirm-action\">Yes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"product-line-item__attributes font-family--serif body-type--deci word-break--break-word hyphens--auto\">
                <p class=\"product-line-item__attribute\">$product->short_description</p>
                <div class=\"product-line-item__options\"></div>
                <div class=\"product-line-item__attribute font-weight--semibold display--medium-down body-type--deci\">
                  <div class=\"product-line-item__total-price item-total-8e96d8c85644c1b5b5c42941e6 price font-family--sans\" data-line-item-component=\"price-total\">
                    <div class=\"price__sales pricing line-item-total-price-amount\">$780.00</div>
                  </div>
                </div>
                <div class=\"product-line-item__attribute\">
                  <div class=\"product-line-item__promotions\" data-line-item-component=\"promotions\" data-uuid=\"8e96d8c85644c1b5b5c42941e6\">    </div>
                </div>
              </div>
              <div class=\"product-line-item__actions\">
                <div class=\"product-line-item__action product-line-item__add\">
                  <button type=\"button\"  class=\"link--primary\" data-product-component=\"add-button\" data-line-item-component=\"add-action\" aria-label=\"Add another &quot;Diamants L&eacute;gers bracelet XS&quot; to bag\">
                    Add Another Item
                  </button>
                </div>
                <div class=\"product-line-item__action product-line-item__wishlist\">
                  <button type=\"button\" class=\"product-line-item__wishlist-remove link--primary\" data-wishlist-trigger aria-label=\"Remove from wishlist, Diamants L&eacute;gers bracelet XS\">
                    Remove from Wish List
                  </button>
                  <button type=\"button\" class=\"product-line-item__wishlist-add link--primary\"
                    data-wishlist-trigger data-wishlist-label-add=\"Move to Wishlist\" data-pid=\"CRB6045717\"
                    data-uuid=\"8e96d8c85644c1b5b5c42941e6\" data-line-item-component=\"remove-confirm-action\" data-action=\"wp-json/siellest/Cart-RemoveProductLineItem\" aria-label=\"Move to wishlist, Diamants L&eacute;gers bracelet XS\">
                      Move to Wishlist
                    </button>
                  </div>
                </div>
                <input type=\"hidden\" value=\"1\" data-product-component=\"qty\" />                                    
                <div class=\"product-line-item__personalisations\">
                <div class=\"product-line-item__personalisation\" data-line-item-component=\"gift-personalisation\">
                  <div class=\"product-line-item__giftmessage\">
                    <a href=\"wp-json/siellest/Cart-AddPersonalisation?ProductPersonalisation=ProductGiftMessage&uuid=8e96d8c85644c1b5b5c42941e6&pid=$product->id\" class=\"link--secondary body-type--centi\"
                      data-modal-trigger='{\"url\": \"wp-json/siellest/Cart-AddPersonalisation?ProductPersonalisation=ProductGiftMessage&uuid=8e96d8c85644c1b5b5c42941e6&pid=$product->id\", \"type\":\"html\", \"options\": {\"modalID\": \"giftPersonalisation-8e96d8c85644c1b5b5c42941e6\", \"modalClass\": \"modal--base modal--gift-personalisation\", \"keepAlive\": false}, \"tracking\": {\"modalName\": \"gift-message-shopping-bag\"}}'
                      aria-label=\"Add gift message for $product->name\">
                      Add gift message
                    </a>
                  </div>
                </div>
                <div class=\"product-line-item__personalisation\" data-line-item-component=\"engrav-personalisation\"></div>
                <div class=\"product-line-item__personalisation\" data-line-item-component=\"emboss-personalisation\"></div>
                <div class=\"product-line-item__personalisation\" data-line-item-component=\"bracelet-adjustment-personalisation\"></div>
              </div>
              <div class=\"product-line-item__gift-wrapping form-section\">
                <hr class=\"text-color--grey-3 \">
                <div class=\"flex form-check-group__item set--w-100\">
                  <input type=\"checkbox\" id=\"giftWrap0\" class=\"form-check-input\" data-line-item-component=\"gift-wrapping\" data-url=\"wp-json/siellest/Cart-ToggleGiftwrap?pid=$product->id&uuid=8e96d8c85644c1b5b5c42941e6\" />
                  <label for=\"giftWrap0\" class=\"body-type--centi form-check-label text-line--medium cursor--pointer\">
                    Add Gift Wrapping
                  </label>
                  <button type=\"button\" class=\"component-outer-h-align--right\" data-toggle='{\"target\": \"[data-gift-wrap-0]\", \"persist\": true}'>
                    <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon cart__gift-wrap-arrow body-type--deci\">
                      <use xlink:href=\"#icon--angle-down\"/>
                    </svg>
                  </button>    
                </div>
                <p class=\"body-type--deci font-family--serif form-group--short-spacing toggle-display--hidden\" data-gift-wrap-0>
                  A complementary Cartier shopping bag is included with every item. Boutique pickup orders will not be gift-wrapped so you can verify your order; however, you may request it from the boutique team apon arrival.
                </p>
                <hr class=\"text-color--grey-3\">
              </div>
            </div>
          </div>
        </div>
      </div>";
    }

    return $output;
  }
}
