    <?php require_once('include/header.php'); ?>


    <main>
        <section id="section_1">
            <div id="carousel-intro" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carousel-intro" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carousel-intro" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carousel-intro" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/home/wedding_3.jpg" class="d-block w-100"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/home/wedding_2.png" class="d-block w-100"  alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/home/wedding_1.jpg" class="d-block w-100 " alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-intro" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-intro" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
              </div>
        </section>
        <section id="section_2" class="container">
            <img class="d-flex justify-content-center" src="images/home/wedding_7.png" alt="">
            <p>Tràng An Palace là đại diện tiêu biểu khi nhắc đến điểm đón đầu những làn gió xu hướng sự kiện tại khu vực phía Tây Hà Thành. Thoát khỏi thiết kế mặc định cứng nhắc của các trung tâm hội nghị, dấu ấn kiến trúc mang đậm tính chiết trung với công năng hiện đại. Nơi đây trở thành tọa độ gặp gỡ của nét đẹp cũ – mới, tinh tế – sang trọng, cổ điển – náo nhiệt, nhưng vẫn được “kèm cặp” trong những quy tắc thống nhất về bản sắc. <br>
                Tổng hòa cùng với đó là những giá trị dịch vụ cốt lõi nằm ở yếu tố con người, mang đến trải nghiệm ẩm thực, phong thái phục vụ, khả năng điều phối sự kiện đẳng cấp. Điều này cho phép những dòng chảy sự kiện trải qua đa dạng điểm chạm lý thú, choáng ngợp khi đến với Tràng An Palace.
            </p>
        </section>
        <section id="section_3" class="container">
            <h1>DỊCH VỤ SỰ KIỆN</h1>
            <div class="row">
                <?php 
                    for ($i=0;$i < (select_event_type()->num_rows) ;$i++){
                        $result_detail = select_detail(($i+1));
                        if ($result_detail -> num_rows > 0){
                            while ($row_detail = $result_detail -> fetch_assoc()){
                                echo "
                                    <div class='col-6 hover01 mb-4' style='position: relative;'>
                                        <figure class='home_section_3_figure'><img src='images/{$row_detail['image']}' class='figure_img home_section_3_img';' ></figure>
                                    </div>
                                    <div class='col-6 p-5'>
                                        <h2>{$row_detail['title']}</h2>
                                        <p>{$row_detail['script']}</p>
                                    </div>
                                ";
                            }
                        }

                    }
                ?>

            </div>
        </section>
        <section id="section_4" class="container">
            <div class="container text-center" id="section_4_1">
                <h1>DẤU ẤN TRÀNG AN PALACE</h1>
            </div>
            <br>
            <div id="section_4_2" class="row container-fluid">
                <div class='col-4 container-fluid hover01'  style='position: relative;'>
                    <figure><img src='images/home/architecture.jpg'></figure>
                    <br>
                    <h5 class='container text-center'>KIẾN TRÚC TÂN CỔ ĐIỂN</h5>
                    <p>Khung dáng đắp đá marble, phân bổ thêm những đường cong uốn cạnh, các sảnh tiệc lộ diện theo cá tính không trùng lặp. Tràng An Palace không che giấu ý định tạo nên ấn tượng choáng ngợp cho bất kỳ ai ghé qua.</p>
                </div>
                <div class='col-4 container-fluid hover01'  style='position: relative;'>
                    <figure><img src='images/home/service_1.jpg'></figure>
                    <br>
                    <h5 class='container text-center'>DỊCH VỤ THẤU HIỂU</h5>
                    <p>Các dịch vụ tiệc và hội nghị trọn gói theo chuẩn mực cao cấp, chỉn chu cùng mức chi phí hợp lý giúp giảm tải gánh nặng tổ chức, cho phép bạn tập trung hơn ở việc trải nghiệm và tận hưởng</p>
                </div>
                <div class='col-4 container-fluid hover01'  style='position: relative;'>
                    <figure><img src='images/home/food_1.jpg'></figure>
                    <br>
                    <h5 class='container text-center'>DẤU ẤN ẨM THỰC</h5>
                    <p>Các thực đơn tiệc buffet, tiệc tea-break, tiệc set-menu hay thực đơn tự chọn hài hòa trong cách kết hợp món, dễ tiếp cận đến khẩu vị bản địa nhưng vẫn đủ biến tấu làm thực khách bật lên lời khen tấm tắc.</p>
                </div>
            </div>
        </section> 
        <section id="section_5" class="container">
            <h1>ĐỐI TÁC</h1>
            <div class="row container-fluid">
                <?php 
                    $result_partner = select_partner();
                    if ($result_partner -> num_rows > 0){
                        while ($row_partner = $result_partner -> fetch_assoc()){
                            echo "
                                <div class='col align-items-lg-center'>
                                    <img class='home_section_5_img' src='images/{$row_partner['logo']}' >
                                </div>
                            ";
                        }
                    }
                ?>
            </div>
        </section>
    </main>
    <?php require_once('include/footer.php'); ?>
