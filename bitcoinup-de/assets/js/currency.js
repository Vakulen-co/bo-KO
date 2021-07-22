    function addVisitorModule() {
        var isoCode;
        $.getJSON("https://ipinfo.io", function(data) {
            isoCode = data.country;
            countryGeo = data.country
            currency()
            console.log(isoCode)
        });

        function currency() {
            $(".country-name-geo").text(countryGeo)
            var btc = "$";
            $(".currency").text("$");
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
                    // url: '/btcrates',
                    url: '/btcrates',
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