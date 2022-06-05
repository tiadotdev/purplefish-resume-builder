(function($){
    $(function() {
        
        console.log('script.js loaded');
        
        // Builder
        $('.builder-section--header').on('click', function() {
            
            $(this).next('.builder-section--form').slideToggle();
            $(this).find('svg').toggleClass('rotate');

        });
        
        // Builder Add / Substract sections
        $('.builder-section--form').each(function() {
            
            var $add = $(this).find('.plus:not(.disabled)');
            var $minus = $(this).find('.minus');
            $(this).find('.single').slice(0, 1).show();
    
            // Add Sections
            $add.on('click', function() {
                var $single = $(this).closest('.builder-section--form').find('.single:hidden');
                $single.slice(0, 1).show();
                $minus.removeClass('disabled');
                
                if ($single.length == 1) {
                    $add.addClass('disabled');
                }
            });
            
            // Minus Sections
            $minus.on('click', function() {
                var $single = $(this).closest('.builder-section--form').find('.single:visible:last');
                $single.slice(0, 1).hide();
                $single.find('input').val('');
                $single.find('textarea').val('');
                
                if ($single.length == 1) {
                    $minus.addClass('disabled');
                }
            });
            
        });
        
    });
})(jQuery);
