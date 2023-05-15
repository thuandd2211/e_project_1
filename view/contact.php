<?php
    require_once('../controller/contact_be.php');
        session_start();
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
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Liên hệ</title>
</head>
<body>
    <header>
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
                        <a class="nav-link fw-bold" href="#">LIÊN HỆ</a>
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
    </header>
    <div id="clear"></div>
    <main>
        <section id="section_2">
            <div class="container w-100 h-100" >
                <h1>LIÊN HỆ</h1>
            </div>
            
        </section>
        <section id="section_1" class="container">
            <div class="row">
                <div class="col-6" id="section_1_1">
                    <form action="" method="post">
                        <input type="text" name="cus_name" placeholder="Họ Tên" class="cus_info">
                        <p style="color:red; padding-left: 5px;"><?php echo isset($error['cus_name']) ? $error['cus_name'] : ''; ?></p>
                        <input type="text" name="cus_phone" placeholder="Số điện thoại" class="cus_info" minlength="10" maxlength="11">
                        <p style="color:red; padding-left: 5px;"><?php echo isset($error['cus_phone']) ? $error['cus_phone'] : ''; ?></p>
                        <input type="text" name="cus_email" placeholder="Email" class="cus_info">
                        <p style="color:red; padding-left: 5px;"><?php echo isset($error['cus_email']) ? $error['cus_email'] : ''; ?></p>
                        <textarea name="cus_script" placeholder="Nội dung" class="cus_script"></textarea>
                        <input type="submit" name="contact" value="Gửi đi" class="submit">
                        <?php
                            if (isset($data['suscess'])){
                                echo "<p class='suscess'>{$data['suscess']}</p>";
                            }
                            else {
                                echo '';
                            }
                        ?>
                        
                    </form>
                </div>  
                <div class="col-6" id="section_1_2"> 
                    <h2 style="color: rgb(226, 36, 36)">LIÊN HỆ TRÀNG AN PLAZA</h2>
                    <p>Quý khách có nhu cầu tổ chức sự kiện, tiệc cưới, doanh nghiệp, tiệc cá nhân vui lòng liên hệ bên dưới </p>
                    <br>
                    <p>Address: <?php echo $address[0]; ?></p>
                    <p>Phone: <?php echo $phone[0];  ?></p>
                    <p>Email: <?php echo $email[0]; ?></p>
                </div> 
            </div> 
        </section>

    </main>
    <div id="clear"></div>
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
                        <li><a href="#">CONTACT</a></li>
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