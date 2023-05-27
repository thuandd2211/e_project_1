<?php 
    require_once("../model/module_base.php");
    include("../controller/review_be.php");
    $result_event = select_event_type();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/event.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tràng An Palace</title>
</head>
<body>
    <header>
        <div class="container-fluid ">
            <nav class="navbar  fixed-top  navbar-expand-lg">
                <div class="container-fluid ms-5 me-5 row">
                    <div class="col-2">
                        <a href="home.php"><img src="images/name.png" width="70%" alt=""></a>
                    </div>
                    <ul class="navbar-nav nav-menu align-items-lg-center d-flex justify-content-center col-8">
                        <li class="menu-item dropdown">
                            <button class="btn btn-none dropdown-toggle text-white fw-bold " type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">SỰ KIỆN</button>
                            <ul class="dropdown-menu" style="background-color: rgb(170, 169, 169);" aria-labelledby="dropdownMenuButton">
                                <?php
                                 if ($result_event -> num_rows > 0){
                                    while($row_event = $result_event -> fetch_assoc()){
                                        echo "<li><a class='dropdown-item text-white fw-bold' href='event.php?id={$row_event['id']}'>{$row_event['name']}</a></li>";
                                    }
                                 }
                                ?>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a class="nav-link text-white fw-bold" href="gallery.php?page=1">GALLERY</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a class="nav-link  fw-bold" href="home.php"><img src="images/logo.png"
                                    width="100%" height="70px" alt=""></a>
                        </li>
                        <li class="menu-item dropdown">
                            <a class="nav-link text-white fw-bold" href="about_us.php">ABOUT US</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a class="nav-link text-white fw-bold" href="contact.php">LIÊN HỆ</a>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse col-2" id="collapsibleNavbar">
                        <ul class="navbar-nav align-items-lg-center ms-auto me-lg-2">
                            <li class="nav-item dropdown">
                            <?php
                                        if (!isset($_SESSION['user'][0])){
                                            echo "<button class='btn btn-none dropdown-toggle fw-bold me-2 text-white' type='button' id='dropdownMenuButton' data-bs-toggle='dropdown' aria-expanded='false'><i class='fa-solid fa-user'></i></button> 
                                            <ul class='dropdown-menu' style='background-color: rgb(170, 169, 169);'   aria-labelledby='dropdownMenuButton'>
                                            <li><a class='dropdown-item text-white fw-bold' href='login.php'>ĐĂNG NHẬP</a></li>
                                            <li><a class='dropdown-item text-white fw-bold' href='register.php'>ĐĂNG KÍ</a></li>";
                                        } else{
                                            echo "<button class='btn btn-none dropdown-toggle fw-bold text-white ' type='button' id='dropdownMenuButton' data-bs-toggle='dropdown' aria-expanded='false'><i class='fa-solid fa-user'></i> {$_SESSION['user'][3]}</button> 
                                            <ul class='dropdown-menu' style='background-color: rgb(170, 169, 169);'  aria-labelledby='dropdownMenuButton'>
                                            <li><a class='dropdown-item text-white fw-bold' href='user_info.php'>TÀI KHOẢN</a></li>
                                            <li><a class='dropdown-item text-white fw-bold' href='../controller/logout.php'>ĐĂNG XUẤT</a></li>";
                                        }
                                    ?>	
                                    

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <div id="clear"></div>
