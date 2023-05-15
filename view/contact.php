<?php
    require_once('../controller/contact_be.php');
        session_start();
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
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Liên hệ</title>
</head>
<body>
    <?php require_once('../view/include/header.php'); ?>
    <div id="clear"></div>
    <main>
         <section id="section_1" class="container">
            <div class="row">
                <h1>LIÊN HỆ</h1>
                <div class="col-6" id="section_1_1">
                    <form action="" method="post">
                        <input type="text" name="cus_name" placeholder="Họ Tên" class="cus_info">
                        <p style="color:red; padding-left: 5px;"><?php echo isset($error['cus_name']) ? $error['cus_name'] : ''; ?></p>
                        <input type="text" name="cus_phone" placeholder="Số điện thoại" class="cus_info" minlength="10" maxlength="11">
                        <p style="color:red; padding-left: 5px;"><?php echo isset($error['cus_phone']) ? $error['cus_phone'] : ''; ?></p>
                        <input type="text" name="cus_email" placeholder="Email" class="cus_info">
                        <p style="color:red; padding-left: 5px;"><?php echo isset($error['cus_email']) ? $error['cus_email'] : ''; ?></p>
                        <textarea name="cus_script" placeholder="Nội dung" class="cus_script"></textarea>
                        <input type="submit" name="contact" value="Gửi đi" class="submit">
                        <?php
                            if (isset($data['suscess'])){
                                echo "<p class='suscess'>{$data['suscess']}</p>";
                            }
                            else {
                                echo '';
                            }
                        ?>
                        
                    </form>
                </div>  
                <div class="col-6" id="section_1_2"> 
                    <h2 style="color: rgb(226, 36, 36)">TRÀNG AN PLAZA</h2>
                    <p>Quý khách có nhu cầu tổ chức sự kiện, tiệc cưới, doanh nghiệp, tiệc cá nhân vui lòng liên hệ bên dưới </p>
                    <br>
                    <p>Address: <?php echo $address[0]; ?></p>
                    <p>Phone: <?php echo $phone[0];  ?></p>
                    <p>Email: <?php echo $email[0]; ?></p>
                </div> 
            </div> 
        </section>

    </main>
    <div id="clear"></div>
<?php require_once('../view/include/footer.php'); ?>

</body>
</html>