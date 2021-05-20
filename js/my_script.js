/*-----------------------------------
        Date on home page
    ------------------------------------*/

    var today = new Date();

    var year = today.getFullYear();
    var month = today.getMonth();
    var date = today.getDate();
    var day = today.getDay();
    
    
    
    var date_with_day = '';
    
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    
    date_with_day += days[day];
    date_with_day += ', ';
    date_with_day += date;
    date_with_day += ' ';
    date_with_day += months[month];
    date_with_day += ' ';
    date_with_day += year

    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    time = String(time)

    date_with_day += ", " + time;
    document.getElementById('date').innerHTML = date_with_day;
    


