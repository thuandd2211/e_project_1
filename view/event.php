    <?php require_once('include/header.php'); ?>
    <main>    
        <?php 
        $result_intro = select_intro($_GET['id']);
        $result_detail_event = select_detail_event($_GET['id']);
        $result_food = select_food($_GET['id']);
 
            if ($result_intro -> num_rows > 0){
                while($row_intro = $result_intro -> fetch_assoc()){
                    $title_intro = $row_intro['title'];
                    $script_intro = $row_intro['script'];
                    $image_intro = $row_intro['image'];
                }
            }
            if ($result_detail_event -> num_rows > 0){
                while($row_detail_event = $result_detail_event-> fetch_assoc()){
                    $title_detail = $row_detail_event['detail_title'];
                    $script_detail = $row_detail_event['detail_script'];
                    $image_detail = $row_detail_event['detail_image'];
                    $event_image = $row_detail_event['event_image'];
                    $id = $row_detail_event['detail_id'];
                }
            }
            $result_service = select_service($id);
            if ($result_service -> num_rows >0){
                while ($row_service = $result_service -> fetch_assoc()){
                    $title_service[] = $row_service['title'];
                    $script_service[] = $row_service['script'];
                    $image_service[] = $row_service['image'];
                }
            }
            if ($result_food -> num_rows >0){
                while ($row_food = $result_food->fetch_assoc()){
                    $event_food[] = $row_food['image'];
                }
            }
        ?>
        <section id="section_1">
            <img src="images/<?php echo $event_image; ?>" alt="">
        </section>

        <section id="section_2" class="container">
            <h1><?php echo $title_intro; ?></h1>
            <img class="d-flex justify-content-center" src="images/<?php echo $image_intro; ?>" alt="">
            <p><?php echo $script_intro; ?></p>
        </section>
        <section id="section_3" class="container">
            <h1>DỊCH VỤ SỰ KIỆN</h1>
            <div class="row">
                <div class="col-6 hover01" style='position: relative;'>
                    <figure><img src="images/<?php echo $image_detail; ?>"></figure>
                </div>
                <div class="col-6 p-5">
                    <h2><?php echo $title_detail; ?></h2>
                    <p><?php echo $script_detail; ?></p>
                </div>
            </div>
        </section>
        <section id="section_4" class="container">
            <h1>GÓI SỰ KIỆN</h1>
            <div class='container-fluid row' style='position: relative;'>
                <?php 
                    for ($j = 0; $j < count($title_service); $j ++){
                        echo "
                            <div class='col-4 p-3'>
                                <h3>{$title_service[$j]}</h3>
                                <p>{$script_service[$j]}</p>
                            </div>
                            <div class='col-8 hover01 mb-4' style='position: relative;'>
                                <figure><img src='images/{$image_service[$j]}' alt=''></figure>
                            </div>  
                            ";                   
                    }
                ?>
            </div>
        </section>
        <section id="section_5" class="container">
            <h1>ẨM THỰC</h1>
            <div class="row container-fluid">
                <?php 
                    for ($k = 0; $k < 4; $k ++){
                        echo "
                            <div class='col-3'>
                                <img src='images/{$event_food[$k]}'>
                            </div>  
                        ";
                    }
                ?>
  
            </div>
        </section>
    </main>
 
    <?php require_once('include/footer.php'); ?>
