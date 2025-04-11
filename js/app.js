/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/css-loader/dist/cjs.js):\nError: Can't resolve './custom.css' in 'C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\resources\\css'\n    at finishWithoutResolve (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\Resolver.js:564:18)\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\Resolver.js:656:15\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:27:1)\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\DescriptionFilePlugin.js:89:43\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:27:1)\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\DescriptionFilePlugin.js:89:43\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\Resolver.js:718:5\n    at eval (eval at create (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\enhanced-resolve\\lib\\DirectoryExistsPlugin.js:41:15\n    at process.processTicksAndRejections (node:internal/process/task_queues:81:21)\n    at processResult (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\webpack\\lib\\NormalModule.js:917:19)\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\webpack\\lib\\NormalModule.js:1065:5\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\loader-runner\\lib\\LoaderRunner.js:400:11\n    at C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\loader-runner\\lib\\LoaderRunner.js:252:18\n    at context.callback (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\Users\\maria\\Local Sites\\tailz-b\\app\\public\\wp-content\\themes\\tailz-b\\node_modules\\css-loader\\dist\\index.js:155:5)\n    at process.processTicksAndRejections (node:internal/process/task_queues:95:5)");

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

// Login/Signup Popup
document.addEventListener('DOMContentLoaded', function () {
  // Login/Signup Popup
  var loginPopup = document.querySelector('.login-signup-popup');
  var loginPopupClose = document.querySelector('.login-signup-close');

  // Handle login/signup popup
  function showLoginPopup() {
    if (loginPopup && !sessionStorage.getItem('loginPopupClosed')) {
      loginPopup.classList.remove('pointer-events-none');
      loginPopup.classList.remove('opacity-0');

      // Automatically hide after 5 seconds
      setTimeout(hideLoginPopup, 5000);
    }
  }
  function hideLoginPopup() {
    if (loginPopup) {
      loginPopup.classList.add('opacity-0');
      setTimeout(function () {
        loginPopup.classList.add('pointer-events-none');
      }, 300);
      sessionStorage.setItem('loginPopupClosed', 'true');
    }
  }

  // Show popup on page load with delay if not previously closed
  if (!sessionStorage.getItem('loginPopupClosed')) {
    setTimeout(showLoginPopup, 500);
  }

  // Hide popup on scroll
  var scrollTimeout;
  window.addEventListener('scroll', function () {
    if (loginPopup && !loginPopup.classList.contains('opacity-0') && !sessionStorage.getItem('loginPopupClosed')) {
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(hideLoginPopup, 150); // Debounce scroll events
    }
  }, {
    passive: true
  });

  // Handle close button click
  if (loginPopupClose) {
    loginPopupClose.addEventListener('click', function (e) {
      e.preventDefault();
      hideLoginPopup();
    });
  }

  // Close popup on ESC key press
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && loginPopup && !loginPopup.classList.contains('opacity-0')) {
      hideLoginPopup();
    }
  });
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/css/app.css"]();
/******/ 	
/******/ })()
;
//# sourceMappingURL=app.js.map