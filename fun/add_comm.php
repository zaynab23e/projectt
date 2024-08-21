<?php
session_start();
include('conn.php');
if(isset($_SESSION['in']))
{
$idd_u=$_SESSION['in'];
echo $idd_u;
}
if(isset($_GET['id']))
$id_p=$_GET['id'];
echo$id_p;
$comm=$_POST['comm'];

$insert="INSERT INTO comment ( id_user, id_prod, comm) VALUES ('$idd_u','$id_p','$comm')";
$conn->query($insert);
header("location:../detail.php?id=$id_p");

?>