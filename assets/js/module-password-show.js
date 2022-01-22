(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["module-password-show"],{

/***/ "./cartridges/app_accelerator_core/cartridge/client/default/js/modules/module.password-show.js":
/*!*****************************************************************************************************!*\
  !*** ./cartridges/app_accelerator_core/cartridge/client/default/js/modules/module.password-show.js ***!
  \*****************************************************************************************************/
/*! exports provided: init */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"init\", function() { return init; });\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @borngroup/born-utilities */ \"./node_modules/@borngroup/born-utilities/dist/born-utilities.min.js\");\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0__);\n\n\n\n/**\n * Small utility to toggle password text visibility on demand.\n */\n\nfunction _setupPasswordShow(triggerEl) {\n  if (!triggerEl.hasAttribute('data-password-show-ready')) {\n    var containerEl = triggerEl.closest('[data-password-show=\"container\"]'),\n        inputEl = containerEl ? containerEl.querySelector('input[type=\"password\"]') : null;\n    triggerEl.addEventListener('click', _togglePasswordShow.bind(triggerEl, inputEl, containerEl));\n  }\n\n  triggerEl.setAttribute('data-password-show-ready', '');\n}\n\nfunction _togglePasswordShow(inputEl, containerEl) {\n  if (inputEl && containerEl) {\n    if (containerEl.classList.contains('set--show-password')) {\n      containerEl.classList.remove('set--show-password');\n      inputEl.type = 'password';\n    } else {\n      containerEl.classList.add('set--show-password');\n      inputEl.type = 'text';\n    }\n  }\n}\n\nfunction init(options) {\n  Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_0__[\"callbackOnElements\"])(options.elements, _setupPasswordShow);\n}\n\n//# sourceURL=webpack:///./cartridges/app_accelerator_core/cartridge/client/default/js/modules/module.password-show.js?");

/***/ })

}]);