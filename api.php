<?php
require_once 'classes/Product.php';
require_once 'classes/Cart.php';

add_filter( 'woocommerce_is_rest_api_request', 'simulate_as_not_rest' );
/**
 * We have to tell WC that this should not be handled as a REST request.
 * Otherwise we can't use the product loop template contents properly.
 * Since WooCommerce 3.6
 *
 * @param bool $is_rest_api_request
 * @return bool
 */
function simulate_as_not_rest( $is_rest_api_request ) {
	if ( empty( $_SERVER['REQUEST_URI'] ) ) {
			return $is_rest_api_request;
	}

	// Bail early if this is not our request.
	if ( false === strpos( $_SERVER['REQUEST_URI'], 'siellest' ) ) {
		return $is_rest_api_request;
	}

	return false;
}

// TODO if user not logged in, store in cookie
function get_wishlist()
{
  $user = wp_get_current_user();

  // if (!empty($user)) {
  //   return [];
  // }

  if (is_user_logged_in()) {
    $wishlist = get_user_meta($user->ID, 'wishlist');
  } else {
    $wishlist = explode(',', $_COOKIE['wishlist']);
  }

  if (!$wishlist)
    $wishlist = [];

  return array(
    "action" => "Wishlist-InList",
    "queryString" => "",
    "locale" => "en_US",
    "success" => true,
    "itemsInList" => $wishlist
  );
}

function wishlist_addproduct(WP_REST_Request $request)
{
  //   ini_set('display_errors', 1); 
  // error_reporting(E_ALL);
  $user = wp_get_current_user();
  $pid  = $request->get_param('pid');

  if (is_user_logged_in()) {
    add_user_meta($user->ID, 'wishlist', $pid);
    $wishlist = get_user_meta($user->ID, 'wishlist');
  } else {
    if (isset($_COOKIE['wishlist']))
      $cookie = $_COOKIE['wishlist'] . ",$pid";
    else
      $cookie = $pid;

    setcookie('wishlist', $cookie, time() + (86400 * 30), '/');
    $wishlist = explode(',', $_COOKIE['wishlist']);
  }

  return [
    "action" => "Wishlist-AddProduct",
    "queryString" => "",
    "locale" => "en_US",
    "success" => true,
    "itemCount" => sizeof($wishlist),
    "pid" => $pid,
    "msg" => "The product has been added to your wish list."
  ];
}

function wishlist_removeproduct(WP_REST_Request $request)
{
  // ini_set('display_errors', 1);
  // error_reporting(E_ALL);
  $pid = $request->get_param('pid');
  $user = wp_get_current_user();

  if (is_user_logged_in()) {
    delete_user_meta($user->ID, 'wishlist', $pid);
    $wishlist = get_user_meta($user->ID, 'wishlist');
  }
  else {
    if (isset($_COOKIE['wishlist'])) {
      $wishlist = explode(',', $_COOKIE['wishlist']);
      unset($wishlist[array_search($pid, $wishlist)]);
      setcookie('wishlist', implode(',', $wishlist), time() + (86400 * 30), '/');
    }
  }

  return [
    "action" => "Wishlist-RemoveProduct",
    "queryString" => "pid=$pid",
    "locale" => "en_US",
    "success" => true,
    "itemCount" => sizeof($wishlist),
    "listIsEmpty" => sizeof($wishlist) == 0,
    "type" => "remove",
    "pid" => $pid,
    "emptyWishlistMsg" => "",
    "msg" => "The product has been removed from your wish list."
  ];
}

function product_showquickview(WP_REST_Request $request)
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

function product_zoom(WP_REST_Request $request)
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

