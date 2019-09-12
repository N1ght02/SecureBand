

$(document).ready(function() {
  var display = document.getElementById('time');
  var live = false;

  var intervalId = setInterval(function() {
    if (live == false) {
      date = new Date();

      var currenthours = date.getHours();
      //console.log(currenthours);
      var hours;
      var minutes;
      var seconds;
      if (currenthours != 21){
              if (currenthours < 21) {
                  hours = 20 - currenthours;
              } else {
                  hours = 21 + (24 - currenthours);
              }
        minutes = 60 - date.getMinutes();
        seconds = 60 - date.getSeconds();

        if (minutes < 10) {
          minutes = '0' + minutes;
        }
        if (seconds < 10) {
          seconds = '0' + seconds;
        }

        display.innerHTML = hours + ':' + minutes + ':' + seconds;
      } else {
        live = true;
        display.innerHTML = ' <iframe class="werkt1" src="https://player.twitch.tv/?channel=loltyler1&muted=true" height="300" width="500" frameborder="0"scrolling="no" allowfullscreen="true"></iframe>';
      }
    } else {
      clearInterval(intervalId);
    }
  }, 1000);

});
