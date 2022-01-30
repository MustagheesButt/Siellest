<?php
include 'country-options.php';

$pages = [
  'homepage-eoy2021' => [
    'title' => 'homepage-eoy2021',
    'meta' => [
      'Title' => 'Siellest® Official Website - Jeweler and Watchmaker since 1847'
    ]
  ],
  'homepage-valentines-day' => [
    'title' => 'homepage-valentines-day',
    'meta' => [
      'Title' => 'Siellest® Official Website - Jeweler and Watchmaker since 1847'
    ]
  ],

  'contact-customer-care' => [
    'title' => 'Contact us'
  ],
  'services' => [
    'title' => 'Services'
  ],
  'your-purchase-concierge' => [
    'title' => 'Your Purchase Concierge'
  ],
  'gifts' => [
    'title' => 'Gifts'
  ],

  'wishlist' => [
    'title' => 'Wishlist',
    'meta' => [ // custom fields
      'Title' => 'My Account - My Wish List',
      'action' => 'Wishlist-Show'
    ]
  ],
  'cart' => [
    'title' => 'Cart',
    'meta' => [
      'Title' => 'Shopping Bag'
    ]
  ],
  'checkout' => [
    'title' => 'Checkout',
    'meta' => [
      'action' => 'Checkout-Begin'
    ]
  ]
];

