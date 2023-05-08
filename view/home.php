<?php require_once('../controller/home_be.php');
    $result = select_db();
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            $name[] =  $row['home_display_name'];
            $script[] = $row['home_display_script'];
            $other[] = $row['home_display_other'];
            $img[] = $row['home_display_image'];
        }
    }
    $result_partner = select_partner(4);
    if ($result_partner -> num_rows > 0){
        while ($row_partner = $result_partner -> fetch_assoc()){
            $image[] = $row_partner['home_display_image'];
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
	<title>Trang chủ Tràng An Plaza</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg" >
            <div class="container">
                <a class="navbar-brand fw-bold" href="home.html">TRÀNG AN PLAZA</a>
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
                            <a class="nav-link fw-bold" href="#">LIÊN HỆ</a>
                        </li>   
                    </ul>
                </div>
            </div>
    </nav>
    <div id="clear"></div>
    <main>
        <section id="section_1">
            <div id="carousel-intro" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carousel-intro" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carousel-intro" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carousel-intro" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/wedding-3.jpg" class="d-block w-100"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/wedding-2.png" class="d-block w-100"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/wedding_1.jpg" class="d-block w-100 " alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-intro" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-intro" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  
                </button>
              </div>
        </section>
        <div id="clear"></div>

        <section id="section_2" class="container">
            <div class="row">
                <div class="col-6">
                    <img src="images/<?php echo $img[0]; ?>" alt="">
                </div>
                <div class="col-6">
                    <h1><?php echo $name[0]; ?></h1>
                    <p><?php  echo $script[0]; ?> <br> <br> <?php echo $other[0]; ?></p>

                </div>
            </div>
        </section>
        <div id="clear"></div>

        <section id="section_3" >
            <div class="container text-center pt-5">
                <h1>LĂNG KÍNH TRÀNG AN PLAZA</h1>
            </div>
            
            <section id="section_3_1" class="container"> 
                <div class="row container-fluid">
                    <div class="col-6">
                        <img src="images/<?php echo $img[1]; ?>" alt="">
                    </div>
                    <div class="col-6">
                        <h2><?php echo $name[1]; ?></h2>
                        <span><?php echo $script[1]; ?></span>
                    </div>
                </div>
            </section>
            <section id="section_3_2" class="container">
                <div class="row container-fluid">
                    <div class="col-6">
                        <h2><?php echo $name[2]; ?></h2>
                        <span><?php echo $script[2]; ?></span>
                    </div>
                    <div class="col-6">
                        <img src="images/<?php echo $img[2]; ?>" alt="">
                    </div>
                </div>
            </section>
            <section id="section_3_3" class="container">
                <div class="row container-fluid">
                    <div class="col-6"> 
                        <img src="images/<?php echo $img[3]; ?>" alt="">
                    </div>
                    <div class="col-6">
                        <h2><?php echo $name[3]; ?></h2>
                        <span><?php echo $script[3]; ?></span>
                    </div>
                </div>
            </section>
        </section>
        <section id="section_4" class="container">
            <div class="container text-center" id="section_4_1">
                <h1>DẤU ẤN TRÀNG AN PLAZA</h1>
            </div>
            <br>
            <div id="section_4_2" class="row container-fluid">
                <div class="col-4 container-fluid">
                    <img src="images/<?php echo $img[4]; ?>" alt="">
                    <br>
                    <br>
                    <h5 class="container text-center"><?php echo $name[4]; ?></h5>
                    <span class="container"><?php echo $script[4]; ?></span>
                </div>
                <div class="col-4 container-fluid">
                    <img src="images/<?php echo $img[5]; ?>" alt="">
                    <br>
                    <br>
                    <h5 class="container text-center"><?php echo $name[5]; ?></h5>
                    <span><?php echo $script[5]; ?></span>
                </div>
                <div class="col-4 container-fluid">
                    <img src="images/<?php echo $img[6]; ?>" alt="">
                    <br>
                    <br>
                    <h5 class="container text-center"><?php echo $name[6]; ?></h5>
                    <span><?php echo $script[6]; ?></span>
                </div>
            </div>
            <section id="section_5" class="container">
                <div class="container">
                    <h1 class="container text-center">ĐỐI TÁC</h1>
                </div>
                <br><br>
                <div class="row container-fluid">
                    <div class="col-3">
                        <img src="images/<?php echo $image[0]; ?>" alt="">
                    </div>
                    <div class="col-3">
                        <img src="images/<?php echo $image[1]; ?>" alt="">
                    </div>
                    <div class="col-3">
                        <img src="images/<?php echo $image[2]; ?>" alt="">
                    </div>
                    <div class="col-3">
                        <img src="images/<?php echo $image[3]; ?>" alt="">
                    </div>

                </div>
                
            </section>
            
        </section>
          
    </main>
    <div id="clear"></div>
    <footer>
        <section id="section_1" class="container">
            <div class="row container-fluid ">
                <div class="col-4">
                    <ul>
                        <li><a href="home.html"><b>HOME</b></a></li>
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