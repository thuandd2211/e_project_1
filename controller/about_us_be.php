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
        $sql = "SELECT about_us_title.about_us_title as title, about_us_script.about_us_script as script, about_us_script.about_us_image as image FROM about_us_title JOIN about_us_script ON about_us_script.about_us_title_id = about_us_title.id WHERE about_us_script.about_us_title_id = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$about_id);
        $about_id = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    
?>