<?php require_once('../controller/register_be.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Đăng ký</title>
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
                        <h1>Register</h1>
                        <div class="input-field">
                            <input type="text" class="input" name="fullname" id="fullname" placeholder="<?php echo isset($error['fullname']) ? $error['fullname'] : ''; ?>">
                            <label for="address">Full name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" name="username" id="username" placeholder="<?php echo isset($error['username']) ? $error['username'] : ''; ?>">
                            <label for="name">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" name="password" id="password" placeholder="<?php echo isset($error['password']) ? $error['password'] : ''; ?>">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" name="email" id="email" placeholder="<?php echo isset($error['email']) ? $error['email'] : ''; ?>">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" name="phone" id="phone" placeholder="<?php echo isset($error['phone']) ? $error['phone'] : ''; ?>">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" name="register" id="submit" value="Register">                          
                        </div>
                        <div class="signup">
                        <span><a href="login.php">Login here</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>
