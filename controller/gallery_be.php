<?php
    require_once("../model/module_base.php");
    function select_contact(){
        $conn = connect_db();
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);
        $conn -> close();
        return $result;
    }
    function select_gallery_limit($start_input,$limit_input){
        $conn = connect_db();
        $sql = "SELECT * FROM gallery ORDER BY id desc LIMIT ?,?";
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
        $sql = "SELECT * FROM gallery ORDER BY id desc";
        $result = $conn -> query($sql);
        $conn -> close();
        return $result;
    }
?>