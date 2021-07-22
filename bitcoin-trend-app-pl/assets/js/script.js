$(".main-button").on("click", function(e) {
    $("html, body").animate({
        scrollTop: $("#formfull").offset().top - 300
    }, 1000);
    return false;
});

function scrollTrigger() {
    var t = $(".scroll-target"),
        e = $(".scroll-trigger");
    if (t.length && e.length) {
        var i = $(window),
            n = i.scrollTop(),
            r = e.offset().top + e.height() - 50;
        i.width() > 991 && winH > 640 ? (t.show(),
            n > r ? t.addClass("shown") : t.removeClass("shown")) : t.hide()
    }
}
$(window).scroll(function() {
    winPos = $(window).scrollTop(),
        scrollTrigger(),
        regWidgetCalc()
})

$(" #scrollUp").on("click", function(e) {
    $("html, body").animate({
        scrollTop: $(".main-form-wrapper").offset().top - 300
    }, 1000);
    return false;
});

$('#popwform_head').submit(function(e) {
    e.preventDefault();
    const name = $(this).find('#firstName');
    const email = $(this).find('#user_email');
    const trafficsource = $(this).find('#trafficsource');
    const referer = $(this).find('#referer');
    const clickid = $(this).find('#clickid');
    const camp_id = $(this).find('#camp_id');
    if (name.val() === '' || email.val() === '') {
        if (name.val() === '') {

            $('#name-error-msg').removeClass('hide');
            $('#name-error-msg').addClass('error-block');
        }

        if (email.val() === '') {

            $('#email-error-msg').removeClass('hide');
            $('#email-error-msg').addClass('error-block');
        }


    } else {
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        var mailP = $('#user_email').val();

        if (pattern.test(mailP) != true) {


            $('#email-error-valid-msg').removeClass('hide');
            $('#email-error-valid-msg').addClass('error-block');
            return false;
        } else {
            $('#email-error-valid-msg').removeClass('error-block').addClass('hide');
        }
        var patternName = /^( )*[A-Za-zА-Яа-я\u0600-\u06FF-]{1,}/;
        var Name = name.val();


        if (patternName.test(Name) != true) {

            $('#name-error-msg').addClass('error-block');
            return false;
        } else {
            $('#name-error-msg').removeClass('error-block').addClass('hide');
        }

        $('name-error-msg').removeClass('error-block').addClass('hide');
        $('lname-error-msg').removeClass('error-block').addClass('hide');
        $('#error-msg').removeClass('error-msag').addClass('hide');
        $('#email-error-msg').removeClass('error-block').addClass('hide');
        $('#email-error-valid-msg').removeClass('error-block').addClass('hide');

        window.location = 'https://fortunatenews.com/PL/btctrendapp/webinar-rejestracja/?campaignID=' + camp_id.val() +
            '&name=' + name.val() + '&email=' + email.val() + '&clickid=' + clickid.val() +
            '&trafficsource=' + trafficsource.val() + '&referer=' + referer.val() +
            '&lander=' + findGetParameter('lander');
    }
});


function regWidgetCalc() {
    var winH = window.innerHeight;
    if ($("#scrollForm").length && $(".scroll-trigger").length) {
        var t = $("#scrollForm"),
            e = $("body"),
            i = $(".scroll-trigger"),
            n = $(window),
            r = n.scrollTop(),
            s = i.offset().top + i.height() - 0;
        n.width() > 767 && winH > 640 ? (t.show(),
            r > s ? (t.addClass("open"),
                e.addClass("scroll-triggered")) : (t.removeClass("open"),
                e.removeClass("scroll-triggered"))) : t.hide()
    }
}