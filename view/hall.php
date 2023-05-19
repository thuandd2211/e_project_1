<?php
    require_once("../controller/hall_be.php");
    session_start();
    $result_contact = select_contact();
    if ($result_contact -> num_rows > 0){
        while ($row_contact = $result_contact -> fetch_assoc()){
            $phone[] = $row_contact['phone'];
            $address[] = $row_contact['address'];
            $email[] = $row_contact['email'];
        }
    }
    $section = array();
    for ($i = 2; $i <= 4; $i++ ){
        $section[$i] = select_hall($i);
        if ($section[$i] -> num_rows > 0){
            while($row[$i] = $section[$i] -> fetch_assoc()){
                $title[$i][] = $row[$i]['title'];
                $script[$i][] = $row[$i]['script'];
                $image[$i][] = $row[$i]['image'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sảnh tiệc</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/hall.css">
    <link rel="stylesheet" href="css/header.css">
    <!-- <link rel="stylesheet" href="css/footer.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php require_once('../view/include/header.php'); ?>
    <div id="clear"></div>
    <main>
        <section id="section_1">
            <section id="section_1_1">
                <img src="images/hall/<?php echo $image[2][0]; ?>">
            </section>
            <section id="section_1_2" class="container">
                <h1 class="section-title section-title-center"><?php echo $title[2][0]; ?></h1>
                <h2><?php echo $script[2][0]; ?></h2> 
                <div class="container">
                    <p><?php echo $script[2][1]; ?></p>
                    <p><?php echo $script[2][2]; ?></p>
                </div>                
            </section>

        </section>
        <div id="clear"></div>

        <section id="section_2" class="container">
            <h1><?php echo $title[3][0]; ?></h1>
            <div class="row pb-5">
                <?php
                    for ($j = 0; $j < count($image[3]); $j ++ ){
                        echo "
                            <div class='col-4'>
                                <img src='images/hall/{$image[3][$j]}'>
                                <p>{$script[3][$j]}</p>
                            </div>
                        ";
                    }
                ?>
            </div>
        </section>  
        <div id="clear"></div>      
        <section id="section_3" class="container">    
             <h1>KHÁM PHÁ</h1>
            <img src="images/hall/<?php echo $image[4][0]; ?>"  alt="Ảnh minh họa">
        </section>
    </main>
    <div id="clear"></div>
    <?php require_once('../view/include/footer.php'); ?>
</body>
</html>
    

   

