<?php

  
    require('connection.php');
    $con = OpenCon();

    
    // If form submitted, insert values into the database.
    if (isset($_POST['date'])){
            // removes backslashes
        $fr = stripslashes($_REQUEST['fr']);
            //escapes special characters in a string
        $fr = mysqli_real_escape_string($con,$fr);
        $sr = stripslashes($_REQUEST['sr']);
        $sr = mysqli_real_escape_string($con,$sr);
        

        $my_date = $_POST['date'];
        
        $result = " ";
        if($sr == "" || $sr == " "){
            $sql = "INSERT into `bhutan_teer` (`F/R`, both_set) 
                    VALUES ('$fr', 0)";
            // $result = $con->query($sql);

        }else{
            $sql = "SELECT * FROM `bhutan_teer` WHERE `both_set`=0 ORDER BY `date` DESC";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                $row = $result->fetch_assoc();
                $this_id = $row['id'];
                 
               
            } else {
                
            }


            $sql = "UPDATE `bhutan_teer` SET `S/R`='$sr', both_set=1 WHERE id=$this_id";
            
            // $result = $con->query($sql);
        }
        if ($con->query($sql) === TRUE) {
            header("Location: admin.php?result='Success'");
        } else {
            header("Location: admin.php?result='Success'");
        }
        
        
    }

    
?>