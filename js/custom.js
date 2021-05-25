$(function() {
    "use strict";

    $(".preloader").fadeOut();
    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").on('click', function() {
        $("#main-wrapper").toggleClass("show-sidebar");
        $(".nav-toggler i").toggleClass("ti-menu");
    });
    $(".search-box a, .search-box .app-search .srh-btn").on('click', function() {
        $(".app-search").toggle(200);
        $(".app-search input").focus();
    });

    // ============================================================== 
    // Resize all elements
    // ============================================================== 
    $("body, .page-wrapper").trigger("resize");
    $(".page-wrapper").delay(20).show();
    
    //****************************
    /* This is for the mini-sidebar if width is less then 1170*/
    //**************************** 
    var setsidebartype = function() {
        var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        if (width < 1170) {
            $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
        } else {
            $("#main-wrapper").attr("data-sidebartype", "full");
        }
    };
    $(window).ready(setsidebartype);
    $(window).on("resize", setsidebartype);

});


//****************************
        //Custom
//**************************** 

function edit(id){
    $('#this_id').val(id);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var arr = this.responseText.split(" ");
        var city = arr[0];
        var amount = arr[1];
        $('#city').val(city);
        $('#amount').val(amount);

      }
    };
    xmlhttp.open("GET","getgames.php?q="+id,true);
    xmlhttp.send();

    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#edit_data').modal('show');
}

function remove(id){
    $('#remove_id').val(id);
    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#remove').modal('show');
}

function edit_user(id){

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var arr = this.responseText.split(" ");
        var full_name = arr[0];
        if(full_name != ""){
            full_name = full_name + " " + arr[1];
            var email = arr[2];
            var phone = arr[3];
        }else{
            full_name = " ";
            var email = arr[1];
            var phone = arr[2];
        }
        
        $('#full_name').val(full_name);
        $('#email').val(email);
        $('#phone').val(phone);
      }
    };
    xmlhttp.open("GET","getuser.php?q="+id,true);
    xmlhttp.send();

    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#edit_data').modal('show');
}

function remove_user(id){
    $('#remove_id').val(id);
    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#remove').modal('show');
}

function close_modal(tag){
    $('#'+tag).modal('hide');
}

function submit(){
    document.forms['remove_form'].submit();
}