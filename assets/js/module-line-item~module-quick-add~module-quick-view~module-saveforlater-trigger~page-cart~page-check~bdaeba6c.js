(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["module-line-item~module-quick-add~module-quick-view~module-saveforlater-trigger~page-cart~page-check~bdaeba6c"],{

/***/ "./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js":
/*!******************************************************************************************!*\
  !*** ./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js ***!
  \******************************************************************************************/
/*! exports provided: open, replace, close, getActive, getModal, trigger */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"open\", function() { return open; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"replace\", function() { return replace; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"close\", function() { return close; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"getActive\", function() { return getActive; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"getModal\", function() { return getModal; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"trigger\", function() { return trigger; });\n/* harmony import */ var _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @borngroup/born-modal */ \"./node_modules/@borngroup/born-modal/dist/born-modal.min.js\");\n/* harmony import */ var _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @borngroup/born-utilities */ \"./node_modules/@borngroup/born-utilities/dist/born-utilities.min.js\");\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _customValidation__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./customValidation */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/customValidation.js\");\n/* harmony import */ var _helpers_utilities__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../helpers/utilities */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/helpers/utilities.js\");\n/* harmony import */ var _progress__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./progress */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/progress.js\");\n/* harmony import */ var _helpers_modules__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../helpers/modules */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/helpers/modules.js\");\n/**\n * Wrapper for Born Modal.\n * Provides ease of usage for modals as well as some default fallbacks.\n */\n\n\n\n\n\n\n/**\n * @description populate the dialog with html content, then open it\n **/\n\nfunction _openWithContent(params) {\n  var content = params.content || params.html,\n      modalInstance;\n\n  if (content) {\n    var originalCallback;\n    params.options = Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__[\"objectAssign\"])({}, params.options);\n    params.tracking = Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__[\"objectAssign\"])({}, params.tracking);\n    params.options.content = content;\n    originalCallback = params.callback || params.options.afterCreateCallback;\n\n    params.options.afterCreateCallback = function (modal) {\n      if (typeof originalCallback === 'function') {\n        originalCallback(modal);\n      }\n\n      Object(_helpers_utilities__WEBPACK_IMPORTED_MODULE_3__[\"initModules\"])(modal);\n      _customValidation__WEBPACK_IMPORTED_MODULE_2__[\"init\"]();\n\n      _handleTracking(modal, params);\n    };\n\n    modalInstance = new _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a(params.options);\n    delete params.options.afterCreateCallback;\n    return modalInstance;\n  }\n}\n/**\n * @description Replace the content of current dialog\n * @param {object} params\n * @param {string} params.url - If the url property is provided, an ajax call is performed to get the content to replace\n * @param {string} params.html - If no url property is provided, use html provided to replace\n */\n\n\nfunction open(params) {\n  var targetModal;\n  params.options = params.options || {};\n  targetModal = _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getModal(params.options.modalID); //Avoid making unnecessary requests if modal was already loaded once.\n\n  if (targetModal) {\n    //Makes sure the afterOpenCallback is taken from the object every time, in case the values change.\n    targetModal.modal.afterOpenCallback = params.options.afterOpenCallback || function () {\n      return false;\n    };\n\n    targetModal.modal.open();\n  } else {\n    if (params.url) {\n      _progress__WEBPACK_IMPORTED_MODULE_4__[\"showLoader\"]();\n      $.ajax({\n        dataType: params.type || 'json',\n        url: params.url,\n        data: params.data,\n        xhrFields: {\n          withCredentials: true\n        }\n      }).done(function (response) {\n        _progress__WEBPACK_IMPORTED_MODULE_4__[\"hideLoader\"]();\n        params.content = typeof response === 'string' ? response : response.renderedTemplate || response.content;\n\n        _openWithContent(params);\n      }).fail(function (xhr, textStatus) {\n        // failed\n        if (textStatus === 'parsererror') {\n          console.log('Bad response type. Check if your `dataType` request matches the response type.');\n        }\n      });\n    } else if (params.html) {\n      _openWithContent(params);\n    } else if (params.selector) {\n      params.content = document.querySelector(params.selector);\n\n      _openWithContent(params);\n    }\n  }\n}\nfunction replace(options) {\n  var modal = options.modalID ? _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getModal(options.modalID) : _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getActiveModal();\n  _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.updateModal(modal, options.content, options.newID);\n}\n/**\n * @function\n * @description Closes the dialog\n */\n\nfunction close() {\n  _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.closeModal();\n}\nfunction getActive() {\n  return _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getActiveModal();\n}\n/**\n * Returns the matched Modal element.\n * @param  {[type]} modalID [description]\n * @return {[type]}         [description]\n */\n\nfunction getModal(modalID) {\n  return _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getModal(modalID);\n}\nfunction trigger(els, params) {\n  Object(_helpers_utilities__WEBPACK_IMPORTED_MODULE_3__[\"addEventListenerList\"])(els, 'click', function (evt) {\n    evt.preventDefault();\n\n    if (!params.url && !params.html && !params.selector) {\n      params.selector = this.getAttribute('href');\n    }\n\n    open(params);\n  });\n}\n\nfunction _handleTracking(modal, params) {\n  var trackEvent = params.tracking.trackEvent || 'virtualPageview',\n      trackObject = trackEvent === 'virtualPageview' ? {\n    asyncURL: window.SFRA.Urls.GTMVirtualView,\n    asyncParams: {\n      nameOfPopin: params.tracking.modalName || params.options.modalID\n    }\n  } : params.tracking.trackObject;\n  _helpers_modules__WEBPACK_IMPORTED_MODULE_5__[\"default\"].tracking.init(null, {\n    trackEvent: trackEvent,\n    trackObject: trackObject\n  });\n}\n\n//# sourceURL=webpack:///./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js?");

/***/ }),

