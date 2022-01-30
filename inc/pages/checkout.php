<div id="checkout-main" class="checkout max-width--xmedium" data-customer-type="guest" data-stage data-current-stage="shipping" data-checkout-get-url="https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/CheckoutServices-Get" data-shipping-view="single">
  <div class="row">
    <div class="col-12 col-md-7">
      <div class="gutter--normal">
        <div class="checkout-steps-header extend-gutter--small-up-normal">
          <div class="checkout-steps-header__item" data-checkout-component="steps-header-shipping" tabindex="-1">
            <h1 class="checkout-steps-header__title fluid-type--deka-hecto heading-type">Proceed with your order</h1>
            <div class="checkout-steps-header__message checkout-stage__shaded-message gutter--normal bg--grey-1">
              <a class="checkout-steps-header__message-link link--primary" title="Spawns a dialog" href="/on/demandware.store/Sites-CartierUS-Site/en_US/Checkout-Login" data-tracking='{"trackEvent": "CheckoutLinks", "trackObject": {"linkTitle": "--content"}}'>Already registered? Sign in</a>
            </div>
          </div>
          <div class="checkout-steps-header__item" data-checkout-component="steps-header-payment" tabindex="-1">
            <h1 class="checkout-steps-header__title fluid-type--deka-hecto heading-type">Proceed with your order</h1>
          </div>
          <div class="checkout-steps-header__item" data-checkout-component="steps-header-placeOrder" tabindex="-1">
            <h1 class="checkout-steps-header__title fluid-type--deka-hecto heading-type">Review Your Order</h1>
          </div>
        </div>

        <div class="checkout__error-container extend-gutter--normal" data-checkout-component="error-container"></div>

        <div class="checkout-stage" data-stage-container="shipping">
          <input type="hidden" name="storeId" id="checkoutShippingStoreId" value="" />
          <div class="checkout-stage__details checkout-stage__details--shipping" data-checkout-component="shipping-details">
            <div class="checkout-stage__details-group" data-checkout-component="single-shipment-list">
              <div class="checkout-stage__shipment" data-shipment-uuid="0a27defe6f117c81eda1dd3d0c">
                <form class="checkout-stage__form" autocomplete="on" novalidate action="/on/demandware.store/Sites-CartierUS-Site/en_US/CheckoutShippingServices-SubmitShipping" data-address-mode="new" null data-checkout-component="single-shipping-form" name="dwfrm_shipping" id="dwfrm_shipping">
                  <input name="originalShipmentUUID" type="hidden" value="0a27defe6f117c81eda1dd3d0c">
                  <input name="shipmentUUID" type="hidden" value="0a27defe6f117c81eda1dd3d0c">
                  <div class="checkout-stage__header flex--inline">
                    <legend class="body-type heading-type">Shipping Address</legend>
                  </div>
                  <div class="checkout-stage__shaded-message extend-gutter--normal gutter--normal bg--grey-1 cms-generic-copy body-type--deci text-line--medium">
                    <div class="content-asset">
                      Need a product sent to your hotel? Please call one of our ambassadors for more information at <br />800 CARTIER (800 2278437). Please note that Cartier does not ship any orders to P.O. boxes.
                    </div>
                  </div>
                  <div class="checkout-stage__body-message cms-generic-copy body-type--deci text-line--medium">
                    <div class="content-asset">
                      Order placed on this site can be delivered only in the United States. If you would like to ship elsewhere, you will need to <a class="link" href="https://www.cartier.com/en-us/change-country" data-modal-trigger='{"url": "https://www.cartier.com/en-us/change-country?renderView=modal", "type": "html", "options": {"modalID": "countrySelector", "modalClass": "modal--country-selector modal--base"}}'>
                        Change your country.
                      </a>
                    </div>
                  </div>
                  <div class="checkout-stage__shipment-toggle tab-nav set--w-75">
                    <a href="#homedelivery" class="checkout-stage__shipment-toggle-item tab-nav__item flex flex-align-center flex-justify-center bg--grey-1 cms-generic-copy body-type--deci text-line--xxlarge text-transform--initial" data-toggle='{"parent": "[data-checkout-component=single-shipping-form]", "target": "[data-checkout-component=address-container]", "siblingSelector": "[data-toggle-component]", "auto": false, "persist": true, "unsetSelf": false}' data-toggle-component="home" role="tab">
                      <svg aria-hidden="true" focusable="false" class="icon fluid-type--deka-hecto form-control-label--spacing-deka">
                        <use xlink:href="#icon--delivery" />
                      </svg>
                      <span class="tab-nav__item-label">Ship to an Address</span>
                    </a>
                  </div>
                  <div class="tab-content">
                    <div class="checkout-stage__address-container tab-content__panel" role="tabpanel" data-checkout-component="address-container">
                      <fieldset class="checkout-stage__details-section" data-checkout-component="shipping-address-section">
                        <div class="checkout-stage__address-selection checkout-stage__address-selection--top-spacing hidden ">
                          <div class="form-group--no-spacing">
                            <label class="form-control-label" for="shipmentSelector-0a27defe6f117c81eda1dd3d0c">
                              Shipping To
                            </label>
                            <select id="shipmentSelector-0a27defe6f117c81eda1dd3d0c" name="shipmentSelector" class="addressSelector form-control form-control--select form-control--boxed form-control--alt-font" data-checkout-component="single-shipping-address-selector" data-create-shipment-url="https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/CheckoutAddressServices-CreateNewAddress">
                              <option value="new" data-address-type="new" data-salutation="" data-first-name="" data-last-name="" data-custom-first-name="" data-custom-last-name="" data-address1="" data-address2="" data-city="" data-state-code="" data-country-code="US" data-postal-code="" data-phone="">
                                New Address
                              </option>
                            </select>
                          </div>
                          <div class="checkout-stage__address-actions" data-checkout-component="address-actions">
                            <button type="button" class="checkout-stage__address-action link--primary" data-checkout-component="address-action-update" data-tracking='{"trackEvent": "CheckoutLinks", "trackObject": {"linkTitle": "--content"}}'>Update Address</button>
                            <button type="button" class="checkout-stage__address-action link--primary" data-checkout-component="address-action-new" data-tracking='{"trackEvent": "CheckoutLinks", "trackObject": {"linkTitle": "--content"}}'>Add New</button>
                          </div>
                        </div>
                        <div class="checkout-stage__address-fields" data-checkout-component="address-fields" data-address-autocomplete='{"searchField": "[data-address-component=address1]"}'>
                          <input type="hidden" name="dwfrm_shipping_shippingAddress_addressFields_usingVerifiedAddress" value="true" data-verification-component="using-verified" />
                          <p class="form-required__copy font-family--serif text-align--right text-color--grey-5">
                            Required field*
                          </p>

                          <div class="form-group required">
                            <p class="form-control-label form-control-label--spacing-deka">
                              Title
                            </p>
                            <div class="form-check-group flex">
                              <div class="form-check form-check-group__item">
                                <input id="customerSalutationOption-dwfrm_shipping_shippingAddress_addressFields_salutations_salutation-mr" type="radio" class="form-check-input" name="dwfrm_shipping_shippingAddress_addressFields_salutations_salutation" required aria-required="true" value="mr" aria-describedby="customerSalutationFeedback" />
                                <label for="customerSalutationOption-dwfrm_shipping_shippingAddress_addressFields_salutations_salutation-mr" class="form-check-label--radio">
                                  Mr
                                </label>
                              </div>
                              <div class="form-check form-check-group__item">
                                <input id="customerSalutationOption-dwfrm_shipping_shippingAddress_addressFields_salutations_salutation-mrs" type="radio" class="form-check-input" name="dwfrm_shipping_shippingAddress_addressFields_salutations_salutation" required aria-required="true" value="mrs" aria-describedby="customerSalutationFeedback" />
                                <label for="customerSalutationOption-dwfrm_shipping_shippingAddress_addressFields_salutations_salutation-mrs" class="form-check-label--radio">
                                  Mrs
                                </label>
                              </div>
                              <div class="form-check form-check-group__item">
                                <input id="customerSalutationOption-dwfrm_shipping_shippingAddress_addressFields_salutations_salutation-ms" type="radio" class="form-check-input" name="dwfrm_shipping_shippingAddress_addressFields_salutations_salutation" required aria-required="true" value="ms" aria-describedby="customerSalutationFeedback" />
                                <label for="customerSalutationOption-dwfrm_shipping_shippingAddress_addressFields_salutations_salutation-ms" class="form-check-label--radio">
                                  Ms
                                </label>
                              </div>
                            </div>
                            <div id="customerSalutationFeedback" class="invalid-feedback feedback--large-spacing-top"></div>
                          </div>

                          <div class="form-group  required" data-floating-label>
                            <label for="shippingFirstName" class="form-control-label">
                              First Name
                            </label>
                            <input type="text" id="shippingFirstName" value="" class="form-control shippingFirstName" autocomplete="given-name" data-validate-latin name="dwfrm_shipping_shippingAddress_addressFields_firstName" required aria-required="true" value="" maxLength="40">
                            <div class="invalid-feedback">null</div>
                          </div>
                          <div class="form-group  required" data-floating-label>
                            <label for="shippingLastName" class="form-control-label">
                              Last Name
                            </label>
                            <input type="text" id="shippingLastName" value="" class="form-control shippingLastName" autocomplete="family-name" data-validate-latin name="dwfrm_shipping_shippingAddress_addressFields_lastName" required aria-required="true" value="" maxLength="40">
                            <div class="invalid-feedback">null</div>
                          </div>

                          <div class="form-group  required" data-floating-label>
                            <label for="shippingAddressOne" class="form-control-label">
                              Address Line 1
                            </label>
                            <input type="text" id="shippingAddressOne" value="" class="form-control shippingAddressOne" autocomplete="shipping address-line1" placeholder="Type your shipping address" data-address-component="address1" data-checkout-component="shipping-method-update" data-validate-max="60" data-validate-non-pobox name="dwfrm_shipping_shippingAddress_addressFields_address1" required aria-required="true" value="" maxLength="60">
                            <div class="invalid-feedback">null</div>
                          </div>
                          <div class="form-group  " data-floating-label>
                            <label for="shippingAddressTwo" class="form-control-label">
                              Address Line 2
                            </label>
                            <input type="text" id="shippingAddressTwo" value="" class="form-control shippingAddressTwo" autocomplete="shipping address-line2" data-validate-max="39" name="dwfrm_shipping_shippingAddress_addressFields_address2" value="" maxLength="40">
                            <div class="invalid-feedback">null</div>
                          </div>
                          <div class="form-group  required" data-floating-label>
                            <label for="shippingCountry" class="form-control-label">
                              Country
                            </label>
                            <select id="shippingCountry" class="form-control shippingCountry custom-select" autocomplete="shipping country" data-checkout-component="shipping-method-update" name="dwfrm_shipping_shippingAddress_addressFields_country_countryCode" required aria-required="true">
                              <option value="US">
                                United States
                              </option>
                            </select>
                            <div class="invalid-feedback">null</div>
                          </div>
                          <div class="form-group  required" data-floating-label>
                            <label for="shippingAddressCity" class="form-control-label">
                              City
                            </label>
                            <input type="text" id="shippingAddressCitydefault" value="" class="form-control shippingAddressCity" autocomplete="shipping city address-level2" name="dwfrm_shipping_shippingAddress_addressFields_city_cityCode" required aria-required="true" value="" maxLength="40">
                            <div class="invalid-feedback">null</div>
                          </div>
                          <div class="form-group  required" data-floating-label>
                            <label for="shippingState" class="form-control-label">
                              State
                            </label>
                            <select id="shippingState" class="form-control shippingState custom-select" autocomplete="shipping state address-level1" data-autocomplete-custom data-checkout-component="shipping-method-update" required name="dwfrm_shipping_shippingAddress_addressFields_states_stateCode">
                              <option value="">
                              </option>
                              <option value="AL">
                                Alabama
                              </option>
                              <option value="AK">
                                Alaska
                              </option>
                              <option value="AZ">
                                Arizona
                              </option>
                              <option value="AR">
                                Arkansas
                              </option>
                              <option value="CA">
                                California
                              </option>
                              <option value="CO">
                                Colorado
                              </option>
                              <option value="CT">
                                Connecticut
                              </option>
                              <option value="DE">
                                Delaware
                              </option>
                              <option value="DC">
                                District of Columbia
                              </option>
                              <option value="FL">
                                Florida
                              </option>
                              <option value="GA">
                                Georgia
                              </option>
                              <option value="HI">
                                Hawaii
                              </option>
                              <option value="ID">
                                Idaho
                              </option>
                              <option value="IL">
                                Illinois
                              </option>
                              <option value="IN">
                                Indiana
                              </option>
                              <option value="IA">
                                Iowa
                              </option>
                              <option value="KS">
                                Kansas
                              </option>
                              <option value="KY">
                                Kentucky
                              </option>
                              <option value="LA">
                                Louisiana
                              </option>
                              <option value="ME">
                                Maine
                              </option>
                              <option value="MD">
                                Maryland
                              </option>
                              <option value="MA">
                                Massachusetts
                              </option>
                              <option value="MI">
                                Michigan
                              </option>
                              <option value="MN">
                                Minnesota
                              </option>
                              <option value="MS">
                                Mississippi
                              </option>
                              <option value="MO">
                                Missouri
                              </option>
                              <option value="MT">
                                Montana
                              </option>
                              <option value="NE">
                                Nebraska
                              </option>
                              <option value="NV">
                                Nevada
                              </option>
                              <option value="NH">
                                New Hampshire
                              </option>
                              <option value="NJ">
                                New Jersey
                              </option>
                              <option value="NM">
                                New Mexico
                              </option>
                              <option value="NY">
                                New York
                              </option>
                              <option value="NC">
                                North Carolina
                              </option>
                              <option value="ND">
                                North Dakota
                              </option>
                              <option value="OH">
                                Ohio
                              </option>
                              <option value="OK">
                                Oklahoma
                              </option>
                              <option value="OR">
                                Oregon
                              </option>
                              <option value="PA">
                                Pennsylvania
                              </option>
                              <option value="RI">
                                Rhode Island
                              </option>
                              <option value="SC">
                                South Carolina
                              </option>
                              <option value="SD">
                                South Dakota
                              </option>
                              <option value="TN">
                                Tennessee
                              </option>
                              <option value="TX">
                                Texas
                              </option>
                              <option value="UT">
                                Utah
                              </option>
                              <option value="VT">
                                Vermont
                              </option>
                              <option value="VA">
                                Virginia
                              </option>
                              <option value="WA">
                                Washington
                              </option>
                              <option value="WV">
                                West Virginia
                              </option>
                              <option value="WI">
                                Wisconsin
                              </option>
                              <option value="WY">
                                Wyoming
                              </option>
                            </select>
                            <div class="invalid-feedback">null</div>
                          </div>
                          <div class="form-group  required" data-floating-label>
                            <label for="shippingZipCode" class="form-control-label">
                              Zip Code
                            </label>
                            <input type="text" id="shippingZipCode" value="" class="form-control shippingZipCode" autocomplete="shipping postal-code" required data-checkout-component="shipping-method-update" data-validate-postal-code name="dwfrm_shipping_shippingAddress_addressFields_postalCode_postalCode" value="" maxLength="10" pattern="^[\w\s-]*$">
                            <div class="invalid-feedback">null</div>
                          </div>
                          <div class="checkout-stage__phone-number-field">
                            <div class="iti__container form-group form-combo flex flex-flow-wrap required" data-intl-container>
                              <label class="iti__dropdown-label form-control-label">
                                Prefix
                              </label>
                              <div class="iti__dropdown-placeholder form-control form-control--select form-control--combo form-control--combo-no-border font-weight--light"></div>

                              <div class="form-group--no-spacing flex-grow-1 
        required" data-floating-label>
                                <label class="iti__input-label form-control-label" for="phone">
                                  Telephone
                                </label>
                                <input type="tel" class="iti__input form-control" id="phone" data-validate-intl-phone data-intl-phone data-intl-preferred="US" value="" maxlength="30" autocomplete="tel" aria-describedby="phoneValidation-dwfrm_shipping_shippingAddress_addressFields_phone">
                                <input type="hidden" value="" name="dwfrm_shipping_shippingAddress_addressFields_phone" data-intl-phone-hidden />
                              </div>
                              <div id="phoneValidation-dwfrm_shipping_shippingAddress_addressFields_phone" class="set--w-100 invalid-feedback"></div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <hr class="checkout-stage__details-division extend-gutter--small-up-normal text-color--grey-3" />
                      <fieldset class="checkout-stage__details-section--no-spacing" data-checkout-component="shipping-methods-section">
                        <div class="checkout-stage__header flex--inline">
                          <legend class="body-type heading-type">Shipping Method</legend>
                        </div>
                        <div class="cms-generic-copy form-intro__copy text-line--medium">
                          <div class="content-asset">
                            <p>Cartier offers complimentary secure delivery on all orders
                            <p>
                            <p class="flex">
                              <svg viewBox="0 0 26 26" class="icon icon--large icon--set-left-short">
                                <circle cx="12" cy="8" r="1.2" />
                                <path d="M13 11c0-.6-.4-1-1-1h-2v2h1v3H9v2h6v-2h-2v-4z" />
                                <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8z" />
                              </svg>
                              <span class="set--w-100"></span>
                            </p>
                          </div>
                        </div>
                        <input name="shipmentUUID" type="hidden" value="0a27defe6f117c81eda1dd3d0c">
                        <div class="form-check-list" data-select-shipping-method-url="https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/CheckoutShippingServices-SelectShippingMethod" data-action-url="https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/CheckoutShippingServices-UpdateShippingMethodsList" data-checkout-component="shipping-method-list">
                          <div class="shipping-method__item row ">
                            <div class="col-8 col-md-9">
                              <div class="form-check">
                                <input type="radio" id="shippingMethod-SATD-0a27defe6f117c81eda1dd3d0c-single" name="dwfrm_shipping_shippingAddress_shippingMethodID" value="SATD" class="form-check-input" data-checkout-component="shipping-method-check">
                                <label for="shippingMethod-SATD-0a27defe6f117c81eda1dd3d0c-single" class="form-check-label--radio body-type--deci font-weight--bold text-line--medium" data-checkout-component="shipping-method-label">
                                  <span class="display-name heading-type" data-checkout-component="shipping-method-name">
                                    Saturday Delivery Option
                                  </span>
                                  <div class="shipping-method__delivery hidden" data-checkout-component="shipping-method-eta">
                                    <span class="heading-type">
                                      Estimated Delivery
                                    </span>
                                    <span class="font-family--serif" data-checkout-component="shipping-method-eta-date">
                                    </span>
                                  </div>
                                </label>
                              </div>
                            </div>
                            <div class="col-4 col-md-3">
                              <div class="text-align--right heading-type body-type--deci" data-checkout-component="shipping-method-cost">
                                $0.00
                              </div>
                            </div>
                          </div>
                          <div class="shipping-method__item row ">
                            <div class="col-8 col-md-9">
                              <div class="form-check">
                                <input type="radio" id="shippingMethod-STDD-0a27defe6f117c81eda1dd3d0c-single" name="dwfrm_shipping_shippingAddress_shippingMethodID" value="STDD" class="form-check-input" data-checkout-component="shipping-method-check">
                                <label for="shippingMethod-STDD-0a27defe6f117c81eda1dd3d0c-single" class="form-check-label--radio body-type--deci font-weight--bold text-line--medium" data-checkout-component="shipping-method-label">
                                  <span class="display-name heading-type" data-checkout-component="shipping-method-name">
                                    Standard Delivery
                                  </span>
                                  <div class="shipping-method__delivery hidden" data-checkout-component="shipping-method-eta">
                                    <span class="heading-type">
                                      Estimated Delivery
                                    </span>
                                    <span class="font-family--serif" data-checkout-component="shipping-method-eta-date">
                                    </span>
                                  </div>
                                </label>
                              </div>
                            </div>
                            <div class="col-4 col-md-3">
                              <div class="text-align--right heading-type body-type--deci" data-checkout-component="shipping-method-cost">
                                $0.00
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="shipping-method-template" class="hidden" data-checkout-component="shipping-method-template">
                          <div class="shipping-method__item row">
                            <div class="col-8 col-md-9">
                              <div class="form-check">
                                <input type="radio" id="shippingMethodRadioButton" class="form-check-input" data-checkout-component="shipping-method-check">
                                <label for="shippingMethodRadioButton" class="form-check-label--radio body-type--deci font-weight--bold text-line--medium" data-checkout-component="shipping-method-label">
                                  <span class="display-name heading-type" data-checkout-component="shipping-method-name"></span>
                                  <span class="arrival-time font-family--serif hidden" data-checkout-component="shipping-method-estimate"></span>
                                  <div class="shipping-method__delivery hidden" data-checkout-component="shipping-method-eta">
                                    <span class="heading-type">Estimated Delivery</span>
                                    <span class="font-family--serif" data-checkout-component="shipping-method-eta-date"></span>
                                  </div>
                                </label>
                              </div>
                            </div>
                            <div class="col-4 col-md-3">
                              <div class="text-align--right heading-type body-type--deci" data-checkout-component="shipping-method-cost"></div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <hr class="checkout-stage__details-division extend-gutter--small-up-normal text-color--grey-3" />
                    </div>
                  </div>
                  <input type="hidden" name="csrf_token" value="Nst7RFnVm5mFhpmTnzAS_zJMG5mDUCh3sNyjyvlhGE3J_8zXqdCU7zBbLroIAC-UFccJARCizEip_BTg_m6LFACUTwzhK7Y7nSU8oswu4WVgQMsxnASbE3xF6TUhR9C67L6h0x7vfLlQpCDfxlsuvhBk4YYHwagcE6pwO1Sj_VZNWEDKOA4=">
                </form>
              </div>
            </div>
          </div>
          <div class="checkout-stage__summary checkout-stage__summary--shipping checkout-stage__shaded-message extend-gutter--normal gutter--normal bg--grey-1 address-summary--active" data-checkout-component="shipping-summary">
            <div class="checkout-stage__subheader flex flex-justify-between address-summary--active" data-toggle='{"target": ".address-summary", "persist": false, "activeClass": "address-summary--active"}' data-toggle-close>
              <h2 class="heading-type body-type link--secondary--static">Shipping Details</h2>
              <svg aria-hidden="true" focusable="false" class="icon checkout-stage__subheader-icon">
                <use xlink:href="#icon--angle-down" />
              </svg>
            </div>
            <div class="address-summary address-summary--active" data-address-summary="main-0a27defe6f117c81eda1dd3d0c">
              <button type="button" class="link--primary" data-checkout-component="shipping-stage-edit" data-stage-target="shipping" aria-label="Edit Shipping">Modify</button>
              <div class="address-summary__group" data-address-summary="shipping-container">
                <div class="address-summary__section">
                  <h3 class="address-summary__title heading-type body-type--deci">Shipping Address</h3>
                  <div class="address-summary__details font-family--serif">
                    <div>
                      <span class="firstName" data-address-summary="firstName">
                      </span>
                      <span class="lastName" data-address-summary="lastName">
                      </span>
                    </div>
                    <div class="address1" data-address-summary="address1">
                    </div>
                    <div class="address2" data-address-summary="address2">
                    </div>
                    <span class="city" data-address-summary="city">
                    </span>
                    <span class="stateCode" data-address-summary="stateCode">
                    </span>
                    <span class="postalCode" data-address-summary="postalCode">
                    </span>
                    <div class="taxCode" data-address-summary="taxCode">
                    </div>
                    <div class="order-summary-email" data-address-summary="email"></div>
                    <div>
                      <bdi class="shipping-phone" data-address-summary="phone">
                        null
                      </bdi>
                    </div>
                  </div>
                </div>
                <div class="address-summary__section hidden" data-address-summary="shippingMethod">
                  <h3 class="address-summary__title heading-type body-type--deci ">
                    Shipping Method
                  </h3>
                  <div class="address-summary__details">
                    <span class="shipping-method">
                      <span class="shipping-method-title font-family--serif" data-address-summary="shippingMethodDisplayName">
                      </span>
                    </span>
                  </div>
                </div>
                <div class="shipping-method__delivery hidden" data-checkout-component="shipping-method-eta">
                  <span class="font-family--serif">
                    Estimated Delivery:
                  </span>
                  <span class="font-family--serif" data-checkout-component="shipping-method-eta-date">
                  </span>
                </div>
                <div class="address-summary__section hidden" data-address-summary="gift">
                  <h3 class="address-summary__title heading-type body-type">Gift Message for this order</h3>
                  <p class="address-summary__details cms-generic-copy" data-address-summary="giftMessage"></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="checkout-stage" data-stage-container="payment">
          <div class="checkout-stage__details checkout-stage__details--shipping" data-checkout-component="payment-details">
            <form class="checkout-stage__form" autocomplete="on" method="POST" action="/on/demandware.store/Sites-CartierUS-Site/en_US/CheckoutServices-SubmitPayment" data-address-mode="new" data-checkout-component="payment-form" name="dwfrm_billing" id="dwfrm_billing" novalidate>
              <div class="checkout-stage__address-container" data-checkout-component="address-container">
                <fieldset class="checkout-stage__details-section  billing-check billing-check--">
                  <div class="checkout-stage__header extend-gutter--normal gutter--normal">
                    <h2 class="heading-type body-type flex--inline link--secondary--static">Payment Details</h2>
                  </div>
                  <div class="checkout-stage__subheader">
                    <h3 class="heading-type body-type--deci">Billing Details</h2>
                  </div>

                  <div class="checkout-stage__address-selection">
                    <label class="form-control-label" for="billingAddressSelector">
                      Billing Address
                    </label>
                    <select id="billingAddressSelector" name="addressSelector" class="addressSelector form-control form-control--select form-control--boxed form-control--alt-font" data-checkout-component="payment-address-selector" data-create-shipment-url="https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Checkout-SetBillingAddress">
                      <option value="new" data-address-type="new" data-salutation="" data-first-name="" data-last-name="" data-custom-first-name="" data-custom-last-name="" data-address1="" data-address2="" data-city="" data-state-code="" data-country-code="US" data-postal-code="" data-phone="">
                        New Address
                      </option>
                    </select>
                    <div class="checkout-stage__address-actions" data-checkout-component="address-actions">
                      <button type="button" class="checkout-stage__address-action link--primary" data-checkout-component="address-action-update" data-tracking='{"trackEvent": "CheckoutLinks", "trackObject": {"linkTitle": "--content"}}'>Update Address</button>
                      <button type="button" class="checkout-stage__address-action link--primary" data-checkout-component="address-action-new" data-tracking='{"trackEvent": "CheckoutLinks", "trackObject": {"linkTitle": "--content"}}'>Add New</button>
                    </div>
                  </div>

                  <div class="checkout-stage__address-fields" data-checkout-component="address-fields" data-address-autocomplete='{"searchField": "[data-address-component=address1]"}'>
                    <p class="form-required__copy font-family--serif text-align--right text-color--grey-5">
                      Required field*
                    </p>
                    <div class="form-group required">
                      <p class="form-control-label form-control-label--spacing-deka">
                        Title
                      </p>
                      <div class="form-check-group flex">
                        <div class="form-check form-check-group__item">
                          <input id="customerSalutationOption-dwfrm_billing_addressFields_salutations_salutation-mr" type="radio" class="form-check-input" name="dwfrm_billing_addressFields_salutations_salutation" required aria-required="true" value="mr" aria-describedby="customerSalutationFeedback" />
                          <label for="customerSalutationOption-dwfrm_billing_addressFields_salutations_salutation-mr" class="form-check-label--radio">
                            Mr
                          </label>
                        </div>
                        <div class="form-check form-check-group__item">
                          <input id="customerSalutationOption-dwfrm_billing_addressFields_salutations_salutation-mrs" type="radio" class="form-check-input" name="dwfrm_billing_addressFields_salutations_salutation" required aria-required="true" value="mrs" aria-describedby="customerSalutationFeedback" />
                          <label for="customerSalutationOption-dwfrm_billing_addressFields_salutations_salutation-mrs" class="form-check-label--radio">
                            Mrs
                          </label>
                        </div>
                        <div class="form-check form-check-group__item">
                          <input id="customerSalutationOption-dwfrm_billing_addressFields_salutations_salutation-ms" type="radio" class="form-check-input" name="dwfrm_billing_addressFields_salutations_salutation" required aria-required="true" value="ms" aria-describedby="customerSalutationFeedback" />
                          <label for="customerSalutationOption-dwfrm_billing_addressFields_salutations_salutation-ms" class="form-check-label--radio">
                            Ms
                          </label>
                        </div>
                      </div>
                      <div id="customerSalutationFeedback" class="invalid-feedback feedback--large-spacing-top"></div>
                    </div>

                    <div class="form-group  required" data-floating-label>
                      <label for="billingFirstName" class="form-control-label">
                        First Name
                      </label>
                      <input type="text" id="billingFirstName" value="" class="form-control billingFirstName" autocomplete="given-name" data-validate-latin name="dwfrm_billing_addressFields_firstName" required aria-required="true" value="" maxLength="27">
                    </div>
                    <div class="form-group  required" data-floating-label>
                      <label for="billingLastName" class="form-control-label">
                        Last Name
                      </label>
                      <input type="text" id="billingLastName" value="" class="form-control billingLastName" autocomplete="family-name" data-validate-latin name="dwfrm_billing_addressFields_lastName" required aria-required="true" value="" maxLength="32">
                    </div>

                    <div class="form-group  required" data-floating-label>
                      <label for="billingAddressOne" class="form-control-label">
                        Address Line 1
                      </label>
                      <input type="text" id="billingAddressOne" value="" class="form-control billingAddressOne" autocomplete="billing address-line1" data-address-component="address1" name="dwfrm_billing_addressFields_address1" required aria-required="true" value="" maxLength="60">
                    </div>
                    <div class="form-group  " data-floating-label>
                      <label for="billingAddressTwo" class="form-control-label">
                        Address Line 2
                      </label>
                      <input type="text" id="billingAddressTwo" value="" class="form-control billingAddressTwo" autocomplete="billing address-line2" name="dwfrm_billing_addressFields_address2" value="" maxLength="40">
                    </div>
                    <div class="form-group  required" data-floating-label>
                      <label for="billingCountry" class="form-control-label">
                        Country
                      </label>
                      <select id="billingCountry" class="form-control billingCountry custom-select" autocomplete="billing country" data-billing-address="country-code" name="dwfrm_billing_addressFields_country_countryCode" required aria-required="true">
                        <option value="">
                        </option>
                        <option value="AF">
                          Afghanistan
                        </option>
                        <option value="AX">
                          &Aring;land Islands
                        </option>
                        <option value="AL">
                          Albania
                        </option>
                        <option value="DZ">
                          Algeria
                        </option>
                        <option value="AD">
                          Andorra
                        </option>
                        <option value="AO">
                          Angola
                        </option>
                        <option value="AI">
                          Anguilla
                        </option>
                        <option value="AQ">
                          Antarctica
                        </option>
                        <option value="AG">
                          Antigua and Barbuda
                        </option>
                        <option value="AR">
                          Argentina
                        </option>
                        <option value="AW">
                          Aruba
                        </option>
                        <option value="AU">
                          Australia
                        </option>
                        <option value="AT">
                          Austria
                        </option>
                        <option value="AZ">
                          Azerbaijan
                        </option>
                        <option value="BS">
                          Bahamas
                        </option>
                        <option value="BH">
                          Bahrain
                        </option>
                        <option value="BD">
                          Bangladesh
                        </option>
                        <option value="BB">
                          Barbados
                        </option>
                        <option value="BY">
                          Belarus
                        </option>
                        <option value="BE">
                          Belgium
                        </option>
                        <option value="BZ">
                          Belize
                        </option>
                        <option value="BJ">
                          Benin
                        </option>
                        <option value="BM">
                          Bermuda
                        </option>
                        <option value="BT">
                          Bhutan
                        </option>
                        <option value="BO">
                          Bolivia
                        </option>
                        <option value="BQ">
                          Bonaire, Sint Eustatius and Saba
                        </option>
                        <option value="BA">
                          Bosnia and Herzegovina
                        </option>
                        <option value="BW">
                          Botswana
                        </option>
                        <option value="BV">
                          Bouvet Island
                        </option>
                        <option value="BR">
                          Brazil
                        </option>
                        <option value="IO">
                          British Indian Ocean Territory
                        </option>
                        <option value="BN">
                          Brunei Darussalam
                        </option>
                        <option value="BG">
                          Bulgaria
                        </option>
                        <option value="BF">
                          Burkina Faso
                        </option>
                        <option value="BI">
                          Burundi
                        </option>
                        <option value="CV">
                          Cabo Verde
                        </option>
                        <option value="KH">
                          Cambodia
                        </option>
                        <option value="CM">
                          Cameroon
                        </option>
                        <option value="CA">
                          Canada
                        </option>
                        <option value="KY">
                          Cayman Islands
                        </option>
                        <option value="CF">
                          Central African Republic
                        </option>
                        <option value="TD">
                          Chad
                        </option>
                        <option value="CL">
                          Chile
                        </option>
                        <option value="CN">
                          China
                        </option>
                        <option value="CX">
                          Christmas Island
                        </option>
                        <option value="CC">
                          Cocos (Keeling) Islands
                        </option>
                        <option value="CO">
                          Colombia
                        </option>
                        <option value="KM">
                          Comoros
                        </option>
                        <option value="CD">
                          Congo
                        </option>
                        <option value="CG">
                          Congo
                        </option>
                        <option value="CK">
                          Cook Islands
                        </option>
                        <option value="CR">
                          Costa Rica
                        </option>
                        <option value="CI">
                          C&ocirc;te d&rsquo;Ivoire
                        </option>
                        <option value="HR">
                          Croatia
                        </option>
                        <option value="CU">
                          Cuba
                        </option>
                        <option value="CW">
                          Cura&ccedil;ao
                        </option>
                        <option value="CY">
                          Cyprus
                        </option>
                        <option value="CZ">
                          Czechia
                        </option>
                        <option value="DK">
                          Denmark
                        </option>
                        <option value="DJ">
                          Djibouti
                        </option>
                        <option value="DM">
                          Dominica
                        </option>
                        <option value="DO">
                          Dominican Republic
                        </option>
                        <option value="EC">
                          Ecuador
                        </option>
                        <option value="EG">
                          Egypt
                        </option>
                        <option value="SV">
                          El Salvador
                        </option>
                        <option value="GQ">
                          Equatorial Guinea
                        </option>
                        <option value="ER">
                          Eritrea
                        </option>
                        <option value="EE">
                          Estonia
                        </option>
                        <option value="SZ">
                          Eswatini
                        </option>
                        <option value="ET">
                          Ethiopia
                        </option>
                        <option value="FK">
                          Falkland Islands
                        </option>
                        <option value="FO">
                          Faroe Islands
                        </option>
                        <option value="FJ">
                          Fiji
                        </option>
                        <option value="FI">
                          Finland
                        </option>
                        <option value="FR">
                          France
                        </option>
                        <option value="GF">
                          French Guiana
                        </option>
                        <option value="PF">
                          French Polynesia
                        </option>
                        <option value="TF">
                          French Southern Territories
                        </option>
                        <option value="GA">
                          Gabon
                        </option>
                        <option value="GM">
                          Gambia
                        </option>
                        <option value="GE">
                          Georgia
                        </option>
                        <option value="DE">
                          Germany
                        </option>
                        <option value="GH">
                          Ghana
                        </option>
                        <option value="GI">
                          Gibraltar
                        </option>
                        <option value="GR">
                          Greece
                        </option>
                        <option value="GL">
                          Greenland
                        </option>
                        <option value="GD">
                          Grenada
                        </option>
                        <option value="GP">
                          Guadeloupe
                        </option>
                        <option value="GT">
                          Guatemala
                        </option>
                        <option value="GG">
                          Guernsey
                        </option>
                        <option value="GN">
                          Guinea
                        </option>
                        <option value="GW">
                          Guinea-Bissau
                        </option>
                        <option value="GY">
                          Guyana
                        </option>
                        <option value="HT">
                          Haiti
                        </option>
                        <option value="HM">
                          Heard Island and McDonald Islands
                        </option>
                        <option value="VA">
                          Holy See
                        </option>
                        <option value="HN">
                          Honduras
                        </option>
                        <option value="HK">
                          Hong Kong
                        </option>
                        <option value="HU">
                          Hungary
                        </option>
                        <option value="IS">
                          Iceland
                        </option>
                        <option value="IN">
                          India
                        </option>
                        <option value="ID">
                          Indonesia
                        </option>
                        <option value="IR">
                          Iran
                        </option>
                        <option value="IQ">
                          Iraq
                        </option>
                        <option value="IE">
                          Ireland
                        </option>
                        <option value="IM">
                          Isle of Man
                        </option>
                        <option value="IL">
                          Israel
                        </option>
                        <option value="IT">
                          Italy
                        </option>
                        <option value="JM">
                          Jamaica
                        </option>
                        <option value="JP">
                          Japan
                        </option>
                        <option value="JE">
                          Jersey
                        </option>
                        <option value="JO">
                          Jordan
                        </option>
                        <option value="KZ">
                          Kazakhstan
                        </option>
                        <option value="KE">
                          Kenya
                        </option>
                        <option value="KI">
                          Kiribati
                        </option>

                        <option value="KP">
                          North Korea
                        </option>
                        <option value="KR">
                          South Korea
                        </option>
                        <option value="KW">
                          Kuwait
                        </option>
                        <option value="KG">
                          Kyrgyzstan
                        </option>
                        <option value="LA">
                          Laos
                        </option>
                        <option value="LV">
                          Latvia
                        </option>
                        <option value="LB">
                          Lebanon
                        </option>
                        <option value="LS">
                          Lesotho
                        </option>
                        <option value="LR">
                          Liberia
                        </option>
                        <option value="LY">
                          Libya
                        </option>
                        <option value="LI">
                          Liechtenstein
                        </option>
                        <option value="LT">
                          Lithuania
                        </option>
                        <option value="LU">
                          Luxembourg
                        </option>
                        <option value="MO">
                          Macao
                        </option>
                        <option value="MK">
                          North Macedonia
                        </option>
                        <option value="MG">
                          Madagascar
                        </option>
                        <option value="MW">
                          Malawi
                        </option>
                        <option value="MY">
                          Malaysia
                        </option>
                        <option value="MV">
                          Maldives
                        </option>
                        <option value="ML">
                          Mali
                        </option>
                        <option value="MT">
                          Malta
                        </option>
                        <option value="MH">
                          Marshall Islands
                        </option>
                        <option value="MQ">
                          Martinique
                        </option>
                        <option value="MR">
                          Mauritania
                        </option>
                        <option value="MU">
                          Mauritius
                        </option>
                        <option value="YT">
                          Mayotte
                        </option>
                        <option value="MX">
                          Mexico
                        </option>
                        <option value="FM">
                          Micronesia
                        </option>
                        <option value="MD">
                          Moldova
                        </option>
                        <option value="MC">
                          Monaco
                        </option>
                        <option value="MN">
                          Mongolia
                        </option>
                        <option value="ME">
                          Montenegro
                        </option>
                        <option value="MS">
                          Montserrat
                        </option>
                        <option value="MA">
                          Morocco
                        </option>
                        <option value="MZ">
                          Mozambique
                        </option>
                        <option value="MM">
                          Myanmar
                        </option>
                        <option value="NA">
                          Namibia
                        </option>
                        <option value="NR">
                          Nauru
                        </option>
                        <option value="NP">
                          Nepal
                        </option>
                        <option value="NL">
                          Netherlands
                        </option>
                        <option value="NC">
                          New Caledonia
                        </option>
                        <option value="NZ">
                          New Zealand
                        </option>
                        <option value="NI">
                          Nicaragua
                        </option>
                        <option value="NE">
                          Niger
                        </option>
                        <option value="NG">
                          Nigeria
                        </option>
                        <option value="NU">
                          Niue
                        </option>
                        <option value="NF">
                          Norfolk Island
                        </option>
                        <option value="MP">
                          Northern Mariana Islands
                        </option>
                        <option value="NO">
                          Norway
                        </option>
                        <option value="OM">
                          Oman
                        </option>
                        <option value="PK">
                          Pakistan
                        </option>
                        <option value="PW">
                          Palau
                        </option>
                        <option value="PS">
                          Palestine
                        </option>
                        <option value="PA">
                          Panama
                        </option>
                        <option value="PG">
                          Papua New Guinea
                        </option>
                        <option value="PY">
                          Paraguay
                        </option>
                        <option value="PE">
                          Peru
                        </option>
                        <option value="PH">
                          Philippines
                        </option>
                        <option value="PN">
                          Pitcairn
                        </option>
                        <option value="PL">
                          Poland
                        </option>
                        <option value="PT">
                          Portugal
                        </option>
                        <option value="QA">
                          Qatar
                        </option>
                        <option value="RE">
                          R&eacute;union
                        </option>
                        <option value="RO">
                          Romania
                        </option>
                        <option value="RU">
                          Russian
                        </option>
                        <option value="RW">
                          Rwanda
                        </option>
                        <option value="BL">
                          Saint Barth&eacute;lemy
                        </option>
                        <option value="SH">
                          Saint Helena
                        </option>
                        <option value="KN">
                          Saint Kitts and Nevis
                        </option>
                        <option value="LC">
                          Saint Lucia
                        </option>
                        <option value="MF">
                          Saint Martin
                        </option>
                        <option value="PM">
                          Saint Pierre and Miquelon
                        </option>
                        <option value="VC">
                          Saint Vincent and the Grenadines
                        </option>
                        <option value="WS">
                          Samoa
                        </option>
                        <option value="SM">
                          San Marino
                        </option>
                        <option value="ST">
                          Sao Tome and Principe
                        </option>
                        <option value="SA">
                          Saudi Arabia
                        </option>
                        <option value="SN">
                          Senegal
                        </option>
                        <option value="RS">
                          Serbia
                        </option>
                        <option value="SC">
                          Seychelles
                        </option>
                        <option value="SL">
                          Sierra Leone
                        </option>
                        <option value="SG">
                          Singapore
                        </option>
                        <option value="SX">
                          Sint Maarten
                        </option>
                        <option value="SK">
                          Slovakia
                        </option>
                        <option value="SI">
                          Slovenia
                        </option>
                        <option value="SB">
                          Solomon Islands
                        </option>
                        <option value="SO">
                          Somalia
                        </option>
                        <option value="ZA">
                          South Africa
                        </option>
                        <option value="GS">
                          South Georgia and the South Sandwich Islands
                        </option>
                        <option value="SS">
                          South Sudan
                        </option>

                        <option value="ES">
                          Spain
                        </option>
                        <option value="LK">
                          Sri Lanka
                        </option>
                        <option value="SD">
                          Sudan
                        </option>
                        <option value="SR">
                          Suriname
                        </option>
                        <option value="SJ">
                          Svalbard
                        </option>
                        <option value="SE">
                          Sweden
                        </option>
                        <option value="CH">
                          Switzerland
                        </option>
                        <option value="SY">
                          Syrian Arab
                        </option>
                        <option value="TW">
                          Taiwan
                        </option>
                        <option value="TJ">
                          Tajikistan
                        </option>
                        <option value="TZ">
                          Tanzania
                        </option>
                        <option value="TH">
                          Thailand
                        </option>
                        <option value="TL">
                          Timor-Leste
                        </option>
                        <option value="TG">
                          Togo
                        </option>
                        <option value="TK">
                          Tokelau
                        </option>
                        <option value="TO">
                          Tonga
                        </option>
                        <option value="TT">
                          Trinidad and Tobago
                        </option>
                        <option value="TN">
                          Tunisia
                        </option>
                        <option value="TR">
                          Turkey
                        </option>
                        <option value="TM">
                          Turkmenistan
                        </option>
                        <option value="TC">
                          Turks and Caicos Islands
                        </option>
                        <option value="TV">
                          Tuvalu
                        </option>
                        <option value="UG">
                          Uganda
                        </option>
                        <option value="US">
                          United States
                        </option>
                        <option value="UA">
                          Ukraine
                        </option>
                        <option value="AE">
                          United Arab Emirates
                        </option>
                        <option value="GB">
                          United Kingdom of Great Britain and Northern Ireland
                        </option>
                        <option value="UM">
                          United States Minor Outlying Islands
                        </option>
                        <option value="UY">
                          Uruguay
                        </option>
                        <option value="UZ">
                          Uzbekistan
                        </option>
                        <option value="VU">
                          Vanuatu
                        </option>
                        <option value="VE">
                          Venezuela
                        </option>
                        <option value="VN">
                          Viet Nam
                        </option>
                        <option value="VG">
                          Virgin Islands
                        </option>
                        <option value="WF">
                          Wallis and Futuna
                        </option>
                        <option value="EH">
                          Western Sahara
                        </option>
                        <option value="YE">
                          Yemen
                        </option>
                        <option value="ZM">
                          Zambia
                        </option>
                        <option value="ZW">
                          Zimbabwe
                        </option>
                      </select>
                    </div>
                    <div class="form-group required">
                      <div class="toggle-display--hidden toggle--active " data-billing-address-state-code="US" data-floating-label>
                        <label for="billingState" class="form-control-label">
                          State
                        </label>
                        <select id="billingState" class="form-control billingState custom-select" autocomplete="billing state address-level1" data-autocomplete-custom data-validate-billing-state-code name="dwfrm_billing_addressFields_states_stateCode">
                          <option value="">
                          </option>
                          <option value="AL">
                            Alabama
                          </option>
                          <option value="AK">
                            Alaska
                          </option>
                          <option value="AZ">
                            Arizona
                          </option>
                          <option value="AR">
                            Arkansas
                          </option>
                          <option value="CA">
                            California
                          </option>
                          <option value="CO">
                            Colorado
                          </option>
                          <option value="CT">
                            Connecticut
                          </option>
                          <option value="DE">
                            Delaware
                          </option>
                          <option value="DC">
                            District of Columbia
                          </option>
                          <option value="FL">
                            Florida
                          </option>
                          <option value="GA">
                            Georgia
                          </option>
                          <option value="HI">
                            Hawaii
                          </option>
                          <option value="ID">
                            Idaho
                          </option>
                          <option value="IL">
                            Illinois
                          </option>
                          <option value="IN">
                            Indiana
                          </option>
                          <option value="IA">
                            Iowa
                          </option>
                          <option value="KS">
                            Kansas
                          </option>
                          <option value="KY">
                            Kentucky
                          </option>
                          <option value="LA">
                            Louisiana
                          </option>
                          <option value="ME">
                            Maine
                          </option>
                          <option value="MD">
                            Maryland
                          </option>
                          <option value="MA">
                            Massachusetts
                          </option>
                          <option value="MI">
                            Michigan
                          </option>
                          <option value="MN">
                            Minnesota
                          </option>
                          <option value="MS">
                            Mississippi
                          </option>
                          <option value="MO">
                            Missouri
                          </option>
                          <option value="MT">
                            Montana
                          </option>
                          <option value="NE">
                            Nebraska
                          </option>
                          <option value="NV">
                            Nevada
                          </option>
                          <option value="NH">
                            New Hampshire
                          </option>
                          <option value="NJ">
                            New Jersey
                          </option>
                          <option value="NM">
                            New Mexico
                          </option>
                          <option value="NY">
                            New York
                          </option>
                          <option value="NC">
                            North Carolina
                          </option>
                          <option value="ND">
                            North Dakota
                          </option>
                          <option value="OH">
                            Ohio
                          </option>
                          <option value="OK">
                            Oklahoma
                          </option>

                          <option value="OR">
                            Oregon
                          </option>
                          <option value="PA">
                            Pennsylvania
                          </option>
                          <option value="RI">
                            Rhode Island
                          </option>
                          <option value="SC">
                            South Carolina
                          </option>
                          <option value="SD">
                            South Dakota
                          </option>
                          <option value="TN">
                            Tennessee
                          </option>
                          <option value="TX">
                            Texas
                          </option>
                          <option value="UT">
                            Utah
                          </option>
                          <option value="VT">
                            Vermont
                          </option>
                          <option value="VA">
                            Virginia
                          </option>
                          <option value="WA">
                            Washington
                          </option>
                          <option value="WV">
                            West Virginia
                          </option>
                          <option value="WI">
                            Wisconsin
                          </option>
                          <option value="WY">
                            Wyoming
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group  required" data-floating-label>
                      <label for="billingAddressCity" class="form-control-label">
                        City
                      </label>
                      <input type="text" id="billingAddressCity" value="" class="form-control billingAddressCity" autocomplete="billing city address-level2" name="dwfrm_billing_addressFields_city_cityCode" required aria-required="true" value="" maxLength="40">
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group  required" data-floating-label>
                      <label for="billingZipCode" class="form-control-label">
                        Zip Code
                      </label>
                      <input type="text" id="billingZipCode" value="" class="form-control billingZipCode" autocomplete="billing postal-code" required data-validate-postal-code name="dwfrm_billing_addressFields_postalCode_postalCode" value="" maxLength="10" pattern="^[\w\s-]*$">
                    </div>
                    <div class="checkout-stage__phone-number-field">
                      <div class="iti__container form-group form-combo flex flex-flow-wrap required" data-intl-container>
                        <label class="iti__dropdown-label form-control-label">
                          Prefix
                        </label>
                        <div class="iti__dropdown-placeholder form-control form-control--select form-control--combo form-control--combo-no-border font-weight--light"></div>

                        <div class="form-group--no-spacing flex-grow-1 
        required" data-floating-label>
                          <label class="iti__input-label form-control-label" for="phone">
                            Telephone
                          </label>
                          <input type="tel" class="iti__input form-control" id="phone" data-validate-intl-phone data-intl-phone data-intl-preferred="US" value="" maxlength="30" autocomplete="tel" aria-describedby="phoneValidation-dwfrm_billing_addressFields_phone">
                          <input type="hidden" value="" name="dwfrm_billing_addressFields_phone" data-intl-phone-hidden />
                        </div>
                        <div id="phoneValidation-dwfrm_billing_addressFields_phone" class="set--w-100 invalid-feedback"></div>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="checkout-stage__details-section form-actions ">
                  <div class="checkout-stage__title">
                    <h3 class="heading-type body-type--deci">Contact Email Address</h2>
                  </div>
                  <div class="form-group--short-spacing 
                    required
                    dwfrm_billing_contactInfoFields_email" data-floating-label>
                    <label class="form-control-label" for="email">Email</label>
                    <input type="email" class="form-control email" id="email" pattern="^[\w%\+\-]+(\.[\w%\+\-]+)*@[\w%\+\-]+(\.[\w%\+\-]{2,6})+$" data-pattern-mismatch="Error - Please enter a valid Email address" value="" name="dwfrm_billing_contactInfoFields_email" required aria-required="true" value="" maxLength="50" pattern="^[\w.%+-]+@[\w.-]+\.[\w]{2,6}$" aria-describedby="emailInvalidMessage">
                    <div class="invalid-feedback" id="emailInvalidMessage"></div>
                  </div>
                  </iselseif>
                  <div class="form-group--short-spacing form-check">
                    <input type="checkbox" class="form-check-input" id="add-to-email-list" name="dwfrm_shipping_shippingAddress_addressFields_addtoemaillist" value="true">
                    <label class="form-check-label cms-generic-copy" for="add-to-email-list">
                      I would also like to receive marketing information about Cartier’s products or services.
                    </label>
                    <div class="font-family--serif form-control-disclaimer form-check-description">
                      <div class="content-asset">
                        <p>We may send you this information using email, text, telephone or post. We may also use your information to deliver personalized messages or advertising on social media or other digital platforms. You can ask us to stop marketing at any time.</p>
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="checkout-stage__details-section form-actions">
                  <div class="checkout-stage__title extend-gutter--normal gutter--normal">
                    <h3 class="heading-type body-type--deci">Payment Method</h3>
                  </div>
                  <div class="checkout-stage__payment-options" data-checkout-component="payment-options" data-payment-method-id="AdyenComponent" data-is-new-payment="true">
                    <div class="payment-options" data-checkout-component="payment-options-content">
                      <div class="payment-option__item flex flex-direction-col flex-align-start fix--overflow">
                        <a class="payment-option__trigger form-check-label--radio toggle--active" data-toggle='{"target": "[data-checkout-component=adyen-tab]", "auto": true, "persist": true, "unsetSelf": false, "siblingSelector": "[data-checkout-component=payment-tab-nav]"}' href="#adyen-component-content" role="tab" data-method-id="AdyenComponent" data-checkout-component="payment-tab-nav">
                          <span class="payment-option__label heading-type body-type--deci text-line--xlarge">Credit Card</span>
                        </a>
                        <div id="adyen-component-content" class="payment-options__content payment-options__content--AdyenComponent toggle--active" role="tabpanel" data-checkout-component="adyen-tab">
                          <fieldset class="payment-form-fields">
                            <input type="radio" name="dwfrm_billing_paymentMethod" value="AdyenComponent" class="form-control hidden" data-checkout-component="payment-method" checked>
                            <input type="hidden" name="csrf_token" value="Nst7RFnVm5mFhpmTnzAS_zJMG5mDUCh3sNyjyvlhGE3J_8zXqdCU7zBbLroIAC-UFccJARCizEip_BTg_m6LFACUTwzhK7Y7nSU8oswu4WVgQMsxnASbE3xF6TUhR9C67L6h0x7vfLlQpCDfxlsuvhBk4YYHwagcE6pwO1Sj_VZNWEDKOA4=">
                            <fieldset>
                              <script>
                                window.Configuration = {
                                  locale: 'en_US',
                                  originKey: 'pub.v2.1119340538552412.aHR0cHM6Ly93d3cuY2FydGllci5jb20.94tINedSWo8ZqdYAwTYY3by2eg6VSPPLkCQ7OLjL3TA',
                                  environment: 'live'
                                };
                                window.installments = 'null';
                                window.paypalMerchantID = 'paypal.us@cartier.com';
                                window.googleMerchantID = "null";
                                window.merchantAccount = "US_ECOM_110";
                                var showStoreDetails = false;
                              </script>
                              <input id="adyenStateData" type="hidden" name="dwfrm_billing_adyenPaymentFields_adyenStateData" />
                              <input type="text" class="form-control cardNumber" style="display:none" id="cardNumber" name="dwfrm_billing_creditCardFields_cardNumber">
                              <input type="hidden" class="form-control" id="cardType" name="dwfrm_billing_creditCardFields_cardType">
                              <input id="adyenPaymentMethodName" type="hidden" name="adyenPaymentMethod" />
                              <input id="adyenIssuerName" type="hidden" name="adyenIssuerName" />
                              <input id="selectedIssuer" type="hidden" name="dwfrm_billing_adyenPaymentFields_issuer" />
                              <ul id="paymentMethodsList" class="adyen-payment-list list--reset"></ul>
                              <script type="text/javascript" src="https://live.adyen.com/hpp/js/df.js?v=S6nMNxVo4v44Z9cHNhX2aVjtrlmRcCiOqYQ="></script>
                              <input id="adyenFingerprint" type="hidden" name="dwfrm_billing_adyenPaymentFields_adyenFingerprint" />
                              <script type="text/javascript">
                                dfDo('adyenFingerprint');
                              </script>
            </form>
            <form method="post" id="showConfirmationForm" action="https://www.cartier.com/on/demandware.store/Sites-CartierUS-Site/en_US/Adyen-ShowConfirmationPaymentFromComponent">
              <input type="hidden" id="additionalDetailsHidden" name="additionalDetailsHidden" value="null" />
              <input type="hidden" id="merchantReference" name="merchantReference" />
              <input type="hidden" id="orderToken" name="orderToken" />
            </form>
            </fieldset>
            </fieldset>
          </div>
        </div>
        <div class="payment-option__item flex flex-direction-col flex-align-start fix--overflow">
        </div>
        <div class="payment-option__item flex flex-direction-col flex-align-start fix--overflow">
        </div>
        <div class="payment-option__item flex flex-direction-col flex-align-start fix--overflow">
        </div>
      </div>
    </div>
    <div class="form-actions font-family--serif">
      <div class="content-asset">
        <p>For further information about how we use your personal information, please see our <u><a class="link--underline-hover" href="https://www.cartier.com/en-us/resources/privacy-policy-template/privacy-policy.html" target="_blank" title="Go to Privacy">Privacy Policy</a></u>.</p>
      </div>
    </div>
    </fieldset>
  </div>
  <input type="hidden" name="csrf_token" value="Nst7RFnVm5mFhpmTnzAS_zJMG5mDUCh3sNyjyvlhGE3J_8zXqdCU7zBbLroIAC-UFccJARCizEip_BTg_m6LFACUTwzhK7Y7nSU8oswu4WVgQMsxnASbE3xF6TUhR9C67L6h0x7vfLlQpCDfxlsuvhBk4YYHwagcE6pwO1Sj_VZNWEDKOA4=" />
  </form>
