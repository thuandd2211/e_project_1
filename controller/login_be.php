<?php
    session_start();
    require_once("../model/module_base.php");
    $flag = 0;
    $data = array();
    $error = array();
    function check_username($str){     
        $conn = connect_db();
        $flag = 0;
        $sql = "SELECT id,role_id, viewer_username,viewer_password, viewer_name FROM viewer WHERE viewer_username = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s",$str);
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    if (!empty($_POST['login'])){
        $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
        $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
        $result = check_username($data['username']);
        if ($result -> num_rows > 0){
            while ($row = $result -> fetch_assoc()){
                if (!password_verify($data['password'], $row['viewer_password'])) {
                    $error['password'] = "Sai mật khẩu, vui lòng nhập lại.";
                } 
                if ($row['role_id'] == 1){
                    $flag = 1;
                }
                $data['name'] = $row['viewer_name'];
                $data['id'] = $row['id'];
            }
        } else {
            if (empty($data['password'])){
                $error['password'] = "Bạn chưa nhập mật khẩu.";
            }
            if (empty($data['username'])){
                $error['username'] = "Bạn chưa nhập tài khoản.";
            } else {
                $error['username'] = "Sai tài khoản, vui lòng nhập lại.";
            }
        }
        if (!$error){
            $_SESSION['user'] = array($data['username'], $data['password'], $data['id'], $data['name']);
            if (isset($_SESSION['id_rev'])){
                header("location: review.php?id=".$_SESSION['id_rev']);
            } else if ($flag == 1 ){
                header("location: admin.php");
            } else {
                header("location: home.php");
            }
            
        } 
    }

?>