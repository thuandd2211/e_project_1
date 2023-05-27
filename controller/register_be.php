<?php
    require_once("../model/module_base.php");
    function is_email($str) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    function is_phone($str){
        return (!preg_match('/^[0-9]{10}+$/', $str)) ? FALSE : TRUE ;
    }
    function check_username($str){     
        $conn = connect_db();
        $flag = 0;
        $sql = "SELECT id, username FROM viewer WHERE username = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s",$str);
        $stmt -> execute();
        $result = $stmt -> get_result();
        if ($result -> num_rows > 0){
            $flag = 1;
        }
        return $flag;
        close_db($stmt,$conn);
    }
    function check_email($str){     
        $conn = connect_db();
        $flag = 0;
        $sql = "SELECT id, email FROM viewer WHERE email = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s",$str);
        $stmt -> execute();
        $result = $stmt -> get_result();
        if ($result -> num_rows > 0){
            $flag = 1;
        }
        return $flag;
        close_db($stmt,$conn);
    }
    function check_phone($str){     
        $conn = connect_db();
        $flag = 0;
        $sql = "SELECT id, phone FROM viewer WHERE phone = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s",$str);
        $stmt -> execute();
        $result = $stmt -> get_result();
        if ($result -> num_rows > 0){
            $flag = 1;
        }
        return $flag;
        close_db($stmt,$conn);
    }
    $error = array();
    $data = array();
    if (!empty($_POST['register'])){
        $data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
        $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
        $data['gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';
        $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
        if (empty($data['fullname'])){
            $error['fullname'] = "Bạn chưa nhập tên.";
        }
        if (empty($data['username'])){
            $error['username'] = "Bạn chưa nhập tài khoản.";    
        } else if (check_username($data['username']) === 1){
            $error['username'] = "Tài khoản đã tồn tại, vui lòng nhập tài khoản khác.";
        }
        if (empty($data['password'])){
            $error['password'] = "Bạn chưa nhập mật khẩu.";
        }
        if (empty($data['email'])){
            $error['email'] = "Bạn chưa nhập email.";
        } else if (!is_email($data['email'])){
            $error['email'] = "Email không đúng định dạng.";
        } else if (check_email($data['email']) === 1){
            $error['email'] = "Email đã tồn tại, vui lòng nhập email khác.";
        }
        if (empty($data['phone'])){
            $error['phone'] = "Bạn chưa nhập số điện thoại.";
        } else if (!is_phone($data['phone'])){
            $error['phone'] = "Số điện thoại không đúng định dạng.";
        } else if (check_phone($data['phone']) === 1){
            $error['phone'] = "Số điện thoại đã tồn tại, vui lòng nhập số điện thoại khác.";
        }
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
        if (!$error){
            $conn = connect_db();
            $sql = "INSERT INTO viewer (username, password, name, email, phone) VALUES (?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt -> bind_param("sssss",$username,$password,$fullname,$email,$phone);
            $fullname = $data['fullname'];
            $username = $data['username'];
            $password = $data['password'];
            $email = $data['email'];
            $phone = $data['phone'];
            if ($stmt -> execute() === TRUE){
                header("location: login.php");
            }
            close_db($stmt,$conn);
           
        }
        
    }
?>