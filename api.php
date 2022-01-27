<?php
require_once 'classes/Siellest_Helper.php';

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
    add_user_meta($user->id, 'wishlist', $pid);
  } else {
    if ( isset($_COOKIE['wishlist']) )
      $cookie = $_COOKIE['wishlist'] . ",$pid";
    else
      $cookie = $pid;

    setcookie('wishlist', $cookie, time() + (86400 * 30), '/');
  }
  
  return [
    "action" => "Wishlist-AddProduct",
    "queryString" => "",
    "locale" => "en_US",
    "success" => true,
    "itemCount" => 1,
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

  if (is_user_logged_in())
    delete_user_meta($user->id, 'wishlist', $pid);
  else {
    if ( isset($_COOKIE['wishlist']) ) {
      $wishlist = explode(',', $_COOKIE['wishlist']);
      unset($wishlist[ array_search($pid, $wishlist) ]);
      setcookie('wishlist', implode(',', $wishlist), time() + (86400 * 30), '/');
    }
  }

  return [
    "action" => "Wishlist-RemoveProduct",
    "queryString" => "pid=$pid",
    "locale" => "en_US",
    "success" => true,
    "itemCount" => 2, // TODO do we need it?
    "listIsEmpty" => false,
    "type" => "remove",
    "pid" => $pid,
    "emptyWishlistMsg" => "",
    "msg" => "The product has been removed from your wish list."
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
    $rendered_html .= "<div class=\"product-zoom__item aspect-ratio--square\">\n
    <img src=\"{$img['url']}\" class=\"product-zoom__image component-overlay component-overlay--center object-fit--contain\" data-product-component=\"image-zoom\" data-image-index=\"0\" alt=\"{$product->name}\" itemprop=\"image\" />\n
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
    "renderedTemplate" => "\n\n<p class=\"product-zoom__label heading-type body-type font-weight--normal text-align--center set--w-100\">\n    Zoom\n</p>\n
          <div id=\"pdpZoom-null\" class=\"product-zoom flex set--w-100 bg--grey-1\" data-slick='{\"type\": \"zoomCarousel\", \"initialSlide\": {$start_index}}' data-product-component=\"image-gallery\" role=\"listbox\">\n
            $rendered_html
          </div>\n"
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
  $args = array(
    'offset' => $start,
    'limit' => 24,
    'category' => ['Jewelry'],
    'orderby' => 'meta_value_num',
    'meta_key' => '_price',
    'order' => 'asc'
  );
  $query = new WC_Product_Query( $args );

  $products = $query->get_products();

  // $products = wc_products_array_orderby( $products, 'price', 'ASC' );

  foreach ( $products as $product ) {
    echo SiellestHelper::render_product($product);
  }

  exit();
}

function search_showajax()
{
  header('Content-Type: text/html');

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
    'callback' => 'wishlist_addproduct'
  ));
  register_rest_route('siellest', 'wishlist-removeproduct', array(
    'methods' => 'GET, POST',
    'callback' => 'wishlist_removeproduct'
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
