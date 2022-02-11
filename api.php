<?php
  // ini_set('display_errors', 1); 
  // error_reporting(E_ALL);

require_once 'classes/Product.php';
require_once 'classes/Cart.php';
require_once 'classes/Checkout.php';

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
    'status' => ['publish'],
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

  echo "<main class='main'>";
  include 'template-parts/archive-product/main.php';
  echo "</main>";

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

function adyen_getpaymentmethods()
{
  return [
    "action" => "Adyen-GetPaymentMethods",
    "queryString" => "",
    "locale" => "en_US",
    "AdyenPaymentMethods" => [
      "paymentMethods" => [
        [
          "brands" => [
            "visa",
            "mc",
            "amex",
            "cup",
            "diners",
            "discover",
            "jcb",
            "maestro"
          ],
          "name" => "Credit Card",
          "type" => "scheme"
        ],
        [
          "configuration" => [
            "merchantId" => "Y2DVPLTZTTD6Q",
            "intent" => "authorize"
          ],
          "name" => "PayPal",
          "type" => "paypal"
        ]
      ]
    ],
    "ImagePath" => "https://checkoutshopper-live.adyen.com/checkoutshopper/images/logos/medium/",
    "AdyenDescriptions" => [
      [
        "brandCode" => "scheme",
        "description" => ""
      ],
      [
        "brandCode" => "paypal",
        "description" => ""
      ]
    ],
    "AdyenConnectedTerminals" => [],
    "amount" => [
      "value" => 8625,
      "currency" => "USD"
    ],
    "countryCode" => "US"
  ];
}

