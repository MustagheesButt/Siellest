<script type="text/javascript">
  window.SFRA = window.SFRA || {};
  window.SFRA.Constants = {
    "LOCALE_COUNTRY": "US",
    "LOCALE_LANGUAGE": "en",
    "LOCALE_XML_CODE": "en-US"
  };
  window.SFRA.Resources = {
    "useNewPayment": "{0}",
    "wishlistAdd": "Add to Wish List",
    "wishlistRemove": "Remove from Wish List",
    "serviceDownMessage": "We are unable to deliver to that location, please select a different address",
    "phoneFormat": "Error - Please enter a valid phone number",
    "postalFormat": "Error - Please enter a valid postal code",
    "taxCodeFormat": "validation.taxCode.format",
    "postalFormatX": "Error - Please enter a postal code with the following format: {0}",
    "numericFormat": "Error - Please enter numbers only",
    "alphabetFormat": "Error - Please enter alphabet characters only",
    "arabicFormat": "Error - Please enter Arabic characters only",
    "alphanumericFormat": "Error - Please enter characters A-Z, numbers, or punctuation symbols only.",
    "giftmessageFormat": "Error - Invalid Gift Message",
    "maxLength": "Error - Maximum {0} characters.",
    "latinFormat": "Error - Please enter alphabet characters only",
    "nonPoBoxFormat": "Error - Please enter a valid address to proceed",
    "matchingFormat": "Error - Please ensure these fields match",
    "requiredField": "Error - The {0} field is required",
    "emptyRadio": "Error - Please select one of these options.",
    "invalidEmail": "Error - Please enter a valid Email address",
    "patternMismatch": "Error - Please match the requested format",
    "constraints": {
      "minLength": "Error - A minimum of {0} characters required",
      "minSpecial": "Error - At least {0} special character required",
      "forceLetters": "Error - At least one letter required",
      "forceUpper": "Error - At least one uppercase character required",
      "forceLower": "Error - At least on lowercase character required",
      "forceNumbers": "Error - At least one number required",
      "forceMixed": "Error - At least one uppercase and one lowercase character required",
      "noRepetition": "Error - No repetition of more than two characters is allowed"
    },
    "noAvailability": "Selected quantity or configuration not available.",
    "cartCountLabel": "Shopping bag, {0} item in your shopping bag.",
    "cartCountLabelPlural": "Shopping bag, {0} items in your shopping bag.",
    "checkoutPageTitle": {
      "shipping": "<?= get_bloginfo('name') ?> | Checkout - Shipping",
      "payment": "<?= get_bloginfo('name') ?> | Checkout - Payment",
      "placeOrder": "<?= get_bloginfo('name') ?> | Checkout - Review"
    },
    "salutations": {
      "mr": "Mr",
      "mrs": "Mrs",
      "ms": "Ms"
    },
    "slideNext": "Next Slide",
    "slidePrev": "Previous Slide",
    "sortLabel": "Sort by: {0}",
    "dynamicAddress": {
      "defaultOptions": {
        "city": "select.city.option.default",
        "postalCode": "select.postalcode.option.default"
      }
    },
    "checkoutShippingComplimentary": "Complimentary"
  };
  window.SFRA.Urls = {
    "Adyen": {
      "getPaymentMethods": "wp-json/siellest/Adyen-GetPaymentMethods",
      "paymentFromComponent": "wp-json/siellest/Adyen-PaymentFromComponent",
      "getMercuryPaymentMethods": "wp-json/siellest/MercuryAdyen-GetPaymentMethods"
    },
    "staticPath": "wp-content/themes/siellest/assets/",
    "searchShow": "/en-us/search",
    "searchShowAjax": "wp-json/siellest/Search-ShowAjax",
    "productShowQuickView": "wp-json/siellest/Product-ShowQuickView",
    "productShowQuickAdd": "wp-json/siellest/Product-ShowQuickAdd",
    "productEngraving": "wp-json/siellest/Product-Personalisation?personalisationType=engrav",
    "productEmbossing": "wp-json/siellest/Product-Personalisation?personalisationType=emboss",
    "productBraceletAdjustment": "wp-json/siellest/Product-Personalisation?personalisationType=braceletAdjustment",
    "productRequestPrice": "wp-json/siellest/RequestPrice-Start",
    "wishlistInList": "wp-json/siellest/Wishlist-InList",
    "wishlistAddProduct": "wp-json/siellest/Wishlist-AddProduct",
    "wishlistRemoveProduct": "wp-json/siellest/Wishlist-RemoveProduct",
    "saveForLaterProduct": {
      "add": "wp-json/siellest/SaveForLater-AddProduct",
      "remove": "wp-json/siellest/SaveForLater-RemoveProduct",
      "edit": "wp-json/siellest/SaveForLater-EditProductListItem"
    },
    "saveForLaterList": {
      "view": "wp-json/siellest/SaveForLater-List",
      "remove": "wp-json/siellest/SaveForLater-RemoveList"
    },
    "productZoom": "wp-json/siellest/Product-Zoom",
    "productShow": "wp-json/siellest/Product-Show",
    "loginShow": "/en-us/login",
    "getActiveSession": "wp-json/siellest/Login-ActiveSession",
    "cartAddProduct": "wp-json/siellest/Cart-AddProduct",
    "cartEditProduct": "wp-json/siellest/Cart-EditProductLineItem",
    "cartRemoveProduct": "wp-json/siellest/Cart-RemoveProductLineItem",
    "cartUpdateQuantity": "wp-json/siellest/Cart-UpdateQuantity",
    "addressVerification": "wp-json/siellest/Address-Verification",
    "storeLocatorModal": "/en-us/stores?showMap=false&renderView=modal",
    "storeLocatorFindStores": "wp-json/siellest/Stores-FindStores?showMap=false",
    "customBINs": "wp-json/siellest/CheckoutServices-CustomBINs",
    "dynamicAddress": {
      "city": "wp-json/siellest/Address-GetProvinceCities",
      "postalCode": "wp-json/siellest/Address-GetCitiesPostalCode"
    },
    "cartMercuryAddProduct": "wp-json/siellest/MercuryCart-AddProduct",
    "cartMercuryRemoveProduct": "wp-json/siellest/MercuryCart-RemoveProductLineItem",
    "GTMEventView": "wp-json/siellest/Gtm-EventViewDataLayer",
    "GTMVirtualView": "wp-json/siellest/Gtm-VirtualViewDataLayer",
    "verifyGoogleRecaptcha": "wp-json/siellest/ReCaptcha-VerifyCaptchaToken",
    "cartUpdateStorePickup": "wp-json/siellest/Cart-UpdateStorePickup"
  };
  window.SFRA.SitePreferences = {
    "adyenCartridgeEnabled": true,
    "cybersourceEnabled": false,
    "paypalEnabled": false,
    "mapsAPIKey": "AIzaSyBvmxkLD_ODRCJ9hw0vIJJ2ezKxiryRI9A",
    "countryCodeForMapsAPI": "US",
    "addressAutocompleteEnabled": true,
    "addressVerificationEnabled": true,
    "enableMultiShipping": false,
    "enableStorePickUp": false,
    "enableInfiniteScroll": false,
    "enableSaveForLater": false,
    "allowProductLineItemRepeats": true,
    "pdEditMode": null,
    "disableMultiAddress": false,
    "restrictSiteAccessForLoggedInUser": false,
    "restrictCustomerLoginUsingOAauthSSOOnly": false,
    "botScoreThreshold": 0.3,
    "enableGoogleRecaptcha": false,
    "googleRecaptchaSiteKey": "6Lfx490aAAAAAF7JDTnl7ek_DeDaktJy5kMRiDCG",
    "formNameForRecaptchaVerification": "{\n\"login-form\":true,\n\"dwfrm_profile\":true,\n\"dwfrm_newsletter\":true,\n\"contact-us\":true,\n\"checkout-register-form\":true,\n\"dwfrm_bookanappointment\":true,\n\"dwfrm_requestprice\":true\n}"
  };
  window.SFRA.Denali = true;
</script>
<script type="text/javascript">
  window.SFRA = window.SFRA || {};

  window.SFRA.sessionData = {
    "loggedin": false
  };
</script>