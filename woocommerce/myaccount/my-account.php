<?php
  $user = wp_get_current_user();
  $page = $_GET['subpage'];
?>

<div class="max-width--xmedium">
  <?php
  if (!isset($page)) {
  ?>
  <div class="account-welcome-banner text-align--center gutter--normal bg--grey-1" style="">
    <div class="brand__panther-image image-width__small">
      <img class="panther-image" alt="siellest" src="wp-content/themes/siellest/assets/images/panthereCartierImageTransparent.webp" />
    </div>
    <p class="account-welcome-banner__title heading-type fluid-type--deka-hecto">
      Welcome <?= $user->first_name ?>
    </p>
    <div class="account-welcome-banner__description cms-generic-copy">
      <div class="">Welcome to your account.</div>
      <div>You can manage your shopping experience at <?= get_bloginfo('name') ?> Online Store.</div>
    </div>
  </div>
  <?php } ?>
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
              <a class="secondary-navigation__anchor link--secondary--highlight set--active link--secondary--static" href="account" title="View Overview">Overview</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="account/?subpage=profile" title="View My Profile">My Profile</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="account/?subpage=my-password" title="View My Password">My Password</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="account/?subpage=orders" title="View My Orders">My Orders</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="account/?subpage=wishlist" title="View My Wish List">My Wish List</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="account/?subpage=address-book" title="View My Addresses">My Addresses</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="account/?subpage=my-collection" title="View My Collection">My Collection</a>
            </li>
            <li class="secondary-navigation__item">
              <a class="secondary-navigation__anchor link--secondary--highlight " href="account/?subpage=subscriptions-interests" title="View My subscriptions &amp; interests">My subscriptions &amp; interests</a>
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
        <?php
          if (isset($page)) {
            include "$page.php";
          } else {
            include 'overview.php';
          }
        ?>
      </div>
    </div>
  </div>
</div>