<?php
    require_once("../controller/review_be.php");
    $id = $_GET['id'];
    $result = select_gallery_rv($id);
    if ($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
            $title = $row['title'];
            $author = $row['author'];
            $script = $row['script'];
            $image = $row['image'];
            $time = $row['time'];
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
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo $title; ?></title>
</head>
<body>    
    <?php require_once('../view/include/header.php'); ?>
    <div id="clear"></div>
    <main>
        <section id="section_1" class="container">
            <h3><?php echo $title; ?></h3>
            <p>
                <i class="fa-solid fa-calendar"></i> <?php echo $time; ?>      <i class="fa-solid fa-marker"></i> <?php echo $author; ?> 
            </p>
        </section>
        <div id="clear"></div>
        <section id="section_2" class="container">
            <p><?php echo $script; ?></p>
            <img src="images/review_1/<?php echo $image; ?>" alt="">
        </section>
        <div id="clear"></div>
        <section id="section_3" class="container">
            <div class="container-fluid row" style="border-top: 1px solid rgb(212, 203, 203);" >
                <div class="container-fluid col-6">
                    <form action="" method="post">
                    <textarea name="comment" placeholder="Viết bình luận" value=""></textarea>
                    <br>
                    <input type="submit" name="submit" value="Gửi">
                    <p style="color:red;"><?php echo isset($error['comment']) ? $error['comment'] : ''; ?></p>
                </form>
                </div>
                <div class="col-6">
                    <?php 
                        $result = select_cmt();
                        if ($result -> num_rows > 0){
                            while ($row = $result -> fetch_assoc()){
                                echo "
                                <div class='row' style='padding:20px; margin-bottom:5px;'>
                                    <div class='col-2'>
                                        <img src='images/review_1/user.jpg'  width='50px' height='50px'>
                                    </div>
                                    <div class='col-10 comment'>
                                        <p style='color:blue'>{$row['name']}     <i style='font-size:smaller; color: gray;'>{$row['date']}</i> </p> 
                                        <p>{$row['review']}</p>
                                    </div>
                                </div>";
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <div id="clear"></div>
    <?php require_once('../view/include/footer.php'); ?>
</body>
</html>