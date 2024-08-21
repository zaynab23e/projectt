<?php

include("connect.php");

echo"<pre>";
print_r($_POST);

$name=$_POST['name'];



$inse="INSERT INTO category( name ) VALUES ('$name') ";
$conn->query($inse);
header(("location:../category.php"))


?>