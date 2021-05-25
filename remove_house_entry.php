<?php
    require('connection.php');
    $con = OpenCon();

    
    // If form submitted, insert values into the database.
    if (isset($_POST['remove_id'])){
            // removes backslashes
        $this_id = $_POST['remove_id'];
        $sql = "DELETE FROM house_entry WHERE id=$this_id";

        if ($con->query($sql) === TRUE) {
            header("Location: result_out.php?result=Successfully Updated");
        } else {
            header("Location: result_out.php?result=Failed to remove!");
        }

    }
?>