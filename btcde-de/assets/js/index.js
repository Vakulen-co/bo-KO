$(function() {
    var windowWidth = window.innerWidth;
    let personsArray;
    let currencySymbol;

    let personImg = $('.dynamic-person-img');
    let personSum = $('.dynamic-person-sum-span');
    let dollarShake = $('.dollar-shake');

    let today = new Date();
    let dd = today.getDate();
    let mm = today.getMonth() + 1; //January is 0!
    let yyyy = today.getFullYear();
    let todaysDate = dd + '/' + mm + '/' + yyyy;
    let tomorrowsDate = dd + "/" + mm + '/' + yyyy;

    $('.trade-time-td').text(todaysDate);
    $('.tomorrow-date').text(tomorrowsDate);

    if (windowWidth <= 575) {
        $(".join-us-img").appendTo('.join-us-section');
    }



    function initDynamicPersonDiv(personsArray) {
        let personName = $('.dynamic-person-name-span');
        let randomIndex = Math.floor(Math.random() * 24) + 1;
        let randomSum = Math.floor(Math.random() * 500) + 100;
        let randomPersonObj = personsArray[randomIndex];
        personImg.attr('src', randomPersonObj.photo);
        personName.text(randomPersonObj.name + " " + randomPersonObj.surname[0] + ".");
        personSum.text(randomSum.toString());
        personImg.addClass('shake');
        personSum.addClass('shake');
        dollarShake.addClass('shake');

        setTimeout(function() {
            personImg.removeClass('shake');
            personSum.removeClass('shake');
            dollarShake.removeClass('shake');
        }, 1000);

        setTimeout(function() {
            initDynamicPersonDiv(personsArray);
        }, 5000);
    }

    function initLiveResults(personsArray) {
        let currencySymbol2 = $('.currency--table-hide').text();
        if (currencySymbol2 == false || currencySymbol2 == null || currencySymbol2 == undefined || currencySymbol2 == '') {
            $('.currency--table-hide').text('$');
        }
        let currenciesArray = ["LTC/EOS", "ETH/LTC", "BTC/ETH", "EOS/ETH"];
        let personsNamesArray = [];
        personsArray.forEach(function(personObj) {
            personsNamesArray.push(personObj.name + " " + personObj.surname + ".");
        });
        let randomNameIndex = Math.floor(Math.random() * 24) + 1;
        let randomCurrencyIndex = Math.floor(Math.random() * 3) + 1;
        let randomSum = Math.floor(Math.random() * 1000) + 300;
        let randomPersonName = personsNamesArray[randomNameIndex];
        let randomCurrency = currenciesArray[randomCurrencyIndex];
        let allTrs = $('.tbody').children();
        let lastTr = $(allTrs[allTrs.length - 1]);
        let preLastTr = $(allTrs[allTrs.length - 2]);
        let td1 = '<td class="bold">' + randomPersonName + "</td";
        let td2 = '<td class="bold">' + '<span class="currency">' + currencySymbol2 + '</span>' + randomSum + "</td>";
        let td3 = '<td class="trade-time-td padding-left-td">' + todaysDate + "</td>";
        let td4 = '<td>' + randomCurrency + '</td>';
        let td5 = '<td><img src="assets/images/tick.png" alt="tick"></td>';
        let newTr = $('<tr/>');
        newTr.append(td1);
        newTr.append(td2);
        newTr.append(td3);
        newTr.append(td4);
        newTr.append(td5);
        $('.tbody').prepend(newTr);
        lastTr.remove();
        preLastTr.children('td').addClass('last-td');

        setTimeout(function() {
            initLiveResults(personsArray);
        }, 4000);
    }

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

    $.ajax({
        type: 'GET',
        url: 'https://ipinfo.io',
        success: function(response) {
            response = JSON.parse(response)
            let visitorCountry = (response && response.country_code) ? response.country_code : "";
            let countryIsoCode = response.iso_code;
            let video = $('.video');
            let countrySpan = $('.country-name-span');
            countrySpan.text(response.country);
            switch (response.country_code) {
                case 'GB':
                    currencySymbol = '£';
                    break;
                case 'AT':
                    currencySymbol = '€';
                    break;
                case 'DE':
                    currencySymbol = '€';
                    break;
                case 'CH':
                    currencySymbol = '€';
                    break;
                case 'NL':
                    currencySymbol = '€';
                    break;
                case 'FR':
                    currencySymbol = '€';
                    break;
                case 'ES':
                    currencySymbol = '€';
                    break;
                case 'IT':
                    currencySymbol = '€';
                    break;
                case 'SE':
                    currencySymbol = '€';
                    break;
                case 'DK':
                    currencySymbol = '€';
                    break;
                case 'NO':
                    currencySymbol = '€';
                    break;
                case 'FI':
                    currencySymbol = '€';
                    break;
                case 'FL':
                    currencySymbol = '€';
                    break;
                default:
                    currencySymbol = '$';
                    break;
            }

            switch (countryIsoCode) {
                case 'pm':
                    countryIsoCode = "fr";
                    break;
                case 'fo':
                    countryIsoCode = "dk";
                    break;
                case 'bo':
                    countryIsoCode = "es";
                    break;
                case 'ec':
                    countryIsoCode = "es";
                    break;
                case 'do':
                    countryIsoCode = "es";
                    break;
                case 'sv':
                    countryIsoCode = "es";
                    break;
                case 'cu':
                    countryIsoCode = "es";
                    break;
            }

            switch (countryIsoCode) {
                case 'dk':
                    video.append($('<track kind="subtitles" srclang="dk" src="media/Danish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'de':
                    video.append($('<track kind="subtitles" srclang="de" src="media/German - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'ch':
                    video.append($('<track kind="subtitles" srclang="de" src="media/German - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'at':
                    video.append($('<track kind="subtitles" srclang="de" src="media/German - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'it':
                    video.append($('<track kind="subtitles" srclang="it" src="media/Italian - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'no':
                    video.append($('<track kind="subtitles" srclang="no" src="media/Norwegian - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'se':
                    video.append($('<track kind="subtitles" srclang="se" src="media/Swedish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'nl':
                    video.append($('<track kind="subtitles" srclang="nl" src="media/Dutch - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'es':
                    video.append($('<track kind="subtitles" srclang="es" src="media/Spanish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'ar':
                    video.append($('<track kind="subtitles" srclang="es" src="media/Spanish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'cl':
                    video.append($('<track kind="subtitles" srclang="es" src="media/Spanish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'mx':
                    video.append($('<track kind="subtitles" srclang="es" src="media/Spanish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'pa':
                    video.append($('<track kind="subtitles" srclang="es" src="media/Spanish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'pe':
                    video.append($('<track kind="subtitles" srclang="es" src="media/Spanish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'pr':
                    video.append($('<track kind="subtitles" srclang="es" src="media/Spanish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'cr':
                    video.append($('<track kind="subtitles" srclang="es" src="media/Spanish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'co':
                    video.append($('<track kind="subtitles" srclang="es" src="media/Spanish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
                case 'pl':
                    video.append($('<track kind="subtitles" srclang="pl" src="media/Polish - Bitcoin Quotes By Famous People.vtt" default>'));
                    break;
            }

            var uinamesRegions = ["albania", "argentina", "armenia", "australia", "austria", "azerbaijan", "bangladesh", "belgium", "bosnia and herzegovina", "brazil", "bulgaria", "canada", "china", "colombia", "costa rica", "croatia", "czech republic", "denmark", "egypt", "england", "estonia", "finland", "france", "georgia", "germany", "greece", "hungary", "india", "indonesia", "iran", "ireland", "israel", "italy", "japan", "korea", "kyrgyz republic", "mexico", "morocco", "nepal", "netherlands", "new zealand", "nigeria", "norway", "pakistan", "poland", "portugal", "romania", "russia", "saudi arabia", "slovakia", "slovenia", "spain", "sweden", "switzerland", "tunisia", "turkey", "ukraine", "united states", "vietnam"];
            if (!uinamesRegions.includes(visitorCountry)) {
                visitorCountry = "germany";
            }

            $.ajax({
                url: "https://uinames.com/api/?amount=25&region=" + visitorCountry + "&ext",
                method: "GET",
                dataType: "json",
                success: function(response) {
                    initDynamicPersonDiv(response);
                    initLiveResults(response);
                }
            });
        }
    });

    initCountdown();

    $('.scroll-top-btn').on('click', function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".formHeader").offset().top
        }, 1000);
    });
});