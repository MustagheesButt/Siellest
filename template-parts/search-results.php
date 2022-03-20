<p class="site-search__suggestions-section site-search__suggestions-corrections text-align--small-up-center cms-generic-copy">
  Do you mean?
  <a class="site-search__suggestions-correction link link--underline font-weight--semibold" href="/en-us/search?q=bracelet">bracelet</a>
</p>
<div class="site-search__suggestions-list" data-search-component="suggestions-list">
  <p id="siteSearchLiveUpdate" role="status" aria-live="polite" class="sr-only">Search results updated below</p>
  <div class="row">
    <div class="col-12 col-md site-search__suggestions-section">
      <ul class="site-search__suggestions-matches list--reset row">
        <?php
        foreach($products as $product) {
          $currency = get_woocommerce_currency();
          $formatted_price = Product::formatted_price($product->price);
          $images = Product::get_images($product, 'small');
          $img1 = $images[0]['url'];
          if (sizeof($images) > 1) {
            $img2 = $images[1]['url'];
          }

          // TODO i think they've updated all images to require full-stretch
          $stretch_class = $product->get_meta('has_background') ? 'full-stretch-image' : '';
        ?>
        <li class="site-search__suggestions-item col-6 col-md-4">
          <div class="product flex flex-grow-1 flex-direction-col">
            <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="<?= $product->id ?>">

              <a class="product-tile__anchor" href="<?= $product->get_permalink() ?>" data-product-url="productShow" itemprop="url">

                <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                  <div class="product-tile__media-container component-overlay component-overlay--center">
                    <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image <?= $stretch_class ?> " data-product-component="image" data-src="<?= $img1 ?>" data-image-index="0" itemprop="image" alt="<?= $product->name ?>" width="350" height="350" title="<?= $product->name ?>" />
                    <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  <?= $stretch_class ?> " data-product-component="image" data-src="<? $img2 ?>" data-image-index="1" itemprop="image" alt="<?= $product->name ?>" width="350" height="350" title="<?= $product->name ?>" />
                  </div>
                </div>
                <div class="product-tile__body">
                  <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                    <!-- <span class="font-family--cartier-logos">LOVE</span> bracelet -->
                    <?= $product->name ?>
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
                        <span class="value" itemprop="price" content="<?= $product->price ?>">
                          <?= $formatted_price ?>
                        </span>
                    </div>
                  </div>

                </div>
              </a>
              <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, <?= $product->name ?>" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, <?= $product->name ?>" data-wishlist-label-remove="Remove from Wish List, <?= $product->name ?>">
                <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                  <use xlink:href="#icon--heart" />
                </svg>
                <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                  <use xlink:href="#icon--heart-filled" />
                </svg>
              </button>
              <div class="product-tile__body-section">
                <div class="ratings flex">
                </div>
              </div>

            </div>
          </div>
        </li>
        <?php } ?>
        <!-- <li class="site-search__suggestions-item col-6 col-md-4">
          <div class="product flex flex-grow-1 flex-direction-col">
            <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6064617">

              <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-B6064617.html" data-product-url="productShow" itemprop="url">

                <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                  <div class="product-tile__media-container component-overlay component-overlay--center">
                    <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwb90629bb/images/large/637771113591285086-2292570.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet" width="350" height="350" title="#LOVE# bracelet" />
                    <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image " data-product-component="image" data-src="https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw417aaf8c/images/large/637771113591285086-2292592.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet" width="350" height="350" title="#LOVE# bracelet" />
                  </div>
                </div>
                <div class="product-tile__body">
                  <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                    <span class="font-family--cartier-logos">LOVE</span> bracelet
                  </p>
                  <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                  </div>
                  <p class="product-tile__body-section product-tile__material font-family--serif">
                    Yellow gold
                  </p>
                  <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                    <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                      <meta itemprop="priceCurrency" content="USD" />
                      <span class="price__sales sales">
                        <span class="value" itemprop="price" content="8350.00">
                          $8,350.00
                        </span>
                    </div>
                  </div>
                </div>
              </a>
              <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet">
                <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                  <use xlink:href="#icon--heart" />
                </svg>
                <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                  <use xlink:href="#icon--heart-filled" />
                </svg>
              </button>
              <div class="product-tile__body-section">
                <div class="ratings flex">
                </div>
              </div>

            </div>
          </div>
        </li>
        <li class="site-search__suggestions-item col-6 col-md-4">
          <div class="product flex flex-grow-1 flex-direction-col">
            <div class="product-tile product-tile--default flex flex-direction-col flex-grow-1 text-align--center" itemscope itemtype="http://schema.org/Product" data-product-container="tile" data-product-tile data-pid="B6064717">

              <a class="product-tile__anchor" href="/en-us/jewelry/bracelets/love-bracelet-B6064717.html" data-product-url="productShow" itemprop="url">

                <div class="product-tile__media product-tile__media--default aspect-ratio--square ">
                  <div class="product-tile__media-container component-overlay component-overlay--center">
                    <img class="product-tile__image product-tile__image--primary component-overlay component-overlay--center object-fit--contain lazyload none-up set--has-secondary-image full-stretch-image " data-product-component="image" data-src="https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw0794378c/images/large/637751249623636188-2267239.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="0" itemprop="image" alt="#LOVE# bracelet" width="350" height="350" title="#LOVE# bracelet" />
                    <img class="product-tile__image product-tile__image--secondary component-overlay component-overlay--center object-fit--contain lazyload none-up display--small-up  full-stretch-image " data-product-component="image" data-src="https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dwfb29a10f/images/large/637795308630341062-2295918.png?sw=350&amp;sh=350&amp;sm=fit&amp;sfrm=png" data-image-index="1" itemprop="image" alt="#LOVE# bracelet" width="350" height="350" title="#LOVE# bracelet" />
                  </div>
                </div>
                <div class="product-tile__body">
                  <p class="product-tile__body-section product-tile__name text-line--large heading-type body-type--deci" itemprop="name">
                    <span class="font-family--cartier-logos">LOVE</span> bracelet
                  </p>
                  <div class="product-tile__body-section product-tile__swatches font-family--serif" data-product-component="swatches">
                  </div>
                  <p class="product-tile__body-section product-tile__material font-family--serif">
                    White gold
                  </p>
                  <div class="product-tile__body-section text-line--large font-weight--semibold body-type--deci">
                    <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">

                      <meta itemprop="priceCurrency" content="USD" />
                      <span class="price__sales sales">
                        <span class="value" itemprop="price" content="8950.00">
                          $8,950.00
                        </span>
                    </div>
                  </div>
                </div>
              </a>
              <button type="button" class="product-tile__wishlist body-type--deka" title="Add to Wish List, #LOVE# bracelet" data-wishlist-trigger="heart" data-wishlist-label-add="Add to Wish List, #LOVE# bracelet" data-wishlist-label-remove="Remove from Wish List, #LOVE# bracelet">
                <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-add">
                  <use xlink:href="#icon--heart" />
                </svg>
                <svg aria-hidden="true" focusable="false" class="icon product-tile__wishlist-remove">
                  <use xlink:href="#icon--heart-filled" />
                </svg>
              </button>
              <div class="product-tile__body-section">
                <div class="ratings flex">
                </div>
              </div>

            </div>
          </div>
        </li> -->
      </ul>
    </div>
    <div class="col-12 col-md-4 off-md-1">
      <div class="site-search__suggestions-section">
        <h2 class="site-search__suggestions-title heading-type fluid-type--deka-base">Categories</h2>
        <ul class="site-search__suggestions-matches list--reset">
          <li class="site-search__suggestions-item">
            <a class="link--primary" href="/en-us/jewelry/bracelets/">
              <div class="site-search__suggestions-name">
                <span class="font-weight--semibold">Bracelets</span>
                <span> in Jewelry</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="site-search__suggestions-section">
        <h2 class="site-search__suggestions-title heading-type fluid-type--deka-base">Articles</h2>
        <ul class="site-search__suggestions-matches list--reset">
          <li class="site-search__suggestions-item">

            <a class="site-search__suggestions-name link--secondary body-type--centi font-weight--semibold" href="/en-us/faq-product.html" title="Go to HOW DO I KNOW MY SIZE?">HOW DO I KNOW MY SIZE?</a>
          </li>
          <li class="site-search__suggestions-item">

            <a class="site-search__suggestions-name link--secondary body-type--centi font-weight--semibold" href="/en-us/page-show?cid=faq-shipping-delivery" title="Go to HOW LONG WILL IT TAKE TO RECEIVE MY ORDER?">HOW LONG WILL IT TAKE TO RECEIVE MY ORDER?</a>
          </li>
          <li class="site-search__suggestions-item">

            <a class="site-search__suggestions-name link--secondary body-type--centi font-weight--semibold" href="/en-us/conditions-of-sale.html" title="Go to 19. PRODUCT DESCRIPTIONS">19. PRODUCT DESCRIPTIONS</a>

          </li>
        </ul>
      </div>
    </div>
  </div>
</div>