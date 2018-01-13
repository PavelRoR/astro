$(document).ready(function () {
/* Таймер */

var clock;



var futureDate = new Date("January 12, 2018 09:00 AM UTC+3");
var currentDate = new Date();


var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;


function dayDiff(first, second) {
    return (second - first) / (1000 * 60 * 60 * 24);
}

if (dayDiff(currentDate, futureDate) < 100) {
    $('.clock').addClass('twoDayDigits');
} else {
    $('.clock').addClass('threeDayDigits');
}

if (diff < 0) {
    diff = 0;
    $('.clock-stop').addClass("alert-danger");
    $('.clock-stop').html("Время вышло!");
    $('.buy_link').css({"pointerEvents": "none", "backgroundColor": "red"}).text("Недоступно");

}

// Instantiate a coutdown FlipClock
clock = $('.clock').FlipClock(diff, {
    clockFace: 'HourlyCounter',
    countdown: true,
    language: 'ru',
    callbacks: {
        stop: function () {
            $('.clock-stop').addClass("alert-danger");
    $('.clock-stop').html("Время вышло!");
    $('.buy_link').css({"pointerEvents": "none"}).text("Недоступно");
        }
    },
});
    /* Конец документа */
});