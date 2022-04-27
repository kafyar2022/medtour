/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*************************************!*\
  !*** ./resources/js/layouts/app.js ***!
  \*************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/layouts/header.js ***!
  \****************************************/
var header = document.querySelector('.header');

if (header) {
  var searchBtn = header.querySelector('.search__button'),
      search = header.querySelector('.search');
  hamburger = header.querySelector('.hamburger');
  mobileNavigation = header.querySelector('.mobile-navigation'), mobNavItems = header.querySelectorAll('.mobile-navigation__item');

  searchBtn.onclick = function () {
    search.classList.toggle('hidden');
  };

  hamburger.onclick = function () {
    mobileNavigation.classList.toggle('hidden');
  };

  mobNavItems.forEach(function (item) {
    item.addEventListener('click', function () {
      var linksBlock = item.querySelector('.mobile-dropdown-links');

      if (linksBlock) {
        linksBlock.classList.toggle('hidden');
      }
    });
  });
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/layouts/footer.js ***!
  \****************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
var commentsCarousel = document.querySelector('.comments-slide');

if (commentsCarousel) {
  $(".comments-slide").owlCarousel({
    loop: true,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    items: 1
  });
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!************************************!*\
  !*** ./resources/js/auth/login.js ***!
  \************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*************************************!*\
  !*** ./resources/js/auth/master.js ***!
  \*************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*******************************************!*\
  !*** ./resources/js/pages/about/index.js ***!
  \*******************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!**********************************************!*\
  !*** ./resources/js/pages/contacts/index.js ***!
  \**********************************************/
var contactsPage = document.querySelector('[data-id="contacts-page"]');

if (contactsPage) {
  var submitBtn = contactsPage.querySelector('[data-id="submit-btn"]');
  submitBtn.addEventListener('click', function () {
    submitBtn.classList.remove('hidden');
  });
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!***********************************************!*\
  !*** ./resources/js/pages/countries/index.js ***!
  \***********************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*********************************************!*\
  !*** ./resources/js/pages/gallery/index.js ***!
  \*********************************************/
var gallery = document.querySelector('.gallery');

if (gallery) {
  new SimpleLightbox('.gallery a', {
    /* options */
  });
}
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!**********************************************!*\
  !*** ./resources/js/pages/services/index.js ***!
  \**********************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!**********************************************!*\
  !*** ./resources/js/pages/partners/index.js ***!
  \**********************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*********************************************!*\
  !*** ./resources/js/pages/reviews/index.js ***!
  \*********************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!************************************************!*\
  !*** ./resources/js/pages/worksystem/index.js ***!
  \************************************************/

})();

/******/ })()
;