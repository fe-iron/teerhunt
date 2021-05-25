<?php

    require('connection.php');
    $con = OpenCon();
     // If form submitted, insert values into the database.
     if (isset($_POST['email'])){
        // removes backslashes
        
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);

        $num = $_POST['phone'];
        $email = $_POST['email'];
        $full_name = $_POST['fullname'];
        $state = $_POST['state'];

        if($num === "" && $full_name === "" && $state === ""){
            $sql = "UPDATE super_admin SET `password`='".md5($password)."' WHERE email='$email'";
        }else if($num === "" && $full_name === ""){
            $sql = "UPDATE super_admin SET `state`='$state', `password`='".md5($password)."' 
            WHERE email='$email'";
        }else if($num === "" && $state === ""){
            $sql = "UPDATE super_admin SET full_name='$full_name', `password`='".md5($password)."' 
            WHERE email='$email'";
        }else if($full_name === "" && $state === ""){
            $sql = "UPDATE super_admin SET phone_number='$num', `password`='".md5($password)."' 
            WHERE email='$email'";
        }else if($state === ""){
            $sql = "UPDATE super_admin SET phone_number='$num', full_name='$full_name', `password`='".md5($password)."' 
            WHERE email='$email'";
        }else if($num === ""){
            $sql = "UPDATE super_admin SET `state`='$state', full_name='$full_name', `password`='".md5($password)."' 
            WHERE email='$email'";
        }else if($full_name === ""){
            $sql = "UPDATE super_admin SET `state`='$state', phone_number='$num', `password`='".md5($password)."' 
            WHERE email='$email'";
        }else{
            $sql = "UPDATE super_admin SET `state`='$state', phone_number='$num', `password`='".md5($password)."', 
            full_name='$full_name' WHERE email='$email'";
        }

        $result = $con->query($sql);
        
        if($result){
            header("Location: profile.php?result=Successfully Updated!");
        }else{
            header("Location: profile.php?result=Update Failed!");
        }

       
    }
?>

