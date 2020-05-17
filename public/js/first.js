let intervalId = null;
const SECOND = 1000,
    MINUTE = SECOND * 60,
    HOUR = MINUTE * 60,
    DAY = HOUR * 24;

window.addEventListener('DOMContentLoaded', (event) => {

    let countDownDate = new Date().getTime() + DAY - HOUR; // less than day
    // let countDownDate = new Date().getTime() + 3 * DAY - HOUR - 55 * SECOND; // more than day

    startCounter(countDownDate);

});


function startCounter(countDownDate) {
    setInterval(() => {
        let now = new Date().getTime();

        let difference = countDownDate - now;

        let days = Math.floor(difference / DAY);
        let hours = Math.floor((difference % DAY) / HOUR);
        let minutes = Math.floor((difference % HOUR) / MINUTE);
        let seconds = Math.floor((difference % MINUTE) / SECOND);

        updateHtmlElements(days, hours, minutes, seconds);


        if (difference < 0) {
            clearInterval(interval);

            fields.forEach(f => f.innerHTML = 0);
            texts[0].innerHTML = "-";
            texts[1].innerHTML = "Expired";
            texts[2].innerHTML = "-";
        }

    }, SECOND);
}

function updateHtmlElements(days, hours, minutes, seconds) {

    let fields = document.querySelectorAll(".counter .number");
    let texts = document.querySelectorAll(".counter .text");

    if (days > 0) {
        fields[0].innerHTML = days;
        texts[0].innerHTML = "days";

        fields[1].innerHTML = hours;
        texts[1].innerHTML = "hours";

        fields[2].innerHTML = minutes;
        texts[2].innerHTML = "minutes";
    } else {

        fields[0].innerHTML = hours;
        texts[0].innerHTML = "hours";

        fields[1].innerHTML = minutes;
        texts[1].innerHTML = "minutes";

        fields[2].innerHTML = seconds;
        texts[2].innerHTML = "seconds";

    }
}
