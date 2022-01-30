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

  /* Helpers */
  private static function get_cart_items()
  {
    $cart_items = [];
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
            "currency" => "USD",
            "formatted" => "$610.00",
            "decimalPrice" => "610.00"
          ],
          "list" => null,
          "html" => "<div class=\"price flex--inline flex-flow-wrap flex-align-baseline\" data-product-component=\"price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
            <meta itemprop=\"priceCurrency\" content=\"USD\" />
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
            [
              "alt" => "Trinity bracelet",
              "url" => "https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw88406a3f/images/large/637708788550193812-2059312.png?sw=250&sh=250&sm=fit&sfrm=png",
              "index" => "0",
              "title" => "Trinity bracelet",
              "absURL" => "https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw88406a3f/images/large/637708788550193812-2059312.png?sw=250&sh=250&sm=fit&sfrm=png",
              "hasImage" => true,
              "hasBackground" => true,
              "isWornImage" => false,
              "hide" => false,
              "imagePath" => "/images/large/637708788550193812-2059312.png"
            ]
          ]
        ],
        "variationAttributes" => null,
        "availability" => [
          "messages" => [
            "Unavailable online"
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
        "shipmentUUID" => "0a27defe6f117c81eda1dd3d0c",
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

  private static function get_cart_data()
  {
    $cart_items = Cart::get_cart_items();
    $cart_items_count = sizeof($cart_items);
    $currency_symbol = get_woocommerce_currency_symbol();
    $subtotal = WC()->cart->get_subtotal();
  
    return [
      "hasBonusProduct" => false,
      "actionUrls" => Cart::$action_urls,
      "numOfShipments" => 1,
      "totals" => [
        "subTotal" =>  "$currency_symbol$subtotal",
        "totalShippingCost" => "$0.00",
        "grandTotal" => WC()->cart->get_total(),
        "totalTax" => "$0.00",
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
      ],
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
