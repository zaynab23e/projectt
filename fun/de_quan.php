<?php
session_start();
include("conn.php");
$id=$_GET['id'];


$select="SELECT * FROM cart WHERE id='$id'";
$res=$conn->query($select);
$pr=$res->fetch_assoc();
    //echo $pr['quan'];
    //echo $id;
    $oldquan=$pr['quan'];
    $newquan=$pr['quan']-1;
    



$update="UPDATE cart SET quan= '$newquan' WHERE id='$id'";
$conn->query($update);
header("location:../cart.php");

//echo$newquan

















?>