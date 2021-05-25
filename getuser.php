<?php 
    include 'connection.php';
    $conn = OpenCon();
    $q = intval($_GET['q']);

    $sql="SELECT * FROM users WHERE id = '".$q."'";
    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    if($row['full_name'] == ''){
        echo " ";
        echo $row['email']." ";
        echo $row['phone_number'];
    }elseif($row['email'] == ''){
        echo $row['full_name']." ";
        echo " ";
        echo $row['phone_number'];
    }else if($row['phone_number'] == ''){
        echo $row['full_name']." ";
        echo $row['email']." ";
        echo " ";  
    }else{
        echo $row['full_name']." ";
        echo $row['email']." ";
        echo $row['phone_number'];
    }
    
?>