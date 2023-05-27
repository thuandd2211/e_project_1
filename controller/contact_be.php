<?php
    function is_email($str) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    function is_phone($str){
        return (!preg_match('/^[0-9]{10}+$/', $str)) ? FALSE : TRUE ;
    }
    $data = array();
    $error = array();
    if (isset($_POST['contact'])){
        $data['cus_name'] = isset($_POST['cus_name']) ? $_POST['cus_name'] : '';
        $data['cus_phone'] = isset($_POST['cus_phone']) ? $_POST['cus_phone'] : '';
        $data['cus_email'] = isset($_POST['cus_email']) ? $_POST['cus_email'] : '';
        $data['cus_script'] = isset($_POST['cus_script']) ? $_POST['cus_script'] : '';
        if (empty($data['cus_name'])){
            $error['cus_name'] = "Vui lòng nhập họ tên.";
        }
        if (empty($data['cus_phone'])){
            $error['cus_phone'] = "Vui lòng nhập số điện thoại.";
        } else if (!is_phone($data['cus_phone'])){
            $error['cus_phone'] = "Vui lòng nhập đúng số điện thoại.";
        }
        if (empty($data['cus_email'])){
            $error['cus_email'] = "Vui lòng nhập số điện thoại.";
        } else if (!is_email($data['cus_email'])){
            $error['cus_email'] = "Vui lòng nhập đúng số điện thoại.";
        }
        if (!$error){
            $conn = connect_db();
            $sql = "INSERT INTO customer (name, phone, email, description) VALUES (?,?,?,?)";
            $stmt = $conn -> prepare($sql);
            $stmt->bind_param('ssss',$cus_name,$cus_phone,$cus_email,$cus_script);
            $cus_name = $data['cus_name'];
            $cus_phone = $data['cus_phone'];
            $cus_email = $data['cus_email'];
            $cus_script = $data['cus_script'];
            if ($stmt -> execute() === TRUE){
                $data['suscess'] = "Thông tin của quý khách đã được gửi đi, chúng tôi sẽ liên hệ trong thời gian sớm nhất.";
            }
        }
    }

?>