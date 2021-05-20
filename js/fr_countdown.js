
/*-----------------------------------
        F/R timer
    ------------------------------------*/

    var today = new Date();

    var month = today.getMonth();
    var date = today.getDate();

    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];



    timer_day_fr = '';
    timer_day_sr = '';
    timer_day_fr = months[month];
    timer_day_fr += " ";
    timer_day_fr += date;
    
    timer_day_sr = timer_day_fr;
    
    timer_day_fr += ", 2021 16:15:00";
    
    timer_day_sr += ", 2021 17:15:00";
    
    // Set the date we're counting down to
    var countDownDate1 = new Date(timer_day_fr).getTime();
    var countDownDate = new Date(timer_day_sr).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now1 = new Date().getTime();
    
      // Find the distance between now and the count down date
      var distance1 = countDownDate1 - now1;
      var distance = countDownDate - now1;
      // Time calculations for days, hours, minutes and seconds
      var days1 = Math.floor(distance1 / (1000 * 60 * 60 * 24));
      var hours1 = Math.floor((distance1 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
      var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);
    

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      // Display the result in the element with id="demo"
      document.getElementById("fr_timer").innerHTML = days1 + "d " + hours1 + "h "
      + minutes1 + "m " + seconds1 + "s ";

      document.getElementById("sr_timer").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
    
      // If the count down is finished, write some text
      if (distance1 < 0) {
        clearInterval(x);
        document.getElementById("fr_timer").innerHTML = "Results Out";
      }
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("sr_timer").innerHTML = "Results Out";
      }
    }, 1000);
    
    