<?php
    require('connection.php');
    $con = OpenCon();

    
    // If form submitted, insert values into the database.
    if (isset($_POST['remove_id'])){
            // removes backslashes
        $this_id = $_POST['remove_id'];
        $sql = "DELETE FROM users WHERE id=$this_id";

        if ($con->query($sql) === TRUE) {
            header("Location: sub_admin.php?result=Successfully Updated");
        } else {
            header("Location: sub_admin.php?result=Failed to remove!");
        }

    }
?>