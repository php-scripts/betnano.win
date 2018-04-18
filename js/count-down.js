var curday;
var secTime;
var ticker;

function getSeconds() {
    var now = new Date();
    var nowDate = new Date(now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate(), now.getUTCHours(), now.getUTCMinutes(), now.getUTCSeconds());
    var dy = 0;

    var countertime = new Date(nowDate.getUTCFullYear(), nowDate.getUTCMonth(), nowDate.getUTCDate(), 20, 0, 0); // 20 out of 24 hours = 8pm

    var curtime = nowDate.getTime(); // current time
    var atime = countertime.getTime(); // countdown time
    var diff = parseInt((atime - curtime) / 1000);
    if (diff > 0) {
        curday = dy - nowDate.getDay()
    }
    else {
        curday = dy - nowDate.getDay() - 1 // after countdown time
    }
    if (curday < 0) {
        curday += 7; // already after countdown time, switch to next week
    }
    if (diff <= 0) {
        diff += (86400 * 7)
    }
    startTimer(diff);
}

function startTimer(secs) {
    secTime = parseInt(secs);
    ticker = setInterval("tick()", 1000);
    tick(); // initial count display
}

function tick() {
    var secs = secTime;
    if (secs > 0) {
        secTime--;
    }
    else {
        clearInterval(ticker);
        getSeconds(); // start over
    }

    var days = Math.floor(secs / 86400);
    secs %= 86400;
    var hours = Math.floor(secs / 3600);
    secs %= 3600;
    var mins = Math.floor(secs / 60);
    secs %= 60;

    document.getElementById("count-down-weekly").innerHTML = curday + "d " + hours + "h " + mins + "m " + secs + "s ";

    document.getElementById("count-down-daily").innerHTML = hours + "h " + mins + "m " + secs + "s ";

}