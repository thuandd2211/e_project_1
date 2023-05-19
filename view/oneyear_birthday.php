<?php require_once('../controller/oneyear_birthday_be.php');
    session_start();
    $section = array();
    for ($i = 1; $i <= 5; $i ++){
        $section[$i] = select_oneyear_birthday($i);
        if ($section[$i] -> num_rows > 0){
            while ($row[$i] = $section[$i] -> fetch_assoc()){
                $title[$i][] = $row[$i]['title'];
                $sub_title[$i][] = $row[$i]['sub_title'];
                $script[$i][] = $row[$i]['script'];
                $image[$i][] = $row[$i]['image'];
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
    <title>TIỆC THÔI NÔI</title>
    <link rel="stylesheet" href="css/wedding.css">
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
        <div>
          <img src="images/oneyear_birthday/<?php echo $image[1][0]; ?>">
        </div>
    </section>
    <section id="section_2" class="container">
        <div> 
          <h1><?php echo $title[2][0]; ?></h1>
          <img src="images/oneyear_birthday/<?php echo $image[2][0]; ?>">
          <p><?php echo $script[2][0]; ?></p>
        </div>
    </section>
    <div id="clear"></div>
    <section id="section_3" class="container">
      <section id="section_3_1">
        <div class=' container-fluid hover01'  style='position: relative;'>
          <figure><img src="images/oneyear_birthday/<?php echo $image[3][0]; ?>"></figure>
        </div>        
      </section>
      <section id="section_3_2">
        <div>
         <h1 style="background-image: url('https://bom.so/SvQc1T');"><?php echo $title[3][0]; ?></h1>
        <p><?php echo $script[3][0]; ?></p>
        <p><?php echo $script[3][1]; ?></p>
        <ul>
          <?php
            for($j=2;$j<count($script[3]);$j++){
              echo "<li>{$script[3][$j]}</li>";
            }
          ?>
        </ul>
        </div>
      </section>
    </section>
    <div id="clear"></div>
    <section id="section_4" class="container">
      <h1><?php echo $title[4][0]; ?></h1>
      <p><?php echo $script[4][0]; ?></p>
      <div id="carousel-intro" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-intro" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel-intro" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel-intro" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/oneyear_birthday/<?php echo $image[4][0]; ?>" class="d-block w-100"  alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/oneyear_birthday/<?php echo $image[4][1]; ?>" class="d-block w-100"  alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/oneyear_birthday/<?php echo $image[4][2]; ?>" class="d-block w-100 " alt="...">
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
  <section id="section_5" class="container">
    <section id="section_5_1">
      <h1><?php echo $title[5][0]; ?></h1>
      <p><?php echo $script[5][0]; ?></p>  
    </section>
    <section id="section_5_2">
    <div class="row">
      <?php 
        for ($k=0;$k<count($image[5]);$k++){
          echo "
            <div class='col-4 container-fluid hover01'  style='position: relative;'>
              <figure><img src='images/oneyear_birthday/{$image[5][$k]}'></figure>
            </div>          
          ";
        }
      ?>
    </div>  
    </section>
  </section>
  </main>
  <div id="clear"></div>
  <?php require_once('../view/include/footer.php'); ?>
</body>

</html>