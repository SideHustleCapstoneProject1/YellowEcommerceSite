
<?php 
require_once('include/user-core.php');


    if(isset($_POST['login'])){
        $login = $user->login($_POST['email'], $_POST['password']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
<!--     <link rel="stylesheet" href="Assets/css/custom.css">
 -->    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,700;1,600&family=Ubuntu&display=swap" rel="stylesheet">
<body>
    <div class="container">
        <center>
          
        <div class="col-md-6" style="padding-top:100px;">
        <h1>User Login</h1><br>
<!--         <img src="Assets/images/admin-logo.png" alt="admin-logo">
 -->        <form method="post" action="login.php">
        <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="email" name="email" placeholder="default: yellow@capstone.com">
        </div><br>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password" placeholder="default: yellow">
        </div><br>

<button name="login" type="submit" class="btn btn-success">Login</button>

    </form>
</div>
</center>
    </div>

    <script src="Assets/js/bootstrap.bundle.js"></script>
</body>
</html>