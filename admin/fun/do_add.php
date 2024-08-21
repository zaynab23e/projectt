<?php
session_start();

include("connect.php");

//print_r($_POST);

$errors=[];




$name=     $_POST['name'];
$price=    $_POST['price'];
$count=    $_POST['count'];
$brand=    $_POST['brand'];
$categroy= $_POST['categroy'];
$des=      $_POST['des'];



if(empty($name))
{
    $errors['name'] = 'name can`t be empty';
}



if(empty($price))
{
    $errors['price'] = 'price can`t be empty';

}



if(empty($count))
{
    $errors['count'] = 'count can`t be empty';

    

}



if(empty($brand))
{
    $errors['brand'] = 'brand can`t be empty';
}



if(empty($categroy))
{
    $errors['category'] = 'category can`t be empty';
}


if(empty($des))
{
    $errors['description'] = 'description can`t be empty';
}


print_r($errors);

if(empty($errors)){

   

    $all_img=[];
    $uplod =$_FILES['image'];

    $name_img= $uplod['name'];
    $img_tmp=  $uplod['tmp_name'];
    $img_size= $uplod['size'];
    $img_error= $uplod['error'];

    $allow_ext=['PNG','gif','jpeg','jpg','png'];


$count_img=count($name_img);

for($i=0; $i<$count_img; $i++){

$img_exp=explode(".",$name_img[$i]);

$img_ext[$i]=end($img_exp);


if(!in_array($img_ext[$i],$allow_ext)){
echo"img type error";
exit();
}


if($img_size[$i]>3000000){
    echo"the file is too big";
    exit();

}

$new_img_name=time().rand(1,100000).$name_img[$i];


$all_img[]=$new_img_name;


move_uploaded_file($img_tmp[$i],"../imgs/$new_img_name");

}

$dd=implode(',',$all_img);



$insert="INSERT INTO product ( name, price, img, cat, brand, count, des) 
VALUES ('$name','$price','$dd','$categroy','$brand','$count','$des')";
$conn->query($insert);
header("location:../tables.php");
}else{

    
    $_SESSION['error']=$errors;
    header("location:../tables.php?action=add") ;
}

?>