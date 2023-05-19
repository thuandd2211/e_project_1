<?php require_once('../controller/company_be.php');
    session_start();
    $section = array();
    for ($i = 1; $i <= 4; $i ++){
        $section[$i] = select_company($i);
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
    $result_partner = select_partner();
    if ($result_partner -> num_rows > 0){
        while ($row_partner = $result_partner -> fetch_assoc()){
            $img_partner[] = $row_partner['partner_logo'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
	<title>Tiệc doanh nghiệp</title>
	<link rel="stylesheet" href="css/company.css">
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
       <img src="./images/company/<?php echo $image[1][0]; ?>" class="d-block w-100"  alt="...">
    </section>
    <div id="clear"></div>

    <section id="section_2" class="container">
        <h1><?php echo $title[2][0]; ?></h1>
        <p><?php echo $script[2][0]; ?></p>
        <ul>
            <?php
                for($j=1;$j < count($script[2]);$j++){
                    echo "
                        <li>{$script[2][$j]}</li>
                    ";
                }
            ?>
        </ul>
        <!-- <ul>
            <li>Các sảnh sự kiện đậm tính thẩm mỹ với hệ thống âm thanh – ánh sáng – tiện ích tối tân cho mọi sáng tạo</li>
            <li>Khả năng tư vấn – hoạch định – triển khai các loại hình set-up chuyên dụng</li>
            <li>Lựa chọn F&B và ẩm thực cao cấp để nhà tổ chức mang đến những trải nghiệp tốt nhất cho khách mời.</li>
            <li>Sự linh hoạt của đội ngũ nhân viên, định hướng đến những trải nghiệm cao cấp</li>
        </ul> -->
    </section>

    <div id="clear"></div>

    <section id="section_3" class="container">
        <div class="container text-center" id="section_3_1">
            <h1><?php echo $title[3][0]; ?></h1>
        </div>
        <br>
        <div id="section_3_2" class="row container-fluid">
                <?php 
                    for ($j = 0; $j < count($image[3]); $j ++){
                        echo "
                            <div class='col-4 container-fluid hover01'  style='position: relative;'>
                                <figure><img src='images/company/{$image[3][$j]}'></figure>
                                <br>
                                <h5 class='container text-center'>{$sub_title[3][$j]}</h5>
                                <p>{$script[3][$j]}</p>
                            </div>
                        ";
                    }
                ?>
            </div>
    </section>

    <div id="clear"></div>

    <section id="section_4">
        <div class="container text-center pt-5">
            <h1><?php echo $title[4][0]; ?></h1>
        </div>
        <section id="section_4_1" class="container"> 
           <div class="row container-fluid">
                <div class="col-6 hover01" style="position: relative;">
                    <figure><img src="images/company/<?php echo $image[4][0]; ?>"></figure>
                </div>
                <div class="col-6">
                    <h2><?php echo $sub_title[4][0]; ?></h2>
                    <p><?php echo $script[4][0]; ?></p>
                 </div>
            </div>
        </section>
        <section id="section_4_2" class="container">
            <div class="row container-fluid">
                <div class="col-6 hover01" style="position: relative;">
                    <h2><?php echo $sub_title[4][1]; ?></h2>
                    <p><?php echo $script[4][1]; ?></p>
                </div>
                <div class="col-6 hover01" style="position: relative;">
                    <figure><img src="images/company/<?php echo $image[4][1]; ?>"></figure>
                </div>
                    </div>
                </section>
        <section id="section_4_3" class="container">
            <div class="row container-fluid">
                <div class="col-6 hover01" style="position: relative;"> 
                    <figure><img src="images/company/<?php echo $image[4][2]; ?>"></figure>
                </div>
                <div class="col-6">
                    <h2><?php echo $sub_title[4][2]; ?></h2>
                    <p><?php echo $script[4][2]; ?></p>
                </div>
            </div>
        </section>
        <section id="section_4_4" class="container">
            <div class="row container-fluid">
                <div class="col-6">
                    <h2><?php echo $sub_title[4][3]; ?></h2>
                    <p><?php echo $script[4][3]; ?></p>
                </div>
                <div class="col-6 hover01" style="position: relative;">
                    <figure><img src="images/company/<?php echo $image[4][3]; ?>"></figure>
                </div>
            </div>
        </section>
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