function search_updategrid()
{
  header('Content-Type: text/html');
  $start = $_GET['start'];
  $category = $_GET['cgid'];

  $args = array(
    'offset' => $start,
    'limit' => 24,
    'paginate' => true,
    'category' => [$category],
    'orderby' => 'meta_value_num',
    'meta_key' => '_price',
    'order' => 'asc',
    'tax_query' => array(
      // array(
      //   'taxonomy'      => 'product_cat',
      //   'field' => 'term_id', //This is optional, as it defaults to 'term_id'
      //   'terms'         => 26,
      //   'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
      // ),
      // array(
      //   'taxonomy'      => 'product_visibility',
      //   'field'         => 'slug',
      //   'terms'         => 'exclude-from-catalog', // Possibly 'exclude-from-search' too
      //   'operator'      => 'NOT IN'
      // )
    )
  );
  // $total = get_term_by('slug', $category, 'product_cat')->count;
  $query = new WC_Product_Query($args);
  $data = $query->get_products();
  $products = $data->products;
  $total = $data->total;

  // $products = wc_products_array_orderby( $products, 'price', 'ASC' );

  foreach ($products as $product) {
    echo Product::render_product($product);
  }
  Product::render_product_loop_end($category, $start + 24, $total);

  exit();
}

function search_showajax()
{
  header('Content-Type: text/html');

  include 'template-parts/archive-product/main.php';

  exit();
}

function gtm_eventviewdatalayer()
{
  return [
    "event" => "removeFromCart",
    "currencyCode" => "USD",
    "products" => [
      [
        "name" => "Pasha de Cartier Edition Noire Sport Eau de Toilette",
        "id" => "65150003",
        "productRef" => "65100006",
        "price" => "123.00",
        "brand" => "cartier",
        "category" => "Eau de toilette",
        "productCollection" => "Pasha de Cartier",
        "productVertical" => "Fragrances",
        "variant" => "5.1 fl.oz./150 ml",
        "sellable" => "sellable",
        "productSize" => "5.1 fl.oz./150 ml",
        "quantity" => 1,
        "productMaterialCase" => "NA",
        "productMaterialJewelry" => "",
        "productMaterialStrap" => "NA",
        "productMaterialLeather" => "NA",
        "isEngraved" => "NA",
        "isEmbossed" => "NA",
        "isAdjusted" => "NA",
        "isPersonalised" => "NA",
        "isAvailable" => "outofstock",
        "productDisplay" => "Product pages"
      ]
    ]
  ];
}

/* Admin functions */
function import_starter_content()
{
  include 'inc/starter-content/importer.php';

  $statuses = [
    'pages' => create_pages(),
    'menus' => create_menus(),
    'product_categories' => create_product_categories(),
    'attribute_collection' => create_attribute_collection(),
    'products' => create_products()
  ];

  if (in_array(false, array_values($statuses)) === false) {
    // TODO set home to front page
    return 'ok';
  } else
    return [
      'status' => 'failed',
      'statuses' => $statuses
    ];
}

/* Register API routes */
add_action('rest_api_init', function () {
  register_rest_route('siellest', 'wishlist-inlist', array(
    'methods' => 'GET, POST',
    'callback' => 'get_wishlist'
  ));
  register_rest_route('siellest', 'wishlist-addproduct', array(
    'methods' => 'GET, POST',
    'callback' => 'wishlist_addproduct'
  ));
  register_rest_route('siellest', 'wishlist-removeproduct', array(
    'methods' => 'GET, POST',
    'callback' => 'wishlist_removeproduct'
  ));

  register_rest_route('siellest', 'cart-addproduct', array(
    'methods' => 'POST',
    'callback' => 'Cart::cart_addproduct'
  ));
  register_rest_route('siellest', 'cart-minicartshow', array(
    'methods' => 'GET',
    'callback' => 'Cart::cart_minicartshow'
  ));
  register_rest_route('siellest', 'gtm-eventviewdatalayer', [
    'methods' => 'GET',
    'callback' => 'gtm_eventviewdatalayer'
  ]);
  register_rest_route('siellest', 'cart-removeproductlineitem', array(
    'methods' => 'GET, POST',
    'callback' => 'Cart::cart_removeproductlineitem'
  ));

  register_rest_route('siellest', 'product-showquickview', array(
    'methods' => 'GET',
    'callback' => 'product_showquickview'
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
  register_rest_route('siellest', 'search-showajax', array(
    'method' => 'GET',
    'callback' => 'search_showajax'
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
