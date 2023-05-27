<?php 
    if (isset($_POST['submit'])){
        $error = array();
        if (isset($_SESSION['user'])){
            if (empty($_POST['comment'])){
                $error['comment'] = "Bạn chưa nhập nội dung.";
            } 
            if (!$error){
                if (check_spam() -> num_rows <= 0){
                    insert_cmt($_SESSION['user'][2],$_GET['id'],$_POST['comment']);
                }
                
            }
        } else {
            $_SESSION['id_rev'] = $_GET['id'];
            header("location: login.php");
        }
    }  
?>