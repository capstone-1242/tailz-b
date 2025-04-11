/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvY3NzL2FwcC5jc3MiLCJtYXBwaW5ncyI6IjtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vdGFpbHByZXNzLy4vcmVzb3VyY2VzL2Nzcy9hcHAuY3NzP2E1ZTciXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/css/app.css\n");

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

eval("// Login/Signup Popup\ndocument.addEventListener('DOMContentLoaded', function () {\n  // Login/Signup Popup\n  var loginPopup = document.querySelector('.login-signup-popup');\n  var loginPopupClose = document.querySelector('.login-signup-close');\n\n  // Handle login/signup popup\n  function showLoginPopup() {\n    if (loginPopup && !sessionStorage.getItem('loginPopupClosed')) {\n      loginPopup.classList.remove('pointer-events-none');\n      loginPopup.classList.remove('opacity-0');\n\n      // Automatically hide after 5 seconds\n      setTimeout(hideLoginPopup, 5000);\n    }\n  }\n  function hideLoginPopup() {\n    if (loginPopup) {\n      loginPopup.classList.add('opacity-0');\n      setTimeout(function () {\n        loginPopup.classList.add('pointer-events-none');\n      }, 300);\n      sessionStorage.setItem('loginPopupClosed', 'true');\n    }\n  }\n\n  // Show popup on page load with delay if not previously closed\n  if (!sessionStorage.getItem('loginPopupClosed')) {\n    setTimeout(showLoginPopup, 500);\n  }\n\n  // Hide popup on scroll\n  var scrollTimeout;\n  window.addEventListener('scroll', function () {\n    if (loginPopup && !loginPopup.classList.contains('opacity-0') && !sessionStorage.getItem('loginPopupClosed')) {\n      clearTimeout(scrollTimeout);\n      scrollTimeout = setTimeout(hideLoginPopup, 150); // Debounce scroll events\n    }\n  }, {\n    passive: true\n  });\n\n  // Handle close button click\n  if (loginPopupClose) {\n    loginPopupClose.addEventListener('click', function (e) {\n      e.preventDefault();\n      hideLoginPopup();\n    });\n  }\n\n  // Close popup on ESC key press\n  document.addEventListener('keydown', function (e) {\n    if (e.key === 'Escape' && loginPopup && !loginPopup.classList.contains('opacity-0')) {\n      hideLoginPopup();\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJsb2dpblBvcHVwIiwicXVlcnlTZWxlY3RvciIsImxvZ2luUG9wdXBDbG9zZSIsInNob3dMb2dpblBvcHVwIiwic2Vzc2lvblN0b3JhZ2UiLCJnZXRJdGVtIiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwic2V0VGltZW91dCIsImhpZGVMb2dpblBvcHVwIiwiYWRkIiwic2V0SXRlbSIsInNjcm9sbFRpbWVvdXQiLCJ3aW5kb3ciLCJjb250YWlucyIsImNsZWFyVGltZW91dCIsInBhc3NpdmUiLCJlIiwicHJldmVudERlZmF1bHQiLCJrZXkiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vdGFpbHByZXNzLy4vcmVzb3VyY2VzL2pzL2FwcC5qcz9jZWQ2Il0sInNvdXJjZXNDb250ZW50IjpbIi8vIExvZ2luL1NpZ251cCBQb3B1cFxyXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24oKSB7XHJcbiAgICAvLyBMb2dpbi9TaWdudXAgUG9wdXBcclxuICAgIGNvbnN0IGxvZ2luUG9wdXAgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubG9naW4tc2lnbnVwLXBvcHVwJyk7XHJcbiAgICBjb25zdCBsb2dpblBvcHVwQ2xvc2UgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubG9naW4tc2lnbnVwLWNsb3NlJyk7XHJcbiAgICBcclxuICAgIC8vIEhhbmRsZSBsb2dpbi9zaWdudXAgcG9wdXBcclxuICAgIGZ1bmN0aW9uIHNob3dMb2dpblBvcHVwKCkge1xyXG4gICAgICAgIGlmIChsb2dpblBvcHVwICYmICFzZXNzaW9uU3RvcmFnZS5nZXRJdGVtKCdsb2dpblBvcHVwQ2xvc2VkJykpIHtcclxuICAgICAgICAgICAgbG9naW5Qb3B1cC5jbGFzc0xpc3QucmVtb3ZlKCdwb2ludGVyLWV2ZW50cy1ub25lJyk7XHJcbiAgICAgICAgICAgIGxvZ2luUG9wdXAuY2xhc3NMaXN0LnJlbW92ZSgnb3BhY2l0eS0wJyk7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAvLyBBdXRvbWF0aWNhbGx5IGhpZGUgYWZ0ZXIgNSBzZWNvbmRzXHJcbiAgICAgICAgICAgIHNldFRpbWVvdXQoaGlkZUxvZ2luUG9wdXAsIDUwMDApO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuICAgIFxyXG4gICAgZnVuY3Rpb24gaGlkZUxvZ2luUG9wdXAoKSB7XHJcbiAgICAgICAgaWYgKGxvZ2luUG9wdXApIHtcclxuICAgICAgICAgICAgbG9naW5Qb3B1cC5jbGFzc0xpc3QuYWRkKCdvcGFjaXR5LTAnKTtcclxuICAgICAgICAgICAgc2V0VGltZW91dCgoKSA9PiB7XHJcbiAgICAgICAgICAgICAgICBsb2dpblBvcHVwLmNsYXNzTGlzdC5hZGQoJ3BvaW50ZXItZXZlbnRzLW5vbmUnKTtcclxuICAgICAgICAgICAgfSwgMzAwKTtcclxuICAgICAgICAgICAgc2Vzc2lvblN0b3JhZ2Uuc2V0SXRlbSgnbG9naW5Qb3B1cENsb3NlZCcsICd0cnVlJyk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG4gICAgXHJcbiAgICAvLyBTaG93IHBvcHVwIG9uIHBhZ2UgbG9hZCB3aXRoIGRlbGF5IGlmIG5vdCBwcmV2aW91c2x5IGNsb3NlZFxyXG4gICAgaWYgKCFzZXNzaW9uU3RvcmFnZS5nZXRJdGVtKCdsb2dpblBvcHVwQ2xvc2VkJykpIHtcclxuICAgICAgICBzZXRUaW1lb3V0KHNob3dMb2dpblBvcHVwLCA1MDApO1xyXG4gICAgfVxyXG4gICAgXHJcbiAgICAvLyBIaWRlIHBvcHVwIG9uIHNjcm9sbFxyXG4gICAgbGV0IHNjcm9sbFRpbWVvdXQ7XHJcbiAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgaWYgKGxvZ2luUG9wdXAgJiYgIWxvZ2luUG9wdXAuY2xhc3NMaXN0LmNvbnRhaW5zKCdvcGFjaXR5LTAnKSAmJiAhc2Vzc2lvblN0b3JhZ2UuZ2V0SXRlbSgnbG9naW5Qb3B1cENsb3NlZCcpKSB7XHJcbiAgICAgICAgICAgIGNsZWFyVGltZW91dChzY3JvbGxUaW1lb3V0KTtcclxuICAgICAgICAgICAgc2Nyb2xsVGltZW91dCA9IHNldFRpbWVvdXQoaGlkZUxvZ2luUG9wdXAsIDE1MCk7IC8vIERlYm91bmNlIHNjcm9sbCBldmVudHNcclxuICAgICAgICB9XHJcbiAgICB9LCB7IHBhc3NpdmU6IHRydWUgfSk7XHJcbiAgICBcclxuICAgIC8vIEhhbmRsZSBjbG9zZSBidXR0b24gY2xpY2tcclxuICAgIGlmIChsb2dpblBvcHVwQ2xvc2UpIHtcclxuICAgICAgICBsb2dpblBvcHVwQ2xvc2UuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihlKSB7XHJcbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICAgICAgaGlkZUxvZ2luUG9wdXAoKTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuICAgIFxyXG4gICAgLy8gQ2xvc2UgcG9wdXAgb24gRVNDIGtleSBwcmVzc1xyXG4gICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigna2V5ZG93bicsIGZ1bmN0aW9uKGUpIHtcclxuICAgICAgICBpZiAoZS5rZXkgPT09ICdFc2NhcGUnICYmIGxvZ2luUG9wdXAgJiYgIWxvZ2luUG9wdXAuY2xhc3NMaXN0LmNvbnRhaW5zKCdvcGFjaXR5LTAnKSkge1xyXG4gICAgICAgICAgICBoaWRlTG9naW5Qb3B1cCgpO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG59KTsiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0FBLFFBQVEsQ0FBQ0MsZ0JBQWdCLENBQUMsa0JBQWtCLEVBQUUsWUFBVztFQUNyRDtFQUNBLElBQU1DLFVBQVUsR0FBR0YsUUFBUSxDQUFDRyxhQUFhLENBQUMscUJBQXFCLENBQUM7RUFDaEUsSUFBTUMsZUFBZSxHQUFHSixRQUFRLENBQUNHLGFBQWEsQ0FBQyxxQkFBcUIsQ0FBQzs7RUFFckU7RUFDQSxTQUFTRSxjQUFjQSxDQUFBLEVBQUc7SUFDdEIsSUFBSUgsVUFBVSxJQUFJLENBQUNJLGNBQWMsQ0FBQ0MsT0FBTyxDQUFDLGtCQUFrQixDQUFDLEVBQUU7TUFDM0RMLFVBQVUsQ0FBQ00sU0FBUyxDQUFDQyxNQUFNLENBQUMscUJBQXFCLENBQUM7TUFDbERQLFVBQVUsQ0FBQ00sU0FBUyxDQUFDQyxNQUFNLENBQUMsV0FBVyxDQUFDOztNQUV4QztNQUNBQyxVQUFVLENBQUNDLGNBQWMsRUFBRSxJQUFJLENBQUM7SUFDcEM7RUFDSjtFQUVBLFNBQVNBLGNBQWNBLENBQUEsRUFBRztJQUN0QixJQUFJVCxVQUFVLEVBQUU7TUFDWkEsVUFBVSxDQUFDTSxTQUFTLENBQUNJLEdBQUcsQ0FBQyxXQUFXLENBQUM7TUFDckNGLFVBQVUsQ0FBQyxZQUFNO1FBQ2JSLFVBQVUsQ0FBQ00sU0FBUyxDQUFDSSxHQUFHLENBQUMscUJBQXFCLENBQUM7TUFDbkQsQ0FBQyxFQUFFLEdBQUcsQ0FBQztNQUNQTixjQUFjLENBQUNPLE9BQU8sQ0FBQyxrQkFBa0IsRUFBRSxNQUFNLENBQUM7SUFDdEQ7RUFDSjs7RUFFQTtFQUNBLElBQUksQ0FBQ1AsY0FBYyxDQUFDQyxPQUFPLENBQUMsa0JBQWtCLENBQUMsRUFBRTtJQUM3Q0csVUFBVSxDQUFDTCxjQUFjLEVBQUUsR0FBRyxDQUFDO0VBQ25DOztFQUVBO0VBQ0EsSUFBSVMsYUFBYTtFQUNqQkMsTUFBTSxDQUFDZCxnQkFBZ0IsQ0FBQyxRQUFRLEVBQUUsWUFBVztJQUN6QyxJQUFJQyxVQUFVLElBQUksQ0FBQ0EsVUFBVSxDQUFDTSxTQUFTLENBQUNRLFFBQVEsQ0FBQyxXQUFXLENBQUMsSUFBSSxDQUFDVixjQUFjLENBQUNDLE9BQU8sQ0FBQyxrQkFBa0IsQ0FBQyxFQUFFO01BQzFHVSxZQUFZLENBQUNILGFBQWEsQ0FBQztNQUMzQkEsYUFBYSxHQUFHSixVQUFVLENBQUNDLGNBQWMsRUFBRSxHQUFHLENBQUMsQ0FBQyxDQUFDO0lBQ3JEO0VBQ0osQ0FBQyxFQUFFO0lBQUVPLE9BQU8sRUFBRTtFQUFLLENBQUMsQ0FBQzs7RUFFckI7RUFDQSxJQUFJZCxlQUFlLEVBQUU7SUFDakJBLGVBQWUsQ0FBQ0gsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQVNrQixDQUFDLEVBQUU7TUFDbERBLENBQUMsQ0FBQ0MsY0FBYyxDQUFDLENBQUM7TUFDbEJULGNBQWMsQ0FBQyxDQUFDO0lBQ3BCLENBQUMsQ0FBQztFQUNOOztFQUVBO0VBQ0FYLFFBQVEsQ0FBQ0MsZ0JBQWdCLENBQUMsU0FBUyxFQUFFLFVBQVNrQixDQUFDLEVBQUU7SUFDN0MsSUFBSUEsQ0FBQyxDQUFDRSxHQUFHLEtBQUssUUFBUSxJQUFJbkIsVUFBVSxJQUFJLENBQUNBLFVBQVUsQ0FBQ00sU0FBUyxDQUFDUSxRQUFRLENBQUMsV0FBVyxDQUFDLEVBQUU7TUFDakZMLGNBQWMsQ0FBQyxDQUFDO0lBQ3BCO0VBQ0osQ0FBQyxDQUFDO0FBQ04sQ0FBQyxDQUFDIiwiaWdub3JlTGlzdCI6W10sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9hcHAuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunktailpress"] = self["webpackChunktailpress"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;