<?php
include("connect.php");



//echo"<pre>";
//print_r($_POST);

$name=$_POST['name'];
$number=$_POST['number'];
$address=$_POST['address'];
$section=$_POST['section'];

$id=$_GET['id'];


$update="UPDATE admins SET name='$name', phone='$number', address='$address', sec='$section'
WHERE id='$id'";
$conn->query($update);
header("location:../admins.php");
?>