function addVisitorModule() {
    var isoCode;
    // $.getJSON("/site/currentloc", function(data) {
    //     isoCode = data.country_code;
    //     countryGeo = data.country
    //     currency()
    //     console.log(isoCode)
    // });

    function currency() {
        $(".country-name-geo").text(countryGeo)
        var btc = "$"
        var currency1 = ["CZ", "DK", "GR", "NL", "NO", "PL", "SE", "IE", "ES", "FR", "DE"]
        if (isoCode === "GB") {
            $(".currency").text("ВЈ")
            var btc = "ВЈ"
        }
        if (currency1.indexOf(isoCode) >= 0) {
            $(".currency").text("в‚¬")
            var btc = "в‚¬"
        }

        $.ajax({
                // url: 'https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LTC,EOS,XRP,BCH&tsyms=USD&api_key=0f69e089324b5689c783b1b1c2aa1056a1e2e49e34fb47a418a7833c87113e4e',
                url: 'https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC&tsyms=EUR,USD,GBP&api_key=0f69e089324b5689c783b1b1c2aa1056a1e2e49e34fb47a418a7833c87113e4e',
                dataType: 'json'
            })
            .done(function(data) {
                $('.corency').text(btc + data.BTC.USD);
            })
    }
};
addVisitorModule()