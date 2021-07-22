$(document).ready(function() {
    if ($('input[type="radio"]:checked').length) {
        $('input[type="radio"]:checked').parent("label").addClass('checked');
    }
    if ($('input[type="checkbox"]:checked').length) {
        $('input[type="checkbox"]:checked').parent("label").addClass('checked');
    }

    $('label input[type="radio"]').change(
        function() {
            var el = $(this);

            radioRender(el);
        }
    );
    $('label input[type="checkbox"]').change(
        function() {
            var el = $(this);
            var parent = el.parent('label');
            parent.toggleClass('checked');
        }
    );

    $('.jv_nav li a').click(function() {
        var target = $($(this).attr('href')).offset().top - 30;
        $('body, html').animate({
            scrollTop: target
        }, 500);
        return false;
    });


    $('.tabs_nav li a').click(function() {

        var el = $(this),
            parent = el.parent('li'),
            cont = el.parents('.tabs_wrapper'),
            target = $(el.attr('href'));

        cont.find('.tabs_nav li').removeClass('active');
        parent.addClass('active');
        cont.find('.tab_item').hide();
        target.show();

        return false;
    });

    $('.faq-list li .question').click(
        function() {
            // var el = $(this),
            //     parent = el.closest('li'),
            //     target = parent.find('.answer');
            //
            //   target.slideToggle(300);
            //   parent.toggleClass('open');
        }
    );

    $('.to_top_button').click(function() {
        $('body, html').animate({
            scrollTop: 0
        }, 300);
        return false;
    });

    $(window).trigger('resize');
    $(window).trigger('scroll');
});

$(window).scroll(function() {
    scrollTrigger();

    if ($(window).scrollTop() > 100) {
        $('.to_top_button').fadeIn(300);
    } else {
        $('.to_top_button').fadeOut(300);
    }

    regWidgetCalc();
});

$(window).on('load', function() {
    $(window).trigger('resize');
});

$(window).resize(function() {
    scaleTitles();
    calcLists();
});

function regWidgetCalc() {

    if ($('#scrollForm').length) {
        var target = $('#scrollForm'),
            posTrigger = $('.scroll-trigger'),
            win = $(window),
            winPos = win.scrollTop(),
            startOffset = posTrigger.offset().top + posTrigger.height() - 0,
            winW = win.width();
        if (winW > 767) {
            target.show();

            if (winPos > startOffset) {
                target.addClass('open');
            } else {
                target.removeClass('open');
            }
        } else {
            target.hide();
        }
    }
}

function calcLists() {

    $('.calc-list').each(
        function() {
            var el = $(this),
                maxH = 0;

            el.find('li').css('height', 'auto');

            el.find('li').each(
                function() {
                    var el = $(this);
                    if (el.outerHeight() > maxH) {
                        maxH = el.outerHeight();
                    }
                }
            );

            if ($(window).width() > 767) {
                el.find('li').css('height', maxH + 'px');
            } else {
                el.find('li').css('height', 'auto');
            }
        }
    );
}

function radioRender(el) {
    var parent = el.parent('label'),
        els = $('input[name="' + el.attr('name') + '"]');

    els.parent('label').removeClass('checked');
    els.prop('checked', false);

    parent.toggleClass('checked');
}

function scaleTitles() {

    $('.trim-spaces').each(
        function() {
            var el = $(this);
            var target = el.find('.scalable');

            var ratio = 1;

            if (target.width() > el.width()) {
                ratio = el.width() / target.width();
            }

            target.css('transform', 'scale(' + ratio + ')');
            el.height(target.height() * ratio);

        }
    );
}

function scrollTrigger() {

    var target = $('.scroll-target'),
        posTrigger = $('.scroll-trigger');

    if (target.length && posTrigger.length) {

        var win = $(window),
            winPos = win.scrollTop(),
            startOffset = posTrigger.offset().top + posTrigger.height() - 50,
            winW = win.width();

        if (winW > 991) {
            target.show();

            if (winPos > startOffset) {
                target.addClass('shown');
            } else {
                target.removeClass('shown');
            }
        } else {
            target.hide();
        }
    }

}



// end exit popup


// end exit alert