<?php require_once('../controller/login_be.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Đăng nhập</title>

</head>

<body>
 <form action="" method="post">
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                </div>
                <div class="col-md-6 right">
                   
                        <div class="input-box">
                            <h1>Login</h1>

                            <div class="input-field">
                                <input type="text" class="input" name="username" id="name" placeholder="<?php echo isset($error['username']) ? $error['username'] : ''; ?>">
                                <label for="name">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" name="password" id="password" placeholder="<?php echo isset($error['password']) ? $error['password'] : ''; ?>">
                                <label for="password">Password</label>
                            </div>

                            <div class="input-field">
                                <input type="submit" class="submit" name="login" id="submit" value="Login">
                            </div>
                            <div class="signup">
                                <span>Have an account? <a href="register.php">Register here</a></span>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
    </form>
</body>

</html>