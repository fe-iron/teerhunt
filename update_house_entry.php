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
        $my_id = $_POST['this_id'];
    
        if($round == '1'){
            $sql = "UPDATE `house_entry` SET house_num_fr='$house', round_first=1, amount='$amount', 
            city='$city', `F/R`='$num' WHERE id=$my_id";
            
        }else{
            $sql = "UPDATE `house_entry` SET house_num_sr='$house', round_second=1, amount='$amount', 
                    city='$city', `S/R`='$num' WHERE id=$my_id";

        }

        if ($con->query($sql) === TRUE) {
            header("Location: result_out.php?result=Successfully Updated");
        }else {
            // echo "Error updating record: " . $con->error;
            header("Location: result_out.php?result='Failed'");
        }
    }
    
?>