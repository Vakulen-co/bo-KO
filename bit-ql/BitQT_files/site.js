$(document).ready(function(){


    if($(document).scrollTop() >= 400){
        $('#gotoTop').fadeIn();
    }
    else{
        $('#gotoTop').fadeOut();
    }
    $('body').on("mousewheel", function() {
        if($(document).scrollTop() >= 400){
            $('#gotoTop').fadeIn();
        }
        else{
            $('#gotoTop').fadeOut();
        }
    });

    $('#gotoTop').click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: ($('#main-section').offset().top - 80)
        }, 1500);
        setTimeout(function (){
            $('#gotoTop').fadeOut();
        }, 1500);
    });

    var start_profit = parseInt($('.counter-large .live-profits').attr('data-from'));
    var start_users = parseInt($('.counter-large .live-users').attr('data-from'));
    var rand1 = 2500;
    var rand2 = 6000;
    intProfit = setInterval(function () {
        var x = Math.floor((Math.random() * 2500));
        start_profit += x;
        if($('.counter-large .live-profits').attr('data-comma') === 'true'){
            showProfitComa(start_profit);
        }
        else {
            showProfit(start_profit);
        }
        rand1 = Math.round(Math.random()*(6000-2000))+2000;
    }, rand1);
    intUsers = setInterval(function () {
        var y = Math.floor((Math.random() * 5));
        start_users += y;
        if($('.counter-large .live-users').attr('data-comma') === 'true'){
            showUsersComa(start_users);
        }
        else {
            showUsers(start_users);
        }
        rand2 = Math.round(Math.random()*(10000-5000))+5000;
    }, rand2);
    function showUsers(data){
        var parts = data.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        $('.counter-large .live-users').html(parts.join("."));
    }
    function showUsersComa(data){
        var parts = data.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        $('.counter-large .live-users').html(parts.join("."));
    }
    function showProfit(data){
        var parts = data.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        $('.counter-large .live-profits').html(parts.join("."));
    }
    function showProfitComa(data){
        var parts = data.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        $('.counter-large .live-profits').html(parts.join("."));
    }

    var $slider0 =  $(".js-irs-0");
    var $slider1 =  $(".js-irs-1");
    var days, profit;
    $slider0.ionRangeSlider({
        min: 250,
        max: 5000,
        from: 250,
        postfix: "&euro;",
        step: 50,
        onStart: function (data) {
            profit = $(this)[0]["from"];
        }
    });
    $slider1.ionRangeSlider({
        min: 1,
        max: 180,
        from: 30,
        postfix: " Days",
        step: 1,
        onStart: function (data) {
            days = $(this)[0]["from"];
        }
    });
    var curProfit  = (profit/100*13.56)*days+profit;

    $slider0.on("change", function () {
        var $inp = $(this);
        var from = $inp.prop("value");
        profit = parseInt(from);
        curProfit  = (profit/100*13.56)*days+profit;
        $('.pricing-price').html(parseInt(curProfit)+" &euro;");
    });

    $slider1.on("change", function () {
        var $inp = $(this);
        var from = $inp.prop("value");
        days = parseInt(from);
        curProfit  = (profit/100*13.56)*days+profit;
        $('.pricing-price').html(parseInt(curProfit)+" &euro;");
    });

    $('.pricing-price').html(curProfit+" &euro;");

    $('body.home_page a').click(function (e) {
        if($(this).attr('data-scrollto')){
            e.preventDefault();
            $([document.documentElement, document.body]).animate({
                scrollTop: ($($(this).attr('data-scrollto')).offset().top - 80)
            }, 1500);
        }
    })

    $('#footer .col_half a').click(function () {
        window.location.href='../#main-section';
    });

    setInterval(function () {
        $('.sign-up-free').animate({top: '+=3'}, 100);
        $('.sign-up-free').animate({top: '-=6'}, 100);
        $('.sign-up-free').animate({top: '+=6'}, 100);
        $('.sign-up-free').animate({top: '-=6'}, 100);
        $('.sign-up-free').animate({top: '+=3'}, 100);

    },4000);


    var mapWidth = $('#hotspot-img').width();
    var mapHeight = $('#hotspot-img').height();
    function setCoords(width, height){
        $('#hotspot-img .hot-spot').each(function () {
            var left = $(this).attr('x');
            var top = $(this).attr('y');
            $(this).css({
                'left': parseInt(left*width/2638)+'px',
                'top' : parseInt(top*height/1387)+'px'
            });
        });
    }
    setCoords(mapWidth, mapHeight);
    $( window ).resize(function() {
        mapWidth = $('#hotspot-img').width();
        mapHeight = $('#hotspot-img').height();
        setCoords(mapWidth, mapHeight);
    });
});
