const idTimer = $( "#timer" );
const remainTimer = $( "#timer" ).attr('remaining-time');
const remainingTime = localStorage.getItem('remaining-time');

function startTimer(duration, display) {
  var timer = duration, hours, minutes, seconds;
  setInterval(function() {
    hours = parseInt(timer / 3600, 10)
    minutes = parseInt(timer % 3600 / 60, 10)
    seconds = parseInt(timer % 60, 10);

    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.text(hours + ":" + minutes + ":" + seconds);

    localStorage.setItem('remaining-time', timer);
    $( "#timer" ).attr( "remaining-time", timer);

    if (--timer < 0) {
      localStorage.setItem('remaining-time', 0);
      timer = 0;

      window.alert('Waktu Habis');
      window.location.href = "../home/";
    }
  }, 1000);
}

jQuery(function($) {
  let dataTime = '';
  if(remainingTime == 0 ){
    dataTime = idTimer.attr( "timer" );
  }else if(remainTimer != ''){
    dataTime = remainTimer;
  }else{
    dataTime = remainingTime;
  }
  // minute * 60 for dataTime
  let timer = dataTime, display = idTimer;

  startTimer(timer, display);
});