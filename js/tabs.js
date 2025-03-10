(function($) {
    $(document).ready(function() {
        $('.tab-button').on('click', function() {
            const tabGroup = $(this).closest('.tabs-container').attr('id');
            
            $('#' + tabGroup + ' .tab-button').removeClass('active');
            
            $(this).addClass('active');
            
            $('#' + tabGroup + ' .tab-content').addClass('hidden');
            
            const tabId = $(this).data('tab');
            $('#' + tabId + '-content').removeClass('hidden');
        });
    });
})(jQuery);