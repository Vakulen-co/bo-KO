    function addVisitorModule() {
        var isoCode;
        $.getJSON("https://amos-mamaya.fun/geo", function(data) {
            isoCode = data.country_code;
            countryGeo = data.country
            currency()
        });

        function currency() {
            $(".country-name-geo").text(countryGeo)
            var currency1 = ["AT", "CH", "DE", "LI", "LU", "BE", "CZ", "ES", "FR", "GR", "HU", "IT", "NL", "PL", "PT", "RO", "RS", "HR", "SK", "SL", "DK", "FI", "NO", "SE"]
            if (isoCode == "GB") {
                $(".currency--table-hide").text("£")
                $(".currency").text("£")
                return true
            }
            if (currency1.indexOf(isoCode) >= 0) {
                $(".currency--table-hide").text("€")
                $(".currency").text("€")
            } else {
                $(".currency--table-hide").text("$")
                $(".currency").text("$")
            }
        }
    };
    addVisitorModule()