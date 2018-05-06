/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 56);
/******/ })
/************************************************************************/
/******/ ({

/***/ 56:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(57);


/***/ }),

/***/ 57:
/***/ (function(module, exports) {

/*
 * Easing Compatibility v1 - http://gsgd.co.uk/sandbox/jquery/easing
 *
 * Adds compatibility for applications that use the pre 1.2 easing names
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */

(function ($) {
	$.extend($.easing, {
		easeIn: function easeIn(x, t, b, c, d) {
			return $.easing.easeInQuad(x, t, b, c, d);
		},
		easeOut: function easeOut(x, t, b, c, d) {
			return $.easing.easeOutQuad(x, t, b, c, d);
		},
		easeInOut: function easeInOut(x, t, b, c, d) {
			return $.easing.easeInOutQuad(x, t, b, c, d);
		},
		expoin: function expoin(x, t, b, c, d) {
			return $.easing.easeInExpo(x, t, b, c, d);
		},
		expoout: function expoout(x, t, b, c, d) {
			return $.easing.easeOutExpo(x, t, b, c, d);
		},
		expoinout: function expoinout(x, t, b, c, d) {
			return $.easing.easeInOutExpo(x, t, b, c, d);
		},
		bouncein: function bouncein(x, t, b, c, d) {
			return $.easing.easeInBounce(x, t, b, c, d);
		},
		bounceout: function bounceout(x, t, b, c, d) {
			return $.easing.easeOutBounce(x, t, b, c, d);
		},
		bounceinout: function bounceinout(x, t, b, c, d) {
			return $.easing.easeInOutBounce(x, t, b, c, d);
		},
		elasin: function elasin(x, t, b, c, d) {
			return $.easing.easeInElastic(x, t, b, c, d);
		},
		elasout: function elasout(x, t, b, c, d) {
			return $.easing.easeOutElastic(x, t, b, c, d);
		},
		elasinout: function elasinout(x, t, b, c, d) {
			return $.easing.easeInOutElastic(x, t, b, c, d);
		},
		backin: function backin(x, t, b, c, d) {
			return $.easing.easeInBack(x, t, b, c, d);
		},
		backout: function backout(x, t, b, c, d) {
			return $.easing.easeOutBack(x, t, b, c, d);
		},
		backinout: function backinout(x, t, b, c, d) {
			return $.easing.easeInOutBack(x, t, b, c, d);
		}
	});
})(jQuery);

/***/ })

/******/ });