(function($) {
    "use strict"
$(".product-area").isotope({
            filter: '*'
        });
        $(".port-menu li").on('click', function() {
           var selector = $(this).attr('data-filter');
            $(".product-area").isotope({
                filter: selector
            });
        });
    
})(jQuery);