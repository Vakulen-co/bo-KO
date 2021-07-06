// /***/
// // date
// var date = new Date();
// var year = date.getFullYear();
// var month = date.getMonth() + 1;
//
// if (month < 10) {
//     month = "0" + month
// }
// var day = date.getDate();
// var dateNow = day + '/' + month + '/' + year;
// var dateString = $('.date');
//
// // $('.date').text(dateNow);
// for (var i = 0; i < dateString.length; i++) {
//     $(dateString[i]).text(dateNow)
// }
//
// console.log(day + '/' + month + '/' + year);
//
// // time now
// var hoursNow = date.getHours();
// var minNaw = date.getMinutes();
// if (minNaw < 10) {
//     minNaw = "0" + minNaw
// }
// var fullTime = hoursNow + ":" + minNaw
// $('.time').text(fullTime)
// console.log(hoursNow + ":" + minNaw);
//
// /*!*!*/

/***/
/*var sum = $('.sum')
for (var i = 0; i < sum.length; i++) {
    var runSum = Math.random() * (3000 - 19990) + 19990;
    $(sum[i]).text(Math.round(runSum))
}*/
/*!*!*/

/***/
$('.scroll-form-btn , .scroll-form').click(function() {
    $('html').animate({
        scrollTop: $(".section-1 .action-form").offset().top
    }, 1000);
})
/*!*!*/

/***/
// function addVisitorModule() {
//     var countryArr = ['AD', 'AL', 'AT', 'AU', 'BA', 'BE', 'BG', 'BY', 'CA', 'CH', 'CZ', 'DE', 'DK', 'EE', 'FI', 'GB', 'HR', 'HU', 'IE', 'IT', 'LI', 'LS', 'LT', 'LU', 'LV', 'MC', 'MD', 'ME', 'MK', 'NL', 'NO', 'NZ', 'PL', 'PT', 'RO', 'RS', 'RU', 'SE', 'SK', 'SL', 'SM', 'UA', 'USA', 'ZA', 'HK', 'SG', 'GR', 'TR'];
//     var region;
//     var isoCode;
//     $.getJSON("/geo", function(data) {
//         region = data.country;
//         $('.country_name').text(region);
//         // console.log('haveRagion = '+region);
//         isoCode = data.country_code;
//         // console.log('haveIso = '+isoCode);
//         addFlag();
//     });

//     // по коду страны подставляем флаг
//     function addFlag() {
//         $('[data-init="country-flag"]').each(function() {
//             var obj = $(this);
//             if (isoCode == undefined || isoCode == null || isoCode == "" || countryArr.indexOf(isoCode) == -1) {
//                 isoCode = "EM";
//                 $('.country_name').text("your country");
//             }
//             var imgurl = 'images/flags/' + isoCode + '.png';
//             obj.attr('src', imgurl);
//             obj.load();
//         });
//     };
// }


// $(document).ready(function() {
//     addVisitorModule();
// })

/*!*!*/

var currentdateTime = new Date();
// var deltaDate = new Date();
// var startTime = new Date();
// var endTime = new Date();
// var startTimeFormatedD = formatDatesD(startTime);
// var startTimeFormatedT = formatDatesT(startTime);
// deltaDate.setDate(deltaDate.getDate());

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}

function randomDate(start, end) {
    return new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
}


function formatDatesD(currentdate) {
    var addZero = function(i) {
        return i < 10 ? i = "0" + i : i;
    }

    return addZero(currentdate.getDate()) + "/" +
        addZero(currentdate.getMonth()) + "/" +
        currentdate.getFullYear();
}

function formatDatesT(currentdate) {
    var addZero = function(i) {
        return i < 10 ? i = "0" + i : i;
    }

    return addZero(addZero(currentdate.getHours()) + ":" +
        addZero(currentdate.getMinutes()));
}

// var nowDateStringT = formatDatesT(currentdateTime);
// var nowDateStringD = formatDatesD(currentdateTime);

//Set start date


$('.group-time .date').each(function(index) {
    var addZero = function(i) {
        return i < 10 ? i = "0" + i : i;
    }

    var Sdate = new Date();
    Sdate.setDate((Sdate.getDate()) - index);

    /*if (index < 3) {
        Sdate.setDate( (Sdate.getDate() + 31) + index);
    }
    if (index >= 5) {
        Sdate.setDate( (Sdate.getDate() - 31) - index);
    }*/


    if (Sdate.getMonth() == 0) {
        $(this).empty().text(((addZero(Sdate.getDate())) + '/' + addZero(Sdate.getMonth() + 1) + '/' + addZero(Sdate.getFullYear())));
    } else if (Sdate.getDate() >= 29) {
        $(this).empty().text(((addZero(Sdate.getDate() - 4)) + '/' + addZero(Sdate.getMonth() + 1) + '/' + addZero(Sdate.getFullYear())));
    } else {
        $(this).empty().text(((addZero(Sdate.getDate())) + '/' + addZero(Sdate.getMonth()) + '/' + addZero(Sdate.getFullYear())));
    }


});

$('.group-time .time').each(function(index) {

    endTime = new Date(currentdateTime.getTime());
    endTime.setMinutes(endTime.getMinutes() - getRandomInt(15, 50));

    $(this).empty().text(formatDatesT(endTime));
});