<?php

    require('connection.php');
    $con = OpenCon();
     // If form submitted, insert values into the database.
     if (isset($_POST['email'])){
        // removes backslashes
        $username = stripslashes($_REQUEST['email']);
        //escapes special characters in a string

        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $name = $_POST['fullname'];
        $phone = $_POST['phone'];
        $state = $_POST['state'];

        $sql = "SELECT * FROM `users` WHERE email='$email'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            header("Location: sub_admin.php?result='Email Already Exists!'");
        }else{
            if(isset($_POST['result_out']) && isset($_POST['assistant_admin']) && isset($_POST['marquee'])){
                $query = "INSERT into `users` (phone_number, email, password, full_name, state, result_out, assistant_admin, marquee) 
                        VALUES ('$phone', '$email', '".md5($password)."', '$name', '$state', 1, 1, 1)";
                
            }else if(isset($_POST['result_out']) && isset($_POST['assistant_admin'])){
                $query = "INSERT into `users` (phone_number, email, password, full_name, state, result_out, assistant_admin) 
                        VALUES ('$phone', '$email', '".md5($password)."', '$name', '$state', 1, 1)";
            
            }else if(isset($_POST['result_out']) && isset($_POST['marquee'])){
                $query = "INSERT into `users` (phone_number, email, password, full_name, state, result_out, marquee) 
                        VALUES ('$phone', '$email', '".md5($password)."', '$name', '$state', 1, 1)";
            
            }else if(isset($_POST['assistant_admin']) && isset($_POST['marquee'])){
                $query = "INSERT into `users` (phone_number, email, password, full_name, state, assistant_admin, marquee) 
                        VALUES ('$phone', '$email', '".md5($password)."', '$name', '$state', 1, 1)";

            }else if(isset($_POST['marquee'])){
                $query = "INSERT into `users` (phone_number, email, password, full_name, state, marquee) 
                        VALUES ('$phone', '$email', '".md5($password)."', '$name', '$state', 1)";
            
            }else if(isset($_POST['result_out'])){
                $query = "INSERT into `users` (phone_number, email, password, full_name, state, result_out) 
                        VALUES ('$phone', '$email', '".md5($password)."', '$name', '$state', 1)";
            
            }else if(isset($_POST['assistant_admin'])){
                $query = "INSERT into `users` (phone_number, email, password, full_name, state, assistant_admin) 
                        VALUES ('$phone', '$email', '".md5($password)."', '$name', '$state', 1)";
        
            }else{
                $query = "INSERT into `users` (phone_number, email, password, full_name, state) 
                        VALUES ('$phone', '$email', '".md5($password)."', '$name', '$state')";
                
            }

            // echo $query;
            $result = mysqli_query($con,$query);
            if($result){
                header("Location: sub_admin.php?result=Registered Successfully!");
            }else{
                header("Location: sub_admin.php?result=Something Went Wrong! Try Again");
            }
        }
    }
?>

