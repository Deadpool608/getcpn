<?php
include ('connect.php');

if(isset($_POST['signup'])) 
{
    $email =$_REQUEST['email'];
    $name =$_REQUEST['name'];
    $phone =$_REQUEST['phone'];
    $pass =$_REQUEST['pass'];
    $sql=mysqli_query($con,"INSERT INTO `users`( `name`, `phone`, `email`, `pswd`) VALUES ('$name','$phone','$email','$pass')");
    if($sql){
        header("Location: index.php"); 
    }
    else
    {
        header("Location: signup.php"); 
    }
}
?> 