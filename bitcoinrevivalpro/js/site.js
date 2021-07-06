$(document).ready(function() {

    $(".but2").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    $.ajax({
        url: 'https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,LTC,XRP,DASH&tsyms=USD&api_key=6805e151faa6e71f1953f0ddb3b8183f4b941cbdae41cb20382ba1914d116925',
        dataType: 'json',
        success: function(data) {
            $('#btc-widget #btc-widget-price-block').text(data.DISPLAY.BTC.USD.PRICE.replace(/ /gi, ''));
            $('.btc-list__item .btc-price').text(data.DISPLAY.BTC.USD.PRICE.replace(/ /gi, ''));

        }
    });
});