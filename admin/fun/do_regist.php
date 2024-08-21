<?php
include("connect.php");
echo"<pre>";
print_r($_POST);


$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];






$insert="INSERT INTO  browser ( password, `first name`, `last name`, email) 
VALUES ('$password','$first_name','$last_name','$email')" ;
$conn->query($insert);
header("location:../login.php");



?>