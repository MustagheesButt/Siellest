<?php

class Checkout
{
  static function checkoutshippingservices_updateshippingmethodslist(WP_REST_Request $request)
  {
    $salutation = $request->get_param('salutation');
    $first_name = $request->get_param('firstName');
    $last_name = $request->get_param('lastName');
    $address1 = $request->get_param('address1');
    $address2 = $request->get_param('address2');
    $city = $request->get_param('city');
    $postal_code = $request->get_param('postalCode');
    $state_code = $request->get_param('stateCode');
    $country_code = $request->get_param('countryCode');
    $phone = $request->get_param('phone');
    $shipping_uuid = $request->get_param('shipmentUUID');
    // other params I dont know what to do of: usingVerifiedAddress, lat, lng

    $customer = WC()->customer;
    WC()->session->set('shipping_salutation', $salutation);
    $customer->set_shipping_first_name($first_name);
    $customer->set_shipping_last_name($last_name);
    $customer->set_shipping_location($country_code, $state_code, $postal_code, $city);
    $customer->set_shipping_address_1($address1);
    $customer->set_shipping_address_2($address2);
    WC()->cart->calculate_totals();

    return [
      "action" => "CheckoutShippingServices-UpdateShippingMethodsList",
      "queryString" => "",
      "locale" => "en_US",
      "customer" => [
        "profile" => null,
        "addresses" => [],
        "preferredAddress" => null,
        "payment" => null,
        "registeredUser" => false,
        "isExternallyAuthenticated" => false,
        "customerPaymentInstruments" => null
      ],
      "order" => Checkout::get_order_details($shipping_uuid),
      "shippingForm" => Checkout::shipping_form($customer)
    ];
  }

  static function checkoutshippingservices_selectshippingmethod(WP_REST_Request $request)
  {
    $salutation = $request->get_param('salutation');
    $first_name = $request->get_param('firstName');
    $last_name = $request->get_param('lastName');
    $address1 = $request->get_param('address1');
    $address2 = $request->get_param('address2');
    $city = $request->get_param('city');
    $postal_code = $request->get_param('postalCode');
    $state_code = $request->get_param('stateCode');
    $country_code = $request->get_param('countryCode');
    $phone = $request->get_param('phone');
    $shipping_uuid = $request->get_param('shipmentUUID');
    $shipping_method_id = $request->get_param('methodID');
    // other params I dont know what to do of: usingVerifiedAddress

    $customer = WC()->customer;
    $customer->set_shipping_first_name($first_name);
    $customer->set_shipping_last_name($last_name);
    $customer->set_shipping_location($country_code, $state_code, $postal_code, $city);
    $customer->set_shipping_address_1($address1);
    $customer->set_shipping_address_2($address2);
    $customer->set_shipping_phone($phone);
    
    WC()->session->set('shipping_salutation', $salutation);
    WC()->session->set('chosen_shipping_methods', [$shipping_method_id]);

    WC()->cart->calculate_totals();

    if (true) {
      return [
        "action" => "CheckoutShippingServices-SelectShippingMethod",
        "queryString" => "",
        "locale" => "en_US",
        "address" => [
          "firstName" => $first_name,
          "lastName" => $last_name,
          "address1" => $address1,
          "city" => $city,
          "stateCode" => $state_code,
          "postalCode" => $postal_code,
          "countryCode" => $country_code,
          "phone" => $phone
        ],
        "isGift" => false,
        "giftMessage" => null,
        "customer" => [
          "profile" => null,
          "addresses" => [],
          "preferredAddress" => null,
          "payment" => null,
          "registeredUser" => false,
          "isExternallyAuthenticated" => false,
          "customerPaymentInstruments" => null
        ],
        "order" => Checkout::get_order_details($shipping_uuid)
      ];
    } else {
      return [
        "action" => "CheckoutShippingServices-SelectShippingMethod",
        "queryString" => "",
        "locale" => "en_US",
        "tracking_consent" => null,
        "error" => [],
        "message" => "For technical reasons, your request could not be handled properly at this time. We apologize for any inconvenience."
      ];
    }
  }

  function adyen_showconfirmationpaymentfromcomponent()
  {
  }

  static function checkoutshippingservices_submitshipping(WP_REST_Request $request)
  {
    $salutation = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_salutations_salutation');
    $first_name = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_firstName');
    $last_name = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_lastName');
    $address1 = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_address1');
    $address2 = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_address2');
    $city = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_city_cityCode');
    $postal_code = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_postalCode_postalCode');
    $state_code = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_states_stateCode');
    $country_code = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_country_countryCode');
    $phone = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_phone');
    $shipping_uuid = $request->get_param('shipmentUUID');
    $shipping_method_id = $request->get_param('dwfrm_shipping_shippingAddress_shippingMethodID');
    // other params I dont know what to do of: originalShipmentUUID, shipmentSelector, dwfrm_shipping_shippingAddress_addressFields_usingVerifiedAddress, csrf_token, email

    $customer = WC()->customer;
    $customer->set_billing_first_name($first_name);
    $customer->set_billing_last_name($last_name);
    $customer->set_billing_location($country_code, $state_code, $postal_code, $city);
    $customer->set_billing_address_1($address1);
    $customer->set_billing_address_2($address2);
    $customer->set_billing_phone($phone);
    
    WC()->session->set('billing_salutation', $salutation);
    WC()->session->set('shipping_uuid', $shipping_uuid);
    WC()->session->set('chosen_shipping_methods', [$shipping_method_id]);
    // For some reason, billing country and state doesnt gets submitted at next stage
    WC()->session->set('billing_country', $country_code);
    WC()->session->set('billing_state', $state_code);

    return [
      "action" => "CheckoutShippingServices-SubmitShipping",
      "queryString" => "",
      "locale" => "en_US",
      "address" => [
        "firstName" => $first_name,
        "lastName" => $last_name,
        "address1" => $address1,
        "address2" => $address2,
        "city" => $city,
        "postalCode" => $postal_code,
        "countryCode" => $country_code,
        "phone" => $phone,
        "stateCode" => $state_code,
        "salutation" => $salutation,
        "honoraryTitle" => "",
        "customFirstName" => "",
        "customLastName" => ""
      ],
      "shippingBillingSame" => false,
      "shippingMethod" => $shipping_method_id,
      "isGift" => false,
      "giftMessage" => null,
      "giftMessageFont" => "",
      "customer" => [
        "profile" => null,
        "addresses" => [],
        "preferredAddress" => null,
        "payment" => null,
        "registeredUser" => false,
        "isExternallyAuthenticated" => false,
        "customerPaymentInstruments" => null
      ],
      "order" => Checkout::get_order_details($shipping_uuid, true),
      "form" => Checkout::shipping_form($customer)
    ];
  }

