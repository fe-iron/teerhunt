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
            $sql = "INSERT into `house_entry` (house_num_fr, round_first, amount, city, `F/R`) 
                        VALUES ('$house', 1, '$amount', '$city', '$num')";
        // $result = $con->query($sql);
        }else{
            $sql = "SELECT * FROM `house_entry` WHERE `round_second`=0 ORDER BY `date` DESC";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                $row = $result->fetch_assoc();
                $this_id = $row['id'];
            } else {
                header("Location: result_out.php?result='First Set F/R round'");    
            }

            $sql = "UPDATE `house_entry` SET `S/R`='$num', house_num_sr='$house', round_second=1, city='$city', amount='$amount' WHERE id=$this_id";


        }

        if ($con->query($sql) === TRUE) {
            header("Location: result_out.php?result=Successfully Set");
        }else {
            // echo "Error updating record: " . $con->error;
            header("Location: result_out.php?result='Fail'");
        }
        
    }
    
    

    
?>