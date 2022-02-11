Siellest Wordpress Theme

Based on https://cartier.com. Made with love at https://nezuco.com

TODO

set permalink structure for WP REST API
account pages template should not be needed
create woocommerce categories and attributes
 - fix subcategories not getting attached correctly

 A_API_KEY=look_in_constants.php

curl https://checkout-test.adyen.com/v68/payments \
-H 'x-api-key: A_API_KEY' \
-H 'content-type: application/json' \
-d '{
  "merchantAccount": "NezucoIncECOM",
  "reference": "My first Adyen test payment",
  "amount": {
    "value": 1000,
    "currency": "EUR"
  },
    "paymentMethod": {
    "type": "scheme",
    "encryptedCardNumber": "test_4111111111111111",
    "encryptedExpiryMonth": "test_03",
    "encryptedExpiryYear": "test_2030",
    "encryptedSecurityCode": "test_737"
  }
}'
