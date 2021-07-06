$(document).ready(function () {
    // if (localStorage) {
    //     if (localStorage.getItem('cookie-policy')) {
    //         $('.cookie-policy').removeClass('active');
    //     }
    // }
    var allCountries = [
        [
            "Afghanistan (‫افغانستان‬‎)",
            "af",
            "93"
        ],
        [
            "Albania (Shqipëri)",
            "al",
            "355"
        ],
        [
            "Algeria (‫الجزائر‬‎)",
            "dz",
            "213"
        ],
        [
            "American Samoa",
            "as",
            "1",
            5,
            ["684"]
        ],
        [
            "Andorra",
            "ad",
            "376"
        ],
        [
            "Angola",
            "ao",
            "244"
        ],
        [
            "Anguilla",
            "ai",
            "1",
            6,
            ["264"]
        ],
        [
            "Antigua and Barbuda",
            "ag",
            "1",
            7,
            ["268"]
        ],
        [
            "Argentina",
            "ar",
            "54"
        ],
        [
            "Armenia (Հայաստան)",
            "am",
            "374"
        ],
        [
            "Aruba",
            "aw",
            "297"
        ],
        [
            "Australia",
            "au",
            "61",
            0
        ],
        [
            "Austria (Österreich)",
            "at",
            "43"
        ],
        [
            "Azerbaijan (Azərbaycan)",
            "az",
            "994"
        ],
        [
            "Bahamas",
            "bs",
            "1",
            8,
            ["242"]
        ],
        [
            "Bahrain (‫البحرين‬‎)",
            "bh",
            "973"
        ],
        [
            "Bangladesh (বাংলাদেশ)",
            "bd",
            "880"
        ],
        [
            "Barbados",
            "bb",
            "1",
            9,
            ["246"]
        ],
        [
            "Belarus (Беларусь)",
            "by",
            "375"
        ],
        [
            "Belgium (België)",
            "be",
            "32"
        ],
        [
            "Belize",
            "bz",
            "501"
        ],
        [
            "Benin (Bénin)",
            "bj",
            "229"
        ],
        [
            "Bermuda",
            "bm",
            "1",
            10,
            ["441"]
        ],
        [
            "Bhutan (འབྲུག)",
            "bt",
            "975"
        ],
        [
            "Bolivia",
            "bo",
            "591"
        ],
        [
            "Bosnia and Herzegovina (Босна и Херцеговина)",
            "ba",
            "387"
        ],
        [
            "Botswana",
            "bw",
            "267"
        ],
        [
            "Brazil (Brasil)",
            "br",
            "55"
        ],
        [
            "British Indian Ocean Territory",
            "io",
            "246"
        ],
        [
            "British Virgin Islands",
            "vg",
            "1",
            11,
            ["284"]
        ],
        [
            "Brunei",
            "bn",
            "673"
        ],
        [
            "Bulgaria (България)",
            "bg",
            "359"
        ],
        [
            "Burkina Faso",
            "bf",
            "226"
        ],
        [
            "Burundi (Uburundi)",
            "bi",
            "257"
        ],
        [
            "Cambodia (កម្ពុជា)",
            "kh",
            "855"
        ],
        [
            "Cameroon (Cameroun)",
            "cm",
            "237"
        ],
        [
            "Canada",
            "ca",
            "1",
            1,
            ["204", "226", "236", "249", "250", "289", "306", "343", "365", "387", "403", "416", "418", "431", "437", "438", "450", "506", "514", "519", "548", "579", "581", "587", "604", "613", "639", "647", "672", "705", "709", "742", "778", "780", "782", "807", "819", "825", "867", "873", "902", "905"]
        ],
        [
            "Cape Verde (Kabu Verdi)",
            "cv",
            "238"
        ],
        [
            "Caribbean Netherlands",
            "bq",
            "599",
            1,
            ["3", "4", "7"]
        ],
        [
            "Cayman Islands",
            "ky",
            "1",
            12,
            ["345"]
        ],
        [
            "Central African Republic (République centrafricaine)",
            "cf",
            "236"
        ],
        [
            "Chad (Tchad)",
            "td",
            "235"
        ],
        [
            "Chile",
            "cl",
            "56"
        ],
        [
            "China (中国)",
            "cn",
            "86"
        ],
        [
            "Christmas Island",
            "cx",
            "61",
            2
        ],
        [
            "Cocos (Keeling) Islands",
            "cc",
            "61",
            1
        ],
        [
            "Colombia",
            "co",
            "57"
        ],
        [
            "Comoros (‫جزر القمر‬‎)",
            "km",
            "269"
        ],
        [
            "Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)",
            "cd",
            "243"
        ],
        [
            "Congo (Republic) (Congo-Brazzaville)",
            "cg",
            "242"
        ],
        [
            "Cook Islands",
            "ck",
            "682"
        ],
        [
            "Costa Rica",
            "cr",
            "506"
        ],
        [
            "Côte d’Ivoire",
            "ci",
            "225"
        ],
        [
            "Croatia (Hrvatska)",
            "hr",
            "385"
        ],
        [
            "Cuba",
            "cu",
            "53"
        ],
        [
            "Curaçao",
            "cw",
            "599",
            0
        ],
        [
            "Cyprus (Κύπρος)",
            "cy",
            "357"
        ],
        [
            "Czech Republic (Česká republika)",
            "cz",
            "420"
        ],
        [
            "Denmark (Danmark)",
            "dk",
            "45"
        ],
        [
            "Djibouti",
            "dj",
            "253"
        ],
        [
            "Dominica",
            "dm",
            "1",
            13,
            ["767"]
        ],
        [
            "Dominican Republic (República Dominicana)",
            "do",
            "1",
            2,
            ["809", "829", "849"]
        ],
        [
            "Ecuador",
            "ec",
            "593"
        ],
        [
            "Egypt (‫مصر‬‎)",
            "eg",
            "20"
        ],
        [
            "El Salvador",
            "sv",
            "503"
        ],
        [
            "Equatorial Guinea (Guinea Ecuatorial)",
            "gq",
            "240"
        ],
        [
            "Eritrea",
            "er",
            "291"
        ],
        [
            "Estonia (Eesti)",
            "ee",
            "372"
        ],
        [
            "Ethiopia",
            "et",
            "251"
        ],
        [
            "Falkland Islands (Islas Malvinas)",
            "fk",
            "500"
        ],
        [
            "Faroe Islands (Føroyar)",
            "fo",
            "298"
        ],
        [
            "Fiji",
            "fj",
            "679"
        ],
        [
            "Finland (Suomi)",
            "fi",
            "358",
            0
        ],
        [
            "France",
            "fr",
            "33"
        ],
        [
            "French Guiana (Guyane française)",
            "gf",
            "594"
        ],
        [
            "French Polynesia (Polynésie française)",
            "pf",
            "689"
        ],
        [
            "Gabon",
            "ga",
            "241"
        ],
        [
            "Gambia",
            "gm",
            "220"
        ],
        [
            "Georgia (საქართველო)",
            "ge",
            "995"
        ],
        [
            "Germany (Deutschland)",
            "de",
            "49"
        ],
        [
            "Ghana (Gaana)",
            "gh",
            "233"
        ],
        [
            "Gibraltar",
            "gi",
            "350"
        ],
        [
            "Greece (Ελλάδα)",
            "gr",
            "30"
        ],
        [
            "Greenland (Kalaallit Nunaat)",
            "gl",
            "299"
        ],
        [
            "Grenada",
            "gd",
            "1",
            14,
            ["473"]
        ],
        [
            "Guadeloupe",
            "gp",
            "590",
            0
        ],
        [
            "Guam",
            "gu",
            "1",
            15,
            ["671"]
        ],
        [
            "Guatemala",
            "gt",
            "502"
        ],
        [
            "Guernsey",
            "gg",
            "44",
            1,
            ["1481", "7781", "7839", "7911"]
        ],
        [
            "Guinea (Guinée)",
            "gn",
            "224"
        ],
        [
            "Guinea-Bissau (Guiné Bissau)",
            "gw",
            "245"
        ],
        [
            "Guyana",
            "gy",
            "592"
        ],
        [
            "Haiti",
            "ht",
            "509"
        ],
        [
            "Honduras",
            "hn",
            "504"
        ],
        [
            "Hong Kong (香港)",
            "hk",
            "852"
        ],
        [
            "Hungary (Magyarország)",
            "hu",
            "36"
        ],
        [
            "Iceland (Ísland)",
            "is",
            "354"
        ],
        [
            "India (भारत)",
            "in",
            "91"
        ],
        [
            "Indonesia",
            "id",
            "62"
        ],
        [
            "Iran (‫ایران‬‎)",
            "ir",
            "98"
        ],
        [
            "Iraq (‫العراق‬‎)",
            "iq",
            "964"
        ],
        [
            "Ireland",
            "ie",
            "353"
        ],
        [
            "Isle of Man",
            "im",
            "44",
            2,
            ["1624", "74576", "7524", "7924", "7624"]
        ],
        [
            "Israel (‫ישראל‬‎)",
            "il",
            "972"
        ],
        [
            "Italy (Italia)",
            "it",
            "39",
            0
        ],
        [
            "Jamaica",
            "jm",
            "1",
            4,
            ["876", "658"]
        ],
        [
            "Japan (日本)",
            "jp",
            "81"
        ],
        [
            "Jersey",
            "je",
            "44",
            3,
            ["1534", "7509", "7700", "7797", "7829", "7937"]
        ],
        [
            "Jordan (‫الأردن‬‎)",
            "jo",
            "962"
        ],
        [
            "Kazakhstan (Казахстан)",
            "kz",
            "7",
            1,
            ["33", "7"]
        ],
        [
            "Kenya",
            "ke",
            "254"
        ],
        [
            "Kiribati",
            "ki",
            "686"
        ],
        [
            "Kosovo",
            "xk",
            "383"
        ],
        [
            "Kuwait (‫الكويت‬‎)",
            "kw",
            "965"
        ],
        [
            "Kyrgyzstan (Кыргызстан)",
            "kg",
            "996"
        ],
        [
            "Laos (ລາວ)",
            "la",
            "856"
        ],
        [
            "Latvia (Latvija)",
            "lv",
            "371"
        ],
        [
            "Lebanon (‫لبنان‬‎)",
            "lb",
            "961"
        ],
        [
            "Lesotho",
            "ls",
            "266"
        ],
        [
            "Liberia",
            "lr",
            "231"
        ],
        [
            "Libya (‫ليبيا‬‎)",
            "ly",
            "218"
        ],
        [
            "Liechtenstein",
            "li",
            "423"
        ],
        [
            "Lithuania (Lietuva)",
            "lt",
            "370"
        ],
        [
            "Luxembourg",
            "lu",
            "352"
        ],
        [
            "Macau (澳門)",
            "mo",
            "853"
        ],
        [
            "Macedonia (FYROM) (Македонија)",
            "mk",
            "389"
        ],
        [
            "Madagascar (Madagasikara)",
            "mg",
            "261"
        ],
        [
            "Malawi",
            "mw",
            "265"
        ],
        [
            "Malaysia",
            "my",
            "60"
        ],
        [
            "Maldives",
            "mv",
            "960"
        ],
        [
            "Mali",
            "ml",
            "223"
        ],
        [
            "Malta",
            "mt",
            "356"
        ],
        [
            "Marshall Islands",
            "mh",
            "692"
        ],
        [
            "Martinique",
            "mq",
            "596"
        ],
        [
            "Mauritania (‫موريتانيا‬‎)",
            "mr",
            "222"
        ],
        [
            "Mauritius (Moris)",
            "mu",
            "230"
        ],
        [
            "Mayotte",
            "yt",
            "262",
            1,
            ["269", "639"]
        ],
        [
            "Mexico (México)",
            "mx",
            "52"
        ],
        [
            "Micronesia",
            "fm",
            "691"
        ],
        [
            "Moldova (Republica Moldova)",
            "md",
            "373"
        ],
        [
            "Monaco",
            "mc",
            "377"
        ],
        [
            "Mongolia (Монгол)",
            "mn",
            "976"
        ],
        [
            "Montenegro (Crna Gora)",
            "me",
            "382"
        ],
        [
            "Montserrat",
            "ms",
            "1",
            16,
            ["664"]
        ],
        [
            "Morocco (‫المغرب‬‎)",
            "ma",
            "212",
            0
        ],
        [
            "Mozambique (Moçambique)",
            "mz",
            "258"
        ],
        [
            "Myanmar (Burma) (မြန်မာ)",
            "mm",
            "95"
        ],
        [
            "Namibia (Namibië)",
            "na",
            "264"
        ],
        [
            "Nauru",
            "nr",
            "674"
        ],
        [
            "Nepal (नेपाल)",
            "np",
            "977"
        ],
        [
            "Netherlands (Nederland)",
            "nl",
            "31"
        ],
        [
            "New Caledonia (Nouvelle-Calédonie)",
            "nc",
            "687"
        ],
        [
            "New Zealand",
            "nz",
            "64"
        ],
        [
            "Nicaragua",
            "ni",
            "505"
        ],
        [
            "Niger (Nijar)",
            "ne",
            "227"
        ],
        [
            "Nigeria",
            "ng",
            "234"
        ],
        [
            "Niue",
            "nu",
            "683"
        ],
        [
            "Norfolk Island",
            "nf",
            "672"
        ],
        [
            "North Korea (조선 민주주의 인민 공화국)",
            "kp",
            "850"
        ],
        [
            "Northern Mariana Islands",
            "mp",
            "1",
            17,
            ["670"]
        ],
        [
            "Norway (Norge)",
            "no",
            "47",
            0
        ],
        [
            "Oman (‫عُمان‬‎)",
            "om",
            "968"
        ],
        [
            "Pakistan (‫پاکستان‬‎)",
            "pk",
            "92"
        ],
        [
            "Palau",
            "pw",
            "680"
        ],
        [
            "Palestine (‫فلسطين‬‎)",
            "ps",
            "970"
        ],
        [
            "Panama (Panamá)",
            "pa",
            "507"
        ],
        [
            "Papua New Guinea",
            "pg",
            "675"
        ],
        [
            "Paraguay",
            "py",
            "595"
        ],
        [
            "Peru (Perú)",
            "pe",
            "51"
        ],
        [
            "Philippines",
            "ph",
            "63"
        ],
        [
            "Poland (Polska)",
            "pl",
            "48"
        ],
        [
            "Portugal",
            "pt",
            "351"
        ],
        [
            "Puerto Rico",
            "pr",
            "1",
            3,
            ["787", "939"]
        ],
        [
            "Qatar (‫قطر‬‎)",
            "qa",
            "974"
        ],
        [
            "Réunion (La Réunion)",
            "re",
            "262",
            0
        ],
        [
            "Romania (România)",
            "ro",
            "40"
        ],
        [
            "Russia (Россия)",
            "ru",
            "7",
            0
        ],
        [
            "Rwanda",
            "rw",
            "250"
        ],
        [
            "Saint Barthélemy",
            "bl",
            "590",
            1
        ],
        [
            "Saint Helena",
            "sh",
            "290"
        ],
        [
            "Saint Kitts and Nevis",
            "kn",
            "1",
            18,
            ["869"]
        ],
        [
            "Saint Lucia",
            "lc",
            "1",
            19,
            ["758"]
        ],
        [
            "Saint Martin (Saint-Martin (partie française))",
            "mf",
            "590",
            2
        ],
        [
            "Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)",
            "pm",
            "508"
        ],
        [
            "Saint Vincent and the Grenadines",
            "vc",
            "1",
            20,
            ["784"]
        ],
        [
            "Samoa",
            "ws",
            "685"
        ],
        [
            "San Marino",
            "sm",
            "378"
        ],
        [
            "São Tomé and Príncipe (São Tomé e Príncipe)",
            "st",
            "239"
        ],
        [
            "Saudi Arabia (‫المملكة العربية السعودية‬‎)",
            "sa",
            "966"
        ],
        [
            "Senegal (Sénégal)",
            "sn",
            "221"
        ],
        [
            "Serbia (Србија)",
            "rs",
            "381"
        ],
        [
            "Seychelles",
            "sc",
            "248"
        ],
        [
            "Sierra Leone",
            "sl",
            "232"
        ],
        [
            "Singapore",
            "sg",
            "65"
        ],
        [
            "Sint Maarten",
            "sx",
            "1",
            21,
            ["721"]
        ],
        [
            "Slovakia (Slovensko)",
            "sk",
            "421"
        ],
        [
            "Slovenia (Slovenija)",
            "si",
            "386"
        ],
        [
            "Solomon Islands",
            "sb",
            "677"
        ],
        [
            "Somalia (Soomaaliya)",
            "so",
            "252"
        ],
        [
            "South Africa",
            "za",
            "27"
        ],
        [
            "South Korea (대한민국)",
            "kr",
            "82"
        ],
        [
            "South Sudan (‫جنوب السودان‬‎)",
            "ss",
            "211"
        ],
        [
            "Spain (España)",
            "es",
            "34"
        ],
        [
            "Sri Lanka (ශ්‍රී ලංකාව)",
            "lk",
            "94"
        ],
        [
            "Sudan (‫السودان‬‎)",
            "sd",
            "249"
        ],
        [
            "Suriname",
            "sr",
            "597"
        ],
        [
            "Svalbard and Jan Mayen",
            "sj",
            "47",
            1,
            ["79"]
        ],
        [
            "Swaziland",
            "sz",
            "268"
        ],
        [
            "Sweden (Sverige)",
            "se",
            "46"
        ],
        [
            "Switzerland (Schweiz)",
            "ch",
            "41"
        ],
        [
            "Syria (‫سوريا‬‎)",
            "sy",
            "963"
        ],
        [
            "Taiwan (台灣)",
            "tw",
            "886"
        ],
        [
            "Tajikistan",
            "tj",
            "992"
        ],
        [
            "Tanzania",
            "tz",
            "255"
        ],
        [
            "Thailand (ไทย)",
            "th",
            "66"
        ],
        [
            "Timor-Leste",
            "tl",
            "670"
        ],
        [
            "Togo",
            "tg",
            "228"
        ],
        [
            "Tokelau",
            "tk",
            "690"
        ],
        [
            "Tonga",
            "to",
            "676"
        ],
        [
            "Trinidad and Tobago",
            "tt",
            "1",
            22,
            ["868"]
        ],
        [
            "Tunisia (‫تونس‬‎)",
            "tn",
            "216"
        ],
        [
            "Turkey (Türkiye)",
            "tr",
            "90"
        ],
        [
            "Turkmenistan",
            "tm",
            "993"
        ],
        [
            "Turks and Caicos Islands",
            "tc",
            "1",
            23,
            ["649"]
        ],
        [
            "Tuvalu",
            "tv",
            "688"
        ],
        [
            "U.S. Virgin Islands",
            "vi",
            "1",
            24,
            ["340"]
        ],
        [
            "Uganda",
            "ug",
            "256"
        ],
        [
            "Ukraine (Україна)",
            "ua",
            "380"
        ],
        [
            "United Arab Emirates (‫الإمارات العربية المتحدة‬‎)",
            "ae",
            "971"
        ],
        [
            "United Kingdom",
            "gb",
            "44",
            0
        ],
        [
            "United States",
            "us",
            "1",
            0
        ],
        [
            "Uruguay",
            "uy",
            "598"
        ],
        [
            "Uzbekistan (Oʻzbekiston)",
            "uz",
            "998"
        ],
        [
            "Vanuatu",
            "vu",
            "678"
        ],
        [
            "Vatican City (Città del Vaticano)",
            "va",
            "39",
            1,
            ["06698"]
        ],
        [
            "Venezuela",
            "ve",
            "58"
        ],
        [
            "Vietnam (Việt Nam)",
            "vn",
            "84"
        ],
        [
            "Wallis and Futuna (Wallis-et-Futuna)",
            "wf",
            "681"
        ],
        [
            "Western Sahara (‫الصحراء الغربية‬‎)",
            "eh",
            "212",
            1,
            ["5288", "5289"]
        ],
        [
            "Yemen (‫اليمن‬‎)",
            "ye",
            "967"
        ],
        [
            "Zambia",
            "zm",
            "260"
        ],
        [
            "Zimbabwe",
            "zw",
            "263"
        ],
        [
            "Åland Islands",
            "ax",
            "358",
            1,
            ["18"]
        ]
    ];

    function getCounty(countryCode) {
        for (var i = 0; i < allCountries.length; i++) {
            if (allCountries[i][1] == countryCode) {
                $('.gtd-geo-country-name').html(allCountries[i][0].split(' ')[0])
            }

        }
    }

    function inetlStart() {
        var inputs = document.querySelectorAll('input[name=phone]');
        var iti = []
        for (var i = 0; i < inputs.length; i++) {
            iti[i] = intlTelInput(inputs[i], {
                utilsScript: "adict/utils.js",
                initialCountry: "auto",
                separateDialCode: true,
                coutryCode: true,
                geoIpLookup: function (success, failure) {
                    $.get("https://ipinfo.io", function () {
                    }, "jsonp").always(function (resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "";
                        getCounty(countryCode.toLowerCase())
                        $('.iti__flag_add').addClass('iti__' + resp.country.toLowerCase())
                        success(countryCode);
                    });
                },
            });
            inputs[i].setAttribute('data-iti', i)
            inputs[i].addEventListener('input', function () {
                var p = ~~this.getAttribute('data-iti');
                if (iti[p].isValidNumber()) {
                    this.classList.remove("err");
                    this.classList.add("valid");
                    $('.phone2').val(iti[p].getNumber())
                } else {
                    this.classList.add("err");
                    this.classList.remove("valid");
                }
            });
        }
    }

    inetlStart();

    $('form button').click(function (e) {
        e.preventDefault();
        if (checkForm($(this))) {
            if ($(this).parents('form').find('input[name=phone]').length) {
                $(this).parents('form').find('input[name=ajax]').length ? '' : $(this).parents('form').append('<input type="hidden" name="ajax" value="1" />')
                $('body').append('<div class="loader-content-wrap"><div class="loader-content">\n' +
                    '    <div class="loader">\n' +
                    '        <div class="loader__bar"></div>\n' +
                    '        <div class="loader__bar"></div>\n' +
                    '        <div class="loader__bar"></div>\n' +
                    '        <div class="loader__bar"></div>\n' +
                    '        <div class="loader__bar"></div>\n' +
                    '        <div class="loader__ball"></div>\n' +
                    '    </div>\n' +
                    '</div></div>\n' +
                    '<center><div class="text">\n' +
                    '        Активация личного аккаунта <br>\n' +
                    '        Пожалуйста, подождите несколько секунд.\n' +
                    '    </div></center>\n')

                getAnswer($(this).parents('form').serialize());
            }else{
                $(this).parents('form').trigger('submit');
            }
        }
    });
    $('form input[type=submit]').click(function (e) {
        e.preventDefault();
        if (checkForm($(this))) {
            if ($(this).parents('form').find('input[name=phone]').length) {
                $(this).parents('form').find('input[name=ajax]').length ? '' : $(this).parents('form').append('<input type="hidden" name="ajax" value="1" />')
                $('body').append('<div class="loader-content-wrap"><div class="loader-content">\n' +
                    '    <div class="loader">\n' +
                    '        <div class="loader__bar"></div>\n' +
                    '        <div class="loader__bar"></div>\n' +
                    '        <div class="loader__bar"></div>\n' +
                    '        <div class="loader__bar"></div>\n' +
                    '        <div class="loader__bar"></div>\n' +
                    '        <div class="loader__ball"></div>\n' +
                    '    </div>\n' +
                    '</div></div>\n' +
                    '<center><div class="text">\n' +
                    '        Активация личного аккаунта <br>\n' +
                    '        Пожалуйста, подождите несколько секунд.\n' +
                    '    </div></center>\n')

                getAnswer($(this).parents('form').serialize());
            }else{
                $(this).parents('form').trigger('submit')
            }

        }
    });

    function getAnswer(data) {
        $.ajax({
            url: 'application.php',
            type: 'get',
            data: data,
            success: function (res) {
                console.log(res.length, res.length > 3, res);
                if (res.length > 3) {
                    if (res.search(/location/) > -1) {
                        var pixel = document.createElement("script");
                        pixel.setAttribute("type", "text/javascript");
                        pixel.innerHTML = res;
                        document.getElementsByTagName("head")[0].appendChild(pixel);
                    } else {
                        setTimeout(function () {
                            getAnswer(data)
                        }, 1000)
                    }
                } else {
                    setTimeout(function () {
                        getAnswer(data)
                    }, 1000)
                }

            },
            error: function (data) {
                setTimeout(function () {
                    getAnswer(data)
                }, 1000)
            }
        })
    }

    var addOnce = true

    function checkAllForms(check) {
        check ? '' : check = 'nope'
        $('form').each(function () {
            addOnce ? $(this).attr('autocomplete', 'on') : '';
            checkForm($(this).find('input'), check);
        })
    }

    checkAllForms();


    $('form input').on('input', function () {
        let name = $(this).attr('name');
        $('input[name=' + name + ']').val($(this).val());
        checkAllForms(name);
    });
    var lang = 'ru';
    var errorsUnswers =
        {
            ru: {
                'f_name': 'Введите Имя',
                'l_name': 'Введите фамилию',
                'email': 'Введите email',
                'phone': 'Введите телефон',
            },
            it: {
                'f_name': 'Inserire nome',
                'l_name': 'Inserire cognome',
                'email': 'Inserire email',
                'phone': 'Inserire numero di telefono',
            },
            en: {
                'f_name': 'Insert name',
                'l_name': 'Insert last name',
                'email': 'Insert email',
                'phone': 'Insert phone number',
            },
        }

    function checkForm(_this, check) {
        var flag = true;
        _this.parents('form').find('input').each(function () {
            addOnce ? $(this).attr('autocomplete', 'on') : '';
            var name = $(this).attr('name');
            if (name == 'f_name') {
                $(this).parent().find('.help-block-error').length ? '' : $(this).parent().append('<div class="help-block help-block-error"></div>')
                if ($(this).val().trim().length < 1) {
                    flag = false;
                    if (check == undefined || check == 'f_name') {
                        $(this).parent().find('.help-block-error').html(errorsUnswers[lang][name]).addClass('block');
                        $(this).removeClass('valid').addClass('err');
                    }
                } else {
                    $(this).parent().find('.help-block-error').html('').removeClass('block');
                    $(this).removeClass('err').addClass('valid');
                }
            }
            if (name == 'l_name') {
                $(this).parent().find('.help-block-error').length ? '' : $(this).parent().append('<div class="help-block help-block-error"></div>')
                if ($(this).val().length < 1) {
                    flag = false;
                    if (check == undefined || check == 'l_name') {
                        console.log($(this).parent().find('.help-block-error'));
                        $(this).parent().find('.help-block-error').html(errorsUnswers[lang][name]).addClass('block');
                        console.log($(this).parent().find('.help-block-error'));

                        $(this).removeClass('valid').addClass('err');
                    }
                } else {
                    $(this).parent().find('.help-block-error').html('').removeClass('block');
                    $(this).removeClass('err').addClass('valid');
                }
            }
            if (name == 'email') {
                $(this).parent().find('.help-block-error').length ? '' : $(this).parent().append('<div class="help-block help-block-error"></div>')
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (!re.test($(this).val().toLowerCase())) {
                    flag = false;
                    if (check == undefined || check == 'email') {
                        $(this).parent().find('.help-block-error').html(errorsUnswers[lang][name]).addClass('block');
                        $(this).removeClass('valid').addClass('err');
                    }
                } else {
                    $(this).parent().find('.help-block-error').html('').removeClass('block');
                    $(this).removeClass('err').addClass('valid');
                }
            }

            if (name == 'phone') {
                $(this).parents('.form-group').find('.help-block-error').length ? '' : $(this).parents('.form-group').append('<div class="help-block help-block-error"></div>')
                if ($(this).hasClass('err') || $(this).val().length < 1) {
                    flag = false;
                    if (check != 'nope') {
                        $(this).addClass('err');
                        $(this).parents('.form-group').find('.help-block-error').html(errorsUnswers[lang][name]).addClass('block');
                    }
                } else {
                    $(this).parents('.form-group').find('.help-block-error').html('').removeClass('block');
                }

            }
        })
        addOnce = false;
        return flag;
    }

    $('.alterlink').click(function (e) {
        e.preventDefault();
        var pol = $(this).attr('href');
        var nam = $(this).html();
        posY = $(window).scrollTop();
        $('body').css({
            overflow: 'hidden'
        })
        $.ajax({
            type: 'post',
            url: pol,
            success: function (res) {
                $('.pop-inner__in ').html(res);
                $('.pop-outer').addClass('active')
            }
        })

    })

    $('.pop-close').click(closePop);
    $('.pop-bg').click(closePop);

    function closePop() {
        $('body').css({
            overflow: 'auto'
        })
        $('html, body').animate({
            scrollTop: posY + 'px'
        }, 0)
        $('.pop-inner__in ').animate({
            scrollTop: 0 + 'px'
        }, 0)
        $('.pop-outer').removeClass('active');
        $('.pop-inner__in ').html(' ');
    }


    var posY = 0;
    $('.cookie').click(function () {
        posY = $(window).scrollTop();
        $('body').css({
            overflow: 'hidden'
        })
        $('.cookie-policy-pop').addClass('modal-open');
    });
    $('.terms__close').click(function () {
        $('body').css({
            overflow: 'auto'
        })
        $('html, body').animate({
            scrollTop: posY + 'px'
        }, 0)
        $('.terms').removeClass('modal-open');
    })
    $('.scroll-top-btn').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('.video-subheader').offset().top + 'px'
        }, 500)
    })


    $('.pops').click(function () {
        posY = $(window).scrollTop();
        $('body').css({
            overflow: 'hidden'
        })
        var r = $(this).attr('data-pop');
        $('.terms[data-pop=' + r + ']').addClass('modal-open');
    })

    //
    // $('.cookie-policy .btn.btn-success').click(function () {
    //     localStorage.setItem('cookie-policy', 1);
    //     $('.cookie-policy').removeClass('active');
    // });

    window.onscroll = function () {
        $(window).scrollTop() > 200 ? $('.navBarSlider').addClass('slided') : $('.navBarSlider').removeClass('slided');
    }
    if ($.exitIntent) {
        $.exitIntent('enable');
        var fr = false;
        $('.exit_popup .close').click(function () {
            posY = $(window).scrollTop();
            $('.exit_popup').modal('hide').hide().css('display', 'none');
        });

        setTimeout(function () {
            $(document).bind('exitintent', function () {
                if (fr) {
                    return
                }
                fr = true;
                posY = $(window).scrollTop();
                $('.exit_popup').modal('show').show().css('display', 'block');
            });
        }, 1 * 1000)

        setTimeout(function () {
            posY = $(window).scrollTop();
            $('.exit_popup').modal('show').show().css('display', 'block');
        }, 360000)
        setTimeout(function () {
            posY = $(window).scrollTop();
            $('.exit_popup').modal('show').show().css('display', 'block');
        }, 900000)
    }
    $('.video-insert').each(function () {
        let vid = $(this).attr('data-video');
        let video = $('<video/>');
        let poster = $(this).attr('data-poster');
        video.attr('src', vid);
        video.attr('playsinline', true);
        video.attr('controls', true);
        poster ? video.attr('poster', poster) : '';
        video.css({
            width: '100%',
            height: '100%'
        });
        $(this).append(video);

        let playBtn = $('<div/>');
        playBtn.addClass('play-btn');
        $(this).append(playBtn);
    })
    let playBtns = document.querySelectorAll('.play-btn');

    for (var i = 0; i < playBtns.length; i++) {
        playBtns[i].addEventListener('click', function () {
            let videoEl = this.parentNode.querySelector('video');
            if (videoEl.paused) {
                videoEl.play();
                this.parentNode.classList.add('play')
            } else {
                videoEl.pause();
                this.parentNode.classList.remove('play')
            }
        })
    }

})