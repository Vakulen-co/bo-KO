$(function() {

    function initCountdown() {
        let countdownSpan = $('.countdown-span');
        let countdownSpanVal = countdownSpan.text();
        let mmSsArray = countdownSpanVal.split(":");
        let mm = parseInt(mmSsArray[0]);
        let ss = parseInt(mmSsArray[1]);
        if (mm === 0 && ss === 0)
            return;
        if (ss === 0) {
            mm--;
            ss = 59;
        } else
            ss--;
        let isSecondsSingleDigit = Math.floor(ss / 10) === 0 ? true : false;

        if (isSecondsSingleDigit) {
            let newCountdownSpanVal = "0" + mm.toString() + ":" + "0" + ss.toString();
            countdownSpan.text(newCountdownSpanVal);
        } else {
            let newCountdownSpanVal = "0" + mm.toString() + ":" + ss.toString();
            countdownSpan.text(newCountdownSpanVal);
        }

        setTimeout(function() {
            initCountdown();
        }, 1000)
    }

    function initCountdown1() {
        let countdownSpan = $('.countdown-span1');
        let countdownSpanVal = countdownSpan.text();
        let mmSsArray = countdownSpanVal.split(":");
        let mm = parseInt(mmSsArray[0]);
        let ss = parseInt(mmSsArray[1]);
        if (mm === 0 && ss === 0)
            return;
        if (ss === 0) {
            mm--;
            ss = 59;
        } else
            ss--;
        let isSecondsSingleDigit = Math.floor(ss / 10) === 0 ? true : false;

        if (isSecondsSingleDigit) {
            let newCountdownSpanVal = "0" + mm.toString() + ":" + "0" + ss.toString();
            countdownSpan.text(newCountdownSpanVal);
        } else {
            let newCountdownSpanVal = "0" + mm.toString() + ":" + ss.toString();
            countdownSpan.text(newCountdownSpanVal);
        }

        setTimeout(function() {
            initCountdown1();
        }, 1000)
    }
    initCountdown();
    initCountdown1();


});

$('.hover-modal').hover(function() {
    $('.popup_custom').show()
})
$('.close_button').click(function() {
    $('.popup_custom').hide()
})

function addVisitorModule() {
    var isoCode;
    $.getJSON("/assets/geo", function(data) {
        isoCode = data.country_code;
        countryGeo = data.country
        currency()
        console.log(isoCode)
    });

    function currency() {
        $(".country-name-geo").text(countryGeo)
        var btc = "$"
        var currency1 = ["AT", "CH", "DE", "LI", "LU", "BE", "CZ", "ES", "FR", "GR", "HU", "IT", "NL", "PL", "PT", "RO", "RS", "HR", "SK", "SL", "DK", "FI", "NO", "SE"]
        if (isoCode === "GB") {
            $(".currency").text("£")
            var btc = "£"
        }
        if (currency1.indexOf(isoCode) >= 0) {
            $(".currency").text("€")
            var btc = "€"
        }

        $.ajax({
                url: '/assets/btcrates',
                dataType: 'json'
            })
            .done(function(data) {
                if (btc == "$") {
                    $('.corency').text(btc + " " + data.BTC.USD);
                } else if (btc == "£") {
                    $('.corency').text(btc + " " + data.BTC.GBP);
                } else {
                    $('.corency').text(btc + " " + data.BTC.EUR);
                }
            })
    }
};
addVisitorModule()

$.ajax({
    url: '/assets/btcrates',
    dataType: 'json'
})
.done(function(data) {
    $('.corency').text(" $" + data.BTC.USD);
})



$('.btn-block-form,.scroll-form').on('click', function() {
$('html').animate({
    scrollTop: $(".video-header").offset().top
}, 1000);
});



$(".winner-click").on('click', function() {
var flag = $(this).find('.winners-info-hide').css('display');
var info = $(this).find('.winners-info-hide');
var arrow = $(this).find('.more-info').hide();

if (flag === "none") {
    $(this).find('.winners-info-hide').show()
    $(this).find('.more-info').hide();
    $(this).css({
        "border": "3px solid #E6AE5C"
    });
} else {
    $(this).find('.winners-info-hide').hide()
    $(this).find('.more-info').show();
    $(this).css({
        "background-color": "#001132"
    });
}
$('.winner-click .winners-info-hide').not(info).hide().parent().css({
    "background-color": "#001132",
    "border": "3px solid #FFFFFF"
});
$('.more-info').not(arrow).show(".more-info")
})



$(".faq-click").on('click', function() {
var flag = $(this).find('.winners-info-hide').css('display');
var info = $(this).find('.winners-info-hide');
var arrow = $(this).find('.more-info').hide();

if (flag === "none") {
    $(this).find('.winners-info-hide').show()
    $(this).find('.winners-info span').css({
        "color": "#E6AE5C"
    });
    $(this).find('.more-info').hide();
    $(this).css({
        "border": "2px solid #E6AE5C",
        "background-image": "url(assets/images/arrow-hide-up.png)"
    });
} else {
    $(this).find('.winners-info span').css({
        "color": "#FFFFF"
    });
    $(this).find('.winners-info-hide').hide();
    $(this).find('.more-info').show();
    $(this).css({
        "background-image": "url(assets/images/arrow-hide.png)"
    });
}
$('.arow-mob').not(info).hide().parent().css({
    "border": "2px solid #FFFFFF",
    "background-image": "url(assets/images/arrow-hide.png)"
});
$('.more-info').not(arrow).show(".more-info")
})



$(".winner-jade").on('click', function() {
$(this).parent().parent().hide();
$(".steps-2").show();
})
$(".winner-william").on('click', function() {
$(this).parent().parent().hide();
$(".steps-1").show();
})
$(".winner-karen").on('click', function() {
$(this).parent().parent().hide();
$(".steps-4").show();
})
$(".winner-steven").on('click', function() {
$(this).parent().parent().hide();
$(".steps-3").show();
})


$(".question").on('click', function() {
$(this).parent().find('.question').css({
    "color": "#FAFAFF"
});
$(this).css({
    "color": "#E6AE5C"
});
})

$(".question-work").on('click', function() {
$(".answer").hide();
$(".answer-work").show(300)
})

$(".question-expect").on('click', function() {
$(".answer").hide();
$(".answer-expect").show(300);
})
$(".question-cost").on('click', function() {
$(".answer").hide();
$(".answer-cost").show(300);
})
$(".question-marketing").on('click', function() {
$(".answer").hide();
$(".answer-marketing").show(300);
})
$(".question-fees").on('click', function() {
$(".answer").hide();
$(".answer-fees").show(300);
})