</div>
<div class="checkout-stage__summary checkout-stage__summary--payment checkout-stage__shaded-message extend-gutter--normal gutter--normal bg--grey-1 address-summary--active" data-checkout-component="payment-summary">
  <div class="checkout-stage__subheader flex flex-justify-between">
    <h2 class="heading-type body-type link--secondary--static">Payment</h2>
  </div>
  <div class="address-summary-pay" data-address-summary="main-payment">
    <div class="address-summary__group" data-address-summary="payment-container">
      <div class="address-summary__section">
        <h3 class="address-summary__title heading-type body-type--deci">Payment Method</h3>
        <div class="address-summary__details font-family--serif">
          <div class="address-summary__subsection hidden" data-address-summary="payment-instrument-AdyenComponent">
            <div class="credit-card-type">
              <div class="order-detail__body-content" data-address-summary="selectedAdyenPM">
                Payment Mode : Credit Card
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="address-summary__section billing-check-status">
        <h3 class="address-summary__title heading-type body-type--deci">Billing Address</h3>
        <div class="address-summary__details font-family--serif">
          <div>
            <span class="firstName" data-address-summary="firstName">
            </span>
            <span class="lastName" data-address-summary="lastName">
            </span>
          </div>
          <div class="address1" data-address-summary="address1">
          </div>
          <div class="address2" data-address-summary="address2">
          </div>
          <span class="city" data-address-summary="city">
          </span>
          <span class="stateCode" data-address-summary="stateCode">
          </span>
          <span class="postalCode" data-address-summary="postalCode">
          </span>
          <div class="taxCode" data-address-summary="taxCode">
          </div>
          <div class="order-summary-email" data-address-summary="email"></div>
          <div>
            <bdi class="shipping-phone" data-address-summary="phone">
              null
            </bdi>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="col-12 col-md-5">
  <div class="fixit-container flex-grow-1 gutter--small-only-normal">
    <div class="order-summary gutter--small-up-normal fixit-element" data-fixit-trigger='{"enabled": "small-up", "respondToParent": true, "containedInParent": true, "useOffsetOnTarget": true}'>
      <div class="order-summary__header flex flex-justify-between flex-align-baseline flex-flow-wrap">
        <h2 class="order-summary__title heading-type body-type--deka">Order Summary</h2>
        <a class="link--primary" href="/en-us/cart" title="Modify" data-tracking='{"trackEvent": "CheckoutLinks", "trackObject": {"linkTitle": "--content"}}'>
          Modify
        </a>
        <p class="set--w-100 text-line--medium flex-grow-1 font-family--serif">
          2 Items
        </p>
      </div>
      <div class="order-summary__products">
        <div data-checkout-component="product-list">
          <div class="product-line-item product-line-item--order " data-product-container="card" data-pid="CRB6016700" data-cart-line-item="afb67579c4df2d1a383c29583e">
            <div class="product-line-item__main">
              <div class="product-line-item__details row">
                <div class="col-6">
                  <a href="/en-us/jewelry/bracelets/trinity-bracelet-CRB6016700.html" class="product-line-item__image-wrap link" title="Trinity bracelet" tabindex="-1">
                    <img class="product-line-item__image component-overlay component-overlay--center object-fit--contain set--w-100" src="https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw88406a3f/images/large/637708788550193812-2059312.png?sw=250&amp;sh=250&amp;sm=fit&amp;sfrm=png" alt="Trinity bracelet" title="Trinity bracelet" data-line-item-component="image" />
                  </a>
                </div>
                <div class="col-6">
                  <div class="product-line-item__header font-weight--semibold flex flex-justify-between">
                    <div class="product-line-item__header-main">

                      <a href="/en-us/jewelry/bracelets/trinity-bracelet-CRB6016700.html" class="product-line-item__name link word-break--break-word hyphens--auto" title="Trinity bracelet">
                        Trinity bracelet
                      </a>
                    </div>
                  </div>
                  <div class="product-line-item__attributes font-family--serif body-type--deci word-break--break-word hyphens--auto">
                    <p class="product-line-item__attribute">White gold, yellow gold, rose gold</p>
                    <div class="product-line-item__options">
                    </div>
                    <div class="product-line-item__attribute font-weight--semibold  body-type--deci">
                      <div class="product-line-item__total-price item-total-afb67579c4df2d1a383c29583e price font-family--sans" data-line-item-component="price-total">
                        <div class="price__sales pricing line-item-total-price-amount">$610.00</div>
                      </div>
                    </div>
                    <div class="product-line-item__attribute">
                      <div class="product-line-item__promotions" data-line-item-component="promotions" data-uuid="afb67579c4df2d1a383c29583e">
                      </div>
                    </div>
                    <ul class="product-line-item__availability product-line-item__attribute availability-afb67579c4df2d1a383c29583e list--reset hidden" data-line-item-component="availability">
                      <li class="product-line-item__attributes">In Stock</li>
                    </ul>
                  </div>
                  <div class="product-line-item__gift-wrapping form-section">
                    <hr class="text-color--grey-3 ">
                    <div class="flex form-check-group__item set--w-100">
                      <input type="checkbox" id="giftWrapnull" class="form-check-input" data-line-item-component="gift-wrapping" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Cart-ToggleGiftwrap?pid=CRB6016700&amp;uuid=afb67579c4df2d1a383c29583e">
                      <label for="giftWrapnull" class="body-type--centi form-check-label text-line--medium cursor--pointer">
                        Add Gift Wrapping
                      </label>
                      <button type="button" class="component-outer-h-align--right" data-toggle='{"target": "[data-gift-wrap-null]", "persist": true}'>
                        <svg aria-hidden="true" focusable="false" class="icon cart__gift-wrap-arrow body-type--deci">
                          <use xlink:href="#icon--angle-down" />
                        </svg>
                      </button>
                    </div>
                    <p class="body-type--deci font-family--serif form-group--short-spacing toggle-display--hidden" data-gift-wrap-null>
                      A complementary Cartier shopping bag is included with every item. Boutique pickup orders will not be gift-wrapped so you can verify your order; however, you may request it from the boutique team apon arrival.
                    </p>
                    <hr class="text-color--grey-3">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-line-item product-line-item--order " data-product-container="card" data-pid="CRB6045717" data-cart-line-item="8e96d8c85644c1b5b5c42941e6">
            <div class="product-line-item__main">
              <div class="product-line-item__details row">
                <div class="col-6">
                  <a href="/en-us/jewelry/bracelets/diamants-legers-bracelet-xs-CRB6045717.html" class="product-line-item__image-wrap link" title="Diamants L&eacute;gers bracelet XS" tabindex="-1">
                    <img class="product-line-item__image component-overlay component-overlay--center object-fit--contain set--w-100" src="https://www.cartier.com/dw/image/v2/BGTJ_PRD/on/demandware.static/-/Sites-cartier-master/default/dw82857658/images/large/637708799321563362-2088378.png?sw=250&amp;sh=250&amp;sm=fit&amp;sfrm=png" alt="Diamants L&eacute;gers bracelet XS" title="Diamants L&eacute;gers bracelet XS" data-line-item-component="image" />
                  </a>
                </div>
                <div class="col-6">
                  <div class="product-line-item__header font-weight--semibold flex flex-justify-between">
                    <div class="product-line-item__header-main">

                      <a href="/en-us/jewelry/bracelets/diamants-legers-bracelet-xs-CRB6045717.html" class="product-line-item__name link word-break--break-word hyphens--auto" title="Diamants L&eacute;gers bracelet XS">
                        Diamants Légers bracelet XS
                      </a>
                    </div>
                  </div>
                  <div class="product-line-item__attributes font-family--serif body-type--deci word-break--break-word hyphens--auto">
                    <p class="product-line-item__attribute">Rose gold, diamond</p>
                    <div class="product-line-item__options">
                    </div>
                    <div class="product-line-item__attribute font-weight--semibold  body-type--deci">
                      <div class="product-line-item__total-price item-total-8e96d8c85644c1b5b5c42941e6 price font-family--sans" data-line-item-component="price-total">
                        <div class="price__sales pricing line-item-total-price-amount">$780.00</div>
                      </div>
                    </div>
                    <div class="product-line-item__attribute">
                      <div class="product-line-item__promotions" data-line-item-component="promotions" data-uuid="8e96d8c85644c1b5b5c42941e6">
                      </div>
                    </div>
                    <ul class="product-line-item__availability product-line-item__attribute availability-8e96d8c85644c1b5b5c42941e6 list--reset hidden" data-line-item-component="availability">
                      <li class="product-line-item__attributes">In Stock</li>
                    </ul>
                  </div>
                  <div class="product-line-item__gift-wrapping form-section">
                    <hr class="text-color--grey-3 ">
                    <div class="flex form-check-group__item set--w-100">
                      <input type="checkbox" id="giftWrapnull" class="form-check-input" data-line-item-component="gift-wrapping" data-url="/on/demandware.store/Sites-CartierUS-Site/en_US/Cart-ToggleGiftwrap?pid=CRB6045717&amp;uuid=8e96d8c85644c1b5b5c42941e6">
                      <label for="giftWrapnull" class="body-type--centi form-check-label text-line--medium cursor--pointer">
                        Add Gift Wrapping
                      </label>
                      <button type="button" class="component-outer-h-align--right" data-toggle='{"target": "[data-gift-wrap-null]", "persist": true}'>
                        <svg aria-hidden="true" focusable="false" class="icon cart__gift-wrap-arrow body-type--deci">
                          <use xlink:href="#icon--angle-down" />
                        </svg>
                      </button>
                    </div>
                    <p class="body-type--deci font-family--serif form-group--short-spacing toggle-display--hidden" data-gift-wrap-null>
                      A complementary Cartier shopping bag is included with every item. Boutique pickup orders will not be gift-wrapped so you can verify your order; however, you may request it from the boutique team apon arrival.
                    </p>
                    <hr class="text-color--grey-3">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="order-summary__totals order-summary__totals--checkout gutter--normal">
        <dl class="total-list">
          <div class="total-list__row row flex-align-center subtotal-item" data-totals-component="subTotal">
            <dt class="col">
              <div class="white-space--nowrap">
                <span class="order-receipt-label heading-type word-break--break-word hyphens--auto font-weight--semibold" data-totals-component="label">Subtotal</span>
                <span class="font-family--serif body-type--deci">excl. sales tax</span>
              </div>
            </dt>
            <dd class="col">
              <p class="text-align--right sub-total" data-totals-component="value">$1,390.00</p>
            </dd>
          </div>
          <div class="total-list__row row flex-align-center font-weight--semibold order-discount body-type--centi hidden" data-totals-component="orderLevelDiscountTotal">
            <dt class="col">
              <p class="order-receipt-label heading-type word-break--break-word hyphens--auto" data-totals-component="label">Order Discount</p>
            </dt>
            <dd class="col">
              <p class="text-align--right order-discount-total">- <span data-totals-component="value">$0.00</span></p>
            </dd>
          </div>
          <div class="total-list__row row flex-align-center font-weight--semibold shipping-item body-type--centi" data-totals-component="totalShippingCost">
            <dt class="col">
              <p class="order-receipt-label heading-type word-break--break-word hyphens--auto" data-totals-component="label">Shipping</p>
            </dt>
            <dd class="col">
              <p class="text-align--right shipping-total-cost" data-totals-component="value">-</p>
            </dd>
          </div>
          <div class="total-list__row row flex-align-center font-weight--semibold shipping-discount body-type--centi hidden" data-totals-component="shippingLevelDiscountTotal">
            <dt class="col">
              <p class="order-receipt-label heading-type word-break--break-word hyphens--auto" data-totals-component="label">Shipping Discount</p>
            </dt>
            <dd class="col">
              <p class="text-align--right shipping-discount-total">- <span data-totals-component="value">N/A</span></p>
            </dd>
          </div>
          <hr class="total-list__division text-color--grey-3" />
          <div class="total-list__row row sales-tax-item" data-totals-component="totalTax">
            <dt class="col">
              <p class="order-receipt-label font-family--serif word-break--break-word hyphens--auto" data-totals-component="label">Sales tax</p>
            </dt>
            <dd class="col">
              <p class="text-align--right tax-total body-type--centi" data-totals-component="value">-</p>
            </dd>
          </div>
          <div class="total-list__row--short-spacing row grand-total" data-totals-component="grandTotal">
            <dt class="col">
              <div class="white-space--nowrap">
                <strong class="order-receipt-label heading-type word-break--break-word hyphens--auto" data-totals-component="label">Total </strong>
                <span class="font-family--serif body-type--deci">inc. sales tax</span>
              </div>
            </dt>
            <dd class="col">
              <strong class="text-align--right font-weight--semibold grand-total-sum" data-totals-component="value">-</strong>
            </dd>
          </div>
        </dl>
      </div>

      <div class="order-summary__actions" data-fixit-trigger='{"enabled": "small", "respondToParent": true, "containedInParent": true, "fromViewportBottom": true, "reversePlaceholderBehavior": true}' data-checkout-component="actions">
        <button class="button button--primary set--w-100 body-type--centi submit-shipping" type="submit" name="submit" value="submit-shipping" data-checkout-component="shipping-stage-next" form="dwfrm_shipping">
          Proceed
        </button>
        <button class="button button--primary set--w-100 body-type--centi submit-payment" type="submit" name="submit" value="submit-payment" data-checkout-component="payment-stage-next" form="dwfrm_billing">
          Proceed
        </button>
        <button class="button button--primary set--w-100 body-type--centi place-order" data-action="/on/demandware.store/Sites-CartierUS-Site/en_US/CheckoutServices-PlaceOrder" data-checkout-component="placeOrder-stage-next" type="submit" name="submit" value="place-order">Place Order
        </button>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="address-summary hidden" data-address-summary="address-summary-template">
  <div class="address-summary__group" data-address-summary="shipping-container">
    <div class="address-summary__section">
      <h3 class="address-summary__title heading-type body-type--deci">Shipping Address</h3>
      <div class="address-summary__details font-family--serif">
        <div>
          <span class="firstName" data-address-summary="firstName">
          </span>
          <span class="lastName" data-address-summary="lastName">
          </span>
        </div>
        <div class="address1" data-address-summary="address1">
        </div>
        <div class="address2" data-address-summary="address2">
        </div>
        <span class="city" data-address-summary="city">
        </span>
        <span class="stateCode" data-address-summary="stateCode">
        </span>
        <span class="postalCode" data-address-summary="postalCode">
        </span>
        <div class="taxCode" data-address-summary="taxCode">
        </div>
        <div class="order-summary-email" data-address-summary="email"></div>
        <div>
          <bdi class="shipping-phone" data-address-summary="phone">
            null
          </bdi>
        </div>
      </div>
    </div>
    <div class="address-summary__section hidden" data-address-summary="shippingMethod">
      <h3 class="address-summary__title heading-type body-type--deci ">
        Shipping Method
      </h3>
      <div class="address-summary__details">
        <span class="shipping-method">
          <span class="shipping-method-title font-family--serif" data-address-summary="shippingMethodDisplayName">
          </span>
        </span>
      </div>
    </div>
    <div class="shipping-method__delivery hidden" data-checkout-component="shipping-method-eta">
      <span class="font-family--serif">
        Estimated Delivery:
      </span>
      <span class="font-family--serif" data-checkout-component="shipping-method-eta-date">
      </span>
    </div>
    <div class="address-summary__section hidden" data-address-summary="gift">
      <h3 class="address-summary__title heading-type body-type">Gift Message for this order</h3>
      <p class="address-summary__details cms-generic-copy" data-address-summary="giftMessage"></p>
    </div>
  </div>
</div>