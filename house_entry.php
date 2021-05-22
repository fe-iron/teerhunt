<?php

    session_start();    
    require('connection.php');
    $con = OpenCon();

    
    // If form submitted, insert values into the database.
    if (isset($_POST['number'])){
            // removes backslashes
        $num = stripslashes($_REQUEST['number']);
            //escapes special characters in a string
        $num = mysqli_real_escape_string($con,$num);
        $round = stripslashes($_REQUEST['round']);
        $round = mysqli_real_escape_string($con, $round);
        
        $house = stripslashes($_REQUEST['house']);
        $house = mysqli_real_escape_string($con, $house);

        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($con, $city);

        $amount = stripslashes($_REQUEST['amount']);
        $amount = mysqli_real_escape_string($con, $amount);

        
        $result = " ";
        if($round == '1'){
        $sql = "INSERT into `house_entry` (num, house_num, round_first, amount, city) 
                    VALUES ('$num', '$house', 1, $amount, '$city')";
        // $result = $con->query($sql);
        }else{
            $sql = "INSERT into `house_entry` (num, house_num, round_second, amount, city) 
                    VALUES ('$num', '$house', 1, $amount, '$city')";
            // $result = $con->query($sql);
        }

        if ($con->query($sql) === TRUE) {
            // echo "New record created successfully";
          } else {
            header("Location: index.php?result='Fail'");
          }
        header("Location: admin.php?result='Success'");
    }
    
    

    
?>