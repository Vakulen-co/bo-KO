$(function() {

    function initCountdown() {
        let countdownSpan = $('.countdown-span');
        let countdownSpanVal = countdownSpan.text();
        let mmSsArray = countdownSpanVal.split(":");
        let mm = parseInt(mmSsArray[0]);
        let ss = parseInt(mmSsArray[1]);
        if (mm === 0 && ss === 0)
            return;
        if (ss === 0) {
            mm--;
            ss = 59;
        } else
            ss--;
        let isSecondsSingleDigit = Math.floor(ss / 10) === 0 ? true : false;

        if (isSecondsSingleDigit) {
            let newCountdownSpanVal = "0" + mm.toString() + ":" + "0" + ss.toString();
            countdownSpan.text(newCountdownSpanVal);
        } else {
            let newCountdownSpanVal = "0" + mm.toString() + ":" + ss.toString();
            countdownSpan.text(newCountdownSpanVal);
        }

        setTimeout(function() {
            initCountdown();
        }, 1000)
    }

    function initCountdown1() {
        let countdownSpan = $('.countdown-span1');
        let countdownSpanVal = countdownSpan.text();
        let mmSsArray = countdownSpanVal.split(":");
        let mm = parseInt(mmSsArray[0]);
        let ss = parseInt(mmSsArray[1]);
        if (mm === 0 && ss === 0)
            return;
        if (ss === 0) {
            mm--;
            ss = 59;
        } else
            ss--;
        let isSecondsSingleDigit = Math.floor(ss / 10) === 0 ? true : false;

        if (isSecondsSingleDigit) {
            let newCountdownSpanVal = "0" + mm.toString() + ":" + "0" + ss.toString();
            countdownSpan.text(newCountdownSpanVal);
        } else {
            let newCountdownSpanVal = "0" + mm.toString() + ":" + ss.toString();
            countdownSpan.text(newCountdownSpanVal);
        }

        setTimeout(function() {
            initCountdown1();
        }, 1000)
    }



    initCountdown();
    initCountdown1();


});