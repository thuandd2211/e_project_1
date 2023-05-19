<?php
    require_once("../controller/about_us_be.php");
    session_start();
    $section = array();
    for ($i = 1; $i<=5; $i++){
        $section[$i] = select_about_us($i);
        if ($section[$i] -> num_rows > 0){
            while ($row[$i] = $section[$i] -> fetch_assoc()){
                $title[$i][] = $row[$i]['title'];
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
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>About Us</title>
</head>
<body>
    <?php require_once('../view/include/header.php'); ?>
    <div id="clear"></div>
    <main>
        <section id="section_1">
            <img src="images/about_us/<?php echo $image[1][0]; ?>" alt="">
        </section>
        <section id="section_2" class="container">
            <h1><?php echo $title[2][0]; ?></h1>
            <p><?php echo $script[2][0]; ?></p>
        </section>
        <section id="section_3" class="container">
            <div class="row container exp">
                <div class="col-4 container">
                    <i class="fa-solid fa-business-time" style="font-size: 50px;"></i>
                    <p><?php echo $script[3][0]; ?></p>
                </div>
                <div class="col-4 container">
                    <i class="fa-sharp fa-solid fa-people-group" style="font-size: 50px;"></i>
                    <p><?php echo $script[3][1]; ?></p>
                </div>
                <div class="col-4 container">
                    <i class="fa-solid fa-award" style="font-size: 50px;"></i>
                    <p><?php echo $script[3][2]; ?></p>
                </div>
            </div>
        </section>
        <section id="section_4" class="container">
            <h1><?php echo $title[4][0]; ?></h1>
            <div class="row container ">
                <?php
                    for ($j = 0; $j < count($image[4]); $j ++){
                        echo "
                            <div class='col-4 container hover01' style='position: relative;'>
                                <a href='#'>
                                    <figure><img src='images/about_us/{$image[4][$j]}'></figure>
                                    <div class='centered'>{$script[4][$j]}</div>
                                </a>
                            </div>
                        ";
                    }
                ?>
            </div>
        </section>
        <section id="section_5" class="container">
            <div class="container">
                <p><?php echo $script[5][0]; ?></p>
            </div>
        </section>
    </main>
    <?php require_once('../view/include/footer.php'); ?>
</body>
</html>