/***/ "./cartridges/app_accelerator_core/cartridge/client/default/js/product/bonusProducts.js":
/*!**********************************************************************************************!*\
  !*** ./cartridges/app_accelerator_core/cartridge/client/default/js/product/bonusProducts.js ***!
  \**********************************************************************************************/
/*! exports provided: chooseBonusProducts, selectBonusProduct, removeBonusProduct, enableBonusProductSelection, showMoreBonusProducts, addBonusProductsToCart */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"chooseBonusProducts\", function() { return chooseBonusProducts; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"selectBonusProduct\", function() { return selectBonusProduct; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"removeBonusProduct\", function() { return removeBonusProduct; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"enableBonusProductSelection\", function() { return enableBonusProductSelection; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"showMoreBonusProducts\", function() { return showMoreBonusProducts; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"addBonusProductsToCart\", function() { return addBonusProductsToCart; });\n/* harmony import */ var _components_dialog__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/dialog */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js\");\n/* harmony import */ var _components_progress__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/progress */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/progress.js\");\n\n\n\n\n/**\n * Parses the html for a modal window\n * @param {string} html - representing the body and footer of the modal window\n *\n * @return {Object} - Object with properties body and footer.\n */\n\nfunction parseHtml(html) {\n  var $html = $('<div>').append($.parseHTML(html));\n  return {\n    body: $html.find('.choice-of-bonus-product'),\n    footer: $html.find('.modal-footer').children()\n  };\n}\n/**\n * Retrieves url to use when adding a product to the cart\n *\n * @param {Object} data - data object used to fill in dynamic portions of the html\n */\n\n\nfunction chooseBonusProducts(data) {\n  var bonusUrl = data.bonusChoiceRuleBased ? data.showProductsUrlRuleBased : data.showProductsUrlListBased;\n  _components_dialog__WEBPACK_IMPORTED_MODULE_0__[\"open\"]({\n    url: bonusUrl,\n    options: {\n      modalID: 'bonusProducts'\n    }\n  });\n}\nfunction selectBonusProduct() {\n  $(document).on('click', '.select-bonus-product', function () {\n    var $choiceOfBonusProduct = $(this).parents('.choice-of-bonus-product'),\n        pid = $(this).data('pid'),\n        maxPids = $('.choose-bonus-product-dialog').data('total-qty'),\n        submittedQty = parseInt($(this).parents('.choice-of-bonus-product').find('.bonus-quantity-select').val(), 10),\n        totalQty = 0,\n        optionID = $(this).parents('.choice-of-bonus-product').find('.product-option').data('option-id'),\n        valueId = $(this).parents('.choice-of-bonus-product').find('.options-select option:selected').data('valueId');\n    $.each($('#chooseBonusProductModal .selected-bonus-products .selected-pid'), function () {\n      totalQty += $(this).data('qty');\n    });\n    totalQty += submittedQty;\n\n    if (totalQty <= maxPids) {\n      var selectedBonusProductHtml = '' + '<div class=\"selected-pid row\" ' + 'data-pid=\"' + pid + '\"' + 'data-qty=\"' + submittedQty + '\"' + 'data-optionID=\"' + (optionID || '') + '\"' + 'data-option-selected-value=\"' + (valueId || '') + '\"' + '>' + '<div class=\"col-sm-11 col-9 bonus-product-name\" >' + $choiceOfBonusProduct.find('.product-name').html() + '</div>' + '<div class=\"col-1\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>' + '</div>';\n      $('#chooseBonusProductModal .selected-bonus-products').append(selectedBonusProductHtml);\n      $('.pre-cart-products').html(totalQty);\n      $('.selected-bonus-products .bonus-summary').removeClass('alert-danger');\n    } else {\n      $('.selected-bonus-products .bonus-summary').addClass('alert-danger');\n    }\n  });\n}\nfunction removeBonusProduct() {\n  $(document).on('click', '.selected-pid', function () {\n    var $selected = $('#chooseBonusProductModal .selected-bonus-products .selected-pid'),\n        count = 0;\n    $(this).remove();\n\n    if ($selected.length) {\n      $selected.each(function () {\n        count += parseInt($(this).data('qty'), 10);\n      });\n    }\n\n    $('.pre-cart-products').html(count);\n    $('.selected-bonus-products .bonus-summary').removeClass('alert-danger');\n  });\n}\nfunction enableBonusProductSelection() {\n  $('body').on('bonusproduct:updateSelectButton', function (e, response) {\n    $('button.select-bonus-product', response.$productContainer).attr('disabled', !response.product.readyToOrder || !response.product.available);\n    $('button.select-bonus-product').data('pid', response.product.id);\n  });\n}\nfunction showMoreBonusProducts() {\n  $(document).on('click', '.show-more-bonus-products', function () {\n    var url = $(this).data('url');\n    $('.modal-content').spinner().start();\n    $.ajax({\n      url: url,\n      method: 'GET',\n      success: function success(html) {\n        var parsedHtml = parseHtml(html);\n        $('.modal-body').append(parsedHtml.body);\n        $('.show-more-bonus-products:first').remove();\n        $('.modal-content').spinner().stop();\n      },\n      error: function error() {\n        $('.modal-content').spinner().stop();\n      }\n    });\n  });\n}\nfunction addBonusProductsToCart() {\n  $(document).on('click', '.add-bonus-products', function () {\n    var $readyToOrderBonusProducts = $('.choose-bonus-product-dialog .selected-pid'),\n        queryString = '?pids=',\n        url = $('.choose-bonus-product-dialog').data('addtocarturl'),\n        pidsObject = {\n      bonusProducts: []\n    };\n    $.each($readyToOrderBonusProducts, function () {\n      var qtyOption = parseInt($(this).data('qty'), 10),\n          option = null;\n\n      if (qtyOption > 0) {\n        if ($(this).data('optionid') && $(this).data('option-selected-value')) {\n          option = {};\n          option.optionId = $(this).data('optionid');\n          option.productId = $(this).data('pid');\n          option.selectedValueId = $(this).data('option-selected-value');\n        }\n\n        pidsObject.bonusProducts.push({\n          pid: $(this).data('pid'),\n          qty: qtyOption,\n          options: [option]\n        });\n        pidsObject.totalQty = parseInt($('.pre-cart-products').html(), 10);\n      }\n    });\n    queryString += JSON.stringify(pidsObject);\n    queryString = queryString + '&uuid=' + $('.choose-bonus-product-dialog').data('uuid');\n    queryString = queryString + '&pliuuid=' + $('.choose-bonus-product-dialog').data('pliuuid');\n    $.spinner().start();\n    $.ajax({\n      url: url + queryString,\n      method: 'POST',\n      success: function success(data) {\n        _components_progress__WEBPACK_IMPORTED_MODULE_1__[\"hideLoader\"]();\n\n        if (data.error) {\n          $('.error-choice-of-bonus-products').html(data.errorMessage);\n        } else {\n          $('.configure-bonus-product-attributes').html(data);\n          $('.bonus-products-step2').removeClass('hidden-xl-down');\n          $('#chooseBonusProductModal').modal('hide');\n\n          if ($('.add-to-cart-messages').length === 0) {\n            $('body').append('<div class=\"add-to-cart-messages\"></div>');\n          }\n\n          $('.minicart-quantity').html(data.totalQty);\n          $('.add-to-cart-messages').append('<div class=\"alert alert-success add-to-basket-alert text-center\"' + ' role=\"alert\">' + data.msgSuccess + '</div>');\n          setTimeout(function () {\n            $('.add-to-basket-alert').remove();\n\n            if ($('.cart-page').length) {\n              location.reload();\n            }\n          }, 3000);\n        }\n      },\n      error: function error() {\n        _components_progress__WEBPACK_IMPORTED_MODULE_1__[\"hideLoader\"]();\n      }\n    });\n  });\n}\n\n//# sourceURL=webpack:///./cartridges/app_accelerator_core/cartridge/client/default/js/product/bonusProducts.js?");