function adyen_paymentfromcomponent()
{
// data: {"riskData":{"clientData":"eyJ2ZXJzaW9uIjoiMS4wLjAiLCJkZXZpY2VGaW5nZXJwcmludCI6IkRwcXdVNHpFZE4wMDUwMDAwMDAwMDAwMDAwQVZ2eDlRRkYwTTAwMzkzNzI4NzA1V3BZV2lLekJHU2JsZHl1dWlTVEJpeDdSWDNhejgwMDJyS2tFSzFIYThQMDAwMDBZVnhFcjAwMDAwZktraG5yYVJoWGlaQ3FuSTRsc2s6NDAiLCJwZXJzaXN0ZW50Q29va2llIjpbXSwiY29tcG9uZW50cyI6eyJ1c2VyQWdlbnQiOiI3YWFhOGVmMThmYWEyNmIzNzc5ZGNiNDZkMzg0NmFiOSIsIndlYmRyaXZlciI6MCwibGFuZ3VhZ2UiOiJlbi1HQiIsImNvbG9yRGVwdGgiOjMwLCJkZXZpY2VNZW1vcnkiOjgsInBpeGVsUmF0aW8iOjIsImhhcmR3YXJlQ29uY3VycmVuY3kiOjgsInNjcmVlbldpZHRoIjo5MDAsInNjcmVlbkhlaWdodCI6MTQ0MCwiYXZhaWxhYmxlU2NyZWVuV2lkdGgiOjkwMCwiYXZhaWxhYmxlU2NyZWVuSGVpZ2h0IjoxNDQwLCJ0aW1lem9uZU9mZnNldCI6LTMwMCwidGltZXpvbmUiOiJBc2lhL0thcmFjaGkiLCJpbmRleGVkRGIiOjEsImFkZEJlaGF2aW9yIjowLCJvcGVuRGF0YWJhc2UiOjEsInBsYXRmb3JtIjoiTWFjSW50ZWwiLCJwbHVnaW5zIjoiMjljZjcxZTNkODFkNzRkNDNhNWIwZWI3OTQwNWJhODciLCJjYW52YXMiOiIxOTBiOTc4NWIyYTIyNWYxNWExYjNmMWQ5NDJiZDdlMSIsIndlYmdsIjoiOGMzYjU1MGNiZmRlMDYwNjAxNmJiYTBkZDFkZWRjYjgiLCJ3ZWJnbFZlbmRvckFuZFJlbmRlcmVyIjoiQXBwbGV+QXBwbGUgTTEiLCJhZEJsb2NrIjowLCJoYXNMaWVkTGFuZ3VhZ2VzIjowLCJoYXNMaWVkUmVzb2x1dGlvbiI6MCwiaGFzTGllZE9zIjowLCJoYXNMaWVkQnJvd3NlciI6MCwiZm9udHMiOiIyOTJlYTJjY2VjY2QwMmIwMWMwYzRjMWQ0MTMyMTc1ZSIsImF1ZGlvIjoiNTVmNjcxMjQ0MzRiMmRlNzEzMjIyNzlhZWYxNmUzNmIiLCJlbnVtZXJhdGVEZXZpY2VzIjoiOGVhMWY3YTQ1M2MwMjkxMTU4NmY5Zjg3ZWExZTY4ZmMifX0="},"paymentMethod":{"type":"paypal","subtype":"sdk"},"email":"falcone609@yopmail.com"}
// paymentMethod: PayPal
  return [
    "action" => "Adyen-PaymentFromComponent",
    "queryString" => "",
    "locale" => "en_US",
    "fullResponse" => [
      "resultCode" => "Pending",
      "action" => [
        "paymentData" => "Ab02b4c0!BQABAgBL3hns31P8zjAhhkw/2sNi3UVkfArS4XA08dqd2s7vOQG1XgykJlYxoM3JQMasgb+HHa+35AxopyLKgLd8qKX+K2oMqxS6YSNWClfCutbklDjrpPQWOczI1h9jLnEnaAkIgAt6HxCrxSBklVtKut7V3MPd+dm0AkLgpelAZNJwdx1sy+Y2LpXEgSz7Keo3tSjnnp53p7VKUU/vSDo/jJGfDplCRNlUh4juG48wQYBYt94KWopq/59MLHZR4u+Z8Fj9UTSUO34Rv9gDNjD8MHhmlMPOGT/HMbJF40BC9FolvXANZWazvtwqOF8vHy0DN5KCwEq/NhCXUTzl6chVaakraO9xRLYoVopV3BbVSYdHAS2mBbA/L1r/N3T/byf5Pew40Aw4DraQgvyzRyOImdHRpiTioXv/sFVgrsvpQ7Y6cLNAploSqM4xJqu4gEEQIiFCae7go8ItvUU/rBaw8eInZOVV1jXL1+bnss1vXC2k7Rhvfb+YpJl6zYy6W8QB9ud5gqVV1eudlZrkR/lONVo3Edn14N5z3rp006BuPyVyyAjZdtVgzk10Dvu65P5LZsG5voyMvgFs79paYAL/28jHZ7vy9Z4v4jQNqixdxSiOBO+50FVsLHDjqa2cxCObUdTmoSVbPypWrTg2w/PB4C6S38tCt321QUU67OhFTHsZgxDyx5hxsvtb2iXO7h8mram2AEp7ImtleSI6IkNDMkQ1Q0FEMEVDNjFDRDE0QUJCRkQyMThBMTFBNTE4QUFFNEMyNTI5MEZFOTlCN0MzMEJBNkMyOTJDNEZFQUYifUf9g31ih08n0maf5LRCB1VJQq8DZCdh0XZ0RCN3XSUMrRR57e50iaxHoL+v7HJw6H69ac9M/WKyulELyQcnaV1FKZAqNFdxEO03JrOezMW813reBzyDg0mwO503hiqp8jz3Df7hexdLCaZvIQkkI7UzmscqypDClsfCBN1aowa1K8iL0vXHbfmQhFtLNi9FC2DWfOSK+h5WN1et5Leh5QlXjG0Z9H5T6dnRt8jFGb1TnKFWU1tBEIV+P53EQdFdJcpKewWP1SONc5p+PuisQmDhcOKOA01Jyt5GSh0ey0/qFCcZCQC1QHalagh9y4NAPFqPAVs7ux1ZqocA1I5irQ+oaRdmYtdFc+HVjIcYBqgOTGJcFsbjC0V6so74KhhbrxlJByNPRfmsZiMyU+yNnf9SMQ5FQLyf+mk5/dqWCcoX0eDaXjcloeH3ZypTu0jmrapBhfbbnKfsT3fsfMNT0vzRvdFNhT01jlVfgcwAkhXaJ3i/M7kd3jXnxckCk3cd4c+e+ChUGEk6jcnnWWVCUDo57X7B6ECac4b57Mb7kKZp6NqJ8GnfHKDwfyEFxEqrSsHNuqDc0sZZuJdor1f4iI+INDjooXEORHvyqN4RCBYvS7dqltdgx498Rf5kTYlA5GchmUPQbxiBB3cxsvL6w2WmCCdCJdlpa6taD0r6V0RW4SB0r8gFCxFiYgorY711Psef8x/oWT7VmSonhzmV27pIPLmiRmfTZie7DO3dJAA+V88=",
        "paymentMethodType" => "paypal",
        "sdkData" => [
          "token" => "EC-3UM055208U0478057"
        ],
        "type" => "sdk"
      ]
    ],
    "redirectObject" => "",
    "resultCode" => "Pending",
    "pspReference" => "",
    "adyenAmount" => 749513,
    "decision" => "REFUSED",
    "adyenErrorMessage" => "confirm.error.declined",
    "orderNo" => "06371522",
    "orderToken" => "ZaE9eYJJJ1eeH9mec49DPuvJSN9decvwuJjvAKeubaE"
  ];

// data: {"cancelTransaction":true}
// paymentMethod: PayPal
// returns 500
  return [
    "action" => "Adyen-PaymentFromComponent",
    "queryString" => "",
    "locale" => "en_US",
    "tracking_consent" => null,
    "error" => [],
    "message" => "For technical reasons, your request could not be handled properly at this time. We apologize for any inconvenience."
  ];
}

