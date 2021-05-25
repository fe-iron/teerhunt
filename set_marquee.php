<?php

    require('connection.php');
    $con = OpenCon();
     // If form submitted, insert values into the database.
     if (isset($_POST['msg'])){
        // removes backslashes
        //escapes special characters in a string

        $username = $_POST['msg'];
        
        echo "marquee is ".$username;
        $query = "INSERT into `marquee` (msg) 
        VALUES ('$username')";
        $result = mysqli_query($con,$query);
        if($result){
            header("Location: marquee.php?result=Successfully Set!");
        }else{
            header("Location: marquee.php?result=Not Set, Something Went Wrong!");
        }
    }
?>

