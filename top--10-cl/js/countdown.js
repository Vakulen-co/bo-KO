//This example is has three sections of code. The first is the page-specific code, the second is some helpers, and the third is my customer ATimer class...

//(1) Page code
var WARNING_THRESHOLD = 4 * 60 * 1000; //4 minutes (in milliseconds)

ActivateCountDown('.countdown__body', 600);

function ActivateCountDown(strContainerID, initialValue) {
    var _countDownContainer = $(strContainerID);
    var $_countDownContainer;

    if (!_countDownContainer) {
        alert("count down error: container does not exist: " + strContainerID +
                "\nmake sure html element with this ID exists");
    } else {
        $_countDownContainer = _countDownContainer;
        //the ATimer below works with time values in milliseconds
        //the "20" will update display ever 20 milliseconds, as fast as screen refreshes
                $_countDownContainer.removeClass("warn");
        var timerID = new ATimer(initialValue * 1000, 20, CountDownComplete, CountDownTick);
        timerID.start();
    }

    function CountDownComplete() {
        
    }

    function CountDownTick(remaining) {
        if (remaining < WARNING_THRESHOLD) $_countDownContainer.addClass("warn");
        SetCountdownText(remaining);
    }

    function SetCountdownText(remaining) {
        _countDownContainer.html(remaining.millisecondsToHundredthsString());
    }
}

//(2) Helpers
Number.prototype.millisecondsToHundredthsString = function () {
    /// <summary>Convert number of milliseconds into text with format MM:SS:hh</summary>
    /// <param name="this">Number of milliseconds</param>
    /// <returns type="Text" >Duration, text in format MM:SS:hh</<returns>
    var partMultipliers = [{ d: 60000, p: 100 }, { d: 1000, p: 100 }, { d: 10, p: 100}];
    var remainder = parseInt(this);
    return partMultipliers.reduce(function (prev, m, idx) {
        var quotient = Math.floor(remainder / m.d); //m.d is divisor
        remainder -= (quotient * m.d);
        return prev +  (quotient + m.p).toString().substr(1) + "<span> </span>";  //m.p is a framer
    }, "");
};

String.prototype.toMilliseconds = function () {
    /// <summary>Convert from string to number of milliseconds</summary>
    /// <param name="this">Duration, text in format MM:SS:mmm (mmm is milliseconds)</param>
    /// <returns type="Number">Number of milliseconds</returns>
    var partMultipliers = [1, 1000, 60000];
    var parts = this.split(":").reverse();
    return milliseconds = parts.reduce(function (prev, part, idx) {
        var res = (parseInt(part) * partMultipliers[idx]);
        return prev + res;
    }, 0);
};

//(3) Custom "ATimer" Class 
function ATimer(milliseconds, optionalPeriod, optionalCallback, optionalUpdateCallback) {
    //ensure this runs as a new instance upon each instantiation
    if (typeof ATimer != "function") return new ATimer.call(this, arguments);

    //PRIVATE properties...
    var timerInstance, duration = milliseconds, period = 100, count = 0, chunks, completer, updater;
    var self = this;
    if (typeof optionalPeriod == "number") {
        period = optionalPeriod;
        completer = optionalCallback;
        updater = optionalUpdateCallback;
    } else {
        completer = arguments[1];
        updater = arguments[2];
    }
    chunks = Math.floor(duration / period);

    //PRIVATE functions...
    function chunkComplete() {
        if (count++ >= chunks) {
            if (completer) completer.call(self, chunks, count); //do callback, if supplied
        } else {
            var curr = new Date().getTime();
            var diff = (curr - start) - (count * period);
            var remaining = Math.max(0, (duration - (curr - start)));
            timerInstance = window.setTimeout(chunkComplete, (period - diff));
            if (updater) updater.call(self, remaining); //do callback, if supplied
        }
    }
    return {

        //PUBLIC functions...
        start: function () {
            timerInstance = window.setTimeout(chunkComplete, period);
            start = new Date().getTime();
        },
        cancel: function () {
            if (timerInstance) window.clearTimeout(timerInstance);
        }
    };
}