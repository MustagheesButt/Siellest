<?php

// TODO if user not logged in, store in session
function get_wishlist()
{
  $user = wp_get_current_user();

  if (!empty($user)) {
    return [];
  }

  $wishlist = get_user_meta($user->ID, 'wishlist');
  if (!$wishlist)
    $wishlist = [];

  return array(
    "action" => "Wishlist-InList",
    "queryString" => "",
    "locale" => "en_US",
    "success" => false,
    "itemsInList" => $wishlist
  );
}

function wishlist_add_product(WP_REST_Request $request)
{
  return $request->get_param('pid');
}

function product_zoom(WP_REST_Request $request)
{
  $pid         = $request->get_param('pid');
  $start_index = $request->get_param('startindex');

  return array(
    "action" => "Product-Zoom",
    "queryString" => "dwvar_B6067217_size=20&pid=CRB6067220&quantity=1&startindex=0",
    "locale" => "en_US",
    "images" => array(
      "hi-res" => [
        array(
          "alt" => "Panthère de Cartier bracelet",
          "url" => "https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwede7d33e/images/large/637453633438784210-2076647.png?sw=2000&sh=2000&sm=fit&sfrm=png",
          "index" => "0",
          "title" => "Panthère de Cartier bracelet",
          "absURL" => "https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwede7d33e/images/large/637453633438784210-2076647.png?sw=2000&sh=2000&sm=fit&sfrm=png",
          "hasImage" => true,
          "hasBackground" => false,
          "isWornImage" => false,
          "hide" => false,
          "imagePath" => "/images/large/637453633438784210-2076647.png"
        ),
        array(
          "alt" => "Panthère de Cartier bracelet",
          "url" => "https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwef48d6b6/images/large/637453633462847664-2076622.png?sw=2000&sh=2000&sm=fit&sfrm=png",
          "index" => "1",
          "title" => "Panthère de Cartier bracelet",
          "absURL" => "https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwef48d6b6/images/large/637453633462847664-2076622.png?sw=2000&sh=2000&sm=fit&sfrm=png",
          "hasImage" => true,
          "hasBackground" => false,
          "isWornImage" => false,
          "hide" => false,
          "imagePath" => "/images/large/637453633462847664-2076622.png"
        ),
        array(
          "alt" => "Panthère de Cartier bracelet",
          "url" => "https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwec31bf36/images/large/637453633487692651-2076648.png?sw=2000&sh=2000&sm=fit&sfrm=png",
          "index" => "2",
          "title" => "Panthère de Cartier bracelet",
          "absURL" => "https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwec31bf36/images/large/637453633487692651-2076648.png?sw=2000&sh=2000&sm=fit&sfrm=png",
          "hasImage" => true,
          "hasBackground" => false,
          "isWornImage" => false,
          "hide" => false,
          "imagePath" => "/images/large/637453633487692651-2076648.png"
        )
      ]
    ),
    "startindex" => $start_index,
    "renderedTemplate" => "\n\n<p class=\"product-zoom__label heading-type body-type font-weight--normal text-align--center set--w-100\">\n    Zoom\n</p>\n\n<div id=\"pdpZoom-null\" class=\"product-zoom flex set--w-100 bg--grey-1\" data-slick='{\"type\": \"zoomCarousel\", \"initialSlide\": {$start_index}}' data-product-component=\"image-gallery\" role=\"listbox\">\n    \n
            <div class=\"product-zoom__item aspect-ratio--square\">\n
                        <img src=\"https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwede7d33e/images/large/637453633438784210-2076647.png?sw=2000&sh=2000&sm=fit&sfrm=png\" class=\"product-zoom__image component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image-zoom\" data-image-index=\"0\" alt=\"Panth&egrave;re de Cartier bracelet\" itemprop=\"image\" />\n        </div>\n    \n        <div class=\"product-zoom__item aspect-ratio--square\">\n
                        <img src=\"https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwef48d6b6/images/large/637453633462847664-2076622.png?sw=2000&sh=2000&sm=fit&sfrm=png\" class=\"product-zoom__image component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image-zoom\" data-image-index=\"1\" alt=\"Panth&egrave;re de Cartier bracelet\" itemprop=\"image\" />\n        </div>\n    \n        <div class=\"product-zoom__item aspect-ratio--square\">\n
                        <img src=\"https://www.siellest.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwec31bf36/images/large/637453633487692651-2076648.png?sw=2000&sh=2000&sm=fit&sfrm=png\" class=\"product-zoom__image component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image-zoom\" data-image-index=\"2\" alt=\"Panth&egrave;re de Cartier bracelet\" itemprop=\"image\" />\n        </div>\n    \n</div>\n"
  );
}

function account_submit_registration()
{
  return '<div class="cms-generic-copy text-line--medium">
  Thank you for registering with us.
  <br /><br />
  A confirmation has been sent to your email address.
  <br /><br />
  Please activate your account by following the instruction mentioned in the confirmation email.
  </div>';
}

