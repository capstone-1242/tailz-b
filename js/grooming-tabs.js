/******/ (() => { // webpackBootstrap
/*!***************************************!*\
  !*** ./resources/js/grooming-tabs.js ***!
  \***************************************/
(function ($) {
  $(document).ready(function () {
    // Tab switching functionality
    $('.tab-button').on('click', function() {
      // Remove active class from all buttons and content
      $('.tab-button').removeClass('active bg-[#FF6A6A] text-white').addClass('bg-gray-200');
      $('.tab-content').addClass('hidden').removeClass('active');

      // Add active class to clicked button and corresponding content
      $(this).addClass('active bg-[#FF6A6A] text-white').removeClass('bg-gray-200');
      const targetId = $(this).attr('aria-controls');
      $(`#${targetId}`).removeClass('hidden').addClass('active');

      // Trigger size change to update prices
      $(`#${targetId} select[id$="-size"]`).trigger('change');
    });

    // When a size dropdown changes, update service card pricing.
    $('select[id$="-size"]').on('change', function () {
      const $tabContent = $(this).closest('.tab-content');
      const tabId = $tabContent.attr('id'); // 'dog-content' or 'cat-content'
      const animal = tabId === 'dog-content' ? 'dog' : 'cat';
      const size = $(this).val(); // e.g., 'xs', 's', 'm', 'l', 'xl'

      // For each service card in this tab, update the price.
      $tabContent.find('.service-card').each(function () {
        const priceText = $(this).data(`${animal}-${size}`);
        $(this).find('.price').text(priceText);
      });
    });

    // Initialize the default selection on page load.
    $('select[id$="-size"]').trigger('change');

    // Mobile responsiveness
    function handleMobileLayout() {
      if (window.innerWidth < 768) {
        $('.service-card').removeClass('col-span-2');
        $('.boost-menu').removeClass('col-span-2');
      } else {
        // Restore desktop layout
        $('.service-card:nth-child(5)').addClass('col-span-2');
        $('.boost-menu').addClass('col-span-2');
      }
    }

    // Run on load and resize
    handleMobileLayout();
    $(window).on('resize', handleMobileLayout);
  });
})(jQuery);
/******/ })()
;