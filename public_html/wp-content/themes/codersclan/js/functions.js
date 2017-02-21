jQuery(document).ready(function ($) {
    $(document).on('invalid.wpcf7', function () {
        var input = $('.wpcf7 input:not([type=submit])');
        input.closest('.form-group').addClass('has-error');
    });
    var header = $('header').outerHeight();
    $(window).scroll(function(){
        setTimeout(function(){
            scrollOffset = $(window).scrollTop();
            if (scrollOffset > 50) {
                $('header').addClass('active');
            } else {
                $('header').removeClass('active');
            }
        }, 100);

    });
});