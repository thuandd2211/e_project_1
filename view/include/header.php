<header>
    <nav class="navbar fixed-top navbar-expand-lg" >
            <div class="container-fluid ms-5 me-5" >
                <a class="navbar-brand fw-bold" href="home.php">TRÀNG AN PLAZA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-2">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="hall.php">SẢNH TIỆC</a>
                        </li>
                        <li class="nav-item dropdown">
							<button class="btn btn-none dropdown-toggle fw-bold" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">TIỆC CƯỚI & KỶ NIỆM</button> 
								<ul class="dropdown-menu" style="background-color: rgb(191, 243, 243);"  aria-labelledby="dropdownMenuButton">
									<li><a class="dropdown-item fw-bold" href="wedding.php">TIỆC CƯỚI</a></li>
									<li><a class="dropdown-item fw-bold" href="oneyear_birthday.php">TIỆC THÔI NÔI</a></li>
									<li><a class="dropdown-item fw-bold" href="party.php">TIỆC CÁ NHÂN</a></li>
								</ul>
						</li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="company.php">TIỆC DOANH NGHIỆP</a>
                        </li>
                        <li>
                            <a class="nav-link fw-bold" href="outdoor.php">TIỆC NGOÀI</a>
                        </li>  
                        <li>
                            <a class="nav-link fw-bold" href="gallery.php?page=1">GALLERY</a>
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
                                            <li><a class='dropdown-item fw-bold' href='user_info.php'>TÀI KHOẢN</a></li>
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