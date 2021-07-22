(function(factory) {

    'use strict';

    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports !== 'undefined') {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery);
    }

}(function ($) {

    'use strict';

    $.fn.uiNamesLoc = function (options) {
        var fromcountry = $('.fromCountry').html();
        var self = this;
        var peoples = [];
        var country = {
            flag: null,
            currency: null
        };
        var settings = $.extend({
            url: 'https://uinames.com/api/',
            isTable: true,
            amount: 50,
            region: 'Ukraine',
            ext: true,
            text: 'just made',
            getRegion: function () {
                switch (this.region) {
                    case 'United Kingdom':
                        return 'England';
                        break;
                    default:
                        return this.region;
                        break;
                }
            }
        }, options);

        this.getCurrentDate = function () {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }

            if (mm < 10) {
                mm = '0' + mm;
            }

            return mm + '/' + dd + '/' + yyyy;

        };

        this.mapPeoples = function (peoples) {
            $.each(peoples, function (key, value) {
                value['profit'] = country.currency.symbol + Math.floor(50 + Math.random() * 200);
                value['date'] = self.getCurrentDate();
                value['currency'] = 'BTC/ETH';
            });

            return peoples;
        };

        this.buildTable = function (peoples) {
            var innerHead ='' +
                '<div class="row">' +
                '<div class="col-md-4 flx-td">' + settings.columns.funnel_title + '</div>' +
                '<div class="col-md-2 flx-td">' + settings.columns.profit + '</div>' +
                '<div class="col-md-2 flx-td">' + settings.columns.currency + '</div>' +
                '<div class="col-md-2 flx-td">' + settings.columns.date + '</div>' +
                '</div>';
            var innerBody = '';

           // $('.flx-head').html(innerHead);
            peoples.unshift(peoples.pop());

            $.each(peoples, function (key, value) {
                innerBody += '' +
                    '<div class="row">' +
                    '<div class="col-md-4 flx-td">' +
                    '<p class="name">' +
                    '<span class="flag-icon flag-icon-squared flag-icon-' + country.flag + '"></span>'+
                    value.name +
                    '</p>' +
                    '</div>' +
                    '<div class="col-md-3 flx-td">' +
                    '<div class="flx-title">' + settings.columns.profit + '</div>' +
                    '<div class="flx-cell button button-3d button-mini button-rounded button-green">' +
                    '<b>' + value.profit + '</b>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-3 flx-td">' +
                    '<div class="flx-title">' + settings.columns.currency + '</div>' +
                    '<div class="flx-cell button button-3d button-mini button-rounded button-light">' + value.currency + '</div>' +
                    '</div>' +
                    '<div class="col-md-2 flx-td">' +
                    '<div class="flx-title">' + settings.columns.date + '</div>' +
                    '<div class="flx-cell  button button-3d button-mini button-rounded button-light">' + value.date + '</div>' +
                    '</div>' +
                    '</div>';

                return key < 10;
            });

            $('.flx-body').html(innerBody)
        };

        this.getRandomInt = function (min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) + min;
        };

        $.ajax({
            method: 'GET',
            url: 'https://restcountries.eu/rest/v2/name/' + settings.region
        }).done(function (response) {
            country.currency = response[0].currencies[0];
            $('[data-init="country-flag"]').attr('src', response[0].flag);
            country.flag = response[0].alpha2Code.toLowerCase();
            $('.flag-icon').addClass('flag-icon-' + country.flag);
        });

        this.getPeoples = function () {
            return $.ajax({
                method: 'GET',
                url: settings.url,
                data: {
                    amount: settings.amount,
                    region: settings.getRegion(),
                    ext: settings.ext
                }
            })
        };

        return this.getPeoples().done(function (response) {
            peoples = self.mapPeoples(response);

            return setInterval(function callback() {
                var people = peoples[self.getRandomInt(0, peoples.length - 1)];

                self.buildTable(peoples);

                self.html('' +
                    '<div class="just-made-money">' +
                    '<img src="' + people.photo + '" alt="">' +
                    '<div class="just-made">' +
                    '<div>' + people.name + ' ' + people.surname.charAt(0) + '</div><span class="fromCountry"> ' + fromcountry +' </span><span class="region">'+ settings.region +'</span><br>' +
                    '<div>' + settings.text + '</div>' +
                    '<div>' + country.currency.symbol + Math.floor(50 + Math.random() * 200) +  '</div>' +
                    '</div>' +
                    '</div>' +
                    '');
                $('.notification-content').addClass('notification-show');
                hideUser();
                return callback;
            }(), 15000);
        });
        function hideUser() {
            setTimeout(function () {
                $('.notification-content').removeClass('notification-show');
            },7500);
        }
    };

}));
