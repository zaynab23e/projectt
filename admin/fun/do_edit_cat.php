<?php
include("connect.php");
//echo"<pre>";
//print_r($_POST);

$id=$_GET['id'];

$name=$_POST['name'];
$id=$_GET['id'];


$update_c="UPDATE category  SET name='$name' WHERE id='$id' ";
$conn->query($update_c);

header("location:../category.php");
?>