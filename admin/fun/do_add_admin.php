<?php
include("connect.php");

//echo"<pre>";
//print_r($_POST);

$name=$_POST['name'];
$number=$_POST['number'];
$address=$_POST['address'];
$section=$_POST['section'];




$insert="INSERT INTO admins ( name , phone , address , sec) 
VALUES('$name','$number','$address','$section')" ;
$conn->query($insert);
header("location:../admins.php");


?>