<?php require_once('include/header.php'); 
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
?>
    <main>
        <section id="section_review_1" class="container">
            <h3><?php echo $title; ?></h3>
            <p>
                <i class="fa-solid fa-calendar"></i> <?php echo $time; ?>      <i class="fa-solid fa-marker"></i> <?php echo $author; ?> 
            </p>
        </section>
        <div id="clear"></div>
        <section id="section_review_2" class="container">
            <p><?php echo $script; ?></p>
            <img src="images/<?php echo $image; ?>" alt="">
        </section>
        <div id="clear"></div>
        <section id="section_review_3" class="container">
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
                                        <img src='images/review/user.jpg'  width='50px' height='50px'>
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
    <?php require_once('include/footer.php');?>
