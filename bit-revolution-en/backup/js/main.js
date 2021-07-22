const playIcon = document.querySelector('.algo-video-play-btn')
const vi = document.querySelector('video')
vi.addEventListener('click', () => {
    playIcon.style = 'display: none'
    vi.play()
    vi.style = 'cursor: auto'
})

// Countdown
function startTimer(duration, display) {
    var timer = duration,
        minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.text(minutes + ":" + seconds);
        if (--timer < 0) {
            timer = 0;
        }
    }, 1000);
}
(function ($) {
    //Date
    let d = new Date();
    let month = d.getMonth() + 1;
    let day = d.getDate();
    let output = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + d
.getFullYear();
    $('.today-date').html(output);
    let time = 60 * 6.39,
        display = $('.countdown');
    startTimer(time, display);
})(jQuery);
$(document).ready(function () {
    var date = new Date();
    $('.year').html(new Date().getFullYear());
});
$(document).ready(function () {
    if (!!$('.published').length) {
        var publishDate = new Date($('#publishDate').html());
        var currentDate = new Date();
        $('#daysAgo').html(Math.round((currentDate - publishDate) / 1000 / 60 / 60 / 24) + ' days ago');
    }
});
Date.prototype.yyyymmdd = function () {
    var mm = this.getMonth() + 1; // getMonth() is zero-based
    var dd = this.getDate();
    return [this.getFullYear(),
        (mm > 9 ? '' : '0') + mm,
        (dd > 9 ? '' : '0') + dd
    ].join('-');
};
$(document).ready(function () {
    var date = new Date();
    var todayDate = date.yyyymmdd();
    $('.table tbody tr td:nth-child(2)').each(function () {
        $(this).html(todayDate);
    });
    $('.faq-section .answear').addClass('hidden');
    $('.faq-section .question').click(function (e) {
        $('.answear').removeClass('visible').addClass('hidden');
        if ($(this).hasClass('selected')) {
            $('.answear').removeClass('visible').addClass('hidden');
            $('.faq-section .question').removeClass('selected');
        } else {
            $('.faq-section .question').removeClass('selected');
            $(this).addClass('selected');
            $(this).next().removeClass('hidden').addClass('visible');
        }
    })
})