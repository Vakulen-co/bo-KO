var currentNumber;
var rand1;

function doSomething() {
    rand1 = Math.round(Math.random() * (10000 - 9800)) + 9800;

    $("#btc-widget-price-block").text(rand1);
    if (currentNumber > rand1) {
        $('#btc-widget-price-block').css('color', 'red');
        $('.bitcoin-conttroller').css('color', 'red');
        $('#btc-widget-direction-block').css('color', 'red');
        $('#btc-widget-direction-block').text('↓');
    } else {
        $('#btc-widget-price-block').css('color', 'green');
        $('.bitcoin-conttroller').css('color', 'green');
        $('#btc-widget-direction-block').css('color', 'green');
        $('#btc-widget-direction-block').text('↑');
    }
}

(function loop() {
    currentNumber = rand1;
    var rand2 = Math.round(Math.random() * (15000 - 7000)) + 7000;
    setTimeout(function() {
        //alert('A');
        doSomething();
        loop();
    }, rand2);
}());