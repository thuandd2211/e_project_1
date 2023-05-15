<?php
    require_once("../model/module_base.php");
    function select_contact(){
        $conn = connect_db();
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);
        $conn -> close();
        return $result;
    }
    function select_about_us($id){
        $conn = connect_db();
        $sql = "SELECT * FROM about_us_display WHERE about_us_display_title_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$about_id);
        $about_id = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    
?>