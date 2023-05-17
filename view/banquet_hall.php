<?php require_once('../controller/banquet_hall_be.php');
    session_start();
    $result = select_db();
    if ($result !== false && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name[] = $row['home_display_name'];
            $script[] = $row['home_display_script'];
            $other[] = $row['home_display_other'];
            $img[] = $row['home_display_image'];
        }
    }
    
    $result_partner = select_partner();
    if ($result_partner !== false && $result_partner->num_rows > 0) {
        while ($row_partner = $result_partner->fetch_assoc()) {
            $image[] = $row_partner['partner_logo'];
        }
    }
    
    $result_contact = select_contact();
    if ($result_contact !== false && $result_contact->num_rows > 0) {
        while ($row_contact = $result_contact->fetch_assoc()) {
            $phone[] = $row_contact['phone'];
            $address[] = $row_contact['address'];
            $email[] = $row_contact['email'];
        }
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sảnh tiệc</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/banquet_hall.css">
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
            <div id="carousel-intro" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/banquet_hall_1.jpg" class="blockd w-10"  alt="...">
                <h1 class="section-title section-title-center"> SẢNH TIỆC - TRÀNG AN PLAZA TÂN PHÚ</h1>
                <h2>BIẾN HÓA TRONG TỪNG</h2>
                <h2>CHI TIẾT</h2> 
                <div class="centered">
                <p>Được tạo dựng theo phong cách kiến trúc chiết chung sự giao thoa của nhiều nguồn cảm hứng kết hợp là chất định tính đặc trưng tạo nên phong cách</p> 
                <p>của Asiana Plaza Tân Phú. Bao phủ các sảnh sự kiện là sự giàu có của các chi tiết, hình khối hoa văn chạm khắc không trùng lặp. Tiếp đó, hình ảnh phản</p>
                <p>chiếu từ nền đá marble, hệ đèn pha lê còn tạo nên lớp ánh sáng đổ bóng phân bố uyển chuyển chiếu rọi những tác phẩm điêu khắc mang giá trị cao.</p>
                <p>Có thể thấy Asiana Plaza Tân Phú là một địa điểm đầy phong thái cho buổi tiệc chiêu đãi và sự kiện của bạn.</p>
                <p>Cùng với đó, hệ thống trang thiết bị âm thanh, ánh sáng, tiện ích vận hành cùng khả năng điều phối, sắp xếp đa dạng các loại hình set-up chính là những nhân tố quyết định làm nên sự nổi bật của địa điểm.</p>
                <h1>VÌ SAO CHỌN CHÚNG TÔI</h1>
                </div>
        </section>
        <div id="clear"></div>

        <section id="section_2" class="container">
            <div class="row">
                <div class="col-4">
                    <img src="images/banquet_hall_2.png" class="img-fluid " alt="">
                    <p>KHÔNG GIAN ĐA CHỨC NĂNG VỚI 8 SẢNH TIỆC ĐA DẠNG TỪNG SẢNH</p>
                    
                </div>
                <div class="col-4">
                    <img src="images/banquet_hall_3.png" class="img-fluid " alt="">
                    <p>HỆ THỐNG SẢNH VÀ SẢNH CHỜ RIÊNG BIỆT TẠO KHÔNG GIAN RIÊNG TƯ</p>
            
                </div>
                <div class="col-4">
                    <img src="images/banquet_hall_4.png" class="img-fluid " alt="">
                    <p>ĐỘI NGŨ HÀNG TRĂM NHÂN SỰ CÓ KHẢ NĂNG PHỤC VỤ CÙNG LÚC 3000 KHÁCH</p>
                    
                </div>
        <section id="section_3" class="container">      
        <div class="row">
                <div class="col-4">
                    <img src="images/banquet_hall_5.jpg" class="img-fluid " alt="">
                    <p>HỆ THỐNG ÂM THANH ÁNH SÁNG CAO CẤP</p>
                </div>
                <div class="col-4">
                    <img src="images/banquet_hall_6.jpg" class="img-fluid " alt="">
                    <p>MÀN HÌNH LED HIỆN ĐẠI</p>
                </div>
                <div class="col-4">
                    <img src="images/banquet_hall_7.jpg" class="img-fluid " alt="">
                    <p>TRANG THIẾT BỊ TIÊU CHUẨN 5 SAO</p>
                </div>
                <h1>KHÁM PHÁ</h1>
        </div>
        <section id="section_4" class="container"> 
        <div class="row">
                <div class="col-12">   
                    <img src="images/banquet_hall_8.jpg"  alt="Ảnh minh họa">
                    <img src="images/banquet_hall_9.jpg"  alt="Ảnh minh họa">

    </div>
    </main>
    <div id="clear"></div>
    <?php require_once('../view/include/footer.php'); ?>

</body>
</html>
    

   

