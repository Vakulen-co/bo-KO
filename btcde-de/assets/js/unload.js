;
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