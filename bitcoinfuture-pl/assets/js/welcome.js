$(document).ready(function() {
    $('.js-pwd-tooltip-icon').tooltip({
        template: '<div class="tooltip" role="tooltip"><div class="tooltip-inner"></div></div>'
    });
    var today = new Date();
    var dd = today.getDate(),
        mm = today.getMonth() + 1,
        yyyy = today.getFullYear(),
        todaysDate = (dd < 10 ? '0' + dd : dd) + '/' + (mm < 10 ? '0' + mm : mm) + '/' + yyyy;
    $('.today-date').text(todaysDate);

    updateTimer();

    $('.scroll-top-btn').on("click", function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("#bitcoin-video-container").offset().top - 100
        }, 1000);
    });

    videojs('video');

    var countryColors = {
        "AT": ['#ed2939', '#ed2939'],
        "AU": ['#00008b', '#ff0000'],
        "CH": ['#ff0000', '#ff0000'],
        "DE": ['#000000', '#dd0000'],
        "DK": ['#c60c30', '#c60c30'],
        "GB": ['#ff0000', '#00008b'],
        "IE": ['#169b62', '#ff883e'],
        "IT": ['#009246', '#ce2b37'],
        "NL": ['#ae1c28', '#21468b'],
        "NO": ['#ef2b2d', '#002868'],
        "NZ": ['#00247d', '#cc142b'],
        "SE": ['#006aa7', '#fecc00'],
        "ZA": ['#FFB612', '#007A4D'],
    };


    $.ajax({
        method: 'head',
        url: './assets/images/flags/4x3/' + countryIso + '.svg',
        success: function() {
            $('[data-init="country-flag"]')
                .css("height", "auto")
                .css("border", "none")
                .attr("src", './assets/images/flags/4x3/' + countryIso + '.svg');
        },
        error: function() {
            $('[data-init="country-flag"]')
                .css("width", "80px")
                .css("height", "auto")
                .css("border", "none")
                .attr("src", './assets/images/flags/4x3/' + countryIso + '.svg');
        }
    });

    $('[data-i18n="js-country-name-custom"]').each(function() {
        var obj = $(this);
        if (countryColors.hasOwnProperty(countryIsoUpper)) {
            var words = country.split(/ (.+)/);
            if (words.length < 2) {
                words[0] = country.substring(0, country.length / 2);
                words[1] = country.substring(country.length / 2);
            } else {
                words[0] += ' ';
            }
            $('<span/>').css('color', countryColors[countryIsoUpper][0]).text(words[0].toUpperCase()).appendTo(obj);
            $('<span/>').css('color', countryColors[countryIsoUpper][1]).text(words[1].toUpperCase()).appendTo(obj);
        } else {
            obj.text(country);
        }
        $('[data-init="country-flag"]').removeClass('hidden');
    });

    switch (countryIsoUpper) {
        case "GB":
            currencySymbol = "£";
            break;
        case "AT":
        case "DE":
        case "CH":
        case "NL":
        case "FR":
        case "ES":
        case "IT":
        case "SE":
        case "DK":
        case "NO":
        case "PL":
        case "FI":
            currencySymbol = "€";
            break;
        case "ZA":
            currencySymbol = "R";
            break;
        default:
            currencySymbol = "$";
    }
    $("[data-visitor-currency-symbol]").text(currencySymbol);

    var url = "https://uinames.freeart.co.il/api/?amount=50&ext",
        region = ['Great Britain', 'United Kingdom'].indexOf(country) > -1 ? 'England' : country;


    $.ajax({
        type: "get",
        url: url + '&region=' + region,
        success: function(response) {
            initSocialProof(response);
        },
        error: function(response) {
            region = 'England';
            $.ajax({
                type: "get",
                url: url + '&region=' + region,
                success: function(response) {
                    initSocialProof(response);
                },
            });
        },
    });

});


function initSocialProof(response) {
    $('#notifications').removeClass('hidden');
    rotateNotifications(response);
    $('.live-results-table tbody tr').each(function(e) {
        generateLiveResultsTableContent(response, currencySymbol);
    });
    fillLiveResultsTable(response, currencySymbol);
}