function account_login(WP_REST_Request $request)
{
  $creds = array(
    'user_login'    => $request->get_param('loginEmail'),
    'user_password' => $request->get_param('loginPassword'),
    'remember'      => true
  );

  $success = true;
  $user = wp_signon($creds, false);

  if (is_wp_error($user)) {
    $success = false;
  }

  return array(
    "action" => "Account-Login",
    "queryString" => "login_challenge=f8d06f4687764e62a290cdc37c250903&rurl=1",
    "locale" => "en_US",
    "success" => $success,
    "redirectUrl" => "account/"
  );
}

function logout()
{
  wp_logout();

  return rest_ensure_response(new WP_REST_Response(
    null,
    302,
    array(
      'Location' => get_home_url() // or set any other URL you wish to redirect to
    )
  ));
}

function render_product($product) {
  $p_link = $product->get_permalink();
  $name = $product->get_name();
  $currency = get_woocommerce_currency();
  $currency_symbol = get_woocommerce_currency_symbol();
  $price = $product->get_price();
  $formatted_price = number_format((float)$price, 2);
  $img = wp_get_attachment_url( $product->get_image_id() );

  return "<div class=\"product-grid__item col-6 col-md-3\" data-tracking-context=\"Productlisting\">
  <div class=\"product flex flex-grow-1 flex-direction-col\">
    <div class=\"product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center\" itemscope itemtype=\"http://schema.org/Product\" data-product-container=\"tile\" data-product-tile data-pid=\"N6715217\" data-tracking-id=\"N6715217\" data-tracking-position>

      <a class=\"product-tile__anchor\" href=\"$p_link\" data-product-url=\"productShow\" itemprop=\"url\">

        <div class=\"product-tile__media product-tile__media--default aspect-ratio--square \">
          <div class=\"product-tile__media-container component-overlay component-overlay--center\">
            <img class=\"product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image \" data-product-component=\"image\" data-src=\"$img?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png\" data-image-index=\"0\" itemprop=\"image\" alt=\"$name\" title=\"$name\" />

            <img class=\"product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image\" data-product-component=\"image\" data-src=\"$img?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png\" data-image-index=\"1\" itemprop=\"image\" alt=\"$name\" title=\"$name\" />
          </div>
        </div>
        <div class=\"product-tile__body\">
          <p class=\"product-tile__body-section product-tile__name text-line--large heading-type body-type--deci\" itemprop=\"name\">
            $name
          </p>
          <div class=\"product-tile__body-section product-tile__swatches font-family--serif\" data-product-component=\"swatches\">
          </div>
          <p class=\"product-tile__body-section product-tile__material font-family--serif\">
            Yellow gold, tsavorite garnets, onyx
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

function search_updategrid()
{
  header('Content-Type: text/html');
  
  $args = array(
    'paged' => 1,
    'limit' => 24,
    'category' => ['Jewelry'],
    'order' => 'ASC'
  );
  $query = new WC_Product_Query( $args );

  $products = $query->get_products();

  $products = wc_products_array_orderby( $products, 'price', 'ASC' );

  // var_dump($products);

  foreach ( $products as $product ) {
  //   $loop->the_post();
    
  //   /**
  //    * Hook: woocommerce_shop_loop.
  //    */
  //   // do_action( 'woocommerce_shop_loop' );
    
  //   // wc_get_template_part( 'content', 'product' );
  //   global $product;
    echo render_product($product);
  }

  exit();
}

/* Admin functions */
function import_starter_content()
{
  include 'inc/starter-content/importer.php';

  if (
    create_pages() &&
    create_menus() &&
    create_product_categories() &&
    create_attribute_collection() &&
    create_products()
  ) {
    // TODO set home to front page
    return 'ok';
  } else
    return 'fail';
}

/* Register API routes */
add_action('rest_api_init', function () {
  register_rest_route('siellest', 'wishlist-inlist', array(
    'methods' => 'GET, POST',
    'callback' => 'get_wishlist'
  ));

  register_rest_route('siellest', 'wishlist-addproduct', array(
    'methods' => 'GET, POST',
    'callback' => 'wishlist_add_product'
  ));

  register_rest_route('siellest', 'product-zoom', array(
    'methods' => 'GET, POST',
    'callback' => 'product_zoom'
  ));
  register_rest_route('siellest', 'account-login', array(
    'methods' => 'POST',
    'callback' => 'account_login'
  ));
  register_rest_route('siellest', 'login-ssologout', array(
    'methods' => 'GET',
    'callback' => 'logout'
  ));
  register_rest_route('siellest', 'search-updategrid', array(
    'method' => 'GET',
    'callback' => 'search_updategrid'
  ));

  register_rest_route('siellest', 'contactus-getcontent', array(
    'methods' => 'GET',
    'callback' => 'contactus_getcontent'
  ));

  // Register admin API routes
  register_rest_route('siellest-admin', 'import-starter-content', array(
    'methods' => 'POST',
    'callback' => 'import_starter_content'
  ));
});
