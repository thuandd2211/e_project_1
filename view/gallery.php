<?php require_once('../controller/gallery_be.php');
    session_start();
    $result_contact = select_contact();
    if ($result_contact -> num_rows > 0){
        while ($row_contact = $result_contact -> fetch_assoc()){
            $phone[] = $row_contact['phone'];
            $address[] = $row_contact['address'];
            $email[] = $row_contact['email'];
        }
    }
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 9;
    $total_records = select_gallery_all() -> num_rows;
    $total_page = ceil($total_records / $limit);      
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    $start = ($current_page - 1) * $limit;  
    $result_gallery = select_gallery_limit($start,$limit);
    if ($result_gallery -> num_rows > 0 ){
        while ($row_gallery = $result_gallery -> fetch_assoc()){
            $id[] = $row_gallery['id'];
            $title[] = $row_gallery['title'];
            $author[] = $row_gallery['author'];
            $image[] = $row_gallery['image'];
            $time[] = $row_gallery['time'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Gallery</title>
</head>
<body>    
    <?php require_once('../view/include/header.php'); ?>
    <div id="clear"></div>
    <main>
        <h1>GALLERY</h1>
        <section id="section_1" class="container"> 
            <div class='container row mb-5'>   
            <?php 
                for ($i = 0; $i < count($id) ; $i++){
                    if (($i+1) % 3 != 0){
                        echo "
                            <div class='col-4 gallery container hover01'  style='position: relative;'>
                                <div class='script'>
                                    <a href='../view/review.php?id={$id[$i]}' style='text-decoration: none;'>
                                        <figure><img src='images/review_1/{$image[$i]}'></figure>
                                        <div class='desc container'>
                                            <p class='content'>{$title[$i]}</p>
                                            <p style='font-size:smaller;'>
                                                <i class='fa-solid fa-calendar'></i> {$time[$i]}     <i class='fa-solid fa-marker'></i> {$author[$i]}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        ";
                    } else {
                        echo "
                            <div class='col-4 gallery container hover01'  style='position: relative;'>
                                <div class='script'>
                                    <a href='../view/review.php?id={$id[$i]}' style='text-decoration: none;'>
                                        <figure><img src='images/review_1/{$image[$i]}'></figure>
                                        <div class='desc container'>
                                            <p class='content'>{$title[$i]}</p>
                                            <p style='font-size:smaller;'>
                                                <i class='fa-solid fa-calendar'></i> {$time[$i]}     <i class='fa-solid fa-marker'></i> {$author[$i]}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>"; 
                        echo "<div class='container row mb-5'>";                        
                    } 
                }
                
            ?>
            </div>
        </section>
        <section id="section_2">
            <div class="pagination container d-block text-center">
            <?php 
                if ($current_page > 1 && $total_page > 1){
                    echo '<a class="a-css" href="gallery.php?page='.($current_page-1).'">Prev</a>  ';
                }
                for ($i = 1; $i <= $total_page; $i++){
                    if ($i == $current_page){
                        echo '<span class="span-css">'.$i.'</span>  ';
                    }
                    else{
                        echo '<a class="a-css" href="gallery.php?page='.$i.'">'.$i.'</a>  ';
                    }
                }
                if ($current_page < $total_page && $total_page > 1){
                    echo '<a class="a-css" href="gallery.php?page='.($current_page+1).'">Next</a>  ';
                }
            ?>
            </div>
        </section>
    </main>
    <div id="clear"></div>
    <?php require_once('../view/include/footer.php'); ?>
</body>
</html>