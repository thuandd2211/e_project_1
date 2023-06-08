<?php 
    include("../model/dbhelper.php");
    function is_email($str) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    function is_phone($str){
        return (!preg_match('/^[0-9]{10}+$/', $str)) ? FALSE : TRUE ;
    }
    function check_name($str){     
        $conn = connect_db();
        $flag = 0;
        $sql = "SELECT id, name FROM partner WHERE name = ? ";
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
        $sql = "SELECT id, email FROM partner WHERE email = ? ";
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
        $sql = "SELECT id, phone FROM partner WHERE phone = ? ";
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
    $data = array();
    $error = array();
    if (!empty($_POST['submit'])){
        $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
        $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $data['image'] = isset($_POST['image']) ? $_POST['image'] : '';
        if (empty($data['name'])){
            $error['name'] = "Please fill name";
        } else if (check_name($data['name']) === 1){
            $error['name'] = "Partner already exist. Please fill another partner";
        }
        if (empty($data['email'])){
            $error['email'] = "Please fill number";
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
        if (!$error){
            add_partner($data['name'],$data['phone'],$data['email'],$data['logo']);
        }
    }
?>