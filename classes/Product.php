<?php

class Product
{
  static function product_variation(WP_REST_Request $request)
  {
// dwvar_B6047517_size: 20
// pid: B6047517
// quantity: 1
    $pid = $request->get_param('pid');
    $product = wc_get_product($pid);

    return [
      "action" => "Product-Variation",
      "queryString" => "dwvar_B6047517_size=20&pid=B6047517&quantity=1",
      "locale" => "en_US",
      "product" => Product::get_product_data($product),
      "resources" => [
        "info_selectforstock" => "Select Styles for Availability",
        "assistiveSelectedText" => "selected"
      ]
    ];
  }

  static function product_showquickview(WP_REST_Request $request)
  {
    $product = wc_get_product($request->get_param('pid'));

    return [
      "action" => "Product-ShowQuickView",
      "queryString" => "pid=$product->id&quantity=1",
      "locale" => "en_US",
      "product" => Product::get_product_data($product),
      "addToCartUrl" => [],
      "resources" => [
        "info_selectforstock" => "Select Styles for Availability",
        "assistiveSelectedText" => "selected"
      ],
      "quickViewFullDetailMsg" => "View Full Details",
      "closeButtonText" => "Close Quickview Dialog",
      "enterDialogMessage" => "Start of Quickview dialog window. Select Close to cancel and close the window.",
      "template" => "product/quickView.isml",
      "renderedTemplate" => Product::render_quickview($product),
      "productUrl" => $product->get_permalink()
    ];
  }

  static function product_zoom(WP_REST_Request $request)
  {
    $pid         = $request->get_param('pid');
    $start_index = $request->get_param('startindex');
    $product     = wc_get_product($pid);

    $hi_res = [
      array(
        "alt" => $product->name,
        "url" => wp_get_attachment_url($product->image_id) . "?sw=2000&sh=2000&sm=fit&sfrm=png",
        "index" => "0",
        "title" => $product->name,
        "absURL" => wp_get_attachment_url($product->image_id) . "?sw=2000&sh=2000&sm=fit&sfrm=png",
        "hasImage" => true,
        "hasBackground" => false,
        "isWornImage" => false,
        "hide" => false,
        "imagePath" => basename(get_attached_file($product->image_id))
      )
    ];

    for ($i = 0; $i < sizeof($product->gallery_image_ids); $i++) {
      array_push($hi_res, array(
        "alt" => $product->name,
        "url" => wp_get_attachment_url($product->gallery_image_ids[$i]) . "?sw=2000&sh=2000&sm=fit&sfrm=png",
        "index" => $i + 1,
        "title" => $product->name,
        "absURL" => wp_get_attachment_url($product->gallery_image_ids[$i]) . "?sw=2000&sh=2000&sm=fit&sfrm=png",
        "hasImage" => true,
        "hasBackground" => false,
        "isWornImage" => false,
        "hide" => false,
        "imagePath" => basename(get_attached_file($product->gallery_image_ids[$i]))
      ));
    }

    $rendered_html = "";
    foreach ($hi_res as $img) {
      $rendered_html .= "<div class=\"product-zoom__item aspect-ratio--square\">
    <img src=\"{$img['url']}\" class=\"product-zoom__image component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image-zoom\" data-image-index=\"0\" alt=\"{$product->name}\" itemprop=\"image\" />
  </div>";
    }

    return array(
      "action" => "Product-Zoom",
      "queryString" => "dwvar_B6067217_size=20&pid=$pid&quantity=1&startindex=$start_index",
      "locale" => "en_US",
      "images" => array(
        "hi-res" => $hi_res
      ),
      "startindex" => $start_index,
      "renderedTemplate" => "
      <p class=\"product-zoom__label heading-type body-type font-weight--normal text-align--center set--w-100\">
        Zoom
      </p>
      <div id=\"pdpZoom-null\" class=\"product-zoom flex set--w-100 bg--grey-1\" data-slick='{\"type\": \"zoomCarousel\", \"initialSlide\": {$start_index}}' data-product-component=\"image-gallery\" role=\"listbox\">
        $rendered_html
      </div>"
    );
  }

