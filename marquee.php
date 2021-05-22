<?php

    require('connection.php');
    $con = OpenCon();
     // If form submitted, insert values into the database.
     if (isset($_POST['msg'])){
        // removes backslashes
        //escapes special characters in a string

        $username = $_POST['msg'];
        

        $query = "INSERT into `marquee` (msg) 
        VALUES ('$username')";
        $result = mysqli_query($con,$query);
        if($result){
            header("Location: admin.php?result='Successfully Set'");
        }else{
            echo "Error: " . $sql . "<br>" . $con->error;
            // header("Location: admin.php?result='Fail'");
        }
    }
?>

