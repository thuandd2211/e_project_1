<?php
    session_start();
    require_once("../model/module_base.php");
    function select_contact(){
        $conn = connect_db();
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);
        $conn -> close();
        return $result;
    }
    function select_gallery_rv($id){
        $conn = connect_db();
        $sql = "SELECT * FROM gallery WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$gallery_id);
        $gallery_id = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    function insert_cmt($viewer_id_input,$gallery_id_input,$review_input){
        $conn = connect_db();
        $sql = "INSERT INTO rev_event (viewer_id, gallery_id, review) VALUES (?,?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("iis", $viewer_id, $gallery_id, $review);
        $viewer_id = $viewer_id_input;
        $gallery_id = $gallery_id_input;
        $review = $review_input;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    function select_cmt(){
        $conn = connect_db();
        $sql = "SELECT viewer.viewer_username AS name, rev_event.review  AS review, rev_event.date_review AS date FROM rev_event JOIN viewer ON viewer.id = rev_event.viewer_id  AND gallery_id = ? ORDER BY rev_event.id desc";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$gallery_id);
        $gallery_id = $_GET['id'];
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    function check_spam(){
        $conn = connect_db();
        $sql = "SELECT * FROM rev_event WHERE viewer_id = ? AND gallery_id = ? AND review = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("iis",$viewer_id,$gallery_id,$review);
        $viewer_id = $_SESSION['user'][2];
        $gallery_id = $_GET['id'];
        $review = $_POST['comment'];
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
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