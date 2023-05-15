<?php require_once('../controller/home_be.php');
    session_start();
    $result = select_db();
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            $name[] =  $row['home_display_name'];
            $script[] = $row['home_display_script'];
            $other[] = $row['home_display_other'];
            $img[] = $row['home_display_image'];
        }
    }
    $result_partner = select_partner();
    if ($result_partner -> num_rows > 0){
        while ($row_partner = $result_partner -> fetch_assoc()){
            $image[] = $row_partner['partner_logo'];
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
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>
    <?php require_once('../view/include/header.php'); ?>
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
                    <p><?php  echo $script[0]; ?></p><p><?php echo $other[0]; ?></p>

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
                        <h2><a href="#"><?php echo $name[1]; ?></a></h2>
                        <p><?php echo $script[1]; ?></p>
                    </div>
                </div>
            </section>
            <section id="section_3_2" class="container">
                <div class="row container-fluid">
                    <div class="col-6">
                        <h2><a href="#"><?php echo $name[2]; ?></a></h2>
                        <p><?php echo $script[2]; ?></p>
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
                        <h2><a href="#"><?php echo $name[3]; ?></a></h2>
                        <p><?php echo $script[3]; ?></p>
                    </div>
                </div>
            </section>
        </section>
        <div id="clear"></div>
        <section id="section_4" class="container">
            <div class="container text-center" id="section_4_1">
                <h1>DẤU ẤN TRÀNG AN PLAZA</h1>
            </div>
            <br>
            <div id="section_4_2" class="row container-fluid">
                <div class="col-4 container-fluid hover01"  style="position: relative;">
                    <a href="#">
                        <figure><img src="images/<?php echo $img[4]; ?>" alt=""></figure>
                        <br>
                        <h5 class="container text-center"><?php echo $name[4]; ?></h5>
                        <p><?php echo $script[4]; ?></p>
                    </a>
                </div>
                <div class="col-4 container-fluid hover01" style="position: relative;">
                    <a href="#">
                        <figure><img src="images/<?php echo $img[5]; ?>" alt=""></figure>
                        <br>
                        <h5 class="container text-center"><?php echo $name[5]; ?></h5>
                        <p><?php echo $script[5]; ?></p>
                    </a>
                </div>
                <div class="col-4 container-fluid hover01" style="position: relative;">
                    <a href="#">
                        <figure><img src="images/<?php echo $img[6]; ?>" alt=""></figure>
                        <br>
                        <h5 class="container text-center"><?php echo $name[6]; ?></h5>
                        <p><?php echo $script[6]; ?></p>
                    </a>
                </div>
            </div>
        </section>    
        <div id="clear"></div>
        <section id="section_5" class="container">
                <div class="container">
                    <h1 class="container text-center">ĐỐI TÁC</h1>
                </div>
                <br><br>
                <div class="row container-fluid">
                    <?php
                        foreach($image as $partner){
                            echo "
                                <div class='col-3 container'>
                                    <img src='images/{$partner}'>
                                </div>
                            ";
                        }
                    ?>
                </div>
        </section>
    </main>
    <div id="clear"></div>
    <?php require_once('../view/include/footer.php'); ?>


	
</body>
</html>