  static function checkoutservices_submitpayment(WP_REST_Request $request)
  {
// adyenIssuerName: 
// dwfrm_billing_adyenPaymentFields_issuer: 
// brandCode: scheme

    $salutation = $request->get_param('dwfrm_billing_addressFields_salutations_salutation');
    $first_name = $request->get_param('dwfrm_billing_addressFields_firstName');
    $last_name = $request->get_param('dwfrm_billing_addressFields_lastName');
    $address1 = $request->get_param('dwfrm_billing_addressFields_address1');
    $address2 = $request->get_param('dwfrm_billing_addressFields_address2');
    $city = $request->get_param('dwfrm_billing_addressFields_city_cityCode');
    $postal_code = $request->get_param('dwfrm_billing_addressFields_postalCode_postalCode');
    $state_code = $request->get_param('dwfrm_billing_addressFields_states_stateCode');
    $country_code = $request->get_param('dwfrm_billing_addressFields_country_countryCode');
    $phone = $request->get_param('dwfrm_billing_addressFields_phone');
    $email = $request->get_param('dwfrm_billing_contactInfoFields_email');
    $add_to_email_list = $request->get_param('dwfrm_shipping_shippingAddress_addressFields_addtoemaillist');
    // other params csrf_token, addressSelector

    $billing_payment_method = $request->get_param('dwfrm_billing_paymentMethod: AdyenComponent');
    $adyen_payment_method = $request->get_param('adyenPaymentMethd');
    $adyen_state_data = $request->get_param('dwfrm_billing_adyenPaymentFields_adyenStateData');
    $adyen_fingerprint = $request->get_param('dwfrm_billing_adyenPaymentFields_adyenFingerprint');
    $card_number = $request->get_param('dwfrm_billing_creditCardFields_cardNumber');
    $card_type = $request->get_param('dwfrm_billing_creditCardFields_cardType');

    if (empty($country_code)) {
      $country_code = WC()->session->get('billing_country');
    }
    if (empty($state_code)) {
      $state_code = WC()->session->get('billing_state');
    }

    $customer = WC()->customer;
    $customer->set_billing_first_name($first_name);
    $customer->set_billing_last_name($last_name);
    $customer->set_billing_location($country_code, $state_code, $postal_code, $city);
    $customer->set_billing_address_1($address1);
    $customer->set_billing_address_2($address2);
    $customer->set_billing_phone($phone);
    $customer->set_billing_email($email);

    WC()->session->set('billing_salutation', $salutation);
    $shipping_uuid = WC()->session->get('shipping_uuid');
    
    $payment_instruments = [
      [
        "paymentMethod" => "AdyenComponent",
        "amount" => 7314,
        "formatted" => "$7,314.00",
        "name" => "Credit Card",
        "selectedAdyenPM" => "Credit Card",
        "lastFour" => "5454",
        "owner" => null,
        "expirationYear" => null,
        "type" => "Mastercard",
        "maskedCreditCardNumber" => "************5454",
        "expirationMonth" => null
      ]
    ];

    $order_details = Checkout::get_order_details($shipping_uuid, true, $payment_instruments);
    $order_id = WC()->checkout->create_order([]);
    $order = wc_get_order($order_id);
    WC()->session->set('order_id', $order_id);
    $order->set_customer_id(get_current_user_id());

    $customer = WC()->customer;
    $order->set_shipping_first_name($customer->get_shipping_first_name());
    $order->set_shipping_last_name($customer->get_shipping_last_name());
    $order->set_shipping_address_1($customer->get_shipping_address_1());
    $order->set_shipping_address_2($customer->get_shipping_address_2());
    $order->set_shipping_state($customer->get_shipping_state());
    $order->set_shipping_city($customer->get_shipping_city());
    $order->set_shipping_country($customer->get_shipping_country());
    $order->set_shipping_postcode($customer->get_shipping_postcode());
    $order->set_shipping_phone($customer->get_shipping_phone());

    $order->set_billing_first_name($customer->get_billing_first_name());
    $order->set_billing_last_name($customer->get_billing_last_name());
    $order->set_billing_address_1($customer->get_billing_address_1());
    $order->set_billing_address_2($customer->get_billing_address_2());
    $order->set_billing_state($customer->get_billing_state());
    $order->set_billing_city($customer->get_billing_city());
    $order->set_billing_country($customer->get_billing_country());
    $order->set_billing_postcode($customer->get_billing_postcode());
    $order->set_billing_phone($customer->get_billing_phone());
    $order->set_billing_email($customer->get_billing_email());

    $selected_shipping_method_id = WC()->session->get('chosen_shipping_methods')[0];
    $shipping = new WC_Order_Item_Shipping();
    $shipping->set_method_title( "Express Delivery" ); // TODO: use correct title
    $shipping->set_method_id($selected_shipping_method_id);
    $shipping->set_total( WC()->cart->get_shipping_total() );
    $shipping->calculate_taxes([
      'country' => $customer->get_shipping_country(),
      'state' => $customer->get_shipping_state(),
      'postcode' => $customer->get_shipping_postcode(),
      'city' => $customer->get_shipping_city()
    ]);
    $order->add_item($shipping);

    $order->calculate_totals();
    // $order->save();
    // $order->payment_complete();

    return [
      "action" => "CheckoutServices-SubmitPayment",
      "queryString" => "",
      "locale" => "en_US",
      "address" => [
        "firstName" => [
          "value" => $first_name
        ],
        "lastName" => [
          "value" => $last_name
        ],
        "honoraryTitle" => [
          "value" => null
        ],
        "customFirstName" => [
          "value" => null
        ],
        "customLastName" => [
          "value" => null
        ],
        "address1" => [
          "value" => $address1
        ],
        "address2" => [
          "value" => $address2
        ],
        "city" => [
          "value" => $city
        ],
        "postalCode" => [
          "value" => $postal_code
        ],
        "countryCode" => [
          "value" => $country_code
        ],
        "phone" => [
          "value" => $phone
        ],
        "salutation" => [
          "value" => $salutation
        ],
        "taxCode" => [],
        "stateCode" => [
          "value" => $state_code
        ]
      ],
      "email" => [
        "value" => null
      ],
      "phone" => [
        "value" => null
      ],
      "paymentMethod" => [
        "value" => "AdyenComponent",
        "htmlName" => "AdyenComponent"
      ],
      "storedPaymentUUID" => null,
      "saveCard" => false,
      "renderedPaymentInstruments" => null,
      "customer" => [
        "profile" => null,
        "addresses" => [],
        "preferredAddress" => null,
        "payment" => null,
        "registeredUser" => false,
        "isExternallyAuthenticated" => false,
        "customerPaymentInstruments" => null
      ],
      "order" => $order_details,
      "form" => Checkout::billing_form(),
      "error" => false
    ];

    return [
      "action" => "CheckoutServices-SubmitPayment",
      "queryString" => "",
      "locale" => "en_US",
      "tracking_consent" => null,
      "error" => [],
      "message" => "For technical reasons, your request could not be handled properly at this time. We apologize for any inconvenience."
    ];
  }

  static function checkoutservices_placeorder()
  {
    $order = wc_get_order(WC()->session->get('order_id'));
    $order_total = $order->get_total() * 100;

    $client = new \Adyen\Client();

    $client->setXApiKey(ADYEN_KEY);
    $client->setEnvironment(\Adyen\Environment::TEST);
    $client->setTimeout(30);

    $service = new \Adyen\Service\Checkout($client);

    $json = '{
      "paymentMethod": {
        "type": "scheme",
        "encryptedCardNumber": "test_4111111111111111",
        "encryptedExpiryMonth": "test_03",
        "encryptedExpiryYear": "test_2030",
        "encryptedSecurityCode": "test_737"
      },
      "amount": {
        "value": ' . $order_total . ',
        "currency": "' . $order->get_currency() . '"
      },
      "reference": "' . $order->get_order_number() . '",
      "merchantAccount": "' . MERCHANT_ACC . '"
    }';

    $params = json_decode($json, true);

    try {
      $result = $service->payments($params);

      if ($result['resultCode'] == "Authorised") {
        $order->payment_complete();
        WC()->cart->empty_cart();
        return [
          "action" => "CheckoutServices-PlaceOrder",
          "queryString" => "",
          "locale" => "en_US",
          "error" => false,
          "continueUrl" => 'account',
          "ID" => $order->get_id(),
          "orderToken" => $order->get_order_number()
        ];
      } else {
        $errorMsg = "Something went wrong";
        // $errorMsg = "Please contact your bank before reattempting purchase with this method of payment.";
      }
    } catch (Adyen\AdyenException $e) {
        $errorMsg = $e->getMessage();
    }

