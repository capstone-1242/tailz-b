(function($) {
    $(document).ready(function() {
        // Initialize all tab containers
        $('.tabs-container').each(function() {
            const $container = $(this);
            const $buttons = $container.find('.tab-button');
            const $contents = $container.find('.tab-content');
            
            // Set initial state
            $buttons.first().addClass('active');
            $contents.first().removeClass('hidden');
            
            // Handle tab button clicks
            $buttons.on('click', function() {
                const $button = $(this);
                const tabId = $button.data('tab');
                
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
        $('.tabs-container').each(function() {
            const $container = $(this);
            const $firstButton = $container.find('.tab-button').first();
            if ($firstButton.length) {
                $firstButton.trigger('click');
            }
        });

        // Handle size dropdown changes
        $('select[id$="-size"]').on('change', function() {
            const tabContent = $(this).closest('.tab-content');
            const tabId = tabContent.attr('id');
            const animal = tabId.split('-')[0]; // 'dog' or 'cat'
            const size = $(this).val();

            // Update prices in all service cards within this tab
            tabContent.find('.service-card').each(function() {
                const $card = $(this);
                const priceText = $card.data(animal + '-' + size);
                $card.find('.price').text(priceText);
            });
        });

        // Initialize default sizes
        $('#dog-size').trigger('change');
        $('#cat-size').trigger('change');
    });
})(jQuery); 