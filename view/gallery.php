<?php require_once('include/header.php'); 
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
    <main>
        <h1 class="h1_gallery" style="color:rgb(212,175,55);">GALLERY</h1>
        <section id="section_gallery_1" class="container" style="display: flex;"> 
            <div class='container row mb-5' style="display:block;">   
            <?php 
                for ($i = 0; $i < count($id) ; $i++){
                    echo "
                            <div class='col-4 gallery container hover01'  style='position: relative; margin-bottom:20px'>
                                <div class='script'>
                                    <a href='review.php?id={$id[$i]}' style='text-decoration: none;'>
                                        <figure class='gallery_section_1_figure'><img src='images/{$image[$i]}'></figure>
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
                for ($j = 1; $j <= $total_page; $j++){
                    if ($j == $current_page){
                        echo '<span class="span-css">'.$j.'</span>  ';
                    }
                    else{
                        echo '<a class="a-css" href="gallery.php?page='.$j.'">'.$j.'</a>  ';
                    }
                }
                if ($current_page < $total_page && $total_page > 1){
                    echo '<a class="a-css" href="gallery.php?page='.($current_page+1).'">Next</a>  ';
                }
            ?>
            </div>
        </section>
    </main>
<?php require_once('include/footer.php'); ?>
