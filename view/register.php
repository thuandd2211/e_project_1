<?php require_once('../controller/register_be.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>
<body   class="image">
    <section>
        <div id="wrapper">
         <div class="container">
            <div class="row justify-content-around">
                <form action="" method="post" class="col-md-6" >
                        <h1 class="text-center text-uppercase h5 py-4">Register</h1>
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" id="fullname" class="form-control" >
                            <?php echo isset($error['fullname']) ? $error['fullname'] : ''; ?>
                        </div>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" name="username" id="username" class="form-control" minlength="8" maxlength="15">
                            <?php echo isset($error['username']) ? $error['username'] : ''; ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" minlength="8" maxlength="15">
                            <?php echo isset($error['password']) ? $error['password'] : ''; ?>
                        </div>
                        <div class="form-group">
                            <label for="gender">Sex</label>
                            <div>
                                <div class="from-check form-check-inline">
                                    <input type="radio" name="gender" id="male" value="male" class="from-check-input">
                                    <label for="male" class="form-check-label" >Male</label>
                                </div>
                                <div class="from-check form-check-inline">
                                    <input type="radio" name="gender" id="female" value="female" class="from-check-input">
                                    <label for="female" class="form-check-label">Female</label>
                                </div>
                                <?php echo isset($error['gender']) ? $error['gender'] : ''; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" >
                            <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="phone" class="form-control" maxlength="10">
                            <?php echo isset($error['phone']) ? $error['phone'] : '';  ?>
                        </div>
                        <br>
                        <input type="submit" value="Register" name="register" class="btn-primary btn btn-block mb-4">
                        <a  href="login.php" class="btn btn-link btn-sm btn-block">Login</a> 
                </form>
            </div>
        </div>
    </div>
    </section>
</body>
</html>