function rotateNotifications(peopleArray) {
    var index = Math.floor(Math.random() * peopleArray.length),
        name = peopleArray[index].name + ' ' + peopleArray[index].surname.charAt(0) + '.',
        image = peopleArray[index].photo,
        amount = Math.floor(50 + Math.random() * 200),
        delay = 3000 + Math.random() * 6000,
        wrapper = $('#notifications');
    wrapper.find('[data-name]').text(name);
    wrapper.find('[data-image]').addClass('shake');
    setTimeout(function() {
        wrapper.find('[data-image]').removeClass('shake');
    }, 1000);
    wrapper.find('[data-image]').attr('src', image);
    wrapper.find('[data-amount]').text(amount);
    wrapper.find('[data-amount]').addClass('shake');
    setTimeout(function() {
        wrapper.find('[data-amount]').removeClass('shake');
    }, 1000);
    wrapper.find('[data-visitor-currency-symbol]').addClass('shake');
    setTimeout(function() {
        wrapper.find('[data-visitor-currency-symbol]').removeClass('shake');
    }, 1000);
    setTimeout(function() {
        rotateNotifications(peopleArray);
    }, delay);
}

function generateLiveResultsTableContent(peopleArray, currencySymbol) {
    var currenciesArray = ["LTC/EOS", "ETH/LTC", "BTC/ETH", "EOS/ETH"],
        index = Math.floor(Math.random() * peopleArray.length),
        name = peopleArray[index].name + ' ' + peopleArray[index].surname.charAt(0) + '.',
        amount = Math.floor(250 + Math.random() * 1000),
        randomCurrencyIndex = Math.floor(Math.random() * 3) + 1,
        randomCurrency = currenciesArray[randomCurrencyIndex];

    var today = new Date(),
        dd = today.getDate(),
        mm = today.getMonth() + 1,
        yyyy = today.getFullYear();
    if (mm < 10) {
        mm = '0' + mm;
    }
    if (dd < 10) {
        dd = '0' + dd;
    }
    var todaysDate = dd + '/' + mm + '/' + yyyy;

    var allTrs = $('.tbody').children();
    var lastTr = $(allTrs[allTrs.length - 1]);
    var preLastTr = $(allTrs[allTrs.length - 2]);
    var td1 = '<td class="bold">' + name + " just won trade...</td>";
    var td2 = '<td class="bold">' + currencySymbol + amount + "</td>";
    var td3 = '<td class="trade-time-td padding-left-td">' + todaysDate + "</td>";
    var td4 = '<td>' + randomCurrency + '</td>';
    var td5 = '<td><img src="assets/images/tick.png" alt="tick"></td>';
    var newTr = $('<tr/>');
    newTr.append(td1);
    newTr.append(td2);
    newTr.append(td3);
    newTr.append(td4);
    newTr.append(td5);
    $('.tbody').prepend(newTr);
    lastTr.remove();
    preLastTr.children('td').addClass('last-td');
}

//TODO Rename the functions
function fillLiveResultsTable(peopleArray, currencySymbol) {
    var delay = 3000 + Math.random() * 6000;
    //TODO Rename the functions
    generateLiveResultsTableContent(peopleArray, currencySymbol);

    setTimeout(function() {
        fillLiveResultsTable(peopleArray, currencySymbol);
    }, delay);
}

function addMinutes(date, minutes, seconds) {
    return new Date(date.getTime() + minutes * 60000 + seconds * 1000);
}

function updateTimer() {
    setTimeout(function() {
        var date_now = new Date().getTime();
        var delta = Math.abs(date_now - date_future) / 1000;
        var minutes = Math.floor(delta / 60) % 60;
        delta -= minutes * 60;
        var seconds = parseInt(delta % 60);
        var milliseconds = parseInt((delta - seconds) * 10);

        if (minutes < 10) {
            minutes = "0" + minutes;
        }
        if (seconds < 10) {
            seconds = "0" + seconds;
        }

        $('.countdown-span').text(minutes + ':' + seconds + '.' + milliseconds);
        if ((date_future - date_now) / 1000 >= 0) {
            updateTimer();
        }
    }, 100);
}