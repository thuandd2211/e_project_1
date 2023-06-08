<?php
    require_once("../model/dbhelper.php");
    function is_email($str) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    function is_phone($str){
        return (!preg_match('/^[0-9]{10}+$/', $str)) ? FALSE : TRUE ;
    }
    function check_username($str){     
        $conn = connect_db();
        $flag = 0;
        $sql = "SELECT id, username FROM admin WHERE username = ? ";
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
        $sql = "SELECT id, email FROM admin WHERE email = ? ";
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
        $sql = "SELECT id, phone FROM admin WHERE phone = ? ";
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
    if (!empty($_POST['submit'])){
        $data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
        $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
        $data['address'] = isset($_POST['address']) ? $_POST['address'] : '';
        $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
        if (empty($data['fullname'])){
            $error['fullname'] = "Please fill fullname";
        }
        if (empty($data['address'])){
            $error['address'] = "Please fill address";
        }
        if (empty($data['username'])){
            $error['username'] = "Please fill username";    
        } else if (check_username($data['username']) === 1){
            $error['username'] = "Username already exist, please fill another username";
        }
        if (empty($data['password'])){
            $error['password'] = "Please fill password";
        }
        if (empty($data['email'])){
            $error['email'] = "Please fill email";
        } else if (!is_email($data['email'])){
            $error['email'] = "Please fill correct email";
        } else if (check_email($data['email']) === 1){
            $error['email'] = "Email already exist, please fill another email";
        }
        if (empty($data['phone'])){
            $error['phone'] = "Please fill number";
        } else if (!is_phone($data['phone'])){
            $error['phone'] = "Please fill correct number";
        } else if (check_phone($data['phone']) === 1){
            $error['phone'] = "Number already exist, please fill another number";
        }
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
        if (!$error){
            $conn = connect_db();
            $sql = "INSERT INTO admin (username, password, fullname, email, phone,address) VALUES (?,?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt -> bind_param("ssssss",$username,$password,$fullname,$email,$phone,$address);
            $fullname = $data['fullname'];
            $username = $data['username'];
            $password = $data['password'];
            $email = $data['email'];
            $phone = $data['phone'];
            $address = $data['address'];
            if ($stmt -> execute() === TRUE){
                $data['success'] = "Account add success";
            }
            close_db($stmt,$conn);
           
        }
        
    }
?>