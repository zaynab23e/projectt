<?php
include("connect.php");
$id=$_GET['id'];


$del="DELETE FROM admins WHERE id ='$id'";
$conn->query($del);
header("location:../admins.php")
?>
