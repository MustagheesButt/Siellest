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

/* Admin functions */
function import_starter_content()
{
  include 'inc/import-starter-content.php';

  if (
    create_pages() &&
    create_menus() &&
    create_product_categories() &&
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
