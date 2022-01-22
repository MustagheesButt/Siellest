(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["module-ajax-form"],{

/***/ "./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js":
/*!******************************************************************************************!*\
  !*** ./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js ***!
  \******************************************************************************************/
/*! exports provided: open, replace, close, getActive, getModal, trigger */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"open\", function() { return open; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"replace\", function() { return replace; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"close\", function() { return close; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"getActive\", function() { return getActive; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"getModal\", function() { return getModal; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"trigger\", function() { return trigger; });\n/* harmony import */ var _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @borngroup/born-modal */ \"./node_modules/@borngroup/born-modal/dist/born-modal.min.js\");\n/* harmony import */ var _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @borngroup/born-utilities */ \"./node_modules/@borngroup/born-utilities/dist/born-utilities.min.js\");\n/* harmony import */ var _borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _customValidation__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./customValidation */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/customValidation.js\");\n/* harmony import */ var _helpers_utilities__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../helpers/utilities */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/helpers/utilities.js\");\n/* harmony import */ var _progress__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./progress */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/components/progress.js\");\n/* harmony import */ var _helpers_modules__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../helpers/modules */ \"./cartridges/app_accelerator_core/cartridge/client/default/js/helpers/modules.js\");\n/**\n * Wrapper for Born Modal.\n * Provides ease of usage for modals as well as some default fallbacks.\n */\n\n\n\n\n\n\n/**\n * @description populate the dialog with html content, then open it\n **/\n\nfunction _openWithContent(params) {\n  var content = params.content || params.html,\n      modalInstance;\n\n  if (content) {\n    var originalCallback;\n    params.options = Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__[\"objectAssign\"])({}, params.options);\n    params.tracking = Object(_borngroup_born_utilities__WEBPACK_IMPORTED_MODULE_1__[\"objectAssign\"])({}, params.tracking);\n    params.options.content = content;\n    originalCallback = params.callback || params.options.afterCreateCallback;\n\n    params.options.afterCreateCallback = function (modal) {\n      if (typeof originalCallback === 'function') {\n        originalCallback(modal);\n      }\n\n      Object(_helpers_utilities__WEBPACK_IMPORTED_MODULE_3__[\"initModules\"])(modal);\n      _customValidation__WEBPACK_IMPORTED_MODULE_2__[\"init\"]();\n\n      _handleTracking(modal, params);\n    };\n\n    modalInstance = new _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a(params.options);\n    delete params.options.afterCreateCallback;\n    return modalInstance;\n  }\n}\n/**\n * @description Replace the content of current dialog\n * @param {object} params\n * @param {string} params.url - If the url property is provided, an ajax call is performed to get the content to replace\n * @param {string} params.html - If no url property is provided, use html provided to replace\n */\n\n\nfunction open(params) {\n  var targetModal;\n  params.options = params.options || {};\n  targetModal = _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getModal(params.options.modalID); //Avoid making unnecessary requests if modal was already loaded once.\n\n  if (targetModal) {\n    //Makes sure the afterOpenCallback is taken from the object every time, in case the values change.\n    targetModal.modal.afterOpenCallback = params.options.afterOpenCallback || function () {\n      return false;\n    };\n\n    targetModal.modal.open();\n  } else {\n    if (params.url) {\n      _progress__WEBPACK_IMPORTED_MODULE_4__[\"showLoader\"]();\n      $.ajax({\n        dataType: params.type || 'json',\n        url: params.url,\n        data: params.data,\n        xhrFields: {\n          withCredentials: true\n        }\n      }).done(function (response) {\n        _progress__WEBPACK_IMPORTED_MODULE_4__[\"hideLoader\"]();\n        params.content = typeof response === 'string' ? response : response.renderedTemplate || response.content;\n\n        _openWithContent(params);\n      }).fail(function (xhr, textStatus) {\n        // failed\n        if (textStatus === 'parsererror') {\n          console.log('Bad response type. Check if your `dataType` request matches the response type.');\n        }\n      });\n    } else if (params.html) {\n      _openWithContent(params);\n    } else if (params.selector) {\n      params.content = document.querySelector(params.selector);\n\n      _openWithContent(params);\n    }\n  }\n}\nfunction replace(options) {\n  var modal = options.modalID ? _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getModal(options.modalID) : _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getActiveModal();\n  _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.updateModal(modal, options.content, options.newID);\n}\n/**\n * @function\n * @description Closes the dialog\n */\n\nfunction close() {\n  _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.closeModal();\n}\nfunction getActive() {\n  return _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getActiveModal();\n}\n/**\n * Returns the matched Modal element.\n * @param  {[type]} modalID [description]\n * @return {[type]}         [description]\n */\n\nfunction getModal(modalID) {\n  return _borngroup_born_modal__WEBPACK_IMPORTED_MODULE_0___default.a.getModal(modalID);\n}\nfunction trigger(els, params) {\n  Object(_helpers_utilities__WEBPACK_IMPORTED_MODULE_3__[\"addEventListenerList\"])(els, 'click', function (evt) {\n    evt.preventDefault();\n\n    if (!params.url && !params.html && !params.selector) {\n      params.selector = this.getAttribute('href');\n    }\n\n    open(params);\n  });\n}\n\nfunction _handleTracking(modal, params) {\n  var trackEvent = params.tracking.trackEvent || 'virtualPageview',\n      trackObject = trackEvent === 'virtualPageview' ? {\n    asyncURL: window.SFRA.Urls.GTMVirtualView,\n    asyncParams: {\n      nameOfPopin: params.tracking.modalName || params.options.modalID\n    }\n  } : params.tracking.trackObject;\n  _helpers_modules__WEBPACK_IMPORTED_MODULE_5__[\"default\"].tracking.init(null, {\n    trackEvent: trackEvent,\n    trackObject: trackObject\n  });\n}\n\n//# sourceURL=webpack:///./cartridges/app_accelerator_core/cartridge/client/default/js/components/dialog.js?");

/***/ })

}]);