<?php
get_header('', $args = ['title' => 'Not Found']);
?>
<main id="main" class="main" role="main">
  <div class="max-width--small gutter--large module-container--spacing-top-small">
    <article class="
    set--w-100 flex flex-direction-col
    content-tile
    content-tile--size-regular
    content-tile--ratio-natural
    content-tile--style-default" style="" data-content-component="content-tile" data-motion="{&quot;properties&quot;: &quot;opacity from-v-direction&quot;, &quot;children&quot;: &quot;.content-tile__content > *&quot;}">

      <div class="content-tile__aspect-ratio content-tile__aspect-ratio--natural ">
        <div class="content-tile__media ">
          <picture>
            <source data-srcset="wp-content/themes/siellest/assets/images/error-not-found.jpg" class="picture--source-element" srcset="wp-content/themes/siellest/assets/images/error-not-found.jpg">
            <img data-image-component="lazyload" src="wp-content/themes/siellest/assets/images/error-not-found.jpg?sw=40&amp;q=100" class="component-image content-tile__img object-fit--cover blur-up lazyloaded" title="" alt="" style="--focal-point-x: 50%; --focal-point-y:50%; ; ">
          </picture>
        </div>
      </div>
      <a class="component-overlay component-overlay--low-index component-overlay--center " href="/en-us/home" aria-label="Go to the homepage">
        <span class="sr-only">
          Sorry, something went wrong
          The page you are looking for might have been removed<br>or is temporarily unavailable.
          Go to the homepage
        </span>
      </a>
      <div class="
            content-tile__content-wrap
            set--w-100 flex
            set--text-after
            text-align--center
            component-v-align--center
            component-h-align--center" style="">
        <div class="content-tile__content">
          <h2 class="content-tile__title heading-type component-copy__title--regular">
            Sorry, something went wrong
          </h2>
          <div class="content-tile__description font-family--serif text-line--medium">
            The page you are looking for might have been removed<br>or is temporarily unavailable.
          </div>
          <div class="component-actions content-tile__actions">
            <a href="<?= get_site_url() ?>" class="component-actions__cta component-actions__cta--fake content-tile__cta link link--primary " aria-label="Go to the homepage" tabindex="-1" style="">
              Go to the homepage
            </a>
          </div>
        </div>
      </div>
    </article>
  </div>
</main>

<?php
get_footer();
?>