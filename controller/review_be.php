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
    function select_gallery($id){
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
    function insert_cmt(){
        $conn = connect_db();
        $sql = "INSERT INTO rev_event (viewer_id, gallery_id, review) VALUES (?,?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("iis", $viewer_id, $gallery_id, $review);
        $viewer_id = $_SESSION['user'][2];
        $gallery_id = $_GET['id'];
        $review = $_POST['comment'];
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    function select_cmt(){
        $conn = connect_db();
        $sql = "SELECT viewer.viewer_username AS name, rev_event.review  AS review, rev_event.date_review AS date FROM rev_event JOIN viewer ON viewer.id = rev_event.viewer_id  AND gallery_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$gallery_id);
        $gallery_id = $_GET['id'];
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    if (isset($_POST['submit'])){
        $error = array();
        if (isset($_SESSION['user'])){
            if (!empty($_POST['comment'])){
                $error['comment'] = "Bạn chưa nhập nội dung.";
            } else {
                insert_cmt();
            }
        } else {
            header("location: login.php");
        }
    }    

?>