  public static function render_product($product)
  {
    $id       = $product->id;
    $p_link   = $product->get_permalink();
    $name     = $product->get_name();
    $currency = get_woocommerce_currency();
    $currency_symbol = get_woocommerce_currency_symbol();
    $price           = $product->get_price();
    $formatted_price = number_format((float)$price, 2);
    $img1            = wp_get_attachment_url($product->get_image_id());
    $gallery_images  = $product->get_gallery_image_ids();
    if (sizeof($gallery_images) > 0) {
      $img2 = wp_get_attachment_url($gallery_images[0]);
    }

    $stretch_class = $product->get_meta('has_background') ? 'full-stretch-image' : '';

    return "<div class=\"product-grid__item col-6 col-md-3\" data-tracking-context=\"Productlisting\">
      <div class=\"product flex flex-grow-1 flex-direction-col\">
        <div class=\"product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center\" itemscope itemtype=\"http://schema.org/Product\" data-product-container=\"tile\" data-product-tile data-pid=\"$id\" data-tracking-id=\"$id\" data-tracking-position>
    
          <a class=\"product-tile__anchor\" href=\"$p_link\" data-product-url=\"productShow\" itemprop=\"url\">
    
            <div class=\"product-tile__media product-tile__media--default aspect-ratio--square \">
              <div class=\"product-tile__media-container component-overlay component-overlay--center\">
                <img class=\"product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image $stretch_class\" data-product-component=\"image\" data-src=\"$img1?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png\" data-image-index=\"0\" itemprop=\"image\" alt=\"$name\" title=\"$name\" />
    
                <img class=\"product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up $stretch_class\" data-product-component=\"image\" data-src=\"$img2?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png\" data-image-index=\"1\" itemprop=\"image\" alt=\"$name\" title=\"$name\" />
              </div>
            </div>
            <div class=\"product-tile__body\">
              <p class=\"product-tile__body-section product-tile__name text-line--large heading-type body-type--deci\" itemprop=\"name\">
                $name
              </p>
              <div class=\"product-tile__body-section product-tile__swatches font-family--serif\" data-product-component=\"swatches\">
              </div>
              <p class=\"product-tile__body-section product-tile__material font-family--serif\">
                $product->short_description
              </p>
              <div class=\"product-tile__body-section text-line--large font-weight--semibold body-type--deci\">
                <div class=\"price flex--inline flex-flow-wrap flex-align-baseline\" data-product-component=\"price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
                  <meta itemprop=\"priceCurrency\" content=\"$currency\" />
                  <span class=\"price__sales sales\">
                    <span class=\"value\" itemprop=\"price\" content=\"$price\">
                      $currency_symbol$formatted_price
                    </span>
                </div>
              </div>
              <div class=\"body-type--deci\">
              </div>
            </div>
          </a>
          <button type=\"button\" class=\"product-tile__wishlist body-type--deka\" title=\"Add to Wish List, $name\" data-wishlist-trigger=\"heart\" data-wishlist-label-add=\"Add to Wish List, $name\" data-wishlist-label-remove=\"Remove from Wish List, $name\">
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
                <button type=\"button\" class=\"button button--primary button--small set--w-100\" data-url=\"wp-json/siellest/Product-ShowQuickView?pid=$id\" data-product-url=\"productShowQuickView\" title=\"Quick View for $name\" data-quickview-trigger=\"\">
                  Quick View
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>";
  }

