(function($) {
    $(document).ready(function() {
      // When a size dropdown changes, update service card pricing.
      $('select[id$="-size"]').on('change', function() {
        var $tabContent = $(this).closest('.tab-content');
        var tabId = $tabContent.attr('id'); // 'dog-content' or 'cat-content'
        var animal = (tabId === 'dog-content') ? 'dog' : 'cat';
        var size = $(this).val(); // e.g., 'xs', 's', 'm', 'l', 'xl'
  
        // For each service card in this tab, update the price.
        $tabContent.find('.service-card').each(function() {
          var priceText = $(this).data(animal + '-' + size);
          $(this).find('.price').text(priceText);
        });
      });
  
      // Initialize the default selection on page load.
      $('select[id$="-size"]').trigger('change');
    });
  })(jQuery); 