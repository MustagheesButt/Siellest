(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["module-line-item"],{

/***/ "./cartridges/app_accelerator_core/cartridge/client/default/js/wishlist/wishlistUtils.js":
/*!***********************************************************************************************!*\
  !*** ./cartridges/app_accelerator_core/cartridge/client/default/js/wishlist/wishlistUtils.js ***!
  \***********************************************************************************************/
/*! exports provided: getTriggerType, updateTriggersByID, updateTriggerState, getTriggerData, updateWishlistTriggers */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"getTriggerType\", function() { return getTriggerType; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"updateTriggersByID\", function() { return updateTriggersByID; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"updateTriggerState\", function() { return updateTriggerState; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"getTriggerData\", function() { return getTriggerData; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"updateWishlistTriggers\", function() { return updateWishlistTriggers; });\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @borngroup/born-utilities */ \"./node_modules/@borngroup/born-utilities/dist/born-utilities.min.js\");\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _product_productUtils__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../product/productUtils */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/product/productUtils.js\");\n\n\n\n\nfunction getTriggerType(triggerEl) {\n  return triggerEl.getAttribute('data-wishlist-trigger') || triggerEl.getAttribute('data-wishlist-trigger-ready') || 'cta';\n}\n/**\n * Multiple items with the same ID might exist on the same page, ensure they're all accounted for.\n * @param  {[type]}  currentID [description]\n * @param  {Boolean} isRemove  [description]\n * @return {[type]}            [description]\n */\n\nfunction updateTriggersByID(currentID, isRemove, listIsEmpty) {\n  Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0__[\"callbackOnElements\"])(\"[data-pid=\\\"\".concat(currentID, \"\\\"] [data-wishlist-trigger-ready]\"), function (currentTrigger) {\n    updateTriggerState(currentTrigger, isRemove, listIsEmpty);\n  });\n}\n/**\n * Updates the provided `triggerEl` state to reflect a requested server or event change.\n */\n\nfunction updateTriggerState(triggerEl, isRemove, listIsEmpty) {\n  var productContainer = Object(_product_productUtils__WEBPACK_IMPORTED_MODULE_1__[\"getProductContainer\"])(triggerEl),\n      triggerType = getTriggerType(triggerEl),\n      customLabel = '',\n      triggerLabel = '',\n      triggerTitle = '',\n      isCTA = triggerType === 'cta',\n      socialShareEl = document.querySelector('[data-wishlist-component=\"share\"]');\n\n  if (isRemove) {\n    triggerEl.classList.remove('set--in-wishlist');\n    productContainer.classList.remove('set--in-wishlist');\n    productContainer.classList.add('set--removed-wishlist');\n    triggerEl.removeAttribute('data-wishlist-remove');\n    customLabel = triggerEl.getAttribute('data-wishlist-label-add'); //These might differ in the future, so keep separate.\n\n    triggerTitle = customLabel || window.SFRA.Resources.wishlistAdd;\n    triggerLabel = customLabel || window.SFRA.Resources.wishlistAdd;\n  } else {\n    triggerEl.classList.add('set--in-wishlist');\n    productContainer.classList.add('set--in-wishlist');\n    productContainer.classList.remove('set--removed-wishlist');\n    triggerEl.setAttribute('data-wishlist-remove', true);\n    customLabel = triggerEl.getAttribute('data-wishlist-label-remove');\n    triggerTitle = customLabel || window.SFRA.Resources.wishlistRemove;\n    triggerLabel = customLabel || window.SFRA.Resources.wishlistRemove;\n  }\n\n  triggerEl.title = triggerTitle;\n\n  if (isCTA) {\n    var labelTarget = triggerEl.querySelector('[data-wishlist-trigger-component=\"label\"]') || triggerEl;\n    labelTarget.textContent = customLabel || triggerLabel;\n  }\n\n  if (socialShareEl) {\n    if (listIsEmpty) {\n      socialShareEl.classList.add('hidden');\n    } else {\n      socialShareEl.classList.remove('hidden');\n    }\n  }\n}\n/**\n * Gets common Wishlist Trigger data such as PID, selected options, etc.\n */\n\nfunction getTriggerData(triggerEl) {\n  return {\n    isRemove: triggerEl.hasAttribute('data-wishlist-remove'),\n    pid: Object(_product_productUtils__WEBPACK_IMPORTED_MODULE_1__[\"getPidValue\"])(triggerEl),\n    options: Object(_product_productUtils__WEBPACK_IMPORTED_MODULE_1__[\"getOptions\"])(triggerEl)[0] || {}\n  };\n}\n/**\n * Updates the wishlist triggers for a given container.\n */\n\nfunction updateWishlistTriggers(containerEl, isRemove) {\n  var wishlistTriggers = containerEl.querySelectorAll('[data-wishlist-trigger-ready]');\n  [].forEach.call(wishlistTriggers, function (currentTrigger) {\n    return updateTriggerState(currentTrigger, isRemove);\n  });\n}\n\n//# sourceURL=webpack:///./cartridges/app_accelerator_core/cartridge/client/default/js/wishlist/wishlistUtils.js?");

/***/ })

}]);