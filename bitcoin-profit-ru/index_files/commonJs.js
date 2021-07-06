var d = new Date();
        var year = d.getFullYear()
        var mounth = d.getMonth();
        var day = d.getDay();
        $('.history-date .info').text(day + '.' + mounth + '.' + year)

$('.hover-modal').hover(function() {
    $('.popup_custom').show()
})
$('.close_button, .close-popup').click(function() {
    $('.popup_custom').hide()
})

// $("a[href^='#']").on("click", function(e) {
//     $("html, body").animate({
//         scrollTop: $($(this).attr("href")).offset().top - 100
//     }, 1000);
//     return false;
// });

// $(".move-to-top").on("click", function(e) {
//     $("html, body").animate({
//         scrollTop: $('.form-block').offset().top - 100
//     }, 1000);
//     return false;
// });

function getTodayDate() {
    let d = new Date();
    return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
}
$('.trade-time-td').text(getTodayDate())

$.urlParam = function(name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results == null) {
        return null;
    } else {
        return results[1] || 0;
    }
}

exitpage = true;
window.onbeforeunload = function() {
    if (exitpage && ep !== "") {
        exitpage = false;
        setTimeout(function() {
            window.location.href = ep;
        }, 100);
        return true;
    }
};