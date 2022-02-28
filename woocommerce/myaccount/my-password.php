<div class="gutter--small-only-normal">
  <div class="account-main__header col-12 account-welcome-banner text-align--center gutter--normal bg--grey-1">
    <div class="brand__panther-image image-width__small"><img class="panther-image" alt="siellest" src="wp-content/themes/siellest/assets/images/panthereCartierImageTransparent.webp"></div>
    <h1 class="account-main__title fluid-type--deka-base heading-type">
      My Password
    </h1>
    <p class="account-main__description font-family--serif">
      Manage your password and security preferences.
    </p>
  </div>
  <div class="row">
    <div class="col-12 col-lg-7">
      <form action="wp-json/siellest/Account-SavePassword" class="change-password-form" method="POST" name="dwfrm_profile" id="dwfrm_profile">
        <div class="form-group form-group--password required" data-floating-label="" data-password-show="container">
          <label class="form-control-label" for="currentPassword">
            Current Password
          </label>
          <input type="password" class="form-control" id="currentPassword" name="dwfrm_profile_login_currentpassword" required="" aria-required="true" value="" maxlength="255" minlength="8" aria-describedby="dwfrm_profile_login_currentpassword-1300949481356">
          <button type="button" class="form-control__show-trigger link link--underline-hover text-color--grey-5 body-type--deci font-weight--light" data-password-show="trigger" aria-label="Show password characters" data-password-show-ready="">
            <span class="form-control__label-show">Show</span>
            <span class="form-control__label-hide">Hide</span>
          </button>
          <div id="dwfrm_profile_login_currentpassword-1300949481356" class="invalid-feedback"></div>
        </div>
        <div class="form-group form-group--constraints required">
          <p class="form-control__constraints-title font-family--serif">Password requirements</p>
          <ul class="form-control__constraints body-type--centi" data-constraints="">
            <li id="dwfrm_profile_login_newpasswords_newpassword_d0osdfmoaslk_noRepetition" class="form-control__constraint set--visible">
              No repetition of more than two characters
            </li>
            <li id="dwfrm_profile_login_newpasswords_newpassword_d0osdfmoaslk_forceLower" class="form-control__constraint set--visible">
              One lowercase character
            </li>
            <li id="dwfrm_profile_login_newpasswords_newpassword_d0osdfmoaslk_forceNumbers" class="form-control__constraint set--visible">
              One number
            </li>
            <li id="dwfrm_profile_login_newpasswords_newpassword_d0osdfmoaslk_forceUpper" class="form-control__constraint set--visible">
              One uppercase character
            </li>
            <li id="dwfrm_profile_login_newpasswords_newpassword_d0osdfmoaslk_minSpecial" class="form-control__constraint set--visible">
              At least 1 allowed special character(s) from ~!@#$%^&amp;*_ /-+=`
            </li>
            <li id="dwfrm_profile_login_newpasswords_newpassword_d0osdfmoaslk_minLength" class="form-control__constraint set--visible">
              8 characters minimum
            </li>
          </ul>
          <div class="form-group--password" data-floating-label="" data-password-show="container">
            <label class="form-control-label" for="dwfrm_profile_login_newpasswords_newpassword_d0osdfmoaslk">
              New Password
            </label>
            <input type="password" class="form-control" id="dwfrm_profile_login_newpasswords_newpassword_d0osdfmoaslk" data-validate-constraints="{&quot;noRepetition&quot;:{&quot;value&quot;:true,&quot;regex&quot;:&quot;^((.)\\2?(?!\\2))+$&quot;},&quot;forceLetters&quot;:{&quot;value&quot;:false,&quot;regex&quot;:&quot;[a-zA-Z]&quot;},&quot;forceLower&quot;:{&quot;value&quot;:true,&quot;regex&quot;:&quot;[a-z]&quot;},&quot;forceNumbers&quot;:{&quot;value&quot;:true,&quot;regex&quot;:&quot;\\d&quot;},&quot;forceUpper&quot;:{&quot;value&quot;:true,&quot;regex&quot;:&quot;[A-Z]&quot;},&quot;minSpecial&quot;:{&quot;value&quot;:1,&quot;regex&quot;:&quot;[^a-zA-Z0-9]&quot;},&quot;minLength&quot;:{&quot;value&quot;:8,&quot;regex&quot;:&quot;.{8,}&quot;}}" autocomplete="new-password" placeholder="••••••••" name="dwfrm_profile_login_newpasswords_newpassword" required="" aria-required="true" value="" maxlength="255" minlength="8" aria-describedby="dwfrm_profile_login_newpasswords_newpassword-611868433911">
            <button type="button" class="form-control__show-trigger link link--underline-hover text-color--grey-5 body-type--deci font-weight--light" data-password-show="trigger" aria-label="Show password characters" data-password-show-ready="">
              <span class="form-control__label-show">Show</span>
              <span class="form-control__label-hide">Hide</span>
            </button>
            <div id="dwfrm_profile_login_newpasswords_newpassword-611868433911" class="invalid-feedback"></div>
          </div>
        </div>
        <div class="form-group form-group--password
        required" data-floating-label="" data-password-show="container">
          <label class="form-control-label" for="newPasswordConfirm">
            Confirm New Password
          </label>
          <input type="password" class="form-control" id="newPasswordConfirm" data-validate-match="#dwfrm_profile_login_newpasswords_newpassword_d0osdfmoaslk" name="dwfrm_profile_login_newpasswords_newpasswordconfirm" required="" aria-required="true" value="" maxlength="255" minlength="8" aria-describedby="dwfrm_profile_login_newpasswords_newpasswordconfirm-1500601216608">
          <button type="button" class="form-control__show-trigger link link--underline-hover text-color--grey-5 body-type--deci font-weight--light" data-password-show="trigger" aria-label="Show password characters" data-password-show-ready="">
            <span class="form-control__label-show">Show</span>
            <span class="form-control__label-hide">Hide</span>
          </button>
          <div id="dwfrm_profile_login_newpasswords_newpasswordconfirm-1500601216608" class="invalid-feedback"></div>
        </div>
        <input type="hidden" name="csrf_token" value="HTin9_NsPFTkYLd_TRQ7mZGHUDe9TKDfpGg3miB90CuozIkUCQSbYGsVx57gSJZ9uP9M3_FoUQZ36q6WJ2dThsmv2heG_KfBm-yeKkDS_ZVX-WSTcAPJPimYd35epgGV7V2GSwgkvth_BAJhhiAI1_2UFZ08j9-O-_hIxfRqk73AQnGYJrY=" aria-describedby="csrf_token-875673555124">
        <div class="form-actions">
          <button type="submit" name="save" class="button button--primary set--w-30 set--small-w-100">Save</button>
        </div>
        <div id="csrf_token-875673555124" class="invalid-feedback"></div>
      </form>
    </div>
  </div>
</div>