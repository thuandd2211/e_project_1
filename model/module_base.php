<?php
    session_start();
    /*  function connect, close */
    function connect_db(){
        $conn = new mysqli('localhost','root','12345678','event_management_1');
        if ($conn->connect_error){
            die ("Ket noi that bai".$conn->connect_error);
        }
        return $conn;
    }
    function close_db($stmt,$conn){
        $stmt->close();
        $conn->close();
    }
    /* function event */
    function select_event_type(){
        $conn = connect_db();
        $sql = "SELECT * FROM event_type";
        $result = $conn -> query($sql);
        $conn -> close();
        return $result;
    }
    function select_intro($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_intro WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('i',$id_input);
        $id_input = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        close_db($stmt,$conn);
        return $result;
    }
    function select_detail_event($id){
        $conn = connect_db();
        $sql = "SELECT event_type.image AS event_image, event_detail.title AS detail_title, 
        event_detail.image AS detail_image, event_detail.id AS detail_id,
        event_detail.script AS detail_script
        FROM event_detail 
        JOIN event_type ON event_type.id = event_detail.event_type_id
        AND event_detail.event_type_id = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_input);
        $id_input = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        close_db($stmt,$conn);
        return $result;
    }
    function select_service($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_service WHERE event_detail_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_input);
        $id_input = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        close_db($stmt,$conn);
        return $result;
    }
    function select_detail($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_detail WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_input);
        $id_input = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        close_db($stmt,$conn);
        return $result;
    }
    function select_food($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_food WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('i',$id_input);
        $id_input = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        close_db($stmt,$conn);
        return $result;
    }
    function select_partner(){
        $conn = connect_db();
        $sql = "SELECT * FROM partner";
        $result = $conn -> query($sql);
        $conn -> close();
        return $result;
    }
    function select_contact(){
        $conn = connect_db();
        $sql = "SELECT * FROM contact";
        $result = $conn -> query($sql);
        $conn -> close();
        return $result;    
    }
    /* function gallery */
    function select_gallery_limit($start_input,$limit_input){
        $conn = connect_db();
        $sql = "SELECT * FROM event_gallery ORDER BY id desc LIMIT ?,?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("ii",$start,$limit);
        $start = $start_input;
        $limit = $limit_input;
        $stmt -> execute();
        $result = $stmt -> get_result();
        close_db($stmt,$conn);
        return $result;
    }
    function select_gallery_all(){
        $conn = connect_db();
        $sql = "SELECT * FROM event_gallery ORDER BY id DESC";
        $result = $conn -> query($sql);
        $conn -> close();
        return $result;
    }
    // /* function review */
    function select_gallery_rv($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_gallery WHERE id = ?";
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
        $sql = "SELECT viewer.username AS name, rev_event.review  AS review, rev_event.date_review AS date FROM rev_event JOIN viewer ON viewer.id = rev_event.viewer_id  AND gallery_id = ? ORDER BY rev_event.id desc";
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
/* function user_infomation */
    function select_viewer($id){
        $conn = connect_db();
        $sql = "SELECT * FROM viewer WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_user);
        $id_user = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
?>