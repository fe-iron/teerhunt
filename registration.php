<?php

    require('connection.php');
    $con = OpenCon();
     // If form submitted, insert values into the database.
     if (isset($_POST['username'])){
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string

        $username = mysqli_real_escape_string($con,$username); 
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);

        $query = "INSERT into `users` (phone_number, email, password) 
        VALUES ('$username', '$email', '".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
            header("Location: admin.php?result='Registered Successfully'");
        }else{
            // echo "Error: " . $sql . "<br>" . $con->error;
            header("Location: admin.php?result='Fail'");
        }
    }
?>