/***/ }),

/***/ "./cartridges/app_rna_core/cartridge/client/default/js/product/addToCart.js":
/*!**********************************************************************************!*\
  !*** ./cartridges/app_rna_core/cartridge/client/default/js/product/addToCart.js ***!
  \**********************************************************************************/
/*! exports provided: handlePostCartUpdate, handleCartAdd, updateAddToCart, setupAddToCart */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"handlePostCartUpdate\", function() { return handlePostCartUpdate; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"handleCartAdd\", function() { return handleCartAdd; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"updateAddToCart\", function() { return updateAddToCart; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"setupAddToCart\", function() { return setupAddToCart; });\n/* harmony import */ var _bonusProducts__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./bonusProducts */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/product/bonusProducts.js\");\n/* harmony import */ var _components_progress__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/progress */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/progress.js\");\n/* harmony import */ var _productUtils__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./productUtils */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/product/productUtils.js\");\n/* harmony import */ var _components_miniCart__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../components/miniCart */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/miniCart.js\");\n/* harmony import */ var _helpers_modules__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../helpers/modules */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/helpers/modules.js\");\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @borngroup/born-utilities */ \"./node_modules/@borngroup/born-utilities/dist/born-utilities.min.js\");\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_5__);\n\n\n\n\n\n\n\n\n/**\n * Returns the first option value ID available.\n * @param  {[type]} options [description]\n * @return {[type]}         [description]\n */\n\nfunction _getOptionValueID(options) {\n  var optionsArray = options && options.length ? JSON.parse(options) : null;\n  return optionsArray && optionsArray[0] ? optionsArray[0].selectedValueId : null;\n}\n/**\n * Compatibility between NEMER & US/CA\n * @param {*} productData\n */\n\n\nfunction isProductSellable(productData) {\n  if (productData.sellable.hasOwnProperty('web')) {\n    return productData.sellable.web;\n  }\n\n  return productData.available && productData.sellable ? true : false;\n}\n/**\n * Render the ApplePay button if the item is ready to be added to cart,\n * otherwise enable/disable as needed.\n */\n\n\nfunction _handleApplePay(productData, productContainer) {\n  var applePayButton = productContainer.querySelector('.js--apple-pay'),\n      sellable = isProductSellable(productData);\n\n  if (productData.readyToOrder && productData.available && sellable) {\n    if (applePayButton) {\n      applePayButton.setAttribute('sku', productData.id);\n      applePayButton.disabled = false;\n    } else {\n      var addToCartContainer = productContainer.querySelector('[data-product-component=\"add-container\"]');\n      Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_5__[\"createElWithAttrs\"])(addToCartContainer, {\n        class: 'product-add__button apple-pay-pdp button button--apple-pay set--w-100 js--apple-pay',\n        sku: productData.id\n      }, 'isapplepay');\n    }\n  } else if (applePayButton) {\n    applePayButton.disabled = true;\n  }\n}\n/**\n * Updates the Mini-Cart quantity value after the customer has pressed the \"Add to Cart\" button\n * @param {string} response - ajax response from clicking the add to cart button\n */\n\n\nfunction handlePostCartUpdate(formData, response) {\n  _components_miniCart__WEBPACK_IMPORTED_MODULE_3__[\"updateMinicartCount\"](response.quantityTotal);\n\n  if (response.isProductUpdate) {\n    $('body').trigger('product:afterUpdate', {\n      formData: formData,\n      response: response\n    });\n  } else {\n    _components_miniCart__WEBPACK_IMPORTED_MODULE_3__[\"openMinicart\"](true);\n    _helpers_modules__WEBPACK_IMPORTED_MODULE_4__[\"default\"].tracking.init(null, {\n      trackEvent: 'addToCart',\n      trackObject: {\n        asyncURL: window.SFRA.Urls.GTMEventView,\n        asyncParams: {\n          pid: formData.pid,\n          qty: formData.quantity,\n          pliUUID: response.pliUUID\n        }\n      }\n    });\n  }\n\n  $('body').trigger('product:afterAddToCart', {\n    formData: formData,\n    response: response\n  }); // show add to cart toast\n\n  if (response.newBonusDiscountLineItem && Object.keys(response.newBonusDiscountLineItem).length) {\n    Object(_bonusProducts__WEBPACK_IMPORTED_MODULE_0__[\"chooseBonusProducts\"])(response.newBonusDiscountLineItem);\n  }\n\n  _components_progress__WEBPACK_IMPORTED_MODULE_1__[\"hideLoader\"]();\n}\nfunction handleCartAdd(currentContext) {\n  var formData = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};\n  var productContainer = _productUtils__WEBPACK_IMPORTED_MODULE_2__[\"getProductContainer\"](currentContext),\n      productType = _productUtils__WEBPACK_IMPORTED_MODULE_2__[\"getProductType\"](productContainer),\n      childProducts = _productUtils__WEBPACK_IMPORTED_MODULE_2__[\"getChildProducts\"](productContainer),\n      addToCartUrl = formData.addToCartUrl || currentContext.getAttribute('data-url') || window.SFRA.Urls.cartAddProduct;\n  $('body').trigger('product:beforeAddToCart', currentContext);\n  formData.pid = formData.pid || formData.id || _productUtils__WEBPACK_IMPORTED_MODULE_2__[\"getPidValue\"](currentContext);\n  formData.uuid = formData.uuid || currentContext.getAttribute('data-uuid');\n  formData.quantity = _productUtils__WEBPACK_IMPORTED_MODULE_2__[\"getQuantitySelected\"](currentContext);\n  formData.options = _productUtils__WEBPACK_IMPORTED_MODULE_2__[\"getOptions\"](currentContext, true); //Use this property to stop an action from adding to cart by passing it on `formData` or through the `product:updateAddToCartFormData` event.\n\n  formData.allowAddToCart = formData.hasOwnProperty('allowAddToCart') ? formData.allowAddToCart : true; //SFCC has separate endpoint property names for when it's a Set (pidsObj) vs a Bundle (childProducts)...\n\n  if (productType === 'set') {\n    formData.pidsObj = childProducts.data;\n  } else if (productType === 'bundle') {\n    formData.childProducts = childProducts.data;\n  } //The `Cart-EditProductLineItem` route expects this property for some reason.\n  //The problem is, it was developed to only work with a single option value ID.\n  //Hopefully this is corrected on the next update. Issue raised: https://github.com/SalesforceCommerceCloud/storefront-reference-architecture/issues/830\n\n\n  formData.selectedOptionValueId = _getOptionValueID(formData.options);\n  $(currentContext).trigger('product:updateAddToCartFormData', {\n    formData: formData,\n    childProducts: childProducts,\n    container: productContainer\n  });\n\n  if (addToCartUrl && formData.allowAddToCart) {\n    _components_progress__WEBPACK_IMPORTED_MODULE_1__[\"showLoader\"](currentContext);\n    $.ajax({\n      url: addToCartUrl,\n      method: 'POST',\n      data: formData,\n      success: handlePostCartUpdate.bind(currentContext, formData),\n      error: _components_progress__WEBPACK_IMPORTED_MODULE_1__[\"hideLoader\"]\n    });\n  }\n}\n/**\n * Handle status for the different product CTAs/messages as the user select their variations.\n */\n\nfunction updateAddToCart(productData, productContainer) {\n  var isDisabled = !productData.readyToOrder || !productData.available,\n      sellable = isProductSellable(productData);\n  [].forEach.call(productContainer.querySelectorAll('[data-product-component=\"add-button\"]'), function (currentEl) {\n    currentEl.disabled = isDisabled;\n\n    if (productData.available && sellable && productData.isPriceUnderThreshold) {\n      currentEl.classList.remove('hidden');\n    } else {\n      currentEl.classList.add('hidden');\n    }\n  });\n  [].forEach.call(productContainer.querySelectorAll('[data-product-component=\"request-price\"]'), function (currentEl) {\n    if (!sellable || productData.requestPrice || productData.isPriceUnderThreshold === false) {\n      currentEl.classList.remove('hidden');\n    } else {\n      currentEl.classList.add('hidden');\n    }\n  });\n  [].forEach.call(productContainer.querySelectorAll('[data-product-component=\"availability-status\"]'), function (currentEl) {\n    if (!sellable || !productData.available || productData.isPriceUnderThreshold === false) {\n      currentEl.classList.remove('hidden');\n    } else {\n      currentEl.classList.add('hidden');\n    }\n  });\n\n  _handleApplePay(productData, productContainer);\n}\nfunction setupAddToCart(container) {\n  var addToCartButtons = (container || document).querySelectorAll('[data-product-component=\"add-button\"]:not([data-add-ready])');\n  [].forEach.call(addToCartButtons, function (currentBtn) {\n    currentBtn.setAttribute('data-add-ready', '');\n    currentBtn.addEventListener('click', function () {\n      handleCartAdd(this);\n    });\n  });\n}\n\n//# sourceURL=webpack:///./cartridges/app_rna_core/cartridge/client/default/js/product/addToCart.js?");

/***/ })

}]);