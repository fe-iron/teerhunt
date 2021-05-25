<?php

    require('connection.php');
    $con = OpenCon();
     // If form submitted, insert values into the database.
    if (isset($_POST['house'])){
        // removes backslashes
        $house = stripslashes($_REQUEST['house']);
        //escapes special characters in a string

        $ending = stripslashes($_REQUEST['ending']);
        $ending = mysqli_real_escape_string($con,$ending);

        $direct = stripslashes($_REQUEST['direct']);
        $direct = mysqli_real_escape_string($con,$direct);
        $state = $_POST['state'];


        $query = "INSERT into `common_number` (direct, house, ending, state) 
                    VALUES ('$direct', '$house', '$ending', '$state')";
            
        $result = mysqli_query($con,$query);

        if($result){
            header("Location: common_number.php?result=Submitted Successfully!");
        }else{
            header("Location: common_number.php?result=Something Went Wrong! Try Again");
        }
        
    }
?>

