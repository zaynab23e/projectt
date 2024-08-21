<?php
//session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

<?php



if($_SERVER['REQUEST_METHOD']==='POST'){

include("fun/connect.php");
$user=     $_POST['user'];
$password= $_POST['password'];




$select="SELECT * FROM users WHERE username='$user' && password='$password'";
$result=$conn->query($select);
$row=$result->fetch_assoc();
$num =$result->num_rows;


//echo $num ;
if($num>0 && $row['owner']==='1'){

    //$_SESSION['login']=$user;

header("location:dashboard.php");

}elseif($_SERVER['REQUEST_METHOD']==='POST') {
    $select_a="SELECT * FROM admins WHERE name='$user' && password='$password'";
    $result_a= $conn->query($select_a);
    $admin=$result_a->fetch_assoc();
    $numm=$result_a->num_rows;
    //echo $numm ;


if($numm>0){



header("location:tables.php");

}

}

}





?>

                                    <form class="user" action="<?=$_SERVER['PHP_SELF']?>"  method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" name="user"
                                                placeholder="Enter your name...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    if($num>0 && $row['owner']==='2'){
$user=$row['username'];

echo"<div> welcome.$user you are supervisor but you cant pass</div>";

    }
elseif ($num===0) {
echo"<div>sorry your data undefined</div>";
    
}

}
if($_SERVER['REQUEST_METHOD']==='POST'){
    if($numm>0){ 
    header("location:tables.php");
    }
}


?>
                                    
                                        <button type="submit" class="btn btn-primary btn-user btn-block"> Login  </button>
                                        
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>





                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>