  public static function render_product_loop_end($category, $showing, $total)
  {
    $page = $showing / 24;
    // $nonce = wp_create_nonce('wp_rest');
    $prefn1 = $_GET['prefn1'];
    $prefv1 = $_GET['prefv1'];

    $site_url = get_site_url();
    if ($total <= $showing) $showing = $total;

    $params = http_build_query([
      'cgid' => $category,
      'prefn1' => $_GET['prefn1'],
      'prefv1' => $_GET['prefv1'],
      'srule' => $_GET['srule'],
      'start' => $showing,
      'sz' => PRODUCTS_PER_PAGE
    ]);

    echo "
      <div class=\"search-results__footer col-12 flex-align-center text-align--center\" data-search-component=\"product-grid-footer\">
        <div class=\"brand__panther-image image-width__large\">
          <img class=\"panther-image\" alt=\"cartier\" src=\"wp-content/themes/siellest/assets/images/panthereCartierImageTransparent.webp\" />
        </div>
        <p class=\"search-results__footer-count font-family--serif\">
          Showing $showing of $total items
        </p>";
    if ($total > $showing)
      echo "<button type=\"button\" class=\"search-results__footer-cta button button--primary-outline button--fluid set--w-100 \"
          data-search-component=\"more-products\"
          data-sort-options='{
            \"options\":[
              {\"displayName\":\"Price Low To High\",\"id\":\"price-low-to-high\",\"url\":\"$site_url/wp-json/siellest/Search-ShowAjax?cgid=$category&prefn1=sapIsVisibleWeb&prefv1=true&srule=price-low-to-high&start=0&sz=24\"},
              {\"displayName\":\"Price High to Low\",\"id\":\"price-high-to-low\",\"url\":\"$site_url/wp-json/siellest/Search-ShowAjax?cgid=$category&prefn1=sapIsVisibleWeb&prefv1=true&srule=price-high-to-low&start=0&sz=24\"},
              {\"displayName\":\"Recommended\",\"id\":\"intl-emerch\",\"url\":\"$site_url/wp-json/siellest/Search-ShowAjax?cgid=$category&prefn1=sapIsVisibleWeb&prefv1=true&srule=intl-emerch&start=0&sz=24\"}
            ],\"ruleId\":\"intl-emerch\",\"selectedSortOption\":{\"displayName\":\"Recommended\",\"id\":\"intl-emerch\",\"url\":\"$site_url/wp-json/siellest/Search-ShowAjax?cgid=$category&prefn1=sapIsVisibleWeb&prefv1=true&srule=intl-emerch&start=0&sz=24\"}}'
          data-page-size=\"24.0\" data-page-number=\"{$page}\"
          data-url=\"wp-json/siellest/Search-UpdateGrid?$params\">
          Load More
        </button>";
    echo "<input type=\"hidden\" class=\"permalink\" value=\"$site_url/product-category/$category/all-collections/?prefn1=$prefn1&prefv1=$prefv1&start=0&sz=24\" />
        <input type=\"hidden\" data-cgid value=\"$category\" />
      </div>";
  }

  public static function render_quickview($product)
  {
    $permalink       = $product->get_permalink();
    $currency        = get_woocommerce_currency();
    $currency_symbol = get_woocommerce_currency_symbol();
    $formatted_price = number_format((float)$product->price, 2);
    $truncated_desc  = substr($product->description, 0, 88);

    $output = "
      <link rel=\"stylesheet\" href=\"wp-content/themes/siellest/assets/css/productMain.css\" />
      <div class=\"quickview quickview-standard\" data-product-container=\"quickview\" data-pid=\"{$product->id}\">
        <div class=\"row flex-no-gutters\">
          <!-- Product Images Carousel -->
          <div class=\"col-12 col-md-7 flex-justify-center\">
            <ul id=\"pdpCarousel-$product->id\" class=\"product-gallery product-gallery--quickview slider--pre-layout-1 slider--arrows-inner slider--arrows-center slider--dots-inner list--reset\" data-slick='{\"type\": \"qvCarousel\"}' data-product-component=\"image-gallery\" aria-label=\"Product Main Images\">";
    foreach (Product::get_images($product) as $key => $img) {
      $counter = $key + 1;
      $class_md6 = $key > 0 ? 'col-md-6' : '';
      $output .= "<li class=\"product-gallery__item aspect-ratio--square bg--grey-1 col-12 $class_md6\">
                        <img src=\"{$img['url']}\" class=\"product-gallery__img component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image\" data-image-index=\"$key\" alt=\"$product->name $counter\" itemprop=\"image\" />
                      </li>";
    }
    $output .= "</ul>
            <div class=\"hidden\">
              <li class=\"product-gallery__item aspect-ratio--square bg--grey-1 col-12 col-md-6\" data-product-component=\"gallery-item\" data-image-template=\"image-gallery\">
                <img class=\"product-gallery__img component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image\" data-image-index=\"\" alt=\"\" itemprop=\"image\" />    
              </li>
            </div>
          </div>
          <!-- Product Name and Number -->        
          <div class=\"col-12 col-md-5\">
            <section class=\"quickview__main flex flex-direction-col flex-grow-1 gutter--normal\">
              <div class=\"pdp-main__section pdp-main__section--name set--w-100\">
                <h1 id=\"qvProductName-$product->id\" class=\"quickview__name heading-type fluid-type--deka-hecto text-line--normal\" data-product-component=\"name\" data-modal-component=\"labelledby\">
                  {$product->name}
                </h1>
                <!-- Prices -->
                <div class=\"quickview__price pdp-main__price flex flex-flow-wrap\">
                  <div class=\"quickview__price-value font-weight--semibold\">
                    <div class=\"price flex--inline flex-flow-wrap flex-align-baseline\" data-product-component=\"price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
                      <meta itemprop=\"priceCurrency\" content=\"$currency\" />
                      <span class=\"price__sales sales\">
                        <span class=\"value\" itemprop=\"price\" content=\"$product->price\">
                          $currency_symbol$formatted_price
                        </span>
                    </div>
                  </div>
                  <span class=\"quickview__price-tax font-family--serif body-type--deci\">excl. sales tax</span>                                            
                </div>
                <div class=\"quickview__details-description-wrapper\">
                  <div class=\"pdp-main__description cms-generic-copy text-line--medium\" data-product-component=\"short-description\">
                    <span class=\"pdp-main__description-truncated\">$truncated_desc...</span>
                    <span class=\"pdp-main__description-full\">{$product->description}</span>
                    <button type=\"button\" class=\"pdp-main__description-more link link--underline\" data-toggle='{\"target\": \"[data-product-component=short-description]\", \"persist\": true}'>
                      <span class=\"pdp-main__description-truncated\">Read More</span>
                      <span class=\"pdp-main__description-full\">Read Less</span>
                    </button>            
                  </div>
                </div>
                <!-- Attributes -->                    
                <div class=\"quickview__attribute-list product-attribute__list flex flex-flow-wrap\">
                  <!-- Quantity Drop Down Menu -->
                  <input type=\"hidden\" value=\"1\" data-product-component=\"qty\" />
                  <!-- Options -->
                </div>
                <div class=\"quickview__footer\" data-product-component=\"actions\">
                  <div class=\"quickview__footer-section quickview__footer-section-actions flex\">
                    <!-- Cart and [Optionally] Apple Pay -->                                                            
                    <div class=\"product-add__container cart-and-ipay flex-grow-1 flex flex-align-center\">
                      <!-- Request Price -->
                      <button type=\"button\" class=\"product__request-price button button--primary set--w-100 hidden\" data-pid=\"{$product->id}\"  data-url=\"/wp-json/siellest/RequestPrice-Start?pid={$product->id}\" data-product-url=\"productRequestPrice\" data-modal-trigger='{\"dynamicURL\": true, \"type\": \"html\", \"options\": {\"modalID\": \"productRequestPrice\", \"modalClass\": \"modal--generic modal--request-price\", \"keepAlive\": false}}' data-product-component=\"request-price\">
                        Request Price
                      </button>
                      <p class=\"font-family--serif hidden\" data-product-component=\"availability-status\">
                        Unavailable online
                      </p>
                      <button class=\"product-add__button add-to-cart button button--primary button--fluid set--w-100 \" data-pid=\"{$product->id}\" data-product-component=\"add-button\" data-url=\"wp-json/siellest/Cart-AddProduct\">Add to Shopping Bag</button>
                      <isapplepay class=\"product-add__button apple-pay-pdp button button--apple-pay set--w-100 js--apple-pay\" sku=\"CRB6016700\"></isapplepay>
                    </div>
                    <div class=\"product-common__wishlist\">
                      <button type=\"button\" class=\"product-common__wishlist-trigger button--flex button--fluid flex-align-center flex-justify-center\" title=\"Add to Wish List, {$product->name}\" data-wishlist-trigger=\"heart\" data-wishlist-label-add=\"Add to Wish List, {$product->name}\" data-wishlist-label-remove=\"Remove from Wish List, {$product->name}\">
                        <span class=\"sr-only\">Add to Wish List</span>    
                        <svg aria-hidden=\"true\" focusable=\"false\" class=\"product-common__wishlist-add icon body-type--deka\">
                          <use xlink:href=\"#icon--heart\"/>
                        </svg>
                        <svg aria-hidden=\"true\" focusable=\"false\" class=\"product-common__wishlist-remove icon body-type--deka\">
                          <use xlink:href=\"#icon--heart-filled\"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class=\"quickview__footer-section quickview__footer-section-actions body-type--deci\">
                    <!-- Order By Phone -->                                                                                                    
                    <div class=\"quickview__footer-section--secondary-action\">
                      <a href=\"tel:1-800-227-8437\" class=\"link--secondary-icon link--flex flex-align-center body-type--centi\" data-component-onclicktracking data-component-onclicktrackingparams='{\"trackEvent\":\"callCenter\",\"trackObject\":{}}'>
                        <svg aria-hidden=\"true\" focusable=\"false\" class=\"link__icon icon body-type--deka\">
                          <use xlink:href=\"#icon--phone\" />
                        </svg>
                        Order by Phone 1-800-227-8437                                        
                      </a>
                    </div>
                    <!-- Product Availability -->
                    <div class=\"pdp-main__secondary-action\">
                    </div>
                    <div class=\"quickview__footer-section pdp-main__section pdp-main__section--footer text-transform--uppercase body-type--deci flex flex-align-center flex-flow-wrap set--w-100\">
                      <!-- Social Sharing Icons -->
                      <div class=\"quickview__footer-section-item pdp-main__footer-item quickview__social flex\">
                        <button type=\"button\" class=\"product-common__share-trigger link link--flex flex-align-center body-type--centi text-transform--uppercase\" data-share-component=\"trigger\" data-tracking='{\"trackEvent\": \"productShare\", \"asyncParams\": {\"pid\": \"CRB6016700\"}}' data-modal-trigger='{\"selector\": \"[data-share-component=modal]\", \"options\": {\"modalID\": \"productShare\", \"modalClass\": \"modal--prompt\"}}'>
                          <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon icon icon--set-left-short body-type--hecto\">
                            <use xlink:href=\"#icon--share\"/>
                          </svg>
                          Share
                        </button>
                        <div class=\"modal-container--static\" data-share-component=\"modal\">
                          <div class=\"modal__header\">
                            <h2 class=\"modal__title fluid-type--deka-hecto heading-type\">Share</h2>
                          </div>
                          <div class=\"modal__body gutter--normal\">
                            <ul class=\"product-common__social flex flex-justify-center flex-align-center list--reset\">
                              <!-- Go to www.addthis.com/dashboard to customize your tools -->
                              <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fabaf6a531b5e43\"></script>
                              <li class=\"product-common__social-item\">
                                <a class=\"link--highlight-hover link--flex product-common__social-anchor--facebook addthis_button_facebook\">
                                  <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon body-type--hecto\">
                                    <use xlink:href=\"#icon--facebook\"/>
                                  </svg>
                                </a>
                              </li>
                              <li class=\"product-common__social-item\">
                                <a class=\"link--highlight-hover link--flex product-common__social-anchor--pinterest_share addthis_button_pinterest_share\">
                                  <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon body-type--hecto\">
                                    <use xlink:href=\"#icon--pinterest_share\"/>
                                  </svg>
                                </a>
                              </li>
                              <li class=\"product-common__social-item\">
                                <a class=\"link--highlight-hover link--flex product-common__social-anchor--twitter addthis_button_twitter\">
                                  <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon body-type--hecto\">
                                    <use xlink:href=\"#icon--twitter\"/>
                                  </svg>
                                </a>
                              </li>
                              <li class=\"product-common__social-item\">
                                <a class=\"link--highlight-hover link--flex product-common__social-anchor--email addthis_button_email\">
                                  <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon heading-type--h6\">
                                    <use xlink:href=\"#icon--email\"/>
                                  </svg>
                                </a>
                              </li>
                              <li class=\"product-common__social-item\">
                                <a class=\"link--highlight-hover link--flex product-common__social-anchor--whatsapp addthis_button_whatsapp\">
                                  <svg aria-hidden=\"true\" focusable=\"false\" class=\"icon body-type--hecto\">
                                    <use xlink:href=\"#icon--whatsapp\"/>
                                  </svg>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class=\"quickview__footer-section-item pdp-main__footer-item body-type--centi quickview__ref\">
                        Ref. <span data-product-component=\"pid\">{$product->id}</span>
                      </div>
                    </div>
                    <div class=\"quickview__footer body-type flex\">
                      <div class=\"pdp-main__section set--w-100\">
                        <a class=\"link--primary\" href=\"$permalink?quantity=1\" data-product-url=\"productShow\" itemprop=\"url\">Go to full details</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>";

    return $output;
  }

  public static function get_product_data($product)
  {
    $types_map = [
      'simple' => 'standard',
      'variable' => 'variant'
    ];

  //   {
  //     "attributes": {
  //         "attribute_pa_size": "13-cm"
  //     },
  //     "availability_html": "",
  //     "backorders_allowed": false,
  //     "dimensions": {
  //         "length": "",
  //         "width": "",
  //         "height": ""
  //     },
  //     "dimensions_html": "N\/A",
  //     "display_price": 1200,
  //     "display_regular_price": 1200,
  //     "image": {
  //         "title": "",
  //         "caption": "",
  //         "url": "",
  //         "alt": "",
  //         "src": "",
  //         "srcset": false,
  //         "sizes": false
  //     },
  //     "image_id": 0,
  //     "is_downloadable": false,
  //     "is_in_stock": true,
  //     "is_purchasable": true,
  //     "is_sold_individually": "no",
  //     "is_virtual": false,
  //     "max_qty": "",
  //     "min_qty": 1,
  //     "price_html": "",
  //     "sku": "",
  //     "variation_description": "",
  //     "variation_id": 2775,
  //     "variation_is_active": true,
  //     "variation_is_visible": true,
  //     "weight": "",
  //     "weight_html": "N\/A"
  // },

    $variation_attrs = null;
    if ($product->is_type('variable')) {
      $variation_attrs = Product::mapped_variation_attrs();
    }

    return [
      "uuid" => "ea75d4a05c64b80983c90dcce6",
      "id" => "$product->id",
      "productName" => $product->name,
      "productType" => $types_map[$product->get_type()],
      "brand" => "siellest",
      "productDisplayName" => "$product->name",
      "price" => [
        "sales" => [
          "value" => $product->price,
          "currency" => get_woocommerce_currency(),
          "formatted" => get_woocommerce_currency_symbol() . number_format((float)$product->price, 2),
          "decimalPrice" => $product->price
        ],
        "list" => null,
        "html" => "<div class=\"price flex--inline flex-flow-wrap flex-align-baseline\" data-product-component=\"price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
          <meta itemprop=\"priceCurrency\" content=\"USD\" />
          <span class=\"price__sales sales\">
            <span class=\"value\" itemprop=\"price\" content=\"4450.00\">$4,450.00</span>
          </span></div>"
      ],
      "sellable" => [
        "web" => true,
        "phone" => true
      ],
      "requestPrice" => false,
      "sellableLabel" => "sellable",
      "isPriceUnderThreshold" => true,
      "images" => [
        "large" => Product::get_images($product),
        "small" => Product::get_images($product, 'small')
      ],
      "selectedQuantity" => 1,
      "minOrderQuantity" => 1,
      "maxOrderQuantity" => 10,
      "variationAttributes" => $variation_attrs,
      // "variationAttributes": [ // for when productType = variant
      //   {
      //     "displayName": "Size",
      //     "displayValue": "15 cm",
      //     "attributeId": "size",
      //     "id": "size"
      //   }
      // ]
      "longDescription" => $product->description,
      "shortDescription" => $product->short_description,
      "truncatedDescription" => "Trinity bracelet, small model, white gold 750/1000, rose gold 750/1000, yellow gold 750/",
      "longDescriptionDisplay" => "Trinity bracelet, small model, white gold 750/1000, rose gold 750/1000, yellow gold 750/1000. Supplied on a cord. Width: 2 mm. Inner diameter: 10.7 mm",
      "rating" => 4.2,
      "promotions" => null,
      "attributes" => null,
      "availability" => [
        "messages" => [
          "In Stock" // or "Unavailable online"
        ],
        "totalStock" => 271,
        "inStockDate" => null
      ],
      "available" => true,
      "options" => [],
      "quantities" => [
        [
          "value" => "1",
          "selected" => true,
          "url" => "wp-json/siellest/Product-Variation?pid=$product->id&quantity=1"
        ],
        [
          "value" => "2",
          "selected" => false,
          "url" => "wp-json/siellest/Product-Variation?pid=$product->id&quantity=2"
        ],
        [
          "value" => "3",
          "selected" => false,
          "url" => "wp-json/siellest/Product-Variation?pid=$product->id&quantity=3"
        ],
        [
          "value" => "4",
          "selected" => false,
          "url" => "wp-json/siellest/Product-Variation?pid=$product->id&quantity=4"
        ],
        [
          "value" => "5",
          "selected" => false,
          "url" => "wp-json/siellest/Product-Variation?pid=$product->id&quantity=5"
        ],
        [
          "value" => "6",
          "selected" => false,
          "url" => "wp-json/siellest/Product-Variation?pid=$product->id&quantity=6"
        ],
        [
          "value" => "7",
          "selected" => false,
          "url" => "wp-json/siellest/Product-Variation?pid=$product->id&quantity=7"
        ],
        [
          "value" => "8",
          "selected" => false,
          "url" => "wp-json/siellest/Product-Variation?pid=$product->id&quantity=8"
        ],
        [
          "value" => "9",
          "selected" => false,
          "url" => "wp-json/siellest/Product-Variation?pid=$product->id&quantity=9"
        ],
        [
          "value" => "10",
          "selected" => false,
          "url" => "wp-json/siellest/Product-Variation?pid=$product->id&quantity=10"
        ]
      ],
      "selectedProductUrl" => "$product->permalink&quantity=1",
      "readyToOrder" => true,
      "online" => true,
      "pageTitle" => "$product->id - $product->name - White gold, yellow gold, rose gold - Cartier",
      "pageDescription" => "$product->name: $product->name, 18K white gold, 18K rose gold, 18K yellow gold. Comes on a cord. Width: 2 mm. Inner diameter: 10.7mm",
      "pageKeywords" => null,
      "pageMetaTags" => [],
      "template" => null,
      "fluentAvailability" => [
        "dskStock" => 174,
        "ndskStock" => 97
      ],
      "shareURLs" => [
        "facebook" => [
          "id" => "facebook",
          "label" => "Facebook",
          "url" => "https://www.facebook.com/sharer/sharer.php?=undefined&u=https%3A%2F%2Fwww.cartier.com%2Fen-us%2Fjewelry%2Fbracelets%2Ftrinity-bracelet-CRB6016700.html"
        ],
        "pinterest" => [
          "id" => "pinterest",
          "label" => "Pinterest",
          "url" => "https://www.pinterest.com/pin/create/button?=undefined&description=Trinity%20bracelet&url=https%3A%2F%2Fwww.cartier.com%2Fen-us%2Fjewelry%2Fbracelets%2Ftrinity-bracelet-CRB6016700.html"
        ],
        "twitter" => [
          "id" => "twitter",
          "label" => "Twitter",
          "url" => "https://twitter.com/intent/tweet?=undefined&text=Trinity%20bracelet&url=https%3A%2F%2Fwww.cartier.com%2Fen-us%2Fjewelry%2Fbracelets%2Ftrinity-bracelet-CRB6016700.html"
        ],
        "line" => [
          "id" => "line",
          "label" => "Line",
          "url" => "https://social-plugins.line.me/lineit/share?=undefined&url=https%3A%2F%2Fwww.cartier.com%2Fen-us%2Fjewelry%2Fbracelets%2Ftrinity-bracelet-CRB6016700.html"
        ],
        "email" => [
          "id" => "email",
          "label" => "E-Mail",
          "url" => "mailto:?=undefined&body=https%3A%2F%2Fwww.cartier.com%2Fen-us%2Fjewelry%2Fbracelets%2Ftrinity-bracelet-CRB6016700.html&subject=Trinity%20bracelet"
        ],
        "presentationList" => [
          [
            "id" => "facebook",
            "label" => "Facebook",
            "url" => "https://www.facebook.com/sharer/sharer.php?=undefined&u=https%3A%2F%2Fwww.cartier.com%2Fen-us%2Fjewelry%2Fbracelets%2Ftrinity-bracelet-CRB6016700.html"
          ],
          [
            "id" => "pinterest",
            "label" => "Pinterest",
            "url" => "https://www.pinterest.com/pin/create/button?=undefined&description=Trinity%20bracelet&url=https%3A%2F%2Fwww.cartier.com%2Fen-us%2Fjewelry%2Fbracelets%2Ftrinity-bracelet-CRB6016700.html"
          ],
          [
            "id" => "twitter",
            "label" => "Twitter",
            "url" => "https://twitter.com/intent/tweet?=undefined&text=Trinity%20bracelet&url=https%3A%2F%2Fwww.cartier.com%2Fen-us%2Fjewelry%2Fbracelets%2Ftrinity-bracelet-CRB6016700.html"
          ],
          [
            "id" => "email",
            "label" => "E-Mail",
            "url" => "mailto:?=undefined&body=https%3A%2F%2Fwww.cartier.com%2Fen-us%2Fjewelry%2Fbracelets%2Ftrinity-bracelet-CRB6016700.html&subject=Trinity%20bracelet"
          ]
        ]
      ],
      "lineContactURLs" => [
        "desktop" => "https://cartierth",
        "mobile" => "https://cartierthHi%20there"
      ],
      "pimCategory" => [],
      "pimTopLevelCategory" => [],
      "category" => [],
      "toplevelcategory" => [],
      "aboutCollection" => null,
      "aboutCollectionExtended" => null,
      "gtmPushCategory" => "Bracelet",
      "explicitRecommendations" => null,
      "isEngrav" => false, // check meta key
      "nrOfChar1Line" => 10,
      "hasEngravOptions" => true, // meta key
      "engravedProductType" => "", // "RENG"
      "nrOfChar1LineEmbossing" => 4,
      "wristSizeMin" => "14",
      "wristSizeMax" => "14",
      "isEngraved" => "NA", // "No" if isEngrav
      "isEmbossed" => "NA",
      "isAdjusted" => "NA",
      "isBraceletAdjusted" => "NA",
      "isPersonalised" => "NA", // No of isEngrav
      "servicesContent" => "product-gift-shipping-services",
      "USPContent" => "global-services-grid",
      "productVariant" => "NA", // set plz
      "back" => "",
      "bracelet" => "",
      "buckle" => "",
      "cites" => "false",
      "colorLeatherGoods" => "",
      "colorOfDial" => "",
      "colorOfLenses" => "",
      "crown" => "",
      "dial" => "",
      "diameter" => "",
      "diamondShape" => "",
      "exclusive" => "",
      "finishing" => "",
      "gender" => "[Ldw.value.EnumValue;@11bb23bc",
      "glass" => "",
      "glassShape" => "",
      "grossWeight" => "",
      "GTIN" => "7612456281907", // ???
      "hands" => "",
      "height" => "",
      "interchangableStraps" => "",
      "caseLength" => "",
      "length" => "",
      "limitedEdition" => "false",
      "launchDate" => "",
      "material2" => "",
      "modelLeatherGoods" => "",
      "movement" => "",
      "movementDetails" => "",
      "movementDimension" => "",
      "netProductWeight" => "2.93", // set this if needed
      "network" => "Internal and External Boutiques",
      "powerReserve" => "",
      "rangeStatus" => "In range",
      "scienceOfTheAnimal" => "",
      "segment" => "BJ",
      "setting" => "",
      "strapLength" => "",
      "subCollection" => "",
      "caseThickness" => "",
      "typeOfBracelet" => "Souple", // another possible value "Rigide"
      "typeOfCarry" => "",
      "watchComplication" => "",
      "watchShape" => "",
      "waterResistance" => "",
      "caseWidth" => "",
      "Width" => "",
      "writingMode" => "",
      "size" => "", // set it too
      "keyFeatureSection1Desc" => "",
      "keyFeatureSection2Desc" => "",
      "keyFeatureSection3Desc" => "",
      "keyFeatureSection1Image" => "",
      "keyFeatureSection2Image" => "",
      "keyFeatureSection3Image" => "",
      "specificationSection1Image" => "",
      "specificationSection2Image" => "",
      "specificationSection3Image" => "",
      "specificationSection4Image" => "",
      "specificationSection5Image" => "",
      "specificationSection6Image" => "",
      "productcollection" => "Trinity", // set it too
      "reference" => "B6016700",
      "availableForStoreReservation" => true,
      "isCaseProduct" => false,
      "isFragranceRefillProduct" => false,
      "material1" => "[Ldw.value.EnumValue;@47afbaa0",
      "productMaterialJewelry" => "",
      "productLine2" => "Jewelry",
      "caseMaterial" => "NA",
      "leatherMaterial" => "OGOROJ",
      "typeOfStrap" => "NA",
      "novelties" => "NA",
      "productLine" => "Jewelry",
      "imagesDisplayConfig" => Product::get_images_display_config($product),
      "is3DProduct" => false,
      "includedStraps" => [],
      "hasStrapOptions" => false,
      "iframe3DURL" => "3dconfigurator.s3-accelerate.amazonaws.com/CartierConfigurator/index.html?pId=B6016700",
      "defaultStrapOption" => "",
      "sizeChartId" => "",
      "sizeChartURL" => "https://www.en.cartier.com/services/care-adjust-repair/jewelry/sizing-guides.html",
      "availableForInStorePickup" => true,
      "storePickupReady" => true,
      "storePickupEnabled" => true,
      "visible" => [
        "web" => true,
        "phone" => true
      ]
  //     "attributesHtml" => "\n\n\n\n",
  //     "promotionsHtml" => "\n\n\n",
  //     "optionsHtml" => "\n\n\n\n\n",
  //     "inWishlist" => false
    ];
  }

  public static function get_images($product, $size = 'large')
  {
    $size = $size == 'large' ? 750 : 250;
    $imgs_data = [];

    $url = wp_get_attachment_url($product->image_id);
    array_push($imgs_data, [
      "alt" => $product->name,
      "url" =>  "$url?sw=$size&sh=$size&sm=fit&sfrm=png",
      "index" => "0",
      "title" => $product->name,
      "absURL" => "$url?sw=$size&sh=$size&sm=fit&sfrm=png",
      "hasImage" => true,
      "hasBackground" => true,
      "isWornImage" => false,
      "hide" => false,
      "imagePath" => "/images/large/" . basename(get_attached_file($product->image_id))
    ]);

    foreach ($product->gallery_image_ids as $key => $img_id) {
      $url = wp_get_attachment_url($img_id);
      array_push($imgs_data, [
        "alt" => $product->name,
        "url" => "$url?sw=$size&sh=$size&sm=fit&sfrm=png",
        "index" => ($key + 1),
        "title" => $product->name,
        "absURL" => "$url?sw=$size&sh=$size&sm=fit&sfrm=png",
        "hasImage" => true,
        "hasBackground" => true,
        "isWornImage" => false,
        "hide" => false,
        "imagePath" => "/images/large/" . basename(get_attached_file($img_id))
      ]);
    }
    return $imgs_data;
  }

  public static function get_images_display_config($product)
  {
    return [
      "configData" => [
        [
          "imgName" => "637708788550193812-2059312.png",
          "hasBackground" => true,
          "isWornImage" => false
        ],
        [
          "imgName" => "637708788550193812-2059408.png",
          "hasBackground" => true,
          "isWornImage" => false
        ],
        [
          "imgName" => "637708788550193812-2059483.png",
          "hasBackground" => true,
          "isWornImage" => false
        ],
        [
          "imgName" => "637708788550193812-2059482.png",
          "hasBackground" => true,
          "isWornImage" => false
        ],
        [
          "imgName" => "637708788550193812-2059435.png",
          "hasBackground" => true,
          "isWornImage" => false
        ],
        [
          "imgName" => "637708788550193812-2059514.png",
          "hasBackground" => true,
          "isWornImage" => false
        ],
        [
          "imgName" => "637708788550193812-2159750.png",
          "hasBackground" => true,
          "isWornImage" => true
        ],
        [
          "imgName" => "637342194268640334-1057412.png",
          "hasBackground" => false,
          "isWornImage" => false
        ],
        [
          "imgName" => "637342194289109467-1956045.png",
          "hasBackground" => false,
          "isWornImage" => false
        ],
        [
          "imgName" => "637436417947662037-1362412.png",
          "hasBackground" => false,
          "isWornImage" => false
        ],
        [
          "imgName" => "637436418030162330-2091396.png",
          "hasBackground" => false,
          "isWornImage" => true
        ]
      ],
      "hasBackgroundImage" => true
    ];
  }

  private static function mapped_variation_attrs($product) {
    $size_attr = [
      "attributeId" => "size",
      "displayName" => "Size",
      "id" => "size",
      "swatchable" => false,
      "resetUrl" => get_site_url() . "/wp-json/siellest/Product-Variation?dwvar_B6047517_size=&pid=B6047517&quantity=1",
      "selectedValue" => "20 cm",
      "values" => []
    ];

    foreach($product->get_available_variations() as $key => $value)
    {
      if (isset($value['attributes']['attribute_pa_size'])) {
        array_push($size_attr['values'], [
          "id" => "15",
          "description" => null,
          "displayValue" => "15 cm",
          "value" => "15",
          "selected" => false,
          "selectable" => false,
          "labelDefault" => "Size: 15 cm",
          "labelSelected" => "Size: 15 cm, selected",
          "labelUnselectable" => "Size: 15 cm, unselectable",
          "visibleWeb" => true,
          "visiblePhone" => true,
          "url" => get_site_url() . "/wp-json/siellest/Product-Variation?dwvar_B6047517_size=15&pid=B6047517&quantity=1"
        ]);
      }
      // $size_attr["values"] = [
      //   [
      //     "id" => "15",
      //     "description" => null,
      //     "displayValue" => "15 cm",
      //     "value" => "15",
      //     "selected" => false,
      //     "selectable" => false,
      //     "labelDefault" => "Size: 15 cm",
      //     "labelSelected" => "Size: 15 cm, selected",
      //     "labelUnselectable" => "Size: 15 cm, unselectable",
      //     "visibleWeb" => true,
      //     "visiblePhone" => true,
      //     "url" => get_site_url() . "/wp-json/siellest/Product-Variation?dwvar_B6047517_size=15&pid=B6047517&quantity=1"
      //   ],
        // {
        //   "id": "16",
        //   "description": null,
        //   "displayValue": "16 cm",
        //   "value": "16",
        //   "selected": false,
        //   "selectable": true,
        //   "labelDefault": "Size: 16 cm",
        //   "labelSelected": "Size: 16 cm, selected",
        //   "labelUnselectable": "Size: 16 cm, unselectable",
        //   "visibleWeb": true,
        //   "visiblePhone": true,
        //   "url": "https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Product-Variation?dwvar_B6047517_size=16&pid=B6047517&quantity=1"
        // },
      // ];
    }

    $variations = [$size_attr];
    return $variations;
  }

  static function custom_query($category, $sort_rule, $offset=0, $collections=[])
  {
    $sort_map = [
      'intl-emerch' => ['by' => 'menu_order', 'order' => 'asc'],
      'price-low-to-high' => ['by' => 'meta_value_num', 'order' => 'asc'],
      'price-high-to-low' => ['by' => 'meta_value_num', 'order' => 'desc']
    ];
    
    $tax_query = [];
    if (!empty($collections)) {
      array_push($tax_query, array(
        'taxonomy'      => 'pa_collection',
        'field'         => 'slug',
        'terms'         => $collections,
        'operator'      => 'IN'
      ));
    }
    
    $args = array(
      'status' => ['publish'],
      'offset' => $offset,
      'limit' => PRODUCTS_PER_PAGE,
      'paginate' => true,
      'category' => [$category],
      'orderby' => $sort_map[$sort_rule]['by'],
      'meta_key' => '_price',
      'order' => $sort_map[$sort_rule]['order'],
      'tax_query' => $tax_query
    );

    return new WC_Product_Query($args);
  }

  static function get_available_collections($category)
  {
    $args = array(
      'status' => ['publish'],
      'limit' => -1,
      'category' => [$category]
    );

    $collections = [];
    $products = (new WC_Product_Query($args))->get_products();
    foreach($products as $product) {
      foreach($product->get_attributes() as $taxonomy => $attribute) {
        if ($taxonomy == 'pa_collection') {
          foreach($attribute->get_terms() as $term) {
            $collections[$term->slug] = $term->name;
          }
        }
      }
    }

    return $collections;
  }
}
