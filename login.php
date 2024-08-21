<?php
session_start();

include("fun/conn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <h2 class="mb-4">Login</h2>
<?php

if($_SERVER['REQUEST_METHOD']==='POST'){ 

$user=$_POST['user'];
$pass=$_POST['pass'];
//print_r($_POST);

$select="SELECT* FROM browser WHERE firstname='$user' && password='$pass'";
$result=$conn->query($select);
$bro=$result->fetch_assoc();
$id=$bro['id']?? "";

$num=$result->num_rows;
//echo$num;
if($num===1)
{
    $_SESSION['in']=$id;
    $id=$_GET['id'];
    header("location:cart.php");

}
}
?>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="Enter your username"name="user">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control"  placeholder="Enter your password"name="pass">
        </div>


        <button type="submit" class="btn btn-dark">Login</button>


<pre>

</pre>
            <?php
if($_SERVER['REQUEST_METHOD']==='POST')
{if($num===0){
    echo"<div class='alert  alert-danger'> your data false</div>";
}}
?>
        </form>
<?php
if(isset($_GET['id'])){
$id=$_GET['id'];
?>

        <a  href="register.php?id=<?=$id?>"> <button type="submit" class="btn btn-dark">creat account</button></a>      <a  href="cart.php"> <button name='v'method='post' class="btn btn-dark">visit</button></a>
<?php
    } else{
        

        echo '<a  href="register.php?id=9"> <button type="submit" class="btn btn-dark">creat account</button></a>     <a  href="cart.php"> <button name="v"method="post" class="btn btn-dark">visit</button></a> ';}


?>
    </div>
    </div>
</div>
<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>









