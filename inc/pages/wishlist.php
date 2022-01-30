<?php
$user = wp_get_current_user();

$wishlist = [];
if (is_user_logged_in()) {
  $wishlist = get_user_meta($user->ID, 'wishlist');
} else if (isset($_COOKIE['wishlist'])) {
  $wishlist = explode(',', $_COOKIE['wishlist']);
}
?>
<div class="login login--wishlist max-width--large gutter--small-up-normal">
  <div class="row flex-justify-between">
    <div class="login__section col-12 col-lg-6">
      <div class="gutter--small-only-normal">
        <h2 class="form-intro__title fluid-type--deka-hecto heading-type">Wish List</h2>
        <?php if (!is_user_logged_in()) { ?>
        <p class="form-intro__copy cms-generic-copy body-type--deci">If you are not signed in, your lists are only available on this device and will expire at the end of this session.</p>
        <?php } ?>
        <div data-wishlist-component="product-list">
          <div class="row">
            <div class="wishlist__saved-count heading-type body-type--deci col-12 col-md-6">
              You have <?= sizeof($wishlist) ?> item saved
            </div>
          </div>
          <div class="row">
            <?php
            for ($i = 0; $i < sizeof($wishlist); $i++) {
              $product = wc_get_product((int)($wishlist[$i]));
            ?>
            <div class="wishlist__product-line-item product-line-item--wishlist col-12 col-sm-6 col-lg-4" data-product-container="card" data-pid="<?= $product->id ?>" data-product-list-item="7ef6518a2a4a11f651d09afd4f">
              <div class="product-line-item__main">
                <div class="product-line-item__details row">
                  <div class="col-12 wishlist__image-wrapper">
                    <a href="<?= $product->permalink ?>" class="product-line-item__image-wrap link" title="<?= $product->name ?>">
                      <img class="product-line-item__image component-overlay component-overlay--center object-fit--contain set--w-100" src="<?= wp_get_attachment_url($product->image_id) ?>?sw=250&amp;sh=250&amp;sm=fit&amp;sfrm=png" alt="<?= $product->name ?>" title="<?= $product->name ?>" data-line-item-component="image" />
                    </a>
                    <button type="button" class="wishlist__remove-item-button button--circle-close bg--white" data-wishlist-trigger="Close" aria-label="remove">
                      <svg class="wishlist__remove-item-icon">
                        <use xlink:href="#icon--close" />
                      </svg>
                    </button>
                  </div>
                  <div class="col-12 text-align--center">
                    <div class="product-line-item__header line-item-header font-weight--semibold">
                      <a href="<?= $product->permalink ?>" class="product-line-item__name link" title="<?= $product->name ?>">
                        <?= $product->name ?>
                      </a>
                    </div>
                    <div class="product-line-item__attributes font-family--serif">
                    </div>
                    <div class="row heading-type body-type--deci">
                      <div class="product-line-item__unit-price col-12 flex-align-center">
                        <div class="price flex--inline flex-flow-wrap flex-align-baseline" data-product-component="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                          <meta itemprop="priceCurrency" content="<?= get_woocommerce_currency() ?>" />
                          <span class="price__sales sales">
                            <span class="value" itemprop="price" content="<?= $product->price ?>">
                            <?= get_woocommerce_currency_symbol() ?><?= number_format((float)$product->price, 2) ?>
                            </span>
                        </div>
                      </div>
                    </div>
                    <div class="line-item-availability hidden availability-7ef6518a2a4a11f651d09afd4f">
                      <p class="wishlist__availability font-family--serif set--constraint-fail">In Stock</p>
                    </div>
                  </div>
                </div>
                <div class="product-line-item__footer row">
                  <div class="col-12">

                    <button class="button button--primary" data-pid="<?= $product->id ?>" data-url="wp-json/siellest/Cart-AddProduct" data-option="null" data-product-component="add-button">
                      Add to Shopping Bag
                    </button>
                  </div>
                </div>
              </div>
              <div class="product-line-item__wishlist-revert text-align--center">
                <p class="form-intro__title body-type--deci">
                  <span class="font-weight--semibold">"<?= $product->name ?>"</span>
                  <br />
                  Was removed from your wish list.
                </p>
                <button type="button" class="button button--primary-outline" data-wishlist-trigger data-wishlist-label-add="Add it back to your wish list" aria-label="Add &quot;<?= $product->name ?>&quot; back to your wish list">
                  Add it back to your wish list
                </button>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
          <span data-wishlist-uuid="d2cba3b013bc432f24f6a9124f" data-wishlist-more-url="wp-json/siellest/Wishlist-MoreList" data-wishlist-page="1.0" data-wishlist-public="false"></span>
        </div>
      </div>
    </div>
    <div class="login__section col-12 col-lg-6 col-xl-5">
      <div class="login__tab-list login__tab-list--wishlist-page flex flex-justify-center text-align--center gutter--normal">
        <a class="login__tab-item text-line--medium fluid-type--base-hecto text-transform--uppercase link--underline-hover toggle--active" data-auth-component="tab-nav-wishlist-page" href="#login" data-toggle='{"target": "[data-auth-component=login-tab-wishlist-page]", "auto": true, "persist": true, "unsetSelf": false, "siblingSelector": "[data-auth-component=tab-nav-wishlist-page]"}' role="tab">
          Already Registered?
        </a>
        <a class="login__tab-item text-line--medium fluid-type--base-hecto text-transform--uppercase link--underline-hover " data-auth-component="tab-nav-wishlist-page" href="#register" data-toggle='{"target": "[data-auth-component=register-tab-wishlist-page]", "auto": false, "persist": true, "unsetSelf": false, "siblingSelector": "[data-auth-component=tab-nav-wishlist-page]"}' role="tab">
          Create Your Account
        </a>
      </div>
      <div class="tab-content login__section--padded bg--grey-1 gutter--normal ">
        <div class="login__section-content tab-content__panel toggle--active" role="tabpanel" data-auth-component="login-tab-wishlist-page">
          <div class="form-section">
            <div class="mi-cust-notify form-invalid-feedback">
              We have enhanced your experience with a new website since October 20, 2020. If you already had an account prior this date, please click <a class="link link--underline" title="Forgot password" href="/en-us/password-reset" data-modal-trigger='{"url": "/on/demandware.store/Sites-CartierUS-Site/en_US/Account-PasswordResetDialog", "type": "html", "options": {"modalID": "requestPasswordReset", "modalClass": "modal--prompt", "overlayOthers": true, "keepAlive": false}}'>
                &lsquo;Forgot password&rsquo;
              </a> to reactivate your account using the same email address that you have used upon your registration.
            </div>
            <form action="wp-json/siellest/Account-Login" class="login-form" method="POST" name="login-form" data-ajax-form='{"formTriggerName": "loginForm"}'>
              <input type="hidden" name="csrf_token" value="tf6OuOWxSLYvS1UrcFlJen3Eoilp-53lfgYrEXzGd9lYXtmmOp61DOZv2VfNc3znErWmwIwsjBXiDWKOcdhIy_9I22kyIEScFG-kdcoI5ul7tS_UL7VkOGsON_mqtWBFOOd6pcInkx4ZamAbyIk1QH03nUF-VrZLdCgb-gwr0T0N_dVY_xg=" />
              <p class="form-intro__copy font-family--serif text-line--medium">
                If you are already registered with Cartier, login here:
              </p>
              <p class="form-required__copy font-family--serif text-align--right text-color--grey-5">
                Required field*
              </p>
              <div class="form-group required" data-floating-label>
                <label class="form-control-label" for="login-form-email">
                  Email address
                </label>
                <input type="email" id="login-form-email" class="form-control" required name="loginEmail" value="" placeholder="your@email.com">
              </div>
              <div class="form-group form-group--password required" data-floating-label data-password-show="container">
                <label class="form-control-label" for="login-form-password">
                  Password
                </label>
                <input type="password" id="login-form-password" class="form-control" required name="loginPassword" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
                <button type="button" class="form-control__show-trigger link link--underline-hover text-color--grey-5 body-type--deci font-weight--light" data-password-show="trigger" aria-label="Show password characters">
                  <span class="form-control__label-show">Show</span>
                  <span class="form-control__label-hide">Hide</span>
                </button>
              </div>
              <div class="form-group cms-generic-copy body-type--deci text-line--medium">
                <div class="form-group--short-spacing">
                  <a class="link link--underline" title="Forgot your password?" href="/en-us/password-reset" data-modal-trigger='{"url": "/on/demandware.store/Sites-CartierUS-Site/en_US/Account-PasswordResetDialog", "type": "html", "options": {"modalID": "requestPasswordReset", "modalClass": "modal--prompt", "overlayOthers": true, "keepAlive": false}}'>
                    Forgot your password?
                  </a>
                </div>
                <div class="cms-generic-copy">
                  Read the
                  <a href="resources/privacy-policy-template/privacy-policy" title="Privacy Policy" target="_blank">
                    Privacy Policy
                  </a>
                  for further information
                </div>
              </div>
              <div class="form-actions text-align--center">
                <button type="submit" class="button button--primary set--small-w-100">Login</button>
              </div>
            </form>
          </div>
        </div>
        <div class="login__section-content tab-content__panel " role="tabpanel" data-auth-component="register-tab-wishlist-page">
          <form action="wp-json/siellest/Account-SubmitRegistration?rurl=1" class="registration" method="POST" name="dwfrm_profile" data-ajax-form='{"responseTarget": "[data-auth-component*=register-tab]"}'>
            <p class="form-intro__copy font-family--serif text-line--medium">
              This space allows you to manage your personal information, e-Boutique orders, news updates and newsletter subscriptions.
            </p>
            <p class="form-required__copy font-family--serif text-align--right text-color--grey-5">
              Required field*
            </p>

            <div class="form-group required">
              <p class="form-control-label form-control-label--spacing-deka">
                Title
              </p>
              <div class="form-check-group flex">
                <div class="form-check form-check-group__item">
                  <input id="customerSalutationOption-dwfrm_profile_customer_salutations_salutation-mr" type="radio" class="form-check-input" name="dwfrm_profile_customer_salutations_salutation" required aria-required="true" value="mr" aria-describedby="customerSalutationFeedback" />
                  <label for="customerSalutationOption-dwfrm_profile_customer_salutations_salutation-mr" class="form-check-label--radio">
                    Mr
                  </label>
                </div>
                <div class="form-check form-check-group__item">
                  <input id="customerSalutationOption-dwfrm_profile_customer_salutations_salutation-mrs" type="radio" class="form-check-input" name="dwfrm_profile_customer_salutations_salutation" required aria-required="true" value="mrs" aria-describedby="customerSalutationFeedback" />
                  <label for="customerSalutationOption-dwfrm_profile_customer_salutations_salutation-mrs" class="form-check-label--radio">
                    Mrs
                  </label>
                </div>
                <div class="form-check form-check-group__item">
                  <input id="customerSalutationOption-dwfrm_profile_customer_salutations_salutation-ms" type="radio" class="form-check-input" name="dwfrm_profile_customer_salutations_salutation" required aria-required="true" value="ms" aria-describedby="customerSalutationFeedback" />
                  <label for="customerSalutationOption-dwfrm_profile_customer_salutations_salutation-ms" class="form-check-label--radio">
                    Ms
                  </label>
                </div>
              </div>
              <div id="customerSalutationFeedback" class="invalid-feedback feedback--large-spacing-top"></div>
            </div>

            <div class="form-group
        required" data-floating-label>
              <label class="form-control-label" for="registration-form-fname">
                First Name
              </label>
              <input type="text" class="form-control" id="registration-form-fname" data-validate-latin data-range-error="error.message.lessthan50" placeholder="John" name="dwfrm_profile_customer_firstname" required aria-required="true" value="" maxLength="27">
            </div>
            <div class="form-group
        required" data-floating-label>
              <label class="form-control-label" for="registration-form-lname">
                Last Name
              </label>
              <input type="text" class="form-control" id="registration-form-lname" data-validate-latin data-range-error="error.message.lessthan50" placeholder="Doe" name="dwfrm_profile_customer_lastname" required aria-required="true" value="" maxLength="32">
            </div>



            <p class="form-control-label form-control-label--spacing-deka">
              Date of Birth
            </p>
            <div class="form-group form-combo row flex-no-gutters" data-dependency-group>
              <div class="col-4">
                <label class="form-control-label sr-only" for="birthDay">Day</label>
                <select class="form-control form-control--select form-control--combo " id="birthDay" data-validate-required-dependency data-missing-error="Error &ndash; Day, Month, and Year fields are required" name="dwfrm_profile_birth_birthDay" aria-describedby="birthdateFeedback">
                  <option id="" value="">
                    Day
                  </option>
                  <option id="01" value="01">
                    01
                  </option>
                  <option id="02" value="02">
                    02
                  </option>
                  <option id="03" value="03">
                    03
                  </option>
                  <option id="04" value="04">
                    04
                  </option>
                  <option id="05" value="05">
                    05
                  </option>
                  <option id="06" value="06">
                    06
                  </option>
                  <option id="07" value="07">
                    07
                  </option>
                  <option id="08" value="08">
                    08
                  </option>
                  <option id="09" value="09">
                    09
                  </option>
                  <option id="10" value="10">
                    10
                  </option>
                  <option id="11" value="11">
                    11
                  </option>
                  <option id="12" value="12">
                    12
                  </option>
                  <option id="13" value="13">
                    13
                  </option>
                  <option id="14" value="14">
                    14
                  </option>
                  <option id="15" value="15">
                    15
                  </option>
                  <option id="16" value="16">
                    16
                  </option>
                  <option id="17" value="17">
                    17
                  </option>
                  <option id="18" value="18">
                    18
                  </option>
                  <option id="19" value="19">
                    19
                  </option>
                  <option id="20" value="20">
                    20
                  </option>
                  <option id="21" value="21">
                    21
                  </option>
                  <option id="22" value="22">
                    22
                  </option>
                  <option id="23" value="23">
                    23
                  </option>
                  <option id="24" value="24">
                    24
                  </option>
                  <option id="25" value="25">
                    25
                  </option>
                  <option id="26" value="26">
                    26
                  </option>
                  <option id="27" value="27">
                    27
                  </option>
                  <option id="28" value="28">
                    28
                  </option>
                  <option id="29" value="29">
                    29
                  </option>
                  <option id="30" value="30">
                    30
                  </option>
                  <option id="31" value="31">
                    31
                  </option>
                </select>
              </div>
              <div class="col-4">
                <label class="form-control-label sr-only" for="birthMonth">Month</label>
                <select class="form-control form-control--select form-control--combo " id="birthMonth" data-validate-required-dependency data-missing-error="Error &ndash; Day, Month, and Year fields are required" name="dwfrm_profile_birth_birthMonth" aria-describedby="birthdateFeedback">
                  <option id="" value="">
                    Month
                  </option>
                  <option id="Jan" value="0">
                    Jan
                  </option>
                  <option id="Feb" value="1">
                    Feb
                  </option>
                  <option id="Mar" value="2">
                    Mar
                  </option>
                  <option id="Apr" value="3">
                    Apr
                  </option>
                  <option id="May" value="4">
                    May
                  </option>
                  <option id="Jun" value="5">
                    Jun
                  </option>
                  <option id="Jul" value="6">
                    Jul
                  </option>
                  <option id="Aug" value="7">
                    Aug
                  </option>
                  <option id="Sep" value="8">
                    Sep
                  </option>
                  <option id="Oct" value="9">
                    Oct
                  </option>
                  <option id="Nov" value="10">
                    Nov
                  </option>
                  <option id="Dec" value="11">
                    Dec
                  </option>
                </select>
              </div>
              <div class="col-4">
                <label class="form-control-label sr-only" for="birthYear">Year</label>
                <select class="form-control form-control--select form-control--combo form-control--combo-last " id="birthYear" data-validate-required-dependency data-missing-error="Error &ndash; Day, Month, and Year fields are required" name="dwfrm_profile_birth_birthYear" aria-describedby="birthdateFeedback">
                  <option value="">Year</option>
                  <option id="2022" value="2022">
                    2022
                  </option>
                  <option id="2021" value="2021">
                    2021
                  </option>
                  <option id="2020" value="2020">
                    2020
                  </option>
                  <option id="2019" value="2019">
                    2019
                  </option>
                  <option id="2018" value="2018">
                    2018
                  </option>
                  <option id="2017" value="2017">
                    2017
                  </option>
                  <option id="2016" value="2016">
                    2016
                  </option>
                  <option id="2015" value="2015">
                    2015
                  </option>
                  <option id="2014" value="2014">
                    2014
                  </option>
                  <option id="2013" value="2013">
                    2013
                  </option>
                  <option id="2012" value="2012">
                    2012
                  </option>
                  <option id="2011" value="2011">
                    2011
                  </option>
                  <option id="2010" value="2010">
                    2010
                  </option>
                  <option id="2009" value="2009">
                    2009
                  </option>
                  <option id="2008" value="2008">
                    2008
                  </option>
                  <option id="2007" value="2007">
                    2007
                  </option>
                  <option id="2006" value="2006">
                    2006
                  </option>
                  <option id="2005" value="2005">
                    2005
                  </option>
                  <option id="2004" value="2004">
                    2004
                  </option>
                  <option id="2003" value="2003">
                    2003
                  </option>
                  <option id="2002" value="2002">
                    2002
                  </option>
                  <option id="2001" value="2001">
                    2001
                  </option>
                  <option id="2000" value="2000">
                    2000
                  </option>
                  <option id="1999" value="1999">
                    1999
                  </option>
                  <option id="1998" value="1998">
                    1998
                  </option>
                  <option id="1997" value="1997">
                    1997
                  </option>
                  <option id="1996" value="1996">
                    1996
                  </option>
                  <option id="1995" value="1995">
                    1995
                  </option>
                  <option id="1994" value="1994">
                    1994
                  </option>
                  <option id="1993" value="1993">
                    1993
                  </option>
                  <option id="1992" value="1992">
                    1992
                  </option>
                  <option id="1991" value="1991">
                    1991
                  </option>
                  <option id="1990" value="1990">
                    1990
                  </option>
                  <option id="1989" value="1989">
                    1989
                  </option>
                  <option id="1988" value="1988">
                    1988
                  </option>
                  <option id="1987" value="1987">
                    1987
                  </option>
                  <option id="1986" value="1986">
                    1986
                  </option>
                  <option id="1985" value="1985">
                    1985
                  </option>
                  <option id="1984" value="1984">
                    1984
                  </option>
                  <option id="1983" value="1983">
                    1983
                  </option>
                  <option id="1982" value="1982">
                    1982
                  </option>
                  <option id="1981" value="1981">
                    1981
                  </option>
                  <option id="1980" value="1980">
                    1980
                  </option>
                  <option id="1979" value="1979">
                    1979
                  </option>
                  <option id="1978" value="1978">
                    1978
                  </option>
                  <option id="1977" value="1977">
                    1977
                  </option>
                  <option id="1976" value="1976">
                    1976
                  </option>
                  <option id="1975" value="1975">
                    1975
                  </option>
                  <option id="1974" value="1974">
                    1974
                  </option>
                  <option id="1973" value="1973">
                    1973
                  </option>
                  <option id="1972" value="1972">
                    1972
                  </option>
                  <option id="1971" value="1971">
                    1971
                  </option>
                  <option id="1970" value="1970">
                    1970
                  </option>
                  <option id="1969" value="1969">
                    1969
                  </option>
                  <option id="1968" value="1968">
                    1968
                  </option>
                  <option id="1967" value="1967">
                    1967
                  </option>
                  <option id="1966" value="1966">
                    1966
                  </option>
                  <option id="1965" value="1965">
                    1965
                  </option>
                  <option id="1964" value="1964">
                    1964
                  </option>
                  <option id="1963" value="1963">
                    1963
                  </option>
                  <option id="1962" value="1962">
                    1962
                  </option>
                  <option id="1961" value="1961">
                    1961
                  </option>
                  <option id="1960" value="1960">
                    1960
                  </option>
                  <option id="1959" value="1959">
                    1959
                  </option>
                  <option id="1958" value="1958">
                    1958
                  </option>
                  <option id="1957" value="1957">
                    1957
                  </option>
                  <option id="1956" value="1956">
                    1956
                  </option>
                  <option id="1955" value="1955">
                    1955
                  </option>
                  <option id="1954" value="1954">
                    1954
                  </option>
                  <option id="1953" value="1953">
                    1953
                  </option>
                  <option id="1952" value="1952">
                    1952
                  </option>
                  <option id="1951" value="1951">
                    1951
                  </option>
                  <option id="1950" value="1950">
                    1950
                  </option>
                  <option id="1949" value="1949">
                    1949
                  </option>
                  <option id="1948" value="1948">
                    1948
                  </option>
                  <option id="1947" value="1947">
                    1947
                  </option>
                  <option id="1946" value="1946">
                    1946
                  </option>
                  <option id="1945" value="1945">
                    1945
                  </option>
                  <option id="1944" value="1944">
                    1944
                  </option>
                  <option id="1943" value="1943">
                    1943
                  </option>
                  <option id="1942" value="1942">
                    1942
                  </option>
                  <option id="1941" value="1941">
                    1941
                  </option>
                  <option id="1940" value="1940">
                    1940
                  </option>
                  <option id="1939" value="1939">
                    1939
                  </option>
                  <option id="1938" value="1938">
                    1938
                  </option>
                  <option id="1937" value="1937">
                    1937
                  </option>
                  <option id="1936" value="1936">
                    1936
                  </option>
                  <option id="1935" value="1935">
                    1935
                  </option>
                  <option id="1934" value="1934">
                    1934
                  </option>
                  <option id="1933" value="1933">
                    1933
                  </option>
                  <option id="1932" value="1932">
                    1932
                  </option>
                  <option id="1931" value="1931">
                    1931
                  </option>
                  <option id="1930" value="1930">
                    1930
                  </option>
                  <option id="1929" value="1929">
                    1929
                  </option>
                  <option id="1928" value="1928">
                    1928
                  </option>
                  <option id="1927" value="1927">
                    1927
                  </option>
                  <option id="1926" value="1926">
                    1926
                  </option>
                  <option id="1925" value="1925">
                    1925
                  </option>
                  <option id="1924" value="1924">
                    1924
                  </option>
                  <option id="1923" value="1923">
                    1923
                  </option>
                </select>
              </div>
              <div class="col-12">
                <p id="birthdateFeedback" class="invalid-feedback"></p>
              </div>
            </div>
            <div class="form-group
        required" data-floating-label>
              <label class="form-control-label" for="registration-form-email">
                Email Address
              </label>
              <input type="email" class="form-control" id="registration-form-email" data-range-error="error.message.lessthan50" placeholder="your@email.com" name="dwfrm_profile_customer_email" required aria-required="true" value="" maxLength="60">
            </div>
            <div class="form-group
        required" data-floating-label>
              <label class="form-control-label" for="registration-form-email-confirm">
                Confirm Email
              </label>
              <input type="email" class="form-control" id="registration-form-email-confirm" data-range-error="error.message.lessthan50" data-validate-match="#registration-form-email" placeholder="your@email.com" name="dwfrm_profile_customer_emailconfirm" required aria-required="true" value="" maxLength="60">
            </div>
            <div class="form-group form-group--constraints
    required">
              <p class="form-control__constraints-title font-family--serif">Password requirements</p>
              <ul class="form-control__constraints body-type--centi" data-constraints>
                <li id="dwfrm_profile_login_password_d0ynhpvdmxom_noRepetition" class="form-control__constraint set--visible">
                  No repetition of more than two characters
                </li>
                <li id="dwfrm_profile_login_password_d0ynhpvdmxom_forceLower" class="form-control__constraint set--visible">
                  One lowercase character
                </li>
                <li id="dwfrm_profile_login_password_d0ynhpvdmxom_forceNumbers" class="form-control__constraint set--visible">
                  One number
                </li>
                <li id="dwfrm_profile_login_password_d0ynhpvdmxom_forceUpper" class="form-control__constraint set--visible">
                  One uppercase character
                </li>
                <li id="dwfrm_profile_login_password_d0ynhpvdmxom_minSpecial" class="form-control__constraint set--visible">
                  At least 1 allowed special character(s) from ~!@#$%^&amp;*_ /-+=`
                </li>
                <li id="dwfrm_profile_login_password_d0ynhpvdmxom_minLength" class="form-control__constraint set--visible">
                  8 characters minimum
                </li>
              </ul>
              <div class="form-group--password" data-floating-label data-password-show="container">
                <label class="form-control-label" for="dwfrm_profile_login_password_d0ynhpvdmxom">
                  Password
                </label>
                <input type="password" class="form-control" id="dwfrm_profile_login_password_d0ynhpvdmxom" data-validate-constraints="{&quot;noRepetition&quot;:{&quot;value&quot;:true,&quot;regex&quot;:&quot;^((.)\\2?(?!\\2))+$&quot;},&quot;forceLetters&quot;:{&quot;value&quot;:false,&quot;regex&quot;:&quot;[a-zA-Z]&quot;},&quot;forceLower&quot;:{&quot;value&quot;:true,&quot;regex&quot;:&quot;[a-z]&quot;},&quot;forceNumbers&quot;:{&quot;value&quot;:true,&quot;regex&quot;:&quot;\\d&quot;},&quot;forceUpper&quot;:{&quot;value&quot;:true,&quot;regex&quot;:&quot;[A-Z]&quot;},&quot;minSpecial&quot;:{&quot;value&quot;:1,&quot;regex&quot;:&quot;[^a-zA-Z0-9]&quot;},&quot;minLength&quot;:{&quot;value&quot;:8,&quot;regex&quot;:&quot;.{8,}&quot;}}" autocomplete="new-password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" name="dwfrm_profile_login_password" required aria-required="true" value="" maxLength="255" minLength="8">
                <button type="button" class="form-control__show-trigger link link--underline-hover text-color--grey-5 body-type--deci font-weight--light" data-password-show="trigger" aria-label="Show password characters">
                  <span class="form-control__label-show">Show</span>
                  <span class="form-control__label-hide">Hide</span>
                </button>
              </div>
            </div>
            <div class="form-group form-group--password
        required" data-floating-label data-password-show="container">
              <label class="form-control-label" for="registration-form-password-confirm">
                Confirm Password
              </label>
              <input type="password" class="form-control" id="registration-form-password-confirm" data-range-error="This field needs 8 to 255 characters" data-validate-match="#dwfrm_profile_login_password_d0ynhpvdmxom" autocomplete="off" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" name="dwfrm_profile_login_passwordconfirm" required aria-required="true" value="" maxLength="255" minLength="8">
              <button type="button" class="form-control__show-trigger link link--underline-hover text-color--grey-5 body-type--deci font-weight--light" data-password-show="trigger" aria-label="Show password characters">
                <span class="form-control__label-show">Show</span>
                <span class="form-control__label-hide">Hide</span>
              </button>
            </div>

            <div class="form-group set--floating-label " data-floating-label>
              <label for="preferredLanguage" class="form-control-label form-control-label--select">
                Preferred Language
              </label>
              <select id="preferredLanguage" class="form-control form-control--select text-transform--capitalize" name="dwfrm_profile_customer_preferredLanguage" value="" maxLength="2147483647">
                <option label=" "></option>
                <option value="en" selected>
                  English
                </option>
              </select>
            </div>
            <div class="cms-generic-copy form-group--short-spacing">
              <span>For further information about how we use your personal information, please see our</span>
              <a href="resources/privacy-policy-template/privacy-policy" title="Privacy Policy" target="_blank">Privacy Policy</a>
            </div>
            <div class="form-group--short-spacing form-check">
              <input type="checkbox" class="form-check-input" id="add-to-email-list" name="dwfrm_profile_customer_addtoemaillist" value="true">
              <label class="form-check-label cms-generic-copy" for="add-to-email-list">
                I would also like to receive marketing information about Cartier's products or services.
              </label>
              <div class="font-family--serif form-control-disclaimer form-check-description">
                <div class="content-asset">
                  <p>We may send you this information using email, text, telephone or post. We may also use your information to deliver personalized messages or advertising on social media or other digital platforms. You can ask us to stop marketing at any time.</p>
                </div>
              </div>
            </div>
            <input type="hidden" name="csrf_token" value="tf6OuOWxSLYvS1UrcFlJen3Eoilp-53lfgYrEXzGd9lYXtmmOp61DOZv2VfNc3znErWmwIwsjBXiDWKOcdhIy_9I22kyIEScFG-kdcoI5ul7tS_UL7VkOGsON_mqtWBFOOd6pcInkx4ZamAbyIk1QH03nUF-VrZLdCgb-gwr0T0N_dVY_xg=" />
            <div class="form-actions">
              <button type="submit" class="button button--primary set--w-100">
                Create Account
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>