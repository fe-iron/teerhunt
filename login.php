<?php

    require('connection.php');
    $con = OpenCon();

    session_start();
    $set_cond = False;
    // If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$username'
    and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
     
    if($rows==1){
        $_SESSION['username'] = $username;
        // Redirect user to index.php
        header("Location: admin.php");
    }else{
        $set_cond = True;
    }
    
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/registration.css" />
    <script src="js/registration.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <?php
        if($set_cond){
            echo "<form>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='login.php'>Login</a></form>";
        }else{  
        ?>



    <form name="registration" action="" method="post">
        <h3>Login Here</h3>
        <label>
            <p class="label-txt">ENTER YOUR EMAIL</p>
            <input type="text" class="input" name="username">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">ENTER YOUR PASSWORD</p>
            <input type="password" class="input" name="password">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <br>
        <button type="submit" value="Register">submit</button>
        
        <p style="padding-top: 10px;">Not registered yet? <a href='registration.php'>Register Here</a></p>
    </form>





    <?php } ?>
</body>

</html>