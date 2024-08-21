<?php
include("inc/nav.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #fff;">
<div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4">Create Account</h2>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
}

?>

        <form action="fun/do_register.php?id=<?=$id?>" method="POST">
            <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter your first name"name="firstname">
            </div>
            <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter your last name"name="lastname">
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email address"name="email">
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password"name="password">
        </div>
            
            <button type="submit" class="btn btn-dark">Register</button>
        </form>
        <br>
       
    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

