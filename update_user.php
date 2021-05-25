<?php

    session_start();    
    require('connection.php');
    $con = OpenCon();

    
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
            // removes backslashes
        $num = stripslashes($_REQUEST['phone']);
            //escapes special characters in a string
        $phone = mysqli_real_escape_string($con,$num);

        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        
        $full_name = stripslashes($_REQUEST['fullname']);
        $name = mysqli_real_escape_string($con, $full_name);

        $state = stripslashes($_REQUEST['state']);
        $state = mysqli_real_escape_string($con, $state);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        if(isset($_POST['result_out']) && isset($_POST['assistant_admin']) && isset($_POST['marquee'])){
            $query = "UPDATE `users` SET phone_number='$phone', password='".md5($password)."', full_name='$name',
             `state`='$state', result_out=1, assistant_admin=1, marquee=1 WHERE email='$email'"; 
            
        }else if(isset($_POST['result_out']) && isset($_POST['assistant_admin'])){
            $query = "UPDATE `users` SET phone_number='$phone', password='".md5($password)."', full_name='$name',
             `state`='$state', result_out=1, assistant_admin=1 WHERE email='$email'"; 
        
        }else if(isset($_POST['result_out']) && isset($_POST['marquee'])){
            $query = "UPDATE `users` SET phone_number='$phone', password='".md5($password)."', full_name='$name',
             `state`='$state', result_out=1, marquee=1 WHERE email='$email'"; 
        
        }else if(isset($_POST['assistant_admin']) && isset($_POST['marquee'])){
            $query = "UPDATE `users` SET phone_number='$phone', password='".md5($password)."', full_name='$name',
             `state`='$state', marquee=1, assistant_admin=1 WHERE email='$email'"; 

        }else if(isset($_POST['marquee'])){
            $query = "UPDATE `users` SET phone_number='$phone', password='".md5($password)."', full_name='$name',
             `state`='$state', marquee=1 WHERE email='$email'"; 
        
        }else if(isset($_POST['result_out'])){
            $query = "UPDATE `users` SET phone_number='$phone', password='".md5($password)."', full_name='$name',
             `state`='$state', result_out=1 WHERE email='$email'"; 
        
        }else if(isset($_POST['assistant_admin'])){
            $query = "UPDATE `users` SET phone_number='$phone', password='".md5($password)."', full_name='$name',
             `state`='$state', assistant_admin=1 WHERE email='$email'"; 
    
        }else{
            $query = "UPDATE `users` SET phone_number='$phone', password='".md5($password)."', full_name='$name',
             `state`='$state' WHERE email='$email'"; 
            
        }


        if ($con->query($query) === TRUE) {
            header("Location: sub_admin.php?result=Successfully Updated");
        }else {
            echo "Error updating record: " . $con->error;
            // header("Location: sub_admin.php?result=Failed to Update");
        }
    }
    
?>