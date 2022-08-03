const idTimer = $("#timer");

function startTimer(duration, display) {
  var timer = duration,
    hours,
    minutes,
    seconds;
  setInterval(function () {
    hours = parseInt(timer / 3600, 10);
    minutes = parseInt((timer % 3600) / 60, 10);
    seconds = parseInt(timer % 60, 10);

    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.text(hours + ":" + minutes + ":" + seconds);

    if (--timer < 0) {
      timer = duration;
    } else if (timer == 0) {
      alert("waktu habis");
    }

    $("#timer").attr("remaining-time", timer);
  }, 1000);
}

jQuery(function ($) {
  let dataTime = idTimer.attr("timer");

  // minute * 60 for dataTime
  let timer = dataTime,
    display = idTimer;
  startTimer(timer, display);
});
