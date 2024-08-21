<?php


include("../admin/fun/connect.php");
echo"<pre>";
print_r($_POST);

$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];







$insert="INSERT INTO  browser ( password, firstname, lastname, email) 
VALUES ('$password','$first_name','$last_name','$email')" ;
$conn->query($insert);
header("location:../login.php");



?>








