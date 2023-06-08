<?php 
    include("../model/dbhelper.php");
    $data = array();
    $error = array();
    if (!empty($_POST['submit'])){
        $data['old_pass'] = isset($_POST['old_pass']) ? $_POST['old_pass'] : '';
        $data['new_pass'] = isset($_POST['new_pass']) ? $_POST['new_pass'] : '';
        if ($data['old_pass'] != $_SESSION['admin'][1]){
            $error['old_pass'] = "Old password is wrong";
        } 
        if ($data['new_pass'] == $_SESSION['admin'][1]){
            $error['new_pass'] = "New password must be different from the old password";
        }
        if (empty($data['old_pass'])){
            $error['old_pass'] = "Please fill old password";
        }
        if (empty($data['new_pass'])){
            $error['new_pass'] = "Please fill new password";
        }
        if (!$error){
            $data['new_pass'] = password_hash($data['new_pass'],PASSWORD_DEFAULT);
            change_password($_SESSION['admin'][3],$data['new_pass']);
        }
    }
?>