    return [
      "action" => "CheckoutServices-PlaceOrder",
      "queryString" => "",
      "locale" => "en_US",
      "error" => true,
      "errorMessage" => $errorMsg
    ];
  }

  /* Helpers */
  static function shipping_form($customer)
  {
    $shipping_salutation = WC()->session->get('shipping_salutation');
    $selected_shipping_method = WC()->session->get('chosen_shipping_methods')[0];
    $state_code = $customer->get_shipping_state();

    return [
      "valid" => true,
      "htmlName" => "dwfrm_shipping",
      "dynamicHtmlName" => "dwfrm_shipping_d0svmfxznrng",
      "error" => "address.invalid",
      "attributes" => "name = \"dwfrm_shipping\" id = \"dwfrm_shipping\"",
      "formType" => "formGroup",
      "shipmentUUID" => [
        "htmlValue" => "",
        "mandatory" => "",
        "dynamicHtmlName" => "dwfrm_shipping_shipmentUUID_d0aowstdgrdn",
        "htmlName" => "dwfrm_shipping_shipmentUUID",
        "valid" => true,
        "maxLength" => 2147483647,
        "minLength" => 0,
        "regEx" => null,
        "formType" => "formField"
      ],
      "productLineItemUUID" => [
        "htmlValue" => "",
        "mandatory" => "",
        "dynamicHtmlName" => "dwfrm_shipping_productLineItemUUID_d0zrnedyxxzo",
        "htmlName" => "dwfrm_shipping_productLineItemUUID",
        "valid" => true,
        "maxLength" => 2147483647,
        "minLength" => 0,
        "regEx" => null,
        "formType" => "formField"
      ],
      "shippingAddress" => [
        "valid" => true,
        "htmlName" => "dwfrm_shipping_shippingAddress",
        "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_d0xfhjatxaam",
        "error" => "address.invalid",
        "attributes" => "name = \"dwfrm_shipping_shippingAddress\" id = \"dwfrm_shipping_shippingAddress\"",
        "formType" => "formGroup",
        "addressFields" => [
          "valid" => true,
          "htmlName" => "dwfrm_shipping_shippingAddress_addressFields",
          "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_d0zlofmyuhjl",
          "error" => null,
          "attributes" => "name = \"dwfrm_shipping_shippingAddress_addressFields\" id = \"dwfrm_shipping_shippingAddress_addressFields\"",
          "formType" => "formGroup",
          "addressId" => [
            "htmlValue" => "",
            "mandatory" => true,
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_addressId_d0pgktsflqlj",
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_addressId",
            "valid" => true,
            "label" => "Address Title",
            "maxLength" => 2147483647,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ],
          "honoraryTitle" => [
            "htmlValue" => "",
            "mandatory" => "",
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_honoraryTitle_d0lkdlnsvnky",
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_honoraryTitle",
            "valid" => true,
            "label" => "Other Title",
            "maxLength" => 2147483647,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ],
          "firstName" => [
            "htmlValue" => $customer->get_shipping_first_name(),
            "mandatory" => true,
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_firstName_d0hqzgjtqffr",
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_firstName",
            "valid" => true,
            "label" => "First Name",
            "maxLength" => 40,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ],
          "lastName" => [
            "htmlValue" => $customer->get_shipping_last_name(),
            "mandatory" => true,
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_lastName_d0wuvegbpmma",
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_lastName",
            "valid" => true,
            "label" => "Last Name",
            "maxLength" => 40,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ],
          "address1" => [
            "htmlValue" => $customer->get_shipping_address_1(),
            "mandatory" => true,
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_address1_d0xhzyvvgcch",
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_address1",
            "valid" => true,
            "label" => "Address Line 1",
            "maxLength" => 60,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ],
          "address2" => [
            "htmlValue" => $customer->get_shipping_address_2(),
            "mandatory" => "",
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_address2_d0gwkjklpuyc",
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_address2",
            "valid" => true,
            "label" => "Address Line 2",
            "maxLength" => 40,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ],
          "city" => [
            "valid" => true,
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_city",
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_city_d0rrmdxxcuel",
            "error" => null,
            "attributes" => "name = \"dwfrm_shipping_shippingAddress_addressFields_city\" id = \"dwfrm_shipping_shippingAddress_addressFields_city\"",
            "formType" => "formGroup",
            "cityCode" => [
              "htmlValue" => $customer->get_shipping_city(),
              "mandatory" => true,
              "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_city_cityCode_d0fifdmbdysu",
              "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_city_cityCode",
              "valid" => true,
              "label" => "City",
              "maxLength" => 40,
              "minLength" => 0,
              "regEx" => null,
              "formType" => "formField"
            ]
          ],
          "salutations" => [
            "valid" => true,
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_salutations",
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_salutations_d0ovlxljxvzl",
            "error" => null,
            "attributes" => "name = \"dwfrm_shipping_shippingAddress_addressFields_salutations\" id = \"dwfrm_shipping_shippingAddress_addressFields_salutations\"",
            "formType" => "formGroup",
            "salutation" => [
              "htmlValue" => "ms",
              "mandatory" => true,
              "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_salutations_salutation_d0viutqdlkci",
              "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_salutations_salutation",
              "valid" => true,
              "label" => "Title",
              "options" => Checkout::get_salutation_options($shipping_salutation),
              "selectedOption" => $shipping_salutation,
              "maxLength" => 2147483647,
              "minLength" => 0,
              "regEx" => null,
              "formType" => "formField"
            ]
          ],
          "customnames" => [
            "valid" => true,
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_customnames",
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_customnames_d0ksuhngcfru",
            "error" => null,
            "attributes" => "name = \"dwfrm_shipping_shippingAddress_addressFields_customnames\" id = \"dwfrm_shipping_shippingAddress_addressFields_customnames\"",
            "formType" => "formGroup",
            "firstname" => [
              "htmlValue" => "",
              "mandatory" => "",
              "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_customnames_firstname_d0nlqdwkvqgw",
              "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_customnames_firstname",
              "valid" => true,
              "label" => "الاسم الأوّل",
              "maxLength" => 27,
              "minLength" => 0,
              "regEx" => null,
              "formType" => "formField"
            ],
            "lastname" => [
              "htmlValue" => "",
              "mandatory" => "",
              "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_customnames_lastname_d0hsmlsyfiiu",
              "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_customnames_lastname",
              "valid" => true,
              "label" => "اسم العائلة",
              "maxLength" => 32,
              "minLength" => 0,
              "regEx" => null,
              "formType" => "formField"
            ]
          ],
          "postalCode" => [
            "valid" => true,
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_postalCode",
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_postalCode_d0yyidslhqpt",
            "error" => null,
            "attributes" => "name = \"dwfrm_shipping_shippingAddress_addressFields_postalCode\" id = \"dwfrm_shipping_shippingAddress_addressFields_postalCode\"",
            "formType" => "formGroup",
            "postalCode" => [
              "htmlValue" => $customer->get_shipping_postcode(),
              "mandatory" => "",
              "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_postalCode_postalCode_d0dwzezhjvbi",
              "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_postalCode_postalCode",
              "valid" => true,
              "label" => "Zip Code",
              "maxLength" => 10,
              "minLength" => 0,
              "regEx" => "^[\\w\\s-]*$",
              "formType" => "formField"
            ]
          ],
          "country" => [
            "valid" => true,
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_country",
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_country_d0xvksdvfrlg",
            "error" => null,
            "attributes" => "name = \"dwfrm_shipping_shippingAddress_addressFields_country\" id = \"dwfrm_shipping_shippingAddress_addressFields_country\"",
            "formType" => "formGroup",
            "countryCode" => [
              "htmlValue" => $customer->get_shipping_country(),
              "mandatory" => true,
              "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_country_countryCode_d0aqtimoayau",
              "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_country_countryCode",
              "valid" => true,
              "label" => "Country",
              "options" => [
                [
                  "checked" => true,
                  "htmlValue" => "US",
                  "label" => "United States",
                  "id" => "US",
                  "selected" => true,
                  "value" => "US"
                ]
              ],
              "selectedOption" => $customer->get_shipping_country(),
              "maxLength" => 2147483647,
              "minLength" => 0,
              "regEx" => null,
              "formType" => "formField"
            ]
          ],
          "states" => [
            "valid" => true,
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_states",
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_states_d0oqstxdlbvn",
            "error" => null,
            "attributes" => "name = \"dwfrm_shipping_shippingAddress_addressFields_states\" id = \"dwfrm_shipping_shippingAddress_addressFields_states\"",
            "formType" => "formGroup",
            "stateCode" => [
              "htmlValue" => $state_code,
              "mandatory" => "",
              "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_states_stateCode_d0ugdhgpqzxv",
              "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_states_stateCode",
              "valid" => true,
              "label" => "State",
              "options" => Checkout::state_options($state_code),
              "selectedOption" => $state_code,
              "maxLength" => 2147483647,
              "minLength" => 0,
              "regEx" => null,
              "formType" => "formField"
            ]
          ],
          "phone" => [
            "htmlValue" => $customer->get_shipping_phone(),
            "mandatory" => true,
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_phone_d0fmylxzjvwp",
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_phone",
            "valid" => true,
            "description" => "address.phone.example",
            "label" => "Telephone",
            "maxLength" => 30,
            "minLength" => 10,
            "regEx" => null,
            "formType" => "formField"
          ],
          "usingVerifiedAddress" => [
            "htmlValue" => "true",
            "mandatory" => "",
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_usingVerifiedAddress_d0rhlgcubjyc",
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_usingVerifiedAddress",
            "valid" => true,
            "checked" => true,
            "selected" => true,
            "formType" => "formField"
          ],
          "addtoemaillist" => [
            "htmlValue" => "true",
            "mandatory" => "",
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_addressFields_addtoemaillist_d0tevgzoffjx",
            "htmlName" => "dwfrm_shipping_shippingAddress_addressFields_addtoemaillist",
            "valid" => true,
            "label" => "I would also like to receive marketing information about Cartier’s products or services.",
            "checked" => false,
            "selected" => false,
            "formType" => "formField"
          ],
          "apply" => [
            "description" => null,
            "label" => null,
            "submitted" => false,
            "triggered" => false,
            "formType" => "formAction"
          ],
          "remove" => [
            "description" => null,
            "label" => null,
            "submitted" => false,
            "triggered" => false,
            "formType" => "formAction"
          ]
        ],
        "contactInfoFields" => [
          "valid" => true,
          "htmlName" => "dwfrm_shipping_shippingAddress_contactInfoFields",
          "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_contactInfoFields_d0tdlycmahgr",
          "error" => null,
          "attributes" => "name = \"dwfrm_shipping_shippingAddress_contactInfoFields\" id = \"dwfrm_shipping_shippingAddress_contactInfoFields\"",
          "formType" => "formGroup",
          "email" => [
            "htmlValue" => "",
            "mandatory" => true,
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_contactInfoFields_email_d0xxfxpmassu",
            "htmlName" => "dwfrm_shipping_shippingAddress_contactInfoFields_email",
            "valid" => true,
            "label" => "profile.email",
            "maxLength" => 50,
            "minLength" => 0,
            "regEx" => "^[\\w.%+-]+@[\\w.-]+\\.[\\w]{2,6}$",
            "formType" => "formField"
          ],
          "phone" => [
            "htmlValue" => "",
            "mandatory" => true,
            "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_contactInfoFields_phone_d0mcvsxuotmc",
            "htmlName" => "dwfrm_shipping_shippingAddress_contactInfoFields_phone",
            "valid" => true,
            "description" => "address.phone.example",
            "label" => "profile.phone",
            "maxLength" => 20,
            "minLength" => 10,
            "regEx" => null,
            "formType" => "formField"
          ]
        ],
        "subscribe" => [
          "htmlValue" => "true",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_subscribe_d0cztwubrohj",
          "htmlName" => "dwfrm_shipping_shippingAddress_subscribe",
          "valid" => true,
          "checked" => false,
          "selected" => false,
          "formType" => "formField"
        ],
        "shippingMethodID" => [
          "htmlValue" => $selected_shipping_method,
          "mandatory" => true,
          "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_shippingMethodID_d0kjvgwumfjo",
          "htmlName" => "dwfrm_shipping_shippingAddress_shippingMethodID",
          "valid" => true,
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "shippingAddressUseAsBillingAddress" => [
          "htmlValue" => "true",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_shippingAddressUseAsBillingAddress_d0fjadcmtrag",
          "htmlName" => "dwfrm_shipping_shippingAddress_shippingAddressUseAsBillingAddress",
          "valid" => true,
          "label" => "checkout.shippingAddressUseAsBillingAddress",
          "checked" => false,
          "selected" => false,
          "formType" => "formField"
        ],
        "isGift" => [
          "htmlValue" => "true",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_isGift_d0snhtbzcctf",
          "htmlName" => "dwfrm_shipping_shippingAddress_isGift",
          "valid" => true,
          "label" => "This is a gift.",
          "checked" => false,
          "selected" => false,
          "formType" => "formField"
        ],
        "giftMessageFont" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_giftMessageFont_d0heidemzrkc",
          "htmlName" => "dwfrm_shipping_shippingAddress_giftMessageFont",
          "valid" => true,
          "label" => "Select a style (Required)",
          "options" => [
            [
              "checked" => false,
              "htmlValue" => "Regular",
              "label" => "Regular",
              "id" => "styleregular",
              "selected" => false,
              "value" => "Regular"
            ],
            [
              "checked" => false,
              "htmlValue" => "Cursive",
              "label" => "Cursive",
              "id" => "stylecursive",
              "selected" => false,
              "value" => "Cursive"
            ]
          ],
          "selectedOption" => "",
          "maxLength" => 100,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "giftMessage" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_shipping_shippingAddress_giftMessage_d0errtjtoikr",
          "htmlName" => "dwfrm_shipping_shippingAddress_giftMessage",
          "valid" => true,
          "label" => "Add your gift message, 125 chars max",
          "maxLength" => 125,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "save" => [
          "description" => null,
          "label" => null,
          "submitted" => false,
          "triggered" => false,
          "formType" => "formAction"
        ]
      ],
      "base" => []
    ];
  }

  static function billing_form()
  {
    $salutation = WC()->session->get('billing_salutation');
    $add_to_email_list = WC()->session->get('add_to_email_list');
    $country = WC()->customer->get_billing_country();
    $state = WC()->customer->get_billing_state();

    return [
      "valid" => true,
      "htmlName" => "dwfrm_billing",
      "dynamicHtmlName" => "dwfrm_billing_d0uslvnoatwf",
      "error" => null,
      "attributes" => "name = \"dwfrm_billing\" id = \"dwfrm_billing\"",
      "formType" => "formGroup",
      "shippingAddressUseAsBillingAddress" => [
        "htmlValue" => "true",
        "mandatory" => "",
        "dynamicHtmlName" => "dwfrm_billing_shippingAddressUseAsBillingAddress_d0fmhpoxkxpc",
        "htmlName" => "dwfrm_billing_shippingAddressUseAsBillingAddress",
        "valid" => true,
        "label" => "profile.billingSameAsShipping",
        "checked" => false,
        "selected" => false,
        "formType" => "formField"
      ],
      "addressFields" => [
        "valid" => true,
        "htmlName" => "dwfrm_billing_addressFields",
        "dynamicHtmlName" => "dwfrm_billing_addressFields_d0ehyijxhbtr",
        "error" => null,
        "attributes" => "name = \"dwfrm_billing_addressFields\" id = \"dwfrm_billing_addressFields\"",
        "formType" => "formGroup",
        "addressId" => [
          "htmlValue" => "",
          "mandatory" => true,
          "dynamicHtmlName" => "dwfrm_billing_addressFields_addressId_d0paenfawbjp",
          "htmlName" => "dwfrm_billing_addressFields_addressId",
          "valid" => true,
          "label" => "Address Title",
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "honoraryTitle" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_addressFields_honoraryTitle_d0djuhkbwode",
          "htmlName" => "dwfrm_billing_addressFields_honoraryTitle",
          "valid" => true,
          "label" => "Other Title",
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "firstName" => [
          "htmlValue" => WC()->customer->get_billing_first_name(),
          "mandatory" => true,
          "dynamicHtmlName" => "dwfrm_billing_addressFields_firstName_d0xjexrxecgd",
          "htmlName" => "dwfrm_billing_addressFields_firstName",
          "valid" => true,
          "label" => "First Name",
          "maxLength" => 27,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "lastName" => [
          "htmlValue" => WC()->customer->get_billing_last_name(),
          "mandatory" => true,
          "dynamicHtmlName" => "dwfrm_billing_addressFields_lastName_d0hdpbajkygj",
          "htmlName" => "dwfrm_billing_addressFields_lastName",
          "valid" => true,
          "label" => "Last Name",
          "maxLength" => 32,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "address1" => [
          "htmlValue" => WC()->customer->get_billing_address_1(),
          "mandatory" => true,
          "dynamicHtmlName" => "dwfrm_billing_addressFields_address1_d0zjueswoxjy",
          "htmlName" => "dwfrm_billing_addressFields_address1",
          "valid" => true,
          "label" => "Address Line 1",
          "maxLength" => 60,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "address2" => [
          "htmlValue" => WC()->customer->get_billing_address_2(),
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_addressFields_address2_d0mffmwjyeva",
          "htmlName" => "dwfrm_billing_addressFields_address2",
          "valid" => true,
          "label" => "Address Line 2",
          "maxLength" => 40,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "city" => [
          "valid" => true,
          "htmlName" => "dwfrm_billing_addressFields_city",
          "dynamicHtmlName" => "dwfrm_billing_addressFields_city_d0xdzjbpozsr",
          "error" => null,
          "attributes" => "name = \"dwfrm_billing_addressFields_city\" id = \"dwfrm_billing_addressFields_city\"",
          "formType" => "formGroup",
          "cityCode" => [
            "htmlValue" => WC()->customer->get_billing_city(),
            "mandatory" => true,
            "dynamicHtmlName" => "dwfrm_billing_addressFields_city_cityCode_d0sovwoivlds",
            "htmlName" => "dwfrm_billing_addressFields_city_cityCode",
            "valid" => true,
            "label" => "City",
            "maxLength" => 40,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ]
        ],
        "salutations" => [
          "valid" => true,
          "htmlName" => "dwfrm_billing_addressFields_salutations",
          "dynamicHtmlName" => "dwfrm_billing_addressFields_salutations_d0nvjdyiidrb",
          "error" => null,
          "attributes" => "name = \"dwfrm_billing_addressFields_salutations\" id = \"dwfrm_billing_addressFields_salutations\"",
          "formType" => "formGroup",
          "salutation" => [
            "htmlValue" => $salutation,
            "mandatory" => true,
            "dynamicHtmlName" => "dwfrm_billing_addressFields_salutations_salutation_d0byoqhyewzo",
            "htmlName" => "dwfrm_billing_addressFields_salutations_salutation",
            "valid" => true,
            "label" => "Title",
            "options" => Checkout::get_salutation_options($salutation),
            "selectedOption" => $salutation,
            "maxLength" => 2147483647,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ]
        ],
        "customnames" => [
          "valid" => true,
          "htmlName" => "dwfrm_billing_addressFields_customnames",
          "dynamicHtmlName" => "dwfrm_billing_addressFields_customnames_d0ckoaaagape",
          "error" => null,
          "attributes" => "name = \"dwfrm_billing_addressFields_customnames\" id = \"dwfrm_billing_addressFields_customnames\"",
          "formType" => "formGroup",
          "firstname" => [
            "htmlValue" => "",
            "mandatory" => "",
            "dynamicHtmlName" => "dwfrm_billing_addressFields_customnames_firstname_d0zqucxgkstm",
            "htmlName" => "dwfrm_billing_addressFields_customnames_firstname",
            "valid" => true,
            "label" => "الاسم الأوّل",
            "maxLength" => 27,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ],
          "lastname" => [
            "htmlValue" => "",
            "mandatory" => "",
            "dynamicHtmlName" => "dwfrm_billing_addressFields_customnames_lastname_d0hccyhrauyt",
            "htmlName" => "dwfrm_billing_addressFields_customnames_lastname",
            "valid" => true,
            "label" => "اسم العائلة",
            "maxLength" => 32,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ]
        ],
        "postalCode" => [
          "valid" => true,
          "htmlName" => "dwfrm_billing_addressFields_postalCode",
          "dynamicHtmlName" => "dwfrm_billing_addressFields_postalCode_d0kcrygcxpzo",
          "error" => null,
          "attributes" => "name = \"dwfrm_billing_addressFields_postalCode\" id = \"dwfrm_billing_addressFields_postalCode\"",
          "formType" => "formGroup",
          "postalCode" => [
            "htmlValue" => WC()->customer->get_billing_postcode(),
            "mandatory" => "",
            "dynamicHtmlName" => "dwfrm_billing_addressFields_postalCode_postalCode_d0xkjyqsgfjp",
            "htmlName" => "dwfrm_billing_addressFields_postalCode_postalCode",
            "valid" => true,
            "label" => "Zip Code",
            "maxLength" => 10,
            "minLength" => 0,
            "regEx" => "^[\\w\\s-]*$",
            "formType" => "formField"
          ]
        ],
        "country" => [
          "valid" => true,
          "htmlName" => "dwfrm_billing_addressFields_country",
          "dynamicHtmlName" => "dwfrm_billing_addressFields_country_d0nldvqeqwqj",
          "error" => null,
          "attributes" => "name = \"dwfrm_billing_addressFields_country\" id = \"dwfrm_billing_addressFields_country\"",
          "formType" => "formGroup",
          "countryCode" => [
            "htmlValue" => $country,
            "mandatory" => true,
            "dynamicHtmlName" => "dwfrm_billing_addressFields_country_countryCode_d0wfyikldttj",
            "htmlName" => "dwfrm_billing_addressFields_country_countryCode",
            "valid" => true,
            "label" => "Country",
            "options" => Checkout::country_options($country),
            "selectedOption" => $country,
            "maxLength" => 2147483647,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ]
        ],
        "states" => [
          "valid" => true,
          "htmlName" => "dwfrm_billing_addressFields_states",
          "dynamicHtmlName" => "dwfrm_billing_addressFields_states_d0szkacmanaq",
          "error" => null,
          "attributes" => "name = \"dwfrm_billing_addressFields_states\" id = \"dwfrm_billing_addressFields_states\"",
          "formType" => "formGroup",
          "stateCode" => [
            "htmlValue" => $state,
            "mandatory" => "",
            "dynamicHtmlName" => "dwfrm_billing_addressFields_states_stateCode_d0ijxjcovbmj",
            "htmlName" => "dwfrm_billing_addressFields_states_stateCode",
            "valid" => true,
            "label" => "State",
            "options" => Checkout::state_options($state),
            "selectedOption" => $state,
            "maxLength" => 2147483647,
            "minLength" => 0,
            "regEx" => null,
            "formType" => "formField"
          ]
        ],
        "phone" => [
          "htmlValue" => WC()->customer->get_billing_phone(),
          "mandatory" => true,
          "dynamicHtmlName" => "dwfrm_billing_addressFields_phone_d0jpetkxhiop",
          "htmlName" => "dwfrm_billing_addressFields_phone",
          "valid" => true,
          "description" => "address.phone.example",
          "label" => "Telephone",
          "maxLength" => 30,
          "minLength" => 10,
          "regEx" => null,
          "formType" => "formField"
        ],
        "usingVerifiedAddress" => [
          "htmlValue" => "true",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_addressFields_usingVerifiedAddress_d0hkazygxoul",
          "htmlName" => "dwfrm_billing_addressFields_usingVerifiedAddress",
          "valid" => true,
          "checked" => false,
          "selected" => false,
          "formType" => "formField"
        ],
        "addtoemaillist" => [
          "htmlValue" => $add_to_email_list,
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_addressFields_addtoemaillist_d0pvlipppjxx",
          "htmlName" => "dwfrm_billing_addressFields_addtoemaillist",
          "valid" => true,
          "label" => "I would also like to receive marketing information about Cartier’s products or services.",
          "checked" => false,
          "selected" => false,
          "formType" => "formField"
        ],
        "apply" => [
          "description" => null,
          "label" => null,
          "submitted" => false,
          "triggered" => false,
          "formType" => "formAction"
        ],
        "remove" => [
          "description" => null,
          "label" => null,
          "submitted" => false,
          "triggered" => false,
          "formType" => "formAction"
        ]
      ],
      "contactInfoFields" => [
        "valid" => true,
        "htmlName" => "dwfrm_billing_contactInfoFields",
        "dynamicHtmlName" => "dwfrm_billing_contactInfoFields_d0alxtthpuwn",
        "error" => null,
        "attributes" => "name = \"dwfrm_billing_contactInfoFields\" id = \"dwfrm_billing_contactInfoFields\"",
        "formType" => "formGroup",
        "email" => [
          "htmlValue" => WC()->customer->get_billing_email(),
          "mandatory" => true,
          "dynamicHtmlName" => "dwfrm_billing_contactInfoFields_email_d0bicubfezdc",
          "htmlName" => "dwfrm_billing_contactInfoFields_email",
          "valid" => true,
          "label" => "profile.email",
          "maxLength" => 50,
          "minLength" => 0,
          "regEx" => "^[\\w.%+-]+@[\\w.-]+\\.[\\w]{2,6}$",
          "formType" => "formField"
        ],
        "phone" => [
          "htmlValue" => "",
          "mandatory" => true,
          "dynamicHtmlName" => "dwfrm_billing_contactInfoFields_phone_d0uwlujpvhqh",
          "htmlName" => "dwfrm_billing_contactInfoFields_phone",
          "valid" => true,
          "description" => "address.phone.example",
          "label" => "profile.phone",
          "maxLength" => 20,
          "minLength" => 10,
          "regEx" => null,
          "formType" => "formField"
        ]
      ],
      "paymentMethod" => [
        "htmlValue" => "AdyenComponent",
        "mandatory" => true,
        "dynamicHtmlName" => "dwfrm_billing_paymentMethod_d0ltcwysufqv",
        "htmlName" => "dwfrm_billing_paymentMethod",
        "valid" => true,
        "maxLength" => 2147483647,
        "minLength" => 0,
        "regEx" => null,
        "formType" => "formField"
      ],
      "creditCardFields" => [
        "valid" => true,
        "htmlName" => "dwfrm_billing_creditCardFields",
        "dynamicHtmlName" => "dwfrm_billing_creditCardFields_d0pxfdomsono",
        "error" => null,
        "attributes" => "name = \"dwfrm_billing_creditCardFields\" id = \"dwfrm_billing_creditCardFields\"",
        "formType" => "formGroup",
        "paymentMethod" => [
          "htmlValue" => "",
          "mandatory" => true,
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_paymentMethod_d0pxvkmltfjo",
          "htmlName" => "dwfrm_billing_creditCardFields_paymentMethod",
          "valid" => true,
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "cardType" => [
          "htmlValue" => "mc",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_cardType_d0jwpivcohnn",
          "htmlName" => "dwfrm_billing_creditCardFields_cardType",
          "valid" => true,
          "label" => "profile.cardtype",
          "maxLength" => 16,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "cardNumber" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_cardNumber_d0xqbbintgha",
          "htmlName" => "dwfrm_billing_creditCardFields_cardNumber",
          "valid" => true,
          "label" => "Card Number",
          "maxLength" => 20,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "cardOwner" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_cardOwner_d0mrwiauedon",
          "htmlName" => "dwfrm_billing_creditCardFields_cardOwner",
          "valid" => true,
          "label" => "Name on Card",
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "expirationMonth" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_expirationMonth_d0harwymlgzj",
          "htmlName" => "dwfrm_billing_creditCardFields_expirationMonth",
          "valid" => true,
          "label" => "Expiration Month",
          "options" => Checkout::get_month_options(),
          "selectedOption" => "",
          "maxValue" => null,
          "minValue" => null,
          "formType" => "formField"
        ],
        "expirationYear" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_expirationYear_d0dqnuvcmiwi",
          "htmlName" => "dwfrm_billing_creditCardFields_expirationYear",
          "valid" => true,
          "label" => "Expiration Year",
          "options" => [
            [
              "checked" => false,
              "htmlValue" => "",
              "label" => "Year",
              "id" => "",
              "selected" => false,
              "value" => null
            ]
          ],
          "selectedOption" => "",
          "maxValue" => null,
          "minValue" => null,
          "formType" => "formField"
        ],
        "securityCode" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_securityCode_d0ckazkakzhm",
          "htmlName" => "dwfrm_billing_creditCardFields_securityCode",
          "valid" => true,
          "label" => "profile.securitycode",
          "maxLength" => 4,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "saveCard" => [
          "htmlValue" => "true",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_saveCard_d0xojjdgbtgn",
          "htmlName" => "dwfrm_billing_creditCardFields_saveCard",
          "valid" => true,
          "label" => "Save Card to Account",
          "checked" => false,
          "selected" => false,
          "formType" => "formField"
        ],
        "saveCardAdyen" => [
          "htmlValue" => "true",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_saveCardAdyen_d0tgabbcaaaa",
          "htmlName" => "dwfrm_billing_creditCardFields_saveCardAdyen",
          "valid" => true,
          "label" => "Save Card to Account",
          "checked" => false,
          "selected" => false,
          "formType" => "formField"
        ],
        "adyenStateData" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_adyenStateData_d0otnvfeodxs",
          "htmlName" => "dwfrm_billing_creditCardFields_adyenStateData",
          "valid" => true,
          "label" => "adyenStateData",
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "selectedCardID" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_creditCardFields_selectedCardID_d0kezchgblzb",
          "htmlName" => "dwfrm_billing_creditCardFields_selectedCardID",
          "valid" => true,
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ]
      ],
      "adyenPaymentFields" => [
        "valid" => true,
        "htmlName" => "dwfrm_billing_adyenPaymentFields",
        "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_d0bxwniinjwd",
        "error" => null,
        "attributes" => "name = \"dwfrm_billing_adyenPaymentFields\" id = \"dwfrm_billing_adyenPaymentFields\"",
        "formType" => "formGroup",
        "issuer" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_issuer_d0ahalhyfefs",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_issuer",
          "valid" => true,
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "dateOfBirth" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_dateOfBirth_d0gbmoopunev",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_dateOfBirth",
          "valid" => true,
          "label" => "Date of Birth",
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "telephoneNumber" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_telephoneNumber_d0exuxjypole",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_telephoneNumber",
          "valid" => true,
          "label" => "telephoneNumber",
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "gender" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_gender_d0qqdsudwppt",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_gender",
          "valid" => true,
          "label" => "Gender",
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "socialSecurityNumber" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_socialSecurityNumber_d0ydmkmuepap",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_socialSecurityNumber",
          "valid" => true,
          "label" => "Social Security Number",
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "adyenFingerprint" => [
          "htmlValue" => "DpqwU4zEdN0050000000000000AVvx9QFF0M0039372870cVB94iKzBGSbldyuuiSTBix7RX3az8002rKkEK1Ha8P00000YVxEr00000fKkhnraRhXiZCqnI4lsk:40",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_adyenFingerprint_d0zkpqeydsst",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_adyenFingerprint",
          "valid" => true,
          "label" => "Fingerprint",
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "bankAccountOwnerName" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_bankAccountOwnerName_d0hzsuuxeyia",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_bankAccountOwnerName",
          "valid" => true,
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "bankAccountNumber" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_bankAccountNumber_d0ogqzprptei",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_bankAccountNumber",
          "valid" => true,
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "bankLocationId" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_bankLocationId_d0kbyyeayowy",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_bankLocationId",
          "valid" => true,
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "terminalId" => [
          "htmlValue" => "",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_terminalId_d0jujsbzkutt",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_terminalId",
          "valid" => true,
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ],
        "adyenStateData" => [
          "htmlValue" => "{\"riskData\":{\"clientData\":\"eyJ2ZXJzaW9uIjoiMS4wLjAiLCJkZXZpY2VGaW5nZXJwcmludCI6IkRwcXdVNHpFZE4wMDUwMDAwMDAwMDAwMDAwQVZ2eDlRRkYwTTAwMzkzNzI4NzA1V3BZV2lLekJHU2JsZHl1dWlTVEJpeDdSWDNhejgwMDJyS2tFSzFIYThQMDAwMDBZVnhFcjAwMDAwZktraG5yYVJoWGlaQ3FuSTRsc2s6NDAiLCJwZXJzaXN0ZW50Q29va2llIjpbXSwiY29tcG9uZW50cyI6eyJ1c2VyQWdlbnQiOiI3YWFhOGVmMThmYWEyNmIzNzc5ZGNiNDZkMzg0NmFiOSIsIndlYmRyaXZlciI6MCwibGFuZ3VhZ2UiOiJlbi1HQiIsImNvbG9yRGVwdGgiOjMwLCJkZXZpY2VNZW1vcnkiOjgsInBpeGVsUmF0aW8iOjIsImhhcmR3YXJlQ29uY3VycmVuY3kiOjgsInNjcmVlbldpZHRoIjo5MDAsInNjcmVlbkhlaWdodCI6MTQ0MCwiYXZhaWxhYmxlU2NyZWVuV2lkdGgiOjgxMywiYXZhaWxhYmxlU2NyZWVuSGVpZ2h0IjoxNDQwLCJ0aW1lem9uZU9mZnNldCI6LTMwMCwidGltZXpvbmUiOiJBc2lhL0thcmFjaGkiLCJpbmRleGVkRGIiOjEsImFkZEJlaGF2aW9yIjowLCJvcGVuRGF0YWJhc2UiOjEsInBsYXRmb3JtIjoiTWFjSW50ZWwiLCJwbHVnaW5zIjoiMjljZjcxZTNkODFkNzRkNDNhNWIwZWI3OTQwNWJhODciLCJjYW52YXMiOiIxOTBiOTc4NWIyYTIyNWYxNWExYjNmMWQ5NDJiZDdlMSIsIndlYmdsIjoiOGMzYjU1MGNiZmRlMDYwNjAxNmJiYTBkZDFkZWRjYjgiLCJ3ZWJnbFZlbmRvckFuZFJlbmRlcmVyIjoiQXBwbGV+QXBwbGUgTTEiLCJhZEJsb2NrIjowLCJoYXNMaWVkTGFuZ3VhZ2VzIjowLCJoYXNMaWVkUmVzb2x1dGlvbiI6MCwiaGFzTGllZE9zIjowLCJoYXNMaWVkQnJvd3NlciI6MCwiZm9udHMiOiIyOTJlYTJjY2VjY2QwMmIwMWMwYzRjMWQ0MTMyMTc1ZSIsImF1ZGlvIjoiNTVmNjcxMjQ0MzRiMmRlNzEzMjIyNzlhZWYxNmUzNmIiLCJlbnVtZXJhdGVEZXZpY2VzIjoiZDBjMGE2MzNiMjZmOGYyYjI2YjdlNjczMWExNGU2OWUifX0=\"},\"paymentMethod\":{\"type\":\"scheme\",\"encryptedCardNumber\":\"adyenjs_0_1_25$f2Fa/kRfCqWgWHb4/2HLpUA1srHuJ5LtG9IKcU8BmHTrZc5DLyp5NTjRWQx2j/qpsCQk2Kpp9Y3tKfhju5BB87+Xx/Dn8WuItd2K8GDLOSr3rJNm8vXJR3Mw1jjTbKv2iswANvbPXsnGejAg+CV1hZmsB09/AYfWVSPra5pppwDiJKAlRmznId7XFGxuSRm22COyQZcBYCMV0qrYCNXlTscjcUj4H0WjP3lMt6u9FhONl7ebRhL0mdW8OzSx8Oj9JvafeI22d69H/AQRks0pvfCs9ZSRDEp/NDEi+bUr3U0aHEbIBZnnvymhuJgumBozyocJpepF9/D/NAkeF86d9Q==$LsHq5hbLZd9QIGFXK4p1WMoVoojhHij8fZ9ev8JZ97LYy5tT9uNHl6cAfMRcLPC57SWGAIXD0pDPCzRtijcZ/WSlDp08Nnlfh2Dvecly208s6GhQey8e14Q7dSCaiRwVM6KJMeMUPRo9T0lbEtazku0Z2JhxDba97vBHHZuAj1JR9dSiJiLKXzUtgH/3xaPjXsmNSUqWK4XNgYYf71zuv2eWixpZNiUkSDVoN3G6FgQXWr4jkOd3NPtwPa9fHkTp79O1v+f9kfSTowS9x4UItnIfAX71GX9HUtioEEjwvK6PoeJYdIyxCxQRGN/bkgFrL1Sz0lLxMkOdgW9bn+gYu2/eZGe4ouf7YaNbXc6WXukWWZEkBJnYeedQM9ThnT8V4lkFUf58uhUsSnpCKaKoLE9xZ2etpqG5m0qhVafh4oGgolKNtHGu86pHQwcuF9KUG5sY94b5pttB22ZnaJWJMdJLSprplle9JkPbAmJEPUy75dtv7Fl5ahLoOuXxMcFXvz4KUXMpHMG0eswzY5r/jZYfmSbpBjNIfXVPEcv3N8liNwLbroq0n7iwgv5HQJuCydN8EcuPd9GjuiFmssJSbWq0M8BpI7ASqtZrv3aNaBYfsu6CNTp7pxI+Kt4GfbSMCZgrzDC5KuwGaOqH8ip9MNzFf5NJ3lWMF4eS9SfQx3jk2svHpeQKobFzQE2G/EmVvy3N40+B9FpTVizj9cUdfMNfkRg31A8NxmpfpR4Kcr1ttI0q4zCnooHoosegOtCT3yZly5A54nFS+xPtbuh5vAAV30nhlhWuTGoa98Kfd0BO0IDmESlqSSV+vRzng+0yJnWSZcndPIT5jPySRnMwpRFYNiD9PgwNgF/dIoYdUG75FDXzXFznw4L8Vch2FwA=\",\"encryptedExpiryMonth\":\"adyenjs_0_1_25$JLBiLffDB8qZeVkhCHAmxB0eR4Dquff9ePDpv1CUdpNFWM0kcY29tclmbKOmSEkX506TXc13Q6TT8KnEMm07V14P503Uw83A7fxta751WCELfdm39e4WywTICrng4t8NqYBiw8Q6+adMmDHLjBnAa9xAJFEUrtJB2Bbz0eWA6BB5E2VxzfceaBP0HUpoEQrgX+Y/FweZ4yIfzkLuGTqXLjGo6jqDReFbA3+78YfqI41oxfsh8BI1chQgJaShtGBuVVZRcx9I9L3Egq6wKXw/fms0/kG+LurESttxchvpnHUGw6+iebsAkypKFK47gbBDgi5zrrT/QR5nuibvNsJ/Gg==$pAa77UzoPmxmfcptwD+diTiPRWr80YFliqn2Eqz77pt98Gf0ZzY6MVvmfyryxo9ZhgLziQkxo7j020eY19VWl6s2QwSdNkmu4Dfqq0kczuKPHBpTQ4fx3cjwFMBG/5BpyY8odVVVcLTDDzp1eL/4qCE8kYpUasUaKcmujE73mF6GshgDURQjejIgea4aticqWtWy12WDtkeovT/tUhKY0ZW08qA6IjQBJBz/YBkklImNqoS2CX7hW3k3bqYXCb5+PNDDfjI2HXRVc7CH3hWdWi5eAh/mIYgjVvDCVGxt3vfEqyiiDUzJSYqcH7359F1KFItporYJ/8fX+QMcGDecyGOyudkq2BFUzTevgNJwoujdKMJcfY1/zcFdfYPn7KwwXZHrzGo1/PRe/doxqsJMsLkiO45RSCgrxOJ2m7H8MvfZ25Is/xwmq9gIitRLa2KegogEChhV7msCwlXOyjVfV09+\",\"encryptedExpiryYear\":\"adyenjs_0_1_25$lruvrO8GA9FWSYPPqjjbOxOcTKVBYgLry4Y9G9XRxl91seEy4qhc2T/naBuz+wwSRLgqNzTpLkZ4RYQBvLPzL+gGHbm4kAVdnajxGepeX3nQH53NXdStNr6FUYmhxjvS2kH3iHUQZbTE6n5pFnIsyC4q+KUcklp93KPTu8bnlpg8x/CD43Calhi7mQdeaYjUn4kNfDxisj695FoPonenkasLhvS4clLvYp1GDz397qC7WmVj0XQ8qtrfT/RhDjECR4PUc0I6NcIZm49DRKz0B/qDUzwux7pwRDmGRuNFMgWp/1ILLGGv06Z18tR5Z2f4L31KOmy/pP20ojkWXOkY4Q==$7pG2wReEZyjdDU7gEER83uHil/jKsgb3Y2OxJYZEizWHx9S+3uAy67yj8UiHMgOZhDlnDAv7bftrkt0uJPLBHRabVYilEK4wiIODxjpRdn4ZKxKoCCaFdD87cGelicwkCDNV6HwK+MshSq+vktADnexquh7EKW+WA9Ba5RaJAv+d9BVm61OaZCUlAN4vUJz7zekI4x6/AxJKaTyJ3XvsMU3wO6IixRlwnBTYQM/qDHooyQxJUGIsFysA9vgbzIN2BUoFc3WJN6gdwCkPk5OGxB6GzS6DMS8/hZ6vC91zZVqWn6L/qrfRils/AK1QY9oFM5+/vVvyvACvxUpF6YPklLwDHwwvyJ8/QoMgcqs6SJKfaAa7zlpDMV5m4nVSAVRNbF+1dgYICRNOZmRyi1a7g6acUCaBeh1nWs+M37SLK0UsziJn6VOYCgwrC2v4hV37UWp2cNI2csIS9wGcWj09xTYjPA==\",\"encryptedSecurityCode\":\"adyenjs_0_1_25$EcETY1dDZJsbFO7+cTZJUo0RIN+sjxzGjCzhm5CZQifsLMSr2vG1f8+1xtd+Cm8npzCVKNaGnrO8hk4CH8fWltovBAbQWWw0iw4heCi5toFhAB+bZ3m4a5Ram7144tEdlk2xTNNa+MpLoFJsN5odvyj7hcQJlhC3uXDZ80I734P041twHuC6c7WgVdSll+Gz2Wc3ellnImqhfLqkjG3UmETOL4ALCKAYqW0///56U7I8Hdn+5Bq17doCzOs/yzeBTvReolpynaW0MitQy397WebAzi1QRvAL0937cbCxXnqKW/fZNJ2eaEucHBuZnk6JFAgAEjMw+Jc33asfeU/Qdw==$Q9VuoQCUPyXlQl+2OZM9t2HcIMHBaZ5j9Qcn2hG7VAqc6HmHVfE1+81LA80SycYx7NOPfCmWL5DrTwhLpLjvvBB4yDnoE8xw+L5rV/3y2pisRYwSR1UjQKvqIn14jQTdntcthj/hP8JTHTazUWbjmay9rYIG4kfWTmvOyC4JTBzlsU/1z0C+AljPZfJ4l6waVvP+clbqx/OcUDG14RO+/KkWf3pCNEhjGILlWfkTuQdPjoae25uyMf0b18JaJ2H3Li4/gzZhGbpn8qConmQKSKyHxHKfXRRt3xkqULXHNh5cw7vlLkcl6C4SPNZpR8UYVtaMGq4Hde+ZGl85JGSb0MdbaMVI+M3CdycH287SX8iAGgCzzeTImO6rd8342Rw2NdAnviXCZpHtj5102SZH5LktU5he0+IQPsidW/fG2FytLNoqUo6rsFe9iQTzTmzK228NLiYRtOGpodo=\"},\"browserInfo\":{\"acceptHeader\":\"*/*\",\"colorDepth\":30,\"language\":\"en-GB\",\"javaEnabled\":false,\"screenHeight\":900,\"screenWidth\":1440,\"userAgent\":\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36\",\"timeZoneOffset\":-300}}",
          "mandatory" => "",
          "dynamicHtmlName" => "dwfrm_billing_adyenPaymentFields_adyenStateData_d0gsxoyhdrpd",
          "htmlName" => "dwfrm_billing_adyenPaymentFields_adyenStateData",
          "valid" => true,
          "maxLength" => 2147483647,
          "minLength" => 0,
          "regEx" => null,
          "formType" => "formField"
        ]
      ],
      "subscribe" => [
        "htmlValue" => "true",
        "mandatory" => "",
        "dynamicHtmlName" => "dwfrm_billing_subscribe_d0nkpskagaac",
        "htmlName" => "dwfrm_billing_subscribe",
        "valid" => true,
        "checked" => false,
        "selected" => false,
        "formType" => "formField"
      ],
      "base" => []
    ];
  }

  static function order_resources()
  {
    return [
      "noSelectedPaymentMethod" => "error.no.selected.payment.method",
      "cardType" => "Credit",
      "cardEnding" => "Ending",
      "shippingMethod" => "Shipping Method",
      "items" => "included items",
      "item" => "included item",
      "addNewAddress" => "New Address",
      "newAddress" => "New Address",
      "shipToAddress" => "msg.ship.to.address",
      "shippingAddresses" => "- Existing Shipments -",
      "accountAddresses" => "- Address Book -",
      "shippingTo" => "msg.shipping.to",
      "shippingAddress" => "Shipping Address",
      "addressIncomplete" => "Please edit shipping address information and save.",
      "giftMessage" => "Gift Message:",
      "storeAddress" => "Pickup:"
    ];
  }

  static function get_order_details($shipping_uuid, $billing_completed = false, $payment_instruments = [])
  {
    $shipping_salutation = WC()->session->get('shipping_salutation');
    $billing_salutation = WC()->session->get('billing_salutation');
    $selected_shipping_method = WC()->session->get('chosen_shipping_methods')[0];
    $cart_items = Cart::get_cart_items();
    $totals = Cart::get_totals();
    $shipping_methods = Checkout::applicable_shipping_methods($selected_shipping_method);

    foreach($shipping_methods as $shipping_method) {
      if ($shipping_method['selected']) {
        $selected_shipping_method = $shipping_method;
        break;
      }
    }
    $billing_city = WC()->customer->get_billing_city();
    $billing_country = WC()->customer->get_billing_country();
    $shipping_city = WC()->customer->get_shipping_city();
    $shipping_country = WC()->customer->get_shipping_country();

    return [
      "resources" => Checkout::order_resources(),
      "shippable" => false, // TODO maybe its true after billing info is set
      "usingMultiShipping" => false,
      "orderNumber" => null,
      "priceTotal" => $totals['grandTotal'],
      "creationDate" => "2022-02-01T15:16:32.695Z",
      "orderEmail" => WC()->customer->get_billing_email(),
      "orderStatus" => null,
      "productQuantityTotal" => 1,
      "totals" => $totals,
      "steps" => [
        "shipping" => [
          "iscompleted" => true
        ],
        "billing" => [
          "iscompleted" => $billing_completed
        ]
      ],
      "items" => [
        "items" => $cart_items,
        "totalQuantity" => 1
      ],
      "billing" => [
        "billingAddress" => [
          "address" => [
            "address1" => WC()->customer->get_billing_address_1(),
            "address2" => WC()->customer->get_billing_address_2(),
            "city" => $billing_city,
            "firstName" => WC()->customer->get_billing_first_name(),
            "lastName" => WC()->customer->get_billing_last_name(),
            "ID" => null,
            "addressId" => null,
            "phone" => WC()->customer->get_billing_phone(),
            "postalCode" => WC()->customer->get_billing_postcode(),
            "stateCode" => WC()->customer->get_billing_state(),
            "jobTitle" => null,
            "postBox" => null,
            "salutation" => $billing_salutation,
            "secondName" => null,
            "companyName" => null,
            "suffix" => null,
            "suite" => null,
            "title" => null,
            "countryCode" => [
              "displayValue" => $billing_country,
              "value" => $billing_country
            ],
            "useCustomNames" => false,
            "marketingSiteCityCode" => $billing_city,
            "cityCode" => $billing_city
          ]
        ],
        "payment" => [
          "applicablePaymentMethods" => Checkout::applicable_payment_methods(),
          "applicablePaymentCards" => [
            [
              "cardType" => "Visa",
              "name" => "Visa"
            ],
            [
              "cardType" => "Amex",
              "name" => "American Express"
            ],
            [
              "cardType" => "Master Card",
              "name" => "MasterCard"
            ]
          ],
          "selectedPaymentInstruments" => $payment_instruments,
          "selectedPaymentMethodID" => "AdyenComponent"
        ],
        "matchingAddressId" => $shipping_uuid
      ],
      "shipping" => [
        [
          "UUID" => $shipping_uuid,
          "productLineItems" => [
            "items" => $cart_items,
            "totalQuantity" => count($cart_items)
          ],
          "applicableShippingMethods" => Checkout::applicable_shipping_methods($selected_shipping_method['ID']),
          "selectedShippingMethod" => $selected_shipping_method,
          "shippingAddress" => [
            "address1" => WC()->customer->get_shipping_address_1(),
            "address2" => WC()->customer->get_shipping_address_2(),
            "city" => $shipping_city,
            "firstName" => WC()->customer->get_shipping_first_name(),
            "lastName" => WC()->customer->get_shipping_last_name(),
            "ID" => null,
            "addressId" => null,
            "phone" => WC()->customer->get_shipping_phone(),
            "postalCode" => WC()->customer->get_shipping_postcode(),
            "stateCode" => WC()->customer->get_shipping_state(),
            "jobTitle" => null,
            "postBox" => null,
            "salutation" => $shipping_salutation,
            "secondName" => null,
            "companyName" => null,
            "suffix" => null,
            "suite" => null,
            "title" => null,
            "countryCode" => [
              "displayValue" => $shipping_country,
              "value" => $shipping_country
            ],
            "useCustomNames" => false,
            "marketingSiteCityCode" => $shipping_city,
            "cityCode" => $shipping_city
          ],
          "isGift" => false,
          "giftMessage" => null,
          "giftMessageFont" => null,
          "pickupInstoreUrl" => "wp-json/siellest/Stores-InventorySearch?showMap=false&products=CRFP327030%3a1&isForm=false&radius=300",
          "trackingNumber" => null,
          "fromStoreId" => null,
          "returnTrackingURL" => null,
          "consignmentCarrier" => "ups"
        ]
      ],
      "shippingMethodID" => $selected_shipping_method['displayName'],
      "fluentETAAgreed" => $selected_shipping_method['etaFluent'],
      "customerEmail" => WC()->customer->get_billing_email(),
      "isExchangeOrder" => false,
      "exchangeOrderType" => false
    ];
  }

  static function applicable_payment_methods()
  {
    return [
      [
        "ID" => "AdyenComponent",
        "name" => "Credit Card",
        "description" => null,
        "processorID" => "Adyen_Component"
      ],
      [
        "ID" => "BANK_TRANSFER",
        "name" => "Bank Transfer",
        "description" => null,
        "processorID" => "BANKTRANSFER"
      ],
      [
        "ID" => "FREEOFCHARGE",
        "name" => "Free of charge",
        "description" => null,
        "processorID" => "FREE_OF_CHARGE"
      ],
      [
        "ID" => "ALREADY_PAID",
        "name" => "Already Paid",
        "description" => null,
        "processorID" => "ALREADY_PAID"
      ]
    ];
  }

  static function applicable_shipping_methods($selected_method = 'SATD')
  {
    $methods = [];
    foreach ( WC()->cart->get_shipping_packages() as $package_id => $package ) {
      // Check if a shipping for the current package exist
      if ( WC()->session->__isset( 'shipping_for_package_' . $package_id ) ) {
        // Loop through shipping rates for the current package
        foreach ( WC()->session->get( 'shipping_for_package_'.$package_id )['rates'] as $shipping_rate_id => $shipping_rate ) {
          $rate_id     = $shipping_rate->get_id(); // same thing that $shipping_rate_id variable (combination of the shipping method and instance ID)
          $method_id   = $shipping_rate->get_method_id(); // The shipping method slug
          $instance_id = $shipping_rate->get_instance_id(); // The instance ID
          $label_name  = $shipping_rate->get_label(); // The label name of the method
          $cost        = $shipping_rate->get_cost(); // The cost without tax
          $tax_cost    = $shipping_rate->get_shipping_tax(); // The tax cost
          $taxes       = $shipping_rate->get_taxes(); // The taxes details (array)
          array_push($methods, [
            "ID" => $rate_id,
            "displayName" => $label_name,
            "description" => $label_name,
            "estimatedArrivalTime" => null,
            "default" => false,
            "shippingCost" => get_woocommerce_currency_symbol() . $cost,
            "selected" => ($rate_id == $selected_method),
            "mercuryShippingMethod" => true,
            "storePickupEnabled" => false,
            "leadTime" => 0,
            "isExpress" => true,
            "isSaturday" => false,
            "etaFluent" => "02/06/2022"
          ]);
        }
      }
    }
    return $methods;
    // return [
    //   [
    //     "ID" => "EXPD",
    //     "displayName" => "Express Delivery",
    //     "description" => "Express Delivery",
    //     "estimatedArrivalTime" => null,
    //     "default" => false,
    //     "shippingCost" => "$35.00",
    //     "selected" => ("EXPD" == $selected_method),
    //     "mercuryShippingMethod" => true,
    //     "storePickupEnabled" => false,
    //     "leadTime" => 0,
    //     "isExpress" => true,
    //     "isSaturday" => false,
    //     "etaFluent" => "02/06/2022"
    //   ],
    //   [
    //     "ID" => "SATD",
    //     "displayName" => "Saturday Delivery Option",
    //     "description" => null,
    //     "estimatedArrivalTime" => null,
    //     "default" => false,
    //     "shippingCost" => "$0.00",
    //     "selected" => ("SATD" == $selected_method),
    //     "mercuryShippingMethod" => true,
    //     "storePickupEnabled" => false,
    //     "leadTime" => 0,
    //     "isExpress" => false,
    //     "isSaturday" => true,
    //     "isFridayEta" => false,
    //     "etaFluent" => "02/05/2022"
    //   ],
    //   [
    //     "ID" => "STDD",
    //     "displayName" => "Standard Delivery",
    //     "description" => "Order received within 2-4 business days",
    //     "estimatedArrivalTime" => null,
    //     "default" => true,
    //     "shippingCost" => "$0.00",
    //     "selected" => ("STDD" == $selected_method),
    //     "mercuryShippingMethod" => true,
    //     "storePickupEnabled" => false,
    //     "leadTime" => 2,
    //     "isExpress" => false,
    //     "isSaturday" => false,
    //     "etaFluent" => "02/07/2022"
    //   ]
    // ];
  }

  static function country_options($selected) {
    $wc_countries = new WC_Countries();
    $countries = $wc_countries->get_countries();

    $data = [
      [
        "checked" => false,
        "htmlValue" => "",
        "label" => "",
        "id" => "",
        "selected" => false,
        "value" => null
      ]
    ];

    foreach($countries as $key => $value) {
      array_push($data, [
        "checked" => ($key === $selected),
        "htmlValue" => $key,
        "label" => $value,
        "id" => $key,
        "selected" => ($key === $selected),
        "value" => $key
      ]);
    }

    return $data;
  }

  static function state_options($selected)
  {
    $wc_countries = new WC_Countries();
    $states = $wc_countries->get_states('US');

    $data = [
      [
        "checked" => false,
        "htmlValue" => "",
        "label" => "",
        "id" => "",
        "selected" => false,
        "value" => null
      ]
    ];

    foreach($states as $key => $value) {
      array_push($data, [
        "checked" => ($key === $selected),
        "htmlValue" => $key,
        "label" => $value,
        "id" => $key,
        "selected" => ($key === $selected),
        "value" => $key
      ]);
    }
  
    return $data;
  }

  static function get_month_options()
  {
    $data = [
      [
        "checked" => false,
        "htmlValue" => "",
        "label" => "Month",
        "id" => "",
        "selected" => false,
        "value" => null
      ]
    ];

    for ($i = 1; $i <= 12; $i++) {
      array_push($data, [
        "checked" => false,
        "htmlValue" => "$i",
        "label" => sprintf("%02d", $i),
        "id" => sprintf("%02d", $i),
        "selected" => false,
        "value" => $i
      ]);
    }
    return $data;
  }

  static function get_salutation_options($selected)
  {
    return [
      [
        "checked" => ($selected == 'mr'),
        "htmlValue" => "mr",
        "label" => "Mr",
        "id" => "mr",
        "selected" => ($selected == 'mr'),
        "value" => "mr"
      ],
      [
        "checked" => ($selected == 'mrs'),
        "htmlValue" => "mrs",
        "label" => "Mrs",
        "id" => "mrs",
        "selected" => ($selected == 'mrs'),
        "value" => "mrs"
      ],
      [
        "checked" => ($selected == 'ms'),
        "htmlValue" => "ms",
        "label" => "Ms",
        "id" => "ms",
        "selected" => ($selected == 'ms'),
        "value" => "ms"
      ]
    ];
  }
}
