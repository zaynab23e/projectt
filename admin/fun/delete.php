<?php
include("connect.php");
$id=$_GET['id'];

$delete="DELETE FROM product WHERE id='$id'";
$result_d=$conn->query($delete);
header("location:../tables.php");














?>