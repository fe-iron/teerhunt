<?php 
include 'connection.php';
$conn = OpenCon();
$q = intval($_GET['q']);

$sql="SELECT * FROM house_entry WHERE id = '".$q."'";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
echo $row['city']." ";
echo $row['amount'];
?>
