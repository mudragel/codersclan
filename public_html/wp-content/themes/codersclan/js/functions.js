jQuery(document).ready(function ($) {
    $(document).on('invalid.wpcf7', function () {
        $('.wpcf7 .form-group').removeClass('has-error');
        var input = $('input.wpcf7-not-valid');
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