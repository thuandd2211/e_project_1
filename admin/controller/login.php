<?php
    session_start();
    require_once("../model/dbhelper.php");
    $data = array();
    $error = array();
    function check_username($str){     
        $conn = connect_db();
        $sql = "SELECT * FROM admin WHERE username = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s",$str);
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    if (!empty($_POST['submit'])){
        $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
        $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
        $result = check_username($data['username']);
        if ($result -> num_rows > 0){
            while ($row = $result -> fetch_assoc()){
                if (!password_verify($data['password'], $row['password'])) {
                    $error['password'] = "Incorrect Password";
                } 
                $data['id'] = $row['id'];
                $data['name'] = $row['fullname'];
            }
        } else {
            if (empty($data['password'])){
                $error['password'] = "Please fill password";
            }
            if (empty($data['username'])){
                $error['username'] = "Please fill username";
            } else {
                $error['username'] = "Incorrect Username";
            }
        }
        if (!$error){
            $_SESSION['admin'] = array($data['username'], $data['password'],$data['name'], $data['id']);
                header("location: ../view/index.php");
            }
            
    } 


?>