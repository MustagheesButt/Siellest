<?php
$cart_items_count = WC()->cart->get_cart_contents_count();
?>

<div class="utility-overlay__header text-align--center gutter--normal">
  <h2 class="utility-overlay__header-title fluid-type--deka-hecto heading-type font-weight--semibold">
    <a class="utility-overlay__header-anchor link--underline-hover" href="cart" title="View Shopping bag" data-qty-label="Shopping bag ({0})" data-minicart-component="qty">
      Shopping bag (<?= $cart_items_count ?>)
    </a>
  </h2>
  <button type="button" class="utility-overlay__header-close link flex flex-align-center" data-toggle-close aria-label="Close shopping bag panel">
    <svg aria-hidden="true" focusable="false" class="icon">
      <use xlink:href="#icon--close" />
    </svg>
  </button>
  <div class="utility-overlay__error extend-gutter--normal" data-cart-component="cart-error">
  </div>
</div>

<?php
  if ($cart_items_count < 1) {
?>
<p class="flex flex-align-center flex-justify-center set--h-100">Your shopping bag is empty</p>
<?php
  } else {
?>
<div class="utility-overlay__line-items" data-minicart-component="items" data-line-item-container="minicart">
  <?php
  $cart_items = WC()->cart->get_cart_contents();
  foreach ($cart_items as $key => $cart_item) {
    $product = wc_get_product($cart_item['data']->get_id());
    $formatted_price = Product::formatted_price($product->price);
    $img_link = wp_get_attachment_url($product->image_id);
  ?>
    <div class="utility-overlay__line-item product-line-item product-line-item--minicart" data-product-container="card" data-pid="<?= $product->id ?>" data-cart-line-item="8e96d8c85644c1b5b5c42941e6">
      <div class="product-line-item__main">
        <div class="product-line-item__details row">
          <div class="col-6">
            <a href="<?= $product->permalink ?>" class="product-line-item__image-wrap link" title="Diamants L&eacute;gers bracelet XS" tabindex="-1">
              <img class="product-line-item__image component-overlay component-overlay--center object-fit--contain set--w-100" src="<?= $img_link ?>?sw=250&sh=250&sm=fit&sfrm=png" alt="<?= $product->name ?>" title="<?= $product->name ?>" data-line-item-component="image" />
            </a>
          </div>
          <div class="col-6">
            <div class="product-line-item__header font-weight--semibold flex flex-justify-between">
              <div class="product-line-item__header-main">
                <a href="<?= $product->permalink ?>" class="product-line-item__name link word-break--break-word hyphens--auto" title="<?= $product->name ?>">
                  <?= $product->name ?>
                </a>
              </div>
              <div class="product-line-item__remove ">
                <button type="button" class="product-line-item__action-cta--remove button--circle-close bg--white" data-line-item-component="remove-action" data-toggle='{"target": "[data-line-item-component=remove-confirm]" , "skipSelector" : "[data-minicart-component=trigger]" , "allowEscClose" : true, "targetFocus" : "[data-line-item-component=remove-confirm-action]" , "focusTrap" : true}' aria-label="Remove, Diamants L&eacute;gers bracelet XS">
                  <span class="sr-only">Remove</span>
                  <svg aria-hidden="true" focusable="false" class="icon button__icon--circle-close">
                    <use xlink:href="#icon--close" />
                  </svg>
                </button>
                <div class="inline-prompt flex flex-direction-col flex-align-center flex-justify-center text-align--center gutter--small" data-line-item-component="remove-confirm" role="dialog" aria-labelledby="removeLineItem-8e96d8c85644c1b5b5c42941e6">
                  <div class="inline-prompt__header">
                    <h4 id="removeLineItem-8e96d8c85644c1b5b5c42941e6" class="inline-prompt__title font-weight--semibold text-line--large">Remove Product?</h4>
                  </div>
                  <p class="inline-prompt__body font-family--serif">
                    Are you sure you want to remove the following product from the cart?
                  </p>
                  <div class="inline-prompt__footer row flex-justify-center set--w-100">
                    <div class="col-4">
                      <button type="button" class="button button--small button--primary-outline body-type--deci" data-toggle-close="[data-line-item-component=remove-action]">
                        Cancel
                      </button>
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
              <div class="product-line-item__attribute font-weight--semibold  body-type--deci">
                <div class="product-line-item__total-price item-total-8e96d8c85644c1b5b5c42941e6 price font-family--sans" data-line-item-component="price-total">
                  <div class="price__sales pricing line-item-total-price-amount"><?= $formatted_price ?></div>
                </div>
              </div>
              <div class="product-line-item__attribute">
                <div class="product-line-item__promotions" data-line-item-component="promotions" data-uuid="8e96d8c85644c1b5b5c42941e6">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  <!-- <div class="utility-overlay__line-item product-line-item product-line-item--minicart" data-product-container="card" data-pid="CRB6016700" data-cart-line-item="afb67579c4df2d1a383c29583e">
    <div class="product-line-item__main">
      <div class="product-line-item__details row">
        <div class="col-6">
          <a href="/en-us/jewelry/bracelets/trinity-bracelet-CRB6016700.html" class="product-line-item__image-wrap link" title="Trinity bracelet" tabindex="-1">
            <img class="product-line-item__image component-overlay component-overlay--center object-fit--contain set--w-100" src="https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw88406a3f/images/large/637708788550193812-2059312.png?sw=250&amp;sh=250&amp;sm=fit&amp;sfrm=png" alt="Trinity bracelet" title="Trinity bracelet" data-line-item-component="image" />
          </a>
        </div>
        <div class="col-6">
          <div class="product-line-item__header font-weight--semibold flex flex-justify-between">
            <div class="product-line-item__header-main">

              <a href="/en-us/jewelry/bracelets/trinity-bracelet-CRB6016700.html" class="product-line-item__name link word-break--break-word hyphens--auto" title="Trinity bracelet">
                Trinity bracelet
              </a>
            </div>
            <div class="product-line-item__remove ">
              <button type="button" class="product-line-item__action-cta--remove button--circle-close bg--white" data-line-item-component="remove-action" data-toggle=\'{"target": "[data-line-item-component=remove-confirm]" , "skipSelector" : "[data-minicart-component=trigger]" , "allowEscClose" : true, "targetFocus" : "[data-line-item-component=remove-confirm-action]" , "focusTrap" : true}\' aria-label="Remove, Trinity bracelet">
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
            <p class="product-line-item__attribute">White gold, yellow gold, rose gold</p>
            <div class="product-line-item__options">
            </div>
            <div class="product-line-item__attribute font-weight--semibold  body-type--deci">
              <div class="product-line-item__total-price item-total-afb67579c4df2d1a383c29583e price font-family--sans" data-line-item-component="price-total">
                <div class="price__sales pricing line-item-total-price-amount">$610.00</div>
              </div>
            </div>
            <div class="product-line-item__attribute">
              <div class="product-line-item__promotions" data-line-item-component="promotions" data-uuid="afb67579c4df2d1a383c29583e">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>
<div class="utility-overlay__footer">
  <div class="utility-overlay__footer-section utility-overlay__footer-totals">
    <div class="row font-weight--semibold text-transform--uppercase" data-totals-component="subTotal">
      <div class="col-6">
        <p data-totals-component="label">Subtotal</p>
      </div>
      <div class="col-6">
        <p class="text-align--right" data-totals-component="value"><?= WC()->cart->get_cart_subtotal() ?></p>
      </div>
    </div>
    <p class="utility-overlay__footer-message font-family--serif">Shipping and taxes calculated at checkout.</p>
    <div class="utility-overlay__footer-actions">
      <a href="<?= get_site_url() ?>/cart" class="button button--primary minicart__checkout-action checkout-btn set--w-100 " role="button" data-cart-component="checkout-action">
        Proceed to Checkout
      </a>
      <isapplepay class="minicart__checkout-action button button--apple-pay set--w-100"></isapplepay>
    </div>
  </div>
</div>
<?php
  }
?>