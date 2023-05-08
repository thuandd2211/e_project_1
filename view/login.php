<?php require_once('../controller/login_be.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>
<body  class="image">
    <div id="wrapper">
        <form action="" method="post" id="form-login">
            <h1 class="form-heading">Login</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Username" name="username">
                <?php echo isset($error['username']) ? $error['username'] : ''; ?>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Password" name="password">
                <?php echo isset($error['password']) ? $error['password'] : ''; ?>
            </div>
            <div class="row from-check">
                <input type="checkbox" checked="checked" class="from-check-input" name="remember" id="remember-me">
                <label for="remember-me" class="form-check-label">Remember</label>
            </div>    
            <div class="list-icon form-check-inline ">    
                <a href=""><i class="fa-brands fa-facebook  "></i></a>
                <a href=""><i class="fa-brands fa-google "></i></a>
                <a href=""><i class="fa-brands fa-tiktok "></i></a>
            </div>  
                <input type="submit" name="login" class="btn btn-primary btn-block" value="Login" > 
                <a  href="register.php" class="btn btn-link btn-sm btn-block">Register now</a> 
        </form>
    </div>
  
</body>
</html>


   
