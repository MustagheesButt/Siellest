<h1 class="account-main__title fluid-type--deka-base heading-type sr-only">Overview</h1>
<div class="row">
  <div class="col-12 col-lg-6">
    <div class="account-card">
      <div class="account-card__header flex flex-justify-between flex-align-center">
        <h2 class="account-card__header-title fluid-type--deka-base heading-type">My Profile</h2>
      </div>
      <div class="account-card__body body-type--deci">
        <div class="account-card__row">
          <h3 class="account-card__row-title text-color--grey-5 font-weight--normal body-type--deci sr-only">First Name</h3>
          <div class="account-card__row-contents">
            Mr
            <?= $user->display_name ?>
          </div>
        </div>
        <div class="account-card__row">
          <h3 class="account-card__row-title text-color--grey-5 font-weight--normal body-type--deci sr-only">Email</h3>
          <div class="account-card__row-contents"><?= $user->user_email ?></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6">
    <div class="account-card">
      <div class="account-card__header">
        <h2 class="account-card__header-title fluid-type--deka-base heading-type">My Orders</h2>
      </div>
      <div class="account-card__body">
        <p></p>
        <div class="account-card__row">
          <p class="account-card__row-contents font-family--serif">You have not previously ordered as a registered customer.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6">
    <div class="account-card">
      <div class="account-card__header">
        <h2 class="account-card__header-title fluid-type--deka-base heading-type">My Wish List</h2>
      </div>
      <div class="account-card__body">
        <div class="account-card__row">
          <p class="account-card__row-contents font-family--serif">Your Wish List is empty.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-6">
    <div class="account-card">
      <div class="account-card__header flex flex-justify-between flex-align-center">
        <h2 class="account-card__header-title fluid-type--deka-base heading-type">My Addresses</h2>
      </div>
      <div class="account-card__body">
        <div class="account-card__row">
          <span class="account-card__tag font-family--serif">Default Address</span>
          <div class="account-card__row-contents address-summary__details body-type--deci">
            <div>null</div>
            <div> null </div>
          </div>
        </div>
      </div>
      <div class="account-card__footer">
        <a href="/en-us/address-book" class="account-card__action link--primary" aria-label="View all addresses">View all addresses</a>
      </div>
    </div>
  </div>
</div>