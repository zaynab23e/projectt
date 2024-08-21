<?php

include("connect.php");

$id=$_GET['id'];

$delete_c="DELETE  FROM category WHERE id='$id'";
$conn->query($delete_c);

header("location:../category.php")









?>