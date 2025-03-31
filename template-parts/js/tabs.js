/******/ (() => { // webpackBootstrap
/*!******************************!*\
  !*** ./resources/js/tabs.js ***!
  \******************************/
(function ($) {
  $(document).ready(function () {
    // Initialize all tab containers
    $('.tabs-container').each(function () {
      var $container = $(this);
      var $buttons = $container.find('.tab-button');
      var $contents = $container.find('.tab-content');

      // Set initial state
      $buttons.first().addClass('active');
      $contents.first().removeClass('hidden');

      // Handle tab button clicks
      $buttons.on('click', function () {
        var $button = $(this);
        var tabId = $button.data('tab');

        // Update active state
        $buttons.removeClass('active');
        $button.addClass('active');

        // Show/hide content
        $contents.addClass('hidden');
        $container.find('#' + tabId + '-content').removeClass('hidden');

        // Trigger custom event for other scripts
        $container.trigger('tab-changed', [tabId]);
      });
    });

    // Initialize default tab
    $('.tabs-container').each(function () {
      var $container = $(this);
      var $firstButton = $container.find('.tab-button').first();
      if ($firstButton.length) {
        $firstButton.trigger('click');
      }
    });

    // Handle size dropdown changes
    $('select[id$="-size"]').on('change', function () {
      var tabContent = $(this).closest('.tab-content');
      var tabId = tabContent.attr('id');
      var animal = tabId.split('-')[0]; // 'dog' or 'cat'
      var size = $(this).val();

      // Update prices in all service cards within this tab
      tabContent.find('.service-card').each(function () {
        var $card = $(this);
        var priceText = $card.data(animal + '-' + size);
        $card.find('.price').text(priceText);
      });
    });

    // Initialize default sizes
    $('#dog-size').trigger('change');
    $('#cat-size').trigger('change');
  });
})(jQuery);
/******/ })()
;