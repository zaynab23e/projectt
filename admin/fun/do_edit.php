<?php
include("connect.php");
$id=$_GET['id'];
//echo "<pre>";
//print_r($_POST);

$name=     $_POST['name'];
$price=    $_POST['price'];
$count=    $_POST['count'];
$brand=    $_POST['brand'];
$categroy= $_POST['categroy'];
$des=      $_POST['des'];

//echo"<pre>";
//print_r($_FILES);



if($_FILES['image']['error']=== 0)
{ 
$name_img=$_FILES['image']['name'];
$img_tmp=$_FILES['image']['tmp_name'];
$img_size=$_FILES['image']['size'];


$img_exp=explode(".",$name_img);
//print_r($img_exp);
$img_ext=end($img_exp);
//print_r($img_ext);



$allow_ext=['PNG','gif','jpeg','jpg','png','bmb'];

if(!in_array($img_ext,$allow_ext)){
echo"img type error";
exit();
}

if($img_size>300000000){
    echo"the file is too big";
    exit();

}



$new_img_name=time().rand(1,100000).$name_img;
//echo $new_img_name;

move_uploaded_file($img_tmp,"../imgs/$new_img_name");



$update="UPDATE product  SET name='$name',price='$price',img='$new_img_name',cat='$categroy',brand='$brand',count='$count',des='$des'

WHERE id='$id'";




}

else{$update="UPDATE product  SET name='$name', price='$price', cat='$categroy', brand='$brand', count='$count',des='$des'

    WHERE id='$id'";
    }
$conn->query($update);
header("location:../tables.php");




?>