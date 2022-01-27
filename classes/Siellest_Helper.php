<?php

  class SiellestHelper {
    public static function render_product($product) {
      $id       = $product->id;
      $p_link   = $product->get_permalink();
      $name     = $product->get_name();
      $currency = get_woocommerce_currency();
      $currency_symbol = get_woocommerce_currency_symbol();
      $price           = $product->get_price();
      $formatted_price = number_format((float)$price, 2);
      $img             = wp_get_attachment_url( $product->get_image_id() );
    
      return "<div class=\"product-grid__item col-6 col-md-3\" data-tracking-context=\"Productlisting\">
      <div class=\"product flex flex-grow-1 flex-direction-col\">
        <div class=\"product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center\" itemscope itemtype=\"http://schema.org/Product\" data-product-container=\"tile\" data-product-tile data-pid=\"$id\" data-tracking-id=\"$id\" data-tracking-position>
    
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
          <button type=\"button\" class=\"product-tile__wishlist body-type--deka\" title=\"Add to Wish List, $name\" data-wishlist-trigger=\"heart\" data-wishlist-label-add=\"Add to Wish List, $name\" data-wishlist-label-remove=\"Remove from Wish List, $name\">
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
                <button type=\"button\" class=\"button button--primary button--small set--w-100\" data-url=\"wp-json/siellest/Product-ShowQuickView?pid=$id\" data-product-url=\"productShowQuickView\" title=\"Quick View for $name\" data-quickview-trigger=\"\">
                  Quick View
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>";
    }
  }