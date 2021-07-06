(function($) {
    $(document).ready(function() {

        $('.js-modal').on('click', function(e) {
            if ($(e.target).hasClass('js-modal')) {
                $(e.target).fadeOut();
                $('body').removeClass('js-modal-open');
            }
        });
        $('.js-modal-toggle').on('click', function(e) {
            $('#modal-form').fadeIn();
            $('body').addClass('js-modal-open');
        });
        $('.js-modal-close').on('click', function(e) {
            $('#modal-form').fadeOut();
            $('body').removeClass('js-modal-open');
        });

    });
})(jQuery);