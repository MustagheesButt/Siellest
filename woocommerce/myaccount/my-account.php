<?php $user = wp_get_current_user() ?>

<div class="max-width--xmedium">
  <div class="account-welcome-banner text-align--center gutter--normal bg--grey-1" style="">

    <div class="brand__panther-image image-width__small">
      <img class="panther-image" alt="siellest" src="wp-content/themes/siellest/assets/images/panthereCartierImageTransparent.png" />
    </div>
    <p class="account-welcome-banner__title heading-type fluid-type--deka-hecto">
      Welcome <?= $user->first_name ?>
    </p>
    <div class="account-welcome-banner__description cms-generic-copy">
      <div class="">Welcome to your account.</div>
      <div>You can manage your shopping experience at <?= get_bloginfo('name') ?> Online Store.</div>
    </div>
  </div>
  <div class="row ">
    <div class="col-12 col-md-3">
      <div class="fixit-container flex-grow-1">
        <nav class="secondary-navigation fixit-element" data-fixit-trigger='{"enabled": "small-up", "respondToParent": true, "containedInParent": true, "offset": ".header", "useOffsetOnTarget": true}'>
          <p class="secondary-navigation__title font-weight--semibold display--small-up">My <?= get_bloginfo('name') ?></p>
          <button type="button" class="secondary-navigation__trigger display--small-only" title="My <?= get_bloginfo('name') ?>" data-toggle='{"target": ".secondary-navigation__list"}'>
            My <?= get_bloginfo('name') ?>
            <svg aria-hidden="true" focusable="false" class="secondary-navigation__trigger-icon icon">
              <use xlink:href="#icon--angle-down" />
            </svg>
          </button>
          <ul class="secondary-navigation__list list--reset">
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight set--active link--secondary--static" href="/en-us/account" title="View Overview">Overview</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="profile" title="View My Profile">My Profile</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="my-password" title="View My Password">My Password</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="orders" title="View My Orders">My Orders</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="wishlist" title="View My Wish List">My Wish List</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="address-book" title="View My Addresses">My Addresses</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="my-collection" title="View My Collection">My Collection</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="subscriptions-interests" title="View My subscriptions &amp; interests">My subscriptions &amp; interests</a>
            </li>
            <li class="secondary-navigation__item secondary-navigation__anchor">
              <a class="button button--primary" href="wp-json/siellest/Login-SSOLogout" aria-label="Log out">
                Log out
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="col-12 col-md-9">
      <div class="gutter--small-only-normal">
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
      </div>
    </div>
  </div>
</div>