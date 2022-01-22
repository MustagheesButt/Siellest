<div class="subscription-banner">
  <div class="row flex-align-center flex-justify-center">
    <div class="col-12 col-md-6 col-lg-5 col-xl-4">
      <p class="subscription-banner__description heading-type text-align--center">Subscribe to our Newsletter</p>
      <form role="form" action="wp-json/siellest/EmailSubscribe-Subscribe" method="POST" class="subscription-banner__form" data-ajax-form="{'onSuccess': 'reset', 'doneModalOptions': {'modalID': 'footerNewsletterSubscribe', 'modalClass': 'modal--base modal--newsletter', 'overlayOthers': true}, 'tracking': {'trackEvent': 'footerNewsletterCick'}}">
        <div class="row flex-no-gutters">
          <div class="col-8">
            <div class="" data-floating-label="">
              <label for="subscriptionBannerEmail" class="form-control-label">Email</label>
              <input id="subscriptionBannerEmail" type="email" class="subscription-banner__field form-control form-control--text remove--border-right-styles" name="subscriptionBannerEmail" required="" placeholder="your@email.com" aria-label="Email" />
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="subscription-banner__action button button--primary button--fluid set--w-100 remove--border-left-radius">Subscribe</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>