function address_verification(WP_REST_Request $request)
{
// originalShipmentUUID: 7df82deaeef593fc2eb68c107d
// shipmentUUID: 7df82deaeef593fc2eb68c107d
// shipmentSelector: new
// dwfrm_shipping_shippingAddress_addressFields_usingVerifiedAddress: true
// dwfrm_shipping_shippingAddress_addressFields_salutations_salutation: mr
// dwfrm_shipping_shippingAddress_addressFields_firstName: Don
// dwfrm_shipping_shippingAddress_addressFields_lastName: Falcone
// dwfrm_shipping_shippingAddress_addressFields_address1: 230 5th Ave
// dwfrm_shipping_shippingAddress_addressFields_address2: 
// dwfrm_shipping_shippingAddress_addressFields_country_countryCode: US
// dwfrm_shipping_shippingAddress_addressFields_city_cityCode: Manhattan
// dwfrm_shipping_shippingAddress_addressFields_states_stateCode: NY
// dwfrm_shipping_shippingAddress_addressFields_postalCode_postalCode: 10001
// dwfrm_shipping_shippingAddress_addressFields_phone: +1 215-334-5135
// shipmentUUID: 7df82deaeef593fc2eb68c107d
// dwfrm_shipping_shippingAddress_shippingMethodID: SATD
// csrf_token: LJFL19Eh8CIV9_ZvkmR0KWmmuPZPi701prbnCYAxr99uWdYJZr8ghCtZxEJnMovGPUzwSmIygxdLu5TyB3OGXrpFoLqurVWArj3Va1Jg-gBipPIdBO6aQHrmR__-59T97KjczbZInvUzdwJ5nXCLxfQR3SXClBbFH5Ga4YJS2434rQ8xMJU=
// email: 

  $original_address = [
    "firstName"   => $request->get_param('dwfrm_shipping_shippingAddress_addressFields_firstName'),
    "lastName"    => $request->get_param('dwfrm_shipping_shippingAddress_addressFields_lastName'),
    "address1"    => $request->get_param('dwfrm_shipping_shippingAddress_addressFields_address1'),
    "address2"    => $request->get_param('dwfrm_shipping_shippingAddress_addressFields_address2'),
    "city"        => $request->get_param('dwfrm_shipping_shippingAddress_addressFields_city_cityCode'),
    "postalCode"  => $request->get_param('dwfrm_shipping_shippingAddress_addressFields_postalCode_postalCode'),
    "countryCode" => $request->get_param('dwfrm_shipping_shippingAddress_addressFields_country_countryCode'),
    "phone"       => $request->get_param('dwfrm_shipping_shippingAddress_addressFields_phone'),
    "stateCode"   => $request->get_param('dwfrm_shipping_shippingAddress_addressFields_states_stateCode')
  ];

  $verified = true;
  foreach($original_address as $key => $value) {
    if (array_search($key, ['address2']) != false && empty($value)) {
      $verified = false;
      break;
    }
  }

  if ($verified) {
    return [
      "action" => "Address-Verification",
      "queryString" => "",
      "locale" => "en_US",
      "success" => true,
      "recommendation" => false,
      "errorMessage" => "",
      "originalAddress" => $original_address,
      "renderedTemplate" => "
      <div class=\"address-verification flex flex-direction-col flex-grow-1\">
        <div class=\"address-verification__header\">
          <h2 class=\"modal__title fluid-type--kilo-h5 heading-type font-weight--semibold\">Verify your address</h2>
          <p class=\"modal__description\">Select one of the following recommended addresses</p>
        </div>
        <div class=\"modal__content\">
          <div class=\"row\">
            <div class=\"address-recommendation col-12 col-sm-6\">
              <input id=\"address-recommendation-option-0\" name=\"address-recommendation-option\" class=\"address-recommendation__option visually-hidden\" type=\"radio\" value=\"null\" data-verification-component=\"option\" />
              <label for=\"address-recommendation-option-0\" class=\"address-recommendation__summary flex-grow-1\">
                <h3 class=\"address-recommendation__title body-type--centi text--uppercase font-weight--bold\">Original</h3>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
              </label>
            </div>
            <div class=\"address-recommendation col-12 col-sm-6\">
              <input id=\"address-recommendation-option-1\" name=\"address-recommendation-option\" class=\"address-recommendation__option visually-hidden\" type=\"radio\" value=\"null\" data-verification-component=\"option\" />
              <label for=\"address-recommendation-option-1\" class=\"address-recommendation__summary flex-grow-1\">
                <h3 class=\"address-recommendation__title body-type--centi text--uppercase font-weight--bold\">Recommended</h3>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
              </label>
            </div>
            <div class=\"address-recommendation col-12 col-sm-6\">
              <input id=\"address-recommendation-option-2\" name=\"address-recommendation-option\" class=\"address-recommendation__option visually-hidden\" type=\"radio\" value=\"null\" data-verification-component=\"option\" />
              <label for=\"address-recommendation-option-2\" class=\"address-recommendation__summary flex-grow-1\">
                <h3 class=\"address-recommendation__title body-type--centi text--uppercase font-weight--bold\">Recommended</h3>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
              </label>
            </div>
            <div class=\"address-recommendation col-12 col-sm-6\">
              <input id=\"address-recommendation-option-3\" name=\"address-recommendation-option\" class=\"address-recommendation__option visually-hidden\" type=\"radio\" value=\"null\" data-verification-component=\"option\" />
              <label for=\"address-recommendation-option-3\" class=\"address-recommendation__summary flex-grow-1\"><h3 class=\"address-recommendation__title body-type--centi text--uppercase font-weight--bold\">Recommended</h3>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
                <p class=\"address-recommendation__line address-summary__details body-type--deci text--uppercase\">null</p>
              </label>
            </div>
          </div>
        </div>
        <div class=\"modal__actions\">
          <button class=\"address-verification__continue modal__action button button--primary set--w-100\" disabled=\"disabled\" title=\"Continue\" data-verification-component=\"continue\">Continue</button>
        </div>
      </div>"
    ];
  }

  return [
    "action" => "Address-Verification",
    "queryString" => "",
    "locale" => "en_US",
    "success" => false,
    "recommendations" => false,
    "errorMessage" => "We were unable to verify the address provided.<br/><br/>Using the address you entered may cause delays with delivery.",
    "originalAddress" => $original_address,
    "renderedTemplate" => "<div class=\"address-verification flex flex-direction-col flex-grow-1\">
      <div class=\"address-verification__header\">
        <h2 class=\"modal__title fluid-type--kilo-h5 heading-type font-weight--semibold\">Verify your address</h2>
      </div>
      <div class=\"modal__content\">
        We were unable to verify the address provided.<br/><br/>Using the address you entered may cause delays with delivery.
      </div>
      <div class=\"modal__actions\">
        <button type=\"button\" class=\"button button--secondary modal__action set--w-100\" data-modal-close aria-label=\"address\">Edit My Address</button>
      </div>
    </div>"
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

function test()
{
  $wc_countries = new WC_Countries();
  return $wc_countries->get_countries();
}

/* Register API routes */
add_action('rest_api_init', function () {
  register_rest_route('siellest', 'test', [
    'methods' => 'GET',
    'callback' => 'test'
  ]);
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
  register_rest_route('siellest', 'cart-togglegiftwrap', array(
    'methods' => 'POST',
    'callback' => 'Cart::cart_togglegiftwrap'
  ));

  register_rest_route('siellest', 'checkoutshippingservices-updateshippingmethodslist', [
    'methods' => 'POST',
    'callback' => 'Checkout::checkoutshippingservices_updateshippingmethodslist'
  ]);
  register_rest_route('siellest', 'checkoutshippingservices-selectshippingmethod', [
    'methods' => 'POST',
    'callback' => 'Checkout::checkoutshippingservices_selectshippingmethod'
  ]);
  register_rest_route('siellest', 'address-verification', [
    'methods' => 'POST',
    'callback' => 'address_verification'
  ]);
  register_rest_route('siellest', 'adyen-getpaymentmethods', [
    'methods' => 'GET',
    'callback' => 'adyen_getpaymentmethods'
  ]);
  register_rest_route('siellest', 'address-verification', [
    'methods' => 'GET',
    'callback' => 'address_verification'
  ]);
  register_rest_route('siellest', 'checkoutshippingservices-submitshipping', [
    'methods' => 'POST',
    'callback' => 'Checkout::checkoutshippingservices_submitshipping'
  ]);
  register_rest_route('siellest', 'checkoutservices-submitpayment', [
    'methods' => 'POST',
    'callback' => 'Checkout::checkoutservices_submitpayment'
  ]);
  register_rest_route('siellest', 'checkoutservices-placeorder', [
    'methods' => 'POST',
    'callback' => 'Checkout::checkoutservices_placeorder'
  ]);

  register_rest_route('siellest', 'product-showquickview', array(
    'methods' => 'GET',
    'callback' => 'Product::product_showquickview'
  ));
  register_rest_route('siellest', 'product-zoom', array(
    'methods' => 'GET, POST',
    'callback' => 'Product::product_zoom'
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
