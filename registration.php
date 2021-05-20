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
        require('connection.php');
        $con = OpenCon();
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
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
            header("Location: login.php");
            // echo '<form><label><p class="label-txt">You are registered successfully.</p></label><br/><label><p class="label-txt">Click here to <a href="login.php">Login</a></p></label></form>';
        }
}else{

?>

    <form name="registration" action="" method="post">
        <label>
            <p class="label-txt">ENTER YOUR EMAIL</p>
            <input type="text" class="input" name="email">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">ENTER YOUR NUMBER</p>
            <input type="tel" class="input" name="username">
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
        <button type="submit" value="Register">submit</button>
        <p style="padding-top: 10px;">Already registered ? <a href='login.php'>Login Here</a></p>
    </form>



    <?php } ?>
</body>

</html>