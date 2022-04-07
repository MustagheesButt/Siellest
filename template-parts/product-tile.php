<div class="<?= $is_grid ? 'product-grid__item col-6 col-md-3' : 'col-12 col-md-4 col-lg-3' ?>" data-tracking-context="Productlisting">
  <div class="product flex flex-grow-1 flex-direction-col">
    <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="<?= $id ?>" data-tracking-id="<?= $id ?>" data-tracking-position>

      <a class="product-tile__anchor" href="<?= $p_link ?>" data-product-url="productShow" itemprop="url">

        <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
          <div class="product-tile__media-container component-overlay component-overlay--center">
            <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image <?= $stretch_class ?>" data-product-component="image" data-src="<?= $img1 ?>?sw=350&sh=350&sm=fit&sfrm=png" data-image-index="0" itemprop="image" alt="<?= $name ?>" title="<?= $name ?>" />

            <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up <?= $stretch_class ?>" data-product-component="image" data-src="<?= $img2 ?>?sw=350&sh=350&sm=fit&sfrm=png" data-image-index="1" itemprop="image" alt="<?= $name ?>" title="<?= $name ?>" />
          </div>
        </div>
        <div class="product-tile__body">
          <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
            <?= $name ?>
          </p>
          <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
          </div>
          <p class="product-tile__body-section product-tile__material font-family--serif">
            <?= $product->short_description ?>
          </p>
          <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
            <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <meta itemprop="priceCurrency" content="<?= $currency ?>" />
              <span class="price__sales sales">
                <span class="value" itemprop="price" content="<?= $price ?>">
                  <?= $formatted_price ?>
                </span>
              </span>
            </div>
          </div>
          <div class="body-type--deci">
          </div>
        </div>
      </a>
      <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, <?= $name ?>" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, <?= $name ?>" data-wishlist-label-remove="Remove from Wish List, <?= $name ?>">
        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
          <use xlink:href="#icon--heart" />
        </svg>
        <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
          <use xlink:href="#icon--heart-filled" />
        </svg>
      </button>
      <div class="product-tile__overlay flex flex-align-end bg--white">
        <div class="product-tile__overlay-actions set--w-100">
          <div class="product-tile__quickadd" data-quickadd>
            <?php
            if ($add_to_bag) {
            ?>
              <button type="button" class="product-tile__quickadd-trigger button button--primary button--small set--w-100" data-url="wp-json/siellest/Product-ShowQuickAdd?pid=<?= $id ?>" data-product-url="productShowQuickAdd" title="Quick Add for <?= $name ?>" data-quickadd-trigger>
                <span class="display--small-up">
                  Add to Shopping Bag
                </span>
                <span class="display--small-only">
                  Add to Bag
                </span>
              </button>
              <div class="product-tile__quickadd-panel body-type--deci" data-quickadd-component="panel" tabindex="-1" role="dialog" aria-modal="true"></div>
            <?php } else { ?>
              <button type="button" class="button button--primary button--small set--w-100" data-url="wp-json/siellest/Product-ShowQuickView?pid=<?= $id ?>" data-product-url="productShowQuickView" title="Quick View for <?= $name ?>" data-quickview-trigger="">
                Quick View
              </button>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>