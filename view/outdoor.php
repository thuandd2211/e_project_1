<?php require_once('../controller/outdoor_be.php');
    session_start();
    $section = array();
    for ($i = 1; $i <= 4; $i ++){
        $section[$i] = select_outdoor($i);
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
    <title>TIỆC NGOÀI</title>
    <link rel="stylesheet" href="css/party.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php require_once('../view/include/header.php'); ?>
    <div id= "clear"></div>
    <main>
    <section id="section_1">
        <div>
          <img src="images/outdoor/<?php echo $image[1][0]; ?>">
        </div>
    </section>
    <section id="section_2" class="container">
        <div> 
          <h1><?php echo $title[2][0]; ?></h1>
          <img src="images/outdoor/<?php echo $image[2][0]; ?>" >
          <p><?php echo $script[2][0]; ?></p>
        </div>
    </section>
    <div id="clear"></div>  
    <section id="section_3">
        <div class="container text-center pb-5">
            <h1><?php echo $title[3][0]; ?></h1>
        </div>
        <section id="section_3_1" class="container"> 
            <div class="row container-fluid">
                <div class=' container-fluid hover01 col-6'  style='position: relative;'>
                    <figure><img src="images/outdoor/<?php echo $image[3][0]; ?>"></figure>
                  </div>
                <div class="col-6">
                    <h2 style="background-image: url('https://bom.so/SvQc1T');"><?php echo $sub_title[3][0]; ?></h2>
                    <p><?php echo $script[3][0]; ?></p>
                </div>
            </div>
        </section>
        <div id="clear"></div>
        <section id="section_3_2" class="container">
            <div class="row container-fluid">
                <div class="col-6">
                    <h2 style="background-image: url('https://bom.so/SvQc1T');"> <?php echo $sub_title[3][1]; ?></h2>
                    <p><?php echo $script[3][1]; ?></p>
                </div>
                <div class=' container-fluid hover01 col-6'  style='position: relative;'>
                    <figure><img src="images/outdoor/<?php echo $image[3][1]; ?>"></figure>
                  </div>   
            </div>
        </section>
        <div id="clear"></div>
        <section id="section_3_3" class="container">
            <div class="row container-fluid">
                <div class=' container-fluid hover01 col-6'  style='position: relative;'>
                    <figure><img src="images/outdoor/<?php echo $image[3][2]; ?>"></figure>
                  </div>
                <div class="col-6">
                    <h2 style="background-image: url('https://bom.so/SvQc1T');"><?php echo $sub_title[3][2]; ?></h2>
                    <p><?php echo $script[3][2]; ?></p>
                </div>
            </div>
        </section>
    </section>
    </main>
    <div id="clear"></div>
    <?php require_once('../view/include/footer.php'); ?>
</body>
</html>