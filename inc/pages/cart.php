<?php
$cart = Cart::get_cart_data();
$count = sizeof($cart['items']);
?>
<div class="cart  gutter--small-up-normal" data-cart-component="cart-container">
  <div class="brand__panther-image image-width__small inverted">
    <img class="panther-image" alt="cartier" src="wp-content/themes/siellest/assets/images/panthereCartierImageTransparent.webp" />
  </div>
  <div class="cart__header max-width--xmedium gutter--small-only-normal flex flex-align-baseline">
    <h1 class="cart__title fluid-type--deka-hecto heading-type">Shopping Bag</h1>
    <span class="cart__header-count font-family--serif" data-minicart-component="qty" data-qty-label-single="({0} Item)" data-qty-label="({0} Items)">
      (<?= $count ?> Items)
    </span>
  </div>
  <div class="cart__main max-width--xmedium fixit-container" data-cart-component="cart-main">
    <div class="row">
      <div class="col-12 col-lg-8">
        <div class="cart__contents">
          <div class="form-intro__copy" data-cart-component="cart-error"></div>
          <div class="cart__items" data-cart-component="cart-items" data-line-item-container="cart">
            <?php
            foreach(WC()->cart->get_cart_contents() as $cart_item) {
              $product = wc_get_product($cart_item['data']->get_id());
              $formatted_price = number_format((float)$product->price, 2);
              $currency_symbol = get_woocommerce_currency_symbol();
              $img_link = wp_get_attachment_url($product->image_id);
            ?>
            <div class="cart__line-item product-line-item product-line-item--cart gutter--normal " data-product-container="card" data-pid="<?= $product->id ?>" data-cart-line-item="afb67579c4df2d1a383c29583e">
              <div class="product-line-item__main">
                <div class="product-line-item__details row">
                  <div class="col-5 col-md-4">
                    <a href="<?= $product->permalink ?>" class="product-line-item__image-wrap link" title="<?= $product->name ?>" tabindex="-1">
                      <img class="product-line-item__image component-overlay component-overlay--center object-fit--contain set--w-100" src="<?= $img_link ?>" alt="<?= $product->name ?>" title="<?= $product->name ?>" data-line-item-component="image" />
                    </a>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="product-line-item__header font-weight--semibold flex flex-justify-between">
                      <div class="product-line-item__header-main">
                        <a href="<?= $product->permalink ?>" class="product-line-item__name link word-break--break-word hyphens--auto" title="<?= $product->name ?>">
                          <?= $product->name ?>
                        </a>
                      </div>
                      <div class="product-line-item__header-price display--medium-up white-space--nowrap">
                        <div class="product-line-item__total-price item-total-afb67579c4df2d1a383c29583e price font-family--sans" data-line-item-component="price-total">
                          <div class="price__sales pricing line-item-total-price-amount"><?= $currency_symbol ?><?= $formatted_price ?></div>
                        </div>
                      </div>
                      <div class="product-line-item__remove ">
                        <button type="button" class="product-line-item__action-cta--remove button--circle-close bg--white" data-line-item-component="remove-action" data-toggle='{"target": "[data-line-item-component=remove-confirm]", "skipSelector": "[data-minicart-component=trigger]", "allowEscClose": true, "targetFocus": "[data-line-item-component=remove-confirm-action]", "focusTrap": true}' aria-label="Remove, Trinity bracelet">
                          <span class="sr-only">Remove</span>
                          <svg aria-hidden="true" focusable="false" class="icon button__icon--circle-close">
                            <use xlink:href="#icon--close" />
                          </svg>
                        </button>
                        <div class="inline-prompt flex flex-direction-col flex-align-center flex-justify-center text-align--center gutter--small" data-line-item-component="remove-confirm" role="dialog" aria-labelledby="removeLineItem-afb67579c4df2d1a383c29583e">
                          <div class="inline-prompt__header">
                            <h4 id="removeLineItem-afb67579c4df2d1a383c29583e" class="inline-prompt__title font-weight--semibold text-line--large">Remove Product?</h4>
                          </div>
                          <p class="inline-prompt__body font-family--serif">
                            Are you sure you want to remove the following product from the cart?
                          </p>
                          <div class="inline-prompt__footer row flex-justify-center set--w-100">
                            <div class="col-4">
                              <button type="button" class="button button--small button--primary-outline body-type--deci" data-toggle-close="[data-line-item-component=remove-action]">Cancel</button>
                            </div>
                            <div class="col-4">
                              <button type="button" class="button button--small button--primary body-type--deci" data-toggle-close="[data-line-item-component=remove-action]" data-line-item-component="remove-confirm-action">
                                Yes
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-line-item__attributes font-family--serif body-type--deci word-break--break-word hyphens--auto">

                      <p class="product-line-item__attribute"><?= $product->short_description ?></p>
                      <div class="product-line-item__options">
                      </div>
                      <div class="product-line-item__attribute font-weight--semibold display--medium-down body-type--deci">
                        <div class="product-line-item__total-price item-total-afb67579c4df2d1a383c29583e price font-family--sans" data-line-item-component="price-total">
                          <div class="price__sales pricing line-item-total-price-amount"><?= $currency_symbol ?><?= $formatted_price ?></div>
                        </div>
                      </div>
                      <div class="product-line-item__attribute">
                        <div class="product-line-item__promotions" data-line-item-component="promotions" data-uuid="afb67579c4df2d1a383c29583e">
                        </div>
                      </div>
                    </div>
                    <div class="product-line-item__actions">
                      <div class="product-line-item__action product-line-item__add">
                        <button type="button" class="link--primary" data-product-component="add-button" data-line-item-component="add-action" data-tracking='{"trackEvent": "shoppingBagLink", "trackObject": {"linkTitle": "Add another item"}}' aria-label="Add another &quot;Trinity bracelet&quot; to bag">
                          Add Another Item
                        </button>
                      </div>
                      <div class="product-line-item__action product-line-item__wishlist">
                        <button type="button" class="product-line-item__wishlist-remove link--primary" data-wishlist-trigger data-tracking='{"trackEvent": "shoppingBagLink", "trackObject": {"linkTitle": "Remove from Wish List"}}' aria-label="Remove from wishlist, Trinity bracelet">Remove from Wish List</button>
                        <button type="button" class="product-line-item__wishlist-add link--primary" data-wishlist-trigger data-wishlist-label-add="Move to Wishlist" data-pid="<?= $product->id ?>" data-uuid="afb67579c4df2d1a383c29583e" data-line-item-component="remove-confirm-action" data-action="/on/demandware.store/Sites-CartierUS-Site/en_US/Cart-RemoveProductLineItem" data-tracking='{"trackEvent": "shoppingBagLink", "trackObject": {"linkTitle": "Move to Wishlist"}}' aria-label="Move to wishlist, Trinity bracelet">Move to Wishlist</button>
                      </div>
                    </div>
                    <input type="hidden" value="1" data-product-component="qty" />
                    <div class="product-line-item__personalisations">
                      <div class="product-line-item__personalisation" data-line-item-component="gift-personalisation">
                        <div class="product-line-item__giftmessage">
                          <a href="wp-json/siellest/Cart-AddPersonalisation?ProductPersonalisation=ProductGiftMessage&uuid=afb67579c4df2d1a383c29583e&pid=<?= $product->id ?>" class="link--secondary body-type--centi" data-modal-trigger='{"url": "wp-json/siellest/Cart-AddPersonalisation?ProductPersonalisation=ProductGiftMessage&amp;uuid=afb67579c4df2d1a383c29583e&pid=<?= $product->id ?>", "type":"html", "options": {"modalID": "giftPersonalisation-afb67579c4df2d1a383c29583e", "modalClass": "modal--base modal--gift-personalisation", "keepAlive": false}, "tracking": {"modalName": "gift-message-shopping-bag"}}' data-tracking='{"trackEvent": "shoppingBagLink", "trackObject": {"linkTitle": "Add Gift Message"}}' aria-label="Add gift message for Trinity bracelet">
                            Add gift message
                          </a>
                        </div>
                      </div>
                      <div class="product-line-item__personalisation" data-line-item-component="engrav-personalisation">
                      </div>
                      <div class="product-line-item__personalisation" data-line-item-component="emboss-personalisation">
                      </div>
                      <div class="product-line-item__personalisation" data-line-item-component="bracelet-adjustment-personalisation">
                      </div>
                    </div>
                    <div class="product-line-item__gift-wrapping form-section">
                      <hr class="text-color--grey-3 ">
                      <div class="flex form-check-group__item set--w-100">
                        <input type="checkbox" id="giftWrap0" class="form-check-input" data-line-item-component="gift-wrapping" data-url="wp-json/siellest/Cart-ToggleGiftwrap?pid=<?= $product->id ?>&uuid=afb67579c4df2d1a383c29583e">
                        <label for="giftWrap0" class="body-type--centi form-check-label text-line--medium cursor--pointer">
                          Add Gift Wrapping
                        </label>
                        <button type="button" class="component-outer-h-align--right" data-toggle='{"target": "[data-gift-wrap-0]", "persist": true}'>
                          <svg aria-hidden="true" focusable="false" class="icon cart__gift-wrap-arrow body-type--deci">
                            <use xlink:href="#icon--angle-down" />
                          </svg>
                        </button>
                      </div>
                      <p class="body-type--deci font-family--serif form-group--short-spacing toggle-display--hidden" data-gift-wrap-0>
                        A complementary Cartier shopping bag is included with every item. Boutique pickup orders will not be gift-wrapped so you can verify your order; however, you may request it from the boutique team apon arrival.
                      </p>
                      <hr class="text-color--grey-3">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="approaching-discounts" data-cart-component="approaching-discounts">
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="cart__summary-container">
          <div class="cart__summary fixit-element" data-cart-component="summary" data-fixit-trigger='{"enabled": "small-up", "respondToParent": ".cart__summary-container", "containedInParent": ".cart__main", "offset": ".header", "useOffsetOnTarget": true}'>
            <div class="cart__summary-section order-summary__totals gutter--normal">
              <div class="cart__totals" data-cart-component="totals">
                <dl class="total-list">
                  <div class="total-list__row row flex-align-center text-color--grey-5 hidden" data-totals-component="shippingLevelDiscountTotal">
                    <dt class="col">
                      <p class="word-break--break-word hyphens--auto" data-totals-component="label">Shipping Discount</p>
                    </dt>
                    <dd class="col">
                      <p class="text-align--right">- <span data-totals-component="value">$0.00</span></p>
                    </dd>
                  </div>
                  <div class="total-list__row row flex-align-center font-weight--semibold order-discount body-type--centi hidden" data-totals-component="orderLevelDiscountTotal">
                    <dt class="col">
                      <p class="order-receipt-label heading-type word-break--break-word hyphens--auto" data-totals-component="label">Order Discount</p>
                    </dt>
                    <dd class="col">
                      <p class="text-align--right order-discount-total">- <span data-totals-component="value">$0.00</span></p>
                    </dd>
                  </div>
                  <div class="total-list__row--short-spacing row flex-align-center font-weight--semibold subtotal-item" data-totals-component="subTotal">
                    <dt class="col">
                      <p class="order-receipt-label heading-type word-break--break-word hyphens--auto" data-totals-component="label">Subtotal</p>
                    </dt>
                    <dd class="col">
                      <p class="text-align--right sub-total word-break--break-word" data-totals-component="value"><?= $cart['totals']['subTotal'] ?></p>
                    </dd>
                  </div>
                  <div class="total-list__row row sales-tax-item" data-totals-component="totalTax">
                    <dt class="col">
                      <p class="order-receipt-label font-family--serif word-break--break-word hyphens--auto" data-totals-component="label">Sales tax</p>
                    </dt>
                    <dd class="col">
                      <p class="text-align--right tax-total body-type--centi" data-totals-component="value">$0.00</p>
                    </dd>
                  </div>
                </dl>
              </div>
              <div class="cart__summary-section cart__checkout-actions">
                <a href="<?= get_site_url() ?>/checkout" class="button button--primary cart__checkout-action checkout-btn set--w-100 " role="button" data-cart-component="checkout-action" data-tracking='{"trackEvent": "shoppingBagLink", "trackObject": {"linkTitle": "Proceed to Checkout"}}'>
                  Proceed to Checkout
                </a>
                <isapplepay class="cart__checkout-action button button--apple-pay set--w-100"></isapplepay>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cart__back-to-shopping text-align--small-center">
      <a class="link--secondary link--flex flex-align-center font-weight--semibold" href="<?= get_site_url() ?>" title="Back to Shopping" data-tracking='{"trackEvent": "shoppingBagLink", "trackObject": {"linkTitle": "Back to Shopping"}}' aria-label="Back to Shopping">
        <svg aria-hidden="true" focusable="false" class="icon icon--set-left-short">
          <use xlink:href="#icon--angle-left" />
        </svg>
        Back to Shopping
      </a>
    </div>
  </div>
</div>