/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):\nError: It looks like you're trying to use `tailwindcss` directly as a PostCSS plugin. The PostCSS plugin has moved to a separate package, so to continue using Tailwind CSS with PostCSS you'll need to install `@tailwindcss/postcss` and update your PostCSS configuration.\n    at ze (C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\tailwindcss\\dist\\lib.js:36:1984)\n    at LazyResult.runOnRoot (C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\postcss\\lib\\lazy-result.js:361:16)\n    at LazyResult.runAsync (C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\postcss\\lib\\lazy-result.js:290:26)\n    at LazyResult.async (C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\postcss\\lib\\lazy-result.js:192:30)\n    at LazyResult.then (C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\postcss\\lib\\lazy-result.js:436:17)\n    at processResult (C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\webpack\\lib\\NormalModule.js:917:19)\n    at C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\webpack\\lib\\NormalModule.js:1065:5\n    at C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\loader-runner\\lib\\LoaderRunner.js:400:11\n    at C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\loader-runner\\lib\\LoaderRunner.js:252:18\n    at context.callback (C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\Users\\JoshS\\Downloads\\NAIT\\capstone\\tailz-b\\node_modules\\postcss-loader\\dist\\index.js:142:7)");

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

// Training Preview Video Carousel
document.addEventListener('DOMContentLoaded', function () {
  var carousel = document.querySelector('.video-carousel');
  if (!carousel) return;
  var items = carousel.querySelectorAll('.carousel-item');
  var prevBtn = document.querySelector('.carousel-prev');
  var nextBtn = document.querySelector('.carousel-next');
  var currentIndex = 0;
  function showSlide(index) {
    items.forEach(function (item) {
      return item.classList.remove('active');
    });
    items[index].classList.add('active');
  }
  if (prevBtn) {
    prevBtn.addEventListener('click', function () {
      currentIndex = (currentIndex - 1 + items.length) % items.length;
      showSlide(currentIndex);
    });
  }
  if (nextBtn) {
    nextBtn.addEventListener('click', function () {
      currentIndex = (currentIndex + 1) % items.length;
      showSlide(currentIndex);
    });
  }
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