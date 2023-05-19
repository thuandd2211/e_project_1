<?php require_once('../controller/home_be.php');
    session_start();
    $section = array();
    for ($i = 1; $i <= 4; $i ++){
        $section[$i] = select_home($i);
        if ($section[$i] -> num_rows > 0){
            while ($row[$i] = $section[$i] -> fetch_assoc()){
                $title[$i][] = $row[$i]['title'];
                $sub_title[$i][] = $row[$i]['sub_title'];
                $script[$i][] = $row[$i]['script'];
                $image[$i][] = $row[$i]['image'];
            }
        }
    }
    $result_partner = select_partner();
    if ($result_partner -> num_rows > 0){
        while ($row_partner = $result_partner -> fetch_assoc()){
            $img_partner[] = $row_partner['partner_logo'];
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
                    <img src="images/home/<?php echo $image[1][0]; ?>" class="d-block w-100"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/home/<?php echo $image[1][1]; ?>" class="d-block w-100"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/home/<?php echo $image[1][2]; ?>" class="d-block w-100 " alt="...">
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
                <div class="col-6 hover01"  style="position: relative;">
                    <figure><img src="images/home/<?php echo $image[2][0]; ?>" alt=""></figure>
                </div>
                <div class="col-6">
                    <h1><?php echo $title[2][0]; ?></h1>
                    <p><?php  echo $script[2][0]; ?></p>

                </div>
            </div>
        </section>
        <div id="clear"></div>

        <section id="section_3" >
            <div class="container text-center pt-5">
                <h1><?php echo $title[3][0]; ?></h1>
            </div>
            
            <section id="section_3_1" class="container"> 
                <div class="row container-fluid">
                    <div class="col-6 hover01" style="position: relative;">
                        <figure><img src="images/home/<?php echo $image[3][0]; ?>" alt=""></figure>
                    </div>
                    <div class="col-6">
                        <h2><a href="wedding.php"><?php echo $sub_title[3][0]; ?></a></h2>
                        <p><?php echo $script[3][0]; ?></p>
                    </div>
                </div>
            </section>
            <section id="section_3_2" class="container">
                <div class="row container-fluid">
                    <div class="col-6">
                        <h2><a href="company.php"><?php echo $sub_title[3][1]; ?></a></h2>
                        <p><?php echo $script[3][1]; ?></p>
                    </div>
                    <div class="col-6 hover01" style="position: relative;">
                        <figure><img src="images/home/<?php echo $image[3][1]; ?>" alt=""></figure>
                    </div>
                </div>
            </section>
            <section id="section_3_3" class="container">
                <div class="row container-fluid">
                    <div class="col-6 hover01" style="position: relative;"> 
                        <figure><img src="images/home/<?php echo $image[3][2]; ?>" alt=""></figure>
                    </div>
                    <div class="col-6">
                        <h2><a href="outdoor.php"><?php echo $sub_title[3][2]; ?></a></h2>
                        <p><?php echo $script[3][2]; ?></p>
                    </div>
                </div>
            </section>
        </section>
        <div id="clear"></div>
        <section id="section_4" class="container">
            <div class="container text-center" id="section_4_1">
                <h1><?php echo $title[4][0]; ?></h1>
            </div>
            <br>
            <div id="section_4_2" class="row container-fluid">
                <?php 
                    for ($j = 0; $j < count($image[4]); $j ++){
                        echo "
                            <div class='col-4 container-fluid hover01'  style='position: relative;'>
                                <a href='#'>
                                    <figure><img src='images/home/{$image[4][$j]}'></figure>
                                    <br>
                                    <h5 class='container text-center'>{$sub_title[4][$j]}</h5>
                                    <p>{$script[4][$j]}</p>
                                </a>
                            </div>
                        ";
                    }
                ?>
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
                        foreach($img_partner as $partner){
                            echo "
                                <div class='col-3 container'>
                                    <img src='images/partner/{$partner}'>
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