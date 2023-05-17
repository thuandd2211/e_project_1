<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiệc ngoài</title>
  <link rel="stylesheet" href="css/barbecue.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg" >
            <div class="container-fluid ms-5 me-5">
                <a class="navbar-brand fw-bold " href="home.php">TRÀNG AN PLAZA</a>
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
                            <a class="nav-link fw-bold" href="about_us.php">ABOUT US</a>
                        </li>
                        <li>
                            <a class="nav-link fw-bold" href="contact.php">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-2">
                        <li class="nav-item dropdown" >
									<?php
                                        if (!isset($_SESSION['user'][0])){
                                            echo "<button class='btn btn-none dropdown-toggle fw-bold me-2' type='button' id='dropdownMenuButton' data-bs-toggle='dropdown' aria-expanded='false'><i class='fa-solid fa-user'></i></button> 
                                            <ul class='dropdown-menu' style='background-color: rgb(191, 243, 243);'  aria-labelledby='dropdownMenuButton'>
                                            <li><a class='dropdown-item fw-bold' href='login.php'>ĐĂNG NHẬP</a></li>
                                            <li><a class='dropdown-item fw-bold' href='register.php'>ĐĂNG KÍ</a></li>";
                                        } else{
                                            echo "<button class='btn btn-none dropdown-toggle fw-bold ' type='button' id='dropdownMenuButton' data-bs-toggle='dropdown' aria-expanded='false'><i class='fa-solid fa-user'></i> {$_SESSION['user'][3]}</button> 
                                            <ul class='dropdown-menu' style='background-color: rgb(191, 243, 243);'  aria-labelledby='dropdownMenuButton'>
                                            <li><a class='dropdown-item fw-bold' href='#'>TÀI KHOẢN</a></li>
                                            <li><a class='dropdown-item fw-bold' href='../controller/logout.php'>ĐĂNG XUẤT</a></li>";
                                        }
                                    
                                    ?>						
								</ul>
						</li>
                    </ul>
                </div>
            </div>  
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
      <img src="https://static.wixstatic.com/media/2f6b5d_3bf99ee3621e4a3c93e1616b63083f71~mv2_d_5472_3078_s_4_2.jpg/v1/fill/w_1960,h_812,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/2f6b5d_3bf99ee3621e4a3c93e1616b63083f71~mv2_d_5472_3078_s_4_2.jpg" alt="Ảnh minh họa" class="img-fluid" >
      <div class="container section-title-container" style="text-align: center;"><h1 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:75%;color:rgb(210, 80, 0);">TIỆC NGOÀI - TRÀNG AN PLAZA TÂN PHÚ</span><b></b></h1></div>
      <h2 style="text-align: center;">ĐỒNG HÀNH TRONG</h2>
      <h2 style="text-align: center;">TỪNG TRẢI NGHIỆM</h2> 
      <div class="centered">
      <p class="text-justify">Phối hợp ăn ý với yêu cầu riêng của nhà tổ chức, chúng tôi cung cấp trọn gói tiệc phục vụ tại chỗ (Outside Catering). Việc của bạn là chỉ cần chia sẻ với</p>
      <p class="text-justify">chúng tôi bất cứ địa điểm nào diễn ra sự kiện để Asiana Plaza mang đến trải nghiệm hài lòng và yên tâm từ cung cách phục vụ chuyên nghiệp đến ẩm</p>
      <p class="text-justify">thực ấn tượng cho khách tham dự.</p>
      </div>
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="d-flex flex-row">
    <div style="position: relative;">
    <div class="image-container">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-7klv_n9u1RYfougLKGxp0DIjKBPeVTv7w9NZHMnK3QYe9VLMhvtm77Dsk0TSD5EdQwU&usqp=CAU" alt="Ảnh" class="position-absolute top-10 start-0" />
      <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/golden-brush-4-1.png" alt="Ảnh" class="position-absolute top-0 start-0" />
      <p style="position: absolute; top: 50px; left: 50px; z-index: 1;">DỊCH VỤ</p>
      <p style="position: absolute; top: 70px; left: 50px; z-index: 1;">Bạn đưa ra đề bài và Asiana Plaza sẽ là người tìm</p>
      <p style="position: absolute; top: 90px; left: 50px; z-index: 1;">ra giải pháp, đó là cách chúng tôi chinh phục</p>
      <p style="position: absolute; top: 110px; left: 50px; z-index: 1;">những bản kể hoạch tổ chức tiệc ngoài từ giản</p>
      <p style="position: absolute; top: 130px; left: 50px; z-index: 1;">đơn đến phức tạp nhất. Với đội ngũ nhiều năm</p>
      <p style="position: absolute; top: 150px; left: 50px; z-index: 1;">kinh nghiệm, Asiana Plaza bảo đảm duy trì đẳng</p>
      <p style="position: absolute; top: 170px; left: 50px; z-index: 1;">cấp thương hiệu hàm chứa trong ẩm thực, phong</p>
      <p style="position: absolute; top: 190px; left: 50px; z-index: 1;">thái phục vụ, tiết mục chương trình và trang trí</p>
      <p style="position: absolute; top: 210px; left: 50px; z-index: 1;">đến với không gian đia điểm được bạn chỉ định.</p>
    </div>      
    </div>
    <div style="position: relative;">
    <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/khai-truong-1.jpg" alt="Ảnh" class="img-fluid" />
    <p style="position: absolute; top: 50px; left: 50px; z-index: 1;">KHAI TRƯƠNG</p>
    <p style="position: absolute; top: 70px; left: 50px; z-index: 1;">RA MẮT DỰ ÁN</p>
    <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/le-khoi-cong.jpg" alt="Ảnh" class="img-fluid" />
    <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/tiec-ngoai-troi-1.jpg" alt="Ảnh" class="img-fluid" />
    </div>
  </div>
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
                        <li>Phone: </li>
                        <li>Address: </li>
                        <li>Email: </li>
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

  </div>
</div>
</body>
</html>
