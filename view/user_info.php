<?php
    require_once("../model/module_base.php");
    $result = select_viewer($_SESSION['user'][2]);
    if ($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
            $name = $row['name'];
            $username = $row['username'];
            $phone = $row['phone'];
            $email = $row['email'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_info.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Thông tin tài khoản</title>
</head>
<body>
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mb-sm-5">
                    <div class="card card-style1 border-0">
                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img src="images/review/profile.png" style="width: 100%; height: fit-content;"alt="...">
                                </div>
                                <div class="col-lg-6 px-xl-10">
                                    <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                        <h3 class="h2 text-white mb-0"><?php echo $name; ?></h3>
                                        <span class="text-info">User</span>
                                    </div>
                                    <ul class="list-unstyled mb-1-9">
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Tài khoản: </span> <?php echo $username; ?></li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> <?php echo $email; ?></li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Số điện thoại:</span> <?php echo $phone; ?></li>
                                    </ul>
                                    <a  href="home.php" class="btn btn-success">Quay lại trang chủ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>