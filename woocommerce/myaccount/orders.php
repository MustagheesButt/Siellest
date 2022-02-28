<?php
$customer = WC()->customer;
$args = array(
  'customer_id' => $customer->id
);
$orders = wc_get_orders($args);
?>
<div class="row">
  <div class="account-main__header col-12 account-welcome-banner text-align--center gutter--normal bg--grey-1">
    <div class="brand__panther-image image-width__small"><img class="panther-image" alt="siellest" src="wp-content/themes/siellest/assets/images/panthereCartierImageTransparent.webp"></div>
    <h1 class="account-main__title fluid-type--deka-base heading-type">My Orders</h1>
    <p class="account-main__description font-family--serif">See the details of your orders. If you wish to return an item you will be able to access return forms once your order has been delivered.</p>
  </div>
  <div class="col-12 col-md-6 col-lg-5">
    <div class="">
      <label class="form-control-label" for="orderHistoryFilter">Show orders</label>
      <select id="orderHistoryFilter" class="form-control form-control--select" aria-label="Show orders" data-order-component="order-filter">
        <option value="wp-json/siellest/Order-Filtered?orderFilter=6">
          Last Six Months
        </option>
        <option value="wp-json/siellest/Order-Filtered?orderFilter=12">
          Last Twelve Months
        </option>
      </select>
    </div>
  </div>
</div>
<div class="order-history" data-order-component="order-list">
  <?php
  foreach ($orders as $order) {
  ?>
    <h3><?= $order->id ?></h3>
  <?php
  }
  ?>
</div>