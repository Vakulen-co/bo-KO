(function ($) {

    'use strict';

    const storageKey = 'cookie_policy_accepted';

    const widget = $('.cookie-widget');
    const redirect = $('[data-cw-redirect]');
    const acceptBtn = $('[data-cw-action="accept"]');
    const closeBtn = $('[data-cw-action="close"]');

    if (!JSON.parse(localStorage.getItem(storageKey))) {
        widget.addClass('cookie-not-accepted');
    }

    acceptBtn.on('click', function () {
        localStorage.setItem(storageKey, true);

        closeWidget(widget);

        if (redirect.data('cw-redirect')) {
            window.open(redirect.data('cw-redirect-url'), '_blank');
        }
    });

    closeBtn.on('click', function () {
        localStorage.setItem(storageKey, true);
        closeWidget(widget);
    });

    function closeWidget(widget) {
        widget.fadeOut(200);
    }

})(jQuery);