$pages_content = array(
  'homepage-eoy2021' => '<h1 class="sr-only">homepage-eoy2021</h1>
  <div class="experience-region experience-main">
    <div class="experience-component experience-accelerator_assets-htmlBlock">
      <article class="flex set--w-100 html-block html-block--size-regular" style="" data-content-component="html-block">

        <div class="html-block__content flex flex-direction-col set--w-100">
          <div class="html-block__copy set--text-after">
            <div class="html-block__body cms-generic-copy font-family--serif">
              <link rel="stylesheet" href="wp-content/themes/siellest/assets/HP-EOY-2021-Immersive/css/sixtyfps-eoy-app.css">
              <p id="sixtyfps-eoy-wrapper"></p>
              <p style="position: absolute; font-family: Brilliant Cut Pro;">&nbsp;</p>
              <p style="font-family: Brilliant Cut Pro; position: absolute">&nbsp;</p>
              <script>
                const SIXTYFPS_EOY_LANG = "en_US";
                const ASSETS_PATH = "wp-content/themes/siellest/assets/HP-EOY-2021-Immersive/";
              </script>
              <script src="wp-content/themes/siellest/assets/HP-EOY-2021-Immersive/js/sixtyfps-eoy-app.js"></script>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>',

  'homepage-valentines-day' => '
  <h1 class="sr-only">VALENTINES DAY</h1>
  <div class="experience-region experience-main">
    <div class="experience-component experience-accelerator_layouts-flexibleGrid">
      <div class="module-container  " style="" data-tracking-context="content-grid">
        <section class="max-width--large module-container__constraint--center gutter--normal module-container--has-outer-gutter">
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
          <div class="module-grid row  module-grid--has-inner-gutters flex-align-center flex-justify-center">
            <div class="module-grid__item col-12 col-md-12 col-lg-12">
              <article class="set--w-100 flex flex-direction-col content-tile content-tile--size-regular content-tile--ratio-natural content-tile--style-default component-outer-v-align--center component-outer-h-align--center set--motion-complete" style="" data-content-component="content-tile" data-tracking-id="VALENTINE\'S DAY GIFTS" data-tracking-position="1">
                <div class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">
                  <div class="content-tile__media ">
                    <picture>
                      <source data-srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/01_HOMEPAGE_PLANS_LOVE_IS_TIMELESS&amp;CELEBRATION_NEL_2560x996.webp" class="picture--source-element" srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/01_HOMEPAGE_PLANS_LOVE_IS_TIMELESS&amp;CELEBRATION_NEL_2560x996.webp">
                      <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/homepage/hp-valentines-day/01_HOMEPAGE_PLANS_LOVE_IS_TIMELESS&amp;CELEBRATION_NEL_2560x996.webp?sw=40&amp;q=100" class="component-image content-tile__img object-fit--cover blur-up lazyloaded" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; ">
                    </picture>
                  </div>
                </div>
                <a class="component-overlay component-overlay--low-index component-overlay--center " href="valentines-gifts-from-the-heart/" aria-label="Shop">
                <span class="sr-only">
                VALENTINE\'S DAY GIFTS
                For an unforgettable surprise, celebrate Valentine\'s Day with the most exceptional ' . get_bloginfo('name') . ' collections.
                Shop
                </span>
                </a>
                <div class="content-tile__content-wrap set--w-100 flex set--text-after text-align--center component-v-align--center component-h-align--center" style="">
                  <div class="content-tile__content">
                    <h2 class="content-tile__title heading-type component-copy__title--regular set--motion-complete">
                      VALENTINE\'S DAY GIFTS
                    </h2>
                    <div class="content-tile__description font-family--serif text-line--medium set--motion-complete">
                      For an unforgettable surprise, celebrate Valentine\'s Day with the most exceptional ' . get_bloginfo('name') . ' collections.
                    </div>
                    <div class="component-actions content-tile__actions set--motion-complete">
                      <a href="valentines-gifts-from-the-heart/" class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary " aria-label="Shop" tabindex="-1" style="">
                      Shop
                      </a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
        </section>
      </div>
    </div>
    <div class="experience-component experience-accelerator_layouts-flexibleGrid">
      <div class="module-container module-container--spacing-top-small module-container--spacing-bottom-small" style="" data-tracking-context="content-grid">
        <section class="max-width--large module-container__constraint--center gutter--normal module-container--has-outer-gutter">
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
          <div class="module-grid row module-grid--spacing-row-regular module-grid--has-inner-gutters flex-align-center flex-justify-center">
            <div class="module-grid__item col-12 col-md-12 col-lg-12">
              <article class="set--w-100 flex flex-direction-col content-tile content-tile--size-regular content-tile--ratio-natural content-tile--style-default component-outer-v-align--center component-outer-h-align--center set--motion-complete" style="" data-content-component="content-tile" data-tracking-position="2">
                <div class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">
                  <div class="content-tile__media ">
                    <picture>
                      <source data-srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/Cartier_StVal_LOVE%20BOX_2560x966_V1_A.webp" class="picture--source-element" srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/Cartier_StVal_LOVE%20BOX_2560x966_V1_A.webp">
                      <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/homepage/hp-valentines-day/Cartier_StVal_LOVE%20BOX_2560x966_V1_A.webp?sw=40&amp;q=100" class="component-image content-tile__img object-fit--cover blur-up lazyloaded" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; ">
                    </picture>
                  </div>
                </div>
                <a class="component-overlay component-overlay--low-index component-overlay--center " href="a-month-for-love" aria-label="View the campaign">
                <span class="sr-only">
                From ' . get_bloginfo('name') . ' with Love
                Join the Friends of the Maison in celebrating universal love that brings us together.
                View the campaign
                </span>
                </a>
                <div class="content-tile__content-wrap set--w-100 flex set--text-after text-align--center component-v-align--center component-h-align--center" style="">
                  <div class="content-tile__content">
                    <h2 class="content-tile__title heading-type component-copy__title--regular set--motion-complete">
                      From ' . get_bloginfo('name') . ' with Love
                    </h2>
                    <div class="content-tile__description font-family--serif text-line--medium set--motion-complete">
                      Join the Friends of the Maison in celebrating universal love that brings us together.
                    </div>
                    <div class="component-actions content-tile__actions set--motion-complete">
                      <a href="a-month-for-love" class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary " aria-label="View the campaign" tabindex="-1" style="">
                      View the campaign
                      </a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
        </section>
      </div>
    </div>
    <div class="experience-component experience-accelerator_layouts-flexibleGrid">
      <div class="module-container  " style="" data-tracking-context="content-grid">
        <section class="max-width--large module-container__constraint--center gutter--normal module-container--has-outer-gutter">
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
          <div class="module-grid row  module-grid--has-inner-gutters">
            <div class="module-grid__item col-12 col-md-12 col-lg-12">
              <article class="set--w-100 flex flex-direction-col content-tile content-tile--size-regular content-tile--ratio-natural content-tile--style-default set--motion-complete" style="" data-content-component="content-tile" data-tracking-id="AN ICON FOR YOUR ICON" data-tracking-position="3">
                <div class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">
                  <div class="content-tile__media ">
                    <picture>
                      <source data-srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/03_HOMEPAGE_PLANS_LOVE_IS_TIMELESS&amp;CELEBRATION_B6035917+%20CRB6048218_NEL_2560x996.webp" class="picture--source-element" srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/03_HOMEPAGE_PLANS_LOVE_IS_TIMELESS&amp;CELEBRATION_B6035917+%20CRB6048218_NEL_2560x996.webp">
                      <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/homepage/hp-valentines-day/03_HOMEPAGE_PLANS_LOVE_IS_TIMELESS&amp;CELEBRATION_B6035917+%20CRB6048218_NEL_2560x996.webp?sw=40&amp;q=100" class="component-image content-tile__img object-fit--cover blur-up lazyloaded" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; ">
                    </picture>
                  </div>
                </div>
                <a class="component-overlay component-overlay--low-index component-overlay--center " href="valentines-an-iconic-love-story/" aria-label="Shop Icons">
                <span class="sr-only">
                AN ICON FOR YOUR ICON
                Celebrate the most legendary love story of all... yours.
                Shop Icons
                </span>
                </a>
                <div class="content-tile__content-wrap set--w-100 flex set--text-after text-align--center component-h-align--center" style="">
                  <div class="content-tile__content">
                    <h2 class="content-tile__title heading-type component-copy__title--regular set--motion-complete">
                      AN ICON FOR YOUR ICON
                    </h2>
                    <div class="content-tile__description font-family--serif text-line--medium set--motion-complete">
                      Celebrate the most legendary love story of all... yours.
                    </div>
                    <div class="component-actions content-tile__actions set--motion-complete">
                      <a href="valentines-an-iconic-love-story/" class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary " aria-label="Shop Icons" tabindex="-1" style="">
                      Shop Icons
                      </a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
        </section>
      </div>
    </div>
    <div class="experience-component experience-accelerator_layouts-2colLayout">
      <div class="module-container  " style="" data-tracking-context="content-grid">
        <section class="max-width--large module-container__constraint--center gutter--normal module-container--has-outer-gutter">
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
          <div class="module-grid row  module-grid--has-inner-gutters flex-align-center flex-justify-center">
            <div class="module-grid__item col-12 col-md-6 col-lg-6">
              <div class="flex flex-grow-1">
                <article class="set--w-100 flex flex-direction-col content-tile content-tile--size-regular content-tile--ratio-natural content-tile--style-default set--motion-complete" style="" data-content-component="content-tile" data-tracking-id="null" data-tracking-position="4">
                  <div class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">
                    <div class="content-tile__media ">
                      <picture>
                        <source data-srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/04_HOMEPAGE_PLANS_LOVE_IS_TIMELESS&amp;CELEBRATION_NEL_1920x1494.webp" class="picture--source-element" srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/04_HOMEPAGE_PLANS_LOVE_IS_TIMELESS&amp;CELEBRATION_NEL_1920x1494.webp">
                        <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/homepage/hp-valentines-day/04_HOMEPAGE_PLANS_LOVE_IS_TIMELESS&amp;CELEBRATION_NEL_1920x1494.webp?sw=40&amp;q=100" class="component-image content-tile__img object-fit--cover blur-up lazyloaded" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; ">
                      </picture>
                    </div>
                  </div>
                  <div class="content-tile__content-wrap set--w-100 flex set--text-after text-align--center component-h-align--center" style="">
                    <div class="content-tile__content">
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="module-grid__item col-12 col-md-6 col-lg-6">
              <div class="flex flex-grow-1">
                <article class="set--w-100 flex flex-direction-col content-tile content-tile--size-regular content-tile--ratio-natural content-tile--style-default component-outer-v-align--center component-outer-h-align--center component-outer-v-align--small-center component-outer-h-align--small-center component-custom-width set--motion-complete" style="--component-var-width:60%; " data-content-component="content-tile" data-tracking-id="MAKE YOUR LOVE STORY MAGICAL" data-tracking-position="5">
                  <div class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">
                  </div>
                  <a class="component-overlay component-overlay--low-index component-overlay--center " href="news/#/stories/news/2201-str-news-vday-campaign" aria-label="Read more">
                  <span class="sr-only">
                  MAKE YOUR LOVE STORY MAGICAL
                  Love can be the greatest adventure of all if you let it pave the way. Whether intense, timeless, passionate, everlasting or unconditional, every expression of love can be found in a ' . get_bloginfo('name') . ' red box.
                  Read more
                  </span>
                  </a>
                  <div class="content-tile__content-wrap set--w-100 flex set--text-after text-align--left component-v-align--center component-h-align--center text-align--small-center component-v-align--small-center component-h-align--small-center" style="">
                    <div class="content-tile__content">
                      <h2 class="content-tile__title heading-type component-copy__title--regular set--motion-complete">
                        MAKE YOUR LOVE STORY MAGICAL
                      </h2>
                      <div class="content-tile__description font-family--serif text-line--medium set--motion-complete">
                        Love can be the greatest adventure of all if you let it pave the way. Whether intense, timeless, passionate, everlasting or unconditional, every expression of love can be found in a ' . get_bloginfo('name') . ' red box.
                      </div>
                      <div class="component-actions content-tile__actions set--motion-complete">
                        <a href="news/#/stories/news/2201-str-news-vday-campaign" class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary " aria-label="Read more" tabindex="-1" style="">
                        Read more
                        </a>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
        </section>
      </div>
    </div>
    <div class="experience-component experience-accelerator_layouts-flexibleGrid">
      <div class="module-container module-container--spacing-top-regular " style="" data-tracking-context="content-grid">
        <section class="max-width--large module-container__constraint--center gutter--normal module-container--has-outer-gutter">
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
          <div class="module-grid row  module-grid--has-inner-gutters flex-align-start flex-justify-center">
            <div class="module-grid__item col-12 col-md-6 col-lg-6">
              <article class="set--w-100 flex flex-direction-col content-tile content-tile--size-regular content-tile--ratio-natural content-tile--style-default component-outer-v-align--center component-outer-h-align--center set--motion-complete" style="" data-content-component="content-tile" data-tracking-id="Gifts to Personalize" data-tracking-position="6">
                <div class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">
                  <div class="content-tile__media ">
                    <picture>
                      <source data-srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/05_PERSONALISATION%20SELECTION_ENGRAVING_MAN_1680x1377.webp" class="picture--source-element" srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/05_PERSONALISATION%20SELECTION_ENGRAVING_MAN_1680x1377.webp">
                      <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/homepage/hp-valentines-day/05_PERSONALISATION%20SELECTION_ENGRAVING_MAN_1680x1377.webp?sw=40&amp;q=100" class="component-image content-tile__img object-fit--cover blur-up lazyloaded" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; ">
                    </picture>
                  </div>
                </div>
                <a class="component-overlay component-overlay--low-index component-overlay--center " href="valentines-love-letters/" aria-label="Shop the selection">
                <span class="sr-only">
                Gifts to Personalize
                Make your gift one-of-a-kind
                Shop the selection
                </span>
                </a>
                <div class="content-tile__content-wrap set--w-100 flex set--text-after text-align--center component-v-align--center component-h-align--center" style="">
                  <div class="content-tile__content">
                    <h2 class="content-tile__title heading-type component-copy__title--regular set--motion-complete">
                      Gifts to Personalize
                    </h2>
                    <div class="content-tile__description font-family--serif text-line--medium set--motion-complete">
                      Make your gift one-of-a-kind
                    </div>
                    <div class="component-actions content-tile__actions set--motion-complete">
                      <a href="valentines-love-letters/" class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary " aria-label="Shop the selection" tabindex="-1" style="">
                      Shop the selection
                      </a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="module-grid__item col-12 col-md-6 col-lg-6">
              <article class="set--w-100 flex flex-direction-col content-tile content-tile--size-regular content-tile--ratio-natural content-tile--style-default component-outer-v-align--center component-outer-h-align--center set--motion-complete" style="" data-content-component="content-tile" data-tracking-id="BOOK A PERSONALIZED APPOINTMENT" data-tracking-position="7">
                <div class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">
                  <div class="content-tile__media ">
                    <picture>
                      <source data-srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/CARTIER_SERVICES_1680X1377PX7-min.webp" class="picture--source-element" srcset="wp-content/themes/siellest/assets/homepage/hp-valentines-day/CARTIER_SERVICES_1680X1377PX7-min.webp">
                      <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/homepage/hp-valentines-day/CARTIER_SERVICES_1680X1377PX7-min.webp?sw=40&amp;q=100" class="component-image content-tile__img object-fit--cover blur-up lazyloaded" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; ">
                    </picture>
                  </div>
                </div>
                <a class="component-overlay component-overlay--low-index component-overlay--center " href="contact-us-appointment" aria-label="Visit our boutiques">
                <span class="sr-only">
                BOOK A PERSONALIZED APPOINTMENT
                Visit our boutiques
                </span>
                </a>
                <div class="content-tile__content-wrap set--w-100 flex set--text-after text-align--center component-v-align--center component-h-align--center" style="">
                  <div class="content-tile__content">
                    <h2 class="content-tile__title heading-type component-copy__title--regular set--motion-complete">
                      BOOK A PERSONALIZED APPOINTMENT
                    </h2>
                    <div class="component-actions content-tile__actions set--motion-complete">
                      <a href="contact-us-appointment" class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary " aria-label="Visit our boutiques" tabindex="-1" style="">
                      Visit our boutiques
                      </a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
        </section>
      </div>
    </div>
  </div>
  ',
  'contact-customer-care' => '
  <article class="bg--grey-1 flex-grow-1 descriptive-card descriptive-card--size-regular descriptive-card--ratio-natural descriptive-card--style-default" style="" data-content-component="descriptive-card" data-motion=\'{"properties": "opacity from-v-direction", "children": ".descriptive-card__content > *"}\'>
    <div class="row flex-no-gutters">
      <div class="col-12 col-md-6 col-lg-6 ">
        <div class="descriptive-card__aspect-ratio descriptive-card__aspect-ratio--natural">
          <div class="descriptive-card__media ">
            <picture>
              <source data-srcset="wp-content/themes/siellest/assets/images/contact-us-hero.jpg" class="picture--source-element">
              <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/images/contact-us-hero.jpg?sw=40&amp;q=100" class="component-image descriptive-card__img object-fit--cover lazyload blur-up" title="Contact Us" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; " />
            </picture>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 ">
        <div class="descriptive-card__content-wrap flex flex-grow-1 text-align--left component-v-align--center component-h-align--center">
          <div class="descriptive-card__content component-custom-width" style="--component-var-width:26.25rem; ">
            <h1 class="descriptive-card__title heading-type component-copy__title--regular">
              Contact US
            </h1>
            <div class="descriptive-card__description font-family--serif text-line--medium">
              Our ' . get_bloginfo('name') . ' Ambassadors are delighted to assist you with your orders, style advice, gift ideas, and more. Please select your preferred method of contact below.
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
  <form action="ContactUs-GetContent" class="contactus-country__form gutter--normal" method="GET" data-ajax-form=\'{"responseTarget": "[data-contactus-component=contents]", "submitActionSelector": "#folderCountryDropdown", "submitActionEvent": "change"}\'>
    <h4 class="contactus-country__title form-intro__title heading-type text-align--center">
      PLEASE, SELECT YOUR COUNTRY/REGION
    </h4>
    <div class="contactus-country__dropdown form-group">
      <label class="form-control-label" for="folderCountryDropdown">Choose your location</label>
      <select class="form-control form-control--select" name="subfolderid" id="folderCountryDropdown" data-url="ContactUs-GetContent" data-tracking=\'{"events": "change", "trackEvent": "ContactCountrySelection", "trackObject": {"countrySelection": "--dropdownDisplayValue"}}\'>
        ' . country_options() . '
      </select>
    </div>
  </form>
  <div class="contactus-content max-width--xmedium gutter--normal" data-contactus-component="contents">
    <div class="row">
      <div class="contactus-tile-col contactus-tile-col   col-12 col-md-6 col-lg-4">
        <div class="contactus-tile">
          <div class="contactus-tile__header flex flex-align-center">
            <img class="contactus-tile__icon icon--set-left" src="wp-content/themes/siellest/assets/Icons/phone.svg" alt="" title="" />
            <h2 class="contactus-tile__title heading-type body-type font-weight--semibold text-transform--uppercase">
              Call Us
            </h2>
          </div>
          <div class="contactus-tile__description cms-generic-copy text-line--medium">
            <div>Hours are in Eastern Standard Time</div>
            <div>Monday to Friday: 9:00 a.m. - 9:00 p.m.</div>
            <div>Saturday: 10:00 a.m. - 7:00 p.m.</div>
            <div>Sunday: 9:30 a.m. - 6:00 p.m.</div>
          </div>
          <div class="contactus-tile__ctas flex flex-flow-wrap">
            <a href="Tel: 8558888798" class="component-actions__cta  contactus-tile__link link link--primary " aria-label="CAll us at 8558888798" style="" data-tracking=\'{"trackEvent": "contactUsPage", "trackObject": {&quot;linkTitle&quot;: &quot;--content&quot;}}\'>
            Tel. 855-888-8798
            </a>
          </div>
        </div>
      </div>
      <div class="contactus-tile-col contactus-tile-col   col-12 col-md-6 col-lg-4">
        <div class="contactus-tile">
          <div class="contactus-tile__header flex flex-align-center">
            <img class="contactus-tile__icon icon--set-left" src="wp-content/themes/siellest/assets/Icons/mail.svg" alt="" title="" />
            <h2 class="contactus-tile__title heading-type body-type font-weight--semibold text-transform--uppercase">
              E-mail Us
            </h2>
          </div>
          <div class="contactus-tile__description cms-generic-copy text-line--medium">
            <div>A ' . get_bloginfo('name') . ' ambassador will respond as soon as possible</div>
            <input id="WriteUsFakeTarget" type="hidden" />
          </div>
          <div class="contactus-tile__ctas flex flex-flow-wrap">
            <a href="#WriteUsFakeTarget" class="component-actions__cta  contactus-tile__link link link--primary " aria-label="Send an e-mail" style="" data-modal-trigger=\'{"url": "wp-json/siellest/ContactUs-Start?customerServiceEmailID=contact%2ena%40siellest%2ecom", "type": "html", "options": {"modalID": "contactUs", "modalClass": "modal--generic"}}\'>
            Send an e-mail
            </a>
          </div>
        </div>
      </div>
      <div class="contactus-tile-col contactus-tile-col col-12 col-md-6 col-lg-4">
        <div class="contactus-tile">
          <div class="contactus-tile__header flex flex-align-center">
            <img class="contactus-tile__icon icon--set-left" src="wp-content/themes/siellest/assets/Icons/pick_up_in_store.svg" alt="" title="" />
            <h2 class="contactus-tile__title heading-type body-type font-weight--semibold text-transform--uppercase">
              Visit Us
            </h2>
          </div>
          <div class="contactus-tile__description cms-generic-copy text-line--medium">
            <div>Find your nearest ' . get_bloginfo('name') . ' boutique or ' . get_bloginfo('name') . ' reseller</div>
          </div>
          <div class="contactus-tile__ctas flex flex-flow-wrap">
            <a href="search?category=storeLocatorSearch" target=_blank class="component-actions__cta  contactus-tile__link body-type--centi link link--secondary " aria-label="Find a boutique" style="" data-tracking=\'{"trackEvent": "contactUsPage", "trackObject": {&quot;linkTitle&quot;: &quot;--content&quot;}}\'>
            Find a boutique
            </a>
          </div>
        </div>
      </div>
      <div class="contactus-tile-col contactus-tile-col   col-12 col-md-6 col-lg-4">
        <div class="contactus-tile">
          <div class="contactus-tile__header flex flex-align-center">
            <img class="contactus-tile__icon icon--set-left" src="wp-content/themes/siellest/assets/Icons/live_chat.svg" alt="" title="" />
            <h2 class="contactus-tile__title heading-type body-type font-weight--semibold text-transform--uppercase">
              LIVE CHAT
            </h2>
          </div>
          <div class="contactus-tile__description cms-generic-copy text-line--medium">
            Connect with a ' . get_bloginfo('name') . ' Ambassador when available
          </div>
        </div>
      </div>
      <div class="contactus-tile-col contactus-tile-col   col-12 col-md-6 col-lg-4">
        <div class="contactus-tile">
          <div class="contactus-tile__header flex flex-align-center">
            <img class="contactus-tile__icon icon--set-left" src="wp-content/themes/siellest/assets/Icons/book_appointment.svg" alt="" title="" />
            <h2 class="contactus-tile__title heading-type body-type font-weight--semibold text-transform--uppercase">
              Appointments
            </h2>
          </div>
          <div class="contactus-tile__description cms-generic-copy text-line--medium">
            <div>Join us for a personalized appointment at the boutique of your choice</div>
            <input id="BookAppointmentFakeTarget" type="hidden" />
          </div>
          <div class="contactus-tile__ctas flex flex-flow-wrap">
            <a href="contact-us-appointment" class="component-actions__cta  contactus-tile__link link link--primary " aria-label="Request an appointment" style="" do-not-model-trigger data-tracking=\'{"trackEvent": "contactUsPage", "trackObject": {&quot;linkTitle&quot;: &quot;--content&quot;}}\'>
            Request an appointment
            </a>
          </div>
        </div>
      </div>
      <div class="contactus-tile-col contactus-tile-col   col-12 col-md-6 col-lg-4">
        <div class="contactus-tile">
          <div class="contactus-tile__header flex flex-align-center">
            <img class="contactus-tile__icon icon--set-left" src="wp-content/themes/siellest/assets/Icons/faq.svg" alt="" title="" />
            <h2 class="contactus-tile__title heading-type body-type font-weight--semibold text-transform--uppercase">
              FAQ
            </h2>
          </div>
          <div class="contactus-tile__description cms-generic-copy text-line--medium">
            <div>Find answers to commonly raised questions</div>
          </div>
          <div class="contactus-tile__ctas flex flex-flow-wrap">
            <a href="faq-product" class="component-actions__cta  contactus-tile__link link link--primary " aria-label="Explore FAQ" style="" data-tracking=\'{"trackEvent": "contactUsPage", "trackObject": {&quot;linkTitle&quot;: &quot;--content&quot;}}\'>
            Explore FAQ
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  ',
  'services' => '
    <h1 class="sr-only">Services</h1>
    <div class="experience-region experience-main">
      <div class="experience-component experience-accelerator_layouts-flexibleGrid">
        <div class="module-container  module-container--spacing-bottom-small" style="" data-tracking-context="content-grid" data-tracking=\'{"events": "enterViewport", "trackEvent": "eePromoView", "asyncParams": {"promotions": "--childrenData", "promoCreative": "--context"}}\'>
          <section class=" module-container__constraint--center">
            <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
            <div class="module-grid row  module-grid--has-inner-gutters">
              <div class="module-grid__item col-12 col-md-12 col-lg-12">
                <article class="hero hero--size-large hero--main flex flex-direction-col" style="" data-content-component="hero" data-motion=\'{"properties": "opacity from-v-direction", "children": ".hero__content > *"}\' data-tracking-id="SERVICES" data-tracking-position data-tracking=\'{"trackEvent": "eePromoClick", "asyncParams": {"promoName": "data-tracking-id", "promoPosition": "data-tracking-position", "promoCreative": "--context"}}\'>
                  <div class="hero__aspect-ratio hero__aspect-ratio--main ">
                    <div class="hero__media component-overlay component-overlay--center">
                      <picture>
                        <source data-srcset="wp-content/themes/siellest/assets/images/SERVICES%201248X390%20HEADER.webp" class="picture--source-element">
                        <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/images/SERVICES%201248X390%20HEADER.webp?sw=40&amp;q=100" class="component-image hero__img object-fit--cover lazyload blur-up" title="" alt="" style="--focal-point-x: 52%; --focal-point-y:52%; ; " />
                      </picture>
                    </div>
                  </div>
                  <div class="hero__content-wrap max-width--xmedium flex flex-flow-wrap set--w-100 gutter--normal set--text-after text-align--center component-v-align--center component-h-align--center">
                    <div class="hero__content">
                      <h1 class="hero__title heading-type component-copy__title--large">
                        SERVICES
                      </h1>
                      <div class="hero__description font-family--serif">
                        More than just a service, an experience.
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
          </section>
        </div>
      </div>
      <div class="experience-component experience-accelerator_layouts-flexibleGrid">
        <div class="module-container  module-container--spacing-bottom-small" style="" data-tracking-context="content-grid" data-tracking=\'{"events": "enterViewport", "trackEvent": "eePromoView", "asyncParams": {"promotions": "--childrenData", "promoCreative": "--context"}}\'>
          <section class="max-width--xmedium module-container__constraint--center gutter--normal module-container--has-outer-gutter">
            <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
            <div class="module-grid row module-grid--spacing-row-regular module-grid--has-inner-gutters">
              <div class="module-grid__item col-12 col-md-6 col-lg-6">
                <article class="set--w-100 flex flex-direction-col content-tile content-tile--size-regular content-tile--ratio-natural content-tile--style-default" style="" data-content-component="content-tile" data-motion=\'{"properties": "opacity from-v-direction", "children": ".content-tile__content > *"}\' data-tracking-id="YOUR PURCHASE" data-tracking-position data-tracking=\'{"trackEvent": "eePromoClick", "asyncParams": {"promoName": "data-tracking-id", "promoPosition": "data-tracking-position", "promoCreative": "--context"}}\'>
                  <div class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">
                    <div class="content-tile__media ">
                      <picture>
                        <source data-srcset="wp-content/themes/siellest/assets/images/YOUR%20PURCHASE%20612X275.webp" class="picture--source-element">
                        <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/images/YOUR%20PURCHASE%20612X275.webp?sw=40&amp;q=100" class="component-image content-tile__img object-fit--cover lazyload blur-up" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; " />
                      </picture>
                    </div>
                  </div>
                  <a class="component-overlay component-overlay--low-index component-overlay--center " href="your-purchase-concierge" aria-label="Discover">
                  <span class="sr-only">
                  YOUR PURCHASE
                  Discover
                  </span>
                  </a>
                  <div class="content-tile__content-wrap set--w-100 flex set--text-after text-align--center component-h-align--center" style="">
                    <div class="content-tile__content">
                      <h2 class="content-tile__title heading-type component-copy__title--regular">
                        YOUR PURCHASE
                      </h2>
                      <div class="component-actions content-tile__actions">
                        <a href="your-purchase-concierge" class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary " aria-label="Discover" tabindex=-1 style="">
                        Discover
                        </a>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="module-grid__item col-12 col-md-6 col-lg-6">
                <article class="set--w-100 flex flex-direction-col content-tile content-tile--size-regular content-tile--ratio-natural content-tile--style-default" style="" data-content-component="content-tile" data-motion=\'{"properties": "opacity from-v-direction", "children": ".content-tile__content > *"}\' data-tracking-id="REQUEST A SERVICE" data-tracking-position data-tracking=\'{"trackEvent": "eePromoClick", "asyncParams": {"promoName": "data-tracking-id", "promoPosition": "data-tracking-position", "promoCreative": "--context"}}\'>
                  <div class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">
                    <div class="content-tile__media ">
                      <picture>
                        <source data-srcset="wp-content/themes/siellest/assets/images/REQUEST%20A%20SERVICE%20612%20X%20275.webp" class="picture--source-element">
                        <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/images/REQUEST%20A%20SERVICE%20612%20X%20275.webp?sw=40&amp;q=100" class="component-image content-tile__img object-fit--cover lazyload blur-up" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; " />
                      </picture>
                    </div>
                  </div>
                  <a class="component-overlay component-overlay--low-index component-overlay--center " href="request-service" aria-label="Request a custom service">
                  <span class="sr-only">
                  REQUEST A SERVICE
                  Request a custom service
                  </span>
                  </a>
                  <div class="content-tile__content-wrap set--w-100 flex set--text-after text-align--center component-h-align--center" style="">
                    <div class="content-tile__content">
                      <h2 class="content-tile__title heading-type component-copy__title--regular">
                        REQUEST A SERVICE
                      </h2>
                      <div class="component-actions content-tile__actions">
                        <a href="request-service" class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary " aria-label="Request a custom service" tabindex=-1 style="">
                        Discover
                        </a>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
          </section>
        </div>
      </div>
      <div class="experience-component experience-accelerator_layouts-flexibleGrid">
        <div class="module-container  module-container--spacing-bottom-small" style="" data-tracking-context="content-grid" data-tracking=\'{"events": "enterViewport", "trackEvent": "eePromoView", "asyncParams": {"promotions": "--childrenData", "promoCreative": "--context"}}\'>
          <section class="max-width--xmedium module-container__constraint--center gutter--normal module-container--has-outer-gutter">
            <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
            <div class="module-grid row  module-grid--has-inner-gutters">
              <div class="module-grid__item col-12 col-md-12 col-lg-12">
                <article class="hero hero--size-regular hero--slim flex flex-direction-col" style="" data-content-component="hero" data-motion=\'{"properties": "opacity from-v-direction", "children": ".hero__content > *"}\'>
                  <div class="hero__aspect-ratio hero__aspect-ratio--slim ">
                    <div class="hero__media component-overlay component-overlay--center">
                      <picture>
                        <source data-srcset="wp-content/themes/siellest/assets/images/JOIN%20CARTIER%20CARE%201248x390%20PUSH.webp" class="picture--source-element">
                        <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/images/JOIN%20CARTIER%20CARE%201248x390%20PUSH.webp?sw=40&amp;q=100" class="component-image hero__img object-fit--cover lazyload blur-up" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; " />
                      </picture>
                    </div>
                  </div>
                  <a class="component-overlay component-overlay--low-index component-overlay--center " href="join-siellest-care" aria-label="Learn more about our Care Program">
                  <span class="sr-only">
                  Join ' . get_bloginfo('name') . ' Care
                  Learn more about our Care Program
                  </span>
                  </a>
                  <div class="hero__content-wrap max-width--xmedium flex flex-flow-wrap set--w-100 gutter--normal set--text-after text-align--center component-v-align--center component-h-align--center">
                    <div class="hero__content">
                      <h1 class="hero__title heading-type component-copy__title--regular">
                        Join ' . get_bloginfo('name') . ' Care
                      </h1>
                      <div class="component-actions hero__actions">
                        <a href="join-siellest-care" class="component-actions__cta component-actions__cta--fake hero__cta link link--primary " aria-label="Learn more about our Care Program" tabindex=-1 style="">
                        Discover
                        </a>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="page-designer__empty-container page-designer__empty-container--secondary"></div>
          </section>
        </div>
      </div>
    </div>
  '
);
