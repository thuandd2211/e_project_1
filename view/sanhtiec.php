<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sảnh tiệc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/banquet_hall.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <a class="nav-link fw-bold" href="#">TIỆC CƯỚI & KỶ NIỆM</a>
                        </li>
                        <li class="nav-item dropdown">
							<button class="btn btn-none dropdown-toggle fw-bold" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">SẢNH TIỆC</button> 
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
    </nav>
</header>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
    <div style="position: relative;">
      <img src="https://channel.mediacdn.vn/2020/5/25/photo-1-1590404242900517700678.jpg" alt="Ảnh minh họa" class="img-fluid ">
      <div class="container section-title-container" style="text-align: center;"><h1 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:75%;color:rgb(210, 80, 0);">SẢNH TIỆC - TRÀNG AN PLAZA TÂN PHÚ</span><b></b></h1></div>
      <h2 style="text-align: center;">BIẾN HÓA TRONG TỪNG</h2>
      <h2 style="text-align: center;">CHI TIẾT</h2> 
      <div class="centered">
      <p class="text-justify">Được tạo dựng theo phong cách kiến trúc chiết chung sự giao thoa của nhiều nguồn cảm hứng kết hợp là chất định tính đặc trưng tạo nên phong cách</p> 
      <p class="text-justify">của Asiana Plaza Tân Phú. Bao phủ các sảnh sự kiện là sự giàu có của các chi tiết, hình khối hoa văn chạm khắc không trùng lặp. Tiếp đó, hình ảnh phản</p>
      <p class="text-justify">chiếu từ nền đá marble, hệ đèn pha lê còn tạo nên lớp ánh sáng đổ bóng phân bố uyển chuyển chiếu rọi những tác phẩm điêu khắc mang giá trị cao.</p>
      <p class="text-justify">Có thể thấy Asiana Plaza Tân Phú là một địa điểm đầy phong thái cho buổi tiệc chiêu đãi và sự kiện của bạn.</p>
      <p class="text-justify">Cùng với đó, hệ thống trang thiết bị âm thanh, ánh sáng, tiện ích vận hành cùng khả năng điều phối, sắp xếp đa dạng các loại hình set-up chính là những nhân tố quyết định làm nên sự nổi bật của địa điểm.</p>
      <h1 style="text-align: center;">VÌ SAO CHỌN CHÚNG TÔI</h1>
      </div>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-4 text-center">
      <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/icon-1.png" alt="Ảnh minh họa" style="width: 40%; height: 25%;">
      <p>KHÔNG GIAN ĐA CHỨC NĂNG</p>
      <p>VỚI 8 SẢNH TIỆC ĐA DẠNG TỪNG SẢNH</p>
      <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/icon-speaker.png" alt="Ảnh minh họa" style="width: 40%; height: 25%;">
      <p>HỆ THỐNG ÂM THANH ÁNH SÁNG CAO CẤP</p>
    </div>
    <div class="col-4 text-center">
      <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/icon-lobby.png" alt="Ảnh minh họa" style="width: 40%; height: 25%;">
      <p>HỆ THỐNG SẢNH VÀ SẢNH CHỜ RIÊNG BIỆT</p>
      <p>TẠO KHÔNG GIAN RIÊNG TƯ</p>
      <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/icon-led.png" alt="Ảnh minh họa" style="width: 40%; height: 25%;">
      <p>MÀN HÌNH LED HIỆN ĐẠI</p>
      <h1 style="text-align: center;">KHÁM PHÁ</h1>
    </div>
    <div class="col-4 text-center">
      <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/icon-3.png" alt="Ảnh minh họa" style="width: 40%; height: 25%;">
      <p>ĐỘI NGŨ HÀNG TRĂM NHÂN SỰ CÓ KHẢ NĂNG PHỤC</p>
      <p>VỤ CÙNG LÚC 3000 KHÁCH</p>
      <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/icon-5-sao.png" alt="Ảnh minh họa" style="width: 40%; height: 25%;">
      <p>TRANG THIẾT BỊ TIÊU CHUẨN 5 SAO</p>
    </div>
    <div class="row justify-content-end">
      <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/sanh-hapus-suc-chua.png" class="float-right mx-3" alt="Ảnh minh họa" style="width: 80%; height: 30%;">
      <img src="https://asiana-plaza.com/wp-content/uploads/2021/03/sanh-hapus-so-do-1.png" class="float-right mx-3" alt="Ảnh minh họa" style="width: 80%; height: 60%;">
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
    

   

