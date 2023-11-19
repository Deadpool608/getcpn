<?php 
include("connect.php");

$id = $_REQUEST["usrid"];
$query = "UPDATE `users` SET `acstatus`='0' WHERE `usrid`='$id'";
if(mysqli_query($con,$query)){

    header('location: users.php');
    exit();
}
?>