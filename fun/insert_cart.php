<?php
session_start();
include("conn.php");
if(isset($_SESSION['in']))
{
$id_user=$_SESSION['in'];

$id_brod=$_GET['id'];
$qun=1;

$select="SELECT * FROM cart WHERE pro_id='$id_brod'&& use_rid=$id_user";
$result=$conn->query($select);
$pro=$result->fetch_assoc();
$num=$result->num_rows;
//echo $num;
    $id=$pro['pro_id'];
    $q=$pro['quan'];
//echo$q;

if($num==0){


$insert="INSERT INTO cart( pro_id, use_rid, quan) VALUES ('$id_brod','$id_user',$qun)";
$conn->query($insert);
}elseif($num>0){

    $up="UPDATE cart SET quan=quan+1 WHERE pro_id ='$id'";
    $conn->query($up);
    
}

header("location:../cart.php?id=$id_brod");
}else{
    $d=$_GET['id'];
    //header("location:../shop.php");
    echo "you have login  :)  if you want click here <a href='../login.php?id=$d'> <button>login</button></a>";
}
?>
