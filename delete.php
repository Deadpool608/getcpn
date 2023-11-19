<?php
include("connect.php");

$id=$_REQUEST['id'];
$query = "DELETE FROM product WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
header("Location: coupons.php"); 
exit();
?>