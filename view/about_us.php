<?php
    require_once("../controller/about_us_be.php");
    session_start();
    $section = array();
    for ($i = 1; $i<=5; $i++){
        $section[$i] = select_about_us($i);
        if ($section[$i] -> num_rows > 0){
            while ($row[$i] = $section[$i] -> fetch_assoc()){
                $title[$i][] = $row[$i]['about_us_display_title'];
                $script[$i][] = $row[$i]['about_us_display_script'];
                $image[$i][] = $row[$i]['about_us_display_image'];
            }
        }
    }

    $result_contact = select_contact();
    if ($result_contact -> num_rows > 0){
        while ($row_contact = $result_contact -> fetch_assoc()){
            $phone[] = $row_contact['phone'];
            $address[] = $row_contact['address'];
            $email[] = $row_contact['email'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about_us.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>About Us</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg" >
        <div class="container">
            <a class="navbar-brand fw-bold" href="home.php">TRÀNG AN PLAZA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav align-items-lg-center ms-auto me-lg-2">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">SẢNH TIỆC</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-none dropdown-toggle fw-bold" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">TIỆC CƯỚI & KỶ NIỆM</button> 
                            <ul class="dropdown-menu" style="background-color: rgb(191, 243, 243);"  aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item fw-bold" href="#">TIỆC CƯỚI</a></li>
                                <li><a class="dropdown-item fw-bold" href="#">TIỆC THÔI NÔI</a></li>
                                <li><a class="dropdown-item fw-bold" href="#">TIỆC CÁ NHÂN</a></li>
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">TIỆC DOANH NGHIỆP</a>
                    </li>
                    <li>
                        <a class="nav-link fw-bold" href="#">TIỆC NGOÀI</a>
                    </li>  
                    <li>
                        <a class="nav-link fw-bold" href="#">GALLERY</a>
                    </li>   
                    <li>
                        <a class="nav-link fw-bold" href="#">ABOUT US</a>
                    </li>
                    <li>
                        <a class="nav-link fw-bold" href="contact.php">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav align-items-lg-center ms-auto me-lg-2">
                    <li class="nav-item dropdown">
                        <button class="btn btn-none dropdown-toggle fw-bold" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></button> 
                            <ul class="dropdown-menu" style="background-color: rgb(191, 243, 243);"  aria-labelledby="dropdownMenuButton">
                                <?php
                                    if (!isset($_SESSION['user'][0])){
                                        echo '<li><a class="dropdown-item fw-bold" href="login.php">ĐĂNG NHẬP</a></li>
                                        <li><a class="dropdown-item fw-bold" href="register.php">ĐĂNG KÍ</a></li>';
                                    } else{
                                        echo '<li><a class="dropdown-item fw-bold" href="#">TÀI KHOẢN</a></li>
                                        <li><a class="dropdown-item fw-bold" href="../controller/logout.php">ĐĂNG XUẤT</a></li>';
                                    }
                                
                                ?>						
                            </ul>
                    </li>
                </ul>
            </div>
        </div>  
    </nav>
    <div id="clear"></div>
    <main>
        <section id="section_1">
            <img src="images/<?php echo $image[1][0]; ?>" alt="">
        </section>
        <section id="section_2" class="container">
            <h1><?php echo $title[2][0]; ?></h1>
            <p><?php echo $script[2][0]; ?></p>
        </section>
        <section id="section_3" class="container">
            <div class="row container exp">
                <div class="col-4 container">
                    <i class="fa-solid fa-business-time" style="font-size: 50px;"></i>
                    <p><?php echo $script[3][0]; ?></p>
                </div>
                <div class="col-4 container">
                    <i class="fa-sharp fa-solid fa-people-group" style="font-size: 50px;"></i>
                    <p><?php echo $script[3][1]; ?></p>
                </div>
                <div class="col-4 container">
                    <i class="fa-solid fa-award" style="font-size: 50px;"></i>
                    <p><?php echo $script[3][2]; ?></p>
                </div>
            </div>
        </section>
        <section id="section_4" class="container">
            <h1><?php echo $title[4][0]; ?></h1>
            <div class="row container ">
                <div class="col-4 container hover01" style="position: relative;">
                    <a href="#">
                        <figure><img src="images/<?php echo $image[4][0]; ?>" alt=""></figure>
                        <div class="centered">Tiệc cưới</div>
                    </a>

                </div>
                <div class="col-4 container hover01" style="position: relative;">
                    <a href="">
                        <figure><img src="images/<?php echo $image[4][1]; ?>" alt=""></figure>
                        <div class="centered">Tiệc doanh nghiệp</div>
                    </a>
                </div>
                <div class="col-4 container hover01" style="position: relative;">
                    <a href="">
                        <figure><img src="images/<?php echo $image[4][2]; ?>" alt=""></figure>
                        <div class="centered">Tiệc cá nhân</div>
                    </a>
                </div>
            </div>
        </section>
        <section id="section_5" class="container">
            <div class="container">
                <p><?php echo $script[5][0]; ?></p>
            </div>
        </section>
    </main>
    <footer>
        <section id="section_1" class="container">
            <div class="row container-fluid ">
                <div class="col-4">
                    <ul>
                        <li><a href="home.php"><b>HOME</b></a></li>
                        <li><a href="#">SẢNH TIỆC</a></li>
                        <li><a href="#">TIỆC CƯỚI & KỶ NIỆM</a></li>
                        <li><a href="#">TIỆC DOANH NGHIỆP</a></li>
                        <li><a href="#">TIỆC NGOÀI</a></li>
                        <li><a href="#">GALLERY</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li>Phone: <?php echo $phone[0];  ?></li>
                        <li>Address: <?php echo $address[0]; ?></li>
                        <li>Email: <?php echo $email[0]; ?></li>
                        <li><a href="contact.php">ABOUT US</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li>LOCATION</li>
                        <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.73540732168308!2d105.84508406712065!3d21.042026250464826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abba0d983d19%3A0x71e0663c68743fbf!2zS2jDoWNoIFPhuqFuIFRyw6BuZyBBbiBQbGF6YQ!5e0!3m2!1sen!2s!4v1682623477627!5m2!1sen!2s" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
                    </ul>
                </div>
            </div>
            <hr style="background-color: white;">
            <span style="color: white;">© 2018 VN Works Co., Ltd. All rights reserved.</span>
        </section>
    </footer